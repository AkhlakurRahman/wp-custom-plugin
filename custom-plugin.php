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

if (is_admin()) {
  require_once(plugin_dir_path(__FILE__) . 'admin/admin-menu.php');
}
