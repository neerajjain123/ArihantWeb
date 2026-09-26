<!-- Enquiry Form Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Plan Your Trip</h5>
            <h2 class="mb-4">Send an Enquiry</h2>
            <p class="mb-0">Interested in this package? Fill out the form below and our experts will get back to you
                with a customized quote and details.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-white rounded shadow p-4 p-md-5">
                    <form id="package-enquiry-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="enquiry-name" name="name"
                                        placeholder="Your Name" required>
                                    <label for="enquiry-name">Your Name *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="enquiry-email" name="email"
                                        placeholder="Your Email" required>
                                    <label for="enquiry-email">Email Address *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="enquiry-phone" name="phone"
                                        placeholder="+971 XX XXX XXXX">
                                    <label for="enquiry-phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="enquiry-subject" name="subject"
                                        value="Enquiry: <?php echo isset($pageHeading) ? $pageHeading : 'Dubai Holiday Package'; ?>"
                                        readonly>
                                    <label for="enquiry-subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here"
                                        id="enquiry-message" name="message" style="height: 150px"
                                        required>I am interested in the <?php echo isset($pageHeading) ? $pageHeading : 'Dubai holiday package'; ?>. Please provide more details.</textarea>
                                    <label for="enquiry-message">Message *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 rounded-pill" type="submit">Send
                                    Enquiry</button>
                                <p class="text-muted text-center mt-2 mb-0"><small>We focus on Jain-friendly &
                                        family-comfortable tours</small></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('package-enquiry-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const submitButton = this.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;

        submitButton.disabled = true;
        submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';

        const data = {
            name: formData.get('name'),
            email: formData.get('email'),
            phone: formData.get('phone') || 'Not provided',
            subject: formData.get('subject'),
            message: formData.get('message')
        };

        fetch('includes/send-contact-email.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    alert('Thank you! Your enquiry has been sent. We will contact you shortly.');
                    this.reset();
                } else {
                    alert('Error: ' + result.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Sorry, there was an error sending your message. Please try again or contact us directly.');
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            });
    });
</script>
<!-- Enquiry Form End -->