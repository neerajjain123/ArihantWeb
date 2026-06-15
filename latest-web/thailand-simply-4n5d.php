<?php
// Page SEO Variables
$pageTitle = "Simply Thailand 4 Nights 5 Days Tour Package from Dubai | Arihant Travel";
$pageDescription = "Discover Thailand with our Simply Thailand 4 Nights / 5 Days package covering Pattaya and Bangkok. Coral Island, Alcazar Show & temple tours included.";
$pageKeywords = "simply thailand package, thailand 4 nights 5 days, pattaya bangkok tour, coral island tour, bangkok temple tour, thailand holiday from dubai, thailand travel uae";
$pageCanonical = "https://arihantlink.com/thailand-simply-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Simply Thailand";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/golden-budha-bangkok.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Simply Thailand - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/thailand/golden-budha-bangkok.jpg",
    "https://arihantlink.com/img/thailand/Koh-lan-Pattaya.jpg",
    "https://arihantlink.com/img/thailand/Temple-of-Dawn.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "785",
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
    "name": "Simply Thailand 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Pattaya",
        "description": "Arrive at Bangkok Airport, transfer to Pattaya. Hotel check-in. Evening free to explore nightlife."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Coral Island Excursion",
        "description": "Speedboat to Coral Island (Koh Larn). Beach activities, turquoise waters, optional parasailing and sea walking. Lunch included."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Transfer to Bangkok",
        "description": "Transfer to Bangkok. Hotel check-in. Free time. Optional Chao Phraya dinner cruise at extra cost."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Bangkok City Tour",
        "description": "Half-day city tour: Temple of Marble Buddha, Temple of Golden Buddha, Gems Gallery jewellery centre."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Departure",
        "description": "Breakfast, checkout, airport transfer."
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
      "name": "Do UAE residents need a visa for Thailand?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "UAE residents can obtain a Visa on Arrival (VOA) or apply for an e-Visa for Thailand, which allows a stay of up to 60 days. The process is straightforward and can be completed at the airport upon arrival."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the flight from Dubai to Bangkok?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The direct flight from Dubai to Bangkok takes approximately 6 to 7 hours. Several airlines operate daily flights on this popular route."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Thailand?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best time to visit Thailand is from November to February during the cool and dry season, when temperatures are pleasant and rainfall is minimal — ideal for sightseeing and beach activities."
      }
    },
    {
      "@type": "Question",
      "name": "What currency is used in Thailand?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The official currency of Thailand is the Thai Baht (THB). Currency exchange is widely available at airports, banks, and exchange counters throughout Pattaya and Bangkok."
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
                <p class="mb-0 fw-bold">Pattaya & Bangkok</p>
                <small class="text-muted">Location</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-gopuram fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Temples & Culture</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Coral Island</p>
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
                    <p class="text-primary fw-bold">Pattaya Beaches & Bangkok Temples in One Trip</p>
                    <p>Experience the best of Thailand with this perfectly balanced 4-night itinerary that combines the coastal charm of Pattaya with the cultural grandeur of Bangkok. From turquoise island waters to glittering golden temples, this starter package delivers a complete Thai experience at an unbeatable price.</p>
                    <p>Begin your journey in Pattaya, where a thrilling speedboat ride whisks you to Coral Island (Koh Larn) for a day of sun-soaked beach bliss. Then head to Bangkok for an immersive city tour that takes you through the iconic temples of the Marble Buddha and Golden Buddha, followed by a visit to the famous Gems Gallery jewellery centre.</p>
                    <p>With private transfers connecting Bangkok Airport, Pattaya, and Bangkok city, daily breakfast, and a well-paced itinerary, Simply Thailand is the ideal starter package for first-time visitors looking to discover Thailand's diverse highlights from Dubai.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Pattaya
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Pattaya-cruise.jpg" class="img-fluid rounded shadow-sm" alt="Arrival in Pattaya">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Bangkok Suvarnabhumi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to Pattaya (approximately 150 km, 2-hour drive)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Pattaya hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening free to explore the vibrant Pattaya nightlife</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stroll along Walking Street or enjoy the local markets</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Pattaya</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Coral Island Excursion
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-lan-Pattaya.jpg" class="img-fluid rounded shadow-sm" alt="Coral Island Koh Larn">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Turquoise Waters & Beach Paradise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Speedboat ride to Coral Island (Koh Larn)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy turquoise waters and white sandy beaches</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Beach activities including swimming and sunbathing</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional parasailing and sea walking (at extra cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included on the island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Pattaya hotel by speedboat</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Pattaya</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Transfer to Bangkok
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/chao-phraya-river.jpg" class="img-fluid rounded shadow-sm" alt="Transfer to Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">From Coastal Charm to City Grandeur</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from Pattaya hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer to Bangkok by private vehicle</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Bangkok hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Free time to explore the city at leisure</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: Chao Phraya dinner cruise (at extra cost)</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bangkok</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Bangkok City Tour
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/golden-budha-bangkok.jpg" class="img-fluid rounded shadow-sm" alt="Bangkok City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Temples, Culture & Golden Treasures</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Bangkok city tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the Temple of Marble Buddha (Wat Benchamabophit)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the Temple of Golden Buddha (Wat Traimit)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stop at Gems Gallery jewellery centre</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Afternoon free for shopping or independent exploration</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bangkok</li>
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
                                            <img src="img/thailand/Bangkok-city.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer to Bangkok Airport for your departure flight</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with wonderful memories of your Thailand adventure</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Nights' accommodation in Pattaya + 2 Nights' accommodation in Bangkok</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Airport transfers (Bangkok Airport – Pattaya – Bangkok – Bangkok Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Coral Island (Koh Larn) speedboat tour with lunch (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bangkok city and temple tour with Gems Gallery visit</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Do UAE residents need a visa for Thailand?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">UAE residents can obtain a Visa on Arrival (VOA) or apply for an e-Visa for Thailand, which allows a stay of up to 60 days. The process is straightforward and can be completed at the airport upon arrival or online before your trip.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How long is the flight from Dubai to Bangkok?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The direct flight from Dubai to Bangkok takes approximately 6 to 7 hours. Several airlines including Emirates, flydubai, and Thai Airways operate daily flights on this popular route.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What is the best time to visit Thailand?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The best time to visit Thailand is from November to February during the cool and dry season. Temperatures are pleasant, rainfall is minimal, and conditions are ideal for sightseeing, beach activities, and temple visits.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What currency is used in Thailand?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The official currency of Thailand is the Thai Baht (THB). Currency exchange is widely available at airports, banks, and exchange counters throughout Pattaya and Bangkok. Credit cards are accepted at most hotels, restaurants, and shopping malls.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 785</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Starter</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>2N Pattaya + 2N Bangkok</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Coral Island speedboat tour</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Bangkok temple tour</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private transfers</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Simply Thailand 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
