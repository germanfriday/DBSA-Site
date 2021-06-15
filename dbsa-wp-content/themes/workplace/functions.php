<?php

// Include widgets.

include("includes/cat-posts.php");
include("includes/purchase-themes.php");

// Theme constants.

define("THEME_PREFIX", "workplace_");

// Add version info to help future upgrade process.

add_option("workplace_version", "1.1");

// Admin page.

function p75_workplace_admin() {

	$option_fields = array(); // Array of option fields.

	if ( $_GET['updated'] ) echo '<div id="message" class="updated fade"><p>Work Place options saved.</p></div>';
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/includes/functions.css" type="text/css" media="all" />';
	
?>

<div class="wrap">
    <div id="icon-options-general" class="icon32"><br/></div>

    <h2>Work Place Theme Options</h2>

    <div class="metabox-holder">
    	
    	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
    
        <div id="<?php echo THEME_PREFIX; ?>options" class="postbox-container main-options-column">
            
            <?php
				$option_fields[] = $logo_img = THEME_PREFIX . "logo_img";
				$option_fields[] = $logo_txt = THEME_PREFIX . "logo_txt";
			?>
            
            <div class="postbox">
                <h3>Logo Customization Options</h3>
                
                <div class="inside">
                	<p>Enter the path to your custom logo using the field below.</p>
                
                	<p class="field-label">e.g. <?php echo get_option('home'); ?>/images/logo.jpg</p>
                	<p><input class="option-field" id="<?php echo $logo_img; ?>" type="text" name="<?php echo $logo_img; ?>" value="<?php echo get_option($logo_img); ?>" /></p>
                	
                	<p>
	                	<label for="<?php echo $logo_txt; ?>">
				            <input id="<?php echo $logo_txt; ?>" type="checkbox" name="<?php echo $logo_txt; ?>" value="true"<?php checked(TRUE, (bool) get_option($logo_txt)); ?> /> <?php _e("Use a Text logo instead."); ?>
				        </label>
			        </p>
                	
	                <p class="submit">
						<input type="submit" class="button-primary" value="Save Changes" />
					</p>
                </div> <!-- inside -->
            </div> <!-- postbox -->
            
            <?php
				$option_fields[] = $feature_carousel = THEME_PREFIX . "feature_carousel";
			?>
            
            <div class="postbox">
                <h3>Featured Content Carousel</h3>
                
                <div class="inside">
                	<p>Select a category for which you wish to display posts within the Featured Content Carousel at the top of the home page.</p>
                
                	<p>
	                	<label for="<?php echo $feature_carousel; ?>">Choose a category:</label>
	    				<?php wp_dropdown_categories( array( 'name' => $feature_carousel, 'id' => $feature_carousel,'selected' => get_option($feature_carousel) ) ); ?>
    				</p>
    				
    				<p class="submit">
						<input type="submit" class="button-primary" value="Save Changes" />
					</p>
                </div> <!-- inside -->
            </div> <!-- postbox -->
            
            <?php
				$option_fields[] = $home_left_type = THEME_PREFIX . "home_left_type";
				$option_fields[] = $home_center_type = THEME_PREFIX . "home_center_type";
				$option_fields[] = $home_right_type = THEME_PREFIX . "home_right_type";
				$option_fields[] = $home_left_cat = THEME_PREFIX . "home_left_cat";
				$option_fields[] = $home_center_cat = THEME_PREFIX . "home_center_cat";
				$option_fields[] = $home_right_cat = THEME_PREFIX . "home_right_cat";
				$option_fields[] = $home_left_page = THEME_PREFIX . "home_left_page";
				$option_fields[] = $home_center_page = THEME_PREFIX . "home_center_page";
				$option_fields[] = $home_right_page = THEME_PREFIX . "home_right_page";
				$published_pages = p75_get_published_pages();
			?>
            
            <div class="postbox">
                <h3>Featured Contnet Columns</h3>
                
                <div class="inside">
                	<p>The home page has three content columns. Each column can either show the latest post from a selected category or an excerpt from a selected page.</p>
                	
                	<p class="option-label">Left Column:</p>
                	<div class="table">
                		<div class="row">
                			<div class="option">
                				<input id="<?php echo $home_left_type . "_post"; ?>" type="radio" name="<?php echo $home_left_type; ?>" value="post"<?php checked("post", get_option($home_left_type)); ?>>
                				<label for="<?php echo $home_left_type . "_post"; ?>">Latest post from a category.</label>
                			</div>
                			
                			<div class="option-select">
                				<?php wp_dropdown_categories( array( 'name' => $home_left_cat, 'id' => $home_left_cat,'selected' => get_option($home_left_cat) ) ); ?>
                			</div>
                		</div>
                		
                		<div class="row last">
                			<div class="option">
                				<input id="<?php echo $home_left_type . "_page"; ?>" type="radio" name="<?php echo $home_left_type; ?>" value="page"<?php checked("page", get_option($home_left_type)); ?>>
                				<label for="<?php echo $home_left_type . "_page"; ?>">Show page excerpt.</label>
                			</div>
                			
                			<div class="option-select">
                				<select id="<?php echo $home_left_page; ?>" name="<?php echo $home_left_page; ?>">
									<?php
										foreach ( $published_pages as $page ) {
											printf("<option value='%d'%s>%s</option>\n", $page->ID, selected($page->ID, get_option($home_left_page), false), $page->post_title);
										}
									?>
								</select>
                			</div>
                		</div>
                		
                		<div class="clearfix"></div>
                	</div>
                	
                	<p class="option-label">Center Column:</p>
                	<div class="table">
                		<div class="row">
                			<div class="option">
                				<input id="<?php echo $home_center_type . "_post"; ?>" type="radio" name="<?php echo $home_center_type; ?>" value="post"<?php checked("post", get_option($home_center_type)); ?>>
                				<label for="<?php echo $home_center_type . "_post"; ?>">Latest post from a category.</label>
                			</div>
                			
                			<div class="option-select">
                				<?php wp_dropdown_categories( array( 'name' => $home_center_cat, 'id' => $home_center_cat,'selected' => get_option($home_center_cat) ) ); ?>
                			</div>
                		</div>
                		
                		<div class="row last">
                			<div class="option">
                				<input id="<?php echo $home_center_type . "_page"; ?>" type="radio" name="<?php echo $home_center_type; ?>" value="page"<?php checked("page", get_option($home_center_type)); ?>>
                				<label for="<?php echo $home_center_type . "_page"; ?>">Show page excerpt.</label>
                			</div>
                			
                			<div class="option-select">
                				<select id="<?php echo $home_center_page; ?>" name="<?php echo $home_center_page; ?>">
									<?php
										foreach ( $published_pages as $page ) {
											printf("<option value='%d'%s>%s</option>\n", $page->ID, selected($page->ID, get_option($home_center_page), false), $page->post_title);
										}
									?>
								</select>
                			</div>
                		</div>
                		
                		<div class="clearfix"></div>
                	</div>
                	
                	<p class="option-label">Right Column:</p>
                	<div class="table">
                		<div class="row">
                			<div class="option">
                				<input id="<?php echo $home_right_type . "_post"; ?>" type="radio" name="<?php echo $home_right_type; ?>" value="post"<?php checked("post", get_option($home_right_type)); ?>>
                				<label for="<?php echo $home_right_type . "_post"; ?>">Latest post from a category.</label>
                			</div>
                			
                			<div class="option-select">
                				<?php wp_dropdown_categories( array( 'name' => $home_right_cat, 'id' => $home_right_cat,'selected' => get_option($home_right_cat) ) ); ?>
                			</div>
                		</div>
                		
                		<div class="row last">
                			<div class="option">
                				<input id="<?php echo $home_right_type . "_page"; ?>" type="radio" name="<?php echo $home_right_type; ?>" value="page"<?php checked("page", get_option($home_right_type)); ?>>
                				<label for="<?php echo $home_right_type . "_page"; ?>">Show page excerpt.</label>
                			</div>
                			
                			<div class="option-select">
                				<select id="<?php echo $home_right_page; ?>" name="<?php echo $home_right_page; ?>">
									<?php
										foreach ( $published_pages as $page ) {
											printf("<option value='%d'%s>%s</option>\n", $page->ID, selected($page->ID, get_option($home_right_page), false), $page->post_title);
										}
									?>
								</select>
                			</div>
                		</div>
                		
                		<div class="clearfix"></div>
                	</div>
                	
                	<p class="submit">
						<input type="submit" class="button-primary" value="Save Changes" />
					</p>
                </div> <!-- inside -->
            </div> <!-- postbox -->
            
            <?php
				$option_fields[] = $feature_homebox = THEME_PREFIX . "feature_homebox";
			?>
            
            <div class="postbox">
                <h3>Featured Content Box</h3>
                
                <div class="inside">
                	<p>Select a category for which you wish to display posts within the Featured Content Box at the bottom of the home page.</p>
                
                	<p>
	                	<label for="<?php echo $feature_homebox; ?>">Choose a category:</label>
	    				<?php wp_dropdown_categories( array( 'name' => $feature_homebox, 'id' => $feature_homebox,'selected' => get_option($feature_homebox) ) ); ?>
    				</p>
    				
    				<p class="submit">
						<input type="submit" class="button-primary" value="Save Changes" />
					</p>
                </div> <!-- inside -->
            </div> <!-- postbox -->
        </div>  <!-- postbox-container -->
        
        <input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="<?php echo implode(",", $option_fields); ?>" />
	    
	    </form>
        
        <div class="postbox-container options-column">
            <div class="postbox">
                <h3>Documentation and Support</h3>
                
                <div class="inside">
                	<p>Please refer to the Work Place Theme <a href="http://www.press75.com/documentation-support/work-place-setup-usage/">Documentation</a> for general setup and usage instructions. If you can&#8217;t find the answers to your questions there, feel free to stop by the Press75.com <a href="http://press75.com/support/">Support Forums</a>.</p>
                </div> <!-- inside -->
            </div> <!-- postbox -->
            
            <div class="postbox">
                <h3>Latest Press75.com News</h3>
                
                <div class="inside">
					<?php // Get RSS Feed(s)
					include_once(ABSPATH . WPINC . '/feed.php');
					
					// Get a SimplePie feed object from the specified feed source.
					$rss = fetch_feed('http://www.press75.com/feeds');
					
					// Figure out how many total items there are, but limit it to 5. 
					$maxitems = $rss->get_item_quantity(5); 
					
					// Build an array of all the items, starting with element 0 (first element).
					$rss_items = $rss->get_items(0, $maxitems); 
					?>
					
					<ul>
					    <?php if ($maxitems == 0) echo '<li>No items.</li>';
					    else
					    // Loop through each feed item and display each item as a hyperlink.
					    foreach ( $rss_items as $item ) : ?>
					    <li>
					        <h4><a href='<?php echo $item->get_permalink(); ?>' title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'><?php echo $item->get_title(); ?></a></h4>
					        <?php echo $item->get_description(); ?>
					    </li>
					    <?php endforeach; ?>
					</ul>                	
                </div> <!-- inside -->
            </div> <!-- postbox -->
        </div>  <!-- postbox-container -->
    </div>  <!-- metabox-holder -->
</div> <!-- wrap -->

<?php
}

add_action('admin_menu', "p75_workplace_admin_init");

/**
 * Register admin page.
 */
function p75_workplace_admin_init()
{
	add_theme_page( "Work Place Options", "Theme Options", 8, __FILE__, 'p75_workplace_admin');
}


function p75_get_published_pages() {
	global $wpdb;

	return $wpdb->get_results( 'SELECT ID, post_title FROM wp_posts WHERE post_status="publish" AND post_type="page" ORDER BY post_title ASC' );
}

/**
 * Custom title function.
 */
function the_short_title($before = '', $after = '', $echo = true, $length = false) {
	$title = get_the_title();
	
	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}
	
	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_short_title', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget_block %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
}

?>