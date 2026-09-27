<?php
// Page SEO Variables
$pageTitle = "Motiongate Dubai Tickets 2026 | Best Price + Hotel Transfer | Arihant Travels";
$pageDescription = "Book Motiongate Dubai tickets at the best price — DreamWorks, Lionsgate & Columbia Pictures zones. 27+ rides. Hotel transfer available. Instant e-ticket.";
$pageKeywords = "Motiongate Dubai, Dubai Parks and Resorts, DreamWorks, Columbia Pictures, Lionsgate, Shrek ride, Kung Fu Panda, Hollywood theme park Dubai";
$pageCanonical = "https://arihantlink.com/motiongate";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'IMG Worlds of Adventure', 'slug' => 'img-worlds', 'price' => 'From AED 365', 'image' => 'img/themepark/images/IMG-World-Of-Adventure-cover.webp', 'tag' => 'Theme Park'],
    ['name' => 'LEGOLAND Dubai', 'slug' => 'legoland', 'price' => 'From AED 249', 'image' => 'img/themepark/images/legoland-8.avif', 'tag' => 'Family Park'],
    ['name' => 'LEGOLAND Waterpark', 'slug' => 'legoland-waterpark', 'price' => 'From AED 199', 'image' => 'img/themepark/images/legoland-waterpark-cover.avif', 'tag' => 'Waterpark'],
];

// Breadcrumb Variables
$pageHeading = "Motiongate Dubai";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/motiongate-cover.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-film', 'title' => '5 Studios', 'sub' => 'Movie Magic Zones'],
    ['icon' => 'fas fa-rocket', 'title' => '27+ Rides', 'sub' => 'Action & Adventure'],
    ['icon' => 'fas fa-hat-wizard', 'title' => 'Hollywood', 'sub' => 'Immersive Stories'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 249', 'sub' => 'Starting Price']
];

// STUDIO ZONES DATA
$zonesData = [
    [
        'title' => 'Legendary Studios',
        'content' => [
            '<strong>DreamWorks Animation:</strong> Step into the worlds of Shrek, Kung Fu Panda, Madagascar, and How to Train Your Dragon in a fully indoor, climate-controlled zone.',
            '<strong>Columbia Pictures:</strong> Experience blockbuster hits like Ghostbusters, Hotel Transylvania, Cloudy with a Chance of Meatballs, and Zombieland.',
            '<strong>Lionsgate:</strong> Thrilling attractions inspired by The Hunger Games, John Wick, and Now You See Me.'
        ]
    ],
    [
        'title' => 'Family & Discovery',
        'content' => [
            '<strong>Smurfs Village:</strong> A magical land of mushroom-capped houses and gentle rides, perfect for the little ones.',
            '<strong>Studio Central:</strong> The heart of the park with New York-themed streets, dining, shopping, and live performances.'
        ]
    ]
];

