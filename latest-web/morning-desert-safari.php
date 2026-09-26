<?php
// Page SEO Variables
$pageTitle = "Morning Desert Safari Dubai - AED 150 | Arihant Travels";
$pageDescription = "Experience the desert at sunrise! Morning Desert Safari at AED 150. Enjoy dune bashing, camel riding, sandboarding at the coolest time of day.";
$pageKeywords = "morning desert safari Dubai, sunrise desert safari, morning dune bashing, Dubai morning tour, early morning safari";
$pageCanonical = "https://arihantlink.com/morning-desert-safari";
$currentPage = "morning-desert-safari";

// Breadcrumb Variables
$pageHeading = "Morning Desert Safari";
$breadcrumbCategory = "Desert Safaris";
$breadcrumbCategoryLink = "desert-safari";
$breadcrumbBg = "img/safari/morningsafari/morning-desert-safari.webp";
$breadcrumbOverlay = false;

// Schema Markup
// Schema standardised 2026-05 — same shape as Standard/VIP/Premium so all six
// safari sub-pages emit consistent Tour + BreadcrumbList markup.
$schemaMarkup = '<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": ["Tour", "TouristTrip"],
    "name": "Morning Desert Safari Dubai",
    "description": "' . $pageDescription . '",
    "image": "https://arihantlink.com/img/safari/morningsafari/morning-desert-safari.webp",
    "url": "https://arihantlink.com/morning-desert-safari",
    "touristType": ["Adventure travelers", "Photographers", "Families", "Indian families"],
    "duration": "PT4H",
    "itinerary": {
      "@type": "ItemList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Hotel pickup at 8:30 AM"},
        {"@type": "ListItem", "position": 2, "name": "Drive to the dunes (approx. 45 minutes)"},
        {"@type": "ListItem", "position": 3, "name": "15–20 minute dune bashing in 4x4 Land Cruiser"},
        {"@type": "ListItem", "position": 4, "name": "Camel ride"},
        {"@type": "ListItem", "position": 5, "name": "Sandboarding"},
        {"@type": "ListItem", "position": 6, "name": "Hotel drop-off by 12:00 PM"}
      ]
    },
    "offers": {
      "@type": "Offer",
      "price": "150",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "https://arihantlink.com/morning-desert-safari",
      "validFrom": "2026-01-01"
    },
    "provider": {
      "@type": "TravelAgency",
      "name": "Arihant Travels Pvt Ltd",
      "url": "https://arihantlink.com",
      "telephone": "+971585945007",
      "address": {"@type": "PostalAddress", "addressLocality": "Sharjah", "addressCountry": "AE"}
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://arihantlink.com"},
      {"@type": "ListItem", "position": 2, "name": "Desert Safari", "item": "https://arihantlink.com/desert-safari"},
      {"@type": "ListItem", "position": 3, "name": "Morning Desert Safari", "item": "https://arihantlink.com/morning-desert-safari"}
    ]
  }
]
</script>';
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid var(--primary);">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">4 Hours</p>
                <div class="text-muted">Duration</div>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">8:30 AM Pickup</p>
                <div class="text-muted">11:00 AM Return</div>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-sun fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Sunrise Views</p>
                <div class="text-muted">Cool Weather</div>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-hiking fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">Sandboarding</p>
                <div class="text-muted">Included</div>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Overview Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="h4 mb-2">Morning Desert Safari Dubai</h2>
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-primary"><strong>Experience the Dubai desert at its most beautiful, peaceful, and comfortable — the Morning Desert Safari at AED 150.</strong> While most people do the evening safari, savvy travellers know that the early morning is the absolute best time to be in the desert. The air is cool, the light is golden, the dunes are empty, and the atmosphere is pure magic. No crowds, no heat, just you and the stunning Arabian landscape.</p>

                    <p>Your morning adventure begins with a <strong>door-to-door 4x4 pickup at 8:30 AM</strong> from your hotel or residence. Your experienced driver heads straight to the desert, where the real fun begins — an exciting <strong>20-minute dune bashing session</strong> in a powerful Land Cruiser. The morning light streaming across the sand dunes creates extraordinary photography opportunities that you simply cannot get in the evening. Every dune, every shadow, every golden crest looks like a painting.</p>

                    <p>After the dune bashing, enjoy <strong>unlimited sandboarding</strong> — slide down the face of a dune on a board, over and over, for as long as you like. It is exhilarating, fun for all ages, and completely free. Take a <strong>short camel ride</strong> across the sand for a timeless, classic desert experience — and capture those iconic photos on the back of a camel with the dunes stretching out behind you.</p>

                    <p>Complimentary <strong>water and soft drinks</strong> are included throughout to keep you hydrated. For the ultimate thrill-seeker, you can add a <strong>Quad Bike / ATV / Dune Buggy</strong> ride at an additional cost — our trained instructors will guide you safely across the open desert.</p>

                    <p>By <strong>11:00 AM</strong>, you are back at your hotel, with the rest of the day entirely free for sightseeing, shopping, or relaxing. The Morning Safari is also the perfect add-on before an afternoon city tour or a full day at a theme park.</p>

                    <p><i class="fas fa-leaf text-success me-2"></i><strong>Jain &amp; Vegetarian Friendly:</strong> Since the Morning Safari is a pure activity experience with no meal involved, it is naturally 100% suitable for Jain and vegetarian guests. Complimentary water and soft drinks are provided throughout. No dietary concerns whatsoever — simply come and enjoy!</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>4x4 Hotel Pickup &
                                    Drop-off</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>20-Minute Dune
                                    Bashing</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Camel
                                    Riding</strong> (Short Ride)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>
                                <strong>Sandboarding</strong> (Unlimited)
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Soft Drinks &
                                    Water</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Quad Biking & Buggies
                                (Optional)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Alcoholic Beverages</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Food/Breakfast</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book Morning Safari</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid var(--primary);">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 150</h2>
                                    <span class="text-muted">Per Person</span>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-warning text-dark">Early Bird</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Instant Confirmation
                                </p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Free Cancellation
                                </p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Pickup Included</p>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I'm interested in Morning Desert Safari"
                                    target="_blank" class="btn btn-primary btn-lg">
                                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                                </a>
                            </div>
                        </div>
                        <?php include 'includes/enquiry-sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overview Section End -->

