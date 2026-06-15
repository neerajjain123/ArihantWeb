# Implementation Notes — 2026-05 Hardening Pass

This document records what was changed in this pass, why, and **what you (the operator) still need to do on the live server** before the changes can take full effect. Read it once end-to-end before deploying.

---

## 1. Critical actions YOU must take after deploy

These items can't be done from the codebase — they're operational tasks on Hostinger.

### 1.1 Rotate credentials and create the `.env` file (do this first)

The old MySQL and SMTP passwords were committed in source code (`includes/db-config.php` and the email scripts). They must be considered compromised.

1. **Hostinger control panel → Databases → Manage** the `u166882835_arihantdb_php` user. Change the password to a new, unique value (≥ 24 chars, mixed). Do NOT reuse any existing password.
2. **Hostinger control panel → Emails → Manage** the `shweta@arihantlink.com` mailbox. Change the password to a different new, unique value. The DB and SMTP passwords must NOT be the same.
3. SSH or open the Hostinger File Manager and create a new file called `.env` in the document root (or one level **above** the document root if your hosting plan allows). Use `.env.example` (now in the repo root) as the template. Fill in the new passwords. Confirm permissions are `600` so only the PHP user can read it.
4. After the `.env` is in place, browse to `/` and `/login` to verify the site still works. If `/login` shows "Service temporarily unavailable", `DB_PASS` isn't being read — re-check the path.
5. If you can't host the `.env` outside the document root, the `.htaccess` already blocks any file with the `.env` extension from being served, so an in-tree location is acceptable but not ideal.

### 1.2 Manually delete files the agent could not delete

The sandbox cannot delete files in your workspace. The agent neutralised them, but please follow up via Hostinger File Manager to actually remove:

- `blog/test.php` (now returns HTTP 410)
- `blog/diagnostic.php` (now returns HTTP 410)
- `css/style.css.bak`
- `almaty-short-break-3n4d.php.bak`
- The entire `img/backup/` directory (~12 MB) — currently denied via `.htaccess`

### 1.3 Compress images

The single largest performance issue is image weight (`/img` is 328 MB; 45 files >1 MB; some over 14 MB). The agent didn't run a compression tool because that's better done locally with `cwebp`/`avifenc`/`sharp`. Suggested workflow:

```bash
# from your local machine, with cwebp installed
find img -type f \( -name '*.jpg' -o -name '*.jpeg' -o -name '*.png' \) \
  -size +500k -print0 | while IFS= read -r -d '' f; do
    out="${f%.*}.webp"
    cwebp -q 80 "$f" -o "$out"
done
```

After that, point `<img>` tags at the `.webp` versions (using `<picture>` with a JPEG fallback if needed). Target hero images ≤ 200 KB and card images ≤ 60 KB.

### 1.4 Optional but recommended

- Add Google reCAPTCHA v3 keys to `.env` (`RECAPTCHA_SITE_KEY`, `RECAPTCHA_SECRET_KEY`) and wire the site key into the contact and enquiry forms. The endpoints already accept the response; integration is a small JS snippet.
- Put the project under git (private GitHub or GitLab repo). The `.gitignore` is already in place. Without this, you keep losing the ability to roll back.
- Set up an UptimeRobot monitor on `/` and `/contact`.

---

## 2. What changed in code

### 2.1 Files added

| File | Purpose |
|---|---|
| `.env.example` | Template for the new credentials file. Copy to `.env` and fill in real values. |
| `.gitignore` | Excludes `.env`, vendor dirs, `*.bak`, etc. from any future git repo. |
| `includes/env.php` | Lightweight `.env` loader with `env_load()` and `env('KEY', 'default')`. |
| `includes/csrf.php` | CSRF token helper: `csrf_start()`, `csrf_token()`, `csrf_field()`, `csrf_verify()`, `csrf_verify_or_die()`. |
| `IMPLEMENTATION_NOTES.md` | This file. |
| `WEBSITE_REVIEW.md` | Full architecture/security/performance review (from earlier in the session). |
| `SEO_AUDIT.md` | Full SEO audit (from earlier in the session). |
| `img/backup/.htaccess` | Denies all access to the legacy backup image folder. |

