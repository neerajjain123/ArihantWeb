<?php
/**
 * Safari cross-sell rail.
 *
 * Renders 3 cards: two sibling safari options + one complementary product.
 * Skips whatever the current page is (so it never links to itself).
 *
 * Usage:
 *   $currentSafariSlug = 'standard-desert-safari'; // optional, hides itself
 *   include __DIR__ . '/includes/safari-cross-sell.php';
 */

$currentSafariSlug = isset($currentSafariSlug) ? $currentSafariSlug : ($currentPage ?? '');

$siblings = [
    ['slug' => 'jain-desert-safari-dubai', 'title' => 'Jain Family Desert Safari', 'price' => 'AED 199 / ₹4,600', 'meta' => '6 hrs &middot; Jain dinner before sunset'],
    ['slug' => 'standard-desert-safari',  'title' => 'Standard Evening Safari', 'price' => 'AED 99 / ₹2,300',  'meta' => '6 hrs &middot; Buffet dinner'],
    ['slug' => 'vip-desert-safari',       'title' => 'VIP Evening Safari',      'price' => 'AED 149 / ₹3,400', 'meta' => '6 hrs &middot; Sofa seating &middot; Jain BBQ counter'],
    ['slug' => 'premium-desert-safari',   'title' => 'Premium Evening Safari',  'price' => 'AED 199 / ₹4,600', 'meta' => '6 hrs &middot; Lehbab Red Dunes &middot; AC camp'],
    ['slug' => 'morning-desert-safari',   'title' => 'Morning Desert Safari',   'price' => 'AED 150 / ₹3,500', 'meta' => '4 hrs &middot; Beat the heat'],
    ['slug' => 'overnight-desert-safari', 'title' => 'Overnight Desert Safari', 'price' => 'AED 249 / ₹5,700', 'meta' => '16 hrs &middot; Sleep under stars'],
    ['slug' => 'quad-bike-safari',        'title' => 'Quad Bike Safari',        'price' => 'AED 350 / ₹8,100', 'meta' => '2 hrs &middot; Pure adrenaline'],
];

// Hide the current page from siblings.
$availableSiblings = array_values(array_filter($siblings, fn($s) => $s['slug'] !== $currentSafariSlug));

// Pick two siblings, deterministic but varied per page.
$pick1 = $availableSiblings[0] ?? $siblings[0];
$pick2 = $availableSiblings[1] ?? $siblings[1];

// One complementary cross-sell product.
$complementary = [
    'slug' => 'dhow-cruise',
    'title' => 'Dhow Cruise Marina dinner',
    'price' => 'From AED 99 / ₹2,300',
    'meta' => '2 hrs &middot; Veg / Jain dinner option',
];
?>
<section class="page-section page-section--light-2" id="related">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Compare or combine</span>
            <h2 class="section-heading__title">Other ways to experience Dubai</h2>
            <p class="section-heading__lead">If this safari isn&rsquo;t quite right, here are
                two siblings and one popular complementary excursion.</p>
        </div>
        <div class="row g-4">
            <?php foreach ([$pick1, $pick2, $complementary] as $card): ?>
            <div class="col-md-4">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><?php echo htmlspecialchars_decode($card['title']); ?></h3>
                        <p class="arihant-card__meta"><?php echo $card['meta']; /* contains middot entity */ ?></p>
                        <p class="arihant-card__price"><?php echo htmlspecialchars($card['price']); ?></p>
                        <a href="<?php echo htmlspecialchars($card['slug']); ?>" class="btn btn-primary rounded-pill mt-2">View details</a>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="text-center mt-4">
            <a href="desert-safari" class="link-primary">See all 6 desert safari packages &rarr;</a>
        </p>
    </div>
</section>
