<?php

/**
 * Bootstraps the Theme.
 *
 * @package Binh
 */

namespace BINH_THEME\Inc;

use BINH_THEME\Inc\Traits\Singleton;

class BINH_THEME
{
    use Singleton;

    protected function __construct()
    {

        // load class.
        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /******************
         * action
         */
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text'          => ['site-title', 'site-description'],
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
        ]);
        add_theme_support('custom-background', [
            'default-color' => '#f3f3f3',
            'default-image' => '',
        ]);
        add_theme_support('post-thumbnails', []);
    }
}
