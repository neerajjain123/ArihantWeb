<?php
// Page SEO Variables
$pageTitle = "About Arihant Travel | Dubai&rsquo;s Jain &amp; Veg Tour Agency";
$pageDescription = "UAE's Jain-focused travel agency, founded by Shweta & Neeraj Jain. Pure veg tours, BAPS Mandir trips, Gujarati group tours, senior citizen packages.";
$pageKeywords = "about Arihant Travel, Jain travel agency Dubai, vegetarian tours Dubai, Dubai travel experts, Jain friendly travel, Dubai tour operator, Gujarati tour agency Dubai, Swaminarayan temple tour Dubai, BAPS mandir Abu Dhabi tour, Indian family travel agency Dubai, senior citizen Dubai tours";
$pageCanonical = "https://arihantlink.com/about";
$currentPage   = "about";
$breadcrumbBg  = "img/about-img.jpg";   // og:image for social shares

// Breadcrumb Variables for auto BreadcrumbList schema
$pageHeading = "About Us";
$breadcrumbCategory = "Company";
$breadcrumbCategoryLink = "#";

// Schema Markup - Organization + Founders
$schemaMarkup = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["TravelAgency", "LocalBusiness"],
    "name": "Arihant Travel",
    "alternateName": "Arihant Link Travel & Tourism",
    "url": "https://arihantlink.com",
    "logo": "https://arihantlink.com/img/logo.png",
    "image": "https://arihantlink.com/img/about-img.jpg",
    "description": "Dubai-based, UAE-licensed travel agency specializing in 100% pure vegetarian and Jain-friendly travel experiences. The only Jain-focused travel agency physically based in the UAE.",
    "slogan": "UAE\'s #1 Jain & Vegetarian Travel Agency",
    "telephone": "+971585945007",
    "email": "info@arihantlink.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Sharjah",
        "addressLocality": "Dubai",
        "addressRegion": "Dubai",
        "addressCountry": "AE"
    },
    "foundingDate": "2022",
    "founder": [
        {
            "@type": "Person",
            "name": "Shweta Jain",
            "jobTitle": "Founder & CEO",
            "image": "https://arihantlink.com/img/Shweta.webp",
            "description": "Visionary founder leading Arihant Travel with a mission to make Jain-friendly travel accessible in the UAE"
        },
        {
            "@type": "Person",
            "name": "Neeraj Jain",
            "jobTitle": "Founder & COO",
            "image": "https://arihantlink.com/img/Neeraj.webp",
            "description": "Operations leader ensuring every traveler receives exceptional service"
        }
    ],
    "employee": [
        {
            "@type": "Person",
            "name": "Moksha Jain",
            "jobTitle": "Sales Director"
        }
    ],
    "numberOfEmployees": {
        "@type": "QuantitativeValue",
        "minValue": 5,
        "maxValue": 15
    },
    "knowsAbout": ["Jain travel", "Vegetarian travel", "Gujarati tours", "Dubai tourism", "Desert safari", "Yacht charter", "UAE visa services", "Indian family travel", "BAPS Swaminarayan Mandir tours", "Senior citizen travel", "Group tours for Indian families"],
    "knowsLanguage": ["en", "hi", "gu"],
    "areaServed": [
        {"@type": "Country", "name": "United Arab Emirates"},
        {"@type": "City", "name": "Dubai"},
        {"@type": "City", "name": "Abu Dhabi"},
        {"@type": "Country", "name": "India"},
        {"@type": "City", "name": "Mumbai"},
        {"@type": "City", "name": "Ahmedabad"},
        {"@type": "City", "name": "Surat"},
        {"@type": "City", "name": "Delhi"},
        {"@type": "City", "name": "Bangalore"},
        {"@type": "City", "name": "Pune"},
        {"@type": "City", "name": "Jaipur"},
        {"@type": "City", "name": "Vadodara", "containedInPlace": {"@type": "Country", "name": "India"}},
        {"@type": "City", "name": "Rajkot", "containedInPlace": {"@type": "Country", "name": "India"}},
        {"@type": "City", "name": "Indore", "containedInPlace": {"@type": "Country", "name": "India"}},
        {"@type": "City", "name": "Udaipur", "containedInPlace": {"@type": "Country", "name": "India"}}
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "bestRating": "5",
        "reviewCount": "2000"
    },
    "sameAs": [
        "https://www.facebook.com/profile.php?id=61561499244239",
        "https://www.instagram.com/arihantlink/",
        "https://www.linkedin.com/company/ArihantTravel",
        "https://x.com/arihantraveldxb",
        "https://www.youtube.com/@arihanttraveldxb",
        "https://g.page/r/CZDbjoitBVREEAE"
    ]
}
</script>
';

