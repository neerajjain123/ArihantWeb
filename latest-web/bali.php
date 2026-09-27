<?php
// Page SEO Variables
$pageTitle = "Bali Tour Packages from Dubai | International Tours - Arihant Travels";
$pageDescription = "Browse Bali tour packages from Dubai featuring Ubud, Kintamani, Tanah Lot Temple, Uluwatu, Nusa Penida, water sports, sunset dinner cruises…";
$pageKeywords = "bali tour packages dubai, bali holiday deals, international packages from dubai, bali travel uae, ubud tour, tanah lot temple, uluwatu temple, bali honeymoon package, bali safari, arihant travel international packages";
$pageCanonical = "https://arihantlink.com/bali";
$currentPage = "international-tours";

// Breadcrumb Variables
$pageHeading = "Bali Holiday Packages";
$breadcrumbCategory = "International";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/bali/hero-banner-Pura-Ulun-Danu-Bratan-dawn.jpg";
$breadcrumbOverlay = true;

// Package Data
$packages = [
    [
        "slug" => "bali-blissful-4n5d",
        "title" => "Blissful Bali 4 Nights / 5 Days",
        "duration" => "4 Nights / 5 Days",
        "description" => "The perfect Bali starter — explore Ubud & Kintamani, witness the sunset at Tanah Lot Temple, and enjoy thrilling water sports at Tanjung Benoa Beach.",
        "image" => "img/bali/Tanah-Lot-Temple.jpg",
        "price" => "From 960 AED",
        "highlights" => ["Ubud & Kintamani volcano tour", "Sunset at Tanah Lot Temple", "Banana Boat, Jet Ski & Flying Fish"],
        "badge" => "Budget Friendly",
        "link" => "bali-blissful-4n5d"
    ],
    [
        "slug" => "bali-fully-loaded-5n6d",
        "title" => "Bali Fully Loaded 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "Everything in the Blissful package plus Bali Safari & Marine Park with Jungle Hopper Pass — perfect for families and wildlife lovers.",
        "image" => "img/bali/Ubud-Rice-Terraces.jpg",
        "price" => "From 1,615 AED",
        "highlights" => ["Ubud, Kintamani & Tanah Lot", "Bali Safari & Marine Park", "Water sports at Tanjung Benoa"],
        "badge" => "Family Pick",
        "link" => "bali-fully-loaded-5n6d"
    ],
    [
        "slug" => "bali-honeymoon-special-5n6d",
        "title" => "Bali Honeymoon Special 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "A romantic Bali escape with a 120-minute Balinese spa, sunset dinner cruise, Uluwatu Temple with Kecak dance, and thrilling water sports.",
        "image" => "img/bali/ULUWATU-TEMPLE.jpg",
        "price" => "From 1,560 AED",
        "highlights" => ["120-min authentic Balinese spa", "Sunset dinner cruise", "Uluwatu Temple & Kecak dance"],
        "badge" => "Honeymoon",
        "link" => "bali-honeymoon-special-5n6d"
    ],
    [
        "slug" => "bali-hopper-5n6d",
        "title" => "Bali Hopper 5 Nights / 6 Days",
        "duration" => "5 Nights / 6 Days",
        "description" => "Experience Bali across 3 distinct areas — Kuta, a private pool villa, and Seminyak. Includes Ayung River rafting, sunset cruise, and Tanah Lot.",
        "image" => "img/bali/Nusa-Dua-bali.jpg",
        "price" => "From 2,140 AED",
        "highlights" => ["3-city stay with pool villa", "White water rafting on Ayung River", "Sunset dinner cruise"],
        "badge" => "Premium",
        "link" => "bali-hopper-5n6d"
    ],
    [
        "slug" => "bali-best-of-6n7d",
        "title" => "Best of Bali 6 Nights / 7 Days",
        "duration" => "6 Nights / 7 Days",
        "description" => "A comprehensive Bali experience — Ubud & Kintamani, Tanah Lot, Bali Safari, sunset dinner cruise, Ayung River rafting, and Tanjung Benoa water sports.",
        "image" => "img/bali/Mount-Batur.jpg",
        "price" => "From 1,975 AED",
        "highlights" => ["Bali Safari & Marine Park", "Ayung River white water rafting", "Sunset dinner cruise & water sports"],
        "badge" => "Best Seller",
        "link" => "bali-best-of-6n7d"
    ],
    [
        "slug" => "bali-beautiful-6n7d",
        "title" => "Beautiful Bali 6 Nights / 7 Days",
        "duration" => "6 Nights / 7 Days",
        "description" => "The ultimate Bali package — Ubud, Kintamani, Tanah Lot, Safari, rafting, sunset cruise, Bali Swing, Uluwatu Temple with Kecak dance, and water sports.",
        "image" => "img/bali/Gates-of-Heaven-Lempuyang-temple.jpg",
        "price" => "From 2,360 AED",
        "highlights" => ["Bali Swing + Uluwatu & Kecak dance", "Safari, rafting & sunset cruise", "Most complete Bali experience"],
        "badge" => "Grand Tour",
        "link" => "bali-beautiful-6n7d"
    ]
];

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Bali Holiday Packages from Dubai",
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
            <h5 class="section-title px-3">Bali Experiences</h5>
            <h2 class="mb-4">Temples, Rice Terraces & Tropical Adventures</h2>
            <p class="mb-0">Bali, the Island of the Gods, offers an enchanting blend of ancient temples, lush rice terraces, volcanic landscapes, and pristine beaches. From the cultural heart of Ubud to the dramatic clifftop temples of Uluwatu, from thrilling water sports to serene sunset cruises — Bali delivers unforgettable experiences for every traveller.</p>
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
                <img src="img/bali/Ubud-Rice-Terraces.jpg" class="img-fluid rounded-3 shadow"
                    alt="Custom Bali Tour">
            </div>
            <div class="col-lg-6">
                <h5 class="section-title px-3">Customization</h5>
                <h2 class="mb-4">Need a Custom Bali Itinerary?</h2>
                <p class="mb-4">Add Nusa Penida day trips, extend your stay in Ubud, combine Bali with Kuala Lumpur or Singapore, or plan a luxury villa retreat. Tell us your dates and we will tailor a private quote in under 24 hours.</p>
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
                            <p class="mb-0">Comfortable Resorts</p>
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
                    <a href="https://wa.me/971585945007?text=Plan a custom Bali tour" target="_blank"
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
