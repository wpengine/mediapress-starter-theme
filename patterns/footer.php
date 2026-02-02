<?php
/**
 * Title: Footer
 * Slug: mediapress-starter-theme/footer
 * Description: Footer with site logo, navigation, and social links.
 */

namespace MediaPress\Starter_Theme;

$primary_nav_id = get_nav_id();
?>

<!-- wp:group {"backgroundColor":"contrast","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group has-contrast-background-color has-background">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|40","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide has-base-color has-text-color has-link-color"
		style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
		<!-- wp:site-logo {"width":52,"style":{"color":{"duotone":["#ffffff","#ffffff"]}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"top"}} -->
		<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">

			<!-- wp:navigation {"ref":<?php echo esc_attr( $primary_nav_id ); ?>,"overlayMenu":"never","style":{"spacing":{"blockGap":"8px"},"typography":{"fontSize":"0.8rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap"}} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only"} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->

						<!-- wp:social-link {"url":"#","service":"x"} /-->

						<!-- wp:social-link {"url":"#","service":"youtube"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->

				<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"24px","selfStretch":"fixed"}}} -->
				<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
