<!-- Enquiry Sidebar Form Start -->
<div class="card shadow mt-4" id="enquiry-sidebar">
    <div class="card-body">
        <h4 class="card-title mb-4">Quick Enquiry</h4>
        <form id="side-enquiry-form">
            <div class="row g-3">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="side-name" name="name" placeholder="Your Name"
                            required>
                        <label for="side-name">Your Name *</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="side-email" name="email" placeholder="Your Email"
                            required>
                        <label for="side-email">Email Address *</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="tel" class="form-control" id="side-phone" name="phone" placeholder="Phone Number" required>
                        <label for="side-phone">Phone Number *</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="side-tickets" name="tickets" placeholder="Tickets" min="1" max="50" required>
                        <label for="side-tickets">No. of Tickets *</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="side-date" name="visit_date" placeholder="Visit Date" required>
                        <label for="side-date">Visit Date *</label>
                    </div>
                </div>
                <div class="col-12">
                    <input type="hidden" name="subject"
                        value="Sidebar Enquiry: <?php echo isset($pageHeading) ? $pageHeading : 'Safari/Holiday'; ?>">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Message" id="side-message" name="message"
                            style="height: 100px"
                            required>I am interested in <?php echo isset($pageHeading) ? $pageHeading : 'this package'; ?>. Please share more details.</textarea>
                        <label for="side-message">Your Message *</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Send Enquiry</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('side-enquiry-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';

        const formData = new FormData(this);
        const tickets = formData.get('tickets');
        const visitDate = formData.get('visit_date');
        const baseMessage = formData.get('message');
        const enrichedMessage = baseMessage
            + '\n\nNo. of Tickets: ' + (tickets || 'Not provided')
            + '\nVisit Date: ' + (visitDate || 'Not provided');

        const data = {
            name: formData.get('name'),
            email: formData.get('email'),
            phone: formData.get('phone') || 'Not provided',
            subject: formData.get('subject'),
            message: enrichedMessage
        };

        fetch('includes/send-contact-email.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    alert('Thank you! Your enquiry has been received.');
                    this.reset();
                } else {
                    alert('Error: ' + result.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error sending message. Please try WhatsApp or call us.');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
    });
</script>
<!-- Enquiry Sidebar Form End -->