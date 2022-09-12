<?php
/**
 * Assets functions
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

/**
 * Enqueue scripts of bootstrap cdn.
 * @link https://www.bootstrapcdn.com/
 * @link https://getbootstrap.com/
 */
if ( !function_exists( 'woffee_enqueue_bootstrap' ) ) {
	function woffee_enqueue_bootstrap() {
		wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' );
	}
	add_action( 'wp_enqueue_scripts', 'woffee_enqueue_bootstrap', 1 );
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

/**
 * Enqueue scripts of theme style.
 */
if ( !function_exists( 'woffee_enqueue_scripts' ) ) {
	function woffee_enqueue_scripts() {
		wp_enqueue_style( 'woffee-style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'woffee_enqueue_scripts', 3 );
}

/**
 * Enqueue scripts of admin files.
 * @link https://www.bootstrapcdn.com/fontawesome/
 * @link https://fontawesome.com/
 */
if ( !function_exists( 'woffee_enqueue_admin_scripts' ) ) {
	function woffee_enqueue_admin_scripts()
	{
		wp_enqueue_script( 'font-awesome-6', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css' );
	}
	add_action('admin_enqueue_scripts', 'woffee_enqueue_admin_scripts');
}

/**
 * Remove default version for assets.
 */
if ( !function_exists( 'woffee_remove_wp_assets_version' ) ) {
	function woffee_remove_wp_assets_version( $src )
	{
		if ( strpos( $src, 'ver=' ) ) $src = remove_query_arg( 'ver', $src );

		return $src;
	}
	add_filter( 'style_loader_src', 'woffee_remove_wp_assets_version', 9999 );
	add_filter( 'script_loader_src', 'woffee_remove_wp_assets_version', 9999 );
}

/**
 * Add timestamp version for assets.
 */
if ( !function_exists( 'woffee_add_timestamp_version' ) ) {
	function woffee_add_timestamp_version( $src )
	{
		if ( is_admin() ) return $src;

		if ( strpos( $src, 'wp-content/themes/' ) ) {
			$src_path = str_replace( home_url('/'), ABSPATH, $src );
			$mtime = filemtime( $src_path );
			$src = $src . '?ver=' . $mtime;
		}

		return $src;
	}
	add_filter( 'style_loader_src', 'woffee_add_timestamp_version', 9999 );
	add_filter( 'script_loader_src', 'woffee_add_timestamp_version', 9999 );
}

/**
 * Remove charset from scripts.
 */
if ( !function_exists( 'woffee_remove_script_charset' ) ) {
	function woffee_remove_script_charset( $tag )
	{
		return preg_replace( "/charset=['\"].*(utf-8|UTF-8).*?['\"]/", '', $tag );
	}
	add_filter('script_loader_tag','woffee_remove_script_charset');
}

/**
 * Remove type from css and js.
 */
if ( !function_exists( 'woffee_remove_type_attr' ) ) {
	function woffee_remove_type_attr( $tag, $handle )
	{
		return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
	}
	add_filter( 'style_loader_tag', 'woffee_remove_type_attr', 10, 2 );
	add_filter( 'script_loader_tag', 'woffee_remove_type_attr', 10, 2 );
}