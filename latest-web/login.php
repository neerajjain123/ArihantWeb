<?php
require_once __DIR__ . '/includes/csrf.php';
include __DIR__ . '/includes/db-config.php';
csrf_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard");
    exit();
}

$error = '';

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
                header("Location: dashboard");
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
$pageTitle = "Login | Arihant Travel";
$pageDescription = "Login to your Arihant Travel account to manage your bookings.";
$pageKeywords = "login, arihant travel account";
$pageCanonical = "https://arihantlink.com/login";
$currentPage = "login";

include 'includes/header.php';
?>

<!-- Breadcrumb Start -->
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(img/breadcrumb-bg.jpg);">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-3 mb-4">Login</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-white">Login</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Login Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="bg-light rounded p-5 shadow-sm">
                    <h2 class="mb-4 text-center">Welcome Back</h2>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>

                    <form action="login" method="POST" autocomplete="on">
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
                                <p>Don't have an account? <a href="register">Register here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login End -->

<?php include 'includes/footer.php'; ?>
