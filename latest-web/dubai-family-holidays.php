<?php
// Page SEO Variables
$pageTitle = "Dubai Family Holidays 2026 | 6 Nights 7 Days from AED 3,499 | Jain Food + BAPS Mandir - Arihant Travel";
$pageDescription = "Our most comprehensive family package — 6 nights from AED 3,499 (₹80,500). Burj Khalifa, Global Village, Miracle Garden, Abu Dhabi tour with BAPS Mandir…";
$pageKeywords = "Jain food Dubai family holidays, 6 nights 7 days Dubai tour Jain, vegetarian family Dubai package, miracle garden and global village tour, kid friendly desert safari Jain food, ariant family package, Dubai family itinerary with Jain food, 2026, Dubai family package from India, best family Dubai tour";
$pageCanonical = "https://arihantlink.com/dubai-family-holidays";
$currentPage = "holiday-packages";

// Breadcrumb Variables
$pageHeading = "Dubai Family Holidays";
$breadcrumbCategory = "Dubai Packages";
$breadcrumbCategoryLink = "dubai-holiday-packages";
$breadcrumbBg = "img/dubaiholiday/family-holiday-dubai.avif";
$breadcrumbOverlay = false;

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Tour",
  "name": "' . $pageTitle . '",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/dubaiholiday/family-holiday-dubai.avif",
  "provider": {
    "@type": "TravelAgency",
    "name": "Arihant Travel",
    "url": "https://arihantlink.com"
  },
  "url": "https://arihantlink.com/dubai-family-holidays",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "reviewCount": "350"
  },
  "offers": {
    "@type": "Offer",
    "price": "3499",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "validFrom": "2026-01-01",
    "priceValidUntil": "2026-12-31"
  },
  "itinerary": [
    {
      "@type": "City",
      "name": "Dubai",
      "description": "Arrival, Marina Dhow Cruise"
    },
    {
      "@type": "City",
      "name": "Dubai",
      "description": "Burj Khalifa, Dubai Mall, Aquarium"
    },
    {
      "@type": "City",
      "name": "Dubai",
      "description": "Miracle Garden, Global Village"
    },
    {
      "@type": "City",
      "name": "Abu Dhabi",
      "description": "Full-day Abu Dhabi Tour with Jain Meal options"
    },
    {
      "@type": "City",
      "name": "Dubai",
      "description": "Desert Adventure with Jain-friendly BBQ"
    }
  ],
  "touristType": ["Family", "Premium Family", "Indian Families", "Jain Families", "Large Groups"],
  "dietaryRequirement": "Jain, Vegetarian"
}
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Trust Bar -->
<div class="container-fluid bg-white border-bottom py-2">
    <div class="container">
        <div class="row text-center g-2">
            <div class="col-4 col-md-2"><small class="text-muted"><i class="fas fa-star text-warning me-1"></i>4.8★ Rated</small></div>
            <div class="col-4 col-md-2"><small class="text-muted"><i class="fas fa-users text-primary me-1"></i>350+ Families</small></div>
            <div class="col-4 col-md-2"><small class="text-muted"><i class="fas fa-leaf text-success me-1"></i>Jain Food</small></div>
            <div class="col-4 col-md-2"><small class="text-muted"><i class="fas fa-crown text-warning me-1"></i>Premium</small></div>
            <div class="col-4 col-md-2"><small class="text-muted"><i class="fab fa-whatsapp text-success me-1"></i>24/7 Support</small></div>
            <div class="col-4 col-md-2"><small class="text-muted"><i class="fas fa-calendar-alt text-primary me-1"></i>7 Full Days</small></div>
        </div>
    </div>
</div>

