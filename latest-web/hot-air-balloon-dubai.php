<?php
// Page SEO Variables
$pageTitle = "Hot Air Balloon Dubai | Sunrise Flight Experience | Arihant Travels";
$pageDescription = "Book your magical Hot Air Balloon ride in Dubai. Packages include Magical, Fiesta, and Extreme flights with desert safari, breakfast, and more.";
$pageKeywords = "hot air balloon dubai, dubai balloon ride, hot air balloon price dubai, hot air balloon with breakfast, hot air balloon desert safari, sunrise hot air balloon dubai, best hot air balloon dubai deals, hot air balloon magical package dubai, hot air balloon fiesta package with desert safari, hot air balloon extreme package with quad bike, arihant travel hot air balloon";
$pageCanonical = "https://arihantlink.com/hot-air-balloon-dubai";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Hot Air Balloon Dubai Experience";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg";
$breadcrumbOverlay = true;

// Packages Data
$packages = [
    [
        "name" => "Magical Experience",
        "slug" => "hot-air-balloon-magical",
        "image" => "img/hotairbaloon/Hot-air-balloon-ride-at-sunrise-Dubai.webp",
        "price" => "From AED 699",
        "description" => "A peaceful sunrise flight over the Dubai desert, perfect for those seeking the essential balloon experience.",
        "rating" => "4.8",
        "reviews" => "156",
        "category" => "Essential"
    ],
    [
        "name" => "Fiesta Experience",
        "slug" => "hot-air-balloon-fiesta",
        "image" => "img/hotairbaloon/Fiesta-Dubai-hot-air-baloon-Camel-Ride.webp",
        "price" => "From AED 799",
        "description" => "Our most popular choice, including a gourmet breakfast, desert safari, and cultural experiences.",
        "rating" => "4.9",
        "reviews" => "245",
        "category" => "Popular"
    ],
    [
        "name" => "Extreme Experience",
        "slug" => "hot-air-balloon-extreme",
        "image" => "img/hotairbaloon/quad.jpg",
        "price" => "From AED 899",
        "description" => "The ultimate desert adventure combining a balloon flight with quad biking, sandboarding, and more.",
        "rating" => "5.0",
        "reviews" => "180",
        "category" => "Adventure"
    ]
];

// Schema Markup
$schemaElements = [];
foreach ($packages as $index => $pkg) {
    $schemaElements[] = [
        "@type" => "ListItem",
        "position" => $index + 1,
        "item" => [
            "@type" => "Product",
            "name" => $pkg['name'],
            "description" => $pkg['description'],
            "image" => "https://arihantlink.com/" . $pkg['image'],
            "offers" => [
                "@type" => "Offer",
                "price" => (string) (int) preg_replace('/\D/', '', strtok($pkg['price'], '/')),
                "priceCurrency" => "AED",
                "availability" => "https://schema.org/InStock",
                "url" => "https://arihantlink.com/" . $pkg['slug']
            ]
        ]
    ];
}

$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Hot Air Balloon Dubai Packages",
  "description": "' . $pageDescription . '",
  "itemListElement": ' . json_encode($schemaElements, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the best time for a hot air balloon ride in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "All flights are scheduled for sunrise for optimal weather conditions and breathtaking views."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the actual flight time?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The hot air balloon flight itself lasts for approximately 40 to 60 minutes."
      }
    }
  ]
}
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Main Content -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Fly High</h5>
            <h2 class="mb-4">Hot Air Balloon Dubai Packages</h2>
            <p class="mb-0 text-muted">Experience the tranquility of soaring 4,000 feet above the Dubai desert at
                sunrise. Choose from our curated packages tailored for essential beauty or ultimate adventure.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($packages as $pkg): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow border-0 overflow-hidden excursion-card">
                        <div class="position-relative">
                            <a href="/<?= $pkg['slug'] ?>">
                                <img src="<?= $pkg['image'] ?>" class="card-img-top" alt="<?= $pkg['name'] ?>"
                                    style="height: 280px; object-fit: cover;">
                            </a>
                            <span
                                class="badge bg-primary position-absolute top-0 start-0 m-3"><?= $pkg['category'] ?></span>
                            <span class="badge bg-secondary position-absolute top-0 end-0 m-3"><?= $pkg['price'] ?></span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="/<?= $pkg['slug'] ?>" class="text-decoration-none text-dark">
                                    <h5 class="card-title mb-0"><?= $pkg['name'] ?></h5>
                                </a>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i> <?= $pkg['rating'] ?>
                                    <span class="text-muted small">(<?= $pkg['reviews'] ?>)</span>
                                </div>
                            </div>
                            <p class="card-text text-muted mb-4"><?= $pkg['description'] ?></p>

                            <div class="mt-auto d-flex gap-2">
                                <a href="/<?= $pkg['slug'] ?>" class="btn btn-primary flex-grow-1">View
                                    Details</a>
                                <a href="https://wa.me/971585945007?text=I'm interested in booking the <?= $pkg['name'] ?>"
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
            <h2 class="mb-4">Why Book Your Flight with Arihant Travels?</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-hand-holding-usd fa-3x text-primary mb-4"></i>
                    <h5>Competitive Prices</h5>
                    <p class="mb-0">Get the best value for your sunrise flight with our transparent pricing.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-clock fa-3x text-primary mb-4"></i>
                    <h5>Save Time</h5>
                    <p class="mb-0">Instant booking confirmation and hassle-free hotel transfers included.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-user-tie fa-3x text-primary mb-4"></i>
                    <h5>Expert Advice</h5>
                    <p class="mb-0">Our team helps you choose the perfect package for your group size.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-check-circle fa-3x text-primary mb-4"></i>
                    <h5>Official Tickets</h5>
                    <p class="mb-0">100% authentic bookings with signed flight certificates.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">FAQs</h5>
            <h2 class="mb-4">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="balloonAccordion">
                    <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                What is the actual flight duration?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#balloonAccordion">
                            <div class="accordion-body">
                                The flight duration is typically between 40 to 60 minutes, depending on the day's wind
                                and weather conditions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2">
                                Are children allowed on the flight?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#balloonAccordion">
                            <div class="accordion-body">
                                Children between 5 and 11 years old are welcome. For safety reasons, infants under 5 are
                                not permitted.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3">
                                What should I wear for the balloon flight?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#balloonAccordion">
                            <div class="accordion-body">
                                Wear comfortable, layered clothing and flat, closed-toe shoes. It's often cool in the
                                desert before sunrise.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-4">Get Exclusive Balloon Deals</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers and updates on our
                latest Dubai adventures.</p>
            <div class="position-relative mx-auto" style="max-width: 600px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->

<?php echo $schemaMarkup; ?>
<?php include 'includes/footer.php'; ?>