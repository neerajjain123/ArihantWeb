<?php
// =====================================================================
// BLOG: Jain Tour in Dubai — Complete Family Travel Guide (30+ FAQ)
// Targets GSC query: "jain tour in dubai" (105 imp, pos 14.81)
// Also feeds topical authority to /dubai-tour-packages-jain-food
// =====================================================================

$basePath = "../";

$pageTitle = "Jain Tour in Dubai — 30 Questions Every Jain Family Asks (2026 Guide)";
$pageDescription = "Complete Jain tour Dubai guide: food, temples, hotels, activities, visa, costs. 30+ questions answered by UAE's leading Jain travel agency. Updated 2026.";
$pageKeywords = "jain tour in dubai, jain dubai trip, jain travel dubai, jain food in dubai, jain tour package dubai, bur dubai jain mandir, jain hotel dubai, jain visa dubai";
$pageCanonical = "https://arihantlink.com/blog/jain-tour-dubai-complete-guide";
$currentPage = "blog";

$blogTitle = "Jain Tour in Dubai: 30 Questions Every Jain Family Asks";
$blogCategory = "Jain-Friendly";
$blogCategoryClass = "success";
$blogAuthor = "Shweta Jain, Founder Arihant Travels";
$blogDate = "June 15, 2026";
$blogReadTime = "14 min read";
$blogFeaturedImage = "../img/services/safari.webp";
$blogImageAlt = "Jain family tour in Dubai with pure vegetarian meals";
$blogExcerpt = "Everything Jain families need to plan a Dubai trip — food guarantees, temple darshan, hotels with Jain kitchens, visa, costs, and 24 more questions answered.";

$blogTags = ["Jain Dubai", "Jain Food Dubai", "Bur Dubai Jain Mandir", "Pure Veg Travel", "BAPS Mandir Abu Dhabi"];

