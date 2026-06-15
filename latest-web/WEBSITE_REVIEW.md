# Arihant Travel — Website Review & Forward Management Plan

Reviewer: Engineering review pass
Site: arihantlink.com
Stack observed: Hand-written PHP 7+/8.x, Bootstrap 5, jQuery 3.6, FontAwesome 5, PHPMailer (Composer), Apache + .htaccess, MySQL (Hostinger)
Scope: 131 PHP pages at root, 23 blog pages, ~328 MB of images, custom .htaccess routing, GA4, schema-rich SEO

---

## 1. Executive Summary

The site has clearly had thoughtful manual SEO work — schema markup, hreflang, llms.txt, OG/Twitter tags, sitemap, 301 redirect map, clean URLs and a strong, focused brand positioning ("Jain & Vegetarian Travel Agency"). That foundation is good.

The main risks are not visual; they sit in three areas:

1. **Security** — credentials in source code, no CSRF/CAPTCHA, debug data leaking from API responses, and a few stale dev files reachable on the internet. These are fixable in days, not weeks.
2. **Performance** — image weight is the single biggest drag. 45 images over 1 MB, two over 14 MB. CSS/HTML is fine.
3. **Manageability** — every tour page is a hand-edited 30 KB PHP file. Updating prices, inclusions or a footer link is a 130-file find-and-replace today. This is the biggest threat to "moving forward" because every business change becomes a code change.

I've ranked recommendations P0/P1/P2 below. The P0 list is short and should be done this week.

---

## 2. Security Review

### 2.1 P0 — Fix this week

**Hard-coded database & SMTP credentials in source**
- `includes/db-config.php` contains the live MySQL host, user, db name and password as literals.
- `includes/send-contact-email.php` and `includes/send-email.php` repeat the same password for SMTP.
- The same password (`MiniMoksha@1509`) is used for DB *and* mail. If the file leaks anywhere — backup, wrong git push, hosting panel snapshot — both systems are compromised.

Remediation:
- Rotate the password immediately on Hostinger (DB user + email account). Use two distinct passwords.
- Move secrets out of code into a non-web-accessible `.env` file (one level above `public_html` if the host allows, otherwise outside the document root). Read with a tiny loader, e.g. `parse_ini_file('/home/u166882835/.env')`.
- Confirm `.env` is excluded from any future git repo (`.gitignore`).
- Search for and delete any historical backups containing the credentials (more on backups below).

**Sensitive backup & diagnostic files exposed**
- `css/style.css.bak`
- `almaty-short-break-3n4d.php.bak`
- `blog/test.php`, `blog/diagnostic.php`

The `.htaccess` `FilesMatch` blocks `.bak` extensions, but `test.php` and `diagnostic.php` are reachable. Delete them all.

**Debug data leaked through the contact API**
`includes/send-contact-email.php` returns a `debug` array with absolute file paths, PHP versions and SMTP host details on errors, and uses `Access-Control-Allow-Origin: *`. Any third-party site can call your endpoint, and any failure dumps internals.

Remediation:
- Strip the `debug_steps` array from production responses (keep them in `error_log` only).
- Remove `Access-Control-Allow-Origin: *`. Either drop CORS entirely (the form is same-origin) or limit to `https://arihantlink.com`.
- Disable the "DIRECT access" message that confirms how the endpoint works to attackers.

**No CSRF / no CAPTCHA / no rate limiting**
- `contact.php`, `register.php`, `login.php` and the package enquiry form accept any POST.
- Login has no failed-attempt lockout, so it can be brute-forced.
- The contact endpoint can be hammered to spam your inbox (and exhaust SMTP quota on Hostinger).

Remediation (P0):
- Add a Google reCAPTCHA v3 (or hCaptcha) to all four forms. v3 is invisible to good users.
- Add a per-session CSRF token (`bin2hex(random_bytes(32))` in session, hidden field, compared on POST).
- Add a simple IP rate limit: store last-N attempts in a small `login_attempts` table or in a flat file in a non-public dir. Block after 5 failures in 15 minutes.

