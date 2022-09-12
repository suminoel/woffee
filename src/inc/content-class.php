<?php
/**
 * Add post slug class to body.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !function_exists('woffee_add_slug_body_class') ) {
	function woffee_add_slug_body_class( $classes )
	{
		global $post;

		if ( is_singular() && isset( $post ) ) {
			$slug = $post->post_name;

			// Do not generate classes when slug is in Japanese.
			if( !preg_match( "/[ぁ-ん]+|[ァ-ヴー]+|[一-龠]/u", urldecode($slug) ) ) {
				$classes[] = $post->post_type . '-' . $slug;
			}
		}

		return $classes;
	}
	add_filter( 'body_class', 'woffee_add_slug_body_class' );
}