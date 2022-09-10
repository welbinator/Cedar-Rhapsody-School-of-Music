<?php
/**
 * Cedar Rhapsody School of Music functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cedar_Rhapsody_School_of_Music
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'cedar_rhapsody_school_of_music_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cedar_rhapsody_school_of_music_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cedar Rhapsody School of Music, use a find and replace
		 * to change 'cedar-rhapsody-school-of-music' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cedar-rhapsody-school-of-music', get_template_directory() . '/languages' );

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


		// Bootstrap 4 Custom Nav Walker

		require_once('bs4navwalker.php');


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-nav' => esc_html__( 'Primary', 'cedar-rhapsody-school-of-music' ),
				'footer-nav' => esc_html__( 'Footer', 'cedar-rhapsody-school-of-music' ),
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
				'cedar_rhapsody_school_of_music_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'cedar_rhapsody_school_of_music_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cedar_rhapsody_school_of_music_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cedar_rhapsody_school_of_music_content_width', 640 );
}
add_action( 'after_setup_theme', 'cedar_rhapsody_school_of_music_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cedar_rhapsody_school_of_music_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cedar-rhapsody-school-of-music' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cedar-rhapsody-school-of-music' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cedar_rhapsody_school_of_music_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cedar_rhapsody_school_of_music_scripts() {

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );
	// wp_style_add_data( 'bootstrap-style', 'rtl', 'replace' );

	wp_enqueue_style( 'cedar-rhapsody-school-of-music-league-spartan', get_template_directory_uri() . '/assets/css/League_Spartan.css', array(), _S_VERSION );
	wp_style_add_data( 'cedar-rhapsody-school-of-music-league-spartan', 'rtl', 'replace' );

	wp_enqueue_style( 'cedar-rhapsody-school-of-music-fa', get_template_directory_uri() . '/assets/fonts/fontawesome-all.min.css', array(), _S_VERSION );
	wp_style_add_data( 'cedar-rhapsody-school-of-music-fa', 'rtl', 'replace' );

	

	wp_enqueue_style( 'cedar-rhapsody-school-of-music-style', get_template_directory_uri() . '/sass/style.css', array(), _S_VERSION );
	wp_style_add_data( 'cedar-rhapsody-school-of-music-style', 'rtl', 'replace' );


	wp_enqueue_script('jquery');
	
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'bs-init', get_template_directory_uri() . '/assets/js/bs-init.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );


	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cedar_rhapsody_school_of_music_scripts' );
// DEVIN'S IDEA
add_action( 'wp_enqueue_scripts', 'add_aos_animation' );
function add_aos_animation() {
	wp_enqueue_style('AOS_animate', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', false, null);
	wp_enqueue_script('AOS', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', false, null, true);
	// wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/script.js', array( 'AOS' ), null, true);
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
require get_template_directory() . '/inc/my-customizer.php';
new Custom_Customizer();

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// add class to anchor tags in menu
add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10, 3 );

function add_class_to_anchors( $classes, $item, $args ) {
    if(isset($args->add_link_class)) {
        $classes['class'] = $args->add_link_class;
    }
    return $classes;
}

// add classes to custom logo 
add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

   
    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );

    return $html;
}


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}
  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );

  remove_all_filters( 'wp_nav_menu_args' );


// Prevent WP from adding <p> tags on all post types
function disable_wp_auto_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );
