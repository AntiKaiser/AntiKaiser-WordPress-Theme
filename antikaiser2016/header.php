<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AntiKaiser_2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
	<script src="https://use.fontawesome.com/daf72770b7.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.sticky-kit.min.js"></script>
	<script>
		$(function () {
			$("#masthead").stick_in_parent();
		});
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'antikaiser2016' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 945.68 140" id="AntiKaiser_logo">
							<title>AntiKaiser</title>
							<g class="anti">
								<path class="a" d="M100.75,136a6.2,6.2,0,0,1-4.5,1.4,11.65,11.65,0,0,1-4.7-1.4l-58.2-34a2.15,2.15,0,0,0-2.5,0,4,4,0,0,0-1.5,2l-8.2,27.2q-1.4,4.8-6.8,4.8H4.55q-5.8,0-4.2-5.6l40-125A7.62,7.62,0,0,1,43,1.1,8.18,8.18,0,0,1,47.55,0h14A8.2,8.2,0,0,1,66,1.1a7.65,7.65,0,0,1,2.7,4.3L106.95,125q1.4,4.6-1.6,7.2ZM56.55,25.4q-0.6-2.2-2-2.2t-2,2.2L36.75,78.2a5.72,5.72,0,0,0-.2,3.9,4.63,4.63,0,0,0,2,2.1l37.6,22q2.2,1.4,3.2.3a2.49,2.49,0,0,0,.6-2.5Z" transform="translate(0 2)"/>
								<path class="a" d="M207.54,136a6.55,6.55,0,0,1-4.5-1.5,19.16,19.16,0,0,1-3.5-4.5l-50.8-89q-1-1.6-2.1-1.2a1.87,1.87,0,0,0-1.1,2V130a5.54,5.54,0,0,1-6,6h-7a5.54,5.54,0,0,1-6-6V6a5.94,5.94,0,0,1,1.6-4.4,5.94,5.94,0,0,1,4.4-1.6h7.8a10.3,10.3,0,0,1,5,1.1,9.88,9.88,0,0,1,3.6,3.9l48.6,84.6a1.83,1.83,0,0,0,1.9,1c0.73-.13,1.1-0.73,1.1-1.8V6a5.94,5.94,0,0,1,1.6-4.4,5.94,5.94,0,0,1,4.4-1.6h7a6,6,0,0,1,4.4,1.6,6,6,0,0,1,1.6,4.4V130a5.54,5.54,0,0,1-6,6h-6Z" transform="translate(0 2)"/>
								<path class="a" d="M281.54,136a5.54,5.54,0,0,1-6-6V20a1.77,1.77,0,0,0-2-2h-30a5.93,5.93,0,0,1-4.4-1.6,5.93,5.93,0,0,1-1.6-4.4V6a5.94,5.94,0,0,1,1.6-4.4,5.94,5.94,0,0,1,4.4-1.6h83a6,6,0,0,1,4.4,1.6,6,6,0,0,1,1.6,4.4v6a5.94,5.94,0,0,1-1.6,4.4,5.94,5.94,0,0,1-4.4,1.6h-30a1.77,1.77,0,0,0-2,2V130a5.54,5.54,0,0,1-6,6h-7Z" transform="translate(0 2)"/>
								<path class="a" d="M356.54,136a5.54,5.54,0,0,1-6-6V6a5.94,5.94,0,0,1,1.6-4.4,5.94,5.94,0,0,1,4.4-1.6h7a6,6,0,0,1,4.4,1.6,6,6,0,0,1,1.6,4.4V130a5.54,5.54,0,0,1-6,6h-7Z" transform="translate(0 2)"/>
							</g>
							<g class="kaiser">
								<path d="M460.74,136q-5,0-7.4-5.4l-29-60.6a2,2,0,0,0-1.6-1.3,2.5,2.5,0,0,0-2,.9l-11.6,14.6a11.39,11.39,0,0,0-2.6,7.4V130a5.54,5.54,0,0,1-6,6h-7a5.54,5.54,0,0,1-6-6V6a5.94,5.94,0,0,1,1.6-4.4,5.94,5.94,0,0,1,4.4-1.6h7a6,6,0,0,1,4.4,1.6,6,6,0,0,1,1.6,4.4V55a1.86,1.86,0,0,0,1.1,2q1.1,0.4,2.1-1l41.4-52.8q2.4-3.2,7.6-3.2h10.8q2.8,0,3.7,1.9a3.17,3.17,0,0,1-.7,3.7l-33.8,41.8a5.84,5.84,0,0,0-1,6.6l36.2,74.8q1.4,3,.2,5.1a4.43,4.43,0,0,1-4.2,2.1h-9.2Z" transform="translate(0 2)"/>
								<path d="M584.94,136a6.2,6.2,0,0,1-4.5,1.4,11.65,11.65,0,0,1-4.7-1.4l-58.2-34a2.15,2.15,0,0,0-2.5,0,4,4,0,0,0-1.5,2l-8.2,27.2q-1.4,4.8-6.8,4.8h-9.8q-5.8,0-4.2-5.6l40-125a7.62,7.62,0,0,1,2.7-4.3,8.19,8.19,0,0,1,4.5-1.1h14a8.2,8.2,0,0,1,4.5,1.1,7.65,7.65,0,0,1,2.7,4.3L591.14,125q1.4,4.6-1.6,7.2ZM540.74,25.4q-0.6-2.2-2-2.2t-2,2.2l-15.8,52.8a5.72,5.72,0,0,0-.2,3.9,4.63,4.63,0,0,0,2,2.1l37.6,22q2.2,1.4,3.2.3a2.49,2.49,0,0,0,.6-2.5Z" transform="translate(0 2)"/>
								<path d="M616.74,136a5.54,5.54,0,0,1-6-6V6a5.94,5.94,0,0,1,1.6-4.4,6,6,0,0,1,4.4-1.6h7a6,6,0,0,1,4.4,1.6,6,6,0,0,1,1.6,4.4V130a5.54,5.54,0,0,1-6,6h-7Z" transform="translate(0 2)"/>
								<path d="M658.33,110.6a5.33,5.33,0,0,1,4.3-1.8,7,7,0,0,1,4.1,1.8q1.6,1.4,3.6,3.1a26.13,26.13,0,0,0,4.6,3.1,27.32,27.32,0,0,0,6,2.3,30.57,30.57,0,0,0,7.8.9q9.6,0,15.8-5.3a16.77,16.77,0,0,0,6.2-13.3q0-9-5.5-14.4t-17.5-11.2A113.41,113.41,0,0,1,674,68.2a51.33,51.33,0,0,1-10.5-9,35.17,35.17,0,0,1-6.7-11.3,42.13,42.13,0,0,1-2.3-14.5,34.76,34.76,0,0,1,2.6-13.2,33.12,33.12,0,0,1,7.6-11.3A38.42,38.42,0,0,1,676.83,1a40.46,40.46,0,0,1,15.9-3q11.4,0,19.5,4.4a56,56,0,0,1,12.9,9.2q4.2,4.2,0,8.4l-4.6,4.8a6.11,6.11,0,0,1-3.8,2.1q-1.8.1-4.2-2.1a49.41,49.41,0,0,0-8-5.6,22.75,22.75,0,0,0-11.8-3.2,21.35,21.35,0,0,0-8.1,1.5,21.91,21.91,0,0,0-6.4,3.9,17.56,17.56,0,0,0-4.2,5.5,14.75,14.75,0,0,0-1.5,6.5,21.7,21.7,0,0,0,1.3,7.8,19.33,19.33,0,0,0,4,6.3,32.29,32.29,0,0,0,7,5.5,80.65,80.65,0,0,0,10.5,5.2,114.49,114.49,0,0,1,14.6,7.6,50.14,50.14,0,0,1,10.8,8.9,34.16,34.16,0,0,1,6.7,11.2,42.21,42.21,0,0,1,2.3,14.5,33.42,33.42,0,0,1-3.2,14.4,37.64,37.64,0,0,1-8.8,11.9,44.49,44.49,0,0,1-13.1,8.2,41.23,41.23,0,0,1-15.9,3.1q-13.6,0-21.3-4.1a49.28,49.28,0,0,1-13.5-10.5,6.16,6.16,0,0,1-1.8-4,5.42,5.42,0,0,1,1.8-4.4Z" transform="translate(0 2)"/>
								<path d="M756.73,136a5.54,5.54,0,0,1-6-6V6a5.94,5.94,0,0,1,1.6-4.4,6,6,0,0,1,4.4-1.6h66a6,6,0,0,1,4.4,1.6,6,6,0,0,1,1.6,4.4v6a6,6,0,0,1-1.6,4.4,5.94,5.94,0,0,1-4.4,1.6h-51a1.77,1.77,0,0,0-2,2V56a1.77,1.77,0,0,0,2,2h47a5.54,5.54,0,0,1,6,6v6a5.54,5.54,0,0,1-6,6h-47a1.77,1.77,0,0,0-2,2v38a1.77,1.77,0,0,0,2,2h55a5.54,5.54,0,0,1,6,6v6a5.54,5.54,0,0,1-6,6h-70Z" transform="translate(0 2)"/>
								<path d="M931.73,136q-5,0-7.4-5.4l-23.6-50.8a4.25,4.25,0,0,0-4.2-2.8h-19a1.77,1.77,0,0,0-2,2v51a5.54,5.54,0,0,1-6,6h-7a5.54,5.54,0,0,1-6-6V6a5.94,5.94,0,0,1,1.6-4.4,5.94,5.94,0,0,1,4.4-1.6h41a38.86,38.86,0,0,1,15,2.9A36.29,36.29,0,0,1,938.63,23a38.86,38.86,0,0,1,2.9,15,37.93,37.93,0,0,1-19.2,33.6q-3.2,1.8-1.4,5.8l24,51.4q1.4,3,.2,5.1a4.43,4.43,0,0,1-4.2,2.1h-9.2Zm-29.4-77a20.32,20.32,0,0,0,7.7-1.5,19.4,19.4,0,0,0,6.5-4.3,21.52,21.52,0,0,0,4.5-6.7,21.06,21.06,0,0,0,1.7-8.5A19.45,19.45,0,0,0,910,19.4a21.64,21.64,0,0,0-7.7-1.4h-24.6a1.77,1.77,0,0,0-2,2V57a1.77,1.77,0,0,0,2,2h24.6Z" transform="translate(0 2)"/>
							</g>
						</svg>
					</a>
				</h1>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">