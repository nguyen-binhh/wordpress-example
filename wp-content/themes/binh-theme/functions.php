<?php

/**
 * Theme Functions.
 * 
 * @package Binh
 */

// echo '<pre>';
// print_r(get_template_directory_uri());
// wp_die();

if (!defined('BINH_DIR_PATH')) {
    define('BINH_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('BINH_DIR_URI')) {
    define('BINH_DIR_URI', untrailingslashit(get_template_directory_URI()));
}
require_once BINH_DIR_PATH . '/inc/helpers/autoloader.php';

function binh_get_theme_instance()
{
    \BINH_THEME\Inc\BINH_THEME::get_instance();
};
binh_get_theme_instance();
// function binh_enqueue_scripts() {}
// add_action( 'wp_enqueue_scripts', 'binh_enqueue_scripts' );