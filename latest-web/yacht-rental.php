<?php
// Page SEO Variables
$pageTitle = "Luxury Yacht Rental Dubai | From AED 425/Hour";
$pageDescription = "Private luxury yacht charter in Dubai from AED 425/hour. 40ft, 44ft, 50ft & mega yachts for parties, sightseeing and family trips. Best prices guaranteed.";
$pageKeywords = "yacht rental dubai, private yacht charter dubai, luxury boat hire dubai, 50ft yacht dubai, 44ft yacht dubai, 40ft yacht dubai, yacht party dubai, arihant travel yacht";
$pageCanonical = "https://arihantlink.com/yacht-rental";
$currentPage = "yacht-rental";

// Breadcrumb Variables
$pageHeading = "Luxury Yacht Rental Dubai";
$breadcrumbCategory = "Yacht Rental";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/yacht/herobanner.jpg";
$breadcrumbOverlay = true;

// Yacht Data Array
$yachts = [
    [
        "name" => "40ft Luxury Yacht",
        "slug" => "40ft-yacht-charter",
        "image" => "img/yacht/40ft yacht/40ft-yacht.jpg",
        "price" => "From AED 425/Hour",
        "description" => "Our most popular budget-friendly charter option, offering a smooth ride and great views for small groups.",
        "rating" => "4.8",
        "reviews" => "187",
        "category" => "Standard",
        "capacity" => "10 Guests"
    ],
    [
        "name" => "44ft Luxury Yacht",
        "slug" => "44ft-yacht-charter",
        "image" => "img/yacht/44ft yatch/HeroBanner44ft.jpg",
        "price" => "From AED 450/Hour",
        "description" => "Experience comfort and style on our 44ft yacht, ideal for family outings and sightseeing tours around Dubai Marina.",
        "rating" => "4.8",
        "reviews" => "215",
        "category" => "Premium",
        "capacity" => "10 Guests"
    ],
    [
        "name" => "50ft Luxury Yacht",
        "slug" => "50ft-yacht-charter",
        "image" => "img/yacht/50ft Yacht/50feet-hero-banner.webp",
        "price" => "From AED 550/Hour",
        "description" => "A spacious and elegant yacht perfect for larger groups, parties, and corporate events with premium amenities.",
        "rating" => "4.9",
        "reviews" => "342",
        "category" => "Luxury",
        "capacity" => "18 Guests"
    ],
    [
        "name" => "55ft Luxury Yacht",
        "slug" => "55ft-yacht-charter",
        "image" => "img/yacht/55ft Yacht/hero-banner.jpg",
        "price" => "From AED 625/Hour",
        "description" => "Our flagship luxury yacht perfect for larger groups of up to 20 guests. Ideal for parties, corporate events, and special celebrations.",
        "rating" => "4.9",
        "reviews" => "156",
        "category" => "Premium",
        "capacity" => "20 Guests"
    ],
    [
        "name" => "60ft Luxury Yacht",
        "slug" => "60ft-yacht-charter",
        "image" => "img/yacht/60feet yacht/65a2ed15014ec-l.webp",
        "price" => "From AED 625/Hour",
        "description" => "Our largest luxury yacht for groups of up to 21 guests. Perfect for grand celebrations, corporate events, and exclusive parties.",
        "rating" => "4.9",
        "reviews" => "128",
        "category" => "Premium",
        "capacity" => "21 Guests"
    ],
    [
        "name" => "68ft Luxury Yacht",
        "slug" => "68ft-yacht-charter",
        "image" => "img/yacht/68ft Yacht/68-Ft-Luxury-Yacht-Dubai-1.jpg.webp",
        "price" => "From AED 800/Hour",
        "description" => "Our flagship 68ft luxury yacht for up to 28 guests. Perfect for grand celebrations, corporate events, and exclusive parties.",
        "rating" => "4.9",
        "reviews" => "98",
        "category" => "Premium",
        "capacity" => "28 Guests"
    ],
    [
        "name" => "75ft Luxury Yacht",
        "slug" => "75ft-yacht-charter",
        "image" => "img/yacht/75ft Yacht/07555d17-ed0c-42cb-a294-ff19d4c211d4.jpg",
        "price" => "From AED 980/Hour",
        "description" => "Our ultimate 75ft luxury yacht for up to 35 guests. Perfect for grand celebrations, weddings, corporate events, and exclusive parties.",
        "rating" => "4.9",
        "reviews" => "87",
        "category" => "Premium",
        "capacity" => "35 Guests"
    ],
    [
        "name" => "80ft Luxury Yacht",
        "slug" => "80ft-yacht-charter",
        "image" => "img/yacht/80ft yacht/6531e3781a98a-l.webp",
        "price" => "From AED 1250/Hour",
        "description" => "Our ultimate 80ft luxury yacht for up to 40 guests. Perfect for grand celebrations, weddings, corporate events, and exclusive parties.",
        "rating" => "4.9",
        "reviews" => "76",
        "category" => "Premium",
        "capacity" => "40 Guests"
    ],
    [
        "name" => "90ft Luxury Yacht",
        "slug" => "90ft-yacht-charter",
        "image" => "img/yacht/90ft Yacht/90-1-scaled.webp",
        "price" => "From AED 1800/Hour",
        "description" => "Our flagship 90ft luxury yacht for up to 50 guests. The ultimate choice for grand celebrations, weddings, corporate events, and exclusive parties.",
        "rating" => "4.9",
        "reviews" => "64",
        "category" => "Premium",
        "capacity" => "50 Guests"
    ]
];

