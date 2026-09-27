<?php
// =============================================================================
//  JAIN FAMILY DESERT SAFARI — product page
//  Created 2026-09-27. Product decisions confirmed by the owner:
//    - VIP camp, shared 4x4 Land Cruiser
//    - Jain dinner ALWAYS served before sunset (chauvihar-friendly)
//    - Jain food cooked separately, separate utensils, served at the table
//    - AED 199 per adult (₹4,600, same pairing as the Premium safari)
//  NOT confirmed yet (so not promised on the page): child price, exact menu.
// =============================================================================
$safari = [
    'price_aed'   => 199,
    'price_inr'   => 4600,
    'duration'    => '6 hrs',
    'dropoff'     => 'around 9:30 PM',
];

$pageTitle       = "Jain Desert Safari Dubai | Dinner Before Sunset | AED " . $safari['price_aed'];
$pageDescription = "Desert safari for Jain families: Jain dinner cooked separately and served at your table before sunset (chauvihar). VIP sofa seating, dune bashing. AED " . $safari['price_aed'] . ".";
$pageKeywords    = "jain desert safari dubai, jain food desert safari, chauvihar desert safari, desert safari jain dinner before sunset, jain family desert safari, pure veg desert safari dubai, desert safari for jain families";
$pageCanonical   = "https://arihantlink.com/jain-desert-safari-dubai";
$currentPage     = "jain-desert-safari-dubai";

$pageHeading     = "Jain Family Desert Safari";
$breadcrumbBg    = "img/safari/VIPCamp/vip-desert-safari-banner.webp"; // og:image
$extraCss        = ['css/visa.css', 'css/jain-guides.css'];

$waLink = 'https://wa.me/971585945007?text=' . rawurlencode("Hi Arihant Travels, I'd like to book the Jain Family Desert Safari. Date: ___ Adults: ___ Children: ___ Hotel: ___");

$timeline = [
    ['Afternoon pickup', 'Shared 4x4 Land Cruiser from your hotel. The pickup time is set by the season so your dinner is served before sunset — we confirm the exact time when you book.'],
    ['Dune bashing', 'About 20 minutes over the red dunes with an experienced driver.'],
    ['Arrive at the VIP camp', 'Sofa seating around your own table, with drinks served to you.'],
    ['Jain dinner — before sunset', 'Your Jain meal, cooked separately, is served hot at your table before the sun goes down.'],
    ['Sunset over the dunes', 'Watch the sun set over the desert with your meal already done.'],
    ['Camel ride & sandboarding', 'Short camel ride and sandboarding at the camp.'],
    ['Evening show', 'The camp&rsquo;s live show: Tanoura, fire show and belly dance.'],
    ['Drop-off', 'Back at your hotel ' . $safari['dropoff'] . '.'],
];

$included = [
    'Hotel pickup and drop-off in a shared 4x4 Land Cruiser (central Dubai)',
    'Dune bashing (about 20 minutes)',
    'Jain dinner cooked separately, with separate utensils, served at your table',
    'Dinner served before sunset (chauvihar-friendly)',
    'VIP sofa seating with table service',
    'Unlimited drinks at your table',
    'Camel ride and sandboarding',
    'Tanoura, fire show and belly dance',
];
$notIncluded = [
    'Quad bike / ATV ride (available as an add-on)',
    'Pickup surcharge for Palm Jumeirah, Sharjah and Ajman (see pickup zones below)',
    'Personal expenses and tips',
];

