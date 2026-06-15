<!-- Breadcrumb Start -->
<?php
// Set default background if not specified
if (!isset($breadcrumbBg)) {
    $breadcrumbBg = 'img/breadcrumb-bg.jpg';
}
$overlayStyle = 'background: url(' . $breadcrumbBg . ');';

// Build BreadcrumbList schema
$breadcrumbItems = [];
$breadcrumbItems[] = '{"@type":"ListItem","position":1,"name":"Home","item":"https://arihantlink.com/"}';
$position = 2;
if (isset($breadcrumbCategory) && isset($breadcrumbCategoryLink)) {
    $breadcrumbItems[] = '{"@type":"ListItem","position":' . $position . ',"name":"' . htmlspecialchars($breadcrumbCategory, ENT_QUOTES) . '","item":"https://arihantlink.com/' . ltrim($breadcrumbCategoryLink, '/') . '"}';
    $position++;
}
$breadcrumbItems[] = '{"@type":"ListItem","position":' . $position . ',"name":"' . htmlspecialchars($pageHeading, ENT_QUOTES) . '","item":"' . $pageCanonical . '"}';
?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [<?php echo implode(',', $breadcrumbItems); ?>]
}
</script>
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