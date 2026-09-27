<?php
// ─────────────────────────────────────────────
// Page SEO Variables
// ─────────────────────────────────────────────
$pageTitle       = "Rent A Car With Driver In Dubai | Chauffeur Service UAE | Arihant Travels";
$pageDescription = "Hire a car with driver in Dubai — sedan, SUV & minivan. Professional chauffeur service for airport transfers, city tours…";
$pageKeywords    = "rent a car with driver dubai, car with driver dubai, chauffeur service dubai, airport transfer dubai, city tour dubai, dubai to abu dhabi transfer, hire car with driver uae, private chauffeur dubai, sedan hire dubai, suv hire with driver dubai";
$pageCanonical   = "https://arihantlink.com/rent-a-car-with-driver-dubai";
$currentPage     = "rent-a-car-with-driver-dubai";

// ─────────────────────────────────────────────
// Breadcrumb Variables
// ─────────────────────────────────────────────
$pageHeading            = "Rent A Car With Driver In Dubai";
$breadcrumbCategory     = "Dubai Services";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg           = "img/transport/herobanner-chauffer.avif";
$breadcrumbOverlay      = true;

// ─────────────────────────────────────────────
// Fleet Data
// ─────────────────────────────────────────────
$fleet = [
    // ── Standard Segment ──
    [
        "id"           => "nissan-altima",
        "name"         => "Nissan Altima",
        "type"         => "Sedan",
        "seats"        => 4,
        "segment"      => "standard",
        "segment_label"=> "Standard",
        "image"        => "img/transport/nisaan-altima-fleet.jpeg",
        "badge_class"  => "bg-secondary",
        "features"     => ["Air Conditioning", "Professional Chauffeur", "Bottled Water", "Phone Charger"],
        "pricing"      => [
            "full_dubai"    => 500,
            "full_abudhabi" => 600,
            "half_dubai"    => 350,
            "airport"       => 250,
        ],
    ],
    [
        "id"           => "volkswagen-teramont",
        "name"         => "Volkswagen Teramont",
        "type"         => "SUV",
        "seats"        => 7,
        "segment"      => "standard",
        "segment_label"=> "Standard",
        "image"        => "img/transport/volksewagen-teramont-fleet.jpg",
        "badge_class"  => "bg-secondary",
        "features"     => ["7-Seater Spacious Interior", "Air Conditioning", "Professional Chauffeur", "Ample Boot Space"],
        "pricing"      => [
            "full_dubai"    => 550,
            "full_abudhabi" => 650,
            "half_dubai"    => 350,
            "airport"       => 250,
        ],
    ],
    [
        "id"           => "jeep-grand-cherokee",
        "name"         => "Jeep Grand Cherokee",
        "type"         => "SUV",
        "seats"        => 5,
        "segment"      => "standard",
        "segment_label"=> "Standard",
        "image"        => "img/transport/jeep-grand-cheerokee-fleet.webp",
        "badge_class"  => "bg-secondary",
        "features"     => ["Powerful SUV", "Air Conditioning", "Professional Chauffeur", "Leather Seats"],
        "pricing"      => [
            "full_dubai"    => 550,
            "full_abudhabi" => 650,
            "half_dubai"    => 350,
            "airport"       => 250,
        ],
    ],
    [
        "id"           => "nissan-patrol",
        "name"         => "Nissan Patrol",
        "type"         => "SUV",
        "seats"        => 7,
        "segment"      => "standard",
        "segment_label"=> "Standard",
        "image"        => "img/transport/nissan-patrol-fleet.jpeg",
        "badge_class"  => "bg-secondary",
        "features"     => ["7-Seater Premium SUV", "Air Conditioning", "Professional Chauffeur", "Ideal for Desert Trips"],
        "pricing"      => [
            "full_dubai"    => 700,
            "full_abudhabi" => 800,
            "half_dubai"    => 550,
            "airport"       => 300,
        ],
    ],
    [
        "id"           => "land-cruiser",
        "name"         => "Toyota Land Cruiser",
        "type"         => "SUV",
        "seats"        => 7,
        "segment"      => "standard",
        "segment_label"=> "Standard",
        "image"        => "img/transport/Land-Cruiser-fleet.webp",
        "badge_class"  => "bg-secondary",
        "features"     => ["7-Seater Iconic SUV", "Air Conditioning", "Professional Chauffeur", "All-Terrain Capability"],
        "pricing"      => [
            "full_dubai"    => 700,
            "full_abudhabi" => 800,
            "half_dubai"    => 550,
            "airport"       => 300,
        ],
    ],
    [
        "id"           => "hyundai-staria",
        "name"         => "Hyundai Staria",
        "type"         => "MPV",
        "seats"        => 9,
        "segment"      => "standard",
        "segment_label"=> "Standard",
        "image"        => "img/transport/hundai-staria-fleet.jpg",
        "badge_class"  => "bg-secondary",
        "features"     => ["9-Seater Minivan", "Wide Sliding Doors", "Professional Chauffeur", "Group Travel Ideal"],
        "pricing"      => [
            "full_dubai"    => 600,
            "full_abudhabi" => 700,
            "half_dubai"    => 500,
            "airport"       => 300,
        ],
    ],
    [
        "id"           => "toyota-hiace",
        "name"         => "Toyota Hiace",
        "type"         => "Minivan",
        "seats"        => 12,
        "segment"      => "standard",
        "segment_label"=> "Standard",
        "image"        => "img/transport/Toyota-Hiace-fleet.webp",
        "badge_class"  => "bg-secondary",
        "features"     => ["12-Seater Capacity", "Air Conditioning", "Professional Chauffeur", "Large Group Transfers"],
        "pricing"      => [
            "full_dubai"    => 600,
            "full_abudhabi" => 700,
            "half_dubai"    => 500,
            "airport"       => 300,
        ],
    ],
    // ── Luxury Segment ──
    [
        "id"           => "lexus-es",
        "name"         => "Lexus ES",
        "type"         => "Sedan",
        "seats"        => 4,
        "segment"      => "luxury",
        "segment_label"=> "Luxury",
        "image"        => "img/transport/Lexus-ES-Fleet.webp",
        "badge_class"  => "bg-warning text-dark",
        "features"     => ["Premium Leather Seats", "Noise-Cancelling Cabin", "Professional Chauffeur", "Bottled Water & Wifi"],
        "pricing"      => [
            "full_dubai"    => 900,
            "full_abudhabi" => 900,
            "half_dubai"    => 600,
            "airport"       => 600,
        ],
    ],
    [
        "id"           => "bmw-735li",
        "name"         => "BMW 735 Li",
        "type"         => "Sedan",
        "seats"        => 4,
        "segment"      => "luxury",
        "segment_label"=> "Luxury",
        "image"        => "img/transport/BMW-Li_Fleet.jpeg",
        "badge_class"  => "bg-warning text-dark",
        "features"     => ["2025 Model", "Executive Rear Lounge", "Professional Chauffeur", "Ambient Lighting & Panoramic Roof"],
        "pricing"      => [
            "full_dubai"    => 1700,
            "full_abudhabi" => 1700,
            "half_dubai"    => 900,
            "airport"       => 600,
        ],
    ],
    [
        "id"           => "mercedes-s-class",
        "name"         => "Mercedes S-Class",
        "type"         => "Sedan",
        "seats"        => 4,
        "segment"      => "luxury",
        "segment_label"=> "Luxury",
        "image"        => "img/transport/mercedes-benz-s-class-fleet.avif",
        "badge_class"  => "bg-dark",
        "features"     => ["Flagship Luxury Sedan", "Massaging Rear Seats", "Professional Chauffeur", "Burmester 4D Sound"],
        "pricing"      => [
            "full_dubai"    => 2100,
            "full_abudhabi" => 2100,
            "half_dubai"    => 1500,
            "airport"       => 1100,
        ],
    ],
    [
        "id"           => "mercedes-v-class",
        "name"         => "Mercedes V-Class",
        "type"         => "MPV",
        "seats"        => 7,
        "segment"      => "luxury",
        "segment_label"=> "Luxury",
        "image"        => "img/transport/Mercedes-v-class-fleet.jpg.avif",
        "badge_class"  => "bg-dark",
        "features"     => ["7-Seater Luxury MPV", "Conference Seating Available", "Professional Chauffeur", "Privacy Glass & Wi-Fi"],
        "pricing"      => [
            "full_dubai"    => 1600,
            "full_abudhabi" => 1600,
            "half_dubai"    => 800,
            "airport"       => 600,
        ],
    ],
    [
        "id"           => "mercedes-sprinter",
        "name"         => "Mercedes Sprinter",
        "type"         => "Minivan",
        "seats"        => 16,
        "segment"      => "luxury",
        "segment_label"=> "Luxury",
        "image"        => "img/transport/Mercedes-Sprinter-Van-fleet.webp",
        "badge_class"  => "bg-dark",
        "features"     => ["16-Seater VIP Van", "Individual Reclining Seats", "Professional Chauffeur", "Ideal for MICE & Groups"],
        "pricing"      => [
            "full_dubai"    => 2400,
            "full_abudhabi" => 2400,
            "half_dubai"    => 1600,
            "airport"       => 1200,
        ],
    ],
];