<!-- Package Overview Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="position-relative">
                    <img class="img-fluid rounded w-100" src="img/dubaiholiday/global-village-2.webp"
                        alt="Dubai Family Holidays - 6 Nights 7 Days Premium Package with Jain Food">
                    <div class="bg-primary text-white p-3 rounded position-absolute top-0 start-0 m-3">
                        <h4 class="mb-0">6N / 7D</h4>
                    </div>
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-warning text-dark px-3 py-2 fs-6"><i class="fas fa-crown me-1"></i>Premium Family</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title px-3">Family Signature</h5>
                <h1 class="mb-4 h2">Dubai Family Holidays - <span class="text-primary">Complete Escape</span></h1>
                <p class="mb-4">Our most comprehensive family offering — enjoy 6 nights in Dubai with the whole family featuring Burj Khalifa, Dubai Aquarium,
                    Miracle Garden, Global Village, kid-friendly desert safari, dhow cruise, and a full-day Abu Dhabi
                    tour with BAPS Mandir visit. 7 full days of Jain meals and premium family comfort.</p>
                <p class="mb-4"><span class="badge bg-light text-dark border"><i class="fas fa-check-circle text-success me-1"></i>Best for large families & multi-generational groups</span></p>

                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Burj Khalifa Included</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Dubai Aquarium</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Garden & Global Village</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Abu Dhabi Day Tour</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-utensils text-primary me-2"></i>Guaranteed Jain/Veg Meals</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Theme Park Adventure</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <h2 class="text-primary fw-bold mb-0">From 3,499 AED</h2>
                </div>

                <div class="d-flex gap-3">
                    <a class="btn btn-primary rounded-pill py-3 px-5"
                        href="https://wa.me/971585945007?text=I%20want%20to%20book%20Dubai%20Family%20Holidays%20package."
                        target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                    </a>
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="contact.php">Enquiry Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Package Overview End -->



