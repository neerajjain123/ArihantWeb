<?php
// =============================================================================
//  DUBAI DESERT SAFARI — content-first pillar
//  Rewritten 2026-05 to match the design system + .article-prose + sticky TOC.
//  Coverage: comparison table, what-it-feels-like content, Jain-food deep dive,
//  pickup zones, fitness/safety, prices, schema upgrade.
// =============================================================================

$pageTitle       = "Dubai Desert Safari with Jain Food | From AED 99 | Arihant Travels";
$pageDescription = "Dubai desert safari with pure Jain & vegetarian dinner. Standard, VIP, Premium, Morning, Overnight & Quad bike. Compare 6 packages, see pickup zones, book on WhatsApp.";
$pageKeywords    = "Dubai desert safari, desert safari Dubai, dune bashing, evening desert safari, morning desert safari, overnight desert safari, premium desert safari, VIP desert safari, quad bike Dubai, desert safari with Jain food, vegetarian desert safari, desert safari for Indian families, Lehbab Red Dunes, desert safari pickup, desert safari prices 2026";
$pageCanonical   = "https://arihantlink.com/desert-safari";
$currentPage     = "desert-safari";

$pageHeading            = "Dubai Desert Safari";
$breadcrumbCategory     = "Activities";
$breadcrumbCategoryLink = "#";
$breadcrumbBg           = "img/safirbanner.png";
$breadcrumbOverlay      = false;

$schemaMarkup = '
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Dubai Desert Safari Packages",
    "description": "Six desert safari packages from Arihant Travels — Standard, VIP, Premium, Morning, Overnight and Quad Bike. All evening safaris include pure vegetarian / Jain food options.",
    "itemListOrder": "https://schema.org/ItemListOrderAscending",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "url": "https://arihantlink.com/standard-desert-safari",  "name": "Standard Evening Safari"},
      {"@type": "ListItem", "position": 2, "url": "https://arihantlink.com/vip-desert-safari",       "name": "VIP Evening Safari"},
      {"@type": "ListItem", "position": 3, "url": "https://arihantlink.com/premium-desert-safari",   "name": "Premium Evening Safari (Lehbab Red Dunes)"},
      {"@type": "ListItem", "position": 4, "url": "https://arihantlink.com/morning-desert-safari",   "name": "Morning Desert Safari"},
      {"@type": "ListItem", "position": 5, "url": "https://arihantlink.com/overnight-desert-safari", "name": "Overnight Desert Safari"},
      {"@type": "ListItem", "position": 6, "url": "https://arihantlink.com/quad-bike-safari",        "name": "Quad Bike Safari"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Dubai Desert Safari — Packages, Prices, Pickup Zones & Jain-Friendly Options",
    "description": "Complete guide to booking a Dubai desert safari with Arihant Travels: comparison of 6 packages, what dune bashing actually feels like, Jain food at desert safari camps, pickup zones across Dubai/Sharjah/Abu Dhabi, fitness guidance, and 2026 prices.",
    "author": {"@type": "Organization", "name": "Arihant Travels Desert Desk", "url": "https://arihantlink.com"},
    "publisher": {"@type": "TravelAgency", "name": "Arihant Travels Pvt Ltd", "logo": {"@type": "ImageObject", "url": "https://arihantlink.com/img/logo.png"}},
    "datePublished": "2024-01-01",
    "dateModified": "' . date('Y-m-d') . '",
    "mainEntityOfPage": {"@type": "WebPage", "@id": "https://arihantlink.com/desert-safari"},
    "image": "https://arihantlink.com/img/safirbanner.png"
  },
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://arihantlink.com"},
      {"@type": "ListItem", "position": 2, "name": "Activities", "item": "https://arihantlink.com/#ourservices"},
      {"@type": "ListItem", "position": 3, "name": "Desert Safari", "item": "https://arihantlink.com/desert-safari"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {"@type": "Question", "name": "Is Dubai desert safari Jain-friendly?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. We operate a separate Jain BBQ counter at our VIP and Premium desert-safari camps — pure vegetarian, no onion, no garlic, no root vegetables, prepared on a separate grill with separate utensils. Standard safari has a vegetarian buffet but no separate counter."}},
      {"@type": "Question", "name": "What is the difference between Standard, VIP and Premium desert safari?", "acceptedAnswer": {"@type": "Answer", "text": "Standard: shared 4x4, mat seating, buffet dinner, no separate Jain counter. VIP: shared 4x4, sofa seating, table-served starters, separate Jain BBQ counter. Premium: at Lehbab Red Dunes, AC camp, international buffet, less crowded, longer dune bashing."}},
      {"@type": "Question", "name": "How long is a Dubai desert safari?", "acceptedAnswer": {"@type": "Answer", "text": "Evening safaris (Standard, VIP, Premium) run roughly 6 hours including pickup, dune bashing, camp activities, dinner and cultural shows, and drop-off. Morning safaris are 4 hours. Overnight safaris are about 16 hours including the night camp and breakfast. Quad-bike-only safaris are around 2 hours."}},
      {"@type": "Question", "name": "How much does a desert safari in Dubai cost?", "acceptedAnswer": {"@type": "Answer", "text": "Standard from AED 99 (about INR 2,300) per person. VIP from AED 149. Premium from AED 199. Morning from AED 150. Overnight from AED 249. Quad-bike-only safari from AED 350. Hotel pickup is free from most central Dubai zones."}},
      {"@type": "Question", "name": "Should pregnant women go on a desert safari?", "acceptedAnswer": {"@type": "Answer", "text": "Pregnant women should not do dune bashing — the impact is high. They are welcome to come to the camp via a gentler direct transfer, which we arrange on request. Same goes for guests with serious back, neck or heart conditions, and infants under 3."}},
      {"@type": "Question", "name": "Is hotel pickup included in the desert safari price?", "acceptedAnswer": {"@type": "Answer", "text": "Yes, hotel pickup and drop-off are included from most central Dubai zones (Downtown, JBR, Marina, Bur Dubai, Deira). Palm Jumeirah, Sharjah and Ajman pickups carry a small supplement (AED 50–100 per car). Abu Dhabi pickups are on request."}},
      {"@type": "Question", "name": "What should I wear to a Dubai desert safari?", "acceptedAnswer": {"@type": "Answer", "text": "Comfortable, breathable clothing, closed-toe shoes for sandboarding, sunglasses, sunscreen and a hat in summer. Carry a light jacket or shawl for the evening — desert temperatures drop after sunset, especially in winter. Avoid loose accessories during dune bashing."}}
    ]
  }
]
</script>';

