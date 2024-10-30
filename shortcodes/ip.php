<?php

/**
 * Includes shortocdes of user IP
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
 * Retrieve user IP
 * 
 */
if (!function_exists('cyds_retrieve_ip')) {
    function cyds_retrieve_ip()
    {
        // Define IP variable
        $ip = '';

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = esc_html(filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP));
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = esc_html(filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP));
        } else {
            $ip = esc_html(filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP));
        }
        // Validate IP address
        if ($ip !== false) {
            return apply_filters('cyds_get_ip', $ip);
        }
    }
}

add_shortcode('cyds_show_user_ip', 'cyds_retrieve_ip');