<!-- Itinerary Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Itinerary</h5>
            <h2 class="mb-4">Seven Days of Smiles</h2>
        </div>

        <div class="accordion" id="itineraryAccordion">
            <!-- Day 1 -->
            <div class="accordion-item shadow-sm mb-3">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="fw-bold me-3">Day 1:</span> Arrival & Marina Lights
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#itineraryAccordion">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img src="img/dubaiholiday/dhow1.webp" class="img-fluid rounded"
                                    alt="Marina Dhow Cruise">
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Morning / Afternoon</h6>
                                <ul class="mb-3">
                                    <li>Arrive in Dubai, private transfer with welcome kit for kids</li>
                                    <li>Check-in and unwind by the pool or beach promenade</li>
                                </ul>
                                <h6 class="fw-bold">Evening</h6>
                                <ul>
                                    <li>Creek or Marina Dhow Cruise dinner with live entertainment</li>
                                    <li>Nighttime skyline photo opportunities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 2 -->
            <div class="accordion-item shadow-sm mb-3">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="fw-bold me-3">Day 2:</span> Classic Dubai & Burj Khalifa
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#itineraryAccordion">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img src="img/dubaiholiday/burj-khalifa-dubai-skyline-hero.jpg"
                                    class="img-fluid rounded" alt="Burj Khalifa">
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Morning</h6>
                                <ul class="mb-3">
                                    <li>Guided old + new Dubai tour (Bastakiya, Creek, Jumeirah Mosque)</li>
                                    <li>Drive-by Atlantis The Palm & Dubai Frame</li>
                                </ul>
                                <h6 class="fw-bold">Afternoon</h6>
                                <ul class="mb-3">
                                    <li>Dubai Mall exploration with Aquarium & Underwater Zoo</li>
                                </ul>
                                <h6 class="fw-bold">Evening</h6>
                                <ul>
                                    <li>Burj Khalifa At The Top prime hour entry</li>
                                    <li>Dubai Fountain promenade walk with family photos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 3 -->
            <div class="accordion-item shadow-sm mb-3">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="fw-bold me-3">Day 3:</span> Miracle Garden & Global Village
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#itineraryAccordion">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img src="img/dubaiholiday/Miracle garden.webp" class="img-fluid rounded"
                                    alt="Miracle Garden">
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Morning</h6>
                                <ul class="mb-3">
                                    <li>Leisure breakfast and late start for families</li>
                                    <li>Optional visit to Museum of the Future</li>
                                </ul>
                                <h6 class="fw-bold">Afternoon</h6>
                                <ul class="mb-3">
                                    <li>Stroll through Dubai Miracle Garden floral installations</li>
                                </ul>
                                <h6 class="fw-bold">Evening</h6>
                                <ul>
                                    <li>Global Village cultural pavilions, stage shows & rides</li>
                                    <li>Return transfer back to hotel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 4 -->
            <div class="accordion-item shadow-sm mb-3">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="fw-bold me-3">Day 4:</span> Theme Park Adventure
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#itineraryAccordion">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img src="img/dubaiholiday/themepark.webp" class="img-fluid rounded" alt="Theme Park">
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Morning</h6>
                                <ul class="mb-3">
                                    <li>Head to Motiongate, IMG Worlds, or LEGOLAND</li>
                                    <li>Enjoy rides, meet characters, and explore splash zones</li>
                                </ul>
                                <h6 class="fw-bold">Afternoon / Evening</h6>
                                <ul>
                                    <li>Continue park fun or hop to Riverland Dubai for snacks</li>
                                    <li>Dinner at La Mer or Bluewaters Island (own expense)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 5 -->
            <div class="accordion-item shadow-sm mb-3">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <span class="fw-bold me-3">Day 5:</span> Full-Day Abu Dhabi Tour
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#itineraryAccordion">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img src="img/dubaiholiday/citytour.webp" class="img-fluid rounded" alt="Abu Dhabi">
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Morning</h6>
                                <ul class="mb-3">
                                    <li>Drive to Abu Dhabi with private chauffeur</li>
                                    <li>Sheikh Zayed Grand Mosque guided experience</li>
                                </ul>
                                <h6 class="fw-bold">Afternoon</h6>
                                <ul class="mb-3">
                                    <li>Corniche drive, Emirates Palace photo stop, Dates Market</li>
                                    <li>Visit Qasr Al Watan or Louvre Abu Dhabi</li>
                                </ul>
                                <h6 class="fw-bold">Evening</h6>
                                <ul>
                                    <li>Return to Dubai, optional Yas Bay waterfront dinner</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 6 -->
            <div class="accordion-item shadow-sm mb-3">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <span class="fw-bold me-3">Day 6:</span> Desert Adventure
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#itineraryAccordion">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img src="img/dubaiholiday/safari.webp" class="img-fluid rounded" alt="Desert Safari">
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Afternoon & Evening</h6>
                                <ul>
                                    <li>Family desert safari with gentle dune bashing, camel rides, henna</li>
                                    <li>BBQ dinner, Tanoura & fire shows, kids-friendly buffet</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 7 -->
            <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <span class="fw-bold me-3">Day 7:</span> Departure Day
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#itineraryAccordion">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <img src="img/dubaiholiday/view-at-the-palm-2.webp" class="img-fluid rounded"
                                    alt="Departure">
                            </div>
                            <div class="col-md-8">
                                <h6 class="fw-bold">Morning</h6>
                                <ul>
                                    <li>Breakfast, check-out assistance, and family photos</li>
                                    <li>Private airport transfer with snacks and luggage support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Itinerary End -->

<!-- Inclusions/Exclusions Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="mb-0 fw-bold">Package Inclusions</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>6 nights stay at
                                premium family hotels with breakfast</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Private airport
                                transfers for the whole family</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Burj Khalifa At The
                                Top tickets included</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Dubai Aquarium &
                                Underwater Zoo admission</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Miracle Garden &
                                Global Village with transfers</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Full-day Abu Dhabi
                                tour with Grand Mosque</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Family desert safari
                                with BBQ dinner</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Theme park choice
                                (Motiongate/LEGOLAND/IMG)</li>
                            <li class="mb-2"><i class="fas fa-utensils text-success me-2"></i>Hassle-free Jain & Pure
                                Vegetarian Meals arranged</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-header bg-secondary text-white py-3">
                        <h5 class="mb-0 fw-bold">Package Exclusions</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i>International flights
                            </li>
                            <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i>UAE visa fees (if
                                applicable)</li>
                            <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i>Lunches and dinners not
                                mentioned</li>
                            <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i>Personal expenses &
                                shopping</li>
                            <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i>Travel insurance</li>
                            <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i>Optional upgrades or
                                tips</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inclusions/Exclusions End -->

