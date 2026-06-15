<?php
// Page SEO Variables
$pageTitle = "Full Day Dubai City Tour 2025 | Old Dubai, Palm Jumeirah & Downtown";
$pageDescription = "Book the best Full Day Dubai City Tour for 2025. See all top attractions in one seamless day: Dubai Frame, Al Bastakiya, abra ride, Gold Souk…";
$pageKeywords = "Dubai city tour, full day Dubai tour, Dubai sightseeing, Gold Souk tour, Palm Jumeirah monorail, abra ride Dubai, Jain vegetarian tour Dubai, Arihant Travel city tour, Dubai Frame tour, Museum of the Future photo stop, Blue Mosque Dubai, best dubai city tour for families, old and new dubai exploration";
$pageCanonical = "https://arihantlink.com/dubai-full-day-city-tour";
$currentPage = "dubai-full-day-city-tour";

// Breadcrumb Variables
$pageHeading = "Full Day Dubai City Tour";
$breadcrumbCategory = "Services";
$breadcrumbCategoryLink = "#"; // Assuming there is a services page or similar
$breadcrumbBg = "img/citytour/dubai-mall-interior-view.avif";
$breadcrumbOverlay = false;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Tour",
  "name": "Full Day Dubai City Tour",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/citytour/dubai-mall-interior-view.avif",
  "tourDuration": "PT10H",
  "offers": [
    {
      "@type": "Offer",
      "name": "Sharing Transport",
      "price": "100",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "' . $pageCanonical . '"
    },
    {
      "@type": "Offer",
      "name": "Private Transport (up to 6 guests)",
      "price": "650",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "' . $pageCanonical . '"
    }
  ],
  "provider": {
    "@type": "TravelAgency",
    "name": "Arihant Travel",
    "telephone": "+971585945007",
    "url": "https://arihantlink.com"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "112"
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
      "name": "Is lunch included in the tour?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Lunch is not included in the tour package. However, the tour includes stops at Oasis Mall and Dubai Mall where you can purchase meals. Both locations offer vegetarian and Jain-friendly dining options. Your guide can recommend suitable restaurants."
      }
    },
    {
      "@type": "Question",
      "name": "Do we enter the attractions or are they photo stops?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This tour focuses on immersive exterior visits and photo stops (Dubai Frame, Museum of the Future, Burj Al Arab). Dubai Museum and souks include walk-ins. Optional entry tickets can be added on request."
      }
    },
    {
      "@type": "Question",
      "name": "What should I wear for the Blue Mosque visit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Modest dress covering shoulders and knees is required. Women may be asked to cover their hair; scarves are usually provided on-site."
      }
    },
    {
      "@type": "Question",
      "name": "Can I book a private vehicle for my family?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. Private SUVs or vans are available starting AED 650 (up to 6 guests). This lets you customise timing and add extra stops."
      }
    },
    {
      "@type": "Question",
      "name": "Are tickets for attractions like Dubai Frame included?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This tour package focuses on providing a comprehensive sightseeing experience with photo stops and exterior visits. Entry tickets for attractions like Dubai Frame, Museum of the Future, or Burj Khalifa are not included in the standard price but can be added as an optional upgrade. Please let us know your preferences when booking."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the stop at Dubai Mall?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The tour allocates approximately 1-1.5 hours at Dubai Mall. This gives you time to see the indoor waterfall, the exterior of the Dubai Aquarium, and watch one of the Dubai Fountain shows, which typically run in the evening."
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
                <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">10 Hours</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Sharing / Private</p>
                <small class="text-muted">Transport</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">12+ Stops</p>
                <small class="text-muted">Sightseeing</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">From 100 AED</p>
                <small class="text-muted">Best Price</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Overview Section Start -->
<div class="container-fluid py-5">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Tour Overview</h2>
                    <p class="text-primary"><strong>Explore Dubai's Highlights in One Day!</strong></p>
                    <p>Cover Dubai\'s must-see highlights in one curated circuit designed for first-timers and photo
                        lovers. We handle pick-ups, fast-track transitions between Old and New Dubai, abra rides,
                        monorail tickets and constant storytelling so you never miss context.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="p-4 rounded-3 bg-light border-start border-primary border-4">
                                <h5 class="text-primary mb-2">Best For</h5>
                                <p class="mb-0">First-time visitors, multi-generational families, photo-focused
                                    travellers, Jain & vegetarian guests.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-3 bg-light border-start border-warning border-4">
                                <h5 class="text-warning mb-2">Top Tip</h5>
                                <p class="mb-0">Opt for the private SUV upgrade if you’d like custom stops or travelling
                                    with seniors/kids.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-4 text-center">How your day unfolds</h2>
                    <div class="timeline-itinerary">
                        <!-- Stop 1 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/citytour/DubaiFrame.jpg" alt="Dubai Frame"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <span class="badge bg-primary mb-2">Stop 1</span>
                                <h4 class="mb-3">Dubai Frame & Al Bastakiya</h4>
                                <p>Start with a photo stop at Dubai Frame before stepping into Al Fahidi Historical
                                    Quarter. Wander narrow alleys, explore Al Fahidi Fort (Dubai Museum) and soak in the
                                    old wind-tower architecture.</p>
                            </div>
                        </div>
                        <!-- Stop 2 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6 order-md-2">
                                <img src="img/citytour/arba_ride_dubai_creek.avif" alt="Abra Ride"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <span class="badge bg-primary mb-2">Stop 2</span>
                                <h4 class="mb-3">Gold & Spice Souks + Abra Ride</h4>
                                <p>Sail across Dubai Creek aboard a traditional abra, haggle for gold, perfumes and
                                    spices, and relive merchant-era Dubai in the busy souks.</p>
                            </div>
                        </div>
                        <!-- Stop 3 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/citytour/MOFT1.webp" alt="Museum of the Future"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <span class="badge bg-primary mb-2">Stop 3</span>
                                <h4 class="mb-3">Museum of the Future & Burj Al Arab</h4>
                                <p>Drive along Sheikh Zayed Road for Museum of the Future photo ops, then pause at the
                                    sail-shaped Burj Al Arab and Blue Mosque (Farooq Omar Bin Khatib).</p>
                            </div>
                        </div>
                        <!-- Stop 4 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6 order-md-2">
                                <img src="img/citytour/Atlantis-Plam.jpg" alt="Palm Jumeirah"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <span class="badge bg-primary mb-2">Stop 4</span>
                                <h4 class="mb-3">Palm Jumeirah Monorail & Atlantis</h4>
                                <p>Board the monorail through Palm Jumeirah, walk around Atlantis, The Palm and capture
                                    Zabeel Saray’s Ottoman-inspired facade.</p>
                            </div>
                        </div>
                        <!-- Stop 5 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/dubaiholiday/dubai-fountain-show-burj-khalifa-night.jpeg"
                                    alt="Dubai Mall & Fountain" class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <span class="badge bg-primary mb-2">Stop 5</span>
                                <h4 class="mb-3">Dubai Mall & Fountain Finale</h4>
                                <p>Wrap up at Downtown Dubai with time to wander Dubai Mall, admire the indoor
                                    waterfall, Dubai Aquarium tank and the fountains at Burj Lake.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">Inclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Hotel pick-up and drop-off
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dubai Frame & Al Bastakiya
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Gold & Spice Souks</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Museum of the Future & Burj
                                Al Arab Photoshoot</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Palm Jumeirah Monorail &
                                Atlantis</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dubai Mall & Fountain Finale
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Zabeel Park visit</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Bottled water</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Lunch and meals</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Attraction entry tickets</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Personal shopping</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Gratuities</li>
                        </ul>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-4">Frequently Asked Questions</h2>
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Is lunch included in the tour?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Lunch is not included in the tour package. However, the tour includes stops at Oasis
                                    Mall and Dubai Mall where you can purchase meals. Both locations offer vegetarian
                                    and Jain-friendly dining options. Your guide can recommend suitable restaurants.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do we enter the attractions or are they photo stops?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    This tour focuses on immersive exterior visits and photo stops (Dubai Frame, Museum
                                    of the Future, Burj Al Arab). Dubai Museum and souks include walk-ins. Optional
                                    entry tickets can be added on request.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What should I wear for the Blue Mosque visit?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Modest dress covering shoulders and knees is required. Women may be asked to cover
                                    their hair; scarves are usually provided on-site.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4 border-0">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book Dubai City Tour</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid #3A7CA4;">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 100</h2>
                                    <span class="text-muted">Per Person (Sharing)</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="fw-bold mb-3">Special Features:</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Old & New
                                        Dubai Covered</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Abra Ride
                                        Included</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Palm Monorail
                                        Experience</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Jain Food
                                        Friendly Stops</li>
                                </ul>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I%20want%20to%20book%20the%20Full%20Day%20Dubai%20City%20Tour"
                                    target="_blank" class="btn btn-primary btn-lg rounded-pill shadow">
                                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                                </a>
                                <a href="contact" class="btn btn-outline-primary btn-lg rounded-pill">
                                    Request Custom Itinerary
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary text-white p-4 rounded-3 shadow">
                        <h5 class="mb-3">Why Choose Arihant?</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex gap-2">
                                <i class="fas fa-heart text-warning mt-1"></i>
                                <span>Rated 4.8/5 by 200+ happy guests.</span>
                            </li>
                            <li class="mb-3 d-flex gap-2">
                                <i class="fas fa-id-badge text-warning mt-1"></i>
                                <span>Licensed professional guides.</span>
                            </li>
                            <li class="mb-0 d-flex gap-2">
                                <i class="fas fa-clock text-warning mt-1"></i>
                                <span>Seamless Old vs New Dubai circuit.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comparison Table Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <h2 class="mb-5 text-center">Tour Options Comparison</h2>
        <div class="table-responsive shadow rounded-3 bg-white">
            <table class="table table-hover mb-0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="py-3 ps-4">Feature</th>
                        <th class="py-3">Sharing Transport</th>
                        <th class="py-3">Private SUV / Van</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Price</td>
                        <td class="py-3 text-primary fw-bold">AED 100 per guest</td>
                        <td class="py-3 text-primary fw-bold">AED 650 (up to 6 guests)</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Pickup & Drop</td>
                        <td class="py-3">Scheduled coach pickups</td>
                        <td class="py-3">Direct hotel lobby pickup</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Customisation</td>
                        <td class="py-3">Fixed timetable</td>
                        <td class="py-3">Flexible stops & pacing</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Best For</td>
                        <td class="py-3">Solo travellers & couples</td>
                        <td class="py-3">Families, seniors, VIP travellers</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Lunch</td>
                        <td class="py-3">Not included (Available at stops)</td>
                        <td class="py-3">Not included (Available at stops)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Comparison Table End -->

<?php include 'includes/footer.php'; ?>