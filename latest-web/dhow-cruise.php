<?php
// Page SEO Variables
$pageTitle = "Dubai Dhow Cruise & Mega Yacht Dinners | Compare & Book 2026";
$pageDescription = "Compare top Dubai dhow cruises & mega yachts like Ocean Empress & Lotus. Find veg/Jain-friendly dinners, alcohol options & book your perfect Marina cruise.";
$pageKeywords = "dhow cruise dubai marina, ocean empress dinner cruise, alexandra dhow cruise, lotus mega yacht dinner cruise, dubai dhow cruise vegetarian, dhow cruise with alcohol, jain friendly dinner cruise dubai, book dhow cruise dubai, al wasl dhow cruise marina";
$pageCanonical = "https://arihantlink.com/dhow-cruise";
$currentPage = "dhow-cruise";

// Breadcrumb Variables
$pageHeading = "Dubai Dhow Cruise & Mega Yacht";
$breadcrumbCategory = "Dubai Excursions";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/dhowcruise/AlexndraDhowFrontview.jpg";
$breadcrumbOverlay = false;

// WhatsApp & Phone
$whatsappNumber = "971585945007";
$phoneNumber = "+971585945007";

// Dhow Packages Data
$dhowPackages = [
    [
        'id' => 'ocean-empress',
        'name' => 'Ocean Empress Cruise',
        'link' => 'ocean-empress',
        'route' => 'Dubai Marina • JBR Skyline',
        'duration' => '2.5 Hours',
        'boarding' => 'Pier 7 (8:00 PM)',
        'price' => '199',
        'tag' => 'Premium Choice',
        'image' => 'img/dhowcruise/oceanexpress.jpeg.avif',
        'desc' => '130-foot glass dhow with 8 live cooking stations and premium decor.',
        'features' => ['Upper Deck Open Air', 'Live Singer & Sax', 'Jain/Veg Counters']
    ],
    [
        'id' => 'alexandra-marina',
        'name' => 'Alexandra Dhow Cruise',
        'link' => 'alexandra-dhow-cruise',
        'route' => 'Dubai Marina Canal',
        'duration' => '2 Hours',
        'boarding' => 'Marina Yacht Club (8:15 PM)',
        'price' => '180',
        'tag' => 'Best Value',
        'image' => 'img/dhowcruise/AlexndraDhowFrontview.jpg',
        'desc' => 'Classic wooden dhow with rustic charm and rooftop deck seating.',
        'features' => ['Tanoura Folk Dance', 'International Buffet', 'Jain Pre-order']
    ],
    [
        'id' => 'lotus-mega-yacht',
        'name' => 'Lotus Mega Yacht Dinner',
        'link' => 'lotus-mega-yacht',
        'route' => 'Marina • Palm Jumeirah',
        'duration' => '3 Hours',
        'boarding' => 'Pier 7 (7:00 PM)',
        'price' => '249',
        'tag' => 'Most Luxurious',
        'image' => 'img/dhowcruise/mega_yacht_1.jpg',
        'desc' => 'Largest dinner cruise yacht with multiple lounges, pool deck, and cinema.',
        'features' => ['Resident DJ', 'Live Cooking Stations', 'VIP Sky Lounge']
    ],
    [
        'id' => 'alexandra-sea-lounge',
        'name' => 'Alexandra Sea Lounge',
        'link' => 'alexandra-sea-lounge',
        'route' => 'Marina • Palm Gateway',
        'duration' => '2 Hours',
        'boarding' => 'Marina Mall Pier (8:30 PM)',
        'price' => '229',
        'tag' => 'Premium Deck',
        'image' => 'img/dhowcruise/AlexendraDhowUpperDeck.jpg',
        'desc' => 'Modern glass-enclosed lounge with plush sofas and intimate capacity.',
        'features' => ['Saxophonist', 'Indo-Asian Cuisine', 'VIP Sofa Seating']
    ],
    [
        'id' => 'al-wasl-marina',
        'name' => 'Al Wasl Traditional Dhow',
        'link' => 'al-wasl-dhow-cruise',
        'route' => 'Dubai Marina • JBR',
        'duration' => '2 Hours',
        'boarding' => 'Dubai Marina (8:00 PM)',
        'price' => '120',
        'tag' => 'Budget Friendly',
        'image' => 'img/dhowcruise/alwasl_dhowcruise.jpg',
        'desc' => 'Calm-water traditional cruise perfect for families and senior citizens.',
        'features' => ['Dry Cruise (No Alcohol)', 'Puppet Show', 'North Indian Buffet']
    ]
];

