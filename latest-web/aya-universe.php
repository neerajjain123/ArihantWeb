<?php
// Page SEO Variables
$pageTitle = "AYA Universe Tickets Dubai 2025 | Best Prices | Arihant Travels";
$pageDescription = "Book AYA Universe Dubai tickets at best prices. Explore 12 vibrant interactive zones at Wafi City Mall. Immersive light & sound experience.";
$pageKeywords = "AYA Universe Dubai, immersive experience Dubai, interactive art Dubai, Wafi City Mall, light show Dubai, family attractions Dubai, Arihant Travels, AYA Universe ticket price, AYA Universe offers, things to do in Dubai at night, unique experiences in Dubai, interactive museums in Dubai, Wafi City attractions, best light shows in UAE, Arihant Travels AYA Universe deals";
$pageCanonical = "https://arihantlink.com/aya-universe";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "AYA Universe";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/aya-universe-4.jpg";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-clone', 'title' => '12 Zones', 'sub' => 'Immersive Worlds'],
    ['icon' => 'fas fa-expand-arrows-alt', 'title' => '4,000 SQM', 'sub' => 'Vibrant Interactive Space'],
    ['icon' => 'fas fa-star', 'title' => '4.8 Rating', 'sub' => '750+ Reviews'],
    ['icon' => 'fas fa-clock', 'title' => '2-3 Hours', 'sub' => 'Recommended Duration']
];

// Highlights Data
$highlights = [
    "Journey through 12 unique, immersive zones spanning 40,000 square feet of interactive wonder.",
    "Witness 'The Aurora', a mesmerizing display of light and sound simulating the Northern Lights.",
    "Interact with 'The Source', a reactive digital ecosystem that responds to your every touch.",
    "Experience gravity-defying spectacles at 'The Falls', where water appears to flow upwards.",
    "Capture breathtaking, otherworldly photos perfect for your social media channels.",
    "Enjoy a family-friendly fusion of art and technology located in the iconic Wafi City Mall."
];

// Pro Tips Data
$proTips = [
    "Book online in advance to secure your preferred entry time slot.",
    "Arrive 15-20 minutes early to ensure a smooth check-in process.",
    "Wear comfortable shoes as you\'ll be exploring multiple interactive zones on foot.",
    "Ensure your camera or phone is fully charged—every corner is a photo opportunity.",
    "Check out the Egyptian-themed architecture of Wafi City Mall while you\'re there."
];

// FAQS
$faqs = [
    ['q' => "What is AYA Universe?", 'a' => "AYA Universe is an immersive entertainment park that combines art and technology across 12 unique storytelling zones."],
    ['q' => "Where is it located?", 'a' => "It is located in Wafi City Mall, Dubai. There is ample free parking available for visitors."],
    ['q' => "Is it suitable for children?", 'a' => "Yes, AYA is perfect for all ages. Children under 3 enter for free, and the interactive elements are very engaging for kids."],
    ['q' => "How long does the experience last?", 'a' => "A typical journey through all 12 zones takes about 2 to 3 hours, but you can explore at your own pace."],
    ['q' => "Can I buy food inside?", 'a' => "While there are no restaurants inside the AYA zones themselves, Wafi City Mall offers a wide variety of dining options right outside."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "AYA Universe Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/aya-universe-4.jpg",
  "brand": { "@type": "Brand", "name": "AYA Universe" },
  "offers": [
    {
      "@type": "Offer",
      "name": "Standard Admission",
      "priceCurrency": "AED",
      "price": "99",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Child Admission",
      "priceCurrency": "AED",
      "price": "69",
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
                    <h2 class="mb-4">Step into a New Reality</h2>
                    <p class="lead text-primary mb-4"><strong>An Immersive Sanctuary Dedicated to the Beauty of the
                            Cosmos.</strong></p>
                    <p>AYA Universe is a first-of-its-kind entertainment park in Dubai that invites you to step across
                        the threshold into a world beyond. Located in Wafi City Mall, this 40,000 square foot vibrant
                        space is divided into 12 distinct zones, each telling a unique story through light, sound, and
                        interactive technology. It’s an otherworldly escape where you can wander through luminous
                        gardens, command the stars, and experience the extraordinary.</p>



                    <p>From the gravity-defying water of 'The Falls' to the cosmic dance of 'The Aurora', AYA creates a
                        sensory journey that responds to your presence. It is a perfect blend of digital art and
                        physical space, designed to be explored, played in, and captured in stunning photographs.</p>
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
                            type="button">Pro Tips</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-faq"
                            type="button">FAQs</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Highlights Tab -->
                    <div class="tab-pane fade show active" id="tab-highlights">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Immersive Experiences</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-magic text-success me-3 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Tips Tab -->
                    <div class="tab-pane fade" id="tab-tips">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Plan Your Journey</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($proTips as $tip): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-lightbulb text-warning me-3 mt-1"></i>
                                    <div><?= $tip ?></div>
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
                            <img src="img/excursion/aya-universe-4.jpg" class="img-fluid rounded mb-3"
                                alt="AYA Universe Entrance">
                            <h4 class="card-title mb-3">Entry Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 99</h2>
                                </div>
                                <span class="badge bg-danger rounded-pill">Trending</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book AYA Universe tickets"
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
            <h5 class="section-title px-3">Combine & Save</h5>
            <h2 class="mb-2 h4">More Immersive Experiences</h2>
        </div>

        <div class="row g-3">
            <!-- Frame -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/Dubai-Frame-1.avif" class="card-img-top" alt="Dubai Frame"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 53</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Dubai Frame</h5>
                        <p class="card-text small mb-3 text-muted">Behold the bridge between old and new Dubai.</p>
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
                        <p class="card-text small mb-3 text-muted">Explore the world of tomorrow today.</p>
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
                        <p class="small text-muted mb-3">Explore more unique attractions in the city.</p>
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