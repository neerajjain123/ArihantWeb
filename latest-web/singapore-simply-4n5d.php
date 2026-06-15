<?php
// Page SEO Variables
$pageTitle = "Simply Singapore 4 Nights 5 Days Tour Package from Dubai | Arihant Travel";
$pageDescription = "Discover Singapore with our Simply Singapore 4 Nights / 5 Days package. Explore Merlion Park, Chinatown, Little India…";
$pageKeywords = "simply singapore package, singapore 4 nights 5 days, merlion park tour, sentosa island, universal studios singapore, singapore holiday from dubai, singapore travel uae";
$pageCanonical = "https://arihantlink.com/singapore-simply-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Simply Singapore";
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
  "name": "Simply Singapore - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/singapore/Singapore-Skyline.jpg",
    "https://arihantlink.com/img/singapore/Singapore-Merlion-Park.jpg",
    "https://arihantlink.com/img/singapore/Sentosa-island.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1350",
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
    "name": "Simply Singapore 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Singapore",
        "description": "Airport transfer to hotel. Optional Night Safari (additional cost)."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Singapore City Tour",
        "description": "Half-day city tour visiting Merlion Park, Fountain of Wealth, Chinatown, Little India, City Hall, and Parliament House. Afternoon free for shopping at Orchard Road."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Leisure Day / Optional Sentosa Island",
        "description": "Free day to explore on your own or optional Sentosa Island excursion (additional cost)."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Leisure Day / Optional Universal Studios",
        "description": "Free day or optional Universal Studios Singapore visit (additional cost)."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure",
        "description": "Last-minute shopping and transfer to airport."
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
        "text": "UAE nationals enjoy visa-free entry to Singapore for up to 30 days. Ensure your passport has at least 6 months\u0027 validity."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Singapore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights from Dubai to Singapore take approximately 7 hours."
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
                <p class="mb-0 fw-bold">Singapore</p>
                <small class="text-muted">Singapore</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-landmark fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Merlion Park & Chinatown</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-shopping-bag fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Free Days for Shopping</p>
                <small class="text-muted">Leisure</small>
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
                    <p class="text-primary fw-bold">A Budget-Friendly Introduction to the Lion City</p>
                    <p>Singapore, the Garden City of Southeast Asia, is a dazzling blend of futuristic architecture, rich cultural heritage, world-class shopping, and incredible street food. This budget-friendly 4-night package is perfect for independent explorers who want the flexibility of free days combined with a guided city tour as the foundation of their trip.</p>
                    <p>Your guided half-day city tour takes you through Singapore's iconic landmarks — from the world-famous Merlion Park and the stunning Fountain of Wealth to the vibrant streets of Chinatown and Little India. Pass by the historic City Hall and Parliament House before enjoying a free afternoon shopping along the legendary Orchard Road.</p>
                    <p>With two full leisure days at your disposal, you can choose your own adventure — whether it's the beaches and thrills of Sentosa Island, the movie magic of Universal Studios, the breathtaking Gardens by the Bay, or simply exploring Singapore's renowned hawker centres for some of the best food in Asia.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Singapore
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Singapore-Skyline.jpg" class="img-fluid rounded shadow-sm" alt="Singapore Skyline Arrival">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Singapore Changi International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Seat-in-coach transfer to your hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and rest of the day at leisure</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: Night Safari at Singapore Zoo (additional cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the nearby area or relax at the hotel</li>
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
                                            <h6 class="fw-bold mb-3">Iconic Landmarks & Cultural Districts</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day guided city tour (seat-in-coach with English-speaking guide)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the iconic Merlion Park — Singapore's most famous landmark overlooking Marina Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the Fountain of Wealth at Suntec City — one of the world's largest fountains</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Chinatown — vibrant streets filled with temples, markets, and traditional shops</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Discover Little India — colourful district with spice shops, flower garlands, and authentic cuisine</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive past City Hall and Parliament House — Singapore's colonial heritage landmarks</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon free for shopping at Orchard Road — Singapore's premier shopping boulevard</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Leisure Day / Optional Sentosa Island
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/Sentosa-island.jpg" class="img-fluid rounded shadow-sm" alt="Sentosa Island Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Explore at Your Own Pace</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day at leisure to explore Singapore on your own</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: Sentosa Island excursion — beaches, S.E.A. Aquarium, cable car rides (additional cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: Visit Gardens by the Bay and Marina Bay Sands observation deck</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Singapore's famous hawker centres for authentic local cuisine</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Leisure Day / Optional Universal Studios
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/singapore/universal.jpg" class="img-fluid rounded shadow-sm" alt="Universal Studios Singapore">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Thrills & Entertainment</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day at leisure — your choice of activities</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: Universal Studios Singapore — thrilling rides and attractions (additional cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: Visit the Singapore Flyer, Clarke Quay, or Bugis Street markets</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue shopping or sightseeing at your own pace</li>
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
                                            <img src="img/singapore/Gardens-by-The-Bay.webp" class="img-fluid rounded shadow-sm" alt="Gardens by the Bay Singapore Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Last-minute shopping or sightseeing</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out and seat-in-coach transfer to Changi Airport</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 Nights' accommodation in Singapore with daily breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return airport transfers (seat-in-coach basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Singapore City Tour (seat-in-coach with English-speaking guide)</li>
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
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Optional tours and attractions not listed in inclusions</li>
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
                                <div class="accordion-body">UAE nationals enjoy visa-free entry to Singapore for up to 30 days. Ensure your passport has at least 6 months' validity from the date of entry.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Singapore?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Singapore take approximately 7 hours. Several airlines offer daily non-stop services on this popular route.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Singapore?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Singapore is a year-round tropical destination with warm weather throughout the year. December to January is the peak season with festive celebrations. February to April tends to be the driest period, making it ideal for outdoor activities.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What can I do on the free days?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Singapore offers endless possibilities on your free days. Visit Sentosa Island for beaches and the S.E.A. Aquarium, experience the thrills of Universal Studios Singapore, marvel at the Supertree Grove at Gardens by the Bay, shop along Orchard Road, visit the iconic Marina Bay Sands, or explore hawker centres like Maxwell Food Centre and Lau Pa Sat for some of the best local food in Asia.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,350</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Budget Friendly</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4 Nights in Singapore</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>City Tour with Guide</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Free Days for Sentosa & USS</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Airport Transfers Included</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Simply Singapore 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
