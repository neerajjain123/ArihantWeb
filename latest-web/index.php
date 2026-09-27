<?php
// Page SEO Variables
$pageTitle = "Jain & Vegetarian Travel Agency Dubai | Arihant Travels";
$pageDescription = "Dubai-based Jain & vegetarian travel agency. Pure veg desert safaris, yacht charters, city tours & holiday packages. 2,000+ families served.";
$pageKeywords = "Jain travel agency Dubai, vegetarian tours Dubai UAE, Jain friendly desert safari, pure vegetarian holiday packages UAE, Dubai tours for Jain families, female owned travel agency Dubai, Arihant Travels, Jain travel UAE, vegetarian family vacation Dubai, Gujarati tour Dubai, Swaminarayan temple tour Dubai, BAPS mandir Abu Dhabi tour, Dubai Jain package, Dubai group tour for Indians, senior citizen Dubai package, pure veg Dubai tour, customized Dubai holiday";
$pageCanonical   = "https://arihantlink.com/";
$currentPage     = "home";
$breadcrumbBg    = "img/carousel-1.jpg";   // og:image for homepage social shares

// Organization + LocalBusiness Schema for homepage
$schemaMarkup = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["TravelAgency", "LocalBusiness"],
    "name": "Arihant Travels Pvt Ltd",
    "alternateName": ["Arihant Travels", "Arihant Travel", "Arihant Link Travel & Tourism"],
    "url": "https://arihantlink.com",
    "logo": "https://arihantlink.com/img/logo.png",
    "image": "https://arihantlink.com/img/carousel-2.jpg",
    "description": "Dubai-based, UAE-licensed travel agency specializing in 100% pure vegetarian and Jain-friendly travel experiences. The only Jain-focused travel agency physically based in the UAE, offering desert safaris, yacht charters, city tours, dhow cruises, theme park tickets, and holiday packages with guaranteed Jain meals on every tour.",
    "slogan": "UAE\'s #1 Jain & Vegetarian Travel Agency",
    "telephone": "+971585945007",
    "email": "info@arihantlink.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Al Rayyan Complex, Al Nahda",
        "addressLocality": "Sharjah",
        "addressRegion": "Sharjah",
        "addressCountry": "AE"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "25.3013436",
        "longitude": "55.3833683"
    },
    "sameAs": [
        "https://www.facebook.com/profile.php?id=61561499244239",
        "https://www.instagram.com/arihantlink/",
        "https://www.linkedin.com/company/ArihantTravel",
        "https://x.com/arihantraveldxb",
        "https://www.youtube.com/@arihanttraveldxb",
        "https://g.page/r/CZDbjoitBVREEAE"
    ],
    "foundingDate": "2022",
    "founder": {
        "@type": "Person",
        "name": "Shweta Jain",
        "jobTitle": "Founder & CEO",
        "nationality": {"@type": "Country", "name": "India"}
    },
    "priceRange": "AED 25 - AED 5000",
    "currenciesAccepted": "AED, INR, USD",
    "paymentAccepted": "Cash, Credit Card, Bank Transfer, UPI",
    "knowsLanguage": ["en", "hi", "gu"],
    "areaServed": [
        {
            "@type": "Country",
            "name": "United Arab Emirates"
        },
        {
            "@type": "City",
            "name": "Dubai"
        },
        {
            "@type": "City",
            "name": "Abu Dhabi"
        },
        {
            "@type": "Country",
            "name": "India",
            "description": "Serving Jain and vegetarian families across India for Dubai travel"
        },
        {
            "@type": "City",
            "name": "Mumbai",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Ahmedabad",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Surat",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Delhi",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Bangalore",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Pune",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Jaipur",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Vadodara",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Rajkot",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Indore",
            "containedInPlace": {"@type": "Country", "name": "India"}
        },
        {
            "@type": "City",
            "name": "Udaipur",
            "containedInPlace": {"@type": "Country", "name": "India"}
        }
    ],
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Arihant Travels Services",
        "itemListElement": [
            {
                "@type": "OfferCatalog",
                "name": "Desert Safaris",
                "itemListElement": [
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Standard Evening Desert Safari", "description": "6-hour evening desert safari with dune bashing, camel ride, BBQ dinner and cultural shows", "touristType": "Jain families, vegetarian travelers"}, "price": "99", "priceCurrency": "AED"},
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "VIP Evening Desert Safari", "description": "VIP sofa seating, separate BBQ counter, table service", "touristType": "Jain families, vegetarian travelers"}, "price": "149", "priceCurrency": "AED"},
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Premium Evening Desert Safari", "description": "Premium private setup with luxury amenities", "touristType": "Jain families, vegetarian travelers"}, "price": "249", "priceCurrency": "AED"}
                ]
            },
            {
                "@type": "OfferCatalog",
                "name": "Yacht Charters",
                "itemListElement": [
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Private Yacht Charter Dubai"}, "priceSpecification": {"@type": "PriceSpecification", "minPrice": "399", "priceCurrency": "AED"}}
                ]
            },
            {
                "@type": "OfferCatalog",
                "name": "City Tours",
                "itemListElement": [
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Dubai Full Day City Tour"}},
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Abu Dhabi City Tour"}}
                ]
            },
            {
                "@type": "OfferCatalog",
                "name": "Holiday Packages",
                "itemListElement": [
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Dubai Family Holiday Package"}},
                    {"@type": "Offer", "itemOffered": {"@type": "TouristTrip", "name": "Dubai Honeymoon Package"}}
                ]
            }
        ]
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
    }
}
</script>
';

include 'includes/header.php';
?>