include 'includes/header.php';
?>

<!-- Hero Section Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h1 class="text-white display-3 mb-4" style="font-family: 'Jost', sans-serif; font-weight: 700;">About Arihant Travel &mdash; UAE&rsquo;s #1 Jain &amp; Vegetarian Travel Agency</h1>
        <p class="fs-5 text-white mb-0">Your Trusted Partner for Jain-Friendly Dubai Experiences Since 2022</p>
    </div>
</div>
<!-- Hero Section End -->

<!-- Breadcrumb Navigation -->
<div class="container-fluid bg-light py-3">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">About</li>
        </ol>
    </div>
</div>

<!-- Our Story Section Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                    <img src="img/about-img.jpg" class="img-fluid w-100 h-100" alt="Arihant Travel team - Dubai based Jain and vegetarian travel agency founded by Shweta Jain">
                </div>
            </div>
            <div class="col-lg-7" style="background: url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">Our Story</h5>
                <h2 class="mb-4">Welcome to <span class="text-primary">Arihant Travel</span></h2>
                <p class="mb-4">Welcome to Arihant Travel, your trusted partner for unforgettable Dubai vacation
                    packages tailored specifically for Jain and vegetarian families. We specialize in creating
                    customized, hassle-free, and culturally aligned travel experiences that cater to the unique
                    preferences and needs of Jain travelers.</p>
                <p class="mb-4">From luxurious stays to curated sightseeing tours, we ensure every detail is
                    perfectly arranged to make your Dubai trip memorable, comfortable, and stress-free. Let us take
                    care of your travel plans while you focus on creating lifelong memories with your family.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                    </div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2"
                    href="https://wa.me/971585945007?text=I want to plan my Dubai trip">
                    <i class="fab fa-whatsapp me-2"></i>Plan Your Trip
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Our Story Section End -->

<!-- Our Values Section Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Values</h5>
            <h2 class="mb-4">What Sets Us Apart</h2>
            <p class="mb-0">We are committed to providing exceptional travel experiences that respect your values and
                exceed your expectations.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="value-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fa fa-leaf fa-3x text-success"></i>
                    </div>
                    <h4 class="mb-3">Pure Vegetarian</h4>
                    <p class="mb-0">We guarantee 100% pure vegetarian and Jain-friendly meals at every destination,
                        respecting your dietary preferences.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fa fa-heart fa-3x text-danger"></i>
                    </div>
                    <h4 class="mb-3">Family First</h4>
                    <p class="mb-0">Every itinerary is designed with families in mind, ensuring safe, comfortable, and
                        memorable experiences for all ages.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fa fa-star fa-3x text-warning"></i>
                    </div>
                    <h4 class="mb-3">Premium Service</h4>
                    <p class="mb-0">From handpicked hotels to 24/7 support, we deliver premium quality service that
                        exceeds expectations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fa fa-users fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Personalized Care</h4>
                    <p class="mb-0">Every trip is customized to your preferences. We listen, understand, and create
                        experiences just for you.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fa fa-shield-alt fa-3x text-info"></i>
                    </div>
                    <h4 class="mb-3">Trust & Safety</h4>
                    <p class="mb-0">With years of experience and thousands of happy families, your safety and
                        satisfaction are our top priorities.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="value-card bg-white rounded p-4 h-100 text-center shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fa fa-rupee-sign fa-3x text-secondary"></i>
                    </div>
                    <h4 class="mb-3">Best Value</h4>
                    <p class="mb-0">Quality doesn't have to be expensive. We offer competitive prices without
                        compromising on experience.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Values Section End -->

