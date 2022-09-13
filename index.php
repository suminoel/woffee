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
get_header(); ?>

<div class="content-wrap">

	<div class="container">

		<div class="row">

			<?php
			if ( $layout_type === 'sidebar_left') :
				get_sidebar();
			endif;
			?>

			<main id="site-main">

				<?php
				$archive_title    = '';
				$archive_subtitle = '';

				if ( !is_home() ) {
					$archive_title    = get_the_archive_title();
					$archive_subtitle = get_the_archive_description();
				}

				if ( $archive_title || $archive_subtitle ) {
					?>

					<header class="archive-header has-text-align-center header-footer-group">

						<div class="archive-header-inner section-inner medium">

							<?php if ( $archive_title ) { ?>
								<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
							<?php } ?>

							<?php if ( $archive_subtitle ) { ?>
								<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
							<?php } ?>

						</div><!-- .archive-header-inner -->

					</header><!-- .archive-header -->

					<?php
				}

				if ( have_posts() ) {

					$i = 0;
					$count = $wp_query->found_posts;

					while ( have_posts() ) {
						$i++;
						if ( $i === 1 ) {
							echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
						}

						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						if ( $i === $count ) {
							echo '</div>';
						}
					}
				} elseif ( is_search() ) {
					?>

					<div class="no-search-results-form section-inner thin">

						<?php
						get_search_form(
							array(
								'aria_label' => __( 'search again', 'woffee' ),
							)
						);
						?>

					</div><!-- .no-search-results -->

					<?php
				}
				?>

				<?php woffee_pagination(); ?>

			</main><!-- #site-content -->

			<?php
			if ( $layout_type === 'sidebar_right') :
				get_sidebar();
			endif;
			?>

		</div>

	</div>

</div>

<?php
get_footer();
