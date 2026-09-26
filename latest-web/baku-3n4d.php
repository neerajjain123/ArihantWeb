<?php
// Page SEO Variables
$pageTitle = "3 Nights 4 Days Baku & Gabala Tour Package from Dubai | Short Azerbaijan Trip 2025";
$pageDescription = "Enjoy a short yet comprehensive 3 Nights / 4 Days getaway to Baku and Gabala. Visit the UNESCO Old City and the scenic Caucasus mountains.";
$pageKeywords = "baku 3n4d package, short baku trip, baku gabala tour from dubai, baku old city tour, gabala day trip, azerbaijan holiday for uae residents, cheap azerbaijan packages";
$pageCanonical = "https://arihantlink.com/baku-3n4d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "A Short Trip to Baku with Gabala";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "baku";
$breadcrumbBg = "img/baku/baku-cityscape-flametowers.jpeg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "A Short Trip to Baku with Gabala - 3 Nights / 4 Days",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/baku/baku-cityscape-flametowers.jpeg",
    "https://arihantlink.com/img/baku/maiden-tower-baku.jpg",
    "https://arihantlink.com/img/baku/gabala-Lake-Nohu.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1200",
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
    "name": "Baku 3N4D Detailed Itinerary",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Day 1 - Arrival & Transfer to Hotel",
        "description": "Arrive at Heydar Aliyev International Airport, clear customs, meet our representative, and transfer to your hotel. Evening at leisure."
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Day 2 - Baku City Tour & Shopping",
        "description": "Explore the Old City (UNESCO), Nizami Street, Fountains Square, and a photostop at the Heydar Aliyev Centre."
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Day 3 - Gabala Nature Excursion",
        "description": "Full day tour to Gabala: Tufandag Cable Car, Nohur Lake, and Yeddi Gozel Waterfalls. Return to Baku for overnight."
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Day 4 - Departure",
        "description": "Final breakfast, checkout, and transfer to the airport for your departure."
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
      "name": "Is Gabala visited as a day trip in this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, in this 3 Nights / 4 Days package, you stay in Baku for all three nights and visit Gabala as a full-day excursion on Day 3."
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
                <i class="fas fa-plane-arrival fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private Transfers</p>
                <small class="text-muted">Airport & Tours</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-landmark fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">UNESCO Old City</p>
                <small class="text-muted">Highland Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Gabala Lakes</p>
                <small class="text-muted">Nature Retreat</small>
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
                    <p class="text-primary fw-bold">City Sophistication meets Mountain Tranquility</p>
                    <p>Baku, the capital of Azerbaijan, is a bustling metropolis where modernity meets tradition. It
                        showcases striking architectural wonders like the Flame Towers alongside historic treasures
                        within its UNESCO-listed Old City. With a vibrant cultural scene, Baku boasts museums, theaters,
                        and a dynamic nightlife.</p>
                    <p>Gabala, nestled in the serene Caucasus Mountains, offers a stark contrast with its tranquil
                        ambiance and lush landscapes. It's a haven for outdoor enthusiasts, providing opportunities for
                        activities like hiking, skiing, and exploring nature. Away from the hustle of city life, Gabala
                        serves as a peaceful retreat, allowing visitors to unwind and connect with Azerbaijan's natural
                        beauty.</p>
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
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival & Welcome to Baku
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/baku-cityscape-flametowers.jpeg"
                                                class="img-fluid rounded shadow-sm" alt="Baku Skyline">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Arrival at
                                                    Heydar Aliyev International Airport</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Clearing
                                                    Immigration & Collecting Baggage</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Welcoming by
                                                    our representative and transfer to the hotel</li>
                                                <li class="mb-2"><i class="fas fa-star text-secondary me-2"></i>Rest of
                                                    the day is at leisure to explore the city</li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Baku</li>
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
                                    <span class="badge bg-primary me-3">Day 2</span> Baku City Tour & Historical Wonders
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/maiden-tower-baku.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Old City Baku">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">Ancient Heart & Modern Soul</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit the
                                                    <strong>Old City (Icherisheher)</strong> - Palace of the
                                                    Shirvanshahs & Maiden Tower</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Experience the
                                                    vibrant <strong>Nizami Street</strong> for shopping and architecture
                                                </li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit
                                                    <strong>Fountains Square</strong>, the city's popular gathering
                                                    place</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Photostop
                                                    outside the <strong>Heydar Aliyev Center</strong> by Zaha Hadid</li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Overnight
                                                    stay in Baku</li>
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
                                    <span class="badge bg-primary me-3">Day 3</span> Gabala Mountain Excursion
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/gabala-Lake-Nohu.webp"
                                                class="img-fluid rounded shadow-sm" alt="Lake Nohur">
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="fw-bold mb-3">The Great Caucasus Escape</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Full day
                                                    excursion to <strong>Gabala</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Ride the
                                                    <strong>Tufandag Cable Car</strong> for stunning mountain views</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Visit the
                                                    serene <strong>Nohur Lake</strong></li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Explore the
                                                    <strong>Yeddi Gozel (Seven Beauties) Waterfall</strong></li>
                                                <li class="mb-2"><i class="fas fa-moon text-muted me-2"></i>Return to
                                                    Baku for overnight stay</li>
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
                                    <span class="badge bg-primary me-3">Day 4</span> Farewell Azerbaijan
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <img src="img/baku/baku-night-city-panaroma-view.jpg"
                                                class="img-fluid rounded shadow-sm" alt="Baku Panorama">
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Enjoy a final
                                                    breakfast at your hotel</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-primary me-2"></i>Checkout and
                                                    private transfer to the airport</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-plane-departure text-primary me-2"></i>Departure
                                                    for your flight back</li>
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
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Nights’ Accommodation
                                    at Selected Hotel in Baku</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily Buffet Breakfast at
                                    the Hotel</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Transportation by Private
                                    Sedan or Minivan</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>English-speaking Driver
                                    during the entire trip</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Full-Day Gabala City Tour
                                </li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Baku City Tour (Old City
                                    & Modern Landmarks)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Return Airport Transfers
                                    on Private Basis</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exclusions" role="tabpanel">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Airfare</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Travel Insurance</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Cost of Visa</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Expenses of personal
                                    nature</li>
                                <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Anything not specified
                                    under inclusions</li>
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
                                    How far is Gabala from Baku?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Gabala is approximately 220 km (about 3.5 to 4 hours) from Baku. It's a scenic drive
                                    through the mountains.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Is food expensive in Azerbaijan?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Azerbaijan offers great value for money. You can find delicious local meals at very
                                    reasonable prices, ranging from street food to fine dining.
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
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,200</h2>
                            <span class="text-muted">Per Person (3N/4D)</span>
                            <div class="my-4 border-top pt-3">
                                <span class="badge bg-primary mb-3 px-3 py-2">Short Break</span>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>3 Nights
                                    in Baku</p>
                                <p class="small text-muted mb-2"><i class="fas fa-check text-primary me-2"></i>Full Day
                                    Gabala Trip</p>
                                <p class="small text-muted mb-4"><i class="fas fa-check text-primary me-2"></i>Private
                                    Touring</p>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to reserve the 3N4D Baku Short Trip package"
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