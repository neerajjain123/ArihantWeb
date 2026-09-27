<?php
// Page SEO Variables
$pageTitle = "Kazakhstan Almaty Tour Packages from Dubai | International Tours - Arihant Travels";
$pageDescription = "Browse Kazakhstan Almaty tour packages from Dubai featuring Shymbulak Ski Resort, Kolsai Lakes, Kaindy Lake, Charyn Canyon, Kok-Tobe Hill…";
$pageKeywords = "kazakhstan tour packages dubai, almaty holiday deals, international packages from dubai, almaty travel uae, shymbulak ski resort, big almaty lake tour, charyn canyon trip, kolsai lakes, arihant travel international packages";
$pageCanonical = "https://arihantlink.com/kazakhstan";
$currentPage = "international-tours";

// Breadcrumb Variables
$pageHeading = "Kazakhstan Almaty Holiday Packages";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/almaty/koslay-lake-cover.jpg";
$breadcrumbOverlay = true;

// Package Data
$packages = [
    [
        "slug" => "almaty-short-break-3n4d",
        "title" => "Simply Almaty 3 Nights / 4 Days",
        "duration" => "3 Nights / 4 Days",
        "description" => "A quick city escape to Almaty — explore Zenkov Cathedral, Panfilov Park, Kok-Tobe Hill cable car, Medeu Skating Rink, and Shymbulak Ski Resort gondola at 3,200 metres.",
        "image" => "img/almaty/zenkov-cathedral.webp",
        "price" => "From 1,799 AED",
        "highlights" => ["Kok-Tobe Hill cable car ride", "Medeu Rink & Shymbulak gondola", "Zenkov Cathedral & Panfilov Park"],
        "badge" => "Budget Friendly",
        "link" => "almaty-short-break-3n4d"
    ],
    [
        "slug" => "almaty-discovery-4n5d",
        "title" => "Almaty Discovery 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "Go beyond the city — Almaty city tour, Kolsai Lakes, Charyn Canyon day trip, Shymbulak Ski Resort, and Kok-Tobe Hill panoramic cable car ride.",
        "image" => "img/almaty/Charyn-Crayon.webp",
        "price" => "From 2,499 AED",
        "highlights" => ["Kolsai Lakes & Charyn Canyon day trip", "Shymbulak gondola at 3,200m", "Kok-Tobe Hill cable car ride"],
        "badge" => "Popular",
        "link" => "almaty-discovery-4n5d"
    ],
    [
        "slug" => "almaty-short-break-4n5d",
        "title" => "Almaty Short Break 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "A perfect short getaway to Almaty covering city highlights, Panfilov Park, Zenkov Cathedral, Kok-Tobe Hill cable car, Kolsai Lakes, Charyn Canyon, and Shymbulak Ski Resort.",
        "image" => "img/almaty/Kok-Tobe-Hill-22.webp",
        "price" => "From 2,450 AED",
        "highlights" => ["Kolsai Lakes & Charyn Canyon", "Kok-Tobe Hill cable car ride", "Shymbulak gondola at 3,200m"],
        "badge" => "Short Break",
        "link" => "almaty-short-break-4n5d"
    ],
    [
        "slug" => "almaty-best-of-5n6d",
        "title" => "Best of Almaty 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "The ultimate Almaty experience — Almaty city tour, Kolsai Lakes with overnight stay, Kaindy Lake by 4x4, Charyn Canyon, Shymbulak Ski Resort, and Kok-Tobe Hill panorama.",
        "image" => "img/almaty/Big-Almaty-Lake-1.webp",
        "price" => "From 3,235 AED",
        "highlights" => ["Kolsai Lakes overnight & Kaindy Lake 4x4", "Charyn Canyon — Grand Canyon of Asia", "Shymbulak gondola & Kok-Tobe cable car"],
        "badge" => "Best Seller",
        "link" => "almaty-best-of-5n6d"
    ]
];

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Kazakhstan Almaty Holiday Packages from Dubai",
  "description": "' . $pageDescription . '",
  "url": "' . $pageCanonical . '",
  "itemListElement": [';

foreach ($packages as $index => $pkg) {
    $schemaMarkup .= '
    {
      "@type": "ListItem",
      "position": ' . ($index + 1) . ',
      "item": {
        "@type": "TouristTrip",
        "name": "' . $pkg['title'] . '",
        "description": "' . $pkg['description'] . '",
        "url": "https://arihantlink.com/kazakhstan",
        "offers": {
          "@type": "Offer",
          "price": "' . str_replace(['From ', ' AED', ','], '', $pkg['price']) . '",
          "priceCurrency": "AED"
        }
      }
    }' . ($index < count($packages) - 1 ? ',' : '');
}

$schemaMarkup .= '
  ]
}
</script>';
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Introduction Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Kazakhstan Experiences</h5>
            <h2 class="mb-4">From Mountain Peaks to Ancient Canyons</h2>
            <p class="mb-0">Kazakhstan's cultural and economic hub, Almaty, offers stunning scenery, profound history, and thrilling adventure. Explore high-altitude ski resorts, turquoise alpine lakes, dramatic canyons, and a vibrant city surrounded by the majestic Tien Shan mountains.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($packages as $pkg): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 holiday-card position-relative">
                        <?php if (isset($pkg['badge'])): ?>
                            <span
                                class="badge bg-primary position-absolute top-0 end-0 m-3 z-index-1"><?php echo $pkg['badge']; ?></span>
                        <?php endif; ?>
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo $pkg['image']; ?>" class="card-img-top holiday-img"
                                alt="<?php echo $pkg['title']; ?>" style="height: 250px; object-fit: cover;">
                            <div
                                class="holiday-duration position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded shadow-sm">
                                <small class="fw-bold text-primary"><?php echo $pkg['duration']; ?></small>
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="flex-grow-1">
                                <h5 class="card-title fw-bold mb-3"><?php echo $pkg['title']; ?></h5>
                                <p class="card-text text-muted mb-4"><?php echo $pkg['description']; ?></p>
                                <ul class="list-unstyled mb-4">
                                    <?php foreach ($pkg['highlights'] as $highlight): ?>
                                        <li class="mb-2 small text-muted">
                                            <i class="fas fa-check-circle text-primary me-2"></i><?php echo $highlight; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                                <div class="holiday-price">
                                    <small class="text-muted d-block mb-1">Starting from</small>
                                    <span class="h6 fw-bold text-dark mb-0 text-nowrap"><?php echo $pkg['price']; ?></span>
                                </div>
                                <div class="d-flex gap-2">
                                    <?php if (isset($pkg['link'])): ?>
                                        <a href="<?php echo $pkg['link']; ?>"
                                            class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                            Details
                                        </a>
                                    <?php endif; ?>
                                    <a href="https://wa.me/971585945007?text=I'm interested in <?php echo urlencode($pkg['title']); ?>"
                                        target="_blank" class="btn btn-primary btn-sm rounded-pill px-3">
                                        <i class="fab fa-whatsapp me-2"></i>Quote
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Introduction Section End -->

