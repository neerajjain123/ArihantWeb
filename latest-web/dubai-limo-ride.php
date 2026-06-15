<?php
// ─────────────────────────────────────────────
// Page SEO Variables
// ─────────────────────────────────────────────
$pageTitle       = "Dubai Limousine Ride | Luxury Limo Hire Dubai | Chrysler C300 & GMC Yukon Pink Limo | Arihant Travel";
$pageDescription = "Book a luxury limousine in Dubai with Arihant Travel. Chrysler C300 Emerald Edition (10 Pax) from AED 650/hr & GMC Yukon Malala Edition Pink Limo (20…";
$pageKeywords    = "dubai limousine, limo hire dubai, luxury limo dubai, chrysler 300 limo dubai, gmc yukon limo dubai, pink limo dubai, birthday limo dubai, wedding limo dubai, airport limo transfer dubai, party limo dubai, 10 seater limo dubai, 20 seater limo dubai, limo rental dubai";
$pageCanonical   = "https://arihantlink.com/dubai-limo-ride";
$currentPage     = "dubai-limo-ride";

// ─────────────────────────────────────────────
// Breadcrumb Variables
// ─────────────────────────────────────────────
$pageHeading            = "Dubai Limousine Rides";
$breadcrumbCategory     = "Dubai Excursions";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg           = "img/limo/Dubai-classic-limouine-VIP-Luxury-limo.jpg";
$breadcrumbOverlay      = true;

