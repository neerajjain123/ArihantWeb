<?php
// Page SEO Variables
$pageTitle = "Ski Dubai Classic Pass Tickets 2026 | Best Price + Hotel Transfer | Arihant Travels";
$pageDescription = "Book Ski Dubai Classic Pass at the best price — unlimited snow park, tobogganing, Zorb Ball & climbing wall. Winter gear included.";
$pageKeywords = "Ski Dubai Classic Pass, Ski Dubai tickets 2026, indoor snow Dubai, Mall of Emirates snow park, bobsledding Dubai, Zorb Ball Dubai, snow activities Dubai, Ski Dubai price";
$pageCanonical = "https://arihantlink.com/ski-dubai-classic";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Ski Dubai Snow Plus Pass', 'slug' => 'ski-dubai-snow-plus', 'price' => 'From AED 325', 'image' => 'img/themepark/images/ski-dubai-vip-1.avif', 'tag' => 'VIP Upgrade'],
    ['name' => 'IMG Worlds of Adventure', 'slug' => 'img-worlds', 'price' => 'From AED 365', 'image' => 'img/themepark/images/IMG-World-Of-Adventure-cover.webp', 'tag' => 'Theme Park'],
    ['name' => 'Wild Wadi Waterpark', 'slug' => 'wild-wadi', 'price' => 'From AED 299', 'image' => 'img/themepark/images/wildwadi-cover.avif', 'tag' => 'Waterpark'],
];

// Breadcrumb Variables
$pageHeading = "Ski Dubai Classic Pass";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/ski-dubai-classic-1.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-snowflake', 'title' => '-4°C Always', 'sub' => 'Winter Wonderland'],
    ['icon' => 'fas fa-shopping-bag', 'title' => 'Mall of Emirates', 'sub' => 'Indoor Adventure'],
    ['icon' => 'fas fa-infinity', 'title' => 'Unlimited', 'sub' => 'Snow Park Access'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 265', 'sub' => 'Best Value']
];

// SNOW ACTIVITIES DATA
$zonesData = [
    [
        'title' => 'Endless Snow Fun',
        'content' => [
            '<strong>Unlimited Snow Park Access:</strong> Enjoy all the park\'s classic attractions as many times as you like.',
            '<strong>Tobogganing:</strong> Race down snowy hills on traditional sledges for that authentic winter feel.',
            '<strong>Tubing Run:</strong> Slide down exciting snowy slopes in inflatable tubes for safe and fast-paced fun.',
            '<strong>Snow Bumpers:</strong> A frozen twist on a classic favorite—bump into your friends on the ice!'
        ]
    ],
    [
        'title' => 'Unique Experiences',
        'content' => [
            '<strong>Giant Zorb Ball:</strong> Roll down the snow slope inside a massive, transparent inflatable ball.',
            '<strong>Snow Cavern:</strong> Explore a magical world of ice sculptures and interactive frozen displays.',
            '<strong>Climbing Wall:</strong> Test your skills on the snow-covered climbing wall, suitable for all ability levels.'
        ]
    ]
];

// INCLUSIONS & HIGHLIGHTS DATA
$highlightsData = [
    [
        'category' => 'What\'s Included (FREELY Provided)',
        'items' => [
            '<strong>Full Gear Set:</strong> Thermal jacket, trousers, snow boots, and disposable socks.',
            '<strong>Free Gloves:</strong> Fleece gloves provided to keep your hands warm.',
            '<strong>Safety Helmets:</strong> Compulsory and free for all children under 13.',
            '<strong>1x Mountain Thriller:</strong> Includes one thrilling ride down the 185-meter slope.',
            '<strong>1x Chairlift Ride:</strong> Experience a scenic ride over the snow resort.'
        ],
        'type' => 'inclusion'
    ],
    [
        'category' => 'Important Exclusions (NOT Included)',
        'items' => [
            '<strong>Skiing & Snowboarding:</strong> Access to the ski slope is not included in the Classic Pass.',
            '<strong>Penguin Encounter:</strong> Meeting the penguins requires a separate booking or ticket upgrade.',
            '<strong>Lockers & Towels:</strong> Available for rent at the arrival counter.',
            '<strong>Photographs:</strong> Professional photo services are available throughout the park for purchase.'
        ],
        'type' => 'exclusion'
    ]
];

