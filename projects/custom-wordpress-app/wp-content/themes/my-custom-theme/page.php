<?php
/**
 * The template for displaying all pages
 *
 * @package My Custom Theme
 */

if (!defined('ABSPATH')) {
exit;
}

get_header();
?>
<main id="primary" class="site-main"> <!-- Page Header --> <section class="page-header bg-light py-5"> <div class="container">


<?php
while (have_posts()) :
the_post();

the_content();

endwhile;
?>

</div>
</section>

<?php
get_footer();
?>
