<?php
/**
 * Title: Posts | 4 Cols
 * Slug: mediapress-starter-theme/posts-4-cols
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="wp-block-heading has-text-align-left">Trending</h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":15,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="min-height:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"isUserOverlayColor":true,"focalPoint":{"x":0.49,"y":0.44},"minHeight":229,"minHeightUnit":"px","customGradient":"linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0) 100%)","contentPosition":"bottom center","style":{"border":{"radius":"15px"},"spacing":{"blockGap":"4px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-radius:15px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);min-height:229px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"0.3em","bottom":"0.3em","left":"0.9em","right":"0.9em"}},"typography":{"fontSize":"0.7rem"},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"accent","textColor":"base"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"0.9rem","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"0"}}},"textColor":"base-2","fontFamily":"system-sans-serif"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
