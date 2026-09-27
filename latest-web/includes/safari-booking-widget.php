<?php
/**
 * Add-to-cart booking widget for the Desert Safari pilot.
 * Usage: include 'includes/safari-booking-widget.php';
 */
require_once __DIR__ . '/catalog.php';
$bwProduct = catalog_get('desert-safari');
if (!$bwProduct) return;
$bwMinDate = date('Y-m-d', strtotime('+1 day'));
?>
<!-- Booking Widget Start -->
<div class="container my-4" id="book-online">
    <div class="bg-white rounded-4 shadow p-4 p-md-5" style="border-top: 4px solid var(--primary);">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
            <h3 class="mb-0"><i class="fa fa-bolt text-warning me-2"></i>Book Online — Instant Confirmation</h3>
            <span class="badge bg-success px-3 py-2">Secure card payment</span>
        </div>
        <form id="safari-cart-form" class="row g-3">
            <div class="col-md-6 col-lg-4">
                <label class="form-label fw-semibold" for="bw-variant">Safari Package *</label>
                <select class="form-select" id="bw-variant" required>
                    <?php foreach ($bwProduct['variants'] as $vid => $v): ?>
                        <option value="<?php echo $vid; ?>">
                            <?php echo htmlspecialchars($v['title']); ?> — AED <?php echo $v['adult']; ?>/adult
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 col-lg-3">
                <label class="form-label fw-semibold" for="bw-date">Safari Date *</label>
                <input type="date" class="form-control" id="bw-date" min="<?php echo $bwMinDate; ?>" required>
            </div>
            <div class="col-6 col-lg-2">
                <label class="form-label fw-semibold" for="bw-adults">Adults *</label>
                <select class="form-select" id="bw-adults">
                    <?php for ($i = 1; $i <= 15; $i++): ?><option><?php echo $i; ?></option><?php endfor; ?>
                </select>
            </div>
            <div class="col-6 col-lg-2">
                <label class="form-label fw-semibold" for="bw-children">Children (3–11)</label>
                <select class="form-select" id="bw-children">
                    <?php for ($i = 0; $i <= 10; $i++): ?><option><?php echo $i; ?></option><?php endfor; ?>
                </select>
            </div>
            <div class="col-lg-6">
                <label class="form-label fw-semibold" for="bw-zone">Hotel Pickup Area *</label>
                <select class="form-select" id="bw-zone">
                    <?php foreach ($bwProduct['pickup_zones'] as $zid => $z): ?>
                        <option value="<?php echo $zid; ?>"><?php echo htmlspecialchars($z['title']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-lg-6 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                <p class="mb-0 fs-5">Total: <strong id="bw-total" class="text-primary">AED 99</strong></p>
                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">
                    <i class="fa fa-cart-plus me-2"></i>Add to Cart
                </button>
            </div>
        </form>
        <div id="bw-added" class="alert alert-success d-none mt-3 mb-0">
            <i class="fa fa-check-circle me-2"></i>Added to your cart!
            <a href="cart" class="alert-link ms-1">View cart &amp; checkout</a>
        </div>
        <p class="text-muted small mt-3 mb-0"><i class="fa fa-lock me-1"></i>Payment is processed securely by Stripe.
            Free cancellation up to 24 hours before pickup. Jain / pure-veg meals available on all evening safaris.</p>
    </div>
</div>

<script>
(function () {
    var prices = <?php echo json_encode(array_map(
        fn($v) => ['adult' => $v['adult'], 'child' => $v['child']], $bwProduct['variants'])); ?>;
    var fees = <?php echo json_encode(array_map(fn($z) => $z['fee'], $bwProduct['pickup_zones'])); ?>;
    var form = document.getElementById('safari-cart-form');
    if (!form) return;
    var el = function (id) { return document.getElementById(id); };

    function refreshTotal() {
        var p = prices[el('bw-variant').value];
        var t = p.adult * parseInt(el('bw-adults').value, 10)
              + p.child * parseInt(el('bw-children').value, 10)
              + fees[el('bw-zone').value];
        el('bw-total').textContent = 'AED ' + t;
    }
    ['bw-variant', 'bw-adults', 'bw-children', 'bw-zone'].forEach(function (id) {
        el(id).addEventListener('change', refreshTotal);
    });
    refreshTotal();

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var btn = form.querySelector('button[type="submit"]');
        btn.disabled = true;
        fetch('includes/cart-api.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                action: 'add',
                product_id: 'desert-safari',
                variant_id: el('bw-variant').value,
                travel_date: el('bw-date').value,
                adults: el('bw-adults').value,
                children: el('bw-children').value,
                pickup_zone: el('bw-zone').value
            })
        })
        .then(function (r) { return r.json(); })
        .then(function (data) {
            btn.disabled = false;
            if (data.success) {
                document.getElementById('bw-added').classList.remove('d-none');
                if (window.gtag) { gtag('event', 'add_to_cart', { currency: 'AED', value: data.total }); }
                var badge = document.querySelector('a[href$="cart"] .badge');
                if (badge) { badge.textContent = data.count; }
            } else {
                alert(data.message || 'Could not add to cart.');
            }
        })
        .catch(function () { btn.disabled = false; alert('Something went wrong. Please try again.'); });
    });
})();
</script>
<!-- Booking Widget End -->
