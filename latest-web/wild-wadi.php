<?php
// Page SEO Variables
$pageTitle = "Wild Wadi Waterpark Tickets 2026 | Best Price + Hotel Transfer | Arihant Travels";
$pageDescription = "Book Wild Wadi Waterpark Dubai tickets at the best price — 30+ rides next to Burj Al Arab. Jumeirah Sceirah free-fall slide, wave pool & lazy river.";
$pageKeywords = "Wild Wadi Dubai, Wild Wadi waterpark, Jumeirah waterpark, Burj Al Arab waterpark, Dubai waterpark, Jumeirah Sceirah, wave pool Dubai";
$pageCanonical = "https://arihantlink.com/wild-wadi";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Atlantis Aquaventure Waterpark', 'slug' => 'atlantis-aquaventure', 'price' => 'From AED 330', 'image' => 'img/atlantis/waterpark1.webp', 'tag' => 'Waterpark'],
    ['name' => 'Yas Waterworld Abu Dhabi', 'slug' => 'yas-waterworld', 'price' => 'From AED 295', 'image' => 'img/themepark/images/Yas-waterworld-1.png.avif', 'tag' => 'Waterpark'],
    ['name' => 'IMG Worlds of Adventure', 'slug' => 'img-worlds', 'price' => 'From AED 365', 'image' => 'img/themepark/images/IMG-World-Of-Adventure-cover.webp', 'tag' => 'Theme Park'],
];

// Breadcrumb Variables
$pageHeading = "Wild Wadi Waterpark";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/wildwadi-cover.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-water', 'title' => '30+ Rides', 'sub' => 'Thrills & Fun'],
    ['icon' => 'fas fa-hotel', 'title' => 'Burj Views', 'sub' => 'Iconic Backdrop'],
    ['icon' => 'fas fa-map-marker-alt', 'title' => 'Jumeirah', 'sub' => 'Prime Location'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 299', 'sub' => 'Starting Price']
];

// TOP RIDES DATA
$zonesData = [
    [
        'title' => 'Legendary Thrills',
        'content' => [
            '<strong>Jumeirah Sceirah:</strong> Dubai\'s tallest and fastest free-fall waterslide! Plunge from 32 meters at speeds up to 80 km/h.',
            '<strong>Master Blasters:</strong> High-powered water coasters that blast you uphill using powerful water jets—a Wild Wadi signature.',
            '<strong>Tantrum Alley:</strong> Two large waterslides and three exciting tornadoes that will spin you around before a big splash.'
        ]
    ],
    [
        'title' => 'Adventure Zone',
        'content' => [
            '<strong>Burj Surj:</strong> Two large sections of downhill waterslides and two large bowls that will leave you breathless.',
            '<strong>Wipeout and Riptide:</strong> A unique surfing experience that pumps seven tonnes of water per second into a thin sheet.',
            '<strong>Action River:</strong> Experience the unexpected as you float through the rapids and waterfalls.'
        ]
    ]
];

// WAVE & RELAX DATA
$ridesData = [
    [
        'category' => 'Pools & Currents',
        'items' => [
            '<strong>Breakers Bay:</strong> One of the largest wave pools in the Middle East, producing waves up to 1.5 meters.',
            '<strong>Juha\'s Journey:</strong> A 360-meter long lazy river perfect for families to relax and enjoy the scenery.',
            '<strong>Juha\'s Dhow and Lagoon:</strong> An interactive play area for kids with over 100 water-based games and activities.'
        ]
    ],
    [
        'category' => 'Relaxation Spots',
        'items' => [
            '<strong>Luxury Cabanas:</strong> Private seating areas available for rent, providing a shady retreat with personalized service.',
            '<strong>Food & Beverage:</strong> From Julshan\'s Burgers to Riptide Pizza, enjoy a variety of delicious dining options throughout the park.',
            '<strong>Shopping:</strong> Visit Souk Al Wadi for swimwear, souvenirs, and LEGO themed gifts.'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Essential Information',
        'content' => [
            '<strong>Opening Hours:</strong> Typically 10 AM - 6 PM daily. Hours may vary during winter and summer seasons.',
            '<strong>Dress Code:</strong> Appropriate swimwear is required. Modest swimwear and burkinis are welcome.',
            '<strong>Rentals:</strong> Towels and lockers are available for rent at the entrance for your convenience.'
        ]
    ],
    [
        'title' => 'Family Policies',
        'content' => [
            '<strong>Safety First:</strong> Complimentary life jackets are available for all guests. Professional lifeguards monitor every zone.',
            '<strong>Child Supervision:</strong> Children under 12 must be accompanied by an adult.',
            '<strong>Height Requirements:</strong> Many thrill rides require a minimum height of 1.1 meters for safety.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'Where is Wild Wadi Waterpark located?', 'a' => 'It is located in Jumeirah, right next to the Burj Al Arab hotel and Jumeirah Beach Hotel.'],
    ['q' => 'Is Wild Wadi suitable for children?', 'a' => 'Yes! Juha\'s Dhow and Lagoon is a dedicated area for young children, and many rides are family-friendly.'],
    ['q' => 'Are there height restrictions for the slides?', 'a' => 'Yes, most major slides like Jumeirah Sceirah and Master Blasters require a height of at least 1.1 meters.'],
    ['q' => 'Is outside food allowed inside the park?', 'a' => 'Outside food and drinks are not permitted, but there are plenty of dining options available inside the park.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Wild Wadi Waterpark",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/wild-wadi",
  "image": "https://arihantlink.com/img/themepark/images/wildwadi-cover.avif",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jumeirah Beach Road, next to Burj Al Arab",
    "addressLocality": "Dubai",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.1412",
    "longitude": "55.1853"
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
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #007bff;">
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
                <h2 class="mb-4">Wild Wadi Waterpark: Dubai's Original Splash Adventure</h2>
                <p class="lead text-primary mb-4"><strong>Experience world-class water rides with the iconic Burj Al
                        Arab as your backdrop.</strong></p>
                <p>Wild Wadi Waterpark is one of Dubai's most beloved attractions, offering a perfect blend of
                    high-energy thrill rides and family-friendly experiences. Located in Jumeirah, the park features
                    over 30 slides and attractions themed around the folklore of Juha, a character from Arabian tales.
                    From the heart-pounding Jumeirah Sceirah to the relaxing lazy river, there's something for everyone
                    at this desert oasis.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "More than just slides, Wild Wadi is a legendary journey where the golden sands meet the blue
                        waves of Jumeirah."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-rides" type="button">Top Rides</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-relax"
                            type="button">Wave & Relax</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-guide"
                            type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Top Rides -->
                    <div class="tab-pane fade show active" id="tab-rides">
                        <?php foreach ($zonesData as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-bolt text-warning me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Wave & Relax -->
                    <div class="tab-pane fade" id="tab-relax">
                        <p class="mb-4">Whether you want to catch a wave or just float along, our relaxation zones offer
                            the perfect escape from the city heat.</p>
                        <?php foreach ($ridesData as $cat): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $cat['category'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-umbrella-beach text-info me-2 mt-1"></i>
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
                            <img src="img/themepark/images/wildwadi-cover.avif" class="img-fluid rounded mb-3"
                                alt="Wild Wadi Waterpark">
                            <h4 class="card-title mb-3">Wild Wadi Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 299</h2>
                                </div>
                                <span class="badge bg-danger rounded-pill">Dubai Icon</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Wild Wadi Waterpark tickets"
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
            <h2 class="text-white mb-3 h3">Get Exclusive Wild Wadi Offers</h2>
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