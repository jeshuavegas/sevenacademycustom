<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mysevenacademy.com
 * @since             1.0.0
 * @package           Sevenacademycustom
 *
 * @wordpress-plugin
 * Plugin Name:       My Seven Academy - Custom Plugin
 * Plugin URI:        https://mysevenacademy.com
 * Description:       Plugin de WordPress personalizado para "My Seven Academy". Usado para la gestión e implementación de código personalizado.
 * Version:           1.0.0
 * Author:            My Seven Academy - Webmaster Jeshua
 * Author URI:        https://mysevenacademy.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sevenacademycustom
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SEVENACADEMYCUSTOM_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sevenacademycustom-activator.php
 */
function activate_sevenacademycustom() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sevenacademycustom-activator.php';
	Sevenacademycustom_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sevenacademycustom-deactivator.php
 */
function deactivate_sevenacademycustom() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sevenacademycustom-deactivator.php';
	Sevenacademycustom_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sevenacademycustom' );
register_deactivation_hook( __FILE__, 'deactivate_sevenacademycustom' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sevenacademycustom.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sevenacademycustom() {

	$plugin = new Sevenacademycustom();
	$plugin->run();

}
run_sevenacademycustom();
