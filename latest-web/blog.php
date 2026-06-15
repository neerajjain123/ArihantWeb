<?php
// Page SEO Variables
$pageTitle = "Dubai & UAE Travel Blog 2026 | Arihant Travel";
$pageDescription = "Expert travel guides for Dubai & UAE: Jain dining, desert safari tips, UAE visa 2026, honeymoon ideas, theme parks. Trusted by 2,000+ Indian families.";
$pageKeywords = "Dubai travel blog 2026, Dubai travel tips, UAE travel guide 2026, Jain travel Dubai, vegetarian Dubai guide, Dubai vacation tips, Dubai honeymoon guide, UAE visa guide 2026, desert safari Dubai blog, Burj Khalifa guide";
$pageCanonical = "https://arihantlink.com/blog";
$currentPage   = "blog";
$breadcrumbBg  = "img/blog-1.jpg";   // og:image for social shares

// Category-filtered views (/blog?category=X) are navigational, not unique content.
// Mark them noindex so Google ignores them without blocking crawl access via robots.txt.
if (!empty($_GET['category'])) {
    $currentPage = 'blog-category';
    $pageCanonical = "https://arihantlink.com/blog"; // point canonical to the main blog page
}

// Blog Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Blog",
  "name": "Arihant Travel Blog",
  "description": "Expert travel guides, tips, and itineraries for Dubai, Abu Dhabi, and international destinations. Specializing in Jain-friendly and vegetarian travel.",
  "url": "https://arihantlink.com/blog",
  "publisher": {
    "@type": "Organization",
    "name": "Arihant Travel",
    "logo": {
      "@type": "ImageObject",
      "url": "https://arihantlink.com/img/logo.png"
    }
  },
  "blogPost": [
    {
      "@type": "BlogPosting",
      "headline": "Dubai Honeymoon Guide 2026: Romantic Packages & Places",
      "url": "https://arihantlink.com/blog/dubai-honeymoon-destination-guide"
    },
    {
      "@type": "BlogPosting",
      "headline": "Dubai Desert Safari Guide 2026: Evening, Morning & Luxury Safaris",
      "url": "https://arihantlink.com/blog/dubai-desert-safari-ultimate-guide"
    },
    {
      "@type": "BlogPosting",
      "headline": "Burj Khalifa: Complete Tickets, Height & Views Guide 2026",
      "url": "https://arihantlink.com/blog/burj-khalifa-icon-of-dubai"
    },
    {
      "@type": "BlogPosting",
      "headline": "UAE Visa Guide 2026: GCC Unified Visa, Golden Visa & New Rules",
      "url": "https://arihantlink.com/blog/uae-visa-2026-guide"
    },
    {
      "@type": "BlogPosting",
      "headline": "Jain Family Dubai Trip Guide 2026: Food, Temples & Itinerary",
      "url": "https://arihantlink.com/blog/jain-family-dubai-trip-guide"
    }
  ]
}
</script>
';

include 'includes/header.php';
?>

<!-- Hero Section Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4" style="font-family: 'Jost', sans-serif; font-weight: 700;">Travel Blog
        </h3>
        <p class="fs-5 text-white mb-0">14+ Expert Guides for Dubai, Abu Dhabi & Beyond — Trusted by 2,000+ Indian Families</p>
    </div>
</div>
<!-- Hero Section End -->

<!-- Breadcrumb Navigation -->
<div class="container-fluid bg-light py-3">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Blog</li>
        </ol>
    </div>
</div>

<!-- Blog Intro Section Start -->
<div class="container-fluid py-5">
    <div class="container py-3">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Latest Stories</h5>
            <h1 class="mb-4">Travel Insights & Guides</h1>
            <p class="mb-0">From Jain-friendly dining guides to UAE visa updates for 2026, desert safari tips, and honeymoon itineraries — everything you need to plan your perfect Dubai vacation. Written by our team with 8+ years of on-ground experience.
            </p>
        </div>
    </div>
</div>
<!-- Blog Intro Section End -->

