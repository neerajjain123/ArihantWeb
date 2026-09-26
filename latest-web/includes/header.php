<?php
if (session_status() === PHP_SESSION_NONE) {
    // Hardened session cookie. Must be set BEFORE session_start().
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => !empty($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

// Cache control is handled by .htaccess - no need for PHP headers
// Use $assetVersion query string for cache busting of CSS/JS

// Version for cache busting
$assetVersion = '1.0.8'; // Icon-font fix (mobile menu icon) + visa page styles
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // Set base path for assets - empty string for root pages, '../' for subdirectory pages
    if (!isset($basePath)) {
        $basePath = '';
    }
    ?>
    <meta charset="utf-8">

    <!-- Google Analytics 4 — loaded AFTER window.load so it does NOT compete with LCP / critical resources.
         dataLayer is created immediately so any inline gtag() calls before 'load' still queue correctly. -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        window.gtag = gtag;
        gtag('js', new Date());
        gtag('config', 'G-4TFBQEY0Z4');
        (function(){
            function loadGA(){
                if (window.__gaLoaded) return; window.__gaLoaded = true;
                var s = document.createElement('script');
                s.async = true;
                s.src = 'https://www.googletagmanager.com/gtag/js?id=G-4TFBQEY0Z4';
                document.head.appendChild(s);
            }
            if (document.readyState === 'complete') { loadGA(); }
            else { window.addEventListener('load', loadGA, { once: true }); }
        })();
    </script>

    <?php
    // ------------------------------------------------------------------
    // Remarketing pixels — fill in your IDs to activate.
    //   $metaPixelId:   Meta (Facebook/Instagram) Pixel ID from Events Manager
    //                   (business.facebook.com -> Events Manager -> Data Sources)
    //   $googleAdsId:   Google Ads conversion tag, format 'AW-XXXXXXXXXX'
    //                   (ads.google.com -> Tools -> Data manager / Google tag)
    // Leave empty ('') to keep them disabled. Both load after window.load,
    // same as GA4, so they do not hurt Core Web Vitals.
    // ------------------------------------------------------------------
    $metaPixelId = '';
    $googleAdsId = '';
    ?>
    <?php if (!empty($googleAdsId)): ?>
    <!-- Google Ads remarketing (shares the gtag loader below) -->
    <script>gtag('config', '<?php echo $googleAdsId; ?>');</script>
    <?php endif; ?>
    <?php if (!empty($metaPixelId)): ?>
    <!-- Meta Pixel — deferred to window.load to protect LCP -->
    <script>
        (function(){
            function loadFbq(){
                if (window.__fbqLoaded) return; window.__fbqLoaded = true;
                !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '<?php echo $metaPixelId; ?>');
                fbq('track', 'PageView');
            }
            if (document.readyState === 'complete') { loadFbq(); }
            else { window.addEventListener('load', loadFbq, { once: true }); }
        })();
    </script>
    <noscript><img height="1" width="1" style="display:none" alt=""
        src="https://www.facebook.com/tr?id=<?php echo $metaPixelId; ?>&ev=PageView&noscript=1"/></noscript>
    <?php endif; ?>

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="8Fp_xpOGClaVIO4wZ1kLosMdh-APNMdrARE2HjvC0jM" />

    <title><?php echo $pageTitle; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $pageKeywords; ?>" name="keywords">
    <meta content="<?php echo $pageDescription; ?>" name="description">
    <link rel="canonical" href="<?php echo $pageCanonical; ?>">

    <?php
    // Pages that should never be indexed (auth/legal/internal).
    $noindexPages = ['login', 'register', 'dashboard', 'logout', 'search', '404', 'page-template', 'blog-category',
                     'my-bookings', 'wishlist', 'profile', 'forgot-password', 'reset-password'];
    // blog-category: /blog?category=X filtered views — crawlable but not indexable
    if ((isset($currentPage) && in_array($currentPage, $noindexPages, true)) || !empty($forceNoindex)): ?>
    <meta name="robots" content="noindex, follow">
    <?php else: ?>
    <meta name="robots" content="index, follow, max-image-preview:large">
    <?php endif; ?>

    <!-- Hreflang: single canonical entry. Add /in/ and /ae/ geo variants only when content actually differs. -->
    <link rel="alternate" hreflang="en" href="<?php echo $pageCanonical; ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo $pageCanonical; ?>">

    <!-- Geo Targeting: Primary market India, Business location UAE -->
    <meta name="geo.region" content="IN" />
    <meta name="geo.region" content="AE-SH" />
    <meta name="geo.placename" content="Sharjah, United Arab Emirates" />
    <meta name="geo.position" content="25.3013436;55.3833683" />
    <meta name="ICBM" content="25.3013436, 55.3833683" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $pageCanonical; ?>">
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image"
        content="<?php echo 'https://arihantlink.com/' . ltrim(preg_replace('#^(\.\./)+#', '', isset($breadcrumbBg) ? $breadcrumbBg : 'img/logo.png'), '/'); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $pageCanonical; ?>">
    <meta property="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta property="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta property="twitter:image"
        content="<?php echo 'https://arihantlink.com/' . ltrim(preg_replace('#^(\.\./)+#', '', isset($breadcrumbBg) ? $breadcrumbBg : 'img/logo.png'), '/'); ?>">

    <?php if (isset($schemaMarkup)) {
        echo $schemaMarkup;
    } ?>

    <!-- WebSite Schema with SearchAction (all pages) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Arihant Travels Pvt Ltd",
        "alternateName": "ArihantLink",
        "url": "https://arihantlink.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://arihantlink.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        },
        "publisher": {
            "@type": "TravelAgency",
            "name": "Arihant Travels Pvt Ltd",
            "url": "https://arihantlink.com"
        }
    }
    </script>

    <?php
    // Auto-generate BreadcrumbList schema for pages with breadcrumb data.
    // Sole emitter of BreadcrumbList — includes/breadcrumb.php must not add another.
    if (isset($pageHeading) && $currentPage !== 'home') {
        $breadcrumbSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => 'https://arihantlink.com/'
                ]
            ]
        ];
        // Add category level if it has a link
        if (isset($breadcrumbCategory, $breadcrumbCategoryLink) && $breadcrumbCategoryLink !== '#') {
            $breadcrumbSchema['itemListElement'][] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $breadcrumbCategory,
                'item' => 'https://arihantlink.com/' . $breadcrumbCategoryLink
            ];
            $breadcrumbSchema['itemListElement'][] = [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $pageHeading
            ];
        } else {
            $breadcrumbSchema['itemListElement'][] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $pageHeading
            ];
        }
        echo '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    }
    ?>

    <!-- Preconnect for faster DNS resolution -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://use.fontawesome.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Google Web Fonts - Deferred loading with font-display: swap -->
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&family=Prompt:wght@400;500;600;700&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&family=Prompt:wght@400;500;600;700&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Icon Font Stylesheet - Deferred to eliminate render blocking -->
    <link rel="preload" as="style" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" media="print"
        onload="this.media='all'" />
    <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"
        media="print" onload="this.media='all'">

    <!-- Fallback for browsers with JavaScript disabled -->
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&family=Prompt:wght@400;500;600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    </noscript>

    <!-- Preload Critical Resources -->
    <link rel="preload" href="<?php echo $basePath; ?>css/bootstrap.min.css?v=<?php echo $assetVersion; ?>" as="style">
    <link rel="preload" href="<?php echo $basePath; ?>css/style.min.css?v=<?php echo $assetVersion; ?>" as="style">
    <!-- Logo preload removed: it competed with the LCP carousel image for priority. Logo is small
         and loads naturally from the navbar without preloading. -->

    <!-- Preload LCP Hero Image with fetchpriority=high so it wins the priority lane on slow networks. -->
    <link rel="preload" href="<?php echo $basePath; ?>img/carousel-2-mobile.webp" as="image" type="image/webp"
        media="(max-width: 768px)" fetchpriority="high">
    <link rel="preload" href="<?php echo $basePath; ?>img/carousel-2.webp" as="image" type="image/webp"
        media="(min-width: 769px)" fetchpriority="high">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $basePath; ?>css/bootstrap.min.css?v=<?php echo $assetVersion; ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $basePath; ?>css/style.min.css?v=<?php echo $assetVersion; ?>" rel="stylesheet">
    <?php // Page-specific stylesheets, e.g. $extraCss = ['css/visa.css'];
    foreach ($extraCss ?? [] as $css): ?>
    <link href="<?php echo $basePath . $css; ?>?v=<?php echo $assetVersion; ?>" rel="stylesheet">
    <?php endforeach; ?>
