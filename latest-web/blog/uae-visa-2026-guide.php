<?php
// =============================================================================
//  BLOG: UAE Visa 2026 Guide — content-first article
//  Rewritten 2026-05 to match design system + .article-prose + sticky TOC
//  + Article schema with author/byline (E-E-A-T).
// =============================================================================
$basePath = "../";

// SEO
$pageTitle       = "UAE Visa 2026 Guide | New Rules, GCC Unified Visa, Fees";
$pageDescription = "The complete 2026 UAE visa guide: new GCC Unified Tourist Visa, AI / Blue / Job Seeker categories, Golden Visa expansion, updated fees…";
$pageKeywords    = "UAE visa 2026, GCC Unified Tourist Visa, UAE Golden Visa 2026, Dubai visa fees 2026, UAE visa for Indians 2026, Blue Visa, AI Specialist Visa, UAE visa requirements 2026, UAE overstay 2026";
$pageCanonical   = "https://arihantlink.com/blog/uae-visa-2026-guide";
$currentPage     = "blog";

$pageHeading            = "UAE Visa 2026 — New Rules, Fees & Visa Types Explained";
$breadcrumbCategory     = "Blog";
$breadcrumbCategoryLink = "/blog";
$breadcrumbBg           = "img/services/uae-visa.jpg";

// Schema: Article + FAQPage + BreadcrumbList
$schemaMarkup = '
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "UAE Visa 2026 — New Rules, Fees & Visa Types Explained",
    "description": "The complete 2026 UAE visa guide: GCC Unified Tourist Visa, AI / Blue / Job Seeker categories, Golden Visa expansion, updated fees, no-grace overstay rules.",
    "image": "https://arihantlink.com/img/services/uae-visa.jpg",
    "author": {"@type": "Organization", "name": "Arihant Travel UAE Visa Desk", "url": "https://arihantlink.com"},
    "publisher": {
      "@type": "TravelAgency", "name": "Arihant Travel",
      "logo": {"@type": "ImageObject", "url": "https://arihantlink.com/img/logo.png"}
    },
    "datePublished": "2026-01-20",
    "dateModified": "' . date('Y-m-d') . '",
    "mainEntityOfPage": {"@type": "WebPage", "@id": "https://arihantlink.com/blog/uae-visa-2026-guide"}
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://arihantlink.com"},
      {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://arihantlink.com/blog"},
      {"@type": "ListItem", "position": 3, "name": "UAE Visa 2026 Guide", "item": "https://arihantlink.com/blog/uae-visa-2026-guide"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {"@type": "Question", "name": "What is the GCC Unified Tourist Visa?", "acceptedAnswer": {"@type": "Answer", "text": "A single multi-country visa that allows tourists to travel across the UAE, Saudi Arabia, Qatar, Bahrain, Oman and Kuwait without applying for each country separately. Projected fee: USD 90–130 (AED 330–480)."}},
      {"@type": "Question", "name": "Did the UAE remove the visa overstay grace period in 2026?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. The 10-day grace period has been removed for tourist visas. Overstaying now incurs an immediate fine of AED 50 per day from the day after the visa expires."}},
      {"@type": "Question", "name": "What is the UAE Blue Visa?", "acceptedAnswer": {"@type": "Answer", "text": "A 10-year UAE residence visa for environmental contributors, sustainability researchers and people whose work materially advances climate or biodiversity goals. Eligibility is by individual nomination."}},
      {"@type": "Question", "name": "What is the UAE AI Specialist Visa?", "acceptedAnswer": {"@type": "Answer", "text": "A long-term residence visa for engineers, researchers and operators in artificial intelligence. Eligibility typically requires a verified track record (publications, employer reference or product credit) plus salary or investment thresholds."}},
      {"@type": "Question", "name": "How much does the UAE Golden Visa cost in 2026?", "acceptedAnswer": {"@type": "Answer", "text": "Approximately AED 9,500–10,500 for the property-investor track (including DLD fees) and AED 4,000–4,800 for the professional / scientist / specialist tracks. The fee covers the 10-year visa, medical fitness test and Emirates ID."}},
      {"@type": "Question", "name": "Can I extend a UAE visit visa from inside the country in 2026?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Most 2026 visit visas can be extended online via the ICP or GDRFA portals while you are inside the UAE. Visa runs to the border are no longer required for in-country extension."}}
    ]
  }
]
</script>';

