<?php
// Page SEO Variables
$pageTitle = "Dubai & Abu Dhabi Theme Parks | Book Tickets Online | Arihant Travel";
$pageDescription = "Book tickets for Dubai and Abu Dhabi's best theme parks. Ferrari World, Warner Bros, IMG Worlds, Motiongate, LEGOLAND, SeaWorld, Wild Wadi…";
$pageKeywords = "Dubai theme parks, Abu Dhabi theme parks, Ferrari World tickets, Warner Bros World tickets, IMG Worlds of Adventure, Motiongate Dubai, LEGOLAND Dubai, SeaWorld Abu Dhabi, Wild Wadi Waterpark, Yas Waterworld, Ski Dubai, theme park tickets Dubai, best theme parks UAE";
$pageCanonical = "https://arihantlink.com/theme-parks";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Dubai & Abu Dhabi Theme Parks";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/flying-aces.jpg";
$breadcrumbOverlay = true;

// Theme Parks Data Array
$themeParks = [
    [
        "id" => "ferrari-world",
        "name" => "Ferrari World Abu Dhabi",
        "description" => "Experience the world's fastest roller coaster and thrilling rides at Ferrari World on Yas Island. Home to Formula Rossa, the fastest coaster in the world!",
        "image" => "img/themepark/images/ferrari-museum.jpg",
        "location" => "Yas Island, Abu Dhabi",
        "highlights" => ["Formula Rossa - World's Fastest Coaster", "Flying Aces", "Turbo Tower", "Ferrari Museum"],
        "price" => "From AED 335",
        "slug" => "ferrari-world",
        "category" => "Theme Park",
        "rating" => "4.9",
        "reviews" => "4,850"
    ],
    [
        "id" => "warner-bros",
        "name" => "Warner Bros World Abu Dhabi",
        "description" => "Meet your favorite characters and enjoy immersive rides at the world's largest indoor theme park. Experience Batman, Superman, Looney Tunes, and more!",
        "image" => "img/themepark/images/warner-pros-2.webp",
        "location" => "Yas Island, Abu Dhabi",
        "highlights" => ["Batman Knight Flight", "Superman 360", "Cartoon Junction", "Bedrock"],
        "price" => "From AED 335",
        "slug" => "warner-bros-world",
        "category" => "Theme Park",
        "rating" => "4.8",
        "reviews" => "3,240"
    ],
    [
        "id" => "img-worlds",
        "name" => "IMG Worlds of Adventure",
        "description" => "Dubai's largest indoor theme park with Marvel, Cartoon Network, Lost Valley dinosaur zones, and IMG Boulevard. Perfect for all ages!",
        "image" => "img/themepark/images/IMG-World-Of-Adventure-cover.webp",
        "location" => "Dubai",
        "highlights" => ["Marvel Zone - Avengers", "Cartoon Network", "Lost Valley - Dinosaurs", "IMG Boulevard"],
        "price" => "From AED 365",
        "slug" => "img-worlds",
        "category" => "Theme Park",
        "rating" => "4.7",
        "reviews" => "5,120"
    ],
    [
        "id" => "motiongate",
        "name" => "Motiongate Dubai",
        "description" => "Hollywood-inspired rides and attractions from DreamWorks, Columbia Pictures, and Lionsgate. Experience Shrek, Kung Fu Panda, and The Hunger Games!",
        "image" => "img/themepark/images/motiongate-cover.avif",
        "location" => "Dubai Parks and Resorts",
        "highlights" => ["DreamWorks Animation", "Columbia Pictures", "Lionsgate Zone", "Smurfs Village"],
        "price" => "From AED 249",
        "slug" => "motiongate",
        "category" => "Theme Park",
        "rating" => "4.8",
        "reviews" => "2,850"
    ],
    [
        "id" => "legoland",
        "name" => "LEGOLAND Dubai",
        "description" => "The ultimate LEGO® theme park for families with kids aged 2-12. Over 40 rides, shows, and building experiences!",
        "image" => "img/themepark/images/legoland-8.avif",
        "location" => "Dubai Parks and Resorts",
        "highlights" => ["LEGO Factory", "Miniland", "LEGO Kingdoms", "40+ Rides & Shows"],
        "price" => "From AED 249",
        "slug" => "legoland",
        "category" => "Theme Park",
        "rating" => "4.6",
        "reviews" => "1,980"
    ],
    [
        "id" => "legoland-waterpark",
        "name" => "LEGOLAND Waterpark",
        "description" => "Splash-tastic fun for families with young children. Build your own LEGO raft, enjoy wave pools, and cool water slides!",
        "image" => "img/themepark/images/legoland-waterpark-cover.avif",
        "location" => "Dubai Parks and Resorts",
        "highlights" => ["Build-A-Raft River", "Wave Pool", "LEGO Slides", "Splash Zoo"],
        "price" => "From AED 199",
        "slug" => "legoland-waterpark",
        "category" => "Waterpark",
        "rating" => "4.7",
        "reviews" => "1,450"
    ],
    [
        "id" => "atlantis-aquaventure",
        "name" => "Atlantis Aquaventure Waterpark",
        "description" => "Splash into fun at one of the world's best waterparks, featuring thrilling slides, rides, and a private beach at Atlantis The Palm.",
        "image" => "img/atlantis/waterpark1.webp",
        "location" => "Palm Jumeirah, Dubai",
        "highlights" => ["105+ Record-breaking Slides", "Leap of Faith", "1km Private Beach", "Splashers Kids Area"],
        "price" => "From AED 330",
        "slug" => "atlantis-aquaventure",
        "category" => "Waterpark",
        "rating" => "4.9",
        "reviews" => "4,120"
    ],
    [
        "id" => "seaworld",
        "name" => "SeaWorld Abu Dhabi",
        "description" => "The region's largest marine life theme park with interactive exhibits, aquatic shows, and eight immersive realms to explore.",
        "image" => "img/themepark/images/sea-world-1.jpg",
        "location" => "Yas Island, Abu Dhabi",
        "highlights" => ["8 Immersive Realms", "Marine Life Exhibits", "Interactive Shows", "One Ocean Realm"],
        "price" => "From AED 375",
        "slug" => "seaworld",
        "category" => "Theme Park",
        "rating" => "4.9",
        "reviews" => "2,100"
    ],
    [
        "id" => "wild-wadi",
        "name" => "Wild Wadi Waterpark",
        "description" => "Iconic waterpark in Dubai with thrilling slides, wave pools, and family attractions. Located next to Burj Al Arab with stunning views!",
        "image" => "img/themepark/images/wildwadi-cover.avif",
        "location" => "Jumeirah, Dubai",
        "highlights" => ["Jumeirah Sceirah", "Wave Pool", "Master Blasters", "Burj Al Arab Views"],
        "price" => "From AED 299",
        "slug" => "wild-wadi",
        "category" => "Waterpark",
        "rating" => "4.7",
        "reviews" => "3,420"
    ],
    [
        "id" => "yas-waterworld",
        "name" => "Yas Waterworld Abu Dhabi",
        "description" => "The UAE's leading water park with 45 thrilling rides and 6 one-of-a-kind attractions inspired by pearl diving heritage.",
        "image" => "img/themepark/images/Yas-waterworld-1.png.avif",
        "location" => "Yas Island, Abu Dhabi",
        "highlights" => ["45 Thrilling Rides", "Dawwama - World's Largest", "Pearl Diving Heritage", "Bandit Bomber"],
        "price" => "From AED 295",
        "slug" => "yas-waterworld",
        "category" => "Waterpark",
        "rating" => "4.8",
        "reviews" => "2,780"
    ],
    [
        "id" => "ski-dubai-snow-plus",
        "name" => "Ski Dubai Snow Plus Pass",
        "description" => "Ultimate VIP experience with unlimited Mountain Thriller rides, chairlift access, plus choose between skiing, zipline, or penguin experience.",
        "image" => "img/themepark/images/ski-dubai-vip-1.avif",
        "location" => "Mall of the Emirates, Dubai",
        "highlights" => ["Unlimited Mountain Thriller", "Chairlift Access", "Skiing or Zipline", "Penguin Experience"],
        "price" => "From AED 325",
        "slug" => "ski-dubai-snow-plus",
        "category" => "Snow Park",
        "rating" => "4.9",
        "reviews" => "1,250"
    ],
    [
        "id" => "ski-dubai-classic",
        "name" => "Ski Dubai Classic Pass",
        "description" => "Classic snow park experience with unlimited access to snow activities, tobogganing, Zorb Ball, and snow cavern adventures.",
        "image" => "img/themepark/images/ski-dubai-classic-1.avif",
        "location" => "Mall of the Emirates, Dubai",
        "highlights" => ["Unlimited Snow Park", "Tobogganing", "Snow Cavern", "Winter Gear Included"],
        "price" => "From AED 265",
        "slug" => "ski-dubai-classic",
        "category" => "Snow Park",
        "rating" => "4.8",
        "reviews" => "2,340"
    ],
    [
        "id" => "yas-multipark",
        "name" => "Yas Island Multi-Park Entry",
        "description" => "The ultimate Yas Island experience. Choose any 2, 3, or 4 parks including Ferrari World, Warner Bros, SeaWorld, and Yas Waterworld.",
        "image" => "img/themepark/images/warner-pros-2.webp",
        "location" => "Yas Island, Abu Dhabi",
        "highlights" => ["Choice of 2, 3, or 4 Parks", "Includes SeaWorld & Ferrari World", "Flexible Visit Dates", "Best Value Bundle"],
        "price" => "From AED 400",
        "slug" => "yas-island-multi-park",
        "category" => "Theme Park",
        "rating" => "4.9",
        "reviews" => "1,560"
    ]
];

