<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package City_Blog
 */


if ( ! is_front_page() || is_home() ) { ?>
				</div>
			</div>
		</div><!-- #content -->
	<?php } ?>

	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'footer-widget' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) ) : ?>
			<div class="site-footer-top">
				<div class="ascendoor-wrapper">
					<div class="footer-widgets-wrapper"> 
						<div class="footer-widget-single">
							<?php dynamic_sidebar( 'footer-widget' ); ?>
						</div>
						<div class="footer-widget-single">
							<?php dynamic_sidebar( 'footer-widget-2' ); ?>
						</div>
						<div class="footer-widget-single">
							<?php dynamic_sidebar( 'footer-widget-3' ); ?>
						</div>
					</div>
				</div>
			</div><!-- .footer-top -->
		<?php endif; ?>
		<div class="site-footer-bottom">
			<div class="ascendoor-wrapper">
				<div class="site-footer-bottom-wrapper">
					<div class="site-info">

						<p>Have questions? Need to get in touch? <a href="/contact-us/">Contact Us.</a></p>

						<p><a href="/privacy-policy/">Privacy Policy</a> | <a href="/cookie-policy-updated/">Cookie Policy</a></p>

						<p>Copyright © <?php echo date('Y'); ?> Thrive Well LLC</p>

						<?php
						/**
						 * Hook: city_blog_footer_copyright.
						 *
						 * @hooked - city_blog_output_footer_copyright_content - 10
						 */
						// do_action( 'city_blog_footer_copyright' );
						?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

	<?php
	$is_scroll_top_active = get_theme_mod( 'city_blog_scroll_top', true );
	if ( $is_scroll_top_active ) :
		?>
		<a href="#" id="scroll-to-top" class="city-blog-scroll-to-top"><i class="fas fa-chevron-up"></i></a>
		<?php
	endif;
	?>
</div><!-- #page -->

<?php wp_footer(); ?>

<?php
  $woocommerce_page = get_post_meta(get_the_ID(),'woocommerce_page',true);
  if(! empty($woocommerce_page)) :
?>

<script type="text/javascript">
	(function () {
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	})();
</script>

<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js' id='zoom-js'></script>
<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js' id='flexslider-js'></script>
<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js' id='photoswipe-js'></script>
<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js' id='photoswipe-ui-default-js'></script>
<script id='wc-single-product-js-extra'>
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
</script>
<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js' id='wc-single-product-js'></script>
<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js' id='jquery-blockui-js'></script>
<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js' id='js-cookie-js'></script>
<script id='woocommerce-js-extra'>
var woocommerce_params = {"ajax_url":"\/sites\/thrive-well-v2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/sites\/thrive-well-v2\/?wc-ajax=%%endpoint%%"};
</script>
<script src='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js' id='woocommerce-js'></script>

<script src='http://localhost/sites/thrive-well-v2/wp-includes/js/comment-reply.min.js' id='comment-reply-js'></script>

<?php endif; ?>

<script>
var addToCartButton = document.querySelector('.woocommerce-page .add_to_cart_button');
if (addToCartButton) {
  addToCartButton.remove();
}
var quantity = document.querySelector('.woocommerce div.product form.cart div.quantity');
if (quantity) {
  quantity.remove();
}
var wooReviews = document.querySelector('.woocommerce-verification-required');
if (wooReviews) {
  wooReviews.remove();
}
var postNav = document.querySelector('.post-navigation');
if (postNav) {
  postNav.remove();
}
</script>
</body>
</html>
