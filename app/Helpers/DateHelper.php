<?php

if (!function_exists('format_date')) {
    /**
     * Format date safely, return default if null
     *
     * @param mixed $date
     * @param string $format
     * @param string $default
     * @return string
     */
    function format_date($date, $format = 'd M Y', $default = '-')
    {
        if (is_null($date)) {
            return $default;
        }
        
        if (is_string($date)) {
            $date = \Carbon\Carbon::parse($date);
        }
        
        return $date->format($format);
    }
}

if (!function_exists('format_datetime')) {
    /**
     * Format datetime safely, return default if null
     *
     * @param mixed $datetime
     * @param string $format
     * @param string $default
     * @return string
     */
    function format_datetime($datetime, $format = 'd M Y H:i', $default = '-')
    {
        return format_date($datetime, $format, $default);
    }
}