# Arihant Travel — Design System

This is the source of truth for how Arihant Travel pages look and feel. Every new page MUST follow these rules. Every old page should be migrated to them over time. The goal is a single, consistent visual language so a visitor can move from `/desert-safari` to `/yacht-rental` to `/uae-visa` and feel like they're on the same product.

If you're about to create a new page, **start by copying `_PAGE_TEMPLATE.php`** &mdash; it already wires every rule in this document.

---

## 1. Brand identity in one paragraph

Arihant Travel is the UAE's only Jain & vegetarian travel agency physically based in Dubai. The visual identity should feel **trustworthy, premium-but-warm, family-friendly, and unmistakably Indian-friendly**. Avoid the "generic Bootstrap travel site" look: opinionated section spacing, a small set of repeating colour blocks, and at most two typefaces.

---

## 2. Colour palette

All colours are defined as CSS variables in `css/style.css :root`. **Never hardcode a hex value in a PHP file.**

| Token | Value | Use |
|---|---|---|
| `--primary` | `#3A7CA4` | Default brand blue. CTAs, buttons, badges, links. |
| `--primary-dark` | `#13357B` | Deep navy. Trust strips, footer accent, button hover, page-hero overlay. |
| `--primary-darker` | `#2A5C7C` | Hover-on-hover state for primary buttons. |
| `--secondary` | `#2596be` | Teal accent. Secondary buttons, inline highlights. |
| `--secondary-hover` | `#1e7fa3` | Secondary hover. |
| `--accent` | `#4CAF50` | CTA green. "Book", "Confirm", "Success" states. |
| `--accent-hover` | `#43A047` | Accent hover. |
| `--whatsapp` / `--whatsapp-hover` | `#25D366` / `#128C7E` | The WhatsApp brand colour. Use it ONLY on the WhatsApp button so users recognise it instantly. |
| `--light` | `#F8F9FA` | Section background tint #1. |
| `--light-2` | `#EEF4F8` | Section background tint #2 (a faint blue cast that ties to the brand). |
| `--dark` | `#212529` | Body text on light surfaces. |
| `--text` | `#333333` | Primary body text. |
| `--text-light` | `#666666` | Secondary body text, descriptions. |
| `--text-muted` | `#8a96a3` | Captions, prices "from", small print. |
| `--border` | `#DEE2E6` | Cards, dividers. |

**The two-blue rule.** `--primary` is always the visible blue. `--primary-dark` is always the emphasis blue (hover, dark bands, footer). Don't introduce a third blue. If you want a lighter blue for hover, increase opacity of the existing one.

**Accessibility.** All foreground/background pairings used in the components below pass WCAG AA contrast at 4.5:1 for body text and 3:1 for large text. If you add a new combination, check it.

---

## 3. Typography

Two families. One for headlines, one for everything else.

| Token | Family | Use |
|---|---|---|
| `--font-display` | `Jost, sans-serif` | `<h1>` and `<h2>` only. |
| `--font-body` | `Prompt, sans-serif` | Everything else, including `<h3>`&ndash;`<h6>`, body, buttons, forms. |

| Token | Size | Use |
|---|---|---|
| `--fs-xs` | 0.78rem | Captions, small print |
| `--fs-sm` | 0.875rem | Meta, eyebrow labels, button small |
| `--fs-base` | 1rem | Body |
| `--fs-lg` | 1.125rem | Lead paragraph |
| `--fs-h3` | 1.5rem | `<h3>` |
| `--fs-h2` | 2rem | `<h2>` |
| `--fs-h1` | 2.5rem | `<h1>` outside the hero |
| `--fs-display` | 3.5rem | Hero `<h1>` |

Hero and section titles already use `clamp()` for fluid sizing, so they shrink gracefully on mobile without needing media queries.

**Weight rule.** 400 for body, 600 for buttons and section headings, 700 for `<h1>`/`<h2>`. Don't use 300; it doesn't render reliably on Hostinger's CDN at small sizes.

