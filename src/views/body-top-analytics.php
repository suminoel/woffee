<?php
/**
 * body top analytics.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @use header.php
 */

$gtm_tracking_id = get_option('woffee_google_tagmanager_tracking_id');
$other_analytics = get_option('woffee_other_analytics_header_tags');

if ( !is_active_google_tagmanager() && $gtm_tracking_id ) : // TagManager (noscript)?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $gtm_tracking_id; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; // End TagManager (noscript)?>

<?php if( is_active_other_analytics() && $other_analytics ): // Other Analytics ?>
<!-- Other Analytics -->
<?php echo $other_analytics . PHP_EOL; ?>
<!-- /Other Analytics -->
<?php endif; // End Other Analytics ?>
