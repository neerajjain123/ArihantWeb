<?php
// =============================================================================
//  JAIN TEMPLE (DERASAR) IN DUBAI — visitor guide
//  Built 2026-09-27 for the "jain temple / derasar / mandir dubai" searches
//  (Search Console: ~1,000 impressions / 3 months, position ~9-10).
//
//  Facts cross-checked against public sources (Wikipedia "Jain temple, Dubai",
//  jainsite.com): ghar derasar in Musalla Tower, Bur Dubai; Svetambara;
//  moolnayak Bhagwan Vimalnath; also Parshwanath, Sumatinath, Padmavati Mata.
//  Darshan timings are deliberately NOT published — no source confirms them.
// =============================================================================
$pageTitle       = "Jain Temple (Derasar) in Dubai: Location & Visitor Guide 2026";
$pageDescription = "Where the Jain derasar in Dubai is, how to reach it by metro or taxi, what to wear, Jain food nearby, and other temples Jain families visit in the UAE.";
$pageKeywords    = "jain temple dubai, jain derasar dubai, jain mandir dubai, jain temple in dubai, dubai jain temple, jain dharamshala dubai, jain community dubai";
$pageCanonical   = "https://arihantlink.com/jain-temple-dubai";
$currentPage     = "jain-temple-dubai";

$pageHeading            = "Jain Temple (Derasar) in Dubai";
$breadcrumbCategory     = "Jain Travel";
$breadcrumbCategoryLink = "dubai-tour-packages-jain-food";
$extraCss               = ['css/visa.css', 'css/jain-guides.css'];

$faqs = [
    ['Is there a Jain temple in Dubai?',
     'Yes. Dubai has a Jain derasar in Bur Dubai. It is a ghar derasar (house temple) in Musalla Tower, a residential building close to Al Fahidi Metro Station. It follows the Śvetāmbara tradition, and the moolnayak is Bhagwan Vimalnath.'],
    ['Where exactly is the Jain derasar in Dubai?',
     'In Musalla Tower, Bur Dubai, a short walk from Al Fahidi Metro Station and Meena Bazaar. Because it is inside a residential building, ask for "Musalla Tower, Bur Dubai" when taking a taxi.'],
    ['What are the darshan timings?',
     'The derasar is usually open for morning and evening darshan, but timings can change on festival days. Please confirm on the day before you go. If you travel with Arihant Travels, we check the timings for you and plan your visit around them.'],
    ['Is there a Jain dharamshala in Dubai?',
     'We are not aware of a Jain dharamshala in Dubai. Most Jain visitors stay at hotels in Bur Dubai or Al Fahidi, so the derasar and many pure-vegetarian restaurants are within walking distance.'],
    ['Can we visit the Jain temple as part of a Dubai tour?',
     'Yes. Our Jain Dubai packages include a visit to the Bur Dubai derasar, with private transfers and guaranteed Jain meals throughout the trip.'],
    ['Is there a Jain temple in Abu Dhabi?',
     'We are not aware of a public Jain derasar in Abu Dhabi. The nearest is the Bur Dubai derasar. Many Jain families visiting Abu Dhabi also see the BAPS Hindu Mandir.'],
    ['Is the BAPS Mandir in Abu Dhabi a Jain temple?',
     'No. BAPS Mandir in Abu Dhabi and the temple in Jebel Ali, Dubai are Hindu temples. Many Jain families still like to visit them, and we can add them to your itinerary.'],
];

