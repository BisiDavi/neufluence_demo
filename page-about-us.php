<?php

/**
 *
 * @package Wordpress
 * @subpackage Neufluence Theme
 */

get_header();

get_template_part('template-parts/home/hero-banner', 'hero-banner', array(
    "page_id" => 7,
    "class" => 'about_us'
));
?>
