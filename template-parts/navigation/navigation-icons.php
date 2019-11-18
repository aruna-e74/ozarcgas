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
<nav class="icon-nav">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'mobile',
			'container' => false,
			'menu_class' => 'icon-menu',
			'depth'	=> 1,
			'items_wrap' => '<div class="icon-menu-container"><ul role="list" id="icon-menu" class="icon-menu">%3$s</ul></div>',
		)
	);
	?>
</nav>
