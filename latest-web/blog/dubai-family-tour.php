<?php
$basePath = "../";
$pageTitle = "Dubai Family Adventure: Complete 5-7 Day Itinerary 2026 | Arihant Travels";
$pageDescription = "Perfect Dubai family itinerary with theme parks, beaches, cultural sites, and kid-friendly restaurants.";
$pageKeywords = "Dubai family tour, Dubai with kids, family itinerary Dubai, Dubai theme parks, family vacation Dubai";
$pageCanonical = "https://arihantlink.com/blog/dubai-family-tour";
$currentPage = "blog";

// AI SEO & Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Dubai Family Adventure: Complete 5-7 Day Itinerary 2026",
  "image": "https://arihantlink.com/img/blogs/Dubai-Trip/Hero-banner-image.webp",
  "author": {
    "@type": "Organization",
    "name": "Arihant Travels Team",
    "url": "https://arihantlink.com"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Arihant Travels Pvt Ltd",
    "logo": {
      "@type": "ImageObject",
      "url": "https://arihantlink.com/img/logo.png"
    }
  },
  "datePublished": "2024-12-15",
  "dateModified": "2026-03-02",
  "description": "Perfect Dubai family itinerary with theme parks, beaches, cultural sites, and kid-friendly restaurants. Includes day-by-day plans, costs, and Jain dining options.",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://arihantlink.com/blog/dubai-family-tour"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://arihantlink.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Blog",
    "item": "https://arihantlink.com/blog"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "Dubai Family Tour",
    "item": "https://arihantlink.com/blog/dubai-family-tour"
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How many days do you need for a Dubai family trip?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We recommend 5-7 days for a Dubai family trip. This allows time to visit major attractions like Burj Khalifa, theme parks (Aquaventure, LEGOLAND), cultural sites, and a desert safari without rushing."
    }
  },{
    "@type": "Question",
    "name": "What is the best time to visit Dubai with kids?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The best time to visit Dubai with kids is October to April when temperatures are cooler (20-30°C). This is perfect for outdoor activities, theme parks, and beach visits. Avoid summer months (June-August) when temperatures exceed 40°C."
    }
  },{
    "@type": "Question",
    "name": "Are there vegetarian and Jain food options in Dubai?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, Dubai has excellent vegetarian and Jain dining options including Saravanaa Bhavan, Govindas, and Dishoom. Most hotels and restaurants offer extensive vegetarian menus, and Dubai Mall food court has multiple vegetarian chains."
    }
  },{
    "@type": "Question",
    "name": "What are the must-visit theme parks for families in Dubai?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Top family theme parks include Aquaventure Waterpark at Atlantis, LEGOLAND Dubai (ages 2-12), Motiongate Dubai (Hollywood-themed), IMG Worlds of Adventure (indoor), and Wild Wadi Waterpark. Dubai Parks and Resorts offers multiple parks in one location."
    }
  }]
}
</script>';

