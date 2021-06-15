<?php get_header(); ?>
<!-- Container -->

<div class="CON"><div class="CON_bg">
  <!-- Start SC -->
  <div class="SC">
    <?php if (have_posts()) : ?>
    <h2 class="pagetitle">Search Results</h2>
    <!-- Start Nav -->
    <?php if (function_exists('wp_pagenavi')) { ?>
    <?php wp_pagenavi('','<br />'); ?>
    <?php } ?>
    <!-- End Nav -->
    <?php while (have_posts()) : the_post(); ?>
    <div class="Post" id="post-<?php the_ID(); ?>">
      <div class="PostHead">
        <h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
          <?php the_title(); ?>
          </a></h2>
        <div class="PostTime"> <strong class="month">
          <?php the_time('F') ?>
          </strong><strong class="day">
          <?php the_time('j') ?>
          , </strong><strong class="year">
          <?php the_time('Y') ?>
          </strong> <small class="PostAuthor">Posted by
          <?php the_author() ?>
          </small> <small class="PostCat">In:
          <?php the_category(', ') ?>
          </small> </div>
      </div>
      <div class="PostContent" style="padding-top:0px;">
        <?php the_excerpt() ?>
      </div>
      <div class="clr"></div>
      <div class="PostCom">
        <ul>
          <li class="Com">
            <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
          </li>
          <?php if (function_exists('the_tags')) { ?>
          <?php the_tags('<li class="Tags">Tags: ', ', ', '</li>'); ?>
          <?php } ?>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <?php endwhile; ?>
    <!-- Start Nav -->
    <?php if (function_exists('wp_pagenavi')) { ?>
    <?php wp_pagenavi('','<br /><br />'); ?>
    <?php } ?>
    <!-- End Nav -->
    <?php else : ?>
    <div class="Post">
      <h2 class="pagetitle">No posts found.</h2>
      <p>Try a different search?</p>
    </div>
    <?php endif; ?>
  </div>
  <!-- End SC -->
  <?php get_sidebar(); ?>
  <div class="clr"></div>
</div></div>
<!-- End CON -->
<?php get_footer(); ?>
