<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mysevenacademy.com
 * @since      1.0.0
 *
 * @package    Sevenacademycustom
 * @subpackage Sevenacademycustom/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sevenacademycustom
 * @subpackage Sevenacademycustom/includes
 * @author     My Seven Academy - Webmaster Jeshua <Jeshua.vega@mysevensuite.com>
 */
class Sevenacademycustom_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sevenacademycustom',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
