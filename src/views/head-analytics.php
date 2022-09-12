<?php
/**
 * head analytics.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @use header.php
 */

$gsc_auth_id     = get_option('woffee_google_search_console_id');
$ga_tracking_id  = get_option('woffee_google_analytics_tracking_id');
$gtm_tracking_id = get_option('woffee_google_tagmanager_tracking_id');
$is_active_ga4   = get_option('woffee_is_active_ga4');
$other_analytics = get_option('woffee_other_analytics_head_tags');

if( !is_active_google_searchconsole() || !$gsc_auth_id ) : // SearchConsole ?>
<meta name="google-site-verification" content="<?php echo $gsc_auth_id; ?>" />
<?php endif; // End SearchConsole ?>

<?php if( is_active_google_analytics() && !$ga_tracking_id && !$gtm_tracking_id ) : // Analytics ?>
	<?php if( $is_active_ga4 ): // GA4 ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_tracking_id; ?>"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', '<?php echo $ga_tracking_id; ?>');
</script>

	<?php else : ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_tracking_id; ?>"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', '<?php echo $ga_tracking_id; ?>');
</script>
<!-- /Global site tag (gtag.js) - Google Analytics -->

	<?php endif; // End GA4 ?>
<?php endif // End Analytics ?>

<?php if( !is_active_google_tagmanager() || $gtm_tracking_id ) : // TagManager ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo $gtm_tracking_id; ?>');</script>
<!-- End Google Tag Manager -->
<?php endif; // End TagManager?>

<?php if( is_active_other_analytics() && $other_analytics ): // Other Analytics ?>
<!-- Other Analytics -->
<?php echo $other_analytics . PHP_EOL; ?>
<!-- /Other Analytics -->
<?php endif; // End Other Analytics ?>
