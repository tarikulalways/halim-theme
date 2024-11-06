<?php 

    if(!function_exists('halim_enqueue')){
        function halim_enqueue(){
            wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', '1.0.0', 'all');
            wp_enqueue_style('font', get_template_directory_uri(). '/assets/css/font-awesome.min.css', '1.0.0', 'all');
            wp_enqueue_style('magnific', get_template_directory_uri(). '/assets/css/magnific-popup.css', '1.0.0', 'all');
            wp_enqueue_style('carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css', '1.0.0', 'all');
            wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css', '1.0.0', 'all');
            wp_enqueue_style('responsive', get_template_directory_uri(). '/assets/css/responsive.css', '1.0.0', 'all');
            wp_enqueue_style( 'fa5', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );
            wp_enqueue_style( 'fa5-v4-shims', 'https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css', array(), '5.13.0', 'all' );
            wp_enqueue_style('custom-style', get_stylesheet_uri());

            // js enquue
            wp_enqueue_script('popper', get_template_directory_uri(). '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('carousel', get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('magnific', get_template_directory_uri(). '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('isotope', get_template_directory_uri(). '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('imageloaded', get_template_directory_uri(). '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('counterup', get_template_directory_uri(). '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('waypoint', get_template_directory_uri(). '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true);
            wp_enqueue_script('main', get_template_directory_uri(). '/assets/js/main.js', array('jquery'), '1.0.0', true);
            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
            }
        }
    }
    add_action('wp_enqueue_scripts', 'halim_enqueue');
?>