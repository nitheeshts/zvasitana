<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package zerif

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->
<?php wp_head(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bxslider/jquery.bxslider.min.js"></script>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/bxslider/jquery.bxslider.css" rel="stylesheet" />
</head>
<?php if(isset($_POST['scrollPosition'])): ?>
<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">
<?php else: ?>
<body <?php body_class(); ?> >
<?php endif; ?>




<!-- =========================

   PRE LOADER

============================== -->
<?php
	
 global $wp_customize;

 if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ): 
 
	$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');
	
	if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
		 
		echo '<div class="preloader">';
			echo '<div class="status">&nbsp;</div>';
		echo '</div>';
		
	endif;	

endif; ?>

<!-- container-fluid div strat -->
<div class="container-fluid top">

    <!-- container div start -->
    <div class="container">
    
      <div class="col-lg-5 col-md-5 col-sm-5 text-left">
     
         <i class="fa fa-facebook fa-2"></i>  <i class="fa fa-twitter fa-2"></i> <i class="fa fa-google-plus fa-2"></i>
        
      </div>
      
      
      <div class="col-lg-7 col-md-7 col-sm-7">
         <div class="col-lg-6 col-md-6 col-sm-6"><i class="fa fa-phone fa-2"></i>Sydney Office : t : 02 9037 4140</div>
         <div class="col-lg-6 col-md-6 col-sm-6"><i class="fa fa-envelope fa-2"></i>Melbourne Office:t: 03 9785 1031</div>
      </div>
     
    
    </div>
    <!-- container div end -->
</div>
<!-- container-fluid div end -->

<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

		

			<div class="navbar-header responsive-logo">

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.$zerif_logo.'" alt="'.get_bloginfo('title').'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

						echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'">';

						echo '</a>';

					endif;

				?>

			</div>

			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation">

				<?php wp_nav_menu( 
						array(
							'theme_location' 	=> 'primary', 
							'container' 		=> false, 
							'menu_class' 		=> 'nav navbar-nav navbar-right responsive-nav main-nav-list', 
							'fallback_cb'     	=> 'zerif_wp_page_menu'
						)
					); 
				?>

			</nav>

		</div>
		<div id="wrapper">
				<div class="header-search"> 
				
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
					<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'zerif-lite' ); ?></span>
					<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'zerif-lite' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'zerif-lite' ); ?>">
					</label>
						<input type="submit" class="header-search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'zerif-lite' ); ?>">
					</form>
				
				
				</div>
		</div>

	</div>

	<!-- / END TOP BAR -->
</header> <!-- / END HOME SECTION  -->