<!-- Carousel Start -->
<div class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <picture>
                    <source media="(max-width: 768px)" srcset="img/carousel-2-mobile.webp" type="image/webp">
                    <source srcset="img/carousel-2.webp" type="image/webp">
                    <img src="img/carousel-2.jpg" class="img-fluid" alt="Dubai skyline view - Arihant Travels Jain and vegetarian travel agency UAE" fetchpriority="high"
                        width="1920" height="1080" decoding="async">
                </picture>
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white text-uppercase mb-3"
                            style="font-family: 'Prompt', sans-serif; font-weight: 600; letter-spacing: 2px;">
                            Welcome to Arihant Travels</h2>
                        <h1 class="display-3 text-white mb-4"
                            style="font-family: 'Prompt', sans-serif; font-weight: 700;">
                            Discover Dubai with Jain & Vegetarian-Friendly Travel Packages
                        </h1>
                        <p class="fs-5 text-white mb-5" style="font-family: 'Prompt', sans-serif; font-weight: 500;">
                            Experience the best of Dubai with customized tours, pure vegetarian meals, and
                            culturally aligned travel experiences for Jain families
                        </p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="https://wa.me/971585945007?text=I want to plan my Dubai trip" target="_blank"
                                class="btn btn-primary btn-lg rounded-pill px-5 py-3">
                                <i class="fab fa-whatsapp me-2"></i>Plan Your Trip
                            </a>
                            <a href="#ourservices" class="btn btn-light btn-lg rounded-pill px-5 py-3">
                                Explore Activities
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4500">
                <picture>
                    <source media="(max-width: 768px)" data-srcset="img/carousel-1-mobile.webp" type="image/webp">
                    <source data-srcset="img/carousel-1.webp" type="image/webp">
                    <img data-src="img/carousel-1.jpg" class="img-fluid carousel-lazy" alt="Private luxury yacht charter in Dubai Marina for Jain and vegetarian families" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 800px;">
                        <h2 class="text-white text-uppercase mb-3" style="font-family:'Prompt',sans-serif;font-weight:600;letter-spacing:2px;">Dubai Marina</h2>
                        <h3 class="display-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:700;">Luxury Yacht Charters on Dubai Marina</h3>
                        <p class="fs-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:500;">Private yacht experiences for Jain families — 100% vegetarian catering available</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="yacht-rental" class="btn btn-primary btn-lg rounded-pill px-4 py-3"><i class="fa fa-ship me-2"></i>View Yachts</a>
                            <a href="https://wa.me/971585945007?text=I want to book a yacht charter" target="_blank" class="btn btn-light btn-lg rounded-pill px-4 py-3"><i class="fab fa-whatsapp me-2"></i>Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4500">
                <picture>
                    <source media="(max-width: 768px)" data-srcset="img/carousel-3-mobile.webp" type="image/webp">
                    <source data-srcset="img/carousel-3.webp" type="image/webp">
                    <img data-src="img/carousel-3.jpg" class="img-fluid carousel-lazy" alt="Jain friendly hotel accommodation in Dubai with pure vegetarian meals" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 800px;">
                        <h2 class="text-white text-uppercase mb-3" style="font-family:'Prompt',sans-serif;font-weight:600;letter-spacing:2px;">Handpicked Hotels</h2>
                        <h3 class="display-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:700;">Jain-Friendly Hotels for Every Budget</h3>
                        <p class="fs-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:500;">Pure vegetarian breakfast, Jain kitchen requests handled — no compromise, ever</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="dubai-family-holidays" class="btn btn-primary btn-lg rounded-pill px-4 py-3"><i class="fa fa-hotel me-2"></i>View Packages</a>
                            <a href="https://wa.me/971585945007?text=I need a Jain-friendly hotel in Dubai" target="_blank" class="btn btn-light btn-lg rounded-pill px-4 py-3"><i class="fab fa-whatsapp me-2"></i>Ask Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4500">
                <picture>
                    <source media="(max-width: 768px)" data-srcset="img/carousel-4-mobile.webp" type="image/webp">
                    <source data-srcset="img/carousel-4.webp" type="image/webp">
                    <img data-src="img/carousel-4.jpg" class="img-fluid carousel-lazy" alt="Customized Jain family tour package in Dubai with private vehicle and guide" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 800px;">
                        <h2 class="text-white text-uppercase mb-3" style="font-family:'Prompt',sans-serif;font-weight:600;letter-spacing:2px;">Family Travel</h2>
                        <h3 class="display-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:700;">Fully Customized Family Packages</h3>
                        <p class="fs-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:500;">Multi-generational trips planned around your family's dietary and cultural needs</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="dubai-family-holidays" class="btn btn-primary btn-lg rounded-pill px-4 py-3"><i class="fa fa-users me-2"></i>Plan My Trip</a>
                            <a href="https://wa.me/971585945007?text=I want a family package for Dubai" target="_blank" class="btn btn-light btn-lg rounded-pill px-4 py-3"><i class="fab fa-whatsapp me-2"></i>Talk to Expert</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4500">
                <picture>
                    <source media="(max-width: 768px)" data-srcset="img/carousel-5-mobile.webp" type="image/webp">
                    <source data-srcset="img/carousel-5.webp" type="image/webp">
                    <img data-src="img/carousel-5.jpg" class="img-fluid carousel-lazy" alt="Jain family enjoying desert safari in Dubai with vegetarian dinner and dune bashing" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 800px;">
                        <h2 class="text-white text-uppercase mb-3" style="font-family:'Prompt',sans-serif;font-weight:600;letter-spacing:2px;">Desert Safari</h2>
                        <h3 class="display-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:700;">100% Jain Desert Safari Experiences</h3>
                        <p class="fs-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:500;">Dune bashing, camel rides & a Jain-certified dinner — from AED 99 per person</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="desert-safari" class="btn btn-primary btn-lg rounded-pill px-4 py-3"><i class="fa fa-sun me-2"></i>Book Safari</a>
                            <a href="https://wa.me/971585945007?text=I want to book a Jain desert safari" target="_blank" class="btn btn-light btn-lg rounded-pill px-4 py-3"><i class="fab fa-whatsapp me-2"></i>Book on WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4500">
                <picture>
                    <source media="(max-width: 768px)" data-srcset="img/carousel-6-mobile.webp" type="image/webp">
                    <source data-srcset="img/carousel-6.webp" type="image/webp">
                    <img data-src="img/carousel-6.jpg" class="img-fluid carousel-lazy" alt="Skip the queue at Dubai attractions and theme parks with Arihant Travels" loading="lazy" width="1920" height="1080" decoding="async">
                </picture>
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 800px;">
                        <h2 class="text-white text-uppercase mb-3" style="font-family:'Prompt',sans-serif;font-weight:600;letter-spacing:2px;">Dubai Attractions</h2>
                        <h3 class="display-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:700;">Skip-the-Queue Dubai Excursion Tickets</h3>
                        <p class="fs-5 text-white mb-4" style="font-family:'Prompt',sans-serif;font-weight:500;">Burj Khalifa, Museum of the Future, Miracle Garden & 20+ more — instant confirmation</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="dubai-excursions" class="btn btn-primary btn-lg rounded-pill px-4 py-3"><i class="fa fa-ticket-alt me-2"></i>Book Tickets</a>
                            <a href="https://wa.me/971585945007?text=I want to book excursion tickets in Dubai" target="_blank" class="btn btn-light btn-lg rounded-pill px-4 py-3"><i class="fab fa-whatsapp me-2"></i>Quick Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<!-- Navbar & Hero End -->

<!-- Carousel lazy-hydration: slides 2-6 carry data-src/data-srcset instead of src/srcset.
     Bootstrap dispatches 'slide.bs.carousel' on the carousel element BEFORE the slide becomes
     visible — we use that to swap real src in just-in-time, plus we hydrate the next slide on
     idle so the first user-driven transition is instant. -->
