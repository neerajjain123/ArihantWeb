<?php
// Page SEO Variables
$pageTitle = "Explore Tbilisi & Gudauri | 5 Nights 6 Days Georgia Tour from Dubai - Arihant Travels";
$pageDescription = "Blend Old Tbilisi's sulfur baths and Mtskheta's UNESCO gems with Gudauri's Caucasus mountains. This 5N/6D Georgia holiday includes 4-star hotels…";
$pageKeywords = "georgia tour package 5 nights 6 days, tbilisi gudauri itinerary, georgia holiday from dubai, gudauri kazbegi tour, mtskheta ananuri day trip, gori uplistsikhe tour, tbilisi walking tour, georgia private tour dubai";
$pageCanonical = "https://arihantlink.com/georgia-tbilisi-gudauri-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Tbilisi & Gudauri Exploration";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "georgia";
$breadcrumbBg = "img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.jpg";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Explore Tbilisi & Gudauri - 5 Nights / 6 Days Georgia Tour",
  "name": "Tbilisi & Gudauri Heritage Exploration",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.jpg",
    "https://arihantlink.com/img/blogs/georgia/ananuri-fortress.webp",
    "https://arihantlink.com/img/blogs/georgia/kazbegi-gergeti-trinity-church.webp",
    "https://arihantlink.com/img/blogs/georgia/Tbilisi-sulfur-baths.webp"
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
    "name": "Georgia 5N6D Tbilisi & Gudauri Detailed Itinerary",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Day 1 - Arrival in Tbilisi", "description": "Meet at Airport • Private transfer to 4-star hotel • Assistance with check-in"},
      {"@type": "ListItem", "position": 2, "name": "Day 2 - Signature Tbilisi Walking Experience", "description": "Old Tbilisi • Metekhi Church • Narikala Cable Car • Sulfur Baths • Mtatsminda Park Funicular"},
      {"@type": "ListItem", "position": 3, "name": "Day 3 - Mtskheta, Ananuri & Gudauri", "description": "Jvari Monastery • Svetitskhoveli Cathedral (UNESCO) • Jinvali Reservoir • Ananuri Fortress • Friendship Monument"},
      {"@type": "ListItem", "position": 4, "name": "Day 4 - Kazbegi & Dariali Gorge", "description": "Stepantsminda • 4x4 ride to Gergeti Trinity Church • Dariali Gorge border valley • Alpine downtime"},
      {"@type": "ListItem", "position": 5, "name": "Day 5 - Gori, Uplistsikhe & Return to Tbilisi", "description": "Stalin Museum • Uplistsikhe rock-hewn cave city • Orbeliani Bazaar • Shopping at Tbilisi Mall"},
      {"@type": "ListItem", "position": 6, "name": "Day 6 - Departure Day", "description": "Final breakfast • Private transfer to Tbilisi International Airport • Until next time"}
    ]
  }
}
</script>';
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-landmark fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Heritage Focus</p>
                <small class="text-muted">UNESCO & Caves</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Caucasus Peaks</p>
                <small class="text-muted">Gudauri & Kazbegi</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-car-side fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private Tours</p>
                <small class="text-muted">Included 4x4 Rides</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-hotel fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">4-Star Comfort</p>
                <small class="text-muted">Tbilisi & Gudauri</small>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-2">
        <div class="row g-5">
            <!-- Left Column: Content -->
            <div class="col-lg-8">
                <!-- Overview -->
                <div class="mb-5">
                    <h2 class="mb-4">Culture meets Caucasus Peaks in One Seamless Holiday</h2>
                    <p class="lead text-primary mb-4">A perfect 6-day blend of ancient spirits and mountain air.</p>
                    <p>Spend three nights soaking up Tbilisi’s vivid street life, sulfur baths, flea markets, and modern
                        architecture before heading into the highlands for Gudauri’s fresh air and Kazbegi’s famous
                        Gergeti Trinity. Every transfer is private, every guide bilingual, and every detail curated for
                        UAE travellers who want both culture and nature.</p>
                    <p>The program also sneaks in side quests — Gori’s Stalin Museum, the rock-hewn town of Uplistsikhe,
                        shopping stops, and foodie corners like Orbeliani Bazaar — so you return with more than mountain
                        memories.</p>
                </div>

                <!-- Itinerary -->
                <div class="mb-5">
                    <h2 class="mb-4">Itinerary Breakdown</h2>
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
                                            transfer to 4-star hotel and assistance with check-in</li>
                                        <li class="mb-2"><i class="fas fa-info-circle text-muted me-2"></i>Rest of the
                                            day free to explore Freedom Square or the Old Town</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Signature Tbilisi Walking
                                    Experience
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <h6 class="fw-bold">Historic Walk:</h6>
                                    <ul class="list-unstyled mb-3 ms-4">
                                        <li>Metekhi Church & King Vakhtang monument</li>
                                        <li>Cable car to Narikala Fortress & Mother of Kartli</li>
                                        <li>Abanotubani Sulfur Baths & Legvtakhevi waterfall</li>
                                        <li>Bridge of Peace & Sioni Cathedral</li>
                                    </ul>
                                    <h6 class="fw-bold">Modern & Skyline Views:</h6>
                                    <ul class="list-unstyled mb-0 ms-4">
                                        <li>Holy Trinity (Sameba) Cathedral</li>
                                        <li>Rustaveli Avenue & Dry Bridge Flea Market</li>
                                        <li>Funicular ride up Mtatsminda Park for sunset/night views</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> UNESCO Mtskheta & The Road to
                                    Gudauri
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Jvari
                                            Monastery & Svetitskhoveli Cathedral (UNESCO)</li>
                                        <li class="mb-2"><i class="fas fa-camera text-primary me-2"></i>Scenic drive
                                            along Jinvali Reservoir & Ananuri Fortress</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit
                                            Russia–Georgia Friendship Monument in Gudauri</li>
                                        <li class="mb-2"><i class="fas fa-bed text-primary me-2"></i>Overnight at
                                            Gudauri mountain hotel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Kazbegi Peaks & Gergeti 4x4
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i
                                                class="fas fa-car-side text-primary me-2"></i><strong>Included:</strong>
                                            4x4 vehicle ascent to Gergeti Trinity Church</li>
                                        <li class="mb-2"><i class="fas fa-mountain text-primary me-2"></i>Stunning views
                                            beneath Mt. Kazbek</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Dramatic
                                            Dariali Gorge visit near the border</li>
                                        <li class="mb-2"><i class="fas fa-leaf text-success me-2"></i>Alpine downtime or
                                            optional Sno Village detour</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Gori Caves & Urban Farewell
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i
                                                class="fas fa-history text-primary me-2"></i><strong>Included:</strong>
                                            Stalin Museum visit in Gori</li>
                                        <li class="mb-2"><i
                                                class="fas fa-fort-awesome text-primary me-2"></i><strong>Included:</strong>
                                            Uplistsikhe ancient rock-hewn cave city</li>
                                        <li class="mb-2"><i class="fas fa-shopping-bag text-primary me-2"></i>Shopping
                                            at Orbeliani Bazaar and Tbilisi Mall</li>
                                        <li class="mb-2"><i class="fas fa-walking text-primary me-2"></i>Last evening
                                            free in Tbilisi for favorite corners</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day6">
                                    <span class="badge bg-primary me-3">Day 6</span> Departure
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-utensils text-primary me-2"></i>Final hotel
                                            breakfast and checkout by 12:00</li>
                                        <li class="mb-2"><i class="fas fa-plane-departure text-primary me-2"></i>Private
                                            transfer to Tbilisi International Airport</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Simple Inclusions/Exclusions -->
                <div class="mb-5 row g-4">
                    <div class="col-md-6">
                        <div class="bg-white p-4 rounded shadow-sm border h-100">
                            <h4 class="mb-3 text-success">Inclusions</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>3N Tbilisi & 2N
                                    Gudauri (4-Star)</li>
                                <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Daily breakfast at
                                    hotels</li>
                                <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Private tours &
                                    airport transfers</li>
                                <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>English-speaking
                                    driver-guide</li>
                                <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>4x4 Gergeti Jeep
                                    ascent</li>
                                <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Cable car &
                                    Funicular tickets</li>
                                <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Entry: Stalin
                                    Museum & Uplistsikhe</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-white p-4 rounded shadow-sm border h-100">
                            <h4 class="mb-3 text-danger">Exclusions</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i>International
                                    Airfare</li>
                                <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i>Visa fees & personal
                                    tips</li>
                                <li class="col-md-6 text-muted mb-2 small"><i
                                        class="fas fa-times text-danger me-2"></i>Meals except breakfast</li>
                                <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i>Personal expenses &
                                    shopping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Card -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow-sm border-0 mb-4 overflow-hidden rounded-3 text-center">
                        <div class="card-header bg-primary text-white py-3">
                            <h5 class="mb-0 fw-bold">Heritage Exploration</h5>
                        </div>
                        <div class="card-body p-4">
                            <p class="mb-1 text-muted">Complete 6-day tour from</p>
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,799</h2>
                            <span class="text-muted d-block mb-4">Per Person (5N/6D)</span>

                            <hr class="my-4">

                            <div class="d-grid gap-3">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Explore Tbilisi & Gudauri 5N6D package"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                                </a>
                                <a href="#itinerary" class="btn btn-outline-primary btn-lg rounded-pill">
                                    <i class="fas fa-calendar-alt me-2"></i>View Itinerary
                                </a>
                            </div>
                        </div>
                        <div class="card-footer bg-light py-3 border-0">
                            <p class="small text-muted mb-0"><i class="fas fa-medal text-primary me-1"></i>High-Value
                                Private Tour</p>
                        </div>
                    </div>
                    <?php include 'includes/enquiry-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>