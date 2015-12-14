<?php 
/*
Theme Name:Recovery Ball  
Theme URI: http //aliaslead.com
Description:  A Band Theme
Author: Lisa E. A. Dickerson
Author URI: http //aliaslead.com 
Version:  2.0
Tags:
License:
License URI:
General comments: 
 */
 
/*-----------------------------------------------------------------------------------*/
/* Register navigation menus:register_nav_menu(name);Code reference i.e. "main-menu" 
/* and readable reference for dash "Main Navigation Menu". 
/* Main Navigation Menu is the name that will appear in the dash board 
/* and main-menu is the name/id you will use in your CSS and html code.
/*-----------------------------------------------------------------------------------*/



		register_nav_menus( array(
			'main-menu' => 'Main Navigation Menu',
			/*register another menu here in this format.*/
			'footer_menu' => 'My Custom Footer Menu',
		) );

/*-----------------------------------------------------------------------------------*/
/* Re-writing WordPress defaults for theme styles.
/*-----------------------------------------------------------------------------------*/  
	
	  //registering excerpts for page.php
	  add_post_type_support("page","excerpt");
	  
	   //adding thumbnail image support
	  add_theme_support('post-thumbnails');
	  
	  //true is hard crop:will crop ,false soft crop
	  add_image_size("post-thumb",200,200,true);
	  add_image_size("page-feature-image",300,400,false);
	  set_post_thumbnail_size(200,200,true);
	  
	  //new size to try in photo gallery 
	  add_image_size("page-photo ,attachment-thumbnail",210,280,true);
	  add_image_size("gallery-columns-2 gallery-size-thumbnail",210,280,true);
	  
	  //re-write default gallery styles
	  add_filter( 'use_default_gallery_style', '__return_false' );
	  
	 
/*-----------------------------------------------------------------------------------*/
/* Register sidebars 
/*-----------------------------------------------------------------------------------*/  
	  
	  /*registering sidebar-right-top.php*/
	  register_sidebar(array(
	  	"name" => "Right Sidebar Top",# this needs to match in the sidebar call
		"id" => "right_aside_top",
		"description" => "Will appear on Right Top",
		"before_widget" => "<div class ='widget'>",
		"after_widget" => "</div>",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>",
	  ));
	 
	  /*registering sidebar-right-bottom.php*/ 
		/*-------------------------------------------------------------------------------------------*/
		/* You can add content via the dash or hard code sidebar-right-bottom.php with a music player
		/* It currently is pulling hard coded content
		/*--------------------------------------------------------------------------------------------*/  	 
	  register_sidebar(array(
	  	"name" => "Right Sidebar Bottom",# this needs to match in the sidebar call
		"id" => "right_aside_bottom",
		"description" => "Will appear on Right Bottom: you can edit in the dash or hardcode 'sidebar-right-bottom.php'",
		"before_widget" => "<div class ='widget'>",
		"after_widget" => "</div>",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>",
	  ));
	 
/*-----------------------------------------------------------------------------------*/
/* Adding content navigation for index and search pages
/*-----------------------------------------------------------------------------------*/  	  
	
	function content_nav($html_id) {
	global $wp_query;
	$html_id = esc_attr($html_id);
	if ($wp_query->max_num_pages > 1) : ?>
		<nav class="top" id="<?php echo $html_id; ?>">
			<span class="right"><?php next_posts_link('<span class="meta-nav">&laquo;</span> Older posts'); ?></span>
			<span class="right"><?php previous_posts_link('Newer posts <span class="meta-nav">&raquo;</span>'); ?></span>
		</nav><?php echo $html_id; ?>
	<?php endif;
}
	 
