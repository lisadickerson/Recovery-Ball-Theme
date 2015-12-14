<?php  get_header(); ?>
<div id="page">
<!--adding compact while loop to posts. if have posts ,while we have post, look at each post and show post title-->	
	<h1 class="red">404 error: Sorry page not found : (</h1>
	<p class="red"><?php _e( 'Please try searching for the page your looking for. : )'); ?></p>
					<?php get_search_form(); ?>			
</div>
<?php  get_sidebar('right-top'); ?>
<?php  get_sidebar('right-bottom'); ?>
<?php  get_footer(); ?>
