<?php
// =============================================================================
//  LIMO CAR PICKER + INSTANT QUOTE BUILDER  (used by /dubai-limo-ride)
//  Sits directly below the page's hero banner (includes/breadcrumb.php,
//  which carries the H1 and breadcrumb). Expects $limos.
//  Prices come straight from $limos[...]['pricing'|'birthday'|'wedding'],
//  so the estimate always matches the price tables further down the page.
//  The form never submits to the server: it builds a WhatsApp message.
// =============================================================================

$aed = function ($s) { return (int) preg_replace('/\D/', '', $s); };
$priceKey = [
    'Per Hour – Dubai Area'   => ['dubai', 'hourly'],
    'Per Hour – Sharjah Area' => ['sharjah', 'hourly'],
    '5 Hours – Dubai Area'    => ['dubai', 'package5'],
    '5 Hours – Sharjah Area'  => ['sharjah', 'package5'],
    'Dubai Airport Pickup'    => ['dubai', 'airport'],
    'Sharjah Airport Pickup'  => ['sharjah', 'airport'],
];
$quoteData = [];
foreach ($limos as $limo) {
    $p = [];
    foreach ($limo['pricing'] as $row) {
        if (isset($priceKey[$row['label']])) {
            [$area, $svc] = $priceKey[$row['label']];
            $p[$area][$svc] = $aed($row['price']);
        }
    }
    $quoteData[$limo['id']] = [
        'name'     => $limo['name'],
        'capacity' => (int) $limo['capacity'],
        'prices'   => $p,
        'decor'    => [
            'birthday'      => $aed($limo['birthday'][1]['price'] ?? '0'),
            'birthday_cake' => $aed($limo['birthday'][0]['price'] ?? '0'),
            'wedding'       => $aed($limo['wedding'][0]['price'] ?? '0'),
        ],
    ];
}
$fromPrice = min(array_map(fn($q) => $q['prices']['dubai']['hourly'] ?? PHP_INT_MAX, $quoteData));
?>
<section class="visa-hero limo-hero">
    <div class="container">
        <div class="visa-hero__intro">
            <p class="visa-hero__lead">
                Chauffeur-driven limousines for birthdays, weddings, airport pickups and nights out in
                Dubai and Sharjah. From <strong>AED <?php echo number_format($fromPrice); ?> per hour</strong>.
            </p>
        </div>

        <div class="limo-picker">
            <?php foreach ($limos as $i => $limo): ?>
            <a class="limo-pick" href="#<?php echo $limo['id']; ?>" data-limo="<?php echo $limo['id']; ?>">
                <img src="<?php echo htmlspecialchars($limo['images'][0]); ?>" alt="<?php echo htmlspecialchars($limo['name']); ?> limousine"
                     width="320" height="200" <?php echo $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"'; ?>>
                <span class="limo-pick__body">
                    <strong><?php echo htmlspecialchars($limo['name']); ?></strong>
                    <span><?php echo htmlspecialchars($limo['colour']); ?> &middot; up to <?php echo htmlspecialchars($limo['capacity']); ?></span>
                    <span class="limo-pick__price">From AED <?php echo number_format($quoteData[$limo['id']]['prices']['dubai']['hourly']); ?>/hour</span>
                </span>
            </a>
            <?php endforeach; ?>
        </div>

        <a href="#limo-quote" class="btn btn-primary rounded-pill px-4 mt-3" data-cta="limo-hero-quote">
            <i class="fas fa-calculator me-2"></i>Get an instant quote
        </a>
    </div>
</section>

