<?php
/**
 * Pagination func.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !function_exists('woffee_pagination') ) {
	function woffee_pagination() {
		global $wp_query , $wp_rewrite;

		if ( $wp_query->max_num_pages < 2 ) return;

		$paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$format  = $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

		$links = paginate_links( array(
			'base'     => get_pagenum_link() . '%_%',
			'format'   => $format,
			'total'    => $wp_query->max_num_pages,
			'current'  => max( 1, get_query_var('paged') ),
			'mid_size' => 1,
			'prev_text' => '&lt',
			'next_text' => '&gt',
			'type'  => 'array',
		) );

		$before_class = array('page-numbers', 'current');
		$after_class  = array('page-link', 'active');

		if ( $links ) :
		?>
			<nav class="pagination-wrap" aria-label="Page navigation">

				<ul class="pagination">

					<?php foreach ( $links as $link ) : ?>

						<li class="page-item"><?php echo str_replace( $before_class, $after_class, $link ); ?></li>

					<?php endforeach; ?>

				</ul>

			</nav>

		<?php endif;
	}
}