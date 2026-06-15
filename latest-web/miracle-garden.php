<?php
// Page SEO Variables
$pageTitle = "Dubai Miracle Garden Tickets 2025 | Best Prices | Arihant Travel";
$pageDescription = "Book Dubai Miracle Garden entry tickets at best prices. Explore 150+ million flowers, Emirates A380 display, Disney characters & more.";
$pageKeywords = "Dubai Miracle Garden tickets, Miracle Garden Dubai, Dubai flower garden, Emirates A380 flowers, Disney Avenue Dubai, Dubai attractions, Arihant Travel, Miracle Garden ticket price, Miracle Garden offers, things to do in Dubai, family attractions in Dubai, Dubai Butterfly Garden combo, Emirates A380 flower display, best time to visit Miracle Garden, Arihant Travel excursion deals";
$pageCanonical = "https://arihantlink.com/miracle-garden";
$currentPage = "excursions";

// Breadcrumb Variables
$pageHeading = "Dubai Miracle Garden";
$breadcrumbCategory = "Excursion";
$breadcrumbCategoryLink = "dubai-excursions";
$breadcrumbBg = "img/excursion/miraclegarden.jpg";
$breadcrumbOverlay = true;

// Quick Overview Data
$quickOverview = [
    ['icon' => 'fas fa-clock', 'title' => '2-3 Hours', 'sub' => 'Recommended'],
    ['icon' => 'fas fa-leaf', 'title' => '150M+ Flowers', 'sub' => 'Botanical Marvel'],
    ['icon' => 'fas fa-camera', 'title' => 'Best Photos', 'sub' => 'Instagrammable'],
    ['icon' => 'fas fa-ticket-alt', 'title' => 'AED 105', 'sub' => 'Adult Ticket']
];

// ITINERARY DATA
$itineraryData = [
    [
        'title' => 'Arrival & Grand Entrance',
        'content' => [
            '<strong>Garden Entry:</strong> Enter through the colorful gates and immediately face the towering flower-covered structures.',
            '<strong>Floating Lady:</strong> Witness the iconic floral sculpture that appears to hover above a sea of petunias and marigolds.',
            '<strong>Floral Arches:</strong> Walk through heart-shaped and star-shaped flower tunnels, perfect for your first set of photos.'
        ]
    ],
    [
        'title' => 'The Main Attractions',
        'content' => [
            '<strong>Emirates A380:</strong> Marvel at the world\'s largest floral installation - a life-size A380 covered in over 500,000 fresh flowers.',
            '<strong>Disney Avenue:</strong> Meet Mickey Mouse and friends in giant floral form, authorized by Disney.',
            '<strong>Smurfs Village:</strong> Explore the mushroom houses and meet your favorite blue characters in a magical forest setting.'
        ]
    ],
    [
        'title' => 'Leisure & Exploration',
        'content' => [
            '<strong>Sunflower Field:</strong> A seasonal favorite offering a bright, golden landscape.',
            '<strong>Lake Park:</strong> Enjoy a peaceful walk around the lake featuring floral ducks and swans.',
            '<strong>Dining:</strong> Take a break at one of the many kiosks or sit-down cafes offering international snacks and refreshments.'
        ]
    ]
];

// FAQS
$faqs = [
    ['q' => "When is the best time to visit?", 'a' => "Late afternoon is ideal as you can see the flowers in daylight and as they light up after sunset. The garden is open from mid-November to mid-May."],
    ['q' => "Is the Butterfly Garden included?", 'a' => "No, the Butterfly Garden requires a separate ticket or a combo package. It is located right next to the Miracle Garden."],
    ['q' => "How do I get there?", 'a' => "You can take the RTA Bus Route 105 from Mall of the Emirates Metro Station, or take a taxi/private car. Free parking is available."],
    ['q' => "Is it wheelchair accessible?", 'a' => "Yes, the entire park features paved pathways and is fully accessible for strollers and wheelchairs."]
];

