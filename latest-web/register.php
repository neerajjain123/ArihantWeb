<?php
require_once __DIR__ . '/includes/csrf.php';
include __DIR__ . '/includes/db-config.php';
csrf_start();

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
                    $success = "Registration successful. You can now <a href='login'>log in</a>.";
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

<!-- Breadcrumb Start -->
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(img/breadcrumb-bg.jpg);">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-3 mb-4">Create Account</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-white">Register</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Register Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="bg-light rounded p-5 shadow-sm">
                    <h2 class="mb-4 text-center">Registration</h2>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                    <?php endif; ?>
                    <?php if ($success): ?>
                        <div class="alert alert-success"><?php echo $success; /* contains anchor; trusted source */ ?></div>
                    <?php endif; ?>

                    <form action="register" method="POST" autocomplete="on">
                        <?php echo csrf_field(); ?>
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
<!-- Register End -->

<?php include 'includes/footer.php'; ?>
