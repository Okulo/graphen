<?php global $swiftbiz_lite_shortname, $swiftbiz_lite_themename, $post, $color_scheme, $_primary_color_scheme, $_persistent_on_off;  ?>
<?php 
	$_primary_color_scheme = "#41bb99";
	$_color_scheme = "#777";

function swiftbiz_skeHex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
} 


	$front_bg_image = swiftbiz_get_option($swiftbiz_lite_shortname."_home_bg_img");

	if(swiftbiz_get_option($swiftbiz_lite_shortname.'_primary_color_scheme')){ $_primary_color_scheme = esc_attr(swiftbiz_get_option($swiftbiz_lite_shortname.'_primary_color_scheme')); }
	if(swiftbiz_get_option($swiftbiz_lite_shortname.'_colorpicker')){ $_color_scheme = esc_attr(swiftbiz_get_option($swiftbiz_lite_shortname.'_colorpicker')); } 
	if(swiftbiz_get_option($swiftbiz_lite_shortname.'_persistent_on_off')){ $_persistent_on_off = esc_attr(swiftbiz_get_option($swiftbiz_lite_shortname.'_persistent_on_off')); }
	if(swiftbiz_get_option($swiftbiz_lite_shortname.'_bread_background')){ $_bread_background = swiftbiz_get_option($swiftbiz_lite_shortname.'_bread_background'); } 
	$_bread_background  = swiftbiz_bg_style(swiftbiz_get_option($swiftbiz_lite_shortname.'_bread_background'));

	$rgb=array();
	$rgb = swiftbiz_skeHex2RGB($_color_scheme);
	$R = $rgb['red'];
	$G = $rgb['green'];
	$B = $rgb['blue'];
	$rgbcolor = "rgba(". $R .",". $G .",". $B .",.4)";
	$bdrrgbcolor = "rgba(". $R .",". $G .",". $B .",.7)";


	$hrgb = swiftbiz_skeHex2RGB($_primary_color_scheme);
	$hR = $hrgb['red'];
	$hG = $hrgb['green'];
	$hB = $hrgb['blue'];
	$hrgbcolor = "rgba(". $hR .",". $hG .",". $hB .",.7)";

?>
<style type="text/css">
	
	/*************** TOP HEADER **************/
	<?php if($front_bg_image == '') { ?>
		.front-page #header_wrap{ background: none;} 
	<?php } ?>
	<?php if(swiftbiz_get_option($swiftbiz_lite_shortname.'_headserach') === 'off'){ ?>
		ul.menu{ margin: 34px 0 0; }
		.sktmenu-toggle{right: 8px !important;}
	<?php } ?>	
	/*************** BREADCRUMB **************/
	<?php if(isset($_bread_background) && $_bread_background !='') {  ?>
	#header_wrap { 
		<?php echo $_bread_background; ?>;
		padding-bottom: 183px;
	}
	<?php }	else {  ?>
	#header_wrap { background: none repeat scroll 0 0 rgba(0, 0, 0, 0.6); padding-bottom: 183px; position: relative; }
	<?php  }  ?>

	/********************** MAIN NAVIGATION PERSISTENT **********************/
	<?php if($_persistent_on_off === 'off') { ?>#header.skehead-headernav.skehead-headernav-shrink {position: relative;} .header-clone {display:none;} <?php } ?>

<?php if(isset($_primary_color_scheme)) { ?>
	
	*::-moz-selection {
		background: <?php echo $_primary_color_scheme; ?>;
		color:#fff;
	}
	::selection {
		background: <?php echo $_primary_color_scheme; ?>;
		color: #fff;
	}
	/* Direct Primary Color */
	.section-heading, .swiftbiz-counter-h i, .error-txt, #sidebar .skt-blog-thumbnail i, .cont_nav_inner a, .page-content-title,
	.nws-subscribe, .navigation #swiftbiz-paginate a,#wp-calendar thead th {
		color: <?php echo $_primary_color_scheme; ?>;
	}
	
	/* Primary Color on Hover */
	.navigation .nav-previous:hover, .navigation .nav-previous:hover a, .navigation .nav-next:hover, .navigation .nav-next:hover a,
	.swiftbiz-iconbox a:hover, .swiftbiz-iconbox a:hover .first-word, 
	.post-title a:hover, .post-title a:hover .first-word {
		color: <?php echo $_primary_color_scheme; ?>;
	}

	/* Direct Primary Background Color */
	blockquote,a.large-button, a.small-button, a.medium-button,.sktmenu-toggle, .navigation .alignleft a, .navigation .alignright a,
	ul.horizontal-style-title li,  a#backtop, #wp-calendar, .wp-calendar-head, #wp-calendar caption, #wp-calendar .cal-month, #wp-calendar tbody a, #latest-news .owl-prev:before, #latest-news .owl-next:before, ul.horizontal-style li,
	#sidebar ul.skeside li span.first, #sidebar ul.skeside li span.fourth::after, .comments-template .reply a, .filter li .selected, #full-client-box, .img-404,.postformat-gallerycontrol-nav li a,
	form input[type="submit"], #searchform input[type="submit"], .continue a {
		background-color: <?php echo $_primary_color_scheme; ?>;
	}

	/* Hover Primary Background Color + Misclleneous*/
	#sidebar .social li a:hover, .widget_tag_cloud a:hover, .filter a:hover {
		background-color: <?php echo $_primary_color_scheme; ?> !important;
	}
	.widget_tag_cloud a,
	form input[type="text"]:focus, form input[type="password"]:focus, form input[type="email"]:focus,
	form input[type="url"]:focus, form input[type="tel"]:focus, form input[type="number"]:focus,
	form input[type="range"]:focus,	form input[type="date"]:focus, form input[type="file"]:focus,
	form textarea:focus {
		border-color: <?php echo $_primary_color_scheme; ?>;
	}

	/* hrgb */
	#skenav ul ul a:hover{
		background-color: <?php echo $hrgbcolor; ?>;
	}
	#skenav .swiftbiz-mob-menu ul a:hover{
		background-color: <?php echo $_primary_color_scheme; ?>;
	}

