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
$layout_type = get_theme_mod( 'sidebar_layout', 'sidebar_right' );

$layout_class = ( $layout_type === 'sidebar_none' ) ? 'col-1' : 'col-9';
get_header(); ?>

<div class="container">

	<?php
	if ( $layout_type === 'sidebar_left') :
		get_sidebar();
	endif;
	?>

	<main id="site-content" class="<?php echo $layout_class; ?>">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

		endwhile; // End of the loop.
		?>

	</main>

	<?php
	if ( $layout_type === 'sidebar_right') :
		get_sidebar();
	endif;
	?>

</div>

<?php
get_footer();
