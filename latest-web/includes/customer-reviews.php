<?php
/**
 * Customer Reviews section (reusable).
 *
 * Usage on any page:
 *   include 'includes/customer-reviews.php';
 *
 * Optional overrides (set BEFORE the include):
 *   $reviewsHeading = 'What Safari Guests Say';
 *   $pageReviews = [
 *       ['name' => 'Ritu S.', 'location' => 'Mumbai, India', 'stars' => 5, 'text' => '...'],
 *       ...
 *   ];
 */

$reviewsHeading = isset($reviewsHeading) ? $reviewsHeading : 'What Our Customers Say';

if (!isset($pageReviews) || !is_array($pageReviews) || count($pageReviews) === 0) {
    $pageReviews = [
        [
            'name' => 'Mehta Family',
            'location' => 'Ahmedabad, India',
            'stars' => 5,
            'text' => 'Arihant Travel made our Dubai trip absolutely perfect. The Jain food arrangements were flawless — even on the desert safari. Highly recommended for every Jain family!',
        ],
        [
            'name' => 'Priya & Ankit',
            'location' => 'Surat, India',
            'stars' => 5,
            'text' => 'Traveling as pure vegetarians can be stressful, but Arihant took care of everything. The team was responsive on WhatsApp throughout the trip — felt like family!',
        ],
        [
            'name' => 'Shah Family',
            'location' => 'Nairobi, Kenya',
            'stars' => 5,
            'text' => 'Recommended by our community and delivered beyond expectations. Even the dhow cruise had a specially prepared Jain thali. Wonderful — will refer everyone!',
        ],
    ];
}
?>
<!-- Customer Reviews Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mx-auto mb-4" style="max-width: 900px;">
            <h5 class="section-title px-3">Reviews</h5>
            <h2 class="mb-3"><?php echo $reviewsHeading; ?></h2>
            <!-- Google rating badge -->
            <a href="https://g.page/r/CZDbjoitBVREEAE" target="_blank" rel="noopener"
               class="d-inline-flex align-items-center gap-2 bg-white rounded-pill shadow-sm px-4 py-2 text-decoration-none">
                <i class="fab fa-google fa-lg" style="color:#4285F4;"></i>
                <span class="fw-bold text-dark">4.8</span>
                <span aria-hidden="true">
                    <i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star" style="color:#f0b429;"></i><i class="fa fa-star-half-alt" style="color:#f0b429;"></i>
                </span>
                <span class="text-muted small">on Google Reviews</span>
            </a>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($pageReviews as $review): ?>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="bg-white rounded-4 shadow-sm p-4 d-flex flex-column w-100 testimonial-card">
                        <div class="mb-2" aria-label="<?php echo (int) $review['stars']; ?> star rating">
                            <?php for ($i = 0; $i < (int) $review['stars']; $i++): ?><i class="fa fa-star" style="color:#f0b429;"></i><?php endfor; ?>
                        </div>
                        <p class="fst-italic mb-3 flex-grow-1">&ldquo;<?php echo $review['text']; ?>&rdquo;</p>
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                 style="width:40px;height:40px;">
                                <i class="fa fa-user text-white"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-semibold small"><?php echo $review['name']; ?></p>
                                <p class="mb-0 text-muted" style="font-size:0.78rem;">
                                    <i class="fab fa-google me-1" style="color:#4285F4;"></i><?php echo $review['location']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="https://g.page/r/CZDbjoitBVREEAE" target="_blank" rel="noopener"
               class="btn btn-outline-primary rounded-pill py-2 px-4 me-2 mb-2">
                <i class="fab fa-google me-2"></i>Read All Google Reviews
            </a>
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" rel="noopener"
               class="btn btn-primary rounded-pill py-2 px-4 mb-2">
                <i class="fa fa-pen me-2"></i>Leave Us a Review
            </a>
        </div>
    </div>
</div>
<!-- Customer Reviews End -->
