<?php
// Page SEO Variables
$pageTitle = "Pearls of Thailand 6 Nights 7 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Discover the Pearls of Thailand with our 6 Nights / 7 Days Krabi and Phuket adventure. Elephant trekking, Phi Phi Island, James Bond Island…";
$pageKeywords = "pearls of thailand package, krabi phuket tour, 6 nights 7 days thailand, phi phi island tour, james bond island, elephant trekking krabi, thailand holiday from dubai, krabi 7 island tour";
$pageCanonical = "https://arihantlink.com/thailand-pearls-6n7d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Pearls of Thailand";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Pearls of Thailand - 6 Nights / 7 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Adventure Seekers"],
  "image": [
    "https://arihantlink.com/img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg",
    "https://arihantlink.com/img/thailand/Koh-Phi-Phi-island.jpg",
    "https://arihantlink.com/img/thailand/karabi-beach.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2120",
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
    "name": "Pearls of Thailand 6N7D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Krabi",
        "description": "Arrive at Phuket Airport, transfer to Krabi. Hotel check-in and leisure time at beaches and cliffs."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Emerald Pool, Hot Springs & Elephant Trekking",
        "description": "Jungle exploration including Emerald Pool swim, Hot Spring Waterfall, Tiger Cave Temple, and 30-minute Elephant Trekking with baby elephants. Lunch included."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Krabi 7-Island Tour",
        "description": "Full-day longtail boat tour visiting Koh Yawasam, Chicken Island, Koh Tub, Koh Tan Ming. Sunset buffet on Koh Poda with bioluminescent plankton swimming."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Transfer to Phuket & City Tour",
        "description": "Transfer to Phuket. Afternoon city tour with Big Buddha, Wat Chalong, Phuket Town, and Tiger Kingdom visit."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Phi Phi Island by Speedboat",
        "description": "Full-day speedboat tour to Maya Bay, Viking Cave, Pileh Bay lagoon, Monkey Island with snorkeling and lunch."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - James Bond Island Tour",
        "description": "Full-day longtail boat tour to Monkey Cave temple, Panyee floating village, Talu Cave, sea canoe, and James Bond Island."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Day 7 - Departure",
        "description": "Breakfast, checkout, and airport transfer for departure."
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
      "name": "What is Tiger Kingdom?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tiger Kingdom is a wildlife park in Phuket where visitors can get up close to tigers of various ages and sizes in a safe, supervised environment. It is one of the top attractions in Phuket for animal lovers."
      }
    },
    {
      "@type": "Question",
      "name": "Is the elephant trekking ethical?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we partner with responsible operators in Krabi who prioritise animal welfare. The elephants are well cared for, and the experience includes gentle interaction with baby elephants in a natural jungle setting."
      }
    },
    {
      "@type": "Question",
      "name": "What makes the Pearls of Thailand package special?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Pearls of Thailand is our most activity-dense package, featuring 5 guided tours across Krabi and Phuket. From elephant trekking and bioluminescent plankton swimming to Phi Phi Island and James Bond Island, every day is packed with unique experiences."
      }
    },
    {
      "@type": "Question",
      "name": "Can I combine this with a Bangkok extension?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely! We can customise your trip to include Bangkok as an add-on before or after your Krabi-Phuket itinerary. Contact us for a personalised quote."
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
                <p class="mb-0 fw-bold">Krabi & Phuket</p>
                <small class="text-muted">Location</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">5 Guided Tours</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-hiking fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Elephant Trek & Tiger Kingdom</p>
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
                    <p class="text-primary fw-bold">Adventure-Packed Southern Thailand Discovery</p>
                    <p>The Pearls of Thailand package brings together the best of Krabi and Phuket in one action-packed 7-day journey. Begin in Krabi, where towering limestone cliffs, hidden jungle pools, and pristine island chains create a landscape unlike anywhere else on earth. Then move to Phuket, Thailand's largest island, for world-famous beaches, cultural landmarks, and thrilling island-hopping adventures.</p>
                    <p>This is our most activity-dense Thailand itinerary, featuring five guided tours that cover everything from elephant trekking through Krabi's jungle and swimming with bioluminescent plankton to speedboating around Phi Phi Island's iconic Maya Bay and exploring the legendary James Bond Island. Visit Tiger Kingdom, marvel at Big Buddha, and drift through the sea caves of Phang Nga Bay by canoe.</p>
                    <p>With private transfers between Phuket Airport and Krabi, daily breakfast, and a carefully curated mix of adventure, nature, and culture, the Pearls of Thailand is ideal for travellers who want to experience southern Thailand's greatest highlights without missing a beat.</p>
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
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Phuket International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and private transfer to Krabi</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Krabi hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Leisure time to explore Krabi's stunning beaches and limestone cliffs</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy the laid-back seaside atmosphere at Ao Nang or Railay</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Emerald Pool, Hot Springs & Elephant Trekking
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Chiang-Mai-Thailand.jpg" class="img-fluid rounded shadow-sm" alt="Emerald Pool and Elephant Trekking in Krabi">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Jungle Exploration & Wildlife Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Swim in the crystal-clear Emerald Pool surrounded by lush jungle</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Relax in the natural Hot Spring Waterfall</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the sacred Tiger Cave Temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>30-minute Elephant Trekking experience with baby elephants</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included during the tour</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Krabi 7-Island Tour
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/karabi-beach (2).jpg" class="img-fluid rounded shadow-sm" alt="Krabi 7-Island Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Island Hopping & Bioluminescent Swimming</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day longtail boat tour across 7 stunning islands</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Koh Yawasam, Chicken Island (Koh Kai), Koh Tub, and Koh Tan Ming</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Sunset buffet dinner on the beautiful Koh Poda</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Magical bioluminescent plankton swimming experience after dark</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Krabi hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Krabi</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Transfer to Phuket & City Tour
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Phuket-beach.jpg" class="img-fluid rounded shadow-sm" alt="Phuket City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Phuket's Cultural Landmarks & Tiger Kingdom</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel and checkout from Krabi</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer from Krabi to Phuket</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon Phuket City Tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the majestic Big Buddha overlooking the island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the historic Wat Chalong temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stroll through charming Phuket Town</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Tiger Kingdom for an up-close wildlife experience</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Phi Phi Island by Speedboat
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-Phi-Phi-island.jpg" class="img-fluid rounded shadow-sm" alt="Phi Phi Island Speedboat Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Maya Bay, Viking Cave & Snorkeling Paradise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day speedboat tour to Phi Phi Islands</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the iconic Maya Bay, made famous by Hollywood</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See Viking Cave and the stunning Pileh Bay lagoon</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet playful monkeys at Monkey Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Snorkeling in crystal-clear Andaman waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included. Free time at Khai Nok Island</li>
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
                                            <h6 class="fw-bold mb-3">Phang Nga Bay, Sea Canoe & Floating Village</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day longtail boat tour through Phang Nga Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the ancient Monkey Cave temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Panyee floating village built on stilts</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Paddle through Talu Cave by sea canoe</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the famous 20-metre James Bond Island rock</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included during the tour</li>
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
                                            <img src="img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Phuket">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Phuket Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with unforgettable memories of southern Thailand</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights' accommodation in Krabi + 3 Nights' accommodation in Phuket</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return airport transfers — private (Phuket Airport to Krabi to Phuket to Phuket Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Krabi 7-Island tour with bioluminescent plankton swimming and sunset dinner (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Emerald Pool, Hot Spring Waterfall and Elephant Trekking with lunch (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phuket City Tour with Big Buddha and Tiger Kingdom (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phi Phi Island speedboat tour with Maya Bay and lunch included</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>James Bond Island longtail boat tour with lunch and sea canoe</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All transfers on private basis / all tours on shared basis</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is Tiger Kingdom?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Tiger Kingdom is a wildlife park in Phuket where visitors can get up close to tigers of various ages and sizes in a safe, supervised environment. It is one of the top attractions in Phuket for animal lovers and adventure seekers.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Is the elephant trekking ethical?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, we partner with responsible operators in Krabi who prioritise animal welfare. The elephants are well cared for, and the experience includes gentle interaction with baby elephants in a natural jungle setting.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What makes the Pearls of Thailand package special?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Pearls of Thailand is our most activity-dense package, featuring 5 guided tours across Krabi and Phuket. From elephant trekking and bioluminescent plankton swimming to Phi Phi Island and James Bond Island, every day is packed with unique experiences you will not find in a standard beach holiday.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Can I combine this with a Bangkok extension?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Absolutely! We can customise your trip to include Bangkok as an add-on before or after your Krabi-Phuket itinerary. Bangkok offers temples, markets, nightlife, and cultural experiences that complement southern Thailand perfectly. Contact us for a personalised quote.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,120</h2>
                            <span class="text-muted">Per Person (6N/7D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Adventure</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3N Krabi + 3N Phuket</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Elephant trekking & Tiger Kingdom</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Phi Phi + James Bond Islands</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>7-Island bioluminescent tour</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Pearls of Thailand 6N7D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
