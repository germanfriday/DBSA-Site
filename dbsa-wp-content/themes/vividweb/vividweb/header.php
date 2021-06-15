<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<?php $theTitle=wp_title(" - ", false); if($theTitle != "") { ?>
<title><?php echo wp_title("",false); ?>-
<?php bloginfo('name'); ?>
</title>
<?php } else { ?>
<title>
<?php bloginfo('name'); ?>
</title>
<?php } ?>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascript/tabs.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="bgcontainer">
  <div class="bgRasize">
    <!-- START Header -->
    <div class="Header">
      <!-- Start Logo -->
  <div class="Logo">
    <div class="LogoText">
      <h1><a href="<?php echo get_option('home'); ?>">
        <?php bloginfo('name'); ?>
        </a></h1>
    </div>
    <p class="Desc">
      <?php bloginfo('description'); ?>
    </p>
  </div>
  <!-- End Logo -->
      <!-- Start Menu -->
  <div class="Menu">
    <ul>
      <li><a href="<?php echo get_option('home'); ?>">
        <?php _e('Home'); ?>
        </a></li>
      <li><a href="<?php echo get_option('home'); ?>?page_id=2">
        <?php _e('About Us'); ?>
        </a></li>
      <li><a href="<?php echo get_option('home'); ?>?m=2008">
        <?php _e('Archives'); ?>
        </a></li>
      <li><a href="<?php echo get_option('home'); ?>?page_id=38">
        <?php _e('Contact Us'); ?>
        </a></li>
    </ul>
    <div class="clr"></div>
  </div>
  <!-- End Menu -->
      <div class="clr"></div>
    </div>
    <div class="RSS">
      <p><img src="<?php bloginfo('template_url'); ?>/images/con_up.gif" width="1024" height="9" alt="picture" /></p>
      <div class="Syn">
        <ul>
          <li>Subscribe to our <a href="#">RSS</a></li>
          <li class="text">Lorem Ipsum is simply dummy text.</li>
        </ul>
      </div>
      <div class="twit">
        <ul>
          <li><a href="<?php bloginfo('rss2_url'); ?>">twitter</a></li>
          <li class="text">Lorem Ipsum is simply dummy text.</li>
        </ul>
      </div>
      <div class="book">
        <ul>
          <li><a href="<?php bloginfo('rss2_url'); ?>">facebook</a></li>
          <li class="text">Lorem Ipsum is simply dummy text.</li>
        </ul>
      </div>
      <p class="clr"></p>
    </div>
    <div class="clr"></div>
  </div>  
  <!-- END Header -->
