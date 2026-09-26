<?php
// Page SEO Variables
$pageTitle = "Best of Thailand with Phuket 7 Nights 8 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience the Best of Thailand with Phuket in our grand 7 Nights / 8 Days tour covering Phuket, Pattaya and Bangkok. Phi Phi Island, Safari World, Skywalk, Dinner Cruise and more. Starting from AED 2,410.";
$pageKeywords = "best of thailand package, phuket pattaya bangkok tour, 7 nights 8 days thailand, phi phi island tour, safari world bangkok, mahanakhon skywalk, thailand holiday from dubai, grand thailand tour";
$pageCanonical = "https://arihantlink.com/thailand-best-of-phuket-7n8d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Best of Thailand with Phuket";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/Thailand-temple.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Best of Thailand with Phuket - 7 Nights / 8 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Grand Tour Seekers"],
  "image": [
    "https://arihantlink.com/img/thailand/Thailand-temple.jpg",
    "https://arihantlink.com/img/thailand/Phuket-beach.jpg",
    "https://arihantlink.com/img/thailand/Bangkok-city.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2410",
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
    "name": "Best of Thailand with Phuket 7N8D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Phuket",
        "description": "Arrive at Phuket Airport, hotel check-in. Leisure at beaches including Patong, Karon, and Kamala."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Phuket City Tour",
        "description": "Half-day city tour visiting Big Buddha, Wat Chalong, Prom Thep Cape, and Phuket Town Neo-Portuguese architecture."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Phi Phi Island Tour",
        "description": "Full-day big boat tour to Maya Bay, Viking Cave, Pileh Bay, Monkey Island with snorkeling and lunch at Khai Nok Island."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Transfer to Pattaya & Tiger Topia",
        "description": "Fly Phuket to Bangkok, transfer to Pattaya. Visit Tiger Topia Zoo with tigers, camels, deer, elephants, and chimpanzees."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Coral Island & Alcazar Show",
        "description": "Half-day Coral Island speedboat with parasailing and sea walking options. Indian lunch. Evening Alcazar Cabaret Show."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Bangkok: City Tour, Skywalk & Dinner Cruise",
        "description": "Transfer to Bangkok. City tour with temples, Gems Gallery, Mahanakhon Skywalk at 314m. Evening Chao Phraya Dinner Cruise."
      },
      {
        "@type": "ListItem",
        "position": 7,
        "name": "Day 7 - Safari World & Marine Park",
        "description": "Full-day at 170-acre Safari World and Marine Park with zebras, giraffes, tigers, lions, dolphins, and seals. Indian lunch."
      },
      {
        "@type": "ListItem",
        "position": 8,
        "name": "Day 8 - Departure",
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
      "name": "Are internal flights included in this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The internal flight from Phuket to Bangkok is not included in the package price. However, we can arrange this for you at an additional cost. Budget airlines offer affordable fares on this route."
      }
    },
    {
      "@type": "Question",
      "name": "Is this package suitable for families?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, this package is perfect for families of all ages. Activities like Safari World, Tiger Topia, Coral Island, and the Alcazar Show are enjoyable for children and adults alike."
      }
    },
    {
      "@type": "Question",
      "name": "How many cities does this package cover?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This grand tour covers three of Thailand\'s most popular destinations: Phuket (3 nights), Pattaya (2 nights), and Bangkok (2 nights), giving you a comprehensive Thai experience."
      }
    },
    {
      "@type": "Question",
      "name": "What is Prom Thep Cape?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Prom Thep Cape is Phuket\'s most famous sunset viewpoint, located at the southern tip of the island. It offers breathtaking panoramic views of the Andaman Sea and is one of the most photographed spots in Thailand."
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
                <p class="mb-0 fw-bold">7 Nights / 8 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Phuket, Pattaya & Bangkok</p>
                <small class="text-muted">Location</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">3 Cities, 7 Tours</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-globe-asia fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Grand Thailand Experience</p>
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
                    <p class="text-primary fw-bold">The Ultimate Three-City Thailand Experience</p>
                    <p>The Best of Thailand with Phuket is our grand tour that spans three of the country's most iconic destinations in eight unforgettable days. Start on the sun-drenched shores of Phuket, Thailand's largest island, where world-class beaches meet rich cultural heritage. Continue to the vibrant seaside city of Pattaya with its coral islands and lively entertainment. Finish in the dazzling capital Bangkok, where ancient temples stand alongside towering skyscrapers.</p>
                    <p>With seven curated tours packed into this itinerary, every day brings a new adventure. Cruise around Phi Phi Island's legendary Maya Bay, get up close with tigers at Tiger Topia, speed out to Coral Island, and enjoy the spectacular Alcazar Cabaret Show. In Bangkok, soar to the top of the Mahanakhon Skywalk at 314 metres, glide along the Chao Phraya River on a dinner cruise, and spend a thrilling day at Safari World with its 170 acres of wildlife.</p>
                    <p>This package combines island paradise, city excitement, and cultural immersion with private transfers, daily breakfast, and carefully selected experiences that showcase the very best Thailand has to offer. Ideal for families, couples, and groups wanting the complete Thai experience.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Phuket
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Phuket-beach.jpg" class="img-fluid rounded shadow-sm" alt="Arrival in Phuket">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Phuket International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and private transfer to your hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Phuket hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Leisure time at Phuket's famous beaches — Patong, Karon, or Kamala</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the vibrant nightlife and local dining scene</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Phuket</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Phuket City Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Thailand-temple.jpg" class="img-fluid rounded shadow-sm" alt="Phuket City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Cultural Landmarks & Scenic Viewpoints</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Phuket City Tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the majestic Big Buddha sitting atop Nakkerd Hill</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the historic Wat Chalong, Phuket's most important temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Watch the sunset at Prom Thep Cape, Phuket's famous viewpoint</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stroll through Phuket Town's charming Neo-Portuguese architecture</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Phuket</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Phi Phi Island Tour
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-Phi-Phi-island.jpg" class="img-fluid rounded shadow-sm" alt="Phi Phi Island Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Maya Bay, Viking Cave & Snorkeling Paradise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day Phi Phi Island tour by big boat</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the iconic Maya Bay, made famous by Hollywood</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the ancient Viking Cave and stunning Pileh Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet playful monkeys at Monkey Island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Snorkeling in crystal-clear Andaman waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch at Khai Nok Island</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Transfer to Pattaya & Tiger Topia
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-lan-Pattaya.jpg" class="img-fluid rounded shadow-sm" alt="Pattaya Tiger Topia Zoo">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Fly to Bangkok & Wildlife Adventure in Pattaya</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Fly from Phuket to Bangkok (flight not included)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer from Bangkok Airport to Pattaya</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Tiger Topia Zoo — home to tigers, camels, deer, elephants, and chimpanzees</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy close encounters with exotic wildlife</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Pattaya hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Pattaya</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Coral Island & Alcazar Show
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Pattaya-cruise.jpg" class="img-fluid rounded shadow-sm" alt="Coral Island and Alcazar Show Pattaya">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Beach Paradise & World-Famous Cabaret</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Coral Island (Koh Larn) speedboat tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional water activities: parasailing and sea walking (at extra cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Indian lunch included on the island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Pattaya and free time for shopping</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Alcazar Cabaret Show — spectacular stage performance</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Pattaya</li>
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
                                    <span class="badge bg-primary me-3">Day 6</span> Bangkok: City Tour, Skywalk & Dinner Cruise
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/chao-phraya-river.jpg" class="img-fluid rounded shadow-sm" alt="Bangkok City Tour Skywalk and Dinner Cruise">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Temples, Skywalk at 314m & River Cruise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel and checkout from Pattaya</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer from Pattaya to Bangkok</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Bangkok City Tour: Marble Buddha and Golden Buddha temples</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the famous Gems Gallery</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Mahanakhon Skywalk — glass-floor observation deck at 314 metres</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Chao Phraya Dinner Cruise along Bangkok's illuminated riverside</li>
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
                                    <span class="badge bg-primary me-3">Day 7</span> Safari World & Marine Park
                                </button>
                            </h2>
                            <div id="day7" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city (2).jpg" class="img-fluid rounded shadow-sm" alt="Safari World Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">170-Acre Wildlife Park & Marine Shows</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day at Safari World — Bangkok's premier 170-acre wildlife park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive through open safari zones with zebras, giraffes, tigers, and lions</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Marine Park with dolphin and seal shows</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Indian lunch included at the park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Bangkok hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bangkok</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Day 8 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day8">
                                    <span class="badge bg-primary me-3">Day 8</span> Departure
                                </button>
                            </h2>
                            <div id="day8" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Bangkok Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with amazing memories of your grand Thailand adventure</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights' accommodation in Phuket + 2 Nights' in Pattaya + 2 Nights' in Bangkok</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phuket airport transfers (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bangkok–Pattaya–Bangkok transfers (private basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phuket City Tour with Big Buddha and Wat Chalong (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phi Phi Island tour with lunch by big boat (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Alcazar Cabaret Show entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Coral Island (Koh Larn) speedboat tour with Indian lunch (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Tiger Topia Zoo entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bangkok Temple Tour with Mahanakhon Skywalk</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Safari World & Marine Park with Indian lunch (SIC basis, closed Mondays)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Chao Phraya Dinner Cruise (shared basis)</li>
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
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Internal flights (Phuket to Bangkok)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Are internal flights included in this package?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The internal flight from Phuket to Bangkok is not included in the package price. However, we can arrange this for you at an additional cost. Budget airlines offer affordable fares on this popular route, and we recommend booking early for the best rates.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Is this package suitable for families?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Absolutely! This package is perfect for families of all ages. Activities like Safari World, Tiger Topia, Coral Island, Phi Phi Island, and the Alcazar Show are enjoyable for children and adults alike. The mix of beach, wildlife, and cultural experiences ensures everyone has a memorable time.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">How many cities does this package cover?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">This grand tour covers three of Thailand's most popular destinations: Phuket (3 nights) for islands and beaches, Pattaya (2 nights) for coral reefs and entertainment, and Bangkok (2 nights) for temples, wildlife parks, and city experiences. It is the most comprehensive Thailand itinerary we offer.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is Prom Thep Cape?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Prom Thep Cape is Phuket's most famous sunset viewpoint, located at the southern tip of the island. It offers breathtaking panoramic views of the Andaman Sea and is one of the most photographed spots in all of Thailand. The cape is included in the Phuket City Tour on Day 2.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,410</h2>
                            <span class="text-muted">Per Person (7N/8D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Grand Tour</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 Cities in 8 Days</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Phi Phi & Coral Islands</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Tiger Topia & Safari World</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Skywalk & Dinner Cruise</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Best of Thailand with Phuket 7N8D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