<!-- Custom Itinerary Section Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img src="img/almaty/Charyn-Crayon.webp" class="img-fluid rounded-3 shadow"
                    alt="Custom Kazakhstan Tour">
            </div>
            <div class="col-lg-6">
                <h5 class="section-title px-3">Customization</h5>
                <h2 class="mb-4">Need a Custom Kazakhstan Itinerary?</h2>
                <p class="mb-4">Add Big Almaty Lake treks, extended Kolsai camping, or combine Almaty with Astana. Tell us your dates and we will tailor a private quote in under 24 hours.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Private Transfers</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Comfortable Hotels</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Expert Local Guides</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">24/7 Support</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <a href="https://wa.me/971585945007?text=Plan a custom Kazakhstan tour" target="_blank"
                        class="btn btn-primary rounded-pill py-3 px-5">Plan My Trip</a>
                    <a href="contact" class="btn btn-outline-primary rounded-pill py-3 px-5">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Custom Itinerary Section End -->

<style>
    .holiday-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .holiday-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
    }

    .holiday-img {
        transition: transform 0.5s ease;
    }

    .holiday-card:hover .holiday-img {
        transform: scale(1.1);
    }

    .z-index-1 {
        z-index: 1;
    }
</style>

<?php include 'includes/footer.php'; ?>