// ─────────────────────────────────────────────
// Schema Markup
// ─────────────────────────────────────────────
$listItems = [];
foreach ($fleet as $i => $car) {
    $listItems[] = [
        "@type"    => "ListItem",
        "position" => $i + 1,
        "item"     => [
            "@type"       => "Product",
            "name"        => $car['name'] . " With Driver Dubai",
            "image"       => "https://arihantlink.com/" . $car['image'],
            "brand"       => ["@type" => "Brand", "name" => "Arihant Travels"],
            "offers"      => [
                "@type"         => "Offer",
                "priceCurrency" => "AED",
                "price"         => $car['pricing']['full_dubai'],
                "availability"  => "https://schema.org/InStock",
                "seller"        => ["@type" => "Organization", "name" => "Arihant Travels", "url" => "https://arihantlink.com"],
            ],
        ],
    ];
}

$schemaMarkup = '<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Rent A Car With Driver Dubai – Arihant Travels",
    "description": "' . addslashes($pageDescription) . '",
    "itemListElement": ' . json_encode($listItems, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does it cost to rent a car with driver in Dubai?",
        "acceptedAnswer": {"@type": "Answer", "text": "Car with driver rates in Dubai start from AED 500 for a full day (sedan) and AED 250 for an airport transfer. Luxury vehicles like the Mercedes S-Class start from AED 2,100 per day."}
      },
      {
        "@type": "Question",
        "name": "Can I hire a car with driver from Dubai to Abu Dhabi?",
        "acceptedAnswer": {"@type": "Answer", "text": "Yes. Arihant Travels offers full-day chauffeured car hire for Abu Dhabi. Rates start from AED 600 for a sedan and go up to AED 2,400 for a Mercedes Sprinter."}
      },
      {
        "@type": "Question",
        "name": "What vehicles are available for rent with driver in Dubai?",
        "acceptedAnswer": {"@type": "Answer", "text": "We offer sedans (Nissan Altima, BMW 735Li, Mercedes S-Class, Lexus ES), SUVs (Volkswagen Teramont, Nissan Patrol, Land Cruiser, Jeep Grand Cherokee), MPVs (Hyundai Staria, Mercedes V-Class), and minivans (Toyota Hiace, Mercedes Sprinter)."}
      },
      {
        "@type": "Question",
        "name": "Do you provide airport transfer service in Dubai?",
        "acceptedAnswer": {"@type": "Answer", "text": "Yes. We cover Dubai Airport, Abu Dhabi Airport, Sharjah Airport, RAK Airport, Umm Al Quwwain Airport and Al Ain Airport. Our chauffeurs track your flight and adjust for any delays."}
      }
    ]
  }
]
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- ══════════════════════════════════════════════════════════
     PAGE STYLES
