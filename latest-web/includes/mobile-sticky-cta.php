<?php
$parkName = isset($pageHeading) ? urlencode($pageHeading) : 'this park';
$parkNameDisplay = isset($pageHeading) ? $pageHeading : 'This Park';
// Optional per-page overrides (defaults suit the theme-park/ticket pages).
$stickyTitle = $stickyTitle ?? 'Ready to visit?';
$stickySub   = $stickySub   ?? 'Get best price + hotel transfer';
$stickyLabel = $stickyLabel ?? 'Book Now';
$stickyHref  = $stickyHref  ?? ('https://wa.me/971585945007?text=I want to book tickets for ' . $parkName);
$stickyIsWa  = strpos($stickyHref, 'wa.me') !== false;
?>
<!-- Mobile Sticky CTA -->
<div class="mobile-sticky-cta d-lg-none">
    <div class="d-flex gap-2 align-items-center justify-content-between px-3 py-2">
        <div>
            <p class="mb-0 fw-bold text-dark" style="font-size:0.82rem;line-height:1.2;"><?= htmlspecialchars($stickyTitle) ?></p>
            <p class="mb-0 text-muted" style="font-size:0.75rem;"><?= htmlspecialchars($stickySub) ?></p>
        </div>
        <div class="d-flex gap-2">
            <a href="<?= htmlspecialchars($stickyHref) ?>"<?= $stickyIsWa ? ' target="_blank" rel="noopener"' : '' ?>
               class="btn btn-success btn-sm px-3 fw-semibold">
                <i class="<?= $stickyIsWa ? 'fab fa-whatsapp' : 'fas fa-calculator' ?> me-1"></i><?= htmlspecialchars($stickyLabel) ?>
            </a>
            <a href="tel:+971585945007" class="btn btn-outline-secondary btn-sm px-2">
                <i class="fas fa-phone-alt"></i>
            </a>
        </div>
    </div>
</div>

<style>
.mobile-sticky-cta {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #ffffff;
    border-top: 2px solid #0d6efd;
    box-shadow: 0 -4px 15px rgba(0,0,0,0.12);
    z-index: 1050;
}
body { padding-bottom: 70px; }
@media (min-width: 992px) {
    body { padding-bottom: 0; }
}
</style>
<!-- Mobile Sticky CTA End -->
