<?php
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/auth.php';
include __DIR__ . '/includes/db-config.php';
require_once __DIR__ . '/includes/account-tables.php';
csrf_start();

if (isset($_SESSION['user_id'])) {
    header('Location: dashboard');
    exit();
}

$notice = '';
$error = '';

// Per-IP rate limit: 3 reset requests / 15 min.
$rlDir = sys_get_temp_dir() . '/arihant_pwreset';
if (!is_dir($rlDir)) { @mkdir($rlDir, 0700, true); }
$rlFile = $rlDir . '/' . md5($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');
$now = time();
$hits = is_file($rlFile)
    ? array_filter(array_map('intval', explode(',', (string) @file_get_contents($rlFile))), fn($t) => $t > ($now - 900))
    : [];

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['send_reset'])) {
    if (!csrf_verify()) {
        $error = 'Security token invalid. Please refresh the page and try again.';
    } elseif (count($hits) >= 3) {
        $error = 'Too many reset requests. Please try again in 15 minutes.';
    } else {
        $hits[] = $now;
        @file_put_contents($rlFile, implode(',', $hits), LOCK_EX);

        $email = filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL);
        // Always show the same message — don't reveal whether the email exists.
        $notice = 'If that email is registered with us, a reset link is on its way. Check your inbox (and spam folder).';

        if ($email) {
            try {
                ensure_account_tables($pdo);
                $stmt = $pdo->prepare('SELECT id, full_name FROM users WHERE email = ?');
                $stmt->execute([$email]);
                $account = $stmt->fetch();

                if ($account) {
                    $token = bin2hex(random_bytes(32));
                    $ins = $pdo->prepare(
                        'INSERT INTO password_resets (email, token_hash, expires_at) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 1 HOUR))'
                    );
                    $ins->execute([$email, hash('sha256', $token)]);

                    $resetLink = 'https://arihantlink.com/reset-password?token=' . $token
                               . '&email=' . urlencode($email);

                    require_once __DIR__ . '/includes/env.php';
                    env_load();
                    $smtpUser = env('SMTP_USER');
                    $smtpPass = env('SMTP_PASS');
                    if ($smtpUser && $smtpPass) {
                        require __DIR__ . '/includes/vendor/autoload.php';
                        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                        $mail->isSMTP();
                        $mail->Host       = env('SMTP_HOST', 'smtp.hostinger.com');
                        $mail->SMTPAuth   = true;
                        $mail->Username   = $smtpUser;
                        $mail->Password   = $smtpPass;
                        $mail->SMTPSecure = env('SMTP_SECURE', 'ssl');
                        $mail->Port       = (int) env('SMTP_PORT', '465');
                        $mail->setFrom(env('SMTP_FROM', 'contact@arihantlink.com'), env('SMTP_FROM_NAME', 'Arihant Travels'));
                        $mail->addAddress($email, $account['full_name']);
                        $mail->Subject = 'Reset your Arihant Travels password';
                        $mail->Body    = "Dear {$account['full_name']},\n\n"
                            . "We received a request to reset your Arihant Travels password.\n\n"
                            . "Reset it here (link valid for 1 hour):\n$resetLink\n\n"
                            . "If you did not request this, you can safely ignore this email — your password "
                            . "will not be changed.\n\nBest regards,\nArihant Travels Team";
                        $mail->send();
                    } else {
                        error_log('[forgot-password] SMTP credentials missing — reset mail not sent.');
                    }
                }
            } catch (Throwable $e) {
                error_log('[forgot-password] ' . $e->getMessage());
            }
        }
    }
}

// Page SEO Variables
$pageTitle = "Forgot Password | Arihant Travels";
$pageDescription = "Reset your Arihant Travels account password.";
$pageKeywords = "forgot password, reset password";
$pageCanonical = "https://arihantlink.com/forgot-password";
$currentPage = "forgot-password";

include 'includes/header.php';
?>

<!-- Auth Hero + Forgot Password Form -->
<div class="auth-hero d-flex align-items-center"
    style="min-height: 100vh; padding: 130px 0 60px;
           background: linear-gradient(rgba(19, 53, 123, 0.65), rgba(19, 53, 123, 0.65)), url(img/breadcrumb-bg.jpg) center center / cover no-repeat;">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="text-white display-5 mb-2">Forgot Password</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
                <li class="breadcrumb-item"><a href="login" class="text-white-50">Login</a></li>
                <li class="breadcrumb-item active text-white">Forgot Password</li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="bg-white rounded-4 p-4 p-md-5 shadow-lg">
                    <h2 class="mb-3 text-center">Reset Your Password</h2>
                    <p class="text-muted text-center mb-4">Enter your account email and we'll send you a link to
                        set a new password.</p>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>
                    <?php if ($notice): ?>
                        <div class="alert alert-success"><?php echo htmlspecialchars($notice, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>

                    <form action="forgot-password" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" name="email"
                                        placeholder="Email Address" required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="send_reset">Send Reset
                                    Link</button>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <p><a href="login">Back to login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Auth Hero + Forgot Password End -->

<?php include 'includes/footer.php'; ?>
