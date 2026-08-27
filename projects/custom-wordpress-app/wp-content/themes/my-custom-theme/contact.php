<?php
/**
 * Contact Us Page Template
 *
 * @package simple custom theme
 */

get_header();
?>

<header class="hero d-flex align-items-center text-center">
    <div class="container hero-content">
        <h1>Contact Us</h1>
        <p class="lead">We’d love to hear from you. Get in touch with us today.</p>
    </div>
</header>

<section class="contact-section py-5">
    <div class="container">
        <div class="row g-5 align-items-start">

            <!-- Contact Information -->
            <div class="col-lg-5">
                <h2 class="section-title mb-4">Get In Touch</h2>

                <p class="mb-4">
                    Have a question about our products or your order?
                    Send us a message and our team will get back to you as soon as possible.
                </p>

                <div class="contact-info mb-4">
                    <h5 class="fw-bold">📍 Address</h5>
                    <p>123 Main Street, New York, NY 10001</p>
                </div>

                <div class="contact-info mb-4">
                    <h5 class="fw-bold">📧 Email</h5>
                    <p>support@example.com</p>
                </div>

                <div class="contact-info mb-4">
                    <h5 class="fw-bold">📞 Phone</h5>
                    <p>+1 234 567 890</p>
                </div>

                <div class="contact-info">
                    <h5 class="fw-bold">🕒 Business Hours</h5>
                    <p>Monday – Friday: 9:00 AM – 6:00 PM</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card contact-form-card p-4 p-md-5">

                    <h2 class="fw-bold mb-4">Send Us a Message</h2>

                    <form  method="post" name="frm" onsubmit="return valid(this.value)">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                    placeholder="Enter your name"
                                    
                                >
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    
                                >
                            </div>

                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <input
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    class="form-control"
                                    placeholder="Enter subject"
                                    
                                >
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    class="form-control"
                                    rows="6"
                                    placeholder="Write your message..."
                                    required
                                ></textarea>
                            </div>

                            <div class="col-12">
                                <button
                                    type="submit"
                                    name="contact_submit"
                                    class="btn rounded-pill px-5 py-2"
                                >
                                    Send Message →
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
?>
