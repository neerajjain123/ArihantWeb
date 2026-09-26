<?php
// Page SEO Variables
$pageTitle = "Bali Honeymoon Special 5 Nights 6 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Celebrate your love in Bali with our Honeymoon Special 5 Nights / 6 Days package. Enjoy a 120-minute Balinese spa, sunset dinner cruise…";
$pageKeywords = "bali honeymoon package, bali 5 nights 6 days, honeymoon bali from dubai, balinese spa package, uluwatu kecak dance, sunset dinner cruise bali, bali couples holiday uae";
$pageCanonical = "https://arihantlink.com/bali-honeymoon-special-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Bali Honeymoon Special";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "bali";
$breadcrumbBg = "img/bali/hero-banner-balinese-dancer.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Bali Honeymoon Special - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Honeymooners"],
  "image": [
    "https://arihantlink.com/img/bali/ULUWATU-TEMPLE.jpg",
    "https://arihantlink.com/img/bali/Ubud-Rice-Terraces.jpg",
    "https://arihantlink.com/img/bali/Nusa-Dua-bali.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1560",
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
    "name": "Bali Honeymoon Special 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Bali",
        "description": "Airport reception and private transfer to resort. Evening at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Ubud & Kintamani Volcano Tour",
        "description": "Full day tour visiting Celuk, Mas, Ubud rice terraces, Mount Batur and Lake Batur views, and coffee plantation."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Water Sports at Tanjung Benoa",
        "description": "Banana Boat, Jet Ski, and Flying Fish rides at Tanjung Benoa Beach."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Inter-Hotel Transfer & Sunset Dinner Cruise",
        "description": "Transfer to alternate resort. Evening 3-hour sunset dinner cruise with international buffet, DJ entertainment, and live performances."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Balinese Spa & Uluwatu Temple",
        "description": "120-minute authentic Balinese spa session. Visit Pura Luhur Uluwatu Temple and witness the Kecak dance performance at sunset."
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
        "text": "Bali enjoys a tropical climate year-round. The dry season (April to October) is the most popular time to visit with sunny skies and lower humidity. The wet season (November to March) still offers warm weather with occasional afternoon showers."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Kecak dance at Uluwatu?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Kecak dance is a dramatic Balinese performance featuring 50+ performers chanting and acting out the Ramayana epic against the backdrop of Uluwatu\u2019s cliff-top sunset. It is one of Bali\u2019s most mesmerising cultural experiences."
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
                <i class="fas fa-heart fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Honeymoon</p>
                <small class="text-muted">Package Type</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-spa fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Balinese Spa 120 min</p>
                <small class="text-muted">Relaxation</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-gopuram fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Uluwatu & Kecak Dance</p>
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
                    <p class="text-primary fw-bold">Romance, Spa & Sunset Magic for Couples</p>
                    <p>Begin your journey together in Bali, Indonesia's Island of the Gods — an enchanting paradise tailor-made for romance. This 5-night honeymoon package is crafted exclusively for couples seeking an unforgettable blend of relaxation, adventure, and cultural wonder amidst tropical beauty.</p>
                    <p>Immerse yourselves in the cultural heartland of Ubud with its art villages and cascading rice terraces, feel the thrill of water sports at Tanjung Benoa, and sail into a magical sunset aboard a dinner cruise complete with live entertainment and gourmet dining. Indulge in a 120-minute authentic Balinese spa ritual designed for total rejuvenation, then witness one of Bali's most dramatic spectacles — the Kecak dance performed by over 50 artists on the cliff-top of Uluwatu Temple as the sun dips below the Indian Ocean.</p>
                    <p>With private transfers throughout, handpicked resort stays, and moments designed to bring you closer together, this honeymoon package is the perfect way to celebrate your love story in paradise.</p>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in and evening at leisure</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the surrounding area independently or enjoy a romantic evening by the pool</li>
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
                                            <h6 class="fw-bold mb-3">Art Villages, Rice Terraces & Volcanic Panoramas</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Celuk Village — renowned centre for gold and silver craftsmanship</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Mas Village — Bali's finest woodcarving artisans</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Discover Ubud — the cultural heart of Bali, famous for Balinese paintings and stunning rice terraces</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive to Kintamani for spectacular views of Mount Batur volcano and Lake Batur</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit a traditional Balinese coffee plantation and sample local brews</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Water Sports at Tanjung Benoa
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Nusa-Dua-bali.jpg" class="img-fluid rounded shadow-sm" alt="Tanjung Benoa Water Sports">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Adrenaline-Pumping Beach Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer to Tanjung Benoa Beach — Bali's premier water sports destination</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Banana Boat — bouncing fun across the waves</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Jet Ski — high-speed thrill on the ocean</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>1 ride of Flying Fish — soar above the water on an inflatable</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Professional instructors and safety equipment provided</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time to relax on the beach or try additional activities</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Inter-Hotel Transfer & Sunset Dinner Cruise
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/Pura-Beratan-Temple.jpg" class="img-fluid rounded shadow-sm" alt="Sunset Dinner Cruise Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Resort Change & a Magical Evening on the Water</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private inter-hotel transfer to your alternate resort</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon at leisure to settle in and explore</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: embark on a 3-hour sunset dinner cruise</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Welcome drink and traditional Balinese welcome on board</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>International buffet dinner with a variety of cuisines</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>DJ entertainment, traditional and modern dance performances</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Comedy cabaret and live singer performances</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Balinese Spa & Uluwatu Temple
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/bali/ULUWATU-TEMPLE.jpg" class="img-fluid rounded shadow-sm" alt="Uluwatu Temple Bali">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Total Rejuvenation & a Cliff-Top Cultural Spectacle</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>120-minute authentic Balinese spa session:</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-spa text-primary me-2"></i>Traditional footbath ritual</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-spa text-primary me-2"></i>Therapeutic Balinese massage</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-spa text-primary me-2"></i>Body scrub and wash</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-spa text-primary me-2"></i>Tropical fruit body polish</li>
                                                <li class="mb-2 ms-4"><i class="fas fa-spa text-primary me-2"></i>Flower bath</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon visit to Pura Luhur Uluwatu Temple — perched 70+ metres above sea level on a cliff over the Indian Ocean</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy spectacular sunset views from the temple grounds</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Witness the Kecak (Monkey) dance performance — 50+ performers depicting the Ramayana epic against the ocean sunset</li>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return home with wonderful memories of your Bali honeymoon</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>5 Nights' accommodation in Bali in selected category hotel/resort</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Inter-hotel transfer (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full Day Ubud & Kintamani Tour (private basis with English-speaking guide)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Water Sports at Tanjung Benoa: 1 ride each of Banana Boat, Jet Ski, and Flying Fish</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>120-minute authentic Balinese spa session</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Uluwatu Sunset Temple Tour with Kecak Dance performance (private basis)</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is the Kecak dance at Uluwatu?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Kecak dance is a dramatic Balinese performance featuring 50+ performers chanting and acting out the Ramayana epic against the backdrop of Uluwatu's cliff-top sunset. It is one of Bali's most mesmerising cultural experiences.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,560</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Honeymoon</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>5 Nights in Bali Resort</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>120-min Balinese Spa Session</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Sunset Dinner Cruise</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Uluwatu Temple & Kecak Dance</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Bali Honeymoon Special 5N6D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
