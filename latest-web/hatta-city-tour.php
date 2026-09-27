<?php
// Page SEO Variables
$pageTitle = "Hatta Sightseeing Tour with Kayaking from Dubai 2025 | Book Now";
$pageDescription = "Embark on an unforgettable Hatta Sightseeing Tour with kayaking from Dubai. Explore Hatta Heritage Village, Hatta Water Dam, Honey Bee Discovery Centre…";
$pageKeywords = "Hatta tour, Hatta sightseeing, Hatta kayaking, Hatta Heritage Village, Hatta Dam, Dubai to Hatta tour, Hatta Hill Park, Hatta Swan Lake, mountain tour Dubai, Hatta day trip, Arihant Travels, hatta tour with kayaking experience, best time to visit hatta uae";
$pageCanonical = "https://arihantlink.com/hatta-city-tour";
$currentPage = "hatta-city-tour";

// Breadcrumb Variables
$pageHeading = "Hatta Sightseeing Tour";
$breadcrumbCategory = "Services";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/citytour/Hatta-tour-from-Dubai.webp";
$breadcrumbOverlay = false;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Hatta Sightseeing Tour with Kayaking from Dubai",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/citytour/Hatta-tour-from-Dubai.webp",
  "offers": [
    {
      "@type": "Offer",
      "name": "Hatta Sightseeing Tour",
      "price": "699",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "' . $pageCanonical . '"
    }
  ],
  "provider": {
    "@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"},
    "name": "Arihant Travels Pvt Ltd",
    "telephone": "+971585945007",
    "url": "https://arihantlink.com"
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
      "name": "Is kayaking included in the tour price?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kayaking is not included in the base tour price. It is available as an optional activity at approximately $15 USD per person. You can add kayaking to your tour when booking or decide on the day of the tour."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the drive from Dubai to Hatta?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The drive from Dubai to Hatta typically takes around 1.5 to 2 hours each way, depending on traffic conditions and your exact pickup location in Dubai."
      }
    },
    {
      "@type": "Question",
      "name": "What should I wear for the Hatta tour?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Comfortable, casual clothing is recommended. Wear comfortable walking shoes as there will be walking involved at the Heritage Village and Hill Park. Bring a hat, sunscreen, and sunglasses for sun protection. If you plan to do kayaking, bring a change of clothes or wear quick-dry clothing."
      }
    },
    {
      "@type": "Question",
      "name": "Is the tour suitable for children and seniors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Hatta tour is suitable for families with children and seniors. The Heritage Village and Hill Park are accessible, though there may be some walking involved. The tour can be customized to accommodate different fitness levels."
      }
    },
    {
      "@type": "Question",
      "name": "Can I customize the Hatta tour itinerary?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, private Hatta tours can be customized to your interests. If you\'d like to spend more time at a particular attraction, add kayaking, or include additional stops, please discuss your requirements with us when booking."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Hatta?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best time to visit Hatta is during the cooler months (October to April) when the weather is pleasant for outdoor activities. However, the tour operates year-round with air-conditioned vehicles for comfort."
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
                <p class="mb-0 fw-bold">9 Hours</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Private / Sharing</p>
                <small class="text-muted">Transport</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">5+ Stops</p>
                <small class="text-muted">Highlights</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">From 699 AED</p>
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
                    <p class="text-primary"><strong>Escape to Hatta's Mountain Paradise!</strong></p>
                    <p>Embark on an unforgettable Hatta Sightseeing Tour with kayaking that will take you from the
                        vibrant city of Dubai to the stunning natural landscapes of the UAE. This full-day adventure
                        offers a perfect blend of cultural heritage, natural beauty, and outdoor activities. Explore
                        traditional Emirati architecture, marvel at mountain views, enjoy water activities, and
                        experience the tranquility of Hatta\'s pristine environment.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="p-4 rounded-3 bg-light border-start border-primary border-4">
                                <h5 class="text-primary mb-2">Best For</h5>
                                <p class="mb-0">Nature lovers, adventure seekers, and those seeking a break from city
                                    life.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-3 bg-light border-start border-warning border-4">
                                <h5 class="text-warning mb-2">Top Tip</h5>
                                <p class="mb-0">Add kayaking for an unforgettable experience on the Hatta Dam. The views
                                    are spectacular!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-4 text-center">Your Hatta Adventure</h2>
                    <div class="timeline-itinerary">
                        <!-- Stop 1 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/citytour/Hatta-Heritage-Village-1.jpg" alt="Hatta Heritage Village"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Stop 1</span>
                                    <span class="badge bg-success">Admission Included</span>
                                </div>
                                <h4 class="mb-3">Hatta Heritage Village</h4>
                                <p>Explore the beautifully preserved Hatta Heritage Village, showcasing traditional
                                    Emirati architecture and lifestyle. Walk through ancient stone houses and learn
                                    about the region\'s rich history.</p>
                            </div>
                        </div>
                        <!-- Stop 2 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6 order-md-2">
                                <img src="img/citytour/Hatta-Dam.jpg" alt="Hatta Water Dam"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Stop 2</span>
                                    <span class="badge bg-success">Admission Included</span>
                                </div>
                                <h4 class="mb-3">Hatta Water Dam</h4>
                                <p>Visit the stunning Hatta Water Dam, a man-made reservoir surrounded by majestic Hajar
                                    mountains. Enjoy breathtaking views of turquoise waters against rugged peaks.</p>
                            </div>
                        </div>
                        <!-- Stop 3 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/citytour/hatta-Honey-Bee.jpg" alt="Hatta Honey Bee"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Stop 3</span>
                                    <span class="badge bg-warning">Optional Visit</span>
                                </div>
                                <h4 class="mb-3">Hatta Honey Bee Discovery Centre</h4>
                                <p>Discover the fascinating world of beekeeping, observe live hives, and sample
                                    delicious local honey. A unique educational experience for all ages.</p>
                            </div>
                        </div>
                        <!-- Stop 4 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6 order-md-2">
                                <img src="img/citytour/Hatta-Swan_lake.jpg" alt="Hatta Swan Lake"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Stop 4</span>
                                    <span class="badge bg-warning">Optional Visit</span>
                                </div>
                                <h4 class="mb-3">Hatta Swan Lake Bridge</h4>
                                <p>Cross the picturesque Hatta Swan Lake Bridge and enjoy serene mountain views. This
                                    scenic spot offers excellent photo opportunities.</p>
                            </div>
                        </div>
                        <!-- Stop 5 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/citytour/Hatta-Hill-Park.png" alt="Hatta Hill Park"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Stop 5</span>
                                    <span class="badge bg-success">Admission Included</span>
                                </div>
                                <h4 class="mb-3">Hatta Hill Park</h4>
                                <p>Climb to Hatta Hill Park for panoramic views of the entire region. Spectacular vistas
                                    of mountains, valleys, and the surrounding landscape await you.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kayaking Section Start -->
                <div class="mb-5 p-4 rounded-4"
                    style="background: linear-gradient(135deg, #e3f2fd 0%, #f1f8e9 100%); border: 1px solid #bbdefb;">
                    <h3 class="mb-4 text-center">Optional Kayaking Experience</h3>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-7">
                            <p class="mb-4 leading-relaxed">Enhance your Hatta tour with an optional kayaking experience
                                on the pristine Hatta Water Dam. Paddle through calm turquoise waters surrounded by
                                majestic mountains.</p>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-circle text-primary me-2 small"></i> Approx. $15 USD
                                    per person</li>
                                <li class="mb-2"><i class="fas fa-circle text-primary me-2 small"></i> All equipment
                                    provided (kayak, paddle, life jacket)</li>
                                <li class="mb-2"><i class="fas fa-circle text-primary me-2 small"></i> Suitable for all
                                    experience levels</li>
                                <li class="mb-0"><i class="fas fa-circle text-primary me-2 small"></i> Stunning views
                                    from the water</li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <img src="img/citytour/hatta kayak.jpg" alt="Kayaking on Hatta Dam"
                                class="img-fluid rounded-3 shadow-sm">
                        </div>
                    </div>
                </div>
                <!-- Kayaking Section End -->

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">Inclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> AC Vehicle & Hotel
                                Pick-up/Drop-off</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Hatta Heritage Village
                                Admission</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Hatta Hill Park Admission
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Bottled Water</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Museum Entry Tickets</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Kayaking / Boating (Approx.
                                $15)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Bee Centre Admission</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Swan Lake Admission</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Lunch and personal expenses
                            </li>
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
                                    Is kayaking included in the tour price?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kayaking is not included in the base tour price. It is available as an optional
                                    activity at approximately $15 USD per person. You can decide on the day of the tour.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What should I wear?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Comfortable casual clothing and walking shoes are recommended. If you plan to kayak,
                                    bring quick-dry clothes or a change of attire.
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
                            <h4 class="card-title mb-4">Book Hatta Tour</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid #3A7CA4;">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 699</h2>
                                    <span class="text-muted">Per Person (Standard)</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="fw-bold mb-3">Highlights:</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Heritage
                                        Village</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Hatta Water
                                        Dam</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Kayaking
                                        (Optional)</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Scenic
                                        Mountain Views</li>
                                </ul>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I%20want%20to%20book%20the%20Hatta%20Sightseeing%20Tour"
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
                        <h5 class="mb-3">Why Adventure with Us?</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex gap-2">
                                <i class="fas fa-star text-warning mt-1"></i>
                                <span>Rated 4.7/5 by 90+ adventurers.</span>
                            </li>
                            <li class="mb-3 d-flex gap-2">
                                <i class="fas fa-mountain text-warning mt-1"></i>
                                <span>Expert mountain guides.</span>
                            </li>
                            <li class="mb-0 d-flex gap-2">
                                <i class="fas fa-shield-alt text-warning mt-1"></i>
                                <span>Safe and reliable transport.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>