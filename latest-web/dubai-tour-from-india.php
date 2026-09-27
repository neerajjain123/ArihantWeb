<?php
require_once __DIR__ . '/includes/visa-prices.php';
// Page SEO Variables — India-specific landing page
$pageTitle = "Dubai Tour Package from India 2026 | From ₹50,600 | Jain & Pure Vegetarian Family Tours | Arihant Travels";
$pageDescription = "Book Dubai tour packages from India with 100% pure Jain & vegetarian food. ₹50,600 per person. Desert safari, BAPS Mandir Abu Dhabi, Burj Khalifa…";
$pageKeywords = "Dubai tour package from India, Dubai trip from India, Dubai Jain package, Dubai Gujarati package, Dubai package from Mumbai, Dubai tour from Ahmedabad, Dubai tour from Surat, Dubai package from Vadodara, Dubai tour from Rajkot, Dubai family tour India, Jain food Dubai tour, pure vegetarian Dubai package, Indian family Dubai holiday, Dubai package in INR, Dubai group tour from India, senior citizen Dubai package, BAPS temple Abu Dhabi tour, Swaminarayan mandir Abu Dhabi, customized Dubai holiday, Dubai honeymoon from India, budget Dubai trip from India, Dubai Jain group tour, pure veg Dubai trip";
$pageCanonical = "https://arihantlink.com/dubai-tour-from-india";
$currentPage = "dubai-tour-from-india";

// Breadcrumb Variables
$pageHeading = "Dubai Tour Packages from India";
$breadcrumbCategory = "Holiday Packages";
$breadcrumbCategoryLink = "dubai-holiday-packages";
$breadcrumbBg = "img/dubaiholiday/burj-khalifa-dubai-skyline-hero.jpg";
$breadcrumbOverlay = false;

