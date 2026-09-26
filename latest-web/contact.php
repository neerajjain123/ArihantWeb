<?php
// Page SEO Variables
$pageTitle = "Contact Arihant Travels | Reach Out for Dubai Tours & Visa Services";
$pageDescription = "Contact Arihant Travels for Dubai tours, packages, and visa services. Call us at +971585945007, email us, or connect via WhatsApp. We're here to help!";
$pageKeywords = "Contact Arihant Travels, Dubai tour operator, visa services, WhatsApp contact, Arihant Travels phone, Arihant Travels email, customer support, tour booking";
$pageCanonical = "https://arihantlink.com/contact";
$currentPage = "contact";

// Breadcrumb Variables
$pageHeading = "Contact Us";
$pageSubheading = "Get In Touch With Us";
$pageDescription2 = "We're here to help! Reach out via any channel below.";
$schemaMarkup = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Arihant Travels",
    "description": "Contact Arihant Travels for Dubai tours, packages, and visa services. Available via phone, email, and WhatsApp.",
    "url": "https://arihantlink.com/contact",
    "mainEntity": {
        "@type": "TravelAgency",
        "name": "Arihant Travels Pvt Ltd",
        "telephone": "+971585945007",
        "email": "contact@arihantlink.com",
        "address": {"@type": "PostalAddress", "addressLocality": "Sharjah", "addressCountry": "AE", "streetAddress": "Al Rayyan Complex, Al Nahda"}
    }
}
</script>';

include 'includes/header.php';
?>