$faqSchema = [];
foreach ($faqs as $f) {
    $faqSchema[] = ['@type' => 'Question', 'name' => $f[0],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => html_entity_decode(strip_tags($f[1]), ENT_QUOTES, 'UTF-8')]];
}
$schemaMarkup = '<script type="application/ld+json">' . json_encode([
    [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => 'Jain Temple (Derasar) in Dubai: Location & Visitor Guide',
        'description' => $pageDescription,
        'url' => $pageCanonical,
        'dateModified' => '2026-09-27',
        'author' => ['@type' => 'Organization', 'name' => 'Arihant Travels Pvt Ltd', 'url' => 'https://arihantlink.com'],
        'publisher' => ['@type' => 'Organization', 'name' => 'Arihant Travels Pvt Ltd', 'logo' => ['@type' => 'ImageObject', 'url' => 'https://arihantlink.com/img/logo.png']],
        'about' => ['@type' => 'PlaceOfWorship', 'name' => 'Jain Derasar, Bur Dubai',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Musalla Tower', 'addressLocality' => 'Bur Dubai, Dubai', 'addressCountry' => 'AE']],
    ],
    ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faqSchema],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

// Pure-veg places near the derasar (from our Bur Dubai restaurant list).
$nearbyFood = [
    ["Govinda's", 'Indian, Jain and vegan options', 'Al Attar Shopping Centre, Al Karama Road, Al Mankhool'],
    ['Sukh Sagar', 'Street food, North Indian, Jain', 'Al Tayer Building, Al Mankhool Road'],
    ['Rangoli Restaurant', 'Gujarati, Punjabi, North Indian', 'Al Fahidi Street, Meena Bazaar'],
    ['Puranmal', 'Veg meals and mithai', 'Al Fahidi Street, Meena Bazaar'],
    ['Bhavna Vegetarian', 'Thali, South and North Indian', 'Near New Gold Souk, Meena Bazaar'],
    ['Veg World', 'Snacks and meals', 'Near Al Fahidi Metro Station'],
];

include __DIR__ . '/includes/header.php';
?>

<section class="visa-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb visa-hero__crumbs">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/dubai-tour-packages-jain-food">Jain Travel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jain temple in Dubai</li>
            </ol>
        </nav>
        <div class="visa-hero__intro">
            <h1 class="visa-hero__title"><?php echo $pageHeading; ?></h1>
            <p class="visa-hero__lead">
                Yes, Dubai has a Jain derasar. It&rsquo;s a ghar derasar (house temple) in Bur Dubai,
                close to Al Fahidi Metro and Meena Bazaar. Here&rsquo;s how to find it, what to know
                before you go, and where to eat Jain food nearby.
            </p>
        </div>

        <div class="jain-facts">
            <div class="jain-facts__item"><i class="fas fa-map-marker-alt"></i><div><strong>Location</strong><span>Musalla Tower, Bur Dubai</span></div></div>
            <div class="jain-facts__item"><i class="fas fa-subway"></i><div><strong>Nearest metro</strong><span>Al Fahidi (Green Line)</span></div></div>
            <div class="jain-facts__item"><i class="fas fa-om"></i><div><strong>Tradition</strong><span>Śvetāmbara ghar derasar</span></div></div>
            <div class="jain-facts__item"><i class="fas fa-praying-hands"></i><div><strong>Moolnayak</strong><span>Bhagwan Vimalnath</span></div></div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article class="article-prose">
                    <h2 id="about">About the Dubai derasar</h2>
                    <p>
                        The derasar is a <strong>ghar derasar</strong> &mdash; a temple inside a residential
                        building rather than a standalone structure &mdash; in <strong>Musalla Tower, Bur Dubai</strong>.
                        It follows the <strong>Śvetāmbara</strong> tradition. The moolnayak is
                        <strong>Bhagwan Vimalnath</strong>, with murtis of Bhagwan Parshwanath and
                        Bhagwan Sumatinath, and Padmavati Mata.
                    </p>
                    <p>
                        Bur Dubai is where much of Dubai&rsquo;s Jain and Gujarati community lives and
                        shops, which is why the area also has many pure-vegetarian restaurants.
                    </p>
                    <p>
                        There are also a few small private home shrines (gruh jinalay) in Dubai and Sharjah,
                        mostly inside family apartments. The Musalla Tower derasar is the one visitors usually go to.
                    </p>

                    <h2 id="timings">Darshan timings</h2>
                    <p>
                        The derasar is usually open for <strong>morning and evening darshan</strong>.
                        Timings can change on festival days such as Paryushan, so confirm on the day before
                        you go. Travelling with us? We check the timings and plan your visit around them.
                    </p>

                    <h2 id="how-to-reach">How to get there</h2>
                    <ul>
                        <li><strong>By metro:</strong> take the Green Line to <strong>Al Fahidi Metro Station</strong>, then walk a few minutes into Bur Dubai.</li>
                        <li><strong>By taxi:</strong> ask for <strong>&ldquo;Musalla Tower, Bur Dubai&rdquo;</strong>. It&rsquo;s a residential building, so the tower name is what drivers need.</li>
                        <li><strong>Nearby:</strong> Meena Bazaar, the Bur Dubai textile souk and the Al Fahidi historical district are all walking distance &mdash; easy to combine in one outing.</li>
                    </ul>

                    <h2 id="etiquette">Before you visit</h2>
                    <ul>
                        <li>Remove footwear before entering, and avoid leather items such as belts and wallets.</li>
                        <li>Wear modest clothing that covers shoulders and knees.</li>
                        <li>No food or drink inside, and keep phones on silent.</li>
                        <li>The derasar is in a residential building &mdash; please keep noise low in the lobby and lifts.</li>
                        <li>Ask before taking photographs.</li>
                    </ul>

                    <h2 id="jain-food-nearby">Jain food near the derasar</h2>
                    <p>
                        Pure vegetarian isn&rsquo;t automatically Jain. When you order, ask for
                        <strong>&ldquo;Jain&rdquo;</strong> &mdash; no onion, garlic, potato or other root vegetables.
                        These pure-veg places are in the same area:
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered bg-white">
                            <thead><tr><th>Restaurant</th><th>Food</th><th>Where</th></tr></thead>
                            <tbody>
                                <?php foreach ($nearbyFood as [$name, $food, $where]): ?>
                                <tr><td><strong><?php echo htmlspecialchars($name); ?></strong></td><td><?php echo htmlspecialchars($food); ?></td><td><?php echo htmlspecialchars($where); ?></td></tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <p><a href="/jain-food-dubai">See all Jain and pure-veg restaurants in Dubai by area &rarr;</a></p>

                    <h2 id="other-temples">Other temples Jain families visit</h2>
                    <p>These are <strong>Hindu</strong> temples, but many Jain families like to include them:</p>
                    <ul>
                        <li><strong>Hindu Temple, Jebel Ali (Dubai)</strong> &mdash; opened in 2022 in Dubai&rsquo;s &ldquo;worship village&rdquo;.</li>
                        <li><strong>BAPS Hindu Mandir, Abu Dhabi</strong> &mdash; the UAE&rsquo;s traditional stone mandir, about 1.5 hours from Dubai.</li>
                    </ul>

                    <div class="article-callout">
                        <strong>Is there a Jain dharamshala in Dubai?</strong> We aren&rsquo;t aware of one.
                        Most Jain visitors stay at hotels in Bur Dubai or Al Fahidi, so the derasar and pure-veg
                        restaurants are within walking distance. Ask us for hotel suggestions in the area.
                    </div>
                </article>
            </div>

            <aside class="col-lg-4">
                <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color:#fff;">
                    <div class="card-body p-4 text-center">
                        <i class="fas fa-praying-hands fa-3x mb-3"></i>
                        <h3 class="h5 text-white">Dubai trip with derasar darshan</h3>
                        <p class="mb-3" style="opacity:0.9;">Our Jain packages include the Bur Dubai derasar, private transfers and guaranteed Jain meals.</p>
                        <a href="/dubai-tour-packages-jain-food" class="btn btn-light w-100 rounded-pill py-2 mb-2">See Jain Dubai packages</a>
                        <a href="https://wa.me/971585945007?text=<?php echo rawurlencode('Hi Arihant Travels, I would like a Dubai trip with Jain temple darshan.'); ?>" target="_blank" rel="noopener" class="btn btn-whatsapp w-100 rounded-pill py-2">
                            <i class="fab fa-whatsapp me-2"></i> Ask on WhatsApp
                        </a>
                    </div>
                </div>
                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-body p-4">
                        <h3 class="h6 text-uppercase text-muted mb-2" style="letter-spacing:0.06em;">Jain travel guides</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="/jain-food-dubai"><i class="fas fa-arrow-right me-1"></i> Jain food in Dubai</a></li>
                            <li class="mb-2"><a href="/blog/jain-family-dubai-trip-guide"><i class="fas fa-arrow-right me-1"></i> Jain family Dubai trip guide</a></li>
                            <li class="mb-2"><a href="/blog/jain-tour-dubai-complete-guide"><i class="fas fa-arrow-right me-1"></i> 30 questions Jain families ask</a></li>
                            <li class="mb-2"><a href="/blog/jain-food-guarantee-dubai-tours"><i class="fas fa-arrow-right me-1"></i> How we guarantee Jain food</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="page-section page-section--light" id="faq">
    <div class="container" style="max-width: 880px;">
        <div class="section-heading">
            <span class="section-heading__eyebrow">FAQ</span>
            <h2 class="section-heading__title">Jain temple in Dubai &mdash; common questions</h2>
        </div>
        <div class="accordion faq-accordion" id="jainTempleFaq">
            <?php foreach ($faqs as $i => $faq): $id = 'jtfaq' . ($i + 1); $isOpen = $i === 0; ?>
            <div class="accordion-item mb-3 border-0 shadow-sm">
                <h3 class="accordion-header">
                    <button class="accordion-button <?php echo $isOpen ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $id; ?>">
                        <?php echo htmlspecialchars($faq[0]); ?>
                    </button>
                </h3>
                <div id="<?php echo $id; ?>" class="accordion-collapse collapse <?php echo $isOpen ? 'show' : ''; ?>" data-bs-parent="#jainTempleFaq">
                    <div class="accordion-body"><?php echo $faq[1]; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
