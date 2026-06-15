<?php
// Page SEO Variables
$pageTitle = "Dubai Holiday Packages 2026 | Jain & Veg Tours from ₹34,500";
$pageDescription = "Dubai holiday packages 2026 with pure Jain & vegetarian food. 7 curated tours from ₹34,500: family, honeymoon, budget, kids, senior. BAPS Mandir included.";
$pageKeywords = "Dubai packages with Jain food 2026, Dubai holiday packages for families, vegetarian Dubai tour packages, Dubai winter escape Jain food, Dubai honeymoon package veg, Jain friendly Dubai holidays, budget Dubai packages for Indians, Dubai Abu Dhabi tour Jain, Arihant Travel Dubai, Dubai Jain package, Dubai Gujarati package, Dubai group tour, senior citizen Dubai package, BAPS temple Abu Dhabi package, Swaminarayan temple tour Dubai, customized Dubai holiday from India, Dubai package in INR, pure veg Dubai tour, best Dubai packages from India 2026";
$pageCanonical = "https://arihantlink.com/dubai-holiday-packages";
$currentPage = "holiday-packages";

// Breadcrumb Variables
$pageHeading = "Dubai Holiday Packages";
$breadcrumbCategory = "Holidays";
$breadcrumbCategoryLink = "#";
$breadcrumbBg = "img/dubaiholiday/burj-khalifa-dubai-skyline-hero.jpg";
$breadcrumbOverlay = false;

// Package Data
$packages = [
    [
        "slug" => "dubai-winter-escape",
        "title" => "Dubai Winter Escape",
        "duration" => "5 Nights 6 Days",
        "description" => "Our most popular package — Burj Khalifa, VIP desert safari, Marina dhow cruise, Miracle Garden, Global Village & Abu Dhabi day tour. Ideal for first-timers wanting the complete Dubai experience with Jain meals.",
        "image" => "img/dubaiholiday/burj-khalifa-dubai-skyline-hero.jpg",
        "price" => "From 2,499 AED",
        "priceINR" => "≈ ₹57,500",
        "badge" => "Most Popular",
        "bestFor" => "First-timers & families"
    ],
    [
        "slug" => "dubai-honeymoon-package",
        "title" => "Dubai Special Honeymoon Package",
        "duration" => "4 Nights 5 Days",
        "description" => "5-star luxury stay with honeymoon room setup, private desert safari with candlelit dinner, sunset Burj Khalifa access, Marina dhow cruise & Miracle Garden photoshoot. Pure Jain meals throughout.",
        "image" => "img/dubaiholiday/Dubai-Romantic-Atlantis-Supplied.jpg",
        "price" => "From 3,499 AED",
        "priceINR" => "≈ ₹80,500",
        "badge" => "Romantic",
        "bestFor" => "Newlywed couples"
    ],
    [
        "slug" => "dubai-abu-dhabi-deal",
        "title" => "Dubai And Abu Dhabi Deal",
        "duration" => "5 Nights 6 Days",
        "description" => "Best of both emirates — Dubai's skyline icons plus Abu Dhabi's Sheikh Zayed Mosque, BAPS Swaminarayan Mandir & Ferrari World. Includes desert safari, Burj Khalifa & pure Jain vegetarian food.",
        "image" => "img/dubaiholiday/Sheikh-Zayed-Grand-Mosque.jpg",
        "price" => "From 3,299 AED",
        "priceINR" => "≈ ₹75,900",
        "badge" => "Best Value",
        "bestFor" => "Families wanting both cities"
    ],
    [
        "slug" => "budget-friendly-dubai",
        "title" => "Budget Friendly Dubai Packages",
        "duration" => "3 Nights 4 Days",
        "description" => "Dubai's top highlights at the lowest price — city tour, Dubai Frame, desert safari with BBQ dinner & Creek dhow cruise. Includes 3★/4★ hotel, Nol metro card & Jain-friendly meal options.",
        "image" => "img/dubaiholiday/Dubai Frame.webp",
        "price" => "From 1,499 AED",
        "priceINR" => "≈ ₹34,500",
        "badge" => "Lowest Price",
        "bestFor" => "Budget-conscious travelers"
    ],
    [
        "slug" => "arabian-nights-dubai",
        "title" => "Arabian Nights Dubai Package",
        "duration" => "4 Nights 5 Days",
        "description" => "A cultural deep-dive into Arabia — premium desert safari, traditional souk tours, Old Dubai heritage walk, dhow cruise with live entertainment & Bedouin camp dinner. Vegetarian & Jain meals included.",
        "image" => "img/dubaiholiday/safari.webp",
        "price" => "From 2,499 AED",
        "priceINR" => "≈ ₹57,500",
        "badge" => "Cultural",
        "bestFor" => "Culture enthusiasts"
    ],
    [
        "slug" => "dubai-for-kids",
        "title" => "Dubai for Kids",
        "duration" => "5 Nights 6 Days",
        "description" => "Designed for families with children — Legoland, IMG Worlds, Dubai Aquarium, Dolphinarium & a fun desert safari. Kid-friendly Jain meals at every stop. Parents relax, kids have a blast.",
        "image" => "img/dubaiholiday/themepark.webp",
        "price" => "From 2,799 AED",
        "priceINR" => "≈ ₹64,400",
        "badge" => "Kids Special",
        "bestFor" => "Families with children"
    ],
    [
        "slug" => "dubai-family-holidays",
        "title" => "Dubai Family Holidays",
        "duration" => "6 Nights 7 Days",
        "description" => "Our most comprehensive family package — Burj Khalifa, Global Village, Miracle Garden, Abu Dhabi tour with BAPS Mandir, desert safari & dhow cruise. 7 full days of pure Jain meals and family comfort.",
        "image" => "img/dubaiholiday/global-village-2.webp",
        "price" => "From 3,499 AED",
        "priceINR" => "≈ ₹80,500",
        "badge" => "Premium Family",
        "bestFor" => "Large families & groups"
    ]
];

