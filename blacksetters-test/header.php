<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blacksettlers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="description" content="Archiving and sharing black history within Alberta and Saskatchewan.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blacksettlers' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="site-branding">
			<div>
				<?php
				the_custom_logo();
					?>
					<a href="https://blacksettlersb.web.dmitcapstone.ca/"><img class="mobile-logo" src="http://www.blacksettlers.ca/wp-content/uploads/2023/04/settlers-logo-transparent.png" alt="BSAS Logo"></a>

					
			</div>
			<!-- <h1>BSAS</h1> -->
		<!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
		<svg id="ham-menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.25 6.75H21.75M2.25 12H21.75M2.25 17.25H21.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
