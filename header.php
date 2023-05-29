<?php

/**
 *The Header.
 *
 * This is the template that displays the <head> section
 *
 * @package Wordpress
 * @subpackage Neufluence
 */

 $current_url = basename(get_permalink());
 $bg_style = str_contains($current_url,"local") ? 'home' : $current_url;
?>
<!DOCTYPE html>
<html lang="en" class="html">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?  wp_title(""); ?> - Neufluence</title>
    <meta name="description" content="Grow your business with Neufluence in untapped markets"  />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Sen:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="site-background-image <? echo $bg_style; ?>" ></div>
    <header>
        <?php the_custom_logo(); ?>
        <nav class="site_nav">
            <div class="button_group">
            <button id="open_menu">
                <svg class="tcb-icon" viewBox="0 0 24 24" data-name="align-justify"><g><g><path class="st0" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path></g><g><path class="st0" d="M23,6.7H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6.7,23,6.7z"></path></g><g><path class="st0" d="M23,19.3H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,19.3,23,19.3z"></path></g></g></svg>
            </button>
            <button id="close_menu">
                <svg class="tcb-icon" viewBox="0 0 24 24" data-name="close"><path class="st0" d="M13.4,12l7.1-7.1c0.4-0.4,0.4-1,0-1.4s-1-0.4-1.4,0L12,10.6L4.9,3.5c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l7.1,7.1 l-7.1,7.1c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0l7.1-7.1l7.1,7.1c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L13.4,12z"></path></svg>
            </button>
            </div>
            <div class="menu_list_group">
            <?php wp_nav_menu(); ?>
                <div class="link_group">
                    <a class="btn outline">Log in</a>
                    <a class="btn gradient">Access Beta</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="main">