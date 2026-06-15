# Core Web Vitals Audit — arihantlink.com (Landing Page)

**Audit date:** 21 May 2026
**Method:** Code-level inspection (Google PageSpeed API was blocked from the sandbox, so this audit reads the actual served HTML, `index.php`, `includes/header.php`, `includes/footer.php`, `.htaccess`, plus file sizes for every CSS/JS/image asset).
**Scope:** Mobile + Desktop, equal priority.

After applying P0 fixes you should see mobile LCP drop from ~4–6s range into the 2.0–2.5s "Good" band, and desktop into the 1.2–1.8s band. INP and CLS are mostly already in shape — the heavy lifting is LCP.

---

## What the code already does well

Before the fix list, credit where it's due — these are already in place:

- `<picture>` element with mobile/desktop WebP sources and JPG fallback.
- `fetchpriority="high"` and `width`/`height` on the LCP image.
- `<link rel="preload">` for the LCP hero, logo, and both CSS files.
- `<link rel="preconnect">` for fonts, FontAwesome, and jsdelivr.
- Async-loading fonts via `media="print" onload="this.media='all'"`.
- `mod_deflate` (gzip) and `mod_expires` (1y for images, 1mo for CSS/JS) in `.htaccess`.
- Security headers (`X-Frame-Options`, `X-Content-Type-Options`, `X-XSS-Protection`).
- Scripts loaded at the bottom of `<body>`, not in `<head>`.
- Spinner overlay was removed (good — it was blocking LCP measurement).

That foundation is solid. The remaining problems are concentrated in **image weight, script weight, and a few configuration mistakes**.

---

## P0 — Quick wins (1–2 days, 60–70% of the gain)

### 1. The JPG fallbacks are 2–5.5 MB each. Replace them.

This is the single biggest issue. Even though `<picture>` serves WebP to modern browsers, the JPGs still ship to old browsers, get crawled by bots, and (critically) are referenced by your `og:image` meta tag and `og:image` in the homepage Open Graph schema — so they're downloaded by every social-media preview, every link unfurl, and any browser that doesn't take the WebP source for any reason.

Current file sizes in `img/`:

| File | Size |
|---|---|
| carousel-1.jpg | 5.59 MB |
| carousel-2.jpg | 2.83 MB |
| carousel-3.jpg | 200 KB (already ok) |
| carousel-4.jpg | 816 KB |
| carousel-5.jpg | 4.68 MB |
| carousel-6.jpg | 3.93 MB |

**Fix:** Re-encode each JPG fallback to ≤200 KB at quality 78–82, max 1920×1080. Command on Mac (requires ImageMagick):

```bash
cd /Users/neerajjain/Documents/Arihnattravel/latest-web/img
for f in carousel-1.jpg carousel-2.jpg carousel-4.jpg carousel-5.jpg carousel-6.jpg; do
  magick "$f" -resize 1920x1080^ -quality 80 -strip "$f.tmp" && mv "$f.tmp" "$f"
done
```

Expected savings: ~16 MB removed from the page-resource budget.

### 2. Re-encode the desktop WebPs — they're 2–3× larger than needed.

| File | Current | Target |
|---|---|---|
| carousel-1.webp | 201 KB | ~80 KB |
| carousel-2.webp | 80 KB | ok |
| carousel-3.webp | 131 KB | ~60 KB |
| carousel-4.webp | 153 KB | ~70 KB |
| carousel-5.webp | 157 KB | ~70 KB |
| carousel-6.webp | 203 KB | ~80 KB |

```bash
cd /Users/neerajjain/Documents/Arihnattravel/latest-web/img
for f in carousel-1.webp carousel-3.webp carousel-4.webp carousel-5.webp carousel-6.webp; do
  cwebp -q 78 -m 6 -mt -af "$f" -o "$f.tmp" && mv "$f.tmp" "$f"
done
```

Add AVIF as a second source (10–20% smaller than WebP) for browsers that support it:

```html
<picture>
  <source media="(max-width:768px)" srcset="img/carousel-2-mobile.avif" type="image/avif">
  <source srcset="img/carousel-2.avif" type="image/avif">
  <source media="(max-width:768px)" srcset="img/carousel-2-mobile.webp" type="image/webp">
  <source srcset="img/carousel-2.webp" type="image/webp">
  <img src="img/carousel-2.jpg" ...>
</picture>
```

### 3. Lazy-mount carousel slides 2–6.

Right now all six `<picture>` elements are in the initial DOM. Even with `loading="lazy"` on the `<img>`, the browser still parses six `<source>` declarations and may speculatively fetch matched sources. Move slides 2–6 into a `<template>` and inject them into the carousel after `load` event, or set `loading="lazy"` AND use a fake placeholder `src=""` and swap on `data-bs-slide` event.

Minimum viable fix: delete the `srcset` from slides 2–6 and instead use `data-srcset` + a tiny JS that swaps them in when the carousel transitions. Saves ~5 image network reservations from initial load.

### 4. Defer the JavaScript.