════════════════════════════════════════════════════════════ -->
<style>
/* ── Fleet Cards ── */
.fleet-card {
    border-radius: 14px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #e8ecf0;
}
.fleet-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(19,53,123,0.12);
}
.fleet-card-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.fleet-card:hover .fleet-card-img {
    transform: scale(1.04);
}
.fleet-card-img-wrap {
    overflow: hidden;
    position: relative;
}
.fleet-segment-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    padding: 4px 10px;
    border-radius: 20px;
}
.price-pill {
    background: #f0f4ff;
    border-radius: 8px;
    padding: 8px 12px;
    text-align: center;
    flex: 1;
}
.price-pill .amount {
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--primary);
    display: block;
}
.price-pill .label {
    font-size: 0.68rem;
    color: #888;
    display: block;
    line-height: 1.2;
}
.price-pill.luxury .amount {
    color: #b8860b;
}
/* ── Service Cards (full-width row layout) ── */
.service-row {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(19,53,123,0.07);
    transition: box-shadow 0.3s, transform 0.3s;
}
.service-row:hover {
    box-shadow: 0 12px 36px rgba(19,53,123,0.13);
    transform: translateY(-4px);
}
.service-row-img {
    width: 100%;
    height: 100%;
    min-height: 260px;
    object-fit: cover;
    display: block;
}
.service-row-img-wrap {
    position: relative;
    overflow: hidden;
    min-height: 260px;
}
.service-row-img-wrap img {
    transition: transform 0.45s ease;
}
.service-row:hover .service-row-img-wrap img {
    transform: scale(1.06);
}
.service-row-icon {
    width: 52px;
    height: 52px;
    background: var(--primary);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.35rem;
    color: #fff;
    flex-shrink: 0;
}
.service-row-body {
    padding: 36px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
}
@media (max-width: 767.98px) {
    .service-row-body { padding: 24px 20px; }
    .service-row-img-wrap { min-height: 200px; }
}
/* Airport tags */
.airport-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f0f4ff;
    border: 1px solid #d0daf5;
    border-radius: 20px;
    padding: 4px 12px;
    font-size: 0.82rem;
    color: var(--primary);
    font-weight: 500;
    transition: background 0.2s, color 0.2s;
}
.airport-tag:hover {
    background: var(--primary);
    color: #fff;
    text-decoration: none;
}
/* ── Booking Form ── */
.booking-form-wrap {
    background: linear-gradient(135deg, var(--primary) 0%, #1a4fa0 100%);
    border-radius: 20px;
    padding: 40px;
}
.booking-form-wrap .form-label {
    color: rgba(255,255,255,0.9);
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 5px;
    display: block;
}
.booking-form-wrap .form-control,
.booking-form-wrap .form-select {
    border-radius: 10px;
    border: 2px solid rgba(255,255,255,0.2);
    background: #fff;
    color: #333;
    padding: 10px 14px;
    font-size: 0.9rem;
}
.booking-form-wrap .form-control::placeholder {
    color: #aaa;
}
.booking-form-wrap .form-control:focus,
.booking-form-wrap .form-select:focus {
    background: #fff;
    border-color: #ffc107;
    box-shadow: 0 0 0 3px rgba(255,193,7,0.25);
    color: #333;
    outline: none;
}
.booking-form-wrap .form-select option {
    color: #333;
    background: #fff;
}
.booking-form-wrap textarea.form-control {
    resize: vertical;
    min-height: 70px;
}
/* date/time input calendar icon colour fix */
.booking-form-wrap input[type="date"],
.booking-form-wrap input[type="time"] {
    color-scheme: light;
}
/* ── Why Us feature icons ── */
.why-card {
    border-radius: 14px;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 1px solid #eef0f5;
}
.why-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(19,53,123,0.1);
}
/* ── Segment divider ── */
.segment-divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin: 48px 0 32px;
}
.segment-divider::before,
.segment-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #dde3f0;
}
.segment-divider h3 {
    white-space: nowrap;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary);
    margin: 0;
    padding: 6px 20px;
    background: #f0f4ff;
    border-radius: 30px;
    border: 1px solid #d0daf5;
}
/* ── Fleet filter pills ── */
.fleet-filter .btn {
    border-radius: 30px;
    font-size: 0.85rem;
    padding: 6px 18px;
    transition: all 0.2s;
}
/* ── Sticky booking CTA (mobile) ── */
@media (max-width: 767.98px) {
    .booking-form-wrap { padding: 24px 18px; }
    .price-pill .amount { font-size: 0.9rem; }
}
</style>

