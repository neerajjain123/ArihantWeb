<?php
// Page SEO Variables
$pageTitle = "Singapore Fully Loaded 4 Nights 5 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Discover Singapore with our Fully Loaded 4 Nights / 5 Days package. Explore Universal Studios, Sentosa Island, Singapore Flyer, Gardens by the Bay…";
$pageKeywords = "singapore fully loaded package, singapore 4 nights 5 days, universal studios singapore, sentosa island tour, singapore flyer, gardens by the bay, singapore holiday from dubai, singapore travel uae";
$pageCanonical = "https://arihantlink.com/singapore-fully-loaded-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Singapore Fully Loaded";
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
  "name": "Singapore Fully Loaded - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/singapore/universal.jpg",
    "https://arihantlink.com/img/singapore/sentosa-island-tour.webp",
    "https://arihantlink.com/img/singapore/Gardens-by-The-Bay.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2820",
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
    "name": "Singapore Fully Loaded 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Evening Wildlife",
        "description": "Airport transfer. Evening: choice of Night Safari (tram ride), Bird Paradise, or River Wonders (boat ride)."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Universal Studios Singapore",
        "description": "Full day at Universal Studios — 24 rides and shows across 7 themed zones including Transformers, Jurassic Park, and Battlestar Galactica."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Sentosa Island",
        "description": "Cable car from Faber Peak, S.E.A. Aquarium, Skyline Luge & Skyride, and Wings of Time night show."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - City Tour, Singapore Flyer & Gardens",
        "description": "Half-day city tour, Singapore Flyer observation wheel, and Gardens by the Bay with Flower Dome & Cloud Forest."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure",
        "description": "Last-minute shopping and airport transfer."
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
        "text": "UAE passport holders require an Electronic Travel Authorisation (ETA) to enter Singapore. The ETA can be applied for online before travel and allows a stay of up to 30 days."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights from Dubai to Singapore take approximately 7 to 7.5 hours. Several airlines operate daily direct flights on this route."
      }
    },
    {
      "@type": "Question",
      "name": "What is Universal Studios Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Southeast Asia\u2019s only Universal Studios theme park located on Sentosa Island. Features 24 rides and shows across 7 themed zones including Transformers, Jurassic Park, Battlestar Galactica, and Madagascar."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Singapore Flyer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Asia\u2019s tallest observation wheel standing 165 metres tall. A 30-minute rotation offers panoramic views of Marina Bay, the city skyline, and even parts of Malaysia and Indonesia on clear days."
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
                <i class="fas fa-film fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Universal Studios</p>
                <small class="text-muted">Theme Park</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-eye fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Singapore Flyer</p>
                <small class="text-muted">Observation Wheel</small>
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
                    <p class="text-primary fw-bold">Universal Studios, Sentosa, Flyer & Gardens</p>
                    <p>The most comprehensive Singapore city package — everything packed into 4 nights. Universal Studios, Sentosa with Luge & Skyride, Singapore Flyer, Gardens by the Bay, and a wildlife experience. Nothing is left out.</p>
                    <p>From the adrenaline of Universal Studios' 24 rides across 7 themed zones to the breathtaking views atop the Singapore Flyer, and from the futuristic Supertrees of Gardens by the Bay to the thrilling Luge & Skyride on Sentosa Island — this package delivers the complete Singapore experience.</p>
                    <p>With world-class attractions, stunning architecture, and incredible cuisine, Singapore is the perfect short-haul getaway from Dubai.</p>
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
                                            <h6 class="fw-bold mb-3">Welcome to the Lion City</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Singapore Changi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Seat-in-coach transfer to your hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and freshen up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: choice of one wildlife attraction</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Option 1: Night Safari — the world's first nocturnal zoo with guided tram ride</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Option 2: Bird Paradise — Asia's largest bird park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Option 3: River Wonders — river-themed wildlife park with boat ride</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Universal Studios Singapore
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/universal.jpg" class="img-fluid rounded shadow-sm" alt="Universal Studios Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Southeast Asia's Only Universal Theme Park</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day at Universal Studios Singapore on Sentosa Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Experience 24 rides and shows across 7 themed zones</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transformers: The Ride — 3D ultra immersive experience</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Jurassic Park Rapids Adventure — a thrilling river raft ride</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Battlestar Galactica — duelling roller coasters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy themed dining, live entertainment, and character meet-and-greets</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Sentosa Island
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/sentosa-island-tour.webp" class="img-fluid rounded shadow-sm" alt="Sentosa Island Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Cable Car, Aquarium, Luge & Wings of Time</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>One-way cable car ride from Faber Peak to Sentosa Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit S.E.A. Aquarium — one of the world's largest aquariums with 22 themed zones</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Skyline Luge & Skyride — 3 thrilling rides down the hillside track</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time to explore Sentosa's beaches and attractions</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Wings of Time — spectacular outdoor night show at 7:30 PM</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> City Tour, Singapore Flyer & Gardens
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Gardens-by-The-Bay.webp" class="img-fluid rounded shadow-sm" alt="Gardens by the Bay Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">City Landmarks, Observation Wheel & Futuristic Gardens</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Morning: half-day Singapore city tour (seat-in-coach)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Merlion Park — Singapore's iconic waterfront landmark</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See Fountain of Wealth, Chinatown, Little India, City Hall & Parliament House</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon: Singapore Flyer — Asia's tallest observation wheel at 165 metres</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>30-minute rotation with panoramic views of Marina Bay and the city skyline</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Gardens by the Bay — explore Flower Dome & Cloud Forest conservatories</li>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Last-minute shopping or leisure time until checkout</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 Nights accommodation with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return airport transfers (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Choice of 1 evening attraction: Night Safari / Bird Paradise / River Wonders</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Universal Studios Singapore admission</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Singapore City Tour (seat-in-coach)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Sentosa Island tour with one-way cable car</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>S.E.A. Aquarium entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Skyline Luge & Skyride (3 rides)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Wings of Time show entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Singapore Flyer admission</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gardens by the Bay (Flower Dome & Cloud Forest) entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All local taxes and service charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Singapore Tourist Visa</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Personal expenses</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified under Inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Any surcharges due to peak season or festivals</li>
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
                                <div class="accordion-body">UAE passport holders require an Electronic Travel Authorisation (ETA) to enter Singapore. The ETA can be applied for online before travel and allows a stay of up to 30 days. Ensure your passport has at least 6 months' validity.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Singapore?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Singapore take approximately 7 to 7.5 hours. Several airlines operate daily direct flights on this popular route.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Singapore?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Singapore enjoys a tropical climate year-round with temperatures between 25-31 degrees Celsius. The drier months of February to April are popular, but Singapore's mostly indoor attractions make it an excellent year-round destination.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is Universal Studios Singapore?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Southeast Asia's only Universal Studios theme park located on Sentosa Island. Features 24 rides and shows across 7 themed zones including Transformers, Jurassic Park, Battlestar Galactica, and Madagascar.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">What is the Singapore Flyer?</button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Asia's tallest observation wheel standing 165 metres tall. A 30-minute rotation offers panoramic views of Marina Bay, the city skyline, and even parts of Malaysia and Indonesia on clear days.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,820</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Best Seller</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4 Nights in Singapore</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Universal Studios Full Day</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Singapore Flyer + Gardens by the Bay</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Sentosa Luge & Wings of Time</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Singapore Fully Loaded 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
