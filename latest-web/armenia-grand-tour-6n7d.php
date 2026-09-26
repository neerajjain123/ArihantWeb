<?php
// Page SEO Variables
$pageTitle = "Grand Tour of Armenia 6 Nights 7 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience the ultimate Armenia adventure with our Grand Tour 6 Nights / 7 Days package. Visit Yerevan, Echmiadzin, Garni, Geghard…";
$pageKeywords = "grand tour armenia package, armenia 6 nights 7 days, yerevan echmiadzin tour, garni geghard trip, tatev monastery cable car, lake sevan dilijan, khor virap areni wine, armenia holiday from dubai, armenia travel uae";
$pageCanonical = "https://arihantlink.com/armenia-grand-tour-6n7d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Grand Tour of Armenia";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "armenia";
$breadcrumbBg = "img/armenia/Armenia-Monastery-Tatev.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Grand Tour of Armenia - 6 Nights / 7 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/armenia/Armenia-Monastery-Tatev.jpg",
    "https://arihantlink.com/img/armenia/Geghard-Monastery-in-Armenia.jpg",
    "https://arihantlink.com/img/armenia/Lake-Sevan-Armenia.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "3700",
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
    "name": "Grand Tour of Armenia 6N7D Detailed Itinerary",
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
        "description": "Full day Yerevan city tour including St. Gregory Cathedral, Republic Square, Tsitsernakaberd Memorial, Victory Park, Cascade Complex, and Northern Avenue."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Echmiadzin & Zvartnots",
        "description": "Visit UNESCO-listed Echmiadzin Mother Cathedral, St. Hripsime and St. Gayane churches, and the ruins of Zvartnots Temple."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Garni Temple & Geghard Monastery",
        "description": "Visit the pagan Garni Temple built in 77 AD and the UNESCO-listed Geghard cave monastery."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Areni Wine, Shaki Waterfall & Tatev Monastery",
        "description": "Wine tasting at Hin Areni winery, visit Shaki Waterfall, and reach Tatev Monastery via the Wings of Tatev cable car."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Lake Sevan & Dilijan",
        "description": "Visit Lake Sevan and Sevanavank Monastery, then explore Dilijan, the little Armenian Switzerland."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Day 7 - Departure",
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
        "text": "Armenia is a year-round destination. Spring (April to June) and Autumn (September to October) offer pleasant weather. Summer is ideal for Lake Sevan and Dilijan, while winter offers skiing in Tsaghkadzor."
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
                <p class="mb-0 fw-bold">6 Nights / 7 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-city fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Yerevan</p>
                <small class="text-muted">Capital City</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Tatev, Sevan & Dilijan</p>
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
                    <p class="text-primary fw-bold">The Complete Armenia Experience — Temples, Monasteries, Mountains & Wine</p>
                    <p>Armenia, a country located in the South Caucasus region, is a hidden gem for tourists seeking a unique and enriching travel experience. Nestled between Europe and Asia, this landlocked nation boasts a rich cultural heritage, breathtaking landscapes, and warm hospitality.</p>
                    <p>One of the main attractions for tourists in Armenia is its ancient history. The country is home to numerous historical sites, including the magnificent monasteries of Geghard and Tatev, which are UNESCO World Heritage Sites. These architectural marvels showcase the country's Christian heritage and offer visitors a glimpse into the country's past.</p>
                    <p>Nature lovers will find Armenia's landscapes truly captivating. The country is blessed with picturesque mountains, stunning lakes, and lush forests. Mount Ararat, with its snow-capped peaks, is an iconic symbol of Armenia and offers hikers and climbers a thrilling adventure. Lake Sevan, the largest lake in the Caucasus region, is a popular destination for water sports enthusiasts and provides a tranquil setting for relaxation.</p>
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
                                            <img src="img/armenia/Saint-Gregory-cathedral.jpg"
                                                class="img-fluid rounded shadow-sm" alt="St. Gregory Cathedral Yerevan">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">The Pink City Unveiled</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit St. Gregory the Illuminator Cathedral</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore Republic Square and Marshal Baghramyan Avenue</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Tsitsernakaberd Memorial Complex</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Stop at Victory Park and Mother Armenia monument</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Walk along Northern Avenue and the Cascade Complex</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Echmiadzin & Zvartnots
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/stgeogery-cathedral.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Echmiadzin Cathedral Armenia">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">The Spiritual Heart of Armenia</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit St. Hripsime and St. Gayane churches — dedicated to early Christian women-martyrs who fled Rome</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Echmiadzin Mother Cathedral — the main cathedral of the Armenian Apostolic Church and the first Christian cathedral in the world (UNESCO)</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Founded in the 4th century, built where Gregory the Illuminator saw his vision of Christ</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit the ruins of Zvartnots Temple — a masterpiece of 7th-century Armenian architecture (UNESCO)</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Designed by architect Toros Toramanyan, its reconstruction confirmed by a bas-relief of St. Chapelle in Paris</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Garni Temple & Geghard Monastery
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Geghard-Monastery.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Geghard Monastery Armenia">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Pagan Grandeur & Sacred Cave Halls</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Drive to Garni village (37 km from Yerevan)</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Garni Temple — Hellenistic pagan temple restored in 1976, UNESCO heritage since 2011</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Continue to Geghard Monastery — entirely carved out of the mountain</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>UNESCO World Heritage Site since 2000 — cave halls, holy spring, and ancient tombs</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Named "Holy Spear" after the spear that pierced Jesus Christ at the Crucifixion</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Areni Wine, Shaki Waterfall & Tatev
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Tatev-Monastery-Armenia.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Tatev Monastery Armenia">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Ancient Wine, Majestic Waterfall & the Wings of Tatev</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit "Hin Areni" Wine Factory in Areni settlement — wine tour and tasting of famous Armenian wines</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Areni region — the cradle of Armenian winemaking for millennia, combining historic traditions with modern equipment</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Shaki Waterfall in Syunik province — a stunning natural wonder in one of the coziest corners of Armenia</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Ride the "Wings of Tatev" cable car — 5.7 km ropeway passing over the deep Vorotan River gorge</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore Tatev Monastery — the wealthiest medieval monastery in Armenia, a spiritual, scientific, and strategic centre</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> Lake Sevan & Dilijan
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/armenia/Lake-Sevan-Armenia.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Lake Sevan Armenia">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">The Azure Sea & Little Armenian Switzerland</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Drive north towards Lake Sevan — the largest freshwater lake in the Caucasus at 1,900 metres above sea level</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit Sevanavank Monastery on the peninsula — preserved since the 18th century</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Continue to Dilijan — nicknamed "Little Armenian Switzerland", a city surrounded by forests</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore Dilijan's old quarter, Lake Parz, and scenic monastery trails</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Return to Yerevan</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-star text-secondary me-2"></i>Overnight stay in Yerevan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 7 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day7">
                                    <span class="badge bg-primary me-3">Day 7</span> Departure
                                </button>
                            </h2>
                            <div id="day7" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>6 Nights' accommodation in Yerevan in selected category Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Tours & Transfers on Private Basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Professional English Speaking Guide</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Excursions as per Itinerary</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Wine degustation in "Hin Areni" Wine Factory</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Entrance Fees: Zvartnots Temple, Garni Temple, "Hin Areni" Wine Factory, "Wings of Tatev" Cable Car</li>
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
                                    Armenia is a year-round destination. Spring (April to June) and Autumn (September to October) offer the most pleasant weather. Summer is warm and ideal for Lake Sevan and Dilijan excursions, while winter offers skiing in Tsaghkadzor.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    What is the Wings of Tatev cable car?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The Wings of Tatev is a 5.7 km ropeway that passes over the deep Vorotan River gorge and lush forests. It takes approximately 11 minutes to travel from Halidzor village to Tatev Monastery, carrying 30 passengers at a time. The entrance fee is included in this package.
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
                                    Yes, the wine degustation at "Hin Areni" Wine Factory in Areni village is included. The Vayots Dzor region is the birthplace of Armenian winemaking with a history dating back thousands of years, and the winery combines historic traditions with modern equipment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    What is Echmiadzin Cathedral?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Echmiadzin Mother Cathedral is the main cathedral of the Armenian Apostolic Church and is considered the very first Christian cathedral in the world. Founded at the beginning of the 4th century, it is a UNESCO World Heritage Site. According to legend, it was built where Gregory the Illuminator saw a vision of Christ.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq6">
                                    Are the tours private or group-based?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    This package includes all tours and transfers on a private basis with a professional English-speaking guide, ensuring a personalized and flexible experience throughout your 7-day journey.
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 3,700</h2>
                            <span class="text-muted">Per Person (6N/7D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Grand Tour</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>6 Nights in Yerevan</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Echmiadzin, Garni & Geghard</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Tatev Cable Car & Wine Tasting</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Lake Sevan & Dilijan</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private Transfers & Guide</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Grand Tour of Armenia 6N7D package"
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
