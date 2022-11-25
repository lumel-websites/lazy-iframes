<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://lumel.com
 * @since             1.0.0
 * @package           Lazy_Iframes
 *
 * @wordpress-plugin
 * Plugin Name:       Lazy iframes
 * Plugin URI:        https://github.com/lumel-websites/lazy-iframes
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.3
 * Author:            Puneet & KG
 * Author URI:        https://lumel.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lazy-iframes
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
define( 'LAZY_IFRAMES_VERSION', '1.0.3' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lazy-iframes-activator.php
 */
function activate_lazy_iframes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lazy-iframes-activator.php';
	Lazy_Iframes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lazy-iframes-deactivator.php
 */
function deactivate_lazy_iframes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lazy-iframes-deactivator.php';
	Lazy_Iframes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lazy_iframes' );
register_deactivation_hook( __FILE__, 'deactivate_lazy_iframes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lazy-iframes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lazy_iframes() {

	$plugin = new Lazy_Iframes();
	$plugin->run();

}
run_lazy_iframes();
