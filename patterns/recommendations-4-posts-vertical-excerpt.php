<?php

/**
 * Title: Recommendations | 4 Posts | Vertical | With Excerpt
 * Slug: mediapress-starter-theme/recommendations-4-posts-vertical-excerpt
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":45,"query":{"postType":"post","offset":0,"exclude":[],"inherit":false,"perPage":4,"sticky":"exclude"},"namespace":"wpengine-smart-search/recommendations","layout":{"type":"default"},"postLimit":4,"recommendationsType":"related"} -->
    <div class="wp-block-query"><!-- wp:heading {"textAlign":"left","level":4} -->
        <h4 class="wp-block-heading has-text-align-left">Read More</h4>
        <!-- /wp:heading -->

        <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-default","backgroundColor":"base-2"} -->
        <hr class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)" />
        <!-- /wp:separator -->

        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
        <!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"10px"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"padding":{"top":"0em","bottom":"0em","left":"0em","right":"0em"},"margin":{"bottom":"0.3rem"}},"typography":{"fontSize":"0.8rem","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"accent"} /-->

                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"0.9rem","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"0"},"margin":{"bottom":"0.5rem"}}},"textColor":"contrast","fontFamily":"system-sans-serif"} /-->

                <!-- wp:post-excerpt {"excerptLength":20,"style":{"typography":{"fontSize":"0.9rem"}}} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->

        <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-default","backgroundColor":"base-2"} -->
        <hr class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)" />
        <!-- /wp:separator -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->