// VISITOR INFO DATA
$visitorGuide = [
    [
        'title' => 'Plan Your Visit',
        'content' => [
            '<strong>Opening Hours:</strong> 10:00 AM to 11:55 PM daily. We recommend arriving early for the best experience.',
            '<strong>Re-entry:</strong> Your pass allows for re-entry on the same day, so you can take breaks for shopping or dining.',
            '<strong>Location:</strong> Located in the West End of the Mall of the Emirates (Al Barsha).'
        ]
    ],
    [
        'title' => 'Know Before You Go',
        'content' => [
            '<strong>Age Policy:</strong> Children aged 2 and above are welcome. Some rides have minimum height requirements (up to 1.2m).',
            '<strong>Health & Safety:</strong> The park is kept at -4°C. We provide thermal gear, but wearing a layer of warm clothing underneath is recommended.',
            '<strong>Accessibility:</strong> Most areas of the snow park are accessible; staff are available for assistance.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'Do I need to bring my own winter clothes?', 'a' => 'No! We provide thermal jackets, trousers, boots, and socks. We even give you free fleece gloves.'],
    ['q' => 'How long can I stay in the Snow Park?', 'a' => 'The Classic Pass gives you unlimited time inside the snow park for a single day.'],
    ['q' => 'Can my child ride the Mountain Thriller?', 'a' => 'Yes, provided they meet the minimum height requirement of 1.2 meters.'],
    ['q' => 'Is there a place to eat inside?', 'a' => 'Yes, you can visit the North 28 restaurant or Avalanche Cafe without exiting the snow resort.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Ski Dubai",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/ski-dubai-classic",
  "image": "https://arihantlink.com/img/themepark/images/ski-dubai-classic-1.avif",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Mall of the Emirates, Sheikh Zayed Road, Al Barsha",
    "addressLocality": "Dubai",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.1181",
    "longitude": "55.2003"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Sunday","Monday","Tuesday","Wednesday","Thursday"],
      "opens": "10:00",
      "closes": "23:55"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Friday","Saturday"],
      "opens": "10:00",
      "closes": "00:00"
    }
  ],
  "offers": {
    "@type": "Offer",
    "name": "Classic Pass",
    "price": "265",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/ski-dubai-classic",
    "seller": { "@type": "Organization", "name": "Arihant Travels Pvt Ltd" }
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3F51B5;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <?php foreach ($quickOverview as $item): ?>
                <div class="col-6 col-md-3">
                    <i class="<?= $item['icon'] ?> fa-2x text-primary mb-2"></i>
                    <p class="mb-0 fw-bold"><?= $item['title'] ?></p>
                    <small class="text-muted"><?= $item['sub'] ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Overview Section -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="mb-4">Ski Dubai Classic Pass Tickets 2026 — Snow Park, Activities & Visitor Guide</h2>
                <p class="lead text-primary mb-4"><strong>Book Ski Dubai Classic Pass at the best price — unlimited indoor snow fun at Mall of the Emirates, year-round.</strong></p>
                <p>Swap the desert heat for a snowy adventure! The Ski Dubai Classic Pass is the perfect way for
                    families and thrill-seekers to enjoy a full day of winter fun. From hurtling down the tube runs to
                    rolling in a giant Zorb ball, the Snow Park offers over 3,000 square meters of real snow for you to
                    explore. We provide everything you need—from thermal jackets to snow boots—so you can just focus on
                    having an unforgettable time.</p>

                <div class="p-4 bg-light border-start border-4 border-indigo rounded my-4">
                    <p class="mb-0 fst-italic">
                        "More than just an escape from the heat, Ski Dubai is a magical world where the joy of winter
                        comes alive in the heart of the city."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-activities" type="button">Snow Activities</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-inclusions" type="button">Inclusions & Highlights</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-visitor" type="button">Visitor Info</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Snow Activities -->
                    <div class="tab-pane fade show active" id="tab-activities">
                        <?php foreach ($zonesData as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-snowflake text-info me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Inclusions & Exclusions -->
                    <div class="tab-pane fade" id="tab-inclusions">
                        <p class="mb-4 fst-italic">Please review the following details to ensure you have the best
                            winter experience.</p>
                        <?php foreach ($highlightsData as $cat): ?>
                            <div
                                class="mb-4 p-3 rounded <?= $cat['type'] === 'inclusion' ? 'bg-light border-start border-4 border-success' : 'bg-light border-start border-4 border-danger' ?>">
                                <h5 class="<?= $cat['type'] === 'inclusion' ? 'text-success' : 'text-danger' ?> mb-3">
                                    <?= $cat['category'] ?></h5>
                                <ul class="list-unstyled mb-0">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex align-items-center">
                                            <i
                                                class="<?= $cat['type'] === 'inclusion' ? 'fas fa-check-circle text-success' : 'fas fa-times-circle text-danger' ?> me-2 mt-1"></i>
                                            <div><?= $item ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Visitor Info -->
                    <div class="tab-pane fade" id="tab-visitor">
                        <?php foreach ($visitorGuide as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-info-circle text-primary me-2 mt-1"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-5 pt-4">
                    <h3 class="mb-4">Frequently Asked Questions</h3>
                    <div class="accordion accordion-flush shadow-sm rounded border" id="faqAccordion">
                        <?php foreach ($faqs as $index => $faq): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-<?= $index ?>">
                                        <?= $faq['q'] ?>
                                    </button>
                                </h2>
                                <div id="faq-<?= $index ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted"><?= $faq['a'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php include 'includes/related-parks.php'; ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <img src="img/themepark/images/ski-dubai-classic-1.avif" class="img-fluid rounded mb-3"
                                alt="Ski Dubai Classic Pass">
                            <h4 class="card-title mb-3">Classic Pass Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 265</h2>
                                </div>
                                <span class="badge bg-indigo rounded-pill text-white">Best Family Value</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Ski Dubai Classic Pass tickets"
                                    target="_blank" class="btn btn-primary btn-lg">
                                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                                </a>
                                <a href="tel:+971585945007" class="btn btn-outline-dark">
                                    <i class="fas fa-phone-alt me-2"></i>Call for Enquiry
                                </a>
                            </div>
                        </div>
                        <?php include 'includes/enquiry-sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/why-book-us.php'; ?>

<!-- Newsletter -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="section-title bg-white text-primary px-3 mb-4">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Stay Cool with Winter Deals</h2>
            <div class="position-relative mx-auto mt-4" style="max-width: 500px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/mobile-sticky-cta.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include 'includes/footer.php'; ?>