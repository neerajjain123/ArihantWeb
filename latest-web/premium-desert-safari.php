<?php
// Page SEO Variables
$pageTitle = "Premium Evening Desert Safari Dubai - AED 199 (₹4,600) | Pure Jain Food | Arihant Travels";
$pageDescription = "Premium Desert Safari at Lehbab Red Dunes — AED 199 (₹4,600). 30-min dune bashing, AC camp, dedicated Jain food section (no onion, no garlic).";
$pageKeywords = "premium desert safari Dubai, Lehbab red dunes, Jain meal safari Dubai, AC camp Dubai, premium camp safari, premium desert safari Jain food, pure vegetarian desert dinner, desert safari for Gujarati families, Jain dinner desert camp, Indian family desert safari";
$pageCanonical = "https://arihantlink.com/premium-desert-safari";
$currentPage = "premium-desert-safari";

// Breadcrumb Variables
$pageHeading = "Premium Evening Desert Safari";
$breadcrumbCategory = "Desert Safaris";
$breadcrumbCategoryLink = "desert-safari";
$breadcrumbBg = "img/safari/premiumcamp/cover.webp";
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
    "name": "Premium Evening Desert Safari Dubai",
    "description": "' . $pageDescription . '",
    "image": "https://arihantlink.com/img/safari/premiumcamp/cover.webp",
    "url": "https://arihantlink.com/premium-desert-safari",
    "touristType": ["Jain families", "Vegetarian travelers", "Luxury travelers", "Indian families"],
    "duration": "PT7H",
    "itinerary": {
      "@type": "ItemList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Hotel pickup at 3:00 PM"},
        {"@type": "ListItem", "position": 2, "name": "Optional ATV/Quad bike ride (add-on)"},
        {"@type": "ListItem", "position": 3, "name": "30-minute dune bashing at Lehbab Red Dunes"},
        {"@type": "ListItem", "position": 4, "name": "Desert sunset photo stop"},
        {"@type": "ListItem", "position": 5, "name": "AC seating area at premium camp"},
        {"@type": "ListItem", "position": 6, "name": "Camel ride and sandboarding"},
        {"@type": "ListItem", "position": 7, "name": "International buffet dinner with separate Jain counter"},
        {"@type": "ListItem", "position": 8, "name": "Tanoura, Fire Show and Belly Dance cultural performances"},
        {"@type": "ListItem", "position": 9, "name": "Hotel drop-off by 9:30 PM"}
      ]
    },
    "offers": {
      "@type": "Offer",
      "price": "199",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "https://arihantlink.com/premium-desert-safari",
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
      {"@type": "ListItem", "position": 3, "name": "Premium Evening Safari", "item": "https://arihantlink.com/premium-desert-safari"}
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
                <p class="mb-0 fw-bold">30-Min Dune Bash</p>
                <small class="text-muted">Lehbab Red Dunes</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-snowflake fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">AC Sitting</p>
                <small class="text-muted">Less Crowded</small>
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
                    <h2 class="h4 mb-2">Premium Evening Desert Safari Dubai – Lehbab Red Dunes</h2>
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-primary"><strong>Dubai's most exclusive desert camp experience — at the legendary Lehbab Red Dunes.</strong> The Premium Evening Desert Safari is not just an upgrade — it is an entirely different experience at a completely separate, less-crowded camp with unique features unavailable at Standard or VIP safaris. Chosen by discerning travellers, Indian families seeking Jain meals, and anyone who wants the very best of the Dubai desert.</p>

                    <p>Your evening begins at <strong>2:30 PM</strong> with a 4x4 pickup from your hotel. After an optional ATV/Quad bike stop (additional cost), you transfer to a powerful <strong>Land Cruiser</strong> for the star feature — a full <strong>30 minutes of dune bashing at the famous Lehbab Red Dunes</strong>. These are the most dramatic, photogenic dunes in Dubai: towering, rust-coloured, and significantly more thrilling than the dunes used for standard safaris. Longer dune bashing time means more adrenaline, more dune climbs, and more breathtaking moments.</p>

                    <p>Upon arriving at the <strong>Premium Camp</strong> — a completely different location from Standard and VIP camps — you will immediately notice the difference. The camp is <strong>significantly less crowded</strong>, giving you a more peaceful, personal atmosphere. Step inside and enjoy <strong>air-conditioned indoor seating</strong>, a welcome relief during warmer months. The camp is beautifully lit, tastefully decorated, and designed to offer an elevated desert experience.</p>

                    <p><strong>Premium Dining — including dedicated Jain meals:</strong> The centrepiece of the Premium Safari is its outstanding <strong>International Buffet Dinner</strong> featuring Indian, Continental, and Arabic cuisine — freshly prepared and generously spread. Most importantly, a <strong>fully dedicated Jain food section</strong> is available, prepared completely separately using ingredients with <strong>no onion, no garlic, and no root vegetables</strong> in line with strict Jain dietary principles. Pure vegetarian options are abundant throughout the buffet. Simply inform us at the time of booking and your dietary needs will be taken care of with the utmost care.</p>

                    <p>After dinner, enjoy the same spectacular live cultural shows that make any desert safari special: the electrifying <strong>Fire Show</strong>, the meditative <strong>Tanoura dance</strong>, and the graceful <strong>Belly Dance</strong> — all performed under the open desert sky. Time is also available for a <strong>camel ride, unlimited sandboarding, and henna designs</strong> for the ladies. Your driver returns you comfortably to your hotel by approximately 9:00 PM.</p>

                    <p>The Premium Desert Safari is especially popular with <strong>Indian families and groups</strong> who value authentic Jain and vegetarian dining, a quieter environment, and the best possible dune bashing experience. If you are visiting Dubai once and want to make it count — this is the one to choose.</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>30-Min Dune
                                    Bashing</strong> (Red Dunes)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Land Cruiser Pickup
                                    & Drop</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>AC Sitting
                                    Area</strong> (Premium Camp)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Jain & International
                                    Buffet</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Camel Riding &
                                    Sandboarding</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Live Entertainment
                                    Shows</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Quad Biking (Optional)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Alcoholic Beverages</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Private Table Service</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Personal Gratuities</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book Premium Safari</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid var(--primary);">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 199</h2>
                                    <p class="mb-0 text-muted small">≈ ₹4,600 per person</p>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-danger text-white">Best Seller</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="mb-2"><i class="fas fa-check text-success me-2"></i>Jain Food Available</p>
                                <p class="mb-2"><i class="fas fa-check text-success me-2"></i>AC Luxury Camp</p>
                                <p class="mb-2"><i class="fas fa-check text-success me-2"></i>30-Min Dune Bashing</p>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I'm interested in Premium Desert Safari"
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
    <div class="container py-2">
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
                                <span class="badge bg-primary me-2">02:30 PM</span> <strong>Pickup:</strong> Doorstep
                                pickup in a 4x4 Land Cruiser.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">03:45 PM</span> <strong>Red Dunes Action:</strong>
                                30 minutes of thrilling dune bashing at Lehbab.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">05:00 PM</span> <strong>Premium Camp
                                    Arrival:</strong> Welcome drinks and AC seating at our exclusive camp.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">07:00 PM</span> <strong>Dinner & Shows:</strong>
                                Live shows with International & Jain buffet dinner.
                            </div>
                            <div class="timeline-item-compact mb-3">
                                <span class="badge bg-primary me-2">09:00 PM</span> <strong>Drop-off:</strong> Return
                                journey back to your hotel/residence.
                            </div>
                        </div>
                    </div>

                    <!-- Guidelines Tab -->
                    <div class="tab-pane fade" id="pills-info" role="tabpanel">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-briefcase text-primary me-2"></i>What to Bring</h5>
                                <ul class="mb-0 small">
                                    <li>Sunscreen & Sunglasses</li>
                                    <li>Camera/Smartphone</li>
                                    <li>Light jacket for winter months</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold"><i class="fas fa-hand-holding-heart text-primary me-2"></i>Safety
                                </h5>
                                <ul class="mb-0 small">
                                    <li>Not for pregnant women</li>
                                    <li>Not for back/heart patients</li>
                                    <li>AC area available for comfort</li>
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
                                        Is Jain food guaranteed at the Premium Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes, absolutely. Our Premium camp has a fully dedicated Jain food section prepared completely separately from non-vegetarian food. Jain meals are cooked without onion, garlic, or root vegetables in accordance with strict Jain dietary guidelines. Please inform us at the time of booking so we can confirm the arrangement for your group.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq2">
                                        How is the AC seating area at the Premium Camp?
                                    </button>
                                </h2>
                                <div id="tabfaq2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The Premium Camp features an enclosed, air-conditioned indoor seating area — a real comfort advantage, especially during the warmer months (April to October). Guests can freely move between the outdoor areas for activities and shows, and retreat indoors to the cool, comfortable AC seating for dinner and relaxation.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq3">
                                        Why is Lehbab Red Dunes better than regular Dubai desert dunes?
                                    </button>
                                </h2>
                                <div id="tabfaq3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The Lehbab Red Dunes (also known as Big Red) are some of the tallest and most dramatic dunes in the UAE. Their distinctive reddish-orange colour makes for stunning photography and a much more thrilling dune bashing experience. The 30-minute duration (vs 20 minutes for Standard/VIP) means you get significantly more time on the dunes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq4">
                                        What cuisines are included in the International Buffet?
                                    </button>
                                </h2>
                                <div id="tabfaq4" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The Premium buffet includes a wide spread of Indian (curries, dal, rice, roti), Continental (grilled items, salads, pasta), and Arabic (mezze, grills, hummus, pita) dishes. A dedicated Jain section and comprehensive pure vegetarian options are maintained separately. The buffet is generously stocked and frequently replenished throughout the evening.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq5">
                                        How crowded is the Premium Camp compared to Standard?
                                    </button>
                                </h2>
                                <div id="tabfaq5" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        The Premium Camp accommodates significantly fewer guests than the Standard camp, giving you a more exclusive and personal atmosphere. You will have more space at the buffet, shorter queues, better views of the entertainment shows, and a generally more relaxed experience — much closer to a private event feel.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq6">
                                        Is the Premium Safari suitable for senior citizens?
                                    </button>
                                </h2>
                                <div id="tabfaq6" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes — the AC indoor seating, less crowded environment, and comfortable facilities make Premium an excellent choice for senior guests. Dune bashing can be skipped or done at reduced intensity on request. Seniors who prefer to skip bashing can go directly to the camp for dinner and shows. Please let us know in advance and we will arrange a comfortable experience.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-2 px-0 bg-transparent" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#tabfaq7">
                                        Is hotel pickup included in the Premium Safari?
                                    </button>
                                </h2>
                                <div id="tabfaq7" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordionTabs">
                                    <div class="accordion-body px-0 py-2 small">
                                        Yes, shared 4x4 Land Cruiser pickup and drop-off from your hotel, apartment, or residence anywhere in Dubai is included. Pickup is at approximately 2:30 PM and return is by 9:00–9:30 PM. Private vehicle upgrades are available on request.
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

<!-- FAQPage Schema Start -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Is Jain food guaranteed at the Premium Desert Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, absolutely. The Premium camp has a fully dedicated Jain food section prepared completely separately from non-vegetarian food. Jain meals are cooked without onion, garlic, or root vegetables in accordance with strict Jain dietary guidelines."
            }
        },
        {
            "@type": "Question",
            "name": "How is the AC seating area at the Premium Camp?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Premium Camp features an enclosed, air-conditioned indoor seating area — a real comfort advantage especially during warmer months (April to October). Guests can freely move between outdoor areas for activities and retreat indoors for dinner and relaxation."
            }
        },
        {
            "@type": "Question",
            "name": "Why is Lehbab Red Dunes better than regular Dubai desert dunes?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Lehbab Red Dunes (Big Red) are some of the tallest and most dramatic dunes in the UAE. Their distinctive reddish-orange colour makes for stunning photography and a much more thrilling dune bashing experience. The 30-minute duration vs 20 minutes for Standard/VIP means significantly more time on the dunes."
            }
        },
        {
            "@type": "Question",
            "name": "What cuisines are included in the International Buffet at the Premium Desert Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Premium buffet includes Indian (curries, dal, rice, roti), Continental (grilled items, salads, pasta), and Arabic (mezze, grills, hummus, pita) dishes. A dedicated Jain section and comprehensive pure vegetarian options are maintained separately."
            }
        },
        {
            "@type": "Question",
            "name": "How crowded is the Premium Camp compared to Standard?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Premium Camp accommodates significantly fewer guests than the Standard camp, giving a more exclusive atmosphere with more space at the buffet, shorter queues, better views of entertainment, and a generally more relaxed experience."
            }
        },
        {
            "@type": "Question",
            "name": "Is the Premium Safari suitable for senior citizens?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The AC indoor seating, less crowded environment, and comfortable facilities make Premium an excellent choice for senior guests. Dune bashing can be skipped or done at reduced intensity on request."
            }
        },
        {
            "@type": "Question",
            "name": "Is hotel pickup included in the Premium Safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, shared 4x4 Land Cruiser pickup and drop-off from your hotel, apartment, or residence anywhere in Dubai is included. Pickup is approximately 2:30 PM and return by 9:00-9:30 PM."
            }
        }
    ]
}
</script>
<!-- FAQPage Schema End -->

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
            <h2 class="mb-2 h4">Premium Experience in Pictures</h2>
        </div>

        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/premiumcamp/Premium-desert-camp.webp" class="card-img-top" alt="Premium Camp"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/premiumcamp/Desert-Safari-Premium-SandDuning-1.webp" class="card-img-top"
                        alt="Red Dunes" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/premiumcamp/Desert-Safari-Premium-Stargazing.webp" class="card-img-top"
                        alt="Stargazing" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/premiumcamp/premium-camp-seating.webp" class="card-img-top" alt="AC Seating"
                        style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/premiumcamp/Desert-Safari-Premium-food.webp" class="card-img-top"
                        alt="Jain Food" style="height: 120px; object-fit: cover;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm overflow-hidden h-100 gallery-thumb">
                    <img src="img/safari/premiumcamp/Desert-Safari-Premium-tanura-dance.webp" class="card-img-top"
                        alt="Live Shows" style="height: 120px; object-fit: cover;">
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
            <h2>What the Premium Safari at Lehbab Red Dunes actually feels like</h2>
            <p>The drive out is longer (around 60 minutes) because Lehbab is deeper into the desert, but the payoff is real: the dunes here are taller and the sand has the rich orange-red colour you see on Dubai postcards. Dune bashing is extended to about thirty minutes, which is noticeable. The camp is the genuine upgrade — an enclosed AC seating area (a relief in the warmer months) with proper chairs, an international buffet (Continental, Italian, Indian) alongside the Jain counter, and far fewer guests overall, so the cultural shows feel personal rather than production-line. We recommend Premium most often for families travelling with seniors and for couples celebrating an anniversary or birthday.</p>
        </div>
    </div>
</section>

<?php include "includes/safari-pickup-zones.php"; ?>
<?php include "includes/safari-fitness.php"; ?>
<?php $currentSafariSlug = "premium-desert-safari"; include "includes/safari-cross-sell.php"; ?>
<?php include "includes/mobile-sticky-cta.php"; ?>
<?php include 'includes/footer.php'; ?>