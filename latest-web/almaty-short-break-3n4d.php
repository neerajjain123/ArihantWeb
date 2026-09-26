<?php
// Page SEO Variables
$pageTitle = "Simply Almaty 3 Nights 4 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Discover Almaty with our Simply Almaty 3 Nights / 4 Days package. Explore Zenkov Cathedral, Panfilov Park, Kok-Tobe Hill cable car, Shymbulak Ski Resort…";
$pageKeywords = "almaty 3 nights 4 days, simply almaty package, almaty short break dubai, kok tobe hill tour, shymbulak ski resort, zenkov cathedral, almaty holiday deal, kazakhstan travel uae";
$pageCanonical = "https://arihantlink.com/almaty-short-break-3n4d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Simply Almaty";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "kazakhstan";
$breadcrumbBg = "img/almaty/Kok-Tobe-Hill-22.webp";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Simply Almaty - 3 Nights / 4 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/almaty/Kok-Tobe-Hill-22.webp",
    "https://arihantlink.com/img/almaty/Shymbulak-Ski-Resort.webp",
    "https://arihantlink.com/img/almaty/zenkov-cathedral.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1799",
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
    "name": "Simply Almaty 3N4D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Almaty",
        "description": "Arrive at Almaty International Airport, meet representative, transfer to hotel. Evening at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Almaty City Tour & Kok-Tobe Hill",
        "description": "City tour including Republic Square, Panfilov Park, Zenkov Cathedral, First President Park, and cable car to Kok-Tobe Hill."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Medeu & Shymbulak Ski Resort",
        "description": "Visit Medeu High Mountain Skating Rink and Shymbulak Ski Resort with 3-tier gondola to 3,200m."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Departure",
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
      "name": "Do UAE residents need a visa for Kazakhstan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many nationalities including UAE nationals enjoy visa-free entry to Kazakhstan for up to 30 days. Other passport holders should check Kazakhstan e-visa portal for requirements."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Almaty?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct flights from Dubai to Almaty take approximately 4 to 5 hours."
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
                <p class="mb-0 fw-bold">3 Nights / 4 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-city fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Almaty</p>
                <small class="text-muted">Kazakhstan</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Kok-Tobe & Shymbulak</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private Transfers</p>
                <small class="text-muted">Seamless Travel</small>
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
                    <p class="text-primary fw-bold">Mountain Peaks, Soviet Heritage & Vibrant City Life</p>
                    <p>Almaty, Kazakhstan's largest city and cultural capital, is a breathtaking destination nestled at the foot of the majestic Trans-Ili Alatau mountains. Once the nation's capital, Almaty seamlessly blends modern city life with awe-inspiring natural landscapes just minutes from the city centre.</p>
                    <p>From the high-altitude Medeu Skating Rink — the world's largest open-air ice rink — to the stunning Shymbulak Ski Resort with panoramic views at 3,200 metres, Almaty is an adventure lover's paradise. The city itself charms visitors with its tree-lined boulevards, the colourful Zenkov Cathedral in Panfilov Park, and the panoramic cable car ride to Kok-Tobe Hill.</p>
                    <p>With a fascinating mix of Kazakh, Russian, and Central Asian culture, superb cuisine, and warm hospitality, Almaty offers a truly unique travel experience just a short flight from Dubai.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Almaty
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/kazakhstan-almaty.webp"
                                                class="img-fluid rounded shadow-sm" alt="Almaty City Arrival">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Almaty International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our local representative</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer and check-in at your hotel in Almaty</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Rest of the day free at leisure to explore the city independently</li>
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
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Almaty City Tour & Kok-Tobe Hill
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/zenkov-cathedral.webp"
                                                class="img-fluid rounded shadow-sm" alt="Zenkov Cathedral Almaty">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Discover the Heart of Almaty</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit First President Park and Republic Square</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Park of 28 Panfilov Guardsmen and the iconic Zenkov Cathedral — one of the tallest wooden buildings in the world</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the Eternal Flame and Independence Monument</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cable car ride to Kok-Tobe Hill — panoramic city views and the 372-metre TV Tower</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Kok-Tobe amusement area, mini zoo, and souvenir shops</li>
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
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Medeu & Shymbulak Ski Resort
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Shymbulak-Ski-Resort.webp"
                                                class="img-fluid rounded shadow-sm" alt="Shymbulak Ski Resort">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">High-Altitude Mountain Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Medeu High Mountain Skating Rink — the world's largest open-air ice rink at 1,691 metres</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue to Shymbulak Ski Resort via 3-tier gondola system</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Reach the observation deck at 3,200 metres with breathtaking mountain panoramas</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening stroll along Panfilov Promenade and Arbat Street</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Almaty</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Departure
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Shymbulak-mountain.webp"
                                                class="img-fluid rounded shadow-sm" alt="Almaty Mountains Departure">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final breakfast at the hotel</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights' accommodation in Almaty in selected category Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Meet and greet at Almaty Airport</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Almaty City Tour as per itinerary</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Cable car rides (Kok-Tobe Hill & Shymbulak gondola)</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Do UAE residents need a visa for Kazakhstan?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Many nationalities, including UAE nationals, enjoy visa-free entry to Kazakhstan for up to 30 days. Other passport holders should check the Kazakhstan e-visa portal for the latest requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How long is the flight from Dubai to Almaty?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Direct flights from Dubai to Almaty take approximately 4 to 5 hours, making it an easy and convenient getaway from the UAE.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What is the best time to visit Almaty?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Almaty is a year-round destination. Spring (April–June) and Autumn (September–October) offer pleasant weather for sightseeing. Summer is warm and ideal for lakes and outdoor activities. Winter (December–March) is perfect for skiing at Shymbulak and skating at Medeu.
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,799</h2>
                            <span class="text-muted">Per Person (3N/4D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Short Break</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 Nights in Almaty</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Kok-Tobe & Shymbulak Cable Cars</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private Transfers & Guide</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Simply Almaty 3N4D package"
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