$blogTitle = "Dubai Family Adventure: Your Ultimate 5-7 Day Itinerary";
$blogCategory = "Family Tours";
$blogCategoryClass = "secondary";
$blogAuthor = "Arihant Travels Team";
$blogDate = "December 15, 2024";
$blogReadTime = "18 min read";
$blogFeaturedImage = "../img/blogs/Dubai-Trip/Hero-banner-image.webp";
$blogImageAlt = "Family enjoying Dubai attractions";
$blogExcerpt = "Complete family-friendly Dubai itinerary with theme parks, beaches, cultural experiences, and vegetarian dining options. Perfect for creating unforgettable memories!";
$blogTags = ["Family Travel", "Dubai Itinerary", "Theme Parks", "Kid-Friendly", "Family Vacation"];
include '../includes/header.php';
?>

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 1200px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <span class="badge bg-<?php echo $blogCategoryClass; ?> px-4 py-2 mb-3"><i
                        class="fa fa-users me-2"></i><?php echo $blogCategory; ?></span>
                <h1 class="text-white display-4 mb-4" style="font-family: 'Jost', sans-serif; font-weight: 700;">
                    <?php echo $blogTitle; ?>
                </h1>

                <!-- Blog Meta Information -->
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-4 text-white mb-4">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user me-2"></i>
                        <span><?php echo $blogAuthor; ?></span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-calendar me-2"></i>
                        <span><?php echo $blogDate; ?></span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-clock me-2"></i>
                        <span><?php echo $blogReadTime; ?></span>
                    </div>
                </div>

                <p class="fs-5 text-white mb-4" style="max-width: 800px; margin: 0 auto;"><?php echo $blogExcerpt; ?>
                </p>

                <!-- Social Share Buttons -->
                <div class="d-flex justify-content-center gap-2 mb-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($pageCanonical); ?>"
                        target="_blank" class="btn btn-light btn-sm rounded-circle"
                        style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($pageCanonical); ?>&title=<?php echo urlencode($blogTitle); ?>"
                        target="_blank" class="btn btn-light btn-sm rounded-circle"
                        style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/?text=<?php echo urlencode($blogTitle . ' - ' . $pageCanonical); ?>"
                        target="_blank" class="btn btn-success btn-sm rounded-circle"
                        style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="container-fluid bg-light py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                    <li class="breadcrumb-item active"><?php echo $blogCategory; ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="<?php echo $blogFeaturedImage; ?>" alt="<?php echo $blogImageAlt; ?>"
                    class="img-fluid rounded shadow-lg w-100" style="max-height: 600px; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="alert border-primary border-start border-5 mb-5">
                    <h5 class="alert-heading mb-3"><i class="fa fa-star me-2"></i>Family Trip Essentials</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="mb-0">
                                <li><strong>Duration:</strong> 5-7 days recommended</li>
                                <li><strong>Best Time:</strong> October-April (cooler weather)</li>
                                <li><strong>Budget:</strong> AED 3,000-5,000 per day (family of 4)</li>
                                <li><strong>Top Parks:</strong> IMG Worlds, Aquaventure, LEGOLAND</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="mb-0">
                                <li><strong>Beaches:</strong> JBR, La Mer, Kite Beach</li>
                                <li><strong>Must-Do:</strong> Desert safari, Burj Khalifa</li>
                                <li><strong>Dining:</strong> Vegetarian options everywhere</li>
                                <li><strong>Transport:</strong> Metro + taxis recommended</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="blog-content" style="line-height: 1.8; font-size: 17px;">

                    <!-- Introduction -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Welcome to Dazzling
                            Dubai!</h2>
                        <p>Dubai, a city in the United Arab Emirates, is a global tourism hub known for its extravagant
                            attractions, luxurious experiences, and a unique blend of modernity and tradition. The
                            city's skyline is dominated by iconic structures such as the Burj Khalifa, the tallest
                            building in the world, and the vast Dubai Mall.</p>
                        <p>This 5-7 day itinerary is specially designed for families, balancing iconic sights with
                            kid-friendly activities to create an unforgettable vacation. Dubai holds several world
                            records, including the tallest building (Burj Khalifa), the largest shopping mall by total
                            area (The Dubai Mall), and the largest natural flower garden (Dubai Miracle Garden)!</p>
                    </section>

                    <!-- 5-Day Itinerary -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Sample 5-Day Family
                            Itinerary</h2>
                        <p class="mb-4">Here's a carefully crafted 5-day Dubai family adventure, balancing iconic sights
                            with fun activities. Feel free to mix and match based on your family's interests and pace!
                        </p>

                        <!-- Day 1 -->
                        <div class="card mb-3 border-0 shadow-sm">
                            <div class="card-header" style="background-color: #13357B; color: white;">
                                <h5 class="mb-0 text-white"><i class="fa fa-calendar-day me-2"></i>Day 1: Arrival &
                                    Downtown
                                    Wonders</h5>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li><strong>Morning:</strong> Arrive in Dubai, check into your hotel, relax</li>
                                    <li><strong>Afternoon:</strong> Head to Downtown Dubai - Ascend the Burj Khalifa for
                                        breathtaking views (book in advance!)</li>
                                    <li><strong>Evening:</strong> Enjoy the captivating Dubai Fountain show, explore The
                                        Dubai Mall</li>
                                    <li><strong>Optional:</strong> Visit Dubai Aquarium & Underwater Zoo or KidZania
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Day 2 -->
                        <div class="card mb-3 border-0 shadow-sm">
                            <div class="card-header" style="background-color: #13357B; color: white;">
                                <h5 class="mb-0 text-white"><i class="fa fa-calendar-day me-2"></i>Day 2: Water Fun &
                                    Iconic Views
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li><strong>Full Day:</strong> Spend the day splashing at Aquaventure Waterpark at
                                        Atlantis, The Palm</li>
                                    <li><strong>Highlights:</strong> Tower of Neptune slides, Lazy River, Splashers
                                        Kids' Play Area</li>
                                    <li><strong>Late Afternoon:</strong> Head to The View at The Palm for stunning
                                        sunset views over Palm Jumeirah</li>
                                    <li><strong>Alternative:</strong> Visit Wild Wadi Waterpark™</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Day 3 -->
                        <div class="card mb-3 border-0 shadow-sm">
                            <div class="card-header" style="background-color: #13357B; color: white;">
                                <h5 class="mb-0 text-white"><i class="fa fa-calendar-day me-2"></i>Day 3: Theme Parks or
                                    Cultural
                                    Exploration</h5>
                            </div>
                            <div class="card-body">
                                <p class="mb-2"><strong>Option 1 (Theme Parks):</strong></p>
                                <ul class="mb-3">
                                    <li>Dedicate the day to Dubai Parks and Resorts (Motiongate™, LEGOLAND®, or
                                        LEGOLAND® Water Park)</li>
                                    <li>Explore Riverland™ Dubai for dining and entertainment (free entry)</li>
                                </ul>
                                <p class="mb-2"><strong>Option 2 (Culture):</strong></p>
                                <ul class="mb-0">
                                    <li>Explore Old Dubai - Take an Abra ride across Dubai Creek</li>
                                    <li>Wander through the Gold and Spice Souks</li>
                                    <li>Visit the Al Fahidi Historical Neighbourhood</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Day 4 -->
                        <div class="card mb-3 border-0 shadow-sm">
                            <div class="card-header" style="background-color: #13357B; color: white;">
                                <h5 class="mb-0 text-white"><i class="fa fa-calendar-day me-2"></i>Day 4: Desert
                                    Adventure</h5>
                            </div>
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li><strong>Morning:</strong> Relaxed start - enjoy hotel pool or visit Kite Beach
                                    </li>
                                    <li><strong>Afternoon:</strong> Desert safari pickup (3-4 PM)</li>
                                    <li><strong>Activities:</strong> Dune bashing, camel riding, sandboarding, henna
                                        painting</li>
                                    <li><strong>Evening:</strong> BBQ dinner with vegetarian options, cultural shows
                                        (belly dance, Tanura), stargazing</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Day 5 -->
                        <div class="card mb-3 border-0 shadow-sm">
                            <div class="card-header" style="background-color: #13357B; color: white;">
                                <h5 class="mb-0 text-white"><i class="fa fa-calendar-day me-2"></i>Day 5: Unique
                                    Experiences &
                                    Departure</h5>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Depending on your flight schedule and interests:</p>
                                <ul class="mb-0">
                                    <li>Visit the futuristic Museum of the Future (book well in advance!)</li>
                                    <li>Marvel at the Dubai Miracle Garden (seasonal: Oct-May)</li>
                                    <li>Explore the immersive Aya Universe</li>
                                    <li>See the city from the Dubai Frame</li>
                                    <li>Last-minute shopping at Dubai Mall or Gold Souk</li>
                                </ul>
                            </div>
                        </div>

                        <div class="alert alert-success mt-4">
                            <p class="mb-0"><strong><i class="fa fa-info-circle me-2"></i>Note:</strong> Global Village
                                and Miracle Garden are seasonal (typically October-May). Check their operating dates
                                before planning your visit!</p>
                        </div>
                    </section>

                    <!-- Top Attractions -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Top Family Attractions
                            in Dubai</h2>

                        <!-- Burj Khalifa -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h5 mb-3" style="color: #13357B;"><i class="fa fa-building me-2"></i>1. Burj
                                Khalifa & Dubai Fountain</h3>
                            <p>No family trip is complete without visiting the Burj Khalifa, the world's tallest
                                building at 828 meters (2,717 feet). The observation decks offer breathtaking views for
                                all ages, and the high-speed elevators alone are an experience!</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;">Observation Decks:</h6>
                                            <ul class="small mb-0">
                                                <li><strong>At The Top (124 & 125):</strong> 360° views, outdoor
                                                    terrace, digital telescopes</li>
                                                <li><strong>At The Top SKY (148):</strong> Highest outdoor deck at 555m,
                                                    exclusive lounge, refreshments</li>
                                                <li><strong>Dubai Fountain:</strong> FREE choreographed water, music &
                                                    light shows every 30 mins (6 PM onwards)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;">Family Tips:</h6>
                                            <ul class="small mb-0">
                                                <li>Book tickets online in advance (cheaper!)</li>
                                                <li>Visit at sunset for day & night views</li>
                                                <li>Elevators travel at 10 meters/second!</li>
                                                <li>Connected directly to Dubai Mall</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Aquaventure -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h5 mb-3" style="color: #13357B;"><i class="fa fa-water me-2"></i>2. Aquaventure
                                Waterpark</h3>
                            <p>Located at Atlantis, The Palm, Aquaventure is one of Dubai's top spots for family fun!
                                This massive waterpark offers thrilling slides, a lazy river, and dedicated areas for
                                younger children.</p>
                            <img src="../img/blogs/Dubai-Trip/AquaventureWaterPark.webp" alt="Aquaventure Waterpark"
                                class="img-fluid rounded shadow-sm my-3"
                                style="max-height: 500px; width: 100%; object-fit: cover;">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <h6 style="color: #13357B;">Thrill Rides:</h6>
                                    <ul class="small">
                                        <li><strong>Leap of Faith:</strong> Near-vertical drop through shark lagoon</li>
                                        <li><strong>Aquaconda:</strong> World's largest tube slide</li>
                                        <li><strong>Poseidon's Revenge:</strong> Trapdoor drop slide</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 style="color: #13357B;">For Families:</h6>
                                    <ul class="small">
                                        <li><strong>Splashers Kids' Play Area:</strong> Safe zone for young children
                                        </li>
                                        <li><strong>Lazy River:</strong> Relaxing float around the park</li>
                                        <li><strong>Private Beach:</strong> Access to beautiful Arabian Gulf beach</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Dubai Parks -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h5 mb-3" style="color: #13357B;"><i class="fa fa-ticket-alt me-2"></i>3. Dubai
                                Parks and Resorts</h3>
                            <p>The Middle East's largest integrated theme park resort! You can easily spend a full day
                                (or more!) exploring different themed worlds.</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/blogs/Dubai-Trip/Motiongate.webp" alt="Motiongate Dubai"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 350px; width: 100%; object-fit: cover;">
                                    <h6 class="mt-2" style="color: #13357B;">Motiongate™ Dubai</h6>
                                    <p class="small mb-0">Hollywood-themed park with DreamWorks, Columbia Pictures zones
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/blogs/Dubai-Trip/Legoland.webp" alt="LEGOLAND Dubai"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 350px; width: 100%; object-fit: cover;">
                                    <h6 class="mt-2" style="color: #13357B;">LEGOLAND® Dubai</h6>
                                    <p class="small mb-0">Perfect for ages 2-12 with 40+ interactive rides and building
                                        experiences</p>
                                </div>
                            </div>
                        </div>

                        <!-- Museum of Future -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h5 mb-3" style="color: #13357B;"><i class="fa fa-robot me-2"></i>4. Museum of the
                                Future</h3>
                            <p>One of the most beautiful buildings in the world! This stunning torus-shaped structure
                                covered in Arabic calligraphy offers immersive journeys through future scenarios.</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/blogs/Dubai-Trip/Future-Museum-1.webp"
                                        alt="Museum of Future Exterior" class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/blogs/Dubai-Trip/Future-Museum-2.webp"
                                        alt="Museum of Future Interior" class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="card border-0 bg-light mt-3">
                                <div class="card-body">
                                    <h6 style="color: #13357B;">Highlights:</h6>
                                    <ul class="small mb-0">
                                        <li>Simulated trip to space station (OSS Hope)</li>
                                        <li>Future Heroes area for children ages 3-10</li>
                                        <li>Interactive VR and AR exhibits</li>
                                        <li>Book well in advance - very popular!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Global Village -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h5 mb-3" style="color: #13357B;"><i class="fa fa-globe me-2"></i>5. Global
                                Village (Seasonal)</h3>
                            <p>Experience the world in one place! This multicultural festival park is open during cooler
                                months (October-May), offering country pavilions, shows, rides, and diverse cuisine.</p>
                            <img src="../img/blogs/Dubai-Trip/GlobalVillageRides.webp" alt="Global Village"
                                class="img-fluid rounded shadow-sm my-3"
                                style="max-height: 450px; width: 100%; object-fit: cover;">
                        </div>

                        <!-- Dubai Frame -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h5 mb-3" style="color: #13357B;"><i class="fa fa-border-all me-2"></i>6. Dubai
                                Frame</h3>
                            <p>A 150-meter high picture frame' offering split views - Old Dubai on one side, New Dubai
                                on the other. The glass-floored Sky Bridge is a unique experience!</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/blogs/Dubai-Trip/Dubai-Frame-1.webp" alt="Dubai Frame Exterior"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/blogs/Dubai-Trip/Dubai-Frame-interior.webp"
                                        alt="Dubai Frame Interior" class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- FAQ Section -->
                    <section id="faqs" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Frequently Asked Questions
                        </h2>
                        <div class="accordion" id="dubaiFamilyFaq">
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>How many days do you need for a Dubai family trip?</strong>
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#dubaiFamilyFaq">
                                    <div class="accordion-body">
                                        We recommend <strong>5-7 days</strong> for a Dubai family trip. This allows time
                                        to visit major attractions like Burj Khalifa, theme parks (Aquaventure,
                                        LEGOLAND), cultural sites, and a desert safari without rushing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>What is the best time to visit Dubai with kids?</strong>
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#dubaiFamilyFaq">
                                    <div class="accordion-body">
                                        The best time to visit Dubai with kids is <strong>October to April</strong> when
                                        temperatures are cooler (20-30°C). This is perfect for outdoor activities, theme
                                        parks, and beach visits. Avoid summer months (June-August) when temperatures
                                        exceed 40°C.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Are there vegetarian and Jain food options in Dubai?</strong>
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#dubaiFamilyFaq">
                                    <div class="accordion-body">
                                        Yes! Dubai has excellent vegetarian and Jain dining options including
                                        <strong>Saravanaa Bhavan, Govindas, and Dishoom</strong>. Most hotels and
                                        restaurants offer extensive vegetarian menus, and Dubai Mall food court has
                                        multiple vegetarian chains.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>What are the must-visit theme parks for families in Dubai?</strong>
                                    </button>
                                </h3>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#dubaiFamilyFaq">
                                    <div class="accordion-body">
                                        Top family theme parks include:
                                        <ul>
                                            <li><strong>Aquaventure Waterpark</strong> at Atlantis</li>
                                            <li><strong>LEGOLAND Dubai</strong> (ages 2-12)</li>
                                            <li><strong>Motiongate Dubai</strong> (Hollywood-themed)</li>
                                            <li><strong>IMG Worlds of Adventure</strong> (indoor)</li>
                                            <li><strong>Wild Wadi Waterpark</strong></li>
                                        </ul>
                                        Dubai Parks and Resorts offers multiple parks in one location.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Family Dining Options -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Family Dining Options
                        </h2>
                        <div class="alert alert-success mt-4 border-start border-4 border-success">
                            <h5 class="mb-3" style="color: #13357B;"><i class="fa fa-leaf me-2"></i>Vegetarian &
                                Jain-Friendly Restaurants</h5>
                            <ul class="mb-0">
                                <li><strong>Saravanaa Bhavan:</strong> Authentic South Indian vegetarian (multiple
                                    locations)</li>
                                <li><strong>Govinda's:</strong> Pure vegetarian Hare Krishna restaurant</li>
                                <li><strong>Dishoom:</strong> Bombay-style cafe with great veg options</li>
                                <li><strong>Dubai Mall Food Court:</strong> Multiple vegetarian chains</li>
                                <li><strong>Hotel Restaurants:</strong> Most offer extensive vegetarian menus</li>
                            </ul>
                        </div>
                    </section>

                    <!-- CTA -->
                    <div class="card bg-primary text-white mb-5">
                        <div class="card-body text-center p-5">
                            <h3 class="text-white mb-3"><i class="fa fa-users me-2"></i>Plan Your Family Dubai Trip</h3>
                            <p class="mb-4">Let us create a customized itinerary perfect for your family with theme park
                                tickets, desert safaris, and vegetarian dining!</p>
                            <a href="https://wa.me/971585945007?text=I want to plan a Dubai family vacation"
                                target="_blank" class="btn btn-light btn-lg rounded-pill px-5 py-3">
                                <i class="fab fa-whatsapp me-2"></i>Plan My Family Trip
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Quick Itinerary Overview (moved from sidebar) -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="card" style="border-color: #13357B;">
                        <div class="card-header text-white" style="background-color: #13357B;">
                            <h5 class="mb-0"><i class="fa fa-map me-2"></i>Quick Itinerary Overview</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Day 1: Dubai Mall & Burj Khalifa</li>
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Day 2: Aquaventure Waterpark & The View at
                                            Palm</li>
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Day 3: Dubai Parks or Cultural Old Dubai
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Day 4: Desert Safari Adventure</li>
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Day 5: Museum of Future / Miracle Garden
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (!empty($relatedPosts)): ?>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2>More Travel Guides</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($relatedPosts as $post): ?>
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="<?php echo $post['image']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>"
                                style="height: 350px; object-fit: cover;">
                            <div class="card-body">
                                <span class="badge bg-secondary mb-2"><?php echo $post['category']; ?></span>
                                <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                <a href="<?php echo $post['url']; ?>" class="btn btn-outline-primary btn-sm mt-3">Read Guide <i
                                        class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Book Your Dubai Package CTA Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h5 class="section-title px-3">Ready to Visit Dubai?</h5>
            <h2 class="mb-3">Book Your Dream Dubai Package</h2>
            <p class="text-muted">Loved this guide? Let us plan your trip with Jain food, family-friendly itineraries, and 24/7 support.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Dubai For Kids</h5>
                    <p class="text-muted small">4N/5D — From AED 1,999</p>
                    <a href="/dubai-for-kids" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Dubai Family Holidays</h5>
                    <p class="text-muted small">6N/7D — From AED 3,499</p>
                    <a href="/dubai-family-holidays" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Budget Friendly Dubai</h5>
                    <p class="text-muted small">3N/4D — From AED 1,499</p>
                    <a href="/budget-friendly-dubai" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/dubai-holiday-packages" class="btn btn-primary rounded-pill py-3 px-5"><i class="fa fa-suitcase me-2"></i>View All 7 Packages</a>
        </div>
    </div>
</div>
<!-- Book Your Dubai Package CTA End -->

<!-- Subscribe Section Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-4">Get Dubai Family Travel Updates</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive family travel tips,
                theme park discounts, and special Dubai packages. Perfect for planning your next family adventure!
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
<!-- Subscribe Section End -->

<?php include '../includes/footer.php'; ?>