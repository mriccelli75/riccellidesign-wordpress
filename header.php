<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RiccelliDesign
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Animate CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css" rel="stylesheet">
	
	<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:300,300i,400,400i,700" rel="stylesheet">	

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'riccellidesign' ); ?></a>

	<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar navbar-default navbar-custom navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">

						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#hero"><img class="brand-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/riccelli-design.svg" alt="riccelli design">
							<span class="logo_title">riccelli design</span>

						</a>
					</div><!-- navbar-header -->


						<?php
						     if(is_page('Home')){ 

						     //or whatever your home page is called
						       wp_nav_menu ( $arrayName = array( 

						       	'theme_location' => 'primary', 
						       	'container' => 'nav', 
						       	'container_class' =>  'navbar-collapse collapse', 
						       	'menu_class'    =>  'nav navbar-nav navbar-right' 

						       	) );

						     } else{

						        //INSERT CODE FOR BLOG MENU
						     	wp_nav_menu ( $arrayName = array(

											'theme_location' => 'new-menu', 
											'container' 		=> 			'nav',
											'container_class'		=>	'navbar-collapse collapse',
											'menu_class'			=>		'nav navbar-nav navbar-right'

											) );
						       }
						 ?>
				</div><!-- container -->
			</div>
		
		</div>
	</header>

	<div id="content" class="site-content">
