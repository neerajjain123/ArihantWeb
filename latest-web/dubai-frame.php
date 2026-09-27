<?php
// Page SEO Variables
$pageTitle = "Dubai Frame Tickets 2025 | Best Prices | Arihant Travels";
$pageDescription = "Book Dubai Frame tickets at best prices. Enjoy panoramic views of Old and New Dubai from 150 meters high. Glass floor walkway, museum exhibits.";
$pageKeywords = "Dubai Frame tickets, Zabeel Park, Dubai attractions, panoramic views Dubai, glass bridge Dubai, Old Dubai views, New Dubai skyline, Arihant Travels, Dubai Frame ticket price, Dubai Frame offers, best views in Dubai, things to do in Zabeel Park, architectural landmarks in Dubai, Dubai Frame glass floor, Old Dubai vs New Dubai, Arihant Travels Dubai Frame deals";
$pageCanonical = "https://arihantlink.com/dubai-frame";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Dubai Frame";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/Dubai-Frame-1.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-ruler-vertical', 'title' => '150m Tall', 'sub' => "World's Largest Frame"],
    ['icon' => 'fas fa-eye', 'title' => '360° Views', 'sub' => 'Old & New Dubai'],
    ['icon' => 'fas fa-star', 'title' => '4.6 Rating', 'sub' => '1,800+ Reviews'],
    ['icon' => 'fas fa-clock', 'title' => '1-2 Hours', 'sub' => 'Recommended Stay']
];

// Highlights Data
$highlights = [
    "Marvel at the architectural brilliance of the world's largest picture frame standing 150m tall.",
    "Walk across the thrilling 93-meter long crystalline glass bridge at the Sky Deck.",
    "Witness the contrast between the historic Old Dubai and the futuristic New Dubai skyline.",
    "Experience the immersive museum on the ground floor showcasing Dubai's past and future vision.",
    "Capture iconic photos of the city's landmarks through the golden frame's unique perspective.",
    "Enjoy 360-degree panoramic views of Zabeel Park and the entire city from the observation deck."
];

// Visit Info
$visitInfo = [
    "Early morning or late afternoon/sunset are the best times for photography and fewer crowds.",
    "The attraction is open daily from 9:00 AM to 9:00 PM (last entry at 8:30 PM).",
    "Comfortable clothing and walking shoes are recommended for the Zabeel Park and Frame exploration.",
    "Free parking is available at Zabeel Park (Gate 4 is closest to the Frame).",
    "Professional photography services are available onsite to capture your 'framed' moments."
];

// FAQS
$faqs = [
    ['q' => "What are the opening hours?", 'a' => "Dubai Frame is open daily from 9:00 AM to 9:00 PM. Last entry is at 8:30 PM."],
    ['q' => "Is the glass floor safe?", 'a' => "Yes, the glass floor on the Sky Deck is made of high-quality reinforced glass and is completely safe for all visitors."],
    ['q' => "How long does a typical visit take?", 'a' => "Most visitors spend between 1 to 2 hours exploring the museum and observation deck."],
    ['q' => "Is it accessible?", 'a' => "Yes, the attraction is fully wheelchair accessible with ramps and dedicated elevators."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Dubai Frame Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/Dubai-Frame-1.avif",
  "brand": { "@type": "Brand", "name": "Dubai Frame" },
  "offers": [
    {
      "@type": "Offer",
      "name": "Adult Admission",
      "priceCurrency": "AED",
      "price": "53",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Child Admission",
      "priceCurrency": "AED",
      "price": "22",
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
                    <h2 class="mb-4">Where Past Meets Future</h2>
                    <p class="lead text-primary mb-4"><strong>Step Into an Architectural Marvel Connecting Two Eras of
                            Dubai.</strong></p>
                    <p>The Dubai Frame is more than just a landmark; it's a symbolic bridge between the city's humble
                        beginnings and its dazzling future. Standing at 150 meters, it offers a literal and metaphorical
                        frame of the city. Look north, and you'll see the historic charm of Deira and Karama; look
                        south, and the futuristic towers of Sheikh Zayed Road take center stage.</p>



                    <p>The journey starts with a multimedia exhibition showing Dubai’s evolution from a fishing village
                        to a global metropolis. The highlight, of course, is the Sky Deck, where you can walk across a
                        transparent glass floor 150 meters above the ground, offering a thrilling 360-degree view of the
                        entire city.</p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-highlights" type="button">Highlights</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-info"
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
                        <h5 class="text-primary border-bottom pb-2 mb-3">Don't Miss These</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-camera text-success me-3 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Visit Info Tab -->
                    <div class="tab-pane fade" id="tab-info">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Planning Your Visit</h5>
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
                            <img src="img/excursion/Dubai-Frame-1.avif" class="img-fluid rounded mb-3"
                                alt="Dubai Frame Top View">
                            <h4 class="card-title mb-3">General Admission</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 53</h2>
                                </div>
                                <span class="badge bg-primary rounded-pill">Top Seller</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Dubai Frame tickets"
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
            <h5 class="section-title px-3">Combine Your Trip</h5>
            <h2 class="mb-2 h4">Popular Nearby Combos</h2>
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
                        <p class="card-text small mb-3 text-muted">Explore the world's largest natural flower garden.
                        </p>
                        <a href="miracle-garden" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
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
                        <p class="card-text small mb-3 text-muted">Step into the year 2071 and see future technology.
                        </p>
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
                        <p class="small text-muted mb-3">Explore more iconic landmarks in Dubai.</p>
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