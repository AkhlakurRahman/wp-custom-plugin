<?php

if (!defined('ABSPATH')) {
  exit;
}

function custom_plugin_load_scripts()
{
  wp_enqueue_style('custom_plugin', PLUGIN_DIR_URL . 'custom-plugin/includes/assets/css/styles.css', [], null, 'screen');

  wp_enqueue_script('custom_plugin', PLUGIN_DIR_URL . 'custom-plugin/includes/assets/js/scripts.js', [], null, true);
}

add_action('admin_enqueue_scripts', 'custom_plugin_load_scripts');