<!-- Featured Blog Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-3">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img src="img/blogs/Honeymoon/honeymoon_dubai.webp" class="img-fluid rounded shadow-lg"
                    alt="Dubai Honeymoon Guide" style="height: 400px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-lg-6">
                <span class="badge bg-primary px-3 py-2 mb-3">Featured</span>
                <h2 class="mb-4">Dubai Honeymoon Destination: Complete Guide for Newlyweds 2026</h2>
                <p class="mb-4 text-muted">Discover why Dubai is the perfect honeymoon destination for newlyweds.
                    Explore romantic attractions, luxury hotels, fine dining, desert experiences, and create
                    unforgettable memories in this vibrant city.</p>
                <div class="d-flex align-items-center mb-4">
                    <div class="me-4">
                        <i class="fa fa-user text-primary me-2"></i>
                        <span>Arihant Travel Team</span>
                    </div>
                    <div>
                        <i class="fa fa-clock text-primary me-2"></i>
                        <span>12 min read</span>
                    </div>
                </div>
                <a href="blog/dubai-honeymoon-destination-guide" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fa fa-book-open me-2"></i>Read Full Guide
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Featured Blog End -->

<!-- Blog Grid Start -->
<div class="container-fluid py-5">
    <div class="container py-3">
        <div class="row g-4">
            <!-- Blog Card: Azerbaijan Guide -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100 border border-info">
                    <div class="position-relative">
                        <img src="img/baku/baku-night-city-panaroma-view.jpg" class="img-fluid w-100"
                            alt="Azerbaijan Travel Guide" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">International</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">The Ultimate Azerbaijan Travel Guide: 2026 Edition</h5>
                        <p class="text-muted mb-3 small">Explore the Land of Fire: From Baku's Flame Towers to the
                            mountain retreats of Gabala and Guba.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>15 min read</small>
                            <a href="blog/ultimate-azerbaijan-travel-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read Guide</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 1: Types of Visas -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/services/visa.webp" class="img-fluid w-100" alt="Dubai Visa Guide"
                            style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">Visa Guide</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Types of Visas Dubai Offers for Travelers: Complete Guide 2026</h5>
                        <p class="text-muted mb-3 small">Comprehensive guide to all UAE visa types including tourist,
                            transit, Golden Visa, and more.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>7 min read</small>
                            <a href="blog/uae-visa-comprehensive-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2: Kazakhstan Almaty -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/blogs/Almaty/kazakhstan-almaty.webp" class="img-fluid w-100"
                            alt="Kazakhstan Almaty" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">International</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Kazakhstan Almaty Travel Guide: Complete City Guide</h5>
                        <p class="text-muted mb-3 small">Explore Almaty's stunning landscapes, Big Almaty Lake, Medeu,
                            and Shymbulak with our expert guide.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>8 min read</small>
                            <a href="blog/kazakhstan-almaty-travel-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3: Georgia -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.webp" class="img-fluid w-100"
                            alt="Georgia Travel Guide" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">International</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Georgia Travel Guide 2026: Best of Tbilisi, Kazbegi & Svaneti</h5>
                        <p class="text-muted mb-3 small">Discover the hidden gem of the Caucasus with stunning
                            mountains, wine regions, and ancient culture.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>9 min read</small>
                            <a href="blog/georgia-travel-guide" class="btn btn-sm btn-outline-primary rounded-pill">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 4: Ferrari World -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/blogs/Ferrari-World/ferrariworld1.jpeg" class="img-fluid w-100"
                            alt="Ferrari World Abu Dhabi" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-secondary px-3 py-2">Theme Park</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Ultimate Guide to Ferrari World Abu Dhabi 2026</h5>
                        <p class="text-muted mb-3 small">Experience the world's fastest roller coaster and thrilling
                            attractions at this Ferrari-themed park.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>7 min read</small>
                            <a href="blog/ferrari-world-abu-dhabi-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 5: Dubai Family Trip -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/carousel-4.jpg" class="img-fluid w-100" alt="Dubai Family Trip"
                            style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">Family</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Dubai Family Trip 2026: 5-7 Day Itinerary with Kids</h5>
                        <p class="text-muted mb-3 small">Perfect family vacation guide with kid-friendly activities,
                            theme parks, and age-appropriate attractions.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>8 min read</small>
                            <a href="blog/dubai-family-tour" class="btn btn-sm btn-outline-primary rounded-pill">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 6: Gold Souk -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/blogs/Gold-Souq/Gold-Souk-shopping-Dubai.webp" class="img-fluid w-100"
                            alt="Dubai Gold Souk" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">Shopping</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Dubai Gold Souk Guide 2026: Shopping Tips & Best Deals</h5>
                        <p class="text-muted mb-3 small">Navigate the world's largest gold market like a pro with
                            insider tips and bargaining strategies.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>6 min read</small>
                            <a href="blog/dubai-gold-souk-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 7: Burj Khalifa -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/blogs/burj-khalifa/burj-khalifa-dubai-skyline-hero.webp" class="img-fluid w-100"
                            alt="Burj Khalifa" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">Landmark</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Burj Khalifa: An Icon of Modern Dubai</h5>
                        <p class="text-muted mb-3 small">Explore the world's tallest building, observation decks, dining
                            options, and photography tips.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>5 min read</small>
                            <a href="blog/burj-khalifa-icon-of-dubai"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 8: Hot Air Balloon -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/blogs/hotairbaloon/HotAir-Baloon-in-Air.png" class="img-fluid w-100"
                            alt="Dubai Hot Air Balloon" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-secondary px-3 py-2">Adventure</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Dubai Hot Air Balloon Experience: The Ultimate Guide</h5>
                        <p class="text-muted mb-3 small">Soar above the desert at sunrise for breathtaking views of the
                            Dubai skyline and dunes.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>15 min read</small>
                            <a href="blog/dubai-hot-air-balloon-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 9: Desert Safari -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/safari/premiumcamp/premium-desert-safari.webp" class="img-fluid w-100"
                            alt="Dubai Desert Safari" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">Safari</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Unveiling the Mystique: Your Ultimate Guide to Dubai Desert Safaris</h5>
                        <p class="text-muted mb-3 small">Everything you need to know about dune bashing, camel riding,
                            and BBQ dinners under the stars.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>12 min read</small>
                            <a href="blog/dubai-desert-safari-ultimate-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 10: Jain Family Guide -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100 border border-secondary">
                    <div class="position-relative">
                        <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Jain Family Dubai Trip"
                            style="height: 220px; object-fit: cover;">
                        <span
                            class="position-absolute top-0 end-0 m-3 badge bg-secondary px-3 py-2">Jain-Friendly</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Jain Family Dubai Trip Guide 2026: Complete Planning Guide</h5>
                        <p class="text-muted mb-3 small">Special guide for Jain families with pure vegetarian dining,
                            temple visits, and cultural experiences.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-user me-1"></i>Shweta Jain</small>
                            <a href="blog/jain-family-dubai-trip-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 11: Yas Island -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-item bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="position-relative">
                        <img src="img/blogs/yasIsland/ferrariworld1.jpeg" class="img-fluid w-100"
                            alt="Yas Island Theme Parks" style="height: 220px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary px-3 py-2">Theme Parks</span>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">Yas Island Abu Dhabi: The Ultimate Theme Park Guide 2026</h5>
                        <p class="text-muted mb-3 small">Discover Ferrari World, Warner Bros, SeaWorld, and Yas
                            Waterworld with our 3-day itinerary.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <small class="text-muted"><i class="fa fa-clock me-1"></i>15 min read</small>
                            <a href="blog/yas-island-theme-park-guide"
                                class="btn btn-sm btn-outline-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coming Soon Card -->
            <div class="col-lg-4 col-md-6">
                <div
                    class="blog-card-item bg-light rounded overflow-hidden h-100 d-flex align-items-center justify-content-center text-center p-5">
                    <div>
                        <div class="mb-4">
                            <i class="fa fa-pen-fancy fa-4x text-primary opacity-50"></i>
                        </div>
                        <h4 class="mb-3">More Guides Coming Soon!</h4>
                        <p class="text-muted mb-4">We're continuously creating new travel guides and tips for your
                            perfect vacation.</p>
                        <a href="contact" class="btn btn-primary rounded-pill">
                            <i class="fa fa-lightbulb me-2"></i>Suggest a Topic
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Grid End -->

