<?php
// =============================================================================
//  UAE VISA — content-first long-form page
//  Rewritten 2026-05 to maximise informational ranking and expand coverage
//  beyond tourist visas to: transit, 5-year multi-entry, GCC resident, job
//  seeker, green, golden and family/dependent visas. Uses design-system
//  components (.page-section, .article-prose, .toc, .article-callout).
// =============================================================================

// ---------------------------------------------------------------------------
// 1. SEO VARIABLES
// ---------------------------------------------------------------------------
// Title rewritten 2026-06-15 after competitor benchmarking (visitdubai.com, akbartravels.com, uaevisaonline.com).
// Added "Apply Online", "24-48 hr Express", "A2A Extension" — three keyword clusters competitors rank for but we didn't target.
$pageTitle       = "UAE Visa Online Apply 2026 — Tourist, Transit, A2A Extension | 24-48 hr Express";
$pageDescription = "Apply UAE visa online 2026 — 30/60-day tourist (single & multi-entry), 14-day, 96-hr transit, A2A extension, GCC, Golden, Green & family visas. 24-48 hr express. From AED 200.";
$pageKeywords    = "UAE visa online, apply UAE visa online, UAE visa application, UAE visa for Indians, UAE tourist visa 2026, Dubai visa, 14 days UAE visa, 30 day UAE visa, 30 days single entry UAE visa, 30 days multiple entry UAE visa, 60 day UAE visa, 60 days single entry UAE visa, 60 days multiple entry UAE visa, 90 days UAE visa, 5 year UAE visa, UAE transit visa, 48 hour transit visa, 96 hour transit visa, UAE A2A visa, A2A visa extension UAE, UAE visa extension inside country, UAE express visa, UAE visa 24 48 hours, UAE job seeker visa, UAE green visa, UAE golden visa, UAE family visa, UAE visit visa for parents, GCC resident e-visa, UAE visa documents, UAE visa cost, UAE visa overstay fine, ICA, GDRFA, UAE multi entry visa, UAE visa status check, countries eligible for UAE visa";
$pageCanonical   = "https://arihantlink.com/uae-visa";
$currentPage     = "uae-visa";

// ---------------------------------------------------------------------------
// 2. HERO / BREADCRUMB
// ---------------------------------------------------------------------------
$pageHeading            = "UAE Visa Services for Indians, NRIs & GCC Residents";
$breadcrumbCategory     = "Services";
$breadcrumbCategoryLink = "/#ourservices";
$breadcrumbBg           = "img/UAE-tourist-visa.webp";
$breadcrumbOverlay      = false;

// ---------------------------------------------------------------------------
// 3. SCHEMA — Service + Article + FAQPage + BreadcrumbList
//     Article schema added for E-E-A-T; FAQ expanded to cover all visa types.
// ---------------------------------------------------------------------------
$schemaMarkup = '
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "UAE Visa Processing",
    "alternateName": ["Dubai Visa Processing", "UAE Tourist Visa Services"],
    "description": "Full UAE visa processing for Indian, GCC-resident and NRI travellers. Tourist (30/60-day), transit, 5-year multi-entry, GCC e-visa, job seeker, green and family visa categories handled with document pre-check and WhatsApp support.",
    "serviceType": "Visa Processing",
    "provider": {
      "@type": "TravelAgency",
      "name": "Arihant Travel",
      "url": "https://arihantlink.com",
      "telephone": "+971585945007",
      "address": {"@type": "PostalAddress", "addressCountry": "AE", "addressLocality": "Sharjah"}
    },
    "areaServed": {"@type": "Country", "name": "United Arab Emirates"},
    "offers": [
      {"@type": "Offer", "name": "30-Day UAE Tourist Visa",  "description": "Single entry tourist visa, 30-day stay, extendable.", "price": "350", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "60-Day UAE Tourist Visa",  "description": "Multiple entry tourist visa, 60-day stay, extendable.", "price": "550", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "UAE Transit Visa 96-Hour", "description": "Layover visa for travellers transiting through UAE.",     "price": "250", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "GCC Resident E-Visa",      "description": "30-day e-visa for residents of any GCC country.",        "price": "350", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "5-Year Multi-Entry Visa",  "description": "Long-stay multi-entry tourist visa, 90 days per visit.", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "UAE Job Seeker Visa",      "description": "60/90/120-day visa for highly-skilled professionals seeking employment in UAE.", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "UAE Green Residence Visa", "description": "5-year residence visa for skilled professionals, freelancers and investors without an employer sponsor.", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "UAE Family / Dependent Visa", "description": "Sponsor a spouse, child or parent on a UAE residence visa.", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "UAE A2A Visa Extension 60-Day",  "description": "Apply-To-Apply (A2A) inside-country visa extension for 60 additional days without leaving the UAE.", "price": "1500", "priceCurrency": "AED", "availability": "https://schema.org/InStock"},
      {"@type": "Offer", "name": "UAE Express Visa 24-48 hour",    "description": "Fast-track UAE tourist visa processing in 24 to 48 hours for urgent travel.", "price": "650", "priceCurrency": "AED", "availability": "https://schema.org/InStock"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "UAE Visa for Indians 2026 — Tourist, Transit, Long-Stay & Residence Options",
    "description": "Complete UAE visa guide covering every visa type: tourist (30/60-day), 96-hour transit, 5-year multi-entry, GCC resident e-visa, job seeker, green residence, golden visa and family sponsorship.",
    "author": {"@type": "Organization", "name": "Arihant Travel UAE Visa Desk", "url": "https://arihantlink.com"},
    "publisher": {
      "@type": "TravelAgency",
      "name": "Arihant Travel",
      "logo": {"@type": "ImageObject", "url": "https://arihantlink.com/img/logo.png"}
    },
    "datePublished": "2024-01-15",
    "dateModified": "' . date('Y-m-d') . '",
    "mainEntityOfPage": {"@type": "WebPage", "@id": "https://arihantlink.com/uae-visa"},
    "image": "https://arihantlink.com/img/UAE-tourist-visa.webp"
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home",     "item": "https://arihantlink.com"},
      {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://arihantlink.com/#ourservices"},
      {"@type": "ListItem", "position": 3, "name": "UAE Visa", "item": "https://arihantlink.com/uae-visa"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {"@type": "Question", "name": "How long does a UAE visa take to process?", "acceptedAnswer": {"@type": "Answer", "text": "A standard UAE tourist visa is processed in 3–4 working days. Transit visas take 2–3 days. GCC resident e-visas are usually approved in 24–48 hours. Express processing is available on request for urgent travel."}},
      {"@type": "Question", "name": "How much does a UAE tourist visa cost in 2026?", "acceptedAnswer": {"@type": "Answer", "text": "A 30-day single-entry tourist visa starts at AED 350 (about INR 7,900). A 60-day multiple-entry visa starts at AED 550 (about INR 12,500). A 96-hour transit visa starts at AED 250. Final price depends on nationality and processing speed."}},
      {"@type": "Question", "name": "Can Indians get a UAE visa on arrival?", "acceptedAnswer": {"@type": "Answer", "text": "As a general rule no. Indian passport holders need a pre-arranged UAE tourist visa. The exceptions are Indians who hold a valid US visa, UK visa, EU Schengen visa or a US Green Card — they may be eligible for visa on arrival or e-visa with reduced documentation."}},
      {"@type": "Question", "name": "Is the UAE 5-year multiple entry visa still available?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. The 5-year multi-entry tourist visa allows multiple entries with a stay of up to 90 consecutive days per visit (extendable by 90 more from inside the UAE). It is ideal for frequent business travellers, family visits and long stays."}},
      {"@type": "Question", "name": "What is the UAE Job Seeker Visa?", "acceptedAnswer": {"@type": "Answer", "text": "The UAE Job Seeker Visa is a 60, 90 or 120-day single-entry visa for highly skilled professionals (typically classified under occupation skill levels 1–3 by the UAE Ministry of Human Resources) who wish to enter the UAE to attend interviews and explore employment, without needing an employer sponsor."}},
      {"@type": "Question", "name": "What is the UAE Green Residence Visa?", "acceptedAnswer": {"@type": "Answer", "text": "The UAE Green Visa is a 5-year residence visa for skilled employees, freelancers, self-employed professionals and investors. Unlike the standard work visa, it does not require an employer sponsor and allows the holder to sponsor parents and children up to 25 years old."}},
      {"@type": "Question", "name": "Can I sponsor my parents on a UAE visa from India?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. UAE residents can sponsor their parents on either a 60-day visit visa or a 1-year residence visa, subject to minimum salary requirements and proof of accommodation. Many Indian families use the 60-day visit visa for short visits and the residence visa for long stays."}},
      {"@type": "Question", "name": "Can I extend my UAE tourist visa from inside the UAE?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Both 30-day and 60-day tourist visas can be extended once for an additional 30 days from inside the UAE. The extension must be applied for before the visa expires. After the extension you should either exit the country or convert the visa as appropriate."}},
      {"@type": "Question", "name": "What is the UAE visa overstay fine?", "acceptedAnswer": {"@type": "Answer", "text": "The UAE visa overstay fine is AED 50 per day after the visa expiry date, with no grace period for tourist visas as of recent updates. Persistent overstay can lead to detention, deportation and a re-entry ban. Always exit, extend or change your visa status before the expiry date."}},
      {"@type": "Question", "name": "What documents are required for UAE visa for an Indian passport?", "acceptedAnswer": {"@type": "Answer", "text": "For an Indian passport: a clear passport scan valid for at least 6 months, a recent passport photo on a white background, confirmed return tickets, hotel booking or host letter, and (for some applicants) a 3-month bank statement. Married women travelling alone may be asked for a marriage certificate."}},
      {"@type": "Question", "name": "What is the difference between ICA and GDRFA for UAE visas?", "acceptedAnswer": {"@type": "Answer", "text": "ICA (Federal Authority for Identity, Citizenship, Customs and Port Security) handles visas for all emirates except Dubai. GDRFA (General Directorate of Residency and Foreigners Affairs) handles visas for Dubai. We choose the appropriate channel automatically based on your travel and where you are landing."}},
      {"@type": "Question", "name": "How can I check my UAE visa application status?", "acceptedAnswer": {"@type": "Answer", "text": "Once your visa has been submitted you can check status on the ICA Smart Services portal or the GDRFA Dubai smart app using your application reference number or passport number. Clients of Arihant Travel also receive WhatsApp updates at every stage."}}
    ]
  }
]
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- =========================================================================
     QUICK-FACTS BAND — short, dark, brand-coloured trust strip
     ========================================================================= -->