include 'includes/header.php';
include 'includes/breadcrumb.php';
include 'includes/wishlist-button.php';
?>

<!-- Trust band -->
<section class="trust-band">
    <div class="container">
        <div class="row g-4 text-center text-md-start align-items-center">
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-leaf me-2"></i> Jain BBQ counter</h3><p class="mb-0 small">VIP &amp; Premium camps</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-route me-2"></i> Free pickup</h3><p class="mb-0 small">Most Dubai zones</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fas fa-star me-2"></i> 4.9&#9733; Google</h3><p class="mb-0 small">2,000+ Indian families</p></div>
            <div class="col-md-3"><h3 class="h6 mb-1"><i class="fab fa-whatsapp me-2"></i> Book direct</h3><p class="mb-0 small">+971 58 594 5007</p></div>
        </div>
    </div>
</section>

<!-- Article body + sticky TOC -->
<section class="page-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article-prose">

                    <div class="article-meta">
                        <span><i class="far fa-calendar-alt"></i> Updated <?php echo date('F Y'); ?></span>
                        <span><i class="far fa-user"></i> Arihant Travels Desert Desk</span>
                        <span><i class="fas fa-shield-alt"></i> UAE-licensed, Sharjah</span>
                    </div>

                    <p class="lead" style="font-size:1.15rem; color:var(--text-light);">
                        We run six desert safari packages out of Dubai, all with pure vegetarian
                        and Jain food options on every evening run. This page is the full reference:
                        compare every package side by side, see what dune bashing actually feels
                        like, check the Jain-food details (no onion, no garlic, separate
                        counter), find your hotel in the pickup grid, and decide who should
                        skip the bumpy bits. If you&rsquo;re ready to book, jump to the
                        <a href="#fees">prices section</a> or just
                        <a href="https://wa.me/971585945007?text=I%20want%20to%20book%20a%20desert%20safari" target="_blank" rel="noopener">WhatsApp our desert desk</a>.
                    </p>

                    <h2 id="quick-pick">Quick pick &mdash; which safari fits you</h2>
                    <p>
                        If you only have 30 seconds, here&rsquo;s the short version:
                    </p>
                    <ul>
                        <li><strong>First-timer with family, on a budget</strong> &mdash; <a href="#standard">Standard Evening</a> (AED 99). Great experience, mat seating, buffet dinner.</li>
                        <li><strong>Couples / want a clean Jain BBQ counter</strong> &mdash; <a href="#vip">VIP Evening</a> (AED 149). Sofa seating, separate Jain counter, table service.</li>
                        <li><strong>Families with seniors or kids who want comfort</strong> &mdash; <a href="#premium">Premium Evening</a> (AED 199). AC camp, less crowded, Lehbab Red Dunes.</li>
                        <li><strong>Have an evening commitment, want the desert in daylight</strong> &mdash; <a href="#morning">Morning Safari</a> (AED 150). 4 hours, no meal, no shows.</li>
                        <li><strong>Want the full bedouin experience &mdash; sleep in the desert</strong> &mdash; <a href="#overnight">Overnight Safari</a> (AED 249).</li>
                        <li><strong>Adrenaline first, everything else second</strong> &mdash; <a href="#quad">Quad Bike Safari</a> (AED 350).</li>
                    </ul>

                    <h2 id="comparison">Compare all 6 packages side by side</h2>
                    <p>
                        The single comparison most people want, in one table.
                    </p>
                </article>

                <!-- Comparison table — full width inside the column for legibility -->
                <div class="table-responsive my-4">
                    <table class="table table-bordered bg-white shadow-sm">
                        <thead style="background: var(--primary); color:#fff;">
                            <tr>
                                <th>Package</th>
                                <th>Duration</th>
                                <th>Dune bashing</th>
                                <th>Camp</th>
                                <th>Seating</th>
                                <th>Jain BBQ counter</th>
                                <th>Cultural shows</th>
                                <th>From</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Standard Evening</strong></td>
                                <td>6 hrs</td><td>20 min</td><td>Standard</td><td>Mats on the floor</td>
                                <td><i class="fas fa-times text-danger"></i> No (veg buffet only)</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><strong>AED 99</strong></td>
                            </tr>
                            <tr>
                                <td><strong>VIP Evening</strong> &nbsp;<span class="badge bg-success">Most popular</span></td>
                                <td>6 hrs</td><td>20 min</td><td>VIP</td><td>Sofa seating, table service</td>
                                <td><i class="fas fa-check text-success"></i> Yes</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><strong>AED 149</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Premium Evening</strong></td>
                                <td>6 hrs</td><td>30 min</td><td>Premium AC (Lehbab)</td><td>AC sit-down</td>
                                <td><i class="fas fa-check text-success"></i> Yes, full Jain meal</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><strong>AED 199</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Morning Safari</strong></td>
                                <td>4 hrs</td><td>15&ndash;20 min</td><td>&mdash;</td><td>&mdash;</td>
                                <td><i class="fas fa-times text-danger"></i> No meal</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><strong>AED 150</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Overnight Safari</strong></td>
                                <td>16 hrs</td><td>20 min + sunrise</td><td>Overnight tents</td><td>Sofa + tent bedding</td>
                                <td><i class="fas fa-check text-success"></i> Yes</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><strong>AED 249</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Quad Bike Safari</strong></td>
                                <td>2 hrs</td><td>30 min ride</td><td>&mdash;</td><td>&mdash;</td>
                                <td><i class="fas fa-times text-danger"></i> No meal</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><strong>AED 350</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <article class="article-prose">

                    <h2 id="dune-bashing">What dune bashing actually feels like</h2>
                    <p>
                        Dune bashing is the headline activity for the evening safaris. A 4x4
                        Land Cruiser (deflated tyres, roll cage) crests, slides and drops down
                        the sand dunes for about 20 minutes &mdash; a controlled rollercoaster
                        on sand. It&rsquo;s the bit your friends posted on Instagram with
                        everyone laughing.
                    </p>
                    <p>
                        Here&rsquo;s the honest part: it&rsquo;s genuinely fun if you go in
                        ready, and genuinely uncomfortable if you don&rsquo;t. The car leans
                        hard, sand sprays the windows, and a few drops will lift you out of
                        your seat. Buckle up tight, take any motion-sickness medication 30
                        minutes before, eat lightly beforehand (no big lunch), and avoid loose
                        accessories. If you&rsquo;re prone to motion sickness, ask for the
                        front passenger seat &mdash; the smoothest spot in the car.
                    </p>
                    <p>
                        The drivers are licensed and very experienced &mdash; this is their
                        every-day job. They calibrate the intensity to the car: families get a
                        gentler ride, friend groups get the full theatrical version. If you want
                        less, just say so before pulling away from the convoy point.
                    </p>

                    <h2 id="jain-food">Jain food at desert safaris &mdash; the truth</h2>
                    <p>
                        This is the question we get more than any other from Indian families,
                        and almost every other safari operator either fudges the answer or
                        flatly lies about it. Here&rsquo;s the honest picture:
                    </p>
                    <ul>
                        <li><strong>Standard safari</strong> &mdash; the camp serves a basic veg buffet alongside the non-veg buffet, on the same line. There is no separate Jain counter, no separate utensils and no guarantee of no-onion-no-garlic. We&rsquo;re telling you this so you can pick the right package, not the cheapest one.</li>
                        <li><strong>VIP safari</strong> &mdash; we operate a <em>separate</em> Jain BBQ counter to the side of the main buffet. Pure vegetarian, no onion, no garlic, no root vegetables. Different grill, different utensils. The counter staff have done it many times before for our Indian customers; you don&rsquo;t need to negotiate.</li>
                        <li><strong>Premium safari (Lehbab Red Dunes)</strong> &mdash; same Jain counter as VIP, plus an international buffet that includes a wider veg selection (Continental, Italian, Indian). Less crowded camp.</li>
                        <li><strong>Overnight safari</strong> &mdash; same Jain counter at dinner. Breakfast is a vegetarian spread by default (poha, upma, paratha, fruit, tea/coffee). No-onion-no-garlic on request.</li>
                    </ul>
                    <div class="article-callout article-callout--accent">
                        <strong>Practical tip:</strong> when you message us to book, just say
                        &ldquo;Jain&rdquo; or &ldquo;Jain meal needed&rdquo; in the WhatsApp
                        chat. We pre-mark your booking and the camp host knows on arrival.
                        You don&rsquo;t need to flag it again at the camp.
                    </div>

                    <h2 id="standard">Standard Evening Safari &mdash; AED 99</h2>
                    <p>
                        Our highest-volume package. Six hours, hotel pickup around 3 PM, 20
                        minutes of dune bashing, then a Bedouin-style camp with camel ride,
                        sandboarding, henna, Arabic costumes for photos and a buffet dinner
                        followed by the cultural shows (Tanoura spinning dance, fire show,
                        belly dance). Drop back at your hotel around 9:30 PM.
                    </p>
                    <p>
                        It&rsquo;s the right pick if you&rsquo;re a first-time visitor to
                        Dubai on a tight budget, you don&rsquo;t need a separate Jain counter,
                        and you&rsquo;re comfortable with mat-style seating on the camp floor.
                        For families that observe Jain meal rules strictly, jump to VIP or
                        Premium.
                        <a href="standard-desert-safari" class="link-primary">Full Standard safari details &rarr;</a>
                    </p>

                    <h2 id="vip">VIP Evening Safari &mdash; AED 149</h2>
                    <p>
                        Same six-hour evening structure as Standard, but the camp experience is
                        upgraded: <strong>sofa-style seating around your own table</strong>,
                        starters and drinks served to you (you don&rsquo;t queue at the
                        buffet), and the <strong>separate Jain BBQ counter</strong> mentioned
                        above. For an extra AED 50 per person it&rsquo;s the package most of
                        our Indian families pick.
                        <a href="vip-desert-safari" class="link-primary">Full VIP safari details &rarr;</a>
                    </p>

                    <h2 id="premium">Premium Evening Safari &mdash; AED 199</h2>
                    <p>
                        At Lehbab Red Dunes &mdash; about 45 minutes south of Dubai, deeper
                        into the desert, with the rich orange-red sand colour you see on
                        postcards. Different camp from Standard / VIP. AC seating area
                        (genuinely a relief in the warmer months), longer 30-minute dune
                        bashing, international buffet alongside the Jain counter, and the
                        camp is less crowded so the cultural shows feel less like a
                        production line.
                    </p>
                    <p>
                        Best for: families travelling with seniors, couples celebrating
                        something, or visitors who&rsquo;ve done a Standard safari before
                        and want the upgrade.
                        <a href="premium-desert-safari" class="link-primary">Full Premium safari details &rarr;</a>
                    </p>

                    <h2 id="morning">Morning Desert Safari &mdash; AED 150</h2>
                    <p>
                        Four hours, 8:30 AM to 12:00 PM. Hotel pickup, dune bashing, camel
                        ride, sandboarding &mdash; and that&rsquo;s it. No meal, no shows, no
                        camp dinner. The right pick if you have evening plans (a Burj Khalifa
                        sunset, a Marina dhow cruise, a wedding) and want the desert in the
                        morning when the light is soft and the dunes are sharp-edged.
                        <a href="morning-desert-safari" class="link-primary">Full Morning safari details &rarr;</a>
                    </p>

                    <h2 id="overnight">Overnight Desert Safari &mdash; AED 249</h2>
                    <p>
                        Sixteen hours, 3 PM to 9 AM the next day. The full evening safari
                        programme, then a campfire, comfortable Bedouin-style tent
                        accommodation, sunrise over the dunes, light vegetarian breakfast.
                        For families with kids who want the full experience, this is the
                        memorable one &mdash; sleeping in the desert with the stars overhead
                        is something they&rsquo;ll talk about for years.
                        <a href="overnight-desert-safari" class="link-primary">Full Overnight safari details &rarr;</a>
                    </p>

                    <h2 id="quad">Quad Bike Safari &mdash; AED 350</h2>
                    <p>
                        Two hours, adrenaline only. You ride a 250&ndash;400cc quad bike
                        (or for an upgrade fee, a 1000cc dune buggy) on a guided desert
                        route, with safety gear and a short camel ride included. No meal,
                        no shows, no camp. For thrill-seekers who&rsquo;ve already done an
                        evening safari and want a different format.
                        <a href="quad-bike-safari" class="link-primary">Full Quad-Bike safari details &rarr;</a>
                    </p>

                    <h2 id="what-to-wear">What to wear and bring</h2>
                    <ul>
                        <li><strong>Wear:</strong> comfortable, breathable clothing (light cotton works); closed-toe shoes for sandboarding and walking on warm sand; long sleeves for the camp evening once temperatures drop.</li>
                        <li><strong>Bring:</strong> sunglasses, sunscreen, a hat, a light jacket or shawl for after sunset (desert temperatures drop noticeably even in summer), a phone in a zip pocket (the dune ride will eject anything loose).</li>
                        <li><strong>Avoid:</strong> contact lenses (sand in the air), loose jewellery, expensive heels, white clothes (the orange-red sand is permanent).</li>
                        <li><strong>For the kids:</strong> a small water bottle, wet wipes, a change of clothes back at the hotel.</li>
                    </ul>

                    <h2 id="seasonality">Best time of year &mdash; and why prices vary</h2>
                    <p>
                        Dubai desert safaris run year-round, but the experience changes a lot
                        between seasons:
                    </p>
                    <ul>
                        <li><strong>October &ndash; March</strong> (peak season): cool evenings, long sunsets, comfortable camp temperatures. Bookings fill 5&ndash;7 days in advance, especially around Christmas and Indian winter holidays. Prices are at the upper end.</li>
                        <li><strong>April, May, September</strong> (shoulder): warm but bearable. Good value, smaller crowds, AC at Premium camp earns its money.</li>
                        <li><strong>June &ndash; August</strong> (off-peak): hot. Most Indian families avoid this window; if you&rsquo;re here for work and want a one-evening safari, the Premium AC camp is essentially mandatory.</li>
                    </ul>
                    <p>
                        We update the prices on this page as the season turns. Last review:
                        <?php echo date('d F Y'); ?>.
                    </p>

                    <h2 id="why-us">Why book through Arihant Travels</h2>
                    <p>
                        We&rsquo;re a UAE-licensed travel agency physically based in Sharjah,
                        founded by a Jain family. The visible difference: when you message us
                        about a Jain meal, a senior pickup, a wheelchair-friendly transfer or
                        a private 4x4, the answer comes from someone who knows the camps
                        first-hand. We don&rsquo;t resell other operators&rsquo; safaris
                        blindly &mdash; we&rsquo;ve walked the camps and we know the camp
                        managers by name.
                    </p>
                    <p>
                        Practically: free hotel pickup from most Dubai zones, transparent
                        AED + INR pricing, WhatsApp confirmation within 30 minutes, no
                        hidden fees at the camp, and 4.9&#9733; on Google with 120+
                        reviews you can verify before booking.
                    </p>
                </article>
            </div>

            <!-- Sticky TOC + sidebar -->
            <aside class="col-lg-4">
                <nav class="toc d-none d-lg-block" aria-label="On this page">
                    <p class="toc__title">On this page</p>
                    <ol>
                        <li><a href="#quick-pick">Quick pick</a></li>
                        <li><a href="#comparison">Compare all 6</a></li>
                        <li><a href="#dune-bashing">What dune bashing feels like</a></li>
                        <li><a href="#jain-food">Jain food &mdash; the truth</a></li>
                        <li><a href="#standard">Standard Evening</a></li>
                        <li><a href="#vip">VIP Evening</a></li>
                        <li><a href="#premium">Premium (Lehbab)</a></li>
                        <li><a href="#morning">Morning safari</a></li>
                        <li><a href="#overnight">Overnight safari</a></li>
                        <li><a href="#quad">Quad bike safari</a></li>
                        <li><a href="#what-to-wear">What to wear &amp; bring</a></li>
                        <li><a href="#pickup-zones">Pickup zones</a></li>
                        <li><a href="#who-should-go">Who should go</a></li>
                        <li><a href="#seasonality">Seasonality &amp; prices</a></li>
                        <li><a href="#fees">Prices in 2026</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ol>
                </nav>

                <div class="card border-0 shadow-sm mt-4" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                    <div class="card-body p-4 text-center">
                        <i class="fab fa-whatsapp fa-3x mb-3"></i>
                        <h3 class="h5 text-white">Book on WhatsApp &mdash; with Jain meal pre-marked</h3>
                        <p class="mb-3" style="opacity:0.9;">Tell us your hotel name, group size,
                            preferred date and any dietary needs.</p>
                        <a href="https://wa.me/971585945007?text=I%20want%20to%20book%20a%20desert%20safari" target="_blank" rel="noopener"
                           class="btn btn-whatsapp w-100 rounded-pill py-2">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
                        </a>
                    </div>
                </div>

                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">From, per person</h3>
                        <table class="table table-sm mb-0">
                            <tbody>
                                <tr><td>Standard Evening</td><td class="text-end fw-semibold">AED 99</td></tr>
                                <tr><td>VIP Evening</td><td class="text-end fw-semibold">AED 149</td></tr>
                                <tr><td>Premium Evening</td><td class="text-end fw-semibold">AED 199</td></tr>
                                <tr><td>Morning</td><td class="text-end fw-semibold">AED 150</td></tr>
                                <tr><td>Overnight</td><td class="text-end fw-semibold">AED 249</td></tr>
                                <tr><td>Quad bike (2 hr)</td><td class="text-end fw-semibold">AED 350</td></tr>
                            </tbody>
                        </table>
                        <p class="small text-muted mb-0 mt-2">All-in starting prices. Hotel pickup free from most central Dubai zones.</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Pickup zones -->
