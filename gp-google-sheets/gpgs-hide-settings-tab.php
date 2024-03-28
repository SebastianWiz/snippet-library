<?php
/**
 * Gravity Perks // GP Google Sheets // Remove the settings tab.
 *
 * This snippet removes the GP Google Sheets settings tab from the GF Settings menu tabs.
 *
 * Installation:
 *   1. Install per https://gravitywiz.com/documentation/how-do-i-install-a-snippet/
 *   2. Hook into `gpgs_remove_settings_tab` and return true/false accordingly.
 */
add_filter( 'gform_settings_menu', function( $setting_tabs ) {

	/**
	 * Filters whether the GP Google Sheets tab should be removed from the GF Settings menu tabs.
	 *
	 * @param boolean True if it should be removed, false otherwise.
	 */
	if ( apply_filters( 'gpgs_remove_settings_tab', true ) ) {
		return array_filter( $setting_tabs, function ( $tab ) {
			return 'gp-google-sheets' !== $tab['name'];
		} );
	}

	return $setting_tabs;
} );
