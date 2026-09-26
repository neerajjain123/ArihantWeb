<?php
// Page SEO Variables
$pageTitle = "Lotus Royale Mega Yacht Dinner Cruise | Luxury Marina Experience | Arihant Travels";
$pageDescription = "Experience ultimate luxury aboard the Lotus Royale Mega Yacht in Dubai Marina. Enjoy a 5-star dinner cruise with international buffet…";
$pageKeywords = "Lotus Royale Yacht, Dubai Marina dinner cruise, luxury yacht dinner Dubai, private yacht rental Dubai, romantic dinner cruise, corporate yacht party Dubai, premium yacht experience, Dubai Marina night cruise";
$pageCanonical = "https://arihantlink.com/lotus-mega-yacht";
$currentPage = "lotus-mega-yacht";

// Breadcrumb Variables
$pageHeading = "Lotus Royale Mega Yacht";
$breadcrumbCategory = "Dhow Cruise";
$breadcrumbCategoryLink = "dhow-cruise";
$breadcrumbBg = "img/dhowcruise/mega_yacht_1.jpg";
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
      "name": "Lotus Royale Mega Yacht Dinner Cruise",
      "description": "' . $pageDescription . '",
      "url": "' . $pageCanonical . '",
      "image": [
        "https://arihantlink.com/img/dhowcruise/mega_yacht_1.jpg",
        "https://arihantlink.com/img/dhowcruise/mega_yacht_2.jpg",
        "https://arihantlink.com/img/dhowcruise/mega_yacht_3.jpg"
      ],
      "duration": "PT3H",
      "departureTime": "21:00:00+04:00",
      "departureLocation": {
        "@type": "Place",
        "name": "Dubai Marina Yacht Club",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Dubai Marina Yacht Club",
          "addressLocality": "Dubai Marina",
          "addressRegion": "Dubai",
          "addressCountry": "AE"
        }
      },
      "provider": {
        "@type": "Organization",
        "name": "Lotus Cruises",
        "url": "' . $pageCanonical . '"
      },
      "offers": [
        {
          "@type": "Offer",
          "name": "Standard Food & Soft Drinks",
          "price": 249,
          "priceCurrency": "AED"
        },
        {
          "@type": "Offer",
          "name": "Standard & Unlimited Beverages",
          "price": 349,
          "priceCurrency": "AED"
        },
        {
          "@type": "Offer",
          "name": "VIP Unlimited Soft Beverages",
          "price": 399,
          "priceCurrency": "AED"
        },
        {
          "@type": "Offer",
          "name": "VIP Unlimited Premium Beverages",
          "price": 499,
          "priceCurrency": "AED"
        }
      ],
      "itinerary": {
        "@type": "ItemList",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Boarding",
            "description": "20:15 - 20:55"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Cruising",
            "description": "21:00 - 23:00"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Disembarkation",
            "description": "23:00"
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "' . $pageCanonical . '#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are your timings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Boarding: 20:15 - 20:55. Cruising: 21:00 - 23:00. Disembarkation: 23:00."
          }
        },
        {
          "@type": "Question",
          "name": "Do you serve alcohol on board?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we serve alcohol on board for guests aged 21 and above. Various beverage packages are available."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer Jain meal options?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we offer Jain meal options upon prior request (at least 24 hours in advance)."
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
                <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">3 Hours</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Marina & Palm</p>
                <small class="text-muted">Route</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">5* Intl. Buffet</p>
                <small class="text-muted">Dining</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">From 249 AED</p>
                <small class="text-muted">Best Price</small>
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
                    <h2 class="mb-4">Lotus Royale: The Pinnacle of Luxury</h2>
                    <p class="text-primary"><strong>Experience the ultimate mega yacht journey!</strong></p>
                    <p>Embark on an extraordinary journey aboard the Lotus Royale Mega Yacht, where ultimate luxury
                        meets the glittering skyline of Dubai Marina. This magnificent vessel is a floating masterpiece,
                        offering a 5-star experience that redefines dinner cruising in the UAE. From its onboard
                        swimming pool to multiple entertainment decks, every corner of the Lotus Royale exudes
                        sophistication.</p>
                    <p>As you set sail, witness the breathtaking panoramic views of Ain Dubai, JBR, and the iconic
                        Atlantis The Palm. Whether you're lounging by the pool or enjoying the gourmet buffet on the
                        deck, the Lotus Royale promises an evening of opulence and unforgettable memories under the
                        stars.</p>
                </div>

                <!-- Highlights Grid -->
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                            <div class="card-body">
                                <h6 class="fw-bold mb-2">Swimming Pool</h6>
                                <p class="small text-muted mb-0">Take a refreshing dip in our exclusive onboard pool
                                    while cruising.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                            <div class="card-body">
                                <h6 class="fw-bold mb-2">Gourmet Buffet</h6>
                                <p class="small text-muted mb-0">Diverse international dishes prepared by top-tier
                                    chefs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0 border-top border-primary border-3">
                            <div class="card-body">
                                <h6 class="fw-bold mb-2">RoboChef & Live Stns</h6>
                                <p class="small text-muted mb-0">Interactive noodle bars and pasta stations for fresh
                                    dining.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Culinary Journey -->
                <div class="mb-5" id="menu">
                    <div class="text-center mb-5">
                        <h2 class="mb-3">A Gastronomic Masterpiece</h2>
                        <p class="text-muted">Indulge in an exquisite 5-star international buffet featuring live cooking
                            stations, fresh seafood, and premium desserts.</p>
                        <a href="img/dhowcruise/mega-yatch-menu.pdf" download
                            class="btn btn-outline-primary btn-sm rounded-pill mt-2">
                            <i class="fas fa-file-pdf me-2"></i>Download Food Menu
                        </a>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Canapés & Sushi</h5>
                                    <ul class="list-unstyled small">
                                        <li>Marinated Shrimp Skewers</li>
                                        <li>Chicken Tikka Wraps</li>
                                        <li>Assorted Sushi (Avocado & Kappa Maki)</li>
                                        <li>Arancini: Rice & Cheese Balls</li>
                                        <li>Assorted Dimsum</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Main Courses</h5>
                                    <ul class="list-unstyled small">
                                        <li>Butter Chicken & Mutton Rogan Josh</li>
                                        <li>Grilled Fish (Lemon Butter)</li>
                                        <li>Beef Lasagna</li>
                                        <li>Matar Paneer & Daal Tadka</li>
                                        <li>Lamb Okra & Mixed Seafood Gratin</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Dessert & Sweets</h5>
                                    <ul class="list-unstyled small">
                                        <li>Ice Cream Station</li>
                                        <li>Umm Ali & Bread Pudding</li>
                                        <li>Fruit Custard & Pastries</li>
                                        <li>Cream Caramel</li>
                                        <li>Fresh Seasonal Fruits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 bg-light p-3 rounded small italic text-center text-muted">
                        * Live stations include BBQ, Burger Station, Shawarma, and RoboChef Pasta/Noodle bars.
                    </div>
                </div>

                <!-- Pricing -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Luxury Packages</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 overflow-hidden">
                                <div class="bg-light p-4 text-center border-bottom">
                                    <h5 class="fw-bold mb-1">Standard Package</h5>
                                    <p class="text-muted small mb-3">Food & Soft Drinks</p>
                                    <h2 class="text-primary mb-0">AED 249</h2>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="list-unstyled small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>5* International
                                            Buffet</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited Water &
                                            Sodas</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3 Hours Cruising
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Live
                                            Entertainment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 overflow-hidden border-top border-primary border-4">
                                <div class="bg-primary text-white p-4 text-center border-bottom">
                                    <h5 class="fw-bold mb-1">Luxury Package</h5>
                                    <p class="text-white-50 small mb-3">Unlimited Beverages</p>
                                    <h2 class="text-warning mb-0">AED 349</h2>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="list-unstyled small mb-4">
                                        <li class="mb-2"><i class="fas fa-star text-primary me-2"></i><strong>Unlimited
                                                Alcoholic Drinks</strong></li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>5* International
                                            Buffet</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Live Cooking
                                            Stations</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Access to Pool
                                            Deck</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 overflow-hidden">
                                <div class="bg-light p-4 text-center border-bottom">
                                    <h5 class="fw-bold mb-1">VIP Soft Package</h5>
                                    <p class="text-muted small mb-3">Premium Seating</p>
                                    <h2 class="text-primary mb-0">AED 399</h2>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="list-unstyled small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority VIP
                                            Check-in</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Reserved Premium
                                            Seating</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Butler Service
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP Entrance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 overflow-hidden">
                                <div class="bg-dark text-white p-4 text-center border-bottom">
                                    <h5 class="fw-bold mb-1">VIP Royal Package</h5>
                                    <p class="text-white-50 small mb-3">Unlimited Premium</p>
                                    <h2 class="text-warning mb-0">AED 499</h2>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="list-unstyled small mb-4">
                                        <li class="mb-2"><i class="fas fa-crown text-warning me-2"></i>Unlimited Premium
                                            Spirits</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP Reserved
                                            Seating</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Royal Treatment
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Exclusive Lounge
                                            Access</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">Inclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> 3-hour cruise in Dubai
                                Marina & Palm Jumeirah</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Access to Onboard
                                Swimming Pool</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> 5* International
                                Buffet with Live Cooking</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Live Entertainment
                                (Shows & Music)</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Fully air-conditioned
                                lower deck & open upper deck</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Good to Know</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-info-circle text-primary me-2"></i> Boarding: 20:15
                                - 20:55</li>
                            <li class="mb-2 small"><i class="fas fa-info-circle text-primary me-2"></i> Cruising: 21:00
                                - 23:00</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Pregnant women not
                                advised</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> No outside food/drinks
                                allowed</li>
                        </ul>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Visual Experience</h2>
                    <div class="row g-3">
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/mega_yacht_1.jpg" alt="Lotus Mega Yacht at Sunset"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-3">
                            <img src="img/dhowcruise/mega_yacht_2.jpg" alt="Elegant Indoor Lounge"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-5">
                            <img src="img/dhowcruise/mega_yacht_3.jpg" alt="5-Star Buffet"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-5">
                            <img src="img/dhowcruise/mega_yacht_4.jpg" alt="Panoramic Upper Deck"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/mega_yacht_5.jpg" alt="Live Entertainment"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-3">
                            <img src="img/dhowcruise/mega_yacht_9.jpg" alt="Romantic Night Atmosphere"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <style>
                        .object-fit-cover {
                            object-fit: cover !important;
                            min-height: 250px;
                        }
                    </style>
                </div>

                <!-- FAQs -->
                <div class="mb-5">
                    <h2 class="mb-4">Frequently Asked Questions</h2>
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What are the cruise timings?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our Dinner Cruise boarding starts at 20:15 and ends at 20:55. The yacht sails
                                    promptly at 21:00 and returns at 23:00. For Sunset cruises, boarding is from 16:45,
                                    sailing at 17:30.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do you serve alcohol on board?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, the Lotus Royale is a licensed vessel. We serve a wide variety of alcoholic
                                    beverages. Guests aged 21 and above can purchase drinks or select one of our
                                    unlimited beverage packages.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Are Jain meals available on the Mega Yacht?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we strictly cater to Jain dietary requirements. Please ensure you inform us at
                                    least 24 hours in advance so our chefs can prepare your meal separately.
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
                        <p class="small">Reserve your 5-star experience on the Lotus Royale Mega Yacht via WhatsApp for
                            instant confirmation.</p>
                        <a href="<?php echo buildWhatsappLink('I want to book the Lotus Royale Mega Yacht Dinner Cruise'); ?>"
                            target="_blank" class="btn btn-warning w-100 rounded-pill fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<?php include 'includes/footer.php'; ?>