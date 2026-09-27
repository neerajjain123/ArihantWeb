<?php
// =====================================================================
// LANDING PAGE: Dubai Tour Packages with Jain Food
// Targets GSC queries (position 11-22, 340+ combined impressions):
//   - "dubai tour packages with jain food"
//   - "package tour for dubai with jain food"
//   - "dubai tour with veg food"
// =====================================================================

// Page SEO Variables
$pageTitle = "Dubai Tour Packages with Jain Food | 100% Pure-Veg from AED 2,599";
$pageDescription = "Dubai tour packages with guaranteed Jain food — no onion, no garlic, no root vegetables. 3N/4D, 5N/6D & 7N/8D itineraries with kitchen-verified meals. From AED 2,599.";
$pageKeywords = "dubai tour packages with jain food, package tour for dubai with jain food, dubai tour with veg food, jain dubai package, pure veg dubai tour, jain friendly dubai package, dubai package with jain meals, jain holiday dubai";
$pageCanonical = "https://arihantlink.com/dubai-tour-packages-jain-food";
$currentPage = "packages";

// Breadcrumb Variables
$pageHeading = "Dubai Tour Packages with Jain Food";
$breadcrumbCategory = "Dubai Packages";
$breadcrumbCategoryLink = "dubai-holiday-packages";
$breadcrumbBg = "img/services/dubaipackage.jpg";
$breadcrumbOverlay = true;

// Schema: TouristTrip + FAQPage
$schemaMarkup = <<<HTML
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Dubai Tour Packages with Jain Food",
  "description": "{$pageDescription}",
  "touristType": ["Jain Families", "Vegetarian Travelers", "Indian Families"],
  "image": [
    "https://arihantlink.com/img/services/dubaipackage.jpg",
    "https://arihantlink.com/img/carousel-2.jpg",
    "https://arihantlink.com/img/services/safari.webp"
  ],
  "offers": [
    {
      "@type": "Offer",
      "name": "Budget Dubai 3N/4D Jain Package",
      "price": "2599",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "{$pageCanonical}",
      "seller": {"@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"}, "name": "Arihant Travels Pvt Ltd"}
    },
    {
      "@type": "Offer",
      "name": "Family Dubai 5N/6D Jain Package",
      "price": "3999",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "{$pageCanonical}",
      "seller": {"@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"}, "name": "Arihant Travels Pvt Ltd"}
    },
    {
      "@type": "Offer",
      "name": "Luxury Dubai 7N/8D Jain Package",
      "price": "5999",
      "priceCurrency": "AED",
      "availability": "https://schema.org/InStock",
      "url": "{$pageCanonical}",
      "seller": {"@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"}, "name": "Arihant Travels Pvt Ltd"}
    }
  ],
  "provider": {
    "@type": "TravelAgency", "address": {"@type": "PostalAddress", "streetAddress": "Al Rayyan Complex, Al Nahda", "addressLocality": "Sharjah", "addressRegion": "Sharjah", "addressCountry": "AE"},
    "name": "Arihant Travels Pvt Ltd",
    "url": "https://arihantlink.com"
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
      "name": "Is Jain food really guaranteed on every meal of the Dubai tour?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Every package includes 100% Jain meals — no onion, no garlic, no root vegetables — at every meal across hotel breakfasts, desert safari dinners, dhow cruise dinners, and city tour lunches. We confirm menus in writing with each vendor before your trip starts."
      }
    },
    {
      "@type": "Question",
      "name": "Can I see the Dubai tour package itinerary in advance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. A detailed day-by-day itinerary with named restaurants, hotel pickup times, and meal types is shared on WhatsApp before booking. You can request changes and we'll re-confirm with vendors."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between pure vegetarian and Jain food in your Dubai packages?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pure vegetarian excludes meat, eggs, and seafood. Jain food additionally excludes onion, garlic, potato, and other root vegetables. We offer both — please specify when you enquire so we can lock the right vendors."
      }
    },
    {
      "@type": "Question",
      "name": "Can families bring elderly parents with dietary restrictions on these Dubai tours?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — most of our families travel multi-generational. We can arrange diabetic-friendly Jain meals, soft food, no-spice variations, and seated transport. Mention all dietary needs at the enquiry stage."
      }
    },
    {
      "@type": "Question",
      "name": "Are temple visits included in the Dubai Jain packages?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we include a guided visit to the Jain temple in Bur Dubai. The BAPS Hindu Mandir in Abu Dhabi can be added to the 5N/6D and 7N/8D packages — let us know at booking."
      }
    },
    {
      "@type": "Question",
      "name": "Do prices include flights from India to Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Land-only prices are listed above (hotels, transfers, meals, activities). Flights from India can be added as an option — we'll quote based on your departure city and travel dates."
      }
    },
    {
      "@type": "Question",
      "name": "What's your cancellation and refund policy for Dubai Jain packages?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Free cancellation up to 30 days before travel. 50% refund between 30-15 days. No refund within 14 days of travel — but we'll work with you to reschedule if there's a medical or family emergency."
      }
    }
  ]
}
</script>
HTML;