<?php } ?>

/**************** SECONDARY COLOR *****************/
<?php if(isset($_color_scheme)) { ?>
	/* Direct Secondary Color */
	#wp-calendar tbody td, #respond .comment-notes,	.swiftbiz-iconbox h4,
	#sidebar .news-date-meta, #sidebar .news-month-meta,#sidebar .news-title {
	 	color: <?php echo $_color_scheme; ?>;
	}
	
	a,.swiftbiz_widget ul ul li:hover:before,.swiftbiz_widget ul ul li:hover,.swiftbiz_widget ul ul li:hover a,.title a ,.skepost-meta a:hover,
	.post-tags a:hover,.entry-title a:hover,.readmore a:hover, .childpages li a, .swiftbiz_widget a,.swiftbiz_widget a:hover, 
	.mid-box:hover .iconbox-icon i,.swiftbiz-title, .reply a, a.comment-edit-link {
		text-decoration: none;
	}
	.single #content .title, #content .post-heading, .childpages li , .fullwidth-heading, #respond .required {
		color: <?php echo $_color_scheme; ?>;
	}
	#content .featured-image-shadow-box .fa {
		color: <?php echo $_color_scheme; ?>;
	}
	section > h1 {
		color: <?php echo $_color_scheme; ?>;
	}
	
	/* Hover Secondary Color */
	.skepost-meta .comments:hover .fa, .skepost-meta .author-name:hover .fa, .swiftbiz_widget ul ul li:hover > a, .post a:hover, blockquote a:hover, #footer a:hover,#footer li:hover > a,
	 #wrapper .hsearch .hsearch-close:hover, #footer .third_wrapper a:hover, .swiftbiz-footer-container ul li:hover:before,
	 .swiftbiz-footer-container ul li:hover a, .cont_nav_inner a:hover {
		color: <?php echo $_color_scheme; ?>;
	}

	/* Hover Secondary Background Color + Misclleneous */
	form input[type="submit"]:hover,
	.navigation .alignleft a:hover, .navigation .alignright a:hover, a#backtop:hover,
	#latest-news .owl-prev:hover:before, #latest-news .owl-next:hover:before, #footer #wp-calendar a:hover {
		background-color: <?php echo $_color_scheme; ?> !important;
	}

	#respond input[type="submit"]:hover, .continue a:hover, .comments-template .reply a:hover {
		background-color: <?php echo $_color_scheme; ?>;
	}
	
	.swiftbiz-iconbox.iconbox-top:hover .iconboxhover {
		background-color: <?php echo $_color_scheme; ?>;
	}
	
	.swiftbiz-iconbox .iconbox-content h4 hr, form input[type="submit"]:hover {
		border-color: <?php echo $_color_scheme; ?>;
	} 	


<?php } ?>
	
</style>