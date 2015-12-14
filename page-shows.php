<?php
/*
Template Name: Page-Shows
*/

?>

<?php  get_header(); ?>
<?php $shows = new WP_Query("cat=14"); ?>
<div id="page">
	<nav class="right">
		<!--bread crumbs plugin if it short loop exists loop-->
		<?php if(function_exists("bcn_display"))bcn_display();?>
	</nav>
	
		<?php if ($shows->have_posts()):while ( $shows->have_posts()): $shows->the_post(); ?>	

		<article class="page" id="content"<?php post_class();?>>
			<h2><?php the_title(); ?></h2><!--h2 title of post-->	
			<p><?php the_content(); ?></p><!--the content of post-->
		<!--get excerpts-->
	</article>
		

	<?php endwhile; else: ?><!--fall back in the loop for no posts-->	
	<?php endif; ?><!--end the loop of post-->
<?php get_sidebar('right-top'); ?><!--get the sidebar use the actual name of the file title beyond the dash -->
<?php get_sidebar('right-bottom'); ?>		
			
</div><!--end page-->	
<?php get_footer(); ?>