In `includes/footer.php` line 121–132, none of the scripts have `defer`. Even though they're at the bottom, they still block the parser briefly. Change to:

```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="<?php echo $basePath; ?>lib/easing/easing.min.js" defer></script>
<script src="<?php echo $basePath; ?>lib/waypoints/waypoints.min.js" defer></script>
<script src="<?php echo $basePath; ?>js/main.js" defer></script>
<script src="<?php echo $basePath; ?>js/navigation.js" defer></script>
```

`defer` preserves execution order, which is what jQuery+Bootstrap need.

### 5. Drop jQuery if possible.

You're loading jQuery 3.6.4 (~87 KB minified) but you're on Bootstrap **5**, which has zero jQuery dependency. The only reason it's still loaded is legacy code in `main.js`/`navigation.js`. Grep your JS for `$(` and `jQuery(` — if you find <10 uses, rewrite them in vanilla JS. Saves ~30 KB gzipped and one round-trip.

### 6. The Bootstrap **bundle** ships Popper+everything. Use the trimmed build.

Switch from `bootstrap.bundle.min.js` to just the components you use. For your homepage you need: Carousel, Dropdown (navbar), Tab (services tabs), Collapse (accordion FAQ). You can self-host a custom build from https://getbootstrap.com/docs/5.0/customize/optimize/ — typical saving ~40 KB.

### 7. FontAwesome 5.15.4 full kit is loaded — replace with a tiny subset.

The `https://use.fontawesome.com/releases/v5.15.4/css/all.css` payload is ~75 KB CSS + ~300 KB woff2. You use roughly 20 icons site-wide. Two cheap options:

- **Best:** export just the icons you use as SVG sprites (`icons.svg` once, ~5 KB total) and reference them via `<svg><use href="icons.svg#whatsapp"></use></svg>`.
- **Easier:** use FontAwesome's [subset kit](https://fontawesome.com/kits) and self-host (free for up to ~25 icons).

Saves roughly 300 KB on first paint.

### 8. The `<head>` Google Tag Manager script runs early. Move it to load on idle.

Line 33 of `header.php` loads gtag in the head. Even with `async`, Chrome will still spend ~150 ms parsing+executing it before LCP. Defer it until after `load`:

```html
<script>
  window.addEventListener('load', function() {
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=G-4TFBQEY0Z4';
    document.head.appendChild(s);
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-4TFBQEY0Z4');
    window.gtag = gtag;
  });
</script>
```

Saves ~100–200 ms of JS work during the critical phase.

---

## P1 — Medium effort (1 week, another 20% of gain)

### 9. Self-host Google Fonts.

You have **two** preconnects (`fonts.googleapis.com` + `fonts.gstatic.com`) and a roundtrip to fetch the stylesheet that then triggers font downloads. Self-host the three font families (`Jost`, `Roboto`, `Prompt`) — download from Google Fonts as woff2, drop in `/fonts/`, preload only the critical weight used above the fold (Prompt 700 for the H1), and serve from your own domain. Eliminates 2 DNS lookups and 2 round-trips.

### 10. Inline critical CSS.

`css/bootstrap.min.css` is 166 KB and `css/style.min.css` is 35 KB — both render-blocking. Extract the ~5–8 KB of CSS needed to render the navbar + first carousel slide above the fold, inline it in the `<head>`, and load the rest with `media="print" onload="this.media='all'"` (the same trick you use for fonts).

Tools: `critical` npm package, or paste both files into https://www.usecritical.com/ with your URL.

### 11. Enable Brotli compression.

`mod_deflate` (gzip) is enabled, but Brotli is 15–20% smaller for text. Add to `.htaccess`:

```apache
<IfModule mod_brotli.c>
  AddOutputFilterByType BROTLI_COMPRESS text/plain text/html text/xml text/css application/json application/javascript application/xml application/rss+xml font/woff2
</IfModule>
```

If your host (look like Hostinger/SiteGround based on the layout) doesn't have mod_brotli, ask support to enable it.

### 12. Make CSS/JS cache-immutable via hashed filenames.

Right now you do `style.min.css?v=1.0.4`. Browsers cache query-string assets fine, but proxies and some CDNs are conservative. Better: rename the file `style.1.0.4.min.css` and add to `.htaccess`:

```apache
<FilesMatch "\.[0-9]+\.[0-9]+\.[0-9]+\.(css|js)$">
  Header set Cache-Control "public, max-age=31536000, immutable"
</FilesMatch>
```

### 13. Reduce JSON-LD schema weight.

The homepage `$schemaMarkup` in `index.php` is ~5 KB and lists 13 Indian cities under `areaServed`. Google only needs the top 3–4. Keep Mumbai, Ahmedabad, Surat, Delhi and drop the rest — saves ~2 KB of HTML on every render.

### 14. Use a CDN with image transforms.

