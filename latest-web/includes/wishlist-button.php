<?php
/**
 * "Save to Wishlist" button (reusable on tour/package pages).
 * Usage: include 'includes/wishlist-button.php';
 * Uses $pageHeading for the title and the current path for slug/url.
 * Guests are sent to login and returned to this page afterwards.
 */
$wlPath  = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$wlSlug  = trim($wlPath, '/');
if ($wlSlug === '') { $wlSlug = 'index'; }
$wlTitle = isset($pageHeading) ? $pageHeading : (isset($pageTitle) ? $pageTitle : $wlSlug);
$wlLoggedIn = isset($_SESSION['user_id']) ? '1' : '0';

// Pre-check saved state for logged-in users (best effort).
$wlSaved = false;
if ($wlLoggedIn === '1' && isset($pdo)) {
    try {
        require_once __DIR__ . '/account-tables.php';
        ensure_account_tables($pdo);
        $wlStmt = $pdo->prepare('SELECT id FROM wishlist WHERE user_id = ? AND item_slug = ?');
        $wlStmt->execute([(int) $_SESSION['user_id'], $wlSlug]);
        $wlSaved = (bool) $wlStmt->fetch();
    } catch (Throwable $e) { /* non-fatal */ }
}
?>
<div class="container text-center my-3">
    <button type="button" id="wishlist-toggle-btn"
            class="btn <?php echo $wlSaved ? 'btn-danger' : 'btn-outline-danger'; ?> rounded-pill px-4 py-2"
            data-slug="<?php echo htmlspecialchars($wlSlug, ENT_QUOTES, 'UTF-8'); ?>"
            data-title="<?php echo htmlspecialchars($wlTitle, ENT_QUOTES, 'UTF-8'); ?>"
            data-url="<?php echo htmlspecialchars($wlPath, ENT_QUOTES, 'UTF-8'); ?>"
            data-logged-in="<?php echo $wlLoggedIn; ?>"
            data-saved="<?php echo $wlSaved ? '1' : '0'; ?>">
        <i class="fa<?php echo $wlSaved ? 's' : 'r'; ?> fa-heart me-2"></i><span><?php
            echo $wlSaved ? 'Saved to Wishlist' : 'Save to Wishlist'; ?></span>
    </button>
</div>
<script>
(function () {
    var btn = document.getElementById('wishlist-toggle-btn');
    if (!btn) return;
    btn.addEventListener('click', function () {
        if (btn.dataset.loggedIn !== '1') {
            window.location.href = 'login?redirect=' + encodeURIComponent(btn.dataset.slug);
            return;
        }
        btn.disabled = true;
        fetch('includes/wishlist-api.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                action: 'toggle',
                slug: btn.dataset.slug,
                title: btn.dataset.title,
                url: btn.dataset.url
            })
        })
        .then(function (r) { return r.json(); })
        .then(function (data) {
            btn.disabled = false;
            if (data.login) {
                window.location.href = 'login?redirect=' + encodeURIComponent(btn.dataset.slug);
                return;
            }
            if (!data.success) return;
            var icon = btn.querySelector('i'), label = btn.querySelector('span');
            if (data.saved) {
                btn.classList.remove('btn-outline-danger'); btn.classList.add('btn-danger');
                icon.classList.remove('far'); icon.classList.add('fas');
                label.textContent = 'Saved to Wishlist';
                if (window.gtag) { gtag('event', 'add_to_wishlist', { item_name: btn.dataset.title }); }
            } else {
                btn.classList.remove('btn-danger'); btn.classList.add('btn-outline-danger');
                icon.classList.remove('fas'); icon.classList.add('far');
                label.textContent = 'Save to Wishlist';
            }
        })
        .catch(function () { btn.disabled = false; });
    });
})();
</script>
