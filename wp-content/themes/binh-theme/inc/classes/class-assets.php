<?php
/**
 * Enqueue theme assets
 * 
 * @package Binh
 */

 namespace Binh_Theme\Inc;
 use BINH_THEME\Inc\Traits\Singleton;

 class Assets {
    use Singleton;

    protected function __construct() {
        
		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// actions 
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_script']);

        // Filters
	}

    public function register_styles() {
        // Register style file
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( BINH_DIR_PATH . '/style.css' ), 'all' );
        wp_register_style('bootstrap-css', BINH_DIR_URI . '/assets/src/lib/css/css/bootstrap.min.css', [], false, 'all' );

        // Enqueue style file
        wp_enqueue_style('style-css'); 
        wp_enqueue_style('bootstrap-css'); 
    }
    public function register_script() {
        // Register script file
        wp_register_script('main-js', BINH_DIR_URI . '/assets/js/main.js', [], filemtime( BINH_DIR_PATH . '/assets/js/main.js' ), true);
        wp_register_script('bootstrap-js', BINH_DIR_URI . '/assets/src/lib/css/js/bootstrap.min.js', ['jquery'], false, true);
        
        // Enqueue script file
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
 }