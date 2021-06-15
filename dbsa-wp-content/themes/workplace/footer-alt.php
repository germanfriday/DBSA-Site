<div id="footerwrap">
	<div id="footer">
    	<div id="footertext">
			<h3>Copyright <?php echo date("Y"); ?> <?php bloginfo('name'); ?> - All Rights Reserved</h3>
            <small>The "Work Place" theme by: <a href="http://www.press75.com/" title="Press75.com" >Press75.com</a></small>
            <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
        </div>
        
        <div id="pagination">
        	<?php next_posts_link('<span class="navforward"></span>') ?><?php previous_posts_link('<span class="navback"></span>') ?>
        </div>
    </div>  
</div>

<?php wp_footer(); ?>

<!--[if IE 6]>
<script type="text/javascript"> 
	/*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></"+"script>"); var __noconflict = true; } 
	var IE6UPDATE_OPTIONS = {
		icons_path: "http://static.ie6update.com/hosted/ie6update/images/"
	}
</script>
<script type="text/javascript" src="http://static.ie6update.com/hosted/ie6update/ie6update.js"></script>
<![endif]-->

</body>
</html>