<?php

/**
 * Title: Recommendations | 2 Cols | Side by Side
 * Slug: mediapress-starter-theme/recommendations-2-cols-side-by-side
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":45,"query":{"postType":"post","offset":0,"exclude":[],"inherit":false,"perPage":2,"sticky":"exclude"}} -->
    <div class="wp-block-query"><!-- wp:heading -->
        <h2 class="wp-block-heading">More from Newsroom</h2>
        <!-- /wp:heading -->

        <!-- wp:separator {"className":"is-style-default","backgroundColor":"base-2"} -->
        <hr class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background is-style-default" />
        <!-- /wp:separator -->

        <!-- wp:post-template -->
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:post-featured-image /--></div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:post-terms {"term":"category"} /-->

                <!-- wp:post-excerpt /-->
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