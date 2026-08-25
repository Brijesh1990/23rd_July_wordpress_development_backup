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
    </section>
<?php 
/**
 * Theme footer file
 * @package simple theme customize
 */
get_footer();
?>