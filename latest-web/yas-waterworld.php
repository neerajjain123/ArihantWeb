<?php
// Page SEO Variables
$pageTitle = "Yas Waterworld Abu Dhabi Tickets 2025 | 45 Rides | Arihant Travels";
$pageDescription = "Book Yas Waterworld Abu Dhabi tickets - UAE's leading waterpark with 45 thrilling rides! Dawwama, Bandit Bomber, pearl diving heritage. Best prices guaranteed!";
$pageKeywords = "Yas Waterworld Abu Dhabi, Yas Island waterpark, Dawwama, Bandit Bomber, Abu Dhabi waterpark, pearl diving waterpark, 45 rides waterpark";
$pageCanonical = "https://arihantlink.com/yas-waterworld";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Yas Waterworld Abu Dhabi";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/themepark/images/Yas-waterworld-1.png.avif";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-water', 'title' => '45 Rides', 'sub' => 'Slides & Fun'],
    ['icon' => 'fas fa-trophy', 'title' => '5 Unique', 'sub' => 'World Firsts'],
    ['icon' => 'fas fa-map-marker-alt', 'title' => 'Yas Island', 'sub' => 'Abu Dhabi'],
    ['icon' => 'fas fa-gem', 'title' => 'Heritage', 'sub' => 'Pearl Theme']
];

// LEGENDARY THRILLS DATA
$zonesData = [
    [
        'title' => 'World-First Attractions',
        'content' => [
            '<strong>Dawwama:</strong> The world\'s largest six-person tornado water slide! Experience the ultimate high-speed spin through a massive funnel.',
            '<strong>Bandit Bomber:</strong> The world\'s first hydromagnetic-powered water coaster with laser shooting and water effects.',
            '<strong>Liwa Loop:</strong> The region\'s first looping water slide—feel the floor drop from under you as you plunge into a free-fall loop.'
        ]
    ],
    [
        'title' => 'Extreme Adventures',
        'content' => [
            '<strong>Bubble\'s Barrel:</strong> A massive flowrider surf simulator creating a perfect 3-meter wave for surfing and bodyboarding.',
            '<strong>Falcon\'s Falaj:</strong> An extreme six-person raft ride that takes you through giant turns and drops.',
            '<strong>Slithers Slides:</strong> Choose from six different slide paths, each featuring hidden lasers and sound effects.'
        ]
    ]
];

// HERITAGE & SURF DATA
$ridesData = [
    [
        'category' => 'Cultural Experiences',
        'items' => [
            '<strong>Pearl Diving Experience:</strong> Learn about the UAE\'s rich pearl diving history and try your hand at diving for real pearls.',
            '<strong>Amwaj Wave Pool:</strong> Relax in the massive wave pool or catch rays on the surrounding beach area.',
            '<strong>Juha\'s Journey:</strong> A long lazy river that winds through the park, perfect for families to relax together.'
        ]
    ],
    [
        'category' => 'Interactive Fun',
        'items' => [
            '<strong>Marah Fortress:</strong> The ultimate playground for kids with slides, water cannons, and a giant tipping bucket.',
            '<strong>Cannon Point:</strong> An interactive water play area where guests can use water cannons to soak riders on the Bandit Bomber.',
            '<strong>Al Raha River:</strong> A more relaxed river journey through the park\'s beautiful scenery.'
        ]
    ]
];

// VISITOR GUIDE DATA
$visitorGuide = [
    [
        'title' => 'Essential Preparation',
        'content' => [
            '<strong>Opening Hours:</strong> Typically 10 AM - 6 PM (winters) and 10 AM - 8 PM (summers). Check for Ladies\' Nights!',
            '<strong>Location:</strong> Yas Island, Abu Dhabi. Easily accessible from both Abu Dhabi and Dubai.',
            '<strong>Yas Express:</strong> Complimentary shuttle buses are available for Yas Island guests.'
        ]
    ],
    [
        'title' => 'Park Guidelines',
        'content' => [
            '<strong>Dress Code:</strong> Proper swimwear is mandatory. Modest swimwear options and burkinis are permitted.',
            '<strong>Guest Services:</strong> Lockers, towels, and private cabanas are available for rent to enhance your experience.',
            '<strong>Safety:</strong> Lifeguards are stationed throughout the park. Minimum height requirements apply to major thrill slides.'
        ]
    ]
];

