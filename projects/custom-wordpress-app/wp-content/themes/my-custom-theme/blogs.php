
<?php
/**
 * Blog Listing Page Template
 *
 * @package My Custom Theme
 * Template Name: Blogs
 */

if (!defined('ABSPATH')) {
exit;
}

get_header();
?>

<main id="primary" class="site-main">

<!-- =========================
BLOG HERO SECTION
========================== -->
<section class="blog-hero py-5 bg-dark text-white">

<div class="container">

<div class="row justify-content-center text-center">

<div class="col-lg-8 col-md-10">

<span class="badge bg-primary px-3 py-2 mb-3">
Our Blog
</span>

<h1 class="display-4 fw-bold mb-3">
Latest Articles & Insights
</h1>

<p class="lead mb-0">
Explore our latest articles, tutorials, news,
technology updates and useful information.
</p>

</div>

</div>

</div>

</section>



<!-- =========================
BLOG POSTS
========================== -->
<section class="blogs-section py-5">

<div class="container">

<div class="row g-4">

<?php

/*
* Blog Query
*/
$blog_query = new WP_Query(
array(
'post_type'      => 'post',
'post_status'    => 'publish',
'posts_per_page' => 9,
'paged'          => max(
1,
get_query_var('paged'),
get_query_var('page')
),
)
);


if ($blog_query->have_posts()) :

while ($blog_query->have_posts()) :

$blog_query->the_post();

?>

<!-- =========================
BLOG CARD
========================== -->
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

<article
id="post-<?php the_ID(); ?>"
<?php post_class('card h-100 border-0 shadow-sm blog-card'); ?>
>

<!-- Featured Image -->
<div class="blog-image position-relative overflow-hidden">

<a
href="<?php the_permalink(); ?>"
aria-label="<?php echo esc_attr(get_the_title()); ?>"
>

<?php

if (has_post_thumbnail()) {

the_post_thumbnail(
'large',
array(
'class' => 'card-img-top img-fluid',
'alt'   => esc_attr(get_the_title()),
)
);

} else {

?>

<img
src="<?php echo esc_url(
get_template_directory_uri() .
'/assets/images/blog-placeholder.jpg'
); ?>"
class="card-img-top img-fluid"
alt="Blog placeholder"
>

<?php
}
?>

</a>


<!-- Category Badge -->
<?php

$post_categories = get_the_category();

if (!empty($post_categories)) :
?>

<span class="position-absolute top-0 start-0 m-3 badge bg-primary">

<?php
echo esc_html(
$post_categories[0]->name
);
?>

</span>

<?php endif; ?>

</div>


<!-- Blog Content -->
<div class="card-body p-4 d-flex flex-column">

<!-- Meta Information -->
<div class="blog-meta mb-3 text-muted small">

<span class="me-3">

<i class="bi bi-calendar3 me-1"></i>

<?php
echo esc_html(
get_the_date('M d, Y')
);
?>

</span>


<span>

<i class="bi bi-person me-1"></i>

<?php
echo esc_html(
get_the_author()
);
?>

</span>

</div>


<!-- Title -->
<h2 class="card-title h4 fw-bold">

<a
href="<?php the_permalink(); ?>"
class="text-decoration-none text-dark"
>

<?php
the_title();
?>

</a>

</h2>


<!-- Excerpt -->
<div class="card-text text-muted mb-4">

<?php

if (has_excerpt()) {

echo wp_kses_post(
wp_trim_words(
get_the_excerpt(),
25,
'...'
)
);

} else {

echo esc_html(
wp_trim_words(
get_the_content(),
25,
'...'
)
);

}

?>

</div>


<!-- Read More -->
<div class="mt-auto">

<a
href="<?php the_permalink(); ?>"
class="btn btn-primary"
>

Read More

<i class="bi bi-arrow-right ms-2"></i>

</a>

</div>

</div>

</article>

</div>

<?php

endwhile;

else :

?>

<!-- No Posts -->
<div class="col-12">

<div class="text-center py-5">

<div class="mb-4">

<i
class="bi bi-journal-x display-1 text-muted"
></i>

</div>

<h2 class="fw-bold">
No Blogs Found
</h2>

<p class="text-muted">
Sorry, we couldn't find any blog posts.
Please check again later.
</p>

