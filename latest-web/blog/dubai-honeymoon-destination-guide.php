<?php
// ====================================
// Dubai Honeymoon Destination Guide
// ====================================

// Set base path for assets (since we're in /blog/ subdirectory)
$basePath = "../";

// Blog Post SEO Variables
$pageTitle = "Dubai Honeymoon Guide 2026: Romantic Packages & Places | Arihant Travels";
$pageDescription = "Plan your dream honeymoon in Dubai! Discover romantic dinners, luxury resorts, private desert safaris, and exclusive couple packages. Detailed guide for 2026.";
$pageKeywords = "dubai honeymoon packages, romantic places in dubai, best hotels for honeymoon in dubai, dubai honeymoon itinerary, couple activities dubai, desert safari for couples, burj khalifa romantic dinner";
$pageCanonical = "https://arihantlink.com/blog/dubai-honeymoon-destination-guide";
$currentPage = "blog";

// AI SEO & Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Dubai Honeymoon Destination: Complete Guide for Newlyweds 2026",
  "image": "https://arihantlink.com/img/blogs/Honeymoon/honeymoon-in-dubai-an-extraordinary-beginning-to-your-married-life-beach-romance.webp",
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
  "datePublished": "2025-12-20",
  "dateModified": "2026-03-02",
  "description": "Your honeymoon is the first chapter of your life together. Discover why Dubai\'s blend of desert magic, beach serenity, and luxury makes it the ultimate canvas for your love story.",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://arihantlink.com/blog/dubai-honeymoon-destination-guide"
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
    "name": "Dubai Honeymoon Guide",
    "item": "https://arihantlink.com/blog/dubai-honeymoon-destination-guide"
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is the best time for a honeymoon in Dubai?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The best time for a honeymoon in Dubai is from November to March when the weather is pleasant and perfect for outdoor romantic activities. December and January are particularly popular."
    }
  },{
    "@type": "Question",
    "name": "How much does a Dubai honeymoon cost?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A 5-day honeymoon in Dubai can cost between AED 5,000 to AED 15,000+ depending on your choice of hotels and activities. Arihant Travels offers customized packages to suit various budgets."
    }
  },{
    "@type": "Question",
    "name": "Is Dubai good for a honeymoon?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, Dubai is one of the world\'s top honeymoon destinations, offering a perfect mix of luxury, adventure, beaches, and world-class dining. It provides privacy, safety, and unforgettable experiences for couples."
    }
  },{
    "@type": "Question",
    "name": "What are the most romantic things to do in Dubai?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Top romantic activities include a private desert dinner under the stars, a sunset yacht cruise, a hot air balloon ride, and dining at At.mosphere in Burj Khalifa."
    }
  }]
}
</script>';

// Blog Post Meta Information
$blogTitle = "Dubai Honeymoon Destination: Complete Guide for Newlyweds 2026";
$blogCategory = "Dubai Tours";
$blogCategoryClass = "danger"; // Using danger for romantic red color
$blogAuthor = "Arihant Travels Team";
$blogDate = "December 20, 2025";
$blogReadTime = "12 min read";
$blogFeaturedImage = "../img/blogs/Honeymoon/honeymoon-in-dubai-an-extraordinary-beginning-to-your-married-life-beach-romance.webp";
$blogImageAlt = "Romantic couple enjoying a beach sunset in Dubai - Perfect honeymoon destination";
$blogExcerpt = "Your honeymoon is the first chapter of your life together. Discover why Dubai's blend of desert magic, beach serenity, and luxury makes it the ultimate canvas for your love story.";

// Blog Tags
$blogTags = ["Honeymoon", "Dubai", "Couples", "Romantic Getaway", "Luxury Travel", "Desert Safari", "Beach Romance"];

// Related Posts
$relatedPosts = [
    [
        'title' => 'Dubai Desert Safari: Ultimate Adventure Guide',
        'url' => 'dubai-desert-safari-ultimate-guide',
        'image' => '../img/safari/premiumcamp/premium-desert-safari.webp',
        'category' => 'Adventure'
    ],
    [
        'title' => 'Burj Khalifa: Icon of Dubai Architecture',
        'url' => 'burj-khalifa-icon-of-dubai',
        'image' => '../img/blogs/burj-khalifa/burj-khalifa-dubai-skyline-hero.webp',
        'category' => 'Dubai Tours'
    ]
];