// JSON-LD Schema
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Dubai Holiday Packages with Jain Food",
  "description": "A collection of 7 curated Dubai tour packages focusing on family comfort and Jain vegetarian meal options.",
  "url": "' . $pageCanonical . '",
  "itemListElement": [';

foreach ($packages as $index => $pkg) {
    $schemaMarkup .= '
    {
      "@type": "ListItem",
      "position": ' . ($index + 1) . ',
      "item": {
        "@type": "Tour",
        "name": "' . $pkg['title'] . '",
        "description": "' . $pkg['description'] . '",
        "url": "https://arihantlink.com/' . $pkg['slug'] . '.php",
        "offers": {
          "@type": "Offer",
          "price": "' . str_replace(['From ', ' AED'], '', $pkg['price']) . '",
          "priceCurrency": "AED"
        }
      }
    }' . ($index < count($packages) - 1 ? ',' : '');
}

$schemaMarkup .= '
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Arihant Travel",
  "url": "https://arihantlink.com",
  "telephone": "+971585945007",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "reviewCount": "2000"
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
      "name": "Can I customize my Dubai holiday package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely! All our packages are flexible. You can add extra nights, upgrade your hotel, or include additional activities and tours based on your interests. Contact us on WhatsApp for a free custom quote."
      }
    },
    {
      "@type": "Question",
      "name": "Are flights included in the package price?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our listed prices typically cover accommodation, airport transfers, and sightseeing. We can also assist you with flight bookings at competitive rates if requested."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide Jain and Vegetarian food during the tours?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, one of our specialties is arranging Jain and pure vegetarian meals (no onion, no garlic, no root vegetables). We partner with restaurants that understand these dietary requirements specifically. All 7 packages include guaranteed Jain-friendly meal options."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cheapest Dubai package for Indian families?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our Budget Friendly Dubai package starts from AED 1,499 (approximately ₹34,500 per person) for 3 nights and 4 days. It includes hotel, city tour, Dubai Frame, desert safari, dhow cruise dinner, and Jain meal options."
      }
    },
    {
      "@type": "Question",
      "name": "Can I visit BAPS Swaminarayan Mandir in Abu Dhabi during my Dubai trip?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! Our Dubai & Abu Dhabi Deal and Dubai Family Holidays packages include a full-day Abu Dhabi tour with BAPS Mandir visit. For other packages, you can add an Abu Dhabi day trip from AED 150 per person. We handle the pre-registration required for the temple visit."
      }
    },
    {
      "@type": "Question",
      "name": "Is Dubai safe for Indian families with children?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Dubai is one of the safest destinations in the world for families. Our Dubai For Kids package is specifically designed with child-friendly activities like Legoland, Dubai Aquarium, and Dolphinarium. We provide dedicated family vehicles and kid-friendly Jain meals at every stop."
      }
    }
  ]
}
</script>';
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Trust Stats Bar -->
<div class="container-fluid bg-white border-bottom py-3">
    <div class="container">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fas fa-users fa-lg text-primary"></i>
                    <div class="text-start">
                        <strong class="d-block lh-1">2,000+</strong>
                        <small class="text-muted">Families Served</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fas fa-star fa-lg" style="color:#f0b429;"></i>
                    <div class="text-start">
                        <strong class="d-block lh-1">4.8/5</strong>
                        <small class="text-muted">Google Rating</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fas fa-map-marker-alt fa-lg text-danger"></i>
                    <div class="text-start">
                        <strong class="d-block lh-1">Based in Dubai</strong>
                        <small class="text-muted">On-Ground Support</small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <i class="fas fa-leaf fa-lg text-success"></i>
                    <div class="text-start">
                        <strong class="d-block lh-1">100% Jain Food</strong>
                        <small class="text-muted">On Every Tour</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Introduction Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Dubai Holiday Packages 2026</h5>
            <h1 class="mb-4 h2">Choose Your Perfect Dubai Holiday — With Guaranteed Jain & Vegetarian Food</h1>
            <p class="mb-3">7 handcrafted packages from ₹34,500 per person — family adventures, romantic honeymoons, budget escapes, kids' specials & cultural experiences. Every package includes hotel, transfers, sightseeing, and <strong>100% pure Jain/vegetarian meals</strong>.</p>
            <p class="text-muted mb-0"><small>Trusted by 2,000+ Indian families from Ahmedabad, Mumbai, Surat, Delhi & beyond. 4.8★ Google rating.</small></p>
        </div>

        <div class="row g-4">
            <?php foreach ($packages as $pkg): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 holiday-card position-relative">
                        <?php if ($pkg['badge']): ?>
                            <span
                                class="badge bg-primary position-absolute top-0 end-0 m-3 z-index-1"><?php echo $pkg['badge']; ?></span>
                        <?php endif; ?>
                        <div class="position-relative overflow-hidden">
                            <a href="<?php echo $pkg['slug']; ?>.php">
                                <img src="<?php echo $pkg['image']; ?>" class="card-img-top holiday-img"
                                    alt="<?php echo $pkg['title']; ?>" style="height: 250px; object-fit: cover;">
                            </a>
                            <div
                                class="holiday-duration position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded shadow-sm">
                                <small class="fw-bold text-primary"><?php echo $pkg['duration']; ?></small>
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title fw-bold mb-3">
                                <a href="<?php echo $pkg['slug']; ?>.php"
                                    class="text-dark text-decoration-none hover-primary">
                                    <?php echo $pkg['title']; ?>
                                </a>
                            </h5>
                            <p class="card-text text-muted mb-3"><?php echo $pkg['description']; ?></p>
                            <?php if (!empty($pkg['bestFor'])): ?>
                                <p class="mb-3"><small class="badge bg-light text-dark border"><i class="fas fa-check-circle text-success me-1"></i>Best for: <?php echo $pkg['bestFor']; ?></small></p>
                            <?php endif; ?>

                            <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                                <div class="holiday-price">
                                    <small class="text-muted d-block mb-1">Starting from</small>
                                    <span class="h6 fw-bold text-dark mb-0"><?php echo $pkg['price']; ?></span>
                                    <small class="text-muted d-block"><?php echo $pkg['priceINR']; ?> per person</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="<?php echo $pkg['slug']; ?>.php"
                                        class="btn btn-primary btn-sm rounded-pill px-3">
                                        View Itinerary
                                    </a>
                                    <a href="https://wa.me/971585945007?text=Hi, I'm interested in the <?php echo urlencode($pkg['title']); ?> package. Please share more details."
                                        target="_blank" class="btn btn-outline-primary btn-sm rounded-pill px-3"
                                        title="Chat on WhatsApp">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Introduction Section End -->



