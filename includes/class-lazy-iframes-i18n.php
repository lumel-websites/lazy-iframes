<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://lumel.com
 * @since      1.0.0
 *
 * @package    Lazy_Iframes
 * @subpackage Lazy_Iframes/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lazy_Iframes
 * @subpackage Lazy_Iframes/includes
 * @author     Puneet & KG <puneett@lumel.com & kg@lumel.com>
 */
class Lazy_Iframes_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lazy-iframes',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
