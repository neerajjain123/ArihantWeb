<?php
// Page SEO Variables
$pageTitle = "IMG Worlds of Adventure Dubai Tickets 2026 | Hotel Transfer Included | Arihant Travel";
$pageDescription = "Book IMG Worlds of Adventure Dubai tickets at best price — Marvel, Cartoon Network, Lost Valley & 22+ rides. Hotel pick-up included. Instant e-ticket.";
$pageKeywords = "IMG Worlds of Adventure, IMG Worlds Dubai, Marvel Zone, Cartoon Network zone, Lost Valley, Dubai theme park, indoor theme park Dubai, Avengers ride Dubai";
$pageCanonical = "https://arihantlink.com/img-worlds";
$currentPage = "excursions";

// Related Parks
$relatedParks = [
    ['name' => 'Motiongate Dubai', 'slug' => 'motiongate', 'price' => 'From AED 249', 'image' => 'img/themepark/images/motiongate-cover.avif', 'tag' => 'Theme Park'],
    ['name' => 'LEGOLAND Dubai', 'slug' => 'legoland', 'price' => 'From AED 249', 'image' => 'img/themepark/images/legoland-8.avif', 'tag' => 'Family Park'],
    ['name' => 'Wild Wadi Waterpark', 'slug' => 'wild-wadi', 'price' => 'From AED 299', 'image' => 'img/themepark/images/wildwadi-cover.avif', 'tag' => 'Waterpark'],
];

// Breadcrumb Variables
$pageHeading = "IMG Worlds of Adventure";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/IMG-World-Of-Adventure-cover.webp";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-map-marked-alt', 'title' => '4 Worlds', 'sub' => 'Epic Adventure Zones'],
    ['icon' => 'fas fa-bolt', 'title' => '22+ Rides', 'sub' => 'Thrill & Family Fun'],
    ['icon' => 'fas fa-snowflake', 'title' => 'Fully Indoor', 'sub' => 'Climate Controlled'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 365', 'sub' => 'Starting Price']
];

// EPIC WORLDS DATA
$zonesData = [
    [
        'title' => 'Marvel & Cartoon Network',
        'content' => [
            '<strong>Marvel Zone:</strong> Join the Avengers in epic battles! Features Battle of Ultron, Hulk Epsilon Base 3D, and Spider-Man Doc Ock\'s Revenge.',
            '<strong>Cartoon Network:</strong> Meet Ben 10, The Powerpuff Girls, and Adventure Time favorites. Perfect for young fans and families.'
        ]
    ],
    [
        'title' => 'Lost Valley & IMG Boulevard',
        'content' => [
            '<strong>Lost Valley:</strong> A prehistoric world with animatronic dinosaurs and the hair-raising Velociraptor coaster.',
            '<strong>IMG Boulevard:</strong> The entertainment hub with dining, shopping, and the world-famous Haunted Hotel.'
        ]
    ]
];

