<?php
// Page SEO Variables
$pageTitle = "Quad Bike Desert Safari Dubai - AED 350 | Arihant Travels";
$pageDescription = "Thrilling Quad Bike Desert Safari at AED 350. Ride powerful ATVs across Dubai's desert dunes with professional instructors and safety gear.";
$pageKeywords = "quad bike Dubai, ATV Dubai, quad biking desert, Dubai desert ATV, quad bike safari";
$pageCanonical = "https://arihantlink.com/quad-bike-safari";
$currentPage = "quad-bike-safari";

// Breadcrumb Variables
$pageHeading = "Quad Bike Desert Safari";
$breadcrumbCategory = "Desert Safaris";
$breadcrumbCategoryLink = "desert-safari";
$breadcrumbBg = "img/safari/quad.webp";
$breadcrumbOverlay = false;

// Schema Markup
// Schema standardised 2026-05 — same shape as the other 5 safari sub-pages.
// Added FAQPage block lifted from the body accordion so this page now has
// rich-result parity with its siblings.
$schemaMarkup = '<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": ["Tour", "TouristTrip"],
    "name": "Quad Bike Desert Safari Dubai",
    "description": "' . $pageDescription . '",
    "image": "https://arihantlink.com/img/safari/quad.webp",
    "url": "https://arihantlink.com/quad-bike-safari",
    "touristType": ["Adventure travelers", "Thrill seekers", "Couples", "Friends groups"],
    "duration": "PT2H",
    "itinerary": {
      "@type": "ItemList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Arrival at the quad-biking base"},
        {"@type": "ListItem", "position": 2, "name": "15-minute safety briefing and gear fitting (helmet, goggles, gloves, knee pads, body armour)"},
        {"@type": "ListItem", "position": 3, "name": "30-minute guided quad-bike or dune-buggy ride through the dunes"},
        {"@type": "ListItem", "position": 4, "name": "Rest and photo stop on the dunes"},
        {"@type": "ListItem", "position": 5, "name": "Short camel ride (included)"},
        {"@type": "ListItem", "position": 6, "name": "Optional sandboarding"}
      ]
    },
    "offers": {
      "@type": "Offer",
      "price": "350",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "https://arihantlink.com/quad-bike-safari",
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
      {"@type": "ListItem", "position": 3, "name": "Quad Bike Safari", "item": "https://arihantlink.com/quad-bike-safari"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {"@type": "Question", "name": "Do I need prior experience to ride a quad bike?", "acceptedAnswer": {"@type": "Answer", "text": "No experience is required. Our quad bikes are fully automatic — no gears, no clutch. Our instructors provide a comprehensive 15-minute training and safety briefing before you head out, and will guide you throughout the ride. Beginners are very welcome."}},
      {"@type": "Question", "name": "Is hotel pickup included in the Quad Bike Safari?", "acceptedAnswer": {"@type": "Answer", "text": "Hotel pickup is not included in the standard package. Guests make their own way to the desert location (approximately 45–60 minutes from central Dubai). We can arrange a transfer at an additional cost — please contact us via WhatsApp before booking to confirm availability and pricing."}},
      {"@type": "Question", "name": "What is the difference between a Quad Bike and a Dune Buggy?", "acceptedAnswer": {"@type": "Answer", "text": "A Quad Bike (ATV) is a four-wheeled open vehicle you ride solo — great for beginners and intermediate riders, available in 250cc to 400cc. A Dune Buggy is a more powerful, side-by-side vehicle (1000cc) designed for serious off-road use, suitable for experienced riders who want maximum thrill."}},
      {"@type": "Question", "name": "What is the minimum age for quad biking?", "acceptedAnswer": {"@type": "Answer", "text": "The minimum age to ride independently is 16 years. Younger riders (aged 10–15) may be accommodated on smaller, slower bikes at a reduced speed with an instructor escort — subject to physical size and weight. Children under 10 are not permitted to ride."}},
      {"@type": "Question", "name": "Can I combine the Quad Bike Safari with an Evening Desert Safari?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. The 3:00 PM Quad Bike session can be combined with our evening safari packages. You can do the quad biking first and then join an evening safari for dune bashing, dinner and cultural shows. Contact us to arrange a combined package."}},
      {"@type": "Question", "name": "What safety measures are in place during the quad bike ride?", "acceptedAnswer": {"@type": "Answer", "text": "All riders receive a full helmet, protective goggles, knee pads and body armour. A comprehensive 15-minute training session is mandatory before the ride. Professional guides accompany all groups throughout the desert, all vehicles are regularly serviced and emergency support is on standby at all times."}}
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
                <p class="mb-0 fw-bold">1 Hour Ride</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Safety Gear</p>
                <small class="text-muted">Included</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-user-shield fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Professional Instructors</p>
                <small class="text-muted">Training Provided</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-users fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">All Skill Levels</p>
                <small class="text-muted">Beginners Welcome</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Overview Section Start -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="h4 mb-2">Quad Bike Desert Safari Dubai</h2>
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-primary"><strong>Conquer Dubai's desert dunes on your own terms — the Quad Bike Desert Safari at AED 350.</strong> If you have done the evening safari and want something more physically thrilling, or if you are an adventure enthusiast who wants nothing between you and the open desert, the Quad Bike Safari is the experience you have been looking for. Raw speed, personal control, and the vast Arabian desert all to yourself.</p>

                    <p>Arrive at the desert meeting point at either <strong>8:00 AM or 3:00 PM</strong> — choose the time that suits your schedule. Your professional guide begins with a thorough <strong>15-minute safety briefing</strong> and a hands-on introduction to your vehicle. No prior experience is needed — our bikes are fully automatic and beginner-friendly. Once you are comfortable, the desert is yours.</p>

                    <p>Choose your machine: a powerful <strong>250cc to 400cc quad bike</strong> suitable for all skill levels and ages, or, for more experienced riders, an exhilarating <strong>1000cc dune buggy</strong> built for serious off-road adventure. All vehicles are well-maintained, regularly serviced, and fitted with safety features. Full protective gear — <strong>helmet, goggles, and body armour</strong> — is provided and mandatory.</p>

                    <p>With your guide leading the way, you ride through <strong>60 minutes of open desert terrain</strong> — climbing dune faces, carving through sandy valleys, and stopping at scenic viewpoints for photographs. The feeling of freedom as you accelerate up a dune crest with the entire desert spread before you is completely unlike any theme park ride or group safari vehicle. This is pure, personal adventure.</p>

                    <p>After the quad biking, cool down with <strong>unlimited sandboarding</strong> on the dunes — take a board, run up, and slide back down, as many times as you like. Round off your desert adventure with a <strong>short traditional camel ride</strong> and some photography time in this spectacular natural landscape. By the time it is done, you will have made memories that last far beyond your Dubai holiday.</p>

                    <p><strong>Please note:</strong> Hotel pickup is not included in the standard package. Guests make their own way to the desert meeting point (approximately 45–60 minutes from central Dubai). Transfer assistance can be arranged at an additional cost — contact us via WhatsApp for details.</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Guided Quad Bike
                                    Safari</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Helmet & Protective
                                    Gear</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Expert Guide
                                    Support</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Unlimited
                                    Sandboarding</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Short Camel
                                    Ride</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Bottled
                                    Water</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Hotel Pickup & Drop-off</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Evening Camp Dinner</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Live Dance Shows</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Alcoholic Beverages</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book Quad Bike Safari</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid var(--primary);">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 350</h2>
                                    <span class="text-muted">Per Person</span>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-warning text-dark">Adventure</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Instant Confirmation
                                </p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Professional
                                    Instructors</p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Safety Gear Provided
                                </p>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I'm interested in Quad Bike Desert Safari"
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
                            data-bs-target="#pills-info" type="button" role="tab">Info</button>
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
                                <span class="badge bg-primary me-2">08:00 AM / 03:00 PM</span> <strong>Arrival:</strong>
                                Arrive at the desert meeting point.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">+15 Min</span> <strong>Safety Briefing:</strong>
                                Gear up and receive instructions from experts.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">+60 Min</span> <strong>Quad Biking:</strong>
                                Thrilling ride across the open desert dunes.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">+30 Min</span> <strong>Sandboarding &
                                    Camels:</strong> Short camel ride and sandboarding fun.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">End</span> <strong>Conclusion:</strong> Return gear
                                and conclude your safari adventure.
                            </div>
                        </div>
                    </div>

                    <!-- Info Tab -->
                    <div class="tab-pane fade" id="pills-info" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-briefcase text-primary me-2"></i>What to Bring</h5>
                                <ul class="ps-3 small">
                                    <li>Sunglasses and sunscreen</li>
                                    <li>Camera or smartphone for photos</li>
                                    <li>Comfortable shoes (avoid heels)</li>
                                    <li>Valid ID or passport copy</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-tshirt text-primary me-2"></i>What to Wear</h5>
                                <ul class="ps-3 small">
                                    <li>Comfortable, light clothing</li>
                                    <li>Closed-toe shoes recommended</li>
                                    <li>Avoid white or light colors</li>
                                    <li>Hat or cap for sun protection</li>
                                </ul>
                            </div>
                            <div class="col-12 mt-3 pt-3 border-top">
                                <h5 class="fw-bold"><i class="fas fa-exclamation-triangle text-primary me-2"></i>Safety
                                    Note</h5>
                                <p class="small">Not recommended for pregnant women or people with back/heart problems.
                                    Professional training provided before start.</p>
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
                                        Do I need prior experience to ride a quad bike?
                                    </button>
                                </h2>
                                <div id="tabfaq1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        No experience is required at all. Our quad bikes are fully automatic — no gears, no clutch. Our instructors provide a comprehensive 15-minute training and safety briefing before you head out, and will guide you throughout the ride. Beginners are very welcome.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq2">
                                        Is hotel pickup included in the Quad Bike Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Hotel pickup is not included in the standard package. Guests make their own way to the desert location (approximately 45–60 minutes from central Dubai). However, we can arrange a transfer at an additional cost — please contact us via WhatsApp before booking to confirm availability and pricing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq3">
                                        What is the difference between a Quad Bike and a Dune Buggy?
                                    </button>
                                </h2>
                                <div id="tabfaq3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        A <strong>Quad Bike</strong> (ATV) is a four-wheeled open vehicle you ride solo — great for beginners and intermediate riders, available in 250cc to 400cc. A <strong>Dune Buggy</strong> is a more powerful, side-by-side vehicle (1000cc) designed for serious off-road use — suitable for experienced riders who want maximum thrill. Our team will help you choose the right vehicle based on your experience level.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq4">
                                        What is the minimum age for quad biking?
                                    </button>
                                </h2>
                                <div id="tabfaq4" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The minimum age to ride independently is 16 years. Younger riders (aged 10–15) may be accommodated on smaller, slower bikes at a reduced speed with an instructor escort — subject to physical size and weight. Children under 10 are not permitted to ride. Please contact us in advance if you have young riders in your group.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq5">
                                        Can I combine the Quad Bike Safari with an Evening Desert Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq5" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes! The 3:00 PM Quad Bike session can be combined with our evening safari packages. You can do the quad biking first and then join an evening safari for dune bashing, dinner, and shows. This is one of our most popular combinations for serious desert enthusiasts. Contact us to arrange a combined package.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq6">
                                        What safety measures are in place during the quad bike ride?
                                    </button>
                                </h2>
                                <div id="tabfaq6" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Safety is our top priority. All riders receive: a full helmet, protective goggles, knee pads, and body armour. A comprehensive 15-minute training session is mandatory before the ride. Professional guides accompany all groups throughout the desert. All vehicles are regularly serviced and inspected. Emergency support is on standby at all times.
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
                        <img src="img/safari/premiumcamp/cover.webp" class="card-img-top" alt="Premium Safari"
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

            <!-- VIP Safari -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 safari-card">
                    <div class="position-relative">
                        <img src="img/safari/VIPCamp/cover.webp" class="card-img-top" alt="VIP Safari"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 149</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">VIP Evening Safari</h5>
                        <p class="card-text small mb-3 text-muted">Upgrade to VIP with sofa seating and table service.
                        </p>
                        <a href="vip-desert-safari" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
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
            <h2 class="mb-2 h4">Quad Bike Action in Pictures</h2>
        </div>

        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/quad.webp" class="card-img-top" alt="Quad Bike"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/quad-again.webp" class="card-img-top" alt="Desert Riding"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/Quad-Bike-Dubai.webp" class="card-img-top" alt="Action"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/morningsafari/Sanduning Desert.webp" class="card-img-top" alt="Dunes"
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
                    <img src="img/safari/morningsafari/Camel-riding.webp" class="card-img-top" alt="Camel Ride"
                        style="height: 120px; object-fit: cover;">
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
            <h2>What the Quad Bike Safari actually feels like</h2>
            <p>This is adrenaline first and everything else second. After a short safety briefing and gear check (helmet, goggles, gloves) you're given a 250cc, 400cc or 1000cc machine depending on what you upgraded to. The guided route loops through the dunes at your own pace — beginners stay close to the lead guide, more confident riders open the throttle on the longer stretches. Total ride time is about 30 minutes plus rest stops; the whole experience caps at two hours including transfer. No camp dinner, no cultural show — this is for guests who've done the evening safari before and want a fundamentally different format.</p>
        </div>
    </div>
</section>

<?php include "includes/safari-pickup-zones.php"; ?>
<?php include "includes/safari-fitness.php"; ?>
<?php $currentSafariSlug = "quad-bike-safari"; include "includes/safari-cross-sell.php"; ?>
<?php include "includes/mobile-sticky-cta.php"; ?>
<?php include 'includes/footer.php'; ?>