<script>
(function () {
    var carousel = document.getElementById('carouselId');
    if (!carousel) return;

    function hydrate(item) {
        if (!item || item.dataset.hydrated === '1') return;
        item.dataset.hydrated = '1';
        item.querySelectorAll('source[data-srcset]').forEach(function (s) {
            s.setAttribute('srcset', s.getAttribute('data-srcset'));
            s.removeAttribute('data-srcset');
        });
        item.querySelectorAll('img[data-src]').forEach(function (img) {
            img.setAttribute('src', img.getAttribute('data-src'));
            img.removeAttribute('data-src');
        });
    }

    // When the carousel is about to transition, hydrate the incoming slide.
    carousel.addEventListener('slide.bs.carousel', function (e) {
        if (e.relatedTarget) hydrate(e.relatedTarget);
    });

    // Pre-hydrate slide #2 on idle so first auto-rotation is seamless.
    var items = carousel.querySelectorAll('.carousel-item');
    function preloadNext() { if (items.length > 1) hydrate(items[1]); }
    if ('requestIdleCallback' in window) {
        requestIdleCallback(preloadNext, { timeout: 2500 });
    } else {
        setTimeout(preloadNext, 2000);
    }

    // Pause carousel auto-rotate when the tab is hidden — saves CPU and helps INP.
    document.addEventListener('visibilitychange', function () {
        if (!window.bootstrap || !bootstrap.Carousel) return;
        var inst = bootstrap.Carousel.getInstance(carousel);
        if (!inst) return;
        document.hidden ? inst.pause() : inst.cycle();
    });
})();
</script>

<!-- Quick Category Strip Start -->
<div class="container-fluid category-strip py-3 bg-white shadow-sm" id="categoryStrip">
    <div class="container">
        <div class="category-strip-inner d-flex gap-3 overflow-auto pb-1">
            <a href="#ourservices" data-filter="desert" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-sun text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">Desert Safari</small>
            </a>
            <a href="#ourservices" data-filter="city" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-city text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">City Tours</small>
            </a>
            <a href="#ourservices" data-filter="water" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-ship text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">Yacht &amp; Dhow</small>
            </a>
            <a href="#ourservices" data-filter="theme" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-ticket-alt text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">Theme Parks</small>
            </a>
            <a href="#ourservices" data-filter="international" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-globe text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">International</small>
            </a>
            <a href="#ourservices" data-filter="packages" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-suitcase text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">Holiday Packages</small>
            </a>
            <a href="uae-visa" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-passport text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">UAE Visa</small>
            </a>
            <a href="#ourservices" data-filter="balloon" class="category-tab-btn text-decoration-none text-center flex-shrink-0">
                <div class="category-tab-icon rounded-circle mx-auto mb-1">
                    <i class="fa fa-cloud text-primary"></i>
                </div>
                <small class="d-block text-dark" style="font-weight:600;">Hot Air Balloon</small>
            </a>
        </div>
    </div>
</div>
<!-- Quick Category Strip End -->

<!-- Stats Counter Start -->
<div class="container-fluid stats-section py-5 bg-white" id="statsSection">
    <div class="container py-4">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="stat-counter-card p-4 h-100 rounded shadow-sm border-bottom border-4 border-primary">
                    <div class="stat-icon mb-3">
                        <i class="fa fa-users fa-2x text-primary"></i>
                    </div>
                    <div class="h2 fw-bold text-dark mb-1">
                        <span class="counter-number" data-target="2000" data-suffix="+">0+</span>
                    </div>
                    <p class="text-muted mb-0" style="font-weight:600;">Families Served</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-counter-card p-4 h-100 rounded shadow-sm border-bottom border-4 border-secondary">
                    <div class="stat-icon mb-3">
                        <i class="fa fa-calendar-check fa-2x" style="color:#2596be;"></i>
                    </div>
                    <div class="h2 fw-bold text-dark mb-1">
                        <span class="counter-number" data-target="3" data-suffix="+ Yrs">0</span>
                    </div>
                    <p class="text-muted mb-0" style="font-weight:600;">In Business</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-counter-card p-4 h-100 rounded shadow-sm border-bottom border-4 border-success">
                    <div class="stat-icon mb-3">
                        <i class="fa fa-suitcase fa-2x text-success"></i>
                    </div>
                    <div class="h2 fw-bold text-dark mb-1">
                        <span class="counter-number" data-target="150" data-suffix="+">0+</span>
                    </div>
                    <p class="text-muted mb-0" style="font-weight:600;">Tour Packages</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-counter-card p-4 h-100 rounded shadow-sm border-bottom border-4" style="border-color:#f0b429 !important;">
                    <div class="stat-icon mb-3">
                        <i class="fa fa-star fa-2x" style="color:#f0b429;"></i>
                    </div>
                    <div class="h2 fw-bold text-dark mb-1">
                        <span class="counter-number" data-target="48" data-suffix="" data-decimal="true">0</span>&#9733;
                    </div>
                    <p class="text-muted mb-0" style="font-weight:600;">Customer Rating</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Stats Counter End -->

<!-- Featured Packages Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Special Offers</h5>
            <h2 class="mb-4">Featured Travel Packages</h2>
            <p class="mb-0">Handpicked experiences for the ultimate family vacation. Guaranteed Jain and vegetarian
                friendly arrangements.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img src="img/carousel-4.jpg" class="img-fluid w-100" alt="Dubai Family Special"
                            style="height: 250px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-primary px-3 py-2 fs-6">5N/6D</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4>Dubai Family Special</h4>
                        <p class="text-muted">Burj Khalifa, Desert Safari, City Tour & Theme Parks with Jain Meals.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h4 text-primary mb-0">AED 2,599</span>
                            <a href="dubai-family-holidays" class="btn btn-outline-primary rounded-pill">View
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded border border-secondary h-100 overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img src="img/services/International_tour.jpeg" class="img-fluid w-100" alt="Baku Gems"
                            style="height: 250px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2 fs-6">4N/5D</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4>Baku Gems Tour</h4>
                        <p class="text-muted">Explore the fire city with historical landmarks and authentic veg dining.
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h4 text-secondary mb-0">AED 2,199</span>
                            <a href="baku" class="btn btn-outline-secondary rounded-pill">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded border border-success h-100 overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img src="img/hotairbaloon/Fiesta-Dubai-Sunrise-HotAir-Baloon.jpg" class="img-fluid w-100"
                            alt="Hot Air Balloon Dubai" style="height: 250px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success px-3 py-2 fs-6">Sunrise</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4>Hot Air Balloon Dubai</h4>
                        <p class="text-muted">Experience a magical sunrise flight over the Arabian Desert with
                            refreshments and a signed certificate.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="h4 text-success mb-0">AED 699</span>
                            <a href="hot-air-balloon-magical" class="btn btn-outline-success rounded-pill">View
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Packages End -->

