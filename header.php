<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package City_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<?php if ( is_user_logged_in() ) : ?>

<style>
@import "/wp-content/plugins/mkstrz-plugin/style.css";
</style>

<?php else : ?>




<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TS22MVQT');</script>
<!-- End Google Tag Manager -->




<?php endif; ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if ( is_page() ) : ?>
	<?php $schema = get_post_meta( get_the_ID(), 'schema', true);if( ! empty( $schema ) ) {echo $schema;}?>
	<?php endif; ?>

	<?php wp_head(); ?>

<?php
  $woocommerce_page = get_post_meta(get_the_ID(),'woocommerce_page',true);
  if(! empty($woocommerce_page)) :
?>

<link rel='stylesheet' id='wc-blocks-style-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-active-filters-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/active-filters.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-add-to-cart-form-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/add-to-cart-form.css' media='all' />
<link rel='stylesheet' id='wc-blocks-packages-style-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/packages-style.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-all-products-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-products.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-all-reviews-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-reviews.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-attribute-filter-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/attribute-filter.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-breadcrumbs-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/breadcrumbs.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-catalog-sorting-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/catalog-sorting.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-customer-account-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/customer-account.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-featured-category-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-category.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-featured-product-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-product.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-mini-cart-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-cart.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-price-filter-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/price-filter.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-add-to-cart-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-add-to-cart.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-button-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-button.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-categories-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-categories.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-image-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-image.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-image-gallery-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-image-gallery.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-query-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-query.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-results-count-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-results-count.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-reviews-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-reviews.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-sale-badge-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-sale-badge.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-search-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-search.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-sku-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-sku.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-stock-indicator-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-stock-indicator.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-summary-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-summary.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-title-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-title.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-rating-filter-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/rating-filter.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-reviews-by-category-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-category.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-reviews-by-product-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-product.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-product-details-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-details.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-single-product-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/single-product.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-stock-filter-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stock-filter.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-cart-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/cart.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-checkout-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/checkout.css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-mini-cart-contents-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-cart-contents.css' media='all' />

<link rel='stylesheet' id='photoswipe-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='http://localhost/sites/thrive-well-v2/wp-content/plugins/woocommerce/assets/css/woocommerce.css' media='all' />
<style id='woocommerce-inline-inline-css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>

<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>

<?php endif; ?>

<style>
body,
button,
input,
select,
optgroup,
textarea {
  /*font-family: 'Lora', serif !important;*/
}
h2,h3,h4,h5,h6,
.related-posts h2 {
  /*font-family: 'Barlow', sans-serif;*/
}
h1.page-title {
  /*font-family: 'Barlow', sans-serif;*/
  font-size: 33px;
}
h2 {
  font-size: 27px;
}
h3 {
  font-size: 23px;
}
h4, h5, h6 {
  font-size: 19px;
}
.site-description {
  /*font-family: serif !important;*/
  font-size: 25px !important;
}

.site-title a {
  font-family: Quicksand, serif !important;
  font-weight: 500;
}

