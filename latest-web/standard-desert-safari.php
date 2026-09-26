<?php
// Page SEO Variables
$pageTitle = "Standard Evening Desert Safari Dubai - AED 99 (₹2,300) | Pure Veg & Jain Food | Arihant Travels";
$pageDescription = "Book Standard Evening Desert Safari at AED 99 (₹2,300). Dune bashing, camel ride, BBQ dinner with pure Jain & vegetarian food. Separate veg counter.";
$pageKeywords = "standard desert safari Dubai, evening desert safari, Dubai desert tour, cheap desert safari, budget desert safari, desert safari with Jain food Dubai, vegetarian desert safari, desert safari for Indian families, pure veg desert safari, Gujarati vegetarian safari Dubai";
$pageCanonical = "https://arihantlink.com/standard-desert-safari";
$currentPage = "standard-desert-safari";

// Breadcrumb Variables
$pageHeading = "Standard Evening Desert Safari";
$breadcrumbCategory = "Desert Safaris";
$breadcrumbCategoryLink = "desert-safari";
$breadcrumbBg = "img/safari/StandardCamp/cover.webp";
$breadcrumbOverlay = false;

// Schema Markup
// Schema standardised 2026-05. Per-safari AggregateRating + Review[] removed —
// previous values were not first-party verifiable. Re-add once we collect
// per-package reviews via Google Reviews API or a custom widget.
$schemaMarkup = '<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": ["Tour", "TouristTrip"],
    "name": "Standard Evening Desert Safari Dubai",
    "description": "' . $pageDescription . '",
    "image": "https://arihantlink.com/img/safari/StandardCamp/cover.webp",
    "url": "https://arihantlink.com/standard-desert-safari",
    "touristType": ["Jain families", "Vegetarian travelers", "Indian families", "Families with children"],
    "duration": "PT6H",
    "itinerary": {
      "@type": "ItemList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Hotel pickup at 3:00 PM"},
        {"@type": "ListItem", "position": 2, "name": "Optional ATV/Quad bike ride (add-on)"},
        {"@type": "ListItem", "position": 3, "name": "20-minute dune bashing in 4x4 Land Cruiser"},
        {"@type": "ListItem", "position": 4, "name": "Desert sunset photo stop"},
        {"@type": "ListItem", "position": 5, "name": "Camel ride and sandboarding at camp"},
        {"@type": "ListItem", "position": 6, "name": "Henna painting and Arabic costumes for photos"},
        {"@type": "ListItem", "position": 7, "name": "BBQ buffet dinner with vegetarian options"},
        {"@type": "ListItem", "position": 8, "name": "Tanoura, Fire Show and Belly Dance cultural performances"},
        {"@type": "ListItem", "position": 9, "name": "Hotel drop-off by 9:30 PM"}
      ]
    },
    "offers": {
      "@type": "Offer",
      "price": "99",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "https://arihantlink.com/standard-desert-safari",
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
      {"@type": "ListItem", "position": 3, "name": "Standard Evening Safari", "item": "https://arihantlink.com/standard-desert-safari"}
    ]
  }
]
</script>';
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid var(--primary);">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">6 Hours</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Pickup Included</p>
                <small class="text-muted">Shared Transfer</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">BBQ Dinner</p>
                <small class="text-muted">Included</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-star fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">4.9/5 on Google</p>
                <small class="text-muted">120+ Reviews</small>
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
                    <h2 class="h4 mb-2">Standard Evening Desert Safari Dubai</h2>
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-primary"><strong>Dubai's most popular desert experience — now at just AED 99 (approx ₹2,300)!</strong> The Standard Evening Desert Safari is the perfect introduction to the Arabian desert, combining thrilling dune bashing, authentic cultural experiences, a delicious BBQ dinner, and spectacular live entertainment — all in one unforgettable 6-hour evening.</p>

                    <p>Your adventure begins with a comfortable <strong>shared 4x4 pickup from your hotel or residence at 2:30 PM</strong>. Your experienced driver takes you through the city outskirts and into the heart of the Dubai desert. En route, you have the option to stop for an <strong>ATV/Quad bike ride</strong> (available at an additional cost) — a fantastic way to get your adrenaline pumping before the main event.</p>

                    <p>The highlight of the journey is the <strong>20-minute dune bashing experience</strong> in a powerful Land Cruiser driven by a trained, professional driver. Hold on tight as your vehicle climbs, descends, and slides across the towering golden dunes at exhilarating angles — a thrill that no theme park ride can replicate! En route to the camp, your driver will stop at the perfect vantage point to photograph the spectacular <strong>Dubai desert sunset</strong>, painting the sky in shades of orange and gold.</p>

                    <p>At the traditional <strong>Bedouin-style campsite</strong>, a world of Arabian hospitality awaits you. Enjoy a <strong>short camel ride</strong> across the sand, try <strong>unlimited sandboarding</strong> down the dunes, and get an intricate <strong>henna design</strong> painted on your hands (ladies). Settle into the camp as the stars emerge overhead and the tantalising aromas of our <strong>BBQ buffet dinner</strong> fill the air — with both vegetarian and non-vegetarian options. Shisha is available at extra cost for those who wish to indulge.</p>

                    <p>The evening ends on a high with <strong>three spectacular live cultural shows</strong>: the hypnotic spinning of the <strong>Tanoura dance</strong>, the death-defying <strong>Fire Show</strong>, and the graceful <strong>Belly Dance</strong> performance that captures centuries of Arabian artistry. It is the perfect final memory before your driver returns you comfortably to your hotel by 9:00 PM.</p>

                    <p>Whether you are a solo traveller, honeymooning couple, or a family with kids — the Standard Evening Desert Safari is a Dubai experience that stays with you long after you return home.</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>4x4
                                    Pickup & Drop-off</strong> (Shared)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>
                                <strong>20-Minute Dune Bashing</strong>
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Camel
                                    Riding</strong> (Short Ride)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>
                                <strong>Sandboarding</strong> (Unlimited)
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Henna
                                    Tattoo</strong> (Ladies)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>BBQ
                                    Buffet Dinner</strong> (Veg/Non-Veg)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>3 Live
                                    Shows:</strong> Tanoura, Fire & Belly Dance</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>
                                <strong>Unlimited</strong> Soft Drinks & Water
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Quad Biking &
                                Buggies (Optional)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Alcoholic
                                Beverages</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> VIP Table Service
                            </li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Private Transfers
                                (Upgrade available)</li>
                        </ul>
                        <div class="alert alert-light border mt-3">
                            <div><i class="fas fa-info-circle me-1"></i> Sitting is on traditional floor
                                mats.</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4" id="booking-form">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book This Safari</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid var(--primary);">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 99</h2>
                                    <p class="mb-0 text-muted small">≈ ₹2,300 per person</p>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-success">Best Value</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="mb-2"><i class="fas fa-check text-success me-2"></i>Instant Confirmation</p>
                                <p class="mb-2"><i class="fas fa-check text-success me-2"></i>Free Cancellation</p>
                                <p class="mb-2"><i class="fas fa-check text-success me-2"></i>Mobile Voucher Accepted
                                </p>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="#booking-form" class="btn btn-primary btn-lg">
                                    <i class="fas fa-calendar-check me-2"></i>Book Now
                                </a>
                                <a href="https://wa.me/971585945007?text=I'm interested in Standard Evening Safari"
                                    target="_blank" class="btn btn-outline-success btn-lg">
                                    <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                                </a>
                            </div>
                        </div>
                        <?php include 'includes/enquiry-sidebar.php'; ?>
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
                                    <span class="badge bg-primary me-2">2:30 PM</span> <strong>Pickup:</strong> From
                                    hotel/residence in 4x4.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">3:00 PM</span> <strong>Dune Bashing:</strong> 20
                                    min desert adventure.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">3:45 PM</span> <strong>Camp Arrival:</strong>
                                    Welcome drinks & activities.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">7:00 PM</span> <strong>Dinner:</strong> BBQ
                                    Buffet under the stars.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">8:00 PM</span> <strong>Shows:</strong> 3
                                    cultural performances.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">9:00 PM</span> <strong>Return:</strong> Drop-off
                                    back to your location.
                                </div>
                            </div>
                        </div>

                        <!-- Guidelines Tab -->
                        <div class="tab-pane fade" id="pills-info" role="tabpanel">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <h5 class="fw-bold"><i class="fas fa-briefcase text-primary me-2"></i>What to Bring
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Sunscreen & Sunglasses</li>
                                        <li>Light Jacket (Cool evenings)</li>
                                        <li>Camera/Smartphone</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold"><i
                                            class="fas fa-hand-holding-heart text-primary me-2"></i>Safety</h5>
                                    <ul class="mb-0">
                                        <li>Not for pregnant women</li>
                                        <li>Not for back/heart patients</li>
                                        <li>Seats belts compulsory</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4 pt-3 border-top">
                                <h5 class="fw-bold border-bottom pb-2">Cancellation Policy</h5>
                                <p class="mb-1 text-success"><i class="fas fa-check me-2"></i><strong>Free 24h
                                        Before:</strong> 100% Refund</p>
                                <p class="mb-1 text-muted"><i class="fas fa-info-circle me-2"></i><strong>Inside
                                        24h:</strong> 50% Refund</p>
                                <p class="mb-0 text-danger"><i class="fas fa-times me-2"></i><strong>No
                                        Shows:</strong> No Refund</p>
                            </div>
                        </div>

                        <!-- FAQ Tab -->
                        <div class="tab-pane fade" id="pills-faq" role="tabpanel">
                            <div class="accordion accordion-flush" id="faqAccordionTabs">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq1">
                                            Are vegetarian and Jain meal options available?
                                        </button>
                                    </h2>
                                    <div id="tabfaq1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">Yes! Vegetarian options are available in the standard BBQ buffet. For strict Jain requirements (no onion, no garlic, separately prepared), we recommend our <a href="premium-desert-safari" class="text-primary fw-bold">Premium Safari</a> which has a dedicated Jain food counter prepared separately. Please inform us at the time of booking for any special dietary needs.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq2">
                                            What is the child and infant policy?
                                        </button>
                                    </h2>
                                    <div id="tabfaq2" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">Children under 3 years travel free of charge. For young children, the dune bashing intensity can be reduced on request — just let your driver know. Children aged 3 and above are charged the adult rate. The campsite activities (camel ride, sandboarding, henna) are suitable for all ages.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq3">
                                            What is the difference between Standard, VIP, and Premium safari?
                                        </button>
                                    </h2>
                                    <div id="tabfaq3" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body"><strong>Standard (AED 99):</strong> Traditional floor mat seating, shared BBQ buffet, all activities included. <strong>VIP (AED 149):</strong> Same camp but with comfortable sofa seating, table service, and a separate BBQ counter. <strong>Premium (AED 199):</strong> Entirely different camp at Lehbab Red Dunes, 30-min dune bashing, AC seating, international buffet with dedicated Jain meals.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq4">
                                            Is hotel pickup and drop-off included?
                                        </button>
                                    </h2>
                                    <div id="tabfaq4" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">Yes, shared 4x4 pickup and drop-off is included from and to your hotel, apartment, or residence anywhere in Dubai. Pickup is at approximately 2:30 PM and return is by 9:00–9:30 PM. If you require a private vehicle, this can be arranged at an additional cost.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq5">
                                            Is the Standard Safari suitable for pregnant women or elderly guests?
                                        </button>
                                    </h2>
                                    <div id="tabfaq5" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">Dune bashing is not recommended for pregnant women, guests with back or neck injuries, heart conditions, or serious medical issues. However, such guests are welcome to come to the camp and enjoy the dinner and cultural shows. Please inform us in advance so we can make arrangements for a comfortable, safe experience.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq6">
                                            What should I wear and bring to the desert safari?
                                        </button>
                                    </h2>
                                    <div id="tabfaq6" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">Wear comfortable, casual clothing. Light, breathable fabrics work best. Closed-toe flat shoes are recommended for sandboarding. Bring sunglasses, sunscreen (SPF 30+), and a light jacket or shawl for the cooler desert evenings. A camera or charged smartphone is a must — the desert sunset and shows are extremely photogenic!</div>
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

