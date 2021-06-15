<?php
/**
 * Functions.php contains all the core functions for your theme to work properly.
 * Please do not edit this file!!
 *
 * @package Fresh & Clean WordPress Theme
 * @since 1.0
 */
 
 
 

/**
 * Define Constants
 * since 1.0
 */
define( 'WPEX_JS_DIR', get_template_directory_uri().'/js' );
define( 'WPEX_CSS_DIR', get_template_directory_uri().'/css' );




/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 * @since 1.0
 */
if ( !function_exists( 'of_get_option' ) ) {
	function of_get_option($name, $default = false) {
		$optionsframework_settings = get_option('optionsframework');
		// Gets the unique option id
		$option_name = $optionsframework_settings['id'];
		if ( get_option($option_name) ) {
			$options = get_option($option_name);
		}
		if ( isset($options[$name]) ) {
			return $options[$name];
		} else {
			return $default;
		}
	}
}





/**
 * Get functions
 * @since 1.0
 */

// Load CSS and JS
require_once( get_template_directory() .'/functions/scripts.php' );

//Aqua resizer
if ( !function_exists( 'aq_resize' ) ) {
	require_once( get_template_directory() .'/functions/aqua-resizer-ratio-check.php' );
	require_once( get_template_directory() .'/functions/aqua-resizer.php' );
}

// Setup some useful functions
require_once ( get_template_directory() .'/functions/hooks.php' );
require_once ( get_template_directory() .'/functions/recommend-plugins.php' );
require_once( get_template_directory() .'/functions/image-default-sizes.php' );
require_once( get_template_directory() .'/functions/comments-callback.php' );
require_once( get_template_directory() .'/functions/pagination.php' );
require_once( get_template_directory() .'/functions/social.php' );

require_once( get_template_directory() .'/functions/widgets/widget-areas.php' );
require_once( get_template_directory() .'/functions/widgets/widget-post-thumbs.php' );

//load these functions only in the admin dashboard
if( defined('WP_ADMIN') && WP_ADMIN ) {
	if ( class_exists( 'Symple_Slides_Post_Type' ) ) {
		require_once( get_template_directory() .'/functions/meta/meta-slides.php' ); // Services meta
	}
}



/**
 * Localization support
 * @since 1.0
 */
load_theme_textdomain( 'wpex', get_template_directory() .'/lang' );





/**
 * Set the content width based on the theme's design and stylesheet.
 * @since 1.0
 */
$content_width = 645;



/**
 * Sets up theme defaults and registers support for various WordPress features.
 * @since 1.0
 */
if ( ! function_exists( 'wpex_setup' ) ) :

	function wpex_setup() {
		
		
		//theme support
		add_theme_support('automatic-feed-links');
		add_theme_support('custom-background');
		add_theme_support('post-thumbnails');
		
		//register navigation menus
		if ( ! function_exists ( 'wpex_register_nav_menus' ) ) {
			function wpex_register_nav_menus ( ) {
				$wpex_menus = array(
					// Not in this theme => 'top_menu' => __( 'Top', 'wpex' ),
					'main_menu' => __( 'Main', 'wpex' )
				);
				$wpex_menus = apply_filters ( 'wpex_nav_menus', $wpex_menus );
				register_nav_menus ( $wpex_menus );
			}
		}
		wpex_register_nav_menus();
	
	}
	add_action( 'after_setup_theme', 'wpex_setup' );

endif;





/**
* Change default read more style
* @since 1.0
*/
if ( !function_exists( 'wpex_new_excerpt_more' ) ) :
	function wpex_new_excerpt_more($more) {
		global $post;
		return '...';
	}
	add_filter('excerpt_more', 'wpex_new_excerpt_more');
endif;





/**
* Change default excerpt length
* @since 1.0
*/
function wpex_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'wpex_custom_excerpt_length', 999 );


/**
* Modify WP menu for dropdown styles
* @since 1.0
*/
class Dropdown_Walker_Nav_Menu extends Walker_Nav_Menu {
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
		
        $id_field = $this->db_fields['id'];
		
        if( !empty( $children_elements[$element->$id_field] ) && ( $depth == 0 ) ) {
            $element->classes[] = 'dropdown';
            $element->title .= ' <i class="icon-angle-down"></i>';
        }
		
		if( !empty( $children_elements[$element->$id_field] ) && ( $depth > 0 ) ) {
            $element->classes[] = 'dropdown';
            $element->title .= ' <i class="icon-angle-right"></i>';
        }
				
        Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
 
    }
}