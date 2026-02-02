<?php
/**
 * Title: Featured Post Header
 * Slug: mediapress-starter-theme/header-featured-post
 * Description: Header for featured posts with post featured image background and title overlaid.
 */

namespace MediaPress\Starter_Theme;

$primary_nav_id = get_nav_id();
$mobile_nav_id  = get_nav_id( 'Mobile' ) ?? $primary_nav_id;
?>

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":50,"minHeightUnit":"px","customGradient":"linear-gradient(0deg,rgb(0,0,0) 0%,rgba(0,0,0,0.53) 50%,rgba(0,0,0,0.63) 78%,rgb(0,0,0) 100%)","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-cover alignfull"
		style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:50px">
		<span aria-hidden="true"
			class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient"
			style="background:linear-gradient(0deg,rgb(0,0,0) 0%,rgba(0,0,0,0.53) 50%,rgba(0,0,0,0.63) 78%,rgb(0,0,0) 100%)"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"#e8e8e826","style":"solid","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
			<div class="wp-block-group alignwide"
				style="border-bottom-color:#e8e8e826;border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">

				<?php if ( ! empty( $mobile_nav_id ) ) : ?>
					<!-- wp:navigation {"ref":<?php echo esc_attr( $mobile_nav_id ); ?>,"overlayMenu":"always","overlayBackgroundColor":"contrast","overlayTextColor":"base"} /-->
				<?php endif; ?>

				<!-- wp:site-logo {"width":60,"style":{"color":{"duotone":["#ffffff","#ffffff"]}}} /-->

				<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-contrast-color has-text-color has-link-color">

					<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"5px","color":"#e9e9e9"},"color":{"background":"#ffffff00"}},"textColor":"base","fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":"420px"} -->
			<div style="height:420px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left","wideSize":"800px"}} -->
			<div class="wp-block-group"
				style="padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"0.3em","bottom":"0.3em","left":"0.9em","right":"0.9em"}},"typography":{"fontSize":"0.7rem"},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"accent","textColor":"base"} /-->

					<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"0.7rem"}},"textColor":"base-2"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:mediapress-live/flag /-->

				<!-- wp:post-title {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-large"} /-->

				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:post-excerpt {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
				<div class="wp-block-group has-base-color has-text-color has-link-color">
					<!-- wp:avatar {"size":40,"isLink":true,"style":{"border":{"color":"#ffffff"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-bottom:0">
						<!-- wp:post-author {"showAvatar":false,"showBio":false,"byline":""} /-->

						<!-- wp:post-author-biography {"style":{"typography":{"fontSize":"0.8rem"}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