// Schema Markup — TouristTrip targeting India
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Dubai Tour Package from India",
  "description": "Complete Dubai holiday packages designed for Indian families with guaranteed Jain and pure vegetarian meals. Includes desert safari, city tour, Burj Khalifa, yacht cruise, theme parks and hotel accommodation.",
  "url": "https://arihantlink.com/dubai-tour-from-india",
  "image": "https://arihantlink.com/img/dubaiholiday/burj-khalifa-dubai-skyline-hero.jpg",
  "touristType": ["Indian families", "Jain families", "Gujarati families", "Vegetarian travelers", "NRI families", "Honeymooners from India", "Senior citizens from India", "Group tours from India", "Swaminarayan devotees"],
  "itinerary": {
    "@type": "ItemList",
    "name": "Typical Dubai Tour Itinerary from India",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Day 1: Arrival in Dubai, hotel check-in, Marina walk"},
      {"@type": "ListItem", "position": 2, "name": "Day 2: Full day Dubai city tour (Old Dubai, Gold Souk, Dubai Frame, Palm Jumeirah)"},
      {"@type": "ListItem", "position": 3, "name": "Day 3: Desert safari with Jain vegetarian dinner"},
      {"@type": "ListItem", "position": 4, "name": "Day 4: Burj Khalifa, Dubai Mall, Dhow cruise dinner"},
      {"@type": "ListItem", "position": 5, "name": "Day 5: Abu Dhabi city tour with BAPS Swaminarayan Mandir, Sheikh Zayed Mosque, Ferrari World"},
      {"@type": "ListItem", "position": 6, "name": "Day 6: Departure"}
    ]
  },
  "offers": {
    "@type": "AggregateOffer",
    "lowPrice": "2199",
    "highPrice": "5999",
    "priceCurrency": "AED",
    "offerCount": "7",
    "url": "https://arihantlink.com/dubai-tour-from-india"
  },
  "provider": {
    "@type": "TravelAgency",
    "name": "Arihant Travels Pvt Ltd",
    "url": "https://arihantlink.com",
    "telephone": "+971585945007",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Dubai",
      "addressCountry": "AE"
    }
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
      "name": "How much does a Dubai trip cost from India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Dubai trip from India typically costs between ₹50,000 to ₹1,50,000 per person depending on the package. Budget packages start from AED 2,199 (approx ₹50,600) per person including hotel, tours, and meals. This covers 4-6 nights accommodation, desert safari, city tour, and Burj Khalifa visit. Flights from India to Dubai range from ₹8,000 to ₹25,000 round trip. Arihant Travels offers customized packages with guaranteed Jain and vegetarian meals."
      }
    },
    {
      "@type": "Question",
      "name": "Is Jain food available in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! Dubai has several Jain restaurants, especially in Bur Dubai and Karama areas. Arihant Travels guarantees 100% pure vegetarian and Jain food (no onion, no garlic, no root vegetables) on all tours including desert safaris, dhow cruises, and city tours. We are the only UAE-based travel agency specializing in Jain-friendly travel."
      }
    },
    {
      "@type": "Question",
      "name": "Do Indian citizens need a visa for Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Indian passport holders need a tourist visa to visit Dubai. A 30-day UAE tourist visa costs from AED ' . number_format(visa_price('tourist-30-single')) . ' and a 60-day visa from AED ' . number_format(visa_price('tourist-60-single')) . '. Arihant Travels provides complete visa assistance for Indian travelers with fast processing in 3-5 working days."
      }
    },
    {
      "@type": "Question",
      "name": "What is the best time for Indians to visit Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best time for Indians to visit Dubai is November to March when temperatures are pleasant (20-30°C). December-January is peak season with festivals like Dubai Shopping Festival. For budget travelers, October and April offer good weather at lower prices. Avoid June-August when temperatures exceed 45°C."
      }
    },
    {
      "@type": "Question",
      "name": "Can we visit the Jain temple in Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Dubai has a Jain derasar in Bur Dubai. Arihant Travels can include a derasar visit as part of your city tour itinerary so you can perform Darshan comfortably during your Dubai trip."
      }
    },
    {
      "@type": "Question",
      "name": "Can we visit BAPS Swaminarayan Mandir in Abu Dhabi during our Dubai trip?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! The BAPS Swaminarayan Mandir in Abu Dhabi is a must-visit for Indian families. Arihant Travels arranges a full-day Abu Dhabi city tour that includes the BAPS Mandir visit, Sheikh Zayed Grand Mosque, Ferrari World, and Heritage Village. We handle the pre-registration required for the temple visit and arrange pure vegetarian Jain lunch at an Indian restaurant in Abu Dhabi. The Abu Dhabi day tour costs from AED 150 (approx ₹3,500) per person."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer group tours and senior citizen packages for Dubai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Arihant Travels offers customized Dubai group tour packages for 10-50 people at special group rates, including families, community groups, and corporate MICE trips. We also have dedicated senior citizen packages with a relaxed pace, comfortable AC vehicles, wheelchair-friendly options, and easy sightseeing. Gujarati-speaking coordinators are available for group tours. Pure Jain and vegetarian food is guaranteed on all group and senior citizen tours."
      }
    },
    {
      "@type": "Question",
      "name": "Why book with Arihant Travels instead of Indian tour operators?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Arihant Travels is the only Jain-focused travel agency physically based in Dubai, UAE. Unlike Indian tour operators who sell Dubai packages remotely, we are on-ground in Dubai. This means immediate support, no middleman, direct hotel relationships, better prices, and 24/7 WhatsApp assistance during your trip. We have served 2,000+ Indian families with a 4.8-star Google rating."
      }
    }
  ]
}
</script>';

