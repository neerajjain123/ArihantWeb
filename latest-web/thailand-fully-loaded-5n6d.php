<?php
// Page SEO Variables
$pageTitle = "Thailand Fully Loaded 5 Nights 6 Days Tour Package from Dubai | Arihant Travels";
$pageDescription = "Experience the ultimate Thailand adventure with our Fully Loaded 5 Nights / 6 Days package. Tiger Topia, Coral Island, Mahanakhon Skywalk, Dinner Cruise & Safari World. Starting from AED 1,675.";
$pageKeywords = "thailand fully loaded package, thailand 5 nights 6 days, pattaya bangkok tour, tiger topia zoo, mahanakhon skywalk, chao phraya dinner cruise, safari world bangkok, thailand holiday from dubai";
$pageCanonical = "https://arihantlink.com/thailand-fully-loaded-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Thailand Fully Loaded";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "thailand";
$breadcrumbBg = "img/thailand/chao-phraya-river.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Thailand Fully Loaded - 5 Nights / 6 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/thailand/chao-phraya-river.jpg",
    "https://arihantlink.com/img/thailand/Bangkok-city.jpg",
    "https://arihantlink.com/img/thailand/Koh-lan-Pattaya.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1675",
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
    "name": "Thailand Fully Loaded 5N6D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Tiger Topia",
        "description": "Arrive at Bangkok Airport, transfer to Pattaya. Visit Tiger Topia Zoo Sriracha — interact with and feed tigers, pet camels, deer, elephants, and ostriches. Hotel check-in."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Coral Island & Alcazar Show",
        "description": "Breakfast. Speedboat to Coral Island (Koh Larn). Evening: Alcazar Show cabaret with dazzling costumes."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Pattaya at Leisure",
        "description": "Breakfast. Full free day in Pattaya to explore independently."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Bangkok: City Tour, Skywalk & Dinner Cruise",
        "description": "Breakfast. Transfer to Bangkok. Half-day city tour: Marble Buddha, Golden Buddha, Gems Gallery. Mahanakhon Skywalk at 314 metres. Evening: Chao Phraya Dinner Cruise with temple views."
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Safari World & Marine Park",
        "description": "Breakfast. Full-day at 170-acre Safari World — zebras, giraffes, tigers, lions, dolphins, seals. Live animal shows."
      },
      {
        "@type": "ListItem",
        "position": 6,
        "name": "Day 6 - Departure",
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
      "name": "What is Tiger Topia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tiger Topia Zoo Sriracha is an interactive zoo near Pattaya where you can get up close with tigers, feed them, and also interact with camels, deer, elephants, and ostriches. It is a unique wildlife experience perfect for families and animal lovers."
      }
    },
    {
      "@type": "Question",
      "name": "What is Mahanakhon Skywalk?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Mahanakhon Skywalk is Thailand\'s highest observation deck at 314 metres above ground level. It features a thrilling glass-floor section that offers panoramic views of Bangkok\'s skyline, making it one of the city\'s most iconic attractions."
      }
    },
    {
      "@type": "Question",
      "name": "Is the Dinner Cruise romantic?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Chao Phraya Dinner Cruise is a wonderfully romantic experience. You will sail along Bangkok\'s famous river while enjoying a delicious dinner with stunning views of illuminated temples and landmarks along the riverbank."
      }
    },
    {
      "@type": "Question",
      "name": "What animals can you see at Safari World?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Safari World is a 170-acre wildlife park where you can see zebras, giraffes, tigers, lions, dolphins, seals, and many more animals. The park also features exciting live animal shows throughout the day."
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
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Pattaya & Bangkok</p>
                <small class="text-muted">Thailand</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Tiger Topia & Skywalk</p>
                <small class="text-muted">Highlight</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Dinner Cruise & Safari</p>
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
                    <p class="text-primary fw-bold">The Ultimate Pattaya & Bangkok Experience</p>
                    <p>Thailand's two most exciting destinations — Pattaya and Bangkok — come together in this fully loaded 5-night adventure. From interactive wildlife encounters to glittering skyline views, this package delivers an unforgettable mix of thrills, culture, and relaxation that showcases the very best of the Land of Smiles.</p>
                    <p>Begin your journey in Pattaya with a visit to Tiger Topia Zoo Sriracha, where you can interact with majestic tigers and friendly animals. Cruise by speedboat to the crystal-clear waters of Coral Island, and enjoy the world-famous Alcazar Show cabaret. Then head to Bangkok for an immersive city tour, the breathtaking Mahanakhon Skywalk at 314 metres, a romantic Chao Phraya Dinner Cruise past illuminated temples, and a full day at the spectacular 170-acre Safari World.</p>
                    <p>With private transfers, daily breakfast, and a perfectly balanced itinerary mixing adventure with leisure, this is the ideal package for travellers who want to experience everything Thailand has to offer.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival & Tiger Topia
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city.jpg" class="img-fluid rounded shadow-sm" alt="Arrival in Pattaya and Tiger Topia">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Wildlife Adventure at Tiger Topia Zoo</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive at Bangkok Suvarnabhumi Airport</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet our representative and transfer to Pattaya</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Tiger Topia Zoo Sriracha — interact with and feed majestic tigers</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Pet and interact with camels, deer, elephants, and ostriches</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in at your Pattaya hotel</li>
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
                                            <h6 class="fw-bold mb-3">Island Paradise & Dazzling Cabaret</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Speedboat ride to Coral Island (Koh Larn)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy crystal-clear turquoise waters and white sandy beaches</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional water activities: parasailing and sea walking (at extra cost)</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Pattaya in the afternoon</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Alcazar Show — world-famous cabaret with dazzling costumes and performances</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Pattaya at Leisure
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Pattaya-cruise.jpg" class="img-fluid rounded shadow-sm" alt="Pattaya Leisure Day">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Explore Pattaya at Your Own Pace</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full day free to explore Pattaya independently</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Walking Street — vibrant nightlife and dining</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Nong Nooch Tropical Garden — stunning gardens and cultural shows</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Art in Paradise — Thailand's largest 3D art museum</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Suggested: Sanctuary of Truth — awe-inspiring wooden temple</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Bangkok: City Tour, Skywalk & Dinner Cruise
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/golden-budha-bangkok.jpg" class="img-fluid rounded shadow-sm" alt="Bangkok City Tour and Dinner Cruise">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Cultural Landmarks, Skyline Views & River Dining</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Transfer from Pattaya to Bangkok</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Half-day city tour: Marble Buddha and Golden Buddha temples</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit Gems Gallery for exquisite jewellery shopping</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Mahanakhon Skywalk — 314-metre glass-floor observation deck with panoramic city views</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Evening: Chao Phraya Dinner Cruise — dine while sailing past illuminated temples</li>
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
                                    <span class="badge bg-primary me-3">Day 5</span> Safari World & Marine Park
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/thailand/Bangkok-city (2).jpg" class="img-fluid rounded shadow-sm" alt="Safari World Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">170-Acre Wildlife Adventure</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Full-day excursion to Safari World & Marine Park</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Drive through 170 acres of open zoo — spot zebras, giraffes, tigers, and lions</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Marine Park: watch dolphin and seal performances</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Enjoy exciting live animal shows throughout the day</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to Bangkok hotel in the evening</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Overnight stay in Bangkok</li>
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
                                            <img src="img/thailand/grand-palace-bangkok.jpg" class="img-fluid rounded shadow-sm" alt="Departure from Bangkok">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast at the hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-out from hotel</li>
                                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private transfer to Bangkok Airport</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights' accommodation in Pattaya + 2 Nights' accommodation in Bangkok</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Breakfast at your hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private transfers (Bangkok Airport – Pattaya – Bangkok – Bangkok Airport)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Alcazar Show cabaret (sharing basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Coral Island (Koh Larn) speedboat tour (SIC basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Tiger Topia Zoo Sriracha entrance</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Half-day Bangkok city tour with Mahanakhon Skywalk day ticket</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Chao Phraya Dinner Cruise (sharing basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Safari World & Marine Park full-day tour (sharing basis)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gems Gallery visit (private basis)</li>
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
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is Tiger Topia?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Tiger Topia Zoo Sriracha is an interactive zoo near Pattaya where you can get up close with majestic tigers, feed them, and interact with other friendly animals including camels, deer, elephants, and ostriches. It is a unique wildlife experience perfect for families and animal lovers.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What is Mahanakhon Skywalk?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Mahanakhon Skywalk is Thailand's highest observation deck, located 314 metres above ground level. It features a thrilling glass-floor section that offers breathtaking panoramic views of Bangkok's sprawling skyline. It is one of the city's most iconic and must-visit attractions.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Is the Dinner Cruise romantic?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, the Chao Phraya Dinner Cruise is a wonderfully romantic experience. You will sail along Bangkok's famous river while enjoying a delicious dinner with stunning views of beautifully illuminated temples and landmarks along the riverbank. It is perfect for couples and special occasions.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">What animals can you see at Safari World?</button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Safari World is a massive 170-acre wildlife park where you can see zebras, giraffes, tigers, lions, dolphins, seals, and many more animals in both open safari and marine park settings. The park also features exciting live animal shows throughout the day, making it a full-day adventure for all ages.</div>
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,675</h2>
                            <span class="text-muted">Per Person (5N/6D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Best Seller</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3N Pattaya + 2N Bangkok</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Tiger Topia & Coral Island</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Mahanakhon Skywalk & Dinner Cruise</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Safari World & Alcazar Show</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Thailand Fully Loaded 5N6D package" target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
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
