<?php  get_header(); ?>
<?php 
	$title="my special title";
	if(is_day())
	{
		$title="You are viewing ". get_the_date() . ", daily archives. ";
	}
	else if(is_month())
	{
		$title= " Viewing " . get_the_date("F Y") .", monthly archives. ";
	}
	else if(is_year())
	{
		$title= " Viewing " . get_the_year("Y"). ", yearly archives. ";
	} 
	else 
	{
		$title= " Viewing " . single_cat_title("",false) . ",  archives. ";
	}
?>
<div id="page">
	<h1 class="up-case">Archives : <?php  echo $title ?></h1>
	<?php content_nav( '' ); ?>	
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
		
	<?php endwhile;else: ?><!--fall back in the loop for no posts-->	
		<p>Sorry no posts !!</p>
	<?php endif; ?><!--end the loop of post-->
	<?php content_nav( '' ); ?>			
</div>
<?php  get_sidebar('right-top'); ?>
<?php  get_sidebar('right-bottom'); ?>
<?php  get_footer(); ?>