**Aggressive `.htaccess` SQL injection rule will break legitimate URLs**
```
RewriteCond %{QUERY_STRING} (\%27)|(')|(--)|(\%23)|(#) [NC,OR]
RewriteCond %{QUERY_STRING} (UNION|SELECT|INSERT|...) [NC]
```
This rule treats the literal characters `'`, `--` and `#` in any query string as malicious. The word `INSERT` or `SELECT` in any URL parameter (e.g. a search box, a tracking parameter, an Instagram referrer) will return 403. It also gives a false sense of security because you're using PDO prepared statements — the right defence.

Remediation: remove this rule. Keep the prepared statements (which you already use correctly in `login.php` and `register.php`).

### 2.2 P1 — Within 30 days

- **Session cookies:** add at the very top of `header.php` (before `session_start()`):
  ```php
  session_set_cookie_params([
    'lifetime' => 0, 'path' => '/', 'domain' => 'arihantlink.com',
    'secure' => true, 'httponly' => true, 'samesite' => 'Lax'
  ]);
  ```
- **Password policy** in `register.php`: minimum 10 characters, require mixed case + digit. Re-hash on any login if the current `PASSWORD_DEFAULT` algo changed.
- **`error_reporting(E_ALL)` with `display_errors=0`** is fine, but add a global PHP `error_log` path outside the document root and rotate it monthly.
- **Add security headers** (extend the existing `<IfModule mod_headers.c>` block in `.htaccess`):
  - `Strict-Transport-Security: max-age=31536000; includeSubDomains; preload` (after you're sure HTTPS is rock-solid)
  - `Permissions-Policy: geolocation=(), microphone=(), camera=()`
  - `Content-Security-Policy` — start in *Report-Only* mode for a week before enforcing. Allowlist: `'self'`, `https://www.googletagmanager.com`, `https://fonts.googleapis.com`, `https://fonts.gstatic.com`, `https://use.fontawesome.com`, `https://cdn.jsdelivr.net`, `https://ajax.googleapis.com`. The volume of inline `<script>` and inline `style=` will require `'unsafe-inline'` initially — plan to remove that as part of Section 4.
- **Email sanitization order** in `send-contact-email.php`: you `htmlspecialchars()` then `FILTER_SANITIZE_EMAIL` then `FILTER_VALIDATE_EMAIL`. Drop the `htmlspecialchars` for email — it can convert valid characters and make valid emails fail validation. Keep the validate step.
- **Lock down `/includes/`:** add `Require all denied` for direct PHP file access from `/includes/*.php` *except* `send-contact-email.php` and `send-email.php`. Currently anyone can hit `/includes/db-config.php` (it produces no useful output, but probing reveals stack info on errors).

### 2.3 P2 — Nice to have

- Move to a managed contact form (Formspree, Web3Forms) if you don't want to maintain SMTP. Removes credentials from your code entirely.
- 2FA on the Hostinger control panel and on `shweta@arihantlink.com`.
- Run `composer audit` monthly on `includes/composer.lock`.

---

## 3. Performance Review

### 3.1 The dominant problem: image weight

```
img/                           328 MB
  files > 1 MB                 45
  files > 500 KB              148
  largest single file        15 MB  (yacht/75ft Yacht/...jpg)
  second largest             14 MB  (excursion/dubai-dolphinarium-3.jpg)
  carousel-1.jpg              5.4 MB
  carousel-5.jpg              4.5 MB
  img/backup/                 ~6 MB of duplicate WebPs
```

A 5 MB hero image on mobile is a 5–8 second LCP on a 4G connection — and that's after every other optimisation you've already done (preconnect, font-display swap, deferred FontAwesome).

P0:
1. **Delete `img/backup/`.** It serves no production purpose.
2. **Compress / convert every JPG/PNG over 200 KB to WebP** (and AVIF for hero images). Target sizes:
   - Hero/carousel: ≤ 200 KB (1920w) and ≤ 100 KB (768w mobile variant).
   - Card thumbnails: ≤ 60 KB.
   - Detail/gallery: ≤ 250 KB.
   Tools: `cwebp -q 80`, `avifenc`, or run a one-off with `sharp`/ImageMagick. Hostinger also has built-in image optimisation in some plans.
3. **Use `<picture>` with WebP + AVIF + JPEG fallback**, instead of swapping URLs at the markup level. You already preload `carousel-2-mobile.webp` vs `carousel-2.webp` — extend that pattern.

P1:
4. **Audit `loading="lazy"`.** You have 559 `<img>` tags but only 66 use lazy loading. Every off-screen image (gallery, related products, footer banners, package cards below the fold) should have `loading="lazy"` and `decoding="async"`. The first viewport image — and only that one — should keep `fetchpriority="high"`.
5. **Set `width` and `height` on every `<img>`** to prevent CLS (cumulative layout shift). Many of your card images don't.
6. **Move heavy JS off the critical path.** `bootstrap.bundle.min.js` includes Popper. If you use only the Navbar collapse + dropdowns, switch to `bootstrap.min.js` (no Popper) and add Popper via `defer` only where dropdowns need it. jQuery is loaded but Bootstrap 5 doesn't need it; remove jQuery unless `main.js`/`navigation.js` depend on it (worth checking — the "easing" and "waypoints" libs imply yes).
7. **Self-host fonts** — three families (Jost, Roboto, Prompt) is a lot. Drop Roboto if it's not visibly used; subset Jost to 500/600 only; subset Prompt to 400/500/700. Self-hosted `woff2` saves 2 round-trips against `fonts.gstatic.com`.

P2:
8. Enable Hostinger's CDN/static cache or front the site with Cloudflare (free plan): adds Brotli, edge caching, image resizing (Polish/Mirage on Pro) and rate-limiting — all of which solve other problems on this list at the same time.
9. Consider deferring the GA4 snippet by 2–3 seconds with `setTimeout` or a "consent / first interaction" trigger; it's currently the second `<script>` in `<head>`.

### 3.2 Quick wins to measure before/after

Run a Lighthouse + WebPageTest baseline today (mobile, 4G) on:
- `/` (home)
- `/desert-safari`
- `/40ft-yacht-charter`
- `/uae-visa`
- `/blog`

Target: LCP ≤ 2.5 s, CLS ≤ 0.1, INP ≤ 200 ms, total page weight ≤ 1 MB.

---

## 4. Code Architecture & Manageability

This is the most strategic section. The site works today but is built in a way that makes every change disproportionately expensive.

### 4.1 Symptoms

- 131 PHP files at the project root, many 25–80 KB.
- Tour packages duplicate each other 80%+ (compare `bali-blissful-4n5d.php`, `bali-fully-loaded-5n6d.php`, `bali-honeymoon-special-5n6d.php` — they only differ in itinerary, price, inclusions).
- 127 PHP files contain inline `style=""`. CSS variables exist (`:root` in `style.css`) but get overridden inline.
- `.bg-primary` in `style.css` is `#3A7CA4` while `--primary` is `#13357B`. They disagree. The `--bs-secondary-rgb` triple is `245, 210, 125` (yellow) but `--bs-secondary` itself is `#2596be` (cyan). The brand palette is defined three times and inconsistent.
- Two CSS files maintained separately: `css/style.css` and `blog/blog.css`.
- One global font block declares `!important` on six element types — making themable overrides almost impossible later.
- Test/diagnostic PHP files in `blog/`.
- No build process, no version control evident in the folder.

### 4.2 The single most valuable refactor: data-driven tour pages

Replace the per-tour PHP files with **one template + one data source.** Pattern:

```
/data/packages/dubai-winter-escape.json       <- editable content
/data/packages/baku-3n4d.json
/data/packages/_schema.json                    <- field definitions
/templates/package.php                         <- single PHP renderer
```

`.htaccess` then maps `/dubai-winter-escape` → `/templates/package.php?slug=dubai-winter-escape`.

A package JSON might look like:
```json
{
  "slug": "dubai-winter-escape",
  "title": "Dubai Winter Escape — 5N6D",
  "duration_nights": 5,
  "duration_days": 6,
  "price_inr_from": 49999,
  "price_aed_from": 2199,
  "hero_image": "img/dubai/winter-escape-hero.webp",
  "highlights": ["BAPS Hindu Mandir Abu Dhabi", "Pure-veg Jain meals", "..."],
  "itinerary": [
    {"day": 1, "title": "Arrival in Dubai", "desc": "..."},
    ...
  ],
  "inclusions": [...], "exclusions": [...], "faqs": [...]
}
```

What this buys you:
- Updating a price is a 1-line JSON edit instead of 30 KB of HTML.
- New package = copy a JSON, add a hero image, done. Days of work become minutes.
- The same data feeds the homepage card, the package landing page, the schema/JSON-LD, and the OG/Twitter tags. **No more drift between page title, schema and visible H1.**
- Sitemap can be generated automatically by iterating the data folder.

You can phase this in: start with one category (e.g. all 7 yacht charter pages), prove it, then migrate Dubai packages, then international.

### 4.3 CSS / design system

- Pick **one** brand palette and define it once. Suggested (from your existing values):
  - `--primary: #13357B` (deep navy — your logo blue)
  - `--secondary: #2596be` (teal accent)
  - `--accent: #4CAF50` (CTA green / WhatsApp)
  - `--neutral-100..900` greyscale ramp
- Update `--bs-primary-rgb`, `--bs-secondary-rgb` to actually match.
- Stop overriding `.bg-primary` to a different colour than `--primary`.
- Sweep `style="..."` out of the 127 files. Replace with utility classes (`mb-3`, `text-primary`) or named component classes (`hero-banner`, `package-card`). This will let you ship a redesign in one CSS file instead of 131.
- Consolidate `blog/blog.css` into `style.css` (or split into `core.css` + `blog.css` and load both everywhere — cached anyway).
- Keep `style.min.css` as the production file; add a single command (`npx clean-css-cli style.css -o style.min.css`) so they don't drift.

### 4.4 Templating & PHP hygiene

- You already have `includes/header.php`, `includes/footer.php`, `includes/breadcrumb.php`, `includes/enquiry-form.php`. Push more shared blocks here:
  - `includes/package-card.php`
  - `includes/itinerary-block.php`
  - `includes/inclusions-list.php`
- Move all `$pageTitle` / `$pageDescription` / `$pageCanonical` / `$schemaMarkup` setup into a single helper that takes a package slug and produces consistent values.
- Add a tiny `includes/csrf.php` (`csrf_token()`, `csrf_check()`) and `require_once` it in every form.
- Remove the dead account UI in `header.php` — it's commented out but still sitting in the markup. Either ship the user-account flow or delete it.

---

## 5. SEO Review

The SEO setup is the **strongest part of the codebase**. Manual but correct.

What's working:
- Per-page `title`, `description`, `keywords`, canonical
- Open Graph + Twitter tags using the same canonical
- LocalBusiness + TravelAgency JSON-LD on the homepage
- Auto-generated `BreadcrumbList` schema in `header.php`
- WebSite schema with `SearchAction`
- `hreflang` for `en-IN`, `en-AE`, `en`, `x-default`
- Geo meta tags (region, placename, position, ICBM)
- llms.txt + sitemap.xml + robots.txt
- 301 redirect map from old `.html` URLs to clean URLs
- GA4 in head

Issues / refinements:
1. **Hreflang pointing to the same URL is allowed but not strategic.** If you genuinely serve different content/pricing to India vs UAE, create `/in/` and `/ae/` URL variants. If you don't, drop the en-IN/en-AE pair and keep a single `en` + `x-default` — Google works it out.
2. **Inline JSON-LD is large** (the homepage block is ~5 KB). It's fine for SEO, but moving it to a separate JSON-LD `<script>` injected from a data file (Section 4.2) prevents drift between the visible page and the structured data.
3. **`Cache-Control: no-cache` on every HTML/PHP** is technically OK because you set `assetVersion` for static cache busting — but it removes any browser back-button benefit. Consider `Cache-Control: public, max-age=300, must-revalidate` on stable pages and only `no-cache` on dashboard/login.
4. **Sitemap is not auto-generated.** Add a `bin/build-sitemap.php` (or have it run on cron) that iterates `/data/packages/*.json` once you migrate. Until then, add a calendar reminder to refresh `sitemap.xml` and `lastmod` whenever you add a page.
5. **404 page (`404.php`) should soft-recommend related pages.** Link it to the homepage's top-5 packages and a search box.
6. **Internal linking is thin between siblings.** Each Bali package page should link to other Bali packages, the Bali landing page and at least one related blog. This is where `includes/related-parks.php` style modules can spread internal link equity.
7. **Image alt text** — a quick spot check shows logos and hero images have meaningful alt; package thumbnails sometimes don't. Worth a sweep.
8. **Page speed *is* a ranking signal** — Section 3 directly improves SEO outcomes.

---

## 6. Brand & Design Consistency

Conflicts to resolve before any redesign:
- `--primary` (#13357B) vs `.bg-primary` override (#3A7CA4) — pick one and remove the other.
- `--bs-secondary-rgb` doesn't match `--bs-secondary`.
- Three font families in use (Jost, Roboto, Prompt) — pick two, drop one. A typical brand system uses one display family (h1/h2) and one body family.
- Footer has language and currency dropdowns that aren't wired to anything (`#select1` repeated, "English" with "Arabic, German, Greek, New York" options, etc.). Either implement them or remove them — they currently look like a half-built feature.
- Inline `style="height: 100px;"` on the navbar logo and similar should move to a class like `.brand-logo`.

Once the palette and type are unified, the *single* most useful artifact is a one-page **brand & design system** doc:
- Logo, primary/secondary/accent colours with hex + usage rules
- Typography scale (h1 → h6, body, small) with the chosen families
- Button styles (primary CTA, WhatsApp CTA, ghost)
- Card / hero / breadcrumb specs
- Photography style (lighting, vegetarian-friendly food shots, family-comfortable framing)

Your "Jain & vegetarian" brand promise is differentiated and crisp — the visual system should be just as confident. Right now it feels Bootstrap-default, with the primary blue applied unevenly.

---

## 7. Forward Management Plan — How to Run This Site Going Forward

A small, pragmatic operating model:

### 7.1 Tooling

- **Source control:** put `latest-web/` in a private GitHub or GitLab repo today. Every change is a commit. This alone removes 70% of "what changed and broke prod?" risk.
- **Two environments:** `staging.arihantlink.com` (subdomain on the same Hostinger plan) and `arihantlink.com` (production). Test every change on staging.
- **Deploy:** simple `git pull` on the production server, or GitHub Actions → SFTP. No more editing files in the hosting file manager.
- **Secrets:** `.env` file outside `public_html`, never committed.
- **Backups:** Hostinger nightly backup + a weekly `mysqldump` to off-site (Google Drive or Backblaze). 30-day retention.
- **Monitoring:** a free uptime check (UptimeRobot, BetterStack) hitting `/` and `/contact` every 5 minutes. Email yourself on outage.
- **Analytics:** GA4 is in. Add Search Console (you have the verification meta) and Bing Webmaster Tools.

### 7.2 Recurring routines

| Cadence | What |
|---|---|
| Weekly | Lighthouse run on home + 2 package pages; review GA4 top pages, top exits, conversion (WhatsApp clicks); review Search Console queries for new keyword opportunities |
| Monthly | `composer audit`, rotate any temporary credentials, image-weight audit (no image >300 KB), publish 1 blog post |
| Quarterly | Full security pass (recheck this document), refresh `sitemap.xml`, review and trim unused PHP pages, verify backup restore works |
| Annually | PHP version upgrade plan, redesign review |

### 7.3 Backlog ranked

| Priority | Item | Effort | Impact |
|---|---|---|---|
| P0 | Rotate DB & SMTP passwords; move secrets to `.env` | 0.5d | Critical |
| P0 | Delete `*.bak`, `blog/test.php`, `blog/diagnostic.php` | 5 min | High |
| P0 | Strip debug data from `send-contact-email.php`; lock CORS | 1h | High |
| P0 | Add reCAPTCHA + CSRF + login throttle | 1d | High |
| P0 | Remove the SQL-injection RewriteRule from `.htaccess` | 5 min | Medium (false positives) |
| P0 | Compress all images >500 KB; delete `img/backup/` | 1d | Very high (LCP) |
| P1 | Add `loading="lazy"` + width/height to all below-fold images | 0.5d | High |
| P1 | Drop jQuery if unused; switch to `bootstrap.min.js`; defer non-critical JS | 0.5d | Medium |
| P1 | Self-host & subset fonts; remove unused families | 0.5d | Medium |
| P1 | Security headers (HSTS, CSP report-only, Permissions-Policy) | 0.5d | High |
| P1 | Reconcile brand palette (one source of truth in CSS variables) | 1d | Medium |
| P1 | Set up Git + staging environment | 1d | Very high (operational) |
| P2 | Migrate yacht pages to data-driven template (proof of concept) | 3d | Very high (long term) |
| P2 | Migrate Dubai packages, then international | 1–2 wk | Very high |
| P2 | Sweep inline `style=""` out; introduce utility/component classes | 2–3d | Medium |
| P2 | Add Cloudflare in front of the site | 0.5d | High (perf + sec) |
| P2 | Auto-generate sitemap from data | 0.5d | Medium |

### 7.4 Definition of "done" for any future change

Use this checklist for every PR / change:
- [ ] Page passes Lighthouse mobile ≥ 85 on Performance, ≥ 95 on Best Practices, ≥ 95 on SEO
- [ ] No new inline `style=""`
- [ ] Any new image is ≤ 300 KB and has WebP/AVIF + width/height + alt
- [ ] If a form is added/changed: CSRF token + reCAPTCHA + server-side validation
- [ ] No new secret committed
- [ ] Canonical, OG, Twitter, schema verified in DevTools
- [ ] Tested on real mobile + desktop, not just Chrome resize
- [ ] Sitemap and internal links updated

---

## 8. Next 30 Days — Suggested Sequence

**Week 1 (security + quick wins)**
1. Rotate DB and SMTP passwords (different ones).
2. Move credentials to `.env`.
3. Delete `*.bak`, `blog/test.php`, `blog/diagnostic.php`.
4. Strip debug data from contact endpoint, tighten CORS.
5. Add reCAPTCHA v3 + CSRF + login throttle.
6. Remove the broken SQL-injection RewriteRule.
7. Set up Git + staging.

**Week 2 (performance)**
8. Compress / convert all images >500 KB. Delete `img/backup/`.
9. Add `loading="lazy"` + width/height across templates.
10. Self-host & subset fonts; drop unused JS.
11. Add HSTS + CSP (report-only) + Permissions-Policy.

**Week 3–4 (manageability foundation)**
12. Reconcile CSS variables / brand palette; one source of truth.
13. Pilot the data-driven template on yacht charter pages (7 → 1 template + 7 JSON files).
14. Auto-generate sitemap from the new data folder.
15. Sweep `style=""` out of the migrated pages.

After this, every subsequent month has a much shorter to-do list and you stop fighting the structure.

---

## 9. What I Did *Not* Audit

- The Apache server config beyond `.htaccess` (only the host can show you `apache2.conf` / `php.ini`).
- The `users` table schema and any other DB tables (would need DB access).
- PHPMailer version and any vulnerable composer dependencies — run `composer audit` to confirm.
- Live Lighthouse / Core Web Vitals numbers (would need network access to the live site).
- Production logs (would reveal real attack patterns and 404 rates).

If you give me read access to those, I can extend this review.

---

*End of review.*
