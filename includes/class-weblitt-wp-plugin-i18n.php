<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/zzOzz
 * @since      1.0.0
 *
 * @package    Weblitt_Wp_Plugin
 * @subpackage Weblitt_Wp_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Weblitt_Wp_Plugin
 * @subpackage Weblitt_Wp_Plugin/includes
 * @author     Vincent Lombard <Vincent.lombard@msh-lse.fr>
 */
class Weblitt_Wp_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'weblitt-wp-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
