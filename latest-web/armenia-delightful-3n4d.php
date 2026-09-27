<?php
// Page SEO Variables
$pageTitle = "Delightful Armenia 3 Nights 4 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Discover Armenia's religious gems and rich culture with our Delightful Armenia 3 Nights / 4 Days tour package.";
$pageKeywords = "delightful armenia tour package, armenia 3 nights 4 days, yerevan city tour dubai, armenia holiday deal, budget armenia package, republic square yerevan, cascade yerevan, armenia travel from uae";
$pageCanonical = "https://arihantlink.com/armenia-delightful-3n4d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Delightful Armenia";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "armenia";
$breadcrumbBg = "img/armenia/Yerevan-City-Tour.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Delightful Armenia - 3 Nights / 4 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/armenia/Yerevan-City-Tour.jpg",
    "https://arihantlink.com/img/armenia/Saint-Gregory-cathedral.jpg",
    "https://arihantlink.com/img/armenia/cathedral.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1200",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "' . $pageCanonical . '",
    "seller": {
      "@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"},
      "name": "Arihant Travels Pvt Ltd"
    }
  },
  "itinerary": {
    "@type": "ItemList",
    "name": "Delightful Armenia 3N4D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Yerevan",
        "description": "Arrive in Yerevan, meet our representative, transfer to hotel. Rest of the day at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Yerevan City Tour",
        "description": "Full day Yerevan city tour including Republic Square, Northern Avenue, Opera House, Cascade, and Mother Armenia Monument."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Leisure Day in Yerevan",
        "description": "Free day to relax at hotel or explore Yerevan on your own."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Departure",
        "description": "Breakfast, hotel checkout, and transfer to airport for departure."
      }
    ]
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the best time to visit Armenia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Armenia is a year-round destination. Spring (April to June) and Autumn (September to October) offer pleasant weather with mild temperatures. Summer is warm and great for exploring, while winter offers a unique snowy charm."
      }
    },
    {
      "@type": "Question",
      "name": "Do UAE residents need a visa for Armenia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Visa requirements depend on your nationality. Many nationalities can obtain an e-visa or visa on arrival. UAE residents should check Armenia\u2019s e-visa portal for the latest requirements."
      }
    }
  ]
}
</script>';

include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <i class="fas fa-calendar-check fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">3 Nights / 4 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-city fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Yerevan</p>
                <small class="text-muted">Capital City</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-church fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Cascade & Opera House</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private Transfers</p>
                <small class="text-muted">Seamless Travel</small>
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
                    <p class="text-primary fw-bold">A Land of Religious Gems, Rich Culture, and Unmatched Hospitality</p>
                    <p>Astonishing Armenia is a Eurasian country located in the Caucasus region between Europe and Asia and is bordered by Turkey to the west, Georgia to the north, Azerbaijan to the east, and Iran to the south. Due to its intriguing geographical location, the country has a fascinating blend of European and Asian heritage, culture, and food. At times it may feel like Asia and at times it's very much European.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Yerevan
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Yerevan-City-Tour.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Yerevan City Arrival">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Arrive in Yerevan</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Meet our local representative at the airport</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Private transfer and check-in at your hotel in Yerevan</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Yerevan — the 12th capital of historical Armenia, one of the most ancient cities in the world</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Rest of the day free at leisure</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Yerevan City Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/cathedral.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Yerevan City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Discover the Heart of Yerevan</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Republic Square — the central town square with its pool and musical fountains</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Northern Avenue — pedestrian avenue linking Abovyan Street with Freedom Square</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Opera House — Armenian National Academic Theatre of Opera and Ballet</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Cascade — giant limestone stairway, home to cafes and the Cafesjian Art Gallery</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Mother Armenia Monument</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Leisure Day in Yerevan
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/stgeogery-cathedral.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Yerevan Leisure Day">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Relax or Explore at Your Own Pace</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Free day to relax at your hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Or explore Yerevan on your own — visit local markets, cafes, and hidden gems</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Departure
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/armenia-mountains.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Armenia Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check out and transfer to airport for your onward flight</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return home with wonderful memories</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights' accommodation in Yerevan in selected category Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Entrance fee to all mentioned monuments</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Yerevan Hotel VAT included in the pricing</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Yerevan City Tour</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>English Speaking Driver-cum-Guide</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Tours on Private Exclusive Coach Basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Transfers on Private Exclusive Coach Basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>24 Hours Emergency Assistance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Local Taxes & Charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa Cost for Armenia</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified under Inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Guide & entrance fees during sightseeing not specified in inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Any revision in air fares, taxes or fuel surcharge leading to increased costs</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Any surcharges due to peak season, exhibitions, fairs etc.</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Rates are subject to availability & may change depending on season</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FAQs -->
                <div class="mb-5">
                    <h2 class="mb-4">Common Questions</h2>
                    <div class="accordion accordion-flush bg-white rounded shadow-sm border px-3" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    Do UAE residents need a visa for Armenia?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Visa requirements depend on your nationality. Many nationalities can obtain an e-visa or visa on arrival. UAE residents should check Armenia's e-visa portal for the latest requirements based on their passport.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    What is the best time to visit Armenia?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Armenia is a year-round destination. Spring (April to June) and Autumn (September to October) offer the most pleasant weather. Summer is warm and ideal for city exploration, while winter brings a charming snowy atmosphere.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Are the tours private or group-based?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    This package includes all tours and transfers on a private exclusive coach basis with an English-speaking driver-cum-guide, ensuring a personalized and comfortable experience.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    Is Day 3 completely free or can activities be arranged?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Day 3 is a free leisure day. You can relax at your hotel or explore Yerevan on your own. If you'd like to add optional excursions such as a visit to Garni Temple, Geghard Monastery, or Lake Sevan, please contact us and we can arrange it at an additional cost.
                                </div>
                            </div>
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
                            <span class="text-muted">Per Person (3N/4D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Value</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 Nights in Yerevan</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Private Transfers & Guide</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Yerevan City Tour Included</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Delightful Armenia 3N4D package"
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
