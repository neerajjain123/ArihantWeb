<?php
// Page SEO Variables
$pageTitle = "Fiesta Hot Air Balloon Dubai | Sunrise Flight & Desert Safari from AED 799";
$pageDescription = "Book the Fiesta Hot Air Balloon package in Dubai. Includes a sunrise flight, gourmet breakfast, desert safari, camel ride, and falcon photo.";
$pageKeywords = "hot air balloon fiesta dubai, fiesta hot air balloon package, sunrise balloon ride dubai with breakfast, hot air balloon and desert safari dubai, book fiesta balloon ride, arihant travel fiesta hot air balloon";
$pageCanonical = "https://arihantlink.com/hot-air-balloon-fiesta";
$currentPage = "hot-air-balloon";

// Breadcrumb Variables
$pageHeading = "Hot Air Balloon Fiesta Experience";
$breadcrumbCategory = "Hot Air Balloon";
$breadcrumbCategoryLink = "hot-air-balloon-dubai";
$breadcrumbBg = "img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg";
$breadcrumbOverlay = false;

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Hot Air Balloon Fiesta Experience Dubai",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg",
  "brand": {
    "@type": "Brand",
    "name": "Arihant Travel"
  },
  "offers": {
    "@type": "Offer",
    "name": "Fiesta Experience",
    "price": "799",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/hot-air-balloon-fiesta"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "245"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is included in the Fiesta Experience?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Fiesta package includes shared transfers, 40-60 min balloon flight, full gourmet breakfast, desert safari, camel ride, and falcon photo opportunity."
      }
    }
  ]
}
</script>';

include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Up to 60 Mins</p>
                <small class="text-muted">Flight Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Gourmet Breakfast</p>
                <small class="text-muted">Included</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-safari fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Desert Safari</p>
                <small class="text-muted">Package Included</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-award fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Popular Choice</p>
                <small class="text-muted">Best Seller</small>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-primary"><strong>The complete desert adventure!</strong> Our Fiesta Experience is the
                        gold standard for hot air ballooning in Dubai, combining the serenity of flight with the
                        excitement of a desert safari.</p>
                    <p>Start your morning with a breathtaking sunrise flight, followed by a full gourmet breakfast at
                        our desert camp. The adventure continues with a traditional desert safari, camel riding, and a
                        special falcon photo opportunity. It's the most comprehensive way to experience the magic of the
                        Arabian desert.</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Shared Hotel Transfers</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Sunrise Balloon Flight
                                (40-60m)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Full Gourmet
                                    Breakfast</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Desert Safari
                                    Experience</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Camel Ride & Falcon
                                    Photo</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Signed Flight Certificate
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Good to Know</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-info-circle text-info me-2"></i> Total duration: 5-6 hours
                            </li>
                            <li class="mb-2"><i class="fas fa-info-circle text-info me-2"></i> Breakfast has vegetarian
                                options</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-info me-2"></i> Perfect for couples &
                                families</li>
                        </ul>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-pill fw-bold" id="pills-itinerary-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-itinerary" type="button"
                                role="tab">Itinerary</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill fw-bold" id="pills-info-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-info" type="button" role="tab">Guidelines</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill fw-bold" id="pills-faq-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-faq" type="button" role="tab">FAQs</button>
                        </li>
                    </ul>

                    <div class="tab-content bg-white p-4 rounded shadow-sm" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-itinerary" role="tabpanel">
                            <div class="timeline itinerary-compact">
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">4:30
                                        AM</span> <strong>Pickup:</strong> Hotel transfer.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">6:00
                                        AM</span> <strong>Flight:</strong> Sunrise balloon flight.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">7:15
                                        AM</span> <strong>Breakfast:</strong> Full gourmet breakfast at camp.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">8:00
                                        AM</span> <strong>Safari:</strong> Desert drive, camel ride & falconery.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">9:30
                                        AM</span> <strong>Return:</strong> Drop-off back to hotel.</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-info" role="tabpanel">
                            <h5 class="fw-bold">Safety & Requirements</h5>
                            <ul>
                                <li>Physical ID/Passport copy required</li>
                                <li>Minimum age 5 years</li>
                                <li>Comfortable walking shoes recommended</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-faq" role="tabpanel">
                            <div class="accordion accordion-flush" id="faqAccordionTabs">
                                <div class="accordion-item">
                                    <h2 class="accordion-header"><button class="accordion-button collapsed py-2"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#tabfaq1">Is the
                                            desert safari private?</button></h2>
                                    <div id="tabfaq1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">The standard Fiesta package includes shared safari
                                            vehicles. Private upgrades are available.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book Fiesta Experience</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid #3A7CA4;">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 799</h2>
                                    <span class="text-muted">Per Person</span>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-primary">Best Value</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=Hi%20Arihant%20Travel%2C%20I%20want%20to%20book%20the%20Fiesta%20Hot%20Air%20Balloon%20package."
                                    target="_blank" class="btn btn-outline-success btn-lg">
                                    <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                                </a>
                                <a href="tel:+971585945007" class="btn btn-primary btn-lg">
                                    <i class="fas fa-phone me-2"></i>Call Now
                                </a>
                            </div>
                        </div>
                        <?php include 'includes/enquiry-sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Related Packages -->