<!-- Package Details Tabs Start -->
<div class="container-fluid py-4">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-lg-12">
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white" id="pills-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-pill fw-bold" id="pills-itinerary-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-itinerary" type="button"
                            role="tab">Itinerary</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill fw-bold" id="pills-info-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-info" type="button" role="tab">Guidelines</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill fw-bold" id="pills-faq-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-faq" type="button" role="tab">FAQs</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm" id="pills-tabContent">
                    <!-- Itinerary Tab -->
                    <div class="tab-pane fade show active" id="pills-itinerary" role="tabpanel">
                        <div class="timeline itinerary-compact">
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">8:30 AM</span> <strong>Pickup:</strong> From
                                hotel/residence in 4x4.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">9:15 AM</span> <strong>Dune Bashing:</strong> 20 min
                                desert adventure.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">10:00 AM</span> <strong>Activities:</strong> Camel
                                riding & Sandboarding.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">11:00 AM</span> <strong>Return:</strong> Drop-off
                                back to your location.
                            </div>
                        </div>
                    </div>

                    <!-- Guidelines Tab -->
                    <div class="tab-pane fade" id="pills-info" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-briefcase text-primary me-2"></i>What to Bring</h5>
                                <ul class="ps-3 small">
                                    <li>Sunscreen & Sunglasses</li>
                                    <li>Camera/Smartphone</li>
                                    <li>Light clothes</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-hand-holding-heart text-primary me-2"></i>Safety
                                </h5>
                                <ul class="ps-3 small">
                                    <li>Not for pregnant women</li>
                                    <li>Not for back/heart patients</li>
                                    <li>Seats belts compulsory</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Tab -->
                    <div class="tab-pane fade" id="pills-faq" role="tabpanel">
                        <div class="accordion accordion-flush" id="faqAccordionTabs">
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq1">
                                        What time is pickup and drop-off for the Morning Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Pickup is at approximately 8:30 AM from your hotel or residence. The safari concludes with a drop-off back to your location by around 11:00 AM, leaving your afternoon completely free.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq2">
                                        Is breakfast or any food included in the Morning Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        No meals are included — the Morning Safari is a pure adventure experience. Complimentary water and soft drinks are provided throughout. We recommend having breakfast at your hotel before pickup. This also makes it the perfect choice for Jain and vegetarian guests who prefer not to worry about food at all!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq3">
                                        Why is morning better than evening for a desert safari?
                                    </button>
                                </h2>
                                <div id="tabfaq3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The morning desert offers cooler temperatures, incredible golden-hour light for photography, significantly fewer tourists, and a serene, peaceful atmosphere. If you have been to the desert before or simply prefer a quieter, more personal experience, the morning is magical. You also get your afternoon and evening free for other Dubai activities.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq4">
                                        Can I add a Quad Bike or ATV to the Morning Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq4" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes! You can add Quad Bike, ATV, or Dune Buggy riding at an additional cost at the desert location. Our instructors will provide a safety briefing and guide you throughout. This is entirely optional and can be decided on the day.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq5">
                                        Is the Morning Safari good for families with young children?
                                    </button>
                                </h2>
                                <div id="tabfaq5" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes — the cooler morning temperatures make it very comfortable for young children. Dune bashing intensity can be reduced on request. Camel riding and sandboarding are fun for kids of all ages. Infants under 3 are free. It is also a short experience (back by 11 AM) which suits children's attention spans perfectly.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq6">
                                        What is the difference between Morning Safari and Evening Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq6" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The <strong>Morning Safari</strong> (AED 150) focuses on pure desert adventure — dune bashing, sandboarding, camel riding — in cool, quiet conditions. No dinner or evening shows. Back by 11 AM. The <strong>Evening Safari</strong> (AED 99–199) adds sunset views, a full BBQ buffet dinner, live cultural entertainment (Tanoura, Fire Show, Belly Dance), and a traditional camp experience. Choose Morning for adventure + free afternoon/evening; choose Evening for the full cultural desert experience.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Package Details Tabs End -->

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What time is pickup and drop-off for the Morning Desert Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Pickup is at approximately 8:30 AM from your hotel or residence. The safari concludes with drop-off by around 11:00 AM, leaving your afternoon completely free."
            }
        },
        {
            "@type": "Question",
            "name": "Is breakfast or any food included in the Morning Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No meals are included — the Morning Safari is a pure adventure experience. Complimentary water and soft drinks are provided throughout. We recommend having breakfast at your hotel before pickup."
            }
        },
        {
            "@type": "Question",
            "name": "Why is morning better than evening for a desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The morning desert offers cooler temperatures, incredible golden-hour light for photography, significantly fewer tourists, and a serene, peaceful atmosphere. You also get your afternoon and evening free for other Dubai activities."
            }
        },
        {
            "@type": "Question",
            "name": "Can I add a Quad Bike or ATV to the Morning Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! You can add Quad Bike, ATV, or Dune Buggy riding at an additional cost at the desert location. Our instructors will provide a safety briefing and guide you throughout."
            }
        },
        {
            "@type": "Question",
            "name": "Is the Morning Safari good for families with young children?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes — the cooler morning temperatures make it very comfortable for young children. Dune bashing intensity can be reduced on request. Camel riding and sandboarding are fun for kids of all ages. Infants under 3 are free."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between Morning Safari and Evening Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Morning Safari (AED 150) focuses on pure desert adventure — dune bashing, sandboarding, camel riding — in cool, quiet conditions. No dinner or evening shows. Back by 11 AM. The Evening Safari (AED 99-199) adds sunset views, a full BBQ buffet dinner, live cultural entertainment, and a traditional camp experience."
            }
        }
    ]
}
</script>

