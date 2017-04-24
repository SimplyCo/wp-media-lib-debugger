<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://simply.co.ua/
 * @since             1.0.0
 * @package           Wp_Media_Lib_Debugger
 *
 * @wordpress-plugin
 * Plugin Name:       WP Media Library Debugger
 * Plugin URI:        http://simply.co.ua/wordpress/wp-media-lib-debugger
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Anton Koba, Simply.co.ua
 * Author URI:        http://simply.co.ua/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-media-lib-debugger
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-media-lib-debugger-activator.php
 */
function activate_wp_media_lib_debugger() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-media-lib-debugger-activator.php';
	Wp_Media_Lib_Debugger_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-media-lib-debugger-deactivator.php
 */
function deactivate_wp_media_lib_debugger() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-media-lib-debugger-deactivator.php';
	Wp_Media_Lib_Debugger_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_media_lib_debugger' );
register_deactivation_hook( __FILE__, 'deactivate_wp_media_lib_debugger' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-media-lib-debugger.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_media_lib_debugger() {

	$plugin = new Wp_Media_Lib_Debugger();
	$plugin->run();

}
run_wp_media_lib_debugger();
