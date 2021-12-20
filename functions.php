<?php 

if (!function_exists('my_theme_setup')):

    function my_theme_setup() {
        
        // añadimos title de forma automática
        add_theme_support('title-tag');
    }

endif;
add_action('after_setup_theme', 'my_theme_setup');