a,
a:visited {
  color: #d82926;
}
a:focus {
  outline: unset !important;
}
.center {
  text-align: center;
}
img.map-image {
  border: 10px solid #fff;
  border-radius: 13px;
}
.search-form .search-submit:hover {
  cursor: pointer;
}
header .desktop-header .middle-header-part .middle-header-wrapper {
  padding: 0;
}
header .desktop-header .middle-header-part {
  padding-top: 10px;
  padding-bottom: 10px;
}
nav.breadcrumbs {
  margin-bottom: 18px;
}
.right-sidebar .ascendoor-wrapper .ascendoor-page {
  margin-top: 12px;
}
.offcanvas-search {
  visibility: hidden;
}
#menu-main-menu {
  justify-content: center !important;
}
.single article p,
.single article li,
.page-template article p,
.page-template article li {
  font-size: 19px;
  line-height: 1.6em;
}
.widgettitle,
.widget-title {
  font-size: 34px;
}
.widget ol:not(.city-blog-tabs) li,
.widget ul:not(.city-blog-tabs) li {
  font-size: 20px;
}
.mag-post-single .mag-post-detail .mag-post-meta {
  font-size: 18px;
}
.edit-link {
  display: none;
}
footer.entry-footer {
  text-align: center;
}
.site-main article .entry-footer span {
  font-size: 20px;
}
#menu-main-menu {
  justify-content: center !important;
}
p.by-line {
  text-align: right !important;
  margin-top: -12px !important;
  font-size: 17px !important;
}
.iframe-wrapper {
  text-align: center;
  margin-top: 60px;
}
.far.fa-clock {
  display: none;
}
@media (max-width: 480px) {
  #secondary {
    padding-bottom: 60px;
  }
}
.home .mag-post-single .mag-post-detail .mag-post-excerpt p {
  font-size: 18px;
}
.home .mag-post-single .mag-post-detail {
  padding: 15px;
}
.single .mag-post-single .mag-post-detail {
  padding-bottom: 11px;
}
.fa-chevron-up:before {
  color: #fff;
}
.site-info {
  text-align: center;
}
.site-info a {
  color: #d82926 !important;
}
blockquote {
  font-size: 17px;
  margin: 24px auto 35px;
  color: #000;
  padding: 1.2em 30px 1.2em 75px;
  border-left: 8px solid #d82926;
  line-height: 1.6em;
  position: relative;
  background: #fff;
}
blockquote::before {
  font-family: Arial;
  content: "\201C";
  color: #d82926;
  font-size: 96px;
  position: absolute;
  left: 10px;
  top: 43px;
  font-style: italic;
}
blockquote::after {
  content: '';
}
blockquote span {
  display: block;
  color: #333;
  font-style: normal;
  font-weight: bold;
  margin-top: 1em;
}
@media (max-width: 480px) {
  blockquote {
    padding: 3.2em 30px 1.2em 20px;
  }
}
.cky-consent-container.cky-box-bottom-left,
#ckyDetailCategorynecessary {
  display: none;
}
.cky-banner-element {
  cursor: pointer;
}
/*\\\\\\\\\\\\\\\\ Forms //////////////*/
.forminator-label {
  font-size: 16px !important;
  color: #000 !important;
  font-weight: 400 !important;
}
.forminator-edit-module {
  display: none !important;
}
/*\\\\\\\\\\\\\\\\ WooCommerce //////////////*/
.woocommerce-product-details__short-description ul li,
.woocommerce-Tabs-panel {
  font-size: 19px;
  line-height: 1.6em;
}
.woocommerce-product-details__short-description ul {
  padding-left: 0;
  margin-left: 22px;
  margin-bottom: 33px;
  margin-top: 11px;
}
.woocommerce #reviews #comments ol.commentlist li .comment-text {
  margin: 0;
}
/* Reviews */
.comment_container {
  font-size: 17px;
  margin: 0 auto 35px;
  color: #000;
  padding: 1.2em 30px 1.2em 75px;
  border-left: 8px solid #d82926;
  line-height: 1.6em;
  position: relative;
  background: #ededed;
}
.comment_container::before {
  font-family: Arial;
  content: "\201C";
  color: #d82926;
  font-size: 96px;
  position: absolute;
  left: 10px;
  top: 43px;
  font-style: italic;
}
.comment_container::after {
  content: '';
}
.comment-text {
  padding: 0 !important;
  border: none !important;
}
.woocommerce #reviews #comments ol.commentlist li .meta {
  color: #000;
}
@media (max-width: 480px) {
  .comment_container {
    padding: 3.2em 30px 1.2em 20px;
  }
  .woocommerce .star-rating {
    margin-bottom: 30px;
    float: none;
    width: 100%;
  }
  .woocommerce .star-rating span {
    width: 100% !important;
  }
  .woocommerce-review__author {
    display: block;
  }
  .woocommerce-review__dash {
    display: none;
  }
  /*
  .woocommerce .star-rating::before {
    float: none;
    left: unset;
    right: 0;
  }
  .woocommerce .star-rating span::before {
    left: unset;
    right: 0;
  }
  */
}
ul.products {
  margin: 0 0 1em !important;
}
h1.entry-title {
  /*font-family: 'Barlow', sans-serif !important;*/
  font-family: Quicksand, sans-serif !important;
}
.single-product .mag-post-single {
  background-color: transparent !important;
}
.single.single-product .mag-post-detail {
  padding: 0 !important;
}
.single-product .site-main > article .mag-post-single .entry-content {
  padding: 0 !important;
}
.woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button.alt,
:where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce a.button.alt {
  background-color: #d82926 !important;
  color: #fff !important;
  /*font-family: 'Barlow', sans-serif !important;*/
  font-weight: 400 !important;
  border-radius: 0 !important;
}
h2.short-description-header {
  margin-bottom: 0 !important;
}
.woocommerce ul.cart_list li a,
.woocommerce ul.product_list_widget li a {
  font-weight: 400;
}
.woocommerce ul.cart_list li img,
.woocommerce ul.product_list_widget li img {
  width: 116px;
}
.woocommerce ul.cart_list li .star-rating,
.woocommerce ul.product_list_widget li .star-rating {
  margin-top: 12px;
  margin-bottom: 15px;
}
.single-product .entry-summary {
  margin-top: -12px;
}
/*\\\\\\\\\\\\\\\\ Custom Product Template //////////////*/