<!-- Related Safaris Start -->
<div class="container-fluid py-4 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-4" style="max-width: 900px;">
            <h5 class="section-title px-3">Explore More</h5>
            <h2 class="mb-2 h4">Other Safari Options</h2>
        </div>

        <div class="row g-3">
            <!-- Standard Safari -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 safari-card">
                    <div class="position-relative">
                        <img src="img/safari/StandardCamp/cover.webp" class="card-img-top" alt="Standard Safari"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 99</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Standard Evening Safari</h5>
                        <p class="card-text small mb-3 text-muted">A must-do experience with dune bashing and camp
                            activities.</p>
                        <a href="standard-desert-safari" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>

            <!-- Premium Safari -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 safari-card">
                    <div class="position-relative">
                        <img src="img/safari/premium-safari-1.webp" class="card-img-top" alt="Premium Safari"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 199</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Premium Evening Safari</h5>
                        <p class="card-text small mb-3 text-muted">Exclusive Red Dunes experience with AC luxury camp.
                        </p>
                        <a href="premium-desert-safari" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>

            <!-- overnight Safari -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 safari-card">
                    <div class="position-relative">
                        <img src="img/safari/nightsafari/cover.webp" class="card-img-top" alt="Overnight Safari"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 249</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Overnight Desert Safari</h5>
                        <p class="card-text small mb-3 text-muted">Sleep under the stars for a true desert experience.
                        </p>
                        <a href="overnight-desert-safari" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="desert-safari" class="btn btn-primary btn-sm px-4 rounded-pill fw-bold">View All Safaris</a>
        </div>
    </div>
