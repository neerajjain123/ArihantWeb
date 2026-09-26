<?php
// Page SEO Variables
$pageTitle = "4 Nights 5 Days Baku with Shahdag & Gobustan Tour | Azerbaijan 2025";
$pageDescription = "Explore the best of Azerbaijan with our 4N/5D package. Discover Baku city, the Shahdag mountain resort, and the ancient ruins of Gobustan.";
$pageKeywords = "baku shahdag tour package, azerbaijan 4n5d itinerary, shahdag mountain resort day trip, gobustan mud volcanoes baku, azerbaijan winter tour, baku city highlights, land of fire tour";
$pageCanonical = "https://arihantlink.com/baku-shahdag-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Baku with Shahdag & Gobustan";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "baku";
$breadcrumbBg = "img/baku/baku-night-city-panaroma-view.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = <<<HTML
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Baku with Shahdag and Gobustan tour - 4 Nights / 5 Days",
  "description": "{$pageDescription}",
  "touristType": ["Adventure Seekers", "Families", "Culture Lovers"],
  "image": [
    "https://arihantlink.com/img/baku/baku-night-city-panaroma-view.jpg",
    "https://arihantlink.com/img/baku/gobustan-mud-volcanoes.jpg",
    "https://arihantlink.com/img/baku/maiden-tower-baku.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1200",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "{$pageCanonical}",
    "seller": {
      "@type": "TravelAgency",
      "name": "Arihant Travels Pvt Ltd"
    }
  },
  "itinerary": {
    "@type": "ItemList",
    "name": "Baku Shahdag 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Baku",
        "description": "Airport pickup and private transfer to your hotel."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Baku City Discovery",
        "description": "Highland Park, Little Venice, Heydar Aliyev Center, and Old City tour."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Shahdag Mountain Resort",
        "description": "Full day excursion to the majestic Caucasus Mountains and Shahdag resort."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Gobustan & Land of Fire",
        "description": "Mud Volcanoes, Gobustan National Park, and the eternal fires of Absheron."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure",
        "description": "Breakfast and transfer to airport for departure."
      }
    ]
  }
}
</script>
HTML;

