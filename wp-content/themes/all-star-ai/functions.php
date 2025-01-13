<?php

/**
 * All Star AI functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package All_Star_AI
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function all_star_ai_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on All Star AI, use a find and replace
		* to change 'all-star-ai' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('all-star-ai', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'all-star-ai'),
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
			'all_star_ai_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'all_star_ai_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function all_star_ai_content_width()
{
	$GLOBALS['content_width'] = apply_filters('all_star_ai_content_width', 640);
}
add_action('after_setup_theme', 'all_star_ai_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function all_star_ai_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'all-star-ai'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'all-star-ai'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'all_star_ai_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function all_star_ai_scripts()
{
	wp_enqueue_style('all-star-ai-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('all-star-ai-style', 'rtl', 'replace');

	wp_enqueue_script('all-star-ai-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'all_star_ai_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// 

function add_styles_scripts()
{

	wp_enqueue_script('jquery');
	wp_enqueue_style('fronted-css', get_stylesheet_directory_uri() . '/assets/css/frontend.css');
	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/assets/aos/aos.css');
	wp_enqueue_style('widget-style-splidejs', get_stylesheet_directory_uri()  . '/assets/splide/dist/css/splide.min.css');
	wp_enqueue_style('swiper-css', get_stylesheet_directory_uri()  . '/assets/swiper/swiper-bundle.min.css');
	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri()  . '/assets/bootstrap/bootstrap.min.css');



	wp_enqueue_script('widget-script-splidejs-extensionAuto', get_stylesheet_directory_uri()  . '/assets/splide/dist/js/splide-extension-auto-scroll.min.js', array(), '1.0',  true);
	wp_enqueue_script('widget-script-splidejs', get_stylesheet_directory_uri() . '/assets/splide/dist/js/splide.min.js', array(), '1.0',  true);
	wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri()  . '/assets/bootstrap/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('aos-js', get_stylesheet_directory_uri()  . '/assets/aos/aos.js', array(), '1.0.0', true);
	wp_enqueue_script('gsap-js', get_stylesheet_directory_uri()  . '/assets/gsap/gsap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('gsap-ScrollTrigger-js', get_stylesheet_directory_uri()  . '/assets/gsap/ScrollTrigger.min.js', array(), '1.0.0', true);
	wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), '1.0.0', true);
	wp_enqueue_script('font-awesome-js', get_stylesheet_directory_uri()  . '/assets/FontAwesome/01b7df662a.js', array(), '1.0.0', true);
	wp_enqueue_script('frontend-js', get_template_directory_uri() . '/assets/js/frontend.js', array(), '1.0.0', true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'add_styles_scripts');
