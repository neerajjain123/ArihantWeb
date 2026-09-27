<?php
// =====================================================================
// UAE A2A VISA — sister page to /uae-visa
// Rewritten 2026-09-26. A2A is NOT an inside-country extension: the
// customer flies to Kish Island (Iran), stays one night
// and comes back the next day on a new visa. (The inside-country
// extension is a separate service — see /uae-visa#extensions.)
// Prices come from includes/visa-prices.php.
// =====================================================================
require_once __DIR__ . '/includes/visa-prices.php';

$a2aPrice   = visa_price_label('a2a-60');
$a2aExpress = visa_price_label('a2a-60', 'express_aed');
$extPrice   = visa_price_label('inside-extension');

$pageTitle       = "UAE A2A Visa Extension 2026 — One Night Out, New 60-Day Visa | Arihant";
$pageDescription = "UAE A2A visa via Kish Island: one night away, back the next day on a new 60-day visa. " . $a2aPrice . " incl. return flights, hotel and visa.";
$pageKeywords    = "uae a2a visa extension, a2a visa change uae, a2a visa 60 days, uae visa change island, kish island visa change, kish island a2a, uae visa change kish, dubai a2a visa, uae visa change without going home, uae visa renewal tourist, a2a visa cost";
$pageCanonical   = "https://arihantlink.com/uae-a2a-visa-extension-60-days";
$currentPage     = "uae-visa";

$pageHeading            = "UAE A2A Visa &mdash; New 60-Day Visa";
$breadcrumbCategory     = "UAE Visa";
$breadcrumbCategoryLink = "uae-visa";
$breadcrumbBg           = "img/UAE-tourist-visa.webp";
$breadcrumbOverlay      = false;

$faqs = [
    ['What is a UAE A2A visa?',
     'A2A is the route to get a <strong>new UAE visit visa</strong> when your current one is running out. You fly to <strong>Kish Island</strong>, stay <strong>one night</strong>, and come back the next day on a <strong>new 60-day visa</strong>. It is a government-approved way to stay longer in the UAE.'],
    ['Do I have to leave the UAE for A2A?',
     'Yes, for one night. You fly to Kish Island and return the next day. If you don&rsquo;t want to travel at all and you are on a single-entry visa, an <a href="uae-visa#extensions">inside-country extension</a> may suit you better.'],
    ['How much does A2A cost?',
     'From <strong>' . preg_replace('/^From /', '', $a2aPrice) . '</strong>, including return flights, one night&rsquo;s hotel and your new 60-day visa. We confirm the final price for your dates before you pay.'],
    ['What is the difference between A2A and a visa extension?',
     'An extension adds 30 days without leaving the UAE, for ' . $extPrice . ' each time, but only single-entry visas can be extended (30-day visa up to twice, 60-day visa once). A2A gives you a brand-new 60-day visa after one night outside the UAE, and works when an extension is not possible.'],
    ['When should I plan my A2A trip?',
     'Before your current visa expires. Overstay fines of AED 50 a day start the day after it expires, so message us at least a week ahead.'],
    ['Can my parents use A2A?',
     'Yes, if they are in the UAE on a visit visa and are comfortable with one night of travel. We plan the trip around them.'],
];

$faqSchema = [];
foreach ($faqs as $f) {
    $faqSchema[] = ['@type' => 'Question', 'name' => $f[0],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => html_entity_decode(strip_tags($f[1]), ENT_QUOTES, 'UTF-8')]];
}

$schemaMarkup = '
<script type="application/ld+json">
' . json_encode([
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'UAE A2A Visa (60 days)',
        'description' => 'Get a new 60-day UAE visit visa by flying to Kish Island for one night and returning the next day. Price includes return flights, hotel and visa. Arranged by a UAE-licensed travel agency.',
        'serviceType' => 'UAE Visa Change',
        'provider' => ['@type' => 'TravelAgency', 'name' => 'Arihant Travels Pvt Ltd', 'url' => 'https://arihantlink.com', 'telephone' => '+971585945007',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Al Rayyan Complex, Al Nahda', 'addressLocality' => 'Sharjah', 'addressRegion' => 'Sharjah', 'addressCountry' => 'AE']],
        'areaServed' => ['@type' => 'Country', 'name' => 'United Arab Emirates'],
        'offers' => ['@type' => 'Offer', 'name' => 'UAE A2A Visa (60 days)', 'price' => (string) visa_price('a2a-60'),
            'priceCurrency' => 'AED', 'availability' => 'https://schema.org/InStock', 'url' => $pageCanonical],
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://arihantlink.com'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'UAE Visa', 'item' => 'https://arihantlink.com/uae-visa'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'A2A Visa', 'item' => $pageCanonical],
        ],
    ],
    ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faqSchema],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '
