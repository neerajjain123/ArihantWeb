<?php
// Page SEO Variables
$pageTitle = "Armenia Holiday Packages from Dubai | International Tours - Arihant Travels";
$pageDescription = "Browse Armenia tour packages from Dubai featuring Yerevan, ancient monasteries, Lake Sevan, and stunning mountain landscapes.";
$pageKeywords = "armenia tour packages dubai, yerevan holiday deals, international packages from dubai, armenia travel uae, arihant travel international packages, monastery tour armenia, lake sevan tour, tatev monastery trip";
$pageCanonical = "https://arihantlink.com/armenia";
$currentPage = "international-tours";

// Breadcrumb Variables
$pageHeading = "Armenia Holiday Packages";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/armenia/Armenia-Tour-package-cover.jpg";
$breadcrumbOverlay = true;

// Package Data
$packages = [
    [
        "slug" => "armenia-yerevan-getaway-3n4d",
        "title" => "Yerevan Getaway 3 Nights / 4 Days",
        "duration" => "3 Nights / 4 Days",
        "description" => "A quick escape to Armenia's vibrant capital. Explore Yerevan's cafes, Republic Square, the Cascade, and nearby Garni Temple with comfortable stays and transfers.",
        "image" => "img/armenia/Yerevan-City-Tour.jpg",
        "price" => "From 1,650 AED",
        "highlights" => ["Yerevan city tour", "Garni Temple & Geghard Monastery", "Airport transfers included"],
        "badge" => "Getaway",
        "link" => "armenia-yerevan-getaway-3n4d"
    ],
    [
        "slug" => "armenia-delightful-3n4d",
        "title" => "Delightful Armenia 3 Nights / 4 Days",
        "duration" => "3 Nights / 4 Days",
        "description" => "Discover the best of Armenia on a budget. Visit Khor Virap with Ararat views, explore ancient monasteries, and savour local cuisine in Yerevan.",
        "image" => "img/armenia/Monastery-Khor-Virap.jpg",
        "price" => "From 1,200 AED",
        "highlights" => ["Khor Virap Monastery & Mt. Ararat views", "Yerevan walking tour", "Daily breakfast included"],
        "badge" => "Value",
        "link" => "armenia-delightful-3n4d"
    ],
    [
        "slug" => "armenia-amazing-4n5d",
        "title" => "Amazing Armenia 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "Dive deeper into Armenia's heritage with visits to Lake Sevan, Noravank Canyon, wine tasting in Areni, and the iconic Tatev Monastery via the Wings of Tatev cable car.",
        "image" => "img/armenia/Lake-Sevan-Armenia.jpg",
        "price" => "From 2,499 AED",
        "highlights" => ["Lake Sevan & Sevanavank", "Noravank Monastery & Areni winery", "Tatev cable car experience"],
        "badge" => "Best Seller",
        "link" => "armenia-amazing-4n5d"
    ],
    [
        "slug" => "armenia-explore-5n6d",
        "title" => "Explore Armenia 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "A comprehensive tour covering Yerevan, Dilijan's lush forests, Lake Sevan, Tatev Monastery, and the cave city of Khndzoresk. Perfect for nature and history lovers.",
        "image" => "img/armenia/Haghartsin-monastery-Armenia.jpg",
        "price" => "From 2,600 AED",
        "highlights" => ["Dilijan National Park & Haghartsin", "Khndzoresk cave village", "Full monastery circuit"],
        "badge" => "Exploration",
        "link" => "armenia-explore-5n6d"
    ],
    [
        "slug" => "armenia-grand-tour-6n7d",
        "title" => "Grand Tour of Armenia 6 Nights / 7 Days",
        "duration" => "6 Nights / 7 Days",
        "description" => "The ultimate Armenia experience. Cover every highlight from Yerevan to Gyumri, Dilijan to Tatev, Lake Sevan to Areni wine country. Includes all transfers and guided excursions.",
        "image" => "img/armenia/Armenia-Monastery-Tatev.jpg",
        "price" => "From 3,700 AED",
        "highlights" => ["Complete Armenia circuit", "Gyumri cultural city tour", "All transfers & guided excursions"],
        "badge" => "Grand Tour",
        "link" => "armenia-grand-tour-6n7d"
    ]
];

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Armenia Holiday Packages from Dubai",
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
        "url": "https://arihantlink.com/armenia",
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
            <h5 class="section-title px-3">Armenia Experiences</h5>
            <h2 class="mb-4">From Ancient Monasteries to Mountain Landscapes</h2>
            <p class="mb-0">Armenia offers a captivating blend of ancient history, stunning highland scenery, and warm hospitality. Explore UNESCO-listed monasteries, serene Lake Sevan, and vibrant Yerevan — choose the itinerary that fits your pace.</p>
        </div>

        <div class="row g-4">
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
                <img src="img/armenia/Noravank-Monastery.jpg" class="img-fluid rounded-3 shadow"
                    alt="Custom Armenia Tour">
            </div>
            <div class="col-lg-6">
                <h5 class="section-title px-3">Customization</h5>
                <h2 class="mb-4">Need a Custom Armenia Itinerary?</h2>
                <p class="mb-4">Add wine tasting in Areni, hiking in Dilijan, or extend your stay at Lake Sevan. Tell us your dates and we will tailor a private quote in under 24 hours.</p>
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
                    <a href="https://wa.me/971585945007?text=Plan a custom Armenia tour" target="_blank"
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
