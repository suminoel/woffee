<?php
/**
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

if ( !is_active_sidebar( 'sidebar' ) ) return;
?>
<div id="sidebar">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div><!-- #secondary -->