// ─────────────────────────────────────────────
// Limo Data Array — real image paths
// ─────────────────────────────────────────────
$limos = [
    [
        "id"            => "chrysler-c300",
        "slug"          => "chrysler-c300-emerald-limo",
        "name"          => "Chrysler C300 Emerald Edition",
        "subtitle"      => "White Limousine · 10 Passengers · 2024 Model",
        "badge"         => "10 Pax",
        "badge_color"   => "bg-primary",
        "colour"        => "White",
        "capacity"      => "10 Passengers",
        "model_year"    => "2024",
        // First image = hero/main carousel slide; all images = gallery
        "images"        => [
            "img/limo/Chrysler C300/Chrysler C300-exterior-Limousine.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine-1.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine-2.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine-3.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine-4.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine-5.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine-6.jpg",
            "img/limo/Chrysler C300/Chrysler C300-interior-Limousine-7.jpg",
        ],
        "description"   => "Experience the opulence and beauty of the Chrysler 300 Emerald Edition. Our Chrysler 300 limousine features the Pinnacle Edition Interior, which includes separate leather seats, a combination of laser and neon lights, and high-quality music. The large tires deliver a smooth, dream-like ride. Our White Limo fits up to 10 people and is a 2024 model. Make special occasions truly memorable with our Chrysler 300 Emerald Edition — our premium limousine hire offers unrivalled luxury and punctual service.",
        "highlights"    => [
            ["icon" => "fa-users",      "text" => "10 Passenger Capacity"],
            ["icon" => "fa-couch",      "text" => "Genuine Leather Interior"],
            ["icon" => "fa-palette",    "text" => "White Colour Exterior"],
            ["icon" => "fa-music",      "text" => "Surround Sound Stereo System with CD"],
            ["icon" => "fa-wind",       "text" => "Enhanced Air Conditioning & Heating"],
            ["icon" => "fa-shield-alt", "text" => "Dual Privacy Partitions"],
            ["icon" => "fa-adjust",     "text" => "Tinted Windows"],
            ["icon" => "fa-comments",   "text" => "2-Way Intercom System"],
        ],
        "car_features"  => [
            ["icon" => "fa-mobile-alt", "text" => "Cellular Phone"],
            ["icon" => "fa-cocktail",   "text" => "Fully Stocked Refreshment Bar"],
            ["icon" => "fa-newspaper",  "text" => "Newspapers"],
            ["icon" => "fa-tv",         "text" => "Colour Television"],
            ["icon" => "fa-film",       "text" => "DVD Player"],
        ],
        "exclusions"    => [
            "Any delay / extra hours will be charged additionally.",
            "Parking charges: AED 150 per hour.",
        ],
        "pricing"       => [
            ["label" => "Per Hour – Dubai Area",   "price" => "AED 650",   "icon" => "fa-clock"],
            ["label" => "Per Hour – Sharjah Area", "price" => "AED 850",   "icon" => "fa-clock"],
            ["label" => "5 Hours – Dubai Area",    "price" => "AED 2,200", "icon" => "fa-hourglass-half"],
            ["label" => "5 Hours – Sharjah Area",  "price" => "AED 2,400", "icon" => "fa-hourglass-half"],
            ["label" => "Dubai Airport Pickup",    "price" => "AED 1,250", "icon" => "fa-plane-arrival"],
            ["label" => "Sharjah Airport Pickup",  "price" => "AED 1,500", "icon" => "fa-plane-arrival"],
        ],
        "birthday"      => [
            ["label" => "With Cake – Balloons + Helium + Rose Petals + Bouquet + Cake", "price" => "AED 600"],
            ["label" => "Without Cake – Balloons + Helium + Rose Petals + Bouquet",     "price" => "AED 450"],
        ],
        "wedding"       => [
            ["label" => "Front Bonnet Bouquet + Four Door Handle Ribbons", "price" => "AED 600"],
        ],
        "whatsapp_text" => "Hi, I'm interested in booking the Chrysler C300 Emerald Edition Limo (10 Pax)",
        "rating"        => "5.0",
        "reviews"       => "84",
        "accent"        => "#13357B",
        "btn_class"     => "btn-primary",
        "header_class"  => "bg-primary",
    ],
    [
        "id"            => "gmc-yukon-pink",
        "slug"          => "gmc-yukon-malala-pink-limo",
        "name"          => "GMC Yukon Malala Edition",
        "subtitle"      => "Pink Limousine · 20 Passengers · Premium Edition",
        "badge"         => "20 Pax",
        "badge_color"   => "bg-danger",
        "colour"        => "Pink",
        "capacity"      => "20 Passengers",
        "model_year"    => "2024",
        "images"        => [
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-1.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-2.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-3.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-4.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-5.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-6.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-7.webp",
            "img/limo/GMC Pink/Pink_Limousine_Dubai_Pink_Limousine-8.webp",
        ],
        "description"   => "Experience the grandeur and magnificence of the GMC Yukon Malala Edition — Dubai's most iconic Pink Limousine. This stunning party limo features the Pinnacle Edition Interior, complete with separate leather seats, a mesmerising combination of laser and neon lights, and a premium surround-sound music system. The spacious cabin accommodates up to 20 passengers in absolute style, making it the ultimate choice for large-group celebrations. Whether it's a birthday bash, a bachelorette party, or a grand wedding transfer, our premium Pink Limo delivers unrivalled luxury and punctual service.",
        "highlights"    => [
            ["icon" => "fa-users",      "text" => "20 Passenger Capacity"],
            ["icon" => "fa-couch",      "text" => "Genuine Leather Interior"],
            ["icon" => "fa-heart",      "text" => "Iconic Pink Colour Exterior"],
            ["icon" => "fa-music",      "text" => "Surround Sound Stereo System with CD"],
            ["icon" => "fa-wind",       "text" => "Enhanced Air Conditioning & Heating"],
            ["icon" => "fa-shield-alt", "text" => "Dual Privacy Partitions"],
            ["icon" => "fa-adjust",     "text" => "Tinted Windows"],
            ["icon" => "fa-comments",   "text" => "2-Way Intercom System"],
        ],
        "car_features"  => [
            ["icon" => "fa-mobile-alt", "text" => "Cellular Phone"],
            ["icon" => "fa-cocktail",   "text" => "Fully Stocked Refreshment Bar"],
            ["icon" => "fa-newspaper",  "text" => "Newspapers"],
            ["icon" => "fa-tv",         "text" => "Colour Television"],
            ["icon" => "fa-film",       "text" => "DVD Player"],
        ],
        "exclusions"    => [
            "Airport transfer delay: AED 240 per additional hour.",
            "Any delay / extra hours will be charged additionally.",
            "Parking charges: AED 150 per hour.",
        ],
        "pricing"       => [
            ["label" => "Per Hour – Dubai Area",   "price" => "AED 850",   "icon" => "fa-clock"],
            ["label" => "Per Hour – Sharjah Area", "price" => "AED 1,050", "icon" => "fa-clock"],
            ["label" => "5 Hours – Dubai Area",    "price" => "AED 2,800", "icon" => "fa-hourglass-half"],
            ["label" => "5 Hours – Sharjah Area",  "price" => "AED 3,000", "icon" => "fa-hourglass-half"],
            ["label" => "Dubai Airport Pickup",    "price" => "AED 1,650", "icon" => "fa-plane-arrival"],
            ["label" => "Sharjah Airport Pickup",  "price" => "AED 1,750", "icon" => "fa-plane-arrival"],
        ],
        "birthday"      => [
            ["label" => "With Cake – Balloons + Helium + Rose Petals + Bouquet + Cake", "price" => "AED 600"],
            ["label" => "Without Cake – Balloons + Helium + Rose Petals + Bouquet",     "price" => "AED 450"],
        ],
        "wedding"       => [
            ["label" => "Front Bonnet Bouquet + Four Door Handle Ribbons", "price" => "AED 600"],
        ],
        "whatsapp_text" => "Hi, I'm interested in booking the GMC Yukon Malala Edition Pink Limo (20 Pax)",
        "rating"        => "5.0",
        "reviews"       => "62",
        "accent"        => "#c2185b",
        "btn_class"     => "btn-danger",
        "header_class"  => "bg-danger",
    ],
];

// ─────────────────────────────────────────────
// Schema Markup
// ─────────────────────────────────────────────
$listItems = [];
foreach ($limos as $i => $limo) {
    $listItems[] = [
        "@type"    => "ListItem",
        "position" => $i + 1,
        "item"     => [
            "@type"       => "Product",
            "name"        => $limo['name'] . " Limousine Dubai",
            "description" => $limo['description'],
            "image"       => "https://arihantlink.com/" . $limo['images'][0],
            "brand"       => ["@type" => "Brand", "name" => "Arihant Travel"],
            "offers"      => [
                "@type"         => "Offer",
                "priceCurrency" => "AED",
                "availability"  => "https://schema.org/InStock",
                "seller"        => ["@type" => "TravelAgency", "name" => "Arihant Travel", "url" => "https://arihantlink.com"],
            ],
        ],
    ];
}

