<?php
require_once __DIR__ . '/includes/cart-lib.php';
require_once __DIR__ . '/includes/stripe-lib.php';
cart_start();

$ref = preg_replace('/[^A-Z0-9]/', '', strtoupper((string) ($_GET['ref'] ?? '')));
$sessionId = preg_replace('/[^a-zA-Z0-9_]/', '', (string) ($_GET['session_id'] ?? ''));

$order = null;
$orderItems = [];
$paid = false;
$pendingMsg = '';

if ($ref !== '') {
    try {
        include __DIR__ . '/includes/db-config.php'; // $pdo
        require_once __DIR__ . '/includes/shop-tables.php';
        ensure_shop_tables($pdo);

        $stmt = $pdo->prepare('SELECT * FROM orders WHERE order_ref = ?');
        $stmt->execute([$ref]);
        $order = $stmt->fetch() ?: null;

        if ($order) {
            $it = $pdo->prepare('SELECT * FROM order_items WHERE order_id = ?');
            $it->execute([(int) $order['id']]);
            $orderItems = $it->fetchAll();

            if ($order['status'] === 'paid') {
                $paid = true;
            } elseif ($sessionId !== '' && $sessionId === $order['stripe_session_id']) {
                // Verify payment server-side with Stripe.
                [$ok, $sess] = stripe_request('GET', 'checkout/sessions/' . $sessionId);
                if ($ok && ($sess['payment_status'] ?? '') === 'paid') {
                    $upd = $pdo->prepare("UPDATE orders SET status = 'paid', paid_at = NOW() WHERE id = ? AND status != 'paid'");
                    $upd->execute([(int) $order['id']]);
                    $justPaid = $upd->rowCount() > 0;
                    $paid = true;
                    cart_clear();

                    if ($justPaid) {
                        // Confirmation emails (best effort).
                        try {
                            env_load();
                            $smtpUser = env('SMTP_USER');
                            $smtpPass = env('SMTP_PASS');
                            if ($smtpUser && $smtpPass) {
                                require __DIR__ . '/includes/vendor/autoload.php';
                                $lines = '';
                                foreach ($orderItems as $li) {
                                    $lines .= '- ' . $li['title'] . ' | ' . $li['travel_date'] . ' | '
                                            . $li['adults'] . ' adult(s)'
                                            . ($li['children'] > 0 ? ' + ' . $li['children'] . ' child(ren)' : '')
                                            . ' | AED ' . $li['line_total'] . "\n";
                                }
                                $body = "Order {$order['order_ref']} — PAID\n\n"
                                      . "Customer: {$order['name']}\nEmail: {$order['email']}\nPhone: {$order['phone']}\n"
                                      . "Hotel: {$order['hotel']}\nNotes: {$order['notes']}\n\nItems:\n$lines\n"
                                      . "Total: AED {$order['total_aed']}\n";
                                foreach ([[env('ADMIN_NOTIFY_INBOX', 'contact@arihantlink.com'), 'New PAID booking: ' . $order['order_ref'],
                                           "A new paid booking has arrived.\n\n" . $body . "\nArrange pickup and confirm with the customer."],
                                          [$order['email'], 'Booking confirmed — ' . $order['order_ref'] . ' | Arihant Travels',
                                           "Dear {$order['name']},\n\nYour payment is confirmed! Booking details:\n\n" . $body
                                         . "\nOur team will WhatsApp you pickup timings the day before your safari."
                                         . "\nQuestions? WhatsApp +971 58 594 5007.\n\nArihant Travels"]] as [$to, $subj, $txt]) {
                                    try {
                                        $m = new PHPMailer\PHPMailer\PHPMailer(true);
                                        $m->isSMTP();
                                        $m->Host = env('SMTP_HOST', 'smtp.hostinger.com');
                                        $m->SMTPAuth = true;
                                        $m->Username = $smtpUser;
                                        $m->Password = $smtpPass;
                                        $m->SMTPSecure = env('SMTP_SECURE', 'ssl');
                                        $m->Port = (int) env('SMTP_PORT', '465');
                                        $m->setFrom(env('SMTP_FROM', 'contact@arihantlink.com'), env('SMTP_FROM_NAME', 'Arihant Travels'));
                                        $m->addAddress($to);
                                        $m->Subject = $subj;
                                        $m->Body = $txt;
                                        $m->send();
                                    } catch (Throwable $me) {
                                        error_log('[order-confirmation] mail failed: ' . $me->getMessage());
                                    }
                                }
                            }
                        } catch (Throwable $e) {
                            error_log('[order-confirmation] mail block: ' . $e->getMessage());
                        }
                    }
                } else {
                    $pendingMsg = 'Your payment has not been confirmed yet. If you completed payment, this page will '
                                . 'update shortly — or WhatsApp us with your order reference.';
                }
            } else {
                $pendingMsg = 'This order is awaiting payment.';
            }
        }
    } catch (Throwable $e) {
        error_log('[order-confirmation] ' . $e->getMessage());
    }
}