include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-calendar-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">4 Nights / 5 Days</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Shahdag Resort</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-history fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">UNESCO Heritage</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-fire fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Land of Fire</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-shuttle-van fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private Basis</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Caspian Views</p>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<div class="container-fluid py-5">
    <div class="container py-2">
        <div class="row g-5">
            <!-- Left Column: Content -->
            <div class="col-lg-8">
                <!-- Overview -->
                <div class="mb-5">
                    <h2 class="mb-4">Package Snapshot</h2>
                    <p class="text-primary fw-bold">Where Medieval History Meets Alpine Innovation</p>
                    <p>Baku, the capital city of Azerbaijan, is a potpourri of various cultures. This 4 Nights 5 Days
                        Azerbaijan Tour Package is the perfect way to enjoy the juxtaposition of the old and and new
                        offered by the city. Surrounded by massive brick walls, the ancient Old City is where medieval
                        history comes alive, while the modern skyline is adorned with the iconic Flame Towers.</p>
                    <p>During this comprehensive tour, you will explore the urban attractions of Baku, the high-altitude
                        thrills of <strong>Shahdag Mountain Resort</strong>, and the ancient rock art of
                        <strong>Gobustan National Park</strong>. It is an exactly matched experience for those wanting
                        to create awesome memories in the Land of Fire.</p>
                </div>

                <!-- Itinerary -->
                <div class="mb-5">
                    <h2 class="mb-4">Detailed Itinerary</h2>
                    <div class="accordion" id="itineraryAccordion">
                        <!-- Day 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#day1">
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Baku
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/baku-cityscape-flametowers.jpeg"
                                                class="img-fluid rounded shadow-sm" alt="Baku Arrival">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Private pickup
                                                    from Baku International Airport</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Transfer and
                                                    check-in to your selected hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Leisure
                                                    time to explore the city's coastal boulevard</li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Baku</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Baku City Highlights
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/maiden-tower-baku.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Baku Highlights">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit
                                                    <strong>Highland Park</strong> for panoramic city views</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore
                                                    <strong>Little Venice</strong> and the <strong>Carpet
                                                        Museum</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit the
                                                    <strong>Heydar Aliyev Center</strong> by Zaha Hadid</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Guided walking
                                                    tour of the <strong>Old City & Nizami Street</strong></li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Baku</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Shahdag Mountain Resort
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/yeddi-gozel-waterfall.webp"
                                                class="img-fluid rounded shadow-sm" alt="Shahdag Mountains">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Full day
                                                    excursion to <strong>Shahdag Resort</strong> in Gusar</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Experience the
                                                    <strong>Cable Car</strong> with stunning mountain views</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Enjoy the
                                                    <strong>Alpine Coaster</strong> and <strong>Zip Line</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-info-circle text-primary me-2"></i>Lunch break
                                                    amidst the Caucasian peaks</li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Baku</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Gobustan & Absheron Fire Tour
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/gobustan-mud-volcanoes.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Gobustan & Fire">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit
                                                    <strong>Gobustan National Park</strong> (Petroglyphs & 3D Museum)
                                                </li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore the
                                                    natural phenomenon of <strong>Mud Volcanoes</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>See
                                                    <strong>Ateshgah (Fire Temple)</strong> and <strong>Yanardag
                                                        (Burning Mountain)</strong></li>
                                                <li class="mb-2"><i class="fas fa-mosque text-primary me-2"></i>Stop at
                                                    the historical <strong>Bibi-Heybat Mosque</strong></li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Baku</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day6">
                                    <span class="badge bg-primary me-3">Day 5</span> Farewell Baku
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/baku-night-city-panaroma-view.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Baku Sunset">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at
                                                    the hotel & Check out</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-door-open text-primary me-2"></i>Private transfer
                                                    to airport for departure</li>
                                                <li class="mb-2"><i class="fas fa-heart text-danger me-2"></i>Depart
                                                    with wonderful memories of Azerbaijan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package Details Tabs -->
                <div class="mb-5">
                    <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-pill fw-bold" id="pills-inclusions-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-inclusions" type="button"
                                role="tab">Inclusions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill fw-bold" id="pills-exclusions-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-exclusions" type="button"
                                role="tab">Exclusions</button>
                        </li>
                    </ul>
                    <div class="tab-content bg-white p-4 rounded shadow-sm border" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-inclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>04 Nights’ Accommodation
                                    in a Baku hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily breakfast at the
                                    hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Personal English-speaking
                                    driver throughout</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Baku City Tour (Modern &
                                    Old Baku)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Shahdag Mountain Resort
                                    Excursion</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gobustan & Absheron Land
                                    of Fire Tour</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Entry tickets for Fire
                                    Temple & Burning Mountain</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return airport transfers
                                    on private basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bottled water and
                                    air-conditioned vehicle</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Round-trip airfare</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Cost of Visa</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Personal expenses
                                    (laundry, calls, etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified in
                                    inclusions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow-sm border-0 mb-4 overflow-hidden rounded-3 text-center">
                        <div class="card-body p-4">
                            <p class="mb-0 text-muted">Starting From</p>
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,200</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-info mb-3 px-3 py-2">Mountain & History</span>
                                <p class="small text-muted mb-2"><i
                                        class="fas fa-snowflake text-primary me-2"></i>Shahdag Alpine Resort</p>
                                <p class="small text-muted mb-2"><i class="fas fa-scroll text-primary me-2"></i>Gobustan
                                    Petroglyphs</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private
                                    Driver Included</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Baku with Shahdag 4N5D package"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
                                    <i class="fab fa-whatsapp me-2"></i>Reserve Now
                                </a>
                                <a href="contact" class="btn btn-outline-primary btn-lg rounded-pill">
                                    <i class="fas fa-envelope me-2"></i>Check Availability
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php include 'includes/enquiry-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>