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

    /* 3.0 SET UP THEME DEFAULT AND REGISTER VARIOUS SUPPORTED FEATURES. */
    if ( !function_exists( 'nestlaptops_setup' ) ) {
        function nestlaptops_setup() {
            // make the theme available for translation.
            $lang_dir = THEMEROOT . '/assets/languages';
            load_theme_textdomain( 'nestlaptops', $lang_dir );

            // add support for automatic feed links.
            add_theme_support( 'automatic-feed-links' );

            // add support for post thumbnails and featured images.
            add_theme_support( 'post-thumbnails' );

            // add support for post formats.
            add_theme_support( 'post-formats', [
                'image','video','quote','gallery','audio',
            ] );

            // register navigation menus.
            register_nav_menus([
                'top-menu' => __( 'Top Navigation', 'nestlaptops') , 
                'footer-menu' => __( 'Footer Navigation', 'nestlaptops')
            ]);

        }
        add_action( 'after_setup_theme', 'nestlaptops_setup' );
    }

    /* 4.0 DISPLAY META INFORMATION FOR A SPECIFIC POST. */
    if ( !function_exists( 'nestlaptops_post_meta' ) ) {
        function nestlaptops_post_meta() {
               echo '<div class="large-post-meta">';
            
            // Sticky Post
            if ( is_sticky() ) {
                echo '<span><i class="fa fa-sticky-note-o"></i> ' . esc_html__( 'Sticky', 'nestlaptops' ) . '</span>';
                echo '<small class="hidden-xs">&#124;</small>';
            }
                       
            // get the date 
            echo '<span><i class="fa fa-clock-o"></i> ' . esc_html( get_the_date() ) . '</span>';
            echo '<small class="hidden-xs">&#124;</small>';

            // get the author
             printf(
                '<span><i class="fa fa-user"></i> <a href="%1$s">%2$s</a></span>',
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                esc_html( get_the_author() )
            );
            echo '<small class="hidden-xs">&#124;</small>';

            // Tags 
            $tag_list = get_the_tag_list( '', ', ' );
            if ( $tag_list ) {
                echo '<span><i class="fa fa-tags"></i> ' . wp_kses_post( $tag_list ) . '</span>';
                echo '<small class="hidden-xs">&#124;</small>';
            }

            // Comments
             if ( comments_open() ) {
                echo '<span class="hidden-xs"><i class="fa fa-comments-o"></i> ';
                comments_popup_link( 
                    __( 'No comment', 'nestlaptops' ), 
                    __( 'One comment', 'nestlaptops' ), 
                    __( 'View all % comments', 'nestlaptops' ) 
                );
                echo '</span>';
                echo '<small class="hidden-xs">&#124;</small>';
            }

            // Edit links
             if ( is_user_logged_in() ) {
                echo '<span><i class="fa fa-pencil"></i> ';
                edit_post_link( esc_html__( 'Edit Laptop', 'nestlaptops' ) );
                echo '</span>';
            }
            echo '</div>';
        }

            }
?>