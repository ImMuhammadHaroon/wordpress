<?php
/**
 * Define Theme Version
 */
define( 'ERACTOR_THEME_VERSION', '1.0' );

function eractor_css() {
	$parent_style = 'renoval-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'eractor-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('eractor-color-default',get_stylesheet_directory_uri() .'/assets/css/color/default.css');
	wp_dequeue_style('renoval-default');
	
	wp_enqueue_style('eractor-media-query',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	// wp_dequeue_style('renoval-media-query');
	
	wp_enqueue_script('eractor-counterup', get_stylesheet_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), false, true);
	wp_enqueue_script('eractor-slider', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);		
}
add_action( 'wp_enqueue_scripts', 'eractor_css',999);


/**
 * Called all the Customize file.
 */
// require( get_stylesheet_directory() . '/inc/customize/eractor-premium.php');

/**
 * Import Options From Parent Theme
 *
 */
function eractor_parent_theme_options() {
	$renoval_mods = get_option( 'theme_mods_renoval' );
	if ( ! empty( $renoval_mods ) ) {
		foreach ( $renoval_mods as $renoval_mod_k => $renoval_mod_v ) {
			set_theme_mod( $renoval_mod_k, $renoval_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'eractor_parent_theme_options' );