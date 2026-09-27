<?php
// Page SEO Variables
$pageTitle = "Ferrari World Abu Dhabi Ticket Price 2026 | From AED 335";
$pageDescription = "Ferrari World Abu Dhabi tickets from AED 335: Formula Rossa, Flying Aces and 40+ rides, with hotel transfer from Dubai. Ride guide, kids' zone and FAQs.";
$pageKeywords = "Ferrari World Abu Dhabi guide, Ferrari World itinerary, Formula Rossa, Ferrari World for kids, Family Zone Ferrari World, Yas Island attractions, Ferrari World tips, best rides Ferrari World";
$pageCanonical = "https://arihantlink.com/ferrari-world";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Warner Bros. World Abu Dhabi', 'slug' => 'warner-bros-world', 'price' => 'From AED 335', 'image' => 'img/themepark/images/warner-pros-2.webp', 'tag' => 'Theme Park'],
    ['name' => 'Yas Island Multi-Park Entry', 'slug' => 'yas-island-multi-park', 'price' => 'From AED 400', 'image' => 'img/themepark/images/warner-pros-2.webp', 'tag' => 'Best Value'],
    ['name' => 'SeaWorld Abu Dhabi', 'slug' => 'seaworld', 'price' => 'From AED 375', 'image' => 'img/themepark/images/sea-world-1.jpg', 'tag' => 'Theme Park'],
];

// Breadcrumb Variables
$pageHeading = "Ferrari World Abu Dhabi";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/FioranoGT-Challenge.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-clock', 'title' => '6-8 Hours', 'sub' => 'Recommended'],
    ['icon' => 'fas fa-utensils', 'title' => 'Italian Dining', 'sub' => 'Authentic Pizza'],
    ['icon' => 'fas fa-bolt', 'title' => '44+ Rides', 'sub' => 'Fastest Coaster'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 335', 'sub' => 'Starting Price']
];

// ITINERARY DATA
$itineraryData = [
    [
        'title' => 'Morning: The "Big Three" Thrills',
        'content' => [
            '<strong>Formula Rossa:</strong> Head here first to experience the planet\'s fastest rollercoaster, reaching 240 km/h in under five seconds. Pro-tip: Try for a front-row seat.',
            '<strong>Flying Aces:</strong> Next, tackle this military-themed coaster featuring the world’s tallest non-inverted loop and a gut-wrenching 51-degree incline.',
            '<strong>Turbo Track:</strong> Experience a vertical climb through the park\'s iconic red roof followed by a zero-gravity fall.',
            '<strong>Strategy Note:</strong> Secure a timed ticket for the Scuderia Challenge racing simulator as soon as you enter.'
        ]
    ],
    [
        'title' => 'Midday: Authentic Dining and Culture',
        'content' => [
            '<strong>Mamma Rossella:</strong> The first restaurant in the Middle East to offer certified Neapolitan pizza. Highly recommended.',
            '<strong>Il Podio:</strong> Offers international variety with an Arabic, Indian, and Western buffet.',
            '<strong>The "Italian Zone":</strong> Enjoy slower attractions like <em>Bell’ Italia</em> (mini-replicas drive) or <em>Made in Maranello</em> (factory tour).'
        ]
    ],
    [
        'title' => 'Afternoon: Immersive Experiences & Shows',
        'content' => [
            '<strong>Signature Activities:</strong> Pay a top-up fee to drive an actual Ferrari or test your skills at the Karting Academy.',
            '<strong>Live Entertainment:</strong> Look for the theatrical show <em>RED</em> at La Piazza Stage or meet mascots like Khalil the Camel.',
            '<strong>Exhibitions:</strong> Visit <em>Galleria Ferrari</em> to admire classic and rare Ferrari models.'
        ]
    ],
    [
        'title' => 'Final Stop: Shopping',
        'content' => [
            '<strong>Ferrari Past & Present Store:</strong> The world\'s largest Ferrari retail space for authentic merchandise and models.'
        ]
    ]
];

// KIDS ZONE DATA
$kidsZoneData = [
    [
        'category' => 'Scaled-Down Thrills',
        'items' => [
            '<strong>Formula Rossa Junior:</strong> Mimics the world\'s fastest coaster at a kid-friendly 45 kph.',
            '<strong>Turbo Tower:</strong> A child-friendly vertical drop with bouncing moves.',
            '<strong>Flying Wings:</strong> Kids control their own glider\'s movement.',
            '<strong>Speedway Race:</strong> A whip-style ride in two-seater Ferrari cars.'
        ]
    ],
    [
        'category' => 'Interactive Racing & Learning',
        'items' => [
            '<strong>Junior Grand Prix:</strong> Scaled-down F1 racing cars on a real track.',
            '<strong>Junior GT:</strong> A tailored driving school experience for children.',
            '<strong>Esports Arena:</strong> Digital side-by-side racing fun.'
        ]
    ],
    [
        'category' => 'Exploration and Play',
        'items' => [
            '<strong>Nello’s Adventureland:</strong> A safe soft adventure play area.',
            '<strong>Junior Training Camp:</strong> Climbing walls and low suspension bridges.',
            '<strong>Benno’s Great Race:</strong> Family-favorite interactive mini-games.'
        ]
    ]
];