<!-- Meet Our Team Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Team</h5>
            <h2 class="mb-4">Meet Our Team</h2>
            <p class="mb-0">Our dedicated team of travel experts is passionate about creating perfect Jain-friendly
                travel experiences.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="team-card bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="team-img position-relative">
                        <img src="img/Shweta.webp" class="img-fluid w-100" alt="Shweta Jain - Founder and CEO of Arihant Travel Dubai"
                            style="height: 350px; object-fit: cover;">
                        <div class="team-social position-absolute w-100 bottom-0 start-0 p-3">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-light btn-sm-square rounded-circle">
                                    <i class="fab fa-linkedin-in text-primary"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-sm-square rounded-circle">
                                    <i class="fab fa-twitter text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="mb-2">Shweta Jain</h4>
                        <p class="text-primary mb-3">Founder & CEO</p>
                        <p class="mb-0 small text-muted">With a vision to make Jain-friendly travel accessible, Shweta
                            leads Arihant Travel with passion and dedication.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="team-img position-relative">
                        <img src="img/Neeraj.webp" class="img-fluid w-100" alt="Neeraj Jain - Founder and COO of Arihant Travel Dubai"
                            style="height: 350px; object-fit: cover;">
                        <div class="team-social position-absolute w-100 bottom-0 start-0 p-3">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-light btn-sm-square rounded-circle">
                                    <i class="fab fa-linkedin-in text-primary"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-sm-square rounded-circle">
                                    <i class="fab fa-twitter text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="mb-2">Neeraj Jain</h4>
                        <p class="text-primary mb-3">Founder & COO</p>
                        <p class="mb-0 small text-muted">Neeraj ensures every operation runs smoothly, delivering
                            exceptional experiences to all our travelers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card bg-white rounded overflow-hidden shadow-sm h-100">
                    <div class="team-img position-relative">
                        <img src="img/Moksha.webp" class="img-fluid w-100" alt="Moksha Jain - Sales Director at Arihant Travel Dubai"
                            style="height: 350px; object-fit: cover;">
                        <div class="team-social position-absolute w-100 bottom-0 start-0 p-3">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-light btn-sm-square rounded-circle">
                                    <i class="fab fa-linkedin-in text-primary"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-sm-square rounded-circle">
                                    <i class="fab fa-twitter text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="mb-2">Moksha Jain</h4>
                        <p class="text-primary mb-3">Sales Director</p>
                        <p class="mb-0 small text-muted">Moksha connects with families to understand their needs and
                            craft the perfect travel packages.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Meet Our Team Section End -->

