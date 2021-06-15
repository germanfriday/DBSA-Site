<?php get_header(); ?>
<!-- Container -->

<div class="CON"><div class="CON_bg">
  <!-- Start SC -->
  <div class="SC">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
      <div class="PostContent">
        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
      <?php if (function_exists('the_tags')) { ?>
      <?php the_tags('<div class="PostCom"><ul><li class="Tags">Tags: ', ', ', '</li> </ul></div>'); ?>
      <?php } ?>
    </div>
    <div class="clr"></div>
    <div class="Post"> <span class="Note">You can follow any responses to this entry through the
      <?php comments_rss_link('RSS 2.0'); ?>
      feed.
      <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
		// Both Comments and Pings are open ?>
      You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
      <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
		// Only Pings are Open ?>
      Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
      <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
		// Comments are open, Pings are not ?>
      You can skip to the end and leave a response. Pinging is currently not allowed.
      <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
		// Neither Comments, nor Pings are open ?>
      Both comments and pings are currently closed.
      <?php } edit_post_link('Edit this entry.', '<p class="edit_this">', '</p>'); ?>
      </span> </div>
    <?php if ( comments_open() ) comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
  <!-- End SC -->
  <?php get_sidebar(); ?>
  <div class="clr"></div>
</div></div>
<!-- End CON -->
<?php get_footer(); ?>
