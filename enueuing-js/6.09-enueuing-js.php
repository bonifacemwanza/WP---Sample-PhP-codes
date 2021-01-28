<?php
/*
Plugin Name: 6.09 - Enqueue JS

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

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Enqueue Plugin CSS
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-styles.php');

// Enqueue Plugin JavaScript
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-scripts.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');

?>
