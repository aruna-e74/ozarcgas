<?php
/**
 * The template for displaying gallery archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ozarc_gas
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
			?>
				<div class="col-md-6">
					<?php get_template_part( 'template-parts/gallery/content', get_post_format() ); ?>
				</div>
			<?php
				endwhile;


			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
