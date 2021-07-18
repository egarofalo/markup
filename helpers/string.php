<?php

namespace Codevelopers\Markup\Helpers\String;

/**
 * Remove white spaces (or other type of characters) in the beginning and final of the string.
 */
if (!function_exists('str_trim')) {
    function str_trim($str): ?string
    {
        if (is_string($str)) {
            $str = trim($str);
        }

        return $str;
    }
}

/**
 * Convert a string to lowercase.
 */
if (!function_exists('str_tolower')) {
    function str_tolower($str): ?string
    {
        if (is_string($str)) {
            $str = strtolower($str);
        }

        return $str;
    }
}

/**
 * Capitalize the first character of each word in a string.
 */
if (!function_exists('str_ucwords')) {
    function str_ucwords($str): ?string
    {
        if (is_string($str)) {
            $str = ucwords($str);
        }

        return $str;
    }
}

/**
 * Inserts HTML line breaks before all newlines in a string.
 */
if (!function_exists('str_nl2br')) {
    function str_nl2br($str): ?string
    {
        if (is_string($str)) {
            $str = nl2br($str);
        }

        return $str;
    }
}
