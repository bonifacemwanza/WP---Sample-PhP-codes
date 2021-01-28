<?php
/*
Plugin Name: 6.16 - PRACTICE Options - 
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


// Create Plugin Options
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-options.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');

// Add the wpplugin_options to the footer
function wpplugin_custom_admin_footer( $footer ) {

  $footer_text = esc_html( get_option( 'wpplugin_options' ) );

  return $footer_text;

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );


?>
