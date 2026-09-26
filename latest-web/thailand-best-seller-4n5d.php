<?php
// Page SEO Variables
$pageTitle = "Thailand Best Seller 4 Nights 5 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Book the Thailand Best Seller 4 Nights / 5 Days package covering Pattaya and Bangkok. Enjoy Coral Island, Alcazar Show, Safari World, and temple tours. Starting from AED 1,175.";
$pageKeywords = "thailand best seller package, thailand 4 nights 5 days, pattaya bangkok tour, coral island tour, alcazar show pattaya, safari world bangkok, thailand holiday from dubai";
$pageCanonical = "https://arihantlink.com/thailand-best-seller-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Thailand Best Seller";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/Bangkok-city.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Thailand Best Seller - 4 Nights / 5 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/thailand/Bangkok-city.jpg",
    "https://arihantlink.com/img/thailand/Koh-lan-Pattaya.jpg",
    "https://arihantlink.com/img/thailand/grand-palace-bangkok.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1175",
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
    "name": "Thailand Best Seller 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Pattaya",
        "description": "Arrive at Bangkok Airport, 2-hour transfer to Pattaya. Hotel check-in. Evening free for Walking Street."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Coral Island & Alcazar Show",
        "description": "Speedboat to Coral Island for snorkeling and water sports. Lunch included. Evening Alcazar Cabaret Show with 17 cultural acts."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Transfer to Bangkok & City Tour",
        "description": "Transfer to Bangkok. Half-day city tour: Temple of Marble Buddha, Temple of Golden Buddha, Gems Gallery. Hotel check-in."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Safari World & Marine Park",
        "description": "Full day at Safari World and Marine Park. See dolphins, orangutans, lions, birds. Safari Park and Marine Park with live shows. Lunch included."
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
      "name": "What is the Alcazar Show?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Alcazar Cabaret Show is a world-famous 70-minute stage performance in Pattaya featuring 17 spectacular cultural acts. It showcases dazzling costumes, impressive choreography, and a variety of international musical and dance performances."
      }
    },
    {
      "@type": "Question",
      "name": "Is Safari World suitable for children?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Safari World Bangkok is a fantastic family-friendly attraction. Children love the dolphin shows, orangutan boxing, bird performances, and the drive-through Safari Park where they can see zebras, giraffes, and lions up close from the vehicle."
      }
    },
    {
      "@type": "Question",
      "name": "Which temples are visited in the Bangkok city tour?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Bangkok city tour includes visits to the Temple of Marble Buddha (Wat Benchamabophit), known for its stunning Italian marble architecture, and the Temple of Golden Buddha (Wat Traimit), which houses the world\'s largest solid gold Buddha statue weighing 5.5 tonnes."
      }
    },
    {
      "@type": "Question",
      "name": "Can I add a dinner cruise to this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, a Chao Phraya dinner cruise can be added as an optional add-on to your Thailand Best Seller package. Enjoy a scenic evening cruise along the Chao Phraya River with a buffet dinner and views of illuminated Bangkok landmarks. Contact us for pricing."
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
                <i class="fas fa-paw fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Safari World</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Coral Island & Shows</p>
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
                    <p class="text-primary fw-bold">The Ultimate Thailand Experience — Islands, Shows, Safari & Temples</p>
                    <p>This is our most popular Thailand package for a reason. The Thailand Best Seller packs in every must-do experience across Pattaya and Bangkok into an action-filled 4-night itinerary. From island adventures and world-famous cabaret shows to wildlife safaris and sacred temple tours, this package delivers the complete Thai experience.</p>
                    <p>Start in Pattaya with a thrilling speedboat ride to Coral Island (Koh Larn), where you can snorkel, parasail, jet ski, or try the unique sea walking experience. That evening, be dazzled by the legendary Alcazar Cabaret Show — a spectacular 70-minute performance featuring 17 cultural acts. Then head to Bangkok for an immersive city tour through iconic temples and a full day at Safari World and Marine Park, where dolphins, orangutans, lions, and live shows keep the whole family entertained.</p>
                    <p>With private transfers, daily breakfast, included lunches on tour days, and a perfectly balanced itinerary, this best-selling package is ideal for families, couples, and groups looking to experience the very best of Thailand from Dubai.</p>
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
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to Pattaya (approximately 2-hour drive)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Pattaya hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening free to explore the vibrant Walking Street</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy the bustling nightlife and local street food</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Coral Island & Alcazar Show
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Koh-lan-Pattaya.jpg" class="img-fluid rounded shadow-sm" alt="Coral Island and Alcazar Show">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Island Adventure by Day, Dazzling Show by Night</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Speedboat ride to Coral Island (Koh Larn)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Snorkeling in crystal-clear turquoise waters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional: parasailing, jet skiing, banana boating, sea walking (at extra cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Indian lunch included on the island</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Pattaya by speedboat</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Alcazar Cabaret Show — 70-minute spectacular with 17 cultural acts</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Transfer to Bangkok & City Tour
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/golden-budha-bangkok.jpg" class="img-fluid rounded shadow-sm" alt="Bangkok City Tour">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Temples, Culture & Golden Treasures</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from Pattaya hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer to Bangkok by private vehicle</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day Bangkok city tour</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the Temple of Marble Buddha (Wat Benchamabophit)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit the Temple of Golden Buddha (Wat Traimit)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stop at Gems Gallery jewellery centre</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Bangkok hotel</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Safari World & Marine Park
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city (2).jpg" class="img-fluid rounded shadow-sm" alt="Safari World Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Wildlife Adventures for the Whole Family</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day excursion to Safari World and Marine Park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Safari Park: drive-through to see zebras, giraffes, lions, and more</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Marine Park: dolphin shows, orangutan performances, bird shows</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy exciting live shows and animal encounters</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lunch included at Safari World</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Bangkok hotel</li>
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
                                            <img src="img/thailand/grand-palace-bangkok.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Bangkok">
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private transfers (Bangkok Airport – Pattaya – Bangkok – Bangkok Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Alcazar Cabaret Show (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Coral Island (Koh Larn) speedboat tour with Indian lunch (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bangkok City and Temple Tour with Gems Gallery visit (sharing basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Safari World and Marine Park with lunch (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Air-conditioned vehicles during all tours and transfers</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>International Airfares</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa charges</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal nature (tips, telephone calls, laundry, liquor etc.)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Peak / festival season surcharges (December 22 – January 5)</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>DMK Airport surcharges</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is the Alcazar Show?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Alcazar Cabaret Show is a world-famous 70-minute stage performance in Pattaya featuring 17 spectacular cultural acts. It showcases dazzling costumes, impressive choreography, and a variety of international musical and dance performances. It is one of Pattaya's most iconic entertainment experiences.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Is Safari World suitable for children?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, Safari World Bangkok is a fantastic family-friendly attraction. Children love the dolphin shows, orangutan performances, bird shows, and the drive-through Safari Park where they can see zebras, giraffes, and lions up close from the comfort of the vehicle. It is a full day of fun for the whole family.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Which temples are visited in the Bangkok city tour?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The Bangkok city tour includes visits to the Temple of Marble Buddha (Wat Benchamabophit), renowned for its stunning Italian marble architecture, and the Temple of Golden Buddha (Wat Traimit), home to the world's largest solid gold Buddha statue weighing 5.5 tonnes. A stop at the famous Gems Gallery jewellery centre is also included.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Can I add a dinner cruise to this package?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, a Chao Phraya dinner cruise can be added as an optional add-on to your Thailand Best Seller package. Enjoy a scenic evening cruise along the Chao Phraya River with a buffet dinner and stunning views of illuminated Bangkok landmarks. Contact us for pricing and availability.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,175</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Popular</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>2N Pattaya + 2N Bangkok</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Coral Island & Alcazar Show</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Safari World full day</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Bangkok temple tour</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Thailand Best Seller 4N5D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
