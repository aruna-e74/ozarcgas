<?php
/**
 * Displays main navigation
 *
 * @package WordPress
 * @subpackage notre_dame
 * @since 1.0
 * @version 1.2
 */

?>
<nav class="main-nav">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'main',
			'container' => false,
			'menu_class' => 'main-menu',
			'items_wrap' => '<div class="main-menu-container"><ul role="list" id="main-menu" class="main-menu">%3$s</ul></div>',
		)
	);
	?>
</nav>
