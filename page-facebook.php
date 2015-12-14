<?php
/*
Template Name: Page-FaceBook
*/
?>
<?php  get_header(); ?>
<div id="page" class="rssfeed">
	<nav class="right">
		<?php if(function_exists("bcn_display"))bcn_display();?>
	</nav>	
		<h2><?php _e( "Recent post's from FaceBook:", 'my-text-domain' ); ?></h2>
		<p>Recovery Ball's Face book rss feed using fetch_feed( ) and get_content( ).<br>
			Get the code here : <a href="http://codex.wordpress.org/Function_Reference/fetch_feed">Wordpress.org</a><br>
			 Its hard to style content I have no controll over.</p>
		<?php // Get RSS Feed(s)
		include_once( ABSPATH . WPINC . '/feed.php' );
		// Get a SimplePie feed object from the specified feed source.
		
		//facebook id = the last # behind the decimal point and &type=1&theater/ "id=100001035125363&type=1&theater/'" );
		$rss = fetch_feed( 'https://www.facebook.com/feeds/page.php?format=atom10&id=406084696103042&type=1&theater/' );
		if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly
		    // Figure out how many total items there are, but limit it to 5 NOT. 
		    $maxitems = $rss->get_item_quantity(30); 
		    // Build an array of all the items, starting with element 0 (first element)get_title().
		    $rss_items = $rss->get_items( 0, $maxitems );
		endif;
		?>
		
		  <?php if ( $maxitems == 0 ) : ?>
		        <?php _e( 'No items', 'my-text-domain' ); ?>
		 <?php else : ?>
		 	
		        <?php // Loop through each feed item and display each item as a hyperlink. ?>
		        <?php foreach ( $rss_items as $item ) : ?>
		            <article class="rssfeed">
		                <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
		                    title="<?php printf( __( 'Posted %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>" target="new">
		                  <!--<?php echo esc_html( $item->get_title() ); ?>-->
		                  <?php echo $item->get_content() ; ?> 
		                </a>
		           </article>
		        <?php endforeach; ?>
		    <?php endif; ?>
	<!--<p>page-facebook.php</p>-->
	
<?php get_sidebar('right-top'); ?>
<?php get_sidebar('right-bottom'); ?>		
			
</div>
<?php  get_footer(); ?>