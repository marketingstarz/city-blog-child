<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package City_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mag-post-single">
		<div class="mag-post-detail">
			<div class="mag-post-category">
				<?php city_blog_categories_list(); ?>
			</div>
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="mag-post-meta">
						<?php
						// city_blog_posted_by();
						// city_blog_posted_on();
						$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
						if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
							$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
						}
						$time_string = sprintf(
							$time_string,
							esc_attr( get_the_date( DATE_W3C ) ),
							esc_html( get_the_date() ),
							esc_attr( get_the_modified_date( DATE_W3C ) ),
							esc_html( get_the_modified_date() )
						);
						echo $time_string
						?>
					</div>
				<?php endif; ?>
			</header><!-- .entry-header -->
		</div>
		<?php city_blog_post_thumbnail(); ?>
		<div class="entry-content">

			<?php
				$by_line_url = get_post_meta(get_the_ID(),'by_line_url',true);
				$by_line_name = get_post_meta(get_the_ID(),'by_line_name',true);
				if(! empty($by_line_name)) :
			?>
				<p class="by-line">Photo by <a target="_blank" href="<?php echo $by_line_url; ?>"><?php echo $by_line_name; ?></a></p>
			<?php endif; ?>

			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'city-blog' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'city-blog' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
		<?php city_blog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->