<?php  get_header(); ?>
<div id="page">
	<h1 class="up-case">Search results for : <?php echo get_search_query(); ?></h1>
		
	<?php if (have_posts()):while (have_posts()):the_post(); ?>
		<article id="post-<?php the_ID();?>" <?php post_class("myCssClassHere");?>>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!--h2 title of post-->
			<span class="blog-posted-on">Posted on <span class="blog-meta">
				<time datetime="<?php the_time('Y-m-d'); ?>" ><?php the_time('F j  Y '); ?></time>
			</span></span><!--time of posting-->
			<?php the_post_thumbnail();?><!--thumbnail image support-->
			<p><?php the_excerpt(); ?></p><!--the content of post-->
			<span class='blog-posted-on'>Written By <?php the_author(); ?><span class='blog-meta'> , On <time datetime="<?php the_time('Y-m-d'); ?>" ><?php the_time('M j'); ?></time> , <?php comments_number("0 comments","1 comments","% comments"); ?></span></span>
			<!--comment support-->	
		</article>
			
	<?php endwhile; ?>
			<?php content_nav( '' ); ?>
			<?php else : ?>	
				<!--fall back in the loop for no posts-->
				<p><?php _e( 'Sorry, but nothing matched your search criteria.<br /> Please try again with different keywords.'); ?></p>
					<?php get_search_form(); ?>	
	<?php endif; ?><!--end the loop of post-->		
</div>
<!-- end widget editable content area footer include below / cut here-->  
<?php  get_sidebar('right-top'); ?>
<?php  get_sidebar('right-bottom'); ?>
<?php  get_footer(); ?>
  