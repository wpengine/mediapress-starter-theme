<?php

/**
 * Title: Recommendations | 2 Cols | Side by Side
 * Slug: mediapress-starter-theme/recommendations-2-cols-side-by-side
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":45,"query":{"postType":"post","offset":0,"exclude":[],"inherit":false,"perPage":2,"sticky":"exclude"},"namespace":"wpengine-smart-search/recommendations","layout":{"type":"default"},"postLimit":2,"recommendationsType":"related"} -->
    <div class="wp-block-query"><!-- wp:heading {"textAlign":"left","level":4} -->
        <h4 class="wp-block-heading has-text-align-left">More from Newsroom</h4>
        <!-- /wp:heading -->

        <!-- wp:separator {"className":"is-style-default","backgroundColor":"base-2"} -->
        <hr class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background is-style-default" />
        <!-- /wp:separator -->

        <!-- wp:post-template {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":""} -->
            <div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"10px"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"","layout":{"type":"default"}} -->
            <div class="wp-block-column"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"spacing":{"padding":{"top":"0em","bottom":"0em","left":"0em","right":"0em"}},"typography":{"fontSize":"0.7rem"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"accent"} /-->

                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"0.9rem","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"0"}}},"textColor":"contrast","fontFamily":"system-sans-serif"} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->

        <!-- wp:separator {"className":"is-style-default","backgroundColor":"base-2"} -->
        <hr class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background is-style-default" />
        <!-- /wp:separator -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->