---

## 4. Spacing scale

Use the tokens, not arbitrary `px` or `rem` values.

| Token | Value | Typical use |
|---|---|---|
| `--space-1` | 0.25rem | Tight gaps inside form rows |
| `--space-2` | 0.5rem | Inline gaps |
| `--space-3` | 1rem  | Card padding bottom, button padding-x |
| `--space-4` | 1.5rem | Card padding, between section heading and content |
| `--space-5` | 3rem  | Mobile section vertical padding |
| `--space-6` | 5rem  | Desktop section vertical padding |

**Rhythm rule.** Every full-width section is `padding: var(--space-6) 0` on desktop and `var(--space-5) 0` on mobile. The `.page-section` class does this for you. Don't ad-hoc adjust it &mdash; consistent rhythm is the single thing that makes a multi-page site feel like one product.

---

## 5. Layout architecture

Every page follows the same skeleton:

```
+-----------------------------------------------------------+
|  Topbar (socials, optional nav)                — header   |
|  Navbar (logo + main nav + WhatsApp button)    — header   |
+-----------------------------------------------------------+
|  Page hero / breadcrumb (.page-hero)                       |
|    - One <h1>, one short subtitle, breadcrumb              |
+-----------------------------------------------------------+
|  Section 1   (.page-section)                               |
|  Section 2   (.page-section--light) — alternate bg         |
|  Section 3   (.page-section)                               |
|  Trust band  (.trust-band)         — short, dark, 4 stats  |
|  FAQ         (.page-section--light + .faq-accordion)       |
|  Enquiry     (includes/enquiry-form.php)                   |
|  CTA band    (.cta-band)           — final WhatsApp push   |
+-----------------------------------------------------------+
|  Footer + Copyright + WhatsApp widget          — footer   |
+-----------------------------------------------------------+
```

Implementation:
- The header (`includes/header.php`) and footer (`includes/footer.php`) are already shared across all pages. Don't write your own.
- The hero/breadcrumb is `includes/breadcrumb.php`. Pass it `$pageHeading`, `$breadcrumbBg`, optional `$breadcrumbCategory` + `$breadcrumbCategoryLink`.
- The enquiry form is `includes/enquiry-form.php`. Always include it.
- Every other section uses `.page-section[--light|--light-2|--dark]` so vertical rhythm stays consistent.

**Do not** write `<div class="container-fluid py-5">` inline. Use `<section class="page-section">` instead so spacing and background tints are applied centrally.

---

## 6. Component catalogue

All components live in `css/style.css` under the "DESIGN SYSTEM COMPONENTS" header. They're listed below with a copy-paste snippet.

### 6.1 Page hero

```html
<!-- prefer this: -->
<?php include 'includes/breadcrumb.php'; ?>

<!-- ...or this manual variant if you need full control: -->
<header class="page-hero" style="background-image: url('img/your-hero.webp');">
  <div class="container text-center">
    <h1>Page Heading</h1>
    <p class="page-hero-subtitle">One supporting sentence.</p>
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Current Page</li>
    </ol>
  </div>
</header>
```

The `.page-hero::before` pseudo-element paints the navy gradient overlay automatically, so the same hero image always reads as a brand banner regardless of the photo's tone.

### 6.2 Section heading

```html
<div class="section-heading">
  <span class="section-heading__eyebrow">Eyebrow</span>
  <h2 class="section-heading__title">Section title</h2>
  <p class="section-heading__lead">Optional one-line lead.</p>
</div>
```

The eyebrow is the small pill above the title. Legacy pages use `<h5 class="section-title">` for the same purpose &mdash; both are valid.

### 6.3 Card

