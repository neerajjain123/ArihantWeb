<?php
// Page SEO Variables
$pageTitle = "Extreme Hot Air Balloon Dubai | Flight, Quad Bike & Dune Bash from AED 899";
$pageDescription = "Book the ultimate Dubai desert adventure: the Extreme Hot Air Balloon package. Sunrise flight + breakfast + dune bashing + quad biking + sandboarding.";
$pageKeywords = "extreme hot air balloon dubai, dubai balloon ride with quad biking, hot air balloon and dune bashing, sunrise balloon adventure package, book extreme balloon ride dubai, arihant travel extreme hot air balloon";
$pageCanonical = "https://arihantlink.com/hot-air-balloon-extreme";
$currentPage = "hot-air-balloon";

// Breadcrumb Variables
$pageHeading = "Extreme Hot Air Balloon Experience";
$breadcrumbCategory = "Hot Air Balloon";
$breadcrumbCategoryLink = "hot-air-balloon-dubai";
$breadcrumbBg = "img/hotairbaloon/hot-air-baloon-tour-dubai-2-large.jpg";
$breadcrumbOverlay = false;

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Extreme Hot Air Balloon Dubai Experience",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/hotairbaloon/hot-air-baloon-tour-dubai-2-large.jpg",
  "brand": {
    "@type": "Brand",
    "name": "Arihant Travels Pvt Ltd"
  },
  "offers": {
    "@type": "Offer",
    "name": "Extreme Experience",
    "price": "899",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/hot-air-balloon-extreme"
  }
}
</script>';

include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3"><i class="fas fa-motorcycle fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Quad Bike</p><small class="text-muted">Included</small>
            </div>
            <div class="col-6 col-md-3"><i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Dune Bashing</p><small class="text-muted">4x4 Adventure</small>
            </div>
            <div class="col-6 col-md-3"><i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Gourmet Breakfast</p><small class="text-muted">Included</small>
            </div>
            <div class="col-6 col-md-3"><i class="fas fa-fire fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Ultimate</p><small class="text-muted">Adventure</small>
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
                    <p class="text-primary"><strong>Maximum excitement for thrill-seekers!</strong> The Extreme
                        Experience is our most comprehensive desert package, combining luxury with pure adrenaline.</p>
                    <p>Witness a magnificent sunrise from your balloon, then gear up for a series of desert adventures.
                        From quad biking through the dunes to sandboarding down golden slopes, this package has it all.
                    </p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> All Fiesta Inclusions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Quad Bike
                                    Ride</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Sand
                                    Boarding</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>4x4 Dune
                                    Bashing</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Gourmet Breakfast</li>
                        </ul>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white" id="pills-tab"
                        role="tablist">
                        <li class="nav-item"><button class="nav-link active rounded-pill fw-bold"
                                id="pills-itinerary-tab" data-bs-toggle="pill" data-bs-target="#pills-itinerary"
                                type="button" role="tab">Itinerary</button></li>
                        <li class="nav-item"><button class="nav-link rounded-pill fw-bold" id="pills-info-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-info" type="button"
                                role="tab">Guidelines</button></li>
                        <li class="nav-item"><button class="nav-link rounded-pill fw-bold" id="pills-faq-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-faq" type="button" role="tab">FAQs</button>
                        </li>
                    </ul>

                    <div class="tab-content bg-white p-4 rounded shadow-sm" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-itinerary" role="tabpanel">
                            <div class="timeline itinerary-compact">
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">4:30
                                        AM</span> <strong>Pickup:</strong> Hotel transfer.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">6:00
                                        AM</span> <strong>Flight:</strong> Sunrise flight.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">7:30
                                        AM</span> <strong>Breakfast:</strong> Full gourmet spread.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">8:15
                                        AM</span> <strong>Extreme:</strong> Quad biking & dune bashing.</div>
                                <div class="timeline-item-compact mb-3"><span class="badge bg-primary me-2">10:30
                                        AM</span> <strong>Return:</strong> Drop-off.</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-info" role="tabpanel">
                            <h5 class="fw-bold">Adventure Guidelines</h5>
                            <ul>
                                <li>Helmets provided for quad biking</li>
                                <li>Follow pilot and instructor guides</li>
                                <li>Total duration: 6-7 hours</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-faq" role="tabpanel">
                            <p><strong>Is quad biking safe for beginners?</strong> Yes, we provide full safety briefings
                                and easy-to-operate quad bikes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Book Extreme Adventure</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid #3A7CA4;">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 899</h2><span class="text-muted">Per Person</span>
                                </div>
                                <div class="text-end"><span class="badge bg-danger text-white">Ultimate</span></div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=Interested in Extreme Hot Air Balloon package"
                                    target="_blank" class="btn btn-outline-success btn-lg"><i
                                        class="fab fa-whatsapp me-2"></i>WhatsApp Us</a>
                                <a href="tel:+971585945007" class="btn btn-primary btn-lg"><i
                                        class="fas fa-phone me-2"></i>Call Now</a>
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
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg" class="card-img-top"
                            alt="Fiesta Experience" style="height: 280px; object-fit: cover;"><span
                            class="badge bg-primary position-absolute top-0 end-0 m-3">AED 799</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Fiesta Experience</h5>
                        <p class="card-text small mb-3 text-muted">Complete desert experience with breakfast.</p>
                        <a href="hot-air-balloon-fiesta" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/hotairbaloon/Hot-air-balloon-ride-at-sunrise-Dubai.webp" class="card-img-top"
                            alt="Magical Experience" style="height: 280px; object-fit: cover;"><span
                            class="badge bg-primary position-absolute top-0 end-0 m-3">AED 699</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Magical Experience</h5>
                        <p class="card-text small mb-3 text-muted">Essential sunrise flight.</p>
                        <a href="hot-air-balloon-magical" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
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
            <h2 class="mb-2 h4">Extreme Adventure Gallery</h2>
        </div>
        <div class="row g-3">
            <?php
            $gallery_images = [
                "img/hotairbaloon/quad.jpg",
                "img/hotairbaloon/sanboarding2.jpg",
                "img/hotairbaloon/Fiesta-Dubai-hot-air-baloon-Camel-Ride.webp",
                "img/hotairbaloon/HotAir-Baloon-in-Air.png",
                "img/hotairbaloon/hot-air-baloon-tour-dubai-2-large.jpg",
                "img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg"
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
            <h2 class="text-white mb-3 h3">Elevate Your Adventure</h2>
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