// ACTION & MAGIC DATA
$ridesData = [
    [
        'category' => 'High-Octane Rides',
        'items' => [
            '<strong>John Wick: Open Questions:</strong> A 4D trackless coaster that mimics the chase and action of the film.',
            '<strong>The Hunger Games - Panem Aerial Tour:</strong> An immersive hovercraft flight over the districts of Panem.',
            '<strong>The Velociraptor:</strong> Note: This is an IMG ride. Motiongate\'s equivalent is the <strong>Madagascar Mad Pursuit</strong> high-speed coaster.'
        ]
    ],
    [
        'category' => 'Immersive Experiences',
        'items' => [
            '<strong>Kung Fu Panda - Unstoppable Awesomeness:</strong> A state-of-the-art 3D multi-sensory journey.',
            '<strong>Hotel Transylvania:</strong> The world\'s first hotel-themed dark ride featuring Dracula and the gang.',
            '<strong>Ghostbusters - Battle for New York:</strong> An interactive shooting ride to save the city from Slimer and stay-puft.'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Essential Information',
        'content' => [
            '<strong>Opening Hours:</strong> Typically 11 AM - 8 PM daily. Always check the official schedule for seasonal updates.',
            '<strong>Location:</strong> Part of Dubai Parks and Resorts on Sheikh Zayed Road, near Palm Jebel Ali.',
            '<strong>Multi-Park Pass:</strong> Best value is often found by combining Motiongate with LEGOLAND or the Water Park.'
        ]
    ],
    [
        'title' => 'Family Policies',
        'content' => [
            '<strong>Supervision:</strong> Children aged 11 and under must be accompanied by an adult.',
            '<strong>Toddler Care:</strong> Changing facilities and stroller rentals are available throughout the park.',
            '<strong>Food Policy:</strong> Outside catering is not allowed, but themed restaurants like the Smurfs Village Cafe are available.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'What is the best way to avoid queues at Motiongate?', 'a' => 'Visiting on weekdays is recommended. You can also purchase a Q-Fast pass to skip the lines at popular attractions.'],
    ['q' => 'Are there height restrictions for rides?', 'a' => 'Yes, most thrill rides require a minimum height of 105cm or 120cm. However, Smurfs Village has plenty of options for toddlers.'],
    ['q' => 'Is Motiongate an indoor park?', 'a' => 'While the DreamWorks zone is fully indoor and air-conditioned, other zones have some outdoor elements, though many individual rides are indoors.'],
    ['q' => 'Can I meet movie characters?', 'a' => 'Absolutely! Character meet & greets happen regularly in the Smurfs Village and DreamWorks zones.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Motiongate Dubai",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/motiongate",
  "image": "https://arihantlink.com/img/themepark/images/motiongate-cover.avif",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Dubai Parks and Resorts, Sheikh Zayed Road",
    "addressLocality": "Dubai",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "24.9204",
    "longitude": "55.0078"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "11:00",
    "closes": "20:00"
  },
  "offers": {
    "@type": "Offer",
    "price": "249",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/motiongate",
    "seller": { "@type": "Organization", "name": "Arihant Travels Pvt Ltd" }
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #E67E22;">
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
                <h2 class="mb-4">Motiongate Dubai: Your Red Carpet to Adventure</h2>
                <p class="lead text-primary mb-4"><strong>Step into the screen and experience the magic of
                        Hollywood.</strong></p>
                <p>Motiongate Dubai, the largest Hollywood-inspired theme park in the Middle East, brings three
                    legendary film studios to life: DreamWorks Animation, Columbia Pictures, and Lionsgate. Explore five
                    immersive zones filled with 27+ world-class rides and attractions that transport you directly into
                    the heart of your favorite movies.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "From the dragon-filled skies of Berk to the high-stakes world of John Wick, Motiongate is where
                        the greatest stories ever told become your greatest adventures."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-zones" type="button">Studio Zones</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-action"
                            type="button">Action & Magic</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-guide"
                            type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Studio Zones -->
                    <div class="tab-pane fade show active" id="tab-zones">
                        <?php foreach ($zonesData as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-video text-primary me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Action & Magic -->
                    <div class="tab-pane fade" id="tab-action">
                        <p class="mb-4">Experience cutting-edge technology and immersive storytelling across all our
                            action-packed attractions.</p>
                        <?php foreach ($ridesData as $cat): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $cat['category'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-stars text-warning me-2 mt-1"></i>
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
                                        <li class="mb-2 d-flex"><i class="fas fa-ticket-alt text-info me-2 mt-1"></i>
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
                            <img src="img/themepark/images/motiongate-cover.avif" class="img-fluid rounded mb-3"
                                alt="Motiongate Dubai">
                            <h4 class="card-title mb-3">Motiongate Dubai Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 249</h2>
                                </div>
                                <span class="badge bg-warning rounded-pill text-dark text-uppercase">Hollywood
                                    Choice</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Motiongate Dubai tickets"
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
            <h2 class="text-white mb-3 h3">Stay Tuned for Blockbuster Offers</h2>
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