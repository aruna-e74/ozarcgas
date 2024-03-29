<?php
/**
 * Ozarc Gas back compat functionality
 *
 * Prevents Ozarc Gas from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage ozarc_gas
 * @since Ozarc Gas 1.0
 */

/**
 * Prevent switching to Ozarc Gas on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Ozarc Gas 1.0
 */
function ozarcgas_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'ozarcgas_upgrade_notice' );
}
add_action( 'after_switch_theme', 'ozarcgas_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Ozarc Gas on WordPress versions prior to 4.7.
 *
 * @since Ozarc Gas 1.0
 *
 * @global string $wp_version WordPress version.
 */
function ozarcgas_upgrade_notice() {
	$message = sprintf( __( 'Ozarc Gas requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'ozarcgas' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Ozarc Gas 1.0
 *
 * @global string $wp_version WordPress version.
 */
function ozarcgas_customize() {
	wp_die(
		sprintf( __( 'Ozarc Gas requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'ozarcgas' ), $GLOBALS['wp_version'] ),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'ozarcgas_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Ozarc Gas 1.0
 *
 * @global string $wp_version WordPress version.
 */
function ozarcgas_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Ozarc Gas requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'ozarcgas' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'ozarcgas_preview' );
