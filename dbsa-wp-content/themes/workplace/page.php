<?php get_header(); ?>

<div id="whitewrap">
    <div class="wrapper">
        <div id="location">
            <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
        </div>
    
        <div id="secondary">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
            <div id="postcontent">
            	<h2><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>
            	
				<?php the_content(''); ?>
            </div>
            
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div> <!-- secondary -->
        
        <?php get_sidebar(); ?>
    </div> <!-- wrapper -->
</div> <!-- whitewrap -->

<?php get_footer(); ?>