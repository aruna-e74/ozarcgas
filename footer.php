<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ozarc_gas
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<div class="footer-info">
					<?php bloginfo('name') ?> - <span><?php the_field('address_line_one', 'option') ?></span> - <span><?php the_field('city', 'option') ?>, <?php the_field('state', 'option') ?> <?php the_field('zip', 'option') ?></span>
				</div>
				<div class="copywright">
					Copyright © 2009-<span id="year"></span> Ozarc Gas Equipment & Supply, Inc. All rights reserved.
				</div>
				<div class="disclaimer">
					Other products and companies referred to herein are trademarks or registered trademarks of their respective companies or mark holders.
				</div>
				<div class="e74">
					powered by <a href="https://www.element74.com" target="_blank">element 74</a>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
