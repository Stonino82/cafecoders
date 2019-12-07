<?php
/**
 * The header for our child-theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cafecoders
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="180x180" href="dist/img/apple-touch-icon.png">
    <link rel="icon" sizes="32x32" href="dist/img/favicon/favicon-32x32.png">
    <link rel="icon" sizes="16x16" href="dist/img/favicon/favicon-16x16.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cafecoders' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- 
		<div class="site-branding">
			<?php the_custom_logo(); if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif;
				$cafecoders_description = get_bloginfo( 'description', 'display' );
				if ( $cafecoders_description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $cafecoders_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>
		 -->
		<!-- .site-branding -->

		

		<nav id="site-navigation" class="nav js-nav">

			<?php the_custom_logo(); ?>
			<!-- <a class="nav__logo" href="#section__home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/nav__logo.svg" alt="cafecoders"></a> -->

			<button class="menu-toggle nav__toggler js-nav__toggler" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'cafecoders' ); ?></button>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_class' => 'nav__menu js-nav__menu',
			) );
			?>
		</nav>
		<!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
