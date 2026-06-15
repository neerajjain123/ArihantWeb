<?php
// Page SEO Variables
$pageTitle = "Museum of the Future Tickets Dubai 2025 | Arihant Travel";
$pageDescription = "Book Museum of the Future Dubai tickets at best prices. Explore cutting-edge technology, AI, and innovation exhibits.";
$pageKeywords = "Museum of the Future tickets, Dubai attractions, future technology museum, AI exhibits Dubai, space exploration Dubai, Sheikh Zayed Road, Arihant Travel, MOTF ticket price, Museum of the Future offers, things to do in Dubai, best museums in Dubai, family attractions in Dubai, AI and robotics exhibits, future of space travel, innovative architecture Dubai, Arihant Travel MOTF deals";
$pageCanonical = "https://arihantlink.com/museum-of-the-future";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Museum of the Future";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/MOTF02.webp";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-layer-group', 'title' => '7 Floors', 'sub' => 'Interactive Zones'],
    ['icon' => 'fas fa-clock', 'title' => '2-3 Hours', 'sub' => 'Recommended Duration'],
    ['icon' => 'fas fa-star', 'title' => '4.9 Rating', 'sub' => '2,000+ Reviews'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 159', 'sub' => 'Starting Price']
];

// Highlights Data
$highlights = [
    "Journey 50 years into the future through immersive, interactive exhibits that bring tomorrow's world to life.",
    "Explore the future of space travel, including life on Mars and the next generation of space exploration.",
    "Discover how artificial intelligence and robotics will transform our daily lives and industries.",
    "Experience sustainable cities of the future and innovative solutions to global challenges.",
    "Learn about cutting-edge healthcare technologies and the future of human augmentation.",
    "Engage with thought-provoking exhibits that challenge you to imagine and shape a better future."
];

// FAQS
$faqs = [
    ['q' => "What are the opening hours?", 'a' => "The Museum of the Future is open daily from 10:00 AM to 9:30 PM, with the last entry at 8:30 PM. Timings may vary during Ramadan or holidays."],
    ['q' => "Is it accessible for visitors with disabilities?", 'a' => "Yes, the museum is fully accessible with wheelchair ramps, elevators, and dedicated restrooms. Wheelchair rental is available at the entrance."],
    ['q' => "What does the VIP ticket include?", 'a' => "The VIP Experience (AED 399) includes skip-the-line admission, a 50 AED retail voucher, and complimentary valet parking."],
    ['q' => "How long should I plan to stay?", 'a' => "Most visitors find 2-3 hours sufficient to explore all five floors of immersive environments and interactive labs."],
    ['q' => "Can I take photos inside?", 'a' => "Yes, personal photography is allowed. However, flash photography and professional equipment like tripods require prior permission."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Museum of the Future Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/MOTF01.jpg",
  "brand": { "@type": "Brand", "name": "Museum of the Future" },
  "offers": [
    {
      "@type": "Offer",
      "name": "Regular Entry Ticket",
      "priceCurrency": "AED",
      "price": "159",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "VIP Experience",
      "priceCurrency": "AED",
      "price": "399",
      "availability": "https://schema.org/InStock"
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "2145"
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

<!-- Overview Section Start -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Journey Into Tomorrow</h2>
                    <p class="lead text-primary mb-4"><strong>A Visionary Landmark of Architecture and
                            Innovation.</strong></p>
                    <p>Step inside the Museum of the Future, a living museum that explores how society could evolve in
                        the coming decades using science and technology. Unlike traditional museums that showcase the
                        past, this iconic building acts as a gateway to 50 years into the future, offering an
                        imaginative glimpse into what the world could become.</p>

                    <p>Explore the future of space travel, sustainability, and human wellness. The museum's exhibitions
                        are designed to empower visitors to imagine and shape their own future through interactive
                        storytelling and cutting-edge digital experiences.</p>
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
                            type="button">Visitor Info</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-faq"
                            type="button">FAQs</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Highlights Tab -->
                    <div class="tab-pane fade show active" id="tab-highlights">
                        <h5 class="text-primary border-bottom pb-2 mb-3">What You'll Experience</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-rocket text-success me-3 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Visitor Info Tab -->
                    <div class="tab-pane fade" id="tab-info">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <h6 class="fw-bold border-bottom pb-2">Preparation</h6>
                                <ul class="list-unstyled small">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> MODEST clothing
                                        recommended</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Comfortable walking
                                        shoes</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Book tickets in
                                        advance (sell outs likely)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold border-bottom pb-2">Accessibility</h6>
                                <ul class="list-unstyled small">
                                    <li class="mb-2"><i class="fas fa-wheelchair text-primary me-2"></i> Fully
                                        wheelchair accessible</li>
                                    <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Elevators to
                                        all floors</li>
                                    <li class="mb-2"><i class="fas fa-baby text-primary me-2"></i> Baby changing
                                        facilities</li>
                                </ul>
                            </div>
                        </div>
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
                                        <div class="accordion-body text-muted"><?= $faq['a'] ?></div>
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
                            <img src="img/excursion/MOTF01.jpg" class="img-fluid rounded mb-3"
                                alt="Museum of the Future">
                            <h4 class="card-title mb-3">Admission Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 159</h2>
                                </div>
                                <span class="badge bg-danger rounded-pill">Top Rated</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Museum of the Future tickets"
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
            <h5 class="section-title px-3">Explore More</h5>
            <h2 class="mb-2 h4">Other Popular Attractions</h2>
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
                        <p class="card-text small mb-3 text-muted">Explore a stunning oasis featuring over 150 million
                            flowers.</p>
                        <a href="miracle-garden" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Global Village -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/global-village-1.avif" class="card-img-top" alt="Global Village"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 25</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Global Village</h5>
                        <p class="card-text small mb-3 text-muted">Experience cultures from around the world with
                            shopping and food.</p>
                        <a href="global-village" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
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
                        <p class="small text-muted mb-3">Browse our full collection of tours and attractions.</p>
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