<?php

/*
Plugin Name: URWA for WooCommerce
Description: Selectively display widgets to logged in users based on standard WooCommerce user roles.
Version: 1.0
Requires at least: 3.9
Tested up to: 4.3.1
Stable Tag: 1.0
Author: Rob Smelik
Author URI: http://www.robsmelik.com
License: GPLv2
Copyright: Rob Smelik
*/
 
// SECURITY: This line exists for security reasons to keep things locked down.
 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


// REGISTER SIDEBARS (AKA Widget Areas)
 
function register_woocommerce_user_sidebar(){
		
		
		// Register WooCommerce Customer sidebar

		register_sidebar(array(
			'name' => 'Users - WooCommerce Customer',
			'id'   => 'urwa-woocommerce-customer-widgets',
			'description'   => __( 'Widgets placed in this widget area only visible to WooCommerce Customers who are logged in.' ),
			'before_widget' => '<div id="urwa-woocommerce-customer" class="widget">',
			'after_widget'  => '</div>',
			'before_title' => '<h3 class="widgettitle">', 
			'after_title' => '</h3>', 
		));
		
		// Register WooCommerce Store Manager sidebar

		register_sidebar(array(
			'name' => 'Users - WooCommerce Shop Manager',
			'id'   => 'urwa-woocommerce-shop-manager-widgets',
			'description'   => __( 'Widgets placed in this widget area only visible to WooCommerce Administrators who are logged in.' ),
			'before_widget' => '<div id="urwa-woocommerce-shop-manager" class="widget">',
			'after_widget'  => '</div>',
			'before_title' => '<h3 class="widgettitle">', 
			'after_title' => '</h3>', 
		));
		
}

add_action( 'widgets_init', 'register_woocommerce_user_sidebar' );


// REGISTER SHORTCODES

add_shortcode('woocommerce-user-role-widget-areas', 'shortcode_woocommerce_user_role_widget_areas');

// Creates the front-end display of the WooCommerce User Role Widget Areas
// This is where the magic happens

function shortcode_woocommerce_user_role_widget_areas(  ) {

if ( current_user_can( 'manage_woocommerce' ) ) { //only WooCommerce Shop Managers can see this
   if ( is_active_sidebar( 'urwa-woocommerce-shop-manager-widgets' ) ) {
   dynamic_sidebar( 'urwa-woocommerce-shop-manager-widgets' );
   }
} 
elseif ( is_user_logged_in() ) {  //only WooCommerce Customers can see this
   if ( is_active_sidebar( 'urwa-woocommerce-customer-widgets' ) ) {
   dynamic_sidebar( 'urwa-woocommerce-customer-widgets' );
   }
} 

else {  //returns no widget content if none of the contitions above are met
	echo ''; 
}
}
		
add_filter('widget_text', 'do_shortcode');


// REGISTER WIDGET

// Display sidebars based on standard WooCommerce user roles

class urwa_woocommerce_widget extends WP_Widget {
	
function __construct() {
parent::__construct(
// Base ID of the widget
'urwa_woocommerce_widget', 

// Widget name as it appears in the UI
__('WooCommerce Users by Role', 'urwa_woocommerce_widget_domain'), 

// Widget description
array( 'description' => __( 'Place this widget in any existing NON-USER widget area to display woocommerce user role widget areas.', 'urwa_woocommerce_widget_domain' ), ) 
);
}

// Creates the front-end display of the User Role Widget Areas
// This is where the magic happens

public function widget(  ) {

// WooCommerce Support

if ( current_user_can( 'manage_woocommerce' ) ) { //only WooCommerce Shop Managers can see this
   if ( is_active_sidebar( 'urwa-woocommerce-shop-manager-widgets' ) ) {
   dynamic_sidebar( 'urwa-woocommerce-shop-manager-widgets' );
   }
} 
elseif ( is_user_logged_in() ) {  //only WooCommerce Customers can see this
   if ( is_active_sidebar( 'urwa-woocommerce-customer-widgets' ) ) {
   dynamic_sidebar( 'urwa-woocommerce-customer-widgets' );
   }
} 

else {  //returns no widget content if none of the contitions above are met
	echo ''; 
}
}
		
} // Class urwa_woocommerce_widget ends here

// Register and load the widget

function urwa_load_woocommerce_widget() {
	register_widget( 'urwa_woocommerce_widget' );
}
add_action( 'widgets_init', 'urwa_load_woocommerce_widget' );



