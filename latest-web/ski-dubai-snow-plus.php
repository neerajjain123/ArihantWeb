<?php
// Page SEO Variables
$pageTitle = "Ski Dubai Snow Plus Pass Tickets 2026 | VIP + Hotel Transfer | Arihant Travels";
$pageDescription = "Book Ski Dubai Snow Plus Pass at the best price — unlimited Mountain Thriller, chairlift + choice of skiing, penguin encounter or Snow Bullet zipline.";
$pageKeywords = "Ski Dubai Snow Plus Pass, Ski Dubai VIP tickets 2026, indoor skiing Dubai, penguin encounter Dubai, Snow Bullet zipline Ski Dubai, Mall of Emirates ski, Ski Dubai price 2026";
$pageCanonical = "https://arihantlink.com/ski-dubai-snow-plus";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Ski Dubai Classic Pass', 'slug' => 'ski-dubai-classic', 'price' => 'From AED 265', 'image' => 'img/themepark/images/ski-dubai-classic-1.avif', 'tag' => 'Snow Park'],
    ['name' => 'IMG Worlds of Adventure', 'slug' => 'img-worlds', 'price' => 'From AED 365', 'image' => 'img/themepark/images/IMG-World-Of-Adventure-cover.webp', 'tag' => 'Theme Park'],
    ['name' => 'Wild Wadi Waterpark', 'slug' => 'wild-wadi', 'price' => 'From AED 299', 'image' => 'img/themepark/images/wildwadi-cover.avif', 'tag' => 'Waterpark'],
];

// Breadcrumb Variables
$pageHeading = "Ski Dubai Snow Plus Pass";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/ski-dubai-vip-1.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-snowflake', 'title' => '-4°C Always', 'sub' => 'Winter Magic'],
    ['icon' => 'fas fa-shopping-bag', 'title' => 'Mall of Emirates', 'sub' => 'Ski Resort'],
    ['icon' => 'fas fa-star', 'title' => 'Premium Choice', 'sub' => 'VIP Experience'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 325', 'sub' => 'Best Value']
];

// PREMIUM EXPERIENCES DATA
$premiumExperiences = [
    [
        'title' => 'Choose Your Premium Benefit',
        'content' => [
            '<strong>2 Hours Slope Session:</strong> Hit the 400m slopes for 2 hours (Level 2+ skiers only). Equipment is included.',
            '<strong>40-Min Penguin Encounter:</strong> Meet and greet the adorable Gentoo and King penguins up close.',
            '<strong>Snow Bullet Zipline:</strong> Two thrilling rides on the world\'s first indoor sub-zero zipline.',
            '<strong>Discovery Lesson:</strong> A 60-minute beginner lesson for skiing or snowboarding with an instructor.'
        ]
    ]
];

