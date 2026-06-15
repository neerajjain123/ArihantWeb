<?php
// Page SEO Variables
$pageTitle = "Global Village Tickets Dubai 2025 | Best Prices | Arihant Travel";
$pageDescription = "Book Global Village Dubai tickets at best prices. Experience cultures from 90+ countries, shopping, rides & entertainment. Season 29 now open.";
$pageKeywords = "Global Village Dubai tickets, Dubai attractions, cultural park Dubai, family entertainment Dubai, shopping in Dubai, street food Dubai, Arihant Travel, Global Village ticket price, Global Village offers, things to do in Dubai at night, family attractions in Dubai, best outdoor markets in Dubai, live shows in Dubai, cultural experiences in UAE, Arihant Travel Global Village deals";
$pageCanonical = "https://arihantlink.com/global-village";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Global Village Dubai";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/global-village-4.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-globe-americas', 'title' => '90+ Countries', 'sub' => 'Cultural Pavilions'],
    ['icon' => 'fas fa-utensils', 'title' => 'World Cuisines', 'sub' => '200+ Restaurants'],
    ['icon' => 'fas fa-star', 'title' => '4.7 Rating', 'sub' => '3,500+ Reviews'],
    ['icon' => 'fas fa-clock', 'title' => '4-6 Hours', 'sub' => 'Recommended Stay']
];

// Highlights Data
$highlights = [
    "Explore the rich cultural heritage of over 90 countries across 27+ massive pavilions.",
    "Enjoy spectacular live shows, concerts, and cultural performances on the Main Stage.",
    "Indulge in a global gastronomic journey with street food and dining from every continent.",
    "Experience over 170 rides, games, and attractions at the massive 'Carnaval' theme park.",
    "Shop for unique handicrafts, authentic products, and souvenirs at 3,500+ retail outlets.",
    "Don't miss the amazing fireworks displays every Friday and Saturday night."
];

// Travel Tips
$travelTips = [
    "Visit on weekdays (Sunday-Wednesday) for lower ticket prices and smaller crowds.",
    "Wear comfortable walking shoes as you'll be exploring a vast 1.6 million sq. meter area.",
    "Bring cash for street vendors; while many accept cards, some kiosks are cash-only.",
    "Arrive around 4 PM to capture the transition from daylight to the glowing evening lights.",
    "Download the 'Global Village' mobile app for a live map and show timings."
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Global Village Dubai Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/global-village-1.avif",
  "brand": { "@type": "Brand", "name": "Global Village Dubai" },
  "offers": [
    {
      "@type": "Offer",
      "name": "General Admission Ticket",
      "priceCurrency": "AED",
      "price": "25",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Value Ticket (Sun-Wed)",
      "priceCurrency": "AED",
      "price": "22.5",
      "availability": "https://schema.org/InStock"
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "reviewCount": "3567"
  }
}
</script>';

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

<!-- Overview Section Start -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <div class="alert alert-warning border-0 rounded-pill text-center fw-bold mb-4">
                        🎉 Season 29 Now Open (Oct - April) | Open 4:00 PM onwards
                    </div>
                    <h2 class="mb-4">Experience the World in One Place</h2>
                    <p class="lead text-primary mb-4"><strong>The Region's First Cultural, Shopping and Entertainment
                            Destination.</strong></p>
                    <p>Global Village Dubai is a spectacular outdoor destination that brings the world together.
                        Featuring pavilions from over 90 countries, it offers a unique opportunity to explore cultures,
                        taste global cuisines, and shop for authentic local products from across the globe. From the
                        vibrant souks of the Middle East to the bustling markets of Asia and Europe, every visit is a
                        journey of discovery.</p>



                    <p>Beyond shopping and dining, Global Village is home to the 'Carnaval' - a massive theme park with
                        thrilling rides, skill games, and family attractions. Every evening, the Main Stage lights up
                        with world-class performances, while the skies sparkle with dazzling fireworks on weekends.</p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-highlights" type="button">Highlights</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-tips"
                            type="button">Travel Tips</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-info"
                            type="button">Essential Info</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Highlights Tab -->
                    <div class="tab-pane fade show active" id="tab-highlights">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Top Experiences</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Tips Tab -->
                    <div class="tab-pane fade" id="tab-tips">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Maximize Your Visit</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($travelTips as $tip): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-lightbulb text-warning me-3 mt-1"></i>
                                    <div><?= $tip ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Essential Info Tab -->
                    <div class="tab-pane fade" id="tab-info">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <h6 class="fw-bold border-bottom pb-2">Entry & Timing</h6>
                                <ul class="list-unstyled small">
                                    <li class="mb-2"><strong>Timing:</strong> 4 PM – 12 AM (Weekdays) | 4 PM – 1 AM
                                        (Weekends)</li>
                                    <li class="mb-2"><strong>Tuesday:</strong> Family & Ladies day only (except public
                                        holidays)</li>
                                    <li class="mb-2"><strong>Child Policy:</strong> Free entry for kids below 3 and
                                        seniors (65+)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold border-bottom pb-2">Prohibited Items</h6>
                                <ul class="list-unstyled small">
                                    <li class="mb-2 text-danger"><i class="fas fa-times me-2"></i> No outside
                                        food/drinks</li>
                                    <li class="mb-2 text-danger"><i class="fas fa-times me-2"></i> No pets allowed</li>
                                    <li class="mb-2 text-danger"><i class="fas fa-times me-2"></i> No
                                        scooters/segways/bikes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <img src="img/excursion/global-village-4.avif" class="img-fluid rounded mb-3"
                                alt="Global Village Night View">
                            <h4 class="card-title mb-3">Admission Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 25</h2>
                                </div>
                                <span class="badge bg-success rounded-pill">Season Special</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Global Village Dubai tickets"
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

<!-- Related Excursions Start -->
<div class="container-fluid py-4 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-4" style="max-width: 900px;">
            <h5 class="section-title px-3">Explore More Attractions</h5>
            <h2 class="mb-2 h4">Expand Your Adventure</h2>
        </div>

        <div class="row g-3">
            <!-- Miracle Garden -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/miraclegarden.jpg" class="card-img-top" alt="Miracle Garden"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 105</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Dubai Miracle Garden</h5>
                        <p class="card-text small mb-3 text-muted">A floral wonderland right next to Global Village.</p>
                        <a href="miracle-garden" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Museum of the Future -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/MOTF02.webp" class="card-img-top" alt="MOTF"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 159</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Museum of the Future</h5>
                        <p class="card-text small mb-3 text-muted">Journey 50 years into the future of technology.</p>
                        <a href="museum-of-the-future" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>

            <!-- View All -->
            <div class="col-lg-4">
                <div
                    class="card h-100 shadow-sm border-0 bg-primary bg-opacity-10 d-flex align-items-center justify-content-center p-4">
                    <div class="text-center">
                        <i class="fas fa-th-large fa-3x text-primary mb-3"></i>
                        <h5>All Dubai Tickets</h5>
                        <p class="small text-muted mb-3">Discover more tours and activities in the city.</p>
                        <a href="dubai-excursions" class="btn btn-sm btn-primary px-4 fw-bold">Browse All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .excursion-card {
        transition: 0.3s;
    }

    .excursion-card:hover {
        transform: translateY(-5px);
    }
</style>

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-4">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Get Exclusive Excursion Deals</h2>
            <div class="position-relative mx-auto" style="max-width: 500px;">
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