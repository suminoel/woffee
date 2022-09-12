<?php
/**
 * Add admin menu page.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

/**
 * Register a custom menu pages.
 */
if ( !function_exists('woffee_register_custom_menu_page') ) {
	function woffee_register_custom_menu_page()
	{
		add_menu_page(
			__( 'テーマ設定', 'textdomain' ),
			'テーマ設定',
			'manage_options',
			'custompage',
			'woffee_load_custom_menu_page',
			''
		);

		add_submenu_page(
			'custompage',
			__('解析ツール設定', 'woffee'),
			__('解析ツール設定', 'woffee'),
			'manage_options',
			'analytics_settings',
			'woffee_load_analytics_settings_page'
		);

		add_submenu_page(
			'custompage',
			__('SNS設定', 'woffee'),
			__('SNS設定', 'woffee'),
			'manage_options',
			'sns_settings',
			'woffee_load_sns_settings_page'
		);

		add_submenu_page(
			'custompage',
			__('記事内デザイン設定', 'woffee'),
			__('記事内デザイン設定', 'woffee'),
			'manage_options',
			'post_design_settings',
			'woffee_load_post_design_settings_page'
		);

		add_submenu_page(
			'custompage',
			__('アフィリエイト設定', 'woffee'),
			__('アフィリエイト設定', 'woffee'),
			'manage_options',
			'affiliate_settings',
			'woffee_load_affiliate_settings_page'
		);
	}
	add_action( 'admin_menu', 'woffee_register_custom_menu_page' );
}


/**
 * Load a custom menu page files.
 */
if ( !function_exists('woffee_load_custom_menu_page') ) {
	function woffee_load_custom_menu_page()
	{
		get_template_part( 'src/views/admin/theme-settings' );
	}
}

if ( !function_exists('woffee_load_analytics_settings_page') ) {
	function woffee_load_analytics_settings_page()
	{
		get_template_part( 'src/views/admin/analytics-settings' );
	}
}

if ( !function_exists('woffee_load_sns_settings_page') ) {
	function woffee_load_sns_settings_page()
	{
		get_template_part( 'src/views/admin/sns-settings' );
	}
}

if ( !function_exists('woffee_load_post_design_settings_page') ) {
	function woffee_load_post_design_settings_page()
	{
		get_template_part( 'src/views/admin/post-design-settings' );
	}
}

if ( !function_exists('woffee_load_affiliate_settings_page') ) {
	function woffee_load_affiliate_settings_page()
	{
		get_template_part( 'src/views/admin/affiliate-settings' );
	}
}