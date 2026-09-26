<?php
// Page SEO Variables
$pageTitle = "Spectacular Phuket & Krabi 5 Nights 6 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Discover the best of Phuket and Krabi with our Spectacular 5 Nights / 6 Days package. Emerald Pool, Hot Springs, Phi Phi Islands by speedboat…";
$pageKeywords = "phuket krabi package, thailand 5 nights 6 days, emerald pool krabi, phi phi island speedboat, 7 island tour, phuket city tour, big buddha phuket, maya bay, thailand holiday from dubai";
$pageCanonical = "https://arihantlink.com/thailand-spectacular-phuket-krabi-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Spectacular Phuket & Krabi";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/karabi-beach.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Spectacular Phuket & Krabi - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/thailand/karabi-beach.jpg",
    "https://arihantlink.com/img/thailand/Phuket-beach.jpg",
    "https://arihantlink.com/img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1730",
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
    "name": "Spectacular Phuket & Krabi 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Krabi",
        "description": "Arrive at Phuket Airport, transfer to Krabi. Hotel check-in. Free time."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Krabi 7-Island Tour",
        "description": "Full-day longtail boat tour visiting Koh Yawasam, Koh Kai, Koh Tub, Koh Tan Ming. Sunset buffet on Koh Poda. Bioluminescent plankton swimming."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Emerald Pool, Hot Springs & Transfer to Phuket",
        "description": "Half-day Emerald Pool and Hot Spring Waterfall tour. Afternoon transfer to Phuket."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Phi Phi Islands by Speedboat",
        "description": "Full-day speedboat tour to Maya Bay, Viking Cave, Pileh Bay lagoon, Monkey Island. Snorkeling. Lunch at Khai Nok Island."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Phuket City Tour",
        "description": "Half-day tour via Patong, Karon, Kata. Big Buddha, Wat Chalong, Cashew Nut Factory, Phuket Old Town."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure",
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
      "name": "What is the Emerald Pool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Emerald Pool is a natural freshwater pool located in the Khao Phra Bang Khram Nature Reserve in Krabi. The water has a stunning mineral-green colour due to natural minerals, and it is surrounded by lush tropical jungle, making it a truly magical swimming experience."
      }
    },
    {
      "@type": "Question",
      "name": "How is this different from the Amazing Phuket package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This Spectacular Phuket & Krabi package adds Krabi to your itinerary with unique experiences like the 7-Island Tour with bioluminescent plankton swimming, the Emerald Pool, and Hot Spring Waterfall — all of which are not included in a standard Phuket-only package."
      }
    },
    {
      "@type": "Question",
      "name": "Is the speedboat to Phi Phi Islands safe?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the speedboats used for the Phi Phi Islands tour are modern vessels equipped with all necessary safety equipment including life jackets and first aid kits. They are operated by experienced licensed captains who follow strict safety protocols."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Phuket and Krabi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best time to visit Phuket and Krabi is during the dry season from November to April, when you can expect sunny skies, calm seas, and ideal conditions for island tours, beach activities, and water sports."
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
                <p class="mb-0 fw-bold">Krabi & Phuket</p>
                <small class="text-muted">Thailand</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Emerald Pool & Phi Phi</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Island Tours & Hot Springs</p>
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
                    <p class="text-primary fw-bold">Krabi's Hidden Gems Meet Phuket's Iconic Shores</p>
                    <p>This spectacular duo-escape combines the natural wonders of Krabi with the vibrant energy of Phuket in one unforgettable 5-night adventure. From hidden jungle pools to world-famous island beaches, this package delivers the very best of Thailand's Andaman coast in a perfectly balanced itinerary of adventure and relaxation.</p>
                    <p>Begin in Krabi with a breathtaking 7-Island Tour by longtail boat, complete with a sunset buffet dinner on Koh Poda and a magical night swim with naturally glowing bioluminescent plankton. Explore the stunning Emerald Pool, a mineral-green freshwater pool hidden in the Khao Phra Bang Khram Nature Reserve, and soak in the soothing Hot Spring Waterfall. Then transfer to Phuket for a thrilling speedboat day to the Phi Phi Islands, visiting Maya Bay, Viking Cave, and Pileh Bay lagoon. Cap it off with a city tour featuring the iconic Big Buddha, Wat Chalong, and the charming Sino-Portuguese architecture of Phuket Old Town.</p>
                    <p>With private transfers, daily breakfast, and a mix of shared excursions and free time, this package is ideal for travellers who want the best of both Krabi and Phuket in a single trip.</p>
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
                                            <img src="img/thailand/karabi-beach (2).jpg" class="img-fluid rounded shadow-sm" alt="Arrival in Krabi">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Welcome to Krabi's Andaman Paradise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Phuket International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to Krabi</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Krabi hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time to relax and explore at your own pace</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Stroll along Ao Nang Beach or visit the local night market</li>
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
                                            <img src="img/thailand/karabi-beach.jpg" class="img-fluid rounded shadow-sm" alt="Krabi 7-Island Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Sunset Dinner & Bioluminescent Plankton</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day longtail boat tour visiting seven stunning islands</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Koh Yawasam, Koh Kai (Chicken Rock), Koh Tub, and Koh Tan Ming</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Emerald Pool, Hot Springs & Transfer to Phuket
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Chiang-Mai-Thailand.jpg" class="img-fluid rounded shadow-sm" alt="Emerald Pool and Hot Springs Krabi">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Jungle Pools, Natural Hot Springs & Scenic Transfer</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from Krabi hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day tour to the Emerald Pool — a stunning mineral-green freshwater pool in the Khao Phra Bang Khram Nature Reserve</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the Hot Spring Waterfall — natural warm waters flowing through the jungle</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon transfer from Krabi to Phuket</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Phuket hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Phuket</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Phi Phi Islands by Speedboat
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg" class="img-fluid rounded shadow-sm" alt="Phi Phi Islands by Speedboat">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Maya Bay, Viking Cave & Turquoise Lagoons</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day speedboat tour to the Phi Phi Islands</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Maya Bay — the world-famous beach from the movie "The Beach"</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Viking Cave and the stunning Pileh Bay lagoon</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Monkey Island and enjoy snorkelling in crystal-clear waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch at Khai Nok Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Phuket in the evening</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Phuket</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Phuket City Tour
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Phuket-beach.jpg" class="img-fluid rounded shadow-sm" alt="Phuket City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Big Buddha, Temples & Old Town Charm</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Phuket City Tour with scenic drive via Patong, Karon, and Kata beaches</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Big Buddha — the iconic 45-metre marble statue atop Nakkerd Mountain</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Wat Chalong — Phuket's most important and beautiful temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stop at the Cashew Nut Factory for local treats and souvenirs</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Phuket Old Town — charming Sino-Portuguese architecture and street art</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time in the afternoon</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> Departure
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with wonderful memories of Krabi and Phuket</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Nights' accommodation in Krabi + 3 Nights' accommodation in Phuket</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return private airport transfers (Phuket Airport – Krabi & Phuket – Phuket Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Emerald Pool & Hot Spring Waterfall tour (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Krabi 7-Island Tour with bioluminescent plankton swimming & sunset dinner (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Phuket City Tour with Big Buddha (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Phi Phi Island speedboat tour with Maya Bay & lunch included</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All transfers private / tours on shared basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Air-conditioned vehicles during all tours and transfers</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa charges</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>National park fees (approximately THB 400 per person)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Non-refundable components as per hotel and tour policies</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is the Emerald Pool?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Emerald Pool is a natural freshwater pool located deep in the Khao Phra Bang Khram Nature Reserve in Krabi. The water has a stunning mineral-green colour created by natural minerals seeping into the pool from the surrounding jungle. It is a magical swimming experience surrounded by lush tropical rainforest.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How is this different from the Amazing Phuket package?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">This Spectacular Phuket & Krabi package adds Krabi to your itinerary, giving you two destinations instead of one. You get unique experiences exclusive to Krabi such as the 7-Island Tour with bioluminescent plankton swimming, the Emerald Pool, and the Hot Spring Waterfall — all of which are not included in a standard Phuket-only package.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Is the speedboat to Phi Phi Islands safe?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, the speedboats used for the Phi Phi Islands tour are modern, well-maintained vessels equipped with all necessary safety equipment including life jackets and first aid kits. They are operated by experienced licensed captains who follow strict safety protocols for a comfortable and secure journey.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is the best time to visit Phuket and Krabi?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The best time to visit Phuket and Krabi is during the dry season from November to April. During these months you can expect sunny skies, calm seas, and ideal conditions for island tours, beach activities, snorkelling, and water sports. This is peak season so early booking is recommended.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,730</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Duo Escape</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>2N Krabi + 3N Phuket</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Emerald Pool & Hot Springs</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Phi Phi by speedboat</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>7-Island sunset tour</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Spectacular Phuket %26 Krabi 5N6D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
