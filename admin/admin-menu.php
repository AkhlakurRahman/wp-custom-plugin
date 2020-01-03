<?php

if (!defined('ABSPATH')) {
  exit;
}

function custom_plugin_callable_admin_menu()
{
  echo 'Custom Plugin';
}

function custom_plugin_callable_admin_sub_menu()
{
  echo 'Custom Sub Menu';
}

function custom_plugin_admin_menu()
{
  add_menu_page('Custom Plugin', 'Custom Plugin', 'manage_options', 'custom_plugin', 'custom_plugin_callable_admin_menu', 'dashicons-shield-alt');

  add_submenu_page('custom_plugin', 'Custom Sub Menu', 'Custom Sub Menu', 'manage_options', 'custom_sub_menu', 'custom_plugin_callable_admin_sub_menu');
}

add_action('admin_menu', 'custom_plugin_admin_menu');
