<?php

// Exit if uninstall constant is not defined
if (!defined('WP_UNINSTALL_PLUGIN')) {
  exit;
}

// Delete MyPlugin options
global $wpdb;

$wpdb->query("DROP table IF EXISTS wp_custom_plugin");
