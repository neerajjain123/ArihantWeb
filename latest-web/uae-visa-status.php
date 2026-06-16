<?php
// SPRINT 3 — /uae-visa-status
// Targets: "uae visa status", "check uae visa status", "ica visa status",
// "gdrfa visa status". Highest-volume informational query in the cluster.

$pageTitle       = "Check UAE Visa Status 2026 | ICA Smart Services + GDRFA Dubai Guide | Arihant";
$pageDescription = "Check your UAE visa application status step-by-step on ICA Smart Services or GDRFA Dubai. Direct portal links, common error messages explained, alternative status check options.";
$pageKeywords    = "check uae visa status, uae visa status, ica visa status, gdrfa visa status, dubai visa status check, uae visa status check online, uae visa application status, smart services uae visa, gdrfa smart app";
$pageCanonical   = "https://arihantlink.com/uae-visa-status";
$currentPage     = "uae-visa";

$pageHeading            = "Check UAE Visa Status";
$breadcrumbCategory     = "UAE Visa";
$breadcrumbCategoryLink = "uae-visa";
$breadcrumbBg           = "img/UAE-tourist-visa.webp";
$breadcrumbOverlay      = false;

$schemaMarkup = '
<script type="application/ld+json">
[
  {"@context":"https://schema.org","@type":"Article","headline":"Check UAE Visa Status 2026 — ICA Smart Services + GDRFA Dubai Guide","description":"Step-by-step guide to checking UAE visa status on ICA Smart Services and GDRFA Dubai portals, with common error messages explained.","author":{"@type":"Organization","name":"Arihant Travel UAE Visa Desk"},"publisher":{"@type":"TravelAgency","name":"Arihant Travel","logo":{"@type":"ImageObject","url":"https://arihantlink.com/img/logo.png"}},"datePublished":"2026-06-15","dateModified":"' . date('Y-m-d') . '","mainEntityOfPage":{"@type":"WebPage","@id":"https://arihantlink.com/uae-visa-status"},"image":"https://arihantlink.com/img/UAE-tourist-visa.webp"},
  {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://arihantlink.com"},{"@type":"ListItem","position":2,"name":"UAE Visa","item":"https://arihantlink.com/uae-visa"},{"@type":"ListItem","position":3,"name":"Check Visa Status","item":"https://arihantlink.com/uae-visa-status"}]},
  {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
    {"@type":"Question","name":"How do I check my UAE visa status online?","acceptedAnswer":{"@type":"Answer","text":"Use ICA Smart Services for non-Dubai visas (icp.gov.ae) or GDRFA Dubai (gdrfad.gov.ae) for Dubai visas. Enter your application reference number or passport number to see real-time status."}},
    {"@type":"Question","name":"What is the difference between ICA and GDRFA?","acceptedAnswer":{"@type":"Answer","text":"ICA (Federal Authority for Identity, Citizenship, Customs and Port Security) handles visas for all UAE emirates except Dubai. GDRFA (General Directorate of Residency and Foreigners Affairs) handles visas for Dubai. Check the portal that matches your entry emirate."}},
    {"@type":"Question","name":"My UAE visa status shows pending — what does it mean?","acceptedAnswer":{"@type":"Answer","text":"Pending means UAE immigration has received your application and is reviewing it. Typical pending duration: 1-3 working days for standard visas, 1-2 days for express. If pending exceeds 5 working days, contact your visa agent."}},
    {"@type":"Question","name":"What does Application Under Process mean for UAE visa?","acceptedAnswer":{"@type":"Answer","text":"Application Under Process indicates the visa application is in active review by UAE immigration officers. No action is required from your side — wait 24-48 hours and check again. Most applications move to Approved within this window."}},
    {"@type":"Question","name":"My UAE visa status shows Rejected — what next?","acceptedAnswer":{"@type":"Answer","text":"A rejected status means UAE immigration declined your application. Common reasons: incomplete documents, blacklist match, prior visa issues. Government fees are non-refundable. You can reapply after addressing the rejection reason — we offer free document re-check before resubmission."}},
    {"@type":"Question","name":"Can I check UAE visa status without an application number?","acceptedAnswer":{"@type":"Answer","text":"Yes — use your passport number on both ICA and GDRFA portals as an alternative search. Some portals also accept date of birth + nationality as backup search criteria."}}
  ]}
]
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<section class="trust-band">
    <div class="container"><div class="row g-4 text-center text-md-start align-items-center">
        <div class="col-md-4"><h3 class="h6 mb-1"><i class="fas fa-globe me-2"></i> ICA Smart Services</h3><p class="mb-0 small">For non-Dubai emirates</p></div>
        <div class="col-md-4"><h3 class="h6 mb-1"><i class="fas fa-mobile-alt me-2"></i> GDRFA Dubai App</h3><p class="mb-0 small">For Dubai entries</p></div>
        <div class="col-md-4"><h3 class="h6 mb-1"><i class="fab fa-whatsapp me-2"></i> WhatsApp updates</h3><p class="mb-0 small">Arihant clients: automatic</p></div>
    </div></div>
