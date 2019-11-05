<?php
/**
 * Displays mobile navigation
 *
 * @package WordPress
 * @subpackage notre_dame
 * @since 1.0
 * @version 1.2
 */

?>
<nav class="mobile-nav">
	<div class="mobile-menu-container">
		<ul role="list" id="mobile-menu" class="mobile-main-menu">
			<?php wp_nav_menu( array('theme_location' => 'top', 'items_wrap' => '%3$s' ) ); ?>
	  		<?php wp_nav_menu( array('theme_location' => 'main', 'items_wrap' => '%3$s' ) ); ?>
		</ul>
	</div>
</nav>
