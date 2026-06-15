<?php
/* =============================================================================
 *  ARIHANT TRAVEL — CANONICAL PAGE TEMPLATE
 * -----------------------------------------------------------------------------
 *  HOW TO USE
 *    1. Copy this file to a new slug:   cp _PAGE_TEMPLATE.php my-new-page.php
 *    2. Edit the SEO + Hero variables at the top.
 *    3. Replace the "Section 1 / 2 / 3" example blocks with your real content.
 *    4. Keep ALL section wrappers (.page-section, .section-heading, etc.) so
 *       the page inherits the brand look. Do NOT inline hex colours.
 *    5. Test locally, then add the slug to sitemap.xml.
 *
 *  RULES (full spec in /DESIGN.md)
 *    - One <h1> per page (already provided in the hero).
 *    - Section pattern:  .page-section[--light|--light-2|--dark]
 *                          > .container
 *                            > .section-heading (eyebrow + title + lead)
 *                            > main content
 *    - Use class names from /DESIGN.md, not inline `style=`.
 *    - Brand colours: var(--primary), var(--primary-dark), var(--secondary),
 *      var(--accent). Defined in css/style.css :root.
 *    - Always include the enquiry form OR a clear CTA band before the footer.
 *    - Below-fold images: loading="lazy" decoding="async" + width/height.
 *
 *  THIS FILE IS NOT INDEXED (begins with "_") and is blocked from search
 *  engines via the noindex rule in /.htaccess and the robots meta in
 *  includes/header.php for currentPage='page-template'.
 * =============================================================================
 */

// ---------------------------------------------------------------------------
// 1. SEO VARIABLES
// ---------------------------------------------------------------------------
// Title: 50–60 chars, primary keyword first.
$pageTitle       = "PAGE TITLE — Primary Keyword | Arihant Travel";
// Description: 150–160 chars. One CTA. No double-spacing.
$pageDescription = "150–160 char description with the primary keyword and one clear call to action (Book on WhatsApp, Apply today, Get a quote).";
// Comma-separated keywords (light optimisation; titles & body matter more).
$pageKeywords    = "primary keyword, supporting keyword 1, supporting keyword 2";
// Absolute canonical, including https://arihantlink.com.
$pageCanonical   = "https://arihantlink.com/PAGE-SLUG";
// Slug used by header.php for active-nav highlighting and noindex routing.
$currentPage     = "page-template";

// ---------------------------------------------------------------------------
// 2. HERO / BREADCRUMB VARIABLES
// (Used by includes/breadcrumb.php — comment them out and use the manual
//  hero markup further down if you need a custom layout.)
// ---------------------------------------------------------------------------
$pageHeading            = "Visible H1 / Page Hero Heading";
$breadcrumbCategory     = "Category";        // optional middle crumb
$breadcrumbCategoryLink = "category-slug";   // path under arihantlink.com/
$breadcrumbBg           = "img/breadcrumb-bg.jpg"; // hero background image

// ---------------------------------------------------------------------------
// 3. OPTIONAL JSON-LD SCHEMA
// (Use TouristTrip / Product / Article / FAQPage as appropriate.)
// ---------------------------------------------------------------------------
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "' . $pageTitle . '",
  "description": "' . $pageDescription . '",
  "url": "' . $pageCanonical . '"
}
</script>';

// ---------------------------------------------------------------------------
// 4. RENDER
// ---------------------------------------------------------------------------
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/breadcrumb.php';
?>

<!-- ============================================================
     SECTION 1 — LEAD / INTRO
     ============================================================ -->
<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Eyebrow Label</span>
            <h2 class="section-heading__title">Section Title</h2>
            <p class="section-heading__lead">A short lead-in sentence that
                tells the visitor what this page or section is about and
                reinforces the primary keyword once.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <p>Body copy goes here. Use <code>&lt;p&gt;</code>, <code>&lt;ul&gt;</code>,
                   <code>&lt;strong&gt;</code> as you normally would. Never inline
                   <code>style=&quot;color:#XXXXXX&quot;</code> &mdash; pick a class.</p>
                <a class="btn btn-primary rounded-pill px-4 py-2" href="/contact">
                    <i class="fas fa-paper-plane me-2"></i> Get a Quote
                </a>
                <a class="btn btn-whatsapp rounded-pill px-4 py-2" target="_blank"
                   href="https://wa.me/971585945007">
                    <i class="fab fa-whatsapp me-2"></i> WhatsApp Us
                </a>
            </div>
            <div class="col-md-6">
                <img src="img/PLACEHOLDER.webp" alt="Descriptive alt text including the keyword"
                     class="img-fluid rounded shadow"
                     width="640" height="400"
                     loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SECTION 2 — FEATURES / WHY US (light background)
     ============================================================ -->