<!-- FAQPage Schema for Standard Desert Safari -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Are vegetarian and Jain meal options available on the Standard Desert Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! Vegetarian options are available in the standard BBQ buffet. For strict Jain requirements (no onion, no garlic, separately prepared), the Premium Safari has a dedicated Jain food counter prepared separately. Inform us at booking for special dietary needs."
            }
        },
        {
            "@type": "Question",
            "name": "What is the child and infant policy for the desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Children under 3 years travel free of charge. The dune bashing intensity can be reduced on request for young children. Children aged 3 and above are charged the adult rate. Campsite activities like camel ride, sandboarding, and henna are suitable for all ages."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between Standard, VIP, and Premium desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Standard (AED 99): Traditional floor mat seating, shared BBQ buffet, all activities included. VIP (AED 149): Comfortable sofa seating, table service, and a separate BBQ counter. Premium (AED 199): Different camp at Lehbab Red Dunes, 30-min dune bashing, AC seating, international buffet with dedicated Jain meals."
            }
        },
        {
            "@type": "Question",
            "name": "Is hotel pickup and drop-off included in the desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, shared 4x4 pickup and drop-off is included from your hotel, apartment, or residence anywhere in Dubai. Pickup is at approximately 2:30 PM and return is by 9:00-9:30 PM. Private vehicles can be arranged at additional cost."
            }
        },
        {
            "@type": "Question",
            "name": "Is the Standard Safari suitable for pregnant women or elderly guests?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Dune bashing is not recommended for pregnant women, guests with back or neck injuries, heart conditions, or serious medical issues. However, such guests are welcome to enjoy the dinner and cultural shows at the camp."
            }
        },
        {
            "@type": "Question",
            "name": "What should I wear and bring to the desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Wear comfortable, casual clothing with light, breathable fabrics. Closed-toe flat shoes are recommended for sandboarding. Bring sunglasses, sunscreen (SPF 30+), and a light jacket for cooler desert evenings. A camera or charged smartphone is a must for the desert sunset and shows."
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
                            <p class="card-text small mb-3 text-muted">Upgrade to VIP with sofa seating and table
                                service.</p>
                            <a href="vip-desert-safari" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
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
                            <p class="card-text small mb-3 text-muted">Exclusive Red Dunes experience with AC luxury
                                camp.</p>
                            <a href="premium-desert-safari" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Morning Safari -->
                <div class="col-lg-4">
                    <div class="card h-100 shadow-sm border-0 safari-card">
                        <div class="position-relative">
                            <img src="img/safari/morningsafari/Morning-Safari-tour-dubai.webp" class="card-img-top"
                                alt="Morning Safari" style="height: 280px; object-fit: cover;">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 150</span>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="h6 card-title mb-2">Morning Desert Safari</h5>
                            <p class="card-text small mb-3 text-muted">Beat the heat with early morning desert
                                adventure.</p>
                            <a href="morning-desert-safari" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
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
                <h2 class="mb-2 h4">Standard Safari Experience</h2>
            </div>

            <div class="row g-2">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                        <img src="img/safari/StandardCamp/desert-safar-standard-camp-sitting.webp" class="card-img-top"
                            alt="Desert Camp" style="height: 120px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                        <img src="img/safari/StandardCamp/desert-safar-standard-camp-BBQ-2.webp" class="card-img-top"
                            alt="BBQ Dinner" style="height: 120px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                        <img src="img/safari/StandardCamp/desert-safar-standard-camp-belly-dance-4.webp"
                            class="card-img-top" alt="Belly Dance" style="height: 120px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                        <img src="img/safari/StandardCamp/desert-safar-standard-camp-fire-show-2.webp"
                            class="card-img-top" alt="Fire Show" style="height: 120px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                        <img src="img/safari/StandardCamp/desert-safar-standard-camp-tandura-dance.webp"
                            class="card-img-top" alt="Tandura Dance" style="height: 120px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                        <img src="img/safari/StandardCamp/desert-safar-standard-camp-majlis.webp" class="card-img-top"
                            alt="Traditional Majlis Seating" style="height: 120px; object-fit: cover;">
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
            <h2>What the Standard Evening Safari actually feels like</h2>
            <p>Pickup is around 3 PM in a shared 4x4 with five other guests. After about a 45-minute drive out of Dubai you reach the dune base and the convoy stops to deflate the tyres. Then twenty minutes of dune bashing — controlled slides, drops and crests over the soft sand. Hold on, windows up, no loose bags. The car arrives at the camp with everyone laughing and shouting at the same time, which is exactly the point. The camp itself is mat-style seating in a large Bedouin-style tent: sand under your feet, low tables, music in the background. A short camel ride, sandboarding on a small dune, henna for the ladies and Arabic costumes for photos fill the next hour. Dinner is a buffet — vegetarian and non-vegetarian on the same line — followed by Tanoura, fire show and belly dance. You leave around 9:00 PM, dusty and smiling, back at your hotel by 9:30.</p>
        </div>
    </div>
</section>

<?php include "includes/safari-pickup-zones.php"; ?>
<?php include "includes/safari-fitness.php"; ?>
<?php $currentSafariSlug = "standard-desert-safari"; include "includes/safari-cross-sell.php"; ?>
<?php include "includes/mobile-sticky-cta.php"; ?>
<?php include 'includes/footer.php'; ?>