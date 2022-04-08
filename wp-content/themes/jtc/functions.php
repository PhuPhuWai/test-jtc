<?php
/**
 * jtc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jtc
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
function jtc_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on jtc, use a find and replace
		* to change 'jtc' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'jtc', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'jtc' ),
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
			'jtc_custom_background_args',
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
add_action( 'after_setup_theme', 'jtc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jtc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jtc_content_width', 640 );
}
add_action( 'after_setup_theme', 'jtc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jtc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jtc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jtc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jtc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function teles_scripts() {
	wp_enqueue_style('import-css', get_template_directory_uri().'/assets/css/import.css');
	wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/css/slick.css');
	wp_enqueue_style('slick-theme-css', get_template_directory_uri().'/assets/css/slick-theme.css');
	wp_enqueue_style('style-css', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('single-css', get_template_directory_uri().'/assets/css/single.css');

	wp_enqueue_script('script', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js', array('jquery'), '', true);
	wp_enqueue_script('html5shiv-script', get_template_directory_uri().'/assets/js/html5shiv.js', array('jquery'), '', true);
	wp_enqueue_script('jquery.matchHeight-script', get_template_directory_uri().'/assets/js/jquery.matchHeight.js', array('jquery'), '', true);
	wp_enqueue_script('slick-libray', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('common-script', get_template_directory_uri().'/assets/js/common.js', array('jquery'), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'teles_scripts' );

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
 * Load  breadcrumb Upload file.
 */
require get_template_directory().'/inc/breadcrumb.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/* Template URL */
function template_uri() {
	return get_template_directory_uri();
}

add_shortcode("template_uri", "template_uri");

/************************************************************
 * 3.お問い合わせ条件分岐
 * クリックで表示非表示が変わるmwform.jsを読み込む
 * https://plugins.2inc.org/mw-wp-form/action-hook/mwform_enqueue_scripts_mw-wp-form-xxx/
*************************************************************/
function my_mwform_enqueue_scripts() {
	wp_enqueue_script( 'mwform-script', get_template_directory_uri() . '/js/mwform.js', array(), '', true );
}
add_action( 'mwform_enqueue_scripts_mw-wp-form-118', 'my_mwform_enqueue_scripts' );


/************************************************************
 * 3.お問い合わせ条件分岐
 * MW WP FORM条件分岐 管理者用自動返信メール
 * https://plugins.2inc.org/mw-wp-form/filter-hook/mwform_admin_mail/
*************************************************************/
function autoback_my_mail( $Mail_raw, $values, $Data ) {
	if ($Data->get( 'contact-type' ) == '見積もり'){
		$Mail_raw->body =
		"──────────────────────────"."\n"."\n".
		'お名前　　　　　　:'.$Data->get('name')."\n"."\n".
		'メールアドレス　　:'.$Data->get( 'mail' )."\n"."\n".
		'お問い合わせ内容　:'.$Data->get('content')."\n"."\n".
		'見積内容          :'.$Data->get('mitsumori')."\n"."\n".
		'──────────────────────────'."\n"."\n"
		;
	}
	return $Mail_raw;
}
add_filter( 'mwform_admin_mail_mw-wp-form-118','autoback_my_mail', 10, 3 );

/************************************************************
 * 3.お問い合わせ条件分岐
 * MW WP FORM 条件分岐 自動返信メール
 * https://plugins.2inc.org/mw-wp-form/filter-hook/mwform_auto_mail/
*************************************************************/
function my_mail( $Mail, $values, $Data ) {
	if ($Data->get( 'contact-type' ) == '見積もり'){
		$Mail->body =
		$Data->get( 'name' ). "様
		以下の内容でお問い合わせを承りました。
		1営業日以内に担当者よりご連絡いたします。
		それでは、今しばらくお待ちくださいませ。"."\n".
		"──────────────────────────"."\n"."\n".
		'お名前　　　　　　:'.$Data->get('name')."\n"."\n".
		'メールアドレス　　:'.$Data->get( 'mail' )."\n"."\n".
		'お問い合わせ内容　:'.$Data->get('content')."\n"."\n".
		'見積内容          :'.$Data->get('mitsumori')."\n"."\n".
		'──────────────────────────'."\n"."\n"
		;
	}
	return $Mail;
}
add_filter( 'mwform_auto_mail_mw-wp-form-118', 'my_mail', 10, 3 );