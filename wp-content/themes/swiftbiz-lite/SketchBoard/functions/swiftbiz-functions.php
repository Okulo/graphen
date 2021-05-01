<?php
global $swiftbiz_lite_themename;
global $swiftbiz_lite_shortname;

if ( !class_exists( 'OT_Loader' )){	
	//THEME SHORTNAME	
	$swiftbiz_lite_shortname = 'swiftbiz-lite';	
	$swiftbiz_lite_themename = 'swiftbiz-lite';	
	define('SWIFTBIZ_ADMIN_MENU_NAME','Swiftbiz Lite');
}

/***************** EXCERPT LENGTH ************/
function swiftbiz_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'swiftbiz_excerpt_length');


/***************** READ MORE ****************/
function swiftbiz_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'swiftbiz_excerpt_more');

/************* CUSTOM PAGE TITLE ***********/
function swiftbiz_title($title)
{
	$swiftbiz_lite_title = $title;
	if ( is_home() && !is_front_page() ) {
		$swiftbiz_lite_title .= get_bloginfo('name');
	}

	if ( is_front_page() ){
		$swiftbiz_lite_title .=  get_bloginfo('name');
		$swiftbiz_lite_title .= ' | '; 
		$swiftbiz_lite_title .= get_bloginfo('description');
	}

	if ( is_search() ) {
		$swiftbiz_lite_title .=  get_bloginfo('name');
	}

	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$swiftbiz_lite_title .= __('Author: ','swiftbiz-lite');
		$swiftbiz_lite_title .= $curauth->display_name;
		$swiftbiz_lite_title .= ' | ';
		$swiftbiz_lite_title .= get_bloginfo('name');
	}

	if ( is_single() ) {
		$swiftbiz_lite_title .= get_bloginfo('name');
	}

	if ( is_page() && !is_front_page() ) {
		$swiftbiz_lite_title .= get_bloginfo('name');
	}

	if ( is_category() ) {
		$swiftbiz_lite_title .= get_bloginfo('name');
	}

	if ( is_year() ) { 
		$swiftbiz_lite_title .= get_bloginfo('name');
	}
	
	if ( is_month() ) {
		$swiftbiz_lite_title .= get_bloginfo('name');
	}

	if ( is_day() ) {
		$swiftbiz_lite_title .= get_bloginfo('name');
	}

	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$swiftbiz_lite_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$swiftbiz_lite_title .= get_bloginfo('name');
		}					
	}
	
	return $swiftbiz_lite_title;
}
add_filter( 'wp_title', 'swiftbiz_title' );


/********************************************************
	#DEFINE REQUIRED CONSTANTS HERE# &
	#OPTIONAL: SET 'OT_SHOW_PAGES' FILTER TO FALSE#.
	#THIS WILL HIDE THE SETTINGS & DOCUMENTATION PAGES.#
*********************************************************/

//CHECK AND FOUND OUT THE THEME VERSION AND ITS BASE NAME

if(function_exists('wp_get_theme')){
    $swiftbiz_lite_theme_data = wp_get_theme(get_option('template'));
    $swiftbiz_lite_theme_version = $swiftbiz_lite_theme_data->Version;  
} 

define( 'swiftbiz_OPTS_FRAMEWORK_DIRECTORY_URI', trailingslashit(get_template_directory_uri() . '/SketchBoard/includes/') );	
define( 'swiftbiz_OPTS_FRAMEWORK_DIRECTORY_PATH', trailingslashit(get_template_directory() . '/SketchBoard/includes/') );
define( 'SWIFTBIZ_THEME_VERSION',$swiftbiz_lite_theme_version);	
	
add_filter( 'ot_show_pages', '__return_false' );

// REQUIRED: SET 'OT_THEME_MODE' FILTER TO TRUE.
add_filter( 'ot_theme_mode', '__return_true' );

// DISABLE ADD NEW LAYOUT SECTION FROM OPTIONS PAGE.
add_filter( 'ot_show_new_layout', '__return_false' );


/**
* Filters the Theme Options ID
*/
function swiftbiz_options_id_filter() {
	return 'swiftbiz_lite_option_tree';
}
add_filter( 'ot_options_id', 'swiftbiz_options_id_filter' );
/**
* Filters the Settings ID
*/
function swiftbiz_settings_id_filter() {
	return 'swiftbiz_lite_option_tree_settings';
}
add_filter( 'ot_settings_id', 'swiftbiz_settings_id_filter' );


// REQUIRED: INCLUDE OPTIONTREE.
require_once get_template_directory() . '/SketchBoard/includes/ot-loader.php';

// THEME OPTIONS
require_once get_template_directory() . '/SketchBoard/includes/options/theme-options.php';


/********************************************
	GET THEME OPTIONS VALUE FUNCTION
*********************************************/
function swiftbiz_get_option( $option_id, $default = '' ){
	return ot_get_option( $option_id, $default = '' );
}


function swiftbiz_bg_style($background) {
	$bg_style = NULL;

	if ($background) {
		if($background['background-image']){
			
			$bg_style = 'background:';
			
			if ($background['background-color']) {
				$bg_style .= $background['background-color'];
			}
			if ($background['background-image']) {
				$bg_style .= ' url('.$background['background-image'].')';
			}
			if ($background['background-repeat']) {
				$bg_style .= ' '.$background['background-repeat'];
			}
			if ($background['background-attachment']) {
				$bg_style .= ' '.$background['background-attachment'];
			}
			if ($background['background-position']) {
				$bg_style .= ' '.$background['background-position'];
			}
			if ($background['background-size']) {
				$bg_style .= ' / '.$background['background-size']. ';';
			}

		} else{
			if ($background['background-color']) {
				$bg_style .= 'background:'.$background['background-color'];
			}
		}
	}

	return $bg_style;
}