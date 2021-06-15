<div id="sidebar">
	<?php if (is_page()){ ?>

	<div class="block">
    	<div class="block-item">
	    	<h3>Content Details:</h3>
	        <p class="block-space">
	        	<strong>Posted On:</strong> <?php the_time('l, F jS, Y') ?><br />
	        </p>
        </div>
		
		<div class="last-block-item">
			<h3>Popular Content:</h3>
			<ul>
			<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 8");
			foreach ($result as $post) {
			setup_postdata($post);
			$postid = $post->ID;
			$title = $post->post_title;
			$commentcount = $post->comment_count;
			if ($commentcount != 0) { ?>
				<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a></li>
			<?php } } ?>
			</ul>
		</div>
    </div>
    
    <?php } ?>
	
	<?php if (is_single()){ ?>

	<div class="block">
    	<div class="block-item">
	    	<h3>Content Details:</h3>
	        <p class="block-space">
	        	<strong>Posted On:</strong> <?php the_time('l, F jS, Y') ?><br />
	            <strong>Posted In:</strong> <?php the_category(', ') ?><br />
	            <strong>Subscribe:</strong> <?php post_comments_feed_link('RSS 2.0'); ?><br />
	            <strong>Comments:</strong> <a href="<?php the_permalink() ?>#comments" title="<?php the_title() ?>"><?php comments_number('No Responses','One Response','% Responses'); ?></a>
	        </p>
        </div>
        
        <div class="block-item">
	        <h3>Related Content:</h3>
	        <ul>
			<?php
			$tags = wp_get_post_tags($post->ID);
			if ($tags) {
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
			
				$args=array(
					'tag__in' => $tag_ids,
					'post__not_in' => array($post->ID),
					'showposts'=>8, // Number of related posts that will be shown.
					'caller_get_posts'=>1
				);
				$my_query = new wp_query($args);
				if( $my_query->have_posts() ) {
					echo '';
					while ($my_query->have_posts()) {
						$my_query->the_post();
					?>
					<li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
					<?php
					}
					echo '';
				}
			}
			?> 
			</ul>
		</div>
		
		<div class="last-block-item">
			<h3>Popular Content:</h3>
			<ul>
			<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 8");
			foreach ($result as $post) {
			setup_postdata($post);
			$postid = $post->ID;
			$title = $post->post_title;
			$commentcount = $post->comment_count;
			if ($commentcount != 0) { ?>
				<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a></li>
			<?php } } ?>
			</ul>
		</div>
    </div>
    
    <?php } ?>
    
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<?php endif; ?>
</div>