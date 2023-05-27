<?php

/**
 *The Header.
 *
 * This is the template that displays the <head> section
 *
 * @package Wordpress
 * @subpackage Neufluence
 */

?>
<!DOCTYPE html>
<html lang="en" class="html">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Neufluence</title>
    <meta name="description" content="Grow your business with Neufluence in untapped markets"  />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="site-background-image" ></div>
    <header>
        <?php the_custom_logo(); ?>
        <nav class="site_nav">
            <?php wp_nav_menu(); ?>
            <div class="link_group">
                <a class="btn outline">Log in</a>
                <a class="btn gradient">Access Beta</a>
            </div>
        </nav>
    </header>
    <main class="main">