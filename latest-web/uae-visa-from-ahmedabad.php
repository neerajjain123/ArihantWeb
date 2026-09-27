<?php
require_once __DIR__ . '/includes/visa-prices.php';
// =============================================================================
//  UAE VISA FROM AHMEDABAD — city-of-origin landing page
//  Strong Gujarati / Jain hook — Ahmedabad is our highest-intent source city.
// =============================================================================

$pageTitle       = "UAE Visa from Ahmedabad 2026 | Jain & Gujarati Family Specialist";
$pageDescription = "UAE tourist visa from Ahmedabad with INR pricing — 30-day from ₹" . number_format(visa_price('tourist-30-single', 'price_inr')) . ", 60-day from AED " . number_format(visa_price('tourist-60-multi')) . ". Jain & Gujarati family specialist with on-the-ground Dubai…";
$pageKeywords    = "UAE visa from Ahmedabad, Dubai visa from Ahmedabad, UAE tourist visa Ahmedabad, AMD Dubai flights, Dubai visa for Gujarati families, Jain Dubai visa, UAE visa Gujarat 2026, Ahmedabad to Dubai package";
$pageCanonical   = "https://arihantlink.com/uae-visa-from-ahmedabad";
$currentPage     = "uae-visa-from-ahmedabad";

$pageHeading            = "UAE Visa from Ahmedabad &mdash; Jain &amp; Gujarati Family Specialist";
$breadcrumbCategory     = "UAE Visa";
$breadcrumbCategoryLink = "uae-visa";
$breadcrumbBg           = "img/UAE-tourist-visa.webp";