// FAQ schema — Google will use this for rich results
$faqSchema = <<<HTML
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Will my breakfast be Jain at the hotel?","acceptedAnswer":{"@type":"Answer","text":"Yes. We pre-arrange Jain breakfast with the hotel kitchen 7+ days before arrival. Hot poha, idli, dhokla, fresh fruit, parathas (no onion-garlic), juice, tea. Written confirmation shared before travel."}},
    {"@type":"Question","name":"Can I bring my own tiffin from India?","acceptedAnswer":{"@type":"Answer","text":"UAE customs allow sealed/packed vegetarian food in checked baggage. Bhakhri, theplas, sukhdi, khakhra travel well. Avoid oil-based or fresh produce. Many of our families carry a 2-day backup of homemade food."}},
    {"@type":"Question","name":"Are there 100% Jain restaurants in Dubai?","acceptedAnswer":{"@type":"Answer","text":"Yes. Saravana Bhavan (Karama branch), Govinda's, Aryaas, Sind Punjab Jain Kitchen, Bombay Chowpatty, and a few smaller community kitchens in Bur Dubai serve strict Jain food. We rotate these into your itinerary."}},
    {"@type":"Question","name":"What happens on desert safari — is dinner really Jain?","acceptedAnswer":{"@type":"Answer","text":"Our partner safari camps maintain a dedicated Jain dinner counter. Dishes include kadhi-rice, dal makhani (Jain-style), kadhai paneer (no onion-garlic), jeera rice, rotis, fresh salad, gulab jamun. Written menu shared 48 hours before."}},
    {"@type":"Question","name":"Can hotels prepare Jain meals on request?","acceptedAnswer":{"@type":"Answer","text":"5-star hotels (JW Marriott, Hyatt, Hilton, Marriott Marquis) handle Jain kitchen requests reliably. We pre-brief executive chefs in writing. 3-star hotels are less consistent — we use partner restaurants nearby instead."}},
    {"@type":"Question","name":"What are Bur Dubai Jain mandir timings?","acceptedAnswer":{"@type":"Answer","text":"Shri Mahavir Jain Temple Bur Dubai opens 06:30–11:30 morning and 17:30–21:00 evening daily. Aarti at 19:30. Located at Al Hisn Street near Bur Dubai metro. 10-minute drive from most central hotels."}},
    {"@type":"Question","name":"Can we visit BAPS Mandir Abu Dhabi as part of a Jain tour?","acceptedAnswer":{"@type":"Answer","text":"Yes. BAPS Hindu Mandir at Abu Mureikhah, Abu Dhabi opens 09:00–20:00 (closed Mondays). We include it in our 5N/6D and 7N/8D packages. Pure-veg lunch available at the prasad hall. Dress code applies."}},
    {"@type":"Question","name":"How do we get from Dubai hotel to Jain temple?","acceptedAnswer":{"@type":"Answer","text":"All our packages include private transfers. Bur Dubai mandir from Downtown Dubai: 15 min by car. From Marina: 25 min. From Deira: 10 min. We schedule darshan in the evening before dinner."}},
    {"@type":"Question","name":"Which Dubai activities are appropriate for Jain families?","acceptedAnswer":{"@type":"Answer","text":"Burj Khalifa, Dubai Frame, Museum of the Future, Miracle Garden, Global Village, Gold Souk, Spice Souk, dhow cruise, desert safari — all comfortable. Theme parks fine. Atlantis Aquarium fine. Avoid: nightclub districts, beach-clubs."}},
    {"@type":"Question","name":"Is the dress code an issue in Dubai for Jain families?","acceptedAnswer":{"@type":"Answer","text":"No. Dubai is liberal compared to other Gulf cities. Modest Indian clothes (kurtas, sarees, salwar-kameez) are perfectly fine everywhere. At mosques and BAPS mandir: cover shoulders and knees. Beach areas: family-friendly swimwear OK."}},
    {"@type":"Question","name":"Are there separate seating arrangements for women on tours?","acceptedAnswer":{"@type":"Answer","text":"On private vehicle tours (our default for families), seating is family-controlled. On shared safari camps, we book the family-only seating area (separate from solo tourist groups). VIP &amp; Premium safaris have private cabanas."}},
    {"@type":"Question","name":"Which Dubai hotels handle Jain kitchen requests best?","acceptedAnswer":{"@type":"Answer","text":"Top picks: Grand Hyatt Dubai, JW Marriott Marquis, Hilton Al Habtoor City, Movenpick Bur Dubai, Hyatt Place Al Rigga. All have written Jain procedures. Mid-tier: Premier Inn Karama, Citymax Bur Dubai — reliable Jain breakfast."}},
    {"@type":"Question","name":"What's the difference between Jain-friendly and pure veg hotels?","acceptedAnswer":{"@type":"Answer","text":"Pure veg = no meat/eggs/seafood served. Jain-friendly = additionally no onion, garlic, root vegetables in your meals (the kitchen may still cook these for other guests). We confirm which applies for your specific room/meal in writing."}},
    {"@type":"Question","name":"Do Dubai hotels charge extra for Jain meals?","acceptedAnswer":{"@type":"Answer","text":"No, hotels we partner with don't add a Jain meal surcharge — it's part of the room rate or the package. If a hotel asks for one, we redirect you to a partner restaurant of equal quality at no extra cost."}},
    {"@type":"Question","name":"Can we book Jain-only hotel breakfast without buying the full package?","acceptedAnswer":{"@type":"Answer","text":"Yes — we offer a hotel + breakfast-only Jain plan starting from AED 350/night per couple. WhatsApp us for current rates and your dates."}},
    {"@type":"Question","name":"What's the 30-day UAE tourist visa process for Indian passport holders?","acceptedAnswer":{"@type":"Answer","text":"30-day UAE tourist visa: AED 350 (single entry), processed in 3–5 working days. Documents: passport (6+ months valid), photo, return ticket, hotel booking. We process it for you. See /uae-visa for details."}},
    {"@type":"Question","name":"Do you provide visa assistance with the tour package?","acceptedAnswer":{"@type":"Answer","text":"Yes — visa is bundled into our packages or available standalone. We submit, track, and deliver the e-visa via WhatsApp. 95% approval rate. Rejected applications get a full refund minus processing fee."}},
    {"@type":"Question","name":"Is the UAE 60-day visa available?","acceptedAnswer":{"@type":"Answer","text":"Yes, the 60-day multi-entry visa is AED 650 and useful for families planning a longer stay or visiting other Gulf countries from Dubai. Process is identical to 30-day."}},
    {"@type":"Question","name":"What's a typical 5N/6D Dubai Jain tour cost in 2026?","acceptedAnswer":{"@type":"Answer","text":"Family 5N/6D Jain package: AED 3,999 per person on twin-share (land-only). Includes 4-star hotel, all transfers, full-day city tour, VIP desert safari, dhow cruise, BAPS mandir, Burj Khalifa, all Jain meals. Flights extra."}},
    {"@type":"Question","name":"What's included and what's not in the package price?","acceptedAnswer":{"@type":"Answer","text":"INCLUDED: hotel, breakfast/lunch/dinner per itinerary, all transfers, mentioned attractions, English-speaking guide, mandir visit, visa processing fee. NOT INCLUDED: international flights, personal shopping, additional attractions outside itinerary, tips."}},
    {"@type":"Question","name":"How much deposit do we pay to book a Jain Dubai package?","acceptedAnswer":{"@type":"Answer","text":"AED 1,000 per person refundable deposit to confirm. Balance 14 days before travel. Bank transfer, UPI, credit card, or cash in person at our Sharjah office all accepted."}},
    {"@type":"Question","name":"What's the cancellation policy?","acceptedAnswer":{"@type":"Answer","text":"Free cancellation 30+ days before travel. 50% refund 30–15 days before. No refund within 14 days — but we'll re-schedule for medical or family emergencies."}},
    {"@type":"Question","name":"Are there group discounts for large Jain families?","acceptedAnswer":{"@type":"Answer","text":"Yes. 6+ travellers: 8% off. 10+ travellers: 12% off. 15+: custom group quote with dedicated coordinator. Multi-family groups travelling together get additional flexibility on itinerary."}},
    {"@type":"Question","name":"Can we customise the itinerary?","acceptedAnswer":{"@type":"Answer","text":"Yes — that's our default. Standard packages are a starting point. Want extra mandir time? Skip the desert safari? Add a yacht charter? All possible. Quote adjusts accordingly."}},
    {"@type":"Question","name":"What about pure veg options on the dhow cruise?","acceptedAnswer":{"@type":"Answer","text":"Our partner cruises maintain a Jain/pure-veg counter. Main dishes: paneer butter masala (Jain), kadhi-pakoda, jeera rice, dal, rotis, fresh fruit, dessert. Live cooking station for the Jain dishes."}},
    {"@type":"Question","name":"Will we be the only Jain family on the tour?","acceptedAnswer":{"@type":"Answer","text":"On private packages, you're the only family. On safari/cruise activities, you may be with other tourists but your meal/seating is separate. We can arrange fully-private safari and yacht for groups of 4+."}},
    {"@type":"Question","name":"What if we have a child or elder with allergies?","acceptedAnswer":{"@type":"Answer","text":"Tell us at enquiry — we lock allergen-free menus with all vendors. Common adjustments: nut-free, gluten-free, lactose-free, diabetic-friendly, low-sodium. No extra charge."}},
    {"@type":"Question","name":"Are Hindi-speaking guides available?","acceptedAnswer":{"@type":"Answer","text":"Yes. Default is English. Hindi and Gujarati guides available for Indian families — request at booking. Our office staff speak Hindi, Gujarati, English, Arabic."}},
    {"@type":"Question","name":"Is travel insurance included?","acceptedAnswer":{"@type":"Answer","text":"Not included by default. We strongly recommend it for international travel — we partner with insurance providers and add a comprehensive policy for AED 95 per person per week."}},
    {"@type":"Question","name":"How do we book a Jain tour in Dubai?","acceptedAnswer":{"@type":"Answer","text":"Three ways: (1) WhatsApp +971 58 594 5007 with your dates and group size — quote in 4 hours; (2) Call the same number; (3) Email contact@arihantlink.com. We respond 7 days a week."}}
  ]
}
</script>
HTML;