### 2.2 Files modified

| File | Change |
|---|---|
| `includes/db-config.php` | Reads `DB_*` from `.env` via the new loader. Removed hard-coded password. Switched `ATTR_EMULATE_PREPARES` to `false` (real prepared statements). Errors now log instead of echoing the exception message. |
| `includes/send-contact-email.php` | SMTP creds from `.env`. Debug array no longer leaks in prod (controlled by `APP_DEBUG`). CORS locked to `ALLOWED_ORIGINS`. Honeypot field `website`. Per-IP rate limit (5 req / 600 s). Email-validation order fixed. |
| `includes/send-email.php` | Same hardening parity as the contact endpoint. |
| `includes/header.php` | Hardened session cookie (`HttpOnly`, `Secure`, `SameSite=Lax`); single canonical hreflang (en + x-default); auto-emits `<meta robots noindex,follow>` for login, register, dashboard, logout, search, 404. Asset version bumped to `1.0.4`. |
| `includes/csrf.php` (new) | Wired into `login.php` and `register.php`. |
| `login.php` | CSRF token, IP-based throttle (5 fails / 15 min), `session_regenerate_id` on login, error message escaped. Fixed mismatched `<h1>`/`<h3>` tag. |
| `register.php` | CSRF token, password policy bumped to ≥ 10 chars + mixed case + digit, server-side `validate_password()`, error message escaped. |
| `.htaccess` | Removed false-positive SQL-injection RewriteRule. Added HSTS, Permissions-Policy, CSP-Report-Only. Denied direct browser access to `/includes/*.php` (except the email endpoints). Denied `/img/backup/` directory. |
| `index.php`, `desert-safari.php`, `uae-visa.php`, `dubai-holiday-packages.php`, `yacht-rental.php`, `40ft-yacht-charter.php`, `blog.php`, `about.php` | Tightened `$pageTitle` to ≤ 60 chars and `$pageDescription` to ≤ 160 chars. |
| `yacht-rental.php`, `uae-visa.php`, `about.php` | Added a single keyword-rich `<h1>` (these pages had no H1 before). |
| `sitemap.xml` | Added 16 previously-missing commercial pages (six desert safari sub-pages, three hot-air-balloon variants, jabel-jais-tour, two Georgia routes, three theme-park pages). |
| `css/style.css`, `css/style.min.css` | Reconciled brand palette. Fixed `--bs-secondary-rgb` (was yellow → now matches the teal hex). Fixed `--bs-warning-rgb` (was orange → now matches teal). Added a header comment explaining the dual-blue (`--primary` navy + `--primary-2` brand blue) and the long-term cleanup direction. |
| `blog/test.php`, `blog/diagnostic.php` | Replaced with HTTP 410 stubs. |

### 2.3 Files neutralised but still present (delete on Hostinger)

- `css/style.css.bak`
- `almaty-short-break-3n4d.php.bak`
- `blog/test.php` (returns 410)
- `blog/diagnostic.php` (returns 410)
- `img/backup/` (denied via `.htaccess`)

---

## 3. Behavioural changes to be aware of

1. **Without a `.env` file**, the site will refuse to connect to the database and `/login`, `/register`, `/dashboard` will show "Service temporarily unavailable." This is intentional fail-closed behaviour. Create `.env` first thing after pulling these changes.
2. **The contact endpoint's debug payload is gone** in production. If you ever need to debug a delivery failure, set `APP_DEBUG=1` in `.env` temporarily, reproduce, then set it back to `0`.
3. **Login throttle** is per-IP and stored in `/tmp/arihant_login/` on the server. After 5 failed attempts an IP is locked out for 15 minutes. This file is ephemeral — restarting the host clears it.
4. **CSRF tokens** are required on `login.php` and `register.php`. If a user has the form open across a session restart they'll get "Security token invalid. Please refresh." This is expected.
5. **CSP is in Report-Only mode** for one week. Open the browser dev console after deploying — any console message starting with `[Report Only]` tells you what to allowlist before you flip it to enforced. To enforce, change `Content-Security-Policy-Report-Only` to `Content-Security-Policy` in `.htaccess`.
6. **Sitemap is now 137 URLs** (was 121). Resubmit it in Google Search Console after deploy.
7. **Hreflang change**: the site previously declared `en-IN`, `en-AE`, `en` and `x-default` all pointing to the same canonical. That's collapsed to `en` + `x-default`. If/when you build true geo-localised content, add `/in/...` and `/ae/...` URLs and reintroduce `en-IN` / `en-AE` pointing at them.