<?php include 'includes/breadcrumb.php'; ?>

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <!-- Contact Form Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h5 class="section-title px-3">Send Us a Message</h5>
                    <h2 class="h1 mb-3">Contact For Any Query</h2>
                    <p class="mb-0">Have a question or want to book a tour? Fill out the form below and we'll get
                        back to you within 24 hours.</p>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="bg-light rounded p-4 h-100">
                    <h3 class="mb-4">Contact Information</h3>

                    <div class="d-flex align-items-start mb-4">
                        <div class="flex-shrink-0">
                            <div class="btn-square bg-primary rounded-circle" style="width: 50px; height: 50px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5>Phone</h5>
                            <p class="mb-0"><a href="tel:+971585945007" class="text-primary">+971 58 594 5007</a>
                            </p>
                            <small class="text-muted">Available Monday to Sunday, 9 AM - 6 PM (UAE Time)</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="flex-shrink-0">
                            <div class="btn-square bg-success rounded-circle" style="width: 50px; height: 50px;">
                                <i class="fab fa-whatsapp text-white"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5>WhatsApp</h5>
                            <p class="mb-0"><a href="https://wa.me/971585945007" class="text-primary"
                                    target="_blank">Chat with us</a></p>
                            <small class="text-muted">Instant messaging for quick inquiries</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="flex-shrink-0">
                            <div class="btn-square bg-primary rounded-circle" style="width: 50px; height: 50px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5>Email</h5>
                            <p class="mb-0"><a href="mailto:contact@arihantlink.com"
                                    class="text-primary">contact@arihantlink.com</a></p>
                            <small class="text-muted">We'll respond within 24 hours</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="btn-square bg-primary rounded-circle" style="width: 50px; height: 50px;">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5>Address</h5>
                            <p class="mb-0">Al Rayyan Complex, Al Nahda<br>Sharjah, UAE</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="bg-light rounded p-4 p-md-5">
                    <form id="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name" required>
                                    <label for="name">Your Name *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email" required>
                                    <label for="email">Email Address *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="+971 XX XXX XXXX">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Tour Booking">Tour Booking</option>
                                        <option value="Visa Services">Visa Services</option>
                                        <option value="Custom Package">Custom Package</option>
                                        <option value="Group Booking">Group Booking</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label for="subject">Subject *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        name="message" style="height: 150px" required></textarea>
                                    <label for="message">Message *</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                <p class="text-muted text-center mt-2 mb-0"><small>We'll respond within 24
                                        hours</small></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-4">Quick FAQs</h2>
            </div>
            <div class="col-md-6 mb-3">
                <div class="bg-light rounded p-4">
                    <h5 class="mb-3">What are your business hours?</h5>
                    <p class="mb-0">We are available Monday to Sunday, 9 AM - 6 PM UAE Time. Feel free to reach out
                        anytime!</p>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="bg-light rounded p-4">
                    <h5 class="mb-3">How quickly can I book a tour?</h5>
                    <p class="mb-0">Most tours can be booked within 24-48 hours. Contact us with your preferred
                        dates and we'll get you sorted!</p>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="bg-light rounded p-4">
                    <h5 class="mb-3">Do you offer custom itineraries?</h5>
                    <p class="mb-0">Yes! We specialize in custom Jain-friendly tours. Share your requirements and
                        we'll create a perfect itinerary for you.</p>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="bg-light rounded p-4">
                    <h5 class="mb-3">Do you assist with UAE visas?</h5>
                    <p class="mb-0">Absolutely! We provide complete visa assistance including 30-day, 60-day, and
                        transit visas. <a href="uae-visa.php" class="text-primary">Learn more about our visa
                            services</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h2 class="text-white mb-4">Get Exclusive Travel Deals</h2>
                <p class="text-white mb-5">Subscribe to our newsletter and receive exclusive offers, travel tips, and
                    updates on our latest Jain-friendly Dubai packages. Be the first to know about special discounts and
                    new
                    tour destinations!
                </p>
                <form id="subscribe-form" class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="email"
                        id="subscribe-email" placeholder="Your email" required>
                    <button type="submit"
                        class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

    <script>
        // Contact form handling with debug logging
        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();
            console.log('=== CONTACT FORM SUBMISSION STARTED ===');

            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;

            // Disable button and show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
            console.log('Button disabled, loading state shown');

            // Prepare data for email
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                phone: formData.get('phone') || 'Not provided',
                subject: formData.get('subject'),
                message: formData.get('message')
            };
            console.log('Form data prepared:', JSON.stringify(data, null, 2));

            // Send via AJAX to email handler
            const endpoint = 'includes/send-contact-email.php';
            console.log('Sending request to:', endpoint);
            console.log('Request body:', JSON.stringify(data));

            fetch(endpoint, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
                .then(response => {
                    console.log('=== RESPONSE RECEIVED ===');
                    console.log('Response status:', response.status);
                    console.log('Response statusText:', response.statusText);
                    console.log('Response ok:', response.ok);
                    console.log('Response headers:', [...response.headers.entries()]);

                    // Clone response to read text for debugging
                    return response.clone().text().then(text => {
                        console.log('Raw response text:', text);
                        console.log('Response text length:', text.length);

                        // Try to parse as JSON
                        try {
                            const jsonResult = JSON.parse(text);
                            console.log('Parsed JSON successfully:', jsonResult);
                            return jsonResult;
                        } catch (parseError) {
                            console.error('=== JSON PARSE ERROR ===');
                            console.error('Parse error:', parseError.message);
                            console.error('Raw text that failed to parse:', text);
                            throw new Error('Server returned invalid JSON: ' + text.substring(0, 200));
                        }
                    });
                })
                .then(result => {
                    console.log('=== PROCESSING RESULT ===');
                    console.log('Result object:', result);
                    console.log('Result.success:', result.success);
                    console.log('Result.message:', result.message);

                    if (result.success) {
                        console.log('SUCCESS - Email sent!');
                        // Show success message
                        alert(result.message);

                        // Reset form
                        this.reset();
                        console.log('Form reset');

                        // Optional: Also send to WhatsApp as backup
                        const whatsappMessage = `*New Contact Form Submission*%0A%0A*Name:* ${encodeURIComponent(data.name)}%0A*Email:* ${encodeURIComponent(data.email)}%0A*Phone:* ${encodeURIComponent(data.phone)}%0A*Subject:* ${encodeURIComponent(data.subject)}%0A*Message:* ${encodeURIComponent(data.message)}`;

                        // Ask if user wants to also send via WhatsApp
                        if (confirm('Would you also like to send this message via WhatsApp for faster response?')) {
                            window.open(`https://wa.me/971585945007?text=${whatsappMessage}`, '_blank');
                        }
                    } else {
                        console.log('FAILURE - Server returned error');
                        // Show error message
                        alert('Error: ' + result.message);
                    }
                })
                .catch(error => {
                    console.error('=== FETCH/NETWORK ERROR ===');
                    console.error('Error name:', error.name);
                    console.error('Error message:', error.message);
                    console.error('Error stack:', error.stack);
                    console.error('Full error object:', error);
                    alert('Sorry, there was an error sending your message. Please try again or contact us directly at +971 58 594 5007.\n\nDebug info: ' + error.message);
                })
                .finally(() => {
                    console.log('=== CLEANUP ===');
                    // Re-enable button
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonText;
                    console.log('Button re-enabled, original state restored');
                    console.log('=== CONTACT FORM SUBMISSION COMPLETED ===');
                });
        });
    </script>

    <script>
        // Newsletter subscribe form handling
        document.getElementById('subscribe-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('subscribe-email').value;
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;

            // Disable button and show loading
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Subscribing...';

            // Simulate subscription (you can replace this with actual API call)
            setTimeout(() => {
                alert('Thank you for subscribing! You will receive our latest travel deals and updates.');
                document.getElementById('subscribe-email').value = '';
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            }, 1000);
        });
    </script>

    <?php include 'includes/footer.php'; ?>