<!-- Why Choose Us Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Why Choose Us</h5>
            <h2 class="mb-4">Why 2,000+ Indian Families Book Their Dubai Trip with Arihant Travel</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-utensils fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">100% Pure Jain & Veg Meals</h5>
                        <p class="card-text">No onion, no garlic, no root vegetables — guaranteed on every meal, every tour. We partner with restaurants that truly understand Jain dietary requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt fa-3x text-danger"></i>
                        </div>
                        <h5 class="card-title">We're Based IN Dubai</h5>
                        <p class="card-text">Unlike Indian tour operators selling packages remotely, we're physically in Dubai. Direct hotel relationships, on-ground support, no middleman markups.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fab fa-whatsapp fa-3x text-success"></i>
                        </div>
                        <h5 class="card-title">24/7 WhatsApp Support</h5>
                        <p class="card-text">From landing to departure — our team is one message away. Hindi, Gujarati & English-speaking coordinators available throughout your trip.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-hotel fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Handpicked Hotels</h5>
                        <p class="card-text">Every hotel is personally vetted by our team. Centrally located, family-friendly, with Indian-friendly amenities like kettles and vegetarian breakfast options.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-rupee-sign fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Pay in INR or AED</h5>
                        <p class="card-text">We accept UPI, Google Pay, bank transfers in INR, and all international cards. No hidden charges — the price you see is the price you pay.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-om fa-3x text-warning"></i>
                        </div>
                        <h5 class="card-title">Temple & Darshan Tours</h5>
                        <p class="card-text">Visit Jain temples in Dubai (Bur Dubai) and the BAPS Swaminarayan Mandir in Abu Dhabi. We handle pre-registration and arrange comfortable transport.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us End -->