// WHAT'S INCLUDED DATA
$includedData = [
    [
        'category' => 'Unlimited Snow Fun',
        'items' => [
            '<strong>Unlimited Mountain Thriller:</strong> Rocket down the 185m slope at speeds up to 45 km/h as many times as you like.',
            '<strong>Unlimited Chairlift Rides:</strong> Enjoy scenic views of the entire snow resort from above.',
            '<strong>Snow Park Access:</strong> Unlimited entry to Snow Cavern, Tobogganing, Giant Ball, Bob Sledge, and Tubing Run.',
            '<strong>Snow Bumpers:</strong> Unlimited access to the ice-themed bumper car arena.'
        ]
    ],
    [
        'category' => 'Complimentary Gear & Services',
        'items' => [
            '<strong>Full Winter Gear:</strong> Thermal jacket, trousers, snow boots, and disposable socks.',
            '<strong>Winter Gloves:</strong> Fleece gloves provided free of charge.',
            '<strong>Helmets for Kids:</strong> Compulsory and free for all children under 13.',
            '<strong>Day-Long Access:</strong> Unlimited re-entry to the snow park throughout the same day.'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Essential Preparation',
        'content' => [
            '<strong>Operating Hours:</strong> 10:00 AM to 11:30 PM (Sun-Thu) and 10:00 AM to 12:00 AM (Fri-Sat).',
            '<strong>Preparation:</strong> Arrive 45 minutes before your scheduled penguin encounter or lesson.',
            '<strong>Dress Code:</strong> Thermal gear is provided, but we suggest wearing light, warm layers underneath for comfort.'
        ]
    ],
    [
        'title' => 'Park Guidelines',
        'content' => [
            '<strong>Age/Height:</strong> Minimum age is 3 years. Some rides recommend a minimum height of 1.2m.',
            '<strong>Level 2 Requirement:</strong> For the slope choice, guests must be competent Level 2 skiers or snowboarders.',
            '<strong>Lockers & Parking:</strong> Secure lockers are available for rent. Ample parking is available at Mall of the Emirates.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'What makes the Snow Plus Pass different from the Classic Pass?', 'a' => 'The Snow Plus Pass includes everything in the Classic Pass plus UNLIMITED Mountain Thriller rides and your choice of ONE premium experience (Slope Session, Penguin Encounter, Zipline, or Lesson).'],
    ['q' => 'Can I do both the penguin encounter and skiing?', 'a' => 'The pass covers one premium choice. If you wish to do both, you can upgrade your experience at the venue or book an additional session.'],
    ['q' => 'Is the winter gear clean?', 'a' => 'Yes! All winter gear is professionally laundered and sanitized after every single use.'],
    ['q' => 'Where is Ski Dubai located?', 'a' => 'It is located in the Mall of the Emirates, reachable via Metro (Mall of the Emirates Station) or taxi.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Ski Dubai",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/ski-dubai-snow-plus",
  "image": "https://arihantlink.com/img/themepark/images/ski-dubai-vip-1.avif",
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
      "closes": "23:30"
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
    "name": "Snow Plus Pass",
    "price": "325",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/ski-dubai-snow-plus",
    "seller": { "@type": "Organization", "name": "Arihant Travels Pvt Ltd" }
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #03A9F4;">
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
                <h2 class="mb-4">Ski Dubai Snow Plus Pass Tickets 2026 — VIP Snow Experience & Visitor Guide</h2>
                <p class="lead text-primary mb-4"><strong>Book the Snow Plus Pass at the best price — unlimited Mountain Thriller rides + your choice of skiing, penguin encounter or Snow Bullet zipline.</strong></p>
                <p>Experience the peak of indoor snow fun with the Ski Dubai Snow Plus Pass. Beyond unlimited access to
                    all snow park activities, this pass grants you the choice of a world-class premium experience.
                    Whether you want to carve through 400 meters of real snow on the slopes, meet our resident penguins,
                    or soar over the park on the Snow Bullet zipline, the choice is yours. Perfect for families seeking
                    that extra touch of magic and adventure in the heart of Dubai.</p>

                <div class="p-4 bg-light border-start border-4 border-info rounded my-4">
                    <p class="mb-0 fst-italic">
                        "Snow Plus isn't just a ticket—it's your personalized passport to the very best that Ski Dubai
                        has to offer, from the slopes to the penguins."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-premium" type="button">Premium Choice</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-included" type="button">What's Included</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-visitor" type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Premium Choice -->
                    <div class="tab-pane fade show active" id="tab-premium">
                        <p class="mb-4 text-muted">Includes your choice of <strong>ONE</strong> of the following
                            exclusive experiences:</p>
                        <?php foreach ($premiumExperiences as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-3 d-flex"><i class="fas fa-star text-warning me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                        <div class="alert alert-info py-2 small mb-0">
                            <i class="fas fa-info-circle me-1"></i> Selection is made at the Ski Dubai arrival counter.
                        </div>
                    </div>

                    <!-- What's Included -->
                    <div class="tab-pane fade" id="tab-included">
                        <p class="mb-4">Enjoy everything in the snow park with no limits on the standard attractions.
                        </p>
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

                    <!-- Visitor Guide -->
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
                            <img src="img/themepark/images/ski-dubai-vip-1.avif" class="img-fluid rounded mb-3"
                                alt="Ski Dubai Snow Plus Pass">
                            <h4 class="card-title mb-3">Snow Plus Pass Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 325</h2>
                                </div>
                                <span class="badge bg-primary rounded-pill text-white">VIP Choice</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Ski Dubai Snow Plus tickets"
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
            <h2 class="text-white mb-3 h3">Experience the VIP Chill</h2>
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