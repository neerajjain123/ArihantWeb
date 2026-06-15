<?php
// Page SEO Variables
$pageTitle = "Yas Island Multi-Park Tickets 2026 | Best Bundle Price + Transfer | Arihant Travel";
$pageDescription = "Book Yas Island Multi-Park tickets at the best price — choose 2, 3 or 4 parks from Ferrari World, Warner Bros, SeaWorld & Yas Waterworld.";
$pageKeywords = "Yas Island multi park tickets 2026, Yas Island 2 park pass, Yas Island 3 park pass, Yas Island 4 park bundle, Ferrari World Warner Bros SeaWorld Yas Waterworld, Abu Dhabi theme park combo";
$pageCanonical = "https://arihantlink.com/yas-island-multi-park";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Ferrari World Abu Dhabi', 'slug' => 'ferrari-world', 'price' => 'From AED 335', 'image' => 'img/themepark/images/ferrari-museum.jpg', 'tag' => 'Included Park'],
    ['name' => 'Warner Bros. World Abu Dhabi', 'slug' => 'warner-bros-world', 'price' => 'From AED 335', 'image' => 'img/themepark/images/warner-pros-2.webp', 'tag' => 'Included Park'],
    ['name' => 'SeaWorld Abu Dhabi', 'slug' => 'seaworld', 'price' => 'From AED 375', 'image' => 'img/themepark/images/sea-world-1.jpg', 'tag' => 'Included Park'],
];

// Breadcrumb Variables
$pageHeading = "Yas Island Multi-Park Entry";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/warner-pros-2.webp";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-map-marker-alt', 'title' => 'Yas Island', 'sub' => 'Abu Dhabi'],
    ['icon' => 'fas fa-calendar-check', 'title' => 'Flexible Visit', 'sub' => 'Up to 14 Days'],
    ['icon' => 'fas fa-bus', 'title' => 'Free Shuttle', 'sub' => 'From Dubai'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 400', 'sub' => 'Starting Price']
];

// PRICING DATA
$pricingOptions = [
    [
        'title' => '2 Parks Pass',
        'price' => '400',
        'validity' => '6 Days',
        'features' => ['Access to any 2 Parks', 'Valid for 6 days from first use', 'Unlimited rides & attractions', 'Free Shuttle service']
    ],
    [
        'title' => '3 Parks Pass',
        'price' => '455',
        'validity' => '14 Days',
        'features' => ['Access to any 3 Parks', 'Valid for 14 days from first use', 'Unlimited rides & attractions', 'Free Shuttle service'],
        'badge' => 'Most Popular'
    ],
    [
        'title' => '4 Parks Pass',
        'price' => '525',
        'validity' => '14 Days',
        'features' => ['Access to all 4 Parks', 'Valid for 14 days from first use', 'Unlimited rides & attractions', 'Free Shuttle service']
    ]
];

// INCLUSIONS DATA
$includedData = [
    [
        'category' => 'Included Theme Parks',
        'items' => [
            '<strong>Ferrari World Abu Dhabi:</strong> Home to the world\'s fastest roller coaster.',
            '<strong>Warner Bros. World™ Abu Dhabi:</strong> The world\'s largest indoor theme park.',
            '<strong>SeaWorld® Abu Dhabi:</strong> The region\'s first Marine Life Theme Park.',
            '<strong>Yas Waterworld Abu Dhabi:</strong> Waterpark inspired by Emirati pearl diving heritage.'
        ]
    ],
    [
        'category' => 'Added Benefits',
        'items' => [
            '<strong>Free Shuttle Bus:</strong> Access to Yas Express and shuttles from Dubai/Sharjah (with valid ticket).',
            '<strong>Unlimited Rides:</strong> Full access to all standard rides and attractions in chosen parks.',
            '<strong>Flexibility:</strong> Spread your visits across multiple days (6 or 14 days depending on pass).'
        ]
    ]
];

