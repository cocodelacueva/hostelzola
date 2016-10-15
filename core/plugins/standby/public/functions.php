<?php
/**
 * 
 *
 * @since 1.0
 */

if ( ! function_exists( 'standby_template_setup' ) ) :

	function standby_template_setup() {
		global $wp_styles;
		
		wp_register_style('style-front-end', plugin_dir_url( __FILE__ ) .'assets/css/style.css');

		
		$wp_styles->do_items('style-front-end');
	
	}


endif;

add_action( 'load_custom_scripts', 'standby_template_setup' );


//agrega mi pagina que imprime html
if ( ! function_exists( 'standby_page_template' ) ) :
add_filter( 'template_include', 'standby_page_template', 99 );
/**
 * Obtain template path for portfolio page.
 *
 * @param  string $template
 *
 * @return string
 */
function standby_page_template( $template ) {
	if ( ! is_user_logged_in() ) {
		$template = standby_get_template( 'template.php', false );
	}

	return $template;
}

endif;

if ( ! function_exists( 'standby_get_template' ) ) :
/**
 * Obtain the full path of a template and load it if required.
 *
 * @param string $template
 * @param bool   $load
 *
 * @return string
 */
function standby_get_template( $template, $load = true ) {
	return standby_locate_template( $template, $load, false );
}
endif;

if ( ! function_exists( 'standby_locate_template' ) ) :
/**
 * Search for a template and load it if required.
 *
 * @see   locate_template()
 *
 * @param mixed|string|array $template_names
 * @param bool               $load
 * @param bool               $require_once
 *
 * @return string
 */
function standby_locate_template( $template_names, $load = false, $require_once = true ) {
	$located = '';

	foreach ( (array) $template_names as $template_name ) {
		if ( ! $template_name ) {
			continue;
		}

		if ( file_exists( STYLESHEETPATH . '/public' . $template_name ) ) {
			$located = STYLESHEETPATH . '/' . $template_name;
			break;
		} elseif ( file_exists( TEMPLATEPATH . '/public' . $template_name ) ) {
			$located = TEMPLATEPATH . '/' . $template_name;
			break;
		} elseif ( file_exists( plugin_dir_path( STANDBY_PLUGIN_MAIN_FILE ) . 'public/' . $template_name ) ) {
			$located = plugin_dir_path( STANDBY_PLUGIN_MAIN_FILE ) . 'public/' . $template_name;
			break;
		}
	}

	if ( $load && $located ) {
		load_template( $located, $require_once );
	}

	return $located;
}
endif;