<?php
// Page SEO Variables
$pageTitle = "Georgia Holiday Packages from Dubai | International Tours - Arihant Travels";
$pageDescription = "Browse Georgia tour packages from Dubai featuring Tbilisi, Mtskheta, Gudauri, Kazbegi, Kakheti, Uplistsikhe, Borjomi, and Batumi.";
$pageKeywords = "georgia tour packages dubai, international packages from dubai, caucasus holiday deals, tbilisi holiday package, georgia wine tour uae, gudauri kazbegi trip, georgia ski package, snowcapped georgia adventure, georgia undiscovered jewel, georgia batumi tour, ariant travel international packages";
$pageCanonical = "https://arihantlink.com/georgia";
$currentPage = "international-tours";

// Breadcrumb Variables
$pageHeading = "Georgia Holiday Packages";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/blogs/georgia/Georgia_banner.avif";
$breadcrumbOverlay = true;

// Package Data (Extracted from georgia.astro)
$packages = [
    [
        "slug" => "georgia-3n4d",
        "title" => "Georgia Discovery 3 Nights / 4 Days",
        "duration" => "3 Nights / 4 Days",
        "description" => "Explore Tbilisi Old Town, UNESCO Mtskheta, and Caucasus viewpoints with seamless airport transfers and daily breakfast.",
        "image" => "img/blogs/georgia/mtskheta-street.webp",
        "price" => "From 999 AED",
        "highlights" => ["Airport pickup & drop", "Tbilisi + Mtskheta tour", "Gudauri mountain drive"],
        "badge" => "Discovery",
        "link" => "georgia-3n4d"
    ],
    [
        "slug" => "georgia-4n5d",
        "title" => "Discover the Caucasus Gem 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "Adds Kakheti wine country, Gergeti 4×4 option, and more leisure time across Tbilisi, Gudauri, and Kazbegi.",
        "image" => "img/blogs/georgia/kazbegi-gergeti-trinity-church.webp",
        "price" => "From 1,499 AED",
        "highlights" => ["Kakheti wine tasting", "Gudauri + Kazbegi day trip", "4-star hotels with breakfast"],
        "badge" => "Best Seller",
        "link" => "georgia-4n5d"
    ],
    [
        "slug" => "georgia-tbilisi-batumi-4n5d",
        "title" => "Tbilisi to Batumi Getaway 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "Perfect combination: Tbilisi's cultural charm and Batumi's coastal energy. Includes Prometheus Cave and Martvili Canyon.",
        "image" => "img/blogs/georgia/batumi-district.webp",
        "price" => "From 2,599 AED",
        "highlights" => ["Tbilisi city tour & Mtatsminda", "Prometheus Cave & Martvili Canyon", "Batumi Botanical Gardens"],
        "badge" => "Coastal",
        "link" => "georgia-tbilisi-batumi-4n5d"
    ],
    [
        "slug" => "georgia-tbilisi-gudauri-5n6d",
        "title" => "Explore Tbilisi & Gudauri 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "Combining Old Tbilisi walks, Mtskheta UNESCO sites, Gudauri peaks, Kazbegi 4×4, plus Gori and Uplistsikhe excursions.",
        "image" => "img/blogs/georgia/ananuri-fortress.webp",
        "price" => "From 1,799 AED",
        "highlights" => ["Old Tbilisi + Mtatsminda", "Gudauri & Kazbegi 4×4", "Gori & Uplistsikhe detour"],
        "badge" => "Exploration",
        "link" => "georgia-tbilisi-gudauri-5n6d"
    ],
    [
        "slug" => "georgia-5n6d",
        "title" => "Snowcapped Georgia Adventure 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "Winter ski adventure in Gudauri resort with 4 nights on the slopes, plus Tbilisi Old Town exploration.",
        "image" => "img/blogs/georgia/gudauri-mountain.webp",
        "price" => "From 1,999 AED",
        "highlights" => ["4 nights Gudauri ski resort", "Ski activities & winter sports", "Old Tbilisi cultural tour"],
        "badge" => "Adventure",
        "link" => "georgia-5n6d"
    ],
    [
        "slug" => "georgia-6n7d",
        "title" => "Georgia the Undiscovered Jewel 6 Nights / 7 Days",
        "duration" => "6 Nights / 7 Days",
        "description" => "Discover hidden gems: Tbilisi, UNESCO Mtskheta, Kazbegi, Kakheti wine region, Borjomi, and Dashbash Canyon.",
        "image" => "img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.webp",
        "price" => "From 2,599 AED",
        "highlights" => ["Undiscovered jewels", "Tbilisi + Kazbegi + Kakheti", "Borjomi + Dashbash Canyon"],
        "badge" => "Featured",
        "link" => "georgia-6n7d"
    ],
    [
        "slug" => "georgia-7n8d",
        "title" => "Tour the Captivating Georgia 7 Nights / 8 Days",
        "duration" => "7 Nights / 8 Days",
        "description" => "Complete Georgia experience: Tbilisi, Uplistsikhe, Borjomi wellness, Akhaltsikhe Castle, Mtskheta, Gudauri, and Kazbegi.",
        "image" => "img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.webp",
        "price" => "From 2,999 AED",
        "highlights" => ["Uplistsikhe + Borjomi + Akhaltsikhe", "Sulfur baths & wellness", "Complete Caucasus experience"],
        "badge" => "Grand Tour",
        "link" => "georgia-7n8d"
    ]
];

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Georgia Holiday Packages from Dubai",
  "description": "' . $pageDescription . '",
  "url": "' . $pageCanonical . '",
  "itemListElement": [';

foreach ($packages as $index => $pkg) {
    $schemaMarkup .= '
    {
      "@type": "ListItem",
      "position": ' . ($index + 1) . ',
      "item": {
        "@type": "Tour",
        "name": "' . $pkg['title'] . '",
        "description": "' . $pkg['description'] . '",
        "url": "https://arihantlink.com/georgia",
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
            <h5 class="section-title px-3">Georgia Experiences</h5>
            <h2 class="mb-4">From Tbilisi Old Town to Gudauri Peaks</h2>
            <p class="mb-0">Every Georgia itinerary mixes cobblestone charm, UNESCO-listed monasteries, Caucasus
                viewpoints, and Kakheti wine tasting. Choose the pace that suits your crew—weekend dash or leisurely
                five-day vacation.</p>
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
                <img src="img/blogs/georgia/mtskheta-street.webp" class="img-fluid rounded-3 shadow"
                    alt="Custom Georgia Tour">
            </div>
            <div class="col-lg-6">
                <h5 class="section-title px-3">Customization</h5>
                <h2 class="mb-4">Need a Custom Georgia Itinerary?</h2>
                <p class="mb-4">Add Batumi beaches, Borjomi wellness breaks, or Svaneti hikes. Tell us your dates and we
                    will tailor a private quote in under 24 hours.</p>
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
                            <p class="mb-0">Verified 4-Star Hotels</p>
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
                    <a href="https://wa.me/971585945007?text=Plan a custom Georgia tour" target="_blank"
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