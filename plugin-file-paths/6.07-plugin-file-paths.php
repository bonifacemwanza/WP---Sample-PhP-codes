<?php
/*
Plugin Name: 6.07 - File Paths

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

function wpplugin_settings_page_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>

    <?php
      $wpplugin_plugin_basename = plugin_basename( __FILE__ );
      $wpplugin_plugin_dir_path = plugin_dir_path( __FILE__ );
      $wpplugin_plugins_url_default = plugins_url();
      $wpplugin_plugins_url = plugins_url( 'includes', __FILE__ );
      $wpplugin_plugin_dir_url = plugin_dir_url( __FILE__ );
    ?>

    <ul>
      <li>plugin_basename( __FILE__ ) - <?php echo $wpplugin_plugin_basename; ?></li>
      <li>plugin_dir_path( __FILE__ ) - <?php echo $wpplugin_plugin_dir_path; ?></li>
      <li>plugins_url() - <?php echo $wpplugin_plugins_url_default; ?></li>
      <li>plugins_url( 'includes', __FILE__ ) - <?php echo $wpplugin_plugins_url; ?></li>
      <li>plugin_dir_url( __FILE__ ) - <?php echo $wpplugin_plugin_dir_url; ?></li>
      <li>included file test - <?php include( plugin_dir_path( __FILE__ ) . 'includes/include-test.php'); ?></li>
    </ul>

  </div>
  <?php
}

function wpplugin_settings_pages()
{
  add_menu_page(
    __( 'File Paths', 'wpplugin' ),
    __( 'File Paths', 'wpplugin' ),
    'manage_options',
    'wpplugin',
    'wpplugin_settings_page_markup',
    'dashicons-wordpress-alt',
    100
  );

}
add_action( 'admin_menu', 'wpplugin_settings_pages' );


?>
