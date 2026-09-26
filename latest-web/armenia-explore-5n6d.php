<?php
// Page SEO Variables
$pageTitle = "Explore Armenia 5 Nights 6 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Explore the best of Armenia with our 5 Nights / 6 Days tour package. Visit Yerevan, Geghard Monastery, Garni Temple, Tsaghkadzor, Lake Sevan, Khor Virap…";
$pageKeywords = "explore armenia tour package, armenia 5 nights 6 days, yerevan garni geghard tour, lake sevan tsaghkadzor, khor virap noravank, areni wine tasting, armenia holiday from dubai, armenia travel uae";
$pageCanonical = "https://arihantlink.com/armenia-explore-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Explore Armenia";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "armenia";
$breadcrumbBg = "img/armenia/Noravank-Monastery.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Explore Armenia - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/armenia/Noravank-Monastery.jpg",
    "https://arihantlink.com/img/armenia/Geghard-Monastery-in-Armenia.jpg",
    "https://arihantlink.com/img/armenia/Lake-Sevan-Armenia.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2600",
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
    "name": "Explore Armenia 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Yerevan",
        "description": "Arrive in Yerevan, meet our representative, transfer to hotel. Rest of the day at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Yerevan City Tour",
        "description": "Full day Yerevan city tour including Republic Square, Northern Avenue, Opera House, Cascade, and Mother Armenia Monument."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Geghard Monastery & Garni Temple",
        "description": "Visit the cave monastery of Geghard (UNESCO) and the pagan Garni Temple built in 77 AD."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Tsaghkadzor & Lake Sevan",
        "description": "Explore Tsaghkadzor town, Kecharis Monastery, ropeway to Teghenis Mountain, then Lake Sevan and Sevanavank Monastery."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Khor Virap, Noravank & Areni Wine",
        "description": "Visit Khor Virap Monastery, Noravank Monastery in Vayots Dzor, lunch by Arpa River, and wine degustation at Areni Winery."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure",
        "description": "Breakfast, hotel checkout, and transfer to airport for departure."
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
      "name": "What is the best time to visit Armenia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Armenia is a year-round destination. Spring (April to June) and Autumn (September to October) offer pleasant weather. Summer is ideal for Lake Sevan and nature excursions, while winter is perfect for skiing in Tsaghkadzor."
      }
    },
    {
      "@type": "Question",
      "name": "Do UAE residents need a visa for Armenia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Visa requirements depend on your nationality. Many nationalities can obtain an e-visa or visa on arrival. UAE residents should check Armenia\u2019s e-visa portal for the latest requirements."
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
                <i class="fas fa-city fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Yerevan</p>
                <small class="text-muted">Capital City</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Garni, Sevan & Noravank</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-wine-glass-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Areni Wine Tasting</p>
                <small class="text-muted">Experience</small>
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
                    <p class="text-primary fw-bold">The Pink City, Ancient Temples, Sacred Monasteries & Wine Heritage</p>
                    <p>Yerevan, the capital and largest city of Armenia, is a vibrant and historic metropolis nestled in the scenic Ararat Valley. With a rich cultural heritage dating back millennia, Yerevan seamlessly blends its ancient roots with modern influences. The cityscape is adorned with pink tufa stone buildings, notably the iconic Cascade Complex, offering panoramic views of Mount Ararat.</p>
                    <p>Yerevan boasts a diverse array of landmarks, including the majestic Republic Square, flanked by architectural gems like the Government House and the National History Museum. The city is a cultural hub, housing numerous theaters, galleries, and music venues, exemplified by the famous Yerevan Opera Theatre.</p>
                    <p>A dynamic culinary scene awaits in Yerevan, where traditional Armenian dishes are savored alongside international flavors. The bustling Vernissage market showcases local craftsmanship, from intricate carpets to handmade souvenirs.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Yerevan
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Yerevan-City-Tour.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Yerevan City Arrival">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Arrive in Yerevan</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Meet our local representative at the airport</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Private transfer and check-in at your hotel in Yerevan</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Yerevan — the 12th capital of historical Armenia, one of the most ancient cities in the world</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Rest of the day free at leisure</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Yerevan City Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/cathedral.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Yerevan City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Discover the Heart of Yerevan</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Republic Square — the central town square with its pool and musical fountains</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Northern Avenue — pedestrian avenue linking Abovyan Street with Freedom Square</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Opera House — Armenian National Academic Theatre of Opera and Ballet</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Cascade — giant limestone stairway, home to Cafesjian Art Gallery</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Mother Armenia Monument</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Geghard Monastery & Garni Temple
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Geghard-Monastery-in-Armenia.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Geghard Monastery Armenia">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Sacred Caves & an Ancient Pagan Temple</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Drive to Geghard Monastery (12th–13th century) — the unique cave temple whose name means "Holy Spear"</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>UNESCO World Heritage Site — the spear that pierced Jesus Christ was once kept here</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Photo stop at Charents Arch on the way</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Garni Temple — the only remaining pagan temple in Armenia, built in 77 AD by King Trdat, devoted to the God of Sun</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Tsaghkadzor & Lake Sevan
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Lake-Sevan-Armenia.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Lake Sevan Armenia">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Mountain Peaks & the Jewel of Armenia</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Drive to Tsaghkadzor — "Gorge of Flowers", a magical place of forested mountains</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Short walking tour around the charming town</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Ropeway ride to Teghenis Mountain for unforgettable panoramic views</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Kecharis Monastery</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Drive to Lake Sevan and visit Sevanavank Monastery</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Khor Virap, Noravank & Areni Wine
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Monastery-Khor-Virap.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Khor Virap Monastery">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Deep Dungeons, Red Canyons & 6,000-Year-Old Wine</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Khor Virap Monastery — "Deep Dungeon" where Gregory the Illuminator was held prisoner for 13 years</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Stunning views of Mount Ararat from the monastery</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Drive to Vayots Dzor region — the birthplace of Armenian wine dating back 6,000 years</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Noravank Monastery set in a dramatic red-rock canyon</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Lunch time near Arpa River</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Wine degustation at Areni Winery</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day6">
                                    <span class="badge bg-primary me-3">Day 6</span> Departure
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/armenia-mountains.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Armenia Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check out and transfer to airport for your onward flight</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return home with wonderful memories</li>
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
                    <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-pill fw-bold" id="pills-inclusions-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-inclusions" type="button"
                                role="tab">Inclusions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill fw-bold" id="pills-exclusions-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-exclusions" type="button"
                                role="tab">Exclusions</button>
                        </li>
                    </ul>
                    <div class="tab-content bg-white p-4 rounded shadow-sm border" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-inclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>5 Nights' accommodation in Yerevan in selected category Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Entrance fee to all mentioned monuments</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Yerevan Hotel VAT included in the pricing</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Excursion: Khor Virap – Areni – Noravank</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Excursion: Tsaghkadzor – Sevanavank Monastery</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Excursion: Geghard Monastery – Garni Temple</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Yerevan City Tour</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>English Speaking Driver-cum-Guide</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Tsaghkadzor Ropeway (supplement)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Tours on Private Exclusive Coach Basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Transfers on Private Exclusive Coach Basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>24 Hours Emergency Assistance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Local Taxes & Charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa Cost for Armenia</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified under Inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Guide & entrance fees during sightseeing not specified in inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Any revision in air fares, taxes or fuel surcharge leading to increased costs</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Any surcharges due to peak season, exhibitions, fairs etc.</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Rates are subject to availability & may change depending on season</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    Do UAE residents need a visa for Armenia?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Visa requirements depend on your nationality. Many nationalities can obtain an e-visa or visa on arrival. UAE residents should check Armenia's e-visa portal for the latest requirements based on their passport.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    What is the best time to visit Armenia?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Armenia is a year-round destination. Spring (April to June) and Autumn (September to October) offer the most pleasant weather. Summer is warm and ideal for Lake Sevan excursions, while winter transforms Tsaghkadzor into a popular ski resort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    What makes Garni Temple unique?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Garni is the only remaining pagan temple in Armenia. Built in 77 AD by King Trdat and devoted to the God of Sun, it showcases Hellenistic architecture with a characteristic colonnade on all sides. It was restored in 1976 and continues to welcome visitors daily.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    Is the wine tasting included in the package?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, the wine degustation at Areni Winery in the Vayots Dzor region is included in the package. This region is the birthplace of Armenian winemaking with a history dating back 6,000 years.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    Are the tours private or group-based?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    This package includes all tours and transfers on a private exclusive coach basis with an English-speaking driver-cum-guide, ensuring a personalized and comfortable experience throughout your trip.
                                </div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,600</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Exploration</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>5 Nights in Yerevan</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Garni, Geghard & Lake Sevan</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Khor Virap, Noravank & Wine</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private Transfers & Guide</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Explore Armenia 5N6D package"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