<?php include 'includes/safari-pickup-zones.php'; ?>

<!-- Who should go / who shouldn't -->
<?php include 'includes/safari-fitness.php'; ?>

<!-- Pricing reference table -->
<section class="page-section page-section--light" id="fees">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__eyebrow">Quick reference</span>
            <h2 class="section-heading__title">Dubai desert safari prices &mdash; 2026</h2>
            <p class="section-heading__lead">Starting prices per person, AED + approximate INR.
                Final invoice depends on group size, season and pickup zone.</p>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered bg-white shadow-sm">
                <thead style="background: var(--primary); color:#fff;">
                    <tr>
                        <th>Package</th><th>Duration</th><th>From (AED)</th><th>From (INR)</th><th>Best for</th><th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Standard Evening</strong></td>
                        <td>6 hrs</td><td><strong>AED 99</strong></td><td>₹2,300</td><td>Budget, first-timer</td>
                        <td><a href="standard-desert-safari" class="btn btn-primary btn-sm rounded-pill">Details</a></td>
                    </tr>
                    <tr>
                        <td><strong>VIP Evening</strong> &nbsp;<span class="badge bg-success">Popular</span></td>
                        <td>6 hrs</td><td><strong>AED 149</strong></td><td>₹3,400</td><td>Couples, Jain families</td>
                        <td><a href="vip-desert-safari" class="btn btn-primary btn-sm rounded-pill">Details</a></td>
                    </tr>
                    <tr>
                        <td><strong>Premium Evening</strong></td>
                        <td>6 hrs</td><td><strong>AED 199</strong></td><td>₹4,600</td><td>Seniors, comfort, Lehbab Red Dunes</td>
                        <td><a href="premium-desert-safari" class="btn btn-primary btn-sm rounded-pill">Details</a></td>
                    </tr>
                    <tr>
                        <td><strong>Morning Safari</strong></td>
                        <td>4 hrs</td><td><strong>AED 150</strong></td><td>₹3,500</td><td>Have evening plans</td>
                        <td><a href="morning-desert-safari" class="btn btn-primary btn-sm rounded-pill">Details</a></td>
                    </tr>
                    <tr>
                        <td><strong>Overnight Safari</strong></td>
                        <td>16 hrs</td><td><strong>AED 249</strong></td><td>₹5,700</td><td>Sleep under stars</td>
                        <td><a href="overnight-desert-safari" class="btn btn-primary btn-sm rounded-pill">Details</a></td>
                    </tr>
                    <tr>
                        <td><strong>Quad Bike Safari</strong></td>
                        <td>2 hrs</td><td><strong>AED 350</strong></td><td>₹8,100</td><td>Adrenaline first</td>
                        <td><a href="quad-bike-safari" class="btn btn-primary btn-sm rounded-pill">Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="small text-muted text-center mt-2">Last price review: <?php echo date('d F Y'); ?>.</p>
    </div>
