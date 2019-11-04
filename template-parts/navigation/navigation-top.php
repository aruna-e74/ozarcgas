<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage notre_dame
 * @since 1.0
 * @version 1.2
 */

?>
<nav class="top-nav">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'container' => false,
			'menu_class' => 'top-menu',
			'depth'	=> 1,
			'items_wrap' => '<div class="top-menu-container"><ul role="list" id="top-menu" class="top-menu">%3$s</ul></div>',
		)
	);
	?>
</nav>