</div>
<!-- Related Safaris End -->

<!-- Gallery Section Start -->
<div class="container-fluid py-4 bg-white">
    <div class="container">
        <div class="text-center mx-auto mb-4" style="max-width: 900px;">
            <h5 class="section-title px-3">Gallery</h5>
            <h2 class="mb-2 h4">Morning Experience in Pictures</h2>
        </div>

        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/Morning Camp.webp" class="card-img-top" alt="Morning Camp"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/Sanduning Desert.webp" class="card-img-top" alt="Dune Bashing"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/MorningSafariSandboarding.webp" class="card-img-top"
                        alt="Sandboarding" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/Camel-riding.webp" class="card-img-top" alt="Camel Riding"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/Quad-Bike-Dubai.webp" class="card-img-top" alt="Quad Biking"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/Morning-Safari-tour-dubai.webp" class="card-img-top"
                        alt="Morning Safari" style="height: 120px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .gallery-thumb:hover img {
        transform: scale(1.1);
        transition: 0.3s;
    }

    .safari-card {
        transition: 0.3s;
    }

    .safari-card:hover {
        transform: translateY(-5px);
    }
</style>
<!-- Gallery Section End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-4">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Get Exclusive Desert Safari Deals</h2>
            <div class="position-relative mx-auto" style="max-width: 500px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->


<!-- safari-extras-injected -->
<section class="page-section page-section--light">
    <div class="container" style="max-width: 920px;">
        <div class="article-prose mx-auto">
            <h2>What the Morning Safari actually feels like</h2>
            <p>Pickup is at 8:30 AM, which sounds early but pays off — the morning desert light is soft and the dunes have sharp ridges before the wind softens them through the day. Same dune bashing sequence as the evening safari, plus a camel ride and sandboarding. No camp dinner, no shows, no Bedouin entertainment — you're back at your hotel by noon and have the rest of the day free. Most people pick this when they have a wedding, a Burj Khalifa sunset slot or a Marina dhow cruise booked for the same evening. Carry sunglasses, sunscreen and a bottle of water; the desert is a different climate at 10 AM than at 7 PM.</p>
        </div>
    </div>
</section>

<?php include "includes/safari-pickup-zones.php"; ?>
<?php include "includes/safari-fitness.php"; ?>
<?php $currentSafariSlug = "morning-desert-safari"; include "includes/safari-cross-sell.php"; ?>
<?php include "includes/mobile-sticky-cta.php"; ?>
<?php include 'includes/footer.php'; ?>