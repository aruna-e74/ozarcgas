<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
			<section class="error-404 not-found">
				<h2> Sorry! Looks like we could not find what you were looking for :( </h2>
				<div class="row">
					<div class="col-md-6">
						Maybe try a search? Or click <a href="<?php bloginfo('url') ?>">here</a> to return home.
					</div>
					<div class="col-md-6">
						<?php get_search_form(); ?>
					</div>
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