$categories = ["All", "Theme Park", "Waterpark", "Snow Park"];

// JSON-LD Schema
$schemaElements = [];
foreach ($themeParks as $index => $park) {
    $schemaElements[] = [
        "@type" => "ListItem",
        "position" => $index + 1,
        "item" => [
            "@type" => "Product",
            "name" => $park['name'],
            "description" => $park['description'],
            "image" => "https://arihantlink.com/" . $park['image'],
            "offers" => [
                "@type" => "Offer",
                "price" => str_replace(["From AED ", "AED "], "", $park['price']),
                "priceCurrency" => "AED",
                "availability" => "https://schema.org/InStock"
            ]
        ]
    ];
}

$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "' . $pageHeading . '",
  "description": "' . $pageDescription . '",
  "itemListElement": ' . json_encode($schemaElements, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the best theme park in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "IMG Worlds of Adventure is Dubai\'s largest indoor theme park and very popular. For families with young children, LEGOLAND Dubai is excellent. Motiongate Dubai offers Hollywood-inspired attractions for all ages."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best theme park in Abu Dhabi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ferrari World Abu Dhabi is famous for having the world\'s fastest roller coaster (Formula Rossa). Warner Bros World is the world\'s largest indoor theme park with beloved character experiences. SeaWorld Abu Dhabi offers unique marine life experiences."
      }
    },
    {
      "@type": "Question",
      "name": "Are Dubai theme parks suitable for children?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! Many theme parks cater specifically to families. LEGOLAND Dubai is designed for kids aged 2-12. IMG Worlds has the Cartoon Network zone, and Warner Bros World has Looney Tunes and Bedrock areas perfect for children."
      }
    },
    {
      "@type": "Question",
      "name": "Which waterpark is best in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Wild Wadi Waterpark in Dubai and Yas Waterworld in Abu Dhabi are both excellent choices. Wild Wadi offers iconic views of Burj Al Arab, while Yas Waterworld has unique attractions like Dawwama, the world\'s largest six-person tornado water slide."
      }
    },
    {
      "@type": "Question",
      "name": "Can I visit Ski Dubai in summer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! Ski Dubai at Mall of the Emirates is open year-round and maintains sub-zero temperatures inside. It\'s a perfect escape from the Dubai heat any time of year."
      }
    }
  ]
}
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
include 'includes/wishlist-button.php';
?>

