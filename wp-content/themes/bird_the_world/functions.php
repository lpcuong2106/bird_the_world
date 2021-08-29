<?php

/**
 * bird_the_world functions and definitions
 *
 *
 * @package bird_the_world
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('bird_the_world_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bird_the_world_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bird_the_world, use a find and replace
		 * to change 'bird_the_world' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('bird_the_world', get_template_directory() . '/languages');

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
				'menu-1' => esc_html__('Primary', 'bird_the_world'),
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
				'bird_the_world_custom_background_args',
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
endif;
add_action('after_setup_theme', 'bird_the_world_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bird_the_world_content_width()
{
	$GLOBALS['content_width'] = apply_filters('bird_the_world_content_width', 640);
}
add_action('after_setup_theme', 'bird_the_world_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bird_the_world_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'bird_the_world'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'bird_the_world'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'bird_the_world_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bird_the_world_scripts()
{
	wp_enqueue_style('bird_the_world-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('boostrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION);
	wp_enqueue_style('app-css',  get_template_directory_uri() . './assets/css/app.css', array(), _S_VERSION);

	wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), _S_VERSION);
	wp_enqueue_script('boostrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION);
	wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.0.3/iconify.min.js', array(), _S_VERSION);
	wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bird_the_world_scripts');

function wp_corenavi_table($custom_query = null)
{
	global $wp_query;
	if ($custom_query) $main_query = $custom_query;
	else $main_query = $wp_query;
	$big = 999999999;
	$total = isset($main_query->max_num_pages) ? $main_query->max_num_pages : '';
	if ($total > 1) echo '<div class="paginate_links">';
	echo paginate_links(array(
		'base'        => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format'   => '%#%',
		'current'  => max(1, get_query_var('paged')),
		'total'    => $total,
		'mid_size' => '10',
		'prev_text'    => 'Xem trước',
		'next_text'    => 'Xem tiếp',
	));
	if ($total > 1) echo '</div>';
}

//Code phan trang
function devvn_wp_corenavi($custom_query = null, $paged = null)
{
	global $wp_query;
	if ($custom_query) $main_query = $custom_query;
	else $main_query = $wp_query;
	$paged = ($paged) ? $paged : get_query_var('paged');
	$big = 999999999;
	$total = isset($main_query->max_num_pages) ? $main_query->max_num_pages : '';
	if ($total > 1) echo '<div class="pagenavi">';
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, $paged),
		'total' => $total,
		'mid_size' => '10',
		// Số trang hiển thị khi có nhiều trang trước khi hiển thị ...
		'prev_text'   => 'Prev',
		'next_text'    => 'Next',
	));
	if ($total > 1) echo '</div>';
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
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/taxonomy/animals.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
add_filter('nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4);

function so_37823371_menu_item_class($classes, $item, $args, $depth)
{
	$classes[] = 'menu-li-test';
	return $classes;
}
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
