<?php

declare( strict_types = 1 );

namespace MediaPress\Starter_Theme;

/**
 * Runs the plugin setup sequence.
 *
 * @return void
 */
function setup(): void {
	new Init();
}
