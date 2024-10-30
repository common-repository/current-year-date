<?php

/**
 * Includes dates shortocdes
 * Plugin: shortcodes for the current year, month and day
 * Since: 0.1
 * Author: Mebratu Kumera
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Create Year shortcode to replace with current year.
if (!function_exists('cyds_year')) {
    function cyds_year()
    {
        $year = gmdate('Y');
        return esc_html($year);
    }
}
add_shortcode('cyds_Year', 'cyds_year');

// Create year shortcode with short format to replace with current year.
if (!function_exists('cyds_year_short')) {
    function cyds_year_short()
    {
        $short = gmdate('y');
        return esc_html($short);
    }
}
add_shortcode('cyds_year', 'cyds_year_short');

// Create month shortcode to replace with current month.
if (!function_exists('cyds_month')) {
    function cyds_month()
    {
        $month = gmdate('m');
        return esc_html($month);
    }
}
add_shortcode('cyds_Month', 'cyds_month');

// Create month shortcode with short format to replace with current month.
if (!function_exists('cyds_month_short')) {
    function cyds_month_short()
    {
        $short = gmdate('n');
        return esc_html($short);
    }
}
add_shortcode('cyds_month', 'cyds_month_short');

// Create long month textual shortcode to replace with current month textual.
if (!function_exists('cyds_month_textual')) {
    function cyds_month_textual()
    {
        $month = gmdate('F');
        return esc_html($month);
    }
}
add_shortcode('cyds_month_textual', 'cyds_month_textual');

// Create short month textual shortcode to replace with current month textual short.
if (!function_exists('cyds_month_textual_short')) {
    function cyds_month_textual_short()
    {
        $short = gmdate('M');
        return esc_html($short);
    }
}
add_shortcode('cyds_month_textual_short', 'cyds_month_textual_short');

// Create day numeric shortcode to replace with current day.
if (!function_exists('cyds_day')) {
    function cyds_day()
    {
        $day = gmdate('d');
        return esc_html($day);
    }
}
add_shortcode('cyds_Day', 'cyds_day');

// Create day numeric shortcode with short format to replace with current day.
if (!function_exists('cyds_day_short')) {
    function cyds_day_short()
    {
        $short = gmdate('j');
        return esc_html($short);
    }
}
add_shortcode('cyds_day', 'cyds_day_short');

// Create day textual shortcode to replace with current day textual.
if (!function_exists('cyds_day_textual')) {
    function cyds_day_textual()
    {
        $day = gmdate('l');
        return esc_html($day);
    }
}
add_shortcode('cyds_day_textual', 'cyds_day_textual');

// Create day textual shortcode with short format to replace with current day textual.
if (!function_exists('cyds_day_textual_short')) {
    function cyds_day_textual_short()
    {
        $short = gmdate('D');
        return esc_html($short);
    }
}
add_shortcode('cyds_day_textual_short', 'cyds_day_textual_short');

// Create shortcodes for dynamic date values
if (!function_exists('cyds_date_shortcode')) {
    function cyds_date_shortcode($atts)
    {
        $atts = shortcode_atts(array(
            'format' => 'Y-m-d', // Default format
        ), $atts, 'current_date');

        // Validate the format attribute
        $valid_formats = ['Y-m-d', 'm/d/Y', 'd/m/Y'];
        if (!in_array($atts['format'], $valid_formats)) {
            $atts['format'] = 'Y-m-d';
        }

        $current_date = gmdate($atts['format']);

        return esc_html($current_date);
    }
}
add_shortcode('cyds_current_date', 'cyds_date_shortcode');

// Create shortcodes for dynamic time values
if (!function_exists('cyds_time_shortcode')) {
    function cyds_create_time_shortcodes($atts)
    {?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    
                let current_time = document.getElementById('current_time');
                let date = new Date().toTimeString().split(" ")[0];
                current_time.innerHTML = date;
                let set = setInterval(function() {
                    let now = new Date().toTimeString().split(" ")[0];
                    current_time.innerText = now;
                }, 1000);
            });
        </script>
        <?php 
        $color = isset($atts['color']) ? $atts['color'] : '#000';
        $time = '<span id="current_time" style="color:' . $color . '"></span>';
        return $time;
    }
}
add_shortcode('cyds_time', 'cyds_create_time_shortcodes');
?>