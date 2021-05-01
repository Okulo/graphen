<?php
global $swiftbiz_lite_themename;
global $swiftbiz_lite_shortname;

/**
 * Initialize the options before anything else. 
 */
add_action( 'init', 'swiftbiz_lite_custom_theme_options');

/**
 * Theme Mode demo code of all the available option types.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function swiftbiz_lite_custom_theme_options() {

global $swiftbiz_lite_themename;
global $swiftbiz_lite_shortname;

    /* OptionTree is not loaded yet, or this is not an admin request */
	if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
	return false;

    /**
    * Get a copy of the saved settings array. 
    */
	$saved_settings = get_option( ot_settings_id(), array() );

	// If using image radio buttons, define a directory path
	$imagepath  =  get_template_directory_uri() . '/images/';
	$sktsiteurl = esc_url(home_url('/'));
	$sktsitenm  = get_bloginfo('name');
	
	// BACKGROUND DEFAULTS
	$background_defaults = array(
		'background-color'     => '#000',
		'background-image'     => '',
		'background-repeat'    => 'repeat-y',
		'background-position'  => 'center top',
		'background-attachment'=>'fixed' 
	);
	
  /**
   * Create a custom settings array that we pass to 
   * the OptionTree Settings API Class.
   */
  $custom_settings = array(
    
		'sections'        => array(
			array(
				'title'   => __( 'General Settings', 'swiftbiz-lite' ),
				'id'      => 'general_default'
			),			
			array(
				'title'   => __( 'Header Settings', 'swiftbiz-lite' ),
				'id'      => 'header_settings'
			),
			array(
				'title'   => __( 'Breadcrumb Settings', 'swiftbiz-lite' ),
				'id'      => 'breadcrumb_settings'
			),			
			array(
				'title'   => __( 'Home Page Settings', 'swiftbiz-lite' ),
				'id'      => 'home_settings'
			),
			array(
				'title'   => __( 'Blog Settings', 'swiftbiz-lite' ),
				'id'      => 'blog_settings'
			),
			array(      
				'title'   => __( 'Footer Settings', 'swiftbiz-lite' ),
				'id'      => 'footer_section'
			),
			array(      
				'title'   => __( 'Custom Messages', 'swiftbiz-lite' ),
				'id'      => 'custom_messages'
			),
		),
		
		'settings'        => array(

		//==================================================================
		// GENERAL SETTINGS SECTION STARTS =================================
		//==================================================================
		array(
			'id'          => 'swiftbiz_welcome_speach',
			'label'       => __('Welcome to Swiftbiz Lite', 'swiftbiz-lite'),
			'desc'        => '<h1>'.__('Welcome to Swiftbiz Lite', 'swiftbiz-lite').'</h1><p>'.
			__('Thank you for using Swiftbiz Lite. Get started below and go through the left tabs to set up your website.', 'swiftbiz-lite').'</p>',
			'type'        => 'textblock',
			'std'         => '',
			'section'     => 'general_default',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => ''
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_primary_color_scheme',
			'label'       => __( 'Primary Color Scheme', 'swiftbiz-lite'),
			'desc'        => __( 'Set primary theme color.', 'swiftbiz-lite'),
			'type'        => 'colorpicker',
			'std'         => '',
			'section'     => 'general_default'
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_colorpicker',
			'label'       => __( 'Secondry Color Scheme', 'swiftbiz-lite'),
			'desc'        => __( 'Set secondry theme color.', 'swiftbiz-lite'),
			'type'        => 'colorpicker',
			'std'         => '',
			'section'     => 'general_default'
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_favicon',
			'label'       => __( 'Upload Favicon', 'swiftbiz-lite'),
			'desc'        => __( 'This creates a custom favicon for your website.', 'swiftbiz-lite'),
			'type'        => 'upload',
			'std'         => '',
			'section'     => 'general_default'
		),
		//------ END GENERAL SETTINGS SECTION ------------------------------

		
		//==================================================================
		// HEADER SETTINGS SECTION STARTS ==================================
		//==================================================================
		array(
			'id'          => $swiftbiz_lite_shortname.'_logo_img',
			'label'       => __( 'Change Logo', 'swiftbiz-lite'),
			'desc'        => __( 'This creates a custom logo for your website (replaces site-title & tagline).', 'swiftbiz-lite'),
			'type'        => 'upload',
			'std'         => '',
			'section'     => 'header_settings'
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_logo_alt',
			'label'       => __( 'Logo ALT Text', 'swiftbiz-lite'),
			'desc'        => __( 'Enter logo image alt attribute text.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'header_settings'
		),
		array(
	        'id'          => $swiftbiz_lite_shortname.'_headserach',
	        'label'       => __( 'On/Off Search Icon', 'swiftbiz-lite' ),
	        'desc'        => sprintf( __( 'On/Off Search Icon In the header', 'swiftbiz-lite' ), '<code>on</code>', '<code>off</code>' ),
	        'type'        => 'on-off',
	        'std'         => '',
	        'section'     => 'header_settings'
        ),
	    array(
	        'id'          => $swiftbiz_lite_shortname.'_persistent_on_off',
	        'label'       => __( 'Persistent (sticky) Header Navigation', 'swiftbiz-lite' ),
	        'desc'        => sprintf( __( 'On/Off persistent (sticky) header navigation', 'swiftbiz-lite' ), '<code>on</code>', '<code>off</code>' ),
	        'type'        => 'on-off',
	        'std'         => '',
	        'section'     => 'header_settings'
        ),
		//------ END HEADER SETTINGS SECTION -------------------------------
		
		
		//==================================================================
		// BREADCRUMB SETTINGS SECTION STARTS ==========================
		//==================================================================
		array(
			'id'          => $swiftbiz_lite_shortname.'_bread_background',
			'label'       => __( 'Choose Page Title & Breadcrumb Background Color & Image', 'swiftbiz-lite'),
			'desc'        => __( 'Upload image & color for page title background.', 'swiftbiz-lite' ),
			'type'        => 'background',
			'std'         => '',
			'section'     => 'breadcrumb_settings'
		),
		//------ END BREADCRUMB SETTINGS SECTION ---------------------------

		//==================================================================
		// HOME PAGE SETTINGS SECTION STARTS ===============================
		//==================================================================
		array(
			'id'          => $swiftbiz_lite_shortname.'_home_bg_img',
			'label'       => __( 'Background Image', 'swiftbiz-lite'),
			'desc'        => __('Upload Background Image', 'swiftbiz-lite'),
			'type'        => 'Upload',
			'std'         => '',
			'section'     => 'home_settings'
		),
		array(
			'id'          => 'option_divider',
			'label'       => '',
			'type'        => 'textblock',
			'section'     => 'home_settings'
		),
		array(
			'id'    	  => $swiftbiz_lite_shortname.'_home_fetured_boxes',
			'label' 	  => __( 'Featured Box Section', 'swiftbiz-lite' ),
			'desc'  	  => __( 'Add "<strong>Featured Box - Swiftbiz</strong>" widget in "<strong>Home Featured Sidebar</strong>" from "Appearance >> widgets".','swiftbiz-lite'),
			'type'        => 'info',
			'section'     => 'home_settings'
		),
        array(
			'id'          => '_option_divider',
			'label'       => '',
			'type'        => 'textblock',
			'section'     => 'home_settings'
		),
		array(
			'label'       => __( 'Our Clients Section', 'swiftbiz-lite' ),
			'id'          => $swiftbiz_lite_shortname.'_home_brand_sec',
			'desc'        => __( 'Make it on, if you want to enable Our Clients Section','swiftbiz-lite'),
			'type'        => 'on-off',
			'std'         => '',
			'section'     => 'home_settings',
		),    
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand1_img',
			'label'       => __( 'First Client Logo', 'swiftbiz-lite'),
			'desc'        => __( 'Upload first client Logo Image.', 'swiftbiz-lite'),
			'type'        => 'Upload',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
        array(
			'id'          => $swiftbiz_lite_shortname.'_brand1_alt',
			'label'       => __( 'First Client ALT Text', 'swiftbiz-lite'),
			'desc'        => __( 'Enter first client image alt attribute text.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand1_url',
			'label'       => __( 'First Client URL', 'swiftbiz-lite'),
			'desc'        => __( 'Enter first client URL link.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand2_img',
			'label'       => __( 'Second Client Logo', 'swiftbiz-lite'),
			'desc'        => __( 'Upload second client Logo Image.', 'swiftbiz-lite'),
			'type'        => 'Upload',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand2_alt',
			'label'       => __( 'Second Client ALT Text', 'swiftbiz-lite'),
			'desc'        => __( 'Enter second client image alt attribute text.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand2_url',
			'label'       => __( 'Second Client URL', 'swiftbiz-lite'),
			'desc'        => __( 'Enter second client URL link.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand3_img',
			'label'       => __( 'Third Client Logo', 'swiftbiz-lite'),
			'desc'        => __( 'Upload third client Logo Image.', 'swiftbiz-lite'),
			'type'        => 'Upload',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
        array(
			'id'          => $swiftbiz_lite_shortname.'_brand3_alt',
			'label'       => __( 'Third Client ALT Text', 'swiftbiz-lite'),
			'desc'        => __( 'Enter third client image alt attribute text.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand3_url',
			'label'       => __( 'Third Client URL', 'swiftbiz-lite'),
			'desc'        => __( 'Enter third client URL link.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand4_img',
			'label'       => __( 'Fourth Client Logo', 'swiftbiz-lite'),
			'desc'        => __( 'Upload fourth client Logo Image.', 'swiftbiz-lite'),
			'type'        => 'Upload',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
        array(
			'id'          => $swiftbiz_lite_shortname.'_brand4_alt',
			'label'       => __( 'Fourth Client ALT Text', 'swiftbiz-lite'),
			'desc'        => __( 'Enter fourth client image alt attribute text.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		array(
			'id'          => $swiftbiz_lite_shortname.'_brand4_url',
			'label'       => __( 'Fourth Client URL', 'swiftbiz-lite'),
			'desc'        => __( 'Enter fourth client URL link.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'home_settings',
			'condition'   => $swiftbiz_lite_shortname.'_home_brand_sec:is(on)',
		),
		//------ END HOME PAGE SETTINGS SECTION ----------------------------

		//==================================================================
		// BLOG SETTINGS SECTION STARTS ====================================
		//==================================================================	
		array(
			'id'          => $swiftbiz_lite_shortname.'_blogpage_heading',
			'label'       => __( 'Blog Page Title', 'swiftbiz-lite'),
			'desc'        => __( 'Enter Blog Page Title text.', 'swiftbiz-lite'),
			'type'        => 'text',
			'std'         => '',
			'section'     => 'blog_settings'
		),
		//------ END BLOG SETTINGS SECTION ---------------------------------


		//==================================================================
		// FOOTER SETTINGS SECTION STARTS ==================================
		//==================================================================
		array(
			'id'          => $swiftbiz_lite_shortname.'_copyright',
			'label'       => __( 'Copyright Text', 'swiftbiz-lite'),
			'desc'        => __( 'You can use HTML for links etc..', 'swiftbiz-lite'),
			'type'        => 'textarea',
			'std'         => '',
			'section'     => 'footer_section'
		),
		//------ END FOOTER SETTINGS SECTION -------------------------------
		
		
		//==================================================================
		// CUSTOM MESSAGES SECTION STARTS ==================================
		//==================================================================
		array(
			'id'          => $swiftbiz_lite_shortname.'_four_zero_four_txt',
			'label'       => __( '404 Page Error Message', 'swiftbiz-lite'),
			'desc'        => __( 'Add error message for 404 page.', 'swiftbiz-lite'),
			'type'        => 'textarea-simple',
			'std'         => '',
			'rows'        => '2',
			'section'     => 'custom_messages'
		),
		//------ END CUSTOM MESSAGES SECTION -------------------------------
	)
  );
  
   /* allow settings to be filtered before saving */
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
}
?>