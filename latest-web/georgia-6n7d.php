<?php
// Page SEO Variables
$pageTitle = "6 Nights 7 Days Georgia Tour Package from Dubai | Tbilisi, Kakheti, Borjomi & Dashbash 2025 - Arihant Travel";
$pageDescription = "Discover Georgia's undiscovered jewels over 6 nights / 7 days. Explore Tbilisi, UNESCO Mtskheta, Kazbegi, Kakheti wine region, Borjomi springs…";
$pageKeywords = "georgia tour package 6 nights 7 days, georgia undiscovered jewel, tbilisi kakheti borjomi tour, dashbash canyon georgia, georgia 6n7d package dubai, georgia wine region tour, uplistsikhe borjomi tour";
$pageCanonical = "https://arihantlink.com/georgia-6n7d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "6 Nights 7 Days Georgia Tour";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "georgia";
$breadcrumbBg = "img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Georgia the Undiscovered Jewel - 6 Nights / 7 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.jpg",
    "https://arihantlink.com/img/blogs/georgia/wine-making.webp",
    "https://arihantlink.com/img/blogs/georgia/ananuri-fortress.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2599",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "' . $pageCanonical . '",
    "seller": {
      "@type": "TravelAgency",
      "name": "Arihant Travel"
    }
  },
  "itinerary": {
    "@type": "ItemList",
    "name": "Georgia 6N7D Detailed Itinerary",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Day 1 - Arrival & Welcome to Tbilisi", "description": "Meet & greet at Airport • Private transfer to 4-star hotel • Rest of day at leisure"},
      {"@type": "ListItem", "position": 2, "name": "Day 2 - Old Tbilisi Walking Tour, Mtskheta & Mtatsminda", "description": "Europe Square • Narikala Fortress via Cable Car • Ancient capital Mtskheta (UNESCO) • Mtatsminda Park"},
      {"@type": "ListItem", "position": 3, "name": "Day 3 - Ananuri, Gudauri & Kazbegi Adventure", "description": "Caucasian Military Highway • Jinvali Dam • Ananuri Fortress • Gudauri Viewpoint • Stepantsminda • 4x4 to Gergeti Trinity"},
      {"@type": "ListItem", "position": 4, "name": "Day 4 - Kakheti Wine Region: Sighnaghi & Bodbe", "description": "Wine tasting in Kakheti • Sighnaghi (City of Love) • Bodbe Monastery • Telavi historic town"},
      {"@type": "ListItem", "position": 5, "name": "Day 5 - Uplistsikhe Cave City & Borjomi Wellness", "description": "Ancient Uplistsikhe Cave Town • Borjomi curative mineral springs • Green Monastery"},
      {"@type": "ListItem", "position": 6, "name": "Day 6 - Dashbash Canyon & Waterfall", "description": "Dashbash Canyon Diamond Bridge • Spectacular waterfalls • Micro-climate exploration"},
      {"@type": "ListItem", "position": 7, "name": "Day 7 - Departure", "description": "Final breakfast • Private transfer to Tbilisi International Airport"}
    ]
  }
}
</script>';
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-calendar-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">6 Nights / 7 Days</p>
                <small class="text-muted">Complete Journey</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-gem fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Undiscovered Jewel</p>
                <small class="text-muted">Unique Itinerary</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Kazbegi & Canyon</p>
                <small class="text-muted">Nature & Adventure</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-wine-glass-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Wine Culture</p>
                <small class="text-muted">Kakheti Region</small>
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
                    <h2 class="mb-4 text-dark fst-italic">Experience Georgia's Hidden Gems</h2>
                    <p class="lead text-primary mb-4">Discover Georgia's undiscovered jewels: Culture, Wine, Nature &
                        History in one comprehensive 7-day tour.</p>
                    <div class="bg-light p-4 rounded-3 border-start border-primary border-5">
                        <p class="mb-0 text-muted">This 6-night journey takes you through Georgia's most captivating and
                            less-explored destinations. From Tbilisi's cobblestone streets and UNESCO-listed Mtskheta to
                            the Caucasus peaks of Kazbegi, the wine valleys of Kakheti, Borjomi's healing springs, and
                            the stunning Dashbash Canyon.</p>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="mb-5">
                    <h2 class="mb-4">Complete 7-Day Itinerary</h2>
                    <div class="accordion" id="itineraryAccordion">
                        <!-- Day 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#day1">
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival & Welcome to Tbilisi
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-plane-arrival text-primary me-2"></i>Arrival
                                            at Tbilisi International Airport</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private
                                            transfer to 4-star hotel</li>
                                        <li class="mb-2"><i class="fas fa-info-circle text-muted me-2"></i>Check-in and
                                            rest of day free at leisure for self-exploration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Old Tbilisi, Mtskheta & Mtatsminda
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <h6 class="fw-bold"><i class="fas fa-map-marked-alt text-primary me-2"></i>Morning:
                                        Old Tbilisi Walking Tour</h6>
                                    <ul class="list-unstyled mb-3 ms-4">
                                        <li>Europe Square & Metekhi Church</li>
                                        <li>Cable car to Narikala Fortress (one-way included)</li>
                                        <li>Mother of Kartli Statue & Abano Sulfur District</li>
                                    </ul>
                                    <h6 class="fw-bold"><i class="fas fa-landmark text-primary me-2"></i>Afternoon:
                                        Ancient Capital Mtskheta (UNESCO)</h6>
                                    <ul class="list-unstyled mb-0 ms-4">
                                        <li>Jvari Monastery overlooking confluence of Mtkvari & Aragvi rivers</li>
                                        <li>Svetitskhoveli Cathedral - Georgia's spiritual center</li>
                                        <li>Evening visit to Mtatsminda Amusement Park for city panoramas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Ananuri, Gudauri & Kazbegi
                                    Adventure
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-camera text-primary me-2"></i>Scenic drive via
                                            Jinvali Reservoir & Ananuri Fortress Complex</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stop at
                                            the Friendship Monument in Gudauri</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue
                                            to Stepantsminda village in Kazbegi</li>
                                        <li class="mb-2"><i
                                                class="fas fa-car text-primary me-2"></i><strong>Included:</strong> 4x4
                                            ride up to Gergeti Trinity Church</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Kakheti Wine Region & Sighnaghi
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-wine-glass text-primary me-2"></i>Optional
                                            visit to KTW Winery for tasting</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Sighnaghi
                                            - the romantic "City of Love" atop a hill</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit
                                            Bodbe Nunnery overlooking Alazani Valley</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore
                                            the historical streets of Telavi main city</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Uplistsikhe Cave City & Borjomi
                                    Wellness
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i
                                                class="fas fa-monument text-primary me-2"></i><strong>Included:</strong>
                                            Uplistsikhe ancient cave town entrance</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Borjomi
                                            well-known for curative balneological climate</li>
                                        <li class="mb-2"><i
                                                class="fas fa-leaf text-success me-2"></i><strong>Included:</strong>
                                            Borjomi Central Park entrance & spring water tasting</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit to
                                            the serene Green Monastery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day6">
                                    <span class="badge bg-primary me-3">Day 6</span> Dashbash Canyon & Waterfall
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-water text-primary me-2"></i>Explore the
                                            beautiful Dashbash Canyon and its waterfalls</li>
                                        <li class="mb-2"><i
                                                class="fas fa-bridge text-primary me-2"></i><strong>Included:</strong>
                                            Walk on the spectacular Diamond Bridge</li>
                                        <li class="mb-2"><i class="fas fa-info-circle text-muted me-2"></i>Optional
                                            extension to Paravani Lake (available on request)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 7 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day7">
                                    <span class="badge bg-primary me-3">Day 7</span> Departure with Cherished Memories
                                </button>
                            </h2>
                            <div id="day7" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-utensils text-primary me-2"></i>Final hotel
                                            breakfast & standard checkout at 12:00</li>
                                        <li class="mb-2"><i class="fas fa-shuttle-van text-primary me-2"></i>Private
                                            transfer to Tbilisi International Airport (3 hours pre-flight)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package Highlights List -->
                <div class="mb-5 bg-white p-4 rounded shadow-sm border">
                    <h2 class="mb-4">Special Package Highlights</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <i class="fas fa-check-circle text-success mt-1"></i>
                                <p class="mb-0">All tours and transfers on a private basis for personalized service.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <i class="fas fa-check-circle text-success mt-1"></i>
                                <p class="mb-0">Included entrance tickets for Borjomi, Uplistsikhe, and Dashbash Canyon.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <i class="fas fa-check-circle text-success mt-1"></i>
                                <p class="mb-0">Unique 4x4 ride included for the final ascent in Kazbegi.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <i class="fas fa-check-circle text-success mt-1"></i>
                                <p class="mb-0">Professional driver-guide (English-speaking) throughout your stay.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inclusions/Exclusions Tabs -->
                <div class="mb-5">
                    <ul class="nav nav-tabs nav-justified mb-0 shadow-sm rounded-top" id="pkgTabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active py-3 fw-bold" id="inc-tab" data-bs-toggle="tab"
                                data-bs-target="#inc-pane" type="button">Inclusions</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link py-3 fw-bold text-muted" id="exc-tab" data-bs-toggle="tab"
                                data-bs-target="#exc-pane" type="button">Exclusions</button>
                        </li>
                    </ul>
                    <div class="tab-content bg-white p-4 rounded-bottom shadow-sm border border-top-0"
                        id="pkgTabsContent">
                        <div class="tab-pane fade show active" id="inc-pane" role="tabpanel">
                            <ul class="list-unstyled row g-3">
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>6 nights in 4-star
                                    Tbilisi hotel</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Daily breakfast at
                                    hotel</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Private airport
                                    transfers</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>English-speaking
                                    driver-guide</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Tbilisi cable car
                                    (one-way)</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Kazbegi 4×4 vehicle
                                </li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Entrance: Borjomi &
                                    Uplistsikhe</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Entrance: Dashbash
                                    Canyon</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>24-hour emergency
                                    assistance</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="exc-pane" role="tabpanel">
                            <ul class="list-unstyled row g-3 fst-italic">
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Round-trip airfare</li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Visa fees & tips</li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Meals besides breakfast
                                </li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Optional wine tasting
                                    fees</li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Personal shopping &
                                    expenses</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow-sm border-0 mb-4 overflow-hidden rounded-3 text-center">
                        <div class="card-header bg-primary text-white py-3">
                            <h5 class="mb-0 fw-bold">Best Price Guaranteed</h5>
                        </div>
                        <div class="card-body p-4">
                            <p class="mb-1 text-muted">Complete 7-day tour from</p>
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,599</h2>
                            <span class="text-muted d-block mb-4">Per Person (Twin Sharing)</span>

                            <hr class="my-4">

                            <div class="d-grid gap-3">
                                <a href="https://wa.me/971585945007?text=I want to reserve the 6N7D Georgia Undiscovered Jewel package"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                    <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                                </a>
                                <a href="#itinerary" class="btn btn-outline-primary btn-lg rounded-pill">
                                    <i class="fas fa-file-download me-2"></i>View Itinerary
                                </a>
                            </div>
                        </div>
                        <div class="card-footer bg-light py-3">
                            <p class="small text-muted mb-0 fst-italic"><i class="fas fa-info-circle me-1"></i>Flexible
                                dates and group sizes available.</p>
                        </div>
                    </div>
                    <?php include 'includes/enquiry-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>