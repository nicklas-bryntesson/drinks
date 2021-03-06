<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage drinks
 * @since 1.0.0
 */

if (!function_exists('drinks_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function drinks_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('text_domain', get_template_directory() . '/languages');

		/**
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'image',
				'status',
			)
		);
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/**
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'style',
				'script',
				'navigation-widgets',
			)
		);
	}
}
add_action('after_setup_theme', 'drinks_setup');

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function drinks_scripts()
{

	wp_enqueue_style(
		'drinks-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get('Version')
	);

	wp_enqueue_script(
		'drinks-navigation-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'drinks_scripts');

// Drinks custom post type -> 'cpt_drinks'
require get_template_directory() . '/inc/drinks-cpt.php';

// Drinks custom post type -> 'cpt_drinks'
require get_template_directory() . '/inc/liquor-cpt.php';


// Custom taxonomy -> 'txn_flavour'
require get_template_directory() . '/inc/flavour-taxonomy.php';

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';
