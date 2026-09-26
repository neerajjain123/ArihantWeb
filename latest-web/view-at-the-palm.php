<?php
// Page SEO Variables
$pageTitle = "The View at The Palm Tickets Dubai 2025 | Arihant Travels";
$pageDescription = "Book The View at The Palm Dubai tickets at best prices. Enjoy 360-degree views of Palm Jumeirah from 240m high. Observation deck experience.";
$pageKeywords = "The View at The Palm tickets, Palm Jumeirah views, Dubai observation deck, Palm Tower, Dubai skyline, sunset views Dubai, Arihant Travels, The View at The Palm ticket price, The View at The Palm offers, best views of Palm Jumeirah, things to do in Palm Jumeirah, observation decks in Dubai, sunset in Dubai, Palm Tower observation deck, Arihant Travels The View deals";
$pageCanonical = "https://arihantlink.com/view-at-the-palm";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "The View at The Palm";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/view-at-the-palm-1.jpeg.webp";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-arrow-up', 'title' => '240m High', 'sub' => '52nd Floor'],
    ['icon' => 'fas fa-sync', 'title' => '360° Views', 'sub' => 'Panoramic Perspective'],
    ['icon' => 'fas fa-star', 'title' => '4.7 Rating', 'sub' => '980+ Reviews'],
    ['icon' => 'fas fa-clock', 'title' => '1.5 Hours', 'sub' => 'Recommended Stay']
];

// Highlights Data
$highlights = [
    "Ascend to the 52nd floor of The Palm Tower for unparalleled 360-degree panoramic views.",
    "Witness the architectural marvel of Palm Jumeirah from 240 meters above the ground.",
    "Explore 'The View Exhibition' showcasing the vision and construction of the palm island.",
    "Capture breathtaking photos of the Arabian Gulf and the rising Dubai Marina skyline.",
    "Experience the interactive glass floor section for a thrilling perspective straight down.",
    "Opt for VIP access to enjoy complimentary refreshments and skip the entry queues."
];

// Visit Info Data
$visitInfo = [
    "Sunset (prime hours) is the most popular time; book in advance to secure your spot.",
    "Morning visits (10:00 AM - 1:00 PM) offer the clearest views and fewer crowds.",
    "The entrance is through Nakheel Mall, which offers world-class shopping and dining.",
    "Allow at least 15-20 minutes for arrival and security checks before your time slot.",
    "Smart casual attire is recommended; don\'t forget your camera for stunning shots."
];

// FAQS
$faqs = [
    ['q' => "Where is the entrance located?", 'a' => "The View at The Palm entrance is conveniently located on the Roof Level of Nakheel Mall (Level 2)."],
    ['q' => "Is it accessible for wheelchairs?", 'a' => "Yes, the attraction is fully wheelchair accessible with elevators providing access to all levels including the observation deck."],
    ['q' => "What is the difference between Prime and Non-Prime hours?", 'a' => "Prime hours (typically sunset) offer breathtaking transitions from day to night and are priced slightly higher due to demand."],
    ['q' => "Are children allowed?", 'a' => "Yes, children of all ages are welcome. Children under 4 years old enter for free, while those between 4 and 12 require a child ticket."],
    ['q' => "Can I visit without a booking?", 'a' => "While tickets can be purchased on-site, pre-booking is highly recommended as popular time slots (especially sunset) sell out quickly."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "The View at The Palm Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/view-at-the-palm-1.jpeg.webp",
  "brand": { "@type": "Brand", "name": "The View at The Palm" },
  "offers": [
    {
      "@type": "Offer",
      "name": "Standard Entry",
      "priceCurrency": "AED",
      "price": "110",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "VIP Lounge Access",
      "priceCurrency": "AED",
      "price": "175",
      "availability": "https://schema.org/InStock"
    }
  ]
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

<!-- Overview Section Start -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Dubai's Most Iconic Viewpoint</h2>
                    <p class="lead text-primary mb-4"><strong>Witness Palm Jumeirah in All Its Glory from 240 Meters
                            High.</strong></p>
                    <p>The View at The Palm is a spectacular observation deck located on the 52nd floor of The Palm
                        Tower. It offers the only location in the city where you can see the entire Palm Jumeirah in its
                        iconic tree-shaped glory. Surrounded by the sparkling waters of the Arabian Gulf and the
                        towering skyscrapers of the Dubai coastline, every angle provides a masterpiece for your eyes.
                    </p>



                    <p>Your experience starts at the roof plaza of Nakheel Mall, where you'll go through 'The View
                        Exhibition'—an interactive museum detailing the incredible engineering feat that created the
                        man-made island. From there, a high-speed elevator takes you to the clouds, where 360-degree
                        floor-to-ceiling glass walls await to showcase the beauty of Dubai.</p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-highlights" type="button">Highlights</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-visit"
                            type="button">Visit Info</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-faq"
                            type="button">FAQs</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Highlights Tab -->
                    <div class="tab-pane fade show active" id="tab-highlights">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Unmissable Experiences</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Visit Info Tab -->
                    <div class="tab-pane fade" id="tab-visit">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Planning Your Ascent</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($visitInfo as $info): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-info-circle text-info me-3 mt-1"></i>
                                    <div><?= $info ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- FAQ Tab -->
                    <div class="tab-pane fade" id="tab-faq">
                        <div class="accordion accordion-flush" id="faqAccordionTabs">
                            <?php foreach ($faqs as $i => $faq): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#ifaq-<?= $i ?>">
                                            <?= $faq['q'] ?>
                                        </button>
                                    </h2>
                                    <div id="ifaq-<?= $i ?>" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body text-muted small"><?= $faq['a'] ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <img src="img/excursion/view-at-the-palm-4.webp" class="img-fluid rounded mb-3"
                                alt="The Palm Tower">
                            <h4 class="card-title mb-3">Entrance Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 110</h2>
                                </div>
                                <span class="badge bg-success rounded-pill">360° View</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book The View at The Palm tickets"
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
            <h5 class="section-title px-3">Explore More of Dubai</h5>
            <h2 class="mb-2 h4">Other High-Altitude Views</h2>
        </div>

        <div class="row g-3">
            <!-- Dubai Frame -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/Dubai-Frame-1.avif" class="card-img-top" alt="Dubai Frame"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 53</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Dubai Frame</h5>
                        <p class="card-text small mb-3 text-muted">A bridge between old and new Dubai architecture.</p>
                        <a href="dubai-frame" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Future Museum -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/MOTF02.webp" class="card-img-top" alt="Museum of the Future"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 159</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Museum of the Future</h5>
                        <p class="card-text small mb-3 text-muted">A journey to 2071 in a record-breaking building.</p>
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