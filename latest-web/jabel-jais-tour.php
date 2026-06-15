<?php
// Page SEO Variables
$pageTitle = "Jabel Jais High Mountain Tour with Zipline from Dubai 2025 | Book Now";
$pageDescription = "Explore Jabel Jais, the highest peak in the UAE, on a private mountain adventure from Dubai. Travel to the top in a 4x4 vehicle…";
$pageKeywords = "Jabel Jais tour, Jais mountain tour, UAE highest peak, Jabel Jais zipline, mountain tour Dubai, Hajar Mountains, sunrise mountain tour, 4x4 mountain adventure, Ras Al Khaimah tour, Arihant Travel, jabel jais zipline guide, jvais mountain coaster ride experience";
$pageCanonical = "https://arihantlink.com/jabel-jais-tour";
$currentPage = "jabel-jais-tour";

// Breadcrumb Variables
$pageHeading = "Jabel Jais High Mountain Tour";
$breadcrumbCategory = "Services";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/citytour/Zabel-jais-Mountain.avif";
$breadcrumbOverlay = false;

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Tour",
  "name": "Jabel Jais High Mountain Tour with Zipline from Dubai",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/citytour/Zabel-jais-Mountain.avif",
  "tourDuration": "PT6H",
  "offers": [
    {
      "@type": "Offer",
      "name": "Jabel Jais Mountain Tour",
      "price": "699",
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
    "reviewCount": "87"
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
      "name": "Is the zipline included in the tour price?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, the zipline is not included in the base tour price. It is available as an optional activity for an additional fee. You can add ziplining to your tour when booking or decide on the day of the tour, subject to availability."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the drive from Dubai to Jabel Jais?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The drive from Dubai to Jabel Jais typically takes approximately 1.5 hours each way, depending on traffic conditions and your exact pickup location in Dubai."
      }
    },
    {
      "@type": "Question",
      "name": "What should I wear for the Jabel Jais mountain tour?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Comfortable, casual clothing is recommended. Wear sturdy, closed-toe shoes suitable for walking and light hiking. Bring layers as temperatures can be cooler at the mountain peak."
      }
    },
    {
      "@type": "Question",
      "name": "Is the tour suitable for children and seniors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The mountain sightseeing portion is suitable for all ages. However, the zipline has age and weight restrictions. The 4x4 drive and viewing deck are accessible to most visitors."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time to visit Jabel Jais?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best time to visit Jabel Jais is during the cooler months (October to April) when the weather is pleasant. Early morning tours offer the best chance to see sunrise views."
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
                <p class="mb-0 fw-bold">6 Hours</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-shuttle-van fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">4x4 Vehicle</p>
                <small class="text-muted">Transport</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">1,934m</p>
                <small class="text-muted">Peak Height</small>
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
                    <p class="text-primary"><strong>Conquer the UAE's Highest Peak!</strong></p>
                    <p>Explore the wonders of Jabel Jais, the highest peak in the UAE, on a private mountain adventure
                        from Dubai. Travel to the top of the mountain in a 4x4 vehicle and soak in stunning sunrise and
                        views. Get your adrenaline pumping with thrilling activities like ziplining and hiking while
                        seeing the spectacular mountain peak of the cloud-piercing Hajar range.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="p-4 rounded-3 bg-light border-start border-primary border-4">
                                <h5 class="text-primary mb-2">Best For</h5>
                                <p class="mb-0">Adventure seekers, families, and those seeking cooler temperatures with
                                    stunning views.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-3 bg-light border-start border-warning border-4">
                                <h5 class="text-warning mb-2">Top Tip</h5>
                                <p class="mb-0">Book an early morning tour to catch the spectacular sunrise views from
                                    the peak!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-4 text-center">Your Mountain Adventure</h2>
                    <div class="timeline-itinerary">
                        <!-- Step 1 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/citytour/Zabel-jais-Mountain-uphill-road-1.avif" alt="Pickup and Drive"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Step 1</span>
                                    <span class="badge bg-success">1.5 Hours</span>
                                </div>
                                <h4 class="mb-3">Pickup & Scenic Drive</h4>
                                <p>Your adventure begins with a comfortable pickup from Dubai in a 4x4 vehicle. Enjoy a
                                    1.5-hour scenic drive towards Ras Al Khaimah, as the city skyline gives way to the
                                    rugged Hajar Mountains.</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6 order-md-2">
                                <img src="img/citytour/jabel-jais-viewing-deck.jpg" alt="Viewing Deck"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Step 2</span>
                                    <span class="badge bg-success">2.5 Hours</span>
                                </div>
                                <h4 class="mb-3">Peak Sightseeing & Viewing Deck</h4>
                                <p>Arrive at the highest peak in the UAE (1,934m). Explore the viewing deck park, enjoy
                                    photo stops at scenic viewpoints, and relish the cooler mountain air with panoramic
                                    vistas of the Hajar range.</p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="row g-4 mb-5 align-items-center">
                            <div class="col-md-6">
                                <img src="img/citytour/Jabel-Zais-Zipline.webp" alt="Jabel Jais Zipline"
                                    class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="badge bg-primary">Step 3</span>
                                    <span class="badge bg-warning">Optional Activity</span>
                                </div>
                                <h4 class="mb-3">Zipline & Adventure (Optional)</h4>
                                <p>Experience the world's longest zipline! Soar through the air at incredible speeds
                                    across the canyon. Professional safety equipment and guidance are provided for this
                                    thrilling 30-minute experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jais Sledder Section Start -->
                <div class="mb-5 p-4 rounded-4"
                    style="background: linear-gradient(135deg, #fce4ec 0%, #fff3e0 100%); border: 1px solid #ffe0b2;">
                    <h3 class="mb-4 text-center">Jais Sledder Experience</h3>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-7">
                            <p class="mb-4 leading-relaxed">Don't miss the <strong>Jais Sledder</strong>, the region's
                                highest mountain coaster! Enjoy a thrilling descent down the mountain at speeds up to
                                40km/h on a 1,885m track.</p>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-info-circle text-danger me-2 small"></i> Region\'s
                                    highest mountain coaster ride</li>
                                <li class="mb-2"><i class="fas fa-info-circle text-danger me-2 small"></i> 1,885 meters
                                    of thrilling track</li>
                                <li class="mb-2"><i class="fas fa-info-circle text-danger me-2 small"></i> Controlled
                                    individual sleds</li>
                                <li class="mb-0"><i class="fas fa-info-circle text-danger me-2 small"></i> Perfect for
                                    thrill-seekers of all ages</li>
                            </ul>
                        </div>
                        <div class="col-md-5 text-center">
                            <img src="img/citytour/jabel-jais-sledder.png" alt="Jais Sledder"
                                class="img-fluid rounded-3 shadow-sm" style="max-height: 200px;">
                        </div>
                    </div>
                </div>
                <!-- Jais Sledder Section End -->

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">Inclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Hotel pickup/drop by 4x4
                                vehicle</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Professional mountain guides
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Sightseeing & Photo Stops
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Viewing Deck Park access
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Bottled Water</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Zipline Tickets (Optional)
                            </li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Jais Sledder Tickets
                                (Optional)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Lunch & Personal Meals</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Personal shopping &
                                gratuities</li>
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
                                    Is the zipline included in the tour price?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, the zipline and Jais Sledder are optional activities that require separate
                                    tickets. You can add them during booking or on the day of the tour, subject to
                                    availability.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What is the temperature difference?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Jabel Jais is typically 10-15 degrees Celsius cooler than Dubai. We recommend
                                    bringing a light jacket even during the summer months.
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
                            <h4 class="card-title mb-4">Book Jais Tour</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid #3A7CA4;">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 699</h2>
                                    <span class="text-muted">Per Person (Private 4x4)</span>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h6 class="fw-bold mb-3">Highlights:</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> UAE's Highest
                                        Peak</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> 4x4 Mountain
                                        Drive</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Zipline
                                        (Optional)</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Viewing Deck
                                        Access</li>
                                </ul>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I%20want%20to%20book%20the%20Jabel%20Jais%20High%20Mountain%20Tour"
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
                                <span>Rated 4.8/5 by 85+ explorers.</span>
                            </li>
                            <li class="mb-3 d-flex gap-2">
                                <i class="fas fa-user-shield text-warning mt-1"></i>
                                <span>Certified mountain drivers.</span>
                            </li>
                            <li class="mb-0 d-flex gap-2">
                                <i class="fas fa-snowflake text-warning mt-1"></i>
                                <span>UAE\'s coolest destination.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>