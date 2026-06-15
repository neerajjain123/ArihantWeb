<?php
// Page SEO Variables
$pageTitle = "Alexandra Sea Lounge Dubai Marina 2024 | Luxury Dinner Cruise | Arihant Travel";
$pageDescription = "Experience a magical evening aboard the luxurious Alexandra Sea Lounge in Dubai Marina. Enjoy a gourmet buffet dinner, live entertainment…";
$pageKeywords = "Alexandra Sea Lounge, Dubai Marina cruise, Dhow cruise dinner, Luxury dinner cruise Dubai, Romantic dinner cruise, Dubai Marina night cruise, Best dinner cruise Dubai, Fine dining cruise Dubai";
$pageCanonical = "https://arihantlink.com/alexandra-sea-lounge";
$currentPage = "alexandra-sea-lounge";

// Breadcrumb Variables
$pageHeading = "Alexandra Sea Lounge Dubai Marina";
$breadcrumbCategory = "Dhow Cruise";
$breadcrumbCategoryLink = "dhow-cruise";
$breadcrumbBg = "img/dhowcruise/AlexndraSeaLeague-1.jpg";
$breadcrumbOverlay = false;

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
      "name": "Alexandra Sea Lounge Dubai Marina Dinner Cruise",
      "description": "' . $pageDescription . '",
      "url": "' . $pageCanonical . '",
      "image": "https://arihantlink.com/img/dhowcruise/AlexndraSeaLeague-1.jpg",
      "duration": "PT2H30M",
      "departureTime": "20:30:00+04:00",
      "departureLocation": {
        "@type": "Place",
        "name": "Dubai Marina Yacht Club",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Dubai Marina Yacht Club, West Bay",
          "addressLocality": "Dubai Marina",
          "addressRegion": "Dubai",
          "postalCode": "00000",
          "addressCountry": "AE"
        }
      },
      "provider": {
        "@type": "Organization",
        "name": "Alexandra Sea Lounge",
        "url": "' . $pageCanonical . '"
      },
      "offers": [
        {
          "@type": "Offer",
          "name": "Standard Dinner Cruise - Adult",
          "price": 229,
          "priceCurrency": "AED",
          "availability": "https://schema.org/InStock"
        },
        {
          "@type": "Offer",
          "name": "Standard Dinner Cruise - Child (3-10 years)",
          "price": 179,
          "priceCurrency": "AED",
          "availability": "https://schema.org/InStock"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "' . $pageCanonical . '#faq",
      "name": "Frequently Asked Questions about Alexandra Sea Lounge",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the duration of the Alexandra Sea Lounge dinner cruise?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The dinner cruise lasts approximately 2.5 hours, from 8:30 PM to 11:00 PM."
          }
        },
        {
          "@type": "Question",
          "name": "Where does the Alexandra Sea Lounge cruise depart from?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The cruise departs from the Dubai Marina Yacht Club, West Bay."
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
                <p class="mb-0 fw-bold">2.5 Hours</p>
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
                <p class="mb-0 fw-bold">From 229 AED</p>
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
                <!-- Intro -->
                <div class="mb-5">
                    <h2 class="mb-4">Sea Lounge Overview</h2>
                    <p class="text-primary"><strong>A unique blend of tradition and modernity!</strong></p>
                    <p>Embark on an extraordinary journey aboard the Alexandra Sea Lounge, where luxury meets tradition
                        in the heart of Dubai Marina. This elegant vessel combines authentic Arabic design with modern
                        comforts, offering a unique perspective of Dubai's glittering skyline. As you step aboard,
                        you'll be transported to a world of sophistication and Arabian hospitality.</p>
                    <p>The Alexandra Sea Lounge is more than just a dinner cruise—it's a celebration of Dubai's maritime
                        heritage and contemporary glamour. Sail past iconic landmarks including the world's tallest
                        Ferris wheel, Ain Dubai, and the stunning Jumeirah Beach Residence (JBR), all while enjoying
                        world-class dining and entertainment under the starlit Arabian sky.</p>
                </div>

                <!-- Culinary Journey -->
                <div class="mb-5" id="menu">
                    <h2 class="mb-4 text-center">A Culinary Journey on the Water</h2>
                    <p class="text-muted text-center mb-4">Prepare for an unforgettable dining experience aboard the Sea
                        Lounge. Our extensive buffet features a world of flavors, from fresh Mediterranean salads to a
                        wide array of international main courses.</p>

                    <div class="text-center mb-5">
                        <a href="img/dhowcruise/Alexndra-Dhow-food-Menu.pdf" download target="_blank"
                            class="btn btn-primary rounded-pill px-4 shadow">
                            <i class="fas fa-file-pdf me-2"></i>Download Food Menu (PDF)
                        </a>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Starters & Salads</h5>
                                    <ul class="list-unstyled small">
                                        <li>Vegetable Spring Rolls</li>
                                        <li>Tomato Soup</li>
                                        <li>Greek Salad & Hummus</li>
                                        <li>Assorted Mezzes</li>
                                        <li>Fattoush & Tabouleh</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Main Courses</h5>
                                    <ul class="list-unstyled small">
                                        <li>Grilled Chicken & Beef Kofta</li>
                                        <li>Fish with Lemon Butter Sauce</li>
                                        <li>Yellow Dal Tadka & Veg Curry</li>
                                        <li>Penne Alfredo & Marinara Mix</li>
                                        <li>Roasted Potatoes & Basmati Rice</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 bg-light p-3 rounded small italic text-center text-muted">
                        * Menu items are subject to change based on season and availability. Alcoholic drinks are
                        available at the bar for purchase.
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
                                    <h2 class="text-primary mb-1">AED 229</h2>
                                    <p class="text-muted small">Standard Package</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>International
                                            Buffet</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2.5 Hours
                                            Cruising</li>
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
                                    <h2 class="text-primary mb-1">AED 179</h2>
                                    <p class="text-muted small">Ages 3 - 10 Years</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Kid Friendly Food
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Unlimited Soft
                                            Drinks</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Infants Under 3
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
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> 2.5-hour luxury cruise
                            </li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Welcome drinks, dates
                                & coffee</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> International Buffet
                                (Veg/Non-Veg)</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Live Tanoura Dance &
                                Singer</li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Sightseeing (Ain
                                Dubai, JBR)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Hotel Pickup (available
                                on request)</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Professional
                                Photography</li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Alcoholic beverages
                                (Available for purchase)</li>
                        </ul>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Experience Gallery</h2>
                    <div class="row g-3">
                        <?php for ($i = 1; $i <= 6; $i++): ?>
                            <div class="col-6 col-md-6">
                                <img src="img/dhowcruise/AlexndraSeaLeague-<?php echo $i; ?>.jpg"
                                    alt="Sea Lounge View <?php echo $i; ?>" class="img-fluid rounded-3 shadow-sm w-100"
                                    style="height: 350px; object-fit: cover;">
                            </div>
                        <?php endfor; ?>
                    </div>
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
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <strong>Dinner Cruise:</strong> Boarding 20:15 - 20:55, Cruising 21:00 - 23:00. <br>
                                    <strong>Sunset Cruise:</strong> Boarding 16:45 - 17:15, Cruising 17:30 - 19:30.
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
                                    Yes, we offer Jain meal options upon prior request. Please inform us at least 24
                                    hours in advance of your cruise.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Is there a dress code?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The dress code is smart casual. Guests are encouraged to dress elegantly to match
                                    the upscale ambiance.
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
                        <p class="small">Reserve your spot on the Alexandra Sea Lounge via WhatsApp for instant
                            confirmation.</p>
                        <a href="<?php echo buildWhatsappLink('I want to book Alexandra Sea Lounge Dhow Cruise'); ?>"
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