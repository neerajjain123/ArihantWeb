<?php
// Page SEO Variables
$pageTitle = "Sensational Singapore 5 Nights 6 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Discover Singapore with our Sensational Singapore 5 Nights / 6 Days package. Visit Universal Studios, Sentosa Island, Gardens by the Bay…";
$pageKeywords = "sensational singapore package, singapore 5 nights 6 days, universal studios singapore, sentosa island tour, gardens by the bay, marina bay sands sky park, singapore holiday from dubai, singapore travel uae";
$pageCanonical = "https://arihantlink.com/singapore-sensational-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Sensational Singapore";
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
  "name": "Sensational Singapore - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/singapore/universal.jpg",
    "https://arihantlink.com/img/singapore/Sentosa-island.jpg",
    "https://arihantlink.com/img/singapore/marina-bay-hotel.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2970",
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
    "name": "Sensational Singapore 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Evening Wildlife",
        "description": "Airport transfer to hotel. Evening choice of Night Safari, Bird Paradise, or River Wonders."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Singapore City Tour",
        "description": "Half-day panoramic city tour visiting Merlion Park, Fountain of Wealth, Chinatown, Little India, City Hall, and Parliament House."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Universal Studios Singapore",
        "description": "Full day at Universal Studios with 24 rides and shows across 7 themed zones."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Sentosa Island Adventure",
        "description": "Half-day Sentosa with Cable Car, S.E.A. Aquarium, Skyline Luge & Skyride, and Wings of Time show."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Gardens by the Bay & Marina Bay Sands",
        "description": "Half-day Gardens by the Bay with Flower Dome and Cloud Forest conservatories, and Marina Bay Sands Sky Park Observation Deck."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure",
        "description": "Breakfast, checkout, and airport transfer."
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
        "text": "UAE nationals enjoy visa-free entry for up to 30 days."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights take approximately 7 hours."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Singapore is a year-round tropical destination. Dec-Jan is peak season."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Marina Bay Sands Sky Park?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An observation deck on the 57th floor of the iconic Marina Bay Sands hotel, offering 360-degree panoramic views of Singapore\u0027s skyline, the harbour, and Gardens by the Bay from 200 metres above sea level."
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
                <p class="mb-0 fw-bold">5 Nights / 6 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Singapore & Sentosa</p>
                <small class="text-muted">Destinations</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-film fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Universal Studios</p>
                <small class="text-muted">Theme Park</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-building fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Marina Bay Sands Sky Park</p>
                <small class="text-muted">Iconic Landmark</small>
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
                    <p class="text-primary fw-bold">The Ultimate Singapore Family Experience</p>
                    <p>The extended 5-night Singapore experience with extra leisure time. Features everything from the Fully Loaded package (minus Singapore Flyer) PLUS Marina Bay Sands Sky Park, with an extra day to relax and explore. Perfect for families who want a packed itinerary without feeling rushed.</p>
                    <p>From the nocturnal wonders of Night Safari to the thrilling rides at Universal Studios, from the marine marvels of S.E.A. Aquarium to the breathtaking views atop Marina Bay Sands Sky Park — this package covers Singapore's most iconic attractions across 6 unforgettable days.</p>
                    <p>With world-class dining, seamless transport, and a tropical climate year-round, Singapore is the perfect family destination from Dubai.</p>
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
                                            <h6 class="fw-bold mb-3">Welcome to Singapore & Nocturnal Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Singapore Changi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Seat-in-coach transfer to your hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and freshen up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Choice of 1 attraction — Night Safari (tram ride through nocturnal zoo), Bird Paradise, or River Wonders</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Experience the world's first nocturnal wildlife park with over 2,500 animals</li>
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
                                            <img src="img/singapore/Singapore-Merlion-Park.jpg" class="img-fluid rounded shadow-sm" alt="Merlion Park Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Panoramic City Highlights & Shopping</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day panoramic Singapore City Tour (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Merlion Park — Singapore's iconic half-lion, half-fish landmark</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the Fountain of Wealth at Suntec City</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive through Chinatown, Little India, City Hall, and Parliament House</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Universal Studios Singapore
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/universal.jpg" class="img-fluid rounded shadow-sm" alt="Universal Studios Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Southeast Asia's Only Universal Theme Park</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day at Universal Studios Singapore</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>24 rides and shows across 7 themed zones</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Experience Transformers: The Ride 3D — immersive motion simulator</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Jurassic Park rapids and Battlestar Galactica roller coasters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy Hollywood, New York, Sci-Fi City, Ancient Egypt, and more themed zones</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Sentosa Island Adventure
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Sentosa-island.jpg" class="img-fluid rounded shadow-sm" alt="Sentosa Island Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Cable Car, Aquarium, Luge & Light Show</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Sentosa Island tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Singapore Cable Car ride — panoramic aerial views over the harbour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>S.E.A. Aquarium — home to over 100,000 marine animals across 22 themed zones</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Skyline Luge & Skyride (3 rides) — thrilling gravity ride through jungle trails</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Wings of Time evening show — spectacular outdoor light, water, and fireworks display</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Gardens by the Bay & Marina Bay Sands
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/marina-bay-hotel.webp" class="img-fluid rounded shadow-sm" alt="Marina Bay Sands Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Conservatories & Sky-High Panoramic Views</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Gardens by the Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Flower Dome — the world's largest glass greenhouse with flowers from every continent</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cloud Forest — featuring the world's tallest indoor waterfall at 35 metres</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Marina Bay Sands Sky Park Observation Deck — 57 floors up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>360-degree panoramic views of Singapore's skyline, harbour, and Gardens by the Bay from 200 metres above sea level</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Singapore</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day6">
                                    <span class="badge bg-primary me-3">Day 6</span> Departure
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Singapore-Skyline.jpg" class="img-fluid rounded shadow-sm" alt="Singapore Skyline Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Leisure time until checkout</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Seat-in-coach transfer to Singapore Changi Airport</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>5 Nights accommodation with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return airport transfers (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Choice of 1 evening attraction: Night Safari / Bird Paradise / River Wonders</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Singapore City Tour (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Universal Studios Singapore admission</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Sentosa Island tour with cable car</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>S.E.A. Aquarium entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Skyline Luge & Skyride (3 rides)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Wings of Time show entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gardens by the Bay (Flower Dome & Cloud Forest) entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Marina Bay Sands Sky Park Observation Deck entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All local taxes and service charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Singapore Tourist Visa</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Personal expenses</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not mentioned in inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Peak/festival surcharges</li>
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
                                <div class="accordion-body">UAE nationals enjoy visa-free entry for up to 30 days. Ensure your passport has at least 6 months' validity from the date of entry.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Singapore?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Singapore take approximately 7 hours. Several airlines offer convenient non-stop services on this route.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Singapore?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Singapore is a year-round tropical destination with warm weather throughout the year. December to January is peak season with festive celebrations and holiday crowds. February to April offers slightly drier weather and fewer tourists.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is the Marina Bay Sands Sky Park?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">An observation deck on the 57th floor of the iconic Marina Bay Sands hotel, offering 360-degree panoramic views of Singapore's skyline, the harbour, and Gardens by the Bay from 200 metres above sea level.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,970</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Family Pick</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>5 Nights in Singapore</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Universal Studios + Sentosa</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Marina Bay Sands Sky Park</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Gardens by the Bay Domes</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Sensational Singapore 5N6D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
