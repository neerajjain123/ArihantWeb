<?php
/**
 * Visa Checklist lead magnet section (reusable).
 * Usage: include 'includes/visa-lead-magnet.php';
 * Posts to includes/lead-capture.php, saves lead + emails PDF link.
 */
$leadSource = isset($pageCanonical) ? basename(parse_url($pageCanonical, PHP_URL_PATH) ?: 'uae-visa') : 'uae-visa';
?>
<!-- Visa Checklist Lead Magnet Start -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #13357B 0%, #3A7CA4 100%);">
    <div class="container py-3">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 text-white">
                <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill">FREE DOWNLOAD</span>
                <h2 class="text-white mb-3">UAE Visa Document Checklist 2026</h2>
                <p class="mb-3" style="opacity:0.9;">Don't risk a rejection over a missing document. Get our
                    one-page checklist covering every UAE visa type &mdash; documents, photo specs and the
                    rules most applicants miss.</p>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="fa fa-check-circle me-2 text-warning"></i>Documents by visa type &amp; passport</li>
                    <li class="mb-2"><i class="fa fa-check-circle me-2 text-warning"></i>Photo specs &mdash; the #1 rejection reason</li>
                    <li class="mb-0"><i class="fa fa-check-circle me-2 text-warning"></i>Processing times &amp; rules before you fly</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-4 shadow p-4 p-md-5">
                    <h5 class="mb-3 text-center">Get your free checklist</h5>
                    <form id="visa-lead-form">
                        <!-- Honeypot -->
                        <input type="text" name="website" tabindex="-1" autocomplete="off"
                               style="position:absolute;left:-9999px;" aria-hidden="true">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lead-name" name="name" placeholder="Your Name" required>
                            <label for="lead-name">Your Name *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="lead-email" name="email" placeholder="Email" required>
                            <label for="lead-email">Email Address *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="lead-whatsapp" name="whatsapp" placeholder="+91 XXXXX XXXXX">
                            <label for="lead-whatsapp">WhatsApp Number (optional)</label>
                        </div>
                        <button class="btn btn-primary w-100 py-3 rounded-pill" type="submit">
                            <i class="fa fa-download me-2"></i>Download Free Checklist
                        </button>
                        <p class="text-muted text-center mt-2 mb-0"><small>No spam &mdash; just your checklist and
                            visa help when you need it.</small></p>
                    </form>
                    <div id="visa-lead-success" class="d-none text-center py-4">
                        <i class="fa fa-check-circle fa-3x text-success mb-3"></i>
                        <h5>Your checklist is ready!</h5>
                        <p class="text-muted small mb-3">We've also emailed you the download link.</p>
                        <a id="visa-lead-download" href="/downloads/uae-visa-checklist-2026.pdf" target="_blank"
                           class="btn btn-success rounded-pill px-4">
                            <i class="fa fa-file-pdf me-2"></i>Open Checklist PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var form = document.getElementById('visa-lead-form');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var btn = form.querySelector('button[type="submit"]');
        var original = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Preparing...';

        fetch('includes/lead-capture.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                name: document.getElementById('lead-name').value,
                email: document.getElementById('lead-email').value,
                whatsapp: document.getElementById('lead-whatsapp').value,
                website: form.querySelector('[name="website"]').value,
                source: <?php echo json_encode($leadSource); ?>
            })
        })
        .then(function (r) { return r.json(); })
        .then(function (data) {
            if (data.success) {
                if (window.gtag) { gtag('event', 'generate_lead', { lead_source: <?php echo json_encode($leadSource); ?> }); }
                if (data.download) { document.getElementById('visa-lead-download').href = data.download; }
                form.classList.add('d-none');
                document.getElementById('visa-lead-success').classList.remove('d-none');
            } else {
                alert(data.message || 'Something went wrong. Please try again.');
                btn.disabled = false;
                btn.innerHTML = original;
            }
        })
        .catch(function () {
            alert('Something went wrong. Please try again or WhatsApp us on +971 58 594 5007.');
            btn.disabled = false;
            btn.innerHTML = original;
        });
    });
})();
</script>
<!-- Visa Checklist Lead Magnet End -->
