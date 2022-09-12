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
if ( post_password_required() ) return;
?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<div class="ttl comments-title">
			<?php
            printf( _n( 'Comment (%1$s)', 'Comments (%1$s)', get_comments_number(), 'woffee' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</div>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
			?>
			<?php paginate_comments_links(); ?>
		</ol><!-- .comment-list -->

	<?php endif; // have_comments() ?>

	<?php if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><!-- Comments are closed --></p>
	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
		<?php comment_form(); ?>
	<?php endif; ?>

</div><!-- .comments-area -->