<!-- ══════════════════════════════════════════════════════════
     INTRO / STATS SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 840px;">
            <h5 class="section-title px-3">Professional Chauffeur Service</h5>
            <h2 class="mb-4">Your Private Driver, Anywhere in the UAE</h2>
            <p class="text-muted mb-3">From sleek sedans to spacious minivans, Arihant Travels's car-with-driver service covers every journey — airport transfers, full-day city tours, desert safaris, Abu Dhabi day trips and intercity travel. All vehicles come with professional, courteous chauffeurs who know the UAE roads inside out.</p>
            <p class="text-muted mb-0">Choose your vehicle, pick a package, and we'll handle the rest — flight tracking, luggage assistance, and on-time arrivals, guaranteed.</p>
        </div>
        <!-- Quick Stats -->
        <div class="row g-3 justify-content-center">
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-primary text-white rounded shadow-sm h-100">
                    <i class="fas fa-car-side fa-2x mb-2"></i>
                    <h5 class="mb-0 text-white">12+ Vehicles</h5>
                    <small>Ready to Dispatch</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-white rounded shadow-sm border h-100">
                    <i class="fas fa-user-tie fa-2x text-primary mb-2"></i>
                    <h5 class="mb-0">Expert Chauffeurs</h5>
                    <small class="text-muted">Trained & Licensed</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-white rounded shadow-sm border h-100">
                    <i class="fas fa-plane-arrival fa-2x text-primary mb-2"></i>
                    <h5 class="mb-0">6 Airports</h5>
                    <small class="text-muted">All UAE Covered</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-white rounded shadow-sm border h-100">
                    <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                    <h5 class="mb-0">24/7 Available</h5>
                    <small class="text-muted">WhatsApp Booking</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     OUR SERVICES SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-light" id="our-services">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">What We Offer</h5>
            <h2 class="mb-3">Our Chauffeur-Driven Car Services</h2>
            <p class="text-muted">Tailored transport solutions for every traveller — business or leisure, solo or group.</p>
        </div>

        <div class="d-flex flex-column gap-4">

            <!-- 1. Chauffeur Service — Image LEFT -->
            <div class="service-row">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="service-row-img-wrap">
                            <img src="img/transport/Chauffeur-Service.jpg"
                                 alt="Chauffeur Service Dubai"
                                 class="service-row-img">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-row-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="service-row-icon"><i class="fas fa-user-tie"></i></div>
                                <h3 class="mb-0">Chauffeur Service</h3>
                            </div>
                            <p class="text-muted mb-3">Because we value your time and appreciate how important it is to make the right impression, our rent-a-car with driver service has been tailored specifically for the most discerning clients. With a fleet of high-end vehicles at your disposal and professional chauffeurs trained in customer service and hospitality, you can be confident you'll arrive on schedule and in style for every meeting, conference, tour and adventure.</p>
                            <a href="#book-now" class="btn btn-primary rounded-pill px-4">
                                <i class="fas fa-calendar-check me-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Airport Transfer — Image RIGHT -->
            <div class="service-row">
                <div class="row g-0 flex-md-row-reverse">
                    <div class="col-md-5">
                        <div class="service-row-img-wrap">
                            <img src="img/transport/Airport-Transfer-Service.jpg"
                                 alt="Airport Transfer Dubai"
                                 class="service-row-img">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-row-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="service-row-icon"><i class="fas fa-plane-arrival"></i></div>
                                <h3 class="mb-0">Airport Transfer</h3>
                            </div>
                            <p class="text-muted mb-3">Our chauffeur service in the UAE guarantees you a comfortable, timely and stress-free transfer to your destination. Say goodbye to public transport woes, long taxi queues and parking challenges. Have your own private chauffeur track your flight schedule and adjust for any delays, assist you with your luggage, navigate the busy streets on your behalf and ensure an all-out smooth arrival or departure experience.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="airport-tag"><i class="fas fa-plane-departure"></i> Abu Dhabi Airport</span>
                                <span class="airport-tag"><i class="fas fa-plane-departure"></i> Umm Al Quwwain Airport</span>
                                <span class="airport-tag"><i class="fas fa-plane-departure"></i> Dubai Airport</span>
                                <span class="airport-tag"><i class="fas fa-plane-departure"></i> Sharjah Airport</span>
                                <span class="airport-tag"><i class="fas fa-plane-departure"></i> RAK Airport</span>
                                <span class="airport-tag"><i class="fas fa-plane-departure"></i> Al Ain Airport</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. City Tours — Image LEFT -->
            <div class="service-row">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="service-row-img-wrap">
                            <img src="img/transport/city-tour-service.jpg"
                                 alt="Dubai City Tour With Driver"
                                 class="service-row-img">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-row-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="service-row-icon"><i class="fas fa-city"></i></div>
                                <h3 class="mb-0">City Tours</h3>
                            </div>
                            <p class="text-muted mb-3">How would you like to have your own personal driver who knows the UAE like the back of their hand ushering you around, and all you have to do is sit back and relax? That's our point-to-point luxury chauffeur service in the UAE in a nutshell, turning every shopping trip, sightseeing adventure or regular city commute into a lavish experience.</p>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="airport-tag"><i class="fas fa-map-marker-alt"></i> Dubai City Tours</span>
                                <span class="airport-tag"><i class="fas fa-map-marker-alt"></i> Abu Dhabi City Tours</span>
                            </div>
                            <a href="#book-now" class="btn btn-primary rounded-pill px-4">
                                <i class="fas fa-calendar-check me-2"></i>Book a City Tour
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. City-to-City Transfer — Image RIGHT -->
            <div class="service-row">
                <div class="row g-0 flex-md-row-reverse">
                    <div class="col-md-5">
                        <div class="service-row-img-wrap">
                            <img src="img/transport/city-city-transfer.jpg"
                                 alt="City To City Transfer UAE"
                                 class="service-row-img">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-row-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="service-row-icon"><i class="fas fa-route"></i></div>
                                <h3 class="mb-0">City-To-City Transfer</h3>
                            </div>
                            <p class="text-muted mb-3">Long-distance travel across the UAE requires comfort, safety, and reliability. Car with Drivers provides city-to-city transfers from Dubai to Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, and Fujairah. These premium intercity rides are ideal for families, business trips, airport connections, and leisure travel. Our chauffeurs are experienced in long-route driving, ensuring a smooth and safe journey with minimal stress.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="airport-tag"><i class="fas fa-arrow-right"></i> Dubai → Abu Dhabi</span>
                                <span class="airport-tag"><i class="fas fa-arrow-right"></i> Dubai → Sharjah</span>
                                <span class="airport-tag"><i class="fas fa-arrow-right"></i> Dubai → RAK</span>
                                <span class="airport-tag"><i class="fas fa-arrow-right"></i> Dubai → Fujairah</span>
                                <span class="airport-tag"><i class="fas fa-arrow-right"></i> Dubai → Ajman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Limousine Service — Image LEFT -->
            <div class="service-row">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="service-row-img-wrap">
                            <img src="img/transport/limousine-service.jpg"
                                 alt="Limousine Service Dubai"
                                 class="service-row-img">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-row-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="service-row-icon"><i class="fas fa-star"></i></div>
                                <h3 class="mb-0">Limousine Service Dubai</h3>
                            </div>
                            <p class="text-muted mb-3">For the ultimate statement of luxury, step up to our dedicated limousine service. Whether it's a birthday bash, wedding transfer, VIP corporate arrival or a glamorous night out — our stretch limousines and luxury flagship sedans deliver five-star elegance from door to door across Dubai and Sharjah.</p>
                            <a href="/dubai-limo-ride" class="btn btn-primary rounded-pill px-4">
                                <i class="fas fa-arrow-right me-2"></i>View Limousine Fleet
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. Desert Safari — Image RIGHT -->
            <div class="service-row">
                <div class="row g-0 flex-md-row-reverse">
                    <div class="col-md-5">
                        <div class="service-row-img-wrap">
                            <img src="img/transport/desert-safari-service.webp"
                                 alt="Desert Safari Transfer Dubai"
                                 class="service-row-img">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="service-row-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="service-row-icon"><i class="fas fa-sun"></i></div>
                                <h3 class="mb-0">Desert Safari In Dubai</h3>
                            </div>
                            <p class="text-muted mb-3">The desert is one of Dubai's most iconic attractions. Travelers love desert safaris, but reaching the desert safely and comfortably is essential. Car with Drivers provides chauffeured transfers to and from the safari meeting points, ensuring a smooth journey in spacious SUVs. For families and seniors, we also offer a no-dune-bashing transfer option, which provides a calm and relaxed ride. Whether it's a morning, evening, or overnight safari, our chauffeurs ensure punctual arrival and pickup for a worry-free experience.</p>
                            <a href="#book-now" class="btn btn-primary rounded-pill px-4">
                                <i class="fas fa-calendar-check me-2"></i>Book Safari Transfer
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     BOOKING FORM SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-white" id="book-now">
    <div class="container py-3">
        <div class="row g-5 align-items-center">

            <!-- Left: Description -->
            <div class="col-lg-5">
                <h5 class="section-title px-3">Book Online</h5>
                <h2 class="mb-4">Reserve Your Chauffeur in Minutes</h2>
                <p class="text-muted mb-4">Fill in the form and our team will confirm availability and pricing via WhatsApp — usually within 15 minutes. No hidden fees. No surprises.</p>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-start gap-3">
                        <i class="fas fa-check-circle text-success mt-1 fa-lg"></i>
                        <span><strong>Full Day Dubai</strong> — 8-10 hours of chauffeur service within Dubai</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start gap-3">
                        <i class="fas fa-check-circle text-success mt-1 fa-lg"></i>
                        <span><strong>Full Day Abu Dhabi</strong> — includes Dubai–Abu Dhabi–Dubai travel</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start gap-3">
                        <i class="fas fa-check-circle text-success mt-1 fa-lg"></i>
                        <span><strong>Half Day Dubai</strong> — 4-5 hours within Dubai</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start gap-3">
                        <i class="fas fa-check-circle text-success mt-1 fa-lg"></i>
                        <span><strong>Airport Transfer</strong> — one-way pick-up or drop-off</span>
                    </li>
                </ul>
                <div class="mt-4 p-3 bg-light rounded border">
                    <p class="mb-1 small fw-bold"><i class="fab fa-whatsapp text-success me-2"></i>Prefer to book on WhatsApp?</p>
                    <a href="https://wa.me/971585945007?text=Hi, I'd like to book a car with driver in Dubai" target="_blank" class="btn btn-success rounded-pill px-4 py-2 mt-1">
                        <i class="fab fa-whatsapp me-2"></i>Chat with Us
                    </a>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="col-lg-7">
                <div class="booking-form-wrap shadow-lg">
                    <h4 class="text-white mb-4 fw-bold"><i class="fas fa-calendar-check me-2"></i>Book Your Ride</h4>
                    <form id="carBookingForm" action="includes/send-email.php" method="POST">
                        <input type="hidden" name="form_type" value="car_with_driver">

                        <div class="row g-3">

                            <!-- Service Type -->
                            <div class="col-12">
                                <label class="form-label">Service Type <span class="text-danger">*</span></label>
                                <select name="service_type" id="serviceType" class="form-select" required onchange="handleServiceChange(this.value)">
                                    <option value="" disabled selected>Select Service</option>
                                    <option value="full_day_dubai">Full Day – Dubai (8–10 hrs)</option>
                                    <option value="full_day_abudhabi">Full Day – Abu Dhabi</option>
                                    <option value="half_day_dubai">Half Day – Dubai (4–5 hrs)</option>
                                    <option value="airport_transfer">Airport Transfer</option>
                                </select>
                            </div>

                            <!-- Vehicle Preference -->
                            <div class="col-md-6">
                                <label class="form-label">Vehicle Preference</label>
                                <select name="vehicle" class="form-select">
                                    <option value="" selected>No preference</option>
                                    <optgroup label="— Standard —">
                                        <option value="Nissan Altima">Nissan Altima (Sedan, 4 Pax)</option>
                                        <option value="Volkswagen Teramont">Volkswagen Teramont (SUV, 7 Pax)</option>
                                        <option value="Jeep Grand Cherokee">Jeep Grand Cherokee (SUV, 5 Pax)</option>
                                        <option value="Nissan Patrol">Nissan Patrol (SUV, 7 Pax)</option>
                                        <option value="Toyota Land Cruiser">Toyota Land Cruiser (SUV, 7 Pax)</option>
                                        <option value="Hyundai Staria">Hyundai Staria (MPV, 9 Pax)</option>
                                        <option value="Toyota Hiace">Toyota Hiace (Minivan, 12 Pax)</option>
                                    </optgroup>
                                    <optgroup label="— Luxury —">
                                        <option value="Lexus ES">Lexus ES (Sedan, 4 Pax)</option>
                                        <option value="BMW 735 Li">BMW 735 Li (Sedan, 4 Pax)</option>
                                        <option value="Mercedes S-Class">Mercedes S-Class (Sedan, 4 Pax)</option>
                                        <option value="Mercedes V-Class">Mercedes V-Class (MPV, 7 Pax)</option>
                                        <option value="Mercedes Sprinter">Mercedes Sprinter (Van, 16 Pax)</option>
                                    </optgroup>
                                </select>
                            </div>

                            <!-- Passengers -->
                            <div class="col-md-6">
                                <label class="form-label">Number of Passengers <span class="text-danger">*</span></label>
                                <select name="passengers" class="form-select" required>
                                    <option value="" disabled selected>Select</option>
                                    <?php for ($p = 1; $p <= 16; $p++): ?>
                                    <option value="<?= $p ?>"><?= $p ?> Passenger<?= $p > 1 ? 's' : '' ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <!-- Pickup Address -->
                            <div class="col-12">
                                <label class="form-label">Pickup Address / Location <span class="text-danger">*</span></label>
                                <input type="text" name="pickup_address" class="form-control" placeholder="Hotel name, area, or full address" required>
                            </div>

                            <!-- Dropoff Address (optional for non-airport) -->
                            <div class="col-12" id="dropoffWrap">
                                <label class="form-label">Drop-off Location <small class="opacity-75">(optional for full/half day)</small></label>
                                <input type="text" name="dropoff_address" class="form-control" placeholder="Final destination or leave blank for flexible">
                            </div>

                            <!-- Airport fields (shown for airport transfer) -->
                            <div class="col-12" id="airportWrap" style="display:none;">
                                <label class="form-label">Airport & Terminal <span class="text-danger">*</span></label>
                                <select name="airport" class="form-select">
                                    <option value="" disabled selected>Select Airport</option>
                                    <option value="Dubai International Airport (DXB)">Dubai International Airport (DXB)</option>
                                    <option value="Abu Dhabi International Airport (AUH)">Abu Dhabi International Airport (AUH)</option>
                                    <option value="Sharjah International Airport (SHJ)">Sharjah International Airport (SHJ)</option>
                                    <option value="Ras Al Khaimah Airport (RKT)">Ras Al Khaimah Airport (RKT)</option>
                                    <option value="Umm Al Quwwain Airport">Umm Al Quwwain Airport</option>
                                    <option value="Al Ain International Airport (AAN)">Al Ain International Airport (AAN)</option>
                                </select>
                            </div>

                            <!-- Flight Number (shown for airport transfer) -->
                            <div class="col-md-6" id="flightWrap" style="display:none;">
                                <label class="form-label">Flight Number</label>
                                <input type="text" name="flight_number" class="form-control" placeholder="e.g. EK 201">
                            </div>

                            <!-- Pickup Date -->
                            <div class="col-md-6">
                                <label class="form-label">Pickup Date <span class="text-danger">*</span></label>
                                <input type="date" name="pickup_date" class="form-control" required min="<?= date('Y-m-d') ?>">
                            </div>

                            <!-- Pickup Time -->
                            <div class="col-md-6">
                                <label class="form-label">Pickup Time <span class="text-danger">*</span></label>
                                <input type="time" name="pickup_time" class="form-control" required>
                            </div>

                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Full name" required>
                            </div>

                            <!-- Phone / WhatsApp -->
                            <div class="col-md-6">
                                <label class="form-label">WhatsApp / Phone <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" class="form-control" placeholder="+971 50 000 0000" required>
                            </div>

                            <!-- Special Requests -->
                            <div class="col-12">
                                <label class="form-label">Special Requests <small class="opacity-75">(optional)</small></label>
                                <textarea name="special_requests" class="form-control" rows="2" placeholder="Child seat, extra stops, baby carrier, etc."></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-warning fw-bold w-100 py-3 rounded-pill" style="font-size:1.05rem;">
                                    <i class="fas fa-paper-plane me-2"></i>Send Booking Request
                                </button>
                                <p class="text-center mt-2 mb-0" style="color:rgba(255,255,255,0.65); font-size:0.8rem;">
                                    <i class="fas fa-lock me-1"></i>Your details are safe. We'll confirm via WhatsApp within 15 minutes.
                                </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     OUR FLEET SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-light" id="our-fleet">
    <div class="container py-3">
        <div class="text-center mx-auto mb-3" style="max-width: 820px;">
            <h5 class="section-title px-3">Our Fleet</h5>
            <h2 class="mb-3">Choose Your Ride</h2>
            <p class="text-muted">All vehicles come with professional chauffeurs, bottled water, and complimentary Wi-Fi. Prices are in AED and include driver.</p>
        </div>

        <!-- Filter Buttons -->
        <div class="fleet-filter d-flex justify-content-center flex-wrap gap-2 mb-4">
            <button class="btn btn-primary active" onclick="filterFleet('all', this)">All Vehicles</button>
            <button class="btn btn-outline-primary" onclick="filterFleet('sedan', this)">Sedans</button>
            <button class="btn btn-outline-primary" onclick="filterFleet('suv', this)">SUVs</button>
            <button class="btn btn-outline-primary" onclick="filterFleet('mpv', this)">MPV / Minivan</button>
            <button class="btn btn-outline-warning" onclick="filterFleet('luxury', this)">Luxury Only</button>
        </div>

        <!-- Standard Segment -->
        <div class="segment-divider">
            <h3><i class="fas fa-car me-2"></i>Standard Fleet</h3>
        </div>
        <div class="row g-4" id="fleetGrid">

            <?php foreach ($fleet as $car):
                $segClass  = strtolower($car['segment']);
                $typeClass = strtolower(str_replace([' ', '/'], '-', $car['type']));
                $isLuxury  = $car['segment'] === 'luxury';
                $priceClass = $isLuxury ? 'luxury' : '';
            ?>
            <div class="col-sm-6 col-lg-4 fleet-item"
                 data-segment="<?= $segClass ?>"
                 data-type="<?= $typeClass ?>">
                <div class="fleet-card shadow-sm bg-white h-100">

                    <!-- Image -->
                    <div class="fleet-card-img-wrap">
                        <img src="<?= htmlspecialchars($car['image']) ?>"
                             alt="<?= htmlspecialchars($car['name']) ?> with Driver Dubai"
                             class="fleet-card-img"
                             loading="lazy">
                        <span class="fleet-segment-badge badge <?= $car['badge_class'] ?>">
                            <?= $car['segment_label'] ?>
                        </span>
                    </div>

                    <!-- Body -->
                    <div class="p-4">
                        <div class="d-flex align-items-start justify-content-between mb-1">
                            <h5 class="mb-0 fw-bold"><?= htmlspecialchars($car['name']) ?></h5>
                            <span class="badge bg-light text-primary border border-primary-subtle ms-2 text-nowrap">
                                <?= htmlspecialchars($car['type']) ?>
                            </span>
                        </div>
                        <p class="text-muted small mb-3">
                            <i class="fas fa-users me-1 text-primary"></i><?= $car['seats'] ?> Seater
                        </p>

                        <!-- Features -->
                        <ul class="list-unstyled mb-3">
                            <?php foreach ($car['features'] as $feat): ?>
                            <li class="mb-1 d-flex align-items-start gap-2 small text-muted">
                                <i class="fas fa-check text-success mt-1 flex-shrink-0"></i>
                                <?= htmlspecialchars($feat) ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <!-- Pricing Pills -->
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <div class="price-pill <?= $priceClass ?>">
                                <span class="amount">AED <?= number_format($car['pricing']['full_dubai']) ?></span>
                                <span class="label">Full Day<br>Dubai</span>
                            </div>
                            <div class="price-pill <?= $priceClass ?>">
                                <span class="amount">AED <?= number_format($car['pricing']['full_abudhabi']) ?></span>
                                <span class="label">Full Day<br>Abu Dhabi</span>
                            </div>
                            <div class="price-pill <?= $priceClass ?>">
                                <span class="amount">AED <?= number_format($car['pricing']['half_dubai']) ?></span>
                                <span class="label">Half Day<br>Dubai</span>
                            </div>
                            <div class="price-pill <?= $priceClass ?>">
                                <span class="amount">AED <?= number_format($car['pricing']['airport']) ?></span>
                                <span class="label">Airport<br>Transfer</span>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="d-flex gap-2">
                            <a href="https://wa.me/971585945007?text=<?= urlencode('Hi, I\'d like to book a ' . $car['name'] . ' with driver in Dubai') ?>"
                               target="_blank"
                               class="btn btn-success flex-fill rounded-pill py-2 fw-bold">
                                <i class="fab fa-whatsapp me-1"></i>Book
                            </a>
                            <a href="#book-now" class="btn btn-outline-primary rounded-pill py-2 px-3">
                                <i class="fas fa-calendar-check"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($car['id'] === 'toyota-hiace'): ?>
        </div><!-- /standard row -->

        <!-- Luxury Segment divider -->
        <div class="segment-divider">
            <h3><i class="fas fa-gem me-2"></i>Luxury Fleet</h3>
        </div>
        <div class="row g-4">
            <?php endif; ?>
            <?php endforeach; ?>

        </div><!-- /luxury row -->
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     WHY CHOOSE US
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">Why Book With Us</h5>
            <h2 class="mb-3">The Arihant Travels Difference</h2>
            <p class="text-muted">Thousands of passengers trust us every year for seamless, luxurious travel across the UAE.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-user-tie fa-3x text-primary mb-4"></i>
                    <h5>Professional Chauffeurs</h5>
                    <p class="mb-0 text-muted small">Smartly dressed, licensed, and trained in hospitality. Your comfort is their priority from first hello to last goodbye.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-clock fa-3x text-primary mb-4"></i>
                    <h5>Always On Time</h5>
                    <p class="mb-0 text-muted small">Flight-tracked arrivals, real-time navigation, and proactive communication ensure you're never kept waiting.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-tags fa-3x text-primary mb-4"></i>
                    <h5>Transparent Pricing</h5>
                    <p class="mb-0 text-muted small">No hidden charges, no surge pricing. Fixed rates per booking type — what you see is exactly what you pay.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-headset fa-3x text-primary mb-4"></i>
                    <h5>24/7 WhatsApp Support</h5>
                    <p class="mb-0 text-muted small">Book, modify, or cancel anytime via WhatsApp. Our team responds within minutes, any time of day or night.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-4"></i>
                    <h5>Fully Insured Vehicles</h5>
                    <p class="mb-0 text-muted small">All our vehicles carry comprehensive UAE insurance. Travel with complete peace of mind, every journey.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-route fa-3x text-primary mb-4"></i>
                    <h5>UAE-Wide Coverage</h5>
                    <p class="mb-0 text-muted small">Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah — we go wherever you need to be.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-suitcase fa-3x text-primary mb-4"></i>
                    <h5>Luggage Assistance</h5>
                    <p class="mb-0 text-muted small">Your chauffeur will load and unload your bags, ensuring a smooth, hands-free experience at every stop.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 bg-light rounded why-card shadow-sm h-100">
                    <i class="fas fa-child fa-3x text-primary mb-4"></i>
                    <h5>Family Friendly</h5>
                    <p class="mb-0 text-muted small">Child seats available on request. Spacious minivans and SUVs accommodate strollers, luggage, and larger families comfortably.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     FAQ SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">FAQ</h5>
            <h2 class="mb-3">Frequently Asked Questions</h2>
            <p class="text-muted">Everything you need to know about renting a car with driver in Dubai.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="carFaq">

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cf1">
                                How much does it cost to rent a car with driver in Dubai?
                            </button>
                        </h2>
                        <div id="cf1" class="accordion-collapse collapse show" data-bs-parent="#carFaq">
                            <div class="accordion-body">
                                Rates start from <strong>AED 250 for airport transfers</strong> and <strong>AED 500 for a full day</strong> with a Nissan Altima sedan. Luxury vehicles like the Mercedes S-Class start from AED 1,100 for airport transfers and AED 2,100 for a full day. All rates include driver — no extra fees.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf2">
                                What is included in a full day hire?
                            </button>
                        </h2>
                        <div id="cf2" class="accordion-collapse collapse" data-bs-parent="#carFaq">
                            <div class="accordion-body">
                                A full day hire covers <strong>8–10 hours of service</strong> within the specified emirate. This includes multiple stops, sightseeing, shopping, meetings, or any combination you choose. The chauffeur stays with you throughout the day. Toll charges and fuel are included — parking fees, if any, are extra.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf3">
                                Can I book a car with driver from Dubai to Abu Dhabi?
                            </button>
                        </h2>
                        <div id="cf3" class="accordion-collapse collapse" data-bs-parent="#carFaq">
                            <div class="accordion-body">
                                Yes. The <strong>Full Day – Abu Dhabi</strong> package covers a return trip from your Dubai hotel or residence, with up to 8-10 hours in Abu Dhabi for sightseeing, meetings, or shopping. Pricing starts from AED 600 for a sedan. One-way intercity transfers can also be arranged — just ask via WhatsApp.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf4">
                                Does the airport transfer include meet & greet?
                            </button>
                        </h2>
                        <div id="cf4" class="accordion-collapse collapse" data-bs-parent="#carFaq">
                            <div class="accordion-body">
                                Yes. Our chauffeur will be waiting in the arrivals hall with a <strong>name board</strong>, assist with your luggage, and escort you directly to your vehicle. Flight tracking is also included, so if your flight is delayed, the chauffeur adjusts accordingly — at no extra charge within a reasonable window.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf5">
                                Which vehicle should I choose for a group of 7–9 people?
                            </button>
                        </h2>
                        <div id="cf5" class="accordion-collapse collapse" data-bs-parent="#carFaq">
                            <div class="accordion-body">
                                For groups of 7, the <strong>Volkswagen Teramont, Toyota Land Cruiser, or Nissan Patrol</strong> (all 7-seater SUVs) are ideal. For 8–9 passengers, the <strong>Hyundai Staria</strong> (9-seater MPV) provides comfortable, spacious seating with wide sliding doors — perfect for families or corporate groups with luggage.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf6">
                                Is the half day service available for Abu Dhabi trips?
                            </button>
                        </h2>
                        <div id="cf6" class="accordion-collapse collapse" data-bs-parent="#carFaq">
                            <div class="accordion-body">
                                The half day package is available for <strong>Dubai only</strong> (4–5 hours within the emirate). For Abu Dhabi — due to the travel distance — a full day package is required. This ensures you have sufficient time in Abu Dhabi without feeling rushed.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf7">
                                How do I book a car with driver with Arihant Travels?
                            </button>
                        </h2>
                        <div id="cf7" class="accordion-collapse collapse" data-bs-parent="#carFaq">
                            <div class="accordion-body">
                                The quickest way is to <strong>fill in the booking form</strong> on this page or message us on <strong>WhatsApp at +971 58 594 5007</strong>. Share your pickup date, time, location, service type, and vehicle preference. We'll confirm availability and pricing within 15 minutes, with full details sent via WhatsApp.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════════════════════════ -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto" style="max-width: 820px;">
            <h5 class="subscribe-title px-3">Ready to Book?</h5>
            <h2 class="text-white mb-4">Your Private Chauffeur Awaits</h2>
            <p class="text-white mb-2">Professional chauffeurs. Fixed prices. Instant WhatsApp confirmation.</p>
            <p class="text-white mb-5">
                <i class="fas fa-check-circle me-2"></i>No Hidden Fees &nbsp;|&nbsp;
                <i class="fas fa-check-circle me-2"></i>Flight-Tracked Arrivals &nbsp;|&nbsp;
                <i class="fas fa-check-circle me-2"></i>UAE-Wide Coverage
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/971585945007?text=Hi, I'd like to book a car with driver in Dubai"
                   target="_blank" class="btn btn-primary rounded-pill py-3 px-5 fw-bold">
                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                </a>
                <a href="#book-now" class="btn btn-outline-light rounded-pill py-3 px-5">
                    <i class="fas fa-calendar-check me-2"></i>Book Online
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     PAGE SCRIPTS
════════════════════════════════════════════════════════════ -->
<script>
// ── Booking form: show/hide airport fields based on service type ──
function handleServiceChange(val) {
    var airportWrap = document.getElementById('airportWrap');
    var flightWrap  = document.getElementById('flightWrap');
    var dropoffWrap = document.getElementById('dropoffWrap');
    if (val === 'airport_transfer') {
        airportWrap.style.display = '';
        flightWrap.style.display  = '';
        dropoffWrap.style.display = '';
    } else {
        airportWrap.style.display = 'none';
        flightWrap.style.display  = 'none';
        dropoffWrap.style.display = '';
    }
}

