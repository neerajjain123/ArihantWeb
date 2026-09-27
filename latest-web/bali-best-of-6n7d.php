<?php
// Page SEO Variables
$pageTitle = "Best of Bali 6 Nights 7 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience the Best of Bali with our 6 Nights / 7 Days package. Explore Ubud & Kintamani, Tanah Lot Temple, water sports, Bali Safari & Marine Park…";
$pageKeywords = "best of bali package, bali 6 nights 7 days, ubud kintamani tour, tanah lot temple, bali safari marine park, ayung river rafting, sunset dinner cruise bali, bali holiday from dubai, bali travel uae";
$pageCanonical = "https://arihantlink.com/bali-best-of-6n7d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Best of Bali";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "bali";
$breadcrumbBg = "img/bali/hero-banner-JATI-temple-BATUR-Kintamani.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Best of Bali - 6 Nights / 7 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/bali/Mount-Batur.jpg",
    "https://arihantlink.com/img/bali/Tanah-Lot-Temple.jpg",
    "https://arihantlink.com/img/bali/Ubud-Rice-Terraces.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1975",
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
    "name": "Best of Bali 6N7D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Bali",
        "description": "Airport reception and private transfer to resort. Afternoon at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Ubud & Kintamani Volcano Tour",
        "description": "Full day tour visiting Celuk, Mas, Ubud, Goa Gajah, Tirta Empul, and Mount Batur views."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Sunset Tanah Lot Temple Tour",
        "description": "Afternoon visit to the iconic sea temple Pura Tanah Lot with sunset viewing."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Water Sports & Sunset Dinner Cruise",
        "description": "Morning water sports at Tanjung Benoa followed by a 3-hour sunset dinner cruise."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Bali Safari & Marine Park",
        "description": "Full day at Bali Safari & Marine Park with Jungle Hopper Pass and tram safari."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - White Water Rafting on Ayung River",
        "description": "Half day white water rafting on Ayung River with scenic rainforest views and local lunch."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Day 7 - Departure",
        "description": "Breakfast and transfer to airport."
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
        "text": "Bali enjoys a tropical climate year-round. The dry season (April to October) is the most popular time to visit with sunny skies and lower humidity."
      }
    },
    {
      "@type": "Question",
      "name": "What is Ayung River rafting like?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ayung River is Bali\u0027s longest river at 68.5 km, flowing through lush tropical rainforest. The white water rafting experience is suitable for beginners and families, with Class II-III rapids, stunning scenery of rice terraces, waterfalls, and jungle-covered gorges. A local lunch is included after the adventure."
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
                <i class="fas fa-paw fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Safari & Marine Park</p>
                <small class="text-muted">Wildlife</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Rafting & Water Sports</p>
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
                    <p class="text-primary fw-bold">Culture, Adventure, Wildlife & Sunset Dining</p>
                    <p>Experience the very best of Bali with this comprehensive 6-night itinerary that balances culture, adventure, wildlife, and relaxation. From the ancient temples and terraced rice fields of Ubud and Kintamani to the iconic sea temple of Tanah Lot, every day brings a new facet of Bali's extraordinary charm.</p>
                    <p>Feel the adrenaline rush of water sports at Tanjung Benoa, dine under the stars on a sunset cruise, encounter exotic wildlife at Bali Safari & Marine Park, and conquer the rapids of the Ayung River. This package offers the best balance of activities and downtime for an unforgettable island escape.</p>
                    <p>With warm hospitality, delicious cuisine, and a tropical climate year-round, this is the ultimate Bali experience from Dubai.</p>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to your resort</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and rest of the day at leisure</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the surrounding area independently or relax by the pool</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali</li>
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
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Sunset Tanah Lot Temple Tour
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Tanah-Lot-Temple.jpg" class="img-fluid rounded shadow-sm" alt="Tanah Lot Temple Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Bali's Most Iconic Sea Temple at Sunset</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Morning at leisure — relax by the pool or explore on your own</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon departure for Tanah Lot Temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Pura Tanah Lot — an ancient Hindu pilgrimage temple built on a rock formation in the sea</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Photography opportunity at one of Bali's most spectacular sunset viewpoints</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy the magical sunset viewing over the Indian Ocean</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Water Sports & Sunset Dinner Cruise
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Nusa-Dua-bali.jpg" class="img-fluid rounded shadow-sm" alt="Tanjung Benoa Water Sports & Dinner Cruise">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Beach Thrills by Day, Dining Under the Stars by Night</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer to Tanjung Benoa Beach — Bali's premier water sports destination</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Banana Boat — bouncing fun across the waves</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Flying Fish — soar above the water on an inflatable</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Jet Ski — high-speed thrill on the ocean</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: 3-hour sunset dinner cruise with welcome drink</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>International buffet dinner onboard</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>DJ entertainment, traditional Balinese dance, and live performances</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Bali Safari & Marine Park
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Pura-Beratan-Temple.jpg" class="img-fluid rounded shadow-sm" alt="Bali Safari & Marine Park">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Encounter Exotic Wildlife Up Close</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Bali Safari & Marine Park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day with Jungle Hopper Pass</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Tram safari through animal enclosures featuring 60+ species</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Interaction with orangutans, tigers, lions, and leopards</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy shows and educational exhibits throughout the park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer back to hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> White Water Rafting on Ayung River
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Mount-Batur.jpg" class="img-fluid rounded shadow-sm" alt="Ayung River White Water Rafting">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Conquer the Rapids Through Tropical Rainforest</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Ayung River rafting point</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half day white water rafting on Bali's longest river (68.5 km)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Navigate Class II-III rapids through lush tropical rainforest</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Scenic views of rice terraces, waterfalls, and jungle-covered gorges</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Local lunch included after the rafting adventure</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon at leisure — relax or explore independently</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bali</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>6 Nights' accommodation in Bali in selected category hotel/resort</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full Day Ubud & Kintamani Tour (private basis with English-speaking guide)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Sunset Tanah Lot Temple Tour (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Water Sports at Tanjung Benoa: 1 ride each of Banana Boat, Flying Fish, and Jet Ski</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bali Safari & Marine Park with Jungle Hopper Pass (including private transfers)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3-hour sunset dinner cruise with private transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day white water rafting on Ayung River with local lunch and private transfers</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is Ayung River rafting like?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Ayung River is Bali's longest river at 68.5 km, flowing through lush tropical rainforest. The white water rafting experience is suitable for beginners and families, with Class II-III rapids, stunning scenery of rice terraces, waterfalls, and jungle-covered gorges. A local lunch is included after the adventure.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,975</h2>
                            <span class="text-muted">Per Person (6N/7D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Best Seller</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>6 Nights in Bali</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Bali Safari & Marine Park</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Ayung River Rafting & Water Sports</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Sunset Dinner Cruise</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Best of Bali 6N7D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
