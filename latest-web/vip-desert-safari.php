<?php
// Page SEO Variables
$pageTitle = "VIP Evening Desert Safari Dubai - AED 149 (₹3,400) | Jain & Veg Food | Arihant Travels";
$pageDescription = "VIP Desert Safari at AED 149 (₹3,400). Sofa seating, separate Jain BBQ counter, table service & unlimited drinks. Pure vegetarian dinner available.";
$pageKeywords = "VIP desert safari Dubai, luxury desert safari, premium evening safari, VIP sofa seating, Dubai VIP tour, VIP desert safari Jain food, separate vegetarian BBQ counter, desert safari for Indian families, Gujarati family desert safari";
$pageCanonical = "https://arihantlink.com/vip-desert-safari";
$currentPage = "vip-desert-safari";

// Breadcrumb Variables
$pageHeading = "VIP Evening Desert Safari";
$breadcrumbCategory = "Desert Safaris";
$breadcrumbCategoryLink = "desert-safari";
$breadcrumbBg = "img/safari/VIPCamp/vip-desert-safari-banner.webp";
$breadcrumbOverlay = false;

// Schema Markup
// Schema standardised 2026-05. Per-safari AggregateRating + Review[] removed —
// previous values were not first-party verifiable. Re-add once we collect
// per-package reviews via Google Reviews API or a custom widget.
$schemaMarkup = '<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "VIP Evening Desert Safari Dubai",
    "description": "' . $pageDescription . '",
    "image": "https://arihantlink.com/img/safari/VIPCamp/cover.webp",
    "url": "https://arihantlink.com/vip-desert-safari",
    "touristType": ["Jain families", "Vegetarian travelers", "Honeymooners", "Indian families"],
    "itinerary": {
      "@type": "ItemList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Hotel pickup at 3:00 PM"},
        {"@type": "ListItem", "position": 2, "name": "Optional ATV/Quad bike ride (add-on)"},
        {"@type": "ListItem", "position": 3, "name": "20-minute dune bashing in 4x4 Land Cruiser"},
        {"@type": "ListItem", "position": 4, "name": "Desert sunset photo stop"},
        {"@type": "ListItem", "position": 5, "name": "VIP sofa seating with table service"},
        {"@type": "ListItem", "position": 6, "name": "Camel ride and sandboarding"},
        {"@type": "ListItem", "position": 7, "name": "BBQ dinner with separate Jain / vegetarian counter"},
        {"@type": "ListItem", "position": 8, "name": "Tanoura, Fire Show and Belly Dance cultural performances"},
        {"@type": "ListItem", "position": 9, "name": "Hotel drop-off by 9:30 PM"}
      ]
    },
    "offers": {
      "@type": "Offer",
      "price": "149",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "https://arihantlink.com/vip-desert-safari",
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
      {"@type": "ListItem", "position": 3, "name": "VIP Evening Safari", "item": "https://arihantlink.com/vip-desert-safari"}
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
                <p class="mb-0 fw-bold">Premium BBQ</p>
                <small class="text-muted">Separate Counter</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-couch fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">VIP Sofa Seating</p>
                <small class="text-muted">Comfortable</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Overview Section Start -->
<div class="container-fluid py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h2 class="h4 mb-2">VIP Evening Desert Safari Dubai</h2>
                    <h2 class="mb-3 h4">Overview</h2>
                    <p class="text-primary"><strong>Same thrill, superior comfort — the VIP Evening Desert Safari at AED 149 (approx ₹3,400).</strong> All the excitement of Dubai's legendary desert safari, elevated with exclusive VIP amenities that make every moment more comfortable, more personal, and more memorable. Ideal for couples, honeymooners, and families who want that extra touch of luxury without the premium price tag.</p>

                    <p>Your evening begins with a comfortable <strong>shared 4x4 pickup from your hotel or residence at 2:30 PM</strong>. Your experienced driver whisks you through the city and into the stunning Dubai desert, with an optional stop for an <strong>ATV/Quad bike ride</strong> (at additional cost) to kick-start the adventure. Once in the desert, you transfer to a powerful <strong>Land Cruiser</strong> for an exhilarating <strong>20-minute dune bashing session</strong> — twisting, turning, and climbing over the golden sands with heart-pumping intensity. Your driver also stops at the ideal spot for you to capture the breathtaking <strong>desert sunset</strong> on camera.</p>

                    <p><strong>Where VIP truly shines is at the camp.</strong> While standard guests sit on traditional floor mats, VIP guests are escorted to a <strong>dedicated sofa seating area</strong> with comfortable upholstered furniture and personal table service. From the moment you arrive, staff are on hand to bring you welcome drinks, starters, and appetizers directly to your table — no queuing, no hassle.</p>

                    <p>When dinner is served, VIP guests enjoy access to a <strong>separate, premium BBQ counter</strong> with a wider selection of dishes, including <strong>vegetarian, Jain-friendly, and non-vegetarian options</strong> — all freshly grilled and replenished throughout the evening. Unlimited soft drinks and water are served at your table throughout your stay.</p>

                    <p>As the stars emerge over the desert, sit back and enjoy <strong>three spectacular cultural performances</strong>: the mesmerising spinning of the <strong>Tanoura dance</strong>, the thrilling <strong>Fire Show</strong>, and the elegant <strong>Belly Dance</strong> — all performed around a real campfire in authentic Arabian style. Between shows, there is plenty of time for a <strong>camel ride</strong>, <strong>sandboarding</strong>, and <strong>henna designs</strong> for the ladies. By 9:30 PM, your driver returns you comfortably to your hotel — memories intact and feet still in the sand.</p>
                </div>

                <!-- Jain / Veg Highlight -->
                <div class="alert border-0 mb-4 p-3" style="background-color: #f0faf0; border-left: 4px solid #28a745 !important; border-left-style: solid !important;">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-leaf fa-lg text-success me-3 mt-1"></i>
                        <div>
                            <strong class="text-success">100% Jain &amp; Vegetarian Friendly</strong>
                            <p class="mb-0 small mt-1">Our VIP camp has a <strong>dedicated separate BBQ counter</strong> for vegetarian and Jain guests. Food is prepared separately, with no cross-contamination. Let us know your dietary preference at the time of booking and we will ensure a comfortable, worry-free dining experience.</p>
                        </div>
                    </div>
                </div>

                <!-- Inclusions & Exclusions Section -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>VIP Sofa
                                    Seating</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Table Service for
                                    Starters</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Separate BBQ
                                    Counter (Veg / Non-Veg)</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Vegetarian &amp; Jain
                                    Meal Options</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Unlimited Drinks at
                                    Table</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>20-Min Dune
                                    Bashing</strong> (4x4)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Camel Riding &amp;
                                    Sandboarding</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Henna Tattoo</strong>
                                (Ladies)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Live Entertainment
                                    Shows</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Quad Biking (Optional)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Private 4x4 Vehicle</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Alcoholic Beverages</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Personal Expenses</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book VIP Safari</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid var(--primary);">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 149</h2>
                                    <p class="mb-0 text-muted small">≈ ₹3,400 per person</p>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-success">Premium</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Sofa Seating
                                    Included</p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Table Service
                                    Included</p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Instant Confirmation
                                </p>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I'm interested in VIP Evening Safari"
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
                                <span class="badge bg-primary me-2">03:00 PM</span> <strong>Pickup:</strong> From your
                                location in a comfortable 4x4.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">04:00 PM</span> <strong>Desert Thrills:</strong>
                                Dune bashing, sandboarding, and sunset photos.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">05:30 PM</span> <strong>VIP Welcome:</strong>
                                Arrival at camp, welcome drinks, and sofa seating.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">07:30 PM</span> <strong>VIP Dining:</strong>
                                Starters at table followed by separate VIP buffet counter.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">09:30 PM</span> <strong>Drop-off:</strong> Drive
                                back to your hotel/residence.
                            </div>
                        </div>
                    </div>

                    <!-- Info Tab -->
                    <div class="tab-pane fade" id="pills-info" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-info-circle text-primary me-2"></i>Comfort Tips
                                </h5>
                                <ul class="ps-3 small">
                                    <li>Modest, comfortable clothing</li>
                                    <li>Open-toed shoes okay for camp</li>
                                    <li>Jacket for evening chill</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-shield-alt text-primary me-2"></i>Safety Note</h5>
                                <p class="small ps-2">Dune bashing is not recommended for children under 3 or elderly
                                    with heart/back conditions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Tab -->
                    <div class="tab-pane fade" id="pills-faq" role="tabpanel">
                        <div class="accordion accordion-flush" id="faqAccordionTabs">
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vfaq1">
                                        What exactly is VIP sofa seating and how is it different from standard?
                                    </button>
                                </h2>
                                <div id="vfaq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Standard safari guests sit on traditional floor mats in an open communal area. VIP guests are escorted to a dedicated, roped-off seating zone with comfortable upholstered sofas and low tables. It feels like a private lounge within the camp — much more relaxed, spacious, and comfortable, especially for guests who find floor seating difficult.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vfaq2">
                                        Is the food and drinks service personalised at the VIP table?
                                    </button>
                                </h2>
                                <div id="vfaq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes. From the moment you arrive at camp, starters and welcome drinks are brought directly to your sofa. Unlimited soft drinks and water are served at your table throughout the evening — no queuing at a counter. When dinner is ready, VIP guests use a dedicated, less-crowded BBQ counter with premium selections.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vfaq3">
                                        Are Jain and vegetarian meal options available at the VIP safari?
                                    </button>
                                </h2>
                                <div id="vfaq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes! Our VIP camp has a dedicated separate BBQ counter with vegetarian and Jain-friendly options prepared separately to avoid cross-contamination. Please inform us of your dietary requirements at the time of booking and we will ensure a worry-free dining experience. For strict Jain meals (no onion, no garlic, separate preparation), we also recommend our <a href="premium-desert-safari" class="text-primary fw-bold">Premium Safari</a>.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vfaq4">
                                        What is the difference between VIP and Premium safari?
                                    </button>
                                </h2>
                                <div id="vfaq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        <strong>VIP (AED 149):</strong> Same camp as Standard but with sofa seating, table service, and a separate BBQ counter. 20-min dune bashing. Great comfort upgrade at a modest extra cost. <strong>Premium (AED 199):</strong> Completely different camp at the famous Lehbab Red Dunes. 30-min dune bashing, AC indoor seating, international buffet, dedicated Jain food counter, and a much less crowded environment. Choose VIP for comfort; choose Premium for a truly different and exclusive experience.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vfaq5">
                                        Is the VIP safari suitable for families with young children?
                                    </button>
                                </h2>
                                <div id="vfaq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Absolutely — VIP is one of our most family-friendly options. The comfortable sofa seating and attentive table service make it easy to manage young children. Infants under 3 are free. Dune bashing intensity can be reduced for young children on request — just inform your driver. All camp activities (camel ride, sandboarding, henna) are child-friendly.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vfaq6">
                                        Can I upgrade from Standard to VIP after booking?
                                    </button>
                                </h2>
                                <div id="vfaq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes, upgrades from Standard to VIP can be arranged subject to availability. Please contact us via WhatsApp at least 24 hours before your safari date. We will do our best to accommodate your request.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#vfaq7">
                                        Is the VIP safari good for a honeymoon or anniversary celebration?
                                    </button>
                                </h2>
                                <div id="vfaq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes! Many couples choose the VIP safari for honeymoons and anniversaries. The private sofa seating area, personalised service, and romantic desert atmosphere under the stars make it a truly special experience. Let us know at the time of booking if it is a special occasion and we will try to add a personal touch.
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

<!-- FAQPage Schema for VIP Desert Safari -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What exactly is VIP sofa seating and how is it different from standard desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Standard safari guests sit on traditional floor mats in an open communal area. VIP guests are escorted to a dedicated, roped-off seating zone with comfortable upholstered sofas and low tables. It feels like a private lounge within the camp — much more relaxed, spacious, and comfortable."
            }
        },
        {
            "@type": "Question",
            "name": "Is the food and drinks service personalised at the VIP table?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. From the moment you arrive at camp, starters and welcome drinks are brought directly to your sofa. Unlimited soft drinks and water are served at your table throughout the evening. VIP guests use a dedicated, less-crowded BBQ counter with premium selections."
            }
        },
        {
            "@type": "Question",
            "name": "Are Jain and vegetarian meal options available at the VIP safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! The VIP camp has a dedicated separate BBQ counter with vegetarian and Jain-friendly options prepared separately to avoid cross-contamination. For strict Jain meals (no onion, no garlic, separate preparation), the Premium Safari is also recommended."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between VIP and Premium desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "VIP (AED 149): Same camp as Standard but with sofa seating, table service, and a separate BBQ counter. 20-min dune bashing. Premium (AED 199): Completely different camp at Lehbab Red Dunes. 30-min dune bashing, AC indoor seating, international buffet, dedicated Jain food counter, and a less crowded environment."
            }
        },
        {
            "@type": "Question",
            "name": "Is the VIP safari suitable for families with young children?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. VIP is one of the most family-friendly options. Comfortable sofa seating and attentive table service make it easy to manage young children. Infants under 3 are free. Dune bashing intensity can be reduced for young children on request."
            }
        },
        {
            "@type": "Question",
            "name": "Can I upgrade from Standard to VIP after booking?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, upgrades from Standard to VIP can be arranged subject to availability. Contact us via WhatsApp at least 24 hours before your safari date."
            }
        },
        {
            "@type": "Question",
            "name": "Is the VIP safari good for a honeymoon or anniversary celebration?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! Many couples choose the VIP safari for honeymoons and anniversaries. The private sofa seating area, personalised service, and romantic desert atmosphere under the stars make it a truly special experience."
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
            <h2 class="mb-2 h4">VIP Experience in Pictures</h2>
        </div>

        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/VIPCamp/desert-safar-standard-camp-sitting.webp" class="card-img-top"
                        alt="Desert Camp" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/VIPCamp/desert-safar-standard-camp-BBQ-2.webp" class="card-img-top"
                        alt="BBQ Dinner" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/VIPCamp/desert-safar-standard-camp-belly-dance-4.webp" class="card-img-top"
                        alt="Belly Dance" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/VIPCamp/desert-safar-standard-camp-fire-show-2.webp" class="card-img-top"
                        alt="Fire Show" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/VIPCamp/desert-safar-standard-camp-tandura-dance.webp" class="card-img-top"
                        alt="Tandura Dance" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/VIPCamp/desert-safar-standard-camp-majlis.webp" class="card-img-top"
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
            <h2>What the VIP Evening Safari actually feels like</h2>
            <p>The structure of the evening matches the Standard safari — same pickup window, same dune bashing, same camel ride and cultural shows — but the camp itself is a meaningfully different experience. You sit on cushioned sofas around your own low table rather than a mat on the sand. Starters and soft drinks arrive at the table, so you don't queue at the buffet line. The Jain BBQ counter sits to one side of the camp, separately staffed, and the host shows you to it directly when dinner is served — no need to repeat the dietary request three times. For couples and families who want the desert experience without sitting cross-legged in the sand, this is usually the right pick.</p>
        </div>
    </div>
</section>

<?php include "includes/safari-pickup-zones.php"; ?>
<?php include "includes/safari-fitness.php"; ?>
<?php $currentSafariSlug = "vip-desert-safari"; include "includes/safari-cross-sell.php"; ?>
<?php include "includes/mobile-sticky-cta.php"; ?>
<?php include 'includes/footer.php'; ?>