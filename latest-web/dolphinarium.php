<?php
// Page SEO Variables
$pageTitle = "Dubai Dolphinarium Tickets 2025 | Best Prices | Arihant Travel";
$pageDescription = "Book Dubai Dolphinarium tickets at best prices. Dolphin & seal shows, bird shows, swimming with dolphins. Family-friendly indoor attraction.";
$pageKeywords = "Dubai Dolphinarium tickets, dolphin show Dubai, seal show Dubai, swim with dolphins Dubai, Creek Park, family attractions Dubai, Arihant Travel, Dubai Dolphinarium ticket price, Dubai Dolphinarium offers, things to do with kids in Dubai, indoor attractions in Dubai, Creek Park attractions, best animal shows in Dubai, swimming with dolphins price, Arihant Travel Dolphinarium deals";
$pageCanonical = "https://arihantlink.com/dolphinarium";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Dubai Dolphinarium";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/dubai-dolphinarium-1.webp";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-calendar-alt', 'title' => '5 Shows Daily', 'sub' => 'Multiple Time Slots'],
    ['icon' => 'fas fa-clock', 'title' => '45 Minutes', 'sub' => 'Show Duration'],
    ['icon' => 'fas fa-star', 'title' => '4.5 Rating', 'sub' => '650+ Reviews'],
    ['icon' => 'fas fa-users', 'title' => 'Family Friendly', 'sub' => 'Ages 2-99']
];

// Highlights Data
$highlights = [
    "Witness the region's first fully air-conditioned indoor dolphinarium with amazing marine shows.",
    "Enjoy a spectacular performance by Black Sea Bottlenose Dolphins and friendly fur seals.",
    "Explore the Exotic Bird Show featuring over 20 species of colorful parrots and birds of prey.",
    "Experience a 'Majestic Swim' with dolphins for a once-in-a-lifetime interactive encounter.",
    "Perfect for families, offering both educational and entertaining insights into marine life.",
    "Located in the iconic Creek Park, making it easy to combine with a park day out."
];

// Visitor Info Data
$visitorInfo = [
    "Arrive at least 20 minutes before the show starts; late entries may not be permitted.",
    "Show tickets do not include the AED 5 Creek Park entry fee (required per person).",
    "Photography is allowed, but professional cameras require prior approval.",
    "Wheelchair accessible seating is available; please inform staff upon arrival.",
    "Nakheel Mall and other nearby attractions are just a short taxi ride away."
];

// FAQS
$faqs = [
    ['q' => "What is included in the standard ticket?", 'a' => "The standard ticket includes admission to the 45-minute Dolphin and Seal Show with standard seating. Interaction experiences like swimming are extra."],
    ['q' => "What is the differences between Standard and VIP seats?", 'a' => "VIP tickets offer premium central seating with the best possible view of the pool and the stage."],
    ['q' => "Do children need tickets?", 'a' => "Children under 2 years old enter for free. Children between 2 and 12 years require a child ticket."],
    ['q' => "How can I swim with dolphins?", 'a' => "Swimming sessions must be booked separately from the show tickets. They are highly popular and require advance reservation."],
    ['q' => "Is there parking available?", 'a' => "Yes, free parking is available inside Creek Park near Gate 1, which is closest to the Dolphinarium."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Dubai Dolphinarium Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/dubai-dolphinarium-1.webp",
  "brand": { "@type": "Brand", "name": "Dubai Dolphinarium" },
  "offers": [
    {
      "@type": "Offer",
      "name": "Dolphin & Seal Show (Standard)",
      "priceCurrency": "AED",
      "price": "90",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Dolphin & Seal Show (VIP)",
      "priceCurrency": "AED",
      "price": "115",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Dolphin & Bird Show Combo",
      "priceCurrency": "AED",
      "price": "140",
      "availability": "https://schema.org/InStock"
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "reviewCount": "654"
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
                    <h2 class="mb-4">Unforgettable Aquatic Magic</h2>
                    <p class="lead text-primary mb-4"><strong>Meet the Ocean's Most Friendly Ambassadors in the Heart of
                            Dubai.</strong></p>
                    <p>Dubai Dolphinarium is a world-class attraction located in Creek Park, offering an incredible
                        indoor experience where you can interact with some of the smartest creatures on Earth. As the
                        first fully air-conditioned indoor dolphinarium in the Middle East, it provides a comfortable
                        sanctuary for both the animals and visitors year-round.</p>

                    <p>The centerpiece of the experience is the world-famous Dolphin and Seal Show, where highly trained
                        Black Sea Bottlenose Dolphins and playful Fur Seals perform breathtaking stunts, acrobatics, and
                        even paint! For bird lovers, the Exotic Bird Show offers a chance to see magnificent parrots and
                        birds of prey in action. Whether you're looking for a fun family day out or a deeper connection
                        through a swimming session, Aza Dolphinarium promises memories that will last a lifetime.</p>
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
                        <h5 class="text-primary border-bottom pb-2 mb-3">Experience the Wonder</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-magic text-info me-3 mt-1"></i>
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
                            <img src="img/excursion/dubai-dolphinarium-1.webp" class="img-fluid rounded mb-3"
                                alt="Dolphin Show Dubai">
                            <h4 class="card-title mb-3">Show Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 90</h2>
                                </div>
                                <span class="badge bg-primary rounded-pill">Top Family Choice</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Dubai Dolphinarium tickets"
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
            <h5 class="section-title px-3">You May Also Like</h5>
            <h2 class="mb-2 h4">More Family Adventures</h2>
        </div>

        <div class="row g-3">
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
                        <p class="card-text small mb-3 text-muted">A world of cultural performances and shopping.</p>
                        <a href="global-village" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
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
                        <p class="card-text small mb-3 text-muted">A journey to 2071 for the whole family.</p>
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
                        <h5>Explore All Tours</h5>
                        <p class="small text-muted mb-3">Check out our full list of Dubai experiences.</p>
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
            <h2 class="text-white mb-3 h3">Get Exclusive Tourist Deals</h2>
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