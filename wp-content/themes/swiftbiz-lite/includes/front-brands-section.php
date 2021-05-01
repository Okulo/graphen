<!-- FULL-CLIENT-BOX -->
<?php global $swiftbiz_lite_shortname;

$_home_brand_sec = swiftbiz_get_option($swiftbiz_lite_shortname."_home_brand_sec");

$_brand1_img  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand1_img");
$_brand1_alt  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand1_alt");
$_brand1_url  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand1_url");

$_brand2_img  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand2_img");
$_brand2_alt  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand2_alt");
$_brand2_url  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand2_url");

$_brand3_img  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand3_img");
$_brand3_alt  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand3_alt");
$_brand3_url  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand3_url");

$_brand4_img  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand4_img");
$_brand4_alt  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand4_alt");
$_brand4_url  = swiftbiz_get_option($swiftbiz_lite_shortname."_brand4_url");

if( $_home_brand_sec != 'off' ) {
?>

<div id="full-client-box">
	<div class="container">
		<div class="row-fluid">
			<div id="our-brands">
				<ul id="brand-logos">
					
					<?php if( $_brand1_img != '' ) { ?>
					<li class="item span3">
						<a href="<?php if( isset($_brand1_url) ){ echo esc_url($_brand1_url); } ?>" title="<?php if( isset($_brand1_alt) ){ echo esc_html($_brand1_alt); } ?>"><img alt="<?php if( isset($_brand1_alt) ){ echo esc_html($_brand1_alt); } ?>" src="<?php if( isset($_brand1_img) ){ echo esc_url($_brand1_img); } ?>" /></a>
					</li>
					<?php } else { ?>
						<li class="item span3"><a href="#" title="<?php _e('Brand','swiftbiz-lite'); ?>"><img alt="<?php _e('Brand Logo','swiftbiz-lite'); ?>" src="<?php echo get_template_directory_uri() .'/images/brand-logo.png'; ?>" /></a></li>
					<?php } ?>
					
					<?php if( $_brand2_img != '' ) { ?>
					<li class="item span2">
						<a href="<?php if( isset($_brand2_url) ){ echo esc_url($_brand2_url); } ?>" title="<?php if( isset($_brand2_alt) ){ echo esc_html($_brand2_alt); } ?>"><img alt="<?php if( isset($_brand2_alt) ){ echo esc_html($_brand2_alt); } ?>" src="<?php if( isset($_brand2_img) ){ echo esc_url($_brand2_img); } ?>" /></a>
					</li>
					<?php } else { ?>
						<li class="item span3"><a href="#" title="<?php _e('Brand','swiftbiz-lite'); ?>"><img alt="<?php _e('Brand Logo','swiftbiz-lite'); ?>" src="<?php echo get_template_directory_uri() .'/images/brand-logo.png'; ?>" /></a></li>
					<?php } ?>
					
					<?php if( $_brand3_img != '' ) { ?>
					<li class="item span3">
						<a href="<?php if( isset($_brand3_url) ){ echo esc_url($_brand3_url); } ?>" title="<?php if( isset($_brand3_alt) ){ echo esc_html($_brand3_alt); } ?>"><img alt="<?php if( isset($_brand3_alt) ){ echo esc_html($_brand3_alt); } ?>" src="<?php if( isset($_brand3_img) ){ echo esc_url($_brand3_img); } ?>" /></a>
					</li>
					<?php } else { ?>
						<li class="item span3"><a href="#" title="<?php _e('Brand','swiftbiz-lite'); ?>"><img alt="<?php _e('Brand Logo','swiftbiz-lite'); ?>" src="<?php echo get_template_directory_uri() .'/images/brand-logo.png'; ?>" /></a></li>
					<?php } ?>
					
					<?php if( $_brand4_img != '' ) { ?>
					<li class="item span3">
						<a href="<?php if( isset($_brand4_url) ){ echo esc_url($_brand4_url); } ?>" title="<?php if( isset($_brand4_alt) ){ echo esc_html($_brand4_alt); } ?>"><img alt="<?php if( isset($_brand4_alt) ){ echo esc_html($_brand4_alt); } ?>" src="<?php if( isset($_brand4_img) ){ echo esc_url($_brand4_img); } ?>" /></a>
					</li>
					<?php } else { ?>
						<li class="item span3"><a href="#" title="<?php _e('Brand','swiftbiz-lite'); ?>"><img alt="<?php _e('Brand Logo','swiftbiz-lite'); ?>" src="<?php echo get_template_directory_uri() .'/images/brand-logo.png'; ?>" /></a></li>
					<?php } ?>
					
				</ul>
			</div><!-- /our-brands -->
		</div>
	</div>
</div>
<?php } ?>