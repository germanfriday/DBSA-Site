<?php get_header(); ?>

<div class="wrapper">
    <div id="featured">
        <div class="wrap contain">
            <div id="slides">
                <div id="slide-box">
                    <div>  
	                    <?php
							$cat = get_option(THEME_PREFIX . "feature_carousel");
							query_posts("cat=$cat&showposts=6");
						?>    
	                    <?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++; ?>
                    
                    	<a href="<?php the_permalink() ?>" class="tooltip" title="<?php the_content_rss('', TRUE, '', 25); ?>"><img src="<?php echo p75GetThumbnail($post->ID, '310', '240', ''); ?>" alt="<?php the_title_attribute(); ?>" /></a>                     
                    
                    	<?php if ($loopcounter % 6 == 3) { ?>
                    </div>

                    <div>
	                    <?php } ?>
	                    <?php endwhile; else: ?>
	                    <?php endif; ?>
                    </div>             	
                </div>
            </div> <!-- slides -->
    
            <span id="slides-prev"><a href="#" title="previous">previous</a></span>
            <span id="slides-next"><a href="#" title="next">next</a></span>
        </div> <!-- wrap contain -->
    </div> <!-- featured -->
    
	<div id="home-left">
        <?php
			if ( get_option(THEME_PREFIX."home_left_type") == "post" )
				query_posts('cat=' . get_option(THEME_PREFIX."home_left_cat") . '&showposts=1');
			else
				query_posts('page_id=' . get_option(THEME_PREFIX."home_left_page"));
		?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
        
        <?php global $more; $more = FALSE; ?>
		<?php the_content(''); ?>
		<?php $more = TRUE; ?>
        
        <!--<span class="more-link">
        	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">Continue Reading</a>
        </span>-->
        
        <?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_query() ?>
    </div>
    
    <!--<div id="home-center">
		<?php
			if ( get_option(THEME_PREFIX."home_center_type") == "post" )
				query_posts('cat=' . get_option(THEME_PREFIX."home_center_cat") . '&showposts=1');
			else
				query_posts('page_id=' . get_option(THEME_PREFIX."home_center_page"));
		?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
        
        <?php global $more; $more = FALSE; ?>
		<?php the_content(''); ?>
		<?php $more = TRUE; ?>
        
        <span class="more-link">
        	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">Continue Reading</a>
        </span>
        
        <?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_query() ?>
    </div>-->
    
    <div id="home-right">
		<?php
			if ( get_option(THEME_PREFIX."home_right_type") == "post" )
				query_posts('cat=' . get_option(THEME_PREFIX."home_right_cat") . '&showposts=1');
			else
				query_posts('page_id=' . get_option(THEME_PREFIX."home_right_page"));
		?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
        
        <?php global $more; $more = FALSE; ?>
		<?php the_content(''); ?>
		<?php $more = TRUE; ?>
        
        <!--<span class="more-link">
        	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">Continue Reading</a>
        </span>-->
        
        <?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_query() ?>
    </div>
    
    <div id="home-box">
        <?php
			$cat = get_option(THEME_PREFIX . "feature_homebox");
			query_posts("cat=$cat&showposts=7");
		?>
        <?php if(have_posts()) : the_post() ?>
        
    	<div id="box-main">
        	<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img class="fade" src="<?php echo p75GetThumbnail($post->ID, '190', '190', ''); ?>" alt="<?php the_title() ?>" /></a>
            
            <h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_short_title('', '...', true, '18') ?></a></h2>
			
			<p><?php the_content_rss('', TRUE, '', 30); ?></p>
			
			<span class="more-link">
	        	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">Continue Reading</a>
	        </span>
        </div>
        
        <?php endif; ?>
        <?php while(have_posts()) : the_post() ?> 
        
        <div class="box-item">
        	<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img class="fade" src="<?php echo p75GetThumbnail($post->ID, '50', '50', ''); ?>" alt="<?php the_title() ?>" /></a>
            
            <h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_short_title('', '...', true, '16') ?></a></h2>
            
            <?php the_content_rss('', TRUE, '', 5); ?>
        </div>
        
        <?php endwhile; ?>
    </div>
    
    <div id="space-box"><!-- nothing to see here --></div>
</div> <!-- wrapper -->

<?php get_footer(); ?>