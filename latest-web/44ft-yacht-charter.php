<?php
// Page SEO Variables
$pageTitle = "44ft Private Yacht Charter Dubai | 10 Guests | AED 450/Hour | Arihant Travel";
$pageDescription = "Book a 44ft private yacht charter in Dubai for up to 10 guests from AED 450/hr. Cruise past Burj Al Arab, Palm Jumeirah & Dubai Marina skyline.";
$pageKeywords = "44ft yacht Dubai, private yacht charter 10 guests, Dubai yacht tour 44ft, budget yacht rental Dubai, luxury boat trip Dubai, private boat trip Dubai, 44ft yacht rental, luxury yacht Dubai Marina, Palm Jumeirah boat tour, Burj Al Arab yacht view";
$pageCanonical = "https://arihantlink.com/44ft-yacht-charter";
$currentPage = "44ft-yacht-charter";

// Breadcrumb Variables
$pageHeading = "44ft Private Yacht Charter";
$breadcrumbCategory = "Yacht Charter";
$breadcrumbCategoryLink = "dhow-cruise";
$breadcrumbBg = "img/yacht/44ft%20yatch/HeroBanner44ft.jpg";
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
      "name": "44ft Private Yacht Charter Dubai - 10 Guests",
      "description": "' . $pageDescription . '",
      "url": "' . $pageCanonical . '",
      "image": [
        "https://arihantlink.com/img/yacht/44ft%20yatch/HeroBanner44ft.jpg"
      ],
      "departureLocation": {
        "@type": "Place",
        "name": "Dubai Marina",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Dubai Marina",
          "addressLocality": "Dubai Marina",
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
        "name": "44ft Private Yacht Charter",
        "price": 450,
        "priceCurrency": "AED",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": 450,
          "priceCurrency": "AED",
          "unitText": "per hour"
        },
        "availability": "https://schema.org/InStock"
      },
      "maximumAttendeeCapacity": 10,
      "amenityFeature": [
        {"@type": "LocationFeatureSpecification", "name": "Free Wi-Fi", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "BBQ Grill", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Music System", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Life Jackets", "value": true},
        {"@type": "LocationFeatureSpecification", "name": "Swimming Aids", "value": true}
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "156"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "' . $pageCanonical . '#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the maximum capacity of the 44ft yacht?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 44ft yacht can accommodate up to 10 guests for a private event."
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
if (!function_exists('buildWhatsappLink')) {
    function buildWhatsappLink($message)
    {
        global $whatsappNumber;
        return "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
    }
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
                <p class="mb-0 fw-bold">10 Guests</p>
                <small class="text-muted">Max Capacity</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">44ft Luxury</p>
                <small class="text-muted">Yacht Size</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-wifi fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Free Wi-Fi</p>
                <small class="text-muted">Stay Connected</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">AED 450/Hour</p>
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
                    <h2 class="mb-4">Dubai Yacht Tour - Boat Trip upto 44ft</h2>
                    <p class="text-primary"><strong>Private Event for Up to 10 Guests</strong></p>
                    <p>Discover the beauty of Dubai from the sea with our private boat trip. Enjoy the best luxury yacht
                        charter experience in Dubai and see the city from a unique perspective. Whether you're seeking a
                        relaxing day at sea or an extravagant event, this luxury boat trip offers a chance to enjoy the
                        city's luxury and splendor from the water.</p>
                    <p>Get unparalleled views of Dubai's iconic landmarks onboard this luxury yacht, such as the JBR
                        Beach, Blue Water Island, Atlantis the Palm, Burj Al Arab, Palm Jumeirah, and the Dubai Marina
                        skyline. Choose from various routes, such as cruising around Palm Jumeirah, indulging in the
                        modernity of Dubai Canal, and exploring the city through the sea.</p>
                    <p>Stay connected while cruising on our brand new boat with free on board Wi-Fi and chill out by
                        playing your favorite music on the sound system. Bring along your own food to cook up on the
                        provided grill and sip on the included soft drinks.</p>
                    <p>Enjoy privacy away from the bustling city and other tourists, with a luxury yacht providing a
                        secluded space for relaxation and enjoyment. Our boat trip offers you flexibility of choosing
                        your preferred destination in your allocated time. Our luxury yacht charter experience will
                        leave you with unforgettable memories with our unmatched hospitality.</p>
                </div>

                <!-- Highlights Grid -->
                <div class="mb-5">
                    <h3 class="mb-4">Experience Highlights</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-lock text-primary me-2"></i>Private &
                                        Secluded</h6>
                                    <p class="small text-muted mb-0">Excellent opportunity to sail aboard a luxury boat
                                        and have an unforgettable sailing experience with family and friends.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-history text-primary me-2"></i>Flexible
                                        Timing</h6>
                                    <p class="small text-muted mb-0">Take a break to book your luxury yacht for 2 to 3
                                        hours with family and friends in Dubai Harbour.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-water text-primary me-2"></i>Clear Seas
                                    </h6>
                                    <p class="small text-muted mb-0">Be ready to enjoy sailing along the Persian Gulf's
                                        clear seas and take in iconic views.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                                <div class="card-body">
                                    <h6 class="fw-bold mb-2"><i class="fas fa-users text-primary me-2"></i>Max Capacity
                                    </h6>
                                    <p class="small text-muted mb-0">Ideal for small groups, this yacht accommodates a
                                        maximum capacity of 10 persons.</p>
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
                                    <h5 class="fw-bold text-white mb-1">44ft Private Yacht Charter</h5>
                                    <p class="text-white-50 small mb-3">Exclusive Private Event</p>
                                    <h2 class="text-white mb-0">AED 450 <small class="fs-6">/ Hour</small></h2>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="list-unstyled small mb-4 text-dark">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Up to 10 guests
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
                                    <a href="<?php echo buildWhatsappLink('I want to book the 44ft Private Yacht Charter for 10 guests at AED 450/hour'); ?>"
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
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i>Free Soft drinks</li>
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
                        <h5 class="mt-4 mb-3 text-warning"><i class="fas fa-exclamation-triangle me-2"></i>Important
                            Notes</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-info-circle text-primary me-2"></i>Swimming is not
                                allowed from 1-hour before sunset onward</li>
                            <li class="mb-2 small"><i class="fas fa-info-circle text-primary me-2"></i>Jet skis and Jet
                                cars have to be booked for a min of 2 hours and only during the day</li>
                            <li class="mb-2 small"><i class="fas fa-info-circle text-primary me-2"></i>A lead booking
                                time of 2 hours will be required for Jet skis and Jet cars</li>
                            <li class="mb-2 small"><i class="fas fa-info-circle text-primary me-2"></i>Any form of
                                shoes, flipflop are not allowed onboard</li>
                        </ul>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="mb-5">
                    <h3 class="mb-4 text-center">Gallery</h3>
                    <div class="row g-3">
                        <?php
                        $image_dir = "img/yacht/44ft yatch/";
                        $images = glob($image_dir . "*.{jpg,jpeg,png,webp,avif}", GLOB_BRACE);
                        $gallery_images_js = [];

                        if ($images) {
                            foreach ($images as $index => $image) {
                                $image_url = $image;
                                $gallery_images_js[] = $image_url;
                                ?>
                                <div class="col-6 col-md-4">
                                    <div class="gallery-item-wrapper" onclick="openLightbox(<?php echo $index; ?>)">
                                        <img src="<?php echo $image_url; ?>" alt="44ft Luxury Yacht View"
                                            class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover gallery-img">
                                        <div class="gallery-overlay">
                                            <i class="fas fa-search-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo '<div class="col-12 text-center"><p class="text-muted">Gallery images coming soon.</p></div>';
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
                                    What is the maximum capacity of the 44ft yacht?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our 44ft luxury yacht can accommodate up to 10 guests for a private event, making it
                                    perfect for small family gatherings or intimate celebrations.
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
                                    provide complimentary soft drinks, fresh towels, and disposable cutlery and dishes.
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
                                    Palm, Burj Al Arab, Palm Jumeirah, and the stunning Dubai Marina skyline.
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
                        <p class="small">Reserve your private 44ft yacht experience in Dubai Marina via WhatsApp for
                            instant confirmation.</p>
                        <a href="<?php echo buildWhatsappLink('I want to book the 44ft Private Yacht Charter in Dubai for 10 guests'); ?>"
                            target="_blank" class="btn btn-warning w-100 rounded-pill fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Booking
                        </a>
                    </div>

                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3"><i class="fas fa-info-circle text-primary me-2"></i>Quick Info
                            </h5>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><strong>Capacity:</strong> Up to 10 guests</li>
                                <li class="mb-2"><strong>Price:</strong> AED 450/hour</li>
                                <li class="mb-2"><strong>Location:</strong> Dubai Marina</li>
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