// Schema Markup - ItemList of Products, generated from package data so prices/links never drift
$schemaItems = [];
foreach ($dhowPackages as $index => $pkg) {
    $schemaItems[] = [
        '@type' => 'ListItem',
        'position' => $index + 1,
        'item' => [
            '@type' => 'Product',
            'name' => $pkg['name'],
            'description' => $pkg['desc'],
            'image' => 'https://arihantlink.com/' . $pkg['image'],
            'url' => 'https://arihantlink.com/' . $pkg['link'],
            'offers' => [
                '@type' => 'Offer',
                'price' => $pkg['price'],
                'priceCurrency' => 'AED',
                'availability' => 'https://schema.org/InStock'
            ]
        ]
    ];
}
$schemaMarkup = '<script type="application/ld+json">' . json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'name' => 'Dubai Dhow Cruise Packages',
    'description' => $pageDescription,
    'itemListElement' => $schemaItems
], JSON_UNESCAPED_SLASHES) . '</script>';

function buildWhatsappLink($message)
{
    global $whatsappNumber;
    return "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
}
include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Quick Overview Bar Start -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Marina & Canal</p>
                <small class="text-muted">Top Routes</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Live Cooking</p>
                <small class="text-muted">Veg/Jain Options</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-music fa-2x text-primary mb-2"></i>
                <p class="mb-0 fw-bold">Entertainment</p>
                <small class="text-muted">Live Shows</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-tags fa-2x text-secondary mb-2"></i>
                <p class="mb-0 fw-bold">Best Deals</p>
                <small class="text-muted">From AED 120</small>
            </div>
        </div>
    </div>
</div>
<!-- Quick Overview Bar End -->

<!-- Intro Section Start -->
<div class="container-fluid py-5">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h5 class="section-title px-3">Dhow Cruise Experience</h5>
                <h2 class="mb-4">Dubai's Most Popular Dinner Cruises</h2>
                <p class="lead text-primary mb-4"><strong>Experience the magic of Dubai Marina & the Canal under the
                        starlit sky.</strong></p>
                <p>Set sail on a traditional wooden dhow or a modern mega yacht for an evening of luxury, culture, and
                    culinary delight. Our curated selection of cruises offers the perfect blend of scenic views, live
                    entertainment, and 100% vegetarian & Jain-friendly buffet options. Whether it's a romantic dinner, a
                    family celebration, or a corporate event, we have the perfect vessel for your night out.</p>
            </div>
        </div>
    </div>
</div>
<!-- Intro Section End -->

<!-- Package Cards Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($dhowPackages as $pkg): ?>
                <div class="col-lg-4 col-md-6" id="<?php echo $pkg['id']; ?>">
                    <div class="card h-100 shadow border-0 overflow-hidden">
                        <div class="position-relative">
                            <img src="<?php echo $pkg['image']; ?>" class="card-img-top"
                                alt="<?php echo $pkg['name']; ?> - Dubai Marina dinner cruise" width="600" height="250"
                                loading="lazy" decoding="async" style="height: 250px; object-fit: cover;">
                            <span
                                class="badge bg-primary position-absolute top-0 start-0 m-3"><?php echo $pkg['duration']; ?></span>
                            <span class="badge bg-secondary position-absolute top-0 end-0 m-3">From AED
                                <?php echo $pkg['price']; ?></span>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0"><?php echo $pkg['name']; ?></h5>
                                <div class="text-warning small">⭐⭐⭐⭐⭐</div>
                            </div>
                            <div class="mb-3">
                                <span
                                    class="badge bg-light text-primary border border-primary"><?php echo $pkg['tag']; ?></span>
                            </div>
                            <p class="card-text text-muted small mb-4"><?php echo $pkg['desc']; ?></p>

                            <h6 class="fw-bold mb-3 small text-uppercase">Highlights:</h6>
                            <ul class="list-unstyled mb-4">
                                <?php foreach ($pkg['features'] as $feature): ?>
                                    <li class="small mb-2"><i class="fas fa-check text-success me-2"></i><?php echo $feature; ?>
                                    </li>
                                <?php endforeach; ?>
                                <li class="small"><i
                                        class="fas fa-map-marker-alt text-primary me-2"></i><?php echo $pkg['boarding']; ?>
                                </li>
                            </ul>

                            <div class="d-grid gap-2">
                                <a href="<?php echo $pkg['link']; ?>" class="btn btn-primary rounded-pill">
                                    <i class="fas fa-info-circle me-2"></i>View Details
                                </a>
                                <a href="<?php echo buildWhatsappLink("I'm interested in the {$pkg['name']}"); ?>"
                                    target="_blank" class="btn btn-outline-primary rounded-pill">
                                    <i class="fab fa-whatsapp me-2"></i>Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Package Cards End -->

