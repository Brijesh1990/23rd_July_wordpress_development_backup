<?php 
/**
 * Main template file
 * 
 * @package simple custom theme
 */

get_header()

?>
<header class="hero d-flex align-items-center text-center">
        <div class="container hero-content">
            <h1>Latest Collection 2026</h1>
            <p class="lead">Discover trending products at amazing prices</p><a href="products.html"
                class="btn btn-lg rounded-pill px-4">Shop Now →</a>
        </div>
    </header>
<section class="category-section py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Shop by Category</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card category-card text-center p-4">
                        <div class="category-icon">💻</div>
                        <h5 class="mt-3 fw-bold">Electronics</h5><a href="products.html?category=electronics"
                            class="mt-2">Browse</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card category-card text-center p-4">
                        <div class="category-icon">👕</div>
                        <h5 class="mt-3 fw-bold">Clothing</h5><a href="products.html?category=clothing"
                            class="mt-2">Browse</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card category-card text-center p-4">
                        <div class="category-icon">⌚</div>
                        <h5 class="mt-3 fw-bold">Accessories</h5><a href="products.html?category=accessories"
                            class="mt-2">Browse</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Featured Products</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card"><a href="product-details.html?id=1" class="text-decoration-none">
                            <div class="product-img"><span class="product-icon">🛍️</span></div>
                        </a>
                        <div class="card-body"><span class="badge badge-cat">electronics</span>
                            <h5 class="fw-bold mt-2">Wireless Headphones</h5>
                            <div class="price mb-3">$99</div><a href="cart.html" class="btn rounded-pill px-4">Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card"><a href="product-details.html?id=2" class="text-decoration-none">
                            <div class="product-img"><span class="product-icon">🛍️</span></div>
                        </a>
                        <div class="card-body"><span class="badge badge-cat">electronics</span>
                            <h5 class="fw-bold mt-2">Smart Watch</h5>
                            <div class="price mb-3">$199</div><a href="cart.html" class="btn rounded-pill px-4">Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card"><a href="product-details.html?id=3" class="text-decoration-none">
                            <div class="product-img"><span class="product-icon">🛍️</span></div>
                        </a>
                        <div class="card-body"><span class="badge badge-cat">clothing</span>
                            <h5 class="fw-bold mt-2">Cotton T-Shirt</h5>
                            <div class="price mb-3">$29</div><a href="cart.html" class="btn rounded-pill px-4">Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card"><a href="product-details.html?id=4" class="text-decoration-none">
                            <div class="product-img"><span class="product-icon">🛍️</span></div>
                        </a>
                        <div class="card-body"><span class="badge badge-cat">clothing</span>
                            <h5 class="fw-bold mt-2">Denim Jeans</h5>
                            <div class="price mb-3">$59</div><a href="cart.html" class="btn rounded-pill px-4">Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card"><a href="product-details.html?id=5" class="text-decoration-none">
                            <div class="product-img"><span class="product-icon">🛍️</span></div>
                        </a>
                        <div class="card-body"><span class="badge badge-cat">accessories</span>
                            <h5 class="fw-bold mt-2">Leather Wallet</h5>
                            <div class="price mb-3">$39</div><a href="cart.html" class="btn rounded-pill px-4">Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card"><a href="product-details.html?id=6" class="text-decoration-none">
                            <div class="product-img"><span class="product-icon">🛍️</span></div>
                        </a>
                        <div class="card-body"><span class="badge badge-cat">accessories</span>
                            <h5 class="fw-bold mt-2">Sunglasses</h5>
                            <div class="price mb-3">$79</div><a href="cart.html" class="btn rounded-pill px-4">Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer-wrap py-5">
        <div class="container">
            <div class="offer text-center p-5">
                <h2 class="fw-bold">🎉 Special Offer!</h2>
                <p>Get 20% off on your first order</p><a href="products.html"
                    class="btn btn-light rounded-pill px-4">Shop Now</a>
            </div>
        </div>


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
                                    type="text"
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
                                    
                                ></textarea>
                            </div>

                            <div class="col-12">
                                <button
                                    type="submit"
                                    name="contact_submit"
                                    class="btn btn-danger rounded-pill px-5 py-2"
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
</section>
<?php 
/**
 * Theme footer file
 * @package simple theme customize
 */
get_footer();
?>