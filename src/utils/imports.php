<?php
/**
 * Import of function files.
 *
 * @package WordPress
 * @subpackage Woffee
 * @version 1.0
 * @author suminoel
 * @link: https://suminoel.com/woffee/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

/* Admin files.
* ---------------------------------------- */
require_once get_theme_file_path('src/inc/admin/register-settings.php');
require_once get_theme_file_path('src/inc/admin/activation-theme.php');
require_once get_theme_file_path('src/inc/admin/add-admin-menu.php');
require_once get_theme_file_path('src/inc/admin/enqueue-scripts.php');

/* Front files.
* ---------------------------------------- */
require_once get_theme_file_path('src/inc/theme-setup.php');
require_once get_theme_file_path('src/inc/conditional-branch.php');
require_once get_theme_file_path('src/inc/register-widget.php');
require_once get_theme_file_path('src/inc/content-class.php');
require_once get_theme_file_path('src/inc/head-functions.php');
require_once get_theme_file_path('src/inc/header-functions.php');
require_once get_theme_file_path('src/inc/assets.php');
require_once get_theme_file_path('src/inc/breadcrumb.php');
require_once get_theme_file_path('src/inc/pagination.php');

