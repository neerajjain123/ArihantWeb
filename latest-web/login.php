<?php
require_once __DIR__ . '/includes/csrf.php';
include __DIR__ . '/includes/db-config.php';
csrf_start();

require_once __DIR__ . '/includes/auth.php';

// Where to send the user after login (internal paths only).
$redirectTo = auth_safe_redirect_path($_GET['redirect'] ?? ($_POST['redirect'] ?? ''));
if ($redirectTo === '' ) { $redirectTo = 'dashboard'; }

if (isset($_SESSION['user_id'])) {
    header("Location: " . $redirectTo);
    exit();
}

$error = '';
$notice = '';
if (isset($_GET['registered'])) { $notice = 'Account created! Please log in.'; }
if (isset($_GET['reset'])) { $notice = 'Password updated. Please log in with your new password.'; }

// --- Per-IP login throttle: 5 failed attempts / 15 min lock-out ---
$throttleDir = sys_get_temp_dir() . '/arihant_login';
if (!is_dir($throttleDir)) { @mkdir($throttleDir, 0700, true); }
$throttleFile = $throttleDir . '/' . md5($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');
$throttleMax = 5;
$throttleWindow = 900; // 15 min
$now = time();
$attempts = [];
if (is_file($throttleFile)) {
    $attempts = array_filter(
        array_map('intval', explode(',', (string) @file_get_contents($throttleFile))),
        fn($t) => $t > ($now - $throttleWindow)
    );
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    if (!csrf_verify()) {
        $error = "Security token invalid. Please refresh the page and try again.";
    } elseif (count($attempts) >= $throttleMax) {
        $error = "Too many failed attempts. Please try again in 15 minutes.";
    } else {
        $email = trim((string) ($_POST['email'] ?? ''));
        $password = (string) ($_POST['password'] ?? '');

        if ($email === '' || $password === '') {
            $error = "Please fill in all fields.";
        } else {
            $stmt = $pdo->prepare("SELECT id, full_name, password FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                // Login success — regenerate session id.
                session_regenerate_id(true);
                $_SESSION['user_id']   = $user['id'];
                $_SESSION['user_name'] = $user['full_name'];
                @unlink($throttleFile); // clear throttle on success
                header("Location: " . $redirectTo);
                exit();
            } else {
                $attempts[] = $now;
                @file_put_contents($throttleFile, implode(',', $attempts), LOCK_EX);
                $remaining = max(0, $throttleMax - count($attempts));
                $error = "Invalid email or password." . ($remaining > 0 ? " ($remaining attempts remaining)" : "");
            }
        }
    }
}

// Page SEO Variables
$pageTitle = "Login | Arihant Travels";
$pageDescription = "Login to your Arihant Travels account to manage your bookings.";
$pageKeywords = "login, arihant travel account";
$pageCanonical = "https://arihantlink.com/login";
$currentPage = "login";

include 'includes/header.php';
?>

<!-- Auth Hero + Login Form (form overlaps the banner — no scrolling needed) -->
<div class="auth-hero d-flex align-items-center"
    style="min-height: 100vh; padding: 130px 0 60px;
           background: linear-gradient(rgba(19, 53, 123, 0.65), rgba(19, 53, 123, 0.65)), url(img/breadcrumb-bg.jpg) center center / cover no-repeat;">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="text-white display-5 mb-2">Login</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
                <li class="breadcrumb-item active text-white">Login</li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="bg-white rounded-4 p-4 p-md-5 shadow-lg">
                    <h2 class="mb-4 text-center">Welcome Back</h2>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>
                    <?php if ($notice): ?>
                        <div class="alert alert-success"><?php echo htmlspecialchars($notice, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>

                    <form action="login" method="POST" autocomplete="on">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($redirectTo, ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" name="email"
                                        placeholder="Email Address" required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0" id="password" name="password"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="login">Login</button>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <p class="mb-1"><a href="forgot-password">Forgot your password?</a></p>
                                <p>Don't have an account? <a href="register<?php
                                    echo $redirectTo !== 'dashboard' ? '?redirect=' . urlencode($redirectTo) : '';
                                ?>">Register here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Auth Hero + Login End -->

<?php include 'includes/footer.php'; ?>