// RIDES & THRILLS DATA
$ridesData = [
    [
        'category' => 'Top Thrills',
        'items' => [
            '<strong>The Velociraptor:</strong> A high-speed blast from the prehistoric jungle to the Dubai desert.',
            '<strong>Predator:</strong> A sheer vertical drop that will leave you breathless.',
            '<strong>Thor Thunder Spin:</strong> An exhilarating physics-defying experience.'
        ]
    ],
    [
        'category' => 'Family & Immersive',
        'items' => [
            '<strong>Avengers: Battle of Ultron:</strong> An immersive 3D media-based dark ride.',
            '<strong>Ben 10 5D Hero Time:</strong> Join Ben and Rook in this multi-sensory experience.',
            '<strong>The Haunted Hotel:</strong> Navigate a maze of corridors and changing scenery (Ages 15+).'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Planning Your Visit',
        'content' => [
            '<strong>Opening Hours:</strong> Sun-Wed: 11 AM - 8 PM | Thu-Sat: 11 AM - 10 PM.',
            '<strong>Location:</strong> Situated on E311 (Sheikh Mohammed Bin Zayed Road), near Global Village.',
            '<strong>Best Time to Visit:</strong> Weekdays are usually less crowded, allowing for shorter queue times.'
        ]
    ],
    [
        'title' => 'Important Tips',
        'content' => [
            '<strong>Dress Code:</strong> Comfortable clothing and walking shoes are highly recommended.',
            '<strong>Food & Beverage:</strong> Outside food is not permitted, but the park offers numerous themed dining options.',
            '<strong>Height Restrictions:</strong> Most major rides have a minimum height requirement of 1.05m to 1.3m.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'Is IMG Worlds suitable for young children?', 'a' => 'Yes! The Cartoon Network zone is specifically designed for younger guests with many family-friendly rides.'],
    ['q' => 'Is the park fully indoor?', 'a' => 'Absolutely. IMG Worlds is the world\'s largest indoor theme park, fully air-conditioned for year-round comfort.'],
    ['q' => 'Can I meet my favorite characters?', 'a' => 'Yes, character meet & greets happen throughout the day in the Marvel and Cartoon Network zones.'],
    ['q' => 'Are there dining options inside?', 'a' => 'There are over 28 food and beverage outlets ranging from quick snacks to themed fine dining.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "IMG Worlds of Adventure",
  "description": "' . $pageDescription . '",
  "url": "https://arihantlink.com/img-worlds",
  "image": "https://arihantlink.com/img/themepark/images/IMG-World-Of-Adventure-cover.webp",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Sheikh Mohammed Bin Zayed Road, City of Arabia",
    "addressLocality": "Dubai",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.0742",
    "longitude": "55.2424"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Sunday","Monday","Tuesday","Wednesday"],
      "opens": "11:00",
      "closes": "20:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Thursday","Friday","Saturday"],
      "opens": "11:00",
      "closes": "22:00"
    }
  ],
  "offers": {
    "@type": "Offer",
    "price": "365",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/img-worlds",
    "seller": { "@type": "Organization", "name": "Arihant Travel" }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.6",
    "reviewCount": "723"
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #6C5CE7;">
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
                <h2 class="mb-4">IMG Worlds of Adventure: Where Epic Stories Come to Life</h2>
                <p class="lead text-primary mb-4"><strong>Explore 1.5 million square feet of indoor excitement and
                        themed adventure.</strong></p>
                <p>IMG Worlds of Adventure is Dubai's largest indoor theme park, offering a year-round escape into
                    worlds of wonder. From the high-stakes action of the Marvel universe to the nostalgic fun of Cartoon
                    Network and the prehistoric thrills of Lost Valley, there is something for every explorer.</p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "Battle alongside the Avengers, chase dinosaurs in Lost Valley, or brave the Haunted Hotel – IMG
                        Worlds is an indoor playground of epic proportions."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-zones" type="button">Epic Worlds</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-rides"
                            type="button">Rides & Thrills</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-guide"
                            type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Epic Worlds -->
                    <div class="tab-pane fade show active" id="tab-zones">
                        <?php foreach ($zonesData as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i
                                                class="fas fa-globe-americas text-primary me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Rides & Thrills -->
                    <div class="tab-pane fade" id="tab-rides">
                        <p class="mb-4">With 22+ rides and attractions, IMG Worlds offers everything from
                            gravity-defying coasters to state-of-the-art 3D experiences.</p>
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
                            <img src="img/themepark/images/IMG-World-Of-Adventure-cover.webp"
                                class="img-fluid rounded mb-3" alt="IMG Worlds of Adventure">
                            <h4 class="card-title mb-3">IMG Worlds Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 365</h2>
                                </div>
                                <span class="badge bg-primary rounded-pill">Best Deal</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book IMG Worlds of Adventure tickets"
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
            <h2 class="text-white mb-3 h3">Don't Miss Out on Epic Adventure Deals</h2>
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