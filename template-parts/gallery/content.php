<?php
/**
 * Template part for displaying galleries
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ozarc_gas
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_archive('gallery') ) : ?>
	<div class="gallery-wrapper">
		<a href="<?php the_permalink() ?>">
			<div class="gallery-img" style="background: url(<?php the_post_thumbnail_url() ?>) center no-repeat;"></div>
			<div class="gallery-title"><?php the_title() ?></div>
		</a>
	</div>
	<?php elseif ( is_singular('gallery') ) : ?>
	<div class="row">
		<div class="col-md-6">
			<div class="slider-wrapper">
				<div class="slide-wrapper">
					<div class="slider-for">
					<?php
						$images = get_field('images');
						if ( $images ) {
							foreach ( $images as $image ) {
					?>
								<div class="for-img-wrapper">
									<img src="<?php echo esc_url($image['url']); ?>" alt="">
								</div>
					<?php
							}
						}
					?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="gallery-content-wrapper">
				<?php the_field('content') ?>
			</div>
		</div>
		<div class="col-12">
			<div class="slide-nav-wrapper">
				<div class="slider-nav">
				<?php
					$images = get_field('images');
					if ( $images ) {
						foreach ( $images as $image ) {
				?>
							<div class="prop-img-wrapper">
								<div class="prop-img" style="background: url(<?php echo esc_url($image['url']); ?>) center no-repeat"> </div>
							</div>
				<?php
						}
					}
				?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php
	if ( is_single() ) {
		ozarcgas_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