<!-- Categories Section Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-3">
        <div class="mx-auto text-center mb-5" style="max-width: 600px;">
            <h5 class="section-title px-3">Categories</h5>
            <h2 class="mb-4">Browse by Topic</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <i class="fa fa-umbrella-beach fa-2x text-primary mb-3"></i>
                    <h6 class="mb-0">Dubai Tours</h6>
                    <small class="text-muted">8 articles</small>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <i class="fa fa-globe fa-2x text-primary mb-3"></i>
                    <h6 class="mb-0">International</h6>
                    <small class="text-muted">3 articles</small>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <i class="fa fa-passport fa-2x text-primary mb-3"></i>
                    <h6 class="mb-0">Visa Guide</h6>
                    <small class="text-muted">2 articles</small>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <i class="fa fa-users fa-2x text-primary mb-3"></i>
                    <h6 class="mb-0">Family</h6>
                    <small class="text-muted">3 articles</small>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <i class="fa fa-leaf fa-2x text-secondary mb-3"></i>
                    <h6 class="mb-0">Jain-Friendly</h6>
                    <small class="text-muted">2 articles</small>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="category-card text-center p-4 bg-white rounded shadow-sm h-100">
                    <i class="fa fa-shopping-bag fa-2x text-secondary mb-3"></i>
                    <h6 class="mb-0">Shopping</h6>
                    <small class="text-muted">1 article</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories Section End -->

