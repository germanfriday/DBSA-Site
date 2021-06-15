<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<!-- Container -->

<div class="CON"><div class="CON_bg">
  <!-- Start SC -->
  <div class="SC">
    <div class="Post_full">
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      <h2>Archives by Month:</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
      <h2>Archives by Subject:</h2>
      <ul>
        <?php wp_list_categories(); ?>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
  <!-- End SC -->
  <?php get_sidebar(); ?>
  <div class="clr"></div>
</div></div>
<!-- End CON -->
<?php get_footer(); ?>
