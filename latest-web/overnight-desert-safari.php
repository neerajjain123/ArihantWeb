<?php
// Page SEO Variables
$pageTitle = "Overnight Desert Safari Dubai - AED 249 | Arihant Travels";
$pageDescription = "Unique overnight desert experience! Overnight Desert Safari at AED 249. Camp under stars, bonfire, BBQ dinner, breakfast, and sunrise views.";
$pageKeywords = "overnight desert safari Dubai, desert camping Dubai, stargazing desert, bonfire Dubai, night safari Dubai";
$pageCanonical = "https://arihantlink.com/overnight-desert-safari";
$currentPage = "overnight-desert-safari";

// Breadcrumb Variables
$pageHeading = "Overnight Desert Safari";
$breadcrumbCategory = "Desert Safaris";
$breadcrumbCategoryLink = "desert-safari";
$breadcrumbBg = "img/safari/nightsafari/cover.webp";
$breadcrumbOverlay = false;

// Schema Markup
// Schema standardised 2026-05 — same shape as Standard/VIP/Premium so all six
// safari sub-pages emit consistent Tour + BreadcrumbList markup.
$schemaMarkup = '<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": ["Tour", "TouristTrip"],
    "name": "Overnight Desert Safari Dubai",
    "description": "' . $pageDescription . '",
    "image": "https://arihantlink.com/img/safari/nightsafari/cover.webp",
    "url": "https://arihantlink.com/overnight-desert-safari",
    "touristType": ["Adventure travelers", "Couples", "Families", "Jain families", "Vegetarian travelers"],
    "duration": "PT16H",
    "itinerary": {
      "@type": "ItemList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Hotel pickup at 3:00 PM"},
        {"@type": "ListItem", "position": 2, "name": "20-minute dune bashing in 4x4 Land Cruiser"},
        {"@type": "ListItem", "position": 3, "name": "Desert sunset photo stop"},
        {"@type": "ListItem", "position": 4, "name": "Camel ride and sandboarding"},
        {"@type": "ListItem", "position": 5, "name": "BBQ dinner with separate Jain / vegetarian counter"},
        {"@type": "ListItem", "position": 6, "name": "Tanoura, Fire Show and Belly Dance cultural performances"},
        {"@type": "ListItem", "position": 7, "name": "Campfire and stargazing"},
        {"@type": "ListItem", "position": 8, "name": "Overnight stay in Bedouin-style tent"},
        {"@type": "ListItem", "position": 9, "name": "Sunrise views over the dunes"},
        {"@type": "ListItem", "position": 10, "name": "Light vegetarian breakfast and hotel drop-off by 9:00 AM"}
      ]
    },
    "offers": {
      "@type": "Offer",
      "price": "249",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "https://arihantlink.com/overnight-desert-safari",
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
      {"@type": "ListItem", "position": 3, "name": "Overnight Desert Safari", "item": "https://arihantlink.com/overnight-desert-safari"}
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
                <p class="mb-0 fw-bold">18 Hours</p>
                <div class="text-muted">Overnight Stay</div>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">3:00 PM Pickup</p>
                <div class="text-muted">9:00 AM Return</div>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-fire fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Bonfire</p>
                <div class="text-muted">Stargazing</div>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-star fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">Breakfast</p>
                <div class="text-muted">Included</div>
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
                    <h2 class="h4 mb-2">Overnight Desert Safari Dubai – Sleep Under the Stars</h2>
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-primary"><strong>The complete Dubai desert experience — from sunset to sunrise.</strong> The Overnight Desert Safari is the most immersive way to discover the magic of the Arabian desert. Unlike the standard evening safari, you stay the night, sleep under a sky full of stars, and wake up to one of the most breathtaking sunrises you will ever see.</p>

                    <p>Your adventure begins at <strong>3:00 PM</strong> with a comfortable 4x4 pickup from your hotel or residence. Your driver takes you to the desert, where you have the option to add an <strong>ATV/Quad bike ride</strong> at the first stop (available at extra cost). The main event — thrilling <strong>dune bashing</strong> in a powerful Land Cruiser across the rolling red sands — follows, with stops for stunning sunset photography.</p>

                    <p>At the traditional Bedouin camp, enjoy a full evening of activities: <strong>camel riding, sandboarding, and henna design</strong> for the ladies. Sit down to a generous <strong>BBQ buffet dinner</strong> (vegetarian and Jain options available) and watch the campfire performances — a mesmerizing <strong>Fire Show, Tanoura dance, and Belly Dance</strong> under the open desert sky.</p>

                    <p>As the evening draws to a close and the camp lights dim, the real magic of the Overnight Safari begins. Lie back and <strong>stargaze through a telescope</strong> — away from the city lights, the Arabian sky is extraordinary, filled with stars you will never see in Dubai's urban glow. Your guide can point out constellations and share stories of how ancient Bedouin navigated the desert by the stars.</p>

                    <p>Settle in by the <strong>campfire</strong> and learn how to brew traditional <strong>Arabic coffee and Karak tea</strong> the Bedouin way — a simple, beautiful ritual that connects you to centuries of desert heritage. The silence of the desert night, the warmth of the fire, and the vast starlit sky above create a moment unlike anything else you will experience on your Dubai holiday.</p>

                    <p>Retire to your <strong>comfortable desert tent</strong>, equipped with a mattress, pillow, and warm blanket — everything you need for a peaceful night's sleep. Wake up early to witness one of nature's greatest shows: the <strong>desert sunrise</strong>. As the first light touches the dunes and the sky turns from deep purple to brilliant orange and gold, go for a gentle camel ride to soak in the peaceful morning atmosphere. Photographs taken at this hour are truly extraordinary.</p>

                    <p>Return to camp for a <strong>freshly prepared Arabian breakfast</strong> — a warm, nourishing spread to start your morning. Your driver then takes you back to Dubai, dropping you at your hotel by approximately 8:30–9:00 AM — tired in the best possible way, and with memories that will last a lifetime.</p>

                    <p><strong>Practical comfort details:</strong> The camp has toilet facilities available. Tents are shared between the same booking group (not with strangers). Security and camp staff are present throughout the night. The camp is fully fenced and safe. A light jacket or warm layer is recommended as desert nights can get cool, even in summer.</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>4x4 Hotel Pickup &amp; Drop-off</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Dune Bashing, Camel Ride &amp; Sandboarding</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>BBQ Buffet Dinner</strong> (Veg &amp; Jain options available)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Live Shows</strong> – Tanoura, Fire &amp; Belly Dance</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Overnight Stay in Desert</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Bonfire &amp; Stargazing Experience</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Tent, Pillows &amp; Blankets</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Fresh Arabian Breakfast</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Quad Biking & Buggies
                                (Optional)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Alcoholic Beverages</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> VIP Table Service</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book Overnight Safari</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid var(--primary);">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 249</h2>
                                    <span class="text-muted">Per Person</span>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-dark text-white">Best Experience</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Tent & Bedding
                                    Included</p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Breakfast
                                    Included</p>
                                <p class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Instant
                                    Confirmation</p>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I'm interested in Overnight Desert Safari"
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
                                <span class="badge bg-primary me-2">3:00 PM</span> <strong>Pickup:</strong> From
                                hotel/residence in 4x4.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">4:30 PM</span> <strong>Dune Bashing:</strong>
                                High red dunes bashing adventure.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">7:00 PM</span> <strong>Dinner & Shows:</strong>
                                BBQ dinner & live cultural entertainment.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">10:00 PM</span> <strong>Bonfire:</strong>
                                Overnight camping under the starlit sky.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">5:30 AM</span> <strong>Sunrise:</strong> Early
                                morning desert views & photo session.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">7:00 AM</span> <strong>Breakfast:</strong>
                                Traditional Arabian breakfast at camp.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">8:30 AM</span> <strong>Return:</strong> Drop-off
                                back to your hotel/residence.
                            </div>
                        </div>
                    </div>

                    <!-- Guidelines Tab -->
                    <div class="tab-pane fade" id="pills-info" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-briefcase text-primary me-2"></i>What to Bring
                                </h5>
                                <ul class="ps-3 small">
                                    <li>Overnight clothes & Toiletries</li>
                                    <li>Sunscreen & Sunglasses</li>
                                    <li>Camera/Smartphone</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-hand-holding-heart text-primary me-2"></i>Safety
                                </h5>
                                <ul class="ps-3 small">
                                    <li>Not for infants under 3</li>
                                    <li>Not for pregnant women</li>
                                    <li>Basic first aid available at camp</li>
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
                                        What exactly is included in the overnight stay?
                                    </button>
                                </h2>
                                <div id="tabfaq1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The overnight stay includes a comfortable tent with mattress, pillow, and warm blanket. You also get the full evening safari experience (dune bashing, camel ride, sandboarding, henna, BBQ dinner, live shows), plus a campfire, telescope stargazing, Arabic coffee/tea experience, and a freshly prepared Arabian breakfast in the morning before drop-off.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq2">
                                        Is it safe to stay overnight in the desert?
                                    </button>
                                </h2>
                                <div id="tabfaq2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes, absolutely. Our desert camp has 24/7 security and camp staff onsite throughout the night. The camp is fully fenced. Basic first aid is available. UAE desert conditions are well-managed and there are no dangerous wildlife concerns. Thousands of families and solo travellers safely enjoy overnight desert experiences every year.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq3">
                                        Are toilet and bathroom facilities available?
                                    </button>
                                </h2>
                                <div id="tabfaq3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes, toilet facilities are available at the camp. Please note that this is a desert setting and facilities are basic but functional. Shower facilities are not available overnight. We recommend freshening up at your hotel before pickup and packing a small overnight bag with essentials (toiletries, change of clothes, personal items).
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq4">
                                        Are Jain and vegetarian meals available for the overnight safari?
                                    </button>
                                </h2>
                                <div id="tabfaq4" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes! Both the evening BBQ buffet dinner and the morning Arabian breakfast have vegetarian options. Please inform us at the time of booking if you require strict Jain meals and we will do our best to accommodate your dietary needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq5">
                                        What should I pack for the overnight safari?
                                    </button>
                                </h2>
                                <div id="tabfaq5" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Pack: a change of clothes, basic toiletries, sunscreen, sunglasses, a light jacket or warm layer (desert nights can be cool), a camera or power bank, any personal medications, and ID/passport. Pillows and blankets are provided. Leave large suitcases at your hotel — a small backpack is all you need.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq6">
                                        Is the overnight safari suitable for families with children?
                                    </button>
                                </h2>
                                <div id="tabfaq6" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes — families with children love the overnight safari. Stargazing with a telescope is especially exciting for kids. Children under 3 are free. Dune bashing intensity can be reduced for young children. However, we recommend the experience for children aged 4 and above for a comfortable night's sleep. Please let us know the age of your children when booking.
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
            "name": "What exactly is included in the overnight desert safari stay?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The overnight stay includes a comfortable tent with mattress, pillow, and warm blanket. You also get the full evening safari experience (dune bashing, camel ride, sandboarding, henna, BBQ dinner, live shows), plus a campfire, telescope stargazing, Arabic coffee/tea experience, and a freshly prepared Arabian breakfast in the morning."
            }
        },
        {
            "@type": "Question",
            "name": "Is it safe to stay overnight in the Dubai desert?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, absolutely. The desert camp has 24/7 security and camp staff onsite throughout the night. The camp is fully fenced. Basic first aid is available. UAE desert conditions are well-managed with no dangerous wildlife concerns."
            }
        },
        {
            "@type": "Question",
            "name": "Are toilet and bathroom facilities available at the overnight desert camp?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, toilet facilities are available at the camp. Facilities are basic but functional in the desert setting. Shower facilities are not available overnight."
            }
        },
        {
            "@type": "Question",
            "name": "Are Jain and vegetarian meals available for the overnight safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! Both the evening BBQ buffet dinner and the morning Arabian breakfast have vegetarian options. Inform us at booking if you require strict Jain meals and we will accommodate your dietary needs."
            }
        },
        {
            "@type": "Question",
            "name": "What should I pack for the overnight desert safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Pack a change of clothes, basic toiletries, sunscreen, sunglasses, a light jacket or warm layer (desert nights can be cool), a camera or power bank, any personal medications, and ID/passport. Pillows and blankets are provided."
            }
        },
        {
            "@type": "Question",
            "name": "Is the overnight safari suitable for families with children?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes — families with children love the overnight safari. Stargazing with a telescope is especially exciting for kids. Children under 3 are free. Dune bashing intensity can be reduced for young children. We recommend it for children aged 4 and above."
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
                        <p class="card-text small mb-3 text-muted">Exclusive Red Dunes experience with AC luxury
                            camp.</p>
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
                        <p class="card-text small mb-3 text-muted">Upgrade to VIP with sofa seating and table
                            service.</p>
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
            <h2 class="mb-2 h4">Overnight Experience in Pictures</h2>
        </div>

        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/nightsafari/VIP_Night_Tent_1.webp" class="card-img-top" alt="Night Tent"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/nightsafari/Safari-desert-night-bonfire.webp" class="card-img-top"
                        alt="Bonfire" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/nightsafari/Desert-Safari-Premium-Stargazing.webp" class="card-img-top"
                        alt="Stargazing" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/nightsafari/Safari-desert-belly-dance-2.webp" class="card-img-top"
                        alt="Belly Dance" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/nightsafari/Night Safari BBQ.webp" class="card-img-top" alt="BBQ Dinner"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/nightsafari/Safari-desert-food-counter.webp" class="card-img-top" alt="Camping"
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
            <h2>What the Overnight Safari actually feels like</h2>
            <p>You start with the full evening safari — dune bashing, camel ride, sandboarding, BBQ dinner with the separate Jain counter, cultural shows. The difference is that when most guests leave at 9 PM, your group stays. The camp settles into something quieter: a campfire, shisha for those who want it, the desert genuinely dark and the stars genuinely visible (no Dubai light pollution at this distance). Tents are Bedouin-style — comfortable cots, blankets, basic but clean. Sunrise the next morning over the dunes is the part guests remember years later. Light vegetarian breakfast — poha, upma, paratha, fruit, tea/coffee — and you're back at your hotel by 9 AM the next day.</p>
        </div>
    </div>
</section>

<?php include "includes/safari-pickup-zones.php"; ?>
<?php include "includes/safari-fitness.php"; ?>
<?php $currentSafariSlug = "overnight-desert-safari"; include "includes/safari-cross-sell.php"; ?>
<?php include "includes/mobile-sticky-cta.php"; ?>
<?php include 'includes/footer.php'; ?>