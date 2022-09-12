<?php
/**
 * header functions.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @use src/views/head-analytics.php
 */

/**
 * Get template part of header layout.
 * @return string html
 */
if ( !function_exists( 'woffee_header_layout' ) ) {
	function woffee_header_layout() {
		$layout_type = get_theme_mod( 'header_layout_type', 'header-default' );

		if ( !is_page_template( 'templates/lp.php' ) ) {
			if ( $layout_type == 'header-default') {
				get_template_part( 'template-parts/header-default' );
			}
			if ( $layout_type == 'header-center' ) {
				get_template_part( 'template-parts/header-center' );
			}
			if ( $layout_type == 'header-line' ) {
				get_template_part( 'template-parts/header-line' );
			}
		}
	}
}