<!-- Our Journey Timeline Section Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Journey</h5>
            <h2 class="mb-4">Milestones & Achievements</h2>
            <p class="mb-0">A look back at our journey of serving Jain families with exceptional travel experiences.</p>
        </div>
        <div class="timeline-container position-relative">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="timeline-item text-center">
                        <div class="timeline-icon bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-flag fa-2x text-white"></i>
                        </div>
                        <h3 class="text-primary mb-2">2015</h3>
                        <h4 class="mb-3">Founded</h4>
                        <p class="mb-0">Arihant Travel was established with a vision to provide specialized
                            Jain-friendly travel in Dubai.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="timeline-item text-center">
                        <div class="timeline-icon bg-secondary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-users fa-2x text-white"></i>
                        </div>
                        <h3 class="text-secondary mb-2">2018</h3>
                        <h4 class="mb-3">1,000+ Families Served</h4>
                        <p class="mb-0">Reached a significant milestone by successfully serving over a thousand families
                            with memorable Dubai experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="timeline-item text-center">
                        <div class="timeline-icon bg-success rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-2x text-white"></i>
                        </div>
                        <h3 class="text-success mb-2">2022</h3>
                        <h4 class="mb-3">Expanded Services</h4>
                        <p class="mb-0">Broadened our offerings to include international Jain-friendly tours beyond the
                            UAE.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats Counter -->
        <div class="row g-4 mt-5 pt-4">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <p class="display-4 text-primary mb-2 fw-bold">9+</p>
                    <p class="mb-0">Years of Experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <p class="display-4 text-primary mb-2 fw-bold">2000+</p>
                    <p class="mb-0">Happy Families</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <p class="display-4 text-primary mb-2 fw-bold">150+</p>
                    <p class="mb-0">Tour Packages</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item text-center">
                    <p class="display-4 text-primary mb-2 fw-bold">24/7</p>
                    <p class="mb-0">Customer Support</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Journey Timeline Section End -->

<!-- Testimonials Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonials</h5>
            <h2 class="mb-4">What Our Clients Say</h2>
            <p class="mb-0">Don't just take our word for it. Here's what families who traveled with us have to say.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="testimonial-card bg-white rounded p-4 h-100 shadow-sm position-relative">
                    <i class="fa fa-quote-left fa-3x text-primary opacity-25 position-absolute"
                        style="top: 20px; left: 20px;"></i>
                    <div class="ps-5 pt-4">
                        <p class="mb-4 fs-5">"Arihant Travel made our Dubai trip absolutely perfect. The Jain food
                            arrangements were flawless, and the itinerary was well-planned. Highly recommended!"</p>
                        <div class="d-flex align-items-center">
                            <div class="testimonial-avatar bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-user text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Happy Client</h5>
                                <small class="text-muted">Dubai Tour 2023</small>
                            </div>
                            <div class="ms-auto">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-card bg-white rounded p-4 h-100 shadow-sm position-relative">
                    <i class="fa fa-quote-left fa-3x text-primary opacity-25 position-absolute"
                        style="top: 20px; left: 20px;"></i>
                    <div class="ps-5 pt-4">
                        <p class="mb-4 fs-5">"Traveling as vegetarians can be challenging, but Arihant Travel took care
                            of everything. We enjoyed delicious meals and saw the best of Dubai without any worries."
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="testimonial-avatar bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-user text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Satisfied Family</h5>
                                <small class="text-muted">Family Tour 2024</small>
                            </div>
                            <div class="ms-auto">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" class="btn btn-primary rounded-pill py-3 px-5 me-2">
                <i class="fab fa-google me-2"></i>See All Google Reviews
            </a>
            <a href="https://g.page/r/CZDbjoitBVREEAE/review" target="_blank" class="btn btn-outline-primary rounded-pill py-3 px-5">
                <i class="fa fa-star me-2"></i>Write a Review
            </a>
        </div>
    </div>
</div>
<!-- Testimonials Section End -->

<!-- CTA Section Start -->
<div class="container-fluid subscribe py-5">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Ready to Travel?</h5>
            <h2 class="text-white mb-4">Plan Your Perfect Dubai Trip Today</h2>
            <p class="text-white mb-5">Contact us now to discuss your travel requirements. Our team is ready to create a
                customized, Jain-friendly travel experience just for you and your family.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/971585945007?text=I want to plan my Dubai trip" target="_blank"
                    class="btn btn-light rounded-pill py-3 px-5">
                    <i class="fab fa-whatsapp me-2 text-success"></i>Chat on WhatsApp
                </a>
                <a href="contact" class="btn btn-outline-light rounded-pill py-3 px-5">
                    <i class="fa fa-envelope me-2"></i>Contact Us
                </a>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End -->

<?php include 'includes/footer.php'; ?>