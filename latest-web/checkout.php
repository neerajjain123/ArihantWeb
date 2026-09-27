<?php
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/cart-lib.php';
require_once __DIR__ . '/includes/stripe-lib.php';
csrf_start();
cart_start();

$items = cart_items();
if (count($items) === 0) {
    header('Location: cart');
    exit();
}
$total = cart_total();
$error = '';

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['place_order'])) {
    if (!csrf_verify()) {
        $error = 'Security token invalid. Please refresh and try again.';
    } else {
        $name  = trim((string) ($_POST['name'] ?? ''));
        $email = filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL);
        $phone = trim((string) ($_POST['phone'] ?? ''));
        $hotel = trim((string) ($_POST['hotel'] ?? ''));
        $notes = trim((string) ($_POST['notes'] ?? ''));

        if ($name === '' || !$email || strlen($phone) < 8) {
            $error = 'Please fill in your name, a valid email and phone number.';
        } else {
            try {
                include __DIR__ . '/includes/db-config.php'; // $pdo
                require_once __DIR__ . '/includes/shop-tables.php';
                ensure_shop_tables($pdo);

                $orderRef = 'AT' . date('ymd') . strtoupper(bin2hex(random_bytes(3)));
                $userId = isset($_SESSION['user_id']) ? (int) $_SESSION['user_id'] : null;

                $stmt = $pdo->prepare(
                    "INSERT INTO orders (order_ref, user_id, name, email, phone, hotel, notes, total_aed, status)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'pending')"
                );
                $stmt->execute([$orderRef, $userId, mb_substr($name, 0, 120), $email,
                                mb_substr($phone, 0, 30), mb_substr($hotel, 0, 190), $notes, $total]);
                $orderId = (int) $pdo->lastInsertId();

                $istmt = $pdo->prepare(
                    "INSERT INTO order_items (order_id, product_id, variant_id, title, travel_date, adults,
                                              children, pickup_zone, pickup_fee, unit_adult, unit_child, line_total)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
                );
                foreach ($items as $line) {
                    $istmt->execute([$orderId, $line['product_id'], $line['variant_id'], $line['title'],
                                     $line['travel_date'], $line['adults'], $line['children'],
                                     $line['pickup_zone'], $line['pickup_fee'],
                                     $line['unit_adult'], $line['unit_child'], $line['line_total']]);
                }

                // --- Stripe Checkout session
                $params = [
                    'mode' => 'payment',
                    'success_url' => 'https://arihantlink.com/order-confirmation?ref=' . $orderRef
                                   . '&session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => 'https://arihantlink.com/cart?cancelled=1',
                    'customer_email' => $email,
                    'client_reference_id' => $orderRef,
                    'metadata[order_ref]' => $orderRef,
                ];
                $i = 0;
                foreach ($items as $line) {
                    $desc = date('d M Y', strtotime($line['travel_date'])) . ' · '
                          . $line['adults'] . ' adult(s)'
                          . ($line['children'] > 0 ? ' + ' . $line['children'] . ' child(ren)' : '');
                    $params["line_items[$i][price_data][currency]"] = 'aed';
                    $params["line_items[$i][price_data][product_data][name]"] = $line['title'];
                    $params["line_items[$i][price_data][product_data][description]"] = $desc;
                    $params["line_items[$i][price_data][unit_amount]"] = $line['line_total'] * 100; // fils
                    $params["line_items[$i][quantity]"] = 1;
                    $i++;
                }

                [$ok, $resp] = stripe_request('POST', 'checkout/sessions', $params);
                if ($ok && !empty($resp['url'])) {
                    $upd = $pdo->prepare('UPDATE orders SET stripe_session_id = ? WHERE id = ?');
                    $upd->execute([$resp['id'], $orderId]);
                    header('Location: ' . $resp['url'], true, 303);
                    exit();
                }

                error_log('[checkout] Stripe session failed: ' . json_encode($resp['error'] ?? $resp));
                $error = 'Could not start the payment. Please try again, or WhatsApp us on +971 58 594 5007 '
                       . 'quoting order ' . $orderRef . '.';
            } catch (Throwable $e) {
                error_log('[checkout] ' . $e->getMessage());
                $error = 'Something went wrong placing the order. Please try again.';
            }
        }
    }
}

