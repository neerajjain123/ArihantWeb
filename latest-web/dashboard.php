<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

// Page SEO Variables
$pageTitle = "Dashboard | Arihant Travel";
$pageDescription = "Welcome to your Arihant Travel dashboard.";
$pageKeywords = "dashboard, user account";
$pageCanonical = "https://arihantlink.com/dashboard";
$currentPage = "dashboard";

include 'includes/db-config.php';
include 'includes/header.php';
?>

<!-- Breadcrumb Start -->
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(img/breadcrumb-bg.jpg);">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">My Dashboard</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active text-white">Dashboard</li>
            </ol>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Dashboard Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="bg-light rounded p-4 shadow-sm mb-4">
                    <div class="text-center mb-4">
                        <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                            style="width: 80px; height: 80px;">
                            <i class="fa fa-user fa-3x text-white"></i>
                        </div>
                        <h4><?php echo htmlspecialchars($user_name); ?></h4>
                        <p class="text-muted">Member Since: <?php echo date('M Y'); ?></p>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="dashboard" class="list-group-item list-group-item-action active"><i
                                class="fa fa-tachometer-alt me-2"></i> Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="fa fa-shopping-bag me-2"></i> My Bookings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-heart me-2"></i>
                            Wishlist</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user-edit me-2"></i>
                            Profile Settings</a>
                        <a href="logout" class="list-group-item list-group-item-action text-danger"><i
                                class="fa fa-sign-out-alt me-2"></i> Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="bg-light rounded p-4 shadow-sm h-100">
                    <h3 class="mb-4">Welcome, <?php echo htmlspecialchars($user_name); ?>!</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><i
                                            class="fa fa-calendar-check me-2"></i>Upcoming Trips</h5>
                                    <p class="card-text">You have no upcoming trips booked.</p>
                                    <a href="dubai-holiday-packages" class="btn btn-sm btn-primary">Browse Packages</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary"><i class="fa fa-ticket-alt me-2"></i>Excursion
                                        Tickets</h5>
                                    <p class="card-text">Manage your attraction tickets here.</p>
                                    <a href="dubai-excursions" class="btn btn-sm btn-secondary">Explore Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h4 class="mb-3">Recent Activity</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Date</th>
                                        <th>Activity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo date('d M, Y'); ?></td>
                                        <td>Logged in successfully</td>
                                        <td><span class="badge bg-success">Success</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard End -->

<?php include 'includes/footer.php'; ?>