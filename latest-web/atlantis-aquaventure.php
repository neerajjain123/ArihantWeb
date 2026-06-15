<?php
// Page SEO Variables
$pageTitle = "Dubai Atlantis Aquaventure Waterpark Tickets | Best Prices | Arihant Travel";
$pageDescription = "Book your Atlantis Aquaventure Waterpark tickets with Arihant Travel. Experience thrilling water slides, marine adventures…";
$pageKeywords = "Atlantis Aquaventure tickets, Dubai waterpark, Atlantis The Palm activities, Dubai attractions, water slides Dubai, family activities Dubai, Aquaventure Waterpark, record-breaking slides, private beach Dubai, Lost Chambers Aquarium combo";
$pageCanonical = "https://arihantlink.com/atlantis-aquaventure";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Atlantis Aquaventure";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/atlantis/aquaventure-waterpark.webp";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-water', 'title' => '105+ Attractions', 'sub' => 'Slides & Rides'],
    ['icon' => 'fas fa-globe-americas', 'title' => 'World\'s Largest', 'sub' => 'Guinness Record'],
    ['icon' => 'fas fa-umbrella-beach', 'title' => 'Private Beach', 'sub' => '1km Pristine Sand'],
    ['icon' => 'fas fa-clock', 'title' => '4-8 Hours', 'sub' => 'Visit Duration']
];

// Highlights Data
$highlights = [
    "Conquer the world's largest waterpark with over 105 record-breaking slides and attractions.",
    "Brave the iconic 'Leap of Faith' – a near-vertical drop through a transparent tube submerged in a shark-filled lagoon.",
    "Experience the 'Odyssey of Terror', the world's tallest waterslide that will get your pulse racing.",
    "Relax on 1km of pristine private beach with stunning views of the Dubai Marina skyline.",
    "Explore Splashers Island and Splashers Lagoon, the ultimate playground for little thrill-seekers.",
    "Optional access to The Lost Chambers Aquarium, home to 65,000 marine animals in ancient ruins."
];

// Visitor Info Data
$visitorInfo = [
    "Appropriate swimwear is required; denim, abayas, and loose clothing are not permitted on slides.",
    "Children below 1.2 meters must be accompanied by an adult and have access to Splashers Island.",
    "Outside food and drinks are not allowed except for baby food and small water bottles.",
    "Lockers and towels are available for rent starting from AED 55 and AED 35 respectively.",
    "Arrive early (09:15 AM) to maximize your day as some popular slides can have long wait times."
];

