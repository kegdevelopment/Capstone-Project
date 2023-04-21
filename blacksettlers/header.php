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

    <meta name="description" content="This is the content that a search engine will display when retuning results.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="script-src 'none'">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->

	<!-- Google Fonts -->
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	 -->
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

		<nav id="site-navigation" class="main-navigation">
			<svg  class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" width="50px" height="50px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
			<path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
			<path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
			<?php esc_html_e( 'Primary Menu', 'blacksettlers' ); ?>
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
