<?php
// =============================================================================
//  UAE VISA HERO + PICKER
//  Replaces the full-screen photo banner on /uae-visa. The customer lands on
//  "what do you need?" instead of a photo. Prices come from visa-prices.php.
//  Expects: $pageHeading (becomes the page's only H1).
// =============================================================================
require_once __DIR__ . '/visa-prices.php';
?>
<section class="visa-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb visa-hero__crumbs">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">UAE visa</li>
            </ol>
        </nav>

        <div class="visa-hero__intro">
            <h1 class="visa-hero__title"><?php echo $pageHeading; ?></h1>
            <p class="visa-hero__lead">
                Pick your visa, send your documents, and we file it with ICA or GDRFA.
                We check your documents for free before you pay, and send updates on WhatsApp.
            </p>
            <ul class="visa-hero__trust">
                <li><i class="fas fa-shield-alt"></i> UAE-licensed agency, Sharjah office</li>
                <li><i class="fas fa-file-signature"></i> Free document check before you pay</li>
                <li><i class="fab fa-whatsapp"></i> Real person on WhatsApp</li>
            </ul>
        </div>

        <div class="visa-picker" id="visa-picker">
            <h2 class="visa-picker__q">What do you need?</h2>

            <div class="visa-picker__tabs" role="tablist" aria-label="Visa categories">
                <?php $first = true; foreach ($visaGroups as $gKey => $g): ?>
                <button type="button" role="tab" class="visa-picker__tab<?php echo $first ? ' is-active' : ''; ?>"
                        id="tab-<?php echo $gKey; ?>" aria-controls="panel-<?php echo $gKey; ?>"
                        aria-selected="<?php echo $first ? 'true' : 'false'; ?>" data-group="<?php echo $gKey; ?>">
                    <i class="fas <?php echo $g['icon']; ?>"></i> <?php echo $g['label']; ?>
                </button>
                <?php $first = false; endforeach; ?>
            </div>

            <?php $first = true; foreach ($visaGroups as $gKey => $g): ?>
            <div class="visa-picker__panel" role="tabpanel" id="panel-<?php echo $gKey; ?>"
                 aria-labelledby="tab-<?php echo $gKey; ?>" data-group="<?php echo $gKey; ?>"
                 <?php echo $first ? '' : 'data-hidden'; ?>>
                <h3 class="visa-picker__group-label"><?php echo $g['label']; ?></h3>
                <div class="visa-cards">
                    <?php foreach ($visaTypes as $key => $v): if ($v['group'] !== $gKey) continue; ?>
                    <article class="visa-card<?php echo !empty($v['popular']) ? ' visa-card--popular' : ''; ?>">
                        <?php if (!empty($v['popular'])): ?><span class="visa-card__badge">Most booked</span><?php endif; ?>
                        <div class="visa-card__head">
                            <span class="visa-card__icon"><i class="fas <?php echo $v['icon']; ?>"></i></span>
                            <h4 class="visa-card__name"><a href="<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a></h4>
                        </div>
                        <ul class="visa-card__facts">
                            <li><?php echo $v['stay']; ?></li>
                            <li><?php echo $v['entries']; ?></li>
                            <li><?php echo $v['processing']; ?></li>
                        </ul>
                        <p class="visa-card__price"><?php echo visa_price_label($key); ?></p>
                        <?php if (!empty($v['note'])): ?>
                        <p class="visa-card__express"><?php echo $v['note']; ?></p>
                        <?php endif; ?>
                        <?php if ($v['express_aed'] !== null): ?>
                        <p class="visa-card__express"><i class="fas fa-bolt"></i> Express 24–48 hr: AED <?php echo number_format($v['express_aed']); ?></p>
                        <?php endif; ?>
                        <div class="visa-card__actions">
                            <a class="btn btn-primary btn-sm rounded-pill" href="<?php echo visa_whatsapp_link($key); ?>"
                               target="_blank" rel="noopener" data-visa="<?php echo $key; ?>">Apply now</a>
                            <a class="visa-card__more" href="<?php echo $v['url']; ?>">Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $first = false; endforeach; ?>

            <p class="visa-picker__foot">
                Prices are all-in (government fee + our service fee) for most passports. Final price confirmed after the free document check.
                Not sure which one? <a href="https://wa.me/971585945007?text=<?php echo rawurlencode('Hi Arihant Travels, which UAE visa do I need?'); ?>" target="_blank" rel="noopener">Ask us on WhatsApp</a>.
            </p>
        </div>
    </div>
</section>

<section class="visa-steps" aria-labelledby="visa-steps-title">
    <div class="container">
        <h2 class="visa-steps__title" id="visa-steps-title">How it works</h2>
        <ol class="visa-steps__list">
            <li><span class="visa-steps__n">1</span><strong>Pick your visa</strong><span>Choose above, or ask us which one fits.</span></li>
            <li><span class="visa-steps__n">2</span><strong>Send documents</strong><span>Passport copy and photo. We check them for free.</span></li>
            <li><span class="visa-steps__n">3</span><strong>Pay and we file</strong><span>We submit to ICA or GDRFA the same day.</span></li>
            <li><span class="visa-steps__n">4</span><strong>Get your visa PDF</strong><span>On email and WhatsApp, ready to print.</span></li>
        </ol>
    </div>
</section>

<script>
(function () {
    var picker = document.getElementById('visa-picker');
    if (!picker) return;
    picker.classList.add('is-js');
    var tabs = picker.querySelectorAll('.visa-picker__tab');
    var panels = picker.querySelectorAll('.visa-picker__panel');
    function show(group) {
        tabs.forEach(function (t) {
            var on = t.dataset.group === group;
            t.classList.toggle('is-active', on);
            t.setAttribute('aria-selected', on ? 'true' : 'false');
        });
        panels.forEach(function (p) {
            if (p.dataset.group === group) p.removeAttribute('data-hidden');
            else p.setAttribute('data-hidden', '');
        });
    }
    tabs.forEach(function (t) {
        t.addEventListener('click', function () {
            show(t.dataset.group);
            if (window.gtag) gtag('event', 'visa_tab', { group: t.dataset.group });
        });
    });
    picker.addEventListener('click', function (e) {
        var a = e.target.closest('a[data-visa]');
        if (a && window.gtag) gtag('event', 'visa_apply_click', { visa: a.dataset.visa });
    });
})();
</script>
