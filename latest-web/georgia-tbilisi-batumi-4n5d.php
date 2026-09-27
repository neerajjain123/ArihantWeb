<?php
// Page SEO Variables
$pageTitle = "Tbilisi to Batumi Georgia Tour Package 4 Nights / 5 Days | Perfect Getaway from Dubai 2025 - Arihant Travels";
$pageDescription = "Experience the perfect Georgia combination: Tbilisi's cultural charm and Batumi's Black Sea coast. 4 nights from Dubai with 4-star stays included.";
$pageKeywords = "georgia tbilisi batumi tour, georgia coastal tour, tbilisi to batumi package, batumi black sea georgia, prometheus cave georgia, martvili canyon tour, batumi botanical gardens, georgia 4 nights 5 days, tbilisi batumi itinerary, georgia city and sea tour";
$pageCanonical = "https://arihantlink.com/georgia-tbilisi-batumi-4n5d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "Tbilisi to Batumi 4N/5D Getaway";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "georgia";
$breadcrumbBg = "img/blogs/georgia/batumi-district.webp";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Tbilisi to Batumi – The Perfect Georgia Getaway",
  "description": "' . $pageDescription . '",
  "touristType": ["Couples", "Families", "Friends", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/blogs/georgia/batumi-district.webp",
    "https://arihantlink.com/img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.jpg",
    "https://arihantlink.com/img/blogs/georgia/paragliding-in-gudauri.webp"
  ],
  "offers": {
    "@type": "Offer",
    "price": "2599",
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
    "name": "Tbilisi to Batumi 4N5D Detailed Itinerary",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Day 1 - Arrival & Welcome to Tbilisi", "description": "Meet at Airport • Private transfer to boutique hotel • Evening at leisure"},
      {"@type": "ListItem", "position": 2, "name": "Day 2 - Full Day Tbilisi City Tour", "description": "Metekhi Church • Rike Park • Narikala Cable Car • Mother Georgia • Sulfur Baths • Mtatsminda Park • Chronicles of Georgia"},
      {"@type": "ListItem", "position": 3, "name": "Day 3 - Prometheus Cave & Martvili Canyon", "description": "Drive to Kutaisi • Explore Prometheus Cave Halls • Underground boat tour • Martvili Canyon waterfalls • Transfer to Batumi"},
      {"@type": "ListItem", "position": 4, "name": "Day 4 - Batumi Botanical Gardens & City Tour", "description": "Batumi Botanical Garden • Europe Square • Ali and Nino Statue • Piazza • Ferris Wheel • Batumi Boulevard"},
      {"@type": "ListItem", "position": 5, "name": "Day 5 - Departure", "description": "Final breakfast • Private transfer from Batumi to Tbilisi Airport • Farewell Georgia"}
    ]
  }
}
</script>';
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-city fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">2 Nights Tbilisi</p>
                <small class="text-muted">Capital Culture</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-umbrella-beach fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">2 Nights Batumi</p>
                <small class="text-muted">Black Sea Coast</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-water fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Cave & Canyon</p>
                <small class="text-muted">Natural Wonders</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-hotel fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Boutique Stays</p>
                <small class="text-muted">Sole Palace & Tapis</small>
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
                    <h2 class="mb-4">One Part Cultural Discovery, One Part Coastal Escape</h2>
                    <p>This 4-night journey combines Tbilisi's charming capital with Batumi's modern seaside energy.
                        Start in Tbilisi where winding cobbled streets, hilltop fortresses, and lively squares set the
                        scene for exploration. Visit Metekhi Church, stroll across the Peace Bridge, ride the cable car
                        to Narikala Fortress, and explore Mtatsminda Park with its funicular ride and skyline views.</p>
                    <p>Then head west to Batumi on the Black Sea coast. En route, discover Prometheus Cave and Martvili
                        Canyon — two of Georgia's most breathtaking natural wonders. In Batumi, explore the lush
                        Botanical Gardens, stroll down Europe Square, see the moving Ali & Nino Statue, and ride the
                        Batumi Ferris Wheel.</p>
                </div>

                <!-- Itinerary -->
                <div class="mb-5">
                    <h2 class="mb-4">Itinerary Roadmap</h2>
                    <div class="accordion" id="itineraryAccordion">
                        <!-- Day 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#day1">
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival & Welcome to Tbilisi
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Private
                                            transfer from Shota Rustaveli Airport to city center</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Check-in
                                            at Sole Palace Tbilisi (boutique hotel)</li>
                                        <li class="mb-2"><i class="fas fa-info-circle text-muted me-2"></i>Rest of the
                                            day at leisure for self-exploration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Full Day Tbilisi City Tour
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <h6 class="fw-bold">Morning Highlights:</h6>
                                    <ul class="list-unstyled mb-3 ms-4">
                                        <li>Metekhi Church & Monument to King Vakhtang Gorgasali</li>
                                        <li>Peace Bridge & Rike Park</li>
                                        <li>Narikala Cable Car & Mother of Georgia Statue</li>
                                    </ul>
                                    <h6 class="fw-bold">Afternoon & Evening:</h6>
                                    <ul class="list-unstyled mb-0 ms-4">
                                        <li>Old Town & Sulfur Baths District strolling</li>
                                        <li>Funicular ride to Mtatsminda Park for skyline views</li>
                                        <li>Visit to the monumental Chronicles of Georgia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day3">
                                    <span class="badge bg-primary me-3">Day 3</span> Prometheus Cave & Martvili Canyon
                                </button>
                            </h2>
                            <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Explore
                                            1,420 meters of Prometheus Cave halls & boat tour</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Discover
                                            Martvili Canyon's 12m waterfall and green nature</li>
                                        <li class="mb-2"><i class="fas fa-shuttle-van text-primary me-2"></i>Private
                                            transfer directly to Batumi Black Sea resort</li>
                                        <li class="mb-2"><i class="fas fa-bed text-primary me-2"></i>Check-in at Tapis
                                            Rouge Design Boutique Hotel Batumi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day4">
                                    <span class="badge bg-primary me-3">Day 4</span> Batumi Botanical Gardens & City
                                    Highlights
                                </button>
                            </h2>
                            <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-leaf text-success me-2"></i>Visit the
                                            111-hectare Batumi Botanical Garden</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Europe
                                            Square & Alphabetic Tower (DNA shaped)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Ali and
                                            Nino Moving Sculpture & Ferris Wheel</li>
                                        <li class="mb-2"><i class="fas fa-walking text-primary me-2"></i>Leisure time on
                                            the palm-lined Batumi Boulevard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Departure
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-utensils text-primary me-2"></i>Final hotel
                                            breakfast & checkout</li>
                                        <li class="mb-2"><i class="fas fa-shuttle-van text-primary me-2"></i>Private
                                            transfer from Batumi back to Tbilisi Airport (approx 5 hours)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Package Highlights List -->
                <div class="mb-5 bg-white p-4 rounded shadow-sm border">
                    <h2 class="mb-4">What Makes This Tour Special</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex gap-3"><i
                                class="fas fa-star text-warning mt-1"></i><span><strong>Boutique Experience:</strong>
                                Stay in high-rated design hotels (Sole Palace & Tapis Rouge).</span></li>
                        <li class="mb-3 d-flex gap-3"><i class="fas fa-star text-warning mt-1"></i><span><strong>Natural
                                    Mysteries:</strong> Included visits to Prometheus Cave and Martvili Canyon.</span>
                        </li>
                        <li class="mb-3 d-flex gap-3"><i class="fas fa-star text-warning mt-1"></i><span><strong>Iconic
                                    Landmarks:</strong> Cable car to Narikala, Ali & Nino statue, and Batumi Ferris
                                Wheel.</span></li>
                        <li class="mb-3 d-flex gap-3"><i class="fas fa-star text-warning mt-1"></i><span><strong>Private
                                    Comfort:</strong> All tours and transfers in a private vehicle with a professional
                                guide.</span></li>
                    </ul>
                </div>

                <!-- Inclusions/Exclusions Tabs -->
                <div class="mb-5">
                    <ul class="nav nav-tabs nav-justified mb-0 shadow-sm" id="pkgTabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active py-3 fw-bold" id="inc-tab" data-bs-toggle="tab"
                                data-bs-target="#inc-pane" type="button">Inclusions</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link py-3 fw-bold text-muted" id="exc-tab" data-bs-toggle="tab"
                                data-bs-target="#exc-pane" type="button">Exclusions</button>
                        </li>
                    </ul>
                    <div class="tab-content bg-white p-4 rounded-bottom shadow-sm border border-top-0"
                        id="pkgTabsContent">
                        <div class="tab-pane fade show active" id="inc-pane" role="tabpanel">
                            <ul class="list-unstyled row g-3">
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>2 nights Tbilisi
                                    (Sole Palace boutique)</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>2 nights Batumi
                                    (Tapis Rouge boutique)</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Daily breakfast at
                                    hotels</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Private Tbilisi City
                                    Tour</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Private Batumi City &
                                    Garden Tour</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>English-speaking
                                    driver-guide</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>All private
                                    inter-city transfers</li>
                                <li class="col-md-6"><i class="fas fa-check text-primary me-2"></i>Prometheus & Martvili
                                    detour included</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="exc-pane" role="tabpanel">
                            <ul class="list-unstyled row g-3 fst-italic">
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>International Flight
                                    Tickets</li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Visa fees & personal
                                    tips</li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Entrance & cable car
                                    tickets (approx 50-70 USD total)</li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Meals except breakfast
                                </li>
                                <li class="col-md-6 text-muted"><i class="fas fa-times me-2"></i>Shopping & personal
                                    expenses</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow-sm border-0 mb-4 overflow-hidden rounded-3 text-center">
                        <div class="card-header bg-primary text-white py-3">
                            <h5 class="mb-0 fw-bold">Boutique Package</h5>
                        </div>
                        <div class="card-body p-4">
                            <p class="mb-1 text-muted">City & Sea from</p>
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 2,599</h2>
                            <span class="text-muted d-block mb-4">Per Person (4N/5D)</span>

                            <hr class="my-4">

                            <div class="d-grid gap-3">
                                <a href="https://wa.me/971585945007?text=I want to reserve the Tbilisi to Batumi Georgia package"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                                </a>
                                <a href="#itinerary" class="btn btn-outline-primary btn-lg rounded-pill">
                                    <i class="fas fa-info-circle me-2"></i>Details & Itinerary
                                </a>
                            </div>
                        </div>
                        <div class="card-footer bg-light py-3 border-0">
                            <p class="small text-muted mb-0 fst-italic"><i
                                    class="fas fa-shield-alt text-primary me-1"></i>Expertly curated coast-to-coast
                                tour.</p>
                        </div>
                    </div>
                    <?php include 'includes/enquiry-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>