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
	add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
	function my_wp_nav_menu_objects( $items, $args ) {
		// loop
		foreach( $items as &$item ) {
			// vars
			$icon = get_field('menu_icon', $item);
			// append icon
			if( $icon ) {
				$item->title = '<img src="'.$icon.'" alt="">';
			}
		}
		// return
		return $items;
	}

	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'container' => false,
			'menu_class' => 'icon-menu',
			'depth'	=> 1,
			'items_wrap' => '<div class="icon-menu-container">
								<ul role="list" id="icon-menu" class="icon-menu">
									%3$s
									<li class="phone-icon"><a href="tel:'.get_field('phone_number', 'option').'"><img src="'.get_bloginfo('template_url').'/assets/images/phone-icon.png" alt=""></a></li>
									<li class="search-icon"><img src="'.get_bloginfo('template_url').'/assets/images/search-icon.png" alt=""></li>
								</ul>
							</div>',
		)
	);
	?>
</nav>
