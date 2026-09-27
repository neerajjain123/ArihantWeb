<?php
// Page SEO Variables
$pageTitle = "Amazing Phuket 4 Nights 5 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Explore Phuket with our Amazing Phuket 4 Nights / 5 Days package. Visit Phi Phi Islands, Maya Bay, Phuket city tour, and pristine beaches.";
$pageKeywords = "amazing phuket package, phuket 4 nights 5 days, phi phi island tour, maya bay phuket, phuket holiday from dubai, thailand beach package uae, phuket travel";
$pageCanonical = "https://arihantlink.com/thailand-amazing-phuket-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Amazing Phuket";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/Phuket-beach.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Amazing Phuket - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/thailand/Phuket-beach.jpg",
    "https://arihantlink.com/img/thailand/Koh-Phi-Phi-island.jpg",
    "https://arihantlink.com/img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1030",
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
    "name": "Amazing Phuket 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Phuket",
        "description": "Arrive at Phuket Airport, transfer to resort. Rest of day at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Phuket City Tour",
        "description": "Drive via scenic beach roads (Patong, Karon, Kata). Visit Phuket View Point, Wat Chalong temple, Cashew Nut factory."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Phi Phi Island Excursion",
        "description": "Full-day by big boat: Maya Bay, Pileh Bay emerald lagoon, Nui Bay cliffs, Monkey Beach. Snorkeling. Lunch included."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Leisure Day",
        "description": "Free day. Optional: James Bond Island, Tiger Kingdom, Dolphin Show."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure",
        "description": "Breakfast. Airport transfer for departure."
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
      "name": "How long is the flight from Dubai to Phuket?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The flight from Dubai to Phuket takes approximately 6 to 7 hours with a layover, as most flights connect through Bangkok or other regional hubs. Some seasonal direct flights may be available."
      }
    },
    {
      "@type": "Question",
      "name": "Is Phuket suitable for families?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Phuket is an excellent family destination with kid-friendly beaches, water parks, aquariums, and family-oriented island tours. The calm waters and wide sandy beaches make it safe and enjoyable for children."
      }
    },
    {
      "@type": "Question",
      "name": "What is Maya Bay?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maya Bay is a stunningly beautiful bay on Phi Phi Leh island, made famous by the Hollywood movie The Beach starring Leonardo DiCaprio. It features crystal-clear waters surrounded by towering limestone cliffs."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Phuket?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best time to visit Phuket is from November to April during the dry season. The weather is sunny, the seas are calm, and conditions are perfect for island hopping, snorkeling, and beach activities."
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
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Phuket Thailand</p>
                <small class="text-muted">Location</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-island-tropical fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Phi Phi Islands</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Beaches & Snorkeling</p>
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
                    <p class="text-primary fw-bold">Island Paradise, Emerald Lagoons & Tropical Bliss</p>
                    <p>Phuket, Thailand's largest island, is a world-renowned tropical paradise nestled in the Andaman Sea. With its stunning white-sand beaches, dramatic limestone karsts, vibrant old town, and crystal-clear waters, Phuket has earned its place as one of Southeast Asia's most sought-after holiday destinations.</p>
                    <p>This 4-night beach escape immerses you in the best of Phuket. Take a scenic city tour along the famous beach roads of Patong, Karon, and Kata, stopping at panoramic viewpoints and the revered Wat Chalong temple. Then embark on a full-day Phi Phi Island adventure by big boat, exploring the iconic Maya Bay, the emerald lagoon of Pileh Bay, the dramatic cliffs of Nui Bay, and the playful monkeys of Monkey Beach. Snorkeling in crystal-clear waters rounds off this unforgettable day.</p>
                    <p>With a leisure day to explore at your own pace, private airport transfers, and daily breakfast, this package is perfect for beach lovers, couples, and families seeking a relaxing yet adventure-filled Thai island holiday from Dubai.</p>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and private transfer to your resort</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Phuket resort</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Rest of the day at leisure to relax and unwind</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the nearby beach or enjoy the resort facilities</li>
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
                                            <h6 class="fw-bold mb-3">Scenic Roads, Viewpoints & Sacred Temples</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive along scenic beach roads via Patong, Karon, and Kata beaches</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the stunning Phuket View Point for panoramic views</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the revered Wat Chalong temple</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stop at the Cashew Nut factory for local treats and souvenirs</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to hotel and evening at leisure</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Phi Phi Island Excursion
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Maya-Bay-Koh-PhiPhi-island.jpg" class="img-fluid rounded shadow-sm" alt="Phi Phi Island Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Maya Bay, Emerald Lagoons & Snorkeling</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day Phi Phi Island excursion by big boat</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the world-famous Maya Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore the emerald lagoon at Pileh Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Marvel at the dramatic cliffs of Nui Bay</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Monkey Beach and watch the playful monkeys</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Snorkeling in crystal-clear waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included on the tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Phuket hotel</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Leisure Day
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/karabi-beach.jpg" class="img-fluid rounded shadow-sm" alt="Phuket Leisure Day">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Explore Phuket at Your Own Pace</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day free to explore Phuket independently</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: James Bond Island tour — iconic limestone pillars and emerald waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Tiger Kingdom — get up close with majestic tigers</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Dolphin Show — entertaining performances for the whole family</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Relax at Patong Beach or explore Phuket Old Town</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Phuket</li>
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
                                            <img src="img/thailand/Koh-Phi-Phi-island.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Phuket">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Phuket International Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with wonderful memories of your Phuket beach escape</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 Nights' accommodation in Phuket in selected category hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return private airport transfers (Phuket Airport – Hotel – Phuket Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phuket City Tour (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Phi Phi Island tour with lunch by big boat (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Air-conditioned vehicles during all tours and transfers</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa charges (approximately THB 2,000 for Visa on Arrival)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>National park fees (approximately THB 400 per person)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Early check-in or late check-out fees</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">How long is the flight from Dubai to Phuket?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The flight from Dubai to Phuket takes approximately 6 to 7 hours with a layover, as most flights connect through Bangkok or other regional hubs. Some seasonal direct flights may also be available depending on the airline.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Is Phuket suitable for families?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, Phuket is an excellent family destination. It offers kid-friendly beaches with calm waters, exciting water parks, aquariums, and family-oriented island tours. The wide sandy beaches and gentle waves make it safe and enjoyable for children of all ages.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is Maya Bay?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Maya Bay is a stunningly beautiful bay located on Phi Phi Leh island, made famous worldwide by the Hollywood movie "The Beach" starring Leonardo DiCaprio. It features crystal-clear turquoise waters surrounded by towering limestone cliffs, making it one of the most photographed spots in Thailand.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What is the best time to visit Phuket?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The best time to visit Phuket is from November to April during the dry season. The weather is sunny with minimal rainfall, the seas are calm, and conditions are perfect for island hopping, snorkeling, diving, and beach activities.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,030</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Beach Escape</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4N Phuket</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Full-day Phi Phi tour</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Phuket city tour</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Free day for exploration</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Amazing Phuket 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
