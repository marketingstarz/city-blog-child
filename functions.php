<?php

// Child theme
function enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// Disable auto save feature to reduce extra db entries
function disable_autosave() {
  wp_deregister_script( 'autosave' );
}
add_action( 'admin_init', 'disable_autosave' );

// Disable update emails
add_filter( 'auto_core_update_send_email', '__return_false' );
add_filter( 'auto_plugin_update_send_email', '__return_false' );
add_filter( 'auto_theme_update_send_email', '__return_false' );

// Disable WordPress Administration email verification prompt 
add_filter( 'admin_email_check_interval', '__return_false' );

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
  if ( strpos( $src, 'ver=' ) )
    $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

// Enable Woocommerce support
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Remove "Category" from H1 page titles
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

// Disable default Yoast Schema
function disable_json_ld_output_on_single_posts() {
  if ( is_page() ) {
    add_filter( 'wpseo_json_ld_output', '__return_false' );
  }
}
add_action( 'template_redirect', 'disable_json_ld_output_on_single_posts' );