</style>

</head>
<body <?php body_class(); ?>>

<?php if ( ! is_user_logged_in() ) : ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS22MVQT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php endif; ?>

<?php wp_body_open(); ?>
<div id="page" class="site ascendoor-site-wrapper">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'city-blog' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="desktop-header">
			<div class="middle-header-part <?php echo esc_attr( ! empty( get_header_image() ) ? 'ascendoor-header-image' : '' ); ?>" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>')">
				<div class="ascendoor-wrapper">
					<div class="middle-header-wrapper">
						<div class="offcanvas-search">
							<div class="header-search">
								<div class="header-search-wrap">
									<a href="#" title="Search" class="header-search-icon">
										<i class="fa fa-search"></i>
									</a>
									<div class="header-search-form">
										<?php get_search_form(); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="site-branding">
							<?php if ( has_custom_logo() ) { ?>
								<div class="site-logo">
									<?php the_custom_logo(); ?>
								</div>
							<?php } ?>
							<div class="site-identity">
								<?php
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Thrive Well</a></h1>
									<?php
								else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Thrive Well</a></p>

									<?php endif;

								$city_blog_description = get_bloginfo( 'description', 'display' );
								if ( $city_blog_description || is_customize_preview() ) :
									?>
									<!-- <p class="site-description"> --><?php //echo esc_html( $city_blog_description );?> <!-- </p> -->
									<?php endif; ?>

							</div>
						</div><!-- .site-branding -->

						<div class="social-mode">
							<div class="social-icons">
								<?php
								if ( has_nav_menu( 'social' ) ) {
									wp_nav_menu(
										array(
											'menu_class'  => 'menu social-links',
											'link_before' => '<span class="screen-reader-text">',
											'link_after'  => '</span>',
											'theme_location' => 'social',
										)
									);
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-header-part">
				<div class="ascendoor-wrapper">
					<div class="bottom-header-wrapper">
						<div class="navigation-part">
							<nav id="desktop-site-navigation" class="main-navigation">
								<?php
								if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
										)
									);
								}
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-header">
			<div class="mobile-header-top">
				<div class="ascendoor-wrapper">
					<div class="mobile-header-top-wrapper">
						<div class="site-branding">
							<?php if ( has_custom_logo() ) { ?>
								<div class="site-logo">
									<?php the_custom_logo(); ?>
								</div>
							<?php } ?>
							<div class="site-identity">
								<?php
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
								else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
								endif;
								$city_blog_description = get_bloginfo( 'description', 'display' );
								if ( $city_blog_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo esc_html( $city_blog_description ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
									<?php
								endif;
								?>
							</div>
						</div><!-- .site-branding -->
					</div>
				</div>
			</div>
			<div class="mobile-header-bottom">
				<div class="ascendoor-wrapper">
					<div class="mobile-bottom-header-wrapper">
						<div class="left-side">
							<div class="navigation-part">
								<nav id="site-navigation" class="main-navigation">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
										<span></span>
										<span></span>
										<span></span>
									</button>
									<div class="main-navigation-links">
										<?php
										if ( has_nav_menu( 'primary' ) ) {
											wp_nav_menu(
												array(
													'theme_location' => 'primary',
												)
											);
										}
										?>
									</div>
								</nav><!-- #site-navigation -->
							</div>
						</div>
						<div class="right-side">
							<div class="offcanvas-search">
								<div class="header-search">
									<div class="header-search-wrap">
										<a href="#" title="Search" class="header-search-icon">
											<i class="fa fa-search"></i>
										</a>
										<div class="header-search-form">
											<?php get_search_form(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php
	if ( ! is_front_page() || is_home() ) {

		if ( is_front_page() ) {

			require get_template_directory() . '/sections/sections.php';
			city_blog_homepage_sections();

		}

		?>

		<div id="content" class="site-content">
			<div class="ascendoor-wrapper">
				<div class="ascendoor-page">
	<?php } ?>