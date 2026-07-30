<?php
require_once __DIR__ . '/includes/csrf.php';
require_once __DIR__ . '/includes/auth.php';
auth_require_login();

include 'includes/db-config.php';
csrf_start();

$user = auth_user($pdo);
if (!$user) { header('Location: logout'); exit(); }

$error = '';
$success = '';

/** Same policy as register.php */
function profile_validate_password(string $pw): ?string {
    if (strlen($pw) < 10)              return "Password must be at least 10 characters long.";
    if (!preg_match('/[A-Z]/', $pw))   return "Password must contain at least one uppercase letter.";
    if (!preg_match('/[a-z]/', $pw))   return "Password must contain at least one lowercase letter.";
    if (!preg_match('/\d/', $pw))      return "Password must contain at least one number.";
    return null;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    if (!csrf_verify()) {
        $error = "Security token invalid. Please refresh the page and try again.";
    } elseif (isset($_POST['update_details'])) {
        $full_name = trim((string) ($_POST['full_name'] ?? ''));
        $phone     = trim((string) ($_POST['phone'] ?? ''));
        if ($full_name === '') {
            $error = "Name cannot be empty.";
        } elseif (mb_strlen($full_name) > 120 || mb_strlen($phone) > 30) {
            $error = "Input too long.";
        } else {
            $stmt = $pdo->prepare("UPDATE users SET full_name = ?, phone = ? WHERE id = ?");
            $stmt->execute([$full_name, $phone, (int) $user['id']]);
            $_SESSION['user_name'] = $full_name;
            $user['full_name'] = $full_name;
            $user['phone'] = $phone;
            $success = "Your details have been updated.";
        }
    } elseif (isset($_POST['change_password'])) {
        $current = (string) ($_POST['current_password'] ?? '');
        $new     = (string) ($_POST['new_password'] ?? '');
        $confirm = (string) ($_POST['confirm_password'] ?? '');
        if (!password_verify($current, $user['password'])) {
            $error = "Your current password is incorrect.";
        } elseif ($new !== $confirm) {
            $error = "New passwords do not match.";
        } elseif (($pwError = profile_validate_password($new)) !== null) {
            $error = $pwError;
        } else {
            $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmt->execute([password_hash($new, PASSWORD_DEFAULT), (int) $user['id']]);
            session_regenerate_id(true);
            $success = "Password changed successfully.";
        }
    }
}

// Page SEO Variables
$pageTitle = "Profile Settings | Arihant Travel";
$pageDescription = "Manage your Arihant Travel account details.";
$pageKeywords = "profile, account settings";
$pageCanonical = "https://arihantlink.com/profile";
$currentPage = "profile";

include 'includes/header.php';
?>

<!-- Breadcrumb Start -->
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(img/breadcrumb-bg.jpg);">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-3 mb-4">Profile Settings</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active text-white">Profile Settings</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Profile Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center g-4">
            <div class="col-lg-8">
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>
                <?php if ($success): ?>
                    <div class="alert alert-success"><?php echo htmlspecialchars($success, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>

                <div class="bg-light rounded p-4 p-md-5 shadow-sm mb-4">
                    <h4 class="mb-4"><i class="fa fa-user-edit me-2 text-primary"></i>Your Details</h4>
                    <form method="POST" action="profile">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        value="<?php echo htmlspecialchars($user['full_name'], ENT_QUOTES, 'UTF-8'); ?>"
                                        required maxlength="120" placeholder="Full Name">
                                    <label for="full_name">Full Name *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                        value="<?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?>"
                                        disabled placeholder="Email">
                                    <label for="email">Email (cannot be changed)</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        value="<?php echo htmlspecialchars((string) ($user['phone'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>"
                                        maxlength="30" placeholder="Phone">
                                    <label for="phone">Phone / WhatsApp</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill px-4 py-2" type="submit"
                                    name="update_details">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-light rounded p-4 p-md-5 shadow-sm">
                    <h4 class="mb-4"><i class="fa fa-lock me-2 text-primary"></i>Change Password</h4>
                    <form method="POST" action="profile">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="current_password"
                                        name="current_password" required autocomplete="current-password"
                                        placeholder="Current Password">
                                    <label for="current_password">Current Password *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="new_password" name="new_password"
                                        required minlength="10" autocomplete="new-password" placeholder="New Password">
                                    <label for="new_password">New Password *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" required minlength="10" autocomplete="new-password"
                                        placeholder="Confirm New Password">
                                    <label for="confirm_password">Confirm New Password *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-muted small mb-2">Min 10 characters with uppercase, lowercase and a number.</p>
                                <button class="btn btn-outline-primary rounded-pill px-4 py-2" type="submit"
                                    name="change_password">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile End -->

<?php include 'includes/footer.php'; ?>
