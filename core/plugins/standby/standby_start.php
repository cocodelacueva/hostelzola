<?php 
/**
 * Load plugin textdomain.
 *
 * @since 1.0
 */
if ( ! function_exists( 'standby_load_textdomain' ) ) :
add_action( 'plugins_loaded', 'standby_load_textdomain' );

function standby_load_textdomain() {
	load_plugin_textdomain( 'standby-lacueva', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
endif;



/**
 * Load files inside `admin` folder.
 *
 * @since 1.0
 */
if ( ! function_exists( 'standby_plugin_start_admin' ) && is_admin() ) :
add_action( 'standby_plugin_start', 'standby_plugin_start_admin' );

function standby_plugin_start_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings.php';
}
endif;

/**
 * Load files inside `public` folder.
 *
 * @since 1.0
 */
if ( ! function_exists( 'standby_plugin_start_public' ) && ! is_admin() ) :
add_action( 'standby_plugin_start', 'standby_plugin_start_public' );

function standby_plugin_start_public() {
	require_once plugin_dir_path( __FILE__ ) . 'public/functions.php';
		//require_once plugin_dir_path( __FILE__ ) . 'public/template.php';
		//exit;
}
endif;

/**
 * @hook standby_plugin_start
 *
 * Initialize plugin functionality.
 *
 * @since 1.0
 *
 * Hooked here:
 * @see standby_plugin_start_includes()
 * @see standby_plugin_start_admin()
 * @see standby_plugin_start_public()
 */
do_action( 'standby_plugin_start' );