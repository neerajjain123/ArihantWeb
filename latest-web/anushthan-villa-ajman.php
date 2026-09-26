<?php
// Page SEO Variables
$pageTitle = "🏰 Luxury 5 Bedroom Villa in Ajman | Anushthan Villa - Private Pool & Event Hall";
$pageDescription = "Book Anushthan Villa, a luxurious 5-bedroom Jain-friendly villa in Ajman with private pool, garden & event hall. Ideal for family vacations & events.";
$pageKeywords = "Ajman villa, luxury villa rental, 5 bedroom villa, Anushthan Villa, Arihant Travels, family staycation, private pool villa, vegetarian friendly villa, Jain friendly accommodation Ajman, event hall rental Ajman";
$pageCanonical = "https://arihantlink.com/anushthan-villa-ajman";
$currentPage = "villa-listing";

// Breadcrumb Variables
$pageHeading = "Anushthan Villa - Luxury 5BR Stay";
$breadcrumbCategory = "Staycation";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/vila/Vila-Hero-Banner.webp";
$breadcrumbOverlay = false;

// WhatsApp Number
$whatsappNumber = "971585945007";

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LodgingBusiness",
  "name": "Anushthan Villa",
  "description": "Luxurious 5-bedroom villa in Ajman with private pool, garden, modern amenities, and a separate event hall (Anushthan Hall) for weddings/banquets. Ideal for family stays, events, and vegetarian/Jain travelers.",
  "image": "https://arihantlink.com/img/vila/01-Villa Exterior Outside-Night2.webp",
  "url": "https://arihantlink.com/anushthan-villa-ajman",
  "telephone": "+971585945007",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ajman",
    "addressRegion": "AE",
    "streetAddress": "Near Ajman China Mall"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.3924",
    "longitude": "55.4800"
  },
  "numberOfRooms": 5,
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Private Pool", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Garden", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Jain Meal Options Available", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Event Hall (Anushthan Hall)", "value": true, "additionalProperty": {"@type": "PropertyValue", "name": "Capacity", "value": "100+"} }
  ]
}
</script>';
include 'includes/header.php';
?>

