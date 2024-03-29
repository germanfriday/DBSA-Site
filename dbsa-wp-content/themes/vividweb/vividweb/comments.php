
<div class="Post">
  <div class="Comments">
    <div class="List">
      <!-- Start CommentsList-->
      <?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
      <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
      <?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
      <!-- You can start editing here. -->
      <?php if ($comments) : ?>
      <h3 id="comments">
        <?php comments_number('No Responses', 'One Response', '% Responses' );?>
        to
        <?php the_title('&#8220;','&#8221;'); ?>
      </h3>
      <ol id="commentlist">
        <?php foreach ($comments as $comment) : ?>
        <li id="comment-<?php comment_ID() ?>">
          <p class="LUsr"><strong>
            <?php comment_author_link() ?>
            </strong><br />
            <a href="#comment-<?php comment_ID() ?>" title="">
            <?php comment_date('F jS, Y') ?>
            at
            <?php comment_time() ?>
            </a>
            <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?>
          </p>
          <div class="LCon">
            <?php comment_text() ?>
          </div>
          <small style="color:#4c809e;">
          <?php if ($comment->comment_approved == '0') : ?>
          Your comment is awaiting moderation.
          <?php endif; ?>
          </small> </li>
        <?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';	?>
        <?php endforeach; /* end for each comment */ ?>
      </ol>
      <?php else : // this is displayed if there are no comments so far ?>
      <?php if ('open' == $post->comment_status) : ?>
      <!-- If comments are open, but there are no comments. -->
      <?php else : // comments are closed ?>
      <!-- If comments are closed. -->
      <p class="nocomments">Comments are closed.</p>
      <?php endif; ?>
      <?php endif; ?>
      <?php if ('open' == $post->comment_status) : ?>
    </div>
    <h3 id="respond">Leave a reply</h3>
    <div class="Form">
      <div class="FormTop"></div>
      <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
      <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
      <?php else : ?>
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( $user_ID ) : ?>
        <p style="display: block; margin-top: 5px; font-size: 10px; font-weight: bold;">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a> </p>
        <br clear="all" />
        <?php else : ?>
        <p>
          <label for="author"> <small>Name
            <?php if ($req) _e('(<strong>*</strong>)'); ?>
            </small>
            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" class="TextField Name" style="width: 384px; background: #e9f8ff url(<?php bloginfo('template_url'); ?>/images/FormName.png) no-repeat left top" />
          </label>
        </p>
        <p>
          <label for="email"> <small>E-mail (
            <?php if ($req) _e('<strong>*</strong>'); ?>
            )</small>
            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" class="TextField"  style="width: 384px; background: #e9f8ff url(<?php bloginfo('template_url'); ?>/images/FormEmail.png) no-repeat left top" />
          </label>
        </p>
        <p>
          <label for="url"> <small><abbr title="Uniform Resource Identifier">URI</abbr></small>
            <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" class="TextField URI" style="width: 384px; background: #e9f8ff url(<?php bloginfo('template_url'); ?>/images/FormURI.png) no-repeat left top" />
          </label>
        </p>
        <p>
          <label><small>Message</small>
            <?php endif; ?>
            <textarea name="comment" id="comment" rows="6" tabindex="4" class="TextArea" style="width: 409px;" cols="7"></textarea>
          </label>
        </p>
        <p>
          <input name="SubmitComment" type="submit" class="SubmitComment" onmouseover="javascript:changeSty('SubmitCommentIE');" onmouseout="javascript:changeSty('SubmitComment');"  title="Post Your Comment" alt="Post Your Comment" />
          <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
        </p>
        <?php do_action('comment_form', $post->ID); ?>
      </form>
      <?php endif; // If registration required and not logged in ?>
      <?php endif; // if you delete this the sky will fall on your head ?>
    </div>
    <div class="FormBottom"></div>
  </div>
</div>
