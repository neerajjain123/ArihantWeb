<?php
// Page SEO Variables
$pageTitle = "3 Nights 4 Days Georgia Tour Package from Dubai | Tbilisi, Mtskheta & Kazbegi 2025 - Arihant Travels";
$pageDescription = "Book a 3-night, 4-day Georgia holiday from Dubai covering Tbilisi, UNESCO-listed Mtskheta, Gudauri ski resort, and Kazbegi.";
$pageKeywords = "georgia tour package from dubai, 3 nights 4 days tbilisi itinerary, gudauri kazbegi tour, georgia travel package uae, tbilisi mtskheta tour, kazbegi 4x4 tour, georgia winter packages, georgia holiday deals 2025, georgia 3n4d tour";
$pageCanonical = "https://arihantlink.com/georgia-3n4d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "3 Nights 4 Days Georgia Tour";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "georgia";
$breadcrumbBg = "img/blogs/georgia/mtskheta-street.webp";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "3 Nights 4 Days Georgia Tour Package - Tbilisi, Gudauri & Kazbegi",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/blogs/georgia/mtskheta-street.webp",
    "https://arihantlink.com/img/blogs/georgia/paragliding-in-gudauri.webp",
    "https://arihantlink.com/img/blogs/georgia/ananuri-fortress.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "999",
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
    "name": "Georgia 3N4D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival in Tbilisi",
        "description": "Meet & greet at Airport • Private transfer to hotel • Evening at leisure in Old Town"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Tbilisi & Mtskheta Heritage Tour",
        "description": "UNESCO Mtskheta (Jvari & Svetitskhoveli) • Tbilisi City Tour (Peace Bridge, Cable Car, Narikala)"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Gudauri & Kazbegi Mountain Adventure",
        "description": "Jinvali Reservoir • Ananuri Fortress • Gudauri View Point • Stepantsminda (Kazbegi)"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Departure",
        "description": "Leisure time • Private transfer to Tbilisi International Airport"
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
      "name": "Do I need a visa to travel to Georgia from the UAE?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Generally, UAE residents can get their Georgia visa on arrival if they have a valid UAE residency visa."
      }
    },
    {
      "@type": "Question",
      "name": "What is typically included in this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Total 3 nights in Tbilisi with breakfast, private transfers, guided city tours, and mountain excursions."
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
                <i class="fas fa-calendar-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">3 Nights / 4 Days</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-hotel fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">3-Star Hotel</p>
                <small class="text-muted">Centrally Located</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Daily Breakfast</p>
                <small class="text-muted">Buffet Included</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-shield-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Insurance Included</p>
                <small class="text-muted">Travel Protection</small>
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
                    <p class="text-primary fw-bold">Explore Tbilisi, Mtskheta & Gudauri in One Seamless Holiday</p>
                    <p>Our 03 Nights & 04 Days Georgia Travel Package is curated for travelers flying out of the UAE who
                        want a balanced mix of culture, mountains, and downtime. Wander through the cobbled streets of
                        Tbilisi, uncover the spirituality of Mtskheta, and breathe the crisp air of the Caucasus
                        Mountains.</p>
                    <p>We cover the essentials—accommodation, daily breakfast, transfers, and guided tours—while leaving
                        space for you to personalise with sulfur baths, funicular rides, or snow adventures. It’s
                        flexible, compact, and designed to help you experience only the most interesting sights of
                        Georgia.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival in Tbilisi
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet &
                                            greet at Tbilisi International Airport</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private
                                            transfer to the hotel with express check-in</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Welcome
                                            briefing with local tips from Arihant Travels concierge</li>
                                        <li class="mb-2"><i
                                                class="fas fa-star text-secondary me-2"></i><strong>Evening:</strong>
                                            Stroll along Rustaveli Avenue & sample Georgian cuisine at Old Town
                                            restaurants</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Tbilisi & Mtskheta Heritage Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <h6 class="fw-bold mb-3">Morning – UNESCO Mtskheta</h6>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast
                                            at hotel</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit
                                            Jvari Monastery & Svetitskhoveli Cathedral (UNESCO sites)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Souvenir
                                            shopping at the local market</li>
                                    </ul>
                                    <h6 class="fw-bold mb-3">Afternoon – Tbilisi Icons</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Holy
                                            Trinity Cathedral & Metekhi Church</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Bridge of
                                            Peace & Shardeni Street</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cable car
                                            ride to Narikala Fortress</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Gudauri & Kazbegi Adventure
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Scenic
                                            drive via Jinvali Reservoir & Ananuri Fortress</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit
                                            Gudauri View Point for stunning Caucasus views</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue
                                            to Stepantsminda (Kazbegi) village</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Optional
                                            4x4 ride to Gergeti Trinity Church</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Return to
                                            Tbilisi for overnight</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Departure Day
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Breakfast
                                            at the hotel & morning at leisure</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Noon
                                            checkout & stroll for last-minute gifts</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private
                                            transfer to Tbilisi International Airport</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package Details Tabs (Inclusions/Exclusions) -->
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>03 nights centrally
                                    located Tbilisi hotel with breakfast</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private airport transfers
                                </li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Guided Tbilisi & UNESCO
                                    Mtskheta tour</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Gudauri –
                                    Kazbegi excursion</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Driver-guide throughout
                                    the program</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Travel insurance included
                                </li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All applicable taxes &
                                    service charges</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Round-trip air tickets
                                </li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa fees & documentation
                                </li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Meals other than breakfast
                                </li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Tips & personal expenses
                                </li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Optional activities: 4x4
                                    Gergeti ride, Sulfur baths, etc.</li>
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
                                    Do I need a visa to travel to Georgia from the UAE?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Generally, UAE residents can get their Georgia visa on arrival if they have a valid
                                    UAE residency visa. Arihant Travels provides latest updates.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    What is the best time for Georgia holidays?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Spring (April-May) and Autumn (Sept-Oct) are best. Winter is ideal for skiing in
                                    Gudauri.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow-sm border-0 mb-4 overflow-hidden rounded-3">
                        <div class="card-body p-4 text-center">
                            <p class="mb-0 text-muted">Starting From</p>
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 999</h2>
                            <span class="text-muted">Per Person (3N/4D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-success mb-3 px-3 py-2">Best Value Deal</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Shared or
                                    Private Basis</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4-Star
                                    Stay Upgrade Available</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>24/7
                                    Local Support</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=Share details for the 3N4D Georgia package"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
                                    <i class="fab fa-whatsapp me-2"></i>Quote on WhatsApp
                                </a>
                                <a href="contact" class="btn btn-outline-primary btn-lg rounded-pill">
                                    <i class="fas fa-envelope me-2"></i>Enquire Now
                                </a>
                            </div>
                        </div>
                        <div class="bg-light p-3 text-center border-top">
                            <small class="text-muted"><i class="fas fa-shield-alt text-success me-1"></i> Arihant Travels
                                Quality Guarantee</small>
                        </div>
                    </div>
                    <?php include 'includes/enquiry-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>