<!-- Main Content -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Adrenaline & Fun</h5>
            <h2 class="mb-4">Discover UAE's Best Theme Parks</h2>
            <p class="mb-0 text-muted">From the adrenaline rush of the world's fastest roller coaster at Ferrari World
                to
                the magical character encounters at Warner Bros World, the UAE offers some of the most spectacular theme
                park experiences in the world.</p>
        </div>

        <!-- Category Filter -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="btn-group filter-button-group" role="group" aria-label="Theme Park Categories">
                    <?php foreach ($categories as $index => $category): ?>
                        <button type="button"
                            class="btn btn-outline-primary rounded-pill px-4 mx-1 filter-btn <?= $index === 0 ? 'active' : '' ?>"
                            data-filter="<?= $category === 'All' ? '*' : '.' . str_replace(' ', '-', strtolower($category)) ?>">
                            <?= $category ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center park-grid">
            <?php foreach ($themeParks as $park): ?>
                <div class="col-lg-4 col-md-6 park-item <?= str_replace(' ', '-', strtolower($park['category'])) ?>">
                    <div class="card h-100 shadow border-0 overflow-hidden theme-park-card">
                        <div class="position-relative">
                            <a href="/<?= $park['slug'] ?>">
                                <img src="<?= $park['image'] ?>" class="card-img-top" alt="<?= $park['name'] ?>"
                                    style="height: 250px; object-fit: cover;">
                            </a>
                            <span
                                class="badge bg-primary position-absolute top-0 start-0 m-3"><?= $park['category'] ?></span>
                            <span class="badge bg-secondary position-absolute top-0 end-0 m-3"><?= $park['price'] ?></span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <a href="/<?= $park['slug'] ?>" class="text-decoration-none text-dark">
                                    <h5 class="card-title mb-0"><?= $park['name'] ?></h5>
                                </a>
                                <div class="text-warning small">
                                    <i class="fas fa-star"></i> <?= $park['rating'] ?>
                                    <span class="text-muted">(<?= $park['reviews'] ?>)</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-muted small mb-3">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                                <span><?= $park['location'] ?></span>
                            </div>
                            <p class="card-text text-muted small mb-4"><?= $park['description'] ?></p>

                            <div class="mb-4">
                                <h6 class="small fw-bold mb-2">Highlights:</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <?php foreach (array_slice($park['highlights'], 0, 3) as $highlight): ?>
                                        <span class="badge bg-light text-dark border small fw-normal"><?= $highlight ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="mt-auto d-flex gap-2">
                                <a href="/<?= $park['slug'] ?>" class="btn btn-primary flex-grow-1">View
                                    Details</a>
                                <a href="https://wa.me/971585945007?text=I'm interested in booking tickets for <?= $park['name'] ?>"
                                    target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Which Park Is Right For You -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Find Your Perfect Match</h5>
            <h2 class="mb-3">Which Dubai Theme Park Is Right for You?</h2>
            <p class="text-muted" style="max-width:700px; margin: 0 auto;">Not sure which park to visit? Use our quick guide below to find the best fit for your group, age, and interests.</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center" style="width:48px;height:48px;min-width:48px;">
                            <i class="fas fa-child text-white"></i>
                        </div>
                        <h5 class="mb-0 fw-bold">Best for Young Kids (2–10)</h5>
                    </div>
                    <p class="text-muted small mb-3">If you're travelling with toddlers or young children, these parks are specifically designed for them.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="/legoland" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>LEGOLAND® Dubai</a> <span class="text-muted small">— 40+ rides for ages 2–12</span></li>
                        <li class="mb-2"><a href="/legoland-waterpark" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>LEGOLAND Waterpark</a> <span class="text-muted small">— Build-a-raft fun</span></li>
                        <li><a href="/warner-bros-world" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>Warner Bros. World</a> <span class="text-muted small">— Cartoon Junction zone</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center" style="width:48px;height:48px;min-width:48px;">
                            <i class="fas fa-bolt text-white"></i>
                        </div>
                        <h5 class="mb-0 fw-bold">Best for Thrill Seekers</h5>
                    </div>
                    <p class="text-muted small mb-3">Want maximum adrenaline? These parks have the fastest rides and biggest drops in the UAE.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="/ferrari-world" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>Ferrari World Abu Dhabi</a> <span class="text-muted small">— World's fastest coaster</span></li>
                        <li class="mb-2"><a href="/wild-wadi" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>Wild Wadi Waterpark</a> <span class="text-muted small">— 32m free-fall slide</span></li>
                        <li><a href="/img-worlds" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>IMG Worlds of Adventure</a> <span class="text-muted small">— Velociraptor coaster</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width:48px;height:48px;min-width:48px;">
                            <i class="fas fa-users text-white"></i>
                        </div>
                        <h5 class="mb-0 fw-bold">Best for All-Age Families</h5>
                    </div>
                    <p class="text-muted small mb-3">When your group has a mix of ages and interests, these parks have something for everyone.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="/img-worlds" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>IMG Worlds of Adventure</a> <span class="text-muted small">— Marvel, Cartoon Network & more</span></li>
                        <li class="mb-2"><a href="/motiongate" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>Motiongate Dubai</a> <span class="text-muted small">— DreamWorks & Hollywood</span></li>
                        <li><a href="/seaworld" class="text-decoration-none fw-semibold"><i class="fas fa-arrow-right text-primary me-2 small"></i>SeaWorld Abu Dhabi</a> <span class="text-muted small">— Marine life + rides</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Park Comparison Table -->
        <div class="text-center mb-4">
            <h3 class="fw-bold">Quick Comparison</h3>
            <p class="text-muted">All prices are per person. Hotel transfers available on request.</p>
        </div>
        <div class="table-responsive shadow-sm rounded border">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Park</th>
                        <th>Location</th>
                        <th>Best For</th>
                        <th>Price From</th>
                        <th class="text-center">Book</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong><a href="/ferrari-world" class="text-decoration-none">Ferrari World</a></strong></td>
                        <td>Yas Island, Abu Dhabi</td>
                        <td>Thrill Seekers</td>
                        <td class="text-primary fw-bold">AED 335</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book Ferrari World tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                    <tr>
                        <td><strong><a href="/warner-bros-world" class="text-decoration-none">Warner Bros. World</a></strong></td>
                        <td>Yas Island, Abu Dhabi</td>
                        <td>Families, Kids</td>
                        <td class="text-primary fw-bold">AED 335</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book Warner Bros World tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                    <tr>
                        <td><strong><a href="/img-worlds" class="text-decoration-none">IMG Worlds of Adventure</a></strong></td>
                        <td>Dubai</td>
                        <td>All Ages</td>
                        <td class="text-primary fw-bold">AED 365</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book IMG Worlds tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                    <tr>
                        <td><strong><a href="/motiongate" class="text-decoration-none">Motiongate Dubai</a></strong></td>
                        <td>Dubai Parks & Resorts</td>
                        <td>All Ages, Hollywood Fans</td>
                        <td class="text-primary fw-bold">AED 249</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book Motiongate tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                    <tr>
                        <td><strong><a href="/legoland" class="text-decoration-none">LEGOLAND Dubai</a></strong></td>
                        <td>Dubai Parks & Resorts</td>
                        <td>Kids 2–12</td>
                        <td class="text-primary fw-bold">AED 249</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book LEGOLAND Dubai tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                    <tr>
                        <td><strong><a href="/seaworld" class="text-decoration-none">SeaWorld Abu Dhabi</a></strong></td>
                        <td>Yas Island, Abu Dhabi</td>
                        <td>Families, Marine Life</td>
                        <td class="text-primary fw-bold">AED 375</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book SeaWorld Abu Dhabi tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                    <tr>
                        <td><strong><a href="/wild-wadi" class="text-decoration-none">Wild Wadi Waterpark</a></strong></td>
                        <td>Jumeirah, Dubai</td>
                        <td>Water Thrills, Families</td>
                        <td class="text-primary fw-bold">AED 299</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book Wild Wadi Waterpark tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                    <tr class="table-warning">
                        <td><strong><a href="/yas-island-multi-park" class="text-decoration-none">Yas Island Multi-Park</a></strong></td>
                        <td>Yas Island, Abu Dhabi</td>
                        <td>Best Value Bundle</td>
                        <td class="text-primary fw-bold">AED 400</td>
                        <td class="text-center"><a href="https://wa.me/971585945007?text=I want to book Yas Island Multi-Park tickets" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp me-1"></i>Book</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-muted small text-center mt-2">All bookings include e-ticket delivery. Hotel transfers available on request. <a href="https://wa.me/971585945007" target="_blank">Contact us</a> for group rates.</p>
    </div>
