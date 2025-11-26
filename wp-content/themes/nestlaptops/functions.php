<?php 
/*
* functions.php
*/


/* 1.0 DEFINE CONSTANTS */
    define( 'THEMEROOT', get_stylesheet_directory_uri() );
    define( 'STYLES', THEMEROOT . '/assets/css' );
    define( 'SCRIPTS', THEMEROOT . '/assets/js' );
    define( 'IMAGES', THEMEROOT . '/assets/images' );

/* 2.0 LOAD THE CUSTOM SCRIPTS & STYLES */
    if ( !function_exists( 'nestlaptops_scripts' ) ) {
        function nestlaptops_scripts() {
            // Load Stylesheets
            wp_enqueue_style( 'fontawesome', STYLES . '/font-awesome.min.css', null, null, null );
            wp_enqueue_style( 'bootstrap', STYLES . '/bootstrap.css', null, null, null );
            wp_enqueue_style( 'flexslider', STYLES . '/flexslider.css', null, null, null );
            wp_enqueue_style( 'main', STYLES . '/main.css', null, null, null );
            wp_enqueue_style( 'custom', STYLES . '/custom.css', null, null, null );

            // Load Scripts
            wp_enqueue_script( 'bootstrap', SCRIPTS . '/bootstrap.js', ['jquery'], null, true );
            wp_enqueue_script( 'plugins', SCRIPTS . '/plugins.js', ['jquery'], null, true );
            wp_enqueue_script( 'flexslider', SCRIPTS . '/jquery.flexslider.js', ['jquery'], null, true );
      
            // Commented Reply Script
            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }
        }
        add_action( 'wp_enqueue_scripts', 'nestlaptops_scripts' );
    }
?>