<?php
// Page SEO Variables
$pageTitle = "5 Nights 6 Days Relaxed Baku & Gabala Package | Azerbaijan 2025";
$pageDescription = "Enjoy a peaceful retreat with our Relaxed Baku & Gabala package. 2 Nights in the Caucasus Mountains (Gabala) and 3 Nights in Baku. From 1600 AED.";
$pageKeywords = "baku gabala multi city tour, 2 nights gabala 3 nights baku, relaxed azerbaijan holiday, azerbaijan 5n6d itinerary, gabala mountains stay, baku city tour from uae";
$pageCanonical = "https://arihantlink.com/baku-relax-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Relaxed Baku with Gabala";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "baku";
$breadcrumbBg = "img/baku/yeddi-gozel-waterfall.webp";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = <<<HTML
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Relaxed Baku with Gabala - 5 Nights / 6 Days",
  "description": "{$pageDescription}",
  "touristType": ["Families", "Nature Lovers", "Couples"],
  "image": [
    "https://arihantlink.com/img/baku/yeddi-gozel-waterfall.webp",
    "https://arihantlink.com/img/baku/maiden-tower-baku.jpg",
    "https://arihantlink.com/img/baku/gobustan-mud-volcanoes.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1600",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "{$pageCanonical}",
    "seller": {
      "@type": "TravelAgency",
      "name": "Arihant Travel"
    }
  },
  "itinerary": {
    "@type": "ItemList",
    "name": "Azerbaijan Relaxed 5N6D Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Transfer to Gabala",
        "description": "Airport arrival and direct transfer to the serene Gabala mountains."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Gabala Mountain Scenery",
        "description": "Tufandag Cable Car, Nohur Lake, and Seven Beauties Waterfall."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Transfer to Baku & Land of Fire",
        "description": "Check out from Gabala, transfer to Baku, and visit the Ateshgah Fire Temple."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Baku City Heritage",
        "description": "Old City (UNESCO), Nizami Street, and Heydar Aliyev Center."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Gobustan & Mud Volcanoes",
        "description": "Rock petroglyphs and nature's bubbling mud volcanoes."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure",
        "description": "Final morning and private transfer to airport."
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
                <p class="mb-0 fw-bold">5 Nights / 6 Days</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-city fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">2 Cities (Gabala & Baku)</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Mountain Stay</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-fire fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Land of Fire</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-user-shield fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private Guide</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-shuttle-van fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">All Transfers</p>
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
                    <p class="text-primary fw-bold">Tranquil Mountains Meets Bustling Metropolis</p>
                    <p><strong>Baku</strong>, the capital of Azerbaijan, is a bustling metropolis where modernity meets
                        tradition. It showcases striking architectural wonders like the Flame Towers alongside historic
                        treasures within its UNESCO-listed Old City. With a vibrant cultural scene, Baku boasts museums,
                        theaters, and a dynamic nightlife.</p>
                    <p><strong>Gabala</strong>, nestled in the serene Caucasus Mountains, offers a stark contrast with
                        its tranquil ambiance and lush landscapes. It's a haven for outdoor enthusiasts, providing
                        opportunities for activities like hiking, skiing, and exploring nature. Away from the hustle of
                        city life, Gabala serves as a peaceful retreat.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival & Escape to Gabala
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/yeddi-gozel-waterfall.webp"
                                                class="img-fluid rounded shadow-sm" alt="Gabala Mountains">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Arrival at
                                                    Haydar Aliyev International Airport</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Meet & greet,
                                                    then direct transfer to <strong>Gabala</strong></li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Check-in
                                                    and evening at leisure in the mountains</li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Gabala</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Gabala Mountain Exploration
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/gabala-Lake-Nohu.webp"
                                                class="img-fluid rounded shadow-sm" alt="Nohur Lake">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit
                                                    <strong>Tufandag Mountain Complex</strong> (Cable car rides)
                                                </li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore the
                                                    serene <strong>Nohur Lake</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Discover the
                                                    <strong>Seven Beauties (Yeddi Gozel) Waterfall</strong>
                                                </li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Gabala</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Transfer to Baku & Atashgah
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/absheron-peninsula-ancirent-fire.jpeg"
                                                class="img-fluid rounded shadow-sm" alt="Fire Temple">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Check-out and
                                                    scenic transfer to <strong>Baku</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit the
                                                    <strong>Ateshgah Fire Temple</strong>
                                                </li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Trip to
                                                    <strong>Yanar Dag (Fire Mountain)</strong>
                                                </li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Baku Heritage & Culture
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/maiden-tower-baku.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Baku Old City">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Guided tour of
                                                    the <strong>UNESCO Old City</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Experience the
                                                    vibrant <strong>Nizami Street</strong> and <strong>Fountains
                                                        Square</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Photostop at
                                                    <strong>Heydar Aliyev Center</strong>
                                                </li>
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
                                    data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Gobustan Rock Art & Mud Volcanoes
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/gobustan-mud-volcanoes.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Mud Volcanoes">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore
                                                    <strong>Gobustan Rock Art</strong> Petroglyphs
                                                </li>
                                                <li class="mb-2"><i
                                                        class="fas fa-shuttle-van text-primary me-2"></i>Lada drive to
                                                    the unique <strong>Mud Volcanoes</strong></li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Baku</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day6">
                                    <span class="badge bg-primary me-3">Day 6</span> Farewell Azerbaijan
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/night-panorama-baku.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Final
                                                    breakfast at the Baku hotel</li>
                                                <li class="mb-2"><i class="fas fa-door-open text-primary me-2"></i>Check
                                                    out and transfer to airport</li>
                                                <li class="mb-2"><i class="fas fa-heart text-danger me-2"></i>Depart
                                                    with wonderful memories</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>02 Nights’ Accommodation
                                    in Gabala</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>03 Nights’ Accommodation
                                    in Baku</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily breakfast at the
                                    hotels</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private sedan or minivan
                                    transportation</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>English-speaking driver
                                    throughout the trip</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Comprehensive Baku,
                                    Gabala & Gobustan tours</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Absheron fire tour (Fire
                                    Temple & Fire Mountain)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Cable car (2 lines) &
                                    Lada drives to mud volcanoes</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All transfers on private
                                    basis</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Round-trip airfare</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa fees</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Personal expenses & tips
                                </li>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,600</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-success mb-3 px-3 py-2">Best Multi-City Value</span>
                                <p class="small text-muted mb-2"><i class="fas fa-mountain text-primary me-2"></i>2
                                    Nights Gabala Mountains</p>
                                <p class="small text-muted mb-2"><i class="fas fa-city text-primary me-2"></i>3 Nights
                                    Baku City</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Includes
                                    Mud Volcanoes Lada Ride</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Relaxed Baku with Gabala 5N6D package"
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