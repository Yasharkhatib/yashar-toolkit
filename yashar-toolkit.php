<?php
/**
 * Plugin Name: Yashar Toolkit
 * Plugin URI: https://example.com
 * Description: Lightweight toolkit for custom WordPress features.
 * Version: 1.0.0
 * Author: Yashar Khatibi
 * License: GPL2+
 * Text Domain: yashar-toolkit
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin constants
 */
define( 'YTK_VERSION', '1.0.0' );

define( 'YTK_FILE', __FILE__ );

define( 'YTK_PATH', plugin_dir_path( __FILE__ ) );

define( 'YTK_URL', plugin_dir_url( __FILE__ ) );

require_once YTK_PATH . 'includes/class-loader.php';

$loader = new YTK_Loader();
$loader->run();