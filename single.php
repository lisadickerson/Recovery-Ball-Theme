<?php  get_header(); ?>
<!--editabe content goes here-->

<div id="page">
<!--adding compact while loop to posts. if have posts ,while we have post, look at each post and show post title-->	
	<?php if (have_posts()):while (have_posts()):the_post(); ?>
				
		<article id="post-<?php the_ID();?>" <?php post_class("myCssClassHere");?>>
		<!--pagination-->
			<span class="right">
					<?php previous_post_link("%link","&laquo; Previous"); ?>&nbsp;&nbsp;
					<?php next_post_link("%link","Next &raquo;"); ?>
			</span>
			<h2><?php the_title(); ?></h2><!--this is single no title link-->
			<?php the_post_thumbnail();?><!--thumbnail image support-->
			<span class="blog-posted-on">Written By <?php the_author_posts_link(); ?> on <span class="blog-meta">
				<time datetime="<?php the_time('Y-m-d'); ?>" ><?php the_time('F j  Y '); ?></time>
			</span>, <?php comments_number("0 comments","1 comments","% comments"); ?></span></span></span><!--time of posting-->
			<?php the_post_thumbnail();?><!--thumbnail image support-->
			<p><?php the_content(); ?></p><!--the content of post-->
			
			<!--gets the catigory the post is listed in -->
			<span class='blog-posted-on'>Listed in:
				 <?php the_category(" , "); ?>&nbsp;&nbsp;<!--gets the tags the post is listed in-->
				<?php if(get_the_tags()): ?>
					<?php the_tags(); ?>
				<?php endif;?>&nbsp;
			</span>
		</article>
		<!--pagination-->
			<span class="right">
					<?php previous_post_link("%link","&laquo; Previous"); ?>&nbsp;&nbsp;
					<?php next_post_link("%link","Next &raquo;"); ?>
			</span>	
	<?php endwhile;else: ?><!--fall back in the loop for no posts-->	
		<p>Sorry no posts !!</p>
	<?php endif; ?><!--end the loop of post-->		
</div>
  
<!-- end widget editable content area footer include below / cut here-->  
<?php  get_sidebar('right-top'); ?>
<?php  get_sidebar('right-bottom'); ?>
<?php  get_footer(); ?>
  
        