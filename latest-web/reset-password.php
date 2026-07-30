<?php
require_once __DIR__ . '/includes/csrf.php';
include __DIR__ . '/includes/db-config.php';
require_once __DIR__ . '/includes/account-tables.php';
csrf_start();
ensure_account_tables($pdo);

$error = '';
$validToken = false;

$token = trim((string) ($_GET['token'] ?? ($_POST['token'] ?? '')));
$email = filter_var(trim((string) ($_GET['email'] ?? ($_POST['email'] ?? ''))), FILTER_VALIDATE_EMAIL);

/** Same policy as register.php */
function reset_validate_password(string $pw): ?string {
    if (strlen($pw) < 10)              return "Password must be at least 10 characters long.";
    if (!preg_match('/[A-Z]/', $pw))   return "Password must contain at least one uppercase letter.";
    if (!preg_match('/[a-z]/', $pw))   return "Password must contain at least one lowercase letter.";
    if (!preg_match('/\d/', $pw))      return "Password must contain at least one number.";
    return null;
}

$resetRow = null;
if ($token !== '' && $email) {
    $stmt = $pdo->prepare(
        "SELECT * FROM password_resets
         WHERE email = ? AND token_hash = ? AND used = 0 AND expires_at > NOW()
         ORDER BY id DESC LIMIT 1"
    );
    $stmt->execute([$email, hash('sha256', $token)]);
    $resetRow = $stmt->fetch();
    $validToken = (bool) $resetRow;
}

if (!$validToken) {
    $error = 'This reset link is invalid or has expired. Please request a new one.';
}

if ($validToken && ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['do_reset'])) {
    if (!csrf_verify()) {
        $error = 'Security token invalid. Please refresh the page and try again.';
    } else {
        $new     = (string) ($_POST['new_password'] ?? '');
        $confirm = (string) ($_POST['confirm_password'] ?? '');
        if ($new !== $confirm) {
            $error = 'Passwords do not match.';
        } elseif (($pwError = reset_validate_password($new)) !== null) {
            $error = $pwError;
        } else {
            $upd = $pdo->prepare('UPDATE users SET password = ? WHERE email = ?');
            $upd->execute([password_hash($new, PASSWORD_DEFAULT), $email]);
            $mark = $pdo->prepare('UPDATE password_resets SET used = 1 WHERE id = ?');
            $mark->execute([(int) $resetRow['id']]);
            header('Location: login?reset=1');
            exit();
        }
    }
}

// Page SEO Variables
$pageTitle = "Set New Password | Arihant Travel";
$pageDescription = "Choose a new password for your Arihant Travel account.";
$pageKeywords = "reset password";
$pageCanonical = "https://arihantlink.com/reset-password";
$currentPage = "reset-password";

include 'includes/header.php';
?>

<!-- Auth Hero + Reset Password Form -->
<div class="auth-hero d-flex align-items-center"
    style="min-height: 100vh; padding: 130px 0 60px;
           background: linear-gradient(rgba(19, 53, 123, 0.65), rgba(19, 53, 123, 0.65)), url(img/breadcrumb-bg.jpg) center center / cover no-repeat;">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="text-white display-5 mb-2">Set New Password</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
                <li class="breadcrumb-item active text-white">Reset Password</li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="bg-white rounded-4 p-4 p-md-5 shadow-lg">
                    <h2 class="mb-4 text-center">Choose a New Password</h2>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                        <?php if (!$validToken): ?>
                            <div class="text-center">
                                <a href="forgot-password" class="btn btn-primary rounded-pill px-4">Request a new link</a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if ($validToken): ?>
                        <form action="reset-password" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="token" value="<?php echo htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control border-0" id="new_password"
                                            name="new_password" placeholder="New Password" required minlength="10"
                                            autocomplete="new-password">
                                        <label for="new_password">New Password *</label>
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
                                    <p class="text-muted small mb-2">Min 10 characters with uppercase, lowercase and a number.</p>
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="do_reset">Set New
                                        Password</button>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Auth Hero + Reset Password End -->

<?php include 'includes/footer.php'; ?>
