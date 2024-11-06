<?php 

    if(!function_exists('halim_childe_style')){
        function halim_childe_style(){
            wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');
        }
    }
    add_action('wp_enqueue_scripts', 'halim_childe_style');

?>