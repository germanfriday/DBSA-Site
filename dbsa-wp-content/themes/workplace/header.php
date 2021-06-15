<?php
/**
 * @package WordPress
 * @subpackage WorkPlace
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
</title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php the_excerpt_rss(); ?>" />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php endif; ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

<script src="<?php bloginfo('template_url'); ?>/scripts/suckerfish.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.cycle.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.functions.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.dimensions.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.fade.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.tooltip.js" type="text/javascript"></script>

<script type="text/javascript">
function doClear(theText) {
 if (theText.value == theText.defaultValue) {
	 theText.value = ""
 }
}
</script>

<?php if (is_home('')){ ?>
<style type="text/css">
html, body {
background: url(<?php bloginfo('template_url'); ?>/images/home-bg.png) top left repeat-x;
}

#nav li ul {
margin-top: 31px;
}
</style>
<?php } ?>

<?php wp_head(); ?>

</head>
<body>

<div class="wrapper">
	<div id="header">
    	<div id="tagline">
        	<p><?php bloginfo('description'); ?></p>
        </div>
        
        <div id="pages">
        	<ul>
            	<?php /*wp_list_categories('title_li=');*/ ?>
                <!--<li <?php if (is_home()){echo 'class="current"';}?>><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>">Home</a></li>-->
                <li class="rss"><a title="Subscribe to Content via RSS" href="<?php bloginfo('rss2_url'); ?>">Subscribe</a></li>
            </ul>
        </div>
        
        <div id="logo">
        	<?php if ( get_option(THEME_PREFIX . "logo_txt") ) : ?>
				<h1><a href="<?php echo get_option('home'); ?>/" title="Home" ><?php bloginfo('name'); ?></a></h1>
			<?php else : ?>
				<a href="<?php echo get_option('home'); ?>/" title="Home" ><img src="<?php echo ($logo = get_option(THEME_PREFIX . 'logo_img')) ? $logo : get_bloginfo("template_url") . "/images/logo.png"; ?>" alt="<?php bloginfo('name'); ?>" /></a>
			<?php endif; ?>
        </div>
        
        <div id="head-right">            
            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </div>
        
        <div id="navigation">
            <ul id="nav" >
            
            <li><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>">Home</a></li>
				<?php wp_list_pages('title_li='); ?>
                       
                
            </ul>        
        </div>
    </div> <!-- header -->
</div> <!-- wrapper -->