<?php
// Page SEO Variables
$pageTitle = "55ft Private Yacht Charter Dubai | 20 Guests | AED 625/Hour | Arihant Travel";
$pageDescription = "Book a 55ft private yacht charter in Dubai for up to 20 guests from AED 625/hr. Cruise past Burj Al Arab, Palm Jumeirah & Dubai Marina skyline.";
$pageKeywords = "Dubai yacht charter, private boat trip Dubai, 55ft yacht rental, luxury yacht Dubai Marina, Palm Jumeirah boat tour, Burj Al Arab yacht view, private yacht 20 guests, Dubai boat trip, yacht party Dubai, yacht hire Dubai";
$pageCanonical = "https://arihantlink.com/55ft-yacht-charter";
$currentPage = "55ft-yacht-charter";

// Breadcrumb Variables
$pageHeading = "55ft Private Yacht Charter";
$breadcrumbCategory = "Yacht Charter";
$breadcrumbCategoryLink = "yacht-rental";
$breadcrumbBg = "img/yacht/55ft%20Yacht/hero-banner.jpg";
$breadcrumbOverlay = true;

// WhatsApp Number
$whatsappNumber = "971585945007";

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BoatTrip",
      "@id": "' . $pageCanonical . '#boatTrip",
      "name": "55ft Private Yacht Charter Dubai - 20 Guests",
      "description": "' . $pageDescription . '",
      "url": "' . $pageCanonical . '",
      "image": [
        "https://arihantlink.com/img/yacht/55ft%20Yacht/hero-banner.jpg",
        "https://arihantlink.com/img/yacht/55ft%20Yacht/2.jpg"
      ],
      "departureLocation": {
        "@type": "Place",
        "name": "Dubai Harbour",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Dubai Harbour",
          "addressLocality": "Dubai Harbour",
          "addressRegion": "Dubai",
          "addressCountry": "AE"
        }
      },
      "provider": {
        "@type": "Organization",
        "name": "Arihant Travel",
        "url": "https://arihantlink.com"
      },
      "offers": {
        "@type": "Offer",
        "name": "55ft Private Yacht Charter",
        "price": 625,
        "priceCurrency": "AED",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": 625,
          "priceCurrency": "AED",
          "unitText": "per hour"
        },
        "availability": "https://schema.org/InStock"
      },
      "maximumAttendeeCapacity": 20,
      "amenityFeature": [
        {"@type": "LocationFeatureSpecification", "name": "Free Wi-Fi", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "BBQ Grill", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Music System", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Life Jackets", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Swimming Aids", "value": true}
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "156"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "' . $pageCanonical . '#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the maximum capacity of the 55ft yacht?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 55ft yacht can accommodate up to 20 guests for a private event."
          }
        },
        {
          "@type": "Question",
          "name": "Can I bring my own food on the yacht?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, you can bring your own food to cook on the provided BBQ grill. Soft drinks are included complimentary."
          }
        },
        {
          "@type": "Question",
          "name": "What landmarks can I see during the yacht tour?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can enjoy views of JBR Beach, Blue Water Island, Atlantis The Palm, Burj Al Arab, Palm Jumeirah, and Dubai Marina skyline."
          }
        }
      ]
    }
  ]
}
</script>';