// Page SEO Variables
$pageTitle = "Checkout | Arihant Travels";
$pageDescription = "Secure checkout for your Arihant Travels booking.";
$pageKeywords = "checkout, secure payment";
$pageCanonical = "https://arihantlink.com/checkout";
$currentPage = "checkout";
$forceNoindex = true;

include 'includes/header.php';
?>

<!-- Checkout Header -->
<div style="background: linear-gradient(135deg, #13357B 0%, #3A7CA4 100%); padding: 130px 0 90px;">
    <div class="container">
        <h1 class="text-white h3 mb-1">Checkout</h1>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
            <li class="breadcrumb-item"><a href="cart" class="text-white-50">Cart</a></li>
            <li class="breadcrumb-item active text-white">Checkout</li>
        </ol>
    </div>
</div>

<div class="container" style="margin-top: -55px; margin-bottom: 4rem;">
    <?php if ($error): ?>
        <div class="alert alert-danger shadow-sm"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <div class="row g-4">
        <div class="col-lg-7">
            <div class="bg-white rounded-4 shadow-sm p-4 p-md-5">
                <h4 class="mb-4">Your Details</h4>
                <form method="POST" action="checkout">
                    <?php echo csrf_field(); ?>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="co-name" name="name" placeholder="Name"
                                       required maxlength="120" value="<?php echo htmlspecialchars($_POST['name'] ?? ($_SESSION['user_name'] ?? '')); ?>">
                                <label for="co-name">Full Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="co-email" name="email" placeholder="Email"
                                       required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                                <label for="co-email">Email *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="co-phone" name="phone"
                                       placeholder="+971 / +91" required
                                       value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                                <label for="co-phone">Phone / WhatsApp *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="co-hotel" name="hotel"
                                       placeholder="Hotel" maxlength="190"
                                       value="<?php echo htmlspecialchars($_POST['hotel'] ?? ''); ?>">
                                <label for="co-hotel">Hotel / Pickup Address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="co-notes" name="notes" style="height: 100px"
                                          placeholder="Notes"><?php echo htmlspecialchars($_POST['notes'] ?? ''); ?></textarea>
                                <label for="co-notes">Dietary needs / notes (e.g. Jain meals)</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3 rounded-pill" type="submit" name="place_order">
                                <i class="fa fa-lock me-2"></i>Pay AED <?php echo (int) $total; ?> Securely
                            </button>
                            <p class="text-muted small text-center mt-2 mb-0">You'll be redirected to Stripe's secure
                                payment page. We never see your card details.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="bg-white rounded-4 shadow-sm p-4">
                <h5 class="mb-3">Order Summary</h5>
                <?php foreach ($items as $line): ?>
                    <div class="d-flex justify-content-between border-bottom py-2 gap-3">
                        <div>
                            <p class="mb-0 fw-semibold small"><?php echo htmlspecialchars($line['title']); ?></p>
                            <p class="mb-0 text-muted" style="font-size:0.78rem;">
                                <?php echo date('d M Y', strtotime($line['travel_date'])); ?> ·
                                <?php echo (int) $line['adults']; ?>A<?php echo $line['children'] > 0 ? ' + ' . (int) $line['children'] . 'C' : ''; ?>
                            </p>
                        </div>
                        <span class="fw-semibold">AED <?php echo (int) $line['line_total']; ?></span>
                    </div>
                <?php endforeach; ?>
                <div class="d-flex justify-content-between pt-3">
                    <span class="fw-bold">Total</span>
                    <span class="fw-bold fs-5 text-primary">AED <?php echo (int) $total; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
