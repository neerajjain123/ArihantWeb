<?php
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/auth.php';
include __DIR__ . '/includes/db-config.php';
csrf_start();

// Where to send the user after successful registration (internal paths only).
$redirectTo = auth_safe_redirect_path($_GET['redirect'] ?? ($_POST['redirect'] ?? ''));
if ($redirectTo === '') { $redirectTo = 'dashboard'; }

if (isset($_SESSION['user_id'])) {
    header("Location: " . $redirectTo);
    exit();
}

// Page SEO Variables
$pageTitle = "Register | Arihant Travel";
$pageDescription = "Create an account with Arihant Travel to manage your Jain-friendly Dubai tour bookings.";
$pageKeywords = "register, arihant travel account, dubai tour account";
$pageCanonical = "https://arihantlink.com/register";
$currentPage = "register";

$error = '';
$success = '';

/**
 * Stronger password policy: min 10 chars, must contain at least one
 * uppercase letter, one lowercase letter and one digit.
 */
function validate_password(string $pw): ?string {
    if (strlen($pw) < 10)              return "Password must be at least 10 characters long.";
    if (!preg_match('/[A-Z]/', $pw))   return "Password must contain at least one uppercase letter.";
    if (!preg_match('/[a-z]/', $pw))   return "Password must contain at least one lowercase letter.";
    if (!preg_match('/\d/', $pw))      return "Password must contain at least one number.";
    return null;
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    if (!csrf_verify()) {
        $error = "Security token invalid. Please refresh the page and try again.";
    } else {
        $full_name        = trim((string) ($_POST['full_name'] ?? ''));
        $email            = trim((string) ($_POST['email'] ?? ''));
        $phone            = trim((string) ($_POST['phone'] ?? ''));
        $password         = (string) ($_POST['password'] ?? '');
        $confirm_password = (string) ($_POST['confirm_password'] ?? '');

        if ($full_name === '' || $email === '' || $password === '') {
            $error = "Please fill in all required fields.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
        } elseif ($password !== $confirm_password) {
            $error = "Passwords do not match.";
        } elseif (($pwError = validate_password($password)) !== null) {
            $error = $pwError;
        } else {
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                $error = "Email already registered.";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                try {
                    $stmt = $pdo->prepare("INSERT INTO users (full_name, email, phone, password) VALUES (?, ?, ?, ?)");
                    $stmt->execute([$full_name, $email, $phone, $hashed_password]);
                    $newUserId = (int) $pdo->lastInsertId();

                    // Welcome email (best effort — never block registration on mail).
                    try {
                        require_once __DIR__ . '/includes/env.php';
                        env_load();
                        $smtpUser = env('SMTP_USER');
                        $smtpPass = env('SMTP_PASS');
                        if ($smtpUser && $smtpPass) {
                            require __DIR__ . '/includes/vendor/autoload.php';
                            $wmail = new PHPMailer\PHPMailer\PHPMailer(true);
                            $wmail->isSMTP();
                            $wmail->Host       = env('SMTP_HOST', 'smtp.hostinger.com');
                            $wmail->SMTPAuth   = true;
                            $wmail->Username   = $smtpUser;
                            $wmail->Password   = $smtpPass;
                            $wmail->SMTPSecure = env('SMTP_SECURE', 'ssl');
                            $wmail->Port       = (int) env('SMTP_PORT', '465');
                            $wmail->setFrom(env('SMTP_FROM', 'contact@arihantlink.com'), env('SMTP_FROM_NAME', 'Arihant Travel'));
                            $wmail->addAddress($email, $full_name);
                            $wmail->Subject = 'Welcome to Arihant Travel!';
                            $wmail->Body    = "Dear $full_name,\n\n"
                                . "Welcome to Arihant Travel! Your account is ready.\n\n"
                                . "From your dashboard you can track booking requests, save tours to your "
                                . "wishlist and manage your details: https://arihantlink.com/dashboard\n\n"
                                . "Planning a trip? WhatsApp us anytime on +971 58 594 5007 — we specialise in "
                                . "Jain-friendly and family-comfortable tours across the UAE and beyond.\n\n"
                                . "Best regards,\nArihant Travel Team\nhttps://arihantlink.com";
                            $wmail->send();
                        }
                    } catch (Throwable $mailErr) {
                        error_log('[register] welcome mail failed: ' . $mailErr->getMessage());
                    }

                    // Auto-login: no reason to make a brand-new user type it all again.
                    session_regenerate_id(true);
                    $_SESSION['user_id']   = $newUserId;
                    $_SESSION['user_name'] = $full_name;
                    header("Location: " . $redirectTo);
                    exit();
                } catch (PDOException $e) {
                    error_log('[register] insert failed: ' . $e->getMessage());
                    $error = "Registration failed. Please try again later.";
                }
            }
        }
    }
}

include 'includes/header.php';
?>

<!-- Auth Hero + Register Form (form overlaps the banner — no scrolling needed) -->
<div class="auth-hero d-flex align-items-center"
    style="min-height: 100vh; padding: 130px 0 60px;
           background: linear-gradient(rgba(19, 53, 123, 0.65), rgba(19, 53, 123, 0.65)), url(img/breadcrumb-bg.jpg) center center / cover no-repeat;">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="text-white display-5 mb-2">Create Account</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
                <li class="breadcrumb-item active text-white">Register</li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
                <div class="bg-white rounded-4 p-4 p-md-5 shadow-lg">
                    <h2 class="mb-4 text-center">Registration</h2>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>
                    <?php if ($success): ?>
                        <div class="alert alert-success"><?php echo $success; /* contains anchor; trusted source */ ?></div>
                    <?php endif; ?>

                    <form action="register" method="POST" autocomplete="on">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($redirectTo, ENT_QUOTES, 'UTF-8'); ?>">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="full_name" name="full_name"
                                        placeholder="Full Name" required maxlength="120">
                                    <label for="full_name">Full Name *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" name="email"
                                        placeholder="Email Address" required maxlength="160">
                                    <label for="email">Email Address *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="tel" class="form-control border-0" id="phone" name="phone"
                                        placeholder="Phone Number" maxlength="30">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0" id="password" name="password"
                                        placeholder="Password" required minlength="10" autocomplete="new-password">
                                    <label for="password">Password (min 10, mixed case + digit) *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0" id="confirm_password"
                                        name="confirm_password" placeholder="Confirm Password" required
                                        minlength="10" autocomplete="new-password">
                                    <label for="confirm_password">Confirm Password *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="register">Sign Up</button>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <p>Already have an account? <a href="login">Log in here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Auth Hero + Register End -->

<?php include 'includes/footer.php'; ?>
