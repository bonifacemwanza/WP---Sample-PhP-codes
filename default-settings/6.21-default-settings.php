<?php
/*
Plugin Name: 6.21 - Default Settings

Theme Name: 5.31 - wp_enqueue_scripts - Filter Hooks (DEMO)
Author: Boniface C Mwanza
Author URI: http://bonifacecmwanza.czesttech.com
Description: Work ground for WordPress theme skil Development.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wphooks

just for learning 
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Define plugin paths and URLs
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// Create Settings Fields
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-settings-fields.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');

?>
