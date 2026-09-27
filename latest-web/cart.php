<?php
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/cart-lib.php';
csrf_start();
cart_start();

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['remove_key'])) {
    if (csrf_verify()) {
        cart_remove((string) $_POST['remove_key']);
    }
    header('Location: cart');
    exit();
}

$items = cart_items();
$total = cart_total();
$cancelled = isset($_GET['cancelled']);

// Page SEO Variables
$pageTitle = "Your Cart | Arihant Travels";
$pageDescription = "Review your selected activities and proceed to secure checkout.";
$pageKeywords = "cart, booking, arihant travel";
$pageCanonical = "https://arihantlink.com/cart";
$currentPage = "cart";
$forceNoindex = true;

include 'includes/header.php';
$catalog = catalog_products();
?>

<!-- Cart Header -->
<div style="background: linear-gradient(135deg, #13357B 0%, #3A7CA4 100%); padding: 130px 0 90px;">
    <div class="container">
        <h1 class="text-white h3 mb-1">Your Cart</h1>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>
</div>

<div class="container" style="margin-top: -55px; margin-bottom: 4rem;">
    <?php if ($cancelled): ?>
        <div class="alert alert-warning shadow-sm">Payment was cancelled — your cart is still saved below.</div>
    <?php endif; ?>

    <?php if (count($items) === 0): ?>
        <div class="bg-white rounded-4 shadow-sm p-5 text-center">
            <i class="fa fa-shopping-cart fa-3x text-muted mb-3"></i>
            <h4>Your cart is empty</h4>
            <p class="text-muted mb-4">Add a desert safari to get started — instant confirmation, secure payment.</p>
            <a href="desert-safari#book-online" class="btn btn-primary rounded-pill px-4">Book a Desert Safari</a>
        </div>
    <?php else: ?>
        <div class="row g-4">
            <div class="col-lg-8">
                <?php foreach ($items as $key => $line):
                    $zoneTitle = $catalog[$line['product_id']]['pickup_zones'][$line['pickup_zone']]['title'] ?? $line['pickup_zone']; ?>
                    <div class="bg-white rounded-4 shadow-sm p-4 mb-3">
                        <div class="d-flex justify-content-between align-items-start gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-2"><?php echo htmlspecialchars($line['title']); ?></h5>
                                <p class="text-muted small mb-1">
                                    <i class="fa fa-calendar me-2"></i><?php echo date('D, d M Y', strtotime($line['travel_date'])); ?>
                                    &nbsp;·&nbsp; <i class="fa fa-user me-1"></i><?php echo (int) $line['adults']; ?> adult<?php echo $line['adults'] > 1 ? 's' : ''; ?>
                                    <?php if ($line['children'] > 0): ?> + <?php echo (int) $line['children']; ?> child<?php echo $line['children'] > 1 ? 'ren' : ''; ?><?php endif; ?>
                                </p>
                                <p class="text-muted small mb-0"><i class="fa fa-car me-2"></i><?php echo htmlspecialchars($zoneTitle); ?></p>
                            </div>
                            <div class="text-end">
                                <p class="h5 mb-2">AED <?php echo (int) $line['line_total']; ?></p>
                                <form method="POST" action="cart" class="mb-0">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="remove_key" value="<?php echo htmlspecialchars($key); ?>">
                                    <button class="btn btn-sm btn-outline-danger rounded-pill px-3" type="submit">
                                        <i class="fa fa-trash me-1"></i>Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <a href="desert-safari#book-online" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="fa fa-plus me-2"></i>Add another safari</a>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-sm p-4">
                    <h5 class="mb-3">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Items</span><span><?php echo count($items); ?></span>
                    </div>
                    <div class="d-flex justify-content-between border-top pt-3 mb-3">
                        <span class="fw-bold">Total</span>
                        <span class="fw-bold fs-5 text-primary">AED <?php echo (int) $total; ?></span>
                    </div>
                    <a href="checkout" class="btn btn-primary w-100 py-3 rounded-pill">
                        <i class="fa fa-lock me-2"></i>Secure Checkout</a>
                    <p class="text-muted small text-center mt-3 mb-0">Powered by Stripe · Visa, Mastercard, Apple Pay</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
