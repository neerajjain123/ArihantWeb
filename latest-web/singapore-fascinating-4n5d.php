<?php
// Page SEO Variables
$pageTitle = "Fascinating Singapore 4 Nights 5 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience Singapore with our Fascinating Singapore 4 Nights / 5 Days package. Enjoy Night Safari, Sentosa Island with cable car and S.E.A.";
$pageKeywords = "fascinating singapore package, singapore 4 nights 5 days, night safari singapore, sentosa island tour, gardens by the bay, singapore city tour, singapore holiday from dubai, singapore travel uae";
$pageCanonical = "https://arihantlink.com/singapore-fascinating-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Fascinating Singapore";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "singapore";
$breadcrumbBg = "img/singapore/hero-banner-singapore.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Fascinating Singapore - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/singapore/night-safari-tickets-with-tram-ride.avif",
    "https://arihantlink.com/img/singapore/Singapore-Merlion-Park.jpg",
    "https://arihantlink.com/img/singapore/Gardens-by-The-Bay.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2160",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "' . $pageCanonical . '",
    "seller": {
      "@type": "TravelAgency",
      "name": "Arihant Travels Pvt Ltd"
    }
  },
  "itinerary": {
    "@type": "ItemList",
    "name": "Fascinating Singapore 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Evening Wildlife",
        "description": "Airport transfer and evening choice of Night Safari, Bird Paradise, or River Wonders."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Singapore City Tour",
        "description": "Half-day city tour visiting Merlion Park, Fountain of Wealth, Chinatown, Little India, City Hall, and Parliament House. Afternoon free for shopping."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Sentosa Island Adventure",
        "description": "Sentosa Island with one-way Mt. Faber Cable Car, S.E.A. Aquarium, and Wings of Time night show."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Gardens by the Bay",
        "description": "Free day or optional Universal Studios. Evening visit to Gardens by the Bay with Flower Dome and Cloud Forest conservatories."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure",
        "description": "Breakfast and transfer to airport."
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
      "name": "Do UAE residents need a visa for Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "UAE passport holders can obtain an Electronic Travel Authorisation (ETA) for Singapore. Apply online before travel. Ensure your passport has at least 6 months validity."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights from Dubai to Singapore take approximately 7 to 7.5 hours. Several airlines offer non-stop and one-stop connections."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Night Safari?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Night Safari is the world\u0027s first nocturnal zoo, home to 900+ animals from 100 species across geographical zones. Explore via tram ride and walking trails."
      }
    },
    {
      "@type": "Question",
      "name": "What is Wings of Time?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Wings of Time is a spectacular outdoor night show at Sentosa featuring water, laser, fire, and music effects."
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
                <p class="mb-0 fw-bold">4 Nights / 5 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Singapore & Sentosa</p>
                <small class="text-muted">Destinations</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-leaf fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Gardens by the Bay</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-paw fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Night Safari / Bird Paradise</p>
                <small class="text-muted">Wildlife</small>
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
                    <p class="text-primary fw-bold">Wildlife, Culture & Nature in the Lion City</p>
                    <p>A step up from Simply Singapore, this Fascinating Singapore package combines the best of wildlife, culture, and nature into one unforgettable itinerary. From the nocturnal wonders of the Night Safari to the dazzling marine world of Sentosa's S.E.A. Aquarium, and the awe-inspiring Gardens by the Bay, every day brings a new dimension of Singapore to explore.</p>
                    <p>Begin your evenings with a choice of the world-famous Night Safari, the stunning Bird Paradise, or the immersive River Wonders. Discover Singapore's rich heritage on a half-day city tour through Merlion Park, Chinatown, and Little India. Ride the Mt. Faber Cable Car to Sentosa Island, marvel at 100,000+ marine animals, and end the night with the spectacular Wings of Time show.</p>
                    <p>With the iconic Flower Dome and Cloud Forest conservatories at Gardens by the Bay, this package delivers the perfect balance of wildlife, culture, and nature for travellers from Dubai.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival & Evening Wildlife
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/night-safari-tickets-with-tram-ride.avif" class="img-fluid rounded shadow-sm" alt="Night Safari Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Welcome to Singapore & Nocturnal Adventures</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Singapore Changi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to your hotel (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and freshen up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Choose one attraction — Night Safari, Bird Paradise, or River Wonders</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Night Safari: Tram ride through the world's first nocturnal zoo with 900+ animals across geographical zones</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Bird Paradise: Immersive walk-through aviaries with birds from around the world</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>River Wonders: Journey through the world's major river habitats</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Singapore</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Singapore City Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Singapore-Merlion-Park.jpg" class="img-fluid rounded shadow-sm" alt="Singapore Merlion Park">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Heritage, Landmarks & Shopping</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Singapore City Tour (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the iconic Merlion Park — Singapore's legendary half-lion, half-fish statue</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the Fountain of Wealth at Suntec City</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the vibrant streets of Chinatown and Little India</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive past City Hall and Parliament House</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon free for shopping at Orchard Road or Bugis Street</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Singapore</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Sentosa Island Adventure
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Sentosa-island.jpg" class="img-fluid rounded shadow-sm" alt="Sentosa Island Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Cable Car, Aquarium & Night Show</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Morning at leisure — relax or explore on your own</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon: Transfer to Sentosa Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>One-way Mt. Faber Cable Car ride with panoramic views of the harbour and skyline</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit S.E.A. Aquarium — 22 themed zones with over 100,000 marine animals</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Wings of Time night show (7:30 PM) — a spectacular outdoor display of water, laser, fire, and music effects</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Singapore</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Gardens by the Bay
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Gardens-by-The-Bay.webp" class="img-fluid rounded shadow-sm" alt="Gardens by the Bay Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Nature's Masterpiece & Optional Theme Park</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free day to explore Singapore at your own pace</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: Visit Universal Studios Singapore (at additional cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Gardens by the Bay — Singapore's iconic nature park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the Flower Dome — the world's largest glass greenhouse with flora from five continents</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the Cloud Forest — featuring the world's tallest indoor waterfall at 35 metres</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Singapore</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Departure
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Singapore-Skyline.jpg" class="img-fluid rounded shadow-sm" alt="Singapore Skyline Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Leisure time until checkout</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer to Singapore Changi Airport (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return home with wonderful memories of the Lion City</li>
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
                    <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-pill fw-bold" id="pills-inclusions-tab" data-bs-toggle="pill" data-bs-target="#pills-inclusions" type="button" role="tab">Inclusions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill fw-bold" id="pills-exclusions-tab" data-bs-toggle="pill" data-bs-target="#pills-exclusions" type="button" role="tab">Exclusions</button>
                        </li>
                    </ul>
                    <div class="tab-content bg-white p-4 rounded shadow-sm border" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-inclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 Nights' accommodation with daily breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return airport transfers (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Choice of 1 evening attraction: Night Safari / Bird Paradise / River Wonders</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Singapore City Tour (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Sentosa Island tour with one-way cable car and S.E.A. Aquarium</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Wings of Time show entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gardens by the Bay (Flower Dome & Cloud Forest) entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All local taxes and service charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Singapore Tourist Visa</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified under Inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Any surcharges due to peak season, festivals, Christmas/New Year dinners</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Early check-in or late check-out fees</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Do UAE residents need a visa for Singapore?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">UAE passport holders can obtain an Electronic Travel Authorisation (ETA) for Singapore. Apply online before travel. Ensure your passport has at least 6 months' validity from the date of entry.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Singapore?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Singapore take approximately 7 to 7.5 hours. Several airlines offer convenient non-stop and one-stop connections.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Singapore?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Singapore enjoys a tropical climate year-round with temperatures between 25-31 degrees Celsius. While it can be visited any time of the year, the months of February to April are the driest. November and December see the most rainfall but showers are typically brief.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is the Night Safari?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Night Safari is the world's first nocturnal zoo, home to over 900 animals from 100 species across geographical zones. Explore via a guided tram ride through naturalistic habitats and walking trails that bring you up close to creatures of the night.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">What is Wings of Time?</button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Wings of Time is a spectacular outdoor night show at Sentosa Island featuring stunning water, laser, fire, and music effects set against the open sea. It tells a mythical story through cutting-edge multimedia technology and is one of Singapore's must-see evening experiences.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,160</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Popular</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4 Nights in Singapore</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Night Safari or Bird Paradise</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Sentosa Cable Car & Aquarium</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Gardens by the Bay Domes</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Fascinating Singapore 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
