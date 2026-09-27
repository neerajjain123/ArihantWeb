<?php
// Page SEO Variables
$pageTitle = "Dubai Safari Park Tickets 2025 | Explorer Safari & Train | Arihant Travels";
$pageDescription = "Book Dubai Safari Park tickets with Arihant Travels. Enjoy the Explorer Safari Tour, unlimited shuttle train, and access to 6 wildlife villages.";
$pageKeywords = "Dubai Safari Park tickets, Dubai Safari Park ticket price, Explorer Safari Tour Dubai, Dubai Safari Park villages, wildlife sanctuary Dubai, family attractions Dubai, Arihant Travels, book Dubai Safari Park, Dubai Safari Park inclusions, Dubai Safari Park shuttle train";
$pageCanonical = "https://arihantlink.com/dubai-safari-park";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Dubai Safari Park";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/dubai-safari-hero-banner.jpg";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-tree', 'title' => '119 Hectares', 'sub' => 'Wildlife Sanctuary'],
    ['icon' => 'fas fa-paw', 'title' => '3,000+ Animals', 'sub' => 'Global Species'],
    ['icon' => 'fas fa-bus', 'title' => 'Explorer Safari', 'sub' => '35-Min Tour'],
    ['icon' => 'fas fa-train', 'title' => 'Shuttle Train', 'sub' => 'Unlimited Access']
];

// Highlights Data
$highlights = [
    "Explore 119 hectares of eco-friendly wildlife sanctuary housing nearly 3,000 animals.",
    "Visit 6 unique zones: African Village, Asian Village, Explorer Village, Arabian Desert, Kids Farm, and Al Wadi.",
    "Take a 35-minute Explorer Safari Tour (included) to see animals in naturalistic habitats.",
    "Enjoy unlimited access to the shuttle train for easy navigation around the massive park.",
    "Witness 3 live wildlife presentations and educational wildlife talks.",
    "Engage in animal feeding, encounters, and Young Explorers workshops (as per schedule)."
];

// Visitor Info Data
$visitorInfo = [
    "Average visit duration: 4-6 hours to explore all villages and shows.",
    "Park timing: 10:00 AM to 6:00 PM (Last entry at 4:30 PM).",
    "Explorer Safari Tour operates from 10:00 AM to 5:00 PM.",
    "Wear comfortable walking shoes and carry sunscreen; the park is expansive.",
    "Young Explorers workshops are perfect for kids to learn about wildlife conservation.",
    "Complimentary parking is available for all visitors."
];

// FAQS
$faqs = [
    ['q' => "What is included in the AED 125 ticket?", 'a' => "The ticket includes all-day access to 6 zones, the 35-minute Explorer Safari Tour, unlimited shuttle train, a 15-minute Arabian Desert Safari, and access to live shows and wildlife talks."],
    ['q' => "Is the Explorer Safari Tour included?", 'a' => "Yes, a 35-minute Explorer Safari Tour is included in this ticket option."],
    ['q' => "Do children require a separate ticket?", 'a' => "Children 3 years and above require a ticket. Both adults and children above 3 years pay AED 125 for this package."],
    ['q' => "How do I get around the park?", 'a' => "The Safari Park is huge! This ticket provides unlimited access to the shuttle train, which is the easiest way to move between villages."],
    ['q' => "Are food and drinks included?", 'a' => "No, meals and beverages are not included, but several dining options are available within the park."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Dubai Safari Park Tickets (with Explorer Safari & Train)",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/dubai-safari-hero-banner.jpg",
  "brand": { "@type": "Brand", "name": "Dubai Safari Park" },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "AED",
    "price": "125",
    "availability": "https://schema.org/InStock"
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

<!-- Main Content Section -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Explore the Wild at Dubai Safari Park</h2>
                    <p class="lead text-primary mb-4"><strong>A 119-hectare wildlife sanctuary housing nearly 3,000
                            animals from around the world.</strong></p>
                    <p>Dubai Safari Park is not just a zoo; it's an eco-friendly destination organized into different
                        "villages" that mimic the animals’ natural habitats. From the lush African Village to the
                        diverse Asian Village, the park offers an immersive journey through the world's wildlife. It
                        emphasizes conservation and education, making it a perfect destination for families, animal
                        lovers, and photography enthusiasts.</p>

                    <p>This premium ticket includes the <strong>Explorer Safari Tour</strong>, a 35-minute guided drive
                        that takes you through the heart of the park's wild landscapes. You'll also enjoy
                        <strong>unlimited access to the shuttle train</strong>, ensuring you can comfortably navigate
                        between the Arabian Desert Safari, the Kids' Farm, and the recreational Al Wadi area without the
                        long walks.</p>
                </div>

                <!-- Inclusions & Exclusions Grid -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="p-4 bg-light rounded h-100 shadow-sm border-start border-4 border-success">
                            <h5 class="mb-3 text-success"><i class="fas fa-check-circle me-2"></i>What's Included</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All-day access to Dubai
                                    Safari Park</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Access to 6 zones
                                    (African, Asian, Explorer, etc.)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>35-min Explorer Safari
                                    Tour</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited shuttle train
                                    access</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>15-min Arabian Desert
                                    Safari Tour</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Live Presentations &
                                    Wildlife Talks</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Young Explorers workshops
                                </li>
                                <li><i class="fas fa-check text-success me-2"></i>Complimentary parking</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 bg-light rounded h-100 shadow-sm border-start border-4 border-danger">
                            <h5 class="mb-3 text-danger"><i class="fas fa-times-circle me-2"></i>Exclusions</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Safari Drive Add-ons</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Food and Beverages</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Souvenirs and Merchandise
                                </li>
                                <li><i class="fas fa-times text-danger me-2"></i>Paid animal feeding & encounters</li>
                            </ul>
                        </div>
                    </div>
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
                        <h5 class="text-primary border-bottom pb-2 mb-3">Wildlife Experiences</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-dna text-info me-3 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Visitor Info Tab -->
                    <div class="tab-pane fade" id="tab-visit">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Plan Your Best Visit</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($visitorInfo as $info): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-info-circle text-primary me-3 mt-1"></i>
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
                            <img src="img/excursion/dubai-safari-train.avif" class="img-fluid rounded mb-3"
                                alt="Dubai Safari Park Train">
                            <h4 class="card-title mb-3">Safari Park Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">All-Inclusive Price</p>
                                    <h2 class="mb-0 text-primary">AED 125</h2>
                                </div>
                                <span class="badge bg-primary rounded-pill">Best Value</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Dubai Safari Park tickets with Explorer Safari and Train"
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
            <h2 class="mb-2 h4">Other Top Attractions</h2>
        </div>

        <div class="row g-3">
            <!-- Miracle Garden -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/miraclegarden.jpg" class="card-img-top" alt="Miracle Garden"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 100</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Miracle Garden</h5>
                        <p class="card-text small mb-3 text-muted">The largest flower garden in the world.</p>
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
                        <p class="card-text small mb-3 text-muted">A world of cultural cultures and shopping.</p>
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
            <h2 class="text-white mb-3 h3">Get Exclusive Wildlife Deals</h2>
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