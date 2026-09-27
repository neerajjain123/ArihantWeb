<?php
// Page SEO Variables
// CTR rescue: targets "warner bros world abu dhabi ticket price 2026" (235 imp, pos 8.30, 0% CTR previously). Description now leads with concrete 2026 price and savings — what searchers actually want at this query.
$pageTitle = "Warner Bros World Abu Dhabi Ticket Price 2026 | From AED 345";
$pageDescription = "Warner Bros World Abu Dhabi tickets from AED 345, multi-park combos from AED 395, with free pickup from your Dubai hotel. What's inside and FAQs.";
$pageKeywords = "warner bros world abu dhabi ticket price 2026, Warner Bros World Abu Dhabi, warner bros tickets, Batman Knight Flight, Tom and Jerry Swiss Cheese Spin, Warner Bros Abu Dhabi tickets, indoor theme park Abu Dhabi, Gotham City rides, Metropolis DC Comics";
$pageCanonical = "https://arihantlink.com/warner-bros-world";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Ferrari World Abu Dhabi', 'slug' => 'ferrari-world', 'price' => 'From AED 335', 'image' => 'img/themepark/images/ferrari-museum.jpg', 'tag' => 'Theme Park'],
    ['name' => 'Yas Island Multi-Park Entry', 'slug' => 'yas-island-multi-park', 'price' => 'From AED 400', 'image' => 'img/themepark/images/warner-pros-2.webp', 'tag' => 'Best Value'],
    ['name' => 'SeaWorld Abu Dhabi', 'slug' => 'seaworld', 'price' => 'From AED 375', 'image' => 'img/themepark/images/sea-world-1.jpg', 'tag' => 'Theme Park'],
];

// Breadcrumb Variables
$pageHeading = "Warner Bros. World™ Abu Dhabi";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/warner-pros-2.webp";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-snowflake', 'title' => 'Fully AC', 'sub' => 'Indoor Comfort'],
    ['icon' => 'fas fa-map-marked-alt', 'title' => '6 Lands', 'sub' => 'Immersive Worlds'],
    ['icon' => 'fas fa-mask', 'title' => 'Characters', 'sub' => 'Meet DC & Looney Tunes'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 335', 'sub' => 'Starting Price']
];

// ITINERARY DATA
$itineraryData = [
    [
        'title' => 'Morning: The "Left Side" Strategy',
        'content' => [
            '<strong>Arrive Early:</strong> Aim to be at the park for opening (10:00 AM) to beat the queues.',
            '<strong>The First Stop:</strong> Head immediately to <em>Tom and Jerry: Swiss Cheese Spin</em> to avoid wait times exceeding 65 minutes.',
            '<strong>Gotham City:</strong> Move toward the left side for adult-oriented thrills like <em>Batman: Knight Flight</em> and <em>The Riddler Revolution</em>.',
            '<strong>Scarecrow Scare Raid:</strong> Only for the brave – involves spinning and hanging upside down!'
        ]
    ],
    [
        'title' => 'Midday: Immersive Dining and Nostalgia',
        'content' => [
            '<strong>Themed Dining:</strong> Enjoy prehistoric meals at <em>Bronto Burgers & Ribs</em> or cartoon-inspired fun at <em>ACME Commissary</em>.',
            '<strong>Sweet Treats:</strong> Grab a quick treat from the <em>Mr. Freeze Ice Cream Truck</em> in Gotham City.',
            '<strong>Family Lands:</strong> After lunch, explore Cartoon Junction, Bedrock, and Dynamite Gulch. Don\'t miss <em>Fast and Furry-ous</em>!'
        ]
    ],
    [
        'title' => 'Afternoon: Shows and Character Encounters',
        'content' => [
            '<strong>Warner Bros. Plaza:</strong> The central hub for atmosphere and character meet-and-greets.',
            '<strong>Live Entertainment:</strong> Catch daily performances featuring superheroes or Looney Tunes favorites.',
            '<strong>Metropolis:</strong> Join the Justice League in <em>Warworld Attacks</em>, a top-rated 5D immersive experience.'
        ]
    ]
];

