<!-- Breadcrumb Start -->
<?php
// Set default background if not specified
if (!isset($breadcrumbBg)) {
    $breadcrumbBg = 'img/breadcrumb-bg.jpg';
}
$overlayStyle = 'background: url(' . $breadcrumbBg . ');';
// BreadcrumbList schema is emitted once in includes/header.php — do not duplicate it here.
?>
<!-- Hero Banner -->
<div class="container-fluid bg-breadcrumb"
    style="<?php echo $overlayStyle; ?> background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container text-center" style="max-width: 900px;">
        <h1 class="text-white display-3 mb-0"><?php echo $pageHeading; ?></h1>
    </div>
</div>

<!-- Breadcrumb Navigation -->
<div class="container-fluid bg-light py-3">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <?php if (isset($breadcrumbCategory)): ?>
                <li class="breadcrumb-item"><a
                        href="<?php echo $breadcrumbCategoryLink; ?>"><?php echo $breadcrumbCategory; ?></a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active"><?php echo $pageHeading; ?></li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End -->