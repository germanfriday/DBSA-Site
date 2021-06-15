<?php get_header(); ?>

<div id="whitewrap">
    <div class="wrapper">
        <div id="location">
            <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
        </div>
    
        <div id="gallery">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
            <div class="gallery-item">
            	<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img class="fade" src="<?php echo p75GetThumbnail($post->ID, '130', '130', ''); ?>" alt="<?php the_title() ?>" /></a>
                
                <h3><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_short_title('', '...', true, '30') ?></a></h3>
                
                <div class="category-dets">
                    <?php the_time('F j, Y'); ?><br />
                    <?php comments_number('No Responses','One Response','% Responses'); ?>
                </div>
                
                <p><?php the_content_rss('', TRUE, '', 15); ?></p>
                
                <span class="more-link">
		        	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">Continue Reading</a>
		        </span>
            </div>
            
            <?php endwhile; else: ?>
            
            <p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
            
            <?php endif; ?>
        </div> <!-- secondary -->
    </div> <!-- wrapper -->
</div> <!-- whitewrap -->

<?php include (TEMPLATEPATH . '/footer-alt.php'); ?>