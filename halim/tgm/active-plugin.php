<?php 
    // tgm link
    require(get_template_directory(). '/tgm/class-tgm-plugin-activation.php');

    if(!function_exists('plugin_activation')){
        function plugin_activation(){

            $plugins = array(
                array(
                    'name' => 'Contact Form 7',
                    'slug' => 'contact-form-7',
                    'required' => true
                ),
                array(
                    'name' => 'Advanced Custom Fields: Font Awesome Field',
                    'slug' => 'advanced-custom-fields-font-awesome',
                    'required' => true
                ),
                array(
                    'name' => 'Codestar Framework',
                    'slug' => 'codestar-framework',
                    'source' => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
                    'required' => true
                ),
                array(
                    'name' => 'Secure Custom Fields',
                    'slug' => 'advanced-custom-fields',
                    'required' => true
                ),
                array(
                    'name' => 'Halim CPT',
                    'slug' => 'halim-cpt',
                    'source' => 'https://github.com/tarikulalways/halim-cpt/archive/refs/heads/main.zip',
                    'required' => true
                ),
                array(
                    'name' => 'One Click Demo Import',
                    'slug' => 'one-click-demo-import',
                    'required' => true
                )
            );

            $config = array(
                'id' => 'tgmpa',
                'has_notices' => true,
                'dismissable' => true
            );

            tgmpa( $plugins, $config);
        }
    }
    add_action('tgmpa_register', 'plugin_activation');
?>