include '../includes/header.php';
?>

<!-- Blog Post Hero Section Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 1200px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Category Badge -->
                <span class="badge bg-<?php echo $blogCategoryClass; ?> px-4 py-2 mb-3" style="font-size: 14px;">
                    <?php echo $blogCategory; ?>
                </span>

                <!-- Blog Title -->
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

                <!-- Blog Excerpt -->
                <p class="fs-5 text-white mb-4" style="max-width: 800px; margin: 0 auto;">
                    <?php echo $blogExcerpt; ?>
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
<!-- Blog Post Hero Section End -->

<!-- Breadcrumb Navigation -->
<div class="container-fluid bg-light py-3">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
            <li class="breadcrumb-item active"><?php echo $blogCategory; ?></li>
        </ol>
    </div>
</div>

<!-- Featured Image Section Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="<?php echo $blogFeaturedImage; ?>" alt="<?php echo $blogImageAlt; ?>"
                    class="img-fluid rounded shadow-lg w-100" style="max-height: 500px; object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<!-- Featured Image Section End -->

<!-- Blog Content Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Main Content Column -->
            <div class="col-lg-10 mx-auto">

                <!-- Blog Content Starts Here -->
                <div class="blog-content" style="line-height: 1.8; font-size: 17px;">

                    <!-- Section 1: Why Dubai -->
                    <section id="why-dubai" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            1. The Perfect Canvas for Your Love Story
                        </h2>
                        <p>
                            Your honeymoon isn't just a holiday; it's the beginning of your "happily ever after."
                            Dubai understands the language of love, offering a mesmerizing blend of Arabian fairytale
                            magic
                            and modern luxury. From the moment you land, the city wraps you in an embrace of warmth,
                            opulence, and endless possibilities.
                        </p>
                        <p>
                            Imagine waking up to the gentle sound of waves on Palm Jumeirah, holding hands as you watch
                            the fountains dance to music, or sharing a quiet moment atop of the world at the Burj
                            Khalifa.
                            Dubai provides the cinematic backdrop your love story deserves.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/couple-at-burj-khalifa.webp"
                                alt="Romantic couple at Burj Khalifa viewing deck" class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Experience breathtaking views together at the world's tallest building
                            </figcaption>
                        </figure>

                        <p>
                            Couples can indulge in world-class dining at picturesque beachfront restaurants or immerse
                            themselves in cultural experiences by exploring traditional souks and the rich heritage of
                            the region. With luxurious accommodations ranging from opulent resorts to intimate boutique
                            hotels, Dubai caters to varying tastes and budgets, ensuring a romantic and memorable stay.
                        </p>

                        <!-- Romance Tip Box -->
                        <div class="p-4 bg-light rounded border-start border-5 border-primary my-4">
                            <h5 class="text-primary mb-3"><i class="fa fa-heart me-2"></i>Romance Tip</h5>
                            <p class="mb-0">
                                Honeymoon packages at various resorts often include special perks like private dinners,
                                spa discounts, and romantic room setups, allowing couples to enhance their romantic
                                escape further. Be sure to inquire about these when making your reservation!
                            </p>
                        </div>

                        <p>
                            Notably, Dubai offers a plethora of unique experiences that set it apart from other
                            destinations. From the thrill of skydiving over Palm Jumeirah to serene evenings spent by
                            the Love Lakes, the city seamlessly blends excitement with relaxation.
                        </p>
                    </section>

                    <!-- Unmissable Romantic Moments Section -->
                    <section id="romantic-moments" class="mb-5">
                        <div class="card bg-light border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="card-title text-center text-primary mb-4"
                                    style="font-family: 'Jost', sans-serif;">
                                    <i class="fa fa-heart text-danger me-2"></i>5 Unmissable Romantic Moments in Dubai
                                </h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>A Sunset Kiss in the Sky:</strong> Share a breathtaking moment 240
                                            meters above the ground at <em>The View at The Palm</em> as the sun dips
                                            below the horizon.
                                        </div>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>Dinner Under the Stars:</strong> Escape to a private desert camp
                                            where the only light comes from flickering candles and the endless starry
                                            sky.
                                        </div>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>"The Walk" at Sunset:</strong> Stroll hand-in-hand along Jumeirah
                                            Beach Residence (JBR) with the sound of waves as your soundtrack.
                                        </div>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>Couple's Spa Retreat:</strong> Indulge in a "Royal Ottoman" couple's
                                            massage at the Talise Ottoman Spa for pure relaxation.
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>A Fairytale Boat Ride:</strong> Drift across the Burj Lake in a
                                            traditional Abra while the Dubai Fountain performs just for you.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Section 2: Romantic Attractions -->
                    <section id="romantic-attractions" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            2. Romantic Attractions for Honeymooners
                        </h2>
                        <p>
                            Dubai offers a plethora of attractions that cater to honeymoon travelers seeking both
                            romance and adventure. From stunning landmarks to immersive cultural experiences, couples
                            can create unforgettable memories in this sun-soaked metropolis.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Iconic Landmarks</h3>

                        <h4 class="mb-3">Burj Khalifa</h4>
                        <p>
                            There's something undeniably magical about standing on top of the world with the one you
                            love.
                            The Burj Khalifa offers more than just a view; it offers a moment of shared awe.
                            Ascend to the "At the Top SKY" lounge on the 148th floor, where you can toast to your new
                            life
                            with Arabic coffee and sweets, watching the city shrink below you. For unmatched romance,
                            visit <em>The Lounge</em> at 585 meters for sunset cocktails—the perfect golden hour photo
                            opportunity.
                        </p>
                        <div class="alert alert-warning mb-4">
                            <strong><i class="fa fa-clock me-2"></i>Best Time to Visit:</strong> Early mornings or late
                            evenings to avoid the crowds and enjoy stunning sunrise or sunset views.
                        </div>

                        <h4 class="mb-3">Dubai Fountain</h4>
                        <p>
                            Forget standing in the crowd; the most romantic way to experience the world's largest
                            dancing fountain
                            is from the water. Board a traditional wooden Abra and drift across the Burj Lake.
                            With the water splashing gently and the fountains swaying to Andrea Bocelli, it feels like
                            the
                            entire show is a private serenade just for you.
                        </p>

                        <h4 class="mb-3">Dubai Miracle Garden</h4>
                        <p>
                            Walk hand-in-hand through a literal heart-shaped archway at the Dubai Miracle Garden.
                            With over 150 million blooming flowers, this is a real-life "Garden of Eden."
                            It’s whimsical, colorful, and utterly romantic—perfect for stealing a kiss under a canopy of
                            petals or capturing that one photo you'll frame on your wall forever.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/dubai-burj-khalifa-at-the-top.avif"
                                alt="Dubai Burj Khalifa observation deck experience"
                                class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Marvel at Dubai's skyline from the world's highest observation deck
                            </figcaption>
                        </figure>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Cultural Experiences</h3>

                        <h4 class="mb-3">Dubai Opera</h4>
                        <p>
                            For a night of culture, the Dubai Opera hosts a variety of performances, from opera to
                            ballet. Its architectural beauty ensures that every seat offers a great view, making it a
                            wonderful evening destination for couples looking to enjoy world-class entertainment.
                        </p>

                        <h4 class="mb-3">Traditional Souks</h4>
                        <p>
                            Exploring Dubai's traditional souks, such as the Gold Souk and the Spice Souk, offers a
                            glimpse into the city's heritage. Couples can ride across Dubai Creek in an abra and immerse
                            themselves in the vibrant atmosphere of the marketplace. A visit to Al Seef allows for a
                            relaxed evening dining along the waterfront, surrounded by historic architecture.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/JBR-walk.webp"
                                alt="Romantic couple walking at JBR beach walk" class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Enjoy romantic strolls along Dubai's beautiful beachfront promenades
                            </figcaption>
                        </figure>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Outdoor Adventures</h3>

                        <h4 class="mb-3">Desert Experiences</h4>
                        <p>
                            Dubai's vast desert is perfect for couples seeking adventure. Whether it's a serene sunrise
                            camel ride or an adrenaline-fueled dune bashing experience, the desert offers various
                            activities such as sandboarding and quad-biking. For a more tranquil option, couples can
                            embark on a vintage Land Rover safari to capture memorable moments against the stunning
                            desert backdrop.
                        </p>

                        <h4 class="mb-3">Love Lakes</h4>
                        <p>
                            Escape the city lights for a starry night at the Love Lakes in Al Qudra.
                            These two interconnected heart-shaped lakes are a hidden gem for couples.
                            Pack a picnic basket, watch the sunset reflect on the water, and enjoy the rare luxury of
                            total silence and privacy in the middle of the desert.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/Love-Lake-in-Dubai.jpg"
                                alt="Love Lake Dubai - Heart-shaped lakes for romantic couples"
                                class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Love Lakes at Al Qudra - A romantic heart-shaped natural retreat
                            </figcaption>
                        </figure>
                    </section>

                    <!-- Section 3: Luxury Accommodation -->
                    <section id="luxury-accommodation" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            3. Luxury Accommodation for Honeymooners
                        </h2>
                        <p>
                            Your hotel isn't just a place to sleep; it's your private sanctuary. Dubai's hospitality is
                            legendary,
                            but for honeymooners, it goes a step further—offering intimacy, seclusion, and pure
                            pampering.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/honeymoon_dubai-2.webp"
                                alt="Romantic honeymoon couple in Dubai luxury resort"
                                class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Indulge in world-class luxury at Dubai's premier honeymoon resorts
                            </figcaption>
                        </figure>

                        <div class="row g-4 my-4">
                            <div class="col-md-12">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary"><i class="fa fa-hotel me-2"></i>One&Only The
                                            Palm</h4>
                                        <p class="card-text">
                                            This beachfront paradise on the iconic Palm Jumeirah is celebrated for its
                                            opulence and romantic atmosphere. Voted the #1 Resort in the Middle East, it
                                            features elegantly appointed rooms with stunning sea views, making it a
                                            popular choice for honeymooners seeking tranquility and luxury.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary"><i class="fa fa-hotel me-2"></i>Atlantis The
                                            Royal</h4>
                                        <p class="card-text">
                                            Imagine waking up in a Sky Pool Villa, where your private infinity pool
                                            seems to merge with the clouds.
                                            Atlantis The Royal redefines luxury with a modern, edgy vibe. It's for the
                                            couple who wants
                                            it all: celebrity-chef dining, vibrant nightlife, and quiet mornings on a
                                            private terrace
                                            with butler service at your fingertips.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary"><i class="fa fa-hotel me-2"></i>The
                                            Ritz-Carlton</h4>
                                        <p class="card-text">
                                            Located in the Marina District, The Ritz-Carlton combines classic charm with
                                            modern luxury. The Club Level Ocean View Suite, designed specifically with
                                            romance in mind, features a large balcony with a view of the Gulf, a
                                            king-sized bed, and exclusive club lounge access. This hotel offers a
                                            romantic ambiance that is perfect for couples looking to enjoy a luxurious
                                            stay.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 bg-light rounded border-start border-5 border-primary my-4">
                            <h5 class="text-primary mb-3"><i class="fa fa-gift me-2"></i>Honeymoon Packages</h5>
                            <p class="mb-0">
                                Many resorts and hotels offer tailored honeymoon packages, which often include romantic
                                perks such as private dinners, spa discounts, and special welcome treats. It is
                                advisable for couples to inquire about such offerings when making reservations to
                                enhance their experience.
                            </p>
                        </div>
                    </section>

                    <!-- CTA Section: WhatsApp Booking -->
                    <div class="card bg-primary text-white mb-5">
                        <div class="card-body text-center p-5">
                            <h3 class="text-white mb-3">Ready to Plan Your Dream Honeymoon?</h3>
                            <p class="mb-4">Contact us on WhatsApp to design your perfect romantic Dubai getaway with
                                personalized recommendations and exclusive honeymoon packages!</p>
                            <a href="https://wa.me/971585945007?text=I want to plan my Dubai honeymoon" target="_blank"
                                class="btn btn-light btn-lg rounded-pill px-5 py-3">
                                <i class="fab fa-whatsapp me-2"></i>Chat with Us on WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Section 4: Romantic Dining -->
                    <section id="romantic-dining" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            4. Romantic Dining Experiences
                        </h2>
                        <p>
                            A candlelight dinner on the beach? A private table in the dunes? Dubai elevates dining into
                            a sensory journey. It's not just about the food; it's about the atmosphere, the view, and
                            the
                            company.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Beachfront Dining</h3>
                        <p>
                            One of the most enchanting dining options in Dubai is the beachfront experience, where
                            couples can indulge in romantic dinners overlooking the Arabian Gulf. Restaurants like Kyma
                            at Palm West Beach provide a breathtaking backdrop for an intimate evening, featuring menus
                            designed to impress lovers with exquisite flavors and captivating views. Another highlight
                            is Pierchic, located at Madinat Jumeirah, which offers a dreamy overwater dining experience
                            that combines stunning scenery with gourmet cuisine.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Desert Dining</h3>
                        <p>
                            For those looking to escape the city, the Romantic Desert Dinner experience is a unique
                            option that allows couples to dine under the stars in a serene and tranquil setting. This
                            experience typically includes a thrilling ride over the golden sand dunes before arriving at
                            a secluded spot adorned with soft lanterns and flickering candles.
                        </p>
                        <p>
                            Guests can enjoy a gourmet meal crafted with the finest ingredients while surrounded by the
                            natural beauty of the desert. This intimate setting, paired with attentive service, creates
                            the perfect atmosphere for love to flourish.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/desert-honeymoon-dining.png"
                                alt="Luxury dining at Burj Al Arab" class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Experience world-class dining at Dubai's most iconic landmarks
                            </figcaption>
                        </figure>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Unique Dining Experiences</h3>
                        <p>
                            Dubai is also home to several distinctive dining venues that provide unique experiences for
                            couples. The underwater dining experience at Ossiano offers a romantic atmosphere surrounded
                            by marine life, making it an extraordinary choice for those looking to impress their
                            partners. For a touch of elegance, the luxurious private dining setups nestled in the dunes
                            provide an exclusive retreat that combines refined comfort with the magic of nature.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Sunset and Scenic Views</h3>
                        <p>
                            Dining experiences that offer sunset views are particularly appealing for couples
                            celebrating their love. Sunset dining in tranquil natural settings, such as those offered in
                            private cabanas along Jumeirah Beach, provides an idyllic backdrop for romantic moments. As
                            the sun sets, couples can enjoy the beautiful transition of the sky while indulging in
                            culinary delights crafted to enhance their experience.
                        </p>
                    </section>

                    <!-- Section 5: Romantic Activities -->
                    <section id="romantic-activities" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            5. Romantic Activities for Honeymooners
                        </h2>
                        <p>
                            Dubai offers a myriad of romantic and adventurous activities for honeymooners, making it a
                            premier destination for couples seeking both relaxation and excitement. From stunning desert
                            landscapes to luxurious spa retreats, the city provides a diverse range of experiences that
                            cater to all preferences.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Romantic Desert Experiences</h3>
                        <p>
                            One of the quintessential activities for honeymooners is the romantic desert safari, where
                            couples can indulge in dune bashing, camel riding, and sandboarding. As the sun sets over
                            the dunes, a traditional Bedouin dinner awaits under the stars, complete with cultural
                            performances, creating a memorable evening for both partners.
                        </p>
                        <p>
                            For a more intimate experience, an overnight camp stay in the desert offers the chance to
                            cozy up by a crackling campfire and enjoy a starlit sky, waking up to breathtaking sunrises
                            painted across the golden sands.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/newly-wedcouple-desert-star.png"
                                alt="Romantic couple stargazing in Dubai desert" class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Experience the magic of a private starlit desert dinner
                            </figcaption>
                        </figure>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Thrilling Adventures</h3>
                        <p>
                            Adventurous couples can take to the skies with hot air balloon rides, offering panoramic
                            views of the serene desert landscape. For those seeking an adrenaline rush, activities such
                            as skydiving over Palm Jumeirah or flyboarding along the coastline provide exhilarating
                            experiences that are sure to create lasting memories.
                        </p>
                        <ul class="mb-4">
                            <li>Hot air balloon rides over the desert at sunrise</li>
                            <li>Skydiving over the iconic Palm Jumeirah</li>
                            <li>Flyboarding adventures along Dubai's coastline</li>
                            <li>Indoor skiing at Ski Dubai</li>
                            <li>Water park adventures at Wild Wadi Waterpark</li>
                        </ul>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Luxurious Relaxation</h3>
                        <p>
                            After days filled with adventure, couples can unwind at luxurious spas such as the Talise
                            Ottoman Spa, known for its award-winning treatments and romantic ambiance. A day at Jumeirah
                            Beach is also a perfect way to relax, where couples can soak up the sun and enjoy beachside
                            picnics or refreshing dips in the sea.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Unique Experiences</h3>
                        <p>
                            Dining in Dubai can be both extraordinary and romantic. A Dhow cruise offers a scenic dinner
                            experience on traditional sailing vessels navigating the city's waterways, while private
                            yacht charters allow couples to savor meals in a luxurious setting along the coastline. For
                            a truly unique experience, dinner suspended by a crane above the city or on a glass-enclosed
                            boat adds a touch of thrill to romantic dining.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Cultural Exploration</h3>
                        <p>
                            Couples can immerse themselves in local culture by taking a serene abra ride along Dubai
                            Creek or exploring the bustling souks. Helicopter tours also offer breathtaking views of the
                            city's architectural wonders, making it an exciting way to appreciate Dubai's skyline
                            together.
                        </p>

                        <figure class="my-4">
                            <img src="../img/blogs/Honeymoon/cultural-abra-ride.png"
                                alt="Couple enjoying a traditional Abra ride in Dubai"
                                class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Discover old-world charm with a romantic Abra ride on Dubai Creek
                            </figcaption>
                        </figure>
                    </section>

                    <!-- Section 6: Travel Tips -->
                    <section id="travel-tips" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            6. Travel Tips for Your Dubai Honeymoon
                        </h2>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Best Time to Visit</h3>
                        <p>
                            The ideal months for a honeymoon in Dubai are from December to March, when the weather is
                            cooler and perfect for outdoor activities. December offers festive holiday vibes, while
                            January is great for relaxed city explorations. If you're interested in food and music
                            festivals, February is a vibrant month, showcasing events like the Dubai Food Festival and
                            Taste of Dubai. For art enthusiasts, early March is the best time to attend Art Dubai and
                            Sikka Art Festival.
                        </p>

                        <div class="table-responsive my-4">
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Month</th>
                                        <th>Weather</th>
                                        <th>Best For</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>December</td>
                                        <td>20-26°C (68-79°F)</td>
                                        <td>Festive celebrations, outdoor activities</td>
                                    </tr>
                                    <tr>
                                        <td>January</td>
                                        <td>18-24°C (64-75°F)</td>
                                        <td>City exploration, beach time</td>
                                    </tr>
                                    <tr>
                                        <td>February</td>
                                        <td>19-25°C (66-77°F)</td>
                                        <td>Food festivals, cultural events</td>
                                    </tr>
                                    <tr>
                                        <td>March</td>
                                        <td>21-28°C (70-82°F)</td>
                                        <td>Art festivals, spring activities</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Budget-Friendly Tips</h3>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary"><i class="fa fa-ticket me-2"></i>Tourist
                                            Passes</h5>
                                        <p class="card-text">Consider using the Dubai Tourist Pass or Official Abu Dhabi
                                            Pass to bundle experiences and save money on attractions and activities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary"><i class="fa fa-utensils me-2"></i>Dining
                                            Deals</h5>
                                        <p class="card-text">Utilize apps like the Entertainer App for
                                            buy-one-get-one-free dining deals to enhance your romantic getaway without
                                            breaking the bank.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary"><i
                                                class="fa fa-subway me-2"></i>Transportation</h5>
                                        <p class="card-text">Explore affordable public transportation options, such as
                                            the metro, to save on taxi fares and direct funds towards experiences.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary"><i class="fa fa-calendar me-2"></i>Visit on
                                            Weekdays</h5>
                                        <p class="card-text">Visit popular destinations like Kite Beach or Love Lake on
                                            weekdays to avoid crowds and enjoy a more intimate experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Insider Tips</h3>
                        <ul class="mb-4">
                            <li><strong>Carry small cash</strong> for haggling at souks, where you can enjoy local
                                markets without overspending</li>
                            <li><strong>Pack appropriately</strong> - light clothing for the heat and a shawl for
                                air-conditioned spaces</li>
                            <li><strong>Book in advance</strong> for popular attractions and restaurants, especially
                                during peak season</li>
                            <li><strong>Respect local customs</strong> - dress modestly when visiting cultural sites and
                                neighborhoods</li>
                            <li><strong>Stay hydrated</strong> - always carry water, especially when exploring outdoor
                                attractions</li>
                        </ul>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Dining and Cuisine</h3>
                        <p>
                            Explore local cuisines by participating in food festivals, which offer a chance to taste a
                            variety of dishes at reasonable prices. When dining out, look for restaurants with lunchtime
                            deals or happy hour specials to enjoy delicious meals while saving money.
                        </p>
                    </section>

                    <!-- Section 7: FAQs -->
                    <section id="faqs" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            7. Frequently Asked Questions
                        </h2>
                        <div class="accordion" id="honeymoonFaq">
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>When is the best time for a honeymoon in Dubai?</strong>
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#honeymoonFaq">
                                    <div class="accordion-body">
                                        The best time for a honeymoon in Dubai is from <strong>November to
                                            March</strong>. During these months, the weather is pleasant (20°C to 30°C),
                                        making it perfect for outdoor romantic activities like desert safaris, beach
                                        dinners, and yacht cruises.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>How much does a Dubai honeymoon cost?</strong>
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#honeymoonFaq">
                                    <div class="accordion-body">
                                        A 5-day honeymoon in Dubai can cost between <strong>AED 5,000 to AED
                                            15,000+</strong> depending on your choice of accommodation and activities.
                                        Budget-friendly options are available, but luxury experiences like private
                                        yachts and 5-star resorts will increase the cost. Arihant Travels offers
                                        customized packages to suit every budget.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Is Dubai good for a honeymoon?</strong>
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#honeymoonFaq">
                                    <div class="accordion-body">
                                        Absolutely! Dubai is one of the world's top honeymoon destinations. It offers a
                                        perfect mix of <strong>luxury, adventure, and romance</strong>. From safe and
                                        clean environments to world-class hospitality and diverse experiences (beaches,
                                        deserts, cityscapes), it caters to all types of couples.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>What are the most romantic things to do in Dubai?</strong>
                                    </button>
                                </h3>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#honeymoonFaq">
                                    <div class="accordion-body">
                                        Top romantic activities include:
                                        <ul>
                                            <li>Private desert dinner under the stars</li>
                                            <li>Sunset yacht cruise around Palm Jumeirah</li>
                                            <li>Hot air balloon ride at sunrise</li>
                                            <li>Fine dining at At.mosphere (Burj Khalifa)</li>
                                            <li>Couples spa day at Talise Ottoman Spa</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 8: Conclusion -->
                    <section id="conclusion" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            8. Create Unforgettable Memories in Dubai
                        </h2>
                        <p>
                            With a blend of romance, adventure, and relaxation, Dubai offers an unparalleled experience
                            for honeymooners looking to create unforgettable memories. From the towering Burj Khalifa to
                            serene desert landscapes, from luxurious beachfront resorts to intimate dining experiences
                            under the stars, every moment in Dubai is designed to celebrate your love.
                        </p>
                        <p>
                            The city's unique combination of modern luxury and traditional charm creates the perfect
                            backdrop for the beginning of your married life together. Whether you're seeking thrilling
                            adventures, peaceful relaxation, or cultural exploration, Dubai has something special to
                            offer every couple.
                        </p>
                        <p>
                            Start planning your dream honeymoon today and discover why Dubai continues to be one of the
                            world's most sought-after romantic destinations. Your perfect honeymoon awaits in this
                            dazzling city where dreams become reality!
                        </p>

                        <div class="p-4 bg-primary rounded border-start border-5 border-white my-4">
                            <h5 class="text-white mb-3"><i class="fa fa-heart me-2"></i>Ready to Begin Your Journey?
                            </h5>
                            <p class="mb-0 text-white">
                                Contact Arihant Travels today to start planning your perfect Dubai honeymoon. Our
                                experienced team will help you create a personalized itinerary that matches your dreams
                                and budget, ensuring your honeymoon is as magical as your love story.
                            </p>
                        </div>
                    </section>

                </div>
                <!-- Blog Content Ends Here -->

                <!-- Tags Section -->
                <div class="border-top pt-4 mt-5">
                    <h5 class="mb-3">Tags:</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <?php foreach ($blogTags as $tag): ?>
                            <span class="badge bg-light text-dark px-3 py-2" style="font-weight: 500;">
                                <?php echo $tag; ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Author Bio Section -->
                <div class="card mt-5 border-primary">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <img src="../img/logo.png" alt="Arihant Travels" class="rounded-circle"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                            </div>
                            <div class="col-md-10">
                                <h5 class="mb-2"><?php echo $blogAuthor; ?></h5>
                                <p class="text-muted mb-3">
                                    The Arihant Travels team specializes in creating unforgettable Dubai experiences
                                    with a focus on romantic getaways and honeymoon packages. With years of
                                    experience, we provide expert guidance for your perfect Dubai honeymoon vacation.
                                </p>
                                <div class="d-flex gap-2">
                                    <a href="https://www.facebook.com/profile.php?id=61561499244239" target="_blank"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/arihantlink/" target="_blank"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://x.com/arihantraveldxb" target="_blank"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Main Content Column End -->
        </div>

        <!-- Sidebar Content Moved Below -->
        <div class="row g-4 mt-5">
            <!-- Newsletter Signup -->
            <div class="col-lg-4">
                <div class="card h-100 border-primary">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white"><i class="fa fa-envelope me-2"></i>Subscribe for Travel Tips
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="small mb-3">Get exclusive Dubai travel tips and special honeymoon offers delivered
                            to your inbox!</p>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your email address" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Popular Categories -->
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-header bg-light">
                        <h5 class="mb-0"><i class="fa fa-folder me-2"></i>Popular Categories</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="/blog?category=dubai-tours"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Dubai Tours
                            <span class="badge bg-primary rounded-pill">8</span>
                        </a>
                        <a href="/blog?category=jain-friendly"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Jain-Friendly
                            <span class="badge bg-primary rounded-pill">3</span>
                        </a>
                        <a href="/blog?category=international"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            International
                            <span class="badge bg-primary rounded-pill">5</span>
                        </a>
                        <a href="/blog?category=visa-guide"
                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            Visa Guide
                            <span class="badge bg-secondary rounded-pill">2</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="col-lg-4">
                <div class="card bg-secondary text-white h-100">
                    <div class="card-body text-center p-4">
                        <i class="fa fa-headset fa-3x mb-3"></i>
                        <h5 class="text-white mb-3">Need Help Planning?</h5>
                        <p class="small mb-3">Our travel experts are here to create your perfect Dubai honeymoon
                            itinerary</p>
                        <a href="/contact" class="btn btn-light w-100 mb-2">Contact Us</a>
                        <a href="https://wa.me/971585945007" target="_blank" class="btn btn-success w-100">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Blog Content Section End -->

<!-- Related Posts Section Start -->
<?php if (!empty($relatedPosts)): ?>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="section-title px-3">Keep Reading</h5>
                <h2 class="mb-4">Related Articles</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($relatedPosts as $post): ?>
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="<?php echo $post['image']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>"
                                style="height: 280px; object-fit: cover;">
                            <div class="card-body">
                                <span class="badge bg-primary mb-2"><?php echo $post['category']; ?></span>
                                <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                <a href="<?php echo $post['url']; ?>" class="btn btn-outline-primary btn-sm mt-3">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- Related Posts Section End -->

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
                    <h5>Dubai Honeymoon Package</h5>
                    <p class="text-muted small">4N/5D — From AED 3,499</p>
                    <a href="/dubai-honeymoon-package" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Dubai Winter Escape</h5>
                    <p class="text-muted small">5N/6D — From AED 2,499</p>
                    <a href="/dubai-winter-escape" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Arabian Nights Dubai</h5>
                    <p class="text-muted small">4N/5D — From AED 2,199</p>
                    <a href="/arabian-nights-dubai" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
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
<!-- Subscribe Section End -->

<?php include '../includes/footer.php'; ?>