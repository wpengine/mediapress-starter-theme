<?php
/**
 * MediaPress Starter Theme functions and definitions
 */

declare( strict_types = 1 );

namespace MediaPress\Starter_Theme;

require_once rtrim( __DIR__ ) . '/vendor/autoload_packages.php';

/**
 * Runs the theme setup sequence.
 */
add_action( 'init', __NAMESPACE__ . '\\setup', 0 );