</head>

<body>

    <!-- Spinner removed for Core Web Vitals optimization
         The spinner was blocking LCP measurement by covering the viewport -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://x.com/arihantraveldxb" target="_blank"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/profile.php?id=61561499244239" target="_blank"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.linkedin.com/company/ArihantTravel" target="_blank"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/arihantlink/" target="_blank"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="https://www.youtube.com/@arihanttraveldxb" target="_blank"><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i
                                        class="fa fa-user-circle me-2"></i>Hi, <?php
                                        echo htmlspecialchars(explode(' ', trim((string) ($_SESSION['user_name'] ?? 'Traveller')))[0], ENT_QUOTES, 'UTF-8');
                                        ?></small></a>
                            <div class="dropdown-menu dropdown-menu-end rounded">
                                <a href="<?php echo $basePath; ?>dashboard" class="dropdown-item"><i
                                        class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
                                <a href="<?php echo $basePath; ?>my-bookings" class="dropdown-item"><i
                                        class="fas fa-shopping-bag me-2"></i> My Bookings</a>
                                <a href="<?php echo $basePath; ?>wishlist" class="dropdown-item"><i
                                        class="fas fa-heart me-2"></i> Wishlist</a>
                                <a href="<?php echo $basePath; ?>profile" class="dropdown-item"><i
                                        class="fas fa-user-edit me-2"></i> Profile Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo $basePath; ?>logout" class="dropdown-item text-danger"><i
                                        class="fas fa-sign-out-alt me-2"></i> Logout</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="<?php echo $basePath; ?>login"><small class="me-3 text-light"><i
                                    class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <a href="<?php echo $basePath; ?>register"><small class="text-light"><i
                                    class="fa fa-user-plus me-2"></i>Register</small></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <img src="<?php echo $basePath; ?>img/logo.png" alt="Arihant Travels Logo"
                    width="160" height="172" style="height: 100px; width: auto;" decoding="async">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/"
                        class="nav-item nav-link <?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a>

                    <!-- Activities Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">Activities</a>
                        <div class="dropdown-menu m-0">
                            <!-- Desert Safari Submenu -->
                            <div class="dropdown dropend">
                                <a href="/desert-safari" class="dropdown-item has-submenu dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">Desert Safaris</a>
                                <div class="dropdown-menu">
                                    <a href="/desert-safari" class="dropdown-item fw-bold text-primary">All Safaris</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/standard-desert-safari" class="dropdown-item">Standard Safari</a>
                                    <a href="/vip-desert-safari" class="dropdown-item">VIP
                                        Safari</a>
                                    <a href="/premium-desert-safari" class="dropdown-item">Premium Safari</a>
                                    <a href="/morning-desert-safari" class="dropdown-item">Morning Safari</a>
                                    <a href="/overnight-desert-safari" class="dropdown-item">Overnight Safari</a>
                                    <a href="/quad-bike-safari" class="dropdown-item">Quad
                                        Bike</a>
                                </div>
                            </div>

                            <!-- Dubai Excursions Submenu -->
                            <div class="dropdown dropend">
                                <a href="/dubai-excursions" class="dropdown-item has-submenu dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dubai Excursions</a>
                                <div class="dropdown-menu">
                                    <a href="/dubai-excursions" class="dropdown-item fw-bold text-primary">All
                                        Excursions</a>
                                    <div class="dropdown-divider"></div>

                                    <!-- Nested City Tours -->
                                    <div class="dropdown dropend">
                                        <a href="#" class="dropdown-item has-submenu dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">City Tours</a>
                                        <div class="dropdown-menu">
                                            <a href="/dubai-full-day-city-tour" class="dropdown-item">Dubai City
                                                Tour</a>
                                            <a href="/abu-dhabi-city-tour" class="dropdown-item">Abu Dhabi City Tour</a>
                                            <a href="/musandam-dibba-tour" class="dropdown-item">Musandam Dibba Tour</a>
                                            <a href="/hatta-city-tour" class="dropdown-item">Hatta City Tour</a>
                                            <a href="/jabel-jais-tour" class="dropdown-item">Jabel Jais Tour</a>
                                        </div>
                                    </div>

                                    <!-- Nested Yacht Rental -->
                                    <div class="dropdown dropend">
                                        <a href="/yacht-rental" class="dropdown-item has-submenu dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">Yacht Rental</a>
                                        <div class="dropdown-menu">
                                            <a href="/yacht-rental" class="dropdown-item fw-bold text-primary">All
                                                Yachts</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="/40ft-yacht-charter" class="dropdown-item">40ft Private Yacht</a>
                                            <a href="/44ft-yacht-charter" class="dropdown-item">44ft Private Yacht</a>
                                            <a href="/50ft-yacht-charter" class="dropdown-item">50ft Private Yacht</a>
                                            <a href="/lotus-mega-yacht" class="dropdown-item">Lotus Mega Yacht</a>
                                        </div>
                                    </div>

                                    <a href="/dhow-cruise" class="dropdown-item">Dhow Cruise</a>

                                    <!-- Nested Hot Air Balloon -->
                                    <div class="dropdown dropend">
                                        <a href="/hot-air-balloon-dubai"
                                            class="dropdown-item has-submenu dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">Hot Air Balloon</a>
                                        <div class="dropdown-menu">
                                            <a href="/hot-air-balloon-dubai"
                                                class="dropdown-item fw-bold text-primary">All Packages</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="/hot-air-balloon-magical" class="dropdown-item">Magical (AED
                                                699)</a>
                                            <a href="/hot-air-balloon-fiesta" class="dropdown-item">Fiesta (AED 799)</a>
                                            <a href="/hot-air-balloon-extreme" class="dropdown-item">Extreme (AED
                                                899)</a>
                                        </div>
                                    </div>

                                    <a href="/theme-parks" class="dropdown-item">Theme Parks</a>
                                    <a href="/dubai-limo-ride" class="dropdown-item">Limousine Rides</a>
                                </div>
                            </div>

                            <!-- Transport Services Submenu (Activities level) -->
                            <div class="dropdown dropend">
                                <a href="/rent-a-car-with-driver-dubai" class="dropdown-item has-submenu dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">Transport Services</a>
                                <div class="dropdown-menu">
                                    <a href="/rent-a-car-with-driver-dubai" class="dropdown-item fw-bold text-primary">All Transport Services</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/rent-a-car-with-driver-dubai#our-services" class="dropdown-item"><i class="fas fa-user-tie me-2 text-muted"></i>Chauffeur Service</a>
                                    <a href="/rent-a-car-with-driver-dubai#our-services" class="dropdown-item"><i class="fas fa-plane-arrival me-2 text-muted"></i>Airport Transfer</a>
                                    <a href="/rent-a-car-with-driver-dubai#our-services" class="dropdown-item"><i class="fas fa-city me-2 text-muted"></i>City Tours</a>
                                    <a href="/rent-a-car-with-driver-dubai#our-services" class="dropdown-item"><i class="fas fa-route me-2 text-muted"></i>City-To-City Transfer</a>
                                    <a href="/rent-a-car-with-driver-dubai#our-fleet" class="dropdown-item"><i class="fas fa-car me-2 text-muted"></i>Our Fleet</a>
                                    <a href="/rent-a-car-with-driver-dubai#book-now" class="dropdown-item"><i class="fas fa-calendar-check me-2 text-muted"></i>Book a Car</a>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>
                            <div class="dropdown dropend">
                                <a href="#" class="dropdown-item has-submenu dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">International Tours</a>
                                <div class="dropdown-menu">
                                    <a href="/georgia" class="dropdown-item">Georgia Tour</a>
                                    <a href="/baku" class="dropdown-item">Azerbaijan Tour</a>
                                    <a href="/armenia" class="dropdown-item">Armenia Tour</a>
                                    <a href="/kazakhstan" class="dropdown-item">Kazakhstan Tour</a>
                                    <a href="/bali" class="dropdown-item">Bali Tour</a>
                                    <a href="/singapore" class="dropdown-item">Singapore Tour</a>
                                    <a href="/thailand" class="dropdown-item">Thailand Tour</a>
                                </div>
                            </div>
                            <a href="/anushthan-villa-ajman" class="dropdown-item">Anushthan
                                Villa</a>
                        </div>
                    </div>

                    <!-- Dubai Packages Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="/dubai-holiday-packages" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">Dubai Packages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/dubai-holiday-packages" class="dropdown-item">
                                <strong class="text-primary">All Dubai Packages</strong><br>
                                <small class="text-muted">Explore all holiday deals</small>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/dubai-tour-from-india" class="dropdown-item">
                                <strong>🇮🇳 Dubai Tour from India</strong><br>
                                <small class="text-muted">Jain & Veg packages with INR pricing</small>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/dubai-winter-escape" class="dropdown-item">
                                <strong>Dubai Winter Escape</strong><br>
                                <small class="text-muted">5 Nights 6 Days Popular Deal</small>
                            </a>
                            <a href="/dubai-honeymoon-package" class="dropdown-item">
                                <strong>Dubai Honeymoon Package</strong><br>
                                <small class="text-muted">6 Nights 7 Days Romantic Getaway</small>
                            </a>
                            <a href="/dubai-abu-dhabi-deal" class="dropdown-item">
                                <strong>Dubai & Abu Dhabi Twin City</strong><br>
                                <small class="text-muted">4 Nights 5 Days Multi-City</small>
                            </a>
                            <a href="/budget-friendly-dubai" class="dropdown-item">
                                <strong>Budget Friendly Dubai</strong><br>
                                <small class="text-muted">3 Nights 4 Days Saver Deal</small>
                            </a>
                            <a href="/arabian-nights-dubai" class="dropdown-item">
                                <strong>Arabian Nights Dubai</strong><br>
                                <small class="text-muted">4 Nights 5 Days Cultural Escape</small>
                            </a>
                            <a href="/dubai-for-kids" class="dropdown-item">
                                <strong>Dubai For Kids</strong><br>
                                <small class="text-muted">5 Nights 6 Days Family Fun</small>
                            </a>
                            <a href="/dubai-family-holidays" class="dropdown-item">
                                <strong>Dubai Family Holidays</strong><br>
                                <small class="text-muted">6 Nights 7 Days Signature Escape</small>
                            </a>
                        </div>
                    </div>

                    <a href="/uae-visa"
                        class="nav-item nav-link <?php echo ($currentPage == 'uae-visa') ? 'active' : ''; ?>">UAE
                        Visa</a>
                    <a href="/about"
                        class="nav-item nav-link <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About</a>
                    <a href="/contact"
                        class="nav-item nav-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a>
                    <a href="/blog"
                        class="nav-item nav-link <?php echo ($currentPage == 'blog') ? 'active' : ''; ?>">Blog</a>
                </div>
                <a href="https://wa.me/971585945007" target="_blank"
                    class="btn btn-whatsapp rounded-pill py-2 px-4 ms-lg-4 d-flex align-items-center gap-2">
                    <svg class="w-5 h-5" style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                    </svg>
                    Book Now
                </a>
            </div>
        </nav>