<!-- Why Choose Arihant Trust Strip Start -->
<div class="container-fluid trust-strip py-4" style="background:#13357B;">
    <div class="container py-3">
        <h2 class="visually-hidden">Why Choose Arihant Travels — UAE's #1 Jain Travel Agency</h2>
        <div class="row g-3 text-center align-items-center justify-content-center">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge text-white">
                    <i class="fa fa-leaf fa-2x mb-2" style="color:#4CAF50;"></i>
                    <div style="font-weight:700;font-size:0.9rem;">100% Jain Certified</div>
                    <div style="font-size:0.75rem;opacity:0.75;">No onion, no garlic</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge text-white">
                    <i class="fa fa-female fa-2x mb-2" style="color:#f0b429;"></i>
                    <div style="font-weight:700;font-size:0.9rem;">Female-Led Agency</div>
                    <div style="font-size:0.75rem;opacity:0.75;">Founded by Shweta Jain</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge text-white">
                    <i class="fa fa-award fa-2x mb-2" style="color:#2596be;"></i>
                    <div style="font-weight:700;font-size:0.9rem;">3+ Years Expertise</div>
                    <div style="font-size:0.75rem;opacity:0.75;">2,000+ families served</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge text-white">
                    <i class="fa fa-headset fa-2x mb-2" style="color:#4CAF50;"></i>
                    <div style="font-weight:700;font-size:0.9rem;">24/7 Support</div>
                    <div style="font-size:0.75rem;opacity:0.75;">WhatsApp anytime</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge text-white">
                    <i class="fa fa-tag fa-2x mb-2" style="color:#f0b429;"></i>
                    <div style="font-weight:700;font-size:0.9rem;">Best Price Guarantee</div>
                    <div style="font-size:0.75rem;opacity:0.75;">No hidden charges</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="trust-badge text-white">
                    <i class="fa fa-shield-alt fa-2x mb-2" style="color:#2596be;"></i>
                    <div style="font-weight:700;font-size:0.9rem;">UAE Licensed</div>
                    <div style="font-size:0.75rem;opacity:0.75;">Registered tour operator</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Arihant Trust Strip End -->

