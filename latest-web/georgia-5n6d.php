<?php
// Page SEO Variables
$pageTitle = "5 Nights 6 Days Georgia Ski Tour Package from Dubai | Gudauri Ski Resort 2025 - Arihant Travels";
$pageDescription = "Experience Georgia's winter wonderland over 5 nights / 6 days. Ski in Gudauri resort, visit Friendship Monument, explore Ananuri Fortress…";
$pageKeywords = "georgia ski package, gudauri ski resort, georgia winter tour, snowcapped georgia adventure, gudauri skiing dubai, georgia 5 nights 6 days, tbilisi gudauri tour, georgia ski holiday, caucasus ski trip";
$pageCanonical = "https://arihantlink.com/georgia-5n6d";
$currentPage = "#";

// Breadcrumb Variables
$pageHeading = "5 Nights 6 Days Georgia Ski Tour";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "georgia";
$breadcrumbBg = "img/blogs/georgia/gudauri-mountain.webp";
$breadcrumbOverlay = true;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Snowcapped Georgia Adventure - 5 Nights / 6 Days Ski & Culture Tour",
  "description": "' . $pageDescription . '",
  "touristType": ["Ski Enthusiasts", "Adventure Seekers", "Families", "Couples", "Solo Travelers"],
  "image": [
    "https://arihantlink.com/img/blogs/georgia/paragliding-in-gudauri.webp",
    "https://arihantlink.com/img/blogs/georgia/gudauri-mountain.webp",
    "https://arihantlink.com/img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.jpg"
  ],
  "offers": {
    "@type": "Offer",
    "price": "1999",
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
    "name": "Georgia 5N6D Snowcapped Adventure Itinerary",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Day 1 - Arrival & Transfer to Gudauri Ski Resort", "description": "Meet at Airport • Scenic drive to Gudauri • Visit Ananuri Fortress & Zhinvali Reservoir • Check-in at ski resort"},
      {"@type": "ListItem", "position": 2, "name": "Day 2 - Friendship Monument & Free Ski Time", "description": "Visit Friendship Monument • Stunning valley views • Afternoon free for ski activities"},
      {"@type": "ListItem", "position": 3, "name": "Day 3 - Full Day Ski Adventure", "description": "Gudauri slopes • Optional cable car rides, coaching, and equipment rental"},
      {"@type": "ListItem", "position": 4, "name": "Day 4 - Another Day on the Slopes", "description": "Full day for skiing and winter sports • Explore different slopes and pristine Caucasus snow"},
      {"@type": "ListItem", "position": 5, "name": "Day 5 - Return to Tbilisi & Old Town Tour", "description": "Transfer to Tbilisi • Metekhi Church • Narikala Cable Car • Chardin Street • Sulfur Baths District"},
      {"@type": "ListItem", "position": 6, "name": "Day 6 - Departure", "description": "Final breakfast • Private transfer to Tbilisi International Airport • End of tour"}
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
                <i class="fas fa-snowflake fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">4 Nights Gudauri</p>
                <small class="text-muted">Ski Resort Stay</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-skiing fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Winter Adventure</p>
                <small class="text-muted">Ski & Snow Sports</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="fas fa-history fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">1 Night Tbilisi</p>
                <small class="text-muted">Cultural Finale</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">High Caucasus</p>
                <small class="text-muted">Scenic Landscapes</small>
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
                    <h2 class="mb-4">Why This Winter Package</h2>
                    <p class="text-primary fw-bold">Perfect Blend of Ski Adventure & Cultural Discovery</p>
                    <p>This 5-night winter adventure combines the thrill of skiing in Gudauri—one of the Caucasus'
                        premier ski resorts—with the cultural richness of Tbilisi's Old Town. Spend 4 nights in Gudauri
                        perfecting your skills on pristine slopes, then return to Tbilisi for a day of historic
                        exploration.</p>
                    <p>From the Friendship Monument's impressive murals to Ananuri Fortress, from Narikala Fortress
                        panoramas to the magical Sulfur Baths, this package delivers both adrenaline and culture. With
                        private transfers, English-speaking guides, and flexible ski add-ons, it's the perfect winter
                        escape.</p>
                </div>

                <!-- Itinerary -->
                <div class="mb-5">
                    <h2 class="mb-4">Winter Itinerary</h2>
                    <div class="accordion" id="itineraryAccordion">
                        <!-- Day 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#day1">
                                    <span class="badge bg-primary me-3">Day 1</span> Arrival & Transfer to Gudauri
                                </button>
                            </h2>
                            <div id="day1" class="accordion-collapse collapse show"
                                data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Meet &
                                            greet at Tbilisi International Airport</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Scenic
                                            drive to Gudauri ski resort (3 hours)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Visit
                                            Ananuri Fortress & Zhinvali Reservoir</li>
                                        <li class="mb-2"><i class="fas fa-bed text-primary me-2"></i>Check-in at Gudauri
                                            hotel & rest</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day2">
                                    <span class="badge bg-primary me-3">Day 2</span> Friendship Monument & Free Ski Time
                                </button>
                            </h2>
                            <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-camera text-primary me-2"></i>Visit Friendship
                                            Monument (Treaty of Georgievsk)</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Panoramic
                                            views of the "Devil's Valley"</li>
                                        <li class="mb-2"><i class="fas fa-skiing text-primary me-2"></i>Afternoon at
                                            leisure for ski activities on pristine slopes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 3 & 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day34">
                                    <span class="badge bg-primary me-3">Day 3 & 4</span> Full Day Ski Adventures
                                </button>
                            </h2>
                            <div id="day34" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <p class="mb-3 fst-italic">Maximizing your time on the mountain:</p>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-snowflake text-primary me-2"></i>Two full days
                                            dedicated to skiing and winter sports</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Access to
                                            various slope levels in Gudauri</li>
                                        <li class="mb-2"><i class="fas fa-info-circle text-muted me-2"></i>Optional: Ski
                                            coaching, equipment rental, and paragliding</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day5">
                                    <span class="badge bg-primary me-3">Day 5</span> Return to Tbilisi & Old Town Tour
                                </button>
                            </h2>
                            <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-shuttle-van text-primary me-2"></i>Transfer
                                            back to the capital, Tbilisi</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Walking
                                            tour: Metekhi Church & Meidan Bazaar</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Narikala
                                            Cable Car for panoramic city views</li>
                                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Chardin
                                            Street & historic Sulfur Baths district</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Day 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#day6">
                                    <span class="badge bg-primary me-3">Day 6</span> Farewell Georgia
                                </button>
                            </h2>
                            <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body border-top">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-utensils text-primary me-2"></i>Final hotel
                                            breakfast & checkout</li>
                                        <li class="mb-2"><i class="fas fa-plane-departure text-primary me-2"></i>Private
                                            transfer to Tbilisi International Airport</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ski Sidebar Details -->
                <div class="mb-5 bg-white p-4 rounded shadow-sm border">
                    <h2 class="mb-4">Ski Options (Available on Site)</h2>
                    <div class="table-responsive">
                        <table class="table table-hover border">
                            <thead class="bg-light">
                                <tr>
                                    <th>Service</th>
                                    <th>Approximate Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cable Car Pass (Round-trip)</td>
                                    <td>10 USD</td>
                                </tr>
                                <tr>
                                    <td>Ski Equipment (Set per day)</td>
                                    <td>30 USD</td>
                                </tr>
                                <tr>
                                    <td>Professional Ski Coach (Per hour)</td>
                                    <td>60 USD</td>
                                </tr>
                                <tr>
                                    <td>Complete Ski Gears</td>
                                    <td>60 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="small text-muted mt-2 fst-italic">* All ski-related costs are payable directly at the
                        resort and are not included in the primary package price.</p>
                </div>

                <!-- Inclusions/Exclusions -->
                <div class="mb-5">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="bg-white p-4 rounded shadow-sm border h-100">
                                <h4 class="mb-3 text-success"><i class="fas fa-plus-circle me-2"></i>What's Included
                                </h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 nights in Gudauri
                                        ski resort</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>1 night in Tbilisi
                                        hotel</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daily buffet
                                        breakfast</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Narikala Cable Car
                                        tickets</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>All tours on a
                                        private basis</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>English-speaking
                                        driver-guide</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Travel insurance
                                        included</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white p-4 rounded shadow-sm border h-100">
                                <h4 class="mb-3 text-danger"><i class="fas fa-minus-circle me-2"></i>Not Included</h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Round-trip airfare
                                    </li>
                                    <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Visa fees &
                                        documentation</li>
                                    <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Ski passes & equipment
                                    </li>
                                    <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Meals except breakfast
                                    </li>
                                    <li class="mb-2"><i class="fas fa-times text-danger me-2"></i>Personal shopping</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Booking Card -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow-sm border-0 mb-4 overflow-hidden rounded-3 text-center">
                        <div class="card-header bg-primary text-white py-3">
                            <h5 class="mb-0 fw-bold">Special Winter Deal</h5>
                        </div>
                        <div class="card-body p-4">
                            <p class="mb-1 text-muted">Adventure package from</p>
                            <h2 class="mb-0 text-primary display-6 fw-bold">AED 1,999</h2>
                            <span class="text-muted d-block mb-4">Per Person (5N/6D)</span>

                            <hr class="my-4">

                            <div class="d-grid gap-3">
                                <a href="https://wa.me/971585945007?text=I want to reserve the 5N6D Snowcapped Georgia Adventure"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                                </a>
                                <a href="contact" class="btn btn-outline-primary btn-lg rounded-pill">
                                    <i class="fas fa-calendar-check me-2"></i>Inquire Now
                                </a>
                            </div>
                        </div>
                        <div class="card-footer bg-light py-3 border-0">
                            <p class="small text-muted mb-0"><i class="fas fa-shield-alt text-primary me-1"></i>Secure
                                Booking · Expert Guides</p>
                        </div>
                    </div>
                    <?php include 'includes/enquiry-sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>