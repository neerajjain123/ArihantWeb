<?php
// Page SEO Variables
$pageTitle = "Best of Almaty 5 Nights 6 Days Tour Package from Dubai | Arihant Travel";
$pageDescription = "The ultimate Almaty experience — 5 Nights / 6 Days covering Kolsai Lakes with overnight stay, Kaindy Lake by 4x4, Charyn Canyon, Shymbulak Ski Resort…";
$pageKeywords = "best of almaty tour package, almaty 5 nights 6 days, big almaty lake, kolsai lakes tour, kaindy lake, charyn canyon trip, shymbulak ski resort, medeu skating rink, almaty holiday from dubai, kazakhstan travel uae";
$pageCanonical = "https://arihantlink.com/almaty-best-of-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Best of Almaty";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "kazakhstan";
$breadcrumbBg = "img/almaty/Big-Almaty-Lake-1.webp";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Best of Almaty - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/almaty/Big-Almaty-Lake-1.webp",
    "https://arihantlink.com/img/almaty/Kolsai-Lakes.webp",
    "https://arihantlink.com/img/almaty/Charyn-Crayon.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "3235",
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
    "name": "Best of Almaty 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Almaty",
        "description": "Arrive at Almaty Airport, meet representative, transfer to hotel."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - City Tour & Kok-Tobe Hill",
        "description": "Almaty city tour with Republic Square, Panfilov Park, Zenkov Cathedral, Opera Theatre, and cable car to Kok-Tobe Hill."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Black Canyon & Kolsai Lakes",
        "description": "Drive through Black Canyon to Kolsai Lakes, the Pearl of the Tien Shan. Overnight at Kolsai National Park."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Kaindy Lake & Charyn Canyon",
        "description": "4x4 and horseback excursion to Kaindy Lake submerged forest, then explore the dramatic Charyn Canyon."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Shymbulak Ski Resort & Arbat Street",
        "description": "Shymbulak Ski Resort via 3-tier gondola to 3,200m. Evening Panfilov Promenade and Arbat Street walk."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure",
        "description": "Breakfast, Green Bazaar visit, and transfer to airport."
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
      "name": "Do UAE residents need a visa for Kazakhstan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many nationalities enjoy visa-free entry for up to 30 days. Check the Kazakhstan e-visa portal for specific requirements based on your passport."
      }
    },
    {
      "@type": "Question",
      "name": "What is Kaindy Lake famous for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kaindy Lake is famous for its submerged forest of spruce trees rising from the turquoise water. The lake was formed in 1911 after an earthquake created a natural dam."
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
                <p class="mb-0 fw-bold">Almaty & Kolsai</p>
                <small class="text-muted">2 Cities</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Kolsai, Kaindy & Charyn</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-skiing fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Shymbulak at 3,200m</p>
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
                    <p class="text-primary fw-bold">The Complete Almaty Experience — Lakes, Canyons, Mountains & Culture</p>
                    <p>This comprehensive 5-night itinerary covers every must-see highlight in and around Almaty, including an overnight stay at Kolsai National Park. From the turquoise Kolsai Lakes to the submerged forest of Kaindy Lake, from the dramatic red walls of Charyn Canyon to the snow-capped peaks of Shymbulak at 3,200 metres — this is the ultimate Kazakhstan adventure.</p>
                    <p>Almaty, Kazakhstan's largest city, sits at the foot of the Trans-Ili Alatau mountains. The city enchants visitors with its tree-lined boulevards, the colourful Zenkov Cathedral, and the panoramic cable car ride to Kok-Tobe Hill. Beyond the city, the Kazakh wilderness delivers world-class natural wonders within easy reach — often referred to as "Kazakh Switzerland".</p>
                    <p>Whether you are seeking adventure, natural beauty, cultural immersion, or simply a unique destination just 4–5 hours from Dubai, this package delivers it all.</p>
                </div>

                <!-- Itinerary -->
                <div class="mb-5">
                    <h2 class="mb-4">Detailed Itinerary</h2>
                    <div class="accordion" id="itineraryAccordion">
                        <!-- Day 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#day1">
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Almaty
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/kazakhstan-almaty.webp" class="img-fluid rounded shadow-sm" alt="Almaty City Arrival">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Almaty International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our local representative</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer and check-in at your hotel in Almaty</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Rest of the day free at leisure to explore the city</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Almaty</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Almaty City Tour & Kok-Tobe Hill
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/zenkov-cathedral.webp" class="img-fluid rounded shadow-sm" alt="Zenkov Cathedral Almaty">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Culture, Cathedrals & Panoramic Views</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit First President Park and Republic Square</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Park of 28 Panfilov Guardsmen and the iconic Zenkov Cathedral</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the Opera and Ballet Theatre</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cable car ride to Kok-Tobe Hill — panoramic city views and 372-metre TV Tower</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy amusement area, fast coaster, and souvenir shopping at the hilltop</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Almaty</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Black Canyon & Kolsai Lakes
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Kolsai-Lakes.webp" class="img-fluid rounded shadow-sm" alt="Kolsai Lakes Kazakhstan">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Into the Wilderness — The Pearl of the Tien Shan</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart Almaty towards the Kungei Alatau mountains</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive through Black Canyon — dramatic gorge scenery</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Kolsai Lakes — three cascading alpine lakes at 1,800–2,800 metres, known as the "Pearl of the Tien Shan"</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the pristine turquoise waters surrounded by spruce forests</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check in at Kolsai National Park accommodation</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Kolsai</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Kaindy Lake & Charyn Canyon
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Charyn-Crayon.webp" class="img-fluid rounded shadow-sm" alt="Charyn Canyon Kazakhstan">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Submerged Forests & the Grand Canyon of Asia</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at Kolsai accommodation</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Excursion to Kaindy Lake via 4x4 vehicle and horseback ride</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Kaindy's famous submerged forest — spruce trees rising from turquoise water, formed by a 1911 earthquake</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue to Charyn Canyon — dramatic red-rock formations carved over 12 million years</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the Valley of Castles with towering sandstone pillars across seven canyons</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Almaty in the evening</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Almaty</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Medeu & Shymbulak Ski Resort
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Medeu_Skating_Rink.webp" class="img-fluid rounded shadow-sm" alt="Medeu Skating Rink">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">High-Altitude Mountain Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Medeu High Mountain Skating Rink — the world's largest open-air ice rink at 1,691 metres</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue to Shymbulak Ski Resort via 3-tier gondola system</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Reach the observation deck at 3,200 metres for breathtaking mountain panoramas</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening stroll along Panfilov Promenade and Arbat Street shopping</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Almaty</li>
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
                                            <img src="img/almaty/Shymbulak-mountain.webp" class="img-fluid rounded shadow-sm" alt="Almaty Mountains Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional morning visit to Green Bazaar for local souvenirs and Kazakh delicacies</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check out and transfer to Almaty International Airport</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 Nights' accommodation in Almaty + 1 Night at Kolsai National Park</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Meet and greet at Almaty Airport</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Almaty City Tour as per itinerary</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Cable car rides (Kok-Tobe Hill & Shymbulak 3-tier gondola)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Kolsai Lakes & Charyn Canyon excursion</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kaindy Lake excursion (with 4x4 & horseback)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Entrance fees to all mentioned attractions</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All Tours & Transfers on Private Basis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>English Speaking Guide</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>1L water bottle daily per person</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Hotel VAT & Local Taxes</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Kazakhstan Visa charges (if applicable)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified under Inclusions</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Meals beyond breakfast</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Do UAE residents need a visa for Kazakhstan?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Many nationalities, including UAE nationals, enjoy visa-free entry to Kazakhstan for up to 30 days. Other passport holders should check the Kazakhstan e-visa portal for specific requirements.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What is Big Almaty Lake?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Big Almaty Lake is a stunning natural alpine reservoir at 2,511 metres above sea level, surrounded by mountain peaks. The lake's colour shifts from deep green to turquoise blue depending on the season, making it one of Almaty's most photographed attractions.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is Kaindy Lake famous for?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Kaindy Lake is famous for its surreal submerged forest — spruce trees rising straight out of the turquoise water. The lake was formed in 1911 after an earthquake triggered a landslide that created a natural dam. Access is via 4x4 vehicle, adding to the adventure.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">How long is the flight from Dubai to Almaty?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Direct flights from Dubai to Almaty take approximately 4 to 5 hours, making it an easy and convenient getaway from the UAE.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">What is the best time to visit Almaty?</button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Almaty is a year-round destination. Spring (April–June) and Autumn (September–October) offer pleasant weather for lake and canyon excursions. Summer is warm and ideal for all outdoor activities. Winter (December–March) is perfect for skiing at Shymbulak and skating at Medeu.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 3,235</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Grand Tour</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4 Nights Almaty + 1 Night Kolsai</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Kolsai Lakes & Kaindy Lake (4x4)</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Charyn Canyon & Shymbulak</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private Transfers & Guide</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Best of Almaty 5N6D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
