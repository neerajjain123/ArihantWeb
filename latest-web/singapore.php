<?php
// Page SEO Variables
$pageTitle = "Singapore Tour Packages from Dubai | International Tours - Arihant Travels";
$pageDescription = "Browse Singapore tour packages from Dubai featuring Universal Studios, Sentosa Island, Gardens by the Bay, Marina Bay Sands, Night Safari…";
$pageKeywords = "singapore tour packages dubai, singapore holiday deals, international packages from dubai, singapore travel uae, universal studios singapore, sentosa island, gardens by the bay, marina bay sands, night safari, arihant travel international packages";
$pageCanonical = "https://arihantlink.com/singapore";
$currentPage = "international-tours";

// Breadcrumb Variables
$pageHeading = "Singapore Holiday Packages";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/singapore/hero-banner-singapore.jpg";
$breadcrumbOverlay = true;

// Package Data
$packages = [
    [
        "slug" => "singapore-simply-4n5d",
        "title" => "Simply Singapore 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "The perfect Singapore starter — city tour covering Merlion Park, Chinatown, Little India, with free days to explore Sentosa or Universal Studios at your own pace.",
        "image" => "img/singapore/Singapore-Merlion-Park.jpg",
        "price" => "From 1,350 AED",
        "highlights" => ["Half-day city tour with guide", "Merlion Park & Chinatown", "Free days for Sentosa & shopping"],
        "badge" => "Budget Friendly",
        "link" => "singapore-simply-4n5d"
    ],
    [
        "slug" => "singapore-fascinating-4n5d",
        "title" => "Fascinating Singapore 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "City tour, Night Safari or Bird Paradise, Sentosa Island with cable car, S.E.A. Aquarium, Wings of Time show, and Gardens by the Bay conservatories.",
        "image" => "img/singapore/Gardens-by-The-Bay.webp",
        "price" => "From 2,160 AED",
        "highlights" => ["Night Safari / Bird Paradise", "Sentosa cable car & Aquarium", "Gardens by the Bay domes"],
        "badge" => "Popular",
        "link" => "singapore-fascinating-4n5d"
    ],
    [
        "slug" => "singapore-fully-loaded-4n5d",
        "title" => "Singapore Fully Loaded 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "Everything included — Universal Studios, Sentosa with Luge & Skyride, Singapore Flyer, Gardens by the Bay, city tour, and Night Safari or Bird Paradise.",
        "image" => "img/singapore/universal.jpg",
        "price" => "From 2,820 AED",
        "highlights" => ["Universal Studios full day", "Singapore Flyer & Gardens by the Bay", "Sentosa Luge & Wings of Time"],
        "badge" => "Best Seller",
        "link" => "singapore-fully-loaded-4n5d"
    ],
    [
        "slug" => "singapore-sensational-5n6d",
        "title" => "Sensational Singapore 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "The extended Singapore experience — Universal Studios, Sentosa, Gardens by the Bay, Marina Bay Sands Sky Park, city tour, Night Safari, and more leisure time.",
        "image" => "img/singapore/marina-bay-hotel.webp",
        "price" => "From 2,970 AED",
        "highlights" => ["Universal Studios + Sentosa", "Marina Bay Sands Sky Park", "Gardens by the Bay domes"],
        "badge" => "Family Pick",
        "link" => "singapore-sensational-5n6d"
    ],
    [
        "slug" => "singapore-stunning-sentosa-4n5d",
        "title" => "Stunning Singapore with Sentosa 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "Stay 3 nights in Singapore and 1 night at Resorts World Sentosa. City tour, Gardens by the Bay, Marina Bay Sands Sky Park, S.E.A. Aquarium, and Wings of Time.",
        "image" => "img/singapore/Sentosa-island.jpg",
        "price" => "From 2,870 AED",
        "highlights" => ["1 Night at Resorts World Sentosa", "Gardens by the Bay & MBS Sky Park", "S.E.A. Aquarium & Wings of Time"],
        "badge" => "Premium",
        "link" => "singapore-stunning-sentosa-4n5d"
    ],
    [
        "slug" => "singapore-best-of-sentosa-5n6d",
        "title" => "Best of Singapore with Sentosa 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "The ultimate Singapore package — 3 nights in the city and 2 nights at Resorts World Sentosa. Universal Studios, cable car, Aquarium, Gardens by the Bay, MBS Sky Park, and more.",
        "image" => "img/singapore/sentosa-island-tour.webp",
        "price" => "From 4,135 AED",
        "highlights" => ["2 Nights at Resorts World Sentosa", "Universal Studios full day", "Cable car, Aquarium & Wings of Time"],
        "badge" => "Grand Tour",
        "link" => "singapore-best-of-sentosa-5n6d"
    ]
];

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Singapore Holiday Packages from Dubai",
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
        "url": "https://arihantlink.com/' . $pkg['slug'] . '",
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
            <h5 class="section-title px-3">Singapore Experiences</h5>
            <h2 class="mb-4">The Lion City — Where Futuristic Meets Iconic</h2>
            <p class="mb-0">Singapore packs incredible experiences into one compact island city — from the futuristic Supertrees of Gardens by the Bay and the thrills of Universal Studios to the cultural quarters of Chinatown and Little India. Explore world-class attractions, indulge in legendary street food, and discover why Singapore is Southeast Asia's most visited destination.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($packages as $pkg): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 holiday-card position-relative">
                        <?php if (isset($pkg['badge'])): ?>
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3 z-index-1"><?php echo $pkg['badge']; ?></span>
                        <?php endif; ?>
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo $pkg['image']; ?>" class="card-img-top holiday-img"
                                alt="<?php echo $pkg['title']; ?>" style="height: 250px; object-fit: cover;">
                            <div class="holiday-duration position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded shadow-sm">
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
                                        <a href="<?php echo $pkg['link']; ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3">Details</a>
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
                <img src="img/singapore/Gardens-by-The-Bay.webp" class="img-fluid rounded-3 shadow" alt="Custom Singapore Tour">
            </div>
            <div class="col-lg-6">
                <h5 class="section-title px-3">Customization</h5>
                <h2 class="mb-4">Need a Custom Singapore Itinerary?</h2>
                <p class="mb-4">Combine Singapore with Malaysia or Bali, add Bintan Island beach days, upgrade to a Marina Bay Sands stay, or plan a multi-park Sentosa adventure. Tell us your dates and we will tailor a private quote in under 24 hours.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Airport Transfers</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Premium Hotels</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary me-2"></i>
                            <p class="mb-0">Skip-the-Line Tickets</p>
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
                    <a href="https://wa.me/971585945007?text=Plan a custom Singapore tour" target="_blank"
                        class="btn btn-primary rounded-pill py-3 px-5">Plan My Trip</a>
                    <a href="contact" class="btn btn-outline-primary rounded-pill py-3 px-5">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Custom Itinerary Section End -->

<style>
    .holiday-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .holiday-card:hover { transform: translateY(-10px); box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important; }
    .holiday-img { transition: transform 0.5s ease; }
    .holiday-card:hover .holiday-img { transform: scale(1.1); }
    .z-index-1 { z-index: 1; }
</style>

<?php include 'includes/footer.php'; ?>
