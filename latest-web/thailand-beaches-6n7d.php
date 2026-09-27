<?php
// Page SEO Variables
$pageTitle = "Beaches of Thailand 6 Nights 7 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Explore Thailand's most stunning beaches with our 6 Nights / 7 Days island-hopping package. Krabi 7-Island Tour, Phi Phi Island…";
$pageKeywords = "beaches of thailand package, thailand 6 nights 7 days, krabi phi phi phuket tour, 7 island tour krabi, james bond island, phi phi island, bioluminescent plankton, thailand beach holiday from dubai";
$pageCanonical = "https://arihantlink.com/thailand-beaches-6n7d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Beaches of Thailand";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/Koh-Phi-Phi-island.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Beaches of Thailand - 6 Nights / 7 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/thailand/Koh-Phi-Phi-island.jpg",
    "https://arihantlink.com/img/thailand/karabi-beach.jpg",
    "https://arihantlink.com/img/thailand/Phuket-beach.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1570",
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
    "name": "Beaches of Thailand 6N7D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Krabi",
        "description": "Arrive at Phuket Airport, transfer to Krabi. Hotel check-in. Leisure at beaches and cliffs."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Krabi 7-Island Tour",
        "description": "Full-day longtail boat tour visiting Koh Yawasam, Chicken Rock, Koh Tub, Koh Tan Ming. Sunset buffet dinner on Koh Poda. Bioluminescent plankton swimming."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Ferry to Phi Phi Island",
        "description": "Checkout and ferry to Phi Phi Island (42 km). Check-in and free time to explore."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Phi Phi at Leisure",
        "description": "Free day on Phi Phi Island — beaches, Tonsai Beach nightlife, Maya Bay."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Ferry to Phuket",
        "description": "Ferry to Phuket. Free time exploring beaches."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - James Bond Island Tour",
        "description": "Full-day James Bond Island by big boat — Tapu Island, Phang Nga Bay. Lunch included."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Day 7 - Departure",
        "description": "Breakfast and airport transfer for departure."
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
      "name": "What is the Krabi 7-Island Tour?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Krabi 7-Island Tour is a full-day longtail boat excursion visiting seven stunning islands including Koh Yawasam, Chicken Rock (Koh Kai), Koh Tub, and Koh Tan Ming. It includes a sunset buffet dinner on Koh Poda and a magical night swim with bioluminescent plankton."
      }
    },
    {
      "@type": "Question",
      "name": "What is bioluminescent plankton swimming?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bioluminescent plankton swimming is a magical night-time experience where you swim in waters lit up by naturally glowing plankton. As you move through the water, the plankton emit a mesmerising blue-green light, creating an unforgettable natural phenomenon."
      }
    },
    {
      "@type": "Question",
      "name": "What is James Bond Island?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "James Bond Island, officially known as Khao Phing Kan, is a famous limestone rock formation in Phang Nga Bay. It gained worldwide fame after appearing in the James Bond film The Man with the Golden Gun. The iconic Tapu Island needle rock is the most photographed landmark."
      }
    },
    {
      "@type": "Question",
      "name": "Are the ferries between islands comfortable?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the ferries between Krabi, Phi Phi Island, and Phuket are modern and comfortable. Journey times are typically 1 to 2 hours depending on the route, and the ferries offer comfortable seating with scenic views of the Andaman Sea."
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
                <p class="mb-0 fw-bold">6 Nights / 7 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Krabi, Phi Phi & Phuket</p>
                <small class="text-muted">Thailand</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">7-Island Tour</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Island Hopping</p>
                <small class="text-muted">Adventure</small>
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
                    <p class="text-primary fw-bold">Three Destinations, Seven Days of Island Paradise</p>
                    <p>Thailand's Andaman coast is home to some of the most breathtaking beaches and islands on earth, and this 6-night island-hopping adventure takes you through the very best of them. From the dramatic limestone cliffs of Krabi to the legendary shores of Phi Phi Island and the vibrant beaches of Phuket, every day brings a new slice of tropical paradise.</p>
                    <p>Begin in Krabi with a spectacular 7-Island Tour by longtail boat, complete with a sunset buffet dinner on Koh Poda and a magical night swim with bioluminescent plankton. Ferry across to Phi Phi Island for two nights of laid-back beach bliss, exploring Maya Bay and the vibrant Tonsai Beach nightlife. Then sail on to Phuket for the iconic James Bond Island tour through the stunning limestone formations of Phang Nga Bay.</p>
                    <p>With comfortable ferry transfers, private airport transport, daily breakfast, and a mix of guided excursions and free time, this package is perfect for beach lovers, island hoppers, and anyone seeking Thailand's most stunning coastal scenery.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Krabi
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/karabi-beach.jpg" class="img-fluid rounded shadow-sm" alt="Arrival in Krabi">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Welcome to Thailand's Andaman Coast</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Phuket International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to Krabi</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Krabi hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Leisure time to explore the stunning beaches and dramatic limestone cliffs</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stroll along Ao Nang Beach or explore the local markets</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Krabi</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Krabi 7-Island Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/karabi-beach (2).jpg" class="img-fluid rounded shadow-sm" alt="Krabi 7-Island Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Sunset Dinner & Bioluminescent Plankton</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day longtail boat tour visiting seven stunning islands</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Koh Yawasam, Chicken Rock (Koh Kai), Koh Tub, and Koh Tan Ming</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Snorkelling and swimming in crystal-clear Andaman waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Sunset buffet dinner on the beautiful shores of Koh Poda</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Magical night swim with bioluminescent plankton — glowing waters</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Krabi</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Ferry to Phi Phi Island
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg" class="img-fluid rounded shadow-sm" alt="Ferry to Phi Phi Island">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Scenic Ferry to Paradise Island</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from Krabi hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Scenic ferry ride to Phi Phi Island (42 km across the Andaman Sea)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Phi Phi Island hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time to explore the island's stunning beaches and turquoise lagoons</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay on Phi Phi Island</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Phi Phi at Leisure
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-Phi-Phi-island.jpg" class="img-fluid rounded shadow-sm" alt="Phi Phi Island Leisure Day">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Explore Phi Phi Island at Your Own Pace</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day free to explore Phi Phi Island independently</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Maya Bay — the world-famous beach from the movie "The Beach"</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Snorkelling and kayaking in the crystal-clear waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Viewpoint hike for panoramic views of the island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Tonsai Beach — vibrant nightlife and beachside dining</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay on Phi Phi Island</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Ferry to Phuket
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Phuket-beach.jpg" class="img-fluid rounded shadow-sm" alt="Ferry to Phuket">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Sail to Phuket — Thailand's Largest Island</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from Phi Phi Island hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Ferry ride from Phi Phi to Phuket</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Phuket hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time to explore Phuket's famous beaches — Patong, Karon, or Kata</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Bangla Road nightlife or beachside dining</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Phuket</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> James Bond Island Tour
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Floating-Market-bangkok.jpg" class="img-fluid rounded shadow-sm" alt="James Bond Island Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Iconic Limestone Formations of Phang Nga Bay</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day James Bond Island tour by big boat</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the iconic Tapu Island — the famous needle rock from the James Bond film</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cruise through the stunning Phang Nga Bay with towering limestone karsts</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included during the tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Phuket hotel in the evening</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Phuket</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 7 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day7">
                                    <span class="badge bg-primary me-3">Day 7</span> Departure
                                </button>
                            </h2>
                            <div id="day7" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Thailand-temple.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Phuket">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Phuket International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with wonderful memories of Thailand's stunning beaches</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>6 Nights' accommodation (2N Krabi + 2N Phi Phi Island + 2N Phuket)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private airport transfers (Phuket Airport – Krabi & Phuket – Phuket Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Ferry tickets (Krabi – Phi Phi Island, Phi Phi Island – Phuket)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Krabi 7-Island Tour with sunset dinner & bioluminescent plankton swimming (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day James Bond Island tour with lunch (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Air-conditioned vehicles during all tours and transfers</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa charges</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>National park fees (approximately THB 400 per person)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Early check-in or late check-out fees</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Minimum 2 travellers required</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified under Inclusions</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is the Krabi 7-Island Tour?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Krabi 7-Island Tour is a spectacular full-day longtail boat excursion visiting seven stunning islands including Koh Yawasam, Chicken Rock (Koh Kai), Koh Tub, and Koh Tan Ming. The highlight is a sunset buffet dinner on the beautiful shores of Koh Poda, followed by a magical night swim with naturally glowing bioluminescent plankton.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What is bioluminescent plankton swimming?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Bioluminescent plankton swimming is one of nature's most magical experiences. As you swim in the dark waters, the plankton light up with a mesmerising blue-green glow every time the water is disturbed. It creates an unforgettable natural light show that is truly a once-in-a-lifetime experience.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is James Bond Island?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">James Bond Island, officially Khao Phing Kan, is a world-famous limestone rock formation in the spectacular Phang Nga Bay. It earned its nickname after featuring in the James Bond film "The Man with the Golden Gun." The iconic Tapu Island needle rock rising from the emerald-green water is one of Thailand's most photographed landmarks.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Are the ferries between islands comfortable?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, the ferries operating between Krabi, Phi Phi Island, and Phuket are modern, comfortable vessels with indoor seating and scenic outdoor decks. Journey times range from 1 to 2 hours depending on the route, with beautiful views of the Andaman Sea and its islands along the way.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,570</h2>
                            <span class="text-muted">Per Person (6N/7D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Island Hopper</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 destinations in 7 days</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Krabi 7-Island sunset tour</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>2 nights on Phi Phi Island</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>James Bond Island excursion</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Beaches of Thailand 6N7D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