// FAQS
$faqs = [
    ['q' => "What are the opening hours?", 'a' => "Aquaventure is open daily from 09:15 AM until sunset. Closing times vary by season."],
    ['q' => "Are infants allowed for free?", 'a' => "Yes, children aged 2 and below enter for free. A valid ID may be requested for age verification."],
    ['q' => "What does the combo ticket include?", 'a' => "The combo ticket includes full-day access to Aquaventure Waterpark and entry to The Lost Chambers Aquarium at Atlantis The Palm."],
    ['q' => "Is there a fast pass available?", 'a' => "Yes, 'Aqua Xpress' passes can be purchased onsite for priority access to popular rides. Prices vary based on the date."],
    ['q' => "Is parking available?", 'a' => "Yes, complimentary parking is available for waterpark guests at the Aquaventure parking area."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Atlantis Aquaventure Waterpark Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/atlantis/waterpark1.webp",
  "brand": { "@type": "Brand", "name": "Atlantis The Palm" },
  "offers": [
    {
      "@type": "Offer",
      "name": "Aquaventure Admission (Standard)",
      "priceCurrency": "AED",
      "price": "330",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Aquaventure & Lost Chambers Combo",
      "priceCurrency": "AED",
      "price": "380",
      "availability": "https://schema.org/InStock"
    },
    {
      "@type": "Offer",
      "name": "Dolphin Encounter & Aquaventure",
      "priceCurrency": "AED",
      "price": "725",
      "availability": "https://schema.org/InStock"
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "1253"
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
                    <h2 class="mb-4">Dubai's #1 Waterpark Experience</h2>
                    <p class="lead text-primary mb-4"><strong>Conquer Record-Breaking Slides at the World's Largest
                            Waterpark.</strong></p>
                    <p>Atlantis Aquaventure isn't just a waterpark; it's a colossal achievement in engineering and
                        entertainment. Located at the apex of the Palm Jumeirah within the legendary Atlantis The Palm
                        resort, this 22-hectare marine playground offers a sensory-overloaded adventure for every member
                        of the family.</p>

                    <p>Step into a world where gravity is just a suggestion. From the near-vertical drops of the Trident
                        Tower to the heart-stopping tunnels of the Leap of Faith, adrenaline is guaranteed. But it's not
                        all high-speed thrills; you can float along the 1.6km lazy river, unwind on the pristine 1km
                        private beach, or explore the mystical Lost Chambers Aquarium. With 105+ attractions, including
                        the region's largest kids' area, Splashers, your day at Aquaventure will be nothing short of
                        legendary.</p>
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
                        <h5 class="text-primary border-bottom pb-2 mb-3">Legendary Adventures Await</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($highlights as $item): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-info me-3 mt-1"></i>
                                    <div><?= $item ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Visitor Info Tab -->
                    <div class="tab-pane fade" id="tab-visit">
                        <h5 class="text-primary border-bottom pb-2 mb-3">Maximize Your Thrills</h5>
                        <ul class="list-unstyled">
                            <?php foreach ($visitorInfo as $info): ?>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-lightbulb text-warning me-3 mt-1"></i>
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
                    <div class="card shadow border-0 mb-4 text-center">
                        <div class="card-body p-4">
                            <img src="img/atlantis/waterpark1.webp" class="img-fluid rounded mb-3"
                                alt="Aquaventure Waterpark" style="height: 200px; width: 100%; object-fit: cover;">
                            <h4 class="card-title mb-3">Aquaventure Tickets</h4>
                            <div
                                class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom text-start">
                                <div>
                                    <p class="mb-0 text-muted small">Starting Price From</p>
                                    <h2 class="mb-0 text-primary">AED 330</h2>
                                </div>
                                <i class="fas fa-ticket-alt fa-3x text-primary opacity-25"></i>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007" target="_blank" class="btn btn-primary btn-lg">
                                    <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                                </a>
                                <a href="tel:+971585945007" class="btn btn-outline-dark">
                                    <i class="fas fa-phone-alt me-2"></i>Quick Enquiry
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
            <h5 class="section-title px-3">Family Favorites</h5>
            <h2 class="mb-2 h4">More Palm Jumeirah & Fun</h2>
        </div>

        <div class="row g-3">
            <!-- View At The Palm -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/atlantis/AquaventureFun-3.jpg" class="card-img-top" alt="The View at The Palm"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 100</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">View at The Palm</h5>
                        <p class="card-text small mb-3 text-muted">See the entire Palm Jumeirah from 240m above.</p>
                        <a href="view-at-the-palm" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Dolphinarium -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/atlantis/dolphin-1.jpg" class="card-img-top" alt="Dubai Dolphinarium"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 90</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Dubai Dolphinarium</h5>
                        <p class="card-text small mb-3 text-muted">Amazing dolphin & seal shows for the family.</p>
                        <a href="dolphinarium" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Global Village -->
            <div class="col-lg-4">
                <div
                    class="card h-100 shadow-sm border-0 bg-primary bg-opacity-10 d-flex align-items-center justify-content-center p-4 text-center">
                    <div>
                        <i class="fas fa-search-location fa-3x text-primary mb-3"></i>
                        <h5>Explore More</h5>
                        <p class="small text-muted mb-3">Discover all our excursions in Dubai.</p>
                        <a href="dubai-excursions" class="btn btn-sm btn-primary px-4 fw-bold">Browse All Tours</a>
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

<?php echo $schemaMarkup; ?>
<?php include 'includes/footer.php'; ?>