// Use $schemaMarkup variable so header.php picks it up
$schemaMarkup = $faqSchema;
?>

<?php include '../includes/header.php'; ?>

<!-- Hero -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5">
        <div class="row justify-content-center"><div class="col-lg-10">
            <span class="badge bg-<?php echo $blogCategoryClass; ?> px-4 py-2 mb-3" style="font-size:14px;"><?php echo $blogCategory; ?></span>
            <h1 class="text-white display-4 mb-4" style="font-family:'Jost',sans-serif; font-weight:700;"><?php echo $blogTitle; ?></h1>
            <div class="d-flex justify-content-center align-items-center flex-wrap gap-4 text-white mb-4">
                <div><i class="fa fa-user me-2"></i><?php echo $blogAuthor; ?></div>
                <div><i class="fa fa-calendar me-2"></i><?php echo $blogDate; ?></div>
                <div><i class="fa fa-clock me-2"></i><?php echo $blogReadTime; ?></div>
            </div>
            <p class="fs-5 text-white mb-0" style="max-width:800px;margin:0 auto;"><?php echo $blogExcerpt; ?></p>
        </div></div>
    </div>
</div>

<!-- Breadcrumb -->
<div class="container-fluid bg-light py-3"><div class="container">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
        <li class="breadcrumb-item active"><?php echo $blogCategory; ?></li>
    </ol>
