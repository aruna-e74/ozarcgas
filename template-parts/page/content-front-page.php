<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage ozarc_gas
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'ozarcgas-panel ' ); ?> >
	<div class="wrap">
		<div class="row">
			<div class="col-md-6">
			<?php if ( have_rows('col_one_rows') ): ?>
				<?php while ( have_rows('col_one_rows') ) : the_row();
					$content = get_sub_field('row_content');
				?>
				<div class="content_row-wrapper">
					<?php echo $content; ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<div class="col-md-6">
			<?php if ( have_rows('col_two_rows') ): ?>
				<?php while ( have_rows('col_two_rows') ) : the_row();
					$content = get_sub_field('row_content');
				?>
				<div class="content_row-wrapper">
					<?php echo $content; ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div><!-- .wrap -->
</article><!-- #post-<?php the_ID(); ?> -->
