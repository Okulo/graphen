<?php 
/**
 * The template for displaying Error 404 page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<div class="main-wrapper-item">
<?php global $swiftbiz_lite_shortname; ?>
	<div class="page-content">
	<div class="container" id="error-404">
		<div class="row-fluid">
			<div id="content" class="span12">
				<div class="post">
					<div class="skepost ske-404-page">
						<div class="error-txt"><?php _e( 'Oops !!!', 'swiftbiz-lite' ); ?></div>
						<div class="error-txt-first">
							<img alt="<?php _e("404 Image", "swiftbiz-lite"); ?>" src="<?php echo get_template_directory_uri().'/images/imgo.jpg'; ?>" />
						</div>
						<p><?php if( swiftbiz_get_option($swiftbiz_lite_shortname.'_four_zero_four_txt') != '' ) { echo esc_attr(swiftbiz_get_option($swiftbiz_lite_shortname.'_four_zero_four_txt')); } else { _e("We're sorry, but the page you were looking for doesn't exist. You can try to search bellow", "swiftbiz-lite"); } ?></p>
						<?php get_search_form(); ?>
					</div>
					<!-- skepost --> 
				</div>
				<!-- post -->
			</div>
			<!-- content --> 
		</div>
	</div>
	</div>
</div>	
<?php get_footer(); ?>