</div></div>

<!-- TOC -->
<div class="container-fluid py-5 bg-white"><div class="container"><div class="row justify-content-center"><div class="col-lg-10">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h3 class="mb-3" style="color:var(--bs-primary);"><i class="fas fa-list me-2"></i>Jump to section</h3>
            <div class="row">
                <div class="col-md-6"><ul class="list-unstyled">
                    <li><a href="#food" class="text-decoration-none"><i class="fas fa-utensils text-success me-2"></i>Food on tour (10 Qs)</a></li>
                    <li><a href="#temples" class="text-decoration-none"><i class="fas fa-pray text-primary me-2"></i>Temples &amp; darshan (3 Qs)</a></li>
                    <li><a href="#activities" class="text-decoration-none"><i class="fas fa-camera text-secondary me-2"></i>Activities &amp; itinerary (3 Qs)</a></li>
                </ul></div>
                <div class="col-md-6"><ul class="list-unstyled">
                    <li><a href="#hotels" class="text-decoration-none"><i class="fas fa-hotel text-warning me-2"></i>Hotels &amp; rooms (4 Qs)</a></li>
                    <li><a href="#visa" class="text-decoration-none"><i class="fas fa-passport text-danger me-2"></i>Visa &amp; documents (3 Qs)</a></li>
                    <li><a href="#costs" class="text-decoration-none"><i class="fas fa-rupee-sign text-success me-2"></i>Costs &amp; booking (7 Qs)</a></li>
                </ul></div>
            </div>
        </div>
    </div>
</div></div></div></div>

<!-- Main FAQ content -->
<div class="container-fluid py-5"><div class="container"><div class="row justify-content-center"><div class="col-lg-10">
<div class="blog-content" style="line-height:1.8; font-size:17px;">

<section id="food" class="mb-5">
<h2 style="color:var(--bs-primary); font-family:'Jost',sans-serif;"><i class="fas fa-utensils text-success me-2"></i>Food on Tour — 10 Questions</h2>

<h3 class="mt-4">1. Will my breakfast be Jain at the hotel?</h3>
<p>Yes. We pre-arrange Jain breakfast with the hotel kitchen 7+ days before arrival. Hot poha, idli, dhokla, fresh fruit, parathas (no onion-garlic), juice, tea. Written confirmation shared before travel.</p>