<a
href="<?php echo esc_url(home_url('/')); ?>"
class="btn btn-primary"
>
Back to Home
</a>

</div>

</div>

<?php

endif;

?>

</div>


<!-- =========================
PAGINATION
========================== -->
<?php if ($blog_query->max_num_pages > 1) : ?>

<div class="row mt-5">

<div class="col-12">

<nav
aria-label="Blog pagination"
class="blog-pagination"
>

<?php

echo paginate_links(
array(
'base'      => str_replace(
999999999,
'%#%',
esc_url(
get_pagenum_link(999999999)
)
),

'format'    => '?paged=%#%',

'current'   => max(
1,
get_query_var('paged')
),

'total'     => $blog_query->max_num_pages,

'type'      => 'list',

'prev_text' => '&laquo; Previous',

'next_text' => 'Next &raquo;',

)
);

?>

</nav>

</div>

</div>

<?php endif; ?>


<?php

/*
* Reset WordPress Post Data
*/
wp_reset_postdata();

?>

</div>

</section>


<!-- =========================
NEWSLETTER SECTION
========================== -->
<section class="newsletter-section py-5 bg-light">

<div class="container">

<div class="row justify-content-center text-center">

<div class="col-lg-8 col-md-10">

<div class="p-4 p-md-5 bg-white rounded-4 shadow-sm">

<div class="mb-3">

<i class="bi bi-envelope-paper display-5 text-primary"></i>

</div>

<h2 class="fw-bold">
Subscribe to Our Newsletter
</h2>

<p class="text-muted">
Get the latest articles, tutorials and updates
directly in your inbox.
</p>


<form class="row g-2 justify-content-center mt-4">

<div class="col-md-8 col-12">

<label
for="newsletter-email"
class="visually-hidden"
>
Email Address
</label>

<input
type="email"
id="newsletter-email"
class="form-control form-control-lg"
placeholder="Enter your email address"
required
>

</div>


<div class="col-md-4 col-12">

<button
type="submit"
class="btn btn-primary btn-lg w-100"
>

Subscribe

<i class="bi bi-send ms-2"></i>

</button>

</div>

</form>

</div>

</div>

</div>

</div>

</section>

</main>


<!-- =========================
BLOG CUSTOM CSS
========================== -->

<style>

/* Blog Card */
.blog-card {
transition: all 0.3s ease;
overflow: hidden;
}

.blog-card:hover {
transform: translateY(-8px);
box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15) !important;
}


/* Blog Image */
.blog-image {
height: 240px;
background: #f8f9fa;
}

.blog-image img {
width: 100%;
height: 100%;
object-fit: cover;
transition: transform 0.4s ease;
}

.blog-card:hover .blog-image img {
transform: scale(1.08);
}


/* Blog Meta */
.blog-meta {
font-size: 14px;
}


/* Blog title */
.blog-card .card-title a {
transition: color 0.3s ease;
}

.blog-card .card-title a:hover {
color: #0d6efd !important;
}


/* Pagination */
.blog-pagination ul {
display: flex;
justify-content: center;
align-items: center;
gap: 8px;
list-style: none;
padding: 0;
margin: 0;
flex-wrap: wrap;
}

.blog-pagination li {
margin: 0;
}

.blog-pagination a,
.blog-pagination span {
display: inline-flex;
align-items: center;
justify-content: center;
min-width: 42px;
height: 42px;
padding: 0 14px;
border: 1px solid #dee2e6;
border-radius: 6px;
text-decoration: none;
background: #fff;
color: #212529;
}

.blog-pagination .current {
background: #0d6efd;
color: #fff;
border-color: #0d6efd;
}


/* Hero */
.blog-hero {
background: linear-gradient(
135deg,
#212529,
#343a40
) !important;
}


/* Mobile */
@media (max-width: 767.98px) {

.blog-hero {
padding-top: 60px !important;
padding-bottom: 60px !important;
}

.blog-hero h1 {
font-size: 2.2rem;
}

.blog-image {
height: 220px;
}

}


/* Small Mobile */
@media (max-width: 575.98px) {

.blog-hero h1 {
font-size: 1.9rem;
}

.blog-hero p {
font-size: 1rem;
}

.blog-image {
height: 210px;
}

.blog-card .card-body {
padding: 1.25rem !important;
}

}

</style>


<?php
get_footer();
?>

