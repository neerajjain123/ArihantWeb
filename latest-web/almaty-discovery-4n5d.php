<?php
// Page SEO Variables
$pageTitle = "Almaty Discovery 4 Nights 5 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Explore the best of Almaty with our 4 Nights / 5 Days Discovery package. Visit Zenkov Cathedral, Kok-Tobe Hill, Kolsai Lakes, Charyn Canyon…";
$pageKeywords = "almaty discovery tour package, almaty 4 nights 5 days, kolsai lakes tour, charyn canyon trip, shymbulak ski resort, kok tobe hill, almaty holiday from dubai, kazakhstan travel uae";
$pageCanonical = "https://arihantlink.com/almaty-discovery-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Almaty Discovery";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "kazakhstan";
$breadcrumbBg = "img/almaty/zankov-cathedral-cover.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Almaty Discovery - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/almaty/Kolsai-Lakes.webp",
    "https://arihantlink.com/img/almaty/Charyn-Crayon.webp",
    "https://arihantlink.com/img/almaty/Shymbulak-Ski-Resort.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2499",
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
    "name": "Almaty Discovery 4N5D Detailed Itinerary",
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
        "description": "Almaty city tour with Republic Square, Panfilov Park, Zenkov Cathedral, and cable car to Kok-Tobe Hill."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Kolsai Lakes & Charyn Canyon",
        "description": "Full day excursion to Kolsai Lakes and the dramatic Charyn Canyon."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Medeu & Shymbulak Ski Resort",
        "description": "Visit Medeu Skating Rink and Shymbulak Ski Resort with gondola ride to 3,200m."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure",
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
      "name": "Do UAE residents need a visa for Kazakhstan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many nationalities enjoy visa-free entry for up to 30 days. Check the Kazakhstan e-visa portal for specific requirements based on your passport."
      }
    },
    {
      "@type": "Question",
      "name": "What are Kolsai Lakes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kolsai Lakes are three stunning alpine lakes in the Kungei Alatau mountains, known as the Pearl of the Tien Shan. They sit at elevations between 1,800 and 2,800 metres."
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
                <p class="mb-0 fw-bold">4 Nights / 5 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-city fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Almaty</p>
                <small class="text-muted">Kazakhstan</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Kolsai & Charyn Canyon</p>
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
                    <p class="text-primary fw-bold">Alpine Lakes, Grand Canyons & Mountain Peaks</p>
                    <p>Almaty, Kazakhstan's largest city and cultural capital, is a breathtaking destination nestled at the foot of the majestic Trans-Ili Alatau mountains. This package takes you beyond the city to explore some of Central Asia's most spectacular natural wonders.</p>
                    <p>Discover Kolsai Lakes — three cascading alpine lakes known as the "Pearl of the Tien Shan" — set amidst the Kungei Alatau mountain range. Marvel at Charyn Canyon, often called the "Grand Canyon of Asia", with its dramatic red-rock formations carved over millions of years. And reach the summit of Shymbulak Ski Resort at 3,200 metres for panoramic mountain views.</p>
                    <p>Combined with Almaty's vibrant city life, the iconic Zenkov Cathedral, and panoramic Kok-Tobe Hill, this 4-night itinerary delivers the perfect balance of adventure and culture.</p>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Rest of the day free at leisure</li>
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
                                            <img src="img/almaty/Kok-Tobe-hill.webp" class="img-fluid rounded shadow-sm" alt="Kok-Tobe Hill Almaty">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Culture, Cathedrals & Panoramic Views</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit First President Park and Republic Square</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore Park of 28 Panfilov Guardsmen with the iconic Zenkov Cathedral</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>See the Eternal Flame and Independence Monument</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cable car ride to Kok-Tobe Hill — city panorama and 372-metre TV Tower</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy fast coaster ride, mini zoo, and souvenir shopping at the hilltop</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Kolsai Lakes & Charyn Canyon
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Charyn-Crayon.webp" class="img-fluid rounded shadow-sm" alt="Charyn Canyon Kazakhstan">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">The Pearl of Tien Shan & the Grand Canyon of Asia</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day excursion departing early morning</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Kolsai Lakes — three cascading alpine lakes at 1,800–2,800 metres in the Kungei Alatau range</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy the pristine turquoise waters surrounded by spruce forests</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue to Charyn Canyon — dramatic red-rock formations carved over 12 million years</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the Valley of Castles with its towering sandstone pillars</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Almaty in the evening</li>
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
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Medeu & Shymbulak Ski Resort
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Medeu_Skating_Rink.webp" class="img-fluid rounded shadow-sm" alt="Medeu Skating Rink">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">High-Altitude Mountain Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Medeu High Mountain Skating Rink at 1,691 metres</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue to Shymbulak Ski Resort via 3-tier gondola system</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Reach the observation deck at 3,200 metres for breathtaking panoramas</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening stroll along Panfilov Promenade and Arbat Street shopping</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Departure
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/almaty/Shymbulak-mountain.webp" class="img-fluid rounded shadow-sm" alt="Almaty Departure">
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 Nights' accommodation in Almaty in selected category Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Meet and greet at Almaty Airport</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Almaty City Tour as per itinerary</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Cable car rides (Kok-Tobe Hill & Shymbulak gondola)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Kolsai Lakes & Charyn Canyon excursion</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What are Kolsai Lakes?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Kolsai Lakes are three stunning alpine lakes in the Kungei Alatau mountains, known as the "Pearl of the Tien Shan". They sit at elevations between 1,800 and 2,800 metres and are surrounded by pristine spruce forests.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">How far is Charyn Canyon from Almaty?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Charyn Canyon is approximately 200 km east of Almaty, about a 3–4 hour drive. The canyon stretches over 80 km along the Charyn River and features dramatic rock formations carved over 12 million years, often compared to the Grand Canyon.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Is the Kolsai & Charyn trip physically demanding?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The excursion involves moderate walking at the lake and canyon viewpoints. It is suitable for most fitness levels, though comfortable walking shoes are recommended. The drive is long but scenic, with plenty of photo stops along the way.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,499</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Best Seller</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4 Nights in Almaty</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Kolsai Lakes & Charyn Canyon</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Shymbulak Gondola at 3,200m</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private Transfers & Guide</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Almaty Discovery 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