// Page SEO Variables
$pageTitle = "Order Confirmation | Arihant Travels";
$pageDescription = "Your booking confirmation.";
$pageKeywords = "order confirmation";
$pageCanonical = "https://arihantlink.com/order-confirmation";
$currentPage = "order-confirmation";
$forceNoindex = true;

include 'includes/header.php';
?>

<div style="background: linear-gradient(135deg, #13357B 0%, #3A7CA4 100%); padding: 130px 0 90px;">
    <div class="container">
        <h1 class="text-white h3 mb-1">Order <?php echo $order ? htmlspecialchars($order['order_ref']) : 'Confirmation'; ?></h1>
    </div>
</div>

<div class="container" style="margin-top: -55px; margin-bottom: 4rem;">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="bg-white rounded-4 shadow-sm p-5 text-center">
                <?php if (!$order): ?>
                    <i class="fa fa-question-circle fa-3x text-muted mb-3"></i>
                    <h4>Order not found</h4>
                    <p class="text-muted">Please check the link, or contact us with your payment receipt.</p>
                <?php elseif ($paid): ?>
                    <i class="fa fa-check-circle fa-3x text-success mb-3"></i>
                    <h3>Booking confirmed — shukriya!</h3>
                    <p class="text-muted mb-4">Payment received for order
                        <strong><?php echo htmlspecialchars($order['order_ref']); ?></strong>.
                        A confirmation email is on its way to
                        <strong><?php echo htmlspecialchars($order['email']); ?></strong>.</p>
                    <div class="text-start bg-light rounded-3 p-4 mb-4">
                        <?php foreach ($orderItems as $li): ?>
                            <div class="d-flex justify-content-between py-1">
                                <span><?php echo htmlspecialchars($li['title']); ?> ·
                                    <?php echo date('d M Y', strtotime($li['travel_date'])); ?></span>
                                <span class="fw-semibold">AED <?php echo (int) $li['line_total']; ?></span>
                            </div>
                        <?php endforeach; ?>
                        <div class="d-flex justify-content-between border-top mt-2 pt-2">
                            <span class="fw-bold">Total paid</span>
                            <span class="fw-bold text-primary">AED <?php echo (int) $order['total_aed']; ?></span>
                        </div>
                    </div>
                    <p class="text-muted small mb-4">We'll WhatsApp your pickup time the day before the safari.</p>
                    <a href="https://wa.me/971585945007?text=Hi, my order is <?php echo htmlspecialchars($order['order_ref']); ?>"
                       target="_blank" rel="noopener" class="btn btn-success rounded-pill px-4 me-2 mb-2">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp Us</a>
                    <a href="/" class="btn btn-outline-primary rounded-pill px-4 mb-2">Back to Home</a>
                <?php else: ?>
                    <i class="fa fa-hourglass-half fa-3x text-warning mb-3"></i>
                    <h4>Payment pending</h4>
                    <p class="text-muted mb-4"><?php echo htmlspecialchars($pendingMsg); ?></p>
                    <a href="cart" class="btn btn-primary rounded-pill px-4">Return to Cart</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
