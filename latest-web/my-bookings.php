<?php
require_once __DIR__ . '/includes/auth.php';
auth_require_login();

include 'includes/db-config.php';
require_once __DIR__ . '/includes/account-tables.php';
ensure_account_tables($pdo);

$user = auth_user($pdo);
if (!$user) { header('Location: logout'); exit(); }

// Bookings linked by account id OR made with the same email before registering.
$stmt = $pdo->prepare(
    "SELECT * FROM bookings WHERE user_id = ? OR email = ? ORDER BY created_at DESC LIMIT 50"
);
$stmt->execute([(int) $user['id'], $user['email']]);
$bookings = $stmt->fetchAll();

$statusBadges = [
    'pending'   => 'bg-warning text-dark',
    'confirmed' => 'bg-success',
    'completed' => 'bg-primary',
    'cancelled' => 'bg-danger',
];

// Page SEO Variables
$pageTitle = "My Bookings | Arihant Travel";
$pageDescription = "View and track your Arihant Travel booking requests.";
$pageKeywords = "my bookings, arihant travel account";
$pageCanonical = "https://arihantlink.com/my-bookings";
$currentPage = "my-bookings";

include 'includes/header.php';
?>

<!-- Bookings Header (compact band) -->
<div style="background: linear-gradient(135deg, #13357B 0%, #3A7CA4 100%); padding: 130px 0 90px;">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div>
                <h1 class="text-white h3 mb-1">My Bookings</h1>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/" class="text-white-50">Home</a></li>
                    <li class="breadcrumb-item"><a href="dashboard" class="text-white-50">Dashboard</a></li>
                    <li class="breadcrumb-item active text-white">My Bookings</li>
                </ol>
            </div>
            <a href="dashboard" class="btn btn-outline-light rounded-pill px-4 py-2">
                <i class="fa fa-arrow-left me-2"></i>Dashboard
            </a>
        </div>
    </div>
</div>

<!-- Bookings Content (overlaps the header band) -->
<div class="container" style="margin-top: -55px; margin-bottom: 4rem;">
    <div class="row justify-content-center">
        <div class="col-12">

                <?php if (count($bookings) === 0): ?>
                    <div class="bg-white rounded-4 p-5 shadow-sm text-center">
                        <i class="fa fa-suitcase-rolling fa-3x text-primary mb-3"></i>
                        <h4>No bookings yet</h4>
                        <p class="text-muted mb-4">When you send a booking request on any tour page, it will show up
                            here so you can track its status.</p>
                        <a href="desert-safari" class="btn btn-primary rounded-pill px-4 me-2 mb-2">Desert Safaris</a>
                        <a href="dubai-holiday-packages" class="btn btn-outline-primary rounded-pill px-4 mb-2">Dubai Packages</a>
                    </div>
                <?php else: ?>
                    <div class="bg-white rounded-4 shadow-sm p-4">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Package</th>
                                        <th>Travel Date</th>
                                        <th>Guests</th>
                                        <th>Est. Total</th>
                                        <th>Status</th>
                                        <th>Requested</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bookings as $b):
                                        $badge = $statusBadges[$b['status']] ?? 'bg-secondary'; ?>
                                        <tr>
                                            <td class="fw-semibold"><?php echo htmlspecialchars($b['package'], ENT_QUOTES, 'UTF-8'); ?></td>
                                            <td><?php echo $b['travel_date'] ? date('d M Y', strtotime($b['travel_date'])) : '—'; ?></td>
                                            <td><?php echo (int) $b['guests']; ?></td>
                                            <td><?php echo $b['total_aed'] !== null ? 'AED ' . (int) $b['total_aed'] : '—'; ?></td>
                                            <td><span class="badge <?php echo $badge; ?>"><?php
                                                echo htmlspecialchars(ucfirst($b['status']), ENT_QUOTES, 'UTF-8'); ?></span></td>
                                            <td class="text-muted small"><?php echo date('d M Y', strtotime($b['created_at'])); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted small mt-3 mb-0"><i class="fa fa-info-circle me-1"></i>
                            "Pending" means our team is preparing your quote — we reply within 2 hours. Questions?
                            <a href="https://wa.me/971585945007" target="_blank" rel="noopener">WhatsApp us</a>.</p>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</div>
<!-- Bookings End -->

<?php include 'includes/footer.php'; ?>