<!-- Trust Bar Start -->
<div class="container-fluid py-4 bg-white border-top border-bottom">
    <div class="container">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa fa-star text-warning fa-lg mb-1"></i>
                    <strong>4.8/5 Rating</strong>
                    <small class="text-muted">Google Reviews</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa fa-users text-primary fa-lg mb-1"></i>
                    <strong>2,000+ Families</strong>
                    <small class="text-muted">Trusted Us</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa fa-pen-fancy text-primary fa-lg mb-1"></i>
                    <strong>14+ Guides</strong>
                    <small class="text-muted">Expert-Written</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa fa-leaf text-success fa-lg mb-1"></i>
                    <strong>100% Jain-Friendly</strong>
                    <small class="text-muted">Pure Veg Options</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trust Bar End -->

<!-- Book Your Package CTA Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-4" style="max-width: 700px;">
            <h5 class="section-title px-3">Ready to Travel?</h5>
            <h2 class="mb-3">Book Your Dubai Package Today</h2>
            <p class="text-muted mb-4">Love our guides? Let us handle the planning. Choose from 7 curated Dubai packages with Jain food, family-friendly itineraries, and 24/7 support.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card border-primary h-100 text-center p-4">
                    <i class="fa fa-fire text-danger fa-2x mb-3"></i>
                    <h5>Dubai Winter Escape</h5>
                    <p class="text-muted small">5N/6D — From AED 2,499</p>
                    <a href="dubai-winter-escape" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary h-100 text-center p-4">
                    <i class="fa fa-heart text-danger fa-2x mb-3"></i>
                    <h5>Dubai Honeymoon</h5>
                    <p class="text-muted small">4N/5D — From AED 3,499</p>
                    <a href="dubai-honeymoon-package" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-primary h-100 text-center p-4">
                    <i class="fa fa-child text-primary fa-2x mb-3"></i>
                    <h5>Dubai for Kids</h5>
                    <p class="text-muted small">5N/6D — From AED 2,799</p>
                    <a href="dubai-for-kids" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="dubai-holiday-packages" class="btn btn-primary rounded-pill py-3 px-5">
                <i class="fa fa-suitcase me-2"></i>View All 7 Dubai Packages
            </a>
        </div>
    </div>
</div>
<!-- Book Your Package CTA End -->

<!-- Newsletter Section Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Stay Updated</h5>
            <h2 class="text-white mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-white mb-5">Get the latest travel tips, destination guides, and exclusive offers delivered
                straight to your inbox.
            </p>
            <div class="position-relative mx-auto" style="max-width: 600px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="email"
                    placeholder="Enter your email address">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section End -->

<?php include 'includes/footer.php'; ?>