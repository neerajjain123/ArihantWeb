<?php
// Page SEO Variables
$pageTitle = "SeaWorld Abu Dhabi Tickets 2026 | Best Price + Hotel Transfer | Arihant Travel";
$pageDescription = "Book SeaWorld Yas Island tickets at the best price — 8 ocean realms, Manta coaster & marine animal encounters. Hotel transfer from Dubai included.";
$pageKeywords = "SeaWorld Abu Dhabi, SeaWorld Yas Island, marine life theme park, Manta coaster, animal encounters Abu Dhabi, Yas Island attractions, ocean realms, SeaWorld tickets";
$pageCanonical = "https://arihantlink.com/seaworld";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Ferrari World Abu Dhabi', 'slug' => 'ferrari-world', 'price' => 'From AED 335', 'image' => 'img/themepark/images/ferrari-museum.jpg', 'tag' => 'Theme Park'],
    ['name' => 'Warner Bros. World Abu Dhabi', 'slug' => 'warner-bros-world', 'price' => 'From AED 335', 'image' => 'img/themepark/images/warner-pros-2.webp', 'tag' => 'Theme Park'],
    ['name' => 'Yas Island Multi-Park Entry', 'slug' => 'yas-island-multi-park', 'price' => 'From AED 400', 'image' => 'img/themepark/images/warner-pros-2.webp', 'tag' => 'Best Value'],
];

// Breadcrumb Variables
$pageHeading = "SeaWorld Yas Island Abu Dhabi";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/sea-world-1.jpg";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-fish', 'title' => '8 Realms', 'sub' => 'Oceanic Journey'],
    ['icon' => 'fas fa-bolt', 'title' => 'Manta Coaster', 'sub' => 'Thrilling Fun'],
    ['icon' => 'fas fa-hands-helping', 'title' => 'Encounters', 'sub' => 'Close-up Experience'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 375', 'sub' => 'Starting Price']
];

// REALMS DATA
$realmsData = [
    [
        'title' => 'The Journey: Poles to Tropics',
        'content' => [
            '<strong>One Ocean:</strong> The central hub connecting all eight realms, featuring the stunning 360-degree media experience.',
            '<strong>Polar Ocean:</strong> Explore the icy extremes of the Arctic and Antarctica, home to penguins and walruses.',
            '<strong>Tropical Ocean:</strong> A vibrant world of bright colors, featuring dolphins, rays, and the Manta coaster.',
            '<strong>Endless Ocean:</strong> Home to the world\'s largest aquarium with over 68,000 marine animals.'
        ]
    ],
    [
        'title' => 'Education & Exploration',
        'content' => [
            '<strong>Educational Entertainment:</strong> The park features transformative shows designed to inspire ocean conservation.',
            '<strong>Abu Dhabi Ocean:</strong> Learn about the local marine life and the UAE\'s pearl diving heritage.'
        ]
    ]
];

// RIDES & ENCOUNTERS DATA
$ridesData = [
    [
        'category' => 'Thrilling Attractions',
        'items' => [
            '<strong>Manta Coaster:</strong> A fun and thrilling ride that mimics the movement of a manta ray. Highly recommended for all thrill seekers.',
            '<strong>Hypersphere 360:</strong> An immersive journey exploring the depths of the ocean in a high-tech theater.'
        ]
    ],
    [
        'category' => 'Animal Encounters',
        'items' => [
            '<strong>Signature Encounters:</strong> Get closer than ever with dolphins, walruses, and sea lions (advance booking recommended).',
            '<strong>Underwater Encounters:</strong> Experience marine life from a unique perspective through various immersive exhibits.'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Preparation & Arrival',
        'content' => [
            '<strong>Book in Advance:</strong> Essential for signature encounters as availability is strictly limited.',
            '<strong>Yas Express:</strong> Enjoy the complimentary luxury shuttle service connecting major Yas Island attractions.',
            '<strong>ID Requirement:</strong> Bring original government photo ID for identity verification at the gates.'
        ]
    ],
    [
        'title' => 'Park Policies',
        'content' => [
            '<strong>Outside Food:</strong> Outside food and beverages are not permitted inside the park.',
            '<strong>Supervision:</strong> Children aged 11 and under must be accompanied by a responsible adult.',
            '<strong>Free Entry:</strong> Children aged two years or younger enter free of charge.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'What is the best way to get to SeaWorld?', 'a' => 'The Yas Express shuttle is a free luxury service that connects SeaWorld with other Yas Island parks.'],
    ['q' => 'Do I need to print my ticket?', 'a' => 'Yes, it is recommended to have a printed copy of your e-ticket along with your original ID.'],
    ['q' => 'Is the Manta coaster very intense?', 'a' => 'While thrilling, it is generally considered more "tame" compared to Formula Rossa, making it fun for a wider audience.'],
    ['q' => 'What is the age for free entry?', 'a' => 'Children aged two years and younger can enter SeaWorld for free.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "SeaWorld Abu Dhabi",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/seaworld",
  "image": "https://arihantlink.com/img/themepark/images/sea-world-1.jpg",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Yas Island",
    "addressLocality": "Abu Dhabi",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "24.4868",
    "longitude": "54.6073"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "10:00",
    "closes": "20:00"
  },
  "offers": {
    "@type": "Offer",
    "price": "375",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/seaworld",
    "seller": { "@type": "Organization", "name": "Arihant Travel" }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "2100"
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
                <h2 class="mb-4">SeaWorld Abu Dhabi Tickets 2026 — Rides, Encounters & Visitor Guide</h2>
                <p class="lead text-primary mb-4"><strong>Book SeaWorld Yas Island tickets at the best price — the region's first marine life theme park with 8 ocean realms.</strong></p>
                <p>SeaWorld Yas Island is the world's largest indoor marine life theme park and the first of its kind in
                    the region. Rather than just observing, you move through different chapters of the world's oceans in
                    a single afternoon, experiencing everything from the icy poles to the vibrant tropics.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "Exploring SeaWorld is like stepping inside a living, high-tech encyclopedia of the deep; it's a
                        geographical journey through different aquatic climates."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-realms" type="button">Ocean Realms</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-rides"
                            type="button">Rides & Encounters</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-guide"
                            type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Ocean Realms -->
                    <div class="tab-pane fade show active" id="tab-realms">
                        <?php foreach ($realmsData as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-water text-primary me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Rides & Encounters -->
                    <div class="tab-pane fade" id="tab-rides">
                        <p class="mb-4">From the high-speed Manta coaster to intimate animal encounters, SeaWorld offers
                            a perfect balance of thrill and inspiration.</p>
                        <?php foreach ($ridesData as $cat): ?>
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
                    <div class="tab-pane fade" id="tab-guide">
                        <?php foreach ($visitorGuide as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-info-circle text-info me-2 mt-1"></i>
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
                            <img src="img/themepark/images/sea-world-2.jpg" class="img-fluid rounded mb-3"
                                alt="SeaWorld Abu Dhabi">
                            <h4 class="card-title mb-3">SeaWorld Abu Dhabi Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 375</h2>
                                </div>
                                <span class="badge bg-primary rounded-pill">Must Visit</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book SeaWorld Abu Dhabi tickets"
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
            <h2 class="text-white mb-3 h3">Stay Updated on Marine Life Adventures</h2>
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