<h3 class="mt-4">2. Can I bring my own tiffin from India?</h3>
<p>UAE customs allow sealed/packed vegetarian food in checked baggage. Bhakhri, theplas, sukhdi, khakhra travel well. Avoid oil-based or fresh produce. Many of our families carry a 2-day backup of homemade food.</p>

<h3 class="mt-4">3. Are there 100% Jain restaurants in Dubai?</h3>
<p>Yes. Saravana Bhavan (Karama branch), Govinda's, Aryaas, Sind Punjab Jain Kitchen, Bombay Chowpatty, and a few smaller community kitchens in Bur Dubai serve strict Jain food. We rotate these into your itinerary.</p>

<h3 class="mt-4">4. What happens on desert safari — is dinner really Jain?</h3>
<p>Our partner safari camps maintain a dedicated Jain dinner counter. Dishes include kadhi-rice, dal makhani (Jain-style), kadhai paneer (no onion-garlic), jeera rice, rotis, fresh salad, gulab jamun. Written menu shared 48 hours before.</p>

<h3 class="mt-4">5. Can hotels prepare Jain meals on request?</h3>
<p>5-star hotels (JW Marriott, Hyatt, Hilton, Marriott Marquis) handle Jain kitchen requests reliably. We pre-brief executive chefs in writing. 3-star hotels are less consistent — we use partner restaurants nearby instead.</p>

<h3 class="mt-4">6. What about pure veg options on the dhow cruise?</h3>
<p>Our partner cruises maintain a Jain/pure-veg counter. Main dishes: paneer butter masala (Jain), kadhi-pakoda, jeera rice, dal, rotis, fresh fruit, dessert. Live cooking station for Jain dishes.</p>

<h3 class="mt-4">7. Are airport lounges in Dubai Jain-friendly?</h3>
<p>Dubai Airport's Marhaba and Plaza Premium lounges have decent vegetarian options (idli, dosa, fruit, salad). Strict Jain travellers should bring own snacks or eat before/after lounge.</p>

<h3 class="mt-4">8. What about food on Dubai-Abu Dhabi day trips?</h3>
<p>BAPS Mandir Abu Dhabi has a prasad hall serving pure-veg lunch. For other Abu Dhabi tours, we pre-book a Jain meal pickup from a Dubai partner kitchen.</p>

<h3 class="mt-4">9. Is street food in Dubai safe for Jain travellers?</h3>
<p>We don't recommend street food for short trips — too many cross-contamination risks. Stick to our pre-vetted partner restaurants. Karama food court has 100% veg corners that are reliable.</p>

<h3 class="mt-4">10. Will I get bottled water and tea/coffee in the hotel room?</h3>
<p>Yes — all our partner hotels stock complimentary bottled water and a tea/coffee tray daily. Specify "no milk powder" if you prefer black tea/coffee — we'll arrange.</p>

<div class="p-4 bg-light rounded border-start border-5 border-primary my-4">
    <h5 class="text-primary mb-3"><i class="fa fa-lightbulb me-2"></i>Pro tip</h5>
    <p class="mb-0">Carry chyavanprash and homemade theplas in checked baggage. Two of our most-experienced Jain families always pack a 3-day backup — even when our written guarantees cover every meal — because comfort and trust are different things.</p>
</div>
</section>

<section id="temples" class="mb-5">
<h2 style="color:var(--bs-primary); font-family:'Jost',sans-serif;"><i class="fas fa-pray text-primary me-2"></i>Temples &amp; Darshan — 3 Questions</h2>

<h3 class="mt-4">11. What are Bur Dubai Jain mandir timings?</h3>
<p>Shri Mahavir Jain Temple Bur Dubai opens 06:30–11:30 morning and 17:30–21:00 evening daily. Aarti at 19:30. Located at Al Hisn Street near Bur Dubai metro. 10-minute drive from most central hotels.</p>

