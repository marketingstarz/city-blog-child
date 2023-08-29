<?php
/**
 * Template Name: Product
 * Template Post Type: page
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	do_action( 'city_blog_breadcrumb' );
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page-product' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
if ( city_blog_is_sidebar_enabled() ) {
	get_sidebar();
}
get_footer();
