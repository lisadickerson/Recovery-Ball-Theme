<!--Recovery Ball-->
<?php 
$mainMenu = array(
				 "theme_location"=> "main-menu",
				 "container" => "nav",
				 "container_class" => "",
				 "container_id" => "main-menu",
				 "depth" => 3
				 );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	
<head>
<meta charset="<?php bloginfo ('charset'); ?>">
<title><?php bloginfo("name") .wp_title("|");  ?></title>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri; ?> /css/recoveryBall.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/gallery.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/gigpress.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/contact7.css" media="screen" />
<!--gets the latest jquery-->
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body>
<header id="header">
<!--logo and header backgroud image go here header acts as wrapp for header and main nav-->
<div id="headerimage">
<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
<!--<a href="http://aliaslead.com/itc298_cms/">-->
<img src="<?php echo get_template_directory_uri(); ?>/images/recoveryBall-6.png" alt="logo" title="a link back to main page"></a>
<img src="<?php echo get_template_directory_uri(); ?>/images/masthead-red.png" id="masthead" alt="masthead" title="masthead reads Recovery Ball"></div>

<?php wp_nav_menu($mainMenu); ?>
<!--<nav id="main_menu">		
</nav>-->
<!--end main navigation-->
</header>
    <div id="middle"><!--wraps main contents and right sidebars-->
        <div id="content">
        <section id="blog">
<!--header include above / cut here-->