<h3 class="mt-4">12. Can we visit BAPS Mandir Abu Dhabi as part of a Jain tour?</h3>
<p>Yes. BAPS Hindu Mandir at Abu Mureikhah, Abu Dhabi opens 09:00–20:00 (closed Mondays). We include it in our 5N/6D and 7N/8D packages. Pure-veg lunch available at the prasad hall. Dress code applies — please cover shoulders and knees.</p>

<h3 class="mt-4">13. How do we get from Dubai hotel to Jain temple?</h3>
<p>All our packages include private transfers. Bur Dubai mandir from Downtown Dubai: 15 min by car. From Marina: 25 min. From Deira: 10 min. We schedule darshan in the evening before dinner.</p>
</section>

<section id="activities" class="mb-5">
<h2 style="color:var(--bs-primary); font-family:'Jost',sans-serif;"><i class="fas fa-camera text-secondary me-2"></i>Activities &amp; Itinerary — 3 Questions</h2>

<h3 class="mt-4">14. Which Dubai activities are appropriate for Jain families?</h3>
<p>Burj Khalifa, Dubai Frame, Museum of the Future, Miracle Garden, Global Village, Gold Souk, Spice Souk, dhow cruise, desert safari — all comfortable. Theme parks fine. Atlantis Aquarium fine. Avoid: nightclub districts, beach-clubs.</p>

<h3 class="mt-4">15. Is the dress code an issue in Dubai for Jain families?</h3>
<p>No. Dubai is liberal compared to other Gulf cities. Modest Indian clothes (kurtas, sarees, salwar-kameez) are perfectly fine everywhere. At mosques and BAPS mandir: cover shoulders and knees. Beach areas: family-friendly swimwear OK.</p>

<h3 class="mt-4">16. Are there separate seating arrangements for women on tours?</h3>
<p>On private vehicle tours (our default for families), seating is family-controlled. On shared safari camps, we book the family-only seating area (separate from solo tourist groups). VIP &amp; Premium safaris have private cabanas.</p>
</section>

<section id="hotels" class="mb-5">
<h2 style="color:var(--bs-primary); font-family:'Jost',sans-serif;"><i class="fas fa-hotel text-warning me-2"></i>Hotels &amp; Rooms — 4 Questions</h2>

<h3 class="mt-4">17. Which Dubai hotels handle Jain kitchen requests best?</h3>
<p>Top picks: Grand Hyatt Dubai, JW Marriott Marquis, Hilton Al Habtoor City, Movenpick Bur Dubai, Hyatt Place Al Rigga. All have written Jain procedures. Mid-tier: Premier Inn Karama, Citymax Bur Dubai — reliable Jain breakfast.</p>

<h3 class="mt-4">18. What's the difference between Jain-friendly and pure veg hotels?</h3>
<p>Pure veg = no meat/eggs/seafood served. Jain-friendly = additionally no onion, garlic, root vegetables in your meals (the kitchen may still cook these for other guests). We confirm which applies for your specific room/meal in writing.</p>

<h3 class="mt-4">19. Do Dubai hotels charge extra for Jain meals?</h3>
<p>No, hotels we partner with don't add a Jain meal surcharge — it's part of the room rate or the package. If a hotel asks for one, we redirect you to a partner restaurant of equal quality at no extra cost.</p>

<h3 class="mt-4">20. Can we book Jain-only hotel breakfast without buying the full package?</h3>
<p>Yes — we offer a hotel + breakfast-only Jain plan starting from AED 350/night per couple. WhatsApp us for current rates and your dates.</p>
</section>

<section id="visa" class="mb-5">
<h2 style="color:var(--bs-primary); font-family:'Jost',sans-serif;"><i class="fas fa-passport text-danger me-2"></i>Visa &amp; Documents — 3 Questions</h2>