// Schema Markup
$schemaMarkup = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Dubai Miracle Garden Tickets",
  "description": "' . $pageDescription . '",
  "image": "https://arihantlink.com/img/excursion/miraclegarden.jpg",
  "brand": { "@type": "Brand", "name": "Dubai Miracle Garden" },
  "offers": {
    "@type": "Offer",
    "price": "105",
    "priceCurrency": "AED",
    "availability": "https://schema.org/InStock",
    "url": "https://arihantlink.com/miracle-garden"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "1253"
  }
}
</script>';

include 'includes/faq-schema.php';
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<!-- Quick Overview Bar -->
<div class="container-fluid" style="background-color: #f8f9fa; border-bottom: 3px solid #3A7CA4;">
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

<!-- Overview Section Start -->
<div class="container-fluid py-4">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h2 class="mb-4">Planning Your Visit</h2>
                    <p class="lead text-primary mb-4"><strong>The World's Largest Natural Flower Garden.</strong></p>
                    <p>Experience the breathtaking beauty of Dubai Miracle Garden, spread over 72,000 square meters.
                        This floral paradise features over 150 million flowers in full bloom, arranged in stunning
                        patterns and designs. Marvel at the iconic floating lady, the life-size Emirates A380 aircraft,
                        and your favorite Disney characters.</p>

                    <div class="p-4 bg-light border-start border-4 border-primary rounded my-4">
                        <p class="mb-0 fst-italic">
                            "Miracle Garden is a true testament to human creativity and nature's beauty. Every season,
                            the garden reinvents itself with new themes and floral sculptures that will leave you in
                            awe."
                        </p>
                    </div>

                    <p>Stroll through the Sunflower Field, explore the enchanting Smurfs Village, and walk through the
                        colorful Umbrella Tunnel. With live music and street performers adding to the magical
                        atmosphere, Dubai Miracle Garden offers an unforgettable experience for visitors of all ages.
                    </p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <h4 class="mb-4 text-success border-bottom pb-2">What's Included</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Full-day entry to Miracle
                                Garden</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Access to all themed areas
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Emirates A380 Display</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Disney Avenue access</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Smurfs Village</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Sunflower Field (Seasonal)
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-4 text-muted border-bottom pb-2">Good to Know</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Best for families and
                                couples</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Closed during summer
                                months</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Outside food not
                                allowed</li>
                            <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i> Professional cameras
                                need permission</li>
                        </ul>
                    </div>
                </div>

                <!-- Tabs System -->
                <ul class="nav nav-pills nav-justified mb-4 shadow-sm rounded p-2 bg-white mt-5" id="pills-tab"
                    role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active rounded-pill fw-bold" data-bs-toggle="pill"
                            data-bs-target="#tab-itinerary" type="button">Highlights</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-useful"
                            type="button">Visitor Info</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-pill fw-bold" data-bs-toggle="pill" data-bs-target="#tab-faq"
                            type="button">FAQs</button>
                    </li>
                </ul>

                <div class="tab-content bg-white p-4 rounded shadow-sm border">
                    <div class="tab-pane fade show active" id="tab-itinerary">
                        <?php foreach ($itineraryData as $phase): ?>
                            <div class="mb-4">
                                <h5 class="text-primary border-bottom pb-2"><?= $phase['title'] ?></h5>
                                <ul class="list-unstyled">
                                    <?php foreach ($phase['content'] as $line): ?>
                                        <li class="mb-2 d-flex"><i class="fas fa-flower text-success me-2 mt-1"></i>
                                            <div><?= $line ?></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="tab-pane fade" id="tab-useful">
                        <h5 class="text-primary border-bottom pb-2">Entry & Preparation</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex"><i class="fas fa-info-circle text-primary me-2 mt-1"></i>
                                <div><strong>Timing:</strong> Weekdays: 9AM – 9PM | Weekends: 9AM – 10PM.</div>
                            </li>
                            <li class="mb-2 d-flex"><i class="fas fa-info-circle text-primary me-2 mt-1"></i>
                                <div><strong>Tickets:</strong> Adult (3+ years) – AED 105. Children below 3 are free.
                                </div>
                            </li>
                            <li class="mb-2 d-flex"><i class="fas fa-info-circle text-primary me-2 mt-1"></i>
                                <div><strong>Best Time:</strong> Late afternoon (before sunset) for the best lighting.
                                </div>
                            </li>
                            <li class="mb-2 d-flex"><i class="fas fa-info-circle text-primary me-2 mt-1"></i>
                                <div><strong>Butterfly Garden:</strong> Combo tickets available next door for 15,000+
                                    butterflies.</div>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="tab-faq">
                        <div class="accordion accordion-flush" id="faqAccordionInternal">
                            <?php foreach ($faqs as $i => $faq): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed py-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#ifaq-<?= $i ?>">
                                            <?= $faq['q'] ?>
                                        </button>
                                    </h2>
                                    <div id="ifaq-<?= $i ?>" class="accordion-collapse collapse"
                                        data-bs-parent="#faqAccordionInternal">
                                        <div class="accordion-body text-muted"><?= $faq['a'] ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="card shadow border-0 mb-4">
                        <div class="card-body p-4 text-center">
                            <img src="img/excursion/miraclegarden.jpg" class="img-fluid rounded mb-3"
                                alt="Miracle Garden">
                            <h4 class="card-title mb-3">Miracle Garden Entry</h4>
                            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                                <div>
                                    <p class="mb-0 text-muted">Starting From</p>
                                    <h2 class="mb-0 text-primary">AED 105</h2>
                                </div>
                                <span class="badge bg-danger rounded-pill">Best Seller</span>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/971585945007?text=I want to book Miracle Garden tickets"
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