<section class="page-section page-section--light">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Why Arihant Travel</span>
            <h2 class="section-heading__title">What you get with every booking</h2>
        </div>

        <div class="feature-row">
            <div class="feature-item">
                <span class="feature-item__icon"><i class="fas fa-leaf"></i></span>
                <div>
                    <h3 class="feature-item__title">100% Pure Vegetarian</h3>
                    <p class="feature-item__desc">Jain meals on every tour, no onion or garlic.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-item__icon"><i class="fas fa-shield-alt"></i></span>
                <div>
                    <h3 class="feature-item__title">UAE-Licensed</h3>
                    <p class="feature-item__desc">Physically based in Dubai/Sharjah, not remote.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-item__icon"><i class="fab fa-whatsapp"></i></span>
                <div>
                    <h3 class="feature-item__title">24/7 WhatsApp Support</h3>
                    <p class="feature-item__desc">Real human on call, not a chatbot.</p>
                </div>
            </div>
            <div class="feature-item">
                <span class="feature-item__icon"><i class="fas fa-star"></i></span>
                <div>
                    <h3 class="feature-item__title">4.8&star; on Google</h3>
                    <p class="feature-item__desc">2,000+ Indian families served.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SECTION 3 — CARD GRID (packages, fleet, excursions, etc.)
     ============================================================ -->
<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Featured</span>
            <h2 class="section-heading__title">Pick your option</h2>
            <p class="section-heading__lead">Three to six cards tend to convert
                best. Keep them visually identical.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card">
                    <div class="arihant-card__media">
                        <img src="img/PLACEHOLDER-CARD-1.webp" alt="Descriptive alt"
                             width="600" height="375"
                             loading="lazy" decoding="async">
                        <span class="arihant-card__badge">Most Popular</span>
                    </div>
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title">Card Title</h3>
                        <p class="arihant-card__meta"><i class="far fa-clock me-1"></i> 4 hours &middot;
                           <i class="fas fa-users ms-2 me-1"></i> Up to 10 guests</p>
                        <p>One-line description that matches the keyword intent.</p>
                        <p class="arihant-card__price">From AED 425 <small>/ hour</small></p>
                        <a href="/PAGE-SLUG" class="btn btn-primary rounded-pill mt-2">View Details</a>
                    </div>
                </article>
            </div>
            <!-- duplicate the col-md-6 col-lg-4 block per card -->
        </div>
    </div>
</section>

<!-- ============================================================
     SECTION 4 — TRUST / DARK BAND
     ============================================================ -->
<section class="trust-band">
    <div class="container">
        <div class="row g-4 text-center text-md-start align-items-center">
            <div class="col-md-3">
                <h3 class="h5 mb-1"><i class="fas fa-medal me-2"></i> 4.8&star; Google</h3>
                <p class="mb-0 small">2,000+ Indian families served</p>
            </div>
            <div class="col-md-3">
                <h3 class="h5 mb-1"><i class="fas fa-leaf me-2"></i> 100% Veg / Jain</h3>
                <p class="mb-0 small">No onion, no garlic on any tour</p>
            </div>
            <div class="col-md-3">
                <h3 class="h5 mb-1"><i class="fas fa-shield-alt me-2"></i> UAE-Licensed</h3>
                <p class="mb-0 small">On-the-ground in Dubai &amp; Sharjah</p>
            </div>
            <div class="col-md-3">
                <h3 class="h5 mb-1"><i class="fab fa-whatsapp me-2"></i> 24/7 Support</h3>
                <p class="mb-0 small">+971 58 594 5007</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SECTION 5 — FAQ
     ============================================================ -->
<section class="page-section page-section--light">
    <div class="container" style="max-width: 880px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">FAQ</span>
            <h2 class="section-heading__title">Frequently asked questions</h2>
        </div>
        <div class="accordion faq-accordion" id="pageFaq">
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#faq1">
                        Question one?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#pageFaq">
                    <div class="accordion-body">Answer one. Keep it specific and
                        substantiated. Aim for 5&ndash;7 questions per page.</div>
                </div>
            </div>
            <!-- duplicate accordion-item per FAQ -->
        </div>
    </div>
</section>

<!-- ============================================================
     SECTION 6 — ENQUIRY FORM (canonical CTA — keep on every page)
     ============================================================ -->
<?php include __DIR__ . '/includes/enquiry-form.php'; ?>

<!-- ============================================================
     SECTION 7 — CTA BAND (final push before the footer)
     ============================================================ -->
<section class="cta-band">
    <div class="container">
        <h2 class="mb-3">Ready to book?</h2>
        <p class="mb-4">Talk to a real travel expert &mdash; no chatbots, no middle-men.</p>
        <a href="https://wa.me/971585945007" target="_blank"
           class="btn btn-whatsapp rounded-pill px-4 py-3">
            <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
        </a>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
