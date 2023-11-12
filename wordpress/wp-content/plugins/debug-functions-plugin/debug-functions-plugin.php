<?php
/*
Plugin Name: Debug Functions
Description: Custom debug functions for WordPress.
Version: 1.0
*/

if (!function_exists('dump')) {
    function dump($variable) {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
    }
}

if (!function_exists('dd')) {
    function dd($variable) {
        dump($variable);
        die();
    }
}

add_action('after_setup_theme', function() {
    if (!function_exists('dump')) {
        function dump($variable) {
            echo '<pre>';
            var_dump($variable);
            echo '</pre>';
        }
    }

    if (!function_exists('dd')) {
        function dd($variable) {
            dump($variable);
            die();
        }
    }
});