</script>';

$a2aWhatsapp = visa_whatsapp_link('a2a-60');

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- TRUST BAND -->
<section class="trust-band">
    <div class="container">
        <div class="row g-4 text-center text-md-start align-items-center">
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fas fa-tag me-2"></i> <?php echo $a2aPrice; ?></h3>
                <p class="mb-0 small">New 60-day visa</p>
            </div>
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fas fa-moon me-2"></i> 1 Night Out</h3>
                <p class="mb-0 small">Back the next day</p>
            </div>
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fas fa-landmark me-2"></i> Government Route</h3>
                <p class="mb-0 small">Official way to stay longer</p>
            </div>
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fab fa-whatsapp me-2"></i> Planned With You</h3>
                <p class="mb-0 small">On WhatsApp, start to finish</p>
            </div>
        </div>
    </div>
</section>

<!-- INTRO + SIDEBAR CTA -->
<section class="page-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article-prose">
                    <div class="article-meta">
                        <span><i class="far fa-calendar-alt"></i> Last updated September 2026</span>
                        <span><i class="far fa-user"></i> Arihant Travels UAE Visa Desk</span>
                        <span><i class="fas fa-shield-alt"></i> UAE-licensed travel agency, Sharjah</span>
                    </div>

                    <p class="lead" style="font-size: 1.15rem; color: var(--text-light);">
                        Your UAE visit visa is running out, but you want to stay longer? With A2A you
                        fly to <strong>Kish Island</strong> for <strong>one night</strong>, and come back
                        the next day on a <strong>new 60-day visa</strong>. It&rsquo;s the
                        government-approved way to stay on, and we arrange it for you,
                        <strong><?php echo lcfirst($a2aPrice); ?></strong> &mdash; including return
                        flights, one night&rsquo;s hotel and your new visa.
                    </p>

                    <div class="article-callout">
                        <strong>Plan ahead:</strong> sort out your A2A trip before your current visa
                        expires &mdash; overstay fines of AED 50 a day start the day after. Message us at
                        least a week before. Express processing is available,
                        <?php echo lcfirst($a2aExpress); ?>.
                    </div>

                    <h2 id="what-is-a2a">How A2A works</h2>
                    <ol>
                        <li><strong>Tell us your visa expiry date</strong> and send your passport copy on WhatsApp.</li>
                        <li><strong>We book everything</strong> &mdash; return flights, one night&rsquo;s hotel and your new 60-day visa &mdash; and confirm the final price before you pay.</li>
                        <li><strong>You fly to Kish Island</strong> and stay one night in the hotel we booked.</li>
                        <li><strong>You fly back the next day</strong> and enter the UAE on your new 60-day visa.</li>
                    </ol>

                    <h2 id="a2a-or-extension">A2A or an extension &mdash; which do you need?</h2>
                    <p>
                        There are two ways to stay longer in the UAE. They are different services:
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered bg-white shadow-sm">
                            <thead style="background: var(--primary); color:#fff;">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Inside-country extension</th>
                                    <th>A2A</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td><strong>Leave the UAE?</strong></td><td>No</td><td>Yes, one night on Kish Island</td></tr>
                                <tr><td><strong>What you get</strong></td><td>+30 days on your current visa</td><td>A new 60-day visa</td></tr>
                                <tr><td><strong>Which visas</strong></td><td>Single-entry only (30-day up to twice, 60-day once)</td><td>When an extension isn&rsquo;t possible, or you need more time</td></tr>
                                <tr><td><strong>Price</strong></td><td><?php echo $extPrice; ?> per extension</td><td><?php echo $a2aPrice; ?></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p>
                        Not sure which one fits? <a href="<?php echo $a2aWhatsapp; ?>" target="_blank" rel="noopener">Send us your visa on WhatsApp</a>
                        and we&rsquo;ll tell you.
                    </p>

                    <h2 id="documents">What we need from you</h2>
                    <p>
                        To start, send your <strong>passport copy</strong> and your <strong>current UAE visa</strong>.
                        We&rsquo;ll tell you if anything else is needed for your case before you pay.
                    </p>

                    <h2 id="why-arihant">Why arrange A2A with Arihant Travels</h2>
                    <ul>
                        <li><strong>UAE-licensed travel agency</strong> with an office in Sharjah.</li>
                        <li><strong>We check your documents before you pay</strong>, so there are no surprises.</li>
                        <li><strong>We plan the trip around you</strong> &mdash; including elderly parents and families.</li>
                        <li><strong>WhatsApp updates at every step</strong>, from booking to your return.</li>
                    </ul>
                </article>
            </div>

            <!-- STICKY SIDEBAR -->
            <aside class="col-lg-4">
                <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                    <div class="card-body p-4 text-center">
                        <i class="fab fa-whatsapp fa-3x mb-3"></i>
                        <h3 class="h5 text-white">Plan your A2A trip</h3>
                        <p class="mb-3" style="opacity:0.9;">Send your visa expiry date. We&rsquo;ll confirm the price and plan.</p>
                        <a href="<?php echo $a2aWhatsapp; ?>" target="_blank" rel="noopener"
                           class="btn btn-whatsapp w-100 rounded-pill py-2">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
                        </a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">At a glance</h3>
                        <table class="table table-sm mb-0">
                            <tbody>
                                <tr><td>You get</td><td class="text-end fw-semibold">New 60-day visa</td></tr>
                                <tr><td>Price</td><td class="text-end fw-semibold"><?php echo $a2aPrice; ?></td></tr>
                                <tr><td>Express</td><td class="text-end fw-semibold"><?php echo $a2aExpress; ?></td></tr>
                                <tr><td>Time away</td><td class="text-end fw-semibold">1 night</td></tr>
                                <tr><td>Where</td><td class="text-end fw-semibold">Kish Island</td></tr>
                                <tr><td>Includes</td><td class="text-end fw-semibold">Flights, hotel, visa</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Related</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="uae-visa#extensions"><i class="fas fa-arrow-right me-1"></i> Extend your visa without leaving</a></li>
                            <li class="mb-2"><a href="uae-visa"><i class="fas fa-arrow-right me-1"></i> All UAE visa types</a></li>
                            <li class="mb-2"><a href="uae-express-visa"><i class="fas fa-arrow-right me-1"></i> UAE express 24-48 hr visa</a></li>
                            <li class="mb-2"><a href="uae-visa-status"><i class="fas fa-arrow-right me-1"></i> Check UAE visa status</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="page-section page-section--light" id="faq">
    <div class="container" style="max-width: 880px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">FAQ</span>
            <h2 class="section-heading__title">UAE A2A visa &mdash; common questions</h2>
        </div>
        <div class="accordion faq-accordion" id="a2aFaq">
            <?php foreach ($faqs as $i => $faq):
                $id = 'a2afaq' . ($i + 1);
                $isOpen = $i === 0;
            ?>
            <div class="accordion-item mb-3 border-0 shadow-sm">
                <h3 class="accordion-header">
                    <button class="accordion-button <?php echo $isOpen ? '' : 'collapsed'; ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>">
                        <?php echo htmlspecialchars($faq[0]); ?>
                    </button>
                </h3>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" data-bs-parent="#a2aFaq">
                    <div class="accordion-body"><?php echo $faq[1]; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center mt-4 mb-0">
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" rel="noopener">Read our reviews on Google</a>
        </p>
    </div>
</section>

<!-- CTA STRIP -->
<section class="page-section page-section--light-2">
    <div class="container text-center" style="max-width: 720px;">
        <h2 class="mb-3">Need to stay longer in the UAE?</h2>
        <p class="fs-5 mb-4">Send us your visa expiry date &mdash; we&rsquo;ll tell you whether an extension or A2A fits, and plan it.</p>
        <a href="<?php echo $a2aWhatsapp; ?>" target="_blank" rel="noopener"
            class="btn btn-success btn-lg rounded-pill px-5 me-2 mb-2">
            <i class="fab fa-whatsapp me-2"></i>WhatsApp Now
        </a>
        <a href="uae-visa" class="btn btn-outline-primary btn-lg rounded-pill px-5 mb-2">
            <i class="fas fa-arrow-left me-2"></i>All UAE Visas
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