include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- India-Specific Hero Section -->
<div class="container-fluid py-4 bg-light border-bottom">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="h3 mb-3">Dubai Tour Packages from India — 100% Pure Jain & Vegetarian Food Guaranteed</h2>
                <p class="text-muted mb-3">Planning a Dubai trip from India? You're in the right place. Arihant Travels is the <strong>only Jain-focused travel agency based in Dubai, UAE</strong> — not India. We offer customized <strong>Jain packages, Gujarati vegetarian tours, senior citizen packages, group tours, and Swaminarayan temple itineraries</strong> — all with guaranteed pure vegetarian meals and 24/7 local support. Popular with families from <strong>Ahmedabad, Mumbai, Surat, Vadodara, Rajkot, Delhi, Pune, Jaipur, Indore &amp; Udaipur</strong>. Packages start from <strong>AED 2,199 (approx ₹50,600)</strong> per person.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="https://wa.me/971585945007?text=Hi, I want to plan a Dubai trip from India for my family" target="_blank" class="btn btn-primary rounded-pill py-2 px-4">
                        <i class="fab fa-whatsapp me-2"></i>Plan My Trip on WhatsApp
                    </a>
                    <a href="/dubai-holiday-packages" class="btn btn-outline-primary rounded-pill py-2 px-4">
                        <i class="fas fa-box-open me-2"></i>View All Packages
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Book with a Dubai-Based Agency -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Why Arihant Travels?</h5>
            <h2 class="mb-4">Why Indian Families Choose a Dubai-Based Travel Agency</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="bg-white rounded p-4 h-100 text-center shadow-sm">
                    <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                    <h4 class="mb-3">We're IN Dubai</h4>
                    <p class="text-muted mb-0">Unlike Indian tour operators selling Dubai packages remotely, we are physically based in Dubai. Direct hotel relationships, on-ground support, no middleman markups.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white rounded p-4 h-100 text-center shadow-sm">
                    <i class="fas fa-leaf fa-3x text-success mb-3"></i>
                    <h4 class="mb-3">Guaranteed Jain Food</h4>
                    <p class="text-muted mb-0">100% pure vegetarian and Jain meals (no onion, no garlic, no root vegetables) guaranteed on every tour — desert safari, dhow cruise, city tour. No compromises.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white rounded p-4 h-100 text-center shadow-sm">
                    <i class="fab fa-whatsapp fa-3x text-success mb-3"></i>
                    <h4 class="mb-3">24/7 WhatsApp Support</h4>
                    <p class="text-muted mb-0">From the moment you land in Dubai to the moment you leave — our team is one message away. We speak Hindi, Gujarati, and English.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white rounded p-4 h-100 text-center shadow-sm">
                    <i class="fas fa-rupee-sign fa-3x text-primary mb-3"></i>
                    <h4 class="mb-3">Pay in INR or AED</h4>
                    <p class="text-muted mb-0">We accept UPI, Google Pay, bank transfers in INR, and all international credit/debit cards. Pay in the currency most convenient for you.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white rounded p-4 h-100 text-center shadow-sm">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h4 class="mb-3">2,000+ Indian Families</h4>
                    <p class="text-muted mb-0">Families from Mumbai, Ahmedabad, Surat, Delhi, Jaipur, Pune, Bangalore, and Nairobi trust us. 4.9★ Google rating from real travelers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-white rounded p-4 h-100 text-center shadow-sm">
                    <i class="fas fa-om fa-3x text-warning mb-3"></i>
                    <h4 class="mb-3">Temple & Darshan Tours</h4>
                    <p class="text-muted mb-0">We arrange visits to the <a href="/jain-temple-dubai"><strong>Jain derasar in Bur Dubai</strong></a> and the stunning <strong>BAPS Swaminarayan Mandir in Abu Dhabi</strong>. Perform Darshan comfortably during your holiday.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Price Comparison Table in INR -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Packages & Pricing</h5>
            <h2 class="mb-4">Dubai Trip Cost from India (2026 Prices)</h2>
            <p class="text-muted">All packages include hotel, tours, meals, and local transport. Flights not included.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-bordered bg-white shadow-sm">
                        <thead class="table-primary">
                            <tr>
                                <th>Package</th>
                                <th>Duration</th>
                                <th>Price (AED)</th>
                                <th>Approx Price (₹ INR)</th>
                                <th>Best For</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><a href="/budget-friendly-dubai" class="text-primary">Budget Friendly Dubai</a></strong></td>
                                <td>3 Nights 4 Days</td>
                                <td>AED 2,199</td>
                                <td>₹50,600</td>
                                <td>First-timers, short trips</td>
                            </tr>
                            <tr>
                                <td><strong><a href="/dubai-abu-dhabi-deal" class="text-primary">Dubai + Abu Dhabi</a></strong></td>
                                <td>4 Nights 5 Days</td>
                                <td>AED 2,999</td>
                                <td>₹69,000</td>
                                <td>Families wanting both cities</td>
                            </tr>
                            <tr>
                                <td><strong><a href="/dubai-winter-escape" class="text-primary">Dubai Winter Escape</a></strong></td>
                                <td>5 Nights 6 Days</td>
                                <td>AED 2,499</td>
                                <td>₹57,500</td>
                                <td>Winter holiday, popular deal</td>
                            </tr>
                            <tr>
                                <td><strong><a href="/dubai-for-kids" class="text-primary">Dubai For Kids</a></strong></td>
                                <td>5 Nights 6 Days</td>
                                <td>AED 3,499</td>
                                <td>₹80,500</td>
                                <td>Families with children</td>
                            </tr>
                            <tr>
                                <td><strong><a href="/dubai-honeymoon-package" class="text-primary">Dubai Honeymoon</a></strong></td>
                                <td>6 Nights 7 Days</td>
                                <td>AED 3,999</td>
                                <td>₹92,000</td>
                                <td>Couples, romantic getaway</td>
                            </tr>
                            <tr>
                                <td><strong><a href="/dubai-family-holidays" class="text-primary">Dubai Family Signature</a></strong></td>
                                <td>6 Nights 7 Days</td>
                                <td>AED 4,999</td>
                                <td>₹1,15,000</td>
                                <td>Premium family experience</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-muted small text-center mt-2"><em>* INR prices are approximate at 1 AED ≈ ₹23. Actual rates may vary. All packages include 100% Jain/vegetarian meals.</em></p>
            </div>
        </div>
    </div>
