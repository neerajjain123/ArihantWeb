<?php
// Page SEO Variables
$pageTitle = "Beautiful Bali 6 Nights 7 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience the ultimate Bali adventure with our Beautiful Bali 6 Nights / 7 Days package. Safari, rafting, Bali Swing, Uluwatu Kecak Dance, sunset cruise & more. Starting from 2,360 AED.";
$pageKeywords = "beautiful bali package, bali 6 nights 7 days, bali safari marine park, uluwatu kecak dance, bali swing, white water rafting bali, sunset dinner cruise bali, bali holiday from dubai, bali travel uae";
$pageCanonical = "https://arihantlink.com/bali-beautiful-6n7d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Beautiful Bali";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "bali";
$breadcrumbBg = "img/bali/hero-banner-Pura-Ulun-Danu-Bratan-dawn.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Beautiful Bali - 6 Nights / 7 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/bali/Gates-of-Heaven-Lempuyang-temple.jpg",
    "https://arihantlink.com/img/bali/ULUWATU-TEMPLE.jpg",
    "https://arihantlink.com/img/bali/Ubud-Rice-Terraces.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2360",
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
    "name": "Beautiful Bali 6N7D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Bali",
        "description": "Airport reception and private transfer to resort in Kuta. Evening at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Ubud & Kintamani Volcano Tour",
        "description": "Full day tour visiting Celuk, Mas, Ubud, Goa Gajah, Tirta Empul, and Mount Batur views with Agung Volcano backdrop."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Bali Safari & Tanah Lot Temple",
        "description": "Morning Bali Safari & Marine Park with Jungle Hopper Pass. Evening sunset Tanah Lot Temple tour."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Water Sports at Tanjung Benoa",
        "description": "Banana Boat, Flying Fish, and Jet Ski rides at Tanjung Benoa Beach."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - White Water Rafting & Sunset Dinner Cruise",
        "description": "White water rafting on Ayung River followed by a 3-hour sunset dinner cruise with entertainment."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Bali Swing & Uluwatu Temple",
        "description": "Morning Bali Swing at Aloha. Afternoon Uluwatu Temple visit with sunset Kecak Dance performance."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Day 7 - Departure",
        "description": "Breakfast and private transfer to airport."
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
      "name": "Do UAE residents need a visa for Bali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "UAE passport holders can obtain a Visa on Arrival (VOA) for Indonesia valid for 30 days. The VOA fee is approximately USD 35 and is payable at the airport."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Bali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights from Dubai to Bali take approximately 9 to 10 hours. Several airlines offer convenient one-stop connections as well."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Bali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bali enjoys a tropical climate year-round. The dry season (April to October) is the most popular time to visit with sunny skies and lower humidity. The wet season (November to March) still offers warm weather with occasional afternoon showers."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Bali Swing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Bali Swing is one of Bali\'s most iconic Instagram experiences — a giant swing set high above lush tropical jungle valleys. The Aloha Bali Swing includes a swing ride with stunning photo opportunities overlooking rice terraces and palm-covered valleys."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Kecak dance at Uluwatu?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A dramatic Balinese performance with 50+ performers chanting and enacting the Ramayana epic against the backdrop of Uluwatu\'s cliff-top sunset over the Indian Ocean."
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
                <p class="mb-0 fw-bold">Bali</p>
                <small class="text-muted">Indonesia</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-gopuram fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Safari, Tanah Lot & Uluwatu</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-star fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Bali Swing + Kecak Dance</p>
                <small class="text-muted">Experiences</small>
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
                    <p class="text-primary fw-bold">Culture, Adventure, Wildlife & Dining — The Ultimate Bali Experience</p>
                    <p>The most comprehensive Bali package — everything from culture (Ubud, Kintamani, Tanah Lot, Uluwatu) to adventure (water sports, rafting, Bali Swing) to wildlife (Safari) to dining (sunset cruise). This is the ultimate Bali experience for families and travellers who want to see and do it all.</p>
                    <p>Explore the artistic villages of Celuk and Mas, wander through Ubud's rice terraces, marvel at Mount Batur's volcanic panorama, and experience Bali Safari & Marine Park. Feel the rush of white water rafting on the Ayung River, soar on the iconic Bali Swing, and witness the dramatic Kecak Dance at Uluwatu's cliff-top temple as the sun sets over the Indian Ocean.</p>
                    <p>Cap it all off with a sunset dinner cruise featuring live entertainment, international cuisine, and traditional Balinese performances. This 6-night itinerary leaves nothing out — it is Bali at its most beautiful.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Bali
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Nusa-Dua-bali.jpg" class="img-fluid rounded shadow-sm" alt="Bali Arrival">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Ngurah Rai International Airport, Bali</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our local representative at the arrival hall</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to your resort in Kuta</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and evening at leisure</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the surrounding area independently or relax by the pool</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali (Kuta)</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Ubud & Kintamani Volcano Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Ubud-Rice-Terraces.jpg" class="img-fluid rounded shadow-sm" alt="Ubud Rice Terraces">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Art Villages, Sacred Temples & Volcanic Panoramas</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Celuk Village — renowned centre for gold and silver craftsmanship</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Mas Village — Bali's finest woodcarving artisans</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Discover Ubud — the cultural heart of Bali, famous for Balinese paintings and rice terraces</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Goa Gajah (Elephant Cave) — a 9th-century archaeological site with sacred bathing pools</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Bathe in the holy springs of Tirta Empul at Tampaksiring</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive to Kintamani for spectacular views of Mount Batur volcano and Lake Batur with Agung Volcano backdrop</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali (Kuta)</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Bali Safari & Tanah Lot Temple
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Tanah-Lot-Temple.jpg" class="img-fluid rounded shadow-sm" alt="Tanah Lot Temple Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Wildlife Adventure & Bali's Iconic Sea Temple at Sunset</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Morning visit to Bali Safari & Marine Park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Jungle Hopper Pass included — explore wildlife exhibits and safari journey</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfers to and from the park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening departure for Sunset Tanah Lot Temple Tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Pura Tanah Lot — an ancient Hindu pilgrimage temple built on a rock formation in the sea</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>One of Bali's most important landmarks and a premier sunset viewing spot</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali (Kuta)</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Water Sports at Tanjung Benoa
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Nusa-Dua-bali.jpg" class="img-fluid rounded shadow-sm" alt="Tanjung Benoa Water Sports">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Adrenaline-Pumping Beach Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day at Tanjung Benoa Beach — Bali's premier water sports destination</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Banana Boat — bouncing fun across the waves</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Flying Fish — soar above the water on an inflatable</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Jet Ski — high-speed thrill on the ocean</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Professional instructors and safety equipment provided</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time to relax on the beach or try additional activities</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali (Kuta)</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> White Water Rafting & Sunset Dinner Cruise
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Mount-Batur.jpg" class="img-fluid rounded shadow-sm" alt="Ayung River Rafting Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">River Thrills & Evening Elegance on the Water</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Noon departure for white water rafting on the Ayung River</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Navigate 68.5 km of Bali's longest river through scenic rainforest, rice fields, and waterfall views</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfers to and from the rafting site</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: 3-hour sunset dinner cruise</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Welcome drink on arrival, international buffet dinner onboard</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy traditional Balinese dance, modern shows, and live singer performances</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfers to and from the cruise terminal</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali (Kuta)</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> Bali Swing & Uluwatu Temple
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/ULUWATU-TEMPLE.jpg" class="img-fluid rounded shadow-sm" alt="Uluwatu Temple Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Iconic Swing, Cliff-Top Temple & Legendary Kecak Dance</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Morning visit to Bali Swing at Aloha</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 swing ride choice with photo package — stunning views over jungle valleys and rice terraces</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon departure for Uluwatu Temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Pura Luhur Uluwatu — a majestic temple perched 70 metres atop a cliff over the Indian Ocean</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Watch the spectacular sunset from the cliff-top vantage point</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Witness the Kecak (Monkey) Dance Performance — 50+ performers depicting the Ramayana epic</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali (Kuta)</li>
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
                                            <img src="img/bali/Gates-of-Heaven-Lempuyang-temple.jpg" class="img-fluid rounded shadow-sm" alt="Bali Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Leisure time until checkout</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Ngurah Rai International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return home with wonderful memories of the Island of the Gods</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>6 Nights' accommodation in Kuta with daily breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full Day Ubud & Kintamani Tour with English-speaking guide (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Sunset Tanah Lot Temple Tour (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bali Safari & Marine Park with Jungle Hopper Pass (including private transfers)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Water Sports at Tanjung Benoa: 1 ride each of Banana Boat, Flying Fish, and Jet Ski</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3-hour sunset dinner cruise with private transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>White Water Rafting on Ayung River with private transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Uluwatu Temple Tour with Kecak Dance Performance (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bali Swing at Aloha (1 swing ride + 1 photo site selection)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Air-conditioned vehicles during all tours and transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Hotel VAT & Service Charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Bali Tourism Tax (approx. USD 10 per person, payable at airport)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Indonesia Visa on Arrival fees (approx. USD 35)</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Do UAE residents need a visa for Bali?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">UAE passport holders can obtain a Visa on Arrival (VOA) for Indonesia, valid for 30 days. The VOA fee is approximately USD 35, payable at the airport upon arrival. Ensure your passport has at least 6 months' validity.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Bali?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Bali take approximately 9 to 10 hours. Several airlines also offer convenient one-stop connections via Singapore, Kuala Lumpur, or Jakarta.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Bali?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Bali enjoys a tropical climate year-round. The dry season (April to October) is the most popular time to visit with sunny skies and lower humidity. The wet season (November to March) still offers warm weather with occasional afternoon showers.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is the Bali Swing?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Bali Swing is one of Bali's most iconic Instagram experiences — a giant swing set high above lush tropical jungle valleys. The Aloha Bali Swing includes a swing ride with stunning photo opportunities overlooking rice terraces and palm-covered valleys.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">What is the Kecak dance at Uluwatu?</button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Kecak Dance is a dramatic Balinese performance featuring 50+ performers chanting and enacting the Ramayana epic against the backdrop of Uluwatu's cliff-top sunset over the Indian Ocean. It is one of the most mesmerising cultural experiences in Bali.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,360</h2>
                            <span class="text-muted">Per Person (6N/7D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Grand Tour</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>6 Nights in Bali (Kuta)</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Safari, Rafting & Sunset Cruise</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Bali Swing + Uluwatu Kecak Dance</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Most Complete Bali Experience</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Beautiful Bali 6N7D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