<!-- Services Start -->
<div class="container-fluid bg-light service py-5" id="ourservices">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Services</h5>
            <h2 class="mb-4">Our Services</h2>
            <p class="mb-0">Welcome to Arihant Travels, your trusted partner for unforgettable Dubai and
                International vacation packages. We specialize in Jain-friendly and vegetarian travel experiences.
            </p>
        </div>

        <!-- Services Tab Navigation -->
        <ul class="nav nav-tabs-services mb-4 justify-content-center flex-wrap gap-2 border-0 list-unstyled d-flex" id="servicesTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link-service active rounded-pill px-4 py-2" id="tab-all-btn"
                        data-bs-toggle="tab" data-bs-target="#tab-all"
                        type="button" role="tab" aria-selected="true">
                    <i class="fa fa-th me-2"></i>All Services
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link-service rounded-pill px-4 py-2" id="tab-dubai-activities-btn"
                        data-bs-toggle="tab" data-bs-target="#tab-dubai-activities"
                        type="button" role="tab" aria-selected="false">
                    <i class="fa fa-sun me-2"></i>Dubai Activities
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link-service rounded-pill px-4 py-2" id="tab-international-btn"
                        data-bs-toggle="tab" data-bs-target="#tab-international"
                        type="button" role="tab" aria-selected="false">
                    <i class="fa fa-globe me-2"></i>International Tours
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link-service rounded-pill px-4 py-2" id="tab-packages-btn"
                        data-bs-toggle="tab" data-bs-target="#tab-packages"
                        type="button" role="tab" aria-selected="false">
                    <i class="fa fa-suitcase me-2"></i>Packages &amp; Visa
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="servicesTabContent">

            <!-- Tab: All Services -->
            <div class="tab-pane fade show active" id="tab-all" role="tabpanel">
                <div class="row g-4">
                    <!-- International Tours -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-secondary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/International_tour.jpeg" class="img-fluid w-100" alt="International tour packages with vegetarian meals - Georgia, Bali, Singapore" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-secondary px-3 py-2 fs-6">From AED 2,199</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-globe fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">International Tours</h4>
                                </div>
                                <p class="mb-3">Explore historic cities like Baku, Tbilisi, and Almaty with our Jain-friendly international tour packages featuring stunning architecture and rich culture.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="georgia" class="btn btn-outline-secondary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book an International Tour" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- City Tours -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Dubai city tour with visits to Gold Souk, Palm Jumeirah and Dubai Frame" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 100</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-city fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">City Tours</h4>
                                </div>
                                <p class="mb-3">Comprehensive Dubai city tour packages exploring landmarks, cultural experiences, natural wonders, and modern marvels.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dubai-full-day-city-tour" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a City Tour" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dubai Safari -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/safari.webp" class="img-fluid w-100" alt="Dubai desert safari experience with Jain vegetarian dinner at camp" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 99</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-sun fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dubai Safari</h4>
                                </div>
                                <p class="mb-3">Captivating desert safari tours with guaranteed Jain-friendly and vegetarian meal options. Experience the timeless charm of the desert.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="desert-safari" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Jain Desert Safari" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dubai Excursions -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/excursion.jpg" class="img-fluid w-100" alt="Dubai excursions and sightseeing tours for Indian families" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 25</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-ticket-alt fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dubai Excursions</h4>
                                </div>
                                <p class="mb-3">Tickets to Burj Khalifa, Museum of the Future, Miracle Garden, Global Village, theme parks, and more Dubai attractions.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dubai-excursions" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book Dubai Excursion tickets" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dhow Cruise -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/dhowcruise.webp" class="img-fluid w-100" alt="Dubai Creek dhow cruise dinner with vegetarian and Jain meal options" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 99</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-ship fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dhow Cruise</h4>
                                </div>
                                <p class="mb-3">Traditional wooden boat experiences exploring Dubai's waterways with stunning views, entertainment, and dining options.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dhow-cruise" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Dhow Cruise" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- UAE Visa -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-success h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/visa.webp" class="img-fluid w-100" alt="UAE tourist visa services for Indian travelers and families" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-success px-3 py-2 fs-6">From AED 350</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-passport fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">UAE Visa</h4>
                                </div>
                                <p class="mb-3">Fast and reliable UAE visa processing for tourists and business travelers. 30-day, 60-day, and transit visas available.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="uae-visa" class="btn btn-outline-success btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I need help with UAE Visa" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dubai Packages -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-success h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/dubaipackage.jpg" class="img-fluid w-100" alt="Dubai holiday packages for Jain and vegetarian families with hotel and tours" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-success px-3 py-2 fs-6">From AED 2,599</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-suitcase fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dubai Packages</h4>
                                </div>
                                <p class="mb-3">Complete Dubai vacation packages including accommodation, tours, and activities. Perfect for families and groups.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dubai-family-holidays" class="btn btn-outline-success btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Dubai Holiday Package" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hotel Booking -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-success h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Jain friendly hotel booking in Dubai with vegetarian room service" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-success px-3 py-2 fs-6">Best Rates</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-hotel fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Hotel Booking</h4>
                                </div>
                                <p class="mb-3">Secure the best hotel deals in Dubai. From budget-friendly to luxury accommodations, we have options for every traveler.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="https://wa.me/971585945007?text=I need hotel booking in Dubai" target="_blank" class="btn btn-outline-success btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a hotel in Dubai" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Yacht Rental -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/yacht/herobanner.jpg" class="img-fluid w-100" alt="Private yacht rental Dubai for family celebrations and sightseeing cruises" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 425</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-ship fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Yacht Rental</h4>
                                </div>
                                <p class="mb-3">Luxury private yacht charters for parties, family trips, and romantic sunset cruises in Dubai Marina.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="yacht-rental" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Yacht Charter in Dubai" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: Dubai Activities -->
            <div class="tab-pane fade" id="tab-dubai-activities" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Dubai city tour with visits to Gold Souk, Palm Jumeirah and Dubai Frame" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 100</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-city fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">City Tours</h4>
                                </div>
                                <p class="mb-3">Comprehensive Dubai city tour packages exploring landmarks, cultural experiences, natural wonders, and modern marvels.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dubai-full-day-city-tour" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a City Tour" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/safari.webp" class="img-fluid w-100" alt="Dubai desert safari experience with Jain vegetarian dinner at camp" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 99</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-sun fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dubai Safari</h4>
                                </div>
                                <p class="mb-3">Captivating desert safari tours with guaranteed Jain-friendly and vegetarian meal options. Experience the timeless charm of the desert.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="desert-safari" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Jain Desert Safari" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/excursion.jpg" class="img-fluid w-100" alt="Dubai excursions and sightseeing tours for Indian families" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 25</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-ticket-alt fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dubai Excursions</h4>
                                </div>
                                <p class="mb-3">Tickets to Burj Khalifa, Museum of the Future, Miracle Garden, Global Village, theme parks, and more Dubai attractions.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dubai-excursions" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book Dubai Excursion tickets" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/dhowcruise.webp" class="img-fluid w-100" alt="Dubai Creek dhow cruise dinner with vegetarian and Jain meal options" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 99</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-ship fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dhow Cruise</h4>
                                </div>
                                <p class="mb-3">Traditional wooden boat experiences exploring Dubai's waterways with stunning views, entertainment, and dining options.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dhow-cruise" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Dhow Cruise" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/yacht/herobanner.jpg" class="img-fluid w-100" alt="Private yacht rental Dubai for family celebrations and sightseeing cruises" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-primary px-3 py-2 fs-6">From AED 425</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-ship fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Yacht Rental</h4>
                                </div>
                                <p class="mb-3">Luxury private yacht charters for parties, family trips, and romantic sunset cruises in Dubai Marina.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="yacht-rental" class="btn btn-outline-primary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Yacht Charter in Dubai" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: International Tours -->
            <div class="tab-pane fade" id="tab-international" role="tabpanel">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-secondary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/International_tour.jpeg" class="img-fluid w-100" alt="International tour packages with vegetarian meals - Georgia, Bali, Singapore" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-secondary px-3 py-2 fs-6">From AED 2,199</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-globe fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">International Tours</h4>
                                </div>
                                <p class="mb-3">Explore historic cities like Baku, Tbilisi, Almaty, Armenia, Bali, Thailand and Singapore — all with Jain-friendly dining guaranteed.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="georgia" class="btn btn-outline-secondary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book an International Tour" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-secondary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.webp" class="img-fluid w-100" alt="Georgia Tour" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-secondary px-3 py-2 fs-6">Georgia</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-mountain fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Tbilisi, Georgia</h4>
                                </div>
                                <p class="mb-3">Discover ancient monasteries, mountain landscapes and vibrant culture with guaranteed pure vegetarian restaurants throughout.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="georgia" class="btn btn-outline-secondary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book Georgia Tour" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-secondary h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Kazakhstan Tour" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-secondary px-3 py-2 fs-6">Kazakhstan</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-snowflake fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Almaty, Kazakhstan</h4>
                                </div>
                                <p class="mb-3">Pristine lakes, snowy peaks, and breathtaking mountain scenery — with trusted Pure Veg Jain-friendly dining options.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="kazakhstan" class="btn btn-outline-secondary btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book Kazakhstan Tour" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: Packages & Visa -->
            <div class="tab-pane fade" id="tab-packages" role="tabpanel">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-success h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/dubaipackage.jpg" class="img-fluid w-100" alt="Dubai holiday packages for Jain and vegetarian families with hotel and tours" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-success px-3 py-2 fs-6">From AED 2,599</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-suitcase fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Dubai Packages</h4>
                                </div>
                                <p class="mb-3">Complete Dubai vacation packages including accommodation, tours, and activities. Perfect for Jain families and groups.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="dubai-family-holidays" class="btn btn-outline-success btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a Dubai Holiday Package" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-success h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Jain friendly hotel booking in Dubai with vegetarian room service" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-success px-3 py-2 fs-6">Best Rates</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-hotel fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">Hotel Booking</h4>
                                </div>
                                <p class="mb-3">Secure the best hotel deals in Dubai. From budget-friendly to luxury accommodations, we have options for every traveler.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="https://wa.me/971585945007?text=I need hotel booking in Dubai" target="_blank" class="btn btn-outline-success btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>Enquire</a>
                                    <a href="https://wa.me/971585945007?text=I want to book a hotel in Dubai" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-white rounded border border-success h-100 overflow-hidden">
                            <div class="position-relative">
                                <img src="img/services/visa.webp" class="img-fluid w-100" alt="UAE tourist visa services for Indian travelers and families" style="height:250px;object-fit:cover;" loading="lazy" decoding="async">
                                <div class="position-absolute top-0 end-0 m-3"><span class="badge bg-success px-3 py-2 fs-6">From AED 350</span></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="service-icon me-3"><i class="fa fa-passport fa-3x text-primary"></i></div>
                                    <h4 class="mb-0">UAE Visa</h4>
                                </div>
                                <p class="mb-3">Fast and reliable UAE visa processing for tourists and business travelers. 30-day, 60-day, and transit visas available.</p>
                                <div class="d-flex gap-2 flex-wrap">
                                    <a href="uae-visa" class="btn btn-outline-success btn-sm rounded-pill"><i class="fa fa-info-circle me-1"></i>View Details</a>
                                    <a href="https://wa.me/971585945007?text=I need help with UAE Visa" target="_blank" class="btn btn-primary btn-sm rounded-pill"><i class="fab fa-whatsapp me-1"></i>Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="text-center">
                    <a class="btn btn-primary rounded-pill py-3 px-5"
                        href="https://wa.me/971585945007?text=I want to know more about your services">
                        <i class="fab fa-whatsapp me-2"></i>Contact Us for More Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Popular Destinations Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Explore the World</h5>
            <h2 class="mb-4">Popular Jain-Friendly Destinations</h2>
            <p class="mb-0">Discover stunning locations with guaranteed pure vegetarian and Jain-friendly dining
                arrangements.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded border border-primary h-100 overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img src="img/services/International_tour.jpeg" class="img-fluid w-100" alt="Baku"
                            style="height: 250px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-primary px-3 py-2 fs-6">Baku</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4>Baku, Azerbaijan</h4>
                        <p class="text-muted">Stunning architecture and rich culture with authentic vegetarian meals.
                        </p>
                        <a href="https://wa.me/971585945007?text=I want to know about Baku packages"
                            class="btn btn-outline-primary rounded-pill mt-3">View Packages</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded border border-secondary h-100 overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img src="img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.webp" class="img-fluid w-100"
                            alt="Georgia" style="height: 250px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2 fs-6">Georgia</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4>Tbilisi, Georgia</h4>
                        <p class="text-muted">Majestic mountains and historical sites with specialized Jain care.</p>
                        <a href="georgia" class="btn btn-outline-secondary rounded-pill mt-3">View Packages</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded border border-success h-100 overflow-hidden shadow-sm">
                    <div class="position-relative">
                        <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Almaty"
                            style="height: 250px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success px-3 py-2 fs-6">Almaty</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4>Almaty, Kazakhstan</h4>
                        <p class="text-muted">Pristine lakes and snowy peaks with reliable Pure Veg options.</p>
                        <a href="https://wa.me/971585945007?text=I want to know about Almaty packages"
                            class="btn btn-outline-success rounded-pill mt-3">View Packages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Destinations End -->