---

## 4. What was NOT changed (deliberately)

These items were called out in the review but require either operational decisions or substantial work outside the scope of a single hardening pass:

- **Image compression** — needs locally-installed tooling (`cwebp`, `avifenc`). See §1.3.
- **Migration of tour pages to a data-driven template** — flagged as the highest long-term ROI in `WEBSITE_REVIEW.md` §4.2. Recommended pilot: yacht charter pages.
- **Removal of inline `style="..."`** — 127 files still contain inline styles. Sweep alongside the templating refactor.
- **Self-hosting and subsetting fonts** — drop Roboto, subset Jost and Prompt.
- **Switching from `bootstrap.bundle.min.js` (with Popper) to `bootstrap.min.js`** and dropping jQuery if `main.js` / `navigation.js` don't actually need it.
- **Splitting `/uae-visa` into one pillar + four sub-pages** for 30-day, 60-day, multi-entry, transit visas. Will unbundle five high-intent commercial keywords.
- **The Jain Dubai content cluster** (pillar + 8 spokes) — biggest organic-traffic upside in the SEO audit.
- **`loading="lazy"` sweep across all 559 `<img>` tags** — currently 66 use it. Best done in a single pass alongside width/height attributes after the templating work.
- **Including `includes/mobile-sticky-cta.php` on all 121 commercial pages** — currently on 10. Same reasoning: easier after templating.
- **First-party rebuild of `style.min.css`** — the agent did a syntactic minify; for production you may prefer `npx clean-css-cli css/style.css -o css/style.min.css`.

---

## 5. Suggested deploy order

1. Pull these changes to a **staging** subdomain first.
2. Create `.env` on staging with rotated credentials.
3. Smoke-test `/`, `/login`, `/register`, `/contact`, one tour page (`/desert-safari`), the booking form on a desert-safari page, and submit the contact form.
4. Open browser DevTools → Console and check for any `[Report Only]` CSP messages. If anything legitimate is blocked, add it to the CSP allowlist before promoting to production.
5. Rotate the production credentials in Hostinger.
6. Deploy to production.
7. Re-submit `sitemap.xml` in Google Search Console.
8. Manually delete the files listed in §2.3 via Hostinger File Manager.

---

## 6. Quick verification checklist after deploy

- [ ] `https://arihantlink.com/` loads and shows the right hero image
- [ ] `https://arihantlink.com/blog/test.php` returns HTTP 410
- [ ] `https://arihantlink.com/blog/diagnostic.php` returns HTTP 410
- [ ] `https://arihantlink.com/includes/db-config.php` returns HTTP 403
- [ ] `https://arihantlink.com/.env` returns HTTP 403
- [ ] `https://arihantlink.com/login` shows the form, can log in with a known account, and rejects 6 wrong passwords with a throttle message on the 6th
- [ ] Contact form on `/contact` sends an email
- [ ] Booking form on `/desert-safari` (or equivalent) sends an email
- [ ] `view-source:https://arihantlink.com/login` shows `<meta name="robots" content="noindex, follow">`
- [ ] DevTools → Network → Headers shows `Strict-Transport-Security`, `Permissions-Policy`, and `Content-Security-Policy-Report-Only`
- [ ] Lighthouse mobile audit on `/` shows higher Performance and Best Practices scores than before

---

*End of implementation notes.*