$schemaMarkup = '
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "UAE Visa Processing for Ahmedabad Residents",
    "description": "UAE tourist visa processing for Ahmedabad-based applicants with INR pricing. Tourist, transit, multi-entry, family visit. UAE-licensed travel agency specialising in Jain and Gujarati family travel.",
    "serviceType": "Visa Processing",
    "provider": {"@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"}, "name": "Arihant Travels Pvt Ltd", "url": "https://arihantlink.com", "telephone": "+971585945007"},
    "areaServed": [{"@type": "City", "name": "Ahmedabad"}, {"@type": "AdministrativeArea", "name": "Gujarat"}, {"@type": "Country", "name": "India"}]
  },
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "UAE Visa from Ahmedabad — Cost, Documents & How to Apply",
    "author": {"@type": "Organization", "name": "Arihant Travels UAE Visa Desk"},
    "publisher": {"@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"}, "name": "Arihant Travels Pvt Ltd", "logo": {"@type": "ImageObject", "url": "https://arihantlink.com/img/logo.png"}},
    "datePublished": "2026-05-08",
    "dateModified": "' . date('Y-m-d') . '",
    "mainEntityOfPage": {"@type": "WebPage", "@id": "https://arihantlink.com/uae-visa-from-ahmedabad"}
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://arihantlink.com"},
      {"@type": "ListItem", "position": 2, "name": "UAE Visa", "item": "https://arihantlink.com/uae-visa"},
      {"@type": "ListItem", "position": 3, "name": "From Ahmedabad", "item": "https://arihantlink.com/uae-visa-from-ahmedabad"}
    ]
  }
]
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<section class="trust-band">
    <div class="container">
        <div class="row g-4 text-center text-md-start align-items-center">
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-rupee-sign me-2"></i> <?php echo visa_price_inr_label('tourist-30-single', true); ?></h3><p class="mb-0 small">30-day visa from AMD</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-leaf me-2"></i> 100% Veg</h3><p class="mb-0 small">Jain meals on every tour</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-language me-2"></i> Gujarati</h3><p class="mb-0 small">Spoken on WhatsApp</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fab fa-whatsapp me-2"></i> Direct</h3><p class="mb-0 small">+971 58 594 5007</p></div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article-prose">
                    <div class="article-meta">
                        <span><i class="far fa-calendar-alt"></i> Updated <?php echo date('F Y'); ?></span>
                        <span><i class="far fa-user"></i> Arihant Travels UAE Visa Desk</span>
                        <span><i class="fas fa-map-marker-alt"></i> Founded by Shweta &amp; Neeraj Jain</span>
                    </div>

                    <p class="lead" style="font-size:1.15rem; color:var(--text-light);">
                        Ahmedabad is one of the largest sources of Indian travellers to the UAE,
                        and the heart of our Jain &amp; Gujarati family customer base. We&rsquo;re
                        founded by a Jain family (Shweta and Neeraj Jain), based on the ground in
                        Sharjah, and we&rsquo;ve built our practice specifically around Gujarati
                        and Jain travellers from Ahmedabad, Surat, Vadodara and Rajkot. This page
                        covers the UAE visa specifically &mdash; how to apply from Ahmedabad,
                        what it costs in INR, and how to plan onward Jain-friendly Dubai travel.
                    </p>

                    <h2 id="our-edge">Why Ahmedabad families pick us</h2>
                    <p>
                        We&rsquo;re the only Jain-focused travel agency physically based in the
                        UAE. Other operators sell &ldquo;Jain Dubai&rdquo; from Ahmedabad
                        offices and outsource the on-the-ground execution. That&rsquo;s where
                        things go wrong &mdash; the wrong meal arrives at the desert safari, the
                        BAPS Mandir Abu Dhabi pre-registration is missed, the hotel
                        doesn&rsquo;t know what &ldquo;no onion no garlic&rdquo; means in
                        practice. We handle every step on UAE soil, in person.
                    </p>
                    <p>
                        Apart from this practical edge, our visa team speaks Gujarati on
                        WhatsApp, accepts payment in INR (UPI, Google Pay, bank transfer), and
                        files visas the same day for Ahmedabad applicants. There&rsquo;s no
                        agent office to visit; the whole thing happens through your phone.
                    </p>

                    <h2 id="visa-types">Which UAE visa for your trip from Ahmedabad</h2>
                    <ul>
                        <li><strong>30-day single-entry tourist visa</strong> &mdash; <span class="price-pill"><?php echo visa_price_inr_label('tourist-30-single'); ?></span>. Right for a 1&ndash;4 week Dubai trip with no plans to leave the UAE.</li>
                        <li><strong>60-day multi-entry tourist visa</strong> &mdash; <span class="price-pill"><?php echo visa_price_inr_label('tourist-60-multi'); ?></span>. Most common pick for Ahmedabad families. Use it for Dubai + Abu Dhabi BAPS Mandir + a side trip to Oman or Saudi if you&rsquo;re combining a Holy Hindu / Jain pilgrimage.</li>
                        <li><strong>5-year multi-entry visa</strong> &mdash; for Ahmedabad business owners (diamond, textile, pharma) and families who visit Dubai twice a year or more. Up to 90 days per visit. Pricing on request.</li>
                        <li><strong>96-hour transit visa</strong> &mdash; <span class="price-pill"><?php echo visa_price_inr_label('transit-96'); ?></span>. For an AMD &harr; somewhere-else trip with a Dubai layover.</li>
                    </ul>
                    <p>
                        For families travelling with Jain-observant grandparents, we usually
                        recommend a 60-day visa. It gives you room for a few extra
                        days if the BAPS Mandir Abu Dhabi pre-registration window pushes, or
                        if a senior wants more rest days. Combine with our
                        <a href="dubai-tour-from-india">Dubai tour from India &mdash; Jain &amp; veg
                        package</a> for the full itinerary.
                    </p>

                    <h2 id="documents">Documents we need from you</h2>
                    <ul>
                        <li>Passport bio-data scan (front page with photo). Validity 6+ months from travel date.</li>
                        <li>Recent passport-size colour photo, white background, JPEG.</li>
                        <li>Confirmed return flight: AMD &harr; DXB / SHJ / AUH.</li>
                        <li>Hotel booking, or our package voucher if you&rsquo;ve booked your Dubai trip with us.</li>
                        <li>Recent 3-month bank statement (any Indian bank). PDF from net banking is preferred over screenshots.</li>
                        <li>Salary slip / NOC (if employed) or business proof / ITR (if self-employed). For Ahmedabad-based business owners, GST registration certificate works as a clean income proof.</li>
                        <li>For married women travelling alone: marriage certificate (not always required but speeds up edge cases).</li>
                    </ul>
                    <div class="article-callout">
                        <strong>Ahmedabad-specific tip.</strong> Most of our Ahmedabad applicants
                        bank with HDFC, ICICI, Axis, Bank of Baroda, Kotak, IDFC First or SBI.
                        Pull the bank statement directly from net banking as a PDF, not a
                        screenshot. We pre-check for &ldquo;screenshot rejection&rdquo; before we
                        submit so you don&rsquo;t lose a day to a re-submission.
                    </div>

                    <h2 id="how-to-apply">The application flow &mdash; from your phone</h2>
                    <ol>
                        <li><strong>WhatsApp us your documents</strong> on +971 58 594 5007. We confirm receipt within an hour. Gujarati or Hindi, whatever you&rsquo;re comfortable with.</li>
                        <li><strong>Free document check</strong> &mdash; we tell you immediately if anything is missing or weak (for example, a passport with less than 6 months validity, or a bank statement that doesn&rsquo;t show address).</li>
                        <li><strong>Pay in INR</strong> &mdash; UPI, Google Pay, IMPS or NEFT to our INR account. We send a single transparent invoice (visa fee + service fee in INR).</li>
                        <li><strong>We file your application</strong> through ICA or GDRFA Dubai depending on your entry airport.</li>
                        <li><strong>Visa as a PDF to your email</strong> in 3&ndash;4 working days. Print it, attach to your passport, fly.</li>
                    </ol>

                    <h2 id="flights">Ahmedabad to UAE &mdash; flight options</h2>
                    <ul>
                        <li><strong>AMD &harr; DXB</strong> &mdash; Emirates, IndiGo, Air India Express, SpiceJet. ~3 hours. Multiple daily.</li>
                        <li><strong>AMD &harr; SHJ</strong> &mdash; Air Arabia, IndiGo. ~3 hours. Often the cheapest if you&rsquo;re flexible on landing emirate.</li>
                        <li><strong>AMD &harr; AUH</strong> &mdash; Etihad, IndiGo. ~3 hours.</li>
                    </ul>
                    <p>
                        For Jain-observant travellers, Air India Express and IndiGo serve
                        pre-bookable Jain meals on long-haul/select sectors; Emirates serves a
                        guaranteed vegetarian meal as a special meal request placed at booking.
                        We can advise per route based on what other Ahmedabad customers have
                        actually been served lately.
                    </p>

                    <h2 id="dubai-trip">After the visa &mdash; Dubai planning for Jain &amp; Gujarati families</h2>
                    <p>
                        We don&rsquo;t just do visas &mdash; we&rsquo;re a full-service Dubai
                        travel agency for Indian families. Common bookings for Ahmedabad
                        families:
                    </p>
                    <ul>
                        <li><a href="dubai-tour-from-india">Dubai tour from India</a> &mdash; pure-veg packages with INR pricing, BAPS Mandir Abu Dhabi included.</li>
                        <li><a href="abu-dhabi-city-tour">Abu Dhabi city tour with BAPS Mandir</a> &mdash; we handle the pre-registration and add a Jain lunch.</li>
                        <li><a href="desert-safari">Desert safari with separate Jain BBQ counter</a> &mdash; this is one of the few in Dubai that&rsquo;s actually Jain-clean.</li>
                        <li><a href="dubai-honeymoon-package">Dubai honeymoon package</a> &mdash; for Jain weddings in Ahmedabad, we run honeymoon trips with full Jain meal compliance.</li>
                        <li><a href="dubai-family-holidays">Dubai family holidays</a> &mdash; relaxed pace for grandparents and kids.</li>
                    </ul>

                    <h2 id="faq-quick">Common Ahmedabad questions, fast</h2>
                    <p>
                        <em>&ldquo;We have a wedding at Atlantis next month, can you turn the visa around in time?&rdquo;</em> Yes, if you message us today. Standard processing is 3&ndash;4 working days. Express processing is available if it&rsquo;s tighter.
                    </p>
                    <p>
                        <em>&ldquo;My parents are 75&ndash;80, will the visa be approved?&rdquo;</em> Age is not a rejection factor. We need a clean passport and standard documents. Health insurance is recommended for senior citizens at the border.
                    </p>
                    <p>
                        <em>&ldquo;Can you also book the Dubai trip?&rdquo;</em> Yes &mdash; that&rsquo;s actually most of what we do. Visa + flights + hotels + activities + Jain meals, all on a single quote.
                    </p>
                    <p>
                        <em>&ldquo;We are 25 people, can you handle a group?&rdquo;</em> Yes &mdash; we run Jain group tours from Ahmedabad regularly. Send group sizes and dates and we&rsquo;ll quote the visa pack and group package together.
                    </p>
                </article>
            </div>

            <aside class="col-lg-4">
                <nav class="toc d-none d-lg-block" aria-label="On this page">
                    <p class="toc__title">On this page</p>
                    <ol>
                        <li><a href="#our-edge">Why Ahmedabad picks us</a></li>
                        <li><a href="#visa-types">Which visa fits</a></li>
                        <li><a href="#documents">Documents required</a></li>
                        <li><a href="#how-to-apply">Application flow</a></li>
                        <li><a href="#flights">AMD &harr; UAE flights</a></li>
                        <li><a href="#dubai-trip">Dubai planning for Jain families</a></li>
                        <li><a href="#faq-quick">Quick answers</a></li>
                    </ol>
                </nav>

                <div class="card border-0 shadow-sm mt-4" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                    <div class="card-body p-4 text-center">
                        <i class="fab fa-whatsapp fa-3x mb-3"></i>
                        <h3 class="h5 text-white">Apply from Ahmedabad &mdash; Gujarati team</h3>
                        <p class="mb-3" style="opacity:0.9;">Free document check. INR pricing.
                            Visa to your email in 3&ndash;4 days. Gujarati on WhatsApp.</p>
                        <a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20visa%20from%20Ahmedabad" target="_blank" rel="noopener"
                           class="btn btn-whatsapp w-100 rounded-pill py-2">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
                        </a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Visa prices</h3>
                        <table class="table table-sm mb-0">
                            <tbody>
                                <tr><td>30-day single</td><td class="text-end fw-semibold"><?php echo visa_price_inr_label('tourist-30-single', true); ?></td></tr>
                                <tr><td>60-day multi</td><td class="text-end fw-semibold"><?php echo visa_price_inr_label('tourist-60-multi', true); ?></td></tr>
                                <tr><td>96-hour transit</td><td class="text-end fw-semibold"><?php echo visa_price_inr_label('transit-96', true); ?></td></tr>
                                <tr><td>5-year multi-entry</td><td class="text-end fw-semibold">On request</td></tr>
                            </tbody>
                        </table>
                        <p class="small text-muted mb-0 mt-2">UPI / Google Pay / IMPS / NEFT accepted.</p>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Other Indian cities</h3>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-2"><a href="uae-visa-from-mumbai">UAE visa from Mumbai</a></li>
                            <li class="mb-2"><a href="uae-visa-from-surat">UAE visa from Surat</a></li>
                            <li><a href="uae-visa">UAE visa &mdash; main page</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2 class="mb-3">Ready to apply for your UAE visa from Ahmedabad?</h2>
        <p class="mb-4" style="opacity:0.9;">Free document check. INR pricing. Gujarati on WhatsApp.</p>
        <a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20visa%20from%20Ahmedabad" target="_blank" rel="noopener"
           class="btn btn-whatsapp rounded-pill px-4 py-3">
            <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