<!-- Social Proof / Testimonials Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Happy Travelers</h5>
            <h2 class="mb-4">What Our Guests Say</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="bg-light rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic mb-2">"The Jain food was perfect — pure satvik, no onion, no garlic. Our family of 15 from Ahmedabad had the best Dubai trip! Shweta Ji handled everything personally."</p>
                    <p class="fw-bold mb-0">Shah Family <small class="text-muted fw-normal">— Ahmedabad, Gujarat</small></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic mb-2">"As strict vegetarians, finding proper food abroad is always a worry. Arihant Travel eliminated that completely. Desert safari dinner was amazing!"</p>
                    <p class="fw-bold mb-0">Mehta Family <small class="text-muted fw-normal">— Mumbai, Maharashtra</small></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded p-4 h-100 shadow-sm">
                    <div class="mb-2"><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i></div>
                    <p class="fst-italic mb-2">"Being based in Dubai makes all the difference. When we had a last-minute change, their team was there in 30 minutes. No Indian agent can do that!"</p>
                    <p class="fw-bold mb-0">Jain Family <small class="text-muted fw-normal">— Surat, Gujarat</small></p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" class="btn btn-outline-primary rounded-pill py-2 px-4">
                <i class="fab fa-google me-2"></i>See All Google Reviews (4.8★)
            </a>
        </div>
    </div>
</div>
<!-- Social Proof / Testimonials End -->

<!-- FAQ Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">FAQs</h5>
            <h2 class="mb-4">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="holidayAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                Can I customize my Dubai holiday package?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#holidayAccordion">
                            <div class="accordion-body">
                                Absolutely! All our packages are flexible. You can add extra nights, upgrade your hotel,
                                or include additional activities and tours based on your interests.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2">
                                Are flights included in the package price?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#holidayAccordion">
                            <div class="accordion-body">
                                Our listed prices typically cover accommodation, airport transfers, and sightseeing. We
                                can also assist you with flight bookings at competitive rates if requested.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3">
                                Do you provide Jain/Vegetarian food during the tours?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#holidayAccordion">
                            <div class="accordion-body">
                                Yes, one of our specialties is arranging Jain and pure vegetarian meals (no onion, no garlic, no root vegetables). We partner with
                                restaurants that understand these dietary requirements specifically. All 7 packages include guaranteed Jain-friendly meal options.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq4">
                                What is the cheapest Dubai package for Indian families?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#holidayAccordion">
                            <div class="accordion-body">
                                Our <a href="budget-friendly-dubai.php">Budget Friendly Dubai</a> package starts from AED 1,499 (approximately ₹34,500 per person) for 3 nights and 4 days. It includes hotel, city tour, Dubai Frame, desert safari, dhow cruise dinner, and Jain meal options — everything you need for a memorable Dubai trip at the best price.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq5">
                                Can I visit BAPS Swaminarayan Mandir in Abu Dhabi during my Dubai trip?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#holidayAccordion">
                            <div class="accordion-body">
                                Yes! Our <a href="dubai-abu-dhabi-deal.php">Dubai & Abu Dhabi Deal</a> and <a href="dubai-family-holidays.php">Dubai Family Holidays</a> packages include a full-day Abu Dhabi tour with BAPS Mandir visit. For other packages, you can add an Abu Dhabi day trip from AED 150 per person. We handle the pre-registration required for the temple visit.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq6">
                                Is Dubai safe for Indian families with children?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#holidayAccordion">
                            <div class="accordion-body">
                                Dubai is one of the safest destinations in the world for families. Our <a href="dubai-for-kids.php">Dubai For Kids</a> package is specifically designed with child-friendly activities like Legoland, Dubai Aquarium, and Dolphinarium. We provide dedicated family vehicles and kid-friendly Jain meals at every stop.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->

<?php include 'includes/enquiry-form.php'; ?>

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-4">Get Exclusive Travel Deals</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers, travel tips, and
                updates on our latest Jain-friendly Dubai packages.</p>
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

<style>
    .holiday-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .holiday-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
    }

    .holiday-img {
        transition: transform 0.5s ease;
    }

    .holiday-card:hover .holiday-img {
        transform: scale(1.1);
    }

    .hover-primary:hover {
        color: var(--bs-primary) !important;
    }

    .z-index-1 {
        z-index: 1;
    }
</style>

<?php include 'includes/footer.php'; ?>