</section>

<section class="page-section">
    <div class="container"><div class="row g-5">
        <div class="col-lg-8"><article class="article-prose">
            <div class="article-meta">
                <span><i class="far fa-calendar-alt"></i> Last updated <?php echo date('F Y'); ?></span>
                <span><i class="far fa-user"></i> Arihant Travel UAE Visa Desk</span>
            </div>

            <p class="lead" style="font-size: 1.15rem; color: var(--text-light);">
                Applied for a UAE visa and want to check status? There are two official UAE government
                portals (<strong>ICA Smart Services</strong> and <strong>GDRFA Dubai</strong>),
                depending on which emirate you&rsquo;re entering. This page walks through both, plus
                what each status message actually means and what to do at each step.
            </p>

            <p>
                If you applied through Arihant Travel, you don&rsquo;t need to check any portal &mdash;
                we send WhatsApp updates at every stage automatically. The portals are mostly used by
                travellers who applied directly or through other agencies that don&rsquo;t provide
                real-time updates.
            </p>

            <div class="article-callout">
                <strong>Applied through Arihant?</strong> Just message us. We have your reference and
                will tell you exact status in 2 minutes &mdash; no portal navigation needed.
            </div>

            <h2 id="which-portal">Which portal should I use?</h2>
            <div class="table-responsive">
                <table class="table table-bordered bg-white shadow-sm">
                    <thead style="background: var(--primary); color:#fff;">
                        <tr><th>Entry emirate</th><th>Portal</th><th>Direct link</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Dubai (DXB or DWC airport)</td><td><strong>GDRFA Dubai</strong></td><td><a href="https://smart.gdrfad.gov.ae/" target="_blank" rel="noopener">smart.gdrfad.gov.ae</a></td></tr>
                        <tr><td>Abu Dhabi (AUH airport)</td><td><strong>ICA Smart Services</strong></td><td><a href="https://icp.gov.ae/" target="_blank" rel="noopener">icp.gov.ae</a></td></tr>
                        <tr><td>Sharjah (SHJ airport)</td><td><strong>ICA Smart Services</strong></td><td><a href="https://icp.gov.ae/" target="_blank" rel="noopener">icp.gov.ae</a></td></tr>
                        <tr><td>Ras Al Khaimah (RKT airport)</td><td><strong>ICA Smart Services</strong></td><td><a href="https://icp.gov.ae/" target="_blank" rel="noopener">icp.gov.ae</a></td></tr>
                    </tbody>
                </table>
            </div>
            <p>
                If you&rsquo;re not sure which portal was used for your application: try GDRFA first
                if you&rsquo;re entering Dubai, ICA otherwise. If you get "no record found" on the
                first portal, try the other.
            </p>

            <h2 id="ica-steps">How to check UAE visa status on ICA Smart Services</h2>
            <ol>
                <li>Open <a href="https://icp.gov.ae/" target="_blank" rel="noopener">icp.gov.ae</a> in your browser. Switch to English (top right).</li>
                <li>Click "Public Services" &rarr; "Inquiry Services" &rarr; "Entry Permit Status".</li>
                <li>Enter your <strong>application reference number</strong> (starts with letters like ICA, EVA or VAR).</li>
                <li>Alternative: enter <strong>passport number + nationality</strong>.</li>
                <li>Click "Search". Status appears in 1&ndash;3 seconds.</li>
                <li>You&rsquo;ll see one of: New, Under Process, Approved, Rejected, Issued.</li>
            </ol>

            <h2 id="gdrfa-steps">How to check on GDRFA Dubai</h2>
            <ol>
                <li>Open <a href="https://smart.gdrfad.gov.ae/" target="_blank" rel="noopener">smart.gdrfad.gov.ae</a> in your browser. Switch to English.</li>
                <li>Click "Smart Services" &rarr; "Visa Inquiry" or download the GDRFA Dubai smart app from Apple App Store / Google Play.</li>
                <li>Enter your <strong>file number</strong> (begins with 201 or 203) OR <strong>passport number</strong>.</li>
                <li>Enter your nationality.</li>
                <li>Click "Search". You&rsquo;ll see status, type of visa, and validity dates.</li>
            </ol>

            <h2 id="status-meanings">What each status message means</h2>
            <div class="table-responsive">
                <table class="table table-bordered bg-white shadow-sm">
                    <thead style="background: var(--primary); color:#fff;">
                        <tr><th>Status</th><th>What it means</th><th>What to do</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><strong>New / Submitted</strong></td><td>Application received and entered into system</td><td>Wait 24 hours, check again</td></tr>
                        <tr><td><strong>Under Process / Pending</strong></td><td>Immigration officer is reviewing</td><td>No action; wait 1-3 working days</td></tr>
                        <tr><td><strong>Approved</strong></td><td>Decision made favourably</td><td>Wait for "Issued" &mdash; PDF imminent</td></tr>
                        <tr><td><strong>Issued</strong></td><td>Visa PDF generated and ready</td><td>Download from portal or wait for email</td></tr>
                        <tr><td><strong>Rejected</strong></td><td>Application declined</td><td>Government fees non-refundable; check rejection reason; reapply with corrected docs</td></tr>
                        <tr><td><strong>Needs Action / Hold</strong></td><td>Additional document or clarification required</td><td>Contact your visa agent or upload requested doc immediately</td></tr>
                        <tr><td><strong>No record found</strong></td><td>Wrong portal or wrong reference number</td><td>Try the other portal (ICA vs GDRFA); double-check reference number</td></tr>
                    </tbody>
                </table>
            </div>

            <h2 id="how-long">How long do each stage take?</h2>
            <ul>
                <li><strong>New &rarr; Under Process:</strong> Usually within 1 hour of submission.</li>
                <li><strong>Under Process &rarr; Approved:</strong> 1&ndash;3 working days for standard. 1&ndash;2 days for express. 24 hours for GCC e-visa.</li>
                <li><strong>Approved &rarr; Issued:</strong> Usually same day or next morning.</li>
                <li><strong>Total time from submission to PDF:</strong> 2&ndash;4 working days for standard tourist visa.</li>
            </ul>
            <p>
                If you see "Under Process" for more than 5 working days, that&rsquo;s a sign to follow
                up. Standard escalation is via your visa agent &mdash; we can ping ICA/GDRFA directly
                for Arihant-filed applications.
            </p>

            <h2 id="rejected">Status shows Rejected &mdash; what next?</h2>
            <p>
                A rejection means UAE immigration declined the application. Common reasons:
            </p>
            <ul>
                <li><strong>Incomplete documents</strong> &mdash; passport photo on wrong background, ticket dates inconsistent.</li>
                <li><strong>Passport validity</strong> &mdash; less than 6 months from intended exit date.</li>
                <li><strong>Prior overstay or rejection</strong> &mdash; flagged in the immigration database.</li>
                <li><strong>Inconsistent travel history</strong> &mdash; conflicting dates between application and prior records.</li>
                <li><strong>Security match</strong> &mdash; name matches a watchlist entry (rare for clean records).</li>
            </ul>
            <p>
                UAE government fees are non-refundable on rejection. You can reapply after fixing
                the issue, but the new application is treated independently &mdash; same fee, same
                processing time. We offer a <strong>free document re-check</strong> before any
                re-application so you don&rsquo;t pay twice for the same mistake.
            </p>

            <h2 id="arihant-clients">If you applied through Arihant Travel</h2>
            <p>
                You don&rsquo;t need to check any portal. We send WhatsApp updates at every stage:
            </p>
            <ol>
                <li>"Application submitted &mdash; reference [number]" within 1 hour of payment.</li>
                <li>"Application under process" once UAE immigration picks it up.</li>
                <li>"Approved" the moment we see the decision.</li>
                <li>"Visa PDF attached" by email + WhatsApp the same hour as issued.</li>
            </ol>
            <p>
                For Arihant clients, status check is faster on WhatsApp than the portal. Just message
                "status please" with your reference and we reply in under 15 minutes.
            </p>
        </article></div>

        <aside class="col-lg-4">
            <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                <div class="card-body p-4 text-center">
                    <i class="fab fa-whatsapp fa-3x mb-3"></i>
                    <h3 class="h5 text-white">Status check via Arihant</h3>
                    <p class="mb-3" style="opacity:0.9;">Faster than the portal. WhatsApp reply in 15 minutes.</p>
                    <a href="https://wa.me/971585945007?text=Status%20check%20for%20my%20UAE%20visa%20%5Bref%20number%5D" target="_blank" rel="noopener" class="btn btn-whatsapp w-100 rounded-pill py-2">
                        <i class="fab fa-whatsapp me-2"></i> WhatsApp Status
                    </a>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-3"><div class="card-body p-4">
                <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Official portals</h3>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="https://icp.gov.ae/" target="_blank" rel="noopener"><i class="fas fa-external-link-alt me-1"></i> ICA Smart Services</a><br><small class="text-muted">All emirates except Dubai</small></li>
                    <li class="mb-2"><a href="https://smart.gdrfad.gov.ae/" target="_blank" rel="noopener"><i class="fas fa-external-link-alt me-1"></i> GDRFA Dubai</a><br><small class="text-muted">Dubai entries</small></li>
                </ul>
            </div></div>

            <div class="card border-0 shadow-sm mt-3"><div class="card-body p-4">
                <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Related</h3>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="uae-visa"><i class="fas fa-arrow-right me-1"></i> Apply UAE visa</a></li>
                    <li class="mb-2"><a href="uae-express-visa"><i class="fas fa-arrow-right me-1"></i> Express 24-48 hr</a></li>
                    <li class="mb-2"><a href="uae-a2a-visa-extension-60-days"><i class="fas fa-arrow-right me-1"></i> A2A 60-day extension</a></li>
                </ul>
            </div></div>
        </aside>
    </div></div>