// PREPARATION DATA
$prepData = [
    '<strong>Book Online:</strong> Purchase tickets in advance to skip long queues.',
    '<strong>The "Tasty Ticket":</strong> Includes a meal voucher offering up to 30% extra value.',
    '<strong>Dress Code:</strong> Wear modest, comfortable clothing and sneakers. No loose footwear on fast rides.',
    '<strong>Arrive Early:</strong> Aim to be at the gates by 10:00 AM to beat peak crowds.'
];

// FAQ DATA
$faqs = [
    ['q' => 'What is the recommended visit duration?', 'a' => 'A full day (6 to 8 hours) is recommended to experience all major attractions.'],
    ['q' => 'Is the park climate-controlled?', 'a' => 'Yes, Ferrari World is completely climate-controlled and comfortable year-round.'],
    ['q' => 'Are there meal options for kids?', 'a' => 'Yes, Officer\'s Food Quarters features an aviation theme particularly appealing to kids.'],
    ['q' => 'Can I drive a real Ferrari?', 'a' => 'Yes, if you have a valid license and are over 21, you can pay a top-up fee for a Driving Experience.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Ferrari World Abu Dhabi",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/ferrari-world",
  "image": "https://arihantlink.com/img/themepark/images/ferrari-museum.jpg",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Yas Island",
    "addressLocality": "Abu Dhabi",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "24.4832",
    "longitude": "54.6063"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "10:00",
    "closes": "20:00"
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
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
                <h2 class="mb-4">Ferrari World Abu Dhabi — Tickets, Rides & Visitor Guide 2026</h2>
                <p class="lead text-primary mb-4"><strong>Book tickets at the best price and plan the perfect day at the world's fastest roller coaster.</strong>
                </p>
                <p>Planning your first visit to Ferrari World Abu Dhabi requires a mix of adrenaline-fueled strategy and
                    moments of Italian leisure. Because the park is climate-controlled, it is a comfortable year-round
                    destination, but a full day (approximately 6 to 8 hours) is recommended to experience all the major
                    attractions without rushing.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "Navigating Ferrari World is much like driving an F1 car: success comes from a fast start to
                        beat the competition at the 'first turn' (morning rides), followed by a steady, well-paced
                        middle section."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-itinerary" type="button">Itinerary</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-kids"
                            type="button">Kids Zone</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-info"
                            type="button">Visitor Info</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Itinerary -->
                    <div class="tab-pane fade show active" id="tab-itinerary">
                        <?php foreach ($itineraryData as $phase): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $phase['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($phase['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-check-circle text-success me-2 mt-1"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Kids Zone -->
                    <div class="tab-pane fade" id="tab-kids">
                        <p class="mb-4">The <strong>Family Zone</strong> is the ultimate junior training ground, where
                            every child gets their own 'racing stripes' while exploring a world built just for their
                            size and speed.</p>
                        <?php foreach ($kidsZoneData as $cat): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $cat['category'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-child text-info me-2 mt-1"></i>
                                            <div><?= $item ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                        <div class="alert alert-info py-2 small">
                            <strong>Mascots:</strong> Meet Khalil the Camel, Berto, and Benno for photos and dance
                            performances.
                        </div>
                    </div>

                    <!-- Visitor Info -->
                    <div class="tab-pane fade" id="tab-info">
                        <h5 class="text-primary border-bottom pb-2">Entry & Preparation</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($prepData as $item): ?>
                                <li class="mb-2 d-flex"><i class="fas fa-info-circle text-primary me-2 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-5 pt-4">
                    <p class="mb-4"><strong>Want tickets plus transfers in one booking?</strong>
                        See our <a href="/ferrari-world-packages">Ferrari World Abu Dhabi packages</a> &mdash; ticket combos with Dubai pickup.</p>
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
                            <img src="img/themepark/images/formula-rossa.jpg" class="img-fluid rounded mb-3"
                                alt="Ferrari World">
                            <h4 class="card-title mb-3">Ferrari World Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 335</h2>
                                </div>
                                <span class="badge bg-danger rounded-pill">Best Seller</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Ferrari World tickets"
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
            <h5 class="section-title bg-white text-primary px-3 mb-4">Stay Tuned</h5>
            <h2 class="text-white mb-3 h3">Subscribe for Exciting Offers</h2>
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