</div>

<?php include 'includes/why-book-us.php'; ?>

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-4">Get Exclusive Travel Deals</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers, travel tips, and
                updates on our latest Jain-friendly Dubai packages. Be the first to know about special discounts and new
                tour destinations!
            </p>
            <div class="position-relative mx-auto" style="max-width: 600px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->

<style>
    .theme-park-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .theme-park-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }

    .filter-btn.active {
        background-color: var(--bs-primary);
        color: white;
    }

    .park-item {
        transition: all 0.4s ease;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const parkItems = document.querySelectorAll('.park-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Update active state
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                parkItems.forEach(item => {
                    if (filterValue === '*' || item.classList.contains(filterValue.substring(1))) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 400);
                    }
                });
            });
        });
    });
</script>

<!-- Customer reviews -->
<?php
$reviewsHeading = 'What Park Visitors Say';
$pageReviews = [
    ['name' => 'Doshi Family', 'location' => 'Pune, India', 'stars' => 5,
     'text' => 'E-tickets for Ferrari World arrived within minutes of paying. Skipped the counter queue completely. Hotel transfer both ways was included as promised.'],
    ['name' => 'Kavita M.', 'location' => 'Bengaluru, India', 'stars' => 5,
     'text' => 'Booked IMG Worlds and Dubai Parks for the kids. Arihant suggested the right combo ticket and saved us money versus booking at the gate. Very responsive on WhatsApp.'],
    ['name' => 'Sanghvi Family', 'location' => 'Jaipur, India', 'stars' => 5,
     'text' => 'They planned our theme park days around Jain meal options nearby — something no other agent even thought about. Yas Island multi-park pass worked perfectly.'],
];
include 'includes/customer-reviews.php';
unset($reviewsHeading, $pageReviews);
?>

<?php echo $schemaMarkup; ?>

<?php include 'includes/footer.php'; ?>