<div class="container-fluid py-4 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-4" style="max-width: 900px;">
            <h5 class="section-title px-3">Explore More</h5>
            <h2 class="mb-2 h4">Other Balloon Packages</h2>
        </div>
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/hotairbaloon/Hot-air-balloon-ride-at-sunrise-Dubai.webp" class="card-img-top"
                            alt="Magical Experience" style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">AED 699</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Magical Experience</h5>
                        <p class="card-text small mb-3 text-muted">Essential sunrise flight experience.</p>
                        <a href="hot-air-balloon-magical" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/hotairbaloon/quad.jpg" class="card-img-top" alt="Extreme Experience"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">AED 899</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Extreme Experience</h5>
                        <p class="card-text small mb-3 text-muted">Adds quad biking and sandboarding.</p>
                        <a href="hot-air-balloon-extreme" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Section -->
<div class="container-fluid py-4 bg-white">
    <div class="container">
        <div class="text-center mx-auto mb-4" style="max-width: 900px;">
            <h5 class="section-title px-3">Gallery</h5>
            <h2 class="mb-2 h4">Fiesta Safari Experience</h2>
        </div>
        <div class="row g-3">
            <?php
            $gallery_images = [
                "img/hotairbaloon/Fiesta-Dubai-hot-air-baloon-Camel-Ride.webp",
                "img/hotairbaloon/Fiesta-Dubai-hot-air-baloon-falcon-1.webp",
                "img/hotairbaloon/Hot-air-balloon-ride-at-sunrise-Dubai.webp",
                "img/hotairbaloon/HotAir-Baloon-in-Air.png",
                "img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg",
                "img/hotairbaloon/hot-air-baloon-getting-ready.avif"
            ];
            foreach ($gallery_images as $index => $image_url): ?>
                <div class="col-6 col-md-4">
                    <div class="gallery-item-wrapper" onclick="openLightbox(<?= $index ?>)">
                        <img src="<?= $image_url ?>" alt="Hot Air Balloon View"
                            class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover gallery-img">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Lightbox Modal -->
<div class="yacht-lightbox" id="yachtLightbox">
    <span class="close-btn" onclick="closeLightbox()">&times;</span>
    <span class="nav-btn prev" onclick="navigateLightbox(-1)">&#10094;</span>
    <img id="lightboxImage" src="" alt="Gallery Image">
    <span class="nav-btn next" onclick="navigateLightbox(1)">&#10095;</span>
</div>

<!-- Subscribe -->
<div class="container-fluid subscribe py-4">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Get Exclusive Desert Deals</h2>
            <div class="position-relative mx-auto" style="max-width: 500px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<style>
    .object-fit-cover {
        object-fit: cover !important;
        min-height: 200px;
    }

    .gallery-item-wrapper {
        position: relative;
        cursor: pointer;
        border-radius: 8px;
        overflow: hidden;
        height: 200px;
    }

    .gallery-img {
        transition: transform 0.3s ease;
    }

    .gallery-item-wrapper:hover .gallery-img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: rgba(58, 124, 164, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item-wrapper:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay i {
        color: white;
        font-size: 1.5rem;
    }

    .yacht-lightbox {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.95);
        z-index: 99999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .yacht-lightbox.active {
        display: flex;
    }

    .yacht-lightbox img {
        max-width: 90%;
        max-height: 85vh;
        border-radius: 12px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
    }

    .yacht-lightbox .close-btn {
        position: absolute;
        top: 30px;
        right: 30px;
        font-size: 2.5rem;
        color: white;
        cursor: pointer;
        transition: transform 0.3s ease;
        z-index: 100000;
    }

    .yacht-lightbox .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 3rem;
        color: white;
        cursor: pointer;
        padding: 20px;
        transition: all 0.3s ease;
        z-index: 100000;
        user-select: none;
    }

    .yacht-lightbox .nav-btn:hover {
        color: #3A7CA4;
    }

    .yacht-lightbox .nav-btn.prev {
        left: 20px;
    }

    .yacht-lightbox .nav-btn.next {
        right: 20px;
    }

    .excursion-card:hover {
        transform: translateY(-5px);
        transition: 0.3s;
    }
</style>

<script>
    const galleryImages = <?= json_encode($gallery_images) ?>;
    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        const lightbox = document.getElementById('yachtLightbox');
        const img = document.getElementById('lightboxImage');
        img.src = galleryImages[currentIndex];
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('yachtLightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    function navigateLightbox(direction) {
        currentIndex += direction;
        if (currentIndex < 0) currentIndex = galleryImages.length - 1;
        if (currentIndex >= galleryImages.length) currentIndex = 0;
        document.getElementById('lightboxImage').src = galleryImages[currentIndex];
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') navigateLightbox(-1);
        if (e.key === 'ArrowRight') navigateLightbox(1);
    });

    document.getElementById('yachtLightbox').addEventListener('click', function (e) {
        if (e.target === this) closeLightbox();
    });
</script>

<?php include 'includes/footer.php'; ?>
```