</section>

<!-- FAQ -->
<section class="page-section" id="faq">
    <div class="container" style="max-width: 880px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">FAQ</span>
            <h2 class="section-heading__title">Desert safari &mdash; common questions</h2>
        </div>
        <div class="accordion faq-accordion" id="safariFaq">
            <?php
            $faqs = [
                ['Is Dubai desert safari Jain-friendly?', 'Yes. We operate a <strong>separate Jain BBQ counter</strong> at our VIP and Premium camps &mdash; pure vegetarian, no onion, no garlic, no root vegetables, prepared on a separate grill with separate utensils. Standard safari has a vegetarian buffet but no separate counter.'],
                ['What is the difference between Standard, VIP and Premium safari?', '<strong>Standard:</strong> mat seating, basic veg buffet, no Jain counter. <strong>VIP:</strong> sofa seating, table service, separate Jain BBQ counter. <strong>Premium:</strong> at Lehbab Red Dunes, AC camp, international buffet, longer dune bashing, less crowded.'],
                ['How long is a desert safari?', '<strong>Evening</strong> safaris (Standard / VIP / Premium): about 6 hours including pickup, dune bashing, camp activities, dinner and shows. <strong>Morning:</strong> 4 hours. <strong>Overnight:</strong> ~16 hours. <strong>Quad bike:</strong> 2 hours.'],
                ['Is hotel pickup included?', 'Yes from most central Dubai zones (Downtown, JBR, Marina, Bur Dubai, Deira). Palm Jumeirah, Sharjah and Ajman pickups carry a small per-car supplement (AED 50&ndash;100). Abu Dhabi pickups are on request from AED 250 / car.'],
                ['Should pregnant women go?', 'Pregnant women should not do dune bashing &mdash; the impact is high. They are welcome at the camp via a gentler direct transfer, which we arrange on request. Same goes for guests with serious back, neck or heart conditions, and infants under 3.'],
                ['What if I get motion sickness easily?', 'Take any motion-sickness medication 30 minutes before pickup, eat lightly beforehand, ask for the front passenger seat (smoothest spot in the 4x4), and tell your driver before pulling away &mdash; they&rsquo;ll calibrate the intensity. Worst case, ask for a direct transfer to camp instead of the dune ride.'],
                ['What entertainment is at the camp?', 'Live <strong>Tanoura spinning dance</strong>, <strong>fire show</strong> and <strong>belly dance</strong>, plus camel ride, sandboarding, henna for ladies and Arabic costumes for photos. The shows are family-friendly and culturally respectful.'],
                ['What should I wear?', 'Light, breathable clothing in summer; long sleeves and a light jacket or shawl for the camp evening (temperatures drop noticeably). Closed-toe shoes for sandboarding. Sunglasses, hat, sunscreen.'],
                ['Can I cancel if my plans change?', 'Free cancellation up to 24 hours before your pickup. Within 24 hours we charge the camp&rsquo;s catering fee since meals are already prepared. WhatsApp us as soon as you know.'],
                ['Do you arrange private safaris?', 'Yes. Private 4x4 safaris (your own car, no other guests) start at AED 800 per car. Useful for senior groups, families with small children, photo shoots and corporate groups. Tell us group size and we&rsquo;ll quote.'],
            ];
            foreach ($faqs as $i => $faq):
                $id = 'safari' . ($i + 1);
                $isOpen = $i === 0;
            ?>
            <div class="accordion-item mb-3 border-0 shadow-sm">
                <h3 class="accordion-header">
                    <button class="accordion-button <?php echo $isOpen ? '' : 'collapsed'; ?>" type="button"
                            data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>">
                        <?php echo htmlspecialchars($faq[0]); ?>
                    </button>
                </h3>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" data-bs-parent="#safariFaq">
                    <div class="accordion-body"><?php echo $faq[1]; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Cross-sell rail -->