$schemaMarkup = '<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Dubai Limousine Rides – Arihant Travel",
    "description": "' . addslashes($pageDescription) . '",
    "itemListElement": ' . json_encode($listItems, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does a limousine hire cost in Dubai?",
        "acceptedAnswer": {"@type": "Answer", "text": "Limousine hire in Dubai starts from AED 650 per hour for the Chrysler C300 Emerald Edition (10 Pax) and AED 850 per hour for the GMC Yukon Malala Edition Pink Limo (20 Pax). 5-hour packages from AED 2,200. Airport pickup from AED 1,250."}
      },
      {
        "@type": "Question",
        "name": "How many people can fit in a Dubai limo?",
        "acceptedAnswer": {"@type": "Answer", "text": "The Chrysler C300 Emerald Edition seats up to 10 passengers. The GMC Yukon Malala Edition Pink Limo seats up to 20 passengers."}
      },
      {
        "@type": "Question",
        "name": "Can I hire a pink limo in Dubai?",
        "acceptedAnswer": {"@type": "Answer", "text": "Yes! Arihant Travel offers the GMC Yukon Malala Edition — Dubai\'s iconic pink limousine — that seats up to 20 passengers, starting from AED 850 per hour."}
      },
      {
        "@type": "Question",
        "name": "Does the limo price include decoration?",
        "acceptedAnswer": {"@type": "Answer", "text": "Decoration is an optional add-on. Birthday decoration costs AED 600 with cake or AED 450 without cake. Wedding decoration is AED 600 (front bonnet bouquet + door ribbons)."}
      },
      {
        "@type": "Question",
        "name": "Do you offer limo airport pickup in Dubai?",
        "acceptedAnswer": {"@type": "Answer", "text": "Yes. Dubai Airport pickup starts from AED 1,250 (Chrysler C300) and AED 1,650 (GMC Yukon Pink). Sharjah Airport pickup is AED 1,500 and AED 1,750 respectively."}
      }
    ]
  }
]
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- ══════════════════════════════════════════════════════════
     SHARED GALLERY STYLES + LIGHTBOX (used by both limos)
════════════════════════════════════════════════════════════ -->
<style>
/* ── Gallery Grid ── */
.limo-gallery-item {
    position: relative;
    cursor: pointer;
    border-radius: 8px;
    overflow: hidden;
    height: 180px;
}
.limo-gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.35s ease;
    display: block;
}
.limo-gallery-item:hover img {
    transform: scale(1.08);
}
.limo-gallery-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.38);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.limo-gallery-item:hover .limo-gallery-overlay {
    opacity: 1;
}
.limo-gallery-overlay i {
    color: #fff;
    font-size: 1.6rem;
}

/* ── Bootstrap Carousel fixes ── */
.limo-carousel .carousel-inner {
    border-radius: 12px 12px 0 0;
    overflow: hidden;
}
.limo-carousel .carousel-item img {
    width: 100%;
    height: 420px;
    object-fit: cover;
}
.limo-carousel .carousel-caption-custom {
    position: absolute;
    bottom: 0;
    left: 0; right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.72), transparent);
    padding: 24px 20px 16px;
    border-radius: 0;
}