<!-- Related Excursions Start -->
<div class="container-fluid py-4 bg-light">
    <div class="container">
        <div class="text-center mx-auto mb-4" style="max-width: 900px;">
            <h5 class="section-title px-3">Explore More</h5>
            <h2 class="mb-2 h4">Other Popular Attractions</h2>
        </div>

        <div class="row g-3">
            <!-- Museum of the Future -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/MOTF01.jpg" class="card-img-top" alt="Museum of the Future"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 149</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Museum of the Future</h5>
                        <p class="card-text small mb-3 text-muted">Journey into the future through immersive exhibits
                            and innovation.</p>
                        <a href="museum-of-the-future" class="btn btn-sm btn-outline-primary w-100 fw-bold">View
                            Details</a>
                    </div>
                </div>
            </div>

            <!-- Global Village -->
            <div class="col-lg-4">
                <div class="card h-100 shadow-sm border-0 excursion-card">
                    <div class="position-relative">
                        <img src="img/excursion/global-village-1.avif" class="card-img-top" alt="Global Village"
                            style="height: 280px; object-fit: cover;">
                        <span class="badge bg-primary position-absolute top-0 end-0 m-3">From AED 25</span>
                    </div>
                    <div class="card-body p-3 text-center">
                        <h5 class="h6 card-title mb-2">Global Village</h5>
                        <p class="card-text small mb-3 text-muted">Experience cultures from around the world with
                            shopping and food.</p>
                        <a href="global-village" class="btn btn-sm btn-outline-primary w-100 fw-bold">View Details</a>
                    </div>
                </div>
            </div>

            <!-- View All -->
            <div class="col-lg-4">
                <div
                    class="card h-100 shadow-sm border-0 bg-primary bg-opacity-10 d-flex align-items-center justify-content-center p-4">
                    <div class="text-center">
                        <i class="fas fa-th-large fa-3x text-primary mb-3"></i>
                        <h5>All Dubai Tickets</h5>
                        <p class="small text-muted mb-3">Browse our full collection of tours and attractions.</p>
                        <a href="dubai-excursions" class="btn btn-sm btn-primary px-4 fw-bold">Browse All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .excursion-card {
        transition: 0.3s;
    }

    .excursion-card:hover {
        transform: translateY(-5px);
    }
</style>
<!-- Related Excursions End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-4">
    <div class="container text-center py-4">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h2 class="text-white mb-3 h3">Get Exclusive Excursion Deals</h2>
            <div class="position-relative mx-auto" style="max-width: 500px;">
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