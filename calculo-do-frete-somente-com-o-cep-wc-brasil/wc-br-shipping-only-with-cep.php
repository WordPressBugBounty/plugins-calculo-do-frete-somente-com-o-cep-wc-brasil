<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              mailto:ialvsconcelos@gmail.com
 * @since             1.0.0
 * @package           WC_Br_Shipping_Only_With_Cep
 *
 * @wordpress-plugin
 * Plugin Name:       Cálculo do frete somente com o CEP - WC Brasil
 * Description:       Este plugin permite à calculadora de fretes do Woocommerce identificar o Estado (UF) do cliente somente com o CEP.
 * Version:           1.1.3
 * Author:            Alvaro Vasconcelos - @alvsconcelos
 * Author URI:        mailto:ialvsconcelos@gmail.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wc-br-shipping-only-with-cep
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
define( 'WC_BR_SHIPPING_ONLY_WITH_CEP_VERSION', '1.1.3' );

/**
 * Plugin root path
 */
define( 'WC_BR_SHIPPING_ONLY_WITH_CEP_PATH', plugin_basename(__FILE__) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-br-shipping-only-with-cep-activator.php
 */
function activate_wc_br_shipping_only_with_cep() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-br-shipping-only-with-cep-activator.php';
	WC_Br_Shipping_Only_With_Cep_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-br-shipping-only-with-cep-deactivator.php
 */
function deactivate_wc_br_shipping_only_with_cep() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-br-shipping-only-with-cep-deactivator.php';
	WC_Br_Shipping_Only_With_Cep_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wc_br_shipping_only_with_cep' );
register_deactivation_hook( __FILE__, 'deactivate_wc_br_shipping_only_with_cep' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wc-br-shipping-only-with-cep.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wc_br_shipping_only_with_cep() {

	$plugin = new WC_Br_Shipping_Only_With_Cep();
	$plugin->run();

}
run_wc_br_shipping_only_with_cep();