<!-- Comparison Table Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Quick Compare</h5>
            <h2 class="mb-4">Which Cruise is Right for You?</h2>
        </div>
        <div class="table-responsive shadow rounded-3">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="py-3 ps-4">Cruise Name</th>
                        <th class="py-3">Best For</th>
                        <th class="py-3">Veg/Jain Food</th>
                        <th class="py-3">Alcohol</th>
                        <th class="py-3">Price (AED)</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Ocean Empress</td>
                        <td class="py-3">Families & Large Groups</td>
                        <td class="py-3">Separate Jain Counter</td>
                        <td class="py-3">Available (Paid)</td>
                        <td class="py-3 text-primary fw-bold">199</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Alexandra Dhow</td>
                        <td class="py-3">Couples & Value Seekers</td>
                        <td class="py-3">Jain on Pre-order</td>
                        <td class="py-3">Available (Paid)</td>
                        <td class="py-3 text-primary fw-bold">180</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Lotus Mega Yacht</td>
                        <td class="py-3">Luxury & Celebs</td>
                        <td class="py-3">Live Pasta/Veg Stns</td>
                        <td class="py-3">Licensed Bar</td>
                        <td class="py-3 text-primary fw-bold">249</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Alexandra Sea Lounge</td>
                        <td class="py-3">Intimate Evenings</td>
                        <td class="py-3">Indo-Asian Veg Menu</td>
                        <td class="py-3">Available (Paid)</td>
                        <td class="py-3 text-primary fw-bold">229</td>
                    </tr>
                    <tr>
                        <td class="py-3 ps-4 fw-bold">Al Wasl Traditional</td>
                        <td class="py-3">Seniors & Calm Waters</td>
                        <td class="py-3">Pure Veg Available</td>
                        <td class="py-3">Dry Cruise</td>
                        <td class="py-3 text-primary fw-bold">120</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Comparison Table End -->

<!-- What to Expect Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Plan Your Evening</h5>
            <h2 class="mb-4">What to Expect on a Dubai Dhow Cruise</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <h4 class="mb-3">A Typical Evening On Board</h4>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-anchor text-primary me-2"></i><strong>Boarding (7:00–8:30
                            PM):</strong> Arrive 15–20 minutes early at your pier. You are welcomed on board with dates
                        and Arabic coffee or a soft drink.</li>
                    <li class="mb-3"><i class="fas fa-water text-primary me-2"></i><strong>Set Sail:</strong> The vessel
                        glides past the illuminated Dubai Marina skyline, JBR beachfront, and the Bluewaters/Ain Dubai
                        wheel — the best photo light is in the first 30 minutes.</li>
                    <li class="mb-3"><i class="fas fa-utensils text-primary me-2"></i><strong>Dinner Buffet:</strong>
                        International spread with dedicated vegetarian counters; Jain meals are freshly prepared when
                        pre-ordered.</li>
                    <li class="mb-3"><i class="fas fa-music text-primary me-2"></i><strong>Live Entertainment:</strong>
                        Depending on the vessel — Tanoura folk dance, live singer, saxophonist, or resident DJ.</li>
                    <li class="mb-0"><i class="fas fa-anchor text-primary me-2"></i><strong>Return to Pier:</strong>
                        Cruises last 2–3 hours; optional hotel drop-off if you booked transfers.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h4 class="mb-3">Marina or Creek — Which Dhow Cruise Is Better?</h4>
                <p>The <strong>Dubai Marina dhow cruise</strong> sails through a canyon of illuminated skyscrapers —
                    modern, glamorous, and the most photographed route in Dubai. The Creek route in Old Dubai (Deira) is
                    shorter and more heritage-focused, passing souks and abra stations. All cruises on this page sail
                    the <strong>Marina route</strong>, which we recommend for first-time visitors: the skyline views are
                    unmatched, boarding points are close to major hotels, and the vessels are newer with better buffet
                    and entertainment quality.</p>
                <p>Waters in the Marina and along JBR are calm year-round, so seasickness is rarely an issue — even
                    senior guests and young children cruise comfortably. Evenings from October to April are pleasantly
                    cool on the open decks; in summer, all vessels offer air-conditioned lower decks.</p>
                <p class="mb-0"><strong>Dress code:</strong> Smart casual works everywhere. There is no strict formal
                    requirement, though most guests dress up a little for photos on the luxury yachts.</p>
            </div>
        </div>
    </div>
