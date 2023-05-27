<?php
    $page_id = 5;
    $page_greeting = get_field("top_text",$page_id);
    $title = get_field("title",$page_id);
    $description = get_field("description",$page_id);
    $button_1 = get_field("button_1",$page_id);
    $button_2 = get_field("button_2",$page_id);
    $banner = get_field("image",$page_id);
?>

<section class="banner">
    <div class="banner__text-content">
        <h6 class="greeting"><? echo $page_greeting; ?></h6>
        <h1><? echo $title; ?></h1>
        <h4><? echo $description; ?></h4>
        <button><? echo $button_1["text"] ?></button>
        <button><? echo $button_2["text"] ?></button>
    </div>
    <div class="banner__image">
        <img src="<? echo $banner; ?>" />
    </div>
</section>