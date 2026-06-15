<?php
$basePath = "../";
$pageTitle = "The Ultimate Azerbaijan Travel Guide 2026 | Arihant Travel";
$pageDescription = "Discover Azerbaijan - the Land of Fire. Explore Baku, Gobustan, Sheki, Gabala & more. Complete travel guide with visa info, costs, and itinerary tips.";
$pageKeywords = "Azerbaijan travel guide, Baku tourism, visit Azerbaijan from Dubai, Caucasus travel, Land of Fire, Azerbaijan visa";
$pageCanonical = "https://arihantlink.com/blog/ultimate-azerbaijan-travel-guide";
$currentPage = "blog";

// AI SEO & Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "The Ultimate Azerbaijan Travel Guide: Where Medieval Secrets Meet Modern Marvels",
  "image": "https://arihantlink.com/img/baku/baku-night-city-panaroma-view.jpg",
  "author": {
    "@type": "Organization",
    "name": "Arihant Travel Team",
    "url": "https://arihantlink.com"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Arihant Travel",
    "logo": {
      "@type": "ImageObject",
      "url": "https://arihantlink.com/img/logo.png"
    }
  },
  "datePublished": "2025-01-03",
  "dateModified": "2026-03-02",
  "description": "Discover Azerbaijan, the Land of Fire. Explore Baku, Gobustan, Sheki, Gabala & more with our complete travel guide.",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://arihantlink.com/blog/ultimate-azerbaijan-travel-guide"
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
    "name": "Azerbaijan Travel Guide",
    "item": "https://arihantlink.com/blog/ultimate-azerbaijan-travel-guide"
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Do I need a visa to visit Azerbaijan?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Most nationalities can obtain an e-visa online through the ASAN Visa portal. UAE residents often enjoy simplified visa processes. Always check current requirements before traveling."
    }
  },{
    "@type": "Question",
    "name": "What is the best time to visit Azerbaijan?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The best time to visit is April to June (spring) and September to October (autumn) when the weather is pleasant. Winter is ideal for Shahdag skiing."
    }
  },{
    "@type": "Question",
    "name": "How many days do I need in Azerbaijan?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We recommend 5-7 days to explore Baku and surrounding areas. For a comprehensive tour including Sheki, Gabala, and mountain regions, plan for 7-10 days."
    }
  }]
}
</script>';

$blogTitle = "The Ultimate Azerbaijan Travel Guide: Where Medieval Secrets Meet Modern Marvels";
$blogCategory = "International";
$blogCategoryClass = "primary";
$blogAuthor = "Arihant Travel Team";
$blogDate = "January 3, 2025";
$blogReadTime = "15 min read";
$blogFeaturedImage = "../img/baku/baku-night-city-panaroma-view.jpg";
$blogImageAlt = "Baku Azerbaijan Night Panorama";
$blogExcerpt = "Azerbaijan, the 'Land of Fire,' is a captivating intersection of Eastern mystery and Western modernity. From the wind-swept shores of the Caspian Sea to the soaring peaks of the Caucasus, discover why this destination is topping the charts for Dubai travelers in 2025.";
$blogTags = ["Azerbaijan", "Baku", "Travel Guide", "International Tours", "Caucasus"];
$relatedPosts = [
    ['title' => 'Georgia Travel Guide 2024', 'url' => 'georgia-travel-guide', 'image' => '../img/blogs/georgia/Tbilisi-Georgia-Sameba-Cathedral.webp', 'category' => 'International'],
    ['title' => 'Kazakhstan Almaty Guide', 'url' => 'kazakhstan-almaty-travel-guide', 'image' => '../img/blogs/Almaty/kazakhstan-almaty.webp', 'category' => 'International']
];

include '../includes/header.php';
?>

