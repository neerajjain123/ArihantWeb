<?php
// ====================================
// Blog Post Template
// ====================================

// Set base path for assets (since we're in /blog/ subdirectory)
$basePath = "../";

// Blog Post SEO Variables
$pageTitle = "Blog Post Title | Arihant Travel";
$pageDescription = "Blog post description for SEO purposes.";
$pageKeywords = "dubai, travel, tourism, blog keywords";
$pageCanonical = "https://arihantlink.com/blog/blog-post-slug";
$currentPage = "blog";

// Blog Post Meta Information
$blogTitle = "Blog Post Title";
$blogCategory = "Dubai Tours"; // Options: Dubai Tours, Jain-Friendly, International, Visa Guide
$blogCategoryClass = "primary"; // Options: primary, secondary, success, danger, warning, info
$blogAuthor = "Arihant Travel Team";
$blogDate = "December 22, 2025";
$blogReadTime = "10 min read";
$blogFeaturedImage = "../img/blogs/featured-image.jpg";
$blogImageAlt = "Blog post featured image description";
$blogExcerpt = "Brief excerpt or introduction to the blog post that appears in the hero section.";

// Blog Tags
$blogTags = ["Tag1", "Tag2", "Tag3", "Tag4"];

// Related Posts
$relatedPosts = [
    [
        'title' => 'Related Post 1',
        'url' => 'related-post-1-slug',
        'image' => '../img/blogs/related-1.jpg',
        'category' => 'Dubai Tours'
    ],
    [
        'title' => 'Related Post 2',
        'url' => 'related-post-2-slug',
        'image' => '../img/blogs/related-2.jpg',
        'category' => 'Adventure'
    ]
];
?>

<?php include '../includes/header.php'; ?>

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
                    class="img-fluid rounded shadow-lg w-100" style="max-height: 600px; object-fit: cover;">
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

                    <!-- Section 1: Introduction -->
                    <section id="introduction" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            1. Introduction Section Title
                        </h2>
                        <p>
                            Your introduction paragraph goes here. This is where you set the context and engage your
                            readers with compelling content.
                        </p>
                        <p>
                            Additional paragraphs can be added to provide more context and information.
                        </p>

                        <!-- Example Figure with Image -->
                        <figure class="my-4">
                            <img src="../img/blogs/example-image.jpg" alt="Image description"
                                class="img-fluid rounded shadow-sm">
                            <figcaption class="text-muted text-center mt-2 small">
                                Image caption goes here
                            </figcaption>
                        </figure>

                        <!-- Example Tip/Info Box -->
                        <div class="p-4 bg-light rounded border-start border-5 border-primary my-4">
                            <h5 class="text-primary mb-3"><i class="fa fa-lightbulb me-2"></i>Pro Tip</h5>
                            <p class="mb-0">
                                This is an example of a tip box. You can use this to highlight important information,
                                tips, or notes for your readers.
                            </p>
                        </div>
                    </section>

                    <!-- Section 2: Main Content -->
                    <section id="main-content" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            2. Main Content Section
                        </h2>
                        <p>
                            Your main content goes here. Break it down into logical sections with clear headings.
                        </p>

                        <h3 class="mb-3 mt-4" style="color: var(--bs-dark);">Subsection Title</h3>
                        <p>
                            Subsection content goes here. Use subsections to organize your content better.
                        </p>

                        <!-- Example Alert Box -->
                        <div class="alert alert-warning mb-4">
                            <strong><i class="fa fa-exclamation-triangle me-2"></i>Important Note:</strong> This is an
                            example of an alert box for important information.
                        </div>

                        <!-- Example List -->
                        <h4 class="mb-3">Key Points</h4>
                        <ul class="mb-4">
                            <li>First key point</li>
                            <li>Second key point</li>
                            <li>Third key point</li>
                            <li>Fourth key point</li>
                        </ul>
                    </section>

                    <!-- Example Card Section -->
                    <section id="highlighted-info" class="mb-5">
                        <div class="card bg-light border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="card-title text-center text-primary mb-4"
                                    style="font-family: 'Jost', sans-serif;">
                                    <i class="fa fa-star text-warning me-2"></i>Highlighted Information
                                </h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>Point 1:</strong> Description of the first point with detailed
                                            information.
                                        </div>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>Point 2:</strong> Description of the second point with detailed
                                            information.
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <i class="fa fa-check-circle text-success mt-1 me-3"></i>
                                        <div>
                                            <strong>Point 3:</strong> Description of the third point with detailed
                                            information.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- CTA Section: WhatsApp Booking -->
                    <div class="card bg-primary text-white mb-5">
                        <div class="card-body text-center p-5">
                            <h3 class="text-white mb-3">Ready to Plan Your Trip?</h3>
                            <p class="mb-4">Contact us on WhatsApp to get personalized recommendations and exclusive
                                packages!</p>
                            <a href="https://wa.me/971585945007?text=I want to plan my Dubai trip" target="_blank"
                                class="btn btn-light btn-lg rounded-pill px-5 py-3">
                                <i class="fab fa-whatsapp me-2"></i>Chat with Us on WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Example Table Section -->
                    <section id="comparison-table" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            3. Comparison or Data Table
                        </h2>
                        <div class="table-responsive my-4">
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Data 1</td>
                                        <td>Data 2</td>
                                        <td>Data 3</td>
                                    </tr>
                                    <tr>
                                        <td>Data 4</td>
                                        <td>Data 5</td>
                                        <td>Data 6</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <!-- Example Cards Grid -->
                    <section id="features" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            4. Features or Options
                        </h2>
                        <div class="row g-4 my-4">
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary"><i class="fa fa-star me-2"></i>Feature 1
                                        </h4>
                                        <p class="card-text">
                                            Description of the first feature or option with relevant details and
                                            information.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-primary">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary"><i class="fa fa-star me-2"></i>Feature 2
                                        </h4>
                                        <p class="card-text">
                                            Description of the second feature or option with relevant details and
                                            information.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Conclusion Section -->
                    <section id="conclusion" class="mb-5">
                        <h2 class="mb-4" style="color: var(--bs-primary); font-family: 'Jost', sans-serif;">
                            5. Conclusion
                        </h2>
                        <p>
                            Your conclusion paragraph summarizing the key points and providing a call to action.
                        </p>
                        <p>
                            Final thoughts and encouragement for readers to take action or learn more.
                        </p>

                        <div class="p-4 bg-primary rounded border-start border-5 border-white my-4">
                            <h5 class="text-white mb-3"><i class="fa fa-phone me-2"></i>Ready to Get Started?</h5>
                            <p class="mb-0 text-white">
                                Contact Arihant Travel today to start planning your perfect trip. Our experienced team
                                will help you create a personalized itinerary that matches your dreams and budget.
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
                                <img src="../img/logo.png" alt="Arihant Travel" class="rounded-circle"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                            </div>
                            <div class="col-md-10">
                                <h5 class="mb-2"><?php echo $blogAuthor; ?></h5>
                                <p class="text-muted mb-3">
                                    The Arihant Travel team specializes in creating unforgettable Dubai experiences
                                    with a focus on Jain-friendly and vegetarian travel packages. With years of
                                    experience, we provide expert guidance for your perfect Dubai vacation.
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
                        <p class="small mb-3">Get exclusive Dubai travel tips and special offers delivered to your
                            inbox!</p>
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
                        <p class="small mb-3">Our travel experts are here to create your perfect Dubai itinerary</p>
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