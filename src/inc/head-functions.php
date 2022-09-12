<?php
/**
 * head functions.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @use header.php
 */

/**
 * Preconnect or dns-prefetch URL list.
 * @return array
 */
if ( !function_exists( 'woffee_get_pre_acquisition_list' ) ) {
	function woffee_get_pre_acquisition_list(){
		$list = [];
		$list[] = 'www.googletagmanager.com';
		$list[] = 'www.google-analytics.com';
		$list[] = 'ajax.googleapis.com';
		$list[] = 'cdnjs.cloudflare.com';
		$list[] = 'pagead2.googlesyndication.com';
		$list[] = 'googleads.g.doubleclick.net';
		$list[] = 'tpc.googlesyndication.com';
		$list[] = 'ad.doubleclick.net';
		$list[] = 'www.gstatic.com';
		$list[] = 'cse.google.com';
		$list[] = 'fonts.gstatic.com';
		$list[] = 'fonts.googleapis.com';
		$list[] = 'cms.quantserve.com';
		$list[] = 'secure.gravatar.com';
		$list[] = 'cdn.syndication.twimg.com';
		$list[] = 'cdn.jsdelivr.net';
		$list[] = 'images-fe.ssl-images-amazon.com';
		$list[] = 'completion.amazon.com';
		$list[] = 'm.media-amazon.com';
		$list[] = 'i.moshimo.com';
		$list[] = 'aml.valuecommerce.com';
		$list[] = 'dalc.valuecommerce.com';
		$list[] = 'dalb.valuecommerce.com';
		return $list;
	}
}

/**
 * Output preconnect or dns-prefetch HTML.
 * @return string
 */
if( !function_exists('woffee_output_each_for_preconnect_link_tag') ) {
	function woffee_output_each_for_preconnect_link_tag()
	{
		$domains = woffee_get_pre_acquisition_list();
		if( $domains ) return;

		foreach( $domains as $domain ) {
			$output .= '<link rel="preconnect dns-prefetch" href="//' . $domain . '">' . PHP_EOL;
		}

		return $output;
	}
}

/**
 * meta robots.
 *
 * @param array $robtos
 * @return array
 */
if ( is_active_meta_robots() ) {
	add_filter( 'wp_robots', function( $robots ) {
		if ( !is_active_meta_robots() ) return $robots;

		$robots_arr = explode(',', $meta['robots']);

		if ( is_array( $robots_arr ) && ( isset( $robots_arr ) && $robots_arr ) ) {

			// If on checked `Search engine visibility`, output only `noindex, nofllow`.
			if ( !get_option('blog_public') ) {
				$robots['noindex']  = true;
				$robots['nofollow'] = true;
			} else {
				// foreach ($robots_arr as $content) {
				// 	$robots[$content] = true;
				// }
			}
		}

		return $robots;
	} );
}
