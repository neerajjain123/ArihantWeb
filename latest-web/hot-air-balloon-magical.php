<?php
// Page SEO Variables
$pageTitle = "Hot Air Balloon Magical Experience Dubai | Sunrise Flight from AED 699";
$pageDescription = "Experience the magical hot air balloon ride in Dubai at sunrise. Soar 4,000 feet above the desert with transfers, refreshments…";
$pageKeywords = "hot air balloon magical dubai, magical balloon ride dubai, sunrise hot air balloon dubai, hot air balloon experience dubai, balloon ride dubai price, hot air balloon magical package, arihant travel magical hot air balloon dubai";
$pageCanonical = "https://arihantlink.com/hot-air-balloon-magical";
$currentPage = "hot-air-balloon";

// Breadcrumb Variables
$pageHeading = "Hot Air Balloon Magical Experience";
$breadcrumbCategory = "Hot Air Balloon";
$breadcrumbCategoryLink = "hot-air-balloon-dubai";
$breadcrumbBg = "img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg";
$breadcrumbOverlay = false;

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Hot Air Balloon Magical Experience Dubai",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg",
  "brand": {
    "@type": "Brand",
    "name": "Arihant Travel"
  },
  "offers": {
    "@type": "Offer",
    "name": "Magical Experience",
    "price": "699",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/hot-air-balloon-magical"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "150"
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
      "name": "What is included in the Magical Experience package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Magical Experience package includes shared transfers from and to your hotel in Dubai, a hot air balloon flight lasting up to 60 minutes at sunrise, refreshments and light snacks after the flight, and a signed flight certificate to commemorate your experience."
      }
    },
    {
      "@type": "Question",
      "name": "How long is the actual flight time?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The flight itself lasts for 40 to 60 minutes depending on weather."
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
                <i class="fas fa-mountain fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">4,000 Feet</p>
                <small class="text-muted">Altitude</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-sun fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Sunrise</p>
                <small class="text-muted">Flight Time</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-certificate fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Included</p>
                <small class="text-muted">Signed Certificate</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Overview Section Start -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Overview</h2>
                    <p class="text-primary"><strong>A magical sunrise experience!</strong> The Magical package is
                        designed for those who want to experience the serenity of a hot air balloon flight at its purest
                        form.</p>
                    <p>Soar 4,000 feet above the Dubai desert as the sun begins its ascent, casting a golden glow over
                        the infinite dunes. This tranquil flight offers panoramic views and a chance to spot desert
                        wildlife from above. It's the perfect introduction to hot air ballooning in Dubai.</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Shared Hotel Pickup
                                    & Drop-off</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Hot Air Balloon
                                    Flight</strong> (Up to 60 Mins)</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Refreshments & Light
                                    Snacks</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Signed Flight
                                    Certificate</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Professional Pilot &
                                    Crew</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Good to Know</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-info-circle text-info me-2"></i> Children aged 5-11
                                welcome</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-info me-2"></i> Wear comfortable, layered
                                clothing</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-info me-2"></i> Flat, closed-toe shoes
                                required</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-info me-2"></i> Total experience: 4-5
                                hours</li>
                        </ul>
                    </div>
                </div>

                <!-- Package Details Tabs -->
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
                        <!-- Itinerary Tab -->
                        <div class="tab-pane fade show active" id="pills-itinerary" role="tabpanel">
                            <div class="timeline itinerary-compact">
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">4:30 AM</span> <strong>Pickup:</strong> From
                                    hotel/residence in air-conditioned vehicle.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">5:30 AM</span> <strong>Preparation:</strong>
                                    Watch the balloon inflation at the launch site.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">6:00 AM</span> <strong>Takeoff:</strong> Sunrise
                                    flight over the golden dunes.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">7:00 AM</span> <strong>Landing:</strong>
                                    Celebration with refreshments & certificate distribution.
                                </div>
                                <div class="timeline-item-compact mb-3">
                                    <span class="badge bg-primary me-2">8:30 AM</span> <strong>Return:</strong> Drop-off
                                    back to your location.
                                </div>
                            </div>
                        </div>

                        <!-- Guidelines Tab -->
                        <div class="tab-pane fade" id="pills-info" role="tabpanel">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <h5 class="fw-bold"><i class="fas fa-briefcase text-primary me-2"></i>What to Bring
                                    </h5>
                                    <ul class="mb-0">
                                        <li>Camera or Smartphone</li>
                                        <li>Sunglasses & Sunscreen</li>
                                        <li>Light Jacket (it's cool at dawn)</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold"><i
                                            class="fas fa-hand-holding-heart text-primary me-2"></i>Safety</h5>
                                    <ul class="mb-0">
                                        <li>Not for infants under 5</li>
                                        <li>Not for pregnant women</li>
                                        <li>Not for heart/back patients</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Tab -->
                        <div class="tab-pane fade" id="pills-faq" role="tabpanel">
                            <div class="accordion accordion-flush" id="faqAccordionTabs">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq1">
                                            What happens if the weather is bad?
                                        </button>
                                    </h2>
                                    <div id="tabfaq1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">If the flight is cancelled due to weather, we offer
                                            a full refund or rescheduling.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#tabfaq2">
                                            Is breakfast included in Magical package?
                                        </button>
                                    </h2>
                                    <div id="tabfaq2" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionTabs">
                                        <div class="accordion-body">The Magical package includes light snacks and
                                            refreshments. For a full breakfast, check the Fiesta package.</div>
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
                            <h4 class="card-title mb-4">Book This Experience</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3"
                                style="border-bottom: 2px solid #3A7CA4;">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 699</h2>
                                    <span class="text-muted">Per Person</span>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-success">Best Seller</span>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I'm interested in Magical Hot Air Balloon package"
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

<!-- Related Packages Section -->
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
                        <img src="img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg" class="card-img-top"
                            alt="Fiesta Experience" style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">AED 799</span>
                    </div>
                    <div class="card-body p-3">
                        <h5 class="h6 card-title mb-2">Fiesta Experience</h5>
                        <p class="card-text small mb-3 text-muted">Includes gourmet breakfast and desert safari.</p>
                        <a href="hot-air-balloon-fiesta" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
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
                        <p class="card-text small mb-3 text-muted">Adds quad biking and sandboarding adventure.</p>
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
            <h2 class="mb-2 h4">The Magical Experience</h2>
        </div>
        <div class="row g-3">
            <?php
            $gallery_images = [
                "img/hotairbaloon/Hot-air-balloon-ride-at-sunrise-Dubai.webp",
                "img/hotairbaloon/HotAir-Baloon-in-Air.png",
                "img/hotairbaloon/hot-air-baloon-getting-ready.avif",
                "img/hotairbaloon/baloon-ride-with-sizteen-people.jpg",
                "img/hotairbaloon/Hot-air-balloon-ride-at-sunrise-Dubai.webp",
                "img/hotairbaloon/hot-air-baloon-tour-dubai-2-large.jpg"
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

<!-- Subscribe Section -->
<div class="container-fluid subscribe py-4">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Get Exclusive Balloon Deals</h2>
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
    .gallery-thumb:hover img {
        transform: scale(1.1);
        transition: 0.3s;
    }

    .excursion-card:hover {
        transform: translateY(-5px);
        transition: 0.3s;
    }
</style>

<?php include 'includes/footer.php'; ?>