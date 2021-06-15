<?php
/**
 * This file loads the CSS and Javascript used for the theme.
 *
 * @package Fresh & Clean WordPress Theme
 * @since 1.0
 */
 
 
add_action('wp_enqueue_scripts','wpex_load_scripts');
function wpex_load_scripts() {
	
	
	/*******
	*** CSS
	*******************/
	
	// Main CSS
	wp_enqueue_style('style', get_stylesheet_uri() );
	
	// Google Fonts
	wp_enqueue_style('google-font', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic', 'style');
	
	// Font Awesome
	wp_enqueue_style('font-awesome', WPEX_CSS_DIR . '/font-awesome.min.css', 'style', true);
	
	//Responsive
	wp_enqueue_style('wpex-responsive', WPEX_CSS_DIR .'/responsive.css');
		
	// Remove default contact 7 styling
	if( function_exists('wpcf7_enqueue_styles') ) wp_dequeue_style('contact-form-7');

	/*******
	*** jQuery
	*******************/
		
	// Responsive
	wp_enqueue_script('fitvids', WPEX_JS_DIR .'/fitvids.js', array('jquery'), 1.0, true);
	wp_enqueue_script('uniform', WPEX_JS_DIR .'/uniform.js', array('jquery'), '1.7.5', true);
	wp_enqueue_script('wpex-responsive', WPEX_JS_DIR .'/responsive.js', array('jquery'), '', true);

	// Comment replies
	if( is_single() || is_page() ) wp_enqueue_script('comment-reply');
	
	// Localize responsive nav
	$nav_params = array(
		'text' => __('Menu','wpex'),
	);
	wp_localize_script( 'wpex-responsive', 'navLocalize', $nav_params );
	
	// Initialize
	wp_enqueue_script('wpex-global-init', WPEX_JS_DIR .'/initialize.js', false, '1.0', true);

	
} //end wpex_load_scripts()


/**
* Browser Specific CSS
* @Since 1.0
*/
add_action('wp_head', 'wpex_ie_css');
function wpex_ie_css() {
	echo '<!-- Custom CSS For IE -->';
	echo '<!--[if IE]><link rel="stylesheet" type="text/css" href="'. get_template_directory_uri() .'/css/ie.css" media="screen" /><![endif]-->';
	echo '<!--[if IE 8]><link rel="stylesheet" type="text/css" href="'. get_template_directory_uri() .'/css/ie8.css" media="screen" /><![endif]-->';
	echo '<!--[if IE 7]><link rel="stylesheet" type="text/css" href="'. get_template_directory_uri() .'/css/font-awesome-ie7.min.css" media="screen" /><![endif]-->';
}


/**
* HTML5 & CSS3 IE Dependencies
* @Since 1.0
*/
function wpex_html_css_dependencies() {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
	echo '<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'wpex_html_css_dependencies'); ?>