/* ── Lightbox ── */
.limo-lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.96);
    z-index: 99999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    flex-direction: column;
}
.limo-lightbox.active { display: flex; }
.limo-lightbox img {
    max-width: 90vw;
    max-height: 82vh;
    border-radius: 10px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.6);
    object-fit: contain;
}
.limo-lightbox .lb-close {
    position: absolute;
    top: 22px; right: 28px;
    font-size: 2.6rem;
    color: #fff;
    cursor: pointer;
    line-height: 1;
    transition: transform 0.2s;
    z-index: 100001;
}
.limo-lightbox .lb-close:hover { transform: scale(1.2); }
.limo-lightbox .lb-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2.8rem;
    color: #fff;
    cursor: pointer;
    padding: 16px 20px;
    user-select: none;
    transition: color 0.2s;
    z-index: 100001;
}
.limo-lightbox .lb-nav:hover { color: #f9a825; }
.limo-lightbox .lb-nav.lb-prev { left: 16px; }
.limo-lightbox .lb-nav.lb-next { right: 16px; }
.limo-lightbox .lb-counter {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: #fff;
    font-size: 0.9rem;
    opacity: 0.8;
    z-index: 100001;
}

/* ── Limo Card ── */
.limo-card { border-radius: 14px; overflow: hidden; }
.limo-card .limo-card-header {
    padding: 16px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}
</style>

<!-- ══════════════════════════════════════════════════════════
     INTRO SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">Luxury on Wheels</h5>
            <h2 class="mb-4">Dubai Limousine Hire – Travel in Absolute Style</h2>
            <p class="text-muted mb-3">Whether it's a birthday bash, a lavish wedding transfer, a corporate event, or a VIP airport pickup — Arihant Travel's luxury limousine fleet brings unmatched elegance right to your door. Choose from our <strong>Chrysler C300 Emerald Edition (10 Pax)</strong> or the spectacular <strong>GMC Yukon Malala Edition Pink Limo (20 Pax)</strong> and create memories that last a lifetime.</p>
            <p class="text-muted mb-0">Both limos are loaded with premium leather interiors, neon laser lighting, surround-sound systems, fully stocked bars, and professional chauffeurs — delivering a truly five-star experience across Dubai and Sharjah.</p>
        </div>
        <!-- Quick Stats -->
        <div class="row g-3">
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-primary text-white rounded shadow-sm">
                    <i class="fas fa-car-side fa-2x mb-2"></i>
                    <h5 class="mb-0 text-white">2 Limos</h5>
                    <small>Available Now</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-white rounded shadow-sm border">
                    <i class="fas fa-users fa-2x text-primary mb-2"></i>
                    <h5 class="mb-0">Up to 20 Pax</h5>
                    <small class="text-muted">Maximum Capacity</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-white rounded shadow-sm border">
                    <i class="fas fa-birthday-cake fa-2x text-primary mb-2"></i>
                    <h5 class="mb-0">Any Occasion</h5>
                    <small class="text-muted">Birthdays, Weddings & More</small>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="text-center p-3 bg-white rounded shadow-sm border">
                    <i class="fas fa-plane-arrival fa-2x text-primary mb-2"></i>
                    <h5 class="mb-0">Airport Pickup</h5>
                    <small class="text-muted">Dubai & Sharjah</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     LIMO LISTING — one full section per limo
════════════════════════════════════════════════════════════ -->
<?php foreach ($limos as $limoIdx => $limo):
    $carouselId  = "carousel-" . $limo['id'];
    $galleryId   = "gallery-"  . $limo['id'];
    $lightboxId  = "lightbox-" . $limo['id'];
    $jsArr       = "images_"   . str_replace('-', '_', $limo['id']);
    $jsCur       = "cur_"      . str_replace('-', '_', $limo['id']);
    $sectionBg   = ($limoIdx % 2 === 0) ? 'bg-light' : 'bg-white';
?>
<div class="container-fluid py-5 <?= $sectionBg ?>" id="<?= $limo['id'] ?>">
    <div class="container py-3">

        <!-- ── Section Heading ── -->
        <div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
            <span class="badge <?= $limo['badge_color'] ?> fs-6 px-3 py-2">
                <i class="fas fa-users me-1"></i><?= $limo['badge'] ?>
            </span>
            <h2 class="mb-0"><?= htmlspecialchars($limo['name']) ?></h2>
            <span class="text-muted ms-auto">
                <i class="fas fa-star text-warning"></i>
                <strong><?= $limo['rating'] ?></strong>
                <span class="small">(<?= $limo['reviews'] ?> reviews)</span>
            </span>
        </div>
        <p class="text-muted mb-4"><?= htmlspecialchars($limo['subtitle']) ?></p>

        <div class="row g-4">

            <!-- ════════════════════════════════
                 LEFT COLUMN: Carousel + Gallery
            ════════════════════════════════ -->
            <div class="col-lg-6">

                <!-- Bootstrap Carousel (main image rotator) -->
                <div id="<?= $carouselId ?>" class="carousel slide limo-carousel shadow rounded mb-3" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php foreach ($limo['images'] as $ci => $img): ?>
                        <button type="button"
                                data-bs-target="#<?= $carouselId ?>"
                                data-bs-slide-to="<?= $ci ?>"
                                <?= $ci === 0 ? 'class="active" aria-current="true"' : '' ?>
                                aria-label="Slide <?= $ci + 1 ?>">
                        </button>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($limo['images'] as $ci => $img): ?>
                        <div class="carousel-item <?= $ci === 0 ? 'active' : '' ?>">
                            <img src="<?= htmlspecialchars($img) ?>"
                                 alt="<?= htmlspecialchars($limo['name']) ?> – image <?= $ci + 1 ?>"
                                 style="width:100%; height:420px; object-fit:cover; border-radius: 12px 12px 0 0;"
                                 loading="<?= $ci === 0 ? 'eager' : 'lazy' ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#<?= $carouselId ?>" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#<?= $carouselId ?>" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

                <!-- Thumbnail Gallery Grid (clickable → lightbox) -->
                <div id="<?= $galleryId ?>" class="row g-2">
                    <?php foreach ($limo['images'] as $gi => $img): ?>
                    <div class="col-4">
                        <div class="limo-gallery-item shadow-sm"
                             onclick="openLimoLightbox('<?= $lightboxId ?>', <?= $gi ?>)">
                            <img src="<?= htmlspecialchars($img) ?>"
                                 alt="<?= htmlspecialchars($limo['name']) ?> photo <?= $gi + 1 ?>"
                                 loading="lazy">
                            <div class="limo-gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <p class="text-muted small text-center mt-2">
                    <i class="fas fa-hand-pointer me-1"></i>Click any photo to view full screen
                </p>

            </div><!-- /col-lg-6 left -->

            <!-- ════════════════════════════════
                 RIGHT COLUMN: Details + Pricing
            ════════════════════════════════ -->
            <div class="col-lg-6">

                <!-- Description -->
                <p class="mb-4"><?= htmlspecialchars($limo['description']) ?></p>

                <!-- Highlights + Car Features side by side -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="p-3 bg-white rounded shadow-sm h-100">
                            <h6 class="fw-bold mb-3" style="color:<?= $limo['accent'] ?>">
                                <i class="fas fa-star me-2"></i>Highlights
                            </h6>
                            <ul class="list-unstyled mb-0">
                                <?php foreach ($limo['highlights'] as $h): ?>
                                <li class="mb-2 d-flex align-items-start gap-2">
                                    <i class="fas <?= $h['icon'] ?> mt-1 flex-shrink-0" style="color:<?= $limo['accent'] ?>; min-width:16px;"></i>
                                    <span class="small"><?= htmlspecialchars($h['text']) ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-white rounded shadow-sm h-100">
                            <h6 class="fw-bold mb-3" style="color:<?= $limo['accent'] ?>">
                                <i class="fas fa-car me-2"></i>Car Features
                            </h6>
                            <ul class="list-unstyled mb-0">
                                <?php foreach ($limo['car_features'] as $f): ?>
                                <li class="mb-2 d-flex align-items-start gap-2">
                                    <i class="fas <?= $f['icon'] ?> text-success mt-1 flex-shrink-0" style="min-width:16px;"></i>
                                    <span class="small"><?= htmlspecialchars($f['text']) ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <!-- Exclusions -->
                            <?php if (!empty($limo['exclusions'])): ?>
                            <div class="mt-3 p-2 bg-warning bg-opacity-10 border-start border-warning border-3 rounded-end small">
                                <p class="fw-bold text-warning mb-1 small"><i class="fas fa-exclamation-triangle me-1"></i>Notes</p>
                                <?php foreach ($limo['exclusions'] as $ex): ?>
                                <div class="text-muted small mb-1"><i class="fas fa-minus text-warning me-1"></i><?= htmlspecialchars($ex) ?></div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-header <?= $limo['header_class'] ?> text-white py-2 px-3">
                        <h6 class="mb-0 text-white"><i class="fas fa-tags me-2"></i>Rates & Packages</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-0 small">
                                <tbody>
                                    <?php foreach ($limo['pricing'] as $r): ?>
                                    <tr>
                                        <td class="py-2 px-3">
                                            <i class="fas <?= $r['icon'] ?> me-2" style="color:<?= $limo['accent'] ?>"></i>
                                            <?= htmlspecialchars($r['label']) ?>
                                        </td>
                                        <td class="py-2 px-3 text-end fw-bold" style="color:<?= $limo['accent'] ?>"><?= $r['price'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Decoration Add-Ons -->
                <div class="row g-2 mb-4">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-warning text-dark py-2 px-3">
                                <h6 class="mb-0 small"><i class="fas fa-birthday-cake me-2"></i>Birthday Decoration</h6>
                            </div>
                            <div class="card-body p-2">
                                <table class="table table-sm mb-0 small">
                                    <tbody>
                                        <?php foreach ($limo['birthday'] as $bd): ?>
                                        <tr>
                                            <td class="text-muted" style="font-size:0.78rem;"><?= htmlspecialchars($bd['label']) ?></td>
                                            <td class="text-end fw-bold text-warning text-nowrap"><?= $bd['price'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-danger text-white py-2 px-3">
                                <h6 class="mb-0 small text-white"><i class="fas fa-ring me-2"></i>Wedding Decoration</h6>
                            </div>
                            <div class="card-body p-2">
                                <table class="table table-sm mb-0 small">
                                    <tbody>
                                        <?php foreach ($limo['wedding'] as $wd): ?>
                                        <tr>
                                            <td class="text-muted" style="font-size:0.78rem;"><?= htmlspecialchars($wd['label']) ?></td>
                                            <td class="text-end fw-bold text-danger text-nowrap"><?= $wd['price'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="d-flex gap-2 flex-wrap">
                    <a href="https://wa.me/971585945007?text=<?= urlencode($limo['whatsapp_text']) ?>"
                       target="_blank"
                       class="btn btn-success rounded-pill px-4 py-2 fw-bold">
                        <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                    </a>
                    <a href="#pricing-compare"
                       class="btn btn-outline-secondary rounded-pill px-4 py-2">
                        <i class="fas fa-balance-scale me-2"></i>Compare Both
                    </a>
                    <a href="/contact"
                       class="btn btn-outline-dark rounded-pill px-4 py-2">
                        <i class="fas fa-envelope me-2"></i>Enquire
                    </a>
                </div>

            </div><!-- /col-lg-6 right -->
        </div><!-- /row -->

    </div>
</div><!-- /limo section -->

<!-- Lightbox for this limo -->
<div class="limo-lightbox" id="<?= $lightboxId ?>">
    <span class="lb-close" onclick="closeLimoLightbox('<?= $lightboxId ?>')">&times;</span>
    <span class="lb-nav lb-prev" onclick="navLimoLightbox('<?= $lightboxId ?>', -1)">&#10094;</span>
    <img id="lb-img-<?= $limo['id'] ?>" src="" alt="<?= htmlspecialchars($limo['name']) ?> gallery">
    <span class="lb-nav lb-next" onclick="navLimoLightbox('<?= $lightboxId ?>', 1)">&#10095;</span>
    <div class="lb-counter" id="lb-counter-<?= $limo['id'] ?>"></div>
</div>

<script>
(function() {
    var <?= $jsArr ?> = <?= json_encode($limo['images'], JSON_UNESCAPED_SLASHES) ?>;
    var <?= $jsCur ?> = 0;

    window.openLimoLightbox = window.openLimoLightbox || {};

    // Register open/close/nav per lightbox id
    document.addEventListener('DOMContentLoaded', function() {
        var lb  = document.getElementById('<?= $lightboxId ?>');
        var img = document.getElementById('lb-img-<?= $limo['id'] ?>');
        var ctr = document.getElementById('lb-counter-<?= $limo['id'] ?>');

        lb.addEventListener('click', function(e){ if (e.target === lb) closeLimoLightbox('<?= $lightboxId ?>'); });
    });

    // Expose scoped functions via a global registry keyed by lightbox id
    if (!window._limoLightboxes) window._limoLightboxes = {};
    window._limoLightboxes['<?= $lightboxId ?>'] = {
        images: <?= $jsArr ?>,
        currentIndex: 0,
        open: function(idx) {
            this.currentIndex = idx;
            this.render();
            document.getElementById('<?= $lightboxId ?>').classList.add('active');
            document.body.style.overflow = 'hidden';
        },
        close: function() {
            document.getElementById('<?= $lightboxId ?>').classList.remove('active');
            document.body.style.overflow = '';
        },
        nav: function(dir) {
            this.currentIndex = (this.currentIndex + dir + this.images.length) % this.images.length;
            this.render();
        },
        render: function() {
            document.getElementById('lb-img-<?= $limo['id'] ?>').src   = this.images[this.currentIndex];
            document.getElementById('lb-counter-<?= $limo['id'] ?>').textContent =
                (this.currentIndex + 1) + ' / ' + this.images.length;
        }
    };
})();
</script>

<?php endforeach; // end limos loop ?>

<!-- Global lightbox controller functions (called from onclick) -->
<script>
function openLimoLightbox(lbId, idx)  { if (window._limoLightboxes && window._limoLightboxes[lbId]) window._limoLightboxes[lbId].open(idx); }
function closeLimoLightbox(lbId)       { if (window._limoLightboxes && window._limoLightboxes[lbId]) window._limoLightboxes[lbId].close(); }
function navLimoLightbox(lbId, dir)    { if (window._limoLightboxes && window._limoLightboxes[lbId]) window._limoLightboxes[lbId].nav(dir); }

// Keyboard navigation — works for whichever lightbox is open
document.addEventListener('keydown', function(e) {
    if (!window._limoLightboxes) return;
    for (var id in window._limoLightboxes) {
        var el = document.getElementById(id);
        if (el && el.classList.contains('active')) {
            if (e.key === 'Escape')      window._limoLightboxes[id].close();
            if (e.key === 'ArrowLeft')   window._limoLightboxes[id].nav(-1);
            if (e.key === 'ArrowRight')  window._limoLightboxes[id].nav(1);
        }
    }
});
</script>

<!-- ══════════════════════════════════════════════════════════
     SIDE-BY-SIDE COMPARISON TABLE
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-light" id="pricing-compare">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">Compare</h5>
            <h2 class="mb-3">Chrysler C300 vs GMC Yukon Pink – Side by Side</h2>
            <p class="text-muted">Not sure which limo to choose? Here's a full comparison to help you decide.</p>
        </div>
        <div class="table-responsive shadow rounded">
            <table class="table table-bordered table-hover text-center mb-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="text-start ps-4">Feature</th>
                        <th>
                            <i class="fas fa-car text-primary me-1"></i><br>
                            Chrysler C300 Emerald
                        </th>
                        <th>
                            <i class="fas fa-heart text-danger me-1"></i><br>
                            GMC Yukon Malala (Pink)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">Capacity</td><td>10 Passengers</td><td>20 Passengers</td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">Colour</td><td>White</td><td>Pink</td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">Per Hour – Dubai</td><td class="fw-bold text-primary">AED 650</td><td class="fw-bold text-danger">AED 850</td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">Per Hour – Sharjah</td><td class="fw-bold text-primary">AED 850</td><td class="fw-bold text-danger">AED 1,050</td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">5 Hours – Dubai</td><td class="fw-bold text-primary">AED 2,200</td><td class="fw-bold text-danger">AED 2,800</td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">5 Hours – Sharjah</td><td class="fw-bold text-primary">AED 2,400</td><td class="fw-bold text-danger">AED 3,000</td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">Dubai Airport Pickup</td><td class="fw-bold text-primary">AED 1,250</td><td class="fw-bold text-danger">AED 1,650</td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">Sharjah Airport Pickup</td><td class="fw-bold text-primary">AED 1,500</td><td class="fw-bold text-danger">AED 1,750</td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">Birthday Decoration</td><td>AED 450 – 600</td><td>AED 450 – 600</td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">Wedding Decoration</td><td>AED 600</td><td>AED 600</td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">Leather Interior</td><td><i class="fas fa-check-circle text-success fs-5"></i></td><td><i class="fas fa-check-circle text-success fs-5"></i></td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">Laser + Neon Lights</td><td><i class="fas fa-check-circle text-success fs-5"></i></td><td><i class="fas fa-check-circle text-success fs-5"></i></td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">Surround Sound System</td><td><i class="fas fa-check-circle text-success fs-5"></i></td><td><i class="fas fa-check-circle text-success fs-5"></i></td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">Refreshment Bar</td><td><i class="fas fa-check-circle text-success fs-5"></i></td><td><i class="fas fa-check-circle text-success fs-5"></i></td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">Colour TV + DVD</td><td><i class="fas fa-check-circle text-success fs-5"></i></td><td><i class="fas fa-check-circle text-success fs-5"></i></td></tr>
                    <tr><td class="text-start ps-4 fw-semibold">Tinted Windows</td><td><i class="fas fa-check-circle text-success fs-5"></i></td><td><i class="fas fa-check-circle text-success fs-5"></i></td></tr>
                    <tr class="table-light"><td class="text-start ps-4 fw-semibold">2-Way Intercom</td><td><i class="fas fa-check-circle text-success fs-5"></i></td><td><i class="fas fa-check-circle text-success fs-5"></i></td></tr>
                    <tr>
                        <td class="text-start ps-4 fw-semibold">Book Now</td>
                        <td>
                            <a href="https://wa.me/971585945007?text=<?= urlencode("Hi, I'm interested in booking the Chrysler C300 Emerald Edition Limo (10 Pax)") ?>"
                               target="_blank" class="btn btn-primary btn-sm rounded-pill px-3">
                                <i class="fab fa-whatsapp me-1"></i>Book
                            </a>
                        </td>
                        <td>
                            <a href="https://wa.me/971585945007?text=<?= urlencode("Hi, I'm interested in booking the GMC Yukon Malala Edition Pink Limo (20 Pax)") ?>"
                               target="_blank" class="btn btn-danger btn-sm rounded-pill px-3">
                                <i class="fab fa-whatsapp me-1"></i>Book
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     OCCASIONS SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">Perfect For</h5>
            <h2 class="mb-3">Every Special Occasion in Dubai</h2>
            <p class="text-muted">Our Dubai limousines are available for all celebrations and transfers. Here are just some of the occasions our clients love us for.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-2">
                <div class="p-3 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-birthday-cake fa-2x text-warning mb-3"></i>
                    <h6 class="mb-0">Birthday Parties</h6>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="p-3 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-ring fa-2x text-danger mb-3"></i>
                    <h6 class="mb-0">Weddings</h6>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="p-3 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-plane-arrival fa-2x text-primary mb-3"></i>
                    <h6 class="mb-0">Airport Transfers</h6>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="p-3 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-briefcase fa-2x text-secondary mb-3"></i>
                    <h6 class="mb-0">Corporate Events</h6>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="p-3 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-glass-cheers fa-2x text-success mb-3"></i>
                    <h6 class="mb-0">Prom / Girls Night</h6>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="p-3 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-city fa-2x text-info mb-3"></i>
                    <h6 class="mb-0">Dubai City Tours</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     WHY CHOOSE ARIHANT TRAVEL
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">Why Book With Us</h5>
            <h2 class="mb-3">The Arihant Travel Difference</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-white shadow-sm h-100">
                    <i class="fas fa-user-tie fa-3x text-primary mb-4"></i>
                    <h5>Professional Chauffeurs</h5>
                    <p class="mb-0 text-muted small">Smartly dressed, experienced drivers committed to your comfort and punctuality.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-white shadow-sm h-100">
                    <i class="fas fa-clock fa-3x text-primary mb-4"></i>
                    <h5>Always On Time</h5>
                    <p class="mb-0 text-muted small">We arrive on time, every time. Your schedule matters to us — no waiting, no delays.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-white shadow-sm h-100">
                    <i class="fas fa-tags fa-3x text-primary mb-4"></i>
                    <h5>Transparent Pricing</h5>
                    <p class="mb-0 text-muted small">No hidden charges. Full pricing confirmed before you book. What you see is what you pay.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-white shadow-sm h-100">
                    <i class="fas fa-headset fa-3x text-primary mb-4"></i>
                    <h5>24/7 WhatsApp Support</h5>
                    <p class="mb-0 text-muted small">Book, modify, or enquire anytime via WhatsApp. Our team responds fast, day or night.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     FAQ SECTION
════════════════════════════════════════════════════════════ -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5" style="max-width: 820px;">
            <h5 class="section-title px-3">FAQ</h5>
            <h2 class="mb-3">Frequently Asked Questions</h2>
            <p class="text-muted">Everything you need to know about hiring a limousine in Dubai.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="limoFaq">

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#lf1">
                                How much does a limousine hire cost in Dubai?
                            </button>
                        </h2>
                        <div id="lf1" class="accordion-collapse collapse show" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                Limousine hire starts from <strong>AED 650/hour</strong> for the Chrysler C300 Emerald Edition (10 Pax) and <strong>AED 850/hour</strong> for the GMC Yukon Malala Edition Pink Limo (20 Pax) within Dubai. Sharjah rates are AED 850/hr and AED 1,050/hr respectively. 5-hour packages and airport transfers are also available.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lf2">
                                What is the maximum capacity of your limos?
                            </button>
                        </h2>
                        <div id="lf2" class="accordion-collapse collapse" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                The <strong>Chrysler C300 Emerald Edition</strong> seats up to <strong>10 passengers</strong>. The <strong>GMC Yukon Malala Edition Pink Limo</strong> seats up to <strong>20 passengers</strong> — ideal for large-group birthday parties, bachelorette events, and corporate outings.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lf3">
                                Can I hire a pink limo in Dubai for a birthday party?
                            </button>
                        </h2>
                        <div id="lf3" class="accordion-collapse collapse" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                Absolutely! The <strong>GMC Yukon Malala Edition Pink Limo</strong> is a fan favourite for birthdays, bachelorette events, and girls' nights out in Dubai. You can also add our birthday decoration package starting from just <strong>AED 450</strong> (balloons, rose petals, hand bouquet) or <strong>AED 600</strong> with a cake included.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lf4">
                                Is decoration included in the limo hire price?
                            </button>
                        </h2>
                        <div id="lf4" class="accordion-collapse collapse" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                Decoration is an <strong>optional paid add-on</strong>, not included in the standard hire rate. Birthday decoration costs <strong>AED 600 with cake</strong> or <strong>AED 450 without cake</strong> (includes normal balloons, helium balloons, rose petals, and hand bouquet). Wedding decoration (front bonnet bouquet + four-door handle ribbons) costs <strong>AED 600</strong>.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lf5">
                                Do you offer limousine airport pickup in Dubai and Sharjah?
                            </button>
                        </h2>
                        <div id="lf5" class="accordion-collapse collapse" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                Yes! We offer airport pickup from <strong>Dubai International Airport</strong> — AED 1,250 (Chrysler C300) or AED 1,650 (GMC Yukon Pink) — and from <strong>Sharjah International Airport</strong> — AED 1,500 (Chrysler) or AED 1,750 (GMC Yukon). Any waiting time beyond the included grace period is charged at AED 150/hr (or AED 240/hr for airport transfer delays).
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lf6">
                                What's included inside the limousine?
                            </button>
                        </h2>
                        <div id="lf6" class="accordion-collapse collapse" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                Both limos come fully equipped with: <strong>genuine leather seating, laser and neon lighting, surround-sound stereo with CD, colour television, DVD player, cellular phone, fully stocked refreshment bar, newspapers, dual privacy partitions, tinted windows, 2-way intercom, and enhanced air conditioning and heating</strong>. Everything you need for a five-star ride in Dubai.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lf7">
                                Do you operate limousine services in Sharjah as well?
                            </button>
                        </h2>
                        <div id="lf7" class="accordion-collapse collapse" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                Yes! We cover both <strong>Dubai and Sharjah</strong>. Sharjah rates are slightly higher to account for additional distance and travel time. The Chrysler C300 is AED 850/hr in Sharjah, and the GMC Yukon Pink is AED 1,050/hr. 5-hour Sharjah packages are AED 2,400 and AED 3,000 respectively.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lf8">
                                How do I book a limousine with Arihant Travel?
                            </button>
                        </h2>
                        <div id="lf8" class="accordion-collapse collapse" data-bs-parent="#limoFaq">
                            <div class="accordion-body">
                                The fastest way to book is via <strong>WhatsApp at +971 58 594 5007</strong>. Just message us your preferred limo, date, time, duration, and any special requests (decoration, airport pickup, etc.). We'll confirm availability and pricing within minutes. You can also use the "Book on WhatsApp" buttons on this page.
                            </div>
                        </div>
                    </div>

                </div><!-- /accordion -->
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
            <h5 class="subscribe-title px-3">Ready to Ride in Style?</h5>
            <h2 class="text-white mb-4">Book Your Dubai Limousine Today</h2>
            <p class="text-white mb-2">Contact us on WhatsApp and our team will confirm your booking within minutes.</p>
            <p class="text-white mb-5">
                <i class="fas fa-check-circle me-2"></i>Professional Chauffeurs &nbsp;|&nbsp;
                <i class="fas fa-check-circle me-2"></i>No Hidden Fees &nbsp;|&nbsp;
                <i class="fas fa-check-circle me-2"></i>24/7 WhatsApp Support
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/971585945007?text=Hi, I want to book a Dubai limousine"
                   target="_blank" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                </a>
                <a href="/contact" class="btn btn-outline-light rounded-pill py-3 px-5">
                    <i class="fa fa-envelope me-2"></i>Contact Us
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
