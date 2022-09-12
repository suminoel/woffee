<?php
/**
 * Pagination func.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !function_exists( 'woffee_setup' ) ) {
	function woffee_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-units', 'px', 'vw', 'vh' );
		add_theme_support( 'custom-line-height' );
		add_theme_support( 'custom-spacing' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'navigation-widgets',
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script'
		));

		register_nav_menu( 'global-nav', __( 'Grobal menu', 'woffee' ) );
		register_nav_menu( 'scroll-nav', __( 'Header fixed menu', 'woffee' ) );
		register_nav_menu( 'footer-nav', __( 'Footer menu', 'woffee' ) );

		add_editor_style( 'assets/css/editor-style.css' );
	}
	add_action( 'after_setup_theme', 'woffee_setup' );
}