/*-----------------------------------------------------------------------------------*/
/* Required plugins for theme demo to work.
/* You can comment out single plugins or all to remove this feature.
/* http://tgmpluginactivation.com/
/* https://github.com/TGMPA/TGM-Plugin-Activation
/*-----------------------------------------------------------------------------------*/  	  

 
	require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
	 
	add_action( 'tgmpa_register', 'mytheme_require_plugins' );
	 
	function mytheme_require_plugins() {
	 
	   $plugins = array(
	   		array(
				'name'        => 'GigPress',
				'slug'        => 'gigpress',
				 'required'  => false, // this plugin is recommended
				 ),	
	   
		    array(  // this is the older version so the demo will import and styles will not change
					'name'        => 'Legacy Google Calendar Events',
					'slug'        => 'legacy-google-calendar-events',
					 'required'  => false, // this plugin is recommended
					 ),
					 
			array(
				'name'        => 'Contact form 7',
				'slug'        => 'contact-form-7',
				 'required'  => false, // this plugin is recommended
				 ),
				 			 
		    array(
					'name'        => 'Really Simple Captcha',
					'slug'        => 'really-simple-captcha',
					 'required'  => false, // this plugin is recommended
					 ),	 
		   	 
			
			array(
					'name'        => 'Breadcrumb navxt',
					'slug'        => 'breadcrumb-navxt',
					 'required'  => false, // this plugin is recommended
					 ),
		   array(
			   'name'        => 'Wordpress Importer',
			   'slug'        => 'wordpress-importer',
			   'required'  => false, // this plugin is recommended
		   ),

	   );//End plugin array
			
		    $config = array(
		    'id'           => 'mytheme-tgmpa', // your unique TGMPA ID
		    'default_path' => get_stylesheet_directory() . '/lib/plugins/', // default absolute path
		    'menu'         => 'mytheme-install-required-plugins', // menu slug
		    'has_notices'  => true, // Show admin notices
		    'dismissable'  => false, // the notices are NOT dismissable
		    'dismiss_msg'  => 'I really, really need you to install these plugins, okay? Refer to the Theme Demo instuctions below', // this message will be output at top of nag
		    'is_automatic' => true, // automatically activate plugins after installation
		    'message'      => '<!--Hey there.--> ', // message to output right before the plugins table
		    //'strings'      => array(); // The array of message strings that TGM Plugin Activation uses
				);//End config array
		 
		    tgmpa( $plugins, $config );
	 
	}
/*-----------------------------------------------------------------------------------*/
/* Instructive dash board widget for theme demo. 
/* Adds a widget in Dashboard / Home with instructions for required plugins and importing demo content xml file.
/* http://code.tutsplus.com/tutorials/how-to-build-custom-dashboard-widgets--wp-29778
/*----------------------------------------------------------------------------------------------------------------*/
/*-----------------------------------------------------------------------------------*/
/* Comment out until demo content is hosted.
/*

function register_my_dashboard_widget() {
		 	global $wp_meta_boxes;
		
			wp_add_dashboard_widget(
				'my_dashboard_widget',
				'Recovery Ball Theme Demo',
				'my_dashboard_widget_display'
			);
		
		 	$dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
		
			$my_widget = array( 'my_dashboard_widget' => $dashboard['my_dashboard_widget'] );
		 	unset( $dashboard['my_dashboard_widget'] );
		
		 	$sorted_dashboard = array_merge( $my_widget, $dashboard );
		 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
		}
		add_action( 'wp_dashboard_setup', 'register_my_dashboard_widget' );
		
		//Widget Message
		function my_dashboard_widget_display() {
			?>
				<p>To set this theme up in Demo mode:</p>
					<ol>

						<li>Install recommended plugin's listed above</li>
						<li>Go to Tool's > Import and upload the xml file included in the theme demo folder</li>
						<li>Go to Settings > Reading , and select<strong> "a static page" </strong> as the front page.<br>
							Set<strong> "News" </strong> as the post page.
						</li>
						<li>Go to GigPress > Import/Export, and upload the CSV file included in the theme demo folder.</li>
					</ol>
			<?php
		}

/* We are going to hide the welcome panel from view for now so my demo widget gets seen  : )
* It can turned back on in the screen options.
* http://wordpress.stackexchange.com/questions/36402/3-3-how-do-you-hide-the-new-dashboard-welcome-panel
*/
/* Comment out until demo content is hosted.
/*
add_action( 'load-index.php', 'hide_welcome_panel' );

function hide_welcome_panel() {
	$user_id = get_current_user_id();

	if ( 1 == get_user_meta( $user_id, 'show_welcome_panel', true ) )
		update_user_meta( $user_id, 'show_welcome_panel', 0 );
}
*/
// close functions.php
?>