<h3 class="mt-4">21. What's the 30-day UAE tourist visa process for Indian passport holders?</h3>
<p>30-day UAE tourist visa: AED 350 (single entry), processed in 3–5 working days. Documents: passport (6+ months valid), photo, return ticket, hotel booking. We process it for you. See <a href="/uae-visa">/uae-visa</a> for details.</p>

<h3 class="mt-4">22. Do you provide visa assistance with the tour package?</h3>
<p>Yes — visa is bundled into our packages or available standalone. We submit, track, and deliver the e-visa via WhatsApp. 95% approval rate. Rejected applications get a full refund minus processing fee.</p>

<h3 class="mt-4">23. Is the UAE 60-day visa available?</h3>
<p>Yes, the 60-day multi-entry visa is AED 650 and useful for families planning a longer stay or visiting other Gulf countries from Dubai. Process is identical to 30-day.</p>
</section>

<section id="costs" class="mb-5">
<h2 style="color:var(--bs-primary); font-family:'Jost',sans-serif;"><i class="fas fa-rupee-sign text-success me-2"></i>Costs &amp; Booking — 7 Questions</h2>

<h3 class="mt-4">24. What's a typical 5N/6D Dubai Jain tour cost in 2026?</h3>
<p>Family 5N/6D Jain package: AED 3,999 per person on twin-share (land-only). Includes 4-star hotel, all transfers, full-day city tour, VIP desert safari, dhow cruise, BAPS mandir, Burj Khalifa, all Jain meals. Flights extra. See full breakdown on <a href="/dubai-tour-packages-jain-food">our packages page</a>.</p>

<h3 class="mt-4">25. What's included and what's not in the package price?</h3>
<p><strong>Included:</strong> hotel, breakfast/lunch/dinner per itinerary, all transfers, mentioned attractions, English-speaking guide, mandir visit, visa processing fee.<br>
<strong>Not included:</strong> international flights, personal shopping, additional attractions outside itinerary, tips.</p>

<h3 class="mt-4">26. How much deposit do we pay to book a Jain Dubai package?</h3>
<p>AED 1,000 per person refundable deposit to confirm. Balance 14 days before travel. Bank transfer, UPI, credit card, or cash in person at our Sharjah office all accepted.</p>

<h3 class="mt-4">27. What's the cancellation policy?</h3>
<p>Free cancellation 30+ days before travel. 50% refund 30–15 days before. No refund within 14 days — but we'll re-schedule for medical or family emergencies.</p>

<h3 class="mt-4">28. Are there group discounts for large Jain families?</h3>
<p>Yes. 6+ travellers: 8% off. 10+ travellers: 12% off. 15+: custom group quote with dedicated coordinator. Multi-family groups travelling together get additional flexibility on itinerary.</p>

<h3 class="mt-4">29. Can we customise the itinerary?</h3>
<p>Yes — that's our default. Standard packages are a starting point. Want extra mandir time? Skip the desert safari? Add a yacht charter? All possible. Quote adjusts accordingly.</p>

<h3 class="mt-4">30. How do we book a Jain tour in Dubai?</h3>
<p>Three ways: (1) WhatsApp +971 58 594 5007 with your dates and group size — quote in 4 hours; (2) Call the same number; (3) Email contact@arihantlink.com. We respond 7 days a week.</p>
</section>

<div class="alert alert-success my-5 p-4">
    <h4 class="text-success"><i class="fas fa-check-circle me-2"></i>Ready to book?</h4>
    <p class="mb-2">If you've read this far, you're probably ready to plan. The fastest way to a confirmed Jain itinerary:</p>
    <a href="https://wa.me/971585945007?text=I read the Jain tour Dubai guide and want a quote" target="_blank" class="btn btn-success rounded-pill px-4 me-2"><i class="fab fa-whatsapp me-2"></i>WhatsApp Shweta Ji</a>
    <a href="/dubai-tour-packages-jain-food" class="btn btn-outline-primary rounded-pill px-4">See packages &amp; prices</a>
</div>

</div></div></div></div></div>

<?php include '../includes/footer.php'; ?>