// FAQ DATA
$faqs = [
    ['q' => 'Is Yas Waterworld suitable for families with small kids?', 'a' => 'Yes! Marah Fortress and various shallow pools are specifically designed for younger children.'],
    ['q' => 'Can I combine Yas Waterworld with Ferrari World tickets?', 'a' => 'Absolutely! We offer multi-park passes that allow you to visit any of the Yas Island parks.'],
    ['q' => 'What is the "Pearl Diving Experience"?', 'a' => 'It\'s a unique attraction where you can dive for real pearls and keep them as a souvenir, honoring UAE heritage.'],
    ['q' => 'Are there dining options available?', 'a' => 'Yes, from Dana\'s Diner to Chubby\'s Kitchen, there are multiple restaurants serving diverse cuisines.']
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Yas Waterworld Abu Dhabi Tickets",
  "description": "' . $pageDescription . '",
  "brand": { "@type": "Brand", "name": "Yas Waterworld" },
  "offers": {
    "@type": "Offer",
    "price": "295",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock"
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #E67E22;">
    <div class="container py-3">
        <div class="row text-center g-3">
            <?php foreach ($quickOverview as $item): ?>
                <div class="col-6 col-md-3">
                    <i class="<?= $item['icon'] ?> fa-2x text-primary mb-2"></i>
                    <p class="mb-0 fw-bold"><?= $item['title'] ?></p>
                    <small class="text-muted"><?= $item['sub'] ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Overview Section -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <h2 class="mb-4">Yas Waterworld: Abu Dhabi's Ultimate Water Park</h2>
                <p class="lead text-primary mb-4"><strong>Experience 45 thrilling rides and world-first attractions on
                        Yas Island.</strong></p>
                <p>Yas Waterworld Abu Dhabi is a one-of-a-kind water park themed around the "Legend of the Lost Pearl,"
                    reflecting the UAE's rich pearl diving history. Across 15 hectares, discover 45 world-class rides,
                    slides, and attractions, including five that you won't find anywhere else in the world. From the
                    massive tornado funnel of Dawwama to the aerial laser battles on Bandit Bomber, adventure awaits!
                </p>

                <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                    <p class="mb-0 fst-italic">
                        "Built with heritage and packed with thrills, Yas Waterworld is where the legends of the past
                        meet the adventures of the future."
                    </p>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-thrills" type="button">Legendary Thrills</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-heritage" type="button">Heritage & Surf</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-guide"
                            type="button">Visitor Guide</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <!-- Legendary Thrills -->
                    <div class="tab-pane fade show active" id="tab-thrills">
                        <?php foreach ($zonesData as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-bolt text-danger me-2 mt-1 small"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Heritage & Surf -->
                    <div class="tab-pane fade" id="tab-heritage">
                        <p class="mb-4">Explore the deep traditions of the UAE or catch the perfect wave at our surfing
                            simulators.</p>
                        <?php foreach ($ridesData as $cat): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $cat['category'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($cat['items'] as $item): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-gem text-info me-2 mt-1"></i>
                                            <div><?= $item ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Visitor Guide -->
                    <div class="tab-pane fade" id="tab-guide">
                        <?php foreach ($visitorGuide as $section): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $section['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($section['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-info-circle text-primary me-2 mt-1"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-5 pt-4">
                    <h3 class="mb-4">Frequently Asked Questions</h3>
                    <div class="accordion accordion-flush shadow-sm rounded border" id="faqAccordion">
                        <?php foreach ($faqs as $index => $faq): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-<?= $index ?>">
                                        <?= $faq['q'] ?>
                                    </button>
                                </h2>
                                <div id="faq-<?= $index ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-muted"><?= $faq['a'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <img src="img/themepark/images/Yas-waterworld-1.png.avif" class="img-fluid rounded mb-3"
                                alt="Yas Waterworld Abu Dhabi">
                            <h4 class="card-title mb-3">Yas Waterworld Tickets</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 295</h2>
                                </div>
                                <span class="badge bg-success rounded-pill">UAE's Choice</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Yas Waterworld Abu Dhabi tickets"
                                    target="_blank" class="btn btn-primary btn-lg">
                                    <i class="fab fa-whatsapp me-2"></i>Book via WhatsApp
                                </a>
                                <a href="tel:+971585945007" class="btn btn-outline-dark">
                                    <i class="fas fa-phone-alt me-2"></i>Call for Enquiry
                                </a>
                            </div>
                        </div>
                        <?php include 'includes/enquiry-sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="section-title bg-white text-primary px-3 mb-4">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Discover Water Magic - Stay Notified</h2>
            <div class="position-relative mx-auto mt-4" style="max-width: 500px;">
                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Your email">
                <button type="button"
                    class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<?php echo $schemaMarkup; ?>
<?php include 'includes/footer.php'; ?>