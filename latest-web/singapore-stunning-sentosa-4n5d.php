<?php
// Page SEO Variables
$pageTitle = "Stunning Singapore with Sentosa 4 Nights 5 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience Singapore and Sentosa with our Stunning Singapore 4 Nights / 5 Days package. Enjoy Gardens by the Bay, Marina Bay Sands Sky Park, S.E.A.";
$pageKeywords = "stunning singapore sentosa package, singapore 4 nights 5 days, gardens by the bay tour, marina bay sands sky park, sea aquarium sentosa, night safari singapore, singapore holiday from dubai, singapore travel uae";
$pageCanonical = "https://arihantlink.com/singapore-stunning-sentosa-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Stunning Singapore with Sentosa";
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
  "name": "Stunning Singapore with Sentosa - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/singapore/Gardens-by-The-Bay.webp",
    "https://arihantlink.com/img/singapore/Singapore-Merlion-Park.jpg",
    "https://arihantlink.com/img/singapore/sentosa-island-tour.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2870",
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
    "name": "Stunning Singapore with Sentosa 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Evening Wildlife",
        "description": "Airport transfer. Evening choice of Night Safari (tram ride), Bird Paradise, or River Wonders (boat ride)."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Singapore City Tour",
        "description": "Half-day panoramic city tour visiting Merlion Park, Fountain of Wealth, Chinatown, Little India, City Hall, and Parliament House. Afternoon free for shopping."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Gardens by the Bay & Marina Bay Sands",
        "description": "Half-day Gardens by the Bay with Flower Dome and Cloud Forest conservatories. Marina Bay Sands Sky Park Observation Deck with panoramic views from 57 floors up."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Sentosa Island",
        "description": "Transfer to Sentosa, check-in at Resorts World Sentosa. S.E.A. Aquarium, Skyline Luge & Skyride (3 rides), Wings of Time evening show."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure from Sentosa",
        "description": "Breakfast at Resorts World Sentosa, checkout, private transfer to Changi Airport."
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
        "text": "UAE passport holders require a visa to enter Singapore. You can apply for an e-Visa through the Singapore Immigration & Checkpoints Authority (ICA) or through an authorized travel agent. Ensure your passport has at least 6 months validity."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights from Dubai to Singapore take approximately 7 to 7.5 hours. Several airlines including Emirates and Singapore Airlines offer daily direct flights."
      }
    },
    {
      "@type": "Question",
      "name": "What is Resorts World Sentosa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Resorts World Sentosa is a world-class integrated resort on Sentosa Island featuring hotels, Universal Studios Singapore, S.E.A. Aquarium, Adventure Cove Waterpark, dining, and entertainment. Staying overnight lets you enjoy Sentosa at a relaxed pace."
      }
    },
    {
      "@type": "Question",
      "name": "What is the S.E.A. Aquarium?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The S.E.A. Aquarium is one of the world largest aquariums housing over 100,000 marine animals from 1,000+ species across 22 themed zones, featuring a massive Open Ocean gallery."
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
                <i class="fas fa-hotel fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">1 Night at Resorts World Sentosa</p>
                <small class="text-muted">Split Stay</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-leaf fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Gardens by the Bay & MBS Sky Park</p>
                <small class="text-muted">Highlights</small>
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
                    <p class="text-primary fw-bold">City Culture, Sky-High Views & Sentosa Island Overnight</p>
                    <p>Experience the best of Singapore with a unique split-stay itinerary — 3 nights in the heart of Singapore city and 1 night at the world-class Resorts World Sentosa. This premium package combines iconic city culture with an unforgettable island overnight, giving you the complete Singapore experience.</p>
                    <p>Explore the cultural tapestry of Merlion Park, Chinatown, and Little India on a panoramic city tour. Marvel at the futuristic Supertrees and stunning conservatories at Gardens by the Bay, then take in breathtaking panoramic views from 57 floors up at the Marina Bay Sands Sky Park Observation Deck.</p>
                    <p>Cross over to Sentosa Island for an overnight adventure — discover over 100,000 marine animals at the S.E.A. Aquarium, race down the Skyline Luge, soar on the Skyride, and cap your evening with the spectacular Wings of Time light and water show. Premium feel without the premium price tag.</p>
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
                                            <img src="img/singapore/night-safari-tickets-with-tram-ride.avif" class="img-fluid rounded shadow-sm" alt="Singapore Night Safari">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Welcome to Singapore & Evening Wildlife Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Singapore Changi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to your hotel (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and freshen up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Choice of 1 wildlife attraction —</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-angle-right text-primary me-2"></i><strong>Night Safari</strong> — the world's first nocturnal zoo with tram ride</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-angle-right text-primary me-2"></i><strong>Bird Paradise</strong> — Asia's largest bird park</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-angle-right text-primary me-2"></i><strong>River Wonders</strong> — river-themed wildlife park with boat ride</li>
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
                                            <h6 class="fw-bold mb-3">Panoramic City Highlights & Free Shopping Afternoon</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day panoramic Singapore City Tour (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Merlion Park — Singapore's iconic landmark overlooking Marina Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the Fountain of Wealth at Suntec City</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive through Chinatown, Little India, City Hall, and Parliament House</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon free — explore Orchard Road or Bugis Street for shopping</li>
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
                                            <h6 class="fw-bold mb-3">Futuristic Gardens & Sky-High Panoramic Views</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day visit to Gardens by the Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the Flower Dome — the world's largest glass greenhouse with flora from 5 continents</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Discover the Cloud Forest — a 35-metre indoor waterfall and lush tropical mountain garden</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Marina Bay Sands Sky Park Observation Deck</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy panoramic 360-degree views of the Singapore skyline from 57 floors up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Rest of the evening at leisure</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Sentosa Island (Overnight at Resorts World Sentosa)
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/sentosa-island-tour.webp" class="img-fluid rounded shadow-sm" alt="Sentosa Island Tour Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Aquarium, Luge Rides & Wings of Time Evening Show</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel and checkout</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer from Singapore city hotel to Sentosa Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at Resorts World Sentosa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit S.E.A. Aquarium — home to over 100,000 marine animals from 1,000+ species</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Skyline Luge & Skyride — 3 thrilling rides down scenic tracks with a chairlift back up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Wings of Time show (7:40 PM) — spectacular light, water, and fireworks show</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Departure from Sentosa
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at Resorts World Sentosa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Checkout and leisure time until transfer</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer from Sentosa to Singapore Changi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return home with wonderful memories of the Lion City and Sentosa Island</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>1 Night at Resorts World Sentosa with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Airport-to-hotel transfer (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Inter-hotel transfer Singapore to Sentosa (private)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Sentosa-to-airport transfer (private)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Choice of 1 evening attraction: Night Safari / Bird Paradise / River Wonders</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Singapore City Tour (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gardens by the Bay (Flower Dome & Cloud Forest) entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Marina Bay Sands Sky Park Observation Deck entrance</li>
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
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Peak/festival surcharges</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Early check-in or late check-out fees</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Universal Studios Singapore (optional add-on)</li>
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
                                <div class="accordion-body">UAE passport holders require a visa to enter Singapore. You can apply for an e-Visa through the Singapore Immigration & Checkpoints Authority (ICA) or through an authorized travel agent. Ensure your passport has at least 6 months' validity.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Singapore?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Singapore take approximately 7 to 7.5 hours. Several airlines including Emirates and Singapore Airlines offer daily direct flights.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Singapore?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Singapore enjoys a tropical climate year-round with temperatures between 25-31 degrees Celsius. The drier months of February to April are ideal for sightseeing. However, Singapore is a great destination any time of year since most attractions are indoors or covered.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is Resorts World Sentosa?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Resorts World Sentosa is a world-class integrated resort on Sentosa Island featuring hotels, Universal Studios Singapore, S.E.A. Aquarium, Adventure Cove Waterpark, dining, and entertainment. Staying overnight lets you enjoy Sentosa at a relaxed pace.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">What is the S.E.A. Aquarium?</button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The S.E.A. Aquarium is one of the world's largest aquariums housing over 100,000 marine animals from 1,000+ species across 22 themed zones. The highlight is the massive Open Ocean gallery with a floor-to-ceiling viewing panel that immerses you in the underwater world.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,870</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Premium</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 Nights Singapore + 1 Night Sentosa</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Gardens by the Bay & MBS Sky Park</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>S.E.A. Aquarium & Wings of Time</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Night Safari or Bird Paradise</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Stunning Singapore with Sentosa 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
