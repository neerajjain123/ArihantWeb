<?php
// Page SEO Variables
$pageTitle = "Classic Thailand 6 Nights 7 Days Tour Package from Dubai | Arihant Travel";
$pageDescription = "Experience Classic Thailand with our 6 Nights / 7 Days Krabi, Phuket and Bangkok adventure. Emerald Pool, Phi Phi Islands, Mahanakhon Skywalk…";
$pageKeywords = "classic thailand package, krabi phuket bangkok tour, 6 nights 7 days thailand, phi phi island tour, mahanakhon skywalk, dream world bangkok, thailand holiday from dubai, emerald pool krabi";
$pageCanonical = "https://arihantlink.com/thailand-classic-6n7d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Classic Thailand";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/Temple-of-Dawn.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Classic Thailand - 6 Nights / 7 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Adventure Seekers"],
  "image": [
    "https://arihantlink.com/img/thailand/Temple-of-Dawn.jpg",
    "https://arihantlink.com/img/thailand/Koh-Phi-Phi-island.jpg",
    "https://arihantlink.com/img/thailand/chao-phraya-river.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2680",
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
    "name": "Classic Thailand 6N7D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Krabi & Emerald Pool",
        "description": "Arrive at Phuket Airport, transfer to Krabi. Half-day Emerald Pool and Hot Spring Waterfall excursion in jungle reserves. Hotel check-in."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Krabi 7-Island Tour",
        "description": "Full-day longtail boat tour visiting Koh Yawasam, Koh Kai, Koh Tub, Koh Tan Ming. Sunset buffet on Koh Poda with bioluminescent plankton swimming."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Transfer to Phuket & City Tour",
        "description": "Transfer to Phuket. Half-day city tour with Big Buddha, Wat Chalong, Cashew Nut Factory. Scenic drive via Patong, Karon, Kata beaches with viewpoint stop."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Phi Phi Islands Tour",
        "description": "Full-day tour to Maya Bay, Viking Cave, Pileh Bay lagoon, Monkey Island with snorkeling. Lunch at Khai Nok Island."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Bangkok: Temples, Skywalk & Dinner Cruise",
        "description": "Fly to Bangkok. City tour with Marble Buddha Temple, Golden Buddha Temple, Gems Gallery. Mahanakhon Skywalk at 314m. Evening Chao Phraya Dinner Cruise with temple views."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Dream World & Snow Park",
        "description": "Full-day Dream World with Fantasy Land and Adventure Land rides. Snow Park with snow activities, ice sculptures, and snow slides. Lunch included."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Day 7 - Departure",
        "description": "Breakfast, checkout, and transfer to Bangkok Airport for departure."
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
      "name": "What is Dream World?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Dream World is Bangkok\u2019s largest amusement park with Fantasy Land and Adventure Land rides, plus the unique Snow Park with indoor snow, ice sculptures, and snow slides."
      }
    },
    {
      "@type": "Question",
      "name": "Does this package include the Phuket to Bangkok flight?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, the internal flight from Phuket to Bangkok is at the guest\u2019s own arrangement. We can assist with booking if needed."
      }
    },
    {
      "@type": "Question",
      "name": "What is Snow Park?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Snow Park is an indoor snow experience at Dream World featuring real snow, ice sculptures, snow slides, and winter activities in a climate-controlled environment."
      }
    },
    {
      "@type": "Question",
      "name": "Is this the most complete Thailand package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Classic Thailand covers south and central Thailand with 6 unique guided experiences across 3 destinations \u2014 Krabi, Phuket, and Bangkok."
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
                <p class="mb-0 fw-bold">Krabi, Phuket & Bangkok</p>
                <small class="text-muted">Location</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">6 Guided Experiences</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-hiking fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Dream World & Snow Park</p>
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
                    <p class="text-primary fw-bold">The Ultimate Thai Itinerary — Andaman Coast to Vibrant Capital</p>
                    <p>Classic Thailand is the ultimate Thai itinerary — spanning the Andaman coast to the vibrant capital. Begin in Krabi with a half-day Emerald Pool and Hot Spring excursion on arrival, followed by an unforgettable 7-island longtail boat tour with bioluminescent plankton swimming and sunset dinner. Transfer to Phuket for a scenic city tour featuring Big Buddha and Wat Chalong, plus a full-day Phi Phi Islands excursion to Maya Bay and Viking Cave. Then fly to Bangkok for a temple tour with Mahanakhon Skywalk, an evening Chao Phraya Dinner Cruise, and a thrilling day at Dream World and Snow Park.</p>
                    <p>With six unique guided experiences across three destinations, private transfers, and daily breakfast, this premium package delivers the most diverse Thailand experience available — from jungle pools and island paradise to urban temples and theme park fun.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Krabi & Emerald Pool
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/karabi-beach.jpg" class="img-fluid rounded shadow-sm" alt="Arrival in Krabi & Emerald Pool">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Jungle Pools & Hot Springs on Arrival</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Phuket International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to Krabi (~2 hours)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Emerald Pool excursion — swim in crystal-clear jungle pools</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Relax in the natural Hot Spring Waterfall surrounded by jungle reserves</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Thai lunch included during the excursion</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Krabi hotel</li>
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
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Transfer to Phuket & City Tour
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Phuket-beach.jpg" class="img-fluid rounded shadow-sm" alt="Phuket City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Phuket's Cultural Landmarks & Scenic Beaches</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel and checkout from Krabi</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer from Krabi to Phuket</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Phuket City Tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the majestic Big Buddha overlooking the island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the historic Wat Chalong temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stop at the Cashew Nut Factory</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Scenic drive via Patong, Karon, Kata beaches with viewpoint stop</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Phi Phi Islands Tour
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-Phi-Phi-island.jpg" class="img-fluid rounded shadow-sm" alt="Phi Phi Islands Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Maya Bay, Viking Cave & Snorkeling Paradise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day Phi Phi Islands tour via big boat</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the iconic Maya Bay, made famous by Hollywood</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See Viking Cave and the stunning Pileh Bay lagoon</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet playful monkeys at Monkey Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Snorkeling in crystal-clear Andaman waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included at Khai Nok Island</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Bangkok: Temples, Skywalk & Dinner Cruise
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/chao-phraya-river.jpg" class="img-fluid rounded shadow-sm" alt="Bangkok Temples Skywalk and Dinner Cruise">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Temples, Skywalk & Chao Phraya Dinner Cruise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Fly from Phuket to Bangkok (at guest's own arrangement)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Bangkok City & Temple Tour — Marble Buddha Temple and Golden Buddha Temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Gems Gallery</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Mahanakhon Skywalk — 314m glass-floor observation deck with 360° views</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: 2-hour Chao Phraya Dinner Cruise with illuminated temple views</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bangkok</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> Dream World & Snow Park
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city (2).jpg" class="img-fluid rounded shadow-sm" alt="Dream World and Snow Park Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Theme Park Thrills & Indoor Snow Experience</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day at Dream World — Bangkok's largest amusement park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Fantasy Land and Adventure Land rides</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Snow Park — indoor snow activities, ice sculptures, and snow slides</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included at Dream World</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Bangkok hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bangkok</li>
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
                                            <img src="img/thailand/grand-palace-bangkok.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Bangkok Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with unforgettable memories of Thailand</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Nights' accommodation in Krabi + 2 Nights' accommodation in Phuket + 2 Nights' accommodation in Bangkok</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private transfers — Phuket Airport to Krabi to Phuket to Phuket Airport, Bangkok Airport to hotel to Airport</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Emerald Pool & Hot Spring excursion with Thai lunch (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Krabi 7-Island longtail boat tour with bioluminescent swimming & sunset dinner (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Phuket City Tour with Big Buddha (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Phi Phi Island tour with local lunch via big boat (SIC)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bangkok City & Temple Tour with Mahanakhon Skywalk day tickets</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Chao Phraya Dinner Cruise (shared basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Dream World & Snow Park with lunch (shared basis)</li>
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
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Internal flights (Phuket to Bangkok at guest's own arrangement)</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is Dream World?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Dream World is Bangkok's largest amusement park with Fantasy Land and Adventure Land rides, plus the unique Snow Park with indoor snow, ice sculptures, and snow slides.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Does this package include the Phuket to Bangkok flight?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">No, the internal flight from Phuket to Bangkok is at the guest's own arrangement. We can assist with booking if needed.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is Snow Park?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Snow Park is an indoor snow experience at Dream World featuring real snow, ice sculptures, snow slides, and winter activities in a climate-controlled environment.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Is this the most complete Thailand package?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, Classic Thailand covers south and central Thailand with 6 unique guided experiences across 3 destinations — Krabi, Phuket, and Bangkok. It is our most diverse package, spanning from jungle pools and island paradise to urban temples and theme park fun.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,680</h2>
                            <span class="text-muted">Per Person (6N/7D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Premium</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Krabi + Phuket + Bangkok</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Emerald Pool & Phi Phi Islands</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Mahanakhon Skywalk & Dinner Cruise</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Dream World & Snow Park</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Classic Thailand 6N7D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
