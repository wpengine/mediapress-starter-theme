<?php

declare( strict_types = 1 );

namespace MediaPress\Starter_Theme;

/**
 * Initializes the theme.
 */
class Init {

	/**
	 * Add hooks for enqueuing styles in both front-end and editor.
	 */
	public function __construct() {
		add_action( 'init', [ $this,'enqueue_block_styles' ] );
	}

	/**
	 * Enqueue theme and block styles.
	 *
	 * @return void
	 */
	public function enqueue_block_styles() {


		wp_enqueue_block_style(
			'core/post-author',
			[
				'handle' => 'mediapress-starter-theme-core-post-author',
				'src'    => get_theme_file_uri( '/assets/css/blocks/core-post-author.css' ),
			]
		);

		wp_enqueue_block_style(
			'mediapress-live/feed',
			[
				'handle' => 'mediapress-starter-theme-live-feed',
				'src'    => get_theme_file_uri( '/assets/css/blocks/mediapress-live-feed.css' ),
			]
		);

		wp_enqueue_block_style(
			'mediapress-live/timeline',
			[
				'handle' => 'mediapress-starter-theme-live-timeline',
				'src'    => get_theme_file_uri( '/assets/css/blocks/mediapress-live-timeline.css' ),
			]
		);

		wp_enqueue_block_style(
			'mediapress/listicle-range-pagination',
			[
				'handle' => 'mediapress-starter-theme-listicle-range-pagination',
				'src'    => get_theme_file_uri( '/assets/css/blocks/mediapress-listicle-range-pagination.css' ),
			]
		);

	}
}