<section class="page-section" id="limo-quote">
    <div class="container" style="max-width: 820px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Instant quote</span>
            <h2 class="section-heading__title">Plan your limo ride</h2>
            <p class="section-heading__lead">Pick the details and see your estimate. One tap sends everything to us on WhatsApp &mdash; no back-and-forth.</p>
        </div>

        <form class="limo-quote" id="limoQuote" novalidate>
            <fieldset class="limo-quote__group">
                <legend>1. Choose your limo</legend>
                <div class="limo-quote__choices">
                    <?php foreach ($limos as $i => $limo): ?>
                    <label class="limo-choice">
                        <input type="radio" name="car" value="<?php echo $limo['id']; ?>" <?php echo $i === 0 ? 'checked' : ''; ?>>
                        <span><strong><?php echo htmlspecialchars($limo['name']); ?></strong><small><?php echo htmlspecialchars($limo['colour']); ?> &middot; <?php echo htmlspecialchars($limo['capacity']); ?></small></span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </fieldset>

            <fieldset class="limo-quote__group">
                <legend>2. What do you need?</legend>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="lqService">Service</label>
                        <select class="form-select" id="lqService" name="service">
                            <option value="hourly">By the hour</option>
                            <option value="package5">5-hour package</option>
                            <option value="airport">Airport pickup</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="lqArea">Area</label>
                        <select class="form-select" id="lqArea" name="area">
                            <option value="dubai">Dubai</option>
                            <option value="sharjah">Sharjah</option>
                        </select>
                    </div>
                    <div class="col-sm-6" id="lqHoursWrap">
                        <label class="form-label" for="lqHours">Hours</label>
                        <select class="form-select" id="lqHours" name="hours">
                            <option value="1">1 hour</option>
                            <option value="2" selected>2 hours</option>
                            <option value="3">3 hours</option>
                            <option value="4">4 hours</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="lqOccasion">Occasion</label>
                        <select class="form-select" id="lqOccasion" name="occasion">
                            <option>Birthday</option>
                            <option>Wedding</option>
                            <option>Anniversary / proposal</option>
                            <option>Airport arrival</option>
                            <option>Night out / city ride</option>
                            <option>Corporate</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="lqDecor">Decoration (optional)</label>
                        <select class="form-select" id="lqDecor" name="decor">
                            <option value="">No decoration</option>
                            <option value="birthday">Birthday decoration (no cake)</option>
                            <option value="birthday_cake">Birthday decoration + cake</option>
                            <option value="wedding">Wedding decoration</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="lqGuests">Guests</label>
                        <input class="form-control" type="number" id="lqGuests" name="guests" min="1" max="20" value="4" inputmode="numeric">
                        <div class="limo-quote__hint" id="lqGuestHint" hidden></div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="limo-quote__group">
                <legend>3. When and where?</legend>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="lqDate">Date</label>
                        <input class="form-control" type="date" id="lqDate" name="date" required>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="lqTime">Pickup time</label>
                        <input class="form-control" type="time" id="lqTime" name="time" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="lqPickup">Pickup location</label>
                        <input class="form-control" type="text" id="lqPickup" name="pickup" placeholder="Hotel, building or airport terminal" required>
                    </div>
                </div>
            </fieldset>

            <div class="limo-quote__total" aria-live="polite">
                <div>
                    <span class="limo-quote__label">Estimated price</span>
                    <span class="limo-quote__amount" id="lqTotal">AED 0</span>
                    <span class="limo-quote__breakdown" id="lqBreakdown"></span>
                </div>
                <button type="submit" class="btn btn-success rounded-pill px-4" data-cta="limo-quote-send">
                    <i class="fab fa-whatsapp me-2"></i>Send on WhatsApp
                </button>
            </div>
            <p class="limo-quote__error" id="lqError" hidden></p>
            <p class="small text-muted mb-0">Estimate based on our published rates. Parking (AED 150/hour) and extra time are charged separately. We confirm availability and the final price on WhatsApp.</p>
        </form>
    </div>
</section>

