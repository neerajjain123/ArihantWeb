<?php
require_once __DIR__ . '/includes/auth.php';
auth_require_login();

include 'includes/db-config.php';
require_once __DIR__ . '/includes/account-tables.php';
ensure_account_tables($pdo);

$user = auth_user($pdo);
if (!$user) { header('Location: logout'); exit(); }

$user_name = $user['full_name'];
$memberSince = !empty($user['created_at']) ? date('M Y', strtotime($user['created_at'])) : null;

// Counts + recent bookings (linked by account id or matching email).
$bookingCount = 0;
$wishlistCount = 0;
$recentBookings = [];
try {
    $stmt = $pdo->prepare('SELECT COUNT(*) AS c FROM bookings WHERE user_id = ? OR email = ?');
    $stmt->execute([(int) $user['id'], $user['email']]);
    $bookingCount = (int) ($stmt->fetch()['c'] ?? 0);

    $stmt = $pdo->prepare('SELECT COUNT(*) AS c FROM wishlist WHERE user_id = ?');
    $stmt->execute([(int) $user['id']]);
    $wishlistCount = (int) ($stmt->fetch()['c'] ?? 0);

    $stmt = $pdo->prepare(
        'SELECT * FROM bookings WHERE user_id = ? OR email = ? ORDER BY created_at DESC LIMIT 5'
    );
    $stmt->execute([(int) $user['id'], $user['email']]);
    $recentBookings = $stmt->fetchAll();
} catch (Throwable $e) {
    error_log('[dashboard] ' . $e->getMessage());
}

$statusBadges = [
    'pending'   => 'bg-warning text-dark',
    'confirmed' => 'bg-success',
    'completed' => 'bg-primary',
    'cancelled' => 'bg-danger',
];

// Page SEO Variables
$pageTitle = "Dashboard | Arihant Travels";
$pageDescription = "Welcome to your Arihant Travels dashboard.";
$pageKeywords = "dashboard, user account";
$pageCanonical = "https://arihantlink.com/dashboard";
$currentPage = "dashboard";

include 'includes/header.php';
?>

