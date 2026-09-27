<?php
// Page SEO Variables
$pageTitle = "Dubai Excursion Tickets & Attractions | Arihant Travels";
$pageDescription = "Book official tickets for Dubai's top attractions & excursions with Arihant Travels. Get deals on Burj Khalifa, Miracle Garden, Global Village, museums…";
$pageKeywords = "Dubai excursion tickets, Dubai attraction tickets, Burj Khalifa tickets, Miracle Garden tickets, Global Village tickets, Museum of the Future tickets, Dubai Frame tickets, AYA Universe tickets, Dubai Aquarium tickets, Arihant Travels, book Dubai attractions";
$pageCanonical = "https://arihantlink.com/dubai-excursions";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Dubai Excursions & Tickets";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/excursion/global-village-1.avif";
$breadcrumbOverlay = true;

// Excursions Data Array
$excursions = [
    [
        "name" => "Dubai Miracle Garden",
        "slug" => "miracle-garden",
        "image" => "img/excursion/miraclegarden.jpg",
        "price" => "From AED 100",
        "description" => "Explore a stunning oasis featuring over 150 million flowers arranged in incredible designs and structures.",
        "rating" => "4.8",
        "reviews" => "1,253",
        "category" => "Garden"
    ],
    [
        "name" => "Museum of the Future",
        "slug" => "museum-of-the-future",
        "image" => "img/excursion/MOTF01.jpg",
        "price" => "From AED 149",
        "description" => "Journey into the future through immersive exhibits exploring technology, space, and innovation.",
        "rating" => "4.9",
        "reviews" => "2,145",
        "category" => "Museum"
    ],
    [
        "name" => "Global Village",
        "slug" => "global-village",
        "image" => "img/excursion/global-village-1.avif",
        "price" => "From AED 25",
        "description" => "Experience cultures from around the world with shopping, food, entertainment, and rides (seasonal).",
        "rating" => "4.7",
        "reviews" => "3,567",
        "category" => "Entertainment"
    ],
    [
        "name" => "Dubai Frame",
        "slug" => "dubai-frame",
        "image" => "img/excursion/Dubai-Frame-1.avif",
        "price" => "From AED 53",
        "description" => "Walk across the glass bridge of this architectural landmark offering panoramic views of Old and New Dubai.",
        "rating" => "4.6",
        "reviews" => "1,892",
        "category" => "Landmark"
    ],
    [
        "name" => "The View at The Palm",
        "slug" => "view-at-the-palm",
        "image" => "img/excursion/view-at-the-palm-1.jpeg.webp",
        "price" => "From AED 110",
        "description" => "Get stunning 360-degree views of the iconic Palm Jumeirah and Dubai skyline from this observation deck.",
        "rating" => "4.7",
        "reviews" => "987",
        "category" => "Observation"
    ],
    [
        "name" => "AYA Universe",
        "slug" => "aya-universe",
        "image" => "img/excursion/aya-universe-4.jpg",
        "price" => "From AED 135",
        "description" => "Immerse yourself in a futuristic world of interactive light and sound installations at Wafi City Mall.",
        "rating" => "4.8",
        "reviews" => "756",
        "category" => "Experience"
    ],
    [
        "name" => "Dubai Dolphinarium",
        "slug" => "dolphinarium",
        "image" => "img/excursion/dubai-dolphinarium-1.webp",
        "price" => "From AED 90",
        "description" => "Experience captivating dolphin and seal performances, exotic bird shows, and interactive animal encounters.",
        "rating" => "4.5",
        "reviews" => "654",
        "category" => "Animal"
    ],
    [
        "name" => "Dhow Cruise Dinner",
        "slug" => "dhow-cruise",
        "image" => "img/dubaiholiday/dhow.webp",
        "price" => "From AED 120",
        "description" => "Enjoy a relaxing evening cruise along Dubai Creek or Marina with dinner and entertainment.",
        "rating" => "4.7",
        "reviews" => "3,150",
        "category" => "Cruise"
    ],
    [
        "name" => "Dubai Safari Park",
        "slug" => "dubai-safari-park",
        "image" => "img/excursion/dubai-safari-aniamal.jpg",
        "price" => "From AED 125",
        "description" => "A 119-hectare wildlife sanctuary with 3,000+ animals and a 35-minute Explorer Safari Tour.",
        "rating" => "4.8",
        "reviews" => "1,542",
        "category" => "Wildlife"
    ]
];