// WhatsApp Link Generator
function buildWhatsappLink($message)
{
    global $whatsappNumber;
    return "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
}
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <i class="fas fa-users fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">20 Guests</p>
                <small class="text-muted">Max Capacity</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">55ft Luxury</p>
                <small class="text-muted">Yacht Size</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-wifi fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Free Wi-Fi</p>
                <small class="text-muted">Stay Connected</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">AED 625/Hour</p>
                <small class="text-muted">Private Charter</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Content Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Tour Overview -->
                <div class="mb-5">
                    <h2 class="mb-4">Dubai Yacht Tour - Boat Trip upto 55ft</h2>
                    <p class="text-primary"><strong>Private Event for Up to 20 Guests</strong></p>
                    <p>Best yacht tour, Discover the beauty of Dubai from the sea with private boat trip. Best boat trip
                        offering the activities in Dubai onboard luxury yacht for upto 20 guests private and amazing
                        event.</p>
                    <p>Enjoy the best luxury yacht charter (Boat trip) in Dubai and see the city from a unique
                        perspective. Whether you're seeking a relaxing day at sea or an extravagant event, this luxury
                        boat trip experience offers a chance to enjoy the city's luxury and splendor from the water.</p>
                    <p>Get unparalleled views of Dubai's iconic landmarks onboard this luxury yacht, such as the JBR
                        Beach, Blue Water Island, Atlantis the Palm, Burj Al Arab, Palm Jumeirah, and the Dubai Marina
                        skyline. Choose from various routes on this luxury boat trip, such as cruising around Palm
                        Jumeirah, indulging in the modernity of Dubai Canal, and exploring the city through the sea.</p>
                    <p>Stay connected while cruising on our brand new boat with free on board Wi-Fi and chill out by
                        playing your favorite music on the sound system. Bring along your own food to cook up on the
                        provided grill and sip on the included soft drinks.</p>
                    <p>Enjoy privacy away from the bustling city and other tourists, with a luxury yacht providing a
                        secluded space for relaxation and enjoyment.</p>
                    <p>Our boat trip offers you flexibility of choosing your preferred destination in your allocated
                        time. Our luxury yacht charter experience will leave you with unforgettable memories with our
                        unmatched hospitality.</p>
                </div>

                <!-- Highlights Grid -->
                <div class="mb-5">
                    <h3 class="mb-4">Experience Highlights</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-ship text-primary me-2"></i>Luxury Sailing
                                        Experience</h6>
                                    <p class="small text-muted mb-0">Sail aboard a luxury boat in Dubai Harbour along
                                        the Persian Gulf's clear seas for an unforgettable experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-clock text-primary me-2"></i>Flexible
                                        Duration</h6>
                                    <p class="small text-muted mb-0">Book your luxury yacht for 2 to 3 hours with family
                                        and friends for the perfect getaway.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-hotel text-primary me-2"></i>Iconic
                                        Landmarks</h6>
                                    <p class="small text-muted mb-0">See the Burj Al Arab, Blue Water Island, Palm
                                        Jumeirah, Atlantis The Palm, and JBR Beach.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-heart text-primary me-2"></i>Unforgettable
                                        Memories</h6>
                                    <p class="small text-muted mb-0">Have an unforgettable time and create lasting
                                        memories with your family and friends.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Section -->
                <div class="mb-5">
                    <h3 class="mb-4 text-center">Charter Pricing</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card shadow border-0 overflow-hidden border-top border-primary border-4">
                                <div class="bg-primary text-white p-4 text-center">
                                    <h5 class="fw-bold text-white-50 mb-1">55ft Private Yacht Charter</h5>
                                    <p class="text-white-50 small mb-3">Exclusive Private Event</p>
                                    <h2 class="text-white-50 mb-0">AED 625 <small class="fs-6">/ Hour</small></h2>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="list-unstyled small mb-4 text-dark">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Up to 20 guests
                                            capacity</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Free Wi-Fi
                                            onboard</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Complimentary
                                            soft drinks</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>BBQ grill
                                            available</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Music system</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Flexible route
                                            options</li>
                                    </ul>
                                    <a href="<?php echo buildWhatsappLink('I want to book the 55ft Private Yacht Charter for 20 guests at AED 625/hour'); ?>"
                                        target="_blank" class="btn btn-primary w-100 rounded-pill fw-bold">
                                        <i class="fab fa-whatsapp me-2"></i>Book Now on WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inclusions & Exclusions -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2"><i class="fas fa-check-circle me-2"></i>What's
                            Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Luxury yacht charter
                            </li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Views of Dubai's iconic
                                landmarks</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Privacy and relaxation
                                away from the city</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Various cruising routes
                            </li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Meet and greet</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Free Wi-Fi</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Free soft drinks</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Free fresh towels</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Swimming aids</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Life jackets</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Music system</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Disposable cutlery and
                                dishes</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-danger border-bottom pb-2"><i class="fas fa-times-circle me-2"></i>What's
                            Not Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i>Food and premium drinks
                            </li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i>Transportation to and
                                from the yacht</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i>Car parking and club car
                                fee</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i>Energy drinks and mixers
                            </li>
                        </ul>
                        <h5 class="mt-4 text-warning border-bottom pb-2"><i
                                class="fas fa-exclamation-triangle me-2"></i>Important Notes</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-info-circle text-warning me-2"></i>Swimming is not
                                allowed from 1-hour before sunset onward</li>
                            <li class="mb-2 small"><i class="fas fa-info-circle text-warning me-2"></i>Jet skis and Jet
                                cars must be booked for a minimum of 2 hours (daytime only)</li>
                            <li class="mb-2 small"><i class="fas fa-info-circle text-warning me-2"></i>A lead booking
                                time of 2 hours required for Jet skis and Jet cars</li>
                            <li class="mb-2 small"><i class="fas fa-info-circle text-warning me-2"></i>Any form of
                                shoes, flipflops are not allowed onboard</li>
                        </ul>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="mb-5">
                    <h3 class="mb-4 text-center">Gallery</h3>
                    <div class="row g-3">
                        <?php
                        $image_dir = "img/yacht/55ft Yacht/";
                        $images = glob($image_dir . "*.{jpg,jpeg,png,webp,avif}", GLOB_BRACE);
                        $gallery_images_js = [];

                        foreach ($images as $index => $image) {
                            $image_url = $image;
                            $gallery_images_js[] = $image_url;
                            ?>
                            <div class="col-6 col-md-4">
                                <div class="gallery-item-wrapper" onclick="openLightbox(<?php echo $index; ?>)">
                                    <img src="<?php echo $image_url; ?>" alt="55ft Luxury Yacht View"
                                        class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover gallery-img">
                                    <div class="gallery-overlay">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
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

                        /* Lightbox Modal */
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

                        .yacht-lightbox .close-btn:hover {
                            transform: scale(1.2);
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
                    </style>
                </div>

                <!-- Lightbox Modal -->
                <div class="yacht-lightbox" id="yachtLightbox">
                    <span class="close-btn" onclick="closeLightbox()">&times;</span>
                    <span class="nav-btn prev" onclick="navigateLightbox(-1)">&#10094;</span>
                    <img id="lightboxImage" src="" alt="Gallery Image">
                    <span class="nav-btn next" onclick="navigateLightbox(1)">&#10095;</span>
                </div>

                <script>
                    const galleryImages = <?php echo json_encode($gallery_images_js); ?>;
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

                    // Close on escape key
                    document.addEventListener('keydown', function (e) {
                        if (e.key === 'Escape') closeLightbox();
                        if (e.key === 'ArrowLeft') navigateLightbox(-1);
                        if (e.key === 'ArrowRight') navigateLightbox(1);
                    });

                    // Close on backdrop click
                    document.getElementById('yachtLightbox').addEventListener('click', function (e) {
                        if (e.target === this) closeLightbox();
                    });
                </script>

                <!-- FAQs -->
                <div class="mb-5">
                    <h3 class="mb-4">Frequently Asked Questions</h3>
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What is the maximum capacity of the 55ft yacht?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our 55ft luxury yacht can accommodate up to 20 guests for a private event, making it
                                    perfect for family gatherings, birthday celebrations, corporate events, or larger
                                    group getaways.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can I bring my own food on the yacht?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, absolutely! You can bring your own food to cook on the provided BBQ grill. We
                                    provide complimentary soft drinks, fresh towels, and disposable cutlery and dishes
                                    for your convenience.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What landmarks will I see during the yacht tour?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You will enjoy breathtaking views of JBR Beach, Blue Water Island, Atlantis The
                                    Palm, Burj Al Arab, Palm Jumeirah, and the stunning Dubai Marina skyline. You can
                                    choose your preferred route during your allocated time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Is swimming allowed during the yacht trip?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, swimming is allowed with life jackets and swimming aids provided. However,
                                    please note that swimming is not permitted from 1 hour before sunset onwards for
                                    safety reasons.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Can I add jet skis to my yacht charter?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, jet skis and jet cars can be added to your experience. They must be booked for
                                    a minimum of 2 hours and are only available during daytime. Please provide at least
                                    2 hours lead booking time for these add-ons.
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

                    <div class="bg-primary text-white p-4 rounded-3 shadow mt-4">
                        <h5 class="mb-3">Quick Booking</h5>
                        <p class="small">Reserve your private 55ft yacht experience in Dubai Harbour via WhatsApp for
                            instant confirmation.</p>
                        <a href="<?php echo buildWhatsappLink('I want to book the 55ft Private Yacht Charter in Dubai for 20 guests'); ?>"
                            target="_blank" class="btn btn-warning w-100 rounded-pill fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Booking
                        </a>
                    </div>

                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3"><i class="fas fa-info-circle text-primary me-2"></i>Quick Info
                            </h5>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><strong>Capacity:</strong> Up to 20 guests</li>
                                <li class="mb-2"><strong>Price:</strong> AED 625/hour</li>
                                <li class="mb-2"><strong>Location:</strong> Dubai Harbour</li>
                                <li class="mb-2"><strong>Type:</strong> Private Charter</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<?php include 'includes/footer.php'; ?>