<!-- Testimonials Section Start -->
<div class="container-fluid bg-light testimonials-section py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonials</h5>
            <h2 class="mb-4">What 2,000+ Jain Families Say About Us</h2>
            <p class="mb-0">Real reviews from real families who trusted us with their Dubai vacations.</p>
        </div>

        <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="testimonial-card-new bg-white rounded-4 p-5 shadow-sm text-center">
                                <div class="mb-3">
                                    <i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i>
                                </div>
                                <i class="fa fa-quote-left fa-2x text-primary opacity-25 mb-3 d-block"></i>
                                <p class="fs-5 mb-4 fst-italic">"Arihant Travels made our Dubai trip absolutely perfect. The Jain food arrangements were flawless — even on the desert safari. Shweta Ji personally ensured our dietary needs were met at every step. Highly recommended for every Jain family!"</p>
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width:55px;height:55px;flex-shrink:0;"><i class="fa fa-user text-white fa-lg"></i></div>
                                    <div class="text-start">
                                        <h5 class="mb-0">Shah Family</h5>
                                        <small class="text-muted"><i class="fa fa-map-marker-alt me-1"></i>Mumbai, India</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="testimonial-card-new bg-white rounded-4 p-5 shadow-sm text-center">
                                <div class="mb-3">
                                    <i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i>
                                </div>
                                <i class="fa fa-quote-left fa-2x text-primary opacity-25 mb-3 d-block"></i>
                                <p class="fs-5 mb-4 fst-italic">"Traveling as pure vegetarians can be stressful, but Arihant took care of everything. We enjoyed delicious Jain meals and skipped the queues at Burj Khalifa. The team was responsive on WhatsApp throughout the trip — felt like family!"</p>
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:55px;height:55px;flex-shrink:0;"><i class="fa fa-user text-white fa-lg"></i></div>
                                    <div class="text-start">
                                        <h5 class="mb-0">Mehta Family</h5>
                                        <small class="text-muted"><i class="fa fa-map-marker-alt me-1"></i>Ahmedabad, India</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="testimonial-card-new bg-white rounded-4 p-5 shadow-sm text-center">
                                <div class="mb-3">
                                    <i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i>
                                </div>
                                <i class="fa fa-quote-left fa-2x text-primary opacity-25 mb-3 d-block"></i>
                                <p class="fs-5 mb-4 fst-italic">"Booked the Baku international tour for our family of 8 including elderly parents. Everything was pre-arranged — vegetarian restaurants confirmed, hotel with Jain-friendly kitchen, private coach. Zero stress trip. Will book again for Georgia!"</p>
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width:55px;height:55px;flex-shrink:0;"><i class="fa fa-user text-white fa-lg"></i></div>
                                    <div class="text-start">
                                        <h5 class="mb-0">Jain Family (Sheth)</h5>
                                        <small class="text-muted"><i class="fa fa-map-marker-alt me-1"></i>Surat, India</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="testimonial-card-new bg-white rounded-4 p-5 shadow-sm text-center">
                                <div class="mb-3">
                                    <i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star-half-alt" style="color:#f0b429;"></i>
                                </div>
                                <i class="fa fa-quote-left fa-2x text-primary opacity-25 mb-3 d-block"></i>
                                <p class="fs-5 mb-4 fst-italic">"We specifically needed the hot air balloon with a pure Jain breakfast and Arihant arranged it flawlessly. The sunrise over the desert was unforgettable. First time we did not worry about asking what was in the food. Truly thoughtful service."</p>
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:55px;height:55px;flex-shrink:0;"><i class="fa fa-user text-white fa-lg"></i></div>
                                    <div class="text-start">
                                        <h5 class="mb-0">Kothari Couple</h5>
                                        <small class="text-muted"><i class="fa fa-map-marker-alt me-1"></i>Jaipur, India</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="testimonial-card-new bg-white rounded-4 p-5 shadow-sm text-center">
                                <div class="mb-3">
                                    <i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i>
                                </div>
                                <i class="fa fa-quote-left fa-2x text-primary opacity-25 mb-3 d-block"></i>
                                <p class="fs-5 mb-4 fst-italic">"As a family from Kenya, we were nervous about finding pure Jain food in Dubai. Arihant Travels was recommended by our community and delivered beyond expectations. Even the dhow cruise had specially prepared Jain thali. Wonderful — will refer everyone!"</p>
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width:55px;height:55px;flex-shrink:0;"><i class="fa fa-user text-white fa-lg"></i></div>
                                    <div class="text-start">
                                        <h5 class="mb-0">Doshi Family</h5>
                                        <small class="text-muted"><i class="fa fa-map-marker-alt me-1"></i>Nairobi, Kenya</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev testimonial-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next testimonial-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- Dot Indicators -->
            <div class="carousel-indicators testimonial-indicators">
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Review 1"></button>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1" aria-label="Review 2"></button>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2" aria-label="Review 3"></button>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="3" aria-label="Review 4"></button>
                <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="4" aria-label="Review 5"></button>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" class="btn btn-primary rounded-pill py-3 px-5 me-2">
                <i class="fab fa-google me-2"></i>Read Our Google Reviews
            </a>
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" class="btn btn-outline-primary rounded-pill py-3 px-5">
                <i class="fa fa-star me-2"></i>Leave Us a Review
            </a>
        </div>
    </div>
</div>
<!-- Testimonials Section End -->

