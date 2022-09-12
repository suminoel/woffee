<?php
/**
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

if ( !defined( 'ABSPATH' ) ) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
		<meta name="referrer" content="strict-origin-when-cross-origin" />
		<?php echo woffee_output_each_for_preconnect_link_tag(); ?>
		<?php get_template_part( 'src/views/head-analytics' ); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage" data-barba="wrapper">

		<?php wp_body_open(); ?>

		<?php get_template_part( 'src/views/body-top-analytics' ); ?>

		<div class="wrapper">

			<?php echo woffee_header_layout(); ?>
