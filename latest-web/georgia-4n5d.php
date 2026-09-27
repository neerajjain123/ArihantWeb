<?php
// Page SEO Variables
$pageTitle = "4 Nights 5 Days Georgia Tour Package from Dubai | Tbilisi, Kakheti & Kazbegi 2025 - Arihant Travels";
$pageDescription = "Experience Tbilisi, Mtskheta, Gudauri, Kazbegi, and Kakheti over 4 nights / 5 days. This Georgia holiday from Dubai includes 4-star stays…";
$pageKeywords = "georgia tour package 4 nights 5 days, georgia holiday from dubai, tbilisi gudauri kazbegi itinerary, kakheti wine tour, georgia visa dubai residents, cheap georgia packages uae, georgia travel deal, caucasus tour dubai, georgia 4n5d tour";
$pageCanonical = "https://arihantlink.com/georgia-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "4 Nights 5 Days Georgia Tour";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "georgia";
$breadcrumbBg = "img/blogs/georgia/kazbegi-gergeti-trinity-church.webp";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Discover the Caucasus Gem - 4 Nights / 5 Days Georgia Tour",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/blogs/georgia/kazbegi-gergeti-trinity-church.webp",
    "https://arihantlink.com/img/blogs/georgia/wine-making.webp",
    "https://arihantlink.com/img/blogs/georgia/paragliding-in-gudauri.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1499",
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
    "name": "Georgia 4N5D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Tbilisi Arrival & Evening Impressions",
        "description": "Meet & greet at Airport • Private transfer to 4-star hotel • Leisurely evening walk along Rustaveli Avenue"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Tbilisi & UNESCO Mtskheta City Tour",
        "description": "UNESCO Mtskheta (Jvari & Svetitskhoveli) • Old Town Wander • Narikala Fortress via Cable Car"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Gudauri & Kazbegi Mountain Excursion",
        "description": "Caucasian Military Highway • Jinvali Reservoir • Ananuri Fortress • Gudauri Panorama • Stepantsminda"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Kakheti Wine Region & Sighnaghi",
        "description": "Wine tasting at KTW Factory • Sighnaghi (City of Love) • Bodbe Monastery with Alazani Valley views"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Day 5 - Farewell Georgia",
        "description": "Final breakfast • Checkout & private transfer to Tbilisi International Airport"
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
      "name": "What are the optional add-ons available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Options include Mtatsminda Park funicular, Sulfur bath rituals, and 4x4 rides to Gergeti Trinity Church."
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
                <i class="fas fa-star fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">4-Star Hotel</p>
                <small class="text-muted">Premium Stay</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-glass-cheers fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Wine Tasting</p>
                <small class="text-muted">In Kakheti</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-users fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private Tours</p>
                <small class="text-muted">Personalized Experience</small>
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
                    <h2 class="mb-4">Why Georgia Now</h2>
                    <p class="text-primary fw-bold">Mountains, Wine & Medieval Charm in One Easy Holiday</p>
                    <p>Georgia sits between Europe and Asia yet remains under-the-radar for UAE travelers. This
                        luxury-meets-value package delivers the best of Tbilisi Old Town, UNESCO-listed Mtskheta,
                        dramatic Caucasus drives to Gudauri & Kazbegi, and the romantic Kakheti wine country.</p>
                    <p>From airport pick-ups to English-speaking driver-guides, every detail is taken care of so you can
                        savor khachapuri, photograph Narikala’s skyline and sip Qvevri-aged wines without any planning
                        stress.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Tbilisi Arrival & Evening
                                    Impressions
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet &
                                            greet at Tbilisi International Airport</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private
                                            transfer to your 4-star hotel & express check-in</li>
                                        <li class="mb-2"><i
                                                class="fas fa-star text-secondary me-2"></i><strong>Evening:</strong>
                                            Self-guided stroll along Rustaveli Avenue & Freedom Square</li>
                                        <li class="mb-2"><i class="fas fa-info-circle text-muted me-2"></i>Dinner
                                            suggestion: Ethno-Tsiskhvili for folk shows</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Tbilisi & UNESCO Mtskheta City Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <h6 class="fw-bold mb-3">Heritage & Culture</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit
                                            Jvari Monastery & Svetitskhoveli Cathedral (UNESCO)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Holy
                                            Trinity Cathedral, Metekhi Church & Meidan Bazaar</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cable car
                                            ride to Narikala Fortress & Mother Georgia Statue</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore
                                            Abanotubani Sulfur Bath District & Leghvtakhevi Waterfall</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Gudauri & Kazbegi Mountain
                                    Excursion
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <h6 class="fw-bold mb-3">The Great Caucasus</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Scenic
                                            drive via Jinvali Reservoir & Ananuri Fortress</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Gudauri
                                            Panorama for sweeping mountain views</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Continue
                                            to Stepantsminda (Kazbegi) village</li>
                                        <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Optional 4x4
                                            ride to Gergeti Trinity Church</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Kakheti Wine Region & Sighnaghi
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <h6 class="fw-bold mb-3">Wine & Romance</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i
                                                class="fas fa-check-circle text-primary me-2"></i>Complimentary wine
                                            tasting at KTW Wine Factory</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Guided
                                            walk through Sighnaghi – “City of Love”</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit
                                            Bodbe Monastery overlooking Alazani Valley</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Farewell Georgia
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Final
                                            breakfast at the hotel & checkout by 12:00</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private
                                            transfer to Tbilisi International Airport</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package Details Tabs -->
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>04 nights in a 4-star
                                    Tbilisi hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily buffet breakfast
                                </li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Round-trip private
                                    airport transfers</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Tbilisi & UNESCO Mtskheta
                                    guided tour</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-day Gudauri –
                                    Kazbegi excursion</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kakheti wine region tour
                                    with tasting</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Driver-guide throughout
                                    the program</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Travel insurance included
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Round-trip airfare</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa fees & documentation
                                </li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Entrance tickets unless
                                    stated</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Meals beyond breakfast
                                </li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Professional guide upgrade
                                </li>
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
                                    Do I need a visa?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Generally, UAE residents can get their Georgia visa on arrival if they have a valid
                                    UAE residency visa.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Is Georgia safe for solo travelers?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, Georgia is highly rated for safety and is an ideal destination for solo
                                    travelers.
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,499</h2>
                            <span class="text-muted">Per Person (4N/5D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Premium Experience</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>4-Star
                                    Boutique Hotels</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Kakheti
                                    Wine Tour Included</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private
                                    Driver-Guide</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the 4N5D Georgia package"
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