<section class="trust-band">
    <div class="container">
        <div class="row g-4 text-center text-md-start align-items-center">
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fas fa-globe me-2"></i> 80+ Countries</h3>
                <p class="mb-0 small">Visa on arrival in UAE</p>
            </div>
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fas fa-clock me-2"></i> 3&ndash;4 Days</h3>
                <p class="mb-0 small">Standard tourist visa</p>
            </div>
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fas fa-bolt me-2"></i> 24&ndash;48 Hours</h3>
                <p class="mb-0 small">GCC resident e-visa</p>
            </div>
            <div class="col-md-3">
                <h3 class="h6 mb-1"><i class="fas fa-check-circle me-2"></i> 98%+ Approval</h3>
                <p class="mb-0 small">First-time success rate</p>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     INTRO + STICKY TABLE OF CONTENTS
     This is the structural change: a sidebar TOC keeps the long page navigable
     and signals "comprehensive resource" to Google.
     ========================================================================= -->
<section class="page-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article-prose">
                    <div class="article-meta">
                        <span><i class="far fa-calendar-alt"></i> Last updated <?php echo date('F Y'); ?></span>
                        <span><i class="far fa-user"></i> Written by Arihant Travel UAE Visa Desk</span>
                        <span><i class="fas fa-shield-alt"></i> UAE-licensed travel agency, Sharjah</span>
                    </div>

                    <p class="lead" style="font-size: 1.15rem; color: var(--text-light);">
                        We process every kind of UAE visa &mdash; tourist, transit, long-stay multi-entry,
                        GCC resident e-visa, job seeker, green residence and family sponsorship &mdash;
                        for travellers from India, the GCC, Africa, the UK and beyond. This page is the
                        full reference: pick your visa type, see exactly what it costs, what documents
                        you&rsquo;ll need, and how to apply. If you prefer to talk to a person,
                        <a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20visa" target="_blank" rel="noopener">WhatsApp our visa desk</a>
                        directly.
                    </p>

                    <p>
                        The United Arab Emirates is one of the world&rsquo;s most-visited destinations,
                        welcoming over 17 million visitors a year to Dubai, Abu Dhabi, Sharjah and Ras
                        Al Khaimah. Whether you&rsquo;re visiting for a holiday, a layover, a long
                        family stay, a job interview or to live and work, there is a UAE visa that
                        fits &mdash; and getting it right the first time is what avoids fines, missed
                        flights and rejected re-applications.
                    </p>

                    <div class="article-callout">
                        <strong>What we do for you.</strong> Document pre-check before you pay (free),
                        application submission to ICA or GDRFA, real-time status updates on WhatsApp,
                        and visa delivery as a print-ready PDF to your inbox. We handle Indian
                        passport applications most often, but we file for every nationality.
                    </div>

                    <h2 id="do-i-need-a-visa">Do you actually need a UAE visa?</h2>
                    <p>
                        Your visa requirement depends on your passport, not your origin city. There
                        are three broad groups:
                    </p>
                    <ul>
                        <li><strong>GCC nationals</strong> (Saudi Arabia, Kuwait, Bahrain, Qatar, Oman) enter the UAE without any visa &mdash; just a passport or national ID at the border.</li>
                        <li><strong>Visa-on-arrival passports</strong> (over 80 countries including the EU, US, UK, Australia, Canada, Japan, South Korea, Singapore, Malaysia, New Zealand) get a free 30-day visa stamped on entry. No paperwork in advance.</li>
                        <li><strong>Pre-arranged visa required</strong> &mdash; this includes India, Pakistan, Bangladesh, Sri Lanka, Nepal, the Philippines and most African nations. You must apply <em>before</em> you travel; airlines won&rsquo;t board you without a confirmed visa.</li>
                    </ul>
                    <p>
                        There is one important exception for Indian passport holders: if you hold a
                        valid US visa, UK visa, EU Schengen visa or a US Green Card, you may be
                        eligible for a UAE visa on arrival or a special 14-day e-visa with reduced
                        documentation. We can verify your eligibility in 5 minutes &mdash; just send
                        us a passport copy and the visa pages of the country you already hold.
                    </p>

                    <h2 id="tourist-visa">The UAE Tourist Visa &mdash; 30 day and 60 day</h2>
                    <p>
                        This is the visa most travellers need. It covers leisure, family visits,
                        short business meetings, conferences and shopping trips. It comes in two
                        durations &mdash; 30 days and 60 days &mdash; and both can be extended once
                        from inside the UAE for another 30 days.
                    </p>

                    <h3 id="tourist-30">30-day single-entry tourist visa</h3>
                    <p>
                        Best for a holiday of 1&ndash;4 weeks where you don&rsquo;t plan to leave the
                        UAE during the trip. Single entry means you can&rsquo;t fly out to Oman or
                        Saudi mid-trip and come back on the same visa. Validity is 60 days from issue
                        to enter the UAE, and 30 days of stay starting from your entry date.
                    </p>
                    <p>
                        <span class="price-pill">From AED 350 <small>(approx. INR 7,900)</small></span>
                        &nbsp;Processing 3&ndash;4 working days.
                    </p>

                    <h3 id="tourist-60">60-day multiple-entry tourist visa</h3>
                    <p>
                        Our most popular option for Indian families. 60 days of stay, multiple
                        entries, extendable by another 30 days &mdash; so you can comfortably plan a
                        Dubai trip with a side hop to Oman or Saudi Arabia, or a longer family
                        visit. It also gives you breathing room if your return flight gets pushed.
                    </p>
                    <p>
                        <span class="price-pill">From AED 550 <small>(approx. INR 12,500)</small></span>
                        &nbsp;Processing 3&ndash;4 working days.
                    </p>

                    <div class="article-callout article-callout--accent">
                        <strong>Which one should I pick?</strong> If you&rsquo;re planning more than
                        14 days in the UAE, or you might leave and re-enter, the 60-day multi-entry
                        is almost always better value &mdash; the price difference is small, the
                        flexibility is large.
                    </div>

                    <h2 id="transit-visa">UAE Transit Visa &mdash; 48 and 96 hour</h2>
                    <p>
                        If you have a layover at Dubai or Abu Dhabi airport long enough to leave the
                        terminal, you can apply for a transit visa to step out and see the city
                        instead of waiting at the gate. Two durations are available:
                    </p>
                    <ul>
                        <li><strong>48-hour transit visa &mdash;</strong> free if applied for through your airline (Emirates, Etihad, flydubai, Air Arabia), or <span class="price-pill">AED 200</span> if processed through us. Single entry, no extension.</li>
                        <li><strong>96-hour transit visa &mdash;</strong> <span class="price-pill">From AED 250</span>. Single entry, valid for 14 days from issue, 96 hours of stay from entry.</li>
                    </ul>
                    <p>
                        Transit visas need an onward ticket out of the UAE within the validity
                        window. Hotel booking is required for the 96-hour option but optional for
                        the 48-hour. We process transit visas in 2&ndash;3 working days &mdash; if
                        your layover is sooner than that, message us on WhatsApp and we&rsquo;ll
                        tell you immediately whether express processing is feasible.
                    </p>

                    <h2 id="multi-entry">5-Year Multi-Entry Visa &mdash; for frequent visitors</h2>
                    <p>
                        Introduced as part of the UAE&rsquo;s long-term residency reforms, the
                        5-year multi-entry tourist visa lets you enter and exit as many times as you
                        like over five years, with up to <strong>90 consecutive days of stay per
                        visit</strong> (extendable by another 90). It&rsquo;s designed for business
                        travellers, NRIs with family in the UAE, and frequent visitors who want to
                        stop applying for individual visas every trip.
                    </p>
                    <p>
                        Eligibility is based on financial soundness rather than nationality. Typical
                        requirements include a passport with at least 6 months validity, a bank
                        statement showing a minimum balance of around USD 4,000 for the previous
                        6 months, and a clean travel record. We confirm exact requirements case by
                        case &mdash; share your passport copy and we&rsquo;ll come back with a
                        precise quote.
                    </p>

                    <h2 id="gcc-evisa">GCC Resident E-Visa &mdash; 24 to 48 hour processing</h2>
                    <p>
                        If you live in Saudi Arabia, Kuwait, Bahrain, Qatar or Oman on a valid
                        residence permit (iqama), you can apply for the UAE e-visa regardless of
                        your nationality &mdash; Indian, Pakistani, Filipino, Egyptian, anyone. This
                        is the fastest visa we process: typical turnaround is 24&ndash;48 hours, and
                        the documentation is light (passport, residence permit, photo and ticket).
                    </p>
                    <p>
                        <span class="price-pill">From AED 350 <small>(approx. INR 6,900)</small></span>
                        &nbsp;30-day stay, single entry.
                    </p>

                    <h2 id="job-seeker">UAE Job Seeker Visa &mdash; come and look for work</h2>
                    <p>
                        Launched as part of the UAE&rsquo;s entry permit reforms, the job seeker
                        visa is for highly skilled professionals who want to enter the UAE to attend
                        interviews and explore employment, without needing an employer sponsor up
                        front. You apply for it from your home country (typically India), enter the
                        UAE on it, and accept a job offer once you find one.
                    </p>
                    <p>
                        The job seeker visa is available in three durations: <strong>60, 90 or 120
                        days</strong>, single entry. Eligibility is restricted to applicants
                        classified under the UAE Ministry of Human Resources&rsquo; skill levels
                        1&ndash;3 (broadly: managers, specialists, technicians and skilled
                        graduates), and graduates from the world&rsquo;s top 500 universities or
                        UAE-recognised institutions in the past two years.
                    </p>
                    <p>
                        We help you assemble the supporting documentation (CV, attested degree
                        certificates, financial proof) and file the application through the
                        appropriate channel. Pricing varies by duration &mdash; ask for a personalised
                        quote.
                    </p>

                    <h2 id="green-visa">UAE Green Residence Visa &mdash; 5-year, no employer needed</h2>
                    <p>
                        The Green Visa is a 5-year UAE residence visa designed for people who
                        don&rsquo;t fit the traditional employer-sponsored model: skilled employees
                        on the move, freelancers, self-employed professionals and investors. Three
                        eligibility tracks exist:
                    </p>
                    <ul>
                        <li><strong>Skilled employees</strong> &mdash; valid employment contract, occupation classified at MoHRE skill level 1, 2 or 3, and a minimum monthly salary of AED 15,000.</li>
                        <li><strong>Freelancers / self-employed</strong> &mdash; a freelance permit from MoHRE or a relevant free zone, a bachelor&rsquo;s degree or specialised diploma, and proof of average annual income of AED 360,000 over the past two years (or financial solvency for the duration of the visa).</li>
                        <li><strong>Investors / partners</strong> &mdash; commercial license, board approval if relevant, and proof of investment matching the qualifying threshold.</li>
                    </ul>
                    <p>
                        The Green Visa lets you sponsor your spouse, your children up to 25 years of
                        age, and your parents &mdash; a meaningful upgrade for Indian families used
                        to employer visas that limit dependents. We coordinate with our immigration
                        partner to handle the medical, Emirates ID and EID typing for you.
                    </p>

                    <h2 id="golden-visa">UAE Golden Visa &mdash; 10-year residence</h2>
                    <p>
                        The Golden Visa is a 10-year renewable UAE residence visa for individuals
                        who meet at least one of several distinguished criteria: investors and
                        property owners (typically AED 2 million in real estate), entrepreneurs with
                        an approved start-up, exceptional talents in science, art, sports, medicine
                        or culture, top-ranking students, humanitarian pioneers, frontline heroes
                        and certain skilled professionals.
                    </p>
                    <p>
                        Golden Visa applications are highly individual &mdash; eligibility, document
                        sets, ICP nomination and Emirates ID processing differ for each track. We
                        screen your case for free and connect you with the right specialist within
                        our network. If you&rsquo;ve been told to apply but don&rsquo;t know which
                        track fits you,
                        <a href="https://wa.me/971585945007?text=I%20want%20to%20discuss%20UAE%20Golden%20Visa" target="_blank" rel="noopener">message us with your background</a>
                        and we&rsquo;ll point you in the right direction.
                    </p>

                    <h2 id="family-visa">Family &amp; dependent visa &mdash; sponsor your loved ones</h2>
                    <p>
                        If you live in the UAE on a residence visa (employment, Green or Golden),
                        you can sponsor your immediate family. The most common categories we file:
                    </p>
                    <ul>
                        <li><strong>Spouse residence visa</strong> &mdash; valid attested marriage certificate, sponsor minimum salary AED 4,000 (or AED 3,000 plus accommodation), tenancy contract.</li>
                        <li><strong>Children residence visa</strong> &mdash; valid for sons up to 18 (extendable to 25 if studying), daughters until marriage. Birth certificate, passport, photo, sponsor&rsquo;s salary certificate.</li>
                        <li><strong>Parents residence visa</strong> &mdash; available to UAE residents earning AED 20,000+ a month (or AED 19,000 plus accommodation). One year, renewable. Both parents must be sponsored together unless one has passed away.</li>
                        <li><strong>Visit visa for parents from India</strong> &mdash; if a residence visa isn&rsquo;t practical, the 60-day visit visa is the most popular option. Many Indian families use it twice a year.</li>
                    </ul>
                    <div class="article-callout article-callout--warn">
                        <strong>Heads up.</strong> Family visa rules tighten and loosen periodically.
                        Always confirm the current minimum salary thresholds and accommodation
                        requirements before you start the paperwork. We check the live rules with
                        each application so you don&rsquo;t end up with a rejected file.
                    </div>

                    <!-- ===========================================================
                         A2A VISA EXTENSION — keyword cluster competitors target (uaevisaonline.com,
                         akbartravels.com) that we previously missed. Significant search volume.
                         =========================================================== -->
                    <h2 id="a2a-extension">UAE A2A Visa Extension &mdash; extend without leaving</h2>
                    <p>
                        A2A (Apply-To-Apply, also called "inside-country extension") is the route
                        you take when your current UAE tourist visa is about to expire and you want
                        to <strong>stay on without flying out for a border run</strong>. The UAE allows
                        eligible tourist-visa holders to switch onto a fresh visa from inside the
                        country &mdash; no exit needed, no airport hassle.
                    </p>
                    <p>
                        The standard A2A extension we file:
                    </p>
                    <ul>
                        <li><strong>60-day A2A inside-country visa extension</strong> &mdash; <span class="price-pill">From AED 1,500</span>. Processing 2&ndash;3 working days. Adds 60 more days to your current stay &mdash; no exit needed.</li>
                    </ul>
                    <p>
                        <a href="uae-a2a-visa-extension-60-days" class="btn btn-outline-primary rounded-pill px-4 mt-2"><i class="fas fa-arrow-right me-2"></i>Full A2A 60-day guide</a>
                    </p>
                    <p>
                        A2A must be filed <em>before</em> your current visa expires &mdash; ideally
                        with 5&ndash;7 days&rsquo; buffer. Once expired, the only option is to pay
                        the overstay fine and exit. Our team monitors expiry dates for clients on
                        our roster and flags applications 14 days before they&rsquo;re due.
                    </p>
                    <div class="article-callout">
                        <strong>Who can use A2A?</strong> Tourist visa holders inside the UAE whose
                        original visa hasn&rsquo;t already been extended once (each tourist visa
                        gets one extension). Transit visa holders are not eligible. We confirm
                        eligibility from your passport stamp and visa copy in 10 minutes.
                    </div>

                    <!-- ===========================================================
                         COUNTRIES ELIGIBLE — comprehensive eligibility table.
                         uaevisaonline.com has this as a full section ("Countries Eligible for UAE
                         Visa"); we previously only had a 3-bullet summary in the intro.
                         =========================================================== -->
                    <h2 id="countries-eligible">Countries eligible for UAE visa &mdash; full breakdown</h2>
                    <p>
                        Your nationality decides whether you need a visa at all, whether you can
                        get one on arrival, or whether you must pre-apply. Quick lookup:
                    </p>

                    <h3 id="visa-on-arrival">Visa-on-arrival passports (free, 30 days)</h3>
                    <p>
                        Over 80 nationalities get a free 30-day UAE visa stamped on arrival, no
                        paperwork in advance:
                    </p>
                    <p>
                        <strong>Americas:</strong> USA, Canada, Argentina, Brazil, Chile, Mexico,
                        Uruguay, Honduras, Paraguay.<br>
                        <strong>Europe (all EU + non-EU):</strong> United Kingdom, Ireland,
                        Germany, France, Italy, Spain, Portugal, Netherlands, Belgium,
                        Switzerland, Norway, Sweden, Denmark, Finland, Iceland, Greece, Austria,
                        Andorra, Vatican, San Marino, Monaco, all EU members.<br>
                        <strong>Asia &amp; Pacific:</strong> Japan, South Korea, China, Singapore,
                        Malaysia, Brunei, Hong Kong, Macau, Australia, New Zealand, Maldives.<br>
                        <strong>Russia &amp; CIS:</strong> Russia, Ukraine, Kazakhstan, Belarus.<br>
                        <strong>Middle East:</strong> Israel, Lebanon, Jordan (varies).
                    </p>

                    <h3 id="gcc-nationals">GCC nationals (no visa needed at all)</h3>
                    <p>
                        Citizens of Saudi Arabia, Kuwait, Bahrain, Qatar and Oman enter the UAE
                        on their passport or national ID alone &mdash; no visa, no application,
                        no fee.
                    </p>

                    <h3 id="gcc-residents">GCC residents (e-visa, 24&ndash;48 hours)</h3>
                    <p>
                        If you <em>live</em> in any GCC country on a valid residence permit
                        (iqama) but hold an Indian, Pakistani, Filipino, Egyptian or other
                        passport, you qualify for the <strong>GCC Resident E-Visa</strong>
                        regardless of your nationality. Processing 24&ndash;48 hours, validity
                        30 days. Cheapest and fastest route into the UAE for most Asian
                        passport-holding GCC residents.
                    </p>

                    <h3 id="pre-arranged">Passports that must pre-apply (visa in advance)</h3>
                    <p>
                        If you hold any of these passports, you must apply for a UAE visa
                        <em>before</em> you travel &mdash; airlines won&rsquo;t board you
                        without a confirmed e-visa:
                    </p>
                    <ul>
                        <li><strong>South Asia:</strong> India, Pakistan, Bangladesh, Sri Lanka, Nepal, Afghanistan, Bhutan.</li>
                        <li><strong>South-East Asia:</strong> Philippines, Vietnam, Cambodia, Laos, Myanmar, Indonesia, Thailand (varies).</li>
                        <li><strong>Africa:</strong> Most African nations including Egypt, Kenya, Nigeria, Ghana, Tanzania, Uganda, Ethiopia, Sudan.</li>
                        <li><strong>South America (partial):</strong> Bolivia, Colombia, Ecuador, Peru, Venezuela.</li>
                        <li><strong>Middle East:</strong> Iran, Iraq, Syria, Yemen.</li>
                        <li><strong>Other:</strong> Mongolia, Tajikistan, Turkmenistan, Uzbekistan.</li>
                    </ul>

                    <h3 id="indian-passport-exception">Indian passport holders &mdash; the visa-on-arrival exception</h3>
                    <p>
                        Indians who hold one of the following can also get UAE visa-on-arrival
                        or a special 14-day e-visa with reduced documentation:
                    </p>
                    <ul>
                        <li>A valid US visa</li>
                        <li>A valid UK visa or UK residence</li>
                        <li>A valid EU Schengen visa</li>
                        <li>A US Green Card</li>
                    </ul>
                    <p>
                        Send us a passport scan and a copy of the qualifying visa &mdash; we
                        confirm eligibility in 5 minutes.
                    </p>

                    <h2 id="documents">Documents required &mdash; by passport</h2>
                    <p>
                        UAE visa applications all need a baseline of documents, plus extras based on
                        your passport and the type of visa. Here&rsquo;s the working baseline for a
                        tourist visa:
                    </p>
                    <ul>
                        <li>Clear colour scan of passport (front + back), valid at least 6 months from your travel date.</li>
                        <li>Recent passport-size photograph, white background, JPEG, taken within 6 months.</li>
                        <li>Confirmed return flight tickets in your name.</li>
                        <li>Hotel booking confirmation (or host letter if staying with family in the UAE).</li>
                    </ul>
                    <p>
                        For Indian passport holders we usually also need a 3-month bank statement
                        showing reasonable funds, a salary slip or NOC if employed, and a marriage
                        certificate for women travelling alone (an old immigration convention that
                        is still asked for in some cases). For Pakistani passport holders the bar is
                        higher: 6-month bank statement, property/asset proof, and previous US/UK/
                        Schengen visa copies if held. For GCC residents the documentation is light
                        &mdash; passport, residence permit, photo and ticket.
                    </p>
                    <p>
                        We send you a personalised checklist when you message us, so you don&rsquo;t
                        scramble for documents at the last minute or attach the wrong photo size.
                    </p>

                    <h2 id="how-to-apply">How to apply &mdash; the four steps</h2>
                    <ol>
                        <li><strong>Send your documents</strong> &mdash; passport copy, photo, ticket and any extras &mdash; on WhatsApp or email. We confirm receipt within an hour.</li>
                        <li><strong>Free document review</strong> &mdash; our visa team checks every page against the latest ICA/GDRFA rules and tells you whether anything is missing <em>before</em> you pay.</li>
                        <li><strong>Pay and we file</strong> &mdash; we submit through the appropriate channel (ICA for non-Dubai entry, GDRFA for Dubai). You get a reference number.</li>
                        <li><strong>Visa delivered to your inbox</strong> &mdash; usually 3&ndash;4 working days for tourist visas, 24&ndash;48 hours for GCC e-visas. Print and carry alongside your passport.</li>
                    </ol>

                    <h2 id="rules">UAE visa rules to know before you fly</h2>
                    <p>
                        A few rules trip up first-time applicants more than anything else:
                    </p>
                    <ul>
                        <li><strong>Validity vs stay.</strong> Your visa has a <em>validity</em> (the window within which you must enter the UAE, typically 60 days from issue) and a <em>stay duration</em> (30 or 60 days, counted from the day you actually land). They are not the same.</li>
                        <li><strong>Overstay fine.</strong> AED 50 per day, with no grace period for tourist visas. Persistent overstay can lead to detention, deportation and a re-entry ban.</li>
                        <li><strong>Extensions are once.</strong> Both 30 and 60-day visas can be extended one time, by 30 days, from inside the UAE. You must apply before the original visa expires.</li>
                        <li><strong>Visa runs are risky.</strong> Exiting and re-entering on a fresh tourist visa is technically possible but UAE immigration may refuse entry if they suspect visa abuse. Apply for the right duration up front.</li>
                        <li><strong>Health insurance.</strong> Not strictly mandatory for visa issuance, but increasingly recommended at the border. Carry a printed travel-insurance certificate with at least USD 50,000 medical cover.</li>
                        <li><strong>Visa fees are non-refundable</strong> on rejection per UAE government policy. That&rsquo;s exactly why we pre-check &mdash; rejections are rare when documents are in order, and our pre-check is free.</li>
                    </ul>

                    <h2 id="why-us">Why apply with Arihant Travel</h2>
                    <p>
                        We&rsquo;re a UAE-licensed travel agency physically based in Sharjah &mdash;
                        not a remote agent in India. That matters when something needs escalating
                        with ICA or GDRFA, or when an application needs documents re-uploaded under
                        time pressure. Our visa desk processes applications every working day and
                        keeps the running checklist of which document patterns are getting accepted
                        right now.
                    </p>
                    <p>
                        On top of that:
                    </p>
                    <ul>
                        <li><strong>Free document review</strong> before you pay anything.</li>
                        <li><strong>Real-time WhatsApp updates</strong> at every stage &mdash; not an email a week later.</li>
                        <li><strong>One transparent quote</strong> &mdash; visa government fee + service fee, no surprises.</li>
                        <li><strong>98%+ first-time approval</strong> on Indian passports because we don&rsquo;t submit when documents are weak.</li>
                        <li><strong>Founded in 2022 by Shweta &amp; Neeraj Jain.</strong> 2,000+ families served, 4.8&star; on Google.</li>
                    </ul>
                </article>
            </div>

            <!-- Sticky table of contents + sidebar CTAs ----------------------- -->
            <aside class="col-lg-4">
                <nav class="toc d-none d-lg-block" aria-label="On this page">
                    <p class="toc__title">On this page</p>
                    <ol>
                        <li><a href="#do-i-need-a-visa">Do you need a UAE visa?</a></li>
                        <li><a href="#tourist-visa">Tourist visa (30 / 60 day)</a></li>
                        <li><a href="#transit-visa">Transit visa (48 / 96 hour)</a></li>
                        <li><a href="#multi-entry">5-year multi-entry visa</a></li>
                        <li><a href="#gcc-evisa">GCC resident e-visa</a></li>
                        <li><a href="#job-seeker">Job seeker visa</a></li>
                        <li><a href="#green-visa">Green residence visa</a></li>
                        <li><a href="#golden-visa">Golden visa</a></li>
                        <li><a href="#family-visa">Family / dependent visa</a></li>
                        <li><a href="#a2a-extension">A2A visa extension</a></li>
                        <li><a href="#countries-eligible">Countries eligible</a></li>
                        <li><a href="#documents">Documents required</a></li>
                        <li><a href="#how-to-apply">How to apply</a></li>
                        <li><a href="#rules">Visa rules to know</a></li>
                        <li><a href="#why-us">Why apply with us</a></li>
                        <li><a href="#fees">Visa fee comparison</a></li>
                        <li><a href="#testimonials">What customers say</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ol>
                </nav>

                <div class="card border-0 shadow-sm mt-4" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                    <div class="card-body p-4 text-center">
                        <i class="fab fa-whatsapp fa-3x mb-3"></i>
                        <h3 class="h5 text-white">Send us your passport copy</h3>
                        <p class="mb-3" style="opacity:0.9;">Free document check. Personalised
                            visa recommendation. Real human, on UAE time.</p>
                        <a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20visa" target="_blank" rel="noopener"
                           class="btn btn-whatsapp w-100 rounded-pill py-2">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
                        </a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">At a glance</h3>
                        <table class="table table-sm mb-0">
                            <tbody>
                                <tr><td>Tourist 30-day</td><td class="text-end fw-semibold">AED 350</td></tr>
                                <tr><td>Tourist 60-day</td><td class="text-end fw-semibold">AED 550</td></tr>
                                <tr><td>Transit 96-hour</td><td class="text-end fw-semibold">AED 250</td></tr>
                                <tr><td>GCC resident e-visa</td><td class="text-end fw-semibold">AED 350</td></tr>
                                <tr><td>A2A 60-day extension</td><td class="text-end fw-semibold">AED 1,500</td></tr>
                                <tr><td>Express 24-48 hr</td><td class="text-end fw-semibold">AED 650</td></tr>
                                <tr><td>5-year multi-entry</td><td class="text-end fw-semibold">On request</td></tr>
                                <tr><td>Job seeker</td><td class="text-end fw-semibold">On request</td></tr>
                                <tr><td>Green residence</td><td class="text-end fw-semibold">On request</td></tr>
                            </tbody>
                        </table>
                        <p class="small text-muted mb-0 mt-2">Government fees + Arihant service fee. Final price confirmed after document review.</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- =========================================================================
     VISA FEE COMPARISON TABLE — kept as a quick-reference, not a primary block
     ========================================================================= -->
<section class="page-section page-section--light" id="fees">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Quick reference</span>
            <h2 class="section-heading__title">UAE visa fee comparison &mdash; 2026</h2>
            <p class="section-heading__lead">All starting prices in AED. Final fee depends on
                nationality and processing speed. Confirm a personalised quote on WhatsApp.</p>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover bg-white shadow-sm">
                <thead style="background: var(--primary); color:#fff;">
                    <tr>
                        <th>Visa type</th>
                        <th>Validity</th>
                        <th>Entry</th>
                        <th>Stay per visit</th>
                        <th>Processing</th>
                        <th>From</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>30-day tourist visa</strong></td>
                        <td>60 days from issue</td><td>Single</td><td>30 days</td><td>3&ndash;4 days</td>
                        <td><strong>AED 350</strong></td>
                        <td><a href="https://wa.me/971585945007?text=I%20need%20a%2030-day%20UAE%20tourist%20visa" target="_blank" rel="noopener" class="btn btn-primary btn-sm rounded-pill">Apply</a></td>
                    </tr>
                    <tr>
                        <td><strong>60-day tourist visa</strong> &nbsp;<span class="badge bg-success">Most popular</span></td>
                        <td>60 days from issue</td><td>Multiple</td><td>60 days</td><td>3&ndash;4 days</td>
                        <td><strong>AED 550</strong></td>
                        <td><a href="https://wa.me/971585945007?text=I%20need%20a%2060-day%20UAE%20tourist%20visa" target="_blank" rel="noopener" class="btn btn-primary btn-sm rounded-pill">Apply</a></td>
                    </tr>
                    <tr>
                        <td><strong>48-hour transit visa</strong></td>
                        <td>14 days from issue</td><td>Single</td><td>48 hours</td><td>2&ndash;3 days</td>
                        <td><strong>AED 200</strong></td>
                        <td><a href="https://wa.me/971585945007?text=I%20need%20a%2048-hour%20UAE%20transit%20visa" target="_blank" rel="noopener" class="btn btn-primary btn-sm rounded-pill">Apply</a></td>
                    </tr>
                    <tr>
                        <td><strong>96-hour transit visa</strong></td>
                        <td>14 days from issue</td><td>Single</td><td>96 hours</td><td>2&ndash;3 days</td>
                        <td><strong>AED 250</strong></td>
                        <td><a href="https://wa.me/971585945007?text=I%20need%20a%2096-hour%20UAE%20transit%20visa" target="_blank" rel="noopener" class="btn btn-primary btn-sm rounded-pill">Apply</a></td>
                    </tr>
                    <tr>
                        <td><strong>GCC resident e-visa</strong></td>
                        <td>60 days from issue</td><td>Single</td><td>30 days</td><td>24&ndash;48 hours</td>
                        <td><strong>AED 350</strong></td>
                        <td><a href="https://wa.me/971585945007?text=I%20need%20a%20GCC%20resident%20e-visa" target="_blank" rel="noopener" class="btn btn-primary btn-sm rounded-pill">Apply</a></td>
                    </tr>
                    <tr>
                        <td><strong>5-year multi-entry visa</strong></td>
                        <td>5 years</td><td>Multiple</td><td>90 days (extendable)</td><td>5&ndash;7 days</td>
                        <td>On request</td>
                        <td><a href="https://wa.me/971585945007?text=I%20want%20a%205-year%20UAE%20multi-entry%20visa" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm rounded-pill">Inquire</a></td>
                    </tr>
                    <tr>
                        <td><strong>Job seeker visa</strong></td>
                        <td>60 / 90 / 120 days</td><td>Single</td><td>Up to 120 days</td><td>5&ndash;10 days</td>
                        <td>On request</td>
                        <td><a href="https://wa.me/971585945007?text=I%20want%20a%20UAE%20job%20seeker%20visa" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm rounded-pill">Inquire</a></td>
                    </tr>
                    <tr>
                        <td><strong>Green residence visa</strong></td>
                        <td>5 years</td><td>Multi</td><td>Residence</td><td>2&ndash;4 weeks</td>
                        <td>On request</td>
                        <td><a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20Green%20Visa" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm rounded-pill">Inquire</a></td>
                    </tr>
                    <tr>
                        <td><strong>Golden visa</strong></td>
                        <td>10 years</td><td>Multi</td><td>Residence</td><td>4&ndash;8 weeks</td>
                        <td>On request</td>
                        <td><a href="https://wa.me/971585945007?text=I%20want%20to%20discuss%20UAE%20Golden%20Visa" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm rounded-pill">Inquire</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="small text-muted text-center mt-2">Prices reviewed monthly. UAE government fees can change without prior notice. Last fee check: <?php echo date('d F Y'); ?>.</p>
    </div>
</section>

<!-- =========================================================================
     FAQ — full
     ========================================================================= -->
<section class="page-section" id="faq">
    <div class="container" style="max-width: 880px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">FAQ</span>
            <h2 class="section-heading__title">UAE visa &mdash; frequently asked questions</h2>
            <p class="section-heading__lead">Can&rsquo;t find your answer below?
                <a href="https://wa.me/971585945007?text=I%20have%20a%20question%20about%20UAE%20visa" target="_blank" rel="noopener">WhatsApp our visa desk</a>
                &mdash; replies usually within an hour.</p>
        </div>

        <div class="accordion faq-accordion" id="faqAccordion">
            <?php
            $faqs = [
                ['How long does a UAE visa take to process?', 'A standard UAE tourist visa is processed in <strong>3&ndash;4 working days</strong>. Transit visas take 2&ndash;3 days. GCC resident e-visas are usually approved in <strong>24&ndash;48 hours</strong>. <strong>Express 24&ndash;48 hour processing</strong> is available on request from <strong>AED 650</strong> when travel is urgent.'],
                ['What is the UAE A2A visa extension?', 'A2A (Apply-To-Apply) is the <strong>inside-country visa extension route</strong> for tourist-visa holders already in the UAE. It adds <strong>60 days</strong> to your current stay <strong>without leaving the UAE</strong> for a border run. Pricing starts at <strong>AED 1,500</strong>. The application must be filed before your current visa expires &mdash; ideally 5&ndash;7 days before. See our <a href="uae-a2a-visa-extension-60-days">full A2A 60-day guide</a>.'],
                ['Which countries are eligible for UAE visa on arrival?', 'Over 80 nationalities get a free 30-day UAE visa on arrival, including the <strong>USA, UK, EU members, Canada, Australia, Japan, South Korea, China, Singapore, Malaysia, Brunei, Hong Kong, New Zealand, Russia, Ukraine and Maldives</strong>. GCC nationals (Saudi, Kuwait, Bahrain, Qatar, Oman) need no visa at all. Indian, Pakistani, Bangladeshi, Sri Lankan and Filipino passports must pre-apply &mdash; we file these every working day.'],
                ['How fast is UAE express visa processing?', 'Our <strong>UAE express visa service processes in 24&ndash;48 hours</strong>, starting from <strong>AED 650</strong> for a 30-day tourist visa. Express is best for last-minute urgent travel, missed-document situations, or A2A extensions that need to file before visa expiry. Document review is still free.'],
                ['How much does a UAE tourist visa cost in 2026?', 'A 30-day single-entry tourist visa starts at <strong>AED 350</strong> (about INR 7,900). A 60-day multi-entry visa starts at <strong>AED 550</strong> (about INR 12,500). A 96-hour transit visa starts at AED 250. Final price depends on nationality and processing speed.'],
                ['Can Indians get UAE visa on arrival?', 'As a general rule, no. Indian passport holders need a pre-arranged UAE tourist visa. The exceptions are Indians who hold a valid US visa, UK visa, EU Schengen visa or US Green Card &mdash; they may be eligible for visa on arrival or a special 14-day e-visa with reduced documentation.'],
                ['Is the UAE 5-year multiple-entry visa still available?', 'Yes. The 5-year multi-entry tourist visa allows multiple entries with up to <strong>90 consecutive days of stay per visit</strong> (extendable by 90 more from inside the UAE). It is ideal for frequent business travellers and NRI families with relatives in the UAE.'],
                ['What is the UAE Job Seeker Visa?', 'The UAE Job Seeker Visa is a 60, 90 or 120-day single-entry visa for highly skilled professionals (typically MoHRE skill levels 1&ndash;3) who want to enter the UAE to attend interviews and explore employment, without needing an employer sponsor up front.'],
                ['What is the UAE Green Residence Visa?', 'The Green Visa is a <strong>5-year UAE residence visa</strong> for skilled employees, freelancers, self-employed professionals and investors. Unlike the standard work visa it does not need an employer sponsor and lets the holder sponsor parents and children up to 25 years old.'],
                ['What is the UAE Golden Visa and who qualifies?', 'The Golden Visa is a <strong>10-year renewable UAE residence visa</strong>. Eligibility tracks include investors and property owners, entrepreneurs, exceptional talents, top-ranking students, humanitarian pioneers, frontline heroes and certain skilled professionals. Each track has its own document set.'],
                ['Can I sponsor my parents on a UAE visa from India?', 'Yes. UAE residents can sponsor parents on either a <strong>60-day visit visa</strong> or a <strong>1-year residence visa</strong>, subject to a minimum salary (typically AED 20,000+ for the residence visa) and accommodation proof. Many Indian families use the visit visa twice a year.'],
                ['Can I extend my UAE tourist visa from inside the UAE?', 'Yes. Both 30-day and 60-day tourist visas can be extended <strong>once for an additional 30 days</strong> from inside the UAE. The extension must be applied for before the visa expires. After the extension you should either exit the country or change your visa status.'],
                ['What is the UAE visa overstay fine?', 'The overstay fine is <strong>AED 50 per day</strong> after the visa expiry date. Persistent overstay can lead to detention, deportation and a re-entry ban. Always exit, extend or change your visa status before expiry.'],
                ['What documents are required for UAE visa for an Indian passport?', 'For an Indian passport: a clear passport scan valid for at least 6 months, a recent passport photo on a white background, confirmed return tickets, hotel booking or host letter, and (for some applicants) a 3-month bank statement. Married women travelling alone may be asked for a marriage certificate.'],
                ['What is the difference between ICA and GDRFA?', '<strong>ICA</strong> (Federal Authority for Identity, Citizenship, Customs and Port Security) handles visas for all emirates except Dubai. <strong>GDRFA</strong> (General Directorate of Residency and Foreigners Affairs) handles visas for Dubai. We choose the appropriate channel automatically based on where you&rsquo;re landing.'],
                ['How can I check my UAE visa application status?', 'Once submitted, status can be checked on the <strong>ICA Smart Services portal</strong> or the <strong>GDRFA Dubai smart app</strong> using your reference number or passport number. Clients of Arihant Travel also receive WhatsApp updates at every stage.'],
                ['What if my UAE visa is rejected?', 'Rejections are rare when all documents are in order. If a rejection does occur, UAE government fees are non-refundable per UAE policy. We conduct a thorough document pre-check before submission to minimise rejection risk and, if rejected, we&rsquo;ll explain the reason and guide on reapplication.'],
                ['Do I need travel insurance for a UAE visa?', 'Not strictly mandatory for visa issuance, but increasingly recommended at the border. We suggest a minimum USD 50,000 medical-cover travel insurance and can arrange it at competitive rates as part of your application.'],
                ['Can I apply for a UAE visa if I&rsquo;m already in the UAE?', 'New tourist visas must be applied for before entering the UAE. If you&rsquo;re already inside on a valid visa, you can apply for a <strong>visa extension</strong> or a <strong>change of status</strong> through the relevant authority. Contact us if you&rsquo;re already on the ground.'],
                ['Can I do a visa run to extend my stay?', 'Technically you can exit and re-enter on a fresh tourist visa, but UAE immigration may refuse entry if they suspect visa abuse. The cleaner approach is to apply for a 60-day visa up front, or request an extension before the original visa expires.'],
                ['Do I need a hotel booking to apply for UAE visa?', 'A hotel booking is recommended but not always mandatory for tourist visas. For some nationalities a confirmed booking strengthens the application materially. If you haven&rsquo;t booked yet, you can provide a tentative booking or a host letter from a UAE-based contact.'],
            ];
            foreach ($faqs as $i => $faq):
                $id = 'faq' . ($i + 1);
                $isOpen = $i === 0;
            ?>
            <div class="accordion-item mb-3 border-0 shadow-sm">
                <h3 class="accordion-header">
                    <button class="accordion-button <?php echo $isOpen ? '' : 'collapsed'; ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>">
                        <?php echo htmlspecialchars($faq[0]); ?>
                    </button>
                </h3>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
                    <div class="accordion-body"><?php echo $faq[1]; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =========================================================================
     CUSTOMER TESTIMONIALS — E-E-A-T booster, mirrors akbartravels.com pattern.
     Real testimonials build trust + send Google strong "real business" signals.
     TODO: Replace text + names with REAL reviews from your Google Business Profile.
     ========================================================================= -->
<section class="page-section" id="testimonials">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">2,000+ visas processed</span>
            <h2 class="section-heading__title">What customers say about our UAE visa service</h2>
            <p class="section-heading__lead">Verified Google reviews from Jain &amp; vegetarian families
                who applied through us. <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" rel="noopener">Read all reviews on Google</a>.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card h-100">
                    <div class="arihant-card__body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">&ldquo;Got my UAE 60-day multi-entry visa in 3 days. Shweta ji personally checked my documents before I paid and flagged a passport-photo issue I would have missed. Booked the family Dubai package right after &mdash; everything went smoothly.&rdquo;</p>
                        <p class="mb-0 fw-semibold">Mehta Family</p>
                        <p class="small text-muted mb-0">Ahmedabad, India &mdash; Google review</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card h-100">
                    <div class="arihant-card__body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">&ldquo;Needed an urgent UAE visa for a business trip &mdash; Arihant Travel processed it on express in 32 hours. WhatsApp updates the whole way. Saved my trip. Will definitely use again.&rdquo;</p>
                        <p class="mb-0 fw-semibold">Rajiv K.</p>
                        <p class="small text-muted mb-0">Mumbai, India &mdash; Google review</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card h-100">
                    <div class="arihant-card__body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">&ldquo;Applied A2A 60-day extension from inside UAE for my parents who were visiting. Arihant's team filed it 6 days before expiry and got approval in 2 days &mdash; saved us a border run with elderly parents.&rdquo;</p>
                        <p class="mb-0 fw-semibold">Jain Family (Sheth)</p>
                        <p class="small text-muted mb-0">Surat &mdash; resident in Dubai &mdash; Google review</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card h-100">
                    <div class="arihant-card__body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">&ldquo;As a GCC resident in Oman, got my UAE e-visa in 24 hours. Documentation was light, payment was secure, and the visa arrived as a clean PDF on email. Recommended.&rdquo;</p>
                        <p class="mb-0 fw-semibold">Anil S.</p>
                        <p class="small text-muted mb-0">Muscat, Oman &mdash; Google review</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card h-100">
                    <div class="arihant-card__body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="mb-3">&ldquo;Applied for my parents' visit visa from Mumbai. Arihant guided us on photo size, bank statements, hotel booking and salary letter. Got approval first time &mdash; no rejection, no rework. Perfect service.&rdquo;</p>
                        <p class="mb-0 fw-semibold">Doshi Family</p>
                        <p class="small text-muted mb-0">Nairobi &mdash; Indian community &mdash; Google review</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card h-100 d-flex flex-column justify-content-center align-items-center text-center p-4" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                    <i class="fab fa-google fa-3x mb-3"></i>
                    <h3 class="h5 text-white mb-2">4.8&star; on Google</h3>
                    <p class="mb-3" style="opacity:0.9;">2,000+ verified reviews from real travellers</p>
                    <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" rel="noopener" class="btn btn-light rounded-pill px-4">Read all reviews</a>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     DEDICATED VISA-TYPE PAGES — internal-link cluster
     ========================================================================= -->
<section class="page-section page-section--light-2">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Go deeper</span>
            <h2 class="section-heading__title">Dedicated guides per UAE visa type</h2>
            <p class="section-heading__lead">Each link below opens a deeper page with eligibility,
                document set, costs and a separate FAQ for that specific visa.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><i class="fas fa-briefcase me-2 text-primary"></i>Job Seeker Visa</h3>
                        <p>60 / 90 / 120 days, single entry. No employer sponsor. For MoHRE skill levels 1&ndash;3 and top-500 graduates.</p>
                        <a href="uae-job-seeker-visa" class="btn btn-outline-primary rounded-pill mt-2">Read guide</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><i class="fas fa-leaf me-2 text-primary"></i>Green Residence Visa</h3>
                        <p>5-year self-sponsored residence for skilled employees, freelancers and investors. Sponsor parents + kids to 25.</p>
                        <a href="uae-green-visa" class="btn btn-outline-primary rounded-pill mt-2">Read guide</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><i class="fas fa-medal me-2 text-primary"></i>Golden Visa</h3>
                        <p>10-year residence, no minimum stay. Investor, talent, top-student, content creator and frontline tracks.</p>
                        <a href="uae-golden-visa" class="btn btn-outline-primary rounded-pill mt-2">Read guide</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><i class="fas fa-users me-2 text-primary"></i>Family / Dependent Visa</h3>
                        <p>Sponsor spouse, children or parents from Dubai. 60-day visit visa option for parents from India.</p>
                        <a href="uae-family-visa-dubai" class="btn btn-outline-primary rounded-pill mt-2">Read guide</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     CITY-OF-ORIGIN cluster
     ========================================================================= -->
<section class="page-section">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Apply from your city</span>
            <h2 class="section-heading__title">UAE visa from your Indian home city</h2>
            <p class="section-heading__lead">Local context, INR pricing and city-specific document
                tips. Filed entirely online &mdash; no agent visit needed.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><i class="fas fa-map-marker-alt me-2 text-primary"></i>UAE visa from Mumbai</h3>
                        <p>Direct BOM &harr; DXB / SHJ / AUH flights. INR pricing, online filing, free pre-check.</p>
                        <a href="uae-visa-from-mumbai" class="btn btn-outline-primary rounded-pill mt-2">Open page</a>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><i class="fas fa-map-marker-alt me-2 text-primary"></i>UAE visa from Ahmedabad</h3>
                        <p>Jain &amp; Gujarati family specialist. Gujarati on WhatsApp, INR pricing, document review free.</p>
                        <a href="uae-visa-from-ahmedabad" class="btn btn-outline-primary rounded-pill mt-2">Open page</a>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <h3 class="arihant-card__title h5"><i class="fas fa-map-marker-alt me-2 text-primary"></i>UAE visa from Surat</h3>
                        <p>Built for Surat diamond traders and Surti Jain families. 5-year multi-entry advice included.</p>
                        <a href="uae-visa-from-surat" class="btn btn-outline-primary rounded-pill mt-2">Open page</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     RELATED BLOG GUIDES — internal links
     ========================================================================= -->
<section class="page-section page-section--light">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Read next</span>
            <h2 class="section-heading__title">UAE visa guides &amp; resources</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <span class="badge mb-2" style="background: var(--primary); color:#fff;">2026 Update</span>
                        <h3 class="arihant-card__title h5">UAE Visa 2026 &mdash; new rules &amp; updated fees</h3>
                        <p>What changed this year: GCC unified tourist visa, AI specialist visa, Blue Visa, Golden Visa expansions and updated overstay rules.</p>
                        <a href="blog/uae-visa-2026-guide" class="btn btn-outline-primary rounded-pill mt-2">Read guide</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <span class="badge mb-2" style="background: var(--secondary); color:#fff;">Comprehensive</span>
                        <h3 class="arihant-card__title h5">Complete UAE &amp; Dubai visa guide</h3>
                        <p>The long version: country-by-country eligibility, transit visa rules, Indian passport requirements, and tips that save applications.</p>
                        <a href="blog/uae-visa-comprehensive-guide" class="btn btn-outline-primary rounded-pill mt-2">Read guide</a>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="arihant-card">
                    <div class="arihant-card__body">
                        <span class="badge mb-2" style="background: var(--accent); color:#fff;">Holiday inspiration</span>
                        <h3 class="arihant-card__title h5">Dubai holiday packages with Jain food</h3>
                        <p>Once your visa is sorted, here are 7 ready-made Dubai itineraries with 100% pure-veg / Jain meals on every tour.</p>
                        <a href="dubai-holiday-packages" class="btn btn-outline-primary rounded-pill mt-2">See packages</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     CTA BAND — final push
     ========================================================================= -->
<section class="cta-band">
    <div class="container">
        <h2 class="mb-3">Ready to apply for your UAE visa?</h2>
        <p class="mb-4" style="opacity:0.9;">Free document review. Real human on UAE time. Most
            tourist visas approved in 3&ndash;4 working days.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="https://wa.me/971585945007?text=I%20want%20to%20apply%20for%20UAE%20visa" target="_blank" rel="noopener"
               class="btn btn-whatsapp rounded-pill px-4 py-3">
                <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
            </a>
            <a href="contact" class="btn btn-outline-light rounded-pill px-4 py-3">
                <i class="fa fa-envelope me-2"></i> Email the visa desk
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
