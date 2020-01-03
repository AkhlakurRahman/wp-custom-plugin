<?php
/*
Plugin Name: Custom Plugin
Plugin URI: https://akrahman.me
Description: Trying different things and practicing to build a plugin
Version: 1.0.0
Author: Akhlakur Rahman
Author URI: https://akrahman.me
Text Domain: custom_plugin
Domain Path: /languages
*/

// Exit if file is called directly
if (!defined('ABSPATH')) {
  exit;
}

define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_DIR_URL', plugin_dir_url(dirname(__FILE__)));
// echo PLUGIN_DIR_URL;
// echo PLUGIN_DIR_PATH;
// die();


register_activation_hook(__FILE__, 'custom_plugin_create_table');

if (is_admin()) {
  require_once(PLUGIN_DIR_PATH . 'admin/admin-menu.php');
  require_once(PLUGIN_DIR_PATH . 'includes/load-scripts.php');

  // Create database table upon installation
  function custom_plugin_create_table()
  {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();


    $sql = "CREATE TABLE `wp_custom_plugin` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) NOT NULL,
      `email` varchar(255) NOT NULL,
      `address` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
     ) $charset_collate";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($sql);
  }

  // Delete DB table upon deactivation
  function custom_plugin_delete_table()
  {
    global $wpdb;

    $wpdb->query("DROP table IF EXISTS wp_custom_plugin");
  }

  register_deactivation_hook(__FILE__, 'custom_plugin_delete_table');
}