</div>
<!-- What to Expect End -->

<!-- Why Choose Us Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Why Choose Arihant Travel</h5>
            <h2 class="mb-4">Dubai's Trusted Cruise Partner</h2>
        </div>
        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="mb-3"><i class="fas fa-leaf fa-3x text-primary"></i></div>
                    <h5 class="fw-bold">Jain Friendly</h5>
                    <p class="small text-muted mb-0">Dedicated vegetarian and Jain food options on every vessel.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="mb-3"><i class="fas fa-shield-alt fa-3x text-primary"></i></div>
                    <h5 class="fw-bold">Safe & Verified</h5>
                    <p class="small text-muted mb-0">Only DTCM-approved cruises with valid safety permits.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="mb-3"><i class="fas fa-user-friends fa-3x text-primary"></i></div>
                    <h5 class="fw-bold">Personalized</h5>
                    <p class="small text-muted mb-0">Table reservations and special requests handled with care.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="mb-3"><i class="fas fa-comment-dots fa-3x text-primary"></i></div>
                    <h5 class="fw-bold">24/7 Support</h5>
                    <p class="small text-muted mb-0">WhatsApp concierge support till your cruise starts.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us End -->

<!-- Gallery Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Gallery</h5>
            <h2 class="mb-4">Experience the Night</h2>
        </div>
        <div class="row g-2">
            <div class="col-md-4 col-6">
                <img src="img/dhowcruise/AlexndraDhowFrontview.jpg" class="img-fluid rounded shadow-sm"
                    alt="Alexandra dhow cruise front view at Dubai Marina" width="400" height="200" loading="lazy"
                    decoding="async" style="height: 200px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-md-4 col-6">
                <img src="img/dhowcruise/AlexendraDhowUpperDeck.jpg" class="img-fluid rounded shadow-sm"
                    alt="Open-air upper deck seating on Alexandra dhow cruise Dubai" width="400" height="200"
                    loading="lazy" decoding="async" style="height: 200px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-md-4 col-6">
                <img src="img/dhowcruise/alwasl_dhowcruise.jpg" class="img-fluid rounded shadow-sm"
                    alt="Al Wasl traditional wooden dhow cruising Dubai Marina" width="400" height="200" loading="lazy"
                    decoding="async" style="height: 200px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-md-4 col-6">
                <img src="img/dhowcruise/mega_yacht_2.jpg" class="img-fluid rounded shadow-sm"
                    alt="Lotus mega yacht dinner cruise deck at night" width="400" height="200" loading="lazy"
                    decoding="async" style="height: 200px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-md-4 col-6">
                <img src="img/dhowcruise/Alwasl-Tanoura-Dance-at-Dhow-Cruise.jpg" class="img-fluid rounded shadow-sm"
                    alt="Tanoura dance show on board a Dubai dhow cruise" width="400" height="200" loading="lazy"
                    decoding="async" style="height: 200px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-md-4 col-6">
                <img src="img/dhowcruise/Alwasl-food.jpg" class="img-fluid rounded shadow-sm"
                    alt="Vegetarian buffet dinner spread on Dubai dhow cruise" width="400" height="200" loading="lazy"
                    decoding="async" style="height: 200px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- FAQ Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h5 class="section-title px-3">FAQs</h5>
                    <h2 class="mb-4">Common Questions</h2>
                </div>
                <div class="accordion" id="dhowFaq">
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button rounded fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                Are there Jain and Vegetarian options on all dhow cruises in Dubai?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#dhowFaq">
                            <div class="accordion-body text-muted">
                                Yes! We specialize in catering to Indian dietary needs. Most cruises have dedicated
                                vegetarian counters, and strict Jain meals can be arranged on request (preferably 24
                                hours in advance).
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                Is alcohol available on board the dhow cruise?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#dhowFaq">
                            <div class="accordion-body text-muted">
                                Luxury dhows and yachts like Ocean Empress and Lotus are licensed. The Al Wasl
                                Traditional Dhow is a dry cruise (no alcohol served), making it ideal for families
                                seeking a traditional atmosphere.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                Do you provide hotel transfers for the dhow cruise?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#dhowFaq">
                            <div class="accordion-body text-muted">
                                Yes, both sharing and private transfers from your hotel or residence in Dubai, Sharjah,
                                or Ajman can be added to your booking for a small additional fee.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq4">
                                What is included in the dhow cruise ticket price?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#dhowFaq">
                            <div class="accordion-body text-muted">
                                All cruises include the 2–3 hour sailing, welcome drinks, unlimited buffet dinner with
                                vegetarian counters, live entertainment, and soft beverages. Alcoholic drinks (on
                                licensed vessels) and hotel transfers are available at an additional cost.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq5">
                                Do children get discounted dhow cruise tickets?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#dhowFaq">
                            <div class="accordion-body text-muted">
                                Yes, most vessels offer reduced fares for children aged 3–10 years, and infants under 3
                                usually cruise free. Exact child rates vary by cruise — message us on WhatsApp with your
                                group size and we will share the best family price.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow-sm border-0 mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq6">
                                Is there a dress code on Dubai dinner cruises?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#dhowFaq">
                            <div class="accordion-body text-muted">
                                Smart casual is recommended on all cruises. There is no strict formal requirement, but
                                light layers are handy on the open upper decks during winter evenings (October to
                                April).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->

