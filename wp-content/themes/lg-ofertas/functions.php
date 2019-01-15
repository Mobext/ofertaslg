<?php
/**
 * LG-ofertas functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LG-ofertas
 */

if ( ! function_exists( 'lg_ofertas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lg_ofertas_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on LG-ofertas, use a find and replace
	 * to change 'lg-ofertas' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lg-ofertas', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'lg-ofertas' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lg_ofertas_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'lg_ofertas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lg_ofertas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lg_ofertas_content_width', 640 );
}
add_action( 'after_setup_theme', 'lg_ofertas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lg_ofertas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lg-ofertas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lg-ofertas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lg_ofertas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lg_ofertas_scripts() {
	wp_enqueue_style( 'lg-ofertas-style', get_stylesheet_uri() );
	wp_enqueue_style( 'pace-css', get_template_directory_uri() . '/css/pace.css' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'slp-css', get_template_directory_uri() . '/css/flexslider.css' );
	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper.min.css' );

	/* JS SCRIPTS */
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js' );
	wp_enqueue_script( 'pace', get_template_directory_uri() . '/js/pace.min.js' );
	wp_enqueue_script( 'imagesLoaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js' );
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js' );
	wp_enqueue_script( 'sharre', get_template_directory_uri() . '/js/jquery.sharrre.min.js' );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js' );
	wp_enqueue_script( 'lg-ofertas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'lg-ofertas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lg_ofertas_scripts' );

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
  show_admin_bar(false);
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