// HOW IT WORKS DATA
$howItWorks = [
    [
        'title' => 'Entry Process',
        'content' => [
            '<strong>Biometric Verification:</strong> A finger scan is required on your first visit to link the pass to you.',
            '<strong>Manual Option:</strong> Alternatively, present a valid government-issued photo ID at each entry.',
            '<strong>Non-Transferable:</strong> All entries must be redeemed by the same individual.'
        ]
    ],
    [
        'title' => 'Validity Rules',
        'content' => [
            '<strong>First Visit:</strong> Tickets are valid for 9 months from purchase date until the first use.',
            '<strong>Window of Use:</strong> Once activated, 2-park tickets MUST be used within 6 days. 3/4-park tickets within 14 days.',
            '<strong>Same Day Policy:</strong> You can visit multiple parks on the same day if you wish.'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Know Before You Go',
        'content' => [
            '<strong>Free for Kids:</strong> Children aged 3 and under (under 110cm) enter free of charge.',
            '<strong>Ladies Day:</strong> Yas Waterworld has "Ladies-Only" periods (usually Fridays 1PM - 10PM). Check schedule.',
            '<strong>Operating Hours:</strong> Parks typically open at 10:00 AM or 11:00 AM. Check individual park schedules.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'Can I visit the same park twice with a 2-Park pass?', 'a' => 'No, multi-park passes are designed for entry into different parks. Each entry must be used for a unique park among the four available.'],
    ['q' => 'How does the free shuttle bus work?', 'a' => 'Complimentary shuttles run from various locations in Dubai and Sharjah to Yas Island. You must present your valid multi-park ticket to the driver to board.'],
    ['q' => 'What if I lose my ticket?', 'a' => 'If you have registered biometrically, the park staff can usually assist at the Guest Services desk with your ID.'],
    ['q' => 'Do I need to visit all parks on the same day?', 'a' => 'No! You can spread your visits over 6 days (for 2 parks) or 14 days (for 3/4 parks) from the date of your first entry.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Yas Island Multi-Park Entry",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/yas-island-multi-park",
  "image": "https://arihantlink.com/img/themepark/images/warner-pros-2.webp",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Yas Island",
    "addressLocality": "Abu Dhabi",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "24.4860",
    "longitude": "54.6065"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "10:00",
    "closes": "20:00"
  },
  "offers": {
    "@type": "AggregateOffer",
    "lowPrice": "400",
    "highPrice": "525",
    "priceCurrency": "AED",
    "offerCount": "3",
    "seller": { "@type": "Organization", "name": "Arihant Travel" }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "1560"
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #004d99;">
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
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="mb-4">Yas Island Multi-Park Tickets 2026 — Choose 2, 3 or 4 Parks & Save</h2>
                <p class="lead text-primary mb-4"><strong>The best-value way to experience Yas Island — one pass covers Ferrari World, Warner Bros. World, SeaWorld & Yas Waterworld.</strong></p>
                <p>Unlock the best of Abu Dhabi with the Yas Island Multi-Park Entry pass. This flexible ticket allows
                    you to experience any combination of the four world-class destination parks: <strong>Ferrari
                        World</strong>, <strong>Warner Bros. World™</strong>, <strong>SeaWorld®</strong>, and
                    <strong>Yas Waterworld</strong>. Instead of buying separate tickets, this bundle offers significant
                    savings and the convenience of a single digital pass for all your adventures.
                </p>

                <div class="p-4 bg-white border-start border-4 border-primary shadow-sm rounded my-4">
                    <p class="mb-0 fst-italic">
                        "The most efficient and cost-effective way to explore Abu Dhabi's premier entertainment hub.
                        Perfect for families looking for flexibility."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-included" type="button">What's Included</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-works"
                            type="button">How It Works</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-visitor" type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- What's Included -->
                    <div class="tab-pane fade show active" id="tab-included">
                        <?php foreach ($includedData as $cat): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $cat['category'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-check-circle text-success me-2 mt-1"></i>
                                            <div><?= $item ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- How It Works -->
                    <div class="tab-pane fade" id="tab-works">
                        <?php foreach ($howItWorks as $section): ?>
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

                    <!-- Visitor Guide -->
                    <div class="tab-pane fade" id="tab-visitor">
                        <?php foreach ($visitorGuide as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-exclamation-circle text-warning me-2 mt-1"></i>
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
                    <div class="accordion accordion-flush shadow-sm rounded border bg-white" id="faqAccordion">
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
                        <div class="card-body p-4">
                            <h4 class="card-title text-center mb-4">Book Your Pass</h4>
                            <div class="d-grid gap-3">
                                <?php foreach ($pricingOptions as $option): ?>
                                    <a href="https://wa.me/971585945007?text=I want to book the Yas <?= $option['title'] ?>"
                                        target="_blank"
                                        class="btn btn-outline-dark d-flex justify-content-between align-items-center py-2">
                                        <span><?= $option['title'] ?></span>
                                        <span class="fw-bold">AED <?= $option['price'] ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <hr class="my-4">
                            <div class="d-grid">
                                <a href="tel:+971585945007" class="btn btn-primary btn-lg">
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


<!-- Pricing Section -->
<div class="container-fluid py-5 bg-white">
    <div class="container pb-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Best Value Pass</h5>
            <h2 class="mb-4">Choose Your Multi-Park Experience</h2>
            <p class="mb-0 text-muted">Get access to UAE's top award-winning theme parks for one incredible price. The
                more parks you visit, the more you save!</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($pricingOptions as $option): ?>
                <div class="col-lg-4 col-md-6">
                    <div
                        class="card h-100 shadow-sm border-0 transition-hover <?= isset($option['badge']) ? 'border border-primary' : '' ?>">
                        <?php if (isset($option['badge'])): ?>
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <span class="badge bg-primary px-3 py-2 rounded-pill"><?= $option['badge'] ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="card-body p-5 text-center d-flex flex-column">
                            <h4 class="fw-bold mb-3"><?= $option['title'] ?></h4>
                            <div class="mb-4">
                                <span class="h1 fw-bold text-primary">AED <?= $option['price'] ?></span>
                                <p class="text-muted mb-0">Validity: <?= $option['validity'] ?></p>
                            </div>
                            <ul class="list-unstyled text-start mb-5 flex-grow-1">
                                <?php foreach ($option['features'] as $feature): ?>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <?= $feature ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="https://wa.me/971585945007?text=I want to book the Yas <?= $option['title'] ?> for AED <?= $option['price'] ?>"
                                target="_blank" class="btn btn-primary btn-lg rounded-pill">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'includes/why-book-us.php'; ?>

<!-- Newsletter -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="section-title bg-white text-primary px-3 mb-4">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Stay Updated on Theme Park Deals</h2>
            <div class="position-relative mx-auto mt-4" style="max-width: 500px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<style>
    .transition-hover {
        transition: all 0.3s ease;
    }

    .transition-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }
</style>

<?php include 'includes/mobile-sticky-cta.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include 'includes/footer.php'; ?>