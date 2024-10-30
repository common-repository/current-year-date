<?php

/**
 * Plugin Name:       Current Year Date Shortcode
 * Plugin URI:        https://wordpress.org/plugins/current-year-date/
 * Description:       Add shortcodes for the current year, month and day
 * Version:           0.1
 * Author:            Mebratu Kumera
 * Author URI:        https://www.linkedin.com/in/mebratu-kumera-638149181/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       current-year-date
 */

/*
This program is free software: you can redistribute
 it and/or modify it under the terms of the GNU General 
 Public License as published by the Free Software Foundation,
  either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
See the GNU General Public License for more details.

You should have received a copy of the GNU General
 Public License along with this program. If not,
  see <https://www.gnu.org/licenses/>.
*/


// if accessed directly, exit
if (!defined('ABSPATH')) exit;
define('CYDS_DIR_PATH', plugin_dir_path(__FILE__) . 'shortcodes');

require_once(CYDS_DIR_PATH . '/ip.php');
require_once(CYDS_DIR_PATH . '/current-dates.php');
require_once(CYDS_DIR_PATH . '/symbols.php');
require_once(CYDS_DIR_PATH . '/copyright.php');
?>