include '../includes/header.php';
include '../includes/breadcrumb.php';
?>

<!-- ===== Trust band ===== -->
<section class="trust-band">
    <div class="container">
        <div class="row g-4 text-center text-md-start align-items-center">
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="far fa-calendar-alt me-2"></i> Updated <?php echo date('F Y'); ?></h3><p class="mb-0 small">2026 fee schedule</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-globe me-2"></i> 6 GCC Countries</h3><p class="mb-0 small">on a single Unified Visa</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-user-shield me-2"></i> Author byline</h3><p class="mb-0 small">Arihant UAE Visa Desk</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fab fa-whatsapp me-2"></i> Talk to a human</h3><p class="mb-0 small">+971 58 594 5007</p></div>
        </div>
    </div>
</section>

<!-- ===== Body: long-form prose + sticky TOC ===== -->
<section class="page-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article-prose">

                    <div class="article-meta">
                        <span><i class="far fa-calendar-alt"></i> Last updated <?php echo date('F Y'); ?></span>
                        <span><i class="far fa-user"></i> Arihant Travel UAE Visa Desk</span>
                        <span><i class="fas fa-clock"></i> 14&ndash;18 min read</span>
                    </div>

                    <p class="lead" style="font-size:1.15rem; color:var(--text-light);">
                        The UAE has officially moved into a new era of <strong>purpose-based
                        immigration</strong>. The one-size-fits-all entry permit is gone. In 2026
                        the system is designed to attract specific talents &mdash; from AI
                        specialists to environmental contributors &mdash; while making it easier
                        than ever for tourists to explore the entire Gulf region on a single visa.
                        This guide covers everything that&rsquo;s changed, with current fees,
                        Indian-citizen requirements and the no-grace overstay rule that&rsquo;s
                        catching first-time visitors out.
                    </p>

                    <p>
                        If you&rsquo;d rather skip ahead, use the table of contents on the right.
                        For a personal answer, our visa desk is on
                        <a href="https://wa.me/971585945007?text=I%20have%20a%20question%20about%20UAE%20visa%202026" target="_blank" rel="noopener">WhatsApp +971 58 594 5007</a>
                        &mdash; replies usually within an hour during UAE business hours.
                    </p>

                    <h2 id="gcc-unified-visa">1. The big game-changer &mdash; GCC Unified Tourist Visa</h2>
                    <p>
                        If you&rsquo;ve ever dreamed of a road trip from Dubai to Muscat, or
                        chaining a Dubai weekend with a few days in Riyadh and Doha, 2026 is the
                        year. The <strong>GCC Unified Tourist Visa</strong> &mdash; often called
                        the &ldquo;Schengen of the Middle East&rdquo; &mdash; is now operational.
                        A single application gets you legitimate entry to all six member states:
                        the UAE, Saudi Arabia, Qatar, Bahrain, Oman and Kuwait.
                    </p>
                    <ul>
                        <li><strong>How it works.</strong> One application, one fee, one visa, six countries. You apply to the GCC member state you intend to enter first. The visa is then valid for travel between all six.</li>
                        <li><strong>Who it&rsquo;s for.</strong> Tourists and business travellers planning multi-country itineraries who don&rsquo;t want to manage separate visa applications, separate validity windows and separate fees.</li>
                        <li><strong>Projected cost.</strong> <span class="price-pill">USD 90&ndash;130 (AED 330&ndash;480)</span> for the multi-country pass, vs. roughly USD 350+ if you stitched single-country tourist visas together.</li>
                    </ul>
                    <div class="article-callout">
                        <strong>Heads up.</strong> Eligibility, exact fee and validity window are
                        being finalised at the GCC Secretariat level and may differ slightly per
                        member state. We confirm current rules before submitting any GCC Unified
                        application.
                    </div>

                    <h2 id="updated-visit-visas">2. Visit visas refreshed &mdash; more time, less stress</h2>
                    <p>
                        The standard UAE visit visa got a meaningful refresh for 2026:
                    </p>
                    <ul>
                        <li><strong>Flexible durations.</strong> You can pick 30, 60 or 90-day stays at application time &mdash; not just 30 or 60.</li>
                        <li><strong>In-country extensions.</strong> Most visit visas can now be extended online via the <strong>ICP</strong> (Federal Authority for Identity, Citizenship, Customs and Port Security) or <strong>GDRFA Dubai</strong> portals while you are still in the UAE. Border &ldquo;visa runs&rdquo; to Oman are no longer needed for in-country extension.</li>
                        <li><strong>The grace period is gone.</strong> The old 10-day grace after expiry has been removed. Overstaying now triggers an immediate fine of <strong>AED 50 per day</strong>. Plan exits and extensions accordingly.</li>
                    </ul>

                    <h2 id="niche-visas">3. New &ldquo;niche&rdquo; visa categories</h2>
                    <p>
                        The UAE has introduced several new entry permits to attract specific
                        global talents and visitor segments:
                    </p>
                    <h3 id="ai-visa">AI Specialist Visa</h3>
                    <p>
                        For engineers, researchers and operators in artificial intelligence.
                        Targeting people who can demonstrate a verified track record (peer-reviewed
                        publications, employer reference, product credit) plus salary or investment
                        thresholds. The aim is to back the UAE&rsquo;s national AI strategy with
                        long-term residency, not short-term gigs.
                    </p>
                    <h3 id="blue-visa">Blue Visa &mdash; 10-year residency for sustainability</h3>
                    <p>
                        A 10-year UAE residence visa for environmental contributors, sustainability
                        researchers and people whose work materially advances climate or
                        biodiversity goals. Eligibility is by individual nomination &mdash; you
                        don&rsquo;t simply apply, you&rsquo;re proposed by a government body or
                        approved partner.
                    </p>
                    <h3 id="event-visa">Event Visa</h3>
                    <p>
                        Specifically for visitors attending qualifying international conferences,
                        festivals or sporting events. The validity is tied to the event window,
                        and the application channel is usually the event organiser, not a travel
                        agency.
                    </p>
                    <h3 id="job-seeker-2026">Job Seeker Visa &mdash; no sponsor required</h3>
                    <p>
                        A 60, 90 or 120-day single-entry visa for skilled professionals (MoHRE
                        skill levels 1&ndash;3) and graduates from top-tier universities to enter
                        the UAE and look for work without an employer sponsor up front. We have a
                        dedicated guide for this category &mdash;
                        <a href="../uae-job-seeker-visa">UAE Job Seeker Visa requirements &amp; cost</a>.
                    </p>

                    <h2 id="golden-visa">4. The Golden Visa &mdash; 2026 expansion</h2>
                    <p>
                        The Golden Visa remains the highest-tier UAE residence: 10 years, renewable,
                        with the ability to sponsor family. New 2026 categories include:
                    </p>
                    <ul>
                        <li><strong>Nurses &amp; teachers</strong> &mdash; recognising long-term service in the UAE (typically 15+ years).</li>
                        <li><strong>Humanitarian contributors</strong> &mdash; for individuals who have made significant charitable impact or donations.</li>
                        <li><strong>Content creators</strong> &mdash; a structured pathway for influencers and digital artists through Creators HQ.</li>
                    </ul>
                    <p>
                        The classic eligibility tracks (investors, top-paid professionals, exceptional
                        talents, top-ranking students, frontline heroes) all continue. Each track
                        has its own document set and ICP nomination process. We have a dedicated
                        page for the full breakdown &mdash;
                        <a href="../uae-golden-visa">UAE Golden Visa eligibility &amp; cost</a>.
                    </p>
                    <div class="article-callout article-callout--accent">
                        <strong>Cost reference.</strong>
                        Property-investor track: total cost approximately
                        <span class="price-pill">AED 9,500&ndash;10,500</span> (visa fee + DLD fees + medical + Emirates ID).
                        Professional / specialist tracks: total cost approximately
                        <span class="price-pill">AED 4,000&ndash;4,800</span>.
                    </div>

                    <h2 id="checklist">5. Quick application checklist for 2026</h2>
                    <p>
                        Before you hit submit, make sure you have these specifically-2026
                        requirements ready:
                    </p>
                    <ul>
                        <li><strong>Passport cover-page scan.</strong> A scan of the outside front cover of your passport is now mandatory in addition to the bio-data and address pages.</li>
                        <li><strong>Travel health insurance.</strong> A valid policy covering the entire stay duration is now expected at the border. Basic 30-day cover starts at AED 40&ndash;60.</li>
                        <li><strong>Financial proof for long-stay visas.</strong> The 5-year multi-entry tourist visa requires a 6-month bank statement showing a minimum balance of around USD 4,000.</li>
                        <li><strong>Recent photo.</strong> Passport-size, white background, taken within the last 6 months. Face should occupy 70&ndash;80% of the frame.</li>
                    </ul>

                    <h2 id="visa-fees">UAE visit visa fee guide &mdash; 2026</h2>
                    <p>
                        Fees vary slightly by application channel (ICP or GDRFA portal direct, an
                        airline like Emirates / Etihad / flydubai / Air Arabia, or a travel agency
                        like Arihant Travel). The table below reflects typical 2026 ranges.
                    </p>

                    <div class="table-responsive my-4">
                        <table class="table table-bordered bg-white shadow-sm">
                            <thead style="background:var(--primary); color:#fff;">
                                <tr><th>Visa type</th><th>Entry</th><th>Stay</th><th>Fee (AED)</th><th>Fee (USD)</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>Transit</td><td>Single</td><td>48 hours</td><td>Free / AED 40*</td><td>~$10</td></tr>
                                <tr><td>Transit</td><td>Single</td><td>96 hours</td><td>AED 180&ndash;250</td><td>~$49</td></tr>
                                <tr><td>Tourist</td><td>Single</td><td>30 days</td><td>AED 300&ndash;450</td><td>~$80&ndash;120</td></tr>
                                <tr><td>Tourist</td><td>Multiple</td><td>30 days</td><td>AED 650&ndash;800</td><td>~$175&ndash;220</td></tr>
                                <tr><td>Tourist</td><td>Single</td><td>60 days</td><td>AED 500&ndash;650</td><td>~$135&ndash;175</td></tr>
                                <tr><td>Tourist</td><td>Multiple</td><td>60 days</td><td>AED 900&ndash;1,100</td><td>~$245&ndash;300</td></tr>
                                <tr><td>Tourist</td><td>Single</td><td>90 days</td><td>AED 700&ndash;900</td><td>~$190&ndash;245</td></tr>
                                <tr><td>Tourist</td><td>Multiple</td><td>90 days</td><td>AED 1,600&ndash;1,900</td><td>~$435&ndash;520</td></tr>
                                <tr><td>Job seeker</td><td>Single</td><td>60 days</td><td>AED 500&ndash;600</td><td>~$135&ndash;165</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="small text-muted">* The 48-hour transit visa is free when applied for through your airline; AED 40 reflects the agency-processed alternative. &ldquo;Visa change&rdquo; from inside the country (without exiting) typically incurs an additional AED 600&ndash;675.</p>

                    <h2 id="long-term-fees">Long-term &amp; residency fees in 2026</h2>
                    <p>
                        Residency fees include the visa, medical fitness test and 10-year Emirates
                        ID. Typical totals:
                    </p>
                    <ul>
                        <li><strong>10-year Golden Visa, property investor track:</strong> AED 9,500&ndash;10,500 (includes DLD fees).</li>
                        <li><strong>10-year Golden Visa, professional / scientist track:</strong> AED 4,000&ndash;4,800.</li>
                        <li><strong>5-year Green Visa, freelancer / skilled-employee track:</strong> AED 2,500&ndash;3,500.</li>
                        <li><strong>GCC Unified Tourist Visa (new for 2026):</strong> projected USD 90&ndash;130 (AED 330&ndash;480).</li>
                    </ul>

                    <h2 id="overstay-rules">Mandatory overstay &amp; insurance rules</h2>
                    <p>
                        Two updates that catch first-time visitors out:
                    </p>
                    <ul>
                        <li><strong>Standardised overstay fine.</strong> The 10-day grace period has been abolished. Overstaying any visa now costs <strong>AED 50 per day</strong>, charged from the day after expiry. Persistent overstay can lead to detention, deportation and a re-entry ban.</li>
                        <li><strong>Travel health insurance is now expected.</strong> Strictly speaking it&rsquo;s recommended rather than mandatory at point of issuance, but border officers ask for it more than they used to. Basic 30-day cover starts at AED 40&ndash;60.</li>
                    </ul>

                    <h2 id="indian-requirements">Indian citizens &mdash; what to know in 2026</h2>
                    <p>
                        For Indian citizens the UAE has become more accessible than ever in 2026,
                        with three practical pathways depending on what visas you already hold.
                    </p>

                    <h3 id="voa">1. Visa-on-arrival for eligible Indians</h3>
                    <p>
                        The fastest route. You qualify if you hold a regular Indian passport valid
                        for at least 6 months <strong>and</strong> at least one of the following
                        (also valid 6+ months):
                    </p>
                    <ul>
                        <li>A US visit visa or US Green Card</li>
                        <li>A UK residence permit</li>
                        <li>An EU / Schengen residence permit</li>
                    </ul>
                    <p>
                        Duration is 14 days (single entry), extendable once by 14 more days.
                        Estimated fee: AED 100&ndash;120 (about USD 27&ndash;33).
                    </p>

                    <h3 id="prearranged">2. Pre-arranged tourist visas (the standard route)</h3>
                    <p>
                        If you don&rsquo;t qualify for VoA, you apply in advance through a travel
                        agency, an airline (Emirates, Etihad, flydubai, Air Arabia) or a hotel.
                        Typical 2026 pricing for Indian passport holders:
                    </p>
                    <ul>
                        <li><strong>30-day single entry:</strong> AED 300&ndash;450 &mdash; standard holidays.</li>
                        <li><strong>60-day single entry:</strong> AED 500&ndash;650 &mdash; family visits, longer trips.</li>
                        <li><strong>30 / 60-day multiple entry:</strong> AED 650&ndash;1,100 &mdash; useful when chaining a UAE trip with Oman or Saudi.</li>
                    </ul>

                    <h3 id="five-year">3. The 5-year multi-entry tourist visa for frequent visitors</h3>
                    <p>
                        A self-sponsored visa for frequent visitors. No UAE-based sponsor required.
                        Stay up to 90 days per visit, extendable for another 90 (max 180 days per
                        year). Mandatory financial proof: 6-month bank statement showing a minimum
                        balance of <strong>USD 4,000</strong> (about ₹3.3 lakh). Estimated total
                        cost: AED 650&ndash;800, excluding any refundable security deposit some
                        portals may require.
                    </p>

                    <h2 id="document-checklist">Required documents checklist</h2>
                    <p>
                        For a 3&ndash;5 working day turnaround, prepare high-quality digital scans
                        of:
                    </p>
                    <ul>
                        <li><strong>Passport pages.</strong> Bio-data page (front), address page (back), and the outside front cover (newly mandatory in 2026). Passport must be valid 6+ months from your travel date.</li>
                        <li><strong>Photograph.</strong> Recent passport-size colour photo, white background, face occupying 70&ndash;80% of the frame.</li>
                        <li><strong>Travel proof.</strong> Confirmed return flight ticket, hotel voucher, or a host&rsquo;s Emirates ID and invitation letter if you&rsquo;re staying with family.</li>
                        <li><strong>Insurance &amp; financial.</strong> Travel insurance with at least USD 30,000 emergency medical cover, and a recent bank statement showing AED 5,000+ balance for 60 / 90-day visas.</li>
                    </ul>

                    <h2 id="next-steps">Next steps</h2>
                    <p>
                        For most visitors the right starting point is a tourist visa &mdash;
                        <a href="../uae-visa">our UAE visa overview page</a> covers every type
                        we process with current pricing and a free document pre-check. If
                        you&rsquo;re a frequent visitor or planning to live or work in the UAE,
                        explore the dedicated guides:
                    </p>
                    <ul>
                        <li><a href="../uae-job-seeker-visa">UAE Job Seeker Visa &mdash; eligibility, duration, cost</a></li>
                        <li><a href="../uae-green-visa">UAE Green Residence Visa &mdash; 5-year, no employer needed</a></li>
                        <li><a href="../uae-golden-visa">UAE Golden Visa &mdash; 10-year residence, all eligibility tracks</a></li>
                        <li><a href="../uae-family-visa-dubai">UAE Family Visa &mdash; sponsor your spouse, children or parents</a></li>
                    </ul>

                </article>
            </div>

            <!-- Sticky TOC + sidebar CTAs ----------------------------------- -->
            <aside class="col-lg-4">
                <nav class="toc d-none d-lg-block" aria-label="On this page">
                    <p class="toc__title">On this page</p>
                    <ol>
                        <li><a href="#gcc-unified-visa">GCC Unified Tourist Visa</a></li>
                        <li><a href="#updated-visit-visas">Visit visas refreshed</a></li>
                        <li><a href="#niche-visas">New niche categories</a></li>
                        <li><a href="#golden-visa">Golden Visa expansion</a></li>
                        <li><a href="#checklist">2026 application checklist</a></li>
                        <li><a href="#visa-fees">Visit visa fee guide</a></li>
                        <li><a href="#long-term-fees">Long-term &amp; residency fees</a></li>
                        <li><a href="#overstay-rules">Overstay &amp; insurance rules</a></li>
                        <li><a href="#indian-requirements">Indian citizens &mdash; pathways</a></li>
                        <li><a href="#document-checklist">Documents checklist</a></li>
                        <li><a href="#next-steps">Next steps &amp; related guides</a></li>
                    </ol>
                </nav>

                <div class="card border-0 shadow-sm mt-4" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                    <div class="card-body p-4 text-center">
                        <i class="fab fa-whatsapp fa-3x mb-3"></i>
                        <h3 class="h5 text-white">Talk to a UAE visa expert</h3>
                        <p class="mb-3" style="opacity:0.9;">Free document review. No obligation.
                            Real human on UAE time.</p>
                        <a href="https://wa.me/971585945007?text=I%20have%20a%20question%20about%20UAE%20visa%202026" target="_blank" rel="noopener"
                           class="btn btn-whatsapp w-100 rounded-pill py-2">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
                        </a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Read next</h3>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-2"><a href="../uae-visa">UAE visa overview &mdash; all types</a></li>
                            <li class="mb-2"><a href="../uae-job-seeker-visa">Job seeker visa</a></li>
                            <li class="mb-2"><a href="../uae-green-visa">Green residence visa</a></li>
                            <li class="mb-2"><a href="../uae-golden-visa">Golden visa</a></li>
                            <li><a href="../uae-family-visa-dubai">Family / dependent visa</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- ===== CTA band ===== -->
<section class="cta-band">
    <div class="container">
        <h2 class="mb-3">Apply for your UAE visa with a UAE-based team</h2>
        <p class="mb-4" style="opacity:0.9;">Free document review. Real human on UAE time. Most
            tourist visas approved in 3&ndash;4 working days.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20visa" target="_blank" rel="noopener"
               class="btn btn-whatsapp rounded-pill px-4 py-3">
                <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
            </a>
            <a href="../uae-visa" class="btn btn-outline-light rounded-pill px-4 py-3">
                <i class="fas fa-passport me-2"></i> See all UAE visa options
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