<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(../img/baku/heydar-aliyev-center.jpg);">
    <div class="container text-center py-5" style="max-width: 1200px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <span class="badge bg-<?php echo $blogCategoryClass; ?> px-4 py-2 mb-3"><i
                        class="fa fa-globe me-2"></i><?php echo $blogCategory; ?></span>
                <h1 class="text-white display-4 mb-4" style="font-family: 'Jost', sans-serif; font-weight: 700;">
                    <?php echo $blogTitle; ?>
                </h2>

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
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($pageCanonical); ?>&text=<?php echo urlencode($blogTitle); ?>"
                        target="_blank" class="btn btn-light btn-sm rounded-circle"
                        style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                        <i class="fab fa-twitter"></i>
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
                    <li class="breadcrumb-item active">Azerbaijan Guide</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Featured Image Section -->
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

<!-- Main Content -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Travel Essentials Box -->
                <div class="alert border-primary border-start border-5 mb-5">
                    <h5 class="alert-heading mb-3"><i class="fa fa-map-marked me-2"></i>Azerbaijan Travel Essentials
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="mb-0">
                                <li><strong>Visa:</strong> E-visa (ASAN portal)</li>
                                <li><strong>Currency:</strong> Azerbaijani Manat (AZN)</li>
                                <li><strong>Language:</strong> Azerbaijani (English in tourist areas)</li>
                                <li><strong>Best Time:</strong> April-June, September-October</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="mb-0">
                                <li><strong>Budget:</strong> USD 50-80 per day</li>
                                <li><strong>Flight:</strong> 2-3 hours from Dubai/UAE</li>
                                <li><strong>Duration:</strong> 5-7 days recommended</li>
                                <li><strong>Highlight:</strong> Land of Fire & Caucasus!</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="blog-content" style="line-height: 1.8; font-size: 17px;">

                    <!-- Introduction Section -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Introduction: Why
                            Azerbaijan Should Be Your Next Getaway</h2>
                        <p>Imagine a city where the winding cobblestone alleys of a 12th-century fortress are reflected
                            in the glass facades of ultra-modern skyscrapers. Welcome to Baku. Azerbaijan is often
                            called the "Land of Fire" due to its eternal natural gas flames, but for travelers, the real
                            spark is the country's incredible diversity.</p>
                        <p>Just a short flight from Dubai, Azerbaijan offers everything from the luxury of 4-star
                            boutique hotels in the heart of the city to the rugged, snow-capped peaks of the Greater
                            Caucasus. Whether you're a history buff, a nature lover, or an adventure seeker, the
                            Azerbaijan travel experience is tailor-made for those who want a premium yet soul-stirring
                            getaway.</p>
                    </section>

                    <!-- Best Time to Visit Section -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Best Time to Visit
                            Azerbaijan</h2>
                        <p>To avoid extreme weather, the most recommended months for visiting Azerbaijan are during the
                            <strong>mild spring from April to June</strong> and the <strong>pleasant autumn from
                                September to October</strong>.
                        </p>

                        <!-- Ideal Windows -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-sun me-2"
                                    style="color: var(--bs-secondary);"></i>The Ideal Windows</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-5 border-success">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-seedling me-2"></i>Spring
                                                (April–June)</h6>
                                            <p class="small mb-0">Nature awakens from winter hibernation.
                                                <strong>May</strong> is ideal for exploring historical monuments and
                                                natural beauties like Goygol lakes and ancient cities of Sheki and
                                                Gabala before summer heat intensifies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-5 border-warning">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-leaf me-2"></i>Autumn
                                                (September–October)</h6>
                                            <p class="small mb-0"><strong>Best season for mountain walks</strong>, spa
                                                breaks, and countryside exploration. Perfect for visiting vineyards in
                                                Shamakhi and Gabala during harvest season with beautiful autumn colors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Weather Extremes -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-exclamation-triangle me-2"
                                    style="color: var(--bs-secondary);"></i>Weather Extremes to Avoid</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-5 border-danger">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-temperature-high me-2"></i>Peak
                                                Summer (July–August)</h6>
                                            <p class="small mb-0">Generally advised to avoid — <strong>very hot and
                                                    humid</strong> throughout most of the country. In Nakhchivan,
                                                temperatures can surpass <strong>40°C (104°F)</strong>.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-5 border-info">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-snowflake me-2"></i>Winter
                                                (December–February)</h6>
                                            <p class="small mb-0">Mountain temperatures can drop to <strong>-20°C
                                                    (-4°F)</strong>. Many mountain roads may be <strong>blocked or
                                                    snowed under</strong>. December is suitable if visiting only Baku
                                                and Shamakhi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seasonal Highlights -->
                        <div class="mb-4">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-calendar-alt me-2"
                                    style="color: var(--bs-secondary);"></i>Seasonal Highlights</h3>
                            <div class="card bg-light border-0">
                                <div class="card-body">
                                    <p class="mb-3">If you are planning around specific events or activities:</p>
                                    <ul class="mb-0">
                                        <li class="mb-2"><strong>Late March:</strong> Time for <strong>Novruz</strong>,
                                            the traditional spring festival and national holiday.</li>
                                        <li class="mb-2"><strong>December–January:</strong> Suitable for <strong>winter
                                                sports enthusiasts</strong> visiting Shahdag and Tufandag ski resorts.
                                        </li>
                                        <li class="mb-0"><strong>November:</strong> Deep autumn colors, though travelers
                                            should <strong>wrap up warm</strong> as temperatures begin to fall.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-light border-start border-5 border-primary">
                            <p class="mb-0"><i class="fa fa-quote-left me-2 text-primary"></i>Visiting during these
                                recommended periods is like finding the <strong>"Goldilocks zone" of the
                                    Caucasus</strong>—the weather is neither too harsh to hinder mountain exploration
                                nor too hot to enjoy the vibrant city life of Baku, allowing you to experience
                                Azerbaijan's diverse climate zones in comfort.</p>
                        </div>
                    </section>

                    <!-- Why Choose Azerbaijan -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Why Choose Azerbaijan
                            for Your Next Trip?</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 style="color: #13357B;"><i class="fa fa-plane me-2"></i>Short Flight, Big
                                            Adventure</h5>
                                        <p class="mb-0">With a direct flight time of just 2-3 hours from Dubai,
                                            Azerbaijan is easy to reach without the hassle of long travel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 style="color: #13357B;"><i class="fa fa-passport me-2"></i>Visa-Friendly
                                        </h5>
                                        <p class="mb-0">UAE residents can easily obtain an e-visa through the ASAN
                                            portal, making trip planning simple.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 style="color: #13357B;"><i class="fa fa-fire me-2"></i>Land of Fire</h5>
                                        <p class="mb-0">Experience Yanardag (Burning Mountain) and Ateshgah Fire Temple
                                            — natural flames that have burned for centuries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 style="color: #13357B;"><i class="fa fa-palette me-2"></i>Rich Culture</h5>
                                        <p class="mb-0">From UNESCO-listed Old City to modern Flame Towers, experience a
                                            blend of East and West like nowhere else.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- The Heart of Baku -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">The Heart of Baku:
                            Where Old Meets New</h2>
                        <p>The "Heart of Baku" is defined by a unique fusion where <strong>ancient Silk Road history
                                meets futuristic vision</strong>, creating a city of dramatic contrasts. It is often
                            described as a spectacular blend of <strong>Abu Dhabi's glittering modernization and
                                Marrakech's ancient, atmospheric charm</strong>.</p>

                        <!-- Icherisheher -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-landmark me-2"
                                    style="color: var(--bs-secondary);"></i>Icherisheher (The Walled City)</h3>
                            <p>The historical core of the city is <strong>Icherisheher</strong>, a UNESCO World Heritage
                                site that allows travelers to "step back in time". The area is characterized by narrow
                                cobblestone streets lined with traditional carpet shops, artisan workshops, and
                                hole-in-the-wall eateries.</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/baku/maiden-tower-baku.jpg" alt="Maiden Tower Baku"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/baku/Icherisheher-Old-City-Baku.jpg" alt="Icherisheher Old City"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="card bg-light border-0 mt-3">
                                <div class="card-body">
                                    <h6 style="color: #13357B;">Must-Visit in Icherisheher:</h6>
                                    <ul class="mb-0">
                                        <li><strong>Maiden Tower</strong> - 12th-century iconic symbol of Baku</li>
                                        <li><strong>Palace of the Shirvanshahs</strong> - 15th-century royal complex
                                        </li>
                                        <li>Traditional carpet shops and artisan workshops</li>
                                        <li>Local eateries for authentic Azerbaijani breakfast</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Modern Baku -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-city me-2"
                                    style="color: var(--bs-secondary);"></i>Modern Baku: Futuristic Marvels</h3>
                            <p>Contrasting the ancient stone walls are the "modern marvels" that represent Azerbaijan's
                                21st-century resurgence. The skyline is dominated by the <strong>Flame Towers</strong>,
                                three LED-covered skyscrapers that symbolize the "Land of Fire".</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/baku/heydar-aliyev-center.jpg" alt="Heydar Aliyev Center"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/baku/baku-cityscape-flametowers-sunset.jpg" alt="Flame Towers Baku"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="card bg-light border-0 mt-3">
                                <div class="card-body">
                                    <h6 style="color: #13357B;">Modern Landmarks:</h6>
                                    <ul class="mb-0">
                                        <li><strong>Heydar Aliyev Center</strong> - Zaha Hadid's architectural
                                            masterpiece</li>
                                        <li><strong>Flame Towers</strong> - iconic LED-covered skyscrapers</li>
                                        <li><strong>Nizami Street</strong> - designer boutiques and shopping</li>
                                        <li><strong>Baku Boulevard</strong> - waterfront promenade</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Nature's Wonders -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Nature's Wonders: Mud
                            Volcanoes & Eternal Flames</h2>
                        <p>Just an hour outside the city, the landscape changes dramatically. Azerbaijan is home to
                            nearly half of the world's <strong>mud volcanoes</strong>. These bubbling pits of cold, grey
                            clay are a surreal sight, often compared to walking on the moon.</p>

                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-mountain me-2"
                                    style="color: var(--bs-secondary);"></i>Gobustan National Park</h3>
                            <p>This <strong>UNESCO-listed reserve</strong> is famous for its Rock Art Cultural
                                Landscape, featuring thousands of petroglyphs dating back 5,000 to 40,000 years. The
                                park is also home to mud volcanoes.</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/baku/gobustna-national-park.jpg" alt="Gobustan Rock Art"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/baku/gobustan-mud-volcanoes.jpg" alt="Mud Volcanoes"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-fire me-2"
                                    style="color: var(--bs-secondary);"></i>Land of Fire Experiences</h3>
                            <p>To complete the "Land of Fire" experience, you must visit <strong>Yanardag</strong>
                                (Burning Mountain), where a fire has been burning naturally for centuries, and the
                                <strong>Ateshgah Fire Temple</strong>, a sacred spot for ancient fire-worshippers.
                            </p>
                        </div>
                    </section>

                    <!-- Mountain Escapes -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">Alpine Escapes:
                            Gabala, Shahdag & Sheki</h2>

                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-skiing me-2"
                                    style="color: var(--bs-secondary);"></i>Gabala & Shahdag</h3>
                            <p>The mountain resorts of Gabala and Shahdag offer lush greenery in summer and world-class
                                skiing in winter. Don't miss the <strong>Tufandag cable cars</strong> for sweeping
                                mountain views.</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/baku/yeddi-gozel-waterfall.webp" alt="Yeddi Gozel Waterfall"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/baku/shadag-moutain.jpg" alt="Shahdag Mountain"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-chess-rook me-2"
                                    style="color: var(--bs-secondary);"></i>Sheki: The Jewel of the Caucasus</h3>
                            <p>Sheki is considered one of Azerbaijan's loveliest cities, located in the forested
                                foothills of the Greater Caucasus. It is home to the UNESCO-listed <strong>Sheki Khan's
                                    Palace</strong>, famous for its ornate stained-glass windows (shebeke).</p>
                            <div class="row g-3 my-3">
                                <div class="col-md-6">
                                    <img src="../img/baku/Historic-Centre-Sheki-Khan-Palace.jpg" alt="Sheki Khan Palace"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <img src="../img/baku/Gabala-mountain.jpg" alt="Gabala Mountains"
                                        class="img-fluid rounded shadow-sm"
                                        style="height: 400px; width: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="card bg-light border-0 mt-3">
                                <div class="card-body">
                                    <h6 style="color: #13357B;">Sheki Must-Tries:</h6>
                                    <ul class="mb-0">
                                        <li><strong>Sheki halva</strong> - super-sweet nut pastry</li>
                                        <li><strong>Piti</strong> - hearty lamb and chickpea stew</li>
                                        <li>Traditional silk workshops</li>
                                        <li>Historic caravanserais (converted to hotels)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Local Food Section -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">A Feast for the
                            Senses: Must-Try Azerbaijani Cuisine</h2>
                        <p>Azerbaijani cuisine is a spectacular fusion of flavors, influenced by its unique geography of
                            eight climate zones and its history as a crossroads of the <strong>Great Silk Road</strong>.
                            For a traveler, the following dishes and experiences are considered essential:</p>

                        <!-- King Dishes -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-crown me-2"
                                    style="color: var(--bs-secondary);"></i>The "King" and National Dishes</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-utensils me-2"></i>Plov (Pilaf)
                                            </h6>
                                            <p class="small mb-0">Called the <strong>"king of Azerbaijani
                                                    cuisine"</strong>, this rice masterpiece comes in dozens of
                                                varieties including <em>fisinjan</em> (pomegranate sauce) and stunning
                                                <strong>Shah Plov</strong> encased in lavash bread.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-utensils me-2"></i>Dolma</h6>
                                            <p class="small mb-0">The national dish — meat, rice, and herbs rolled into
                                                <strong>grape leaves</strong>. Summer versions feature stuffed
                                                aubergines, tomatoes, or peppers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-utensils me-2"></i>Piti</h6>
                                            <p class="small mb-0">Signature lamb stew in <strong>earthenware
                                                    pots</strong> with chickpeas and saffron. Served as two dishes:
                                                broth first, then the meat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Grills and Street Food -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-fire-alt me-2"
                                    style="color: var(--bs-secondary);"></i>Grills and Street Food</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-drumstick-bite me-2"></i>Kebabs
                                            </h6>
                                            <p class="small mb-0">Marinated lamb chunks (<em>tika</em>) and ground meat
                                                on skewers (<em>lula</em>) grilled over a <em>mangal</em>. Always
                                                accompanied by grilled tomatoes and mushrooms.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-bread-slice me-2"></i>Gutabs
                                            </h6>
                                            <p class="small mb-0">Folded flatbreads stuffed with meat, <strong>fresh
                                                    herbs</strong>, cheese, or pumpkin. Drizzled with butter and served
                                                with pomegranate and <em>ayran</em>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Soups and Dumplings -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-bowl-food me-2"
                                    style="color: var(--bs-secondary);"></i>Specialty Soups and Dumplings</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-utensils me-2"></i>Dushbara</h6>
                                            <p class="small mb-0">Traditional Baku delicacy of <strong>tiny meat
                                                    dumplings</strong> in broth. Tradition says <strong>25 should fit
                                                    in one tablespoon</strong>!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-leaf me-2"></i>Dovga
                                                (Vegetarian)</h6>
                                            <p class="small mb-0">Healthy yogurt soup with rice and herbs (coriander,
                                                dill, mint). Served hot in winter and cold in summer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Regional Specialties -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-map-marker-alt me-2"
                                    style="color: var(--bs-secondary);"></i>Regional Specialties</h3>
                            <div class="card bg-light border-0">
                                <div class="card-body">
                                    <ul class="mb-0">
                                        <li class="mb-2"><strong>Lavangi (Lankaran):</strong> Chicken or fish stuffed
                                            with <strong>walnuts, onions, and plum paste</strong>, cooked in a
                                            <em>tandir</em> oven.
                                        </li>
                                        <li class="mb-2"><strong>Arzuman Kufta (Nakhchivan):</strong> Enormous meatball
                                            from a <strong>full chicken stuffed with boiled egg</strong>, encased in
                                            minced beef.</li>
                                        <li class="mb-0"><strong>Tskan (Gusar):</strong> Hearty <strong>meat
                                                pie</strong>
                                            stuffed with potatoes, cabbage, and thyme — perfect for mountain climates.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Sweets and Tea -->
                        <div class="mb-4">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-mug-hot me-2"
                                    style="color: var(--bs-secondary);"></i>Sweets and Tea Culture</h3>
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-mug-hot me-2"></i>Tea Ceremony
                                            </h6>
                                            <p class="small mb-0">Tea is synonymous with hospitality, served in
                                                pear-shaped <strong><em>armudu</em></strong> glasses with lemon, jam, or
                                                nuts.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-cookie me-2"></i>Pakhlava &
                                                Shekerbura</h6>
                                            <p class="small mb-0">Iconic Novruz sweets. <em>Pakhlava</em>:
                                                diamond-shaped
                                                with nuts and honey. <em>Shekerbura</em>: half-moon with hazelnut
                                                filling.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i class="fa fa-candy-cane me-2"></i>Sheki Halva
                                            </h6>
                                            <p class="small mb-0">Unlike common varieties — a super-sweet pastry of
                                                rice-based layers, ground nuts, sugar, and syrup.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vegetarian & Vegan Options -->
                        <div class="mb-5 pb-4 border-bottom">
                            <h3 class="h4 mb-3" style="color: #13357B;"><i class="fa fa-leaf me-2"
                                    style="color: var(--bs-secondary);"></i>Vegetarian & Vegan Options</h3>
                            <p>While Azerbaijani cuisine is traditionally meat-heavy, travelers will find
                                <strong>flavorful vegetarian and vegan options</strong> rooted in organic produce and
                                dairy traditions.</p>

                            <h6 class="mt-4 mb-3" style="color: #13357B;">Core Vegetarian Dishes:</h6>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-3 border-success">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i
                                                    class="fa fa-check me-2 text-success"></i>Dovga</h6>
                                            <p class="small mb-0"><strong>Premier vegetarian choice</strong> — healthy
                                                yogurt soup with rice and fresh herbs (coriander, dill, mint). Served
                                                hot or cold.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-3 border-success">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i
                                                    class="fa fa-check me-2 text-success"></i>Vegetarian Gutabs</h6>
                                            <p class="small mb-0">Flatbreads stuffed with <strong>spinach, green herbs,
                                                    cheese, or pumpkin</strong>. Served with yogurt and pomegranate.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-3 border-success">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i
                                                    class="fa fa-check me-2 text-success"></i>Shirin Plov</h6>
                                            <p class="small mb-0">Meat-free rice pilaf with <strong>raisins and dried
                                                    apricots</strong>, seasoned with local flavors and nuts.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm border-start border-3 border-success">
                                        <div class="card-body">
                                            <h6 style="color: #13357B;"><i
                                                    class="fa fa-check me-2 text-success"></i>Vegetarian Dolma</h6>
                                            <p class="small mb-0">Versions with <strong>nut fillings</strong> or
                                                herb-and-rice mixtures in grape leaves. Summer: stuffed aubergines,
                                                tomatoes, peppers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="mt-4 mb-3" style="color: #13357B;">Breakfast & Side Dishes:</h6>
                            <div class="card bg-light border-0 mb-4">
                                <div class="card-body">
                                    <ul class="mb-0">
                                        <li class="mb-2"><strong>Pomidor Chighirtma:</strong> <strong>Scrambled eggs
                                                with cooked tomatoes</strong>, enjoyed with hot <em>tandir</em> bread,
                                            honey, and local cheeses.</li>
                                        <li class="mb-2"><strong>Fresh Produce & Dairy:</strong> High-quality organic
                                            <strong>fruits, vegetables, and local cheeses</strong>. Also <em>ayran</em>
                                            (yogurt drink) and fresh curd.</li>
                                        <li class="mb-0"><strong>Breads:</strong> <em>Tandir</em> bread and flaky
                                            <em>fasali</em> flatbreads, often drizzled with honey.</li>
                                    </ul>
                                </div>
                            </div>

                            <h6 class="mt-4 mb-3" style="color: #13357B;">Regional Vegetarian Hotspots:</h6>
                            <div class="row g-3 mb-4">
                                <div class="col-md-3">
                                    <div class="card h-100 border-0 shadow-sm text-center">
                                        <div class="card-body">
                                            <i class="fa fa-city fa-2x text-primary mb-2"></i>
                                            <h6 style="color: #13357B;">Baku</h6>
                                            <p class="small mb-0">Highest concentration of <strong>specialized
                                                    vegetarian restaurants</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card h-100 border-0 shadow-sm text-center">
                                        <div class="card-body">
                                            <i class="fa fa-mountain fa-2x text-primary mb-2"></i>
                                            <h6 style="color: #13357B;">Gabala</h6>
                                            <p class="small mb-0">Several <strong>Indian restaurants</strong> available
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card h-100 border-0 shadow-sm text-center">
                                        <div class="card-body">
                                            <i class="fa fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                            <h6 style="color: #13357B;">Ganja</h6>
                                            <p class="small mb-0"><strong>Kata</strong> — large flatbreads with herbs
                                                and cheese</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card h-100 border-0 shadow-sm text-center">
                                        <div class="card-body">
                                            <i class="fa fa-home fa-2x text-primary mb-2"></i>
                                            <h6 style="color: #13357B;">Khinalig</h6>
                                            <p class="small mb-0"><strong>Spinach flatbreads</strong> and traditional
                                                tea</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="mt-4 mb-3" style="color: #13357B;">Vegetarian-Friendly Sweets:</h6>
                            <p class="small">Most traditional sweets are vegetarian: <strong>Pakhlava</strong> (layered
                                pastry with nuts and honey), <strong>Shekerbura</strong> (patterned pastry with
                                hazelnuts), and <strong>turshu lavash</strong> (fruit leathers made from plums).</p>
                        </div>

                        <div class="alert alert-light border-start border-5 border-success mb-4">
                            <p class="mb-0"><i class="fa fa-leaf me-2 text-success"></i>Navigating Azerbaijan as a
                                vegetarian is like <strong>exploring a lush garden</strong>; while the main paths are
                                often lined with traditional grills, there are vibrant, hidden corners filled with the
                                "green" flavors of the earth and the rich traditions of the countryside.</p>
                        </div>

                        <div class="alert alert-light border-start border-5 border-primary">
                            <p class="mb-0"><i class="fa fa-quote-left me-2 text-primary"></i>Azerbaijani cuisine is
                                like a <strong>hand-woven carpet</strong>; each region adds its own distinct color and
                                pattern, but all are tied together by a foundational thread of warm hospitality and
                                fresh, organic ingredients.</p>
                        </div>
                    </section>

                    <!-- UNESCO Sites Section -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: #13357B; font-family: 'Jost', sans-serif;">UNESCO World Heritage
                            Sites in Azerbaijan</h2>
                        <p>Azerbaijan is home to several UNESCO World Heritage Sites that showcase the country's
                            transition from prehistoric times to medieval dynasties.</p>
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 style="color: #13357B;"><i class="fa fa-landmark me-2"></i>Walled City of
                                            Baku</h6>
                                        <p class="small mb-0">Icherisheher with Maiden Tower and Palace of Shirvanshahs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 style="color: #13357B;"><i class="fa fa-mountain me-2"></i>Gobustan Rock Art
                                        </h6>
                                        <p class="small mb-0">Prehistoric petroglyphs dating back 40,000 years.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 style="color: #13357B;"><i class="fa fa-chess-rook me-2"></i>Sheki Historic
                                            Centre</h6>
                                        <p class="small mb-0">Khan's Palace with famous shebeke glasswork.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- FAQ Section -->
                    <section id="faqs" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">Frequently
                            Asked Questions</h2>
                        <div class="accordion" id="azerbaijanFaq">
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Do I need a visa to visit Azerbaijan?</strong>
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#azerbaijanFaq">
                                    <div class="accordion-body">
                                        Most nationalities can obtain an <strong>e-visa</strong> online through the ASAN
                                        Visa portal. UAE residents often enjoy simplified visa processes. Always check
                                        current requirements before traveling.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>What is the best time to visit Azerbaijan?</strong>
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#azerbaijanFaq">
                                    <div class="accordion-body">
                                        The best time to visit is <strong>April to June</strong> (spring) and
                                        <strong>September to October</strong> (autumn) when the weather is pleasant.
                                        Winter is ideal for Shahdag skiing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>How many days do I need in Azerbaijan?</strong>
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#azerbaijanFaq">
                                    <div class="accordion-body">
                                        We recommend <strong>5-7 days</strong> to explore Baku and surrounding areas.
                                        For a comprehensive tour including Sheki, Gabala, and mountain regions, plan for
                                        <strong>7-10 days</strong>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- CTA -->
                    <div class="card text-white mb-5" style="background-color: var(--bs-primary);">
                        <div class="card-body text-center p-5">
                            <h3 class="text-white mb-3"><i class="fa fa-plane me-2"></i>Plan Your Azerbaijan Adventure
                            </h3>
                            <p class="mb-4">Customized Azerbaijan tours with visa assistance, hotels, and
                                transportation!</p>
                            <a href="../baku" class="btn btn-light btn-lg rounded-pill px-5 py-3">
                                <i class="fa fa-search me-2"></i>Explore All Baku Packages
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Travel Checklist -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="card" style="border-color: #13357B;">
                        <div class="card-header text-white" style="background-color: #13357B;">
                            <h5 class="mb-0"><i class="fa fa-list me-2"></i>Travel Checklist</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Apply for e-visa (ASAN portal)</li>
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Book flights early</li>
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Exchange to AZN currency</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Download offline maps</li>
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Pack layers (mountains!)</li>
                                        <li class="mb-2"><i class="fa fa-check-circle me-2"
                                                style="color: #13357B;"></i>Book tour packages</li>
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

<!-- Book Your Dubai Package CTA Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h5 class="section-title px-3">Planning a Dubai Trip?</h5>
            <h2 class="mb-3">Explore Our Dubai Packages</h2>
            <p class="text-muted">From budget-friendly getaways to premium family holidays — all with Jain food and 24/7 support.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Dubai Winter Escape</h5>
                    <p class="text-muted small">5N/6D — From AED 2,499</p>
                    <a href="/dubai-winter-escape" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Dubai & Abu Dhabi Deal</h5>
                    <p class="text-muted small">5N/6D — From AED 3,299</p>
                    <a href="/dubai-abu-dhabi-deal" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
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

<!-- Subscribe Section -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-4">Get Azerbaijan Travel Updates</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers, travel tips, and
                updates on Azerbaijan and Caucasus destinations. Discover the best of Baku, nature, and culture!</p>
            <div class="position-relative mx-auto">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>