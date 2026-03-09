
<?php include 'includes/header.php'; ?>

<section class="mt-5 mb-5">
    <div class="container">

        <div class="row g-5">

            <!-- CONTACT FORM -->
            <div class="col-lg-7">

                <h3 class="fw-bold mb-3">Contact Agent</h3>
                <p class="text-muted mb-4">
                Interested in this property? Send a message to the agent and they will respond shortly.
                </p>

                <form>

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Your email">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="Your phone number">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" placeholder="Inquiry about property">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" placeholder="Write your message..."></textarea>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary px-4">
                                Send Message
                            </button>
                        </div>

                    </div>

                </form>

            </div>


            <!-- AGENT INFO -->
            <div class="col-lg-5">

                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <div class="d-flex align-items-center mb-3">

                            <img src="https://i.pravatar.cc/40"
                            class="rounded-circle me-3"
                            width="70"
                            height="70">

                            <div>
                                <h5 class="mb-0">David Johnson</h5>
                                <small class="text-muted">Property Agent</small>
                            </div>

                        </div>

                        <p class="text-muted">
                        David is an experienced real estate agent specializing in residential properties. 
                        He will guide you through the process and answer any questions about the property.
                        </p>

                        <hr>

                        <div class="mb-3">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            +234 800 123 4567
                        </div>

                        <div class="mb-3">
                            <i class="bi bi-envelope text-primary me-2"></i>
                            agent@email.com
                        </div>

                        <div class="mb-3">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            Port Harcourt, Nigeria
                        </div>

                        <a href="#" class="btn btn-success w-100">
                            <i class="bi bi-whatsapp me-2"></i>
                            Chat on WhatsApp
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>