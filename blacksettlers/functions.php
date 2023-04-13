<?php
/**
 * blacksettlers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blacksettlers
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blacksettlers_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on blacksettlers, use a find and replace
		* to change 'blacksettlers' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'blacksettlers', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'blacksettlers' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'blacksettlers_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'blacksettlers_setup' );

/* Remove WP-Editor from Community Custom Posts */
add_action( 'init', function() {
	remove_post_type_support( 'our_communities', 'editor' );
}, 99);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blacksettlers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blacksettlers_content_width', 640 );
}
add_action( 'after_setup_theme', 'blacksettlers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blacksettlers_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blacksettlers' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blacksettlers' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'blacksettlers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blacksettlers_scripts() {
	wp_enqueue_style( 'blacksettlers-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'blacksettlers-style', 'rtl', 'replace' );

	wp_enqueue_script( 'blacksettlers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blacksettlers_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// theme support
function theme_setup(){
	/** post formats */
		$post_formats = array('aside','image','gallery','video','audio','link','quote','status');
		add_theme_support( 'post-formats', $post_formats);
	/** post thumbnail **/
		add_theme_support( 'post-thumbnails' );
	/** title-tag **/
		add_theme_support( 'title-tag' );
	/** HTML5 support **/
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	/** refresh widgest **/
		add_theme_support( 'customize-selective-refresh-widgets' );
	/** custom background **/
		$bg_defaults = array(
		'default-image' => '',
		'default-preset' => 'default',
		'default-size' => 'cover',
		'default-repeat' => 'no-repeat',
		'default-attachment' => 'scroll',
		);
		add_theme_support( 'custom-background', $bg_defaults );
	/** custom header **/
		$header_defaults = array(
		'default-image' => '',
		'width' => 300,
		'height' => 60,
		'flex-height' => true,
		'flex-width' => true,
		'default-text-color' => '',
		'header-text' => true,
		'uploads' => true,
		);
		add_theme_support( 'custom-header', $header_defaults );
	
	/** custom logo **/
		add_theme_support( 'custom-logo', array(
		'height' => 250,
		'width' => 250,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array( 'site-title', 'site-description' ),
		) );
	}
	add_action('after_setup_theme','theme_setup');
	
	function page_pagination() {
		global $wp_query;
	   
		$total_pages = $wp_query->max_num_pages;
		if ($total_pages > 1){
		$current_page = max(1, get_query_var('paged'));
	   
		echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => '/page/%#%',
		'current' => $current_page,
		'total' => $total_pages,
		'prev_text' => 'Prev',
		'next_text' => 'Next'
		));
		}
		}
	   
		