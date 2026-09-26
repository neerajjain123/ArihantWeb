<?php
// Set base path for assets
$basePath = "../";

// Blog Post SEO Variables
$pageTitle = "UAE & Dubai Visa Guide 2026: 5-Year, Transit & Visa on Arrival Rules";
$pageDescription = "Complete 2026 guide to UAE/Dubai visas. Learn about the new 5-year self-sponsored visa, 48/96-hour transit visas, document requirements…";
$pageKeywords = "Dubai Visa Guide 2026, UAE 5 year tourist visa requirements, Emirates transit visa 48 hours vs 96 hours, Dubai visa on arrival for Indian citizens, UAE visa document requirements, How to apply for UAE visa online, UAE overstay fines 2026";
$pageCanonical = "https://arihantlink.com/blog/uae-visa-comprehensive-guide";
$currentPage = "blog";

// AI SEO & Schema Markup
$schemaMarkup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "UAE & Dubai Visa Guide 2026: 5-Year, Transit & Visa on Arrival Rules",
  "image": "https://arihantlink.com/img/services/uae-visa.jpg",
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
  "datePublished": "2025-01-21",
  "dateModified": "2026-03-02",
  "description": "Complete 2026 guide to UAE/Dubai visas. Learn about the new 5-year self-sponsored visa, 48/96-hour transit visas, document requirements, and visa on arrival rules for Indian & EU citizens.",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://arihantlink.com/blog/uae-visa-comprehensive-guide"
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
    "name": "UAE Visa Guide",
    "item": "https://arihantlink.com/blog/uae-visa-comprehensive-guide"
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Do I need a visa to visit Dubai?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "It depends on your nationality. Citizens from countries like the USA, UK, EU, China, and Russia get free visa on arrival. Indian citizens can get visa on arrival if they hold valid US/UK/EU visas, otherwise need pre-arranged visa."
    }
  },{
    "@type": "Question",
    "name": "What is the bank balance requirement for the UAE 5-year tourist visa?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To qualify for the self-sponsored 5-year multiple-entry tourist visa, you must provide a bank statement for the last six months showing a consistent balance of at least USD 4,000 (or equivalent in other currencies)."
    }
  },{
    "@type": "Question",
    "name": "Can I leave the airport with a 48-hour transit visa?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, the 48-hour transit visa allows you to exit the airport and explore Dubai, but you must have a confirmed onward ticket to a third destination and leave within 48 hours. It is non-extendable."
    }
  },{
    "@type": "Question",
    "name": "How much does a UAE tourist visa cost for Indian citizens?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "For Indian citizens, a 30-day single entry visa costs approximately ₹7,000-₹9,000. If you hold a valid US/UK/EU visa, you can get visa on arrival for AED 100-120 (~₹2,500)."
    }
  }]
}
</script>';

// Blog Post Meta Information
$blogTitle = "The 2025 Global Citizen's Guide to UAE Tourist Visas";
$blogCategory = "Visa Guide";
$blogCategoryClass = "primary";
$blogAuthor = "Arihant Travels Team";
$blogDate = "January 21, 2025";
$blogReadTime = "15 min read";
$blogFeaturedImage = "../img/services/uae-visa.jpg";
$blogImageAlt = "UAE Visa guide for international travelers";
$blogExcerpt = "Your nationality determines your visa path—but so do the other stamps in your passport. This comprehensive guide explains UAE visa requirements for 10 major nationalities, with special focus on Indian and Chinese travelers.";

// Blog Tags
$blogTags = ["UAE Visa 2025", "Visa on Arrival", "Indian Citizens", "Chinese Citizens", "5-Year Visa", "Dubai Immigration"];

// Related Posts
$relatedPosts = [
    [
        'title' => 'Jain Family Dubai Trip Guide',
        'url' => 'jain-family-dubai-trip-guide',
        'image' => '../img/carousel-4.jpg',
        'category' => 'Jain-Friendly'
    ],
    [
        'title' => 'Dubai Desert Safari Guide',
        'url' => 'dubai-desert-safari-ultimate-guide',
        'image' => '../img/services/safari.webp',
        'category' => 'Dubai Tours'
    ]
];

include '../includes/header.php';
?>

<!-- Blog Post Hero -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 1200px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <span class="badge bg-<?php echo $blogCategoryClass; ?> px-4 py-2 mb-3" style="font-size: 14px;">
                    <i class="fa fa-passport me-2"></i><?php echo $blogCategory; ?>
                </span>

                <h1 class="text-white display-4 mb-4" style="font-family: 'Jost', sans-serif; font-weight: 700;">
                    <?php echo $blogTitle; ?>
                </h1>

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
<!-- Blog Post Hero End -->

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

<!-- Featured Image -->
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