<!-- FAQPage Schema for Dhow Cruise -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Are there Jain and Vegetarian options on all dhow cruises in Dubai?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! We specialize in catering to Indian dietary needs. Most cruises have dedicated vegetarian counters, and strict Jain meals can be arranged on request (preferably 24 hours in advance)."
            }
        },
        {
            "@type": "Question",
            "name": "Is alcohol available on board the dhow cruise?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Luxury dhows and yachts like Ocean Empress and Lotus are licensed. The Al Wasl Traditional Dhow is a dry cruise (no alcohol served), making it ideal for families seeking a traditional atmosphere."
            }
        },
        {
            "@type": "Question",
            "name": "Do you provide hotel transfers for the dhow cruise?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, both sharing and private transfers from your hotel or residence in Dubai, Sharjah, or Ajman can be added to your booking for a small additional fee."
            }
        },
        {
            "@type": "Question",
            "name": "What is included in the dhow cruise ticket price?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "All cruises include the 2–3 hour sailing, welcome drinks, unlimited buffet dinner with vegetarian counters, live entertainment, and soft beverages. Alcoholic drinks (on licensed vessels) and hotel transfers are available at an additional cost."
            }
        },
        {
            "@type": "Question",
            "name": "Do children get discounted dhow cruise tickets?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, most vessels offer reduced fares for children aged 3–10 years, and infants under 3 usually cruise free. Exact child rates vary by cruise — message us on WhatsApp with your group size and we will share the best family price."
            }
        },
        {
            "@type": "Question",
            "name": "Is there a dress code on Dubai dinner cruises?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Smart casual is recommended on all cruises. There is no strict formal requirement, but light layers are handy on the open upper decks during winter evenings (October to April)."
            }
        }
    ]
}
</script>

<!-- CTA Section Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3 text-white">Ready to Sail?</h5>
            <h2 class="text-white mb-4">Book Your Perfect Evening</h2>
            <p class="text-white mb-5">Join us for an unforgettable night on the water. Contact our concierge to choose
                the best vessel for your group.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="<?php echo buildWhatsappLink("I want to book a Dhow Cruise"); ?>" target="_blank"
                    class="btn btn-light btn-lg rounded-pill px-5">
                    <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                </a>
                <a href="tel:<?php echo $phoneNumber; ?>" class="btn btn-outline-light btn-lg rounded-pill px-5">
                    <i class="fas fa-phone me-2"></i>Call Now
                </a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

<?php include 'includes/footer.php'; ?>