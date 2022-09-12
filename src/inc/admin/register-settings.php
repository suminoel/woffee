<?php
/**
 * Register setting group.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

if ( !function_exists('woffee_register_settings') && is_admin() ) {
	add_action('admin_init', 'woffee_register_settings');
	function woffee_register_settings()
	{
		// theme settings
		register_setting( 'woffee-is-active-group', 'woffee_is_active' );

		// analytics settings
		register_setting( 'woffee-analytics-group', 'woffee_analytics_settings' );

		// SNS settings
		register_setting( 'woffee-social-group', 'woffee_social_settings' );

		// post design settings
		register_setting( 'woffee-post-design-group', 'woffee_post_design_settings' );

		// affiliate settings
		register_setting( 'woffee-affiliate-group', 'woffee_affiliate_settings' );
	}
}