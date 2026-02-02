<?php

declare( strict_types = 1 );

namespace MediaPress\Starter_Theme;

require_once __DIR__ . '/inc/utils.php';
require_once __DIR__ . '/inc/class-init.php';
require_once __DIR__ . '/inc/setup.php';

add_action( 'init', __NAMESPACE__ . '\\setup', 0 );
