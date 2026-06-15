<?php
// Page SEO Variables
$pageTitle = "Pattaya Getaway 3 Nights 4 Days Tour Package from Dubai | Arihant Travel";
$pageDescription = "Explore Pattaya with our budget-friendly 3 Nights / 4 Days package. Enjoy Coral Island speedboat tour, crystal-clear beaches, and vibrant nightlife.";
$pageKeywords = "pattaya getaway package, pattaya 3 nights 4 days, coral island tour, koh larn pattaya, pattaya holiday from dubai, thailand travel uae, budget pattaya package";
$pageCanonical = "https://arihantlink.com/thailand-pattaya-getaway-3n4d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Pattaya Getaway";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/Koh-lan-Pattaya.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Pattaya Getaway - 3 Nights / 4 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/thailand/Koh-lan-Pattaya.jpg",
    "https://arihantlink.com/img/thailand/Pattaya-cruise.jpg",
    "https://arihantlink.com/img/thailand/Bangkok-city.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "540",
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
    "name": "Pattaya Getaway 3N4D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Pattaya",
        "description": "Arrive at Bangkok Airport, transfer to Pattaya. Hotel check-in, rest of day at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Coral Island Tour",
        "description": "Speedboat to Coral Island (Koh Larn). Crystal-clear waters, beach time, optional water activities."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Leisure Day",
        "description": "Free day to explore Pattaya independently. Optional visits to Art in Paradise, Nong Nooch Garden, Alcazar Show."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Departure",
        "description": "Breakfast, checkout. Transfer from Pattaya to Bangkok Airport for departure."
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
      "name": "What is the distance from Bangkok to Pattaya?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pattaya is approximately 150 kilometres southeast of Bangkok, which is about a 2-hour drive by private vehicle depending on traffic conditions."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Pattaya?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best time to visit Pattaya is from November to February during the cool season, when temperatures are pleasant and rainfall is minimal — perfect for beach activities and island tours."
      }
    },
    {
      "@type": "Question",
      "name": "What are the top things to do in Pattaya?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pattaya offers a wide range of activities including beautiful beaches, water sports at Coral Island, vibrant nightlife on Walking Street, cultural temples like the Sanctuary of Truth, and family attractions such as Nong Nooch Tropical Garden and Art in Paradise."
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
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Pattaya</p>
                <small class="text-muted">Thailand</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Coral Island</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Beach & Water Sports</p>
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
                    <p class="text-primary fw-bold">Sun, Sand & Coral Island Adventure</p>
                    <p>Pattaya, Thailand's vibrant seaside resort city, sits on the eastern Gulf coast just 150 kilometres southeast of Bangkok. Known for its stunning beaches, electrifying nightlife, and world-class water sports, Pattaya is the perfect quick escape for travellers seeking sun-drenched relaxation and adventure in equal measure.</p>
                    <p>This budget-friendly 3-night getaway takes you straight to the heart of Pattaya's coastal charm. Cruise by speedboat to Coral Island (Koh Larn), where crystal-clear turquoise waters and powdery white sand beaches await. Try optional water activities like parasailing and sea walking, or simply soak up the tropical sunshine. A full leisure day lets you explore Pattaya at your own pace — from the stunning Art in Paradise museum to the lush Nong Nooch Tropical Garden.</p>
                    <p>With private transfers between Bangkok Airport and Pattaya, daily breakfast, and a hassle-free itinerary, this package is ideal for first-time visitors, couples, and families looking for an affordable Thai beach holiday from Dubai.</p>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Rest of the day at leisure to explore the vibrant seaside city</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stroll along the beach promenade or explore the local markets</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Coral Island Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-lan-Pattaya.jpg" class="img-fluid rounded shadow-sm" alt="Coral Island Koh Larn">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Crystal-Clear Waters & Beach Paradise</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Speedboat ride to Coral Island (Koh Larn)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy crystal-clear turquoise waters and white sandy beaches</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional water activities: parasailing and sea walking (at extra cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Tea, snacks & Indian lunch included on the island</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Leisure Day
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city (2).jpg" class="img-fluid rounded shadow-sm" alt="Pattaya Leisure Day">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Explore Pattaya at Your Own Pace</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day free to explore Pattaya independently</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Art in Paradise — Thailand's largest 3D art museum</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Nong Nooch Tropical Garden — stunning gardens and cultural shows</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Alcazar Cabaret Show — world-famous stage performance</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Pattaya Dolphinarium — fun for the whole family</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Pattaya</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Departure
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Pattaya">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer from Pattaya to Bangkok Airport (approximately 2 hours)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Depart with wonderful memories of your Pattaya getaway</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights' accommodation in Pattaya in selected category hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private airport transfers (Bangkok Airport – Pattaya – Bangkok Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Coral Island (Koh Larn) speedboat tour with refreshments and Indian lunch (SIC basis)</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is the distance from Bangkok to Pattaya?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Pattaya is approximately 150 kilometres southeast of Bangkok. The drive typically takes around 2 hours by private vehicle, depending on traffic conditions. Our package includes comfortable private transfers for this journey.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What is the best time to visit Pattaya?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The best time to visit Pattaya is during the cool season from November to February, when temperatures are pleasant and rainfall is minimal. This period offers ideal conditions for beach activities, island tours, and outdoor exploration.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What are the top things to do in Pattaya?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Pattaya offers a fantastic range of activities including pristine beaches and water sports, Coral Island excursions, vibrant nightlife on Walking Street, cultural temples such as the Sanctuary of Truth, family attractions like Nong Nooch Tropical Garden and Art in Paradise, plus exciting shows like the Alcazar Cabaret.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 540</h2>
                            <span class="text-muted">Per Person (3N/4D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Budget Friendly</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 Nights in Pattaya</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Coral Island speedboat tour</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Free day at leisure</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private airport transfers</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Pattaya Getaway 3N4D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