// KIDS ZONE DATA
$kidsZoneData = [
    [
        'category' => 'Character Encounters',
        'items' => [
            '<strong>DC Heroes:</strong> Meet legends like Batman and Superman.',
            '<strong>Cartoon Legends:</strong> Interact with Bugs Bunny, Scooby-Doo, and more.',
            '<strong>Photo Ops:</strong> Frequent meet-and-greets at Warner Bros. Plaza.'
        ]
    ],
    [
        'category' => 'Favorite Zones for Kids',
        'items' => [
            '<strong>Cartoon Junction:</strong> Step into the whimsical world of beloved cartoons.',
            '<strong>Bedrock:</strong> Travel back to prehistoric times with the Flintstones.',
            '<strong>Dynamite Gulch:</strong> High-speed fun with Road Runner and Wily Coyote.'
        ]
    ],
    [
        'category' => 'Toddler-Friendly Fun',
        'items' => [
            '<strong>Gentle Rides:</strong> Numerous age-appropriate attractions for the youngest guests.',
            '<strong>Interactive Play:</strong> Live shows and storytelling that bring animated worlds to life.'
        ]
    ]
];

// VISITOR INFO DATA
$prepData = [
    '<strong>Online Booking:</strong> Save up to 10% by purchasing tickets online in advance.',
    '<strong>Quick Pass:</strong> Strongly recommended for weekends and public holidays.',
    '<strong>Dress Code:</strong> Comfortable, modest clothing is best. Avoid flowy dresses for thrill rides.',
    '<strong>Food Policy:</strong> Outside food and drinks are not permitted inside the park.',
    '<strong>Free Parking:</strong> Ample parking is available near the entrance.'
];

// FAQ DATA
$faqs = [
    ['q' => 'What is the best time to arrive?', 'a' => 'Aim for 10:00 AM opening to hit popular rides like Tom and Jerry first.'],
    ['q' => 'Is the park good for toddlers?', 'a' => 'Yes! Cartoon Junction and Bedrock have many gentle rides tailored for young children.'],
    ['q' => 'How much can I save by booking online?', 'a' => 'You can save up to 10% compared to gate prices by booking in advance.'],
    ['q' => 'Is the park comfortable in summer?', 'a' => 'Absolutely. It is fully air-conditioned and the region\'s largest indoor theme park.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Warner Bros. World Abu Dhabi",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/warner-bros-world",
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
    "latitude": "24.4874",
    "longitude": "54.6059"
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
                <h2 class="mb-4">Warner Bros. World Abu Dhabi Tickets 2026 — Rides, Characters & Visitor Guide</h2>
                <p class="lead text-primary mb-4"><strong>Book tickets to the world's largest indoor theme park at the best price — meet Batman, Superman, Bugs Bunny and more.</strong></p>
                <p>Warner Bros. World™ Abu Dhabi brings legendary characters and stories to life in six immersive lands.
                    From the dark, gritty streets of Gotham City to the whimsical fun of Cartoon Junction, this fully
                    air-conditioned park offers 29 state-of-the-art rides and interactive attractions for the whole
                    family.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "If Warner Bros. World were a giant toy box, each themed land would be a different set of toys
                        come to life, allowing children to move from Bedrock to Metropolis in a single afternoon."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-itinerary" type="button">Strategy & Itinerary</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-kids"
                            type="button">Kids Magic</button>
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
                                        <li class="mb-2 d-flex"><i class="fas fa-play text-danger me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Kids Zone -->
                    <div class="tab-pane fade" id="tab-kids">
                        <p class="mb-4">Kids are most drawn to the park's immersive storytelling and the opportunity to
                            interact with their favorite cinematic and cartoon characters.</p>
                        <?php foreach ($kidsZoneData as $cat): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $cat['category'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-star text-warning me-2 mt-1"></i>
                                            <div><?= $item ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                        <div class="alert alert-warning py-2 small">
                            <strong>Themed Dining:</strong> Kids love Bronto Burgers in Bedrock and the ACME Commissary!
                        </div>
                    </div>

                    <!-- Visitor Info -->
                    <div class="tab-pane fade" id="tab-info">
                        <h5 class="text-primary border-bottom pb-2">Essential Tips</h5>
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
                    <h3 class="mb-4">Warner Bros. Insider FAQs</h3>
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
                            <img src="img/themepark/images/warner-bros-1.jpg" class="img-fluid rounded mb-3"
                                alt="Warner Bros World">
                            <h4 class="card-title mb-3">Warner Bros World Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 335</h2>
                                </div>
                                <span class="badge bg-success rounded-pill">Best Price</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Warner Bros World tickets"
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
            <h2 class="text-white mb-3 h3">Unlock Exclusive Theme Park Deals</h2>
            <div class="position-relative mx-auto mt-4" style="max-width: 500px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email address">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/mobile-sticky-cta.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include 'includes/footer.php'; ?>