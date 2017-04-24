<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://simply.co.ua/
 * @since      1.0.0
 *
 * @package    Wp_Media_Lib_Debugger
 * @subpackage Wp_Media_Lib_Debugger/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Media_Lib_Debugger
 * @subpackage Wp_Media_Lib_Debugger/includes
 * @author     Anton Koba, Simply.co.ua <anton@simply.co.ua>
 */
class Wp_Media_Lib_Debugger_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-media-lib-debugger',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