```html
<article class="arihant-card">
  <div class="arihant-card__media">
    <img src="img/card.webp" alt="..." width="600" height="375"
         loading="lazy" decoding="async">
    <span class="arihant-card__badge">Most Popular</span>
  </div>
  <div class="arihant-card__body">
    <h3 class="arihant-card__title">Card Title</h3>
    <p class="arihant-card__meta"><i class="far fa-clock"></i> 4 hours</p>
    <p>Short description.</p>
    <p class="arihant-card__price">From AED 425 <small>/ hour</small></p>
    <a href="/slug" class="btn btn-primary rounded-pill mt-2">View Details</a>
  </div>
</article>
```

Wrap card grids in `<div class="row g-4">` with `<div class="col-md-6 col-lg-4">` columns. Three to six cards in a row works best.

### 6.4 Feature row (the "why us" strip)

```html
<div class="feature-row">
  <div class="feature-item">
    <span class="feature-item__icon"><i class="fas fa-leaf"></i></span>
    <div>
      <h3 class="feature-item__title">100% Pure Vegetarian</h3>
      <p class="feature-item__desc">Jain meals on every tour.</p>
    </div>
  </div>
  <!-- repeat 3–4 times -->
</div>
```

### 6.5 Trust band (short, dark, 4 short claims)

```html
<section class="trust-band">
  <div class="container">
    <!-- Bootstrap row + cols of inline stats here. See _PAGE_TEMPLATE.php -->
  </div>
</section>
```

### 6.6 CTA band (final push before the footer)

```html
<section class="cta-band">
  <div class="container">
    <h2 class="mb-3">Ready to book?</h2>
    <p class="mb-4">Talk to a real travel expert.</p>
    <a href="https://wa.me/971585945007" class="btn btn-whatsapp rounded-pill px-4 py-3">
      <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
    </a>
  </div>
</section>
```

### 6.7 FAQ

Use Bootstrap's `<div class="accordion">` and add the class `faq-accordion` to the wrapper. Polish (focus ring, brand colour, expanded background tint) is applied automatically.

### 6.8 Buttons

| Class | Use |
|---|---|
| `.btn-primary` | Default CTA. Used for "Book", "View details", "Get quote". |
| `.btn-whatsapp` | The WhatsApp CTA only. Don't use this for non-WhatsApp links. |
| `.btn-secondary` | Tertiary action ("Compare", "See itinerary"). |
| `.btn-success` / `.btn-accent` | Confirmation steps ("Confirm booking"). |
| `.btn-outline-primary` | Less weighty alternative when there are two primary CTAs side by side. |

Pair every visible button with `.rounded-pill px-4 py-2` (or `py-3` for hero CTAs) for the standard pill shape.

---

## 7. Imagery rules

- Hero images: 1600&times;900 minimum, ≤ 200 KB after WebP compression.
- Card images: 16:10 ratio. ≤ 60 KB.
- Always `loading="lazy"` and `decoding="async"` on below-fold images.
- Always `width` and `height` to prevent CLS.
- Always meaningful `alt` text including the primary keyword.
- Prefer `<picture>` with WebP/AVIF + JPEG fallback.
- Never use stock images of food unless they're verifiably vegetarian/Jain. First-party photos win every time.

```html
<picture>
  <source srcset="img/hero.avif" type="image/avif">
  <source srcset="img/hero.webp" type="image/webp">
  <img src="img/hero.jpg" alt="Jain dinner setup at Arihant Premium Desert Safari camp"
       width="1600" height="900" fetchpriority="high">
</picture>
```

---

## 8. Forms

- Always use the shared `includes/enquiry-form.php` (or `includes/enquiry-sidebar.php` for inline rails).
- New forms must include the CSRF token: `<?php echo csrf_field(); ?>`.
- New forms must include a hidden honeypot named `website` (the email endpoints already silently drop submissions that fill it).
- Use Bootstrap floating labels (`.form-floating > .form-control + label`) for visual consistency.
- Every form has a submit button using `.btn btn-primary w-100 py-3 rounded-pill`.

---

## 9. Mobile rules

