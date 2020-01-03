<?php

if (!defined('ABSPATH')) {
  exit;
}

function custom_plugin_callable_add_new()
{
  require_once PLUGIN_DIR_PATH . 'includes/views/add-new.php';
}

function custom_plugin_callable_all_pages()
{
  require_once PLUGIN_DIR_PATH . 'includes/views/all-pages.php';
}

function custom_plugin_admin_menu()
{
  add_menu_page('Custom Plugin', 'Custom Plugin', 'manage_options', 'add_new', 'custom_plugin_callable_add_new', 'dashicons-shield-alt');

  add_submenu_page('add_new', 'Add New', 'Add New', 'manage_options', 'add_new', 'custom_plugin_callable_add_new');

  add_submenu_page('add_new', 'All Pages', 'All Pages', 'manage_options', 'all_pages', 'custom_plugin_callable_all_pages');
}

add_action('admin_menu', 'custom_plugin_admin_menu');
