<?php

namespace DevelopryGoogleFonts;

defined('ABSPATH') || exit;


add_action('admin_menu', function () {
  add_submenu_page(
    'themes.php',
    NAME,
    'WebFonts',
    'manage_options',
    SLUG,
    function () {

      if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
      }

      require_once DIR_PATH . 'inc/views/admin/main-page.php';
    }
  );
});
