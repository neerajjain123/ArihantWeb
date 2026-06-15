<?php
$pageTitle = "Page Not Found | Arihant Travel";
$pageDescription = "The page you're looking for doesn't exist. Explore our Dubai tours, desert safaris, and holiday packages.";
$pageKeywords = "404, page not found, Arihant Travel";
$pageCanonical = "https://arihantlink.com/404";
$currentPage = "404";

http_response_code(404);
include 'includes/header.php';
?>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-1 text-primary fw-bold">404</h1>
                <h2 class="mb-4">Page Not Found</h2>
                <p class="fs-5 text-muted mb-5">Sorry, the page you're looking for doesn't exist or has been moved. Let us help you find what you need.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="/" class="btn btn-primary rounded-pill py-3 px-5">
                        <i class="fa fa-home me-2"></i>Back to Home
                    </a>
                    <a href="https://wa.me/971585945007?text=I need help finding a page on your website" target="_blank" class="btn btn-outline-primary rounded-pill py-3 px-5">
                        <i class="fab fa-whatsapp me-2"></i>Contact Us
                    </a>
                </div>
                <hr class="my-5">
                <h3 class="mb-4">Popular Pages</h3>
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <a href="/desert-safari" class="btn btn-outline-secondary w-100 rounded-pill py-2">Desert Safaris</a>
                    </div>
                    <div class="col-md-4">
                        <a href="/dubai-holiday-packages" class="btn btn-outline-secondary w-100 rounded-pill py-2">Dubai Packages</a>
                    </div>
                    <div class="col-md-4">
                        <a href="/dubai-excursions" class="btn btn-outline-secondary w-100 rounded-pill py-2">Dubai Excursions</a>
                    </div>
                    <div class="col-md-4">
                        <a href="/yacht-rental" class="btn btn-outline-secondary w-100 rounded-pill py-2">Yacht Rental</a>
                    </div>
                    <div class="col-md-4">
                        <a href="/uae-visa" class="btn btn-outline-secondary w-100 rounded-pill py-2">UAE Visa</a>
                    </div>
                    <div class="col-md-4">
                        <a href="/blog" class="btn btn-outline-secondary w-100 rounded-pill py-2">Travel Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
