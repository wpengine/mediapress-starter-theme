<?php

declare( strict_types = 1 );

namespace MediaPress\Starter_Theme;

/**
 * Initializes the theme.
 */
class Init {

	/**
	 * Init constructor.
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this,'enqueue_styles' ] );
		add_action( 'enqueue_block_editor_assets', [ $this,'enqueue_styles' ] );
	}

	/**
	 * Enqueue theme styles.
	 *
	 * @return void
	 */
	public function enqueue_styles() {
		$shared_asset_file = include get_parent_theme_file_path( '/build/shared.asset.php' );

		wp_enqueue_style(
			'mediapress-starter-theme',
			get_parent_theme_file_uri( '/build/shared.css' ),
			[],
			$shared_asset_file['version'],
		);

		add_editor_style( get_parent_theme_file_uri( '/build/shared.css' ) );
	}
}