</div>

<!-- Popular Activities with INR Pricing -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Popular Activities</h5>
            <h2 class="mb-4">Top Dubai Activities for Indian Families</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <img src="img/services/safari.webp" class="card-img-top" alt="Desert safari in Dubai for Indian Jain families with vegetarian dinner" style="height:200px;object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Desert Safari with Jain Dinner</h5>
                        <p class="text-muted small">Dune bashing, camel ride, cultural shows + guaranteed Jain vegetarian BBQ dinner (no onion, no garlic).</p>
                        <p class="text-primary fw-bold mb-0">From AED 99 (₹2,300)</p>
                        <a href="/desert-safari" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <img src="img/dubaiholiday/burj-khalifa-dubai-skyline-hero.jpg" class="card-img-top" alt="Burj Khalifa visit during Dubai tour from India" style="height:200px;object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Dubai City Tour</h5>
                        <p class="text-muted small">Full day tour: Dubai Frame, Gold Souk, abra ride, Palm Jumeirah monorail, Atlantis, and Dubai Mall.</p>
                        <p class="text-primary fw-bold mb-0">From AED 100 (₹2,300)</p>
                        <a href="/dubai-full-day-city-tour" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <img src="img/yacht/herobanner.jpg" class="card-img-top" alt="Private yacht rental in Dubai for Indian family celebrations" style="height:200px;object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Private Yacht Charter</h5>
                        <p class="text-muted small">Sail Dubai Marina on a private yacht. Perfect for birthdays, anniversaries, and family celebrations.</p>
                        <p class="text-primary fw-bold mb-0">From AED 425/hr (₹9,800)</p>
                        <a href="/yacht-rental" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Abu Dhabi + BAPS Temple Section -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Abu Dhabi Day Trip</h5>
            <h2 class="mb-4">BAPS Swaminarayan Mandir & Abu Dhabi City Tour</h2>
            <p class="text-muted">The most requested add-on for Indian families visiting Dubai — a full-day Abu Dhabi excursion with temple visit.</p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="pe-lg-4">
                    <h4 class="mb-3">Full-Day Abu Dhabi Tour Highlights</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-om text-warning me-2"></i> <strong>BAPS Swaminarayan Mandir</strong> — UAE's first Hindu temple, a must-visit for every Indian family</li>
                        <li class="mb-2"><i class="fas fa-mosque text-primary me-2"></i> <strong>Sheikh Zayed Grand Mosque</strong> — One of the world's largest mosques, an architectural masterpiece</li>
                        <li class="mb-2"><i class="fas fa-tachometer-alt text-danger me-2"></i> <strong>Ferrari World</strong> — World's fastest roller coaster &amp; Ferrari-themed experiences</li>
                        <li class="mb-2"><i class="fas fa-landmark text-primary me-2"></i> <strong>Presidential Palace (Qasr Al Watan)</strong> — Stunning seat of UAE government</li>
                        <li class="mb-2"><i class="fas fa-shopping-bag text-success me-2"></i> <strong>Heritage Village &amp; Date Market</strong> — Traditional Emirati culture &amp; shopping</li>
                        <li class="mb-2"><i class="fas fa-utensils text-success me-2"></i> <strong>Pure Jain / Vegetarian Lunch</strong> — At dedicated Indian restaurant in Abu Dhabi</li>
                    </ul>
                    <p class="text-muted small">The BAPS Mandir visit requires pre-registration. We handle the complete booking process for you — just tell us your preferred date.</p>
                    <a href="https://wa.me/971585945007?text=Hi, I want to add Abu Dhabi city tour with BAPS Mandir visit to my Dubai trip" target="_blank" class="btn btn-primary rounded-pill mt-2">
                        <i class="fab fa-whatsapp me-2"></i>Add Abu Dhabi Tour to My Trip
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded p-4 shadow-sm">
                    <h5 class="mb-3 text-primary">Who Is This Perfect For?</h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="border rounded p-3 text-center h-100">
                                <i class="fas fa-users fa-2x text-primary mb-2"></i>
                                <p class="mb-0 fw-bold small">Gujarati Families</p>
                                <small class="text-muted">Temple darshan + sightseeing</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded p-3 text-center h-100">
                                <i class="fas fa-user-friends fa-2x text-primary mb-2"></i>
                                <p class="mb-0 fw-bold small">Senior Citizens</p>
                                <small class="text-muted">Comfortable pace, AC vehicle</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded p-3 text-center h-100">
                                <i class="fas fa-people-carry fa-2x text-primary mb-2"></i>
                                <p class="mb-0 fw-bold small">Group Tours</p>
                                <small class="text-muted">10-50 person groups welcome</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded p-3 text-center h-100">
                                <i class="fas fa-pray fa-2x text-warning mb-2"></i>
                                <p class="mb-0 fw-bold small">Swaminarayan Devotees</p>
                                <small class="text-muted">Dedicated Mandir visit time</small>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 p-3 bg-light rounded">
                        <p class="mb-0 small"><i class="fas fa-info-circle text-primary me-2"></i><strong>Abu Dhabi Tour:</strong> From AED 150 (≈ ₹3,500) per person including transport, guide, and temple visit. Lunch at Jain restaurant available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Specialized Packages for Indian Travelers -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">Specialized Packages</h5>
            <h2 class="mb-4">Customized Dubai Packages for Every Indian Traveler</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <i class="fas fa-leaf fa-3x text-success mb-3"></i>
                    <h5>Dubai Jain Package</h5>
                    <p class="text-muted small">100% pure Jain food (no onion, no garlic, no root vegetables) on every meal. Jain temple darshan included.</p>
                    <a href="https://wa.me/971585945007?text=Hi, I want a Dubai Jain Package with pure Jain food" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Get Quote</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <i class="fas fa-om fa-3x text-warning mb-3"></i>
                    <h5>Swaminarayan Temple Tour</h5>
                    <p class="text-muted small">Visit BAPS Mandir Abu Dhabi + the Jain derasar in Dubai. Full religious tour with pure vegetarian meals throughout.</p>
                    <a href="https://wa.me/971585945007?text=Hi, I want a Dubai + Abu Dhabi Swaminarayan Temple Tour package" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Get Quote</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <i class="fas fa-user-friends fa-3x text-primary mb-3"></i>
                    <h5>Senior Citizen Package</h5>
                    <p class="text-muted small">Relaxed itinerary, comfortable AC vehicles, wheelchair-friendly options, easy-paced sightseeing. Perfect for parents &amp; elders.</p>
                    <a href="https://wa.me/971585945007?text=Hi, I want a Senior Citizen Dubai Package for my parents" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Get Quote</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center p-4">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h5>Group Tour (10-50 pax)</h5>
                    <p class="text-muted small">Special group rates for families, friend groups, community tours &amp; corporate MICE. Gujarati-speaking coordinators available.</p>
                    <a href="https://wa.me/971585945007?text=Hi, I want a Group Tour Dubai Package for [number] people" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials from Indian Cities -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title px-3">What Indian Families Say</h5>
            <h2 class="mb-4">Trusted by Families Across India</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic">"The Jain food was perfect — pure satvik, no onion, no garlic. Shweta Ji handled everything personally. Our family of 15 from Ahmedabad had the best Dubai trip!"</p>
                    <p class="fw-bold mb-0">Shah Family <small class="text-muted fw-normal">— Ahmedabad, Gujarat</small></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic">"As strict vegetarians, finding proper food abroad is always a worry. Arihant Travels eliminated that completely. Desert safari dinner was amazing!"</p>
                    <p class="fw-bold mb-0">Mehta Family <small class="text-muted fw-normal">— Mumbai, Maharashtra</small></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic">"Being based in Dubai makes all the difference. When we had a last-minute change, their team was there in 30 minutes. No Indian agent can do that!"</p>
                    <p class="fw-bold mb-0">Jain Family <small class="text-muted fw-normal">— Surat, Gujarat</small></p>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-lg-4">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic">"We were a group of 22 senior citizens from Vadodara. Arihant handled everything — BAPS Mandir visit, pure Jain food at every meal, and comfortable AC transport. Highly recommended!"</p>
                    <p class="fw-bold mb-0">Doshi Group <small class="text-muted fw-normal">— Vadodara, Gujarat</small></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic">"Booked a Gujarati group tour for 15 families from Rajkot. The Swaminarayan Mandir in Abu Dhabi was breathtaking. Shweta Ji even arranged Gujarati thali for our entire group!"</p>
                    <p class="fw-bold mb-0">Patel Family <small class="text-muted fw-normal">— Rajkot, Gujarat</small></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic">"My parents (both 65+) had the time of their lives. Senior citizen-friendly pace, no rushing. The desert safari was the highlight — they even arranged a separate Jain dinner at the camp."</p>
                    <p class="fw-bold mb-0">Sanghvi Family <small class="text-muted fw-normal">— Delhi NCR</small></p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" class="btn btn-primary rounded-pill py-2 px-4">
                <i class="fab fa-google me-2"></i>See All Google Reviews (4.9★)
            </a>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Ready to Visit Dubai?</h5>
            <h2 class="text-white mb-4">Plan Your Dubai Trip from India Today</h2>
            <p class="text-white mb-5">Tell us your travel dates, group size, and budget. We'll create a customized Dubai package with guaranteed Jain/vegetarian meals, handpicked hotels, and 24/7 local support.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/971585945007?text=Hi, I'm planning a Dubai trip from India. We are a family of [number] and looking for Jain-friendly packages." target="_blank" class="btn btn-light rounded-pill py-3 px-5">
                    <i class="fab fa-whatsapp me-2 text-success"></i>Chat on WhatsApp
                </a>
                <a href="/contact" class="btn btn-outline-light rounded-pill py-3 px-5">
                    <i class="fa fa-envelope me-2"></i>Send Enquiry
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
