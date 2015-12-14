<?php
/*
Template Name: Page-Photo
*/
?>

<?php  get_header(); ?>
<div id="page">
	<nav class="right">
		<!--bread crumbs plugin if it short loop exists loop-->
		<?php if(function_exists("bcn_display"))bcn_display();?>
		</nav>	
	<?php if (have_posts()):while (have_posts()):the_post(); ?>
		
		<article class="gallery" id="content"<?php post_class();?>>
			<!--gallery post class, remove default gallery style in functions.php and replace in css-->
			<?php if ( 'gallery' == get_post_format( get_the_ID() ) ) : ?>
			<?php else : ?>
            <!-- Layout your gallery here -->
			<h2><?php the_title(); ?></h2><!--h2 title of post-->	
			<p><?php the_content(); ?></p><!--the content of post-->
		  <?php endif; ?>
		</article>
	
	<?php endwhile;else: ?><!--fall back in the loop for no posts-->	
	<?php endif; ?><!--end the loop of post-->
<?php get_sidebar('right-top'); ?><!--get the sidebar use the actual name of the file title beyond the dash -->
<?php get_sidebar('right-bottom'); ?>				
</div><!--end page-->	
<?php  get_footer(); ?>
<!--Notes on how to do this and why
	http://theme.fm/2011/06/how-to-style-your-wordpress-gallery-43/
	http://logoscreative.co/taking-control-of-wordpress-gallery-styling-without-a-plugin/
	http://wordpress.org/support/topic/styling-the-native-gallery
	-->