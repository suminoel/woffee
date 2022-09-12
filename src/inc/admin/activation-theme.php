<?php
/**
 * Save initial data at theme activation.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

if ( !function_exists('woffee_save_initial_data') ) {
    add_action( 'after_setup_theme', 'woffee_save_initial_data' );
    function woffee_save_initial_data()
    {
        if( get_option( 'woffee_is_active' ) ) return;

        $is_active = [];
        $is_active['is_active_meta_tag'] = 1;
        $is_active['is_active_meta_robots'] = 1;
        $is_active['is_active_google_analytics'] = 1;
        $is_active['is_active_google_tagmanager'] = 1;
        $is_active['is_active_google_searchconsole'] = 1;
        $is_active['is_active_other_analytics'] = 1;
        $is_active['is_active_sns_share'] = 1;
        $is_active['is_active_sns_follow'] = 1;
        $is_active['is_active_ogp_settings'] = 1;
        $is_active['is_active_table_of_contents'] = 1;
        $is_active['is_active_table_scroll'] = 1;
        $is_active['is_active_blogcard'] = 1;
        $is_active['is_active_pagetop'] = 1;
        $is_active['is_active_affiliate'] = 1;
        $is_active['is_active_related_posts'] = 1;
        $is_active['is_active_recommend_posts'] = 1;
        $is_active['is_active_under_cta'] = 1;
        $is_active['is_active_fixed_banner'] = 1;
        $is_active['is_active_management_banner'] = 1;

        update_option('woffee_is_active', $is_active);
    }
}