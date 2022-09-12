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
<article id="post-<?php the_ID(); ?>" <?php post_class('col'); ?>>

	<div class="card">

		<?php if ( get_the_post_thumbnail() ) : ?>

			<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="">

		<?php else : ?>

			<img src="<?php echo get_theme_file_uri('assets/images/no-img.png'); ?>" alt="no image">

		<?php endif; ?>

		<div class="card-body">

			<h2 class="card-title"><?php the_title(); ?></h2>

			<p class="card-text"><?php the_excerpt(); ?></p>

		</div>

	</div>

</article><!-- #post-## -->