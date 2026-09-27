<?php
// Page SEO Variables
$pageTitle = "Al Wasl Marina Dhow Cruise Dinner | Traditional Dhow Cruise Dubai | Arihant Travels";
$pageDescription = "Experience the magic of Dubai's coastline with Al Wasl Marina Dhow Cruise. Enjoy a romantic dinner cruise with stunning views of Dubai Marina skyline.";
$pageKeywords = "Al Wasl Marina Dhow Cruise, Dubai Marina cruise, Dhow cruise dinner, Traditional dhow cruise Dubai, Evening dhow cruise, Romantic dinner cruise Dubai, Dubai Marina tour, Luxury dhow cruise";
$pageCanonical = "https://arihantlink.com/al-wasl-dhow-cruise";
$currentPage = "al-wasl-dhow-cruise";

// Breadcrumb Variables
$pageHeading = "Al Wasl Marina Dhow Cruise";
$breadcrumbCategory = "Dhow Cruise";
$breadcrumbCategoryLink = "dhow-cruise";
$breadcrumbBg = "img/dhowcruise/alwasl-dhowcruise-marina.avif";
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
      "name": "Al Wasl Marina Dhow Cruise",
      "description": "' . $pageDescription . '",
      "url": "' . $pageCanonical . '",
      "image": "https://arihantlink.com/img/dhowcruise/alwasl-fromt_image1.webp",
      "departureTime": "20:30:00+04:00",
      "provider": {
        "@type": "Organization",
        "name": "Al Wasl Dhow Cruise",
        "url": "' . $pageCanonical . '"
      },
      "offers": [
        {
          "@type": "Offer",
          "name": "Standard Dinner Cruise - Adult",
          "price": 120,
          "priceCurrency": "AED",
          "availability": "https://schema.org/InStock"
        },
        {
          "@type": "Offer",
          "name": "Standard Dinner Cruise - Child (below 1.2m)",
          "price": 100,
          "priceCurrency": "AED",
          "availability": "https://schema.org/InStock"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "' . $pageCanonical . '#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you offer a pick-up and drop-off service?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We offer our guests the convenience of this facility at an additional cost. While we do not offer a complimentary pick-up and drop-off service, we understand the importance of a hassle-free journey, and our representative will gladly assist you with further information on this service."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer jain meal during cruise journey?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No we don\'t offer jain meal but our menu includes a good range of vegetarian options."
          }
        },
        {
          "@type": "Question",
          "name": "Where is the Dhow Marina boarding location?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Dhow is docked at Dubai Marina Harbour. Our representative will send you the Dhow location map and parking options at the time of final confirmation on your email and WhatsApp."
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
                <p class="mb-0 fw-bold">2 Hours</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Marina Lagoon</p>
                <small class="text-muted">Route</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Intl. Buffet</p>
                <small class="text-muted">Dining</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">From 120 AED</p>
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
                    <h2 class="mb-4">Al Wasl Marina Experience</h2>
                    <p class="text-primary"><strong>A unique blend of tradition and modernity!</strong></p>
                    <p>Al Wasl Dubai Marina is a stunning waterfront masterpiece that has captivated the imagination of
                        tourists worldwide. The Dhow Cruise Dubai Marina is a unique blend of tradition and modernity, a
                        voyage that promises to be a memorable excursion. Step aboard the majestic wooden Dhow, a symbol
                        of Dubai's rich maritime heritage, and sail through the ultra-modern waterfront district of
                        Dubai Marina.</p>
                    <p>This is where tradition meets modernity! The entire Dinner Cruise is a voyage through some of the
                        best architectural marvels of Dubai, offering a variety of experiences from togetherness and
                        romance to simply chilling out. The breathtaking waterfront views will leave you in awe, a sight
                        you won't forget.</p>
                </div>

                <!-- Culinary Journey -->
                <div class="mb-5" id="menu">
                    <h2 class="mb-4 text-center">A Culinary Journey on the Water</h2>
                    <p class="text-muted text-center mb-5">Indulge in a succulent menu featuring continental, Arabic,
                        and Indian flavors. Our extensive buffet includes a wide array of vegetarian and non-vegetarian
                        options.</p>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Salad Bar</h5>
                                    <ul class="list-unstyled small">
                                        <li>Hummus, Fattoush, Tabbouleh</li>
                                        <li>Greek & Pasta Salad</li>
                                        <li>Aloo Channa Chaat</li>
                                        <li>Arabic Pickles & Olives</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Main Course</h5>
                                    <ul class="list-unstyled small">
                                        <li>Butter Chicken</li>
                                        <li>Grilled Fish (Lemon Butter)</li>
                                        <li>Veg Biryani & Zeera Rice</li>
                                        <li>Palak Paneer & Daal Tarka</li>
                                        <li>Hakka Noodles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Barbeque & Sweets</h5>
                                    <ul class="list-unstyled small">
                                        <li>Shish Taouk & Kababs</li>
                                        <li>Chicken Malai Tikka</li>
                                        <li>Um Ali & Kunafa</li>
                                        <li>French Pastries & Fruits</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 bg-light p-3 rounded small italic text-center text-muted">
                        * Menu items include unlimited bottled water, soft drinks, tea, and coffee.
                    </div>
                </div>

                <!-- Pricing -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Pricing Options</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 text-center border-top border-primary border-4">
                                <div class="card-body p-4">
                                    <h5 class="fw-bold mb-3">Adult Experience</h5>
                                    <h2 class="text-primary mb-1">AED 120</h2>
                                    <p class="text-muted small">Standard Package</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>International
                                            Buffet</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Hours Cruising
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Live
                                            Entertainment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 text-center">
                                <div class="card-body p-4">
                                    <h5 class="fw-bold mb-3">Child Experience</h5>
                                    <h2 class="text-primary mb-1">AED 100</h2>
                                    <p class="text-muted small">Below 1.2m Height</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kid Friendly Food
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited Soft
                                            Drinks</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Under 3 Years
                                            Free</li>
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
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> 2-hour cruise through
                                Dubai Marina Lagoon</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Welcome drinks, dates
                                & coffee</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> International Buffet
                                (Veg/Non-Veg)</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Live Tanoura Dance
                                performance</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Onboard DJ with
                                English, Arabic & Indian music</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Alcohol (Available for
                                purchase)</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Professional
                                Photography</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Hotel Transfers
                                (Available at extra cost)</li>
                        </ul>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Experience Gallery</h2>
                    <div class="row g-3">
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/alwasl-fromt_image1.webp" alt="Al Wasl Dhow View"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/Alwasllower-main-deck.jpg" alt="Al Wasl Deck"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/Alwasl-food.jpg" alt="Dining Experience"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/Alwasl-salad-bar.jpg" alt="Salad Bar"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/Alwasl-Tanoura-Dance-at-Dhow-Cruise.jpg" alt="Live Show"
                                class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="img/dhowcruise/Alwasl-food-2.jpg" alt="Buffet Selection"
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
                                    Do you offer a pick-up and drop-off service?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer our guests the convenience of this facility at an additional cost. While we
                                    do not offer a complimentary pick-up and drop-off service, we understand the
                                    importance of a hassle-free journey, and our representative will gladly assist you
                                    with further information on this service.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Are Jain meal options available?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, we don't offer a specific Jain meal, but our international buffet includes a
                                    wide range of delicious vegetarian options that cater to most dietary requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Where is the boarding location?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our Dhow is docked at Dubai Marina Harbour. Our representative will send you the
                                    precise Dhow location map and parking options via email and WhatsApp once your
                                    booking is confirmed.
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
                        <p class="small">Reserve your spot on the Al Wasl Marina Dhow Cruise via WhatsApp for instant
                            confirmation.</p>
                        <a href="<?php echo buildWhatsappLink('I want to book the Al Wasl Marina Dhow Cruise'); ?>"
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