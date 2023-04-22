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
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$blacksettlers_description = get_bloginfo( 'description', 'display' );
			if ( $blacksettlers_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $blacksettlers_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		<!-- .site-branding -->

		<svg class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" viewBox="0 0 24 24" width="50px" height="50px" xmlns="http://www.w3.org/2000/svg">
		<path d="M2.25 6.75H21.75M2.25 12H21.75M2.25 17.25H21.75" stroke="#880000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>

<nav id="site-navigation" class="main-navigation">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
	?>
</nav>


		</div>
	</header><!-- #masthead -->
