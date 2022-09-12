<?php
/**
 * Admin enqueue scripts.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

/**
 * Load styles and scripts to admin panels.
 */
if ( !function_exists('woffee_admin_enqueue_scripts') ) {
	function woffee_admin_enqueue_scripts()
	{
		wp_enqueue_style( 'woffee_admin_style', get_theme_file_uri('assets/css/admin-menu.css') );
		wp_enqueue_style( 'alpha_color_picker', get_theme_file_uri('lib/alpha-color-picker/alpha-color-picker.css'), [ 'wp-color-picker' ] );
		wp_enqueue_script( 'alpha_color_picker', get_theme_file_uri('lib/alpha-color-picker/alpha-color-picker.js'), [ 'jquery', 'wp-color-picker' ], '', true );
		wp_enqueue_script( 'theme-settings', get_theme_file_uri('assets/js/admin/theme-settings.js'), [ 'wp-color-picker' ], false, true  );
	}
	add_action( 'admin_enqueue_scripts', 'woffee_admin_enqueue_scripts', 1 );
}

/**
 * Enqueue scripts of admin files.
 * @link https://www.bootstrapcdn.com/fontawesome/
 * @link https://fontawesome.com/
 */
if ( !function_exists( 'woffee_enqueue_fontaswsome' ) ) {
	function woffee_enqueue_fontaswsome()
	{
		wp_enqueue_script( 'font-awesome-6', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css' );
	}
	add_action('admin_enqueue_scripts', 'woffee_enqueue_fontaswsome', 2 );
}
