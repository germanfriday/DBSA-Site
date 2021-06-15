<div class="SR">
  <!-- Start Search -->
  <div class="Search">
    <form action="/index.php" method="post">
      <input name="s" type="text" class="keyword" value="Search" />
      <input name="submit" type="submit" class="search" title="Search" value="" alt="Search" />
      <div class="clr"></div>
    </form>
  </div>
  <div class="clr"></div>
  <!-- End Search -->
  <!-- Start Adsense -->
  <div class="banner">
    <h2>
      <?php _e('Sponsors'); ?>
    </h2>
    <a href="#" class="title">Advertise with us</a>
    <div class="clr"></div>
    <ul>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/banner.gif" width="125" height="125" alt="banner" border="0" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/banner.gif" width="125" height="125" alt="banner" border="0" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/banner.gif" width="125" height="125" alt="banner" border="0" /></a></li>
      <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/banner.gif" width="125" height="125" alt="banner" border="0" /></a></li>
    </ul>
    <div class="clr"></div>
  </div>
  <!-- End Adsense -->
  <div class="tabs2">
    <h2 id="tab20" onclick="ShowTab(2,0)" class="active" >
      <?php _e('Meta'); ?>
    </h2>
    <h2 id="tab21" onclick="ShowTab(2,1)">
      <?php _e('Articles'); ?>
    </h2>
    <h2 id="tab22" onclick="ShowTab(2,2)"><?php _e('Calendar'); ?></h2>
    <div class="clr"></div>
    <!-- Start Meta -->
    <div class="meta" id="div20" style="display:block;">
      <ul>
        <?php wp_register(); ?>
        <li>
          <?php wp_loginout(); ?>
        </li>
        <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
        <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
        <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
        <?php wp_meta(); ?>
      </ul>
    </div>
    <!-- End Meta -->
    <!-- Recent Articles -->
    <div class="widget_popular" id="div21" style="display:none;">
      <ul>
        <?php mdv_recent_posts(); ?>
      </ul>
    </div>
    <!-- Recent Articles -->
    <!-- Start Calendar -->
    <div class="widget_calendar" id="div22" style="display:none;">
      <ul>
        <li>
          <?php get_calendar(); ?>
        </li>
      </ul>
    </div>
    <!-- Start Calendar -->
    <div class="clr"></div>
  </div>
  <div class="tabs1">
    <h2 id="tab10" class="active" onclick="ShowTab(1,0)">
      <?php _e('Categories'); ?>
    </h2>
    <h2 id="tab11" onclick="ShowTab(1,1)">
      <?php _e('Archives'); ?>
    </h2>
    <div class="clr"></div>
    <!-- Start Categories -->
    <div id="div10" style="display:block;" class="categories">
      <ul>
        <?php wp_list_cats('show_count=0'); ?>
      </ul>
    </div>
    <!-- End Categories -->
    <!-- Start Archives -->
    <div id="div11" style="display:none;" class="archives">
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </div>
    <!-- End Archives -->
    <div class="clr"></div>
  </div>
  <!-- End Adsense -->
  <?php     /* Widgetized sidebar, if you have the plugin installed. */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
  <!-- Start Flickr Photostream -->
  <?php if (function_exists('get_flickrRSS')) { ?>
  <div class="widget widget_flickr">
    <h2>
      <?php _e('Flickr Photo'); ?>
    </h2>
    <ul>
      <?php get_flickrRSS(4, "community", "london,people", "square", "<li>", "</li>", "34427469792@N01"); ?>
    </ul>
    <div class="clr"></div>
  </div>
  <?php } ?>
  <!-- End Flickr Photostream -->
  <?php endif; ?>
  <!-- End SideBar2 -->
</div>
