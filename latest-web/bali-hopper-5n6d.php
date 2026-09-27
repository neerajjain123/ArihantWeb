<?php
// Page SEO Variables
$pageTitle = "Bali Hopper 5 Nights 6 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience the ultimate Bali Hopper 5 Nights / 6 Days package. Stay in Kuta, a private pool villa & Seminyak.";
$pageKeywords = "bali hopper package, bali 5 nights 6 days, pool villa bali, ayung river rafting, sunset dinner cruise bali, kuta seminyak bali, bali holiday from dubai, bali travel uae";
$pageCanonical = "https://arihantlink.com/bali-hopper-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Bali Hopper";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "bali";
$breadcrumbBg = "img/bali/hero-banner-Pura-Ulun-Danu-Bratan.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Bali Hopper - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/bali/Nusa-Dua-bali.jpg",
    "https://arihantlink.com/img/bali/Tanah-Lot-Temple.jpg",
    "https://arihantlink.com/img/bali/Ubud-Rice-Terraces.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2140",
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
    "name": "Bali Hopper 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Bali (Kuta)",
        "description": "Airport reception and private transfer to Kuta resort. Afternoon at leisure."
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
        "name": "Day 3 - Pool Villa Check-in & Tanah Lot Temple",
        "description": "Check-in to private pool villa. Afternoon sunset tour of Tanah Lot Temple."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Water Sports & Transfer to Seminyak",
        "description": "Water sports at Tanjung Benoa Beach including Banana Boat, Flying Fish, and Jet Ski. Transfer to Seminyak hotel."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - White Water Rafting & Sunset Dinner Cruise",
        "description": "Morning white water rafting on Ayung River. Evening 3-hour sunset dinner cruise with international buffet and entertainment."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure",
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
        "text": "Bali enjoys a tropical climate year-round. The dry season (April to October) is the most popular time with sunny skies and lower humidity. The wet season (November to March) still offers warm weather with occasional afternoon showers."
      }
    },
    {
      "@type": "Question",
      "name": "What makes the Bali Hopper unique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This package lets you experience three different areas of Bali: the vibrant nightlife of Kuta, the privacy of a pool villa, and the trendy boutiques and beach clubs of Seminyak — giving you a complete Bali lifestyle experience."
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
                <p class="mb-0 fw-bold">Kuta, Villa & Seminyak</p>
                <small class="text-muted">3 Areas of Bali</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-home fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Pool Villa Stay</p>
                <small class="text-muted">Private Retreat</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Sunset Dinner Cruise</p>
                <small class="text-muted">Evening Experience</small>
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
                    <p class="text-primary fw-bold">Three Areas, One Unforgettable Bali</p>
                    <p>The Bali Hopper is a premium 5-night itinerary designed for travellers who want to experience the full spectrum of Bali's lifestyle. Rather than staying in a single location, this package takes you through three distinct areas of the island — the buzzing beachside energy of Kuta, the secluded luxury of a private pool villa, and the chic boutiques and sunset beach clubs of Seminyak.</p>
                    <p>Beyond diverse accommodation, the Bali Hopper is packed with experiences: a full-day cultural immersion through the art villages and volcanic highlands of Ubud and Kintamani, a sunset visit to the legendary Tanah Lot sea temple, adrenaline-fuelled water sports at Tanjung Benoa, white water rafting through the rainforest-lined gorges of the Ayung River, and a spectacular 3-hour sunset dinner cruise complete with an international buffet and traditional Balinese entertainment.</p>
                    <p>With private transfers throughout, air-conditioned vehicles, and an English-speaking guide, the Bali Hopper delivers a seamless, premium Bali holiday from start to finish.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Bali (Kuta)
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Nusa-Dua-bali.jpg" class="img-fluid rounded shadow-sm" alt="Arrival in Kuta Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Ngurah Rai International Airport, Bali</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our local representative at the arrival hall</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to your Kuta resort</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and rest of the day at leisure</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the surrounding area independently or relax by the pool</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Kuta</li>
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
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Kuta</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Pool Villa Check-in & Tanah Lot Temple
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Tanah-Lot-Temple.jpg" class="img-fluid rounded shadow-sm" alt="Tanah Lot Temple Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Private Pool Villa & Bali's Most Iconic Sea Temple</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel and check out from Kuta</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer and check-in to your private pool villa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Settle in and enjoy your private pool and villa amenities</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon departure for Tanah Lot Temple sunset tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Pura Tanah Lot — an ancient Hindu pilgrimage temple built on a rock formation in the sea</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>One of Bali's most important landmarks and a premier sunset viewing spot</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the surrounding area with local vendors and cultural displays</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Pool Villa</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Water Sports & Transfer to Seminyak
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Nusa-Dua-bali.jpg" class="img-fluid rounded shadow-sm" alt="Tanjung Benoa Water Sports">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Adrenaline-Pumping Beach Adventure & Seminyak Transfer</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the villa</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer to Tanjung Benoa Beach — Bali's premier water sports destination</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Banana Boat — bouncing fun across the waves</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Flying Fish — soar above the water on an inflatable</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Jet Ski — high-speed thrill on the ocean</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Professional instructors and safety equipment provided</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to your Seminyak hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening at leisure — explore Seminyak's trendy boutiques and beach clubs</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Seminyak</li>
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
                                            <h6 class="fw-bold mb-3">Rainforest Rapids & Oceanside Entertainment</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Morning transfer for white water rafting on the Ayung River — Bali's longest river at 68.5 km</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Navigate thrilling rapids through scenic rainforest gorges</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy stunning views of rice fields, tropical vegetation, and waterfalls along the river</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to hotel to freshen up</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: 3-hour sunset dinner cruise departing from Benoa Harbour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Welcome drink on arrival, followed by international buffet dinner</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Live entertainment: traditional Balinese dances, comedy cabaret, and live singer</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Seminyak</li>
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
                                            <img src="img/bali/Handara-gate-Bali.jpg" class="img-fluid rounded shadow-sm" alt="Bali Departure">
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Nights' accommodation in Kuta with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights' accommodation in private pool villa with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Inter-hotel transfers (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full Day Ubud & Kintamani Tour (private basis with English-speaking guide)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half Day Tanah Lot Temple Tour (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Water Sports at Tanjung Benoa: 1 ride each of Banana Boat, Flying Fish, and Jet Ski</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day white water rafting on Ayung River with private transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3-hour sunset dinner cruise with private transfers</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What makes the Bali Hopper unique?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">This package lets you experience three different areas of Bali: the vibrant nightlife of Kuta, the privacy of a pool villa, and the trendy boutiques and beach clubs of Seminyak — giving you a complete Bali lifestyle experience.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,140</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Premium</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>2 Nights Kuta + 3 Nights Pool Villa</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Ayung River White Water Rafting</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Sunset Dinner Cruise</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private Transfers Throughout</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Bali Hopper 5N6D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
