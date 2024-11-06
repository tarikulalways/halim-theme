<?php 
    // tgm link
    require(get_template_directory(). '/tgm/active-plugin.php');

    // demo data import
    require(get_template_directory(). '/demo-data/ocdi-demo.php');
    // halim theme setup

    if(!function_exists('halim_setup_theme')){
        function halim_setup_theme(){
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');
            add_theme_support('custom-background');
            add_theme_support('custom-color');
            add_theme_support('automatic-feed-links');
            add_theme_support("wp-block-styles");
            add_theme_support("responsive-embeds");
            add_theme_support('html5', array(
                'comment-list',
                'comment-form',
                'search-form',
                'gallery',
                'caption'
            ));
            add_theme_support("custom-logo");
            add_theme_support("custom-header");
            add_theme_support("align-wide");

            load_theme_textdomain('halim', 'language');

            // register name menus
            register_nav_menus(array(
                'primary-menu' => __('Header Menu', 'halim'),
            ));
        }
    }
    add_action('after_setup_theme', 'halim_setup_theme');

    // css & js enqueue
    require_once(get_template_directory(). '/css-js-link/css-js.php');

    // theme option
    require_once(get_template_directory(). '/theme-options/theme-option.php');

    

    // register widget 
    
    if(!function_exists('halim_widget')){
        function halim_widget(){
            // footer widget 1
            register_sidebar(array(
                'name' => esc_html__('Footer 1', 'halim'),
                'id' => 'footer_1',
                'before_widget' => '<div class="single-footer">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));

            // footer widget 2
            register_sidebar(array(
                'name' => esc_html__('Footer 2', 'halim'),
                'id' => 'footer_2',
                'before_widget' => '<div class="single-footer">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));

            // sidebar 1
            register_sidebar(array(
                'name' => esc_html__('Sidebar', 'halim'),
                'id' => 'sidebar',
                'before_widget' => '<div class="single-sidebar">',
                'after_widget' => '</div>',
                'before_title' => '<h4>',
                'after_title' => '</h4>'
            ));
        }
    }
    add_action('widgets_init', 'halim_widget');

    // codester framework import
    function halim_codester_importer( $demo_active_import, $demo_directory_path ) {
        $settings_file = $demo_directory_path . 'path/to/your/codestar-settings.json';
        
        if ( file_exists( $settings_file ) ) {
            $options = json_decode( file_get_contents( $settings_file ), true );
            foreach ( $options as $key => $value ) {
                update_option( $key, $value );
            }
        }
    }
    add_action( 'pt-ocdi/after_import', 'halim_codester_importer', 10, 2 );
    
    
