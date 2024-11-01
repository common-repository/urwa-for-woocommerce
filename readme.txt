=== URWA for WooCommerce ===

Plugin Name: URWA for WooCommerce
Plugin URI: 
Version: 1.0
Author: Rob Smelik
Contributors: Rob Smelik
Author URI: http://www.robsmelik.com
Tags: woocommerce, sidebar, widget area, widget, user, role, logged in, logged out, admin, administrator, seller, customer, shortcode, post, page
Requires at least: 3.9
Tested up to: 4.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

### Description

User Role Widget Areas for WooCommerce allows you to selectively display content in your themes active widget areas based on standard WooCommerce user roles (WooCommerce Shop Manager, WooCommerce Customer) of logged in users. All user role widget areas can be displayed in **any** existing sidebar or widget area within your theme. 

### Plugin Features

* 2 User role based widget areas, one for each of the standard WooCommerce user roles.
* 1 display widget for displaying your new widget areas on the front end (public site).
* An additional shortcode for displaying your user role and user status based widget areas.
* The ability to hard code the script into your theme that displays the widget areas on the front end.

### Important Information

This plugin is designed to work with [WooCommerce](http://www.woothemes.com/woocommerce/), a popular, full-featured eCommerce plugin for WordPress. Therefore, WooCommerce needs to be installed and activated for the plugin to work.

### Rate The Plugin

If you like this plugin and find it useful please take a moment to [rate it](https://wordpress.org/support/view/plugin-reviews/urwa-for-woocommerce#postform). Thanks!


== Installation ==

### Installation

1. In WordPress go to Plugins > Add New and search for **URWA for WooCommerce**. 
2. Install and activate the plugin using the built in WordPress plugin installer. 
3. Go to Appearance > Widgets. You will notice a new set of user role and status based widget areas. Drag any widget into those areas that you desire.
4. Drag the installed **WooCommerce Users by Role** display widget to the sidebar or widget area where you want your user role based widgets to appear.
5. Refresh your public site to see role based widgets and log out or log in as a different user role to see the widgets change. 


### Additional Usage - Shortcode

One shortcode comes installed with this plugin.

The following shortcode will display the WooCommerce role based widgets that you have defined on the Appearance > Widgets page in WordPress:

[woocommerce-user-role-widget-areas] 

### Additional Usage - Hardcoding

You can also hardcode the dynamic widget areas into your theme using the following PHP code.

The following code will display the role based widgets that you have defined on the Appearance > Widgets page in WordPress when placed in your theme:

`<?php echo do_shortcode('[woocommerce-user-role-widget-areas]’); ?>` 


### Advanced Styling

Each role based widget area gets wrapped in a unique ID allowing advanced users to individually style the widget areas. 

== Frequently Asked Questions ==

### FAQ

Q: I dragged widgets into the WooCommerce User Role Widget Areas but they are not showing up on the front end. Why?

A: You must make sure that you have placed the **WooCommerce Users By Role** widget into any existing **NON-USER** widget area where you want to display specific widgets based on user roles.

Q: I did the step above but the WooCommerce User Role widgets are still not showing up.

A: Make sure you have at least one widget in the widget area for the role you are logged in as. For example: If you are logged in as a Shop Manager drag a text widget into the Users - WooCommerce Shop Manager widget area and give it a title and some placeholder content. Go back to your browser and refresh. 


== Screenshots ==

1. screenshot-1.jpg
2. screenshot-2.jpg

== CHANGELOG ==

= 1.0 =

* Initial release
* Added registration for 2 WooCommerce user role based widget areas
* Added registration for 1 WooCommerce display widget that displays your WooCommerce user role based widget areas on the front end
* Added shortcode support for displaying user role and status based widget areas on the front end
* Tested functionality on a variety of themes and browsers