<!-- Dashboard Header (compact band — replaces the full hero banner) -->
<div class="dashboard-header"
    style="background: linear-gradient(135deg, #13357B 0%, #3A7CA4 100%); padding: 130px 0 90px;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle d-inline-flex align-items-center justify-content-center flex-shrink-0"
                    style="width: 64px; height: 64px; background: rgba(255,255,255,0.15); border: 2px solid rgba(255,255,255,0.4);">
                    <span class="text-white fw-bold fs-3"><?php
                        echo htmlspecialchars(strtoupper(mb_substr(trim($user_name), 0, 1)), ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
                <div>
                    <h1 class="text-white h3 mb-1">Welcome back, <?php
                        echo htmlspecialchars(explode(' ', trim($user_name))[0], ENT_QUOTES, 'UTF-8'); ?>!</h1>
                    <p class="mb-0 text-white" style="opacity:0.75;"><?php
                        echo $memberSince ? 'Member since ' . $memberSince : 'Your travel dashboard'; ?></p>
                </div>
            </div>
            <a href="https://wa.me/971585945007?text=Hi, I need help planning a trip" target="_blank" rel="noopener"
               class="btn btn-success rounded-pill px-4 py-2">
                <i class="fab fa-whatsapp me-2"></i>Plan a Trip
            </a>
        </div>
    </div>
</div>

<!-- Dashboard Content (cards overlap the header band) -->
<div class="container" style="margin-top: -55px; margin-bottom: 4rem;">

    <!-- Stat cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <a href="my-bookings" class="text-decoration-none">
                <div class="bg-white rounded-4 shadow-sm p-4 d-flex align-items-center gap-3 h-100">
                    <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 52px; height: 52px; background: rgba(58,124,164,0.12);">
                        <i class="fa fa-shopping-bag fa-lg" style="color:#3A7CA4;"></i>
                    </div>
                    <div>
                        <p class="h4 mb-0 text-dark"><?php echo $bookingCount; ?></p>
                        <p class="mb-0 text-muted small">Booking Request<?php echo $bookingCount === 1 ? '' : 's'; ?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="wishlist" class="text-decoration-none">
                <div class="bg-white rounded-4 shadow-sm p-4 d-flex align-items-center gap-3 h-100">
                    <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 52px; height: 52px; background: rgba(220,53,69,0.10);">
                        <i class="fa fa-heart fa-lg text-danger"></i>
                    </div>
                    <div>
                        <p class="h4 mb-0 text-dark"><?php echo $wishlistCount; ?></p>
                        <p class="mb-0 text-muted small">Saved Tour<?php echo $wishlistCount === 1 ? '' : 's'; ?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="profile" class="text-decoration-none">
                <div class="bg-white rounded-4 shadow-sm p-4 d-flex align-items-center gap-3 h-100">
                    <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 52px; height: 52px; background: rgba(76,175,80,0.12);">
                        <i class="fa fa-user-edit fa-lg" style="color:#4CAF50;"></i>
                    </div>
                    <div>
                        <p class="h6 mb-0 text-dark">Profile Settings</p>
                        <p class="mb-0 text-muted small">Update details &amp; password</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row g-4">
        <!-- Main column -->
        <div class="col-lg-8">
            <div class="bg-white rounded-4 shadow-sm p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0">Recent Booking Requests</h4>
                    <?php if ($bookingCount > 0): ?>
                        <a href="my-bookings" class="btn btn-sm btn-outline-primary rounded-pill px-3">View all</a>
                    <?php endif; ?>
                </div>
                <?php if (count($recentBookings) === 0): ?>
                    <div class="text-center py-4">
                        <i class="fa fa-suitcase-rolling fa-2x text-muted mb-3"></i>
                        <p class="text-muted mb-3">No booking requests yet. Send an enquiry on any tour page and
                            it will appear here automatically.</p>
                        <a href="desert-safari" class="btn btn-primary rounded-pill px-4 me-2 mb-2">Desert Safaris</a>
                        <a href="dubai-holiday-packages" class="btn btn-outline-primary rounded-pill px-4 mb-2">Dubai Packages</a>
                    </div>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr class="text-muted small text-uppercase">
                                    <th>Package</th>
                                    <th>Travel Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($recentBookings as $b):
                                    $badge = $statusBadges[$b['status']] ?? 'bg-secondary'; ?>
                                    <tr>
                                        <td class="fw-semibold"><?php echo htmlspecialchars($b['package'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo $b['travel_date'] ? date('d M Y', strtotime($b['travel_date'])) : '—'; ?></td>
                                        <td><span class="badge <?php echo $badge; ?>"><?php
                                            echo htmlspecialchars(ucfirst($b['status']), ENT_QUOTES, 'UTF-8'); ?></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Explore suggestions -->
            <div class="bg-white rounded-4 shadow-sm p-4">
                <h4 class="mb-3">Popular Right Now</h4>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <a href="desert-safari" class="btn btn-outline-primary w-100 rounded-pill py-2">
                            <i class="fa fa-sun me-2"></i>Desert Safari</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="dhow-cruise" class="btn btn-outline-primary w-100 rounded-pill py-2">
                            <i class="fa fa-ship me-2"></i>Dhow Cruise</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="theme-parks" class="btn btn-outline-primary w-100 rounded-pill py-2">
                            <i class="fa fa-ticket-alt me-2"></i>Theme Parks</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="bg-white rounded-4 shadow-sm p-4 mb-4">
                <h5 class="mb-3">Account</h5>
                <div class="list-group list-group-flush">
                    <a href="my-bookings" class="list-group-item list-group-item-action border-0 px-0 d-flex justify-content-between align-items-center">
                        <span><i class="fa fa-shopping-bag me-2 text-primary"></i> My Bookings</span>
                        <i class="fa fa-chevron-right text-muted small"></i></a>
                    <a href="wishlist" class="list-group-item list-group-item-action border-0 px-0 d-flex justify-content-between align-items-center">
                        <span><i class="fa fa-heart me-2 text-danger"></i> Wishlist</span>
                        <i class="fa fa-chevron-right text-muted small"></i></a>
                    <a href="profile" class="list-group-item list-group-item-action border-0 px-0 d-flex justify-content-between align-items-center">
                        <span><i class="fa fa-user-edit me-2 text-success"></i> Profile Settings</span>
                        <i class="fa fa-chevron-right text-muted small"></i></a>
                    <a href="logout" class="list-group-item list-group-item-action border-0 px-0 text-danger">
                        <i class="fa fa-sign-out-alt me-2"></i> Logout</a>
                </div>
            </div>

            <div class="rounded-4 shadow-sm p-4 text-center text-white"
                style="background: linear-gradient(135deg, #128C7E 0%, #25D366 100%);">
                <i class="fab fa-whatsapp fa-2x mb-2"></i>
                <p class="fw-semibold mb-1">Need help with a trip?</p>
                <p class="small mb-3" style="opacity:0.85;">Talk to a travel expert — we reply in minutes.</p>
                <a href="https://wa.me/971585945007" target="_blank" rel="noopener"
                   class="btn btn-light btn-sm rounded-pill px-4 fw-semibold" style="color:#128C7E;">WhatsApp Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard End -->

<?php include 'includes/footer.php'; ?>
