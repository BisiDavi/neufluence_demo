
<?php

    function load_css(){
        wp_register_style('main', get_template_directory_uri() . '/assets/css/index.css', array(), false, 'all');
        wp_enqueue_style('main');

        wp_register_style('about-us', get_template_directory_uri() . '/assets/css/about-us.css', array(), false, 'all');
        wp_enqueue_style('about-us');

        wp_register_style('brands', get_template_directory_uri() . '/assets/css/brands.css', array(), false, 'all');
        wp_enqueue_style('brands');

        wp_register_style('banner', get_template_directory_uri() . '/assets/css/banner.css', array(), false, 'all');
        wp_enqueue_style('banner');

        wp_register_style('footer', get_template_directory_uri() . '/assets/css/footer.css', array(), false, 'all');
        wp_enqueue_style('footer');
    }

    add_action('wp_enqueue_scripts', 'load_css');


    function load_js(){
        wp_enqueue_script('nav',  get_template_directory_uri() . '/assets/js/nav.js', array(), false, false);

    }
    add_action('wp_enqueue_scripts', 'load_js');


    add_theme_support('menus');
    add_theme_support('custom-logo');


?>