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
<header class="header clearfix">

	<div class="container text-center">

		<div class="site-description">

			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="tagline" itemprop="alternativeHeadline"><?php echo $description; ?></p>
			<?php endif; ?>

		</div>

		<div class="site-logo">

			<?php woffee_brand_logo(); ?>

		</div>

	</div>

	<nav id="site-navigation" class="site-navigation bd-gutter flex-wrap flex-lg-nowrap">

			<?php if ( has_nav_menu( 'global-nav' ) ) : ?>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'global-nav',
						'menu_id'        => 'global-nav',
						'menu_class'     => 'nav justify-content-center',
					)
				);
			?>

			<?php endif; ?>

	</nav><!-- #site-navigation -->

</header>