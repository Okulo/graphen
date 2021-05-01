<?php global $swiftbiz_lite_shortname; ?>
<?php $front_bg_image = swiftbiz_get_option($swiftbiz_lite_shortname.'_home_bg_img'); ?>
<?php if($front_bg_image != '') { ?>
<div class="skt-header-image">
	<!-- header image -->
		<div class="swiftbiz-front-bgimg">
			<img alt="<?php _e('Background Image','swiftbiz-lite'); ?>" class="ad-slider-image" width="1585"  src="<?php if($front_bg_image) { echo esc_url($front_bg_image); } ?>" />
		</div>
	<!-- end  header image  -->
</div>
<?php } else { ?>
<div class="skt-header-image">
	<!-- header image -->
		<div class="swiftbiz-front-bgimg">
			<img alt="<?php _e('Background Image','swiftbiz-lite'); ?>" class="ad-slider-image" width="1585"  src="<?php echo get_template_directory_uri().'/images/front-bg-img.jpg'; ?>" />
		</div>
	<!-- end  header image  -->
</div>
<?php } ?>