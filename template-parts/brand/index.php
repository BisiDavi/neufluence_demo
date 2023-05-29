<?php

    $page_id = 11;
    $about_us_title = get_field('about_us_title',$page_id);
    $about_us = get_field('about_us',$page_id);
    $about_btn_text = get_field('button_text',$page_id);
    $campaign_title = get_field('campaign_title',$page_id);
    $campaign_description = get_field('campaign_description',$page_id);
    $campaign_image = get_field('campaign_image',$page_id);
    $activate_image = get_field('activate_image',$page_id);
    $activate_text = get_field('activate_text',$page_id);
    $activate_link = get_field('activate_link',$page_id);
?>

<section class="brands_view">
    <div class="about_our_brands">
        <h4 class="title"><? echo $about_us_title; ?></h4>
        <div>
            <? echo $about_us; ?>
        </div>
        <button class="btn gradient"><? echo $about_btn_text; ?></button>
    </div>
    <div class="campaigns">
        <div class="left">
            <h4 class="title"><? echo $campaign_title; ?></h4>
            <div class="description">
                <? echo $campaign_description; ?>
            </div>
        </div>
        <img src="<? echo $campaign_image; ?>"  alt="campaign"/>
    </div>
    <div class="activate">
        <div class="image_view">
            <img src="<? echo $activate_image; ?>" alt="activate" />
        </div>
        <div class="text_view">
            <? echo $activate_text; ?>
        </div>
    </div>
</section>