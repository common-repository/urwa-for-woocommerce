<?php
/**
 * Uninstall URWA for WooCommerce
 *
 * Used to uninstall this plugin and remove any options
 * and transients from the database. Fired when the plugin
 * is uninstalled. 
 *
 * @package     urwa-for-woocommerce
 * @author      Rob Smelik
 * @version     1.0
 * 
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
