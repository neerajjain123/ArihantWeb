<?php
// Page SEO Variables
$pageTitle = "Alexandra Dhow Cruise Dubai Marina 2024 | Luxury Dinner Cruise Deals | Arihant Travel";
$pageDescription = "Experience an enchanting evening on the luxurious Alexandra Dhow Cruise in Dubai Marina. Enjoy 2 hours of stunning skyline views…";
$pageKeywords = "Alexandra Dhow Cruise, Dubai Marina dinner cruise, luxury dhow cruise Dubai, romantic dinner cruise, Alexandra cruise booking, best dhow cruise in Dubai, Dubai Marina night cruise, private dhow cruise, family dinner cruise, Alexandra cruise offers, Dubai Marina sightseeing cruise, Alexandra dhow cruise price, best dinner cruise Dubai, Alexandra cruise timings, Dubai Marina yacht cruise";
$pageCanonical = "https://arihantlink.com/alexandra-dhow-cruise";
$currentPage = "alexandra-dhow-cruise";

// Breadcrumb Variables
$pageHeading = "Alexandra Dhow Cruise Dubai Marina";
$breadcrumbCategory = "Dhow Cruise";
$breadcrumbCategoryLink = "dhow-cruise";
$breadcrumbBg = "img/dhowcruise/AlexndraDhowFrontview.jpg";
$breadcrumbOverlay = false;

// WhatsApp Number
$whatsappNumber = "971585945007";

// Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["BoatTrip", "TouristAttraction", "FoodEstablishment"],
  "@id": "' . $pageCanonical . '",
  "name": "Alexandra Dhow Cruise Dubai Marina",
  "description": "' . $pageDescription . '",
  "image": [
    "https://arihantlink.com/img/dhowcruise/AlexndraDhowFrontview.jpg",
    "https://arihantlink.com/img/dhowcruise/ALEXANDRA-DHow-Front-1.jpg",
    "https://arihantlink.com/img/dhowcruise/AlexendraDhowUpperDeck.jpg"
  ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Dubai Marina Walk",
    "addressLocality": "Dubai",
    "addressRegion": "Dubai",
    "postalCode": "00000",
    "addressCountry": "AE"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "25.0764",
    "longitude": "55.1328"
  },
  "offers": [
    {
      "@type": "Offer",
      "name": "Adult Ticket",
      "price": "180",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "' . $pageCanonical . '"
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "1253"
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
      "name": "What are your timings?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Dinner Cruise: Boarding 20:15 - 20:55, Cruising 21:00 - 23:00. Sunset Cruise: Boarding 16:45 - 17:15, Cruising 17:30 - 19:30."
      }
    },
    {
      "@type": "Question",
      "name": "Do you serve alcohol on board?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we serve alcohol on board. Guests can purchase a variety of alcoholic beverages from our bar menu. Please note that alcoholic beverages are only served to guests aged 21 and above."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer Jain meal options?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer Jain meal options upon prior request. Please inform us at least 24 hours in advance of your cruise."
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
                <p class="mb-0 fw-bold">International Buffet</p>
                <small class="text-muted">Dining</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tag fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">From 180 AED</p>
                <small class="text-muted">Best Price</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Main Content Start -->
<div class="container-fluid py-5">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Tour Overview -->
                <div class="mb-5">
                    <h2 class="mb-4">Tour Overview</h2>
                    <p class="text-primary"><strong>Sailing Through Dubai\'s Iconic Skyline in Luxury!</strong></p>
                    <p>Embark on an extraordinary journey aboard the Alexandra Dhow Cruise, where luxury meets tradition
                        in
                        the heart of Dubai Marina. This elegant vessel combines authentic Arabic design with modern
                        comforts, offering a unique perspective of Dubai\'s glittering skyline.</p>
                    <p>The Alexandra Dhow Cruise is more than just a dinner cruise—it\'s a celebration of Dubai\'s
                        maritime heritage and contemporary glamour. Sail past iconic landmarks including the world\'s
                        tallest Ferris wheel, Ain Dubai, and the stunning Jumeirah Beach Residence (JBR), all while
                        enjoying world-class dining and live entertainment.</p>
                </div>

                <!-- Culinary Journey (Menu) -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Gourmet Dining Experience</h2>
                    <p class="text-muted text-center mb-4">Indulge in a delightful culinary journey featuring a
                        carefully curated selection of international and Arabic cuisine. Our buffet offers a variety of
                        flavors to satisfy every palate.</p>

                    <div class="text-center mb-5 d-flex gap-3 justify-content-center">
                        <a href="img/dhowcruise/Alexndra-Dhow-food-Menu.pdf" download target="_blank"
                            class="btn btn-primary rounded-pill px-4 shadow">
                            <i class="fas fa-file-pdf me-2"></i>Download Food Menu
                        </a>
                        <a href="img/dhowcruise/Alexndra-Alcohal-Menu.pdf" download target="_blank"
                            class="btn btn-outline-primary rounded-pill px-4 shadow">
                            <i class="fas fa-glass-martini-alt me-2"></i>Download Bar Menu
                        </a>
                    </div>

                    <div class="row g-4">
                        <!-- Welcome Drinks -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Welcome Refreshments</h5>
                                    <ul class="list-unstyled small">
                                        <li>Dates & Arabic Coffee</li>
                                        <li>Assorted Canned Juices</li>
                                        <li>Soda Drinks</li>
                                        <li>Mineral Water</li>
                                        <li>Tea & Coffee</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Starters & Salads -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Starters & Salads</h5>
                                    <ul class="list-unstyled small">
                                        <li>Vegetable Spring Rolls</li>
                                        <li>Tomato Soup</li>
                                        <li>Greek Salad</li>
                                        <li>Hummus</li>
                                        <li>Coleslaw</li>
                                        <li>Achi Chuk Salad</li>
                                        <li>Corn and Capsicum Salad</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Main Courses -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">Main Course</h5>
                                    <ul class="list-unstyled small">
                                        <li>Grilled Chicken</li>
                                        <li>Beef Kofta (Live Grill)</li>
                                        <li>Grilled Fish (Lemon Butter)</li>
                                        <li>Vegetable Curry</li>
                                        <li>Yellow Dal Tadka</li>
                                        <li>Vegetable Fried Rice</li>
                                        <li>Penne Marinara / Alfredo</li>
                                        <li>Lyonnaise Potatoes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Section -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Pricing Options</h2>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6">
                            <div class="card h-100 shadow border-0 text-center border-top border-primary border-4">
                                <div class="card-body p-4">
                                    <h5 class="fw-bold mb-3">Alexandra Dhow Cruise</h5>
                                    <p class="text-muted small">Standard Dinner Package</p>
                                    <h2 class="text-primary mb-1">AED 180</h2>
                                    <p class="text-muted small">Per Adult</p>
                                    <hr>
                                    <h4 class="text-primary mb-1">AED 120</h4>
                                    <p class="text-muted small">Child (5-10 Years)</p>
                                    <p class="text-success small">Infants below 5: Free</p>
                                    <hr>
                                    <ul class="list-unstyled text-start small mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2-Hour Marina
                                            Lagoon Cruise</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gourmet Buffet
                                            Dinner</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Live Tanura Dance
                                            & DJ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inclusions / Exclusions -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">Inclusions</h4>
                        <ul class="list-unstyled small">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 2-Hour Cruise through Marina
                                Lagoon</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> International Buffet Dinner
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Welcome Drinks & Dates</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Live Tanura Dance Show</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Onboard DJ Entertainment
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Exclusions</h4>
                        <ul class="list-unstyled small">
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Hotel Pickup (available on
                                request)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Alcoholic Beverages
                                (available
                                for purchase)</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Professional Photography</li>
                            <li class="mb-2"><i class="fas fa-times text-danger me-2"></i> Private Table Upgrades</li>
                        </ul>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="mb-5">
                    <h2 class="mb-4 text-center">Experience Gallery</h2>
                    <div class="row g-3">
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/AlexndraDhowFrontview.jpg" alt="Alexandra Dhow View"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/ALEXANDRA-DHow-Front-1.jpg" alt="Outdoor Seating"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/AlexendraDhowUpperDeck.jpg" alt="Dining Upper Deck"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/AlexndraDessert.jpg" alt="Dessert Station"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/AlexndraDhowDessert-1.jpg" alt="Delicious Sweets"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
                        <div class="col-6 col-md-6">
                            <img src="img/dhowcruise/AlexndraDhowTable.jpg" alt="Table Setting"
                                class="img-fluid rounded-3 shadow-sm w-100" style="height: 350px; object-fit: cover;">
                        </div>
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
                                    What are your timings?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <strong>Dinner Cruise:</strong> Boarding 20:15 - 20:55, Cruising 21:00 - 23:00.<br>
                                    <strong>Sunset Cruise:</strong> Boarding 16:45 - 17:15, Cruising 17:30 - 19:30.
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
                                    Yes, we serve alcohol on board. Guests can purchase a variety of alcoholic
                                    beverages from our bar menu. Please note that alcoholic beverages are only served to
                                    guests aged 21 and above.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow-sm rounded mb-3 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you offer Jain meal options?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we offer Jain meal options upon prior request. Please inform us at least 24
                                    hours in advance of your cruise, and we will be happy to accommodate your dietary
                                    requirements.
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
                                    Children under 5 years of age are considered infants and are not charged. Parents
                                    are responsible for providing any infant-specific food or supplies.
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
                        <h5 class="mb-3">WhatsApp Booking</h5>
                        <p class="small">Get instant confirmation and the best rates for Alexandra Dhow Cruise.</p>
                        <a href="https://wa.me/<?php echo $whatsappNumber; ?>?text=I%20want%20to%20book%20Alexandra%20Dhow%20Cruise"
                            target="_blank" class="btn btn-warning w-100 rounded-pill fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                        </a>
                    </div>

                    <!-- Location Card -->
                    <div class="bg-light p-4 rounded-3 shadow mt-4 border">
                        <h5 class="mb-3">Boarding Location</h5>
                        <div class="rounded overflow-hidden mb-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.947!2d55.130!3d25.070!2m1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f135146db4079%3A0xab90557c22c78ca!2sAlexandra%20Dhow%20Cruise%20Dubai%20Marina!5e0!3m2!1sen!2sae!4v1749484850693"
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <p class="small text-muted mb-0"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Dubai
                            Marina Yacht Club, West Bay, Dubai Marina</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>