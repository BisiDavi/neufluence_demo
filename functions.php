
<?php

    function load_css(){
        // wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), false, 'all');
        // wp_enqueue_style('swiper');

        wp_register_style('main', get_template_directory_uri() . '/assets/css/index.css', array(), false, 'all');
        wp_enqueue_style('main');
    }

    function load_js(){
        wp_enqueue_script('jquery');

        wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), '1.0.0', true);

        wp_enqueue_script('swiper',  get_template_directory_uri() . '/assets/js/swiper.js', array('swiper-bundle','gsap-js'), '1.0.0', true);

    }

    add_action('wp_enqueue_scripts', 'load_css');

    add_action('wp_enqueue_scripts', 'load_js');


    add_theme_support('menus');
    add_theme_support('custom-logo');


?>