<?php
/**
 * Title: Header
 * Slug: mediapress-starter-theme/header
 * Description: Header with site title and navigation.
 */

namespace MediaPress\Starter_Theme;

$primary_nav_id = get_nav_id();
$mobile_nav_id  = get_nav_id( 'Mobile' ) ?? $primary_nav_id;

?>

<!-- wp:group {"align":"wide","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background">
	<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"#e9e9e9","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide"
		style="border-bottom-color:#e9e9e9;border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">

		<!-- wp:navigation {"ref":<?php echo esc_attr( $mobile_nav_id ); ?>,"overlayMenu":"always","overlayBackgroundColor":"contrast","overlayTextColor":"base"} /-->

		<!-- wp:site-logo {"width":60} /-->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"5px","color":"#e9e9e9"}},"backgroundColor":"base","textColor":"contrast","fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.2rem","bottom":"1.2rem"},"margin":{"top":"0px","bottom":"0px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|base-2"},"bottom":{"color":"#e9e9e9","width":"1px"},"left":{"color":"var:preset|color|base-2"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group"
		style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--base-2);border-bottom-color:#e9e9e9;border-bottom-width:1px;border-left-color:var(--wp--preset--color--base-2);margin-top:0px;margin-bottom:0px;padding-top:1.2rem;padding-bottom:1.2rem">

		<!-- wp:navigation {"ref":<?php echo esc_attr( $primary_nav_id ); ?>,"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textTransform":"uppercase","fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->

		</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