include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #2596be;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-leaf fa-2x text-success mb-2"></i>
                <p class="mb-0 fw-bold small">100% Jain Food</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-hotel fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold small">3-5★ Hotels</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold small">Private Transfers</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-pray fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold small">Temple Visit</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-headset fa-2x text-success mb-2"></i>
                <p class="mb-0 fw-bold small">24/7 WhatsApp</p>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <i class="fas fa-rupee-sign fa-2x text-warning mb-2"></i>
                <p class="mb-0 fw-bold small">INR Pricing Avail.</p>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->
<div class="container-fluid py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                    Dubai Tour Packages with Jain Food — Three Tiers, Same Guarantee
                </h2>
                <p class="fs-5 mb-4">
                    Three Dubai tour packages — Budget (3N/4D), Family (5N/6D), and Luxury (7N/8D) — every meal confirmed
                    Jain or pure-vegetarian with no onion, no garlic, no root vegetables. Founded in 2022 by Shweta Jain,
                    Arihant Travels is the only UAE-licensed travel agency specialising exclusively in Jain &amp; vegetarian
                    travel. 2,000+ families have travelled with us across Mumbai, Ahmedabad, Surat, Delhi, Bangalore,
                    Pune, Jaipur, and Indian communities in Kenya, the UK, and the USA.
                </p>
                <p class="fs-5">
                    Every package below includes airport transfers, hotel stays, Dubai city tour, a Jain-certified desert
                    safari, dhow cruise dinner, and selected attraction tickets — with Jain food locked at every meal.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- 3-PACKAGE COMPARISON TABLE -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Compare Packages</h5>
            <h2 style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">Three Dubai Jain Packages — Choose Your Pace</h2>
            <p class="fs-5">Land-only prices (excludes flights). All prices per person on twin-share. <!-- TODO: confirm exact AED prices with operations -->.</p>
        </div>

        <div class="row g-4">
            <!-- BUDGET 3N/4D -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header text-center bg-primary text-white py-3">
                        <h4 class="mb-0">Budget Dubai</h4>
                        <small>3 Nights / 4 Days</small>
                    </div>
                    <div class="card-body p-4">
                        <p class="display-6 text-primary fw-bold text-center mb-1">AED 2,599</p>
                        <p class="text-muted text-center small mb-4">per person, twin-share</p>

                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 3-star hotel, Deira/Bur Dubai</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Daily Jain breakfast at hotel</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Half-day Dubai city tour</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Desert safari with Jain dinner</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Bur Dubai Jain temple visit</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> All airport transfers</li>
                            <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> Dhow cruise (add-on)</li>
                            <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> Burj Khalifa ticket (add-on)</li>
                        </ul>

                        <div class="text-center mt-4">
                            <a href="https://wa.me/971585945007?text=I want the Budget Dubai 3N/4D Jain package" target="_blank"
                                class="btn btn-primary rounded-pill px-4 w-100 mb-2">
                                <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                            </a>
                            <a href="#enquire" class="btn btn-outline-primary rounded-pill px-4 w-100">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAMILY 5N/6D (MOST POPULAR) -->
            <div class="col-lg-4">
                <div class="card h-100 shadow border-primary border-2 position-relative">
                    <span class="position-absolute top-0 start-50 translate-middle badge bg-warning text-dark px-3 py-2" style="z-index: 2;">
                        <i class="fas fa-star me-1"></i>Most Popular
                    </span>
                    <div class="card-header text-center bg-primary text-white py-3">
                        <h4 class="mb-0">Family Dubai</h4>
                        <small>5 Nights / 6 Days</small>
                    </div>
                    <div class="card-body p-4">
                        <p class="display-6 text-primary fw-bold text-center mb-1">AED 3,999</p>
                        <p class="text-muted text-center small mb-4">per person, twin-share</p>

                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 4-star hotel, central Dubai</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Daily Jain breakfast at hotel</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Full-day Dubai city tour with lunch</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> VIP desert safari with Jain dinner</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dhow cruise with Jain dinner</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Abu Dhabi tour + BAPS mandir</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Burj Khalifa 124th-floor ticket</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Bur Dubai Jain temple visit</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Private transfers throughout</li>
                        </ul>

                        <div class="text-center mt-4">
                            <a href="https://wa.me/971585945007?text=I want the Family Dubai 5N/6D Jain package" target="_blank"
                                class="btn btn-primary rounded-pill px-4 w-100 mb-2">
                                <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                            </a>
                            <a href="#enquire" class="btn btn-outline-primary rounded-pill px-4 w-100">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LUXURY 7N/8D -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header text-center" style="background: linear-gradient(135deg, #13357B 0%, #2596be 100%); color: white;">
                        <h4 class="mb-0">Luxury Dubai</h4>
                        <small>7 Nights / 8 Days</small>
                    </div>
                    <div class="card-body p-4">
                        <p class="display-6 text-primary fw-bold text-center mb-1">AED 5,999</p>
                        <p class="text-muted text-center small mb-4">per person, twin-share</p>

                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 5-star hotel, Downtown / Marina</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Jain breakfast &amp; dinner buffet at hotel</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Premium desert safari, private setup</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Lotus Mega Yacht dinner cruise</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Abu Dhabi: Louvre + Ferrari World + BAPS</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Burj Khalifa + The View at the Palm</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Hot air balloon ride (sunrise)</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Hatta / Musandam day trip</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Private Mercedes V-Class throughout</li>
                        </ul>

                        <div class="text-center mt-4">
                            <a href="https://wa.me/971585945007?text=I want the Luxury Dubai 7N/8D Jain package" target="_blank"
                                class="btn btn-primary rounded-pill px-4 w-100 mb-2">
                                <i class="fab fa-whatsapp me-2"></i>Book on WhatsApp
                            </a>
                            <a href="#enquire" class="btn btn-outline-primary rounded-pill px-4 w-100">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-center mt-4 text-muted small">
            INR pricing available on request. Children under 5 free, 5-11 at 65% rate. Group rates for 6+ travellers.
        </p>
    </div>
</div>

<!-- SAMPLE 5N/6D ITINERARY -->
<div class="container-fluid py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Sample Itinerary</h5>
            <h2 style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">Family 5N/6D — Day by Day with Jain Meals Locked</h2>
            <p class="fs-5">A real itinerary showing exactly where every meal comes from. This is the most-booked package.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="itineraryAccordion">

                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#day1">
                            <strong>Day 1 — Arrival in Dubai, Check-in, Bur Dubai Jain Temple Visit</strong>
                        </button></h3>
                        <div id="day1" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
                            <div class="accordion-body">
                                <p><strong>Arrival:</strong> Meet &amp; greet at Dubai International Airport (DXB). Private transfer to hotel.</p>
                                <p><strong>Hotel check-in:</strong> 4-star property in central Dubai with Jain breakfast pre-arranged with the hotel kitchen.</p>
                                <p><strong>Evening:</strong> Darshan at the Bur Dubai Jain derasar (timings allowing). Light Jain dinner at a partner restaurant near the temple.</p>
                                <p class="mb-0"><em class="text-primary"><i class="fas fa-utensils me-1"></i> Meals confirmed Jain: Dinner</em></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day2">
                            <strong>Day 2 — Full-Day Dubai City Tour with Jain Lunch</strong>
                        </button></h3>
                        <div id="day2" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                            <div class="accordion-body">
                                <p><strong>09:00:</strong> Jain breakfast at hotel (poha, idli, dhokla, fresh fruit, parathas).</p>
                                <p><strong>10:00:</strong> Dubai city tour — Burj Khalifa exterior, Dubai Mall, Dubai Frame, Museum of the Future exterior, Gold Souk, Spice Souk, Abra ride across the Creek.</p>
                                <p><strong>13:00:</strong> Jain lunch at a partner restaurant in Bur Dubai. <!-- TODO: Insert real partner restaurant name --></p>
                                <p><strong>15:00:</strong> Continue with Jumeirah Mosque (exterior), Palm Jumeirah drive, Atlantis photo stop.</p>
                                <p><strong>17:00:</strong> Burj Khalifa 124th-floor sunset visit.</p>
                                <p><strong>20:00:</strong> Return to hotel. Light Jain dinner at hotel restaurant.</p>
                                <p class="mb-0"><em class="text-primary"><i class="fas fa-utensils me-1"></i> Meals confirmed Jain: Breakfast, Lunch, Dinner</em></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day3">
                            <strong>Day 3 — Abu Dhabi Tour with BAPS Mandir Visit</strong>
                        </button></h3>
                        <div id="day3" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                            <div class="accordion-body">
                                <p><strong>08:00:</strong> Jain breakfast at hotel.</p>
                                <p><strong>09:00:</strong> Drive to Abu Dhabi (~1.5 hours).</p>
                                <p><strong>11:00:</strong> Sheikh Zayed Grand Mosque visit (dress code applies).</p>
                                <p><strong>13:30:</strong> BAPS Hindu Mandir, Abu Mureikhah — guided darshan and pure-veg lunch at the mandir prasad hall.</p>
                                <p><strong>15:30:</strong> Optional: Louvre Abu Dhabi OR Ferrari World OR Yas Mall (we adjust based on family preference).</p>
                                <p><strong>19:00:</strong> Drive back to Dubai. Jain dinner at hotel.</p>
                                <p class="mb-0"><em class="text-primary"><i class="fas fa-utensils me-1"></i> Meals confirmed Jain: Breakfast, Lunch (prasad), Dinner</em></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day4">
                            <strong>Day 4 — VIP Desert Safari with Jain-Certified Dinner</strong>
                        </button></h3>
                        <div id="day4" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                            <div class="accordion-body">
                                <p><strong>08:00:</strong> Jain breakfast at hotel. Morning at leisure (pool / Dubai Mall / shopping).</p>
                                <p><strong>13:00:</strong> Light Jain lunch at hotel.</p>
                                <p><strong>15:00:</strong> Pickup for VIP Desert Safari. Dune bashing (40 min), camel riding, henna painting, sandboarding.</p>
                                <p><strong>19:00:</strong> VIP camp with a <strong>dedicated Jain dinner counter</strong> — Jain thali with rotis, kadhai paneer (no onion-garlic), dal makhani Jain-style, jeera rice, fresh salads. Live entertainment (tanura, belly dance optional, fire show).</p>
                                <p><strong>22:30:</strong> Return to hotel.</p>
                                <p class="mb-0"><em class="text-primary"><i class="fas fa-utensils me-1"></i> Meals confirmed Jain: Breakfast, Lunch, Safari dinner buffet</em></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day5">
                            <strong>Day 5 — Marina Dhow Cruise &amp; Souk Shopping</strong>
                        </button></h3>
                        <div id="day5" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                            <div class="accordion-body">
                                <p><strong>08:00:</strong> Jain breakfast at hotel.</p>
                                <p><strong>10:00:</strong> Free morning OR optional add-ons (Miracle Garden, Aquarium, IMG Worlds).</p>
                                <p><strong>14:00:</strong> Jain lunch at hotel or partner restaurant.</p>
                                <p><strong>17:30:</strong> Pickup for Marina Dhow Cruise — 2-hour sunset cruise around Dubai Marina with a <strong>pre-booked Jain dinner</strong> (no onion-garlic vegetable preparations, fresh fruits, dessert).</p>
                                <p><strong>21:30:</strong> Drop back to hotel. Shopping at souks if requested.</p>
                                <p class="mb-0"><em class="text-primary"><i class="fas fa-utensils me-1"></i> Meals confirmed Jain: Breakfast, Lunch, Cruise dinner</em></p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day6">
                            <strong>Day 6 — Departure</strong>
                        </button></h3>
                        <div id="day6" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
                            <div class="accordion-body">
                                <p><strong>Morning:</strong> Jain breakfast at hotel. Hotel check-out by 12:00.</p>
                                <p><strong>Optional:</strong> Last-minute souk shopping or photo stops.</p>
                                <p><strong>3-4 hours before flight:</strong> Private transfer to Dubai International Airport for departure.</p>
                                <p class="mb-0"><em class="text-primary"><i class="fas fa-utensils me-1"></i> Meals confirmed Jain: Breakfast</em></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="alert alert-info mt-4">
                    <strong><i class="fas fa-info-circle me-2"></i>How we lock the menus:</strong>
                    For every meal listed above, we send a written Jain menu request to the vendor 7 days before your arrival and
                    require a written confirmation back. You'll receive copies of all confirmations 48 hours before travel.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WHY JAIN FAMILIES CHOOSE US -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Why Jain Families Choose Arihant</h5>
            <h2 style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">UAE's only Jain-focused, female-led travel agency</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 p-4">
                    <i class="fas fa-leaf fa-2x text-success mb-3"></i>
                    <h5>100% Jain Certified</h5>
                    <p class="mb-0">No onion, no garlic, no root vegetables — written menu confirmation from every vendor before your trip.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 p-4">
                    <i class="fas fa-female fa-2x text-primary mb-3"></i>
                    <h5>Founded by Shweta Jain</h5>
                    <p class="mb-0">Female-led agency, founded 2022. Shweta Ji personally signs off on every Jain itinerary.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 p-4">
                    <i class="fas fa-users fa-2x text-secondary mb-3"></i>
                    <h5>2,000+ Families Served</h5>
                    <p class="mb-0">Mumbai, Ahmedabad, Surat, Delhi, Bangalore, Pune, Jaipur — plus NRI families from UK, USA, Kenya.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 p-4">
                    <i class="fas fa-shield-alt fa-2x text-warning mb-3"></i>
                    <h5>UAE-Licensed Operator</h5>
                    <p class="mb-0">Fully registered and licensed by UAE Department of Tourism. Insurance and trade licence available on request.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 p-4">
                    <i class="fab fa-whatsapp fa-2x text-success mb-3"></i>
                    <h5>24/7 WhatsApp Support</h5>
                    <p class="mb-0">A real person responds in under 15 minutes during your trip. No call centres, no scripts.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 p-4">
                    <i class="fas fa-star fa-2x text-warning mb-3"></i>
                    <h5>4.9★ Google Reviews</h5>
                    <p class="mb-0">Read what real families say. <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank">View Google reviews →</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ SECTION -->
<div class="container-fluid py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">FAQ</h5>
            <p class="mb-4"><strong>Planning on your own too?</strong> See our free guides:
                <a href="/jain-food-dubai">Jain food in Dubai</a> &middot;
                <a href="/jain-temple-dubai">Jain temple (derasar) in Dubai</a> &middot;
                <a href="/jain-desert-safari-dubai">Jain desert safari (dinner before sunset)</a> &middot;
                <a href="/blog/jain-family-dubai-trip-guide">Jain family trip guide</a></p>
            <h2 style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Is Jain food really guaranteed on every meal?</button></h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes. Every package includes 100% Jain meals — no onion, no garlic, no root vegetables — at every meal across hotel breakfasts, desert safari dinners, dhow cruise dinners, and city tour lunches. We confirm menus in writing with each vendor before your trip starts.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Can I see the itinerary in advance?</button></h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes. A detailed day-by-day itinerary with named restaurants, hotel pickup times, and meal types is shared on WhatsApp before booking.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">What's the difference between pure vegetarian and Jain food?</button></h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Pure vegetarian excludes meat, eggs, and seafood. Jain additionally excludes onion, garlic, potato, and root vegetables. Specify which one at enquiry so we lock the right vendors.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Can elderly parents with dietary restrictions travel?</button></h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes — most families travel multi-generational. We arrange diabetic-friendly Jain meals, soft food, no-spice variations, and seated transport. Mention all needs at enquiry.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">Are temple visits included?</button></h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes, we include a guided visit to the Bur Dubai Jain temple. The BAPS Hindu Mandir in Abu Dhabi can be added to the 5N/6D and 7N/8D packages.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">Do prices include flights from India?</button></h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Land-only prices are listed (hotels, transfers, meals, activities). Flights from India can be added — we'll quote based on your departure city and dates.</div></div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">What's the cancellation and refund policy?</button></h3>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion"><div class="accordion-body">Free cancellation up to 30 days before travel. 50% refund between 30-15 days. No refund within 14 days — but we'll work with you to reschedule for medical/family emergencies.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ENQUIRY FORM -->
<div class="container-fluid py-5 bg-primary text-white" id="enquire">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="mb-3" style="font-family: 'Jost', sans-serif;">Get a Quote for Your Family</h2>
                <p class="fs-5 mb-4">Tell us travel dates, group size, and your preferred package — we'll send a Jain-locked itinerary within 4 hours.</p>
                <a href="https://wa.me/971585945007?text=I want a Dubai Jain food package quote" target="_blank"
                    class="btn btn-success btn-lg rounded-pill px-5 me-2 mb-2">
                    <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                </a>
                <a href="contact" class="btn btn-light btn-lg rounded-pill px-5 mb-2">
                    <i class="fas fa-envelope me-2"></i>Email Enquiry
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
