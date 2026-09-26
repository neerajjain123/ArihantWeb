<?php
// Page SEO Variables
$pageTitle = "Best of Singapore with Sentosa 5 Nights 6 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience the ultimate Singapore holiday with our Best of Singapore with Sentosa 5 Nights / 6 Days package.";
$pageKeywords = "singapore sentosa package, singapore 5 nights 6 days, universal studios singapore, resorts world sentosa, night safari singapore, gardens by the bay, marina bay sands, singapore holiday from dubai";
$pageCanonical = "https://arihantlink.com/singapore-best-of-sentosa-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Best of Singapore with Sentosa";
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
  "name": "Best of Singapore with Sentosa - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/singapore/Gardens-by-The-Bay.webp",
    "https://arihantlink.com/img/singapore/universal.jpg",
    "https://arihantlink.com/img/singapore/sentosa-island-tour.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "4135",
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
    "name": "Best of Singapore with Sentosa 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Evening Wildlife",
        "description": "Airport transfer. Evening choice of Night Safari, Bird Paradise, or River Wonders."
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
        "name": "Day 3 - Gardens by the Bay & Marina Bay Sands",
        "description": "Gardens by the Bay with Flower Dome and Cloud Forest conservatories. Marina Bay Sands Sky Park Observation Deck."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Sentosa Island",
        "description": "Transfer to Sentosa, check-in at Resorts World Sentosa. Cable car ride, S.E.A. Aquarium, Skyline Luge & Skyride, Wings of Time show."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Universal Studios Singapore",
        "description": "Full day at Universal Studios with 24 rides and shows across 7 themed zones."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure from Sentosa",
        "description": "Breakfast at Resorts World Sentosa, checkout, and private transfer to Changi Airport."
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
        "text": "UAE passport holders can obtain a visa for Singapore through the Singapore embassy or an approved travel agent. Ensure your passport has at least 6 months validity from the date of travel."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights from Dubai to Singapore take approximately 7 hours. Several airlines offer convenient non-stop and one-stop connections."
      }
    },
    {
      "@type": "Question",
      "name": "Why stay at Resorts World Sentosa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Staying on Sentosa gives you early access to Universal Studios, eliminates daily commute, and lets you enjoy the island\u0027s evening entertainment, dining, and beach at a relaxed pace. With 2 nights, you get the full Sentosa experience."
      }
    },
    {
      "@type": "Question",
      "name": "What is included at Universal Studios?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Full-day admission to all 24 rides and shows across 7 themed zones. Popular attractions include Transformers: The Ride, Jurassic Park Rapids Adventure, Battlestar Galactica rollercoasters, and the Madagascar boat ride."
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
                <i class="fas fa-hotel fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">2 Nights at Resorts World Sentosa</p>
                <small class="text-muted">Stay</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-star fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">The Ultimate Singapore Package</p>
                <small class="text-muted">Experience</small>
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
                    <p class="text-primary fw-bold">City Wonders, Island Thrills & Universal Studios</p>
                    <p>The ultimate Singapore package — combines 3 nights in the city with 2 nights at Resorts World Sentosa for the most comprehensive experience. Includes every major Singapore attraction: Night Safari, city tour, Gardens by the Bay, Marina Bay Sands Sky Park, cable car to Sentosa, S.E.A. Aquarium, Luge & Skyride, Wings of Time, and a full day at Universal Studios.</p>
                    <p>This is for travellers who want to see and do it all. From the futuristic Supertrees of Gardens by the Bay and the panoramic views atop Marina Bay Sands to the underwater world of S.E.A. Aquarium and the adrenaline of Universal Studios' rollercoasters, every day is packed with world-class experiences.</p>
                    <p>With seamless transfers between city and island, daily breakfast, and all major attractions included, this package delivers the complete Singapore experience from Dubai.</p>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our local representative and transfer to your hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and freshen up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Choice of one attraction —</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-paw text-primary me-2"></i><strong>Night Safari</strong> — tram ride through a nocturnal zoo with 2,500+ animals</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-dove text-primary me-2"></i><strong>Bird Paradise</strong> — Asia's largest bird park with 3,500+ birds</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-fish text-primary me-2"></i><strong>River Wonders</strong> — boat ride through freshwater habitats</li>
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
                                            <img src="img/singapore/Singapore-Merlion-Park.jpg" class="img-fluid rounded shadow-sm" alt="Singapore Merlion Park City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Panoramic Highlights of the Lion City</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day panoramic city tour (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Merlion Park — Singapore's iconic waterfront landmark</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the Fountain of Wealth at Suntec City</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive through Chinatown, Little India, City Hall & Parliament House</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Gardens by the Bay & Marina Bay Sands
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Gardens-by-The-Bay.webp" class="img-fluid rounded shadow-sm" alt="Gardens by the Bay Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Futuristic Gardens & Sky-High Views</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day visit to Gardens by the Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the Flower Dome — the world's largest glass greenhouse</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Experience the Cloud Forest — featuring the world's tallest indoor waterfall</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Marina Bay Sands Sky Park Observation Deck</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy 360-degree panoramic views of the Singapore skyline from 57 floors up</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Sentosa Island — Aquarium, Luge & Wings of Time
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/sentosa-island-tour.webp" class="img-fluid rounded shadow-sm" alt="Sentosa Island Tour Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Island Check-In & World-Class Attractions</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel and checkout from Singapore city hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Sentosa Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at Resorts World Sentosa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>One-way Mt. Faber Cable Car ride to Sentosa — scenic aerial views</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit S.E.A. Aquarium — 100,000+ marine animals across 22 themed zones</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Skyline Luge & Skyride — 3 thrilling rides down Sentosa's slopes</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Wings of Time — spectacular outdoor night show with water, laser & fire effects</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay at Resorts World Sentosa</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Universal Studios Singapore
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/universal.jpg" class="img-fluid rounded shadow-sm" alt="Universal Studios Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Full Day of Theme Park Thrills</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at Resorts World Sentosa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day at Universal Studios Singapore</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>24 rides and shows across 7 themed zones</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transformers: The Ride — 3D immersive battle experience</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Jurassic Park Rapids Adventure — thrilling water ride</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Battlestar Galactica — duelling rollercoasters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Madagascar: A Crate Adventure — family-friendly boat ride</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay at Resorts World Sentosa</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> Departure from Sentosa
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at Resorts World Sentosa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Checkout from Resorts World Sentosa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Singapore Changi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return home with wonderful memories of Singapore & Sentosa</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights accommodation in Singapore with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Nights at Resorts World Sentosa with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Airport-to-hotel transfer (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Inter-hotel transfer Singapore to Sentosa (private)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Sentosa-to-airport transfer (private)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Choice of 1 evening attraction: Night Safari / Bird Paradise / River Wonders</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Singapore City Tour (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gardens by the Bay (Flower Dome & Cloud Forest) entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Marina Bay Sands Sky Park Observation Deck entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mt. Faber one-way cable car to Sentosa</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Universal Studios Singapore admission</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>S.E.A. Aquarium entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Skyline Luge & Skyride (3 rides)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Wings of Time show entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All local taxes and service charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Singapore Tourist Visa</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Personal expenses (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified under Inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Any surcharges due to peak season, festivals, or special events</li>
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
                                <div class="accordion-body">UAE passport holders can obtain a visa for Singapore through the Singapore embassy or an approved travel agent. Ensure your passport has at least 6 months' validity from the date of travel.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Singapore?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Singapore take approximately 7 hours. Several airlines offer convenient non-stop and one-stop connections.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Singapore?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Singapore enjoys a tropical climate year-round with temperatures between 25-31 degrees Celsius. The driest months are February to April, making them ideal for outdoor activities. However, Singapore's attractions are largely indoor or covered, making it a great destination at any time of year.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Why stay at Resorts World Sentosa?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Staying on Sentosa gives you early access to Universal Studios, eliminates daily commute, and lets you enjoy the island's evening entertainment, dining, and beach at a relaxed pace. With 2 nights, you get the full Sentosa experience.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">What is included at Universal Studios?</button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Full-day admission to all 24 rides and shows across 7 themed zones. Popular attractions include Transformers: The Ride, Jurassic Park Rapids Adventure, Battlestar Galactica rollercoasters, and the Madagascar boat ride.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 4,135</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Grand Tour</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 Nights Singapore + 2 Nights Sentosa</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Universal Studios Full Day</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Cable Car, Aquarium & Wings of Time</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Gardens by the Bay & MBS Sky Park</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Best of Singapore with Sentosa 5N6D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
