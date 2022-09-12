<?php
/**
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

if ( !defined( 'ABSPATH' ) ) exit;

/* Require common files.
* ---------------------------------------- */
require_once get_theme_file_path('src/utils/defines.php');
require_once get_theme_file_path('src/utils/imports.php');


if ( !function_exists( 'woffee_brand_logo' ) ) {
	function woffee_brand_logo( $is_header = true )
	{
		$site_title = get_bloginfo( 'name' );
		$logo_tag   = ( $is_header && ( is_front_page() || is_home() ) ) ? 'h1' : 'div';
		$logo_inner = ( has_custom_logo() ) ? get_custom_logo() : '<a href="' . esc_url( get_home_url() ) . '">' . $site_title . '</a>';
		$logo_class = ( $is_header ) ? 'logo-header' : 'logo-footer';

		$html = '<' . $logo_tag . ' class="logo ' . $logo_class . '" rel="home">' . $logo_inner . '</' . $logo_tag . '>';

		echo $html;
	}
}

if ( !function_exists('woffee_excerpt_more') ) {
	function woffee_excerpt_more($more) {
		return '…';
	}
	add_filter('excerpt_more', 'woffee_excerpt_more');
}