$faqs = [
    ['What makes this a Jain desert safari?',
     'Three things: your Jain meal is <strong>cooked separately with separate utensils</strong> (no onion, garlic, potato or other root vegetables, and no eggs), it is <strong>served at your table</strong> rather than from the shared buffet, and it is <strong>served before sunset</strong> for families who observe chauvihar.'],
    ['Is dinner really served before sunset every day?',
     'Yes, on every booking of this safari. Sunset in Dubai ranges from about 5:30 PM in winter to about 7:15 PM in summer, so we set your pickup time by the season. We confirm the exact pickup time when you book.'],
    ['Is the camp shared with other guests?',
     'Yes. This safari uses our VIP camp with a shared 4x4. Other guests at the camp eat from the regular buffet, which includes non-vegetarian food. Your Jain meal is prepared separately and served at your own table.'],
    ['Can we tell you about extra food rules, like tithi days?',
     'Yes. Tell us your family&rsquo;s rules when you book (for example, no green vegetables on tithi days) and we&rsquo;ll confirm what the kitchen can arrange.'],
    ['What is the price?',
     'AED ' . $safari['price_aed'] . ' (about ₹' . number_format($safari['price_inr']) . ') per adult, including pickup from central Dubai. Ask us for the children&rsquo;s price.'],
    ['Is it suitable for grandparents and small children?',
     'The camp part is comfortable for all ages, with sofa seating and table service. Dune bashing is bumpy and is not recommended for children under 3, pregnant guests, or anyone with heart or back conditions. Tell us when you book and we&rsquo;ll advise.'],
    ['Does the evening show include belly dance?',
     'Yes. The camp&rsquo;s show includes Tanoura, a fire show and belly dance. It is part of the shared camp programme.'],
];
$faqSchema = [];
foreach ($faqs as $f) {
    $faqSchema[] = ['@type' => 'Question', 'name' => $f[0],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => html_entity_decode(strip_tags($f[1]), ENT_QUOTES, 'UTF-8')]];
}
$itinerarySchema = [];
foreach ($timeline as $i => $t) {
    $itinerarySchema[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => html_entity_decode($t[0], ENT_QUOTES, 'UTF-8')];
}
$schemaMarkup = '<script type="application/ld+json">' . json_encode([
    [
        '@context' => 'https://schema.org',
        '@type' => 'TouristTrip',
        'name' => 'Jain Family Desert Safari, Dubai',
        'description' => $pageDescription,
        'url' => $pageCanonical,
        'image' => 'https://arihantlink.com/' . $breadcrumbBg,
        'touristType' => ['Jain families', 'Vegetarian travelers', 'Indian families'],
        'itinerary' => ['@type' => 'ItemList', 'itemListElement' => $itinerarySchema],
        'offers' => [
            '@type' => 'Offer',
            'price' => (string) $safari['price_aed'],
            'priceCurrency' => 'AED',
            'availability' => 'https://schema.org/InStock',
            'url' => $pageCanonical,
        ],
        'provider' => [
            '@type' => 'TravelAgency', 'name' => 'Arihant Travels Pvt Ltd', 'url' => 'https://arihantlink.com', 'telephone' => '+971585945007',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Al Rayyan Complex, Al Nahda', 'addressLocality' => 'Sharjah', 'addressRegion' => 'Sharjah', 'addressCountry' => 'AE'],
        ],
    ],
    ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faqSchema],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

include __DIR__ . '/includes/header.php';
?>

<section class="visa-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb visa-hero__crumbs">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/desert-safari">Desert Safari</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jain Family Desert Safari</li>
            </ol>
        </nav>
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <div class="visa-hero__intro">
                    <h1 class="visa-hero__title"><?php echo $pageHeading; ?></h1>
                    <p class="visa-hero__lead">
                        The Dubai desert, the way a Jain family wants it. Your Jain dinner is
                        <strong>cooked separately</strong>, <strong>served at your table</strong>
                        and <strong>finished before sunset</strong> &mdash; then relax and enjoy the
                        dunes, the camel ride and the evening show.
                    </p>
                    <p class="jain-price">
                        <span class="jain-price__amount">AED <?php echo $safari['price_aed']; ?></span>
                        <span class="jain-price__inr">≈ ₹<?php echo number_format($safari['price_inr']); ?> per adult</span>
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="<?php echo $waLink; ?>" target="_blank" rel="noopener" class="btn btn-primary rounded-pill px-4" data-cta="jain-safari-book">
                            <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                        </a>
                        <a href="#evening" class="btn btn-outline-primary rounded-pill px-4">See the evening</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="img/safari/VIPCamp/desert-safar-standard-camp-sitting.webp" alt="VIP sofa seating at the desert safari camp"
                     class="img-fluid rounded-4 shadow-sm w-100" style="aspect-ratio:4/3; object-fit:cover;" width="640" height="480" fetchpriority="high">
            </div>
        </div>

        <div class="jain-facts mt-4">
            <div class="jain-facts__item"><i class="fas fa-sun"></i><div><strong>Chauvihar</strong><span>Dinner before sunset</span></div></div>
            <div class="jain-facts__item"><i class="fas fa-utensils"></i><div><strong>Jain kitchen</strong><span>Cooked separately</span></div></div>
            <div class="jain-facts__item"><i class="fas fa-couch"></i><div><strong>VIP camp</strong><span>Sofa seating, table service</span></div></div>
            <div class="jain-facts__item"><i class="fas fa-car-side"></i><div><strong>Hotel pickup</strong><span><?php echo $safari['duration']; ?>, back <?php echo $safari['dropoff']; ?></span></div></div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article-prose">
                    <h2 id="why">Why Jain families choose this safari</h2>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="arihant-card h-100"><div class="arihant-card__body">
                                <h3 class="h6"><i class="fas fa-sun text-primary me-2"></i>Dinner before sunset</h3>
                                <p class="small mb-0">On a normal evening safari, dinner comes after dark. Here your meal is served before sunset, every time.</p>
                            </div></div>
                        </div>
                        <div class="col-md-4">
                            <div class="arihant-card h-100"><div class="arihant-card__body">
                                <h3 class="h6"><i class="fas fa-utensils text-primary me-2"></i>Truly Jain, not just veg</h3>
                                <p class="small mb-0">Cooked separately with separate utensils. No onion, garlic, potato or other root vegetables, and no eggs.</p>
                            </div></div>
                        </div>
                        <div class="col-md-4">
                            <div class="arihant-card h-100"><div class="arihant-card__body">
                                <h3 class="h6"><i class="fas fa-users text-primary me-2"></i>Comfortable for all ages</h3>
                                <p class="small mb-0">Sofa seating and table service, so grandparents don&rsquo;t queue at a buffet in the sand.</p>
                            </div></div>
                        </div>
                    </div>

                    <h2 id="evening">How your evening runs</h2>
                    <ol class="jain-timeline">
                        <?php foreach ($timeline as [$step, $text]): ?>
                        <li><strong><?php echo $step; ?></strong><span><?php echo $text; ?></span></li>
                        <?php endforeach; ?>
                    </ol>

                    <h2 id="jain-food">Your Jain meal</h2>
                    <ul>
                        <li><strong>Cooked separately</strong>, in separate utensils, away from the camp&rsquo;s regular buffet.</li>
                        <li><strong>No onion, no garlic, no potato or other root vegetables, no eggs.</strong></li>
                        <li><strong>Served hot at your table</strong> &mdash; you don&rsquo;t go to the shared buffet.</li>
                        <li><strong>Served before sunset</strong>, so families observing chauvihar can eat comfortably.</li>
                        <li><strong>Extra rules?</strong> Tell us about tithi days or other restrictions when you book, and we&rsquo;ll confirm what the kitchen can arrange.</li>
                    </ul>
                    <div class="article-callout">
                        <strong>Please note:</strong> the camp is shared, and other guests&rsquo; buffet includes
                        non-vegetarian food. Your family&rsquo;s meal is prepared and served separately.
                    </div>

                    <h2 id="included">What&rsquo;s included</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled jain-list jain-list--yes">
                                <?php foreach ($included as $item): ?><li><?php echo $item; ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h6 text-muted">Not included</h3>
                            <ul class="list-unstyled jain-list jain-list--no">
                                <?php foreach ($notIncluded as $item): ?><li><?php echo $item; ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <h2 id="gallery">At the camp</h2>
                    <div class="row g-2 mb-2">
                        <?php foreach ([
                            ['img/safari/VIPCamp/desert-safar-standard-camp-majlis.webp', 'Majlis seating at the desert camp'],
                            ['img/safari/VIPCamp/desert-safar-standard-camp-tandura-dance.webp', 'Tanoura dance at the desert camp'],
                            ['img/safari/VIPCamp/desert-safar-standard-camp-fire-show-2.webp', 'Fire show at the desert camp'],
                        ] as [$src, $alt]): ?>
                        <div class="col-4">
                            <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" class="img-fluid rounded-3 w-100" style="aspect-ratio:1; object-fit:cover;" width="300" height="300" loading="lazy" decoding="async">
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <h2 id="good-to-know">Good to know</h2>
                    <ul>
                        <li><strong>Pickup time changes with the season</strong> so dinner stays before sunset (sunset is about 5:30 PM in winter and 7:15 PM in summer). We confirm your exact time when you book.</li>
                        <li><strong>Dune bashing is bumpy.</strong> Not recommended for children under 3, pregnant guests, or anyone with heart or back conditions.</li>
                        <li><strong>Wear comfortable clothes</strong> and closed shoes or sandals you don&rsquo;t mind getting sandy. Evenings can be cool in winter &mdash; bring a light layer.</li>
                        <li><strong>Children&rsquo;s price:</strong> ask us on WhatsApp.</li>
                    </ul>
                </article>
            </div>

            <aside class="col-lg-4">
                <div class="card border-0 shadow-sm jain-book-card">
                    <div class="card-body p-4">
                        <p class="small text-muted mb-1">Jain Family Desert Safari</p>
                        <p class="jain-price mb-1"><span class="jain-price__amount">AED <?php echo $safari['price_aed']; ?></span></p>
                        <p class="small text-muted mb-3">≈ ₹<?php echo number_format($safari['price_inr']); ?> per adult &middot; pickup from central Dubai included</p>
                        <ul class="list-unstyled small mb-3">
                            <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Jain dinner before sunset</li>
                            <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Cooked separately, served at table</li>
                            <li class="mb-1"><i class="fas fa-check text-success me-2"></i>VIP sofa seating</li>
                        </ul>
                        <a href="<?php echo $waLink; ?>" target="_blank" rel="noopener" class="btn btn-primary w-100 rounded-pill py-2" data-cta="jain-safari-book-sidebar">
                            <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                        </a>
                        <p class="small text-muted text-center mt-2 mb-0">We confirm your pickup time when you book.</p>
                    </div>
                </div>
                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Planning a Jain trip?</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="/jain-food-dubai"><i class="fas fa-arrow-right me-1"></i> Jain food in Dubai</a></li>
                            <li class="mb-2"><a href="/jain-temple-dubai"><i class="fas fa-arrow-right me-1"></i> Jain temple (derasar) in Dubai</a></li>
                            <li class="mb-2"><a href="/dubai-tour-packages-jain-food"><i class="fas fa-arrow-right me-1"></i> Jain Dubai tour packages</a></li>
                            <li class="mb-2"><a href="/desert-safari"><i class="fas fa-arrow-right me-1"></i> Compare all desert safaris</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="page-section page-section--light" id="faq">
    <div class="container" style="max-width: 880px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">FAQ</span>
            <h2 class="section-heading__title">Jain desert safari &mdash; common questions</h2>
        </div>
        <div class="accordion faq-accordion" id="jainSafariFaq">
            <?php foreach ($faqs as $i => $faq): $id = 'jsfaq' . ($i + 1); $isOpen = $i === 0; ?>
            <div class="accordion-item mb-3 border-0 shadow-sm">
                <h3 class="accordion-header">
                    <button class="accordion-button <?php echo $isOpen ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>">
                        <?php echo htmlspecialchars($faq[0]); ?>
                    </button>
                </h3>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" data-bs-parent="#jainSafariFaq">
                    <div class="accordion-body"><?php echo $faq[1]; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/safari-pickup-zones.php'; ?>
<?php include __DIR__ . '/includes/safari-fitness.php'; ?>
<?php $currentSafariSlug = 'jain-desert-safari-dubai'; include __DIR__ . '/includes/safari-cross-sell.php'; ?>
<?php include __DIR__ . '/includes/mobile-sticky-cta.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