<style>
    /* Villa Page Styles */
    .villa-hero-gallery {
        background: linear-gradient(135deg, #1a2a3a 0%, #0d1520 100%);
        padding: 60px 0;
    }

    .villa-hero-gallery .gallery-main {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
        position: relative;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .villa-hero-gallery .gallery-main:hover {
        transform: scale(1.02);
    }

    .villa-hero-gallery .gallery-main img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .villa-hero-gallery .gallery-thumb {
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        position: relative;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .villa-hero-gallery .gallery-thumb:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .villa-hero-gallery .gallery-thumb img {
        width: 100%;
        height: 160px;
        object-fit: cover;
    }

    .villa-hero-gallery .gallery-thumb::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 50%, rgba(0, 0, 0, 0.5));
    }

    .villa-quick-info {
        background: linear-gradient(135deg, #3A7CA4 0%, #2596be 100%);
        padding: 40px 0;
        color: white;
    }

    .villa-quick-info .info-card {
        text-align: center;
        padding: 25px 15px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .villa-quick-info .info-card:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-5px);
    }

    .villa-quick-info .info-card i {
        font-size: 2.5rem;
        margin-bottom: 15px;
        display: block;
    }

    .villa-quick-info .info-card h4 {
        font-size: 1.1rem;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .villa-quick-info .info-card span {
        font-size: 0.85rem;
        opacity: 0.85;
    }

    .section-title-fancy {
        position: relative;
        display: inline-block;
        margin-bottom: 30px;
    }

    .section-title-fancy::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #3A7CA4, #2596be);
        border-radius: 2px;
    }

    .amenity-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 16px;
        padding: 25px 20px;
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid #eee;
        height: 100%;
    }

    .amenity-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(58, 124, 164, 0.15);
        border-color: #3A7CA4;
    }

    .amenity-card i {
        font-size: 2rem;
        color: #3A7CA4;
        margin-bottom: 15px;
        display: block;
    }

    .amenity-card h6 {
        font-weight: 700;
        color: #1a2a3a;
        margin: 0;
        font-size: 0.95rem;
    }

    /* Full Gallery Section */
    .villa-full-gallery {
        background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%);
        padding: 80px 0;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .gallery-item {
        border-radius: 16px;
        overflow: hidden;
        cursor: pointer;
        position: relative;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .gallery-item:hover {
        transform: scale(1.03);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        z-index: 10;
    }

    .gallery-item img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-item.large {
        grid-column: span 2;
        grid-row: span 2;
    }

    .gallery-item.large img {
        height: 100%;
        min-height: 460px;
    }

    .gallery-item::before {
        content: '\f00e';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        font-size: 2rem;
        color: white;
        z-index: 5;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .gallery-item:hover::before {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }

    .gallery-item::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(58, 124, 164, 0);
        transition: all 0.3s ease;
    }

    .gallery-item:hover::after {
        background: rgba(58, 124, 164, 0.4);
    }

    @media (max-width: 992px) {
        .gallery-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .gallery-item.large {
            grid-column: span 2;
        }
    }

    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .villa-hero-gallery .gallery-main img {
            height: 350px;
        }

        .gallery-item.large {
            grid-column: span 2;
        }

        .gallery-item.large img {
            min-height: 300px;
        }
    }

    @media (max-width: 576px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }

        .gallery-item.large {
            grid-column: span 1;
        }
    }

    /* Room Showcase */
    .room-showcase {
        background: #fff;
        padding: 80px 0;
    }

    .room-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin-bottom: 30px;
    }

    .room-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    .room-card .room-images {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 5px;
    }

    .room-card .room-main-img {
        height: 280px;
        object-fit: cover;
    }

    .room-card .room-side-imgs {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .room-card .room-side-img {
        height: 137.5px;
        object-fit: cover;
    }

    .room-card .room-info {
        padding: 25px;
    }

    .room-card .room-info h4 {
        color: #1a2a3a;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .room-card .room-features {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin-top: 15px;
    }

    .room-card .room-features span {
        background: #f0f7fb;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        color: #3A7CA4;
        font-weight: 500;
    }

    /* Event Hall Highlight */
    .event-hall-section {
        background: linear-gradient(135deg, #1a2a3a 0%, #2c4a5e 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .event-hall-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(58, 124, 164, 0.3) 0%, transparent 70%);
        pointer-events: none;
    }

    .event-hall-section .content {
        position: relative;
        z-index: 2;
    }

    .event-hall-section h2 {
        color: #fff;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 25px;
    }

    .event-hall-section p {
        color: rgba(255, 255, 255, 0.85);
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .event-hall-section .feature-list {
        list-style: none;
        padding: 0;
        margin: 30px 0;
    }

    .event-hall-section .feature-list li {
        color: #fff;
        padding: 12px 0;
        font-size: 1rem;
        display: flex;
        align-items: center;
    }

    .event-hall-section .feature-list li i {
        color: #2596be;
        margin-right: 15px;
        font-size: 1.2rem;
    }

    .event-hall-section .hall-gallery {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .event-hall-section .hall-gallery img {
        border-radius: 16px;
        width: 100%;
        height: 200px;
        object-fit: cover;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    /* Lightbox Modal */
    .villa-lightbox {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.95);
        z-index: 99999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .villa-lightbox.active {
        display: flex;
    }

    .villa-lightbox img {
        max-width: 90%;
        max-height: 85vh;
        border-radius: 12px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
    }

    .villa-lightbox .close-btn {
        position: absolute;
        top: 30px;
        right: 30px;
        font-size: 2.5rem;
        color: white;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .villa-lightbox .close-btn:hover {
        transform: scale(1.2);
    }

    .villa-lightbox .nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 3rem;
        color: white;
        cursor: pointer;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .villa-lightbox .nav-btn:hover {
        color: #2596be;
    }

    .villa-lightbox .nav-btn.prev {
        left: 20px;
    }

    .villa-lightbox .nav-btn.next {
        right: 20px;
    }

    /* Sidebar enhancements */
    .villa-sidebar-card {
        background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
    }

    .villa-sidebar-card.highlight {
        background: linear-gradient(135deg, #3A7CA4 0%, #2596be 100%);
        color: white;
    }

    .villa-sidebar-card.highlight h5 {
        color: white;
    }

    .villa-sidebar-card.highlight p {
        color: rgba(255, 255, 255, 0.9);
    }
</style>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Hero Gallery Section -->
<section class="villa-hero-gallery">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="gallery-main" onclick="openLightbox(0)">
                    <img src="img/vila/01-Villa Exterior Outside-Day.webp" alt="Anushthan Villa Hero Banner"
                        loading="eager">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="gallery-thumb" onclick="openLightbox(1)">
                            <img src="img/vila/03-Villa Exterior Inside Gate - Fountain 1.webp" alt="Villa Fountain">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="gallery-thumb" onclick="openLightbox(2)">
                            <img src="img/vila/04-Villa Interior Inside Main Door Entry 2.webp"
                                alt="Villa Interior Entry">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="gallery-thumb" onclick="openLightbox(3)">
                            <img src="img/vila/05-Villa Interior Inside Main Dining Hall 2.webp"
                                alt="Villa Dining Hall">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="gallery-thumb" onclick="openLightbox(4)">
                            <img src="img/vila/06-Villa Interior Room 101 - Bed View.webp" alt="Villa Bedroom">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="gallery-thumb" onclick="openLightbox(4)">
                            <img src="img/vila/07-Villa Interior Room 202 Bed View.webp" alt="Villa Bedroom">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="gallery-thumb" onclick="openLightbox(4)">
                            <img src="img/vila/08-Villa Interior Room 203 TV Bed View 1.webp" alt="Villa Bedroom">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Info Bar -->
<section class="villa-quick-info">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="info-card">
                    <i class="fas fa-bed"></i>
                    <h4>5 Bedrooms</h4>
                    <span>Luxury En-suite</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="info-card">
                    <i class="fas fa-swimming-pool"></i>
                    <h4>Private Pool</h4>
                    <span>With Fountain</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="info-card">
                    <i class="fas fa-leaf"></i>
                    <h4>Jain Friendly</h4>
                    <span>Pure Veg Kitchen</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="info-card">
                    <i class="fas fa-glass-cheers"></i>
                    <h4>Event Hall</h4>
                    <span>100+ Capacity</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="container-fluid py-5">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Property Highlights -->
                <div class="mb-5">
                    <h2 class="section-title-fancy">Property Highlights</h2>
                    <p class="lead text-primary fw-bold mt-4">A Perfect Retreat for Families and Events in Ajman!</p>
                    <p class="text-muted" style="font-size: 1.05rem; line-height: 1.9;">
                        Anushthan Villa offers a unique blend of luxury, comfort, and cultural sensitivity. Located in
                        the heart of Ajman,
                        this spacious 5-bedroom villa is designed for those who seek a premium staycation experience
                        while adhering to
                        vegetarian and Jain dietary preferences. Whether you're planning a family getaway, a destination
                        wedding, or a
                        corporate retreat, our villa provides the perfect setting.
                    </p>

                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 h-100">
                                <h5 class="fw-bold"><i class="fas fa-home text-primary me-2"></i>Spacious Living</h5>
                                <p class="text-muted mb-0">5 interconnected bedrooms and 7 bathrooms ensure ample space
                                    for large families or groups. Modern interiors with high-end finishes provide a cozy
                                    yet luxurious atmosphere.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 h-100">
                                <h5 class="fw-bold"><i class="fas fa-leaf text-primary me-2"></i>Vegetarian Focus</h5>
                                <p class="text-muted mb-0">Dedicated to providing a pure vegetarian environment. We
                                    offer specialized Jain meal options and a shared kitchen for guests who prefer to
                                    cook their own meals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Amenities -->
                <div class="mb-5">
                    <h2 class="section-title-fancy">Premium Amenities</h2>
                    <div class="row g-3 mt-4">
                        <?php
                        $amenities = [
                            ['icon' => 'fa-wifi', 'text' => 'High-Speed WiFi'],
                            ['icon' => 'fa-snowflake', 'text' => 'Central A/C'],
                            ['icon' => 'fa-parking', 'text' => 'Private Parking'],
                            ['icon' => 'fa-gamepad', 'text' => 'Games Room'],
                            ['icon' => 'fa-tv', 'text' => 'Netflix Ready'],
                            ['icon' => 'fa-users', 'text' => 'Family Rooms'],
                            ['icon' => 'fa-coffee', 'text' => 'Veg Breakfast'],
                            ['icon' => 'fa-door-open', 'text' => 'Private Entry'],
                            ['icon' => 'fa-bath', 'text' => 'En-suite Baths']
                        ];
                        foreach ($amenities as $amenity): ?>
                            <div class="col-lg-4 col-md-4 col-6">
                                <div class="amenity-card">
                                    <i class="fas <?php echo $amenity['icon']; ?>"></i>
                                    <h6><?php echo $amenity['text']; ?></h6>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Location & Nearby -->
                <div class="mb-5">
                    <h2 class="section-title-fancy">Location & Nearby</h2>
                    <div class="row g-3 mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-plane fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-bold">Sharjah Airport</h6>
                                    <small class="text-muted">13 km away</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-shopping-cart fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-bold">Ajman China Mall</h6>
                                    <small class="text-muted">8 km away</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-fish fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-bold">Sharjah Aquarium</h6>
                                    <small class="text-muted">21 km away</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-car fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-bold">Dubai Highway</h6>
                                    <small class="text-muted">Easy Access</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mb-5">
                    <h2 class="section-title-fancy">Frequently Asked Questions</h2>
                    <div class="accordion accordion-flush mt-4" id="faqAccordion">
                        <div class="accordion-item shadow-sm rounded-3 mb-3 border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Is Anushthan Villa suitable for Jain families?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, absolutely. We specialize in catering to Jain families with pure vegetarian
                                    meal options and a culturally sensitive environment. Our kitchen is 100% vegetarian,
                                    and we can arrange specialized Jain meals upon request.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded-3 mb-3 border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can I host a wedding or event at the villa?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes, the property includes the separate Anushthan Hall, which is ideal for weddings,
                                    banquets, and other gatherings with a 100+ guest capacity. The hall has a separate
                                    entrance for privacy.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded-3 mb-3 border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What is the maximum occupancy of the villa?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    The villa can comfortably accommodate up to 15-18 guests across 5 bedrooms. Each
                                    bedroom has en-suite bathrooms with modern amenities.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <?php include 'includes/enquiry-sidebar.php'; ?>

                    <div class="villa-sidebar-card highlight mt-4">
                        <h5 class="mb-3 fw-bold"><i class="fab fa-whatsapp me-2"></i>Direct Booking</h5>
                        <p class="small mb-3">Contact us via WhatsApp for the best direct booking rates and availability
                            checks.</p>
                        <a href="https://wa.me/<?php echo $whatsappNumber; ?>?text=I%20want%20to%20inquire%20about%20Anushthan%20Villa%20Ajman"
                            target="_blank" class="btn btn-warning w-100 rounded-pill fw-bold py-3">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Inquiry
                        </a>
                    </div>

                    <div class="villa-sidebar-card">
                        <h5 class="mb-3 fw-bold text-primary"><i class="fas fa-star me-2"></i>Why Choose Us?</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>100% Vegetarian Kitchen</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Jain Meals Available</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Private Pool & Garden</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Event Hall for Weddings</li>
                            <li class="mb-0"><i class="fas fa-check text-success me-2"></i>Family Friendly Environment
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Event Hall Highlight Section -->
<section class="event-hall-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 content">
                <h2>Anushthan Event Hall</h2>
                <p>Looking for a venue for your next big event? Our dedicated Anushthan Hall is perfect for weddings,
                    banquets, and corporate gatherings. With a 100+ guest capacity and a separate entrance, it offers
                    the privacy and space needed for memorable occasions.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-check-circle"></i> Independent Booking Available</li>
                    <li><i class="fas fa-check-circle"></i> Ideal for Jain Weddings</li>
                    <li><i class="fas fa-check-circle"></i> Upper Deck with Sunrise Views</li>
                    <li><i class="fas fa-check-circle"></i> Modern Audio-Visual Setup</li>
                    <li><i class="fas fa-check-circle"></i> Attached Kitchen & Catering Area</li>
                </ul>
                <a href="https://wa.me/<?php echo $whatsappNumber; ?>?text=I%20want%20to%20inquire%20about%20Anushthan%20Event%20Hall%20for%20an%20event"
                    target="_blank" class="btn btn-warning btn-lg rounded-pill px-5 mt-3">
                    <i class="fab fa-whatsapp me-2"></i>Inquire for Events
                </a>
            </div>
            <div class="col-lg-6">
                <div class="hall-gallery">
                    <img src="img/vila/eventhall-one.webp" alt="Event Hall View 1">
                    <img src="img/vila/eventhall-two.webp" alt="Event Hall View 2">
                    <img src="img/vila/eventhall-three.jpeg" alt="Event Hall View 3">
                    <img src="img/vila/eventhall-four.jpeg" alt="Event Hall Temple View">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full Gallery Section -->
<section class="villa-full-gallery">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title-fancy d-inline-block">Explore Our Villa</h2>
            <p class="text-muted mt-4">Take a virtual tour through our stunning property</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item large" onclick="openLightbox(0)">
                <img src="img/vila/01-Villa Exterior Outside-Night2.webp" alt="Villa Exterior Night" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(5)">
                <img src="img/vila/01-Villa Exterior Outside-Day.webp" alt="Villa Exterior Day" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(6)">
                <img src="img/vila/01-Villa Exterior Outside-Night3.webp" alt="Villa Night View" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(7)">
                <img src="img/vila/02-Villa-Exterior-Inside-Gate-Night2.webp" alt="Villa Gate Night" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(8)">
                <img src="img/vila/03-Villa Exterior Inside Gate - Fountain 1.webp" alt="Villa Fountain" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(9)">
                <img src="img/vila/04-Villa Interior Inside Main Door Entry 2.webp" alt="Villa Entry" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(10)">
                <img src="img/vila/04-Villa Interior Inside Main Door Entry 3 Reception Hall - Lift View.webp"
                    alt="Reception Hall" loading="lazy">
            </div>
            <div class="gallery-item large" onclick="openLightbox(11)">
                <img src="img/vila/05-Villa Interior Inside Main Dining Hall Temple Krishna View.webp" alt="Temple View"
                    loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(12)">
                <img src="img/vila/06-Villa Interior Room 101 - Bed View.webp" alt="Room 101" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(13)">
                <img src="img/vila/06-Villa Interior Room 101 - TV View.webp" alt="Room 101 TV" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(14)">
                <img src="img/vila/07-Villa Interior Room 202 Bed View.webp" alt="Room 202" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(15)">
                <img src="img/vila/08-Villa Interior Room 203 TV Bed View 1.webp" alt="Room 203" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(16)">
                <img src="img/vila/09-Villa Interior  Room 204 Bed & TV View.webp" alt="Room 204" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(17)">
                <img src="img/vila/10-Villa Interior  Room 205 Bed & Couch View 2.webp" alt="Room 205" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(18)">
                <img src="img/vila/06-Villa Interior Room 101 - Attach Bathroom.webp" alt="Bathroom" loading="lazy">
            </div>
            <div class="gallery-item" onclick="openLightbox(19)">
                <img src="img/vila/08-Villa Interior Attach Bathroom Room 203 Shower View.webp" alt="Shower"
                    loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="villa-lightbox" id="villaLightbox">
    <span class="close-btn" onclick="closeLightbox()">&times;</span>
    <span class="nav-btn prev" onclick="navigateLightbox(-1)">&#10094;</span>
    <img id="lightboxImage" src="" alt="Gallery Image">
    <span class="nav-btn next" onclick="navigateLightbox(1)">&#10095;</span>
</div>

<script>
    const galleryImages = [
        'img/vila/01-Villa Exterior Outside-Night2.webp',
        'img/vila/03-Villa Exterior Inside Gate - Fountain 1.webp',
        'img/vila/04-Villa Interior Inside Main Door Entry 2.webp',
        'img/vila/05-Villa Interior Inside Main Dining Hall 2.webp',
        'img/vila/06-Villa Interior Room 101 - Bed View.webp',
        'img/vila/01-Villa Exterior Outside-Day.webp',
        'img/vila/01-Villa Exterior Outside-Night3.webp',
        'img/vila/02-Villa-Exterior-Inside-Gate-Night2.webp',
        'img/vila/03-Villa Exterior Inside Gate - Fountain 1.webp',
        'img/vila/04-Villa Interior Inside Main Door Entry 2.webp',
        'img/vila/04-Villa Interior Inside Main Door Entry 3 Reception Hall - Lift View.webp',
        'img/vila/05-Villa Interior Inside Main Dining Hall Temple Krishna View.webp',
        'img/vila/06-Villa Interior Room 101 - Bed View.webp',
        'img/vila/06-Villa Interior Room 101 - TV View.webp',
        'img/vila/07-Villa Interior Room 202 Bed View.webp',
        'img/vila/08-Villa Interior Room 203 TV Bed View 1.webp',
        'img/vila/09-Villa Interior  Room 204 Bed & TV View.webp',
        'img/vila/10-Villa Interior  Room 205 Bed & Couch View 2.webp',
        'img/vila/06-Villa Interior Room 101 - Attach Bathroom.webp',
        'img/vila/08-Villa Interior Attach Bathroom Room 203 Shower View.webp'
    ];

    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        document.getElementById('lightboxImage').src = galleryImages[index];
        document.getElementById('villaLightbox').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('villaLightbox').classList.remove('active');
        document.body.style.overflow = '';
    }

    function navigateLightbox(direction) {
        currentIndex += direction;
        if (currentIndex < 0) currentIndex = galleryImages.length - 1;
        if (currentIndex >= galleryImages.length) currentIndex = 0;
        document.getElementById('lightboxImage').src = galleryImages[currentIndex];
    }

    // Close on escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') navigateLightbox(-1);
        if (e.key === 'ArrowRight') navigateLightbox(1);
    });

    // Close on backdrop click
    document.getElementById('villaLightbox').addEventListener('click', function (e) {
        if (e.target === this) closeLightbox();
    });
</script>

<?php include 'includes/footer.php'; ?>