- The page is mobile-first. Every component above already adapts via `clamp()` and the responsive override at the bottom of `style.css`.
- Sticky mobile CTA: include `<?php include 'includes/mobile-sticky-cta.php'; ?>` on every commercial page (currently missing on most &mdash; tracked in `IMPLEMENTATION_NOTES.md`).
- Tap targets ≥ 44&times;44 px. The button-square/button-md-square classes already enforce this.
- No horizontal scroll under 360 px viewport.

---

## 10. Do / don't

**Do**
- Copy `_PAGE_TEMPLATE.php` for every new page.
- Pull colours and spacing from CSS variables.
- Use `<section class="page-section[--light|--light-2|--dark]">` for vertical rhythm.
- Include the enquiry form on every commercial page.
- Use `.btn-whatsapp` for WhatsApp links only, so it stays a recognisable signal.
- Add new pages to `sitemap.xml` (or wait for the data-driven template to auto-generate).

**Don't**
- Don't inline `style="background:#XXXXXX"` &mdash; pick a class.
- Don't introduce a third blue, a third font, or a third button radius.
- Don't write a custom hero pattern; use `.page-hero` or the shared breadcrumb.
- Don't paste large JSON-LD blocks inline if you can move them to the data layer (the `$schemaMarkup` variable in `header.php`).
- Don't ship a page without a single `<h1>`.
- Don't use orange anywhere &mdash; the orange button-secondary hover bug from the legacy theme has been fixed; don't reintroduce it.

---

## 11. Migrating an existing page

When refactoring an old page to this system:

1. Identify the page's sections in the existing markup.
2. Wrap each section in `<section class="page-section">` (alternate `--light` / `--light-2` for visual rhythm).
3. Replace bespoke section titles with `<div class="section-heading">` blocks.
4. Replace card markup with `.arihant-card`.
5. Strip any inline `style=` and rely on the components.
6. Replace any hardcoded `#3A7CA4` / `#13357B` / `#2596be` with `var(--primary)` / `var(--primary-dark)` / `var(--secondary)`.
7. Confirm there is exactly one `<h1>`.
8. Confirm `loading="lazy"` and `width`/`height` on every below-fold image.
9. Confirm the page is in `sitemap.xml`.
10. Diff visually against the old version. Subtle is fine; broken is not.

---

## 12. Where things live

| Concern | File |
|---|---|
| Brand tokens (colours, fonts, spacing) | `css/style.css` &mdash; `:root` |
| Bootstrap colour overrides | `css/style.css` &mdash; "Bootstrap Color Overrides" section |
| Component classes | `css/style.css` &mdash; "DESIGN SYSTEM COMPONENTS" section at the bottom |
| Production minified CSS | `css/style.min.css` (rebuild after editing `style.css`) |
| Page header / nav / SEO meta | `includes/header.php` |
| Page footer / scripts / sticky widgets | `includes/footer.php` |
| Hero + breadcrumb | `includes/breadcrumb.php` |
| Enquiry form | `includes/enquiry-form.php` |
| Why-book strip | `includes/why-book-us.php` |
| Mobile sticky CTA | `includes/mobile-sticky-cta.php` |
| FAQ schema helper | `includes/faq-schema.php` |
| New-page starter | `_PAGE_TEMPLATE.php` |
| CSRF helper | `includes/csrf.php` |
| .env loader | `includes/env.php` |
| Site review | `WEBSITE_REVIEW.md` |
| SEO audit | `SEO_AUDIT.md` |
| Implementation notes (post-2026-05 hardening) | `IMPLEMENTATION_NOTES.md` |

---

## 13. Future evolution

Don't extend this document by drift. When you change a colour, font, or component, update `DESIGN.md` in the same commit. The whole point is that one document tells the whole story.

Anticipated changes worth planning for:
- Light/dark theme: introduce a `[data-theme="dark"]` selector that re-binds the `--*` tokens; nothing else changes.
- Locale variants (en-IN / en-AE): swap the hero copy and pricing currency only; keep components identical.
- Data-driven tour pages: the components above are designed so the future template reads `package.json` and renders into them with no design overhead.

---

*Last updated: 2026-05.*
