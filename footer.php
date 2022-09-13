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
?>
			<footer id="footer" class="footer container" itemscope itemtype="https://schema.org/WPFooter">

				<div id="footer-in" class="footer-in">

					<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
						<div id="footer-widget">
							<?php dynamic_sidebar('footer-widget'); ?>
						</div>
					<?php endif; ?>

					<?php if ( has_nav_menu( 'footer-nav' ) ) : ?>
						<nav id="menu-footer">
							<?php wp_nav_menu(
								array (
									'theme_location' => 'footer',
									'add_li_class'   => 'nav-item'
								)
							); ?>
						</nav>
					<?php endif; ?>

					<p class="copyright text-center">&copy; 20XX <?php echo get_bloginfo('name');?>.</p>

				</div>

			</footer>

		</div><!-- .wrapper -->

		<?php wp_footer(); ?>

	</body>

</html>
