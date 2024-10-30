<?php

/**
 * Includes shortocdes of copyright
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
 * Retrieve © symbol
 * 
 */
if (!function_exists('cyds_copy')) {

    function cyds_copy()
    {
        return '©';
    }
}
add_shortcode('cyds_c', 'cyds_copy');

/**
 * 
 * Retrieve Copyright text
 * 
 */
if (!function_exists('cyds_copylong')) {
    function cyds_copylong()
    {
        return 'Copyright';
    }
}
add_shortcode('cyds_cc', 'cyds_copylong');