// JSON-LD Schema
$schemaElements = [];
foreach ($yachts as $index => $yacht) {
    $schemaElements[] = [
        "@type" => "ListItem",
        "position" => $index + 1,
        "item" => [
            "@type" => "Product",
            "name" => $yacht['name'],
            "description" => $yacht['description'],
            "image" => "https://arihanttravel.com/" . $yacht['image'],
            "offers" => [
                "@type" => "Offer",
                "priceCurrency" => "AED",
                "availability" => "https://schema.org/InStock"
            ]
        ]
    ];
}

$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Luxury Yacht Rentals Dubai",
  "description": "' . $pageDescription . '",
  "itemListElement": ' . json_encode($schemaElements, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '
}
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
include 'includes/wishlist-button.php';
?>

<!-- Main Content -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Private Charters</h5>
            <h2 class="h1 mb-4">Luxury Yacht Rental Dubai &mdash; Private Yacht Charter from AED 425/Hour</h2>
            <p class="mb-0 text-muted">Discover the breathtaking coastline of Dubai from the deck of your own private
                yacht. We offer a range of luxury vessels tailored to your needs, whether it's a romantic sunset cruise
                or a lively party with friends.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($yachts as $yacht): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow border-0 overflow-hidden excursion-card">
                        <div class="position-relative">
                            <a href="/<?= $yacht['slug'] ?>">
                                <img src="<?= $yacht['image'] ?>" class="card-img-top" alt="<?= $yacht['name'] ?>"
                                    style="height: 250px; object-fit: cover;">
                            </a>
                            <span
                                class="badge bg-primary position-absolute top-0 start-0 m-3"><?= $yacht['category'] ?></span>
                            <span class="badge bg-secondary position-absolute top-0 end-0 m-3"><?= $yacht['price'] ?></span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <a href="/<?= $yacht['slug'] ?>" class="text-decoration-none text-dark">
                                    <h5 class="card-title mb-0"><?= $yacht['name'] ?></h5>
                                </a>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i> <?= $yacht['rating'] ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <span class="text-muted small"><i class="fas fa-users me-1"></i> Capacity:
                                    <?= $yacht['capacity'] ?></span>
                            </div>
                            <p class="card-text text-muted mb-4"><?= $yacht['description'] ?></p>

                            <div class="mt-auto d-flex gap-2">
                                <a href="/<?= $yacht['slug'] ?>" class="btn btn-primary flex-grow-1">View Details</a>
                                <a href="https://wa.me/971585945007?text=I'm interested in booking the <?= $yacht['name'] ?>"
                                    target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Why Choose Us -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Why Book With Us</h5>
            <h2 class="mb-4">The Arihant Travels Experience</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-anchor fa-3x text-primary mb-4"></i>
                    <h5>Modern Fleet</h5>
                    <p class="mb-0">Well-maintained yachts with the latest safety equipment and luxury amenities.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-user-shield fa-3x text-primary mb-4"></i>
                    <h5>Professional Crew</h5>
                    <p class="mb-0">Experienced captains and crew members dedicated to your safety and comfort.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-glass-cheers fa-3x text-primary mb-4"></i>
                    <h5>Inclusions</h5>
                    <p class="mb-0">Enjoy complimentary soft drinks, water, and ice on every charter.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-tags fa-3x text-primary mb-4"></i>
                    <h5>Best Price Guaranteed</h5>
                    <p class="mb-0">Premium yacht experiences at the most competitive rates in Dubai.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Customer reviews -->
<?php
$reviewsHeading = 'What Yacht Charter Guests Say';
$pageReviews = [
    ['name' => 'Bhandari Group', 'location' => 'Dubai, UAE', 'stars' => 5,
     'text' => 'Chartered the 55ft yacht for a family birthday. Pure veg catering arranged on board, and the crew was wonderful with the kids. Marina views at sunset were unreal.'],
    ['name' => 'Rohan & Friends', 'location' => 'Mumbai, India', 'stars' => 5,
     'text' => 'Clean, well-maintained yacht, on-time boarding and transparent pricing — no surprise charges. Arihant handled everything over WhatsApp before we even landed in Dubai.'],
    ['name' => 'Vora Family', 'location' => 'Ahmedabad, India', 'stars' => 5,
     'text' => 'We wanted a Jain food menu for a 3-hour cruise and they arranged it with the caterer without fuss. Booking to boarding, the whole experience was seamless.'],
];
include 'includes/customer-reviews.php';
unset($reviewsHeading, $pageReviews);
?>

<?php echo $schemaMarkup; ?>

<?php include 'includes/footer.php'; ?>