// JSON-LD Schema
$schemaElements = [];
foreach ($excursions as $index => $excursion) {
    $schemaElements[] = [
        "@type" => "ListItem",
        "position" => $index + 1,
        "item" => [
            "@type" => "Product",
            "name" => $excursion['name'],
            "description" => $excursion['description'],
            "image" => "https://arihantlink.com/" . $excursion['image'],
            "offers" => [
                "@type" => "Offer",
                "price" => (string) (int) preg_replace('/\D/', '', strtok($excursion['price'], '/')),
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
  "name": "Dubai Excursions & Attraction Tickets",
  "description": "' . $pageDescription . '",
  "itemListElement": ' . json_encode($schemaElements, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '
}
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Main Content -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Explore Dubai</h5>
            <h2 class="mb-4">Popular Dubai Excursions & Tickets</h2>
            <p class="mb-0 text-muted">Discover and book tickets for Dubai's most iconic attractions. From architectural
                marvels to immersive experiences, we've got you covered.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($excursions as $excursion): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow border-0 overflow-hidden excursion-card">
                        <div class="position-relative">
                            <a href="/<?= $excursion['slug'] ?>">
                                <img src="<?= $excursion['image'] ?>" class="card-img-top" alt="<?= $excursion['name'] ?>"
                                    style="height: 250px; object-fit: cover;">
                            </a>
                            <span
                                class="badge bg-primary position-absolute top-0 start-0 m-3"><?= $excursion['category'] ?></span>
                            <span
                                class="badge bg-secondary position-absolute top-0 end-0 m-3"><?= $excursion['price'] ?></span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="/<?= $excursion['slug'] ?>" class="text-decoration-none text-dark">
                                    <h5 class="card-title mb-0"><?= $excursion['name'] ?></h5>
                                </a>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i> <?= $excursion['rating'] ?>
                                    <span class="text-muted small">(<?= $excursion['reviews'] ?>)</span>
                                </div>
                            </div>
                            <p class="card-text text-muted mb-4"><?= $excursion['description'] ?></p>

                            <div class="mt-auto d-flex gap-2">
                                <a href="/<?= $excursion['slug'] ?>" class="btn btn-primary flex-grow-1">View
                                    Details</a>
                                <a href="https://wa.me/971585945007?text=I'm interested in booking tickets for <?= $excursion['name'] ?>"
                                    target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- More Coming Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow border-0 text-center p-4 d-flex align-items-center justify-content-center"
                    style="background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-secondary-rgb), 0.1));">
                    <div class="mb-4">
                        <div class="bg-primary bg-opacity-10 rounded-full p-3 d-inline-block">
                            <i class="fas fa-plus fa-3x text-primary"></i>
                        </div>
                    </div>
                    <h5 class="card-title">And Many More!</h5>
                    <p class="card-text text-muted mb-4">Looking for something else? Ask us about tickets for other
                        attractions, shows, or experiences.</p>
                    <a href="https://wa.me/971585945007?text=Inquiry about other Dubai attraction tickets"
                        target="_blank" class="btn btn-outline-primary px-4">Ask Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us -->
<div class="container-fluid py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Why Book With Us</h5>
            <h2 class="mb-4">Why Book Your Tickets with Arihant Travels?</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-hand-holding-usd fa-3x text-primary mb-4"></i>
                    <h5>Competitive Prices</h5>
                    <p class="mb-0">Get great value on official tickets for top Dubai attractions.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-clock fa-3x text-primary mb-4"></i>
                    <h5>Save Time</h5>
                    <p class="mb-0">Avoid long queues by booking your tickets in advance with us.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-user-tie fa-3x text-primary mb-4"></i>
                    <h5>Expert Advice</h5>
                    <p class="mb-0">Get tips on the best times to visit and how to plan your day.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center p-4 rounded bg-light h-100">
                    <i class="fas fa-check-circle fa-3x text-primary mb-4"></i>
                    <h5>Official Tickets</h5>
                    <p class="mb-0">100% authentic tickets with instant confirmation.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">FAQs</h5>
            <h2 class="mb-4">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="excursionAccordion">
                    <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                How can I book Dubai excursion tickets with Arihant Travels?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#excursionAccordion">
                            <div class="accordion-body">
                                You can easily book tickets by contacting us via WhatsApp using the buttons on this page
                                or by visiting our contact page. Our team will assist you with availability and booking.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2">
                                Are the ticket prices competitive?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#excursionAccordion">
                            <div class="accordion-body">
                                Yes, Arihant Travels offers competitive prices for official tickets to most major Dubai
                                attractions and excursions. We strive to provide great value for your money.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3">
                                Can I get advice on planning my visit to these attractions?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#excursionAccordion">
                            <div class="accordion-body">
                                Absolutely! Our travel experts can provide advice on the best times to visit, how to
                                combine attractions, and other tips to make the most of your Dubai trip.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm mb-3 border-0 rounded overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq4">
                                Do you offer tickets for attractions not listed here?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#excursionAccordion">
                            <div class="accordion-body">
                                Yes, we can often arrange tickets for other Dubai attractions, shows, or experiences
                                even if they are not explicitly listed. Please contact us with your request.
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
            <h2 class="text-white mb-4">Get Exclusive Travel Deals</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers, travel tips, and
                updates on our latest Jain-friendly Dubai packages. Be the first to know about special discounts and new
                tour destinations!
            </p>
            <div class="position-relative mx-auto">
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