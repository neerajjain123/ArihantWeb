<?php
// Page SEO Variables
$pageTitle = "Ocean Empress Marina Dhow Cruise | Luxury Dinner Cruise Dubai | Arihant Travel";
$pageDescription = "Embark on the Ocean Empress for a luxury dhow cruise experience in Dubai Marina. Enjoy gourmet dining, stunning skyline views, and live entertainment.";
$pageKeywords = "Ocean Empress Marina Dhow Cruise, Luxury dhow cruise Dubai, Dubai Marina dinner cruise, Dhow cruise with alcohol, VIP dhow cruise Dubai, Dubai Marina sightseeing, Arihant Travel dhow cruise";
$pageCanonical = "https://arihantlink.com/ocean-empress";
$currentPage = "ocean-empress";

// Breadcrumb Variables
$pageHeading = "Ocean Empress Marina Dhow Cruise";
$breadcrumbCategory = "Dhow Cruise";
$breadcrumbCategoryLink = "dhow-cruise";
$breadcrumbBg = "img/dhowcruise/oceanexpress.jpeg.avif";
$breadcrumbOverlay = false;

// WhatsApp Number
$whatsappNumber = "971585945007";

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Ocean Empress Marina Dhow Cruise",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/dhowcruise/oceanexpress.jpeg.avif",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Dubai Marina Walk, Pier 7",
    "addressLocality": "Dubai Marina",
    "addressRegion": "Dubai",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.0784",
    "longitude": "55.1376"
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "Lower Deck - Food Only",
      "price": "145",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "' . $pageCanonical . '"
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "428"
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
        "text": "Our Dhow is docked at Dubai Marina Harbor. Our representative will send you the Dhow location map and parking options at the time of final confirmation on your email and WhatsApp."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Infant policy?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our policy for infants is that children under 3 years of age will not be charged. Mothers accompanying these infants are responsible for bringing all necessary infant supplies, as we do not provide infant food."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cancellation policy?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Get a full refund if you select a refundable ticket during checkout and cancel until 23:59 the day before you visit. Rescheduling is not possible for this ticket."
      }
    },
    {
      "@type": "Question",
      "name": "What is Unique about Dubai Dhow Cruise Dinner?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Dubai Dhow Cruise offers a unique experience for many reasons. Guests can enjoy the spectacular, glittering views of Dubai\'s marina coastline, along with onboard entertainment, including the mesmerizing Tanura Dance. A sumptuous dinner enhances the overall ambiance, making the Dhow Cruise truly special."
      }
    },
    {
      "@type": "Question",
      "name": "What is the Marina Dhow route?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The cruise route starts at Marina Harbor and covers Marina Lagoon, Dubai Marina Mall, Bluewater Island, and Ain Dubai. It sails through the Marina Canal to reach the Arabian Sea and returns to the Marina Harbor after two hours."
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
                <p class="mb-0 fw-bold">2 Hours</p>
                <small class="text-muted">Duration</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Marina Skyline</p>
                <small class="text-muted">Route</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Gourmet Buffet</p>
                <small class="text-muted">Dining</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">From 145 AED</p>
                <small class="text-muted">Best Price</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Overview Section Start -->
<div class="container-fluid py-5">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Tour Overview</h2>
                    <p class="text-primary"><strong>Luxury Dhow Cruise in Dubai Marina!</strong></p>
                    <p>It's a five-star city and life on its waters are no exception. Experience the luxury of Dubai
                        from the water on this dinner cruise from the Dubai Marina. Feel like a star as you board the
                        Ocean Empress with a red carpet entrance and be wowed by the huge VIP-style vessel, which spans
                        four entire decks.</p>
                    <p>Enjoy your welcome drink to the sounds of live entertainment as the sights light up around you,
                        from the Bluewaters island to the Jumeirah Beach Residence complex, and the artificial Palm
                        Islands. See how the city lights reflect on the water and create a dazzling glow - it's like no
                        other city on Earth!</p>


                </div>

                <div class="mb-5">
                    <h2 class="mb-4 text-center">A Culinary Journey on the Water</h2>
                    <p class="text-muted text-center mb-4">Prepare for an unforgettable dining experience aboard the
                        Ocean Empress. Our extensive buffet features a world of flavors, from delicious canapés and
                        fresh salads to a wide array of international main courses.</p>

                    <div class="text-center mb-5">
                        <a href="img/dhowcruise/OceanExpress.pdf" download target="_blank"
                            class="btn btn-primary rounded-pill px-4 shadow">
                            <i class="fas fa-file-pdf me-2"></i>Download Food Menu (PDF)
                        </a>
                    </div>

                    <div class="row g-4">
                        <!-- Canapes -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Canapés</h5>
                                    <ul class="list-unstyled small">
                                        <li>Chicken Tikka Wrap</li>
                                        <li>Hummus Veggie Wrap (V)</li>
                                        <li>Fish Fingers</li>
                                        <li>Corn Dogs (Chicken)</li>
                                        <li>Veg Platter (Spring Roll, Samosa, Fries)</li>
                                        <li>Arancini - Rice & Cheese Balls (V)</li>
                                        <li>Harra Barra Kebab (V)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Salads -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Salads</h5>
                                    <ul class="list-unstyled small">
                                        <li>Caesar Salad</li>
                                        <li>Greek Salad (V)</li>
                                        <li>Italian Pasta Salad (V)</li>
                                        <li>Fattoush (V)</li>
                                        <li>Tabouleh (V)</li>
                                        <li>Corn & Capsicum Salad (V)</li>
                                        <li>Kachumber Salad (V)</li>
                                        <li>Chana Chaat (V)</li>
                                        <li>Green Salad Bar (V)</li>
                                        <li>Hummus (V)</li>
                                        <li>Raita (V)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Main Courses -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Main Courses</h5>
                                    <ul class="list-unstyled small">
                                        <li>Fried Fish with Tartare Sauce</li>
                                        <li>Grilled Fish with Lemon Butter Sauce</li>
                                        <li>Arab Mixed Grill</li>
                                        <li>Grilled Chicken with Mushroom Sauce</li>
                                        <li>Butter Chicken</li>
                                        <li>Chicken Biryani</li>
                                        <li>Daal Tadka (V)</li>
                                        <li>Matar Paneer (V)</li>
                                        <li>Baked Penne Ratatouille Veg (V)</li>
                                        <li>Sautéed Seasonal Veg (V)</li>
                                        <li>Roasted Potatoes (V)</li>
                                        <li>Gratin Potatoes - Parmesan Cheese (V)</li>
                                        <li>Veg Fried Rice (V)</li>
                                        <li>Asian Stir Fried Noodles (V)</li>
                                        <li>Rice White</li>
                                        <li>Bread Basket (Arabic, Western)</li>
                                        <li>Indian Naan, Roti, Paratha</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Desserts -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Desserts</h5>
                                    <ul class="list-unstyled small">
                                        <li>Fresh Seasonal Fruits</li>
                                        <li>Assorted Pastries</li>
                                        <li>Fruit Custard</li>
                                        <li>Ice Cream Station</li>
                                        <li>Bread Pudding</li>
                                        <li>Mahalabia</li>
                                        <li>Umm Ali</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Live Cooking Stations -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Live Cooking</h5>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="fw-bold small mb-0">Burger Station</h6>
                                            <p class="text-muted extra-small mb-2">Chicken, Beef & Veg</p>
                                            <h6 class="fw-bold small mb-0">Quesadillas</h6>
                                            <p class="text-muted extra-small mb-2">Veg, Chicken</p>
                                            <h6 class="fw-bold small mb-0">Shawarma</h6>
                                            <p class="text-muted extra-small mb-2">Chicken, Veg</p>
                                            <h6 class="fw-bold small mb-0">Noodles & Pasta Bar</h6>
                                            <p class="text-muted extra-small mb-2">Egg, Wheat, Rice, Penne</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Beverages -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Beverages</h5>
                                    <ul class="list-unstyled small">
                                        <li>Tea & Coffee</li>
                                        <li>Assorted Juices</li>
                                        <li>Bottled Water</li>
                                        <li>Unlimited Soft Drinks</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 bg-light p-3 rounded small italic text-center text-muted">
                        * Menu items are subject to change based on season and availability. Please inform our staff of
                        any dietary restrictions or allergies.
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-4 text-center">Pricing Options</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 shadow border-0 text-center">
                                <div class="card-body p-4">
                                    <h5 class="fw-bold mb-3">Lower Deck</h5>
                                    <h2 class="text-primary mb-1">AED 145</h2>
                                    <p class="text-muted small">Standard Package</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>International
                                            Buffet</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Welcome Drinks
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Live
                                            Entertainment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 shadow border-0 text-center border-top border-primary border-4">
                                <div class="card-body p-4">
                                    <h5 class="fw-bold mb-3">Upper Deck</h5>
                                    <h2 class="text-primary mb-1">AED 199</h2>
                                    <p class="text-muted small">Better Views</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Premium Views
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gourmet Buffet
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Sax & Live Singer
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 shadow border-0 text-center">
                                <div class="card-body p-4">
                                    <h5 class="fw-bold mb-3">VIP Package</h5>
                                    <h2 class="text-primary mb-1">AED 330</h2>
                                    <p class="text-muted small">Ultimate Luxury</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>VIP Sky Lounge
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Priority Boarding
                                        </li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Sparkling
                                            Juice/Drinks</li>
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
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> 2-hour luxury cruise
                            </li>
                            <li class="mb-2 small"><i class="fas fa-check text-success me-2"></i> Red carpet entrance
                            </li>
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
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Personal Photography
                            </li>
                            <li class="mb-2 small"><i class="fas fa-times text-danger me-2"></i> Alcoholic beverages
                                (unless package selected)</li>
                        </ul>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="mb-4 text-center">Experience Gallery</h2>
                    <div class="row g-3">
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/oceanexpress.jpeg.avif" alt="Ocean Empress View"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/AlexendraDhowUpperDeck.jpg" alt="Dining Deck"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/Alwasl-food.jpg" alt="Buffet Spread"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/mega_yacht_2.jpg" alt="Mega Yacht Night"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/Alwasl-Tanoura-Dance-at-Dhow-Cruise.jpg" alt="Live Entertainment"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/AlexndraDhowFrontview.jpg" alt="Dhow Exterior"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                    </div>
                </div>

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
                                    Do you offer jain meal during cruise journey?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No we don't offer jain meal but our menu includes a good range of vegetarian
                                    options.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Where is the Dhow Marina boarding location?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our Dhow is docked at Dubai Marina Harbor. Our representative will send you the Dhow
                                    location map and parking options at the time of final confirmation on your email and
                                    WhatsApp.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    What is the Infant policy?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our policy for infants is that children under 3 years of age will not be charged.
                                    Mothers accompanying these infants are responsible for bringing all necessary infant
                                    supplies, as we do not provide infant food.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    What is the cancellation policy?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Get a full refund if you select a refundable ticket during checkout and cancel until
                                    23:59 the day before you visit. Rescheduling is not possible for this ticket.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq6">
                                    What is Unique about Dubai Dhow Cruise Dinner?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The Dubai Dhow Cruise offers a unique experience for many reasons. Guests can enjoy
                                    the spectacular, glittering views of Dubai's marina coastline, along with onboard
                                    entertainment, including the mesmerizing Tanura Dance. A sumptuous dinner enhances
                                    the overall ambiance, making the Dhow Cruise truly special.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq7">
                                    What is the Marina Dhow route?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The cruise route starts at Marina Harbor and covers Marina Lagoon, Dubai Marina
                                    Mall, Bluewater Island, and Ain Dubai. It sails through the Marina Canal to reach
                                    the Arabian Sea and returns to the Marina Harbor after two hours.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <?php include 'includes/enquiry-sidebar.php'; ?>

                    <div class="bg-primary text-white p-4 rounded-3 shadow mt-4">
                        <h5 class="mb-3">Quick Booking</h5>
                        <p class="small">Reserve your spot on the Ocean Empress via WhatsApp for instant confirmation.
                        </p>
                        <a href="https://wa.me/<?php echo $whatsappNumber; ?>?text=I%20want%20to%20book%20Ocean%20Empress%20Dhow%20Cruise"
                            target="_blank" class="btn btn-warning w-100 rounded-pill fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>