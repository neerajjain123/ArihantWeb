<?php
// Page SEO Variables
$pageTitle = "Azerbaijan Holiday Packages from Dubai | Baku & Gabala Tours - Arihant Travels";
$pageDescription = "Discover amazing Azerbaijan tour packages from Dubai. Explore Baku's modern skyline and Gabala's natural beauty.";
$pageKeywords = "baku tour packages dubai, azerbaijan holiday deals, international packages from dubai, baku gabala tour, azerbaijan travel uae, arihant travel international packages, baku city tour package";
$pageCanonical = "https://arihantlink.com/baku";
$currentPage = "international-tours";

// Breadcrumb Variables
$pageHeading = "Azerbaijan Holiday Packages";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/baku/baku-cityscape-flametowers.jpeg";
$breadcrumbOverlay = true;

// Package Data
$packages = [
    [
        "slug" => "baku-4n5d",
        "title" => "Best of Baku with Gabala 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "Experience the best of Azerbaijan: From the futuristic Flame Towers of Baku to the serene mountains and waterfalls of Gabala.",
        "image" => "img/baku/Gabala-mountain.jpg",
        "price" => "From 1,200 AED",
        "highlights" => ["Baku & Gabala (2N each)", "Lake Nohur & 7 Gozel Waterfall", "Tufandag Mountain Cable Car"],
        "badge" => "Best Seller",
        "link" => "baku-4n5d"
    ],
    [
        "slug" => "baku-3n4d",
        "title" => "Short Trip to Baku with Gabala 3 Nights / 4 Days",
        "duration" => "3 Nights / 4 Days",
        "description" => "A compact tour featuring the UNESCO Old City of Baku and a refreshing mountain escape to Gabala's lakes and waterfalls.",
        "image" => "img/baku/baku-cityscape-flametowers.jpeg",
        "price" => "From 1,200 AED",
        "highlights" => ["Central Baku Accomodation", "Baku Old City & Modern Highlights", "Gabala Day Trip Excursion"],
        "badge" => "Short Break",
        "link" => "baku-3n4d"
    ],
    [
        "slug" => "baku-5n6d",
        "title" => "The Voyage of Azerbaijan 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "The ultimate Azeri journey: Baku's skyscrapers, Gabala's peaks, Gobustan's ancient art, and the Fire Temples.",
        "image" => "img/baku/night-panorama-baku.jpg",
        "price" => "From 1,600 AED",
        "highlights" => ["Gobustan & Mud Volcanoes", "Absheron Fire Mountain Tour", "Full Gabala & Baku Experience"],
        "badge" => "Voyage",
        "link" => "baku-5n6d"
    ],
    [
        "slug" => "baku-relax-5n6d",
        "title" => "Relaxed Baku with Gabala 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "A balanced retreat with 2 nights in the scenic Caucasus Mountains of Gabala and 3 nights in the vibrant capital, Baku.",
        "image" => "img/baku/yeddi-gozel-waterfall.webp",
        "price" => "From 1,600 AED",
        "highlights" => ["2 Nights Gabala Mountain Stay", "Lada Drives to Mud Volcanoes", "Baku Old City Heritage"],
        "badge" => "Multi-City",
        "link" => "baku-relax-5n6d"
    ],
    [
        "slug" => "baku-shahdag-4n5d",
        "title" => "Baku with Shahdag & Gobustan 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "From high-altitude Alpine resorts at Shahdag to the bubbling mud volcanoes of Gobustan, experience the diverse soul of Azerbaijan.",
        "image" => "img/baku/baku-night-city-panaroma-view.jpg",
        "price" => "From 1,200 AED",
        "highlights" => ["Shahdag Mountain Resort", "Petroglyphs & Mud Volcanoes", "Land of Fire Tour"],
        "badge" => "Adventure",
        "link" => "baku-shahdag-4n5d"
    ],
    [
        "slug" => "baku-6n7d",
        "title" => "Discover Azerbaijan 6 Nights / 7 Days",
        "duration" => "6 Nights / 7 Days",
        "description" => "The most comprehensive experience: 4-star luxury stay in Baku with deep-dive excursions to Guba, Gabala, and Gobustan.",
        "image" => "img/baku/baku-cityscape-flametowers.jpeg",
        "price" => "From 1,900 AED",
        "highlights" => ["4-Star Hotel Renaissance Palace", "Guba Forest & Red Village", "Full Week Experience"],
        "badge" => "Premium",
        "link" => "baku-6n7d"
    ]
];

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Azerbaijan Holiday Packages from Dubai",
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
        "url": "https://arihantlink.com/baku-4n5d",
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
            <h5 class="section-title px-3">Azerbaijan Experiences</h5>
            <h2 class="h1 mb-4">Where Modernity Meets Ancient Fire</h2>
            <p class="mb-0">Azerbaijan offers a unique blend of East and West. From the cosmopolitan energy of Baku's
                oil-rich boulevards to the timeless villages of the Caucasus mountains, our packages are designed to
                show you the heart of this "Land of Fire."</p>
        </div>

        <div class="row g-4">
            <?php foreach ($packages as $pkg): ?>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="card h-100 shadow-sm border-0 holiday-card position-relative">
                        <?php if (isset($pkg['badge'])): ?>
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3 z-index-1">
                                <?php echo $pkg['badge']; ?>
                            </span>
                        <?php endif; ?>
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo $pkg['image']; ?>" class="card-img-top holiday-img"
                                alt="<?php echo $pkg['title']; ?>" style="height: 250px; object-fit: cover;">
                            <div
                                class="holiday-duration position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded shadow-sm">
                                <small class="fw-bold text-primary">
                                    <?php echo $pkg['duration']; ?>
                                </small>
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="flex-grow-1">
                                <h5 class="card-title fw-bold mb-3">
                                    <?php echo $pkg['title']; ?>
                                </h5>
                                <p class="card-text text-muted mb-4">
                                    <?php echo $pkg['description']; ?>
                                </p>
                                <ul class="list-unstyled mb-4">
                                    <?php foreach ($pkg['highlights'] as $highlight): ?>
                                        <li class="mb-2 small text-muted">
                                            <i class="fas fa-check-circle text-primary me-2"></i>
                                            <?php echo $highlight; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                                <div class="holiday-price">
                                    <small class="text-muted d-block mb-1">Starting from</small>
                                    <span class="h6 fw-bold text-dark mb-0 text-nowrap">
                                        <?php echo $pkg['price']; ?>
                                    </span>
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