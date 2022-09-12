<?php
/**
 * Register widget area.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @link: https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !function_exists('woffee_widgets_init') ) {
	function woffee_widgets_init() {
		// sidebar
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'woffee' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'woffee' ),
			'before_widget' => '<section id="%1$s" class="widget side-widget %2$s"><div class="side-widget-inner">',
			'after_widget'  => '</div></section>',
			'before_title'  => '<h3 class="widget-title side-widget-title"><span class="side-widget-title-inner">',
			'after_title'   => '</span></h3>',
		) );

		// footer
		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'woffee' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Add widgets here.', 'woffee' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s"><div class="container">',
			'after_widget'  => '</div></section>',
			'before_title'  => '<h3 class="widget-title footer-widget-title">',
			'after_title'   => '</h3>',
		) );

		// under-post
		register_sidebar( array(
			'name'          => esc_html__( 'Under post', 'woffee' ),
			'id'            => 'under-post-widget',
			'description'   => esc_html__( 'Add widgets here.', 'woffee' ),
			'before_widget' => '<section id="%1$s" class="widget underpost-widget %2$s"><div class="underpost-widget-inner">',
			'after_widget'  => '</div></section>',
			'before_title'  => '<h3 class="widget-title underpost-widget-title">',
			'after_title'   => '</h3>',
		) );

		// sp-nav
		register_sidebar( array(
			'name'          => esc_html__( 'SP navi', 'woffee' ),
			'id'            => 'sp-nav-widget',
			'description'   => esc_html__( 'Add widgets here.', 'woffee' ),
			'before_widget' => '<section id="%1$s" class="widget spnav-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title spnav-widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'woffee_widgets_init' );
}
