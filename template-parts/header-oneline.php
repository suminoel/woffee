<?php
/**
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
?>
<header class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top">

	<nav id="site-navigation" class="container bd-gutter flex-wrap flex-lg-nowrap">

			<?php woffee_brand_logo(); ?>

			<?php if ( has_nav_menu( 'global-nav' ) ) : ?>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'global-nav',
						'menu_id'        => 'global-nav',
						'menu_class'     => 'navbar-nav flex-row flex-wrap bd-navbar-nav',
						'add_li_class'   => 'nav-item col-6 col-lg-auto'
					)
				);
			?>

			<?php endif; ?>

	</nav><!-- #site-navigation -->

</header>