Put Cloudflare (free tier) in front of arihantlink.com. You get:
- Brotli everywhere automatically.
- Edge caching of static assets globally (India and Gulf users in particular).
- Free [Polish](https://developers.cloudflare.com/images/polish/) for automatic image optimization.
- HTTP/3 and 0-RTT.

Setup: 30 minutes (change nameservers).

---

## P2 — Strategic (longer-term)

### 15. Replace Bootstrap carousel with a lighter component.

Bootstrap's carousel module is ~12 KB and pulls jQuery-like patterns. Consider Swiper.js core (~20 KB) — works without jQuery, supports touch on mobile, lazy-loads built in — or roll a small CSS-only carousel with `scroll-snap`.

### 16. Move analytics to a Web Worker via Partytown.

If you add Meta Pixel, GA4, GTM, etc., they'll compound on INP. [Partytown](https://partytown.builder.io/) runs them in a Web Worker, removing them from the main thread entirely.

### 17. Add HTTP/2 Server Push or 103 Early Hints for the LCP image.

If your host supports it, an `Link: <img/carousel-2.webp>; rel=preload; as=image` HTTP header sent as an Early Hint (103) before the HTML is even ready will start the LCP image download ~150 ms earlier. Cloudflare does this automatically.

---

## CLS — specifics for your page

Your CLS should already be near-zero because:
- All carousel `<img>` tags have `width="1920" height="1080"` ✓
- Fonts use `display=swap` and the FOUT shift is small.

But two spots can still cause shifts:

### 18. Stats counter (`index.php` line ~393).

The counters animate from `0` → `2000+`. If the wrapper has no fixed height, the digit count growing from 1 char to 5 chars will widen the column slightly on mobile. Add to `css/style.css`:

```css
.stat-counter-card .h2 { min-height: 2.2rem; line-height: 2.2rem; }
```

### 19. Carousel caption text.

When the Prompt font swaps in from system fallback, the H1 reflows. Mitigate by adding `size-adjust` to the fallback font in CSS, or by setting `font-display: optional` on the H1 weight specifically (it's 700, only used for the carousel headline).

---

## INP — specifics

INP is interaction latency. Your main risks:

### 20. Carousel auto-rotates every 4.5 s — main thread blocking.

In `js/main.js` (or wherever the Bootstrap carousel is initialized), add `pause: 'hover'` and consider stopping it when the tab is hidden:

```js
document.addEventListener('visibilitychange', function() {
  var c = bootstrap.Carousel.getInstance(document.getElementById('carouselId'));
  if (!c) return;
  document.hidden ? c.pause() : c.cycle();
});
```

### 21. Touch handlers should be passive.

Anywhere you have `addEventListener('touchstart'...)` or `'touchmove'`, add `{passive: true}` as the third arg. Cuts touch-to-scroll latency on mobile significantly.

### 22. Service-tabs filter and stats counter.

If `navigation.js` or `main.js` runs counter animation on scroll, debounce the scroll handler with `requestAnimationFrame` instead of raw scroll.

---

## How to verify

After applying P0:

1. Run a private PageSpeed Insights test from your browser: https://pagespeed.web.dev/analysis?url=https://arihantlink.com&form_factor=mobile
2. Compare LCP, INP, CLS to today's baseline.
3. Check Search Console → Core Web Vitals report (28-day field data) — it'll take ~2 weeks to update because it uses real Chrome user data, but lab data is instant.
4. Use the Chrome DevTools Performance panel with CPU throttling at 4× and network at "Slow 4G" to simulate real mobile users.

---

## Summary table — fix priority

| # | Fix | Effort | Mobile LCP impact | Desktop LCP impact |
|---|---|---|---|---|
| 1 | Shrink JPG fallbacks to <200 KB | 30 min | High | High |
| 2 | Re-encode desktop WebPs smaller + add AVIF | 1 hr | High | High |
| 3 | Lazy-mount carousel slides 2–6 | 2 hr | High | Medium |
| 4 | `defer` all scripts | 5 min | Medium | Medium |
| 5 | Remove jQuery | 2–4 hr | Medium | Medium |
| 6 | Slim Bootstrap to needed components | 1 hr | Medium | Low |
| 7 | Self-host FontAwesome subset (SVG) | 2 hr | High | Medium |
| 8 | Defer GA4 to `load` event | 5 min | Medium | Low |
| 9 | Self-host Google Fonts | 1 hr | Medium | Low |
| 10 | Inline critical CSS | 2–3 hr | High | Medium |
| 11 | Enable Brotli | 5 min (host) | Low | Low |
| 12 | Hashed-filename immutable cache | 30 min | (repeat-visit) | (repeat-visit) |
| 14 | Put Cloudflare in front | 30 min | Medium | Medium |

---

## Want me to apply the P0 fixes directly?

I can:
- Re-encode the carousel images (will need to run ImageMagick/cwebp via the sandbox or hand you a one-shot script).
- Edit `header.php` to defer GA4.
- Edit `footer.php` to add `defer` to scripts and remove jQuery (if your JS doesn't depend on it — I'd need to scan `main.js` and `navigation.js` first).
- Edit the carousel in `index.php` to lazy-mount slides 2–6.

Just say "apply P0" and I'll start.