</section>

<section class="page-section page-section--light" id="faq">
    <div class="container" style="max-width: 880px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">FAQ</span>
            <h2 class="section-heading__title">UAE visa status &mdash; common questions</h2>
        </div>
        <div class="accordion faq-accordion" id="stFaq">
            <?php $faqs = [
                ['How do I check my UAE visa status online?', 'Use <a href="https://icp.gov.ae/" target="_blank" rel="noopener">ICA Smart Services</a> for non-Dubai visas or <a href="https://smart.gdrfad.gov.ae/" target="_blank" rel="noopener">GDRFA Dubai</a> for Dubai visas. Enter reference number or passport number.'],
                ['What is the difference between ICA and GDRFA?', 'ICA handles UAE-wide visas except Dubai. GDRFA handles Dubai visas. Check the portal that matches your entry emirate.'],
                ['Status shows Pending &mdash; what does it mean?', 'UAE immigration has received your application and is reviewing it. Typical: 1-3 working days for standard, 1-2 for express. Beyond 5 working days, contact your visa agent.'],
                ['Status shows Rejected &mdash; what next?', 'Decline by UAE immigration. Government fees non-refundable. Reapply after fixing the issue (incomplete docs, passport validity, etc.). Free document re-check available.'],
                ['Can I check without an application reference?', 'Yes &mdash; use passport number on both portals as alternative search.'],
                ['Do you offer WhatsApp status updates?', 'Yes &mdash; for all Arihant-filed visas, we send WhatsApp updates automatically. Most clients never use the portal.'],
            ];
            foreach ($faqs as $i => $faq):
                $id = 'stf' . ($i + 1); $isOpen = $i === 0; ?>
            <div class="accordion-item mb-3 border-0 shadow-sm">
                <h3 class="accordion-header"><button class="accordion-button <?php echo $isOpen ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>"><?php echo htmlspecialchars($faq[0]); ?></button></h3>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" data-bs-parent="#stFaq"><div class="accordion-body"><?php echo $faq[1]; ?></div></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="page-section page-section--light-2">
    <div class="container text-center" style="max-width: 720px;">
        <h2 class="mb-3">Need a new UAE visa &mdash; or status check?</h2>
        <p class="fs-5 mb-4">Free document check. Real-time WhatsApp updates. 98%+ approval rate.</p>
        <a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20visa" target="_blank" rel="noopener" class="btn btn-success btn-lg rounded-pill px-5 me-2 mb-2"><i class="fab fa-whatsapp me-2"></i>Apply via WhatsApp</a>
        <a href="uae-visa" class="btn btn-outline-primary btn-lg rounded-pill px-5 mb-2">See all visa types</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