<!-- Blog Content -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Blog Content -->
                <div class="blog-content" style="line-height: 1.8; font-size: 17px;">

                    <!-- Introduction -->
                    <section class="mb-5">
                        <p class="lead" style="font-size: 1.2rem; color: var(--text);">
                            Picture this: You're at Dubai International Airport, excited about your vacation. The person
                            ahead of you—a British passport holder—breezes through immigration with a smile and a stamp.
                            You, holding an Indian passport, spent weeks arranging documents and fees. Sound familiar?
                        </p>
                        <p>
                            Welcome to the UAE visa system—a fascinating puzzle where your nationality, your travel
                            history, and even the stamps in your passport can completely change your entry requirements.
                            In 2025, the rules have evolved significantly, creating both opportunities and complexities
                            for international travelers.
                        </p>
                        <p>
                            This comprehensive guide cuts through the confusion. Whether you're planning a quick Dubai
                            shopping trip, a family vacation, or exploring long-term opportunities, we'll show you
                            exactly what you need to know based on your specific situation.
                        </p>
                    </section>

                    <!-- UAE Immigration Framework Overview -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Understanding the UAE Immigration Framework
                        </h2>
                        <p class="lead">
                            The United Arab Emirates' immigration system is a sophisticated framework that balances
                            tourism promotion, security, and economic development. This comprehensive guide details the
                            various methods for obtaining and managing entry permits, with significant focus on digital
                            visa services and recent regulatory reforms.
                        </p>

                        <div class="alert alert-info border-start border-4"
                            style="border-color: var(--bs-primary) !important;">
                            <h5 class="alert-heading"><i class="fa fa-passport me-2"></i>Entry Permit Requirements</h5>
                            <p class="mb-0">To enter the UAE, most travelers require either a <strong>pre-arranged entry
                                    permit (visa)</strong> or are eligible for a <strong>visa-on-arrival</strong>,
                                depending on their nationality and the purpose of their visit. The UAE immigration
                                system categorizes these requirements based on whether a traveler's country has specific
                                diplomatic agreements with the Emirates.</p>
                        </div>

                        <h3 class="h4 mb-3 mt-4">Entry Requirements by Nationality</h3>

                        <div class="row g-4 my-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-success">
                                    <div class="card-body">
                                        <h5 class="text-success"><i class="fa fa-plane-arrival me-2"></i>Visa-on-Arrival
                                            Nationalities</h5>
                                        <p>Travelers from specific countries—including the <strong>UK, USA, Canada, EU
                                                countries, and Singapore</strong>—are eligible to receive a visa stamp
                                            directly at the airport upon landing. The duration allowed varies by
                                            passport.</p>
                                        <p class="small mb-0 text-muted">This is the most convenient option, requiring
                                            minimal documentation and no advance application.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="text-primary"><i class="fa fa-file-alt me-2"></i>Visa-Required
                                            Nationalities</h5>
                                        <p>Individuals from countries not eligible for visa-on-arrival must apply for a
                                            <strong>tourist or visit visa ahead of time</strong>. These are typically
                                            sponsored by a UAE-based airline, hotel, or travel agency.
                                        </p>
                                        <p class="small mb-0 text-muted">Processing typically takes 3-5 business days
                                            through authorized channels.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-warning">
                                    <div class="card-body">
                                        <h5 class="text-warning"><i class="fa fa-users me-2"></i>GCC Residents</h5>
                                        <p>Residents of Gulf Cooperation Council countries may be eligible for a
                                            <strong>pre-travel eVisa</strong>, though this is often subject to their
                                            specific profession and passport.
                                        </p>
                                        <p class="small mb-0 text-muted">Additional documentation may be required based
                                            on residency status.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100" style="border-color: var(--bs-secondary);">
                                    <div class="card-body">
                                        <h5 style="color: var(--bs-secondary);"><i class="fa fa-clock me-2"></i>Transit
                                            Passengers</h5>
                                        <p>Travelers passing through UAE airports can obtain a <strong>48-hour free
                                                transit visa</strong> or a <strong>paid 96-hour transit visa</strong>.
                                            These must be processed and approved before entering the country and are
                                            sponsored by UAE-based airlines.</p>
                                        <p class="small mb-0 text-muted">Perfect for layover exploration and short city
                                            tours.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-light border p-4">
                            <h5 class="mb-3"><i class="fa fa-lightbulb text-warning me-2"></i>The High-End Club Analogy
                            </h5>
                            <p class="mb-0">Think of entering the UAE like <strong>joining a high-end club</strong>;
                                while some "VIP" members (visa-on-arrival nationalities) can walk right in at the door,
                                agent (airline/hotel) before they arrive at the entrance.</p>
                        </div>
                    </section>
                    <!-- Common UAE Visa Types -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Common UAE Visa Types (2025-2026)
                        </h2>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="text-primary">Tourist Visas (30 or 60 Days)</h5>
                                        <p class="mb-2">Available for single or multiple entries, these are ideal for
                                            leisure travel. They are typically valid for entry within 60 days of
                                            issuance.</p>
                                        <p class="small text-muted mb-0"><strong>Best for:</strong> Short vacations,
                                            family visits</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-success">
                                    <div class="card-body">
                                        <h5 class="text-success">5-Year Multiple-Entry Tourist Visa</h5>
                                        <p class="mb-2">This <strong>self-sponsored</strong> visa allows tourists to
                                            enter multiple times over five years, staying up to 90 days per visit
                                            (extendable to 180 days per year). Applicants must show a <strong>bank
                                                balance of USD 4,000</strong> for the last six months.</p>
                                        <p class="small text-muted mb-0"><strong>Best for:</strong> Frequent travelers,
                                            digital nomads</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="text-primary">Green Visa (5-Year Residency)</h5>
                                        <p class="mb-2">A self-sponsored option for <strong>skilled professionals,
                                                freelancers, and investors</strong>. It does not require an employer's
                                            sponsorship.</p>
                                        <p class="small text-muted mb-0"><strong>Best for:</strong> Self-employed
                                            professionals, entrepreneurs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-warning">
                                    <div class="card-body">
                                        <h5 class="text-warning">Golden Visa (10-Year Residency)</h5>
                                        <p class="mb-2">Long-term residency for investors, entrepreneurs, and
                                            individuals with outstanding talents.</p>
                                        <p class="small text-muted mb-0"><strong>Best for:</strong> High-net-worth
                                            individuals, exceptional professionals</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card" style="border-color: var(--bs-secondary);">
                                    <div class="card-body">
                                        <h5 style="color: var(--bs-secondary);">Employment Visa</h5>
                                        <p class="mb-0">Sponsored by a UAE employer, this allows a stay for work
                                            purposes, typically valid for up to <strong>two years</strong>. Includes
                                            medical fitness tests and Emirates ID registration.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Why Rules Differ -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Why UAE Visa Rules Aren't One-Size-Fits-All
                        </h2>
                        <p>
                            The UAE doesn't have a single visa policy—it has dozens. The government has crafted
                            different entry pathways based on diplomatic relationships, security agreements, and
                            economic partnerships with various countries. This means your nationality is just the
                            starting point.
                        </p>
                        <p>
                            <strong>Here's what makes it even more interesting:</strong> Even two people with the same
                            passport can face different requirements. An Indian citizen living in London might walk
                            through immigration differently than someone flying from Mumbai. A Filipino professional
                            working in Saudi Arabia has different options than one coming from Manila.
                        </p>
                        <p>
                            Let's break down exactly how this works for the world's major nationalities.
                        </p>
                    </section>

                    <!-- Global Comparison -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            The Global Picture: Where Does Your Passport Stand?
                        </h2>
                        <p>
                            We've compared the entry rules for 10 major nationalities to give you a clear snapshot of
                            the current landscape. Notice how Western passports generally enjoy visa-free entry, while
                            others require pre-arrangement.
                        </p>

                        <div class="table-responsive my-4 border rounded shadow-sm">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: var(--bs-primary);">
                                    <tr>
                                        <th class="border-0 text-white">Nationality</th>
                                        <th class="border-0 text-white">Entry Type</th>
                                        <th class="border-0 text-white">Max Stay</th>
                                        <th class="border-0 text-white">Cost</th>
                                        <th class="border-0 text-white">Key Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>🇺🇸 USA</strong></td>
                                        <td><span
                                                class="badge bg-success bg-opacity-10 text-dark border border-success">Visa
                                                on Arrival</span></td>
                                        <td>30 Days</td>
                                        <td><strong style="color: #4CAF50;">Free</strong></td>
                                        <td class="small">6-month passport validity required</td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇬🇧 UK</strong></td>
                                        <td><span
                                                class="badge bg-success bg-opacity-10 text-dark border border-success">Visa
                                                on Arrival</span></td>
                                        <td>30 Days</td>
                                        <td><strong style="color: #4CAF50;">Free</strong></td>
                                        <td class="small">6-month passport validity required</td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇩🇪 Germany (EU)</strong></td>
                                        <td><span
                                                class="badge bg-success bg-opacity-10 text-dark border border-success">Visa
                                                on Arrival</span></td>
                                        <td>90 Days</td>
                                        <td><strong style="color: #4CAF50;">Free</strong></td>
                                        <td class="small">Longest free stay period</td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇨🇳 China</strong></td>
                                        <td><span
                                                class="badge bg-success bg-opacity-10 text-dark border border-success">Visa
                                                on Arrival</span></td>
                                        <td>30 Days</td>
                                        <td><strong style="color: #4CAF50;">Free</strong></td>
                                        <td class="small">Return ticket required</td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇷🇺 Russia</strong></td>
                                        <td><span
                                                class="badge bg-success bg-opacity-10 text-dark border border-success">Visa
                                                on Arrival</span></td>
                                        <td>30 Days</td>
                                        <td><strong style="color: #4CAF50;">Free</strong></td>
                                        <td class="small">6-month passport validity required</td>
                                    </tr>
                                    <tr class="table-warning bg-opacity-10">
                                        <td><strong>🇮🇳 India</strong></td>
                                        <td><span class="badge border-secondary bg-opacity-10 text-dark border">Hybrid
                                                System</span></td>
                                        <td>14-60 Days</td>
                                        <td>$63 - $150+</td>
                                        <td class="small"><em>See detailed section below</em></td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇵🇰 Pakistan</strong></td>
                                        <td><span
                                                class="badge border-primary bg-opacity-10 text-dark border">Pre-Arranged</span>
                                        </td>
                                        <td>30-60 Days</td>
                                        <td>$90 - $180</td>
                                        <td class="small">Apply via airline/agent</td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇵🇭 Philippines</strong></td>
                                        <td><span
                                                class="badge border-primary bg-opacity-10 text-dark border">Pre-Arranged</span>
                                        </td>
                                        <td>30-60 Days</td>
                                        <td>$90 - $180</td>
                                        <td class="small">Proof of funds (AED 3,000)</td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇿🇦 South Africa</strong></td>
                                        <td><span
                                                class="badge border-primary bg-opacity-10 text-dark border">Pre-Arranged</span>
                                        </td>
                                        <td>30-60 Days</td>
                                        <td>$90 - $180</td>
                                        <td class="small">Sponsor required</td>
                                    </tr>
                                    <tr>
                                        <td><strong>🇳🇬 Nigeria</strong></td>
                                        <td><span
                                                class="badge border-primary bg-opacity-10 text-dark border">Pre-Arranged</span>
                                        </td>
                                        <td>30 Days</td>
                                        <td>$150+</td>
                                        <td class="small">Document verification needed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="alert alert-light border-start border-4"
                            style="border-color: var(--bs-primary) !important;">
                            <p class="mb-0">
                                <i class="fa fa-lightbulb me-2" style="color: var(--bs-primary);"></i><strong>Pro
                                    Tip:</strong> If
                                you're from a "pre-arranged" country, booking your visa through your airline (like
                                Emirates or Etihad) when you purchase your ticket is often the simplest approach. They
                                handle the application on your behalf.
                            </p>
                        </div>
                    </section>

                    <!-- Indian Citizens Deep Dive -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            For Indian Travelers: The Unique "Hybrid" System Explained
                        </h2>
                        <p>
                            If you're an Indian passport holder, you've probably noticed that visa requirements seem to
                            change based on who you ask. That's because India has what we call a "hybrid" status with
                            the UAE—different pathways depending on your residency and travel history.
                        </p>
                        <p>
                            <strong>Here's the game-changing fact many travelers don't know:</strong> If you hold valid
                            residence or a visa from certain Western countries, you might not need to apply for a UAE
                            visa in advance at all.
                        </p>

                        <h3 class="h4 mb-3 mt-4">Pathway 1: The "Fast Track" Visa on Arrival</h3>

                        <div class="p-4 border-start border-5 shadow-sm rounded my-4 bg-light border-primary">
                            <p class="mb-3"><strong>Who qualifies?</strong> Indians who hold a valid visa or Green Card
                                from:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="mb-0">
                                        <li><i class="fa fa-check me-1" style="color: var(--bs-primary);"></i> United
                                            States</li>
                                        <li><i class="fa fa-check me-1" style="color: var(--bs-primary);"></i> United
                                            Kingdom</li>
                                        <li><i class="fa fa-check me-1" style="color: var(--bs-primary);"></i> European
                                            Union</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="mb-0">
                                        <li><i class="fa fa-check me-1" style="color: var(--bs-primary);"></i> Australia
                                        </li>
                                        <li><i class="fa fa-check me-1" style="color: var(--bs-primary);"></i> Canada
                                        </li>
                                        <li><i class="fa fa-check me-1" style="color: var(--bs-primary);"></i> Japan /
                                            New Zealand
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-3">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="fa fa-clock fa-2x mb-2" style="color: var(--bs-primary);"></i>
                                    <h6 class="small mb-1">Process Time</h6>
                                    <strong>Instant</strong>
                                    <p class="small text-muted mb-0">At airport counter</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="fa fa-calendar fa-2x mb-2" style="color: var(--bs-primary);"></i>
                                    <h6 class="small mb-1">Initial Stay</h6>
                                    <strong>14 Days</strong>
                                    <p class="small text-muted mb-0">Extendable once</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="fa fa-money-bill fa-2x mb-2" style="color: var(--bs-primary);"></i>
                                    <h6 class="small mb-1">Cost</h6>
                                    <strong>AED 100-120</strong>
                                    <p class="small text-muted mb-0">~$30 USD</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center p-3 bg-light rounded">
                                    <i class="fa fa-file-alt fa-2x mb-2" style="color: var(--bs-primary);"></i>
                                    <h6 class="small mb-1">Documents</h6>
                                    <strong>Minimal</strong>
                                    <p class="small text-muted mb-0">Passport + visa/permit</p>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-warning border-start border-4 border-warning">
                            <p class="mb-0">
                                <i class="fa fa-exclamation-triangle text-warning me-2"></i><strong>Important:</strong>
                                Both your Indian passport AND your Western visa/residence permit must have at least 6
                                months validity remaining. This is strictly enforced.
                            </p>
                        </div>

                        <h3 class="h4 mb-3 mt-5">Pathway 2: Traditional Pre-Arranged Visa</h3>

                        <div class="card shadow-sm" style="border-color: var(--bs-secondary);">
                            <div class="card-body">
                                <p class="mb-3">If you don't have a Western visa, you'll need to apply for a
                                    pre-arranged tourist visa before traveling. This requires a "sponsor"—typically the
                                    airline you're flying with or a licensed travel agency.</p>

                                <h5 class="h6 mb-3">Your Options:</h5>

                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Visa Type</th>
                                                <th>Duration</th>
                                                <th>Cost (Approx.)</th>
                                                <th>Best For</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>30-Day Single Entry</strong></td>
                                                <td>30 Days</td>
                                                <td>₹7,000 - ₹9,000</td>
                                                <td>Short vacations, business trips</td>
                                            </tr>
                                            <tr>
                                                <td><strong>60-Day Single Entry</strong></td>
                                                <td>60 Days</td>
                                                <td>₹13,000 - ₹15,000</td>
                                                <td>Extended family visits</td>
                                            </tr>
                                            <tr>
                                                <td><strong>48/96 Hour Transit</strong></td>
                                                <td>2-4 Days</td>
                                                <td>₹1,500 - ₹4,000</td>
                                                <td>Dubai layovers/stopovers</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-3 p-3 bg-light rounded">
                                    <p class="small mb-2"><strong>Processing Time:</strong> Typically 3-5 working days
                                    </p>
                                    <p class="small mb-0"><strong>Apply Through:</strong> Emirates, Etihad, FlyDubai, or
                                        registered travel agencies like Arihant Travels</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 p-4 bg-white border rounded shadow-sm">
                            <h5 class="h6 mb-3"><i class="fa fa-user-tie me-2"
                                    style="color: var(--bs-primary);"></i>Real Example:
                                Priya from Mumbai</h5>
                            <p class="small text-muted mb-0">
                                "I work in tech and have a valid H1B visa for the US. Last month, I flew Emirates to
                                Dubai for a weekend—I simply showed my US visa at the airport counter, paid AED 115, and
                                got my 14-day stamp in minutes. My colleague without a US visa had to apply 2 weeks in
                                advance through the airline and paid almost double."
                            </p>
                        </div>
                    </section>

                    <!-- Chinese Citizens -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            For Chinese Travelers: One of the Easiest Paths
                        </h2>
                        <p>
                            If you hold a Chinese passport, you're among the fortunate few who can travel to the UAE
                            with virtually zero paperwork. The UAE and China have a strong diplomatic relationship,
                            reflected in the streamlined visa process.
                        </p>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-success shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3" style="color: #333;">
                                            <i class="fa fa-plane-arrival text-success me-2"></i>How It Works
                                        </h5>
                                        <ol class="mb-0 ps-3">
                                            <li class="mb-2">Land at any UAE airport (Dubai, Abu Dhabi, Sharjah)</li>
                                            <li class="mb-2">Proceed directly to immigration</li>
                                            <li class="mb-2">Present your passport (no forms, no fees)</li>
                                            <li class="mb-0">Receive a <strong>free 30-day stamp</strong></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 shadow-sm" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3" style="color: #333;">
                                            <i class="fa fa-info-circle me-2" style="color: var(--bs-primary);"></i>Key
                                            Points
                                        </h5>
                                        <ul class="mb-0">
                                            <li class="mb-2"><strong>No advance application</strong> needed</li>
                                            <li class="mb-2"><strong>No fees</strong> at any stage</li>
                                            <li class="mb-2"><strong>Extension available:</strong> Add 30 days while in
                                                UAE</li>
                                            <li class="mb-0"><strong>Requirement:</strong> Return/onward ticket proof
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mt-4">
                            <strong>Why is this significant?</strong> This arrangement has made Dubai a top shopping and
                            tourism destination for Chinese travelers. In 2024, over 1.5 million Chinese tourists
                            visited the UAE, many taking advantage of this hassle-free entry.
                        </p>
                    </section>

                    <!-- Universal Requirements -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            The 2025 Universal Rules: What Everyone Must Know
                        </h2>
                        <p>
                            Regardless of your nationality or visa type, UAE immigration has implemented three new
                            standard requirements in 2025. Failing to meet these can result in denied entry—even if your
                            visa is valid.
                        </p>

                        <div class="row g-4 my-4">
                            <div class="col-md-12">
                                <div class="card shadow" style="border-color: var(--bs-secondary);">
                                    <div class="card-header border-bottom bg-warning bg-opacity-10 border-warning">
                                        <h5 class="mb-0" style="color: #333;">
                                            <i class="fa fa-money-bill-wave me-2"
                                                style="color: var(--bs-secondary);"></i>Rule #1:
                                            The "3,000 Dirham Rule"
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3">Immigration officers now routinely ask tourists to demonstrate
                                            they can financially support themselves during their stay.</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="p-3 bg-light rounded text-center">
                                                    <strong class="d-block mb-1"
                                                        style="color: var(--bs-primary);">Minimum
                                                        Required</strong>
                                                    <h4 class="mb-0">AED 3,000</h4>
                                                    <p class="small text-muted mb-0">~$815 USD / ₹68,000 / ¥5,900</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <p class="mb-2"><strong>Acceptable proof:</strong></p>
                                                <ul class="small mb-0">
                                                    <li>Cash in wallet</li>
                                                    <li>Credit card + recent statement</li>
                                                    <li>Traveler's checks</li>
                                                    <li>Bank statement (showing sufficient balance)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="alert alert-light border mt-3 mb-0">
                                            <p class="small mb-0">
                                                <i class="fa fa-lightbulb text-warning me-1"></i> <strong>Smart
                                                    Tip:</strong> Carry a recent credit card statement or screenshot of
                                                your bank balance on your phone as backup, even if you have cash.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card shadow" style="border-color: var(--bs-secondary);">
                                    <div class="card-header border-bottom bg-warning bg-opacity-10 border-warning">
                                        <h5 class="mb-0" style="color: #333;">
                                            <i class="fa fa-hotel me-2" style="color: var(--bs-secondary);"></i>Rule #2:
                                            Accommodation Proof
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>You must show where you'll be staying during your visit.</p>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="p-3 bg-light rounded">
                                                    <h6 class="mb-2" style="color: var(--bs-primary);">Staying at a
                                                        Hotel?</h6>
                                                    <p class="small mb-0">Bring your hotel booking confirmation (email
                                                        or app screenshot). Must show your name, hotel name, and full
                                                        dates.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="p-3 bg-light rounded">
                                                    <h6 class="mb-2" style="color: var(--bs-primary);">Staying with
                                                        Friends/Family?</h6>
                                                    <p class="small mb-0">You'll need a letter from your host plus a
                                                        copy of their Emirates ID and proof of residence (e.g., utility
                                                        bill).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card shadow" style="border-color: var(--bs-secondary);">
                                    <div class="card-header border-bottom bg-warning bg-opacity-10 border-warning">
                                        <h5 class="mb-0" style="color: #333;">
                                            <i class="fa fa-hourglass-end me-2"
                                                style="color: var(--bs-secondary);"></i>Rule #3: No
                                            More Grace
                                            Period
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Until 2024, visitors had a 10-day grace period after their visa expired.
                                            <strong>This has been eliminated.</strong>
                                        </p>
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <p class="mb-2"><strong>What this means:</strong></p>
                                                <ul class="mb-0">
                                                    <li>Overstaying by even 1 day triggers penalties</li>
                                                    <li>Fine: AED 50 per day (was previously AED 100/day after grace
                                                        period)</li>
                                                    <li>Additional fees: AED 100 service charge</li>
                                                    <li>Potential future visa complications</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <div class="p-3 rounded bg-warning bg-opacity-10 border border-warning">
                                                    <i class="fa fa-ban fa-3x mb-2"
                                                        style="color: var(--bs-secondary);"></i>
                                                    <p class="small fw-bold mb-0">Leave on or before your visa expiry
                                                        date</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Document Requirements Section -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Document Requirements for UAE Visa Application
                        </h2>
                        <p class="lead">
                            To apply for a UAE visa through Emirates or other authorized channels, you must provide
                            clear and legal documentation to avoid processing delays or rejections. The specific
                            requirements vary based on the type of visa and your nationality.
                        </p>

                        <h3 class="h4 mb-3 mt-4">Standard Application Documents</h3>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="text-primary"><i class="fa fa-passport me-2"></i>Passport</h5>
                                        <p class="mb-2">A color scan of your original passport (both front and back
                                            pages). The passport must be valid for at least <strong>six months</strong>
                                            from your intended date of entry into the UAE.</p>
                                        <div class="alert alert-warning small mb-0">
                                            <i class="fa fa-exclamation-triangle me-1"></i> For employment residence
                                            permits, a minimum of <strong>eight months</strong> validity is required.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="text-primary"><i class="fa fa-camera me-2"></i>Photograph</h5>
                                        <p class="mb-0">A recent, passport-sized color photograph taken against a
                                            <strong>white background</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="text-primary"><i class="fa fa-plane-departure me-2"></i>Flight
                                            Confirmation</h5>
                                        <p class="mb-0">Proof of a confirmed <strong>Emirates or FlyDubai flight
                                                ticket</strong> for travel into and out of the country.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h5 class="text-primary"><i class="fa fa-hotel me-2"></i>Accommodation Details
                                        </h5>
                                        <p class="mb-0">Hotel reservations or information regarding where you will be
                                            staying in the UAE (such as a host's address and ID).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="h4 mb-3 mt-5">Supplementary Requirements</h3>

                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <ul class="mb-0">
                                    <li class="mb-2"><strong>Travel Insurance:</strong> While sometimes optional
                                        depending on the visa type, having valid travel insurance is highly recommended
                                        and may be required for certain applicants.</li>
                                    <li class="mb-2"><strong>For Children/Minors:</strong> If traveling with children,
                                        you must provide a copy of their <strong>birth certificate</strong> and the
                                        passport copies of their parents or guardians.</li>
                                    <li class="mb-2"><strong>Nationality-Specific Documents:</strong> Depending on your
                                        country of origin, you may be asked to provide additional proof, such as
                                        <strong>bank statements</strong>, proof of residency, or records of previous
                                        travel.
                                    </li>
                                    <li class="mb-0"><strong>Proof of Relationship:</strong> This may be required for
                                        family-based applications.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="alert alert-danger border-start border-4 border-danger mt-4">
                            <h5 class="alert-heading"><i class="fa fa-exclamation-circle me-2"></i>Important Submission
                                Guidelines</h5>
                            <p class="mb-2">All scanned documents must be <strong>clear and high-quality</strong>.
                                Blurry passport scans or photos are common reasons for application rejection.</p>
                            <p class="mb-0">Additionally, if you have an active prior entry permit or residency that was
                                not properly cancelled, it could block your new application.</p>
                        </div>

                        <div class="alert alert-light border p-4 mt-4">
                            <h5 class="mb-3"><i class="fa fa-building text-primary me-2"></i>The Blurry ID Card Analogy
                            </h5>
                            <p class="mb-0">Applying for a visa without clear documents is like trying to <strong>enter
                                    a locked building with a blurry ID card</strong>; the security guard (immigration)
                                cannot verify who you are or why you're there, leading to you being turned away at the
                                door.</p>
                        </div>

                        <h3 class="h4 mb-3 mt-5">How to Apply Through Emirates</h3>
                        <div class="card border-success">
                            <div class="card-body">
                                <ol class="mb-0">
                                    <li class="mb-2"><strong>Book a flight</strong> with the airline to or through
                                        Dubai.</li>
                                    <li class="mb-2">Access the <strong>visa portal</strong> via the "Manage Your
                                        Booking" section on the airline's website.</li>
                                    <li class="mb-2"><strong>Upload documents</strong> (passport scans, photos) as JPG
                                        or PDF files and <strong>pay the visa fee</strong> online.</li>
                                    <li class="mb-0"><strong>Wait for processing</strong>, which typically takes
                                        <strong>three to five business days</strong>, and receive the e-visa via email.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </section>

                    <!-- Transit Visa Section -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Emirates Transit Visa Requirements
                        </h2>
                        <p class="lead">
                            To obtain an Emirates transit visa, travelers must meet specific criteria regarding their
                            itinerary, nationality, and documentation. The UAE offers two distinct types: a
                            <strong>48-hour transit visa</strong> and a <strong>96-hour transit visa</strong>.
                        </p>

                        <h3 class="h4 mb-3 mt-4">General Eligibility Criteria</h3>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="text-primary"><i class="fa fa-route me-2"></i>Travel Itinerary</h6>
                                        <p class="small mb-0">You must be transiting through a UAE airport and have a
                                            <strong>confirmed onward flight ticket</strong> to a third destination other
                                            than the one you are coming from.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="text-primary"><i class="fa fa-plane me-2"></i>Flight Booking</h6>
                                        <p class="small mb-0">Only <strong>UAE-based airlines</strong> (such as Emirates
                                            or FlyDubai) can arrange these visas. You must have a confirmed ticket with
                                            the airline to be eligible for their sponsorship.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="text-primary"><i class="fa fa-globe me-2"></i>Nationality</h6>
                                        <p class="small mb-0">These visas are required for individuals who are
                                            <strong>not eligible</strong> for visa-on-arrival or visa-free entry to the
                                            UAE.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="text-primary"><i class="fa fa-calendar-check me-2"></i>Advance
                                            Application</h6>
                                        <p class="small mb-0">Transit visas must be processed and approved
                                            <strong>before</strong> you enter the country; they cannot be obtained at
                                            the airport if you do not already have an approved entry permit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="h4 mb-3">Specific Requirements by Visa Type</h3>

                        <div class="table-responsive border rounded shadow-sm">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: var(--bs-primary);">
                                    <tr>
                                        <th class="border-0 text-white">Feature</th>
                                        <th class="border-0 text-white">48-Hour Transit Visa</th>
                                        <th class="border-0 text-white">96-Hour Transit Visa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Passport Validity</strong></td>
                                        <td>Minimum <strong>3 months</strong></td>
                                        <td>Minimum <strong>6 months</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Visa Fee</strong></td>
                                        <td><strong>AED 160</strong></td>
                                        <td><strong>AED 250</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Extendability</strong></td>
                                        <td>Not extendable or renewable</td>
                                        <td>Not extendable or renewable</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Processing Time</strong></td>
                                        <td>Usually <strong>1–2 working days</strong></td>
                                        <td>Usually <strong>2–3 working days</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="alert alert-warning border-start border-4 border-warning mt-4">
                            <h5 class="alert-heading"><i class="fa fa-info-circle me-2"></i>Important Rules for Transit
                            </h5>
                            <ul class="mb-0">
                                <li class="mb-2"><strong>Non-Convertible:</strong> Once a 48-hour visa is issued, it
                                    <strong>cannot be extended</strong> to a 96-hour visa.
                                </li>
                                <li class="mb-2"><strong>One-Way Flow:</strong> You must leave the UAE within the
                                    allotted 48 or 96 hours from the moment of entry.</li>
                                <li class="mb-0"><strong>Application Channel:</strong> You can apply through the
                                    Emirates website under the "<strong>Manage Your Booking</strong>" section, which
                                    redirects to the authorized visa portal to upload documents and pay any necessary
                                    fees.</li>
                            </ul>
                        </div>

                        <div class="alert alert-light border p-4">
                            <h5 class="mb-3"><i class="fa fa-clock text-warning me-2"></i>The Timed Layover Pass Analogy
                            </h5>
                            <p class="mb-0">An Emirates transit visa is like a <strong>timed "layover pass"</strong> for
                                a private event; it allows you to step outside the airport to see the city, but only if
                                you already have your ticket for the next flight in hand and leave before your specific
                                time slot expires.</p>
                        </div>
                    </section>

                    <!-- 5-Year Visa -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            The Game-Changer: 5-Year Multiple Entry Tourist Visa
                        </h2>
                        <p>
                            Introduced in 2022 and refined in 2024, this is the UAE's answer to frequent travelers who
                            don't need short-term visas every trip. Available to <em>all nationalities</em>—including
                            Indians, Pakistanis, Filipinos, and others typically requiring pre-arranged visas.
                        </p>

                        <div class="alert alert-success border-start border-4 border-success">
                            <p class="mb-0">
                                <i class="fa fa-star text-success me-2"></i><strong>Why it's revolutionary:</strong> You
                                become your own sponsor. No need for airlines, hotels, or UAE residents to sponsor you.
                                Apply once, travel multiple times over 5 years.
                            </p>
                        </div>

                        <h3 class="h5 mt-4 mb-3">How to Qualify & Apply</h3>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-100" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fa fa-wallet fa-2x me-3" style="color: var(--bs-primary);"></i>
                                            <div>
                                                <h6 class="mb-0">Financial Requirement</h6>
                                                <small class="text-muted">Proof of means</small>
                                            </div>
                                        </div>
                                        <p class="small mb-2">Bank statement from the last 6 months showing:</p>
                                        <h5 class="mb-2" style="color: var(--bs-primary);">$4,000 USD minimum balance
                                        </h5>
                                        <p class="small text-muted mb-0">(or equivalent in your currency)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fa fa-laptop fa-2x me-3" style="color: var(--bs-primary);"></i>
                                            <div>
                                                <h6 class="mb-0">Application Portal</h6>
                                                <small class="text-muted">Online process</small>
                                            </div>
                                        </div>
                                        <p class="small mb-2">Apply through:</p>
                                        <ul class="small mb-0">
                                            <li>ICP Smart Services website</li>
                                            <li>GDRFA Dubai mobile app</li>
                                            <li>Trusted travel agencies (recommended)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fa fa-clock fa-2x me-3" style="color: var(--bs-primary);"></i>
                                            <div>
                                                <h6 class="mb-0">Stay Limits</h6>
                                                <small class="text-muted">Per visit & annual</small>
                                            </div>
                                        </div>
                                        <ul class="small mb-0">
                                            <li><strong>90 days</strong> per entry</li>
                                            <li><strong>180 days</strong> total per year</li>
                                            <li>Unlimited entries over 5 years</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fa fa-tag fa-2x me-3" style="color: var(--bs-primary);"></i>
                                            <div>
                                                <h6 class="mb-0">Investment</h6>
                                                <small class="text-muted">One-time cost</small>
                                            </div>
                                        </div>
                                        <p class="small mb-1"><strong>Total fees:</strong> AED 650-750</p>
                                        <p class="small mb-1"><strong>Security deposit:</strong> ~AED 3,000</p>
                                        <p class="small text-muted mb-0">(Deposit is refundable)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="h5 mt-5 mb-3">Complete Document Requirements</h3>

                        <div class="card border-success shadow-sm">
                            <div class="card-body">
                                <p class="mb-3">To apply for the self-sponsored 5-year multiple-entry tourist visa, you
                                    must provide documentation that proves your financial standing and travel intent.
                                    Unlike standard tourist visas, this category does not require a UAE-based sponsor
                                    like an airline or hotel.</p>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2"><i class="fa fa-university me-2"></i>Bank
                                                Statement</h6>
                                            <p class="small mb-0">A bank statement for the <strong>last six
                                                    months</strong> showing a consistent balance of at least <strong>USD
                                                    4,000</strong> (or its equivalent in other foreign currencies).</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2"><i class="fa fa-passport me-2"></i>Passport
                                                Copy</h6>
                                            <p class="small mb-0">A clear copy of your original passport.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2"><i class="fa fa-camera me-2"></i>Colored
                                                Photograph</h6>
                                            <p class="small mb-0">A recent high-quality color photo.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2"><i class="fa fa-medkit me-2"></i>Medical
                                                Insurance</h6>
                                            <p class="small mb-0">A valid health insurance policy that is applicable
                                                within the UAE and remains valid for <strong>180 days</strong>.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2"><i class="fa fa-plane me-2"></i>Travel Tickets
                                            </h6>
                                            <p class="small mb-0">Confirmed tickets for travel <strong>to and from the
                                                    UAE</strong> or a ticket for an onward journey.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2"><i class="fa fa-hotel me-2"></i>Proof of Stay
                                            </h6>
                                            <p class="small mb-0">Evidence of your accommodation in the UAE, such as a
                                                <strong>hotel booking or a residential address</strong>.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="p-3 bg-light rounded">
                                            <h6 class="text-primary mb-2"><i class="fa fa-map-marked-alt me-2"></i>Tour
                                                Programme</h6>
                                            <p class="small mb-0">A documented itinerary or tour program for your visit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-info border-start border-4 mt-4"
                            style="border-color: var(--bs-primary) !important;">
                            <h5 class="alert-heading"><i class="fa fa-key me-2"></i>Key Eligibility Rules</h5>
                            <p class="mb-2">This visa is available to <strong>all nationalities</strong> and allows
                                tourists to enter the UAE multiple times over a five-year period. On each visit, you may
                                remain in the country for <strong>up to 90 days</strong>, which can be extended for an
                                additional 90 days, provided the total stay does not exceed 180 days in a single year.
                            </p>
                            <p class="mb-0">Applying for this visa is like having a <strong>long-term membership
                                    card</strong> to a club; instead of needing a current member (sponsor) to sign you
                                in every time you visit, you provide your own financial credentials upfront to gain the
                                freedom to come and go as you please for five years.</p>
                        </div>

                        <div class="mt-4 p-4 rounded bg-light border-primary border">
                            <h6 class="mb-3"><i class="fa fa-calculator me-2" style="color: var(--bs-primary);"></i>Does
                                This Make
                                Financial Sense?</h6>
                            <p class="small mb-2">Let's compare for an Indian traveler making 3 Dubai trips over 5
                                years:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="small mb-1"><strong>Standard Route:</strong></p>
                                    <p class="small text-muted">3 × ₹9,000 = ₹27,000 ($325)</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="small mb-1"><strong>5-Year Visa:</strong></p>
                                    <p class="small text-muted">AED 750 = ₹17,000 ($204)</p>
                                </div>
                            </div>
                            <p class="small mb-0 text-success"><strong>Savings: ₹10,000+ plus the convenience of instant
                                    travel</strong></p>
                        </div>
                    </section>

                    <!-- FAQ Section -->
                    <section id="faqs" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Frequently Asked Questions
                        </h2>
                        <div class="accordion" id="visaFaq">
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>Do I need a visa to visit Dubai?</strong>
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#visaFaq">
                                    <div class="accordion-body">
                                        It depends on your nationality. Citizens from countries like the <strong>USA,
                                            UK, EU, China, and Russia</strong> get free visa on arrival. Indian citizens
                                        can get visa on arrival if they hold valid US/UK/EU visas, otherwise need
                                        pre-arranged visa. Check the guide above for your specific nationality.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>How much does a UAE tourist visa cost for Indian citizens?</strong>
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#visaFaq">
                                    <div class="accordion-body">
                                        For Indian citizens, a <strong>30-day single entry visa</strong> costs
                                        approximately ₹7,000-₹9,000, while a <strong>60-day visa</strong> costs
                                        ₹13,000-₹15,000. If you hold a valid US/UK/EU visa, you can get visa on arrival
                                        for <strong>AED 100-120</strong> (~₹2,500).
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>What is the UAE 5-year tourist visa?</strong>
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#visaFaq">
                                    <div class="accordion-body">
                                        The 5-year multiple entry tourist visa allows <strong>unlimited entries</strong>
                                        to UAE over 5 years, with 90 days per visit and 180 days total per year. It
                                        costs AED 650-750 plus a refundable deposit, and is available to all
                                        nationalities with proof of $4,000 minimum bank balance.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-primary mb-3 rounded">
                                <h3 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>Can I get UAE visa on arrival as an Indian citizen?</strong>
                                    </button>
                                </h3>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#visaFaq">
                                    <div class="accordion-body">
                                        Yes, if you hold a valid visa or residence permit from the <strong>USA, UK, EU,
                                            Australia, Canada, Japan, or New Zealand</strong>. You can get a 14-day visa
                                        on arrival at the airport for AED 100-120, which is extendable once.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Conclusion -->
                    <section class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            Your Next Steps: Making It Happen
                        </h2>
                        <p>
                            Understanding UAE visa requirements is just the first step. The key to a stress-free journey
                            is proper preparation and choosing the right application method for your situation.
                        </p>

                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="card h-100 text-center" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <div class="display-4 mb-3" style="color: var(--bs-primary);">1</div>
                                        <h5 class="h6">Determine Your Category</h5>
                                        <p class="small text-muted">Based on your nationality and current visas you hold
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 text-center" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <div class="display-4 mb-3" style="color: var(--bs-primary);">2</div>
                                        <h5 class="h6">Gather Documents</h5>
                                        <p class="small text-muted">Passport, photos, proof of funds, accommodation
                                            booking</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100 text-center" style="border-color: var(--bs-primary);">
                                    <div class="card-body">
                                        <div class="display-4 mb-3" style="color: var(--bs-primary);">3</div>
                                        <h5 class="h6">Apply or Arrive</h5>
                                        <p class="small text-muted">Via airline, travel agent, or direct at airport
                                            counter</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 p-4 bg-light border rounded">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5 class="mb-2">Need Expert Guidance?</h5>
                                    <p class="small mb-0">Arihant Travels specializes in UAE visa processing with 15+
                                        years of experience. We handle everything from standard tourist visas to complex
                                        5-year applications, ensuring accuracy and fast approval.</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <p class="small text-muted mb-2">Processing time: 3-5 days</p>
                                    <p class="small text-muted mb-0">Success rate: 98%+</p>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- CTA -->
                <div class="card mb-5 bg-primary">
                    <div class="card-body text-center p-5">
                        <h3 style="color: #fff;" class="mb-3">
                            <i class="fa fa-passport me-2"></i>Ready to Apply for Your UAE Visa?
                        </h3>
                        <p class="mb-4" style="color: #fff;">
                            Get expert assistance with fast, reliable visa processing services
                        </p>
                        <a href="https://wa.me/971585945007?text=I want to apply for a UAE visa" target="_blank"
                            class="btn btn-light btn-lg rounded-pill px-5 py-3">
                            <i class="fab fa-whatsapp me-2"></i>Apply via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Tags -->
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

                <!-- Author Bio -->
                <div class="card mt-5" style="border-color: var(--bs-primary);">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <img src="../img/logo.png" alt="Arihant Travels" class="rounded-circle"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                            </div>
                            <div class="col-md-10">
                                <h5 class="mb-2"><?php echo $blogAuthor; ?></h5>
                                <p class="text-muted mb-0">
                                    Specialized visa consultants helping travelers navigate UAE immigration requirements
                                    with expert guidance and fast processing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Cards Section (moved from sidebar) -->
            <div class="row g-4 mt-5 pt-4 border-top">
                <!-- Quick Links Card -->
                <div class="col-md-6">
                    <div class="card h-100" style="border-color: var(--bs-primary);">
                        <div class="card-header text-white" style="background-color: var(--bs-primary);">
                            <h5 class="mb-0"><i class="fa fa-link me-2"></i>Jump to Section</h5>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fa fa-globe me-2" style="color: var(--bs-primary);"></i>Global Comparison
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fa fa-flag me-2" style="color: var(--bs-primary);"></i>Indian Citizens
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fa fa-flag me-2" style="color: var(--bs-primary);"></i>Chinese Citizens
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fa fa-star me-2" style="color: var(--bs-secondary);"></i>5-Year Visa
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fa fa-check-circle me-2" style="color: #4CAF50;"></i>Universal Rules
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="col-md-6">
                    <div class="card h-100 text-white" style="background-color: var(--bs-primary);">
                        <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                            <i class="fa fa-passport fa-3x mb-3"></i>
                            <h5 class="text-white mb-3">Need Visa Help?</h5>
                            <p class="mb-4">Expert visa processing for all UAE visa types</p>
                            <a href="https://wa.me/971585945007" target="_blank" class="btn btn-light btn-lg mb-2">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp Now
                            </a>
                            <a href="/uae-visa" class="btn btn-outline-light btn-lg">View Visa Services</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Related Posts -->
<?php if (!empty($relatedPosts)): ?>
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="section-title px-3">Keep Reading</h5>
                <h2 class="mb-4">More Travel Guides</h2>
            </div>
            <div class="row g-4">
                <?php foreach ($relatedPosts as $post): ?>
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="<?php echo $post['image']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>"
                                style="height: 280px; object-fit: cover;">
                            <div class="card-body">
                                <span class="badge mb-2"
                                    style="background-color: var(--bs-primary); color: white;"><?php echo $post['category']; ?></span>
                                <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                <a href="<?php echo $post['url']; ?>" class="btn btn-sm mt-3"
                                    style="background-color: transparent; color: var(--bs-primary); border: 1px solid var(--bs-primary);">
                                    Read Full Guide <i class="fa fa-arrow-right ms-2"></i>
                                </a>
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
                    <h5>Budget Friendly Dubai</h5>
                    <p class="text-muted small">3N/4D — From AED 1,499</p>
                    <a href="/budget-friendly-dubai" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-primary">
                    <h5>Dubai Honeymoon</h5>
                    <p class="text-muted small">4N/5D — From AED 3,499</p>
                    <a href="/dubai-honeymoon-package" class="btn btn-outline-primary btn-sm rounded-pill">View Itinerary</a>
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
            <h2 class="text-white mb-4">Get UAE Visa Updates & Travel Tips</h2>
            <p class="text-white mb-5">Subscribe to our newsletter and receive the latest UAE visa updates, travel tips,
                and exclusive offers. Stay informed about visa policy changes and special packages!
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