<?php
$currentSafariSlug = 'desert-safari'; // hides nothing — pillar wants to show siblings
include 'includes/safari-cross-sell.php';
?>

<!-- Customer reviews -->
<?php
$reviewsHeading = 'What Safari Guests Say';
$pageReviews = [
    ['name' => 'Mehta Family', 'location' => 'Ahmedabad, India', 'stars' => 5,
     'text' => 'The Jain food arrangements at the desert camp were flawless — a separate counter, clearly labelled. Dune bashing was thrilling but the driver adjusted for our elderly parents. Perfect evening.'],
    ['name' => 'Priya & Ankit', 'location' => 'Surat, India', 'stars' => 5,
     'text' => 'Booked the VIP safari for our honeymoon. Sofa seating, table service and a clean Jain BBQ counter as promised. Pickup from our Marina hotel was exactly on time.'],
    ['name' => 'Shah Family', 'location' => 'Nairobi, Kenya', 'stars' => 5,
     'text' => 'We were nervous about food in the desert, but Arihant delivered beyond expectations. Kids loved the camel ride and shows. WhatsApp support answered within minutes every time.'],
];
include 'includes/customer-reviews.php';
unset($reviewsHeading, $pageReviews);
?>

<!-- CTA band -->
<section class="cta-band">
    <div class="container">
        <h2 class="mb-3">Ready for the desert?</h2>
        <p class="mb-4" style="opacity:0.9;">Tell us your hotel, your dates and any dietary
            needs &mdash; we&rsquo;ll confirm pickup and price within 30 minutes.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="https://wa.me/971585945007?text=I%20want%20to%20book%20a%20desert%20safari" target="_blank" rel="noopener"
               class="btn btn-whatsapp rounded-pill px-4 py-3">
                <i class="fab fa-whatsapp me-2"></i> WhatsApp +971 58 594 5007
            </a>
            <a href="contact" class="btn btn-outline-light rounded-pill px-4 py-3">
                <i class="fa fa-envelope me-2"></i> Email us
            </a>
        </div>
    </div>
</section>

<!-- Mobile sticky CTA -->
<?php include 'includes/mobile-sticky-cta.php'; ?>

<?php include 'includes/footer.php'; ?>
