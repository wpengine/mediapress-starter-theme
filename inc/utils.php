<?php

declare( strict_types = 1 );

namespace MediaPress\Starter_Theme;

/**
 * Get the WP Navigation menu ID by its title.
 *
 * The site editor doesn't allow us to control the menu slug, so we have to
 * look it up by title.
 *
 * @param string $menu_title The title of the menu. Default is 'Primary'.
 *
 * @return int|null The menu ID if found, null otherwise.
 */
function get_nav_id( $menu_title = 'Primary' ) {
	$menu = get_posts(
		[
			'post_type'              => 'wp_navigation',
			'title'                  => $menu_title,
			'post_status'            => 'publish',
			'posts_per_page'         => 1,
			'no_found_rows'          => true,
			'ignore_sticky_posts'    => true,
			'update_post_term_cache' => false,
			'update_post_meta_cache' => false,
			'orderby'                => 'post_date ID',
			'order'                  => 'ASC',
			'fields'                 => 'ids',
		]
	);

	return ! empty( $menu ) ? $menu[0] : null;
}