// ── Fleet filter ──
function filterFleet(filter, btn) {
    // Update active button
    document.querySelectorAll('.fleet-filter .btn').forEach(function(b) {
        b.classList.remove('btn-primary', 'btn-warning', 'active');
        b.classList.add(b.dataset.orig || 'btn-outline-primary');
    });
    // Store original classes on first call
    document.querySelectorAll('.fleet-filter .btn').forEach(function(b) {
        if (!b.dataset.orig) b.dataset.orig = b.className.replace('btn ', '').replace('active', '').trim().split(' ')[0] || 'btn-outline-primary';
    });

    btn.classList.add('active');

    // Show/hide cards
    document.querySelectorAll('.fleet-item').forEach(function(item) {
        var seg  = item.getAttribute('data-segment');
        var type = item.getAttribute('data-type');
        var show = false;
        if (filter === 'all')    show = true;
        if (filter === 'luxury') show = (seg === 'luxury');
        if (filter === 'sedan')  show = (type === 'sedan');
        if (filter === 'suv')    show = (type === 'suv');
        if (filter === 'mpv')    show = (type === 'mpv' || type === 'minivan');
        item.style.display = show ? '' : 'none';
    });
}

// ── Smooth scroll for anchor links within page ──
document.querySelectorAll('a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
        var target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>
