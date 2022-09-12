<?php
/**
 * Conditional branch functions.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

/**
 * meta tags
 * @return bool
 */
if( !function_exists('is_active_meta_tags') ) {
	function is_active_meta_tags()
	{
		return ( get_option('woffee_is_active_meta_tags') ) ? true : false;
	}
}

/**
 * meta robots
 * @return bool
 */
if( !function_exists('is_active_meta_robots') ) {
	function is_active_meta_robots()
	{
		return ( get_option('woffee_is_active_meta_robots') ) ? true : false;
	}
}

/**
 * Google Analytics
 * @return bool
 */
if( !function_exists('is_active_google_analytics') ) {
	function is_active_google_analytics()
	{
		return ( get_option('woffee_is_active_google_analytics') ) ? true : false;
	}
}

/**
 * Google TagManager
 * @return bool
 */
if( !function_exists('is_active_google_tagmanager') ) {
	function is_active_google_tagmanager()
	{
		return ( get_option('woffee_is_active_google_tagmanager') ) ? true : false;
	}
}

/**
 * Google SearchConsole
 * @return bool
 */
if( !function_exists('is_active_google_searchconsole') ) {
	function is_active_google_searchconsole()
	{
		return ( get_option('woffee_is_active_google_searchconsole') ) ? true : false;
	}
}

/**
 * Other analytics or adsense code.
 * @return bool
 */
if( !function_exists('is_active_other_analytics') ) {
	function is_active_other_analytics()
	{
		return ( get_option('woffee_is_active_other_analytics') ) ? true : false;
	}
}

/**
 * Social share button.
 * @return bool
 */
if( !function_exists('is_active_sns_share') ) {
	function is_active_sns_share()
	{
		return ( get_option('woffee_is_active_sns_share') ) ? true : false;
	}
}

/**
 * Social follow button.
 * @return bool
 */
if( !function_exists('is_active_sns_follow') ) {
	function is_active_sns_follow()
	{
		return ( get_option('woffee_is_active_sns_follow') ) ? true : false;
	}
}

/**
 * OGP tags
 * @return bool
 */
if( !function_exists('is_active_ogp_tags') ) {
	function is_active_ogp_tags()
	{
		return ( get_option('woffee_is_active_ogp_tags') ) ? true : false;
	}
}

/**
 * Table of contents
 * @return bool
 */
if( !function_exists('is_active_wf_toc') ) {
	function is_active_wf_toc()
	{
		return ( get_option('woffee_is_active_wf_toc') ) ? true : false;
	}
}

/**
 * Table scroll
 * @return bool
 */
if( !function_exists('is_active_table_scroll') ) {
	function is_active_table_scroll()
	{
		return ( get_option('woffee_is_active_table_scroll') ) ? true : false;
	}
}

/**
 * BlogCard
 * @return bool
 */
if( !function_exists('is_active_wf_blogcard') ) {
	function is_active_wf_blogcard()
	{
		return ( get_option('woffee_is_active_wf_blogcard') ) ? true : false;
	}
}

/**
 * PageTop
 * @return bool
 */
if( !function_exists('is_active_wf_pagetop') ) {
	function is_active_wf_pagetop()
	{
		return ( get_option('woffee_is_active_wf_pagetop') ) ? true : false;
	}
}

/**
 * Affiliate API
 * @return bool
 */
if( !function_exists('is_active_affiliate') ) {
	function is_active_affiliate()
	{
		return ( get_option('woffee_is_active_affiliate') ) ? true : false;
	}
}

/**
 * Related posts
 * @return bool
 */
if( !function_exists('is_active_wf_related') ) {
	function is_active_wf_related()
	{
		return ( get_option('woffee_is_active_wf_related') ) ? true : false;
	}
}

/**
 * Recommend posts
 * @return bool
 */
if( !function_exists('is_active_wf_recommend') ) {
	function is_active_wf_recommend()
	{
		return ( get_option('woffee_is_active_wf_recommend') ) ? true : false;
	}
}

/**
 * Under post CTA
 * @return bool
 */
if( !function_exists('is_active_wf_cta') ) {
	function is_active_wf_cta()
	{
		return ( get_option('woffee_is_active_wf_cta') ) ? true : false;
	}
}

/**
 * Fixed banner
 * @return bool
 */
if( !function_exists('is_active_wf_fixed_banner') ) {
	function is_active_wf_fixed_banner()
	{
		return ( get_option('woffee_is_active_wf_fixed_banner') ) ? true : false;
	}
}

/**
 * Banner Manager
 * @return bool
 */
if( !function_exists('is_active_wf_banner_manager') ) {
	function is_active_wf_banner_manager()
	{
		return ( get_option('woffee_is_active_wf_banner_manager') ) ? true : false;
	}
}

/**
 * Advanced custom fields
 * @return bool
 */
if( !function_exists('is_active_acf') ) {
	function is_active_acf()
	{
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		return ( is_plugin_active( 'advanced-custom-fields/acf.php' ) ) ? true : false;
	}
}