<script>
(function () {
    var DATA = <?php echo json_encode($quoteData, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG); ?>;
    var form = document.getElementById('limoQuote');
    if (!form) return;
    var $ = function (id) { return document.getElementById(id); };
    var fmt = function (n) { return 'AED ' + n.toLocaleString('en-US'); };
    var dateEl = $('lqDate');
    dateEl.min = new Date().toISOString().slice(0, 10);

    function state() {
        var car = DATA[form.car.value];
        var service = $('lqService').value, area = $('lqArea').value;
        var hours = parseInt($('lqHours').value, 10);
        var decor = $('lqDecor').value;
        var base = 0, label = '';
        var p = car.prices[area] || {};
        if (service === 'hourly') { base = (p.hourly || 0) * hours; label = hours + ' × ' + fmt(p.hourly || 0); }
        if (service === 'package5') { base = p.package5 || 0; label = '5-hour package'; }
        if (service === 'airport') { base = p.airport || 0; label = (area === 'dubai' ? 'Dubai' : 'Sharjah') + ' airport pickup'; }
        var decorPrice = decor ? (car.decor[decor] || 0) : 0;
        return { car: car, service: service, area: area, hours: hours, decor: decor, base: base, decorPrice: decorPrice, total: base + decorPrice, label: label };
    }

    function render() {
        var s = state();
        $('lqHoursWrap').hidden = s.service !== 'hourly';
        $('lqTotal').textContent = fmt(s.total);
        $('lqBreakdown').textContent = s.label + (s.decorPrice ? ' + decoration ' + fmt(s.decorPrice) : '');
        var guests = parseInt($('lqGuests').value, 10) || 0;
        var hint = $('lqGuestHint');
        if (guests > s.car.capacity) {
            hint.hidden = false;
            hint.textContent = s.car.name + ' seats up to ' + s.car.capacity + '. Choose the larger limo for your group.';
        } else { hint.hidden = true; }
        var tip = (s.service === 'hourly' && s.hours === 4 && s.car.prices[s.area] && s.car.prices[s.area].package5 < s.base);
        if (tip) $('lqBreakdown').textContent += ' — tip: the 5-hour package (' + fmt(s.car.prices[s.area].package5) + ') costs less';
    }

    form.addEventListener('change', render);
    form.addEventListener('input', function () { $('lqError').hidden = true; render(); });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var s = state();
        var missing = [];
        if (!dateEl.value) missing.push('date');
        if (!$('lqTime').value) missing.push('pickup time');
        if (!$('lqPickup').value.trim()) missing.push('pickup location');
        if (missing.length) {
            var err = $('lqError');
            err.hidden = false;
            err.textContent = 'Please add the ' + missing.join(', ') + ' so we can confirm availability.';
            return;
        }
        var serviceText = s.service === 'hourly' ? s.hours + ' hour(s)' : (s.service === 'package5' ? '5-hour package' : 'Airport pickup');
        var decorText = { '': 'None', birthday: 'Birthday (no cake)', birthday_cake: 'Birthday + cake', wedding: 'Wedding' }[s.decor];
        var msg = [
            'Hi Arihant Travels, I would like a limo quote:',
            '• Limo: ' + s.car.name,
            '• Service: ' + serviceText + ' (' + (s.area === 'dubai' ? 'Dubai' : 'Sharjah') + ')',
            '• Occasion: ' + $('lqOccasion').value,
            '• Decoration: ' + decorText,
            '• Date: ' + dateEl.value + ' at ' + $('lqTime').value,
            '• Pickup: ' + $('lqPickup').value.trim(),
            '• Guests: ' + ($('lqGuests').value || '-'),
            '• Website estimate: ' + fmt(s.total)
        ].join('\n');
        if (window.gtag) gtag('event', 'limo_quote_whatsapp', { limo: form.car.value, service: s.service, value: s.total, currency: 'AED' });
        window.open('https://wa.me/971585945007?text=' + encodeURIComponent(msg), '_blank', 'noopener');
    });

    document.querySelectorAll('.limo-pick').forEach(function (a) {
        a.addEventListener('click', function () {
            var r = form.querySelector('input[name=car][value="' + a.dataset.limo + '"]');
            if (r) { r.checked = true; render(); }
        });
    });
    render();
})();
</script>
