<?php  get_header(); ?>
<div id="page">
	<?php content_nav( '' ); ?>	
<!--adding compact while loop to posts. if have posts ,while we have post, look at each post and show post title-->	
	<?php if (have_posts()):while (have_posts()):the_post(); ?>
		
		<article id="post-<?php the_ID();?>" <?php post_class("myCssClassHere");?>>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!--h2 title of post-->
			<span class="blog-posted-on">Posted on <span class="blog-meta">
				<time datetime="<?php the_time('Y-m-d'); ?>" ><?php the_time('F j  Y '); ?></time>
			</span></span><!--time of posting-->
			<?php the_post_thumbnail();?><!--thumbnail image support-->
			<p><?php the_content( "<span class='read-more'>Read More.. <a href='Read'/> </span>" ); ?></p><!--the content of post-->
			<span class='blog-posted-on'>Written By <?php the_author(); ?><span class='blog-meta'> , On <time datetime="<?php the_time('Y-m-d'); ?>" ><?php the_time('M j'); ?></time> , <?php comments_number("0 comments","1 comments","% comments"); ?></span></span>
			<!--comment support-->
		</article>
		
	<?php endwhile;else: ?><!--fall back in the loop for no posts-->	
		<p>Sorry no posts !!</p>
	<?php endif; ?><!--end the loop of post-->
	<?php content_nav( '' ); ?>		
</div>
<?php  get_sidebar('right-top'); ?>
<?php  get_sidebar('right-bottom'); ?>
<?php  get_footer(); ?>
