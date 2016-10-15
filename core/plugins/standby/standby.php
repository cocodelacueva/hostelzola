<?php
/*
Plugin Name: Stand By
Description: Página para mostrar mientras se está en mantenimiento del sitio o todavía no está creado.
Version:     1.0
Author:      LaCueva.tv
Author URI:  http://Lacueva.tv
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: standby-lacueva
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin main file.
 */
define( 'STANDBY_PLUGIN_MAIN_FILE', __FILE__ );

add_action( 'plugins_loaded', 'standby_plugin_load');

//cargo el archivo principal
function standby_plugin_load () {
	if ( apply_filters( 'standby_plugin_start', true) ) {
		require_once plugin_dir_path( __FILE__ ) . 'standby_start.php';
	}
}
