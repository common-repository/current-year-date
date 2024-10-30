<?php

/**
 * Includes shortocdes of symbols
 * Plugin: shortcodes for the current year, month and day
 * Since: 0.1
 * Author: Mebratu Kumera
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * 
 * Retrieve ® symbol
 * 
 */
if (!function_exists('cyds_registered_trademark')) {
  function cyds_registered_trademark()
  {
    return '®';
  }
}
add_shortcode('cyds_registered_trademark', 'cyds_registered_trademark');

/**
 * 
 * Retrieve ™ symbol
 * 
 */
if (!function_exists('cyds_trademark')) {
  function cyds_servicemark()
  {
    return '™';
  }
}
add_shortcode('cyds_trademark', 'cyds_trademark');

/**
 * 
 * Retrieve ℠ symbol
 * 
 */
if (!function_exists('cyds_servicemark_trademark')) {
  function cyds_servicemark_trademark()
  {
    return '℠';
  }
}
add_shortcode('cyds_servicemark_trademark', 'cyds_servicemark_trademark');
