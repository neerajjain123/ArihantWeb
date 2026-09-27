<?php
// Page SEO Variables
$pageTitle = "LEGOLAND Dubai Tickets 2026 | Best Price + Hotel Transfer | Arihant Travels";
$pageDescription = "Book LEGOLAND Dubai tickets at the best price — 40+ rides & building experiences for kids aged 2–12. Hotel pick-up from Dubai included. Instant e-ticket.";
$pageKeywords = "LEGOLAND Dubai, LEGO theme park, Dubai Parks, family theme park Dubai, kids attractions Dubai, LEGO rides, Miniland Dubai";
$pageCanonical = "https://arihantlink.com/legoland";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'LEGOLAND Waterpark', 'slug' => 'legoland-waterpark', 'price' => 'From AED 199', 'image' => 'img/themepark/images/legoland-waterpark-cover.avif', 'tag' => 'Waterpark'],
    ['name' => 'Motiongate Dubai', 'slug' => 'motiongate', 'price' => 'From AED 249', 'image' => 'img/themepark/images/motiongate-cover.avif', 'tag' => 'Theme Park'],
    ['name' => 'IMG Worlds of Adventure', 'slug' => 'img-worlds', 'price' => 'From AED 365', 'image' => 'img/themepark/images/IMG-World-Of-Adventure-cover.webp', 'tag' => 'Theme Park'],
];

// Breadcrumb Variables
$pageHeading = "LEGOLAND® Dubai";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/legoland-8.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-child', 'title' => 'Kids 2-12', 'sub' => 'Primary Audience'],
    ['icon' => 'fas fa-puzzle-piece', 'title' => '40+ Rides', 'sub' => 'LEGO Adventure'],
    ['icon' => 'fas fa-lightbulb', 'title' => 'Build & Play', 'sub' => 'Creative Fun'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 249', 'sub' => 'Starting Price']
];

// LEGO LANDS DATA
$zonesData = [
    [
        'title' => 'Iconic Experiences',
        'content' => [
            '<strong>Miniland:</strong> Marvel at stunning LEGO recreations of Dubai\'s iconic landmarks, built with over 20 million LEGO bricks in a climate-controlled area.',
            '<strong>LEGO Factory:</strong> Discover how LEGO bricks are made in this fascinating tour and take home a special brick as a souvenir!',
            '<strong>Imagination:</strong> Unleash creativity in building workshops, play with LEGO robots, and experience VR LEGO adventures.'
        ]
    ],
    [
        'title' => 'Theme Adventures',
        'content' => [
            '<strong>LEGO Kingdoms:</strong> Enter a medieval world of dragons and knights featuring The Dragon coaster and courtly fun.',
            '<strong>Adventure:</strong> Explore ancient Egypt in LEGO style with the Lost Kingdom Adventure laser ride.',
            '<strong>LEGO City:</strong> Where kids become adults—drive cars, pilot boats, and even fight fires at the fire academy.'
        ]
    ]
];

// CREATIVE ADVENTURES DATA
$ridesData = [
    [
        'category' => 'Top Rides',
        'items' => [
            '<strong>The Dragon Coaster:</strong> A family-friendly coaster that takes you through the heights of the LEGO castle.',
            '<strong>Submarine Adventure:</strong> Dive deep into the LEGO ocean to see real sharks, rays, and tropical fish.',
            '<strong>Power Tower:</strong> Test your strength and get a bird\'s eye view of the entire park.'
        ]
    ],
    [
        'category' => 'Interactive Schools',
        'items' => [
            '<strong>Driving School:</strong> Kids earn their very own LEGOLAND driving license in real LEGO cars.',
            '<strong>Boating School:</strong> Pilot your own LEGO boat through the winding waterways of the park.',
            '<strong>Rescue Academy:</strong> Work together as a family to put out "fires" in this high-energy attraction.'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Planning Tips',
        'content' => [
            '<strong>Opening Hours:</strong> Typically 10 AM - 6 PM. Recommended to arrive early to beat the afternoon sun.',
            '<strong>Location:</strong> Situated within Dubai Parks and Resorts on Sheikh Zayed Road (E11).',
            '<strong>Combo Tickets:</strong> We highly recommend the LEGOLAND Water Park combo for a full day of family fun.'
        ]
    ],
    [
        'title' => 'Essential Info',
        'content' => [
            '<strong>Age Group:</strong> Best suited for families with children aged 2 to 12. Some rides have minimum height requirements.',
            '<strong>Indoor vs Outdoor:</strong> While many attractions are outdoors, Miniland and the Factory are fully indoor and air-conditioned.',
            '<strong>Guest Services:</strong> Stroller rentals and lockers are available at the park entrance.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'What age group is LEGOLAND Dubai for?', 'a' => 'LEGOLAND is specifically designed for families with children aged 2-12 years old.'],
    ['q' => 'Is LEGOLAND Dubai mostly indoors?', 'a' => 'It is a mix. Miniland, the Factory, and many building zones are indoors, while major rides and the Kingdom area are outdoors.'],
    ['q' => 'Can adults visit without children?', 'a' => 'Yes, anyone can visit! However, please note that some rides and building experiences are tailored specifically for younger guests.'],
    ['q' => 'Are there height restrictions?', 'a' => 'Some thrill rides like The Dragon have minimum height requirements (typically 105cm or 120cm). Driving schools are age-based.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "LEGOLAND Dubai",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/legoland",
  "image": "https://arihantlink.com/img/themepark/images/legoland-8.avif",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Dubai Parks and Resorts, Sheikh Zayed Road",
    "addressLocality": "Dubai",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "24.9197",
    "longitude": "55.0069"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "10:00",
    "closes": "18:00"
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #F1C40F;">
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
                <h2 class="mb-4">LEGOLAND® Dubai: Where Creativity Comes to Life</h2>
                <p class="lead text-primary mb-4"><strong>The ultimate destination for families with children aged
                        2-12.</strong></p>
                <p>Welcome to LEGOLAND® Dubai, the ultimate theme park where imagination knows no bounds. With over 40
                    rides, shows, and building experiences across six themed lands, every child's LEGO dream becomes a
                    reality. Whether they're earning their first driving license at LEGO City or exploring the wonders
                    of Miniland, discovery awaits around every corner.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "Build your own adventure, explore worlds made of millions of bricks, and create memories that
                        last long after the last brick is placed."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-lands" type="button">LEGO Lands</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-adventures" type="button">Creative Adventures</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-guide"
                            type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- LEGO Lands -->
                    <div class="tab-pane fade show active" id="tab-lands">
                        <?php foreach ($zonesData as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-cube text-primary me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Creative Adventures -->
                    <div class="tab-pane fade" id="tab-adventures">
                        <p class="mb-4">From pilot training to deep-sea diving, your children can step into a variety of
                            roles in our interactive adventure zones.</p>
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
                            <img src="img/themepark/images/legoland-1.jpeg.jpg" class="img-fluid rounded mb-3"
                                alt="LEGOLAND Dubai">
                            <h4 class="card-title mb-3">LEGOLAND Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 249</h2>
                                </div>
                                <span class="badge bg-primary rounded-pill">Best Value</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book LEGOLAND Dubai tickets"
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
            <h2 class="text-white mb-3 h3">Build Memories with Our Latest Deals</h2>
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