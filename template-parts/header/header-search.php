<?php
/**
 * Template for displaying search forms in Ozarc Gas
 *
 * @package WordPress
 * @subpackage ozarc_gas
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( ozarcgas_unique_id( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'ozarcgas' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'SEARCH HERE', 'placeholder', 'ozarcgas' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit">Search<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'ozarcgas' ); ?></span></button>
</form>
