<?php
/**
 * Adjustments for the Themes API.
 */

// Mark it as a global group whenever the theme directory is loaded.
wp_cache_add_global_groups( 'theme-update-check' );

/**
 * Updates the update-check cache when a new version of a theme gets approved.
 *
 * @param int    $post_id         Post ID.
 * @param string $current_version The approved theme version.
 */
function wporg_themes_update_check( $post_id, $current_version ) {
	$slug = get_post( $post_id )->post_name;

	$theme_meta = array(
		'current_version' => $current_version,
		'requires'        => wporg_themes_get_version_meta( $post_id, '_requires', $current_version ),
		'requires_php'    => wporg_themes_get_version_meta( $post_id, '_requires_php', $current_version ),
	);

	wp_cache_set( $slug, $theme_meta, 'theme-update-check' );

	// Delete the error cache if this theme is new.
	wp_cache_delete( $slug, 'theme_information_error' );
}
add_action( 'wporg_themes_update_version_live', 'wporg_themes_update_check', 10, 2 );
