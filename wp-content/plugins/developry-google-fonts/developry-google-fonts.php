<?php
/*
  Plugin Name:  WebFonts Loader
  Plugin URI:   https://developry.com/webfonts-loader
  Description:  Load the 20 most popular Google Fonts within your WordPress.
  Version:      1.1.1
  Author:       Krasen Slavov @ Developry
  Author URI:   https://krasenslavov.com
  License:      GNU General Public License, version 2
  License URI:  https://www.gnu.org/licenses/gpl-2.0.html
  Text Domain:  developry-google-fonts

  Copyright 2018 - 2021 Developry (email: hello@developry.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

namespace DevelopryGoogleFonts;

defined('ABSPATH') || exit;

define('DevelopryGoogleFonts\UUID', 'dgf');
define('DevelopryGoogleFonts\NAME', 'WebFonts Loader');
define('DevelopryGoogleFonts\SLUG', 'developry-google-fonts');
define('DevelopryGoogleFonts\TEXT_DOMAIN', 'developry-google-fonts');
define('DevelopryGoogleFonts\DOC_PAGE', 'https://developry.com/webfonts-loader');
define('DevelopryGoogleFonts\VERSION', '1.1.1');
define('DevelopryGoogleFonts\MIN_PHP_VERSION', '7.2');
define('DevelopryGoogleFonts\MIN_WP_VERSION', '5.0');
define('DevelopryGoogleFonts\FILE',  __FILE__);
define('DevelopryGoogleFonts\DIR_PATH', plugin_dir_path(__FILE__));
define('DevelopryGoogleFonts\BASENAME', plugin_basename(__FILE__));
define('DevelopryGoogleFonts\URL',  plugins_url('/', __FILE__));


require_once DIR_PATH . 'inc/config.php';
require_once DIR_PATH . 'inc/settings.php';
require_once DIR_PATH . 'inc/load-admin-fonts.php';
require_once DIR_PATH . 'inc/load-frontend-fonts.php';
