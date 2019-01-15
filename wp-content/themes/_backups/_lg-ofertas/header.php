<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LG-ofertas
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="http://www.lg.com/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KFT2ZK"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KFT2ZK');</script>
		<!-- End Google Tag Manager -->
		
		<div id="preloader"></div>
		<header id="masthead" class="site-header" role="banner">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri().'/img/lg-logo.png';?>"/>
					</a>
				</h1>
			<?php

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		<!-- 
		#site-navigation

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> -->
		 <?php 
		 	if ( is_front_page() ) {
		 		$nombreBlog = get_bloginfo('name');
		 		$urlBlog = get_bloginfo('wpurl');
			    $whatsapp = 'en '.$nombreBlog.' '.$urlBlog;
			} else {
				$nombreProducto = types_render_field("nombre");
			    $whatsapp = 'de '.$nombreProducto.' en '.get_bloginfo('name').' '.get_permalink();
			}
		 ?>
		 <ul class="social-share ani">
		 	<li>Compartir en</li>
			<li><a class="facebook-share sharrre ani" href="#"><i class="fa fa-facebook-f"></i></a></li>
			<li><a class="twitter-share sharrre ani" href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a class="whatsapp-share sharrre ani" href="whatsapp://send?text='Conocé mas <?php echo $whatsapp ?>'" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></li>
			<li><a class="close-share ani" href="#"><i class="fa fa-close"></i></a></li>
		 </ul>
		 <a class="share-top ani"><i class="fa fa-share-alt"></i></a>
	</header><!-- #masthead -->