<!-- Popular Excursions Start -->
<div class="container-fluid excursions py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Popular Attractions</h5>
            <h2 class="mb-4">Dubai Excursions</h2>
            <p class="mb-0">Discover Dubai's most iconic attractions and experiences. Book your tickets now and skip
                the queues!</p>
        </div>

        <div class="row g-4">
            <!-- Burj Khalifa -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/burjkhalifa/BK-1.webp" class="img-fluid w-100" alt="Burj Khalifa"
                            style="height: 200px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 149</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Burj Khalifa</h5>
                        <p class="mb-0 small">Visit the world's tallest building and enjoy breathtaking views from
                            the observation deck.</p>
                    </div>
                </div>
            </div>

            <!-- Museum of the Future -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/MOFT/MOFT1.webp" class="img-fluid w-100" alt="Museum of the Future"
                            style="height: 200px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 149</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Museum of the Future</h5>
                        <p class="mb-0 small">Experience innovation and technology in this iconic architectural
                            masterpiece.</p>
                    </div>
                </div>
            </div>

            <!-- Miracle Garden -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/MiracleGarden/MG1.webp" class="img-fluid w-100" alt="Miracle Garden"
                            style="height: 200px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 95</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Miracle Garden</h5>
                        <p class="mb-0 small">Explore the world's largest natural flower garden with over 150
                            million blooming flowers.</p>
                    </div>
                </div>
            </div>

            <!-- Global Village -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/GlobalVillage/GB1.webp" class="img-fluid w-100" alt="Global Village"
                            style="height: 200px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 25</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Global Village</h5>
                        <p class="mb-0 small">Experience diverse cultures, shopping, and entertainment from around
                            the world.</p>
                    </div>
                </div>
            </div>

            <!-- Dubai Frame -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/Dubaiframe/DF1.webp" class="img-fluid w-100" alt="Dubai Frame"
                            style="height: 200px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 52</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Dubai Frame</h5>
                        <p class="mb-0 small">Witness panoramic views of old and new Dubai from this iconic
                            landmark.</p>
                    </div>
                </div>
            </div>

            <!-- The View at The Palm -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/viewatthepalm/vp1.webp" class="img-fluid w-100"
                            alt="The View at The Palm" style="height: 200px; object-fit: cover;" loading="lazy"
                            decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 110</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">The View at The Palm</h5>
                        <p class="mb-0 small">Enjoy 360-degree views of Palm Jumeirah and the Arabian Gulf from the
                            outdoor terrace.</p>
                    </div>
                </div>
            </div>

            <!-- AYA Universe -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/AyaUniverse/ayu1.webp" class="img-fluid w-100" alt="AYA Universe"
                            style="height: 200px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 135</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">AYA Universe</h5>
                        <p class="mb-0 small">Discover vibrant, interactive experiences in this award-winning
                            immersive attraction.</p>
                    </div>
                </div>
            </div>

            <!-- Atlantis Aquaventure -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/excursion/Atlantis/waterpark1.webp" class="img-fluid w-100"
                            alt="Atlantis Aquaventure" style="height: 200px; object-fit: cover;" loading="lazy"
                            decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 330</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Atlantis Aquaventure</h5>
                        <p class="mb-0 small">Experience thrilling water slides, marine encounters, and a private
                            beach at Dubai's premier waterpark.</p>
                    </div>
                </div>
            </div>

            <!-- Yas Island Multi-Park -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/themepark/images/warner-pros-2.webp" class="img-fluid w-100"
                            alt="Yas Island Multi-Park" style="height: 200px; object-fit: cover;" loading="lazy"
                            decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 400</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Yas Island Multi-Park</h5>
                        <p class="mb-0 small">Access 2, 3, or 4 of Abu Dhabi's world-class theme parks (Ferrari World,
                            SeaWorld, etc.) with one pass.</p>
                    </div>
                </div>
            </div>

            <!-- Lotus Mega Yacht -->
            <div class="col-lg-3 col-md-6">
                <div class="excursion-item bg-white rounded border border-secondary h-100 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/dhowcruise/mega_yacht_1.jpg" class="img-fluid w-100" alt="Lotus Mega Yacht"
                            style="height: 200px; object-fit: cover;" loading="lazy" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-secondary px-3 py-2">AED 249</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="mb-2">Lotus Mega Yacht Cruise</h5>
                        <p class="mb-0 small">5-star dinner cruise on the world's largest commercial sailing yacht with
                            international buffet and pool access.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="text-center">
                    <a class="btn btn-secondary rounded-pill py-3 px-5"
                        href="https://wa.me/971585945007?text=I want to book excursion tickets">
                        <i class="fab fa-whatsapp me-2"></i>Book Excursion Tickets
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Excursions End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Travel Insights</h5>
            <h2 class="mb-4">Latest Dubai Travel Blog</h2>
            <p class="mb-0">Discover expert guides, tips, and insights for your perfect Dubai adventure. From
                Jain-friendly travel to must-visit attractions.</p>
        </div>

        <div class="row g-4">
            <!-- Featured Blog 1: Jain Family Dubai Trip Guide -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="blog-card bg-white rounded overflow-hidden h-100 position-relative border-3 border border-secondary">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-secondary px-3 py-2 fs-6"
                        style="z-index: 10;">NEW! 🌟</span>
                    <img src="img/carousel-4.jpg" class="img-fluid w-100" alt="Jain Family Dubai Trip"
                        style="height: 220px; object-fit: cover;" loading="lazy" decoding="async">
                    <div class="p-4">
                        <h4 class="mb-3">Jain Family Dubai Trip Guide</h4>
                        <p class="text-muted mb-3">Complete planning guide for Jain families visiting Dubai with
                            guaranteed pure vegetarian meals, temple darshan arrangements, and culturally sensitive
                            experiences.</p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Pure Veg Meals</span>
                            <span class="badge bg-primary bg-opacity-10 text-dark">Temple Visits</span>
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Free PDF</span>
                        </div>
                        <a href="blog/jain-family-dubai-trip-guide" class="btn btn-primary btn-sm rounded-pill">Read
                            Full Guide</a>
                    </div>
                </div>
            </div>

            <!-- Featured Blog 2: Dubai Desert Safari -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="blog-card bg-white rounded overflow-hidden h-100 position-relative border-3 border border-secondary">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-secondary px-3 py-2 fs-6"
                        style="z-index: 10;">NEW! 🏜️</span>
                    <img src="img/services/safari.webp" class="img-fluid w-100" alt="Dubai Desert Safari"
                        style="height: 220px; object-fit: cover;" loading="lazy" decoding="async">
                    <div class="p-4">
                        <h4 class="mb-3">Dubai Desert Safari Ultimate Guide</h4>
                        <p class="text-muted mb-3">Complete guide to desert safari experiences - from dune bashing
                            to cultural encounters, luxury safaris to adventure tours with vegetarian meal options.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Dune Bashing</span>
                            <span class="badge bg-primary bg-opacity-10 text-dark">From AED 99</span>
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Veg Meals</span>
                        </div>
                        <a href="blog/dubai-desert-safari-ultimate-guide"
                            class="btn btn-primary btn-sm rounded-pill">Read Full Guide</a>
                    </div>
                </div>
            </div>

            <!-- Featured Blog 3: UAE Visa Guide -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="blog-card bg-white rounded overflow-hidden h-100 position-relative border-3 border border-primary">
                    <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2 fs-6"
                        style="z-index: 10;">NEW! 📋</span>
                    <img src="img/services/visa.webp" class="img-fluid w-100" alt="UAE Visa Guide"
                        style="height: 220px; object-fit: cover;" loading="lazy" decoding="async">
                    <div class="p-4">
                        <h4 class="mb-3">UAE Visa Types Complete Guide</h4>
                        <p class="text-muted mb-3">Discover all UAE visa types including tourist visas, Golden Visa,
                            and residency options for 2025. Complete guide with requirements and processing times.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-dark">Tourist Visa</span>
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Golden Visa</span>
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Fast Processing</span>
                        </div>
                        <a href="blog/uae-visa-comprehensive-guide" class="btn btn-primary btn-sm rounded-pill">Read
                            Full Guide</a>
                    </div>
                </div>
            </div>

            <!-- Regular Blog 4: Burj Khalifa -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card bg-white rounded overflow-hidden h-100 border">
                    <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Burj Khalifa"
                        style="height: 220px; object-fit: cover;" loading="lazy" decoding="async">
                    <div class="p-4">
                        <h4 class="mb-3">Burj Khalifa: Icon of Modern Dubai</h4>
                        <p class="text-muted mb-3">Visit the world's tallest building at 828 meters. Complete guide
                            to observation decks, tickets, best visiting times, and breathtaking views.</p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-dark">828m Tall</span>
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Observation Deck</span>
                        </div>
                        <a href="blog/burj-khalifa-icon-of-dubai"
                            class="btn btn-outline-primary btn-sm rounded-pill">Read Burj Khalifa Guide</a>
                    </div>
                </div>
            </div>

            <!-- Regular Blog 5: Dubai Family Tour -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card bg-white rounded overflow-hidden h-100 border">
                    <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Dubai Family Tour"
                        style="height: 220px; object-fit: cover;" loading="lazy" decoding="async">
                    <div class="p-4">
                        <h4 class="mb-3">Dubai Family Adventure Itinerary</h4>
                        <p class="text-muted mb-3">Plan the perfect 5 to 7-day family trip to Dubai with this
                            itinerary packed with kid-friendly activities, iconic landmarks, and essential travel
                            tips.</p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-secondary bg-opacity-10 text-dark">5-7 Days</span>
                            <span class="badge bg-primary bg-opacity-10 text-dark">Family Fun</span>
                        </div>
                        <a href="blog/dubai-family-tour" class="btn btn-outline-primary btn-sm rounded-pill">Read Family
                            Tour Guide</a>
                    </div>
                </div>
            </div>

            <!-- Regular Blog 6: Dubai Attractions -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card bg-white rounded overflow-hidden h-100 border">
                    <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Dubai Attractions"
                        style="height: 220px; object-fit: cover;" loading="lazy" decoding="async">
                    <div class="p-4">
                        <h4 class="mb-3">Top Dubai Attractions & Activities</h4>
                        <p class="text-muted mb-3">Explore Dubai's must-visit attractions from Museum of the Future
                            to Dubai Frame, Miracle Garden, and world-class theme parks for all ages.</p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-secondary bg-opacity-10 text-dark">Top Attractions</span>
                            <span class="badge bg-primary bg-opacity-10 text-dark">Theme Parks</span>
                        </div>
                        <a href="blog" class="btn btn-outline-primary btn-sm rounded-pill">Explore All Blog Posts</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="blog" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fa fa-book-open me-2"></i>View All Blog Posts
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


