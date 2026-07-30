<?php
require_once __DIR__ . '/includes/auth.php';
auth_require_login();

include 'includes/db-config.php';
require_once __DIR__ . '/includes/account-tables.php';
ensure_account_tables($pdo);

$uid = (int) $_SESSION['user_id'];

// Handle remove (simple GET with CSRF-free id scoped to this user is safe enough,
// but use POST + CSRF for correctness).
require_once __DIR__ . '/includes/csrf.php';
csrf_start();
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['remove_id'])) {
    if (csrf_verify()) {
        $del = $pdo->prepare('DELETE FROM wishlist WHERE id = ? AND user_id = ?');
        $del->execute([(int) $_POST['remove_id'], $uid]);
    }
    header('Location: wishlist');
    exit();
}

$stmt = $pdo->prepare('SELECT * FROM wishlist WHERE user_id = ? ORDER BY created_at DESC');
$stmt->execute([$uid]);
$items = $stmt->fetchAll();

// Page SEO Variables
$pageTitle = "My Wishlist | Arihant Travel";
$pageDescription = "Tours and packages you have saved for later.";
$pageKeywords = "wishlist, saved tours, arihant travel";
$pageCanonical = "https://arihantlink.com/wishlist";
$currentPage = "wishlist";

include 'includes/header.php';
?>

<!-- Breadcrumb Start -->
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(img/breadcrumb-bg.jpg);">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-3 mb-4">My Wishlist</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active text-white">Wishlist</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Wishlist Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                    <h3 class="mb-0">Saved Tours &amp; Packages</h3>
                    <a href="dashboard" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                        <i class="fa fa-arrow-left me-2"></i>Back to Dashboard</a>
                </div>

                <?php if (count($items) === 0): ?>
                    <div class="bg-light rounded p-5 shadow-sm text-center">
                        <i class="fa fa-heart fa-3x text-danger mb-3"></i>
                        <h4>Your wishlist is empty</h4>
                        <p class="text-muted mb-4">Tap <span class="text-danger"><i class="far fa-heart"></i>
                            Save to Wishlist</span> on any tour page and it will be waiting for you here.</p>
                        <a href="desert-safari" class="btn btn-primary rounded-pill px-4 me-2 mb-2">Desert Safaris</a>
                        <a href="theme-parks" class="btn btn-outline-primary rounded-pill px-4 me-2 mb-2">Theme Parks</a>
                        <a href="dubai-holiday-packages" class="btn btn-outline-primary rounded-pill px-4 mb-2">Dubai Packages</a>
                    </div>
                <?php else: ?>
                    <div class="row g-4">
                        <?php foreach ($items as $item): ?>
                            <div class="col-md-6 col-lg-4 d-flex">
                                <div class="bg-light rounded-4 shadow-sm p-4 d-flex flex-column w-100">
                                    <div class="d-flex align-items-start justify-content-between mb-2">
                                        <i class="fas fa-heart text-danger fa-lg mt-1"></i>
                                        <form method="POST" action="wishlist" class="mb-0"
                                              onsubmit="return confirm('Remove from wishlist?');">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="remove_id" value="<?php echo (int) $item['id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-outline-secondary rounded-circle"
                                                    title="Remove" aria-label="Remove from wishlist">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <h5 class="mb-2"><?php echo htmlspecialchars($item['item_title'], ENT_QUOTES, 'UTF-8'); ?></h5>
                                    <p class="text-muted small mb-3">Saved <?php echo date('d M Y', strtotime($item['created_at'])); ?></p>
                                    <a href="<?php echo htmlspecialchars('/' . ltrim($item['item_url'], '/'), ENT_QUOTES, 'UTF-8'); ?>"
                                       class="btn btn-primary rounded-pill mt-auto">View &amp; Book
                                        <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Wishlist End -->

<?php include 'includes/footer.php'; ?>
