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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="content-header">

		<?php
			if ( is_singular() ) {
				the_title( '<h1 class="content-title">', '</h1>' );
			} else {
				the_title( '<h2 class="content-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>

	</header><!-- .content-header -->

	<div class="content">

		<?php the_content(); ?>

	</div><!-- .content-content -->

	<footer class="content-footer">

	</footer><!-- .content-footer -->

</article><!-- #post-## -->