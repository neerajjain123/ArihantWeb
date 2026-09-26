<?php
// Page SEO Variables
$pageTitle = "LEGOLAND Waterpark Dubai Tickets 2025 | Best Prices | Arihant Travels";
$pageDescription = "Book LEGOLAND Waterpark Dubai tickets - Splash-tastic fun for families! Build-A-Raft River, wave pool, LEGO slides & more. Perfect for kids 2-12.";
$pageKeywords = "LEGOLAND Waterpark Dubai, LEGO water park, Dubai Parks waterpark, kids waterpark Dubai, family waterpark, Build-A-Raft";
$pageCanonical = "https://arihantlink.com/legoland-waterpark";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "LEGOLAND® Water Park";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/legoland-waterpark-cover.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-tint', 'title' => 'Waterpark', 'sub' => 'Splash-tastic Fun'],
    ['icon' => 'fas fa-child', 'title' => 'Kids 2-12', 'sub' => 'Ideal Age Group'],
    ['icon' => 'fas fa-swimmer', 'title' => '20+ Slides', 'sub' => 'LEGO Themed'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 199', 'sub' => 'Starting Price']
];

// SPLASH ZONES DATA
$zonesData = [
    [
        'title' => 'Signature Experiences',
        'content' => [
            '<strong>Build-A-Raft River:</strong> A one-of-a-kind experience where families build their own LEGO raft using soft bricks and float along the lazy river.',
            '<strong>LEGO Wave Pool:</strong> A massive LEGO-themed pool with gentle waves, perfect for families and young swimmers.',
            '<strong>Joker Soaker:</strong> An interactive water playground featuring a giant LEGO bucket that splashes guests every few minutes!'
        ]
    ],
    [
        'title' => 'Family Splashes',
        'content' => [
            '<strong>Splish Splash:</strong> A colorful interactive zone with spray and splash features for children of all ages.',
            '<strong>LEGO Slide Racers:</strong> Race against your friends and family on these side-by-side racing slides.',
            '<strong>Red Rush:</strong> A thrilling family tube slide that takes you through exciting drops and turns.'
        ]
    ]
];

// AGES 2-12 FUN DATA
$ridesData = [
    [
        'category' => 'Toddler Zones',
        'items' => [
            '<strong>DUPLO® Splash Safari:</strong> A dedicated area for toddlers aged 0-5 with gentle water features and friendly LEGO animals.',
            '<strong>Splash Out:</strong> A gentle introduction to water slides for younger guests seeking their first splash-tastic thrill.',
            '<strong>DUPLO Wave Pool:</strong> A safe and shallow area for the youngest swimmers to enjoy the water.'
        ]
    ],
    [
        'category' => 'Interactive Building',
        'items' => [
            '<strong>Build-A-Boat:</strong> Use LEGO bricks to build your own boat and test it out on a 10-meter flowing river.',
            '<strong>Imagination Station:</strong> An interactive area where children can build and test their own LEGO creations in the water.',
            '<strong>LEGO Bricks in Water:</strong> Float around with floating LEGO bricks and build whatever your heart desires!'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Essential Preparation',
        'content' => [
            '<strong>Opening Hours:</strong> Typically 10 AM - 6 PM daily. Check seasonal schedules for updates.',
            '<strong>What to Bring:</strong> Proper swimwear, sunscreen, and towels. Sturdy water shoes are recommended for walking on heated surfaces.',
            '<strong>Rentals:</strong> Lockers and towels are available for rent at the park entrance.'
        ]
    ],
    [
        'title' => 'Park Policies',
        'content' => [
            '<strong>Age Requirements:</strong> Designed specifically for families with children aged 2-12. Many slides have a minimum height requirement of 1.0m.',
            '<strong>Supervision:</strong> Lifeguards are on duty across all zones, but child supervision is required at all times.',
            '<strong>Food & Beverage:</strong> Outside food is not permitted. The Waves Bistro and various snack kiosks are available inside.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'Is LEGOLAND Waterpark suitable for non-swimmers?', 'a' => 'Yes! There are many shallow areas like the DUPLO Splash Safari and the Build-A-Raft River where non-swimmers can play safely with life jackets (provided free of charge).'],
    ['q' => 'What is the best time to visit?', 'a' => 'Weekdays are generally quieter. Arriving early (at 10 AM) allows you to enjoy the most popular slides before the afternoon crowds.'],
    ['q' => 'Is the water heated?', 'a' => 'Yes, the water is temperature-controlled for year-round comfort, even during the cooler months.'],
    ['q' => 'Can I buy a combo ticket for the theme park too?', 'a' => 'Absolutely! We highly recommend the LEGOLAND + Waterpark combo ticket for the best family value.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "LEGOLAND Waterpark Dubai Tickets",
  "description": "' . $pageDescription . '",
  "brand": { "@type": "Brand", "name": "LEGOLAND" },
  "offers": {
    "@type": "Offer",
    "price": "199",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock"
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #00BCD4;">
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
                <h2 class="mb-4">LEGOLAND® Water Park: Splash Into a World of Creation</h2>
                <p class="lead text-primary mb-4"><strong>The only water park in the region designed specifically for
                        families with children aged 2-12.</strong></p>
                <p>Welcome to LEGOLAND® Water Park, where the thrill of water slides meets the creative joy of LEGO®!
                    Dive into over 20 water slides and attractions, including the world-famous Build-A-Raft River where
                    you can design your own raft made of LEGO bricks and float down the lazy river. From
                    toddler-friendly splash zones to interactive building experiences, it's the perfect place to cool
                    off and create memories together.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "Whether you're racing down the Slide Racers or building a masterpiece in the splash safari,
                        LEGOLAND Waterpark is where every splash tells a story."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-lands" type="button">Splash Zones</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-adventures" type="button">Ages 2-12 Fun</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-guide"
                            type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Splash Zones -->
                    <div class="tab-pane fade show active" id="tab-lands">
                        <?php foreach ($zonesData as $section): ?>
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

                    <!-- Ages 2-12 Fun -->
                    <div class="tab-pane fade" id="tab-adventures">
                        <p class="mb-4">Beyond the slides, children can engage in interactive building challenges that
                            spark creativity right in the water.</p>
                        <?php foreach ($ridesData as $cat): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $cat['category'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-certificate text-warning me-2 mt-1"></i>
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
                                        <li class="mb-2 d-flex"><i class="fas fa-question-circle text-info me-2 mt-1"></i>
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
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <img src="img/themepark/images/legoland-waterpark-cover.avif" class="img-fluid rounded mb-3"
                                alt="LEGOLAND Waterpark Dubai">
                            <h4 class="card-title mb-3">LEGOLAND Waterpark</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 199</h2>
                                </div>
                                <span class="badge bg-cyan rounded-pill text-white">Aqua Magic</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book LEGOLAND Waterpark Dubai tickets"
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

<!-- Newsletter -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="section-title bg-white text-primary px-3 mb-4">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Splash Into Special Offers</h2>
            <div class="position-relative mx-auto mt-4" style="max-width: 500px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<?php echo $schemaMarkup; ?>
<?php include 'includes/footer.php'; ?>