</div>
</div>
<!-- Contact End -->

<!-- FAQPage Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Is Jain food strictly available on all tours?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we guarantee 100% pure vegetarian and Jain food options (no onion, garlic, or root vegetables) on all our signature tours, including the Desert Safari and Dhow Cruises."
            }
        },
        {
            "@type": "Question",
            "name": "Do you provide group packages for large families?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! We specialize in large family and group arrangements, providing private vehicles and customized itineraries to suit multi-generational family needs."
            }
        },
        {
            "@type": "Question",
            "name": "Can we visit the Jain temple in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Dubai has a Jain derasar in Bur Dubai, and we can include it in your city tour so you can perform darshan comfortably."
            }
        },
        {
            "@type": "Question",
            "name": "What is the best desert safari option for Jain families in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our Standard, VIP, and Premium desert safaris all include 100% pure vegetarian and Jain-certified dinner buffets — no onion, no garlic, no root vegetables. The VIP Safari is most popular among Jain families as it includes a private seating area at the camp. Prices start from AED 99 per person. Book via WhatsApp for group discounts."
            }
        },
        {
            "@type": "Question",
            "name": "Is Arihant Travels a registered travel agency in the UAE?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, Arihant Travels is a fully registered and licensed travel agency based in Dubai, UAE, founded in 2022 by Shweta Jain. We specialize exclusively in Jain-friendly and vegetarian travel across Dubai, UAE, and international destinations. We provide 24/7 WhatsApp support throughout your trip."
            }
        }
    ]
}
</script>

<!-- FAQ Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">FAQ</h5>
            <h2 class="mb-4">Frequently Asked Questions About Jain Travel in Dubai</h2>
            <p class="mb-0">Everything you need to know about planning your Jain-friendly Dubai vacation.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion faq-accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                Is Jain food strictly available on all tours?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we guarantee 100% pure vegetarian and Jain food options (no onion, garlic, or root
                                vegetables) on all our signature tours, including the Desert Safari and Dhow Cruises.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                Do you provide group packages for large families?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! We specialize in large family and group arrangements, providing private
                                vehicles and customized itineraries to suit multi-generational family needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                Can we visit the Jain temple in Dubai?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes. Dubai has a <a href="/jain-temple-dubai">Jain derasar in Bur Dubai</a>, and we can include it in your city tour so you can perform darshan comfortably.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                What is the best desert safari option for Jain families in Dubai?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our Standard, VIP, and Premium desert safaris all include 100% pure vegetarian and Jain-certified dinner buffets — no onion, no garlic, no root vegetables. We offer private vehicle options for families who prefer not to share transport. The VIP Safari is most popular among Jain families as it includes a private seating area at the camp. Prices start from AED 99 per person. Book via WhatsApp for group discounts.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                Is Arihant Travels a registered travel agency in the UAE?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, Arihant Travels is a fully registered and licensed travel agency based in Dubai, UAE, founded in 2022 by Shweta Jain. We specialize exclusively in Jain-friendly and vegetarian travel across Dubai, UAE, and international destinations. Our clients range from NRI families visiting Dubai for the first time to Jain community groups from India, Kenya, the UK, and the USA. We provide 24/7 WhatsApp support throughout your trip.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-4">Get Exclusive Travel Deals</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers, travel tips, and
                updates on our latest Jain-friendly Dubai packages. Be the first to know about special discounts and new
                tour destinations!
            </p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->


<?php include 'includes/footer.php'; ?>