<!-- Cancellation Policy Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Policies</h5>
            <h2 class="mb-4">Cancellation Policy</h2>
        </div>
        <div class="bg-white rounded shadow p-4 border-2 border-primary">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Days before departure</th>
                            <th>Cancellation Charge</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0 - 10 days</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>11 - 15 days</td>
                            <td>75% + Non-refundable components</td>
                        </tr>
                        <tr>
                            <td>16 - 30 days</td>
                            <td>30% + Non-refundable components</td>
                        </tr>
                        <tr>
                            <td>Hotel / Air / Park Tickets</td>
                            <td>Subject to supplier policy (often 100%)</td>
                        </tr>
                        <tr>
                            <td>Visa & Optional Add-ons</td>
                            <td>On Actuals</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="alert alert-info mt-4 mb-0">
                <small><i class="fas fa-info-circle me-2"></i><strong>Note:</strong> Cancellation charges are calculated
                    per person. Non-refundable components include issued park tickets.</small>
            </div>
        </div>
    </div>
</div>
<!-- Cancellation Policy End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white rounded shadow p-4 text-center">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic mb-2">"We were a group of 22 — 3 generations from grandparents to grandchildren. Arihant handled everything beautifully. BAPS Mandir visit was emotional, Global Village was fun for everyone, and the Jain food was perfect at every single meal. 7 days of pure joy!"</p>
                    <p class="fw-bold mb-0">Doshi Family Group <small class="text-muted fw-normal">— Vadodara & Mumbai | Jan 2026</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Related Packages Start -->
<div class="container-fluid py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Explore More</h5>
            <h2 class="mb-4">Other Popular Packages</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <i class="fas fa-child fa-2x text-primary mb-3"></i>
                        <h5><a href="dubai-for-kids.php" class="text-dark text-decoration-none">Dubai For Kids</a></h5>
                        <p class="text-muted small mb-2">5 Nights 6 Days | Theme parks, aquariums & kid-friendly Jain food</p>
                        <p class="text-primary fw-bold">From 2,799 AED <small class="text-muted fw-normal">(≈ ₹64,400)</small></p>
                        <a href="dubai-for-kids.php" class="btn btn-outline-primary btn-sm rounded-pill">View Package</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <i class="fas fa-heart fa-2x text-danger mb-3"></i>
                        <h5><a href="dubai-honeymoon-package.php" class="text-dark text-decoration-none">Dubai Honeymoon</a></h5>
                        <p class="text-muted small mb-2">4 Nights 5 Days | 5-star luxury with private desert dinner & Burj Khalifa sunset</p>
                        <p class="text-primary fw-bold">From 3,499 AED <small class="text-muted fw-normal">(≈ ₹80,500)</small></p>
                        <a href="dubai-honeymoon-package.php" class="btn btn-outline-primary btn-sm rounded-pill">View Package</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 text-center">
                        <i class="fas fa-tag fa-2x text-success mb-3"></i>
                        <h5><a href="budget-friendly-dubai.php" class="text-dark text-decoration-none">Budget Friendly Dubai</a></h5>
                        <p class="text-muted small mb-2">3 Nights 4 Days | Dubai highlights at the lowest price</p>
                        <p class="text-primary fw-bold">From 1,499 AED <small class="text-muted fw-normal">(≈ ₹34,500)</small></p>
                        <a href="budget-friendly-dubai.php" class="btn btn-outline-primary btn-sm rounded-pill">View Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Packages End -->

<?php include 'includes/enquiry-form.php'; ?>

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-4">Get Exclusive Travel Deals</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers, travel tips, and
                updates on our latest Jain-friendly Dubai packages.</p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->

<?php include 'includes/footer.php'; ?>