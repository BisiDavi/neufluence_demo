<?php
    $page_id = $args["page_id"];
    $banner_class = $args["class"];
    $page_greeting = get_field("top_text",$page_id);
    $title = get_field("title",$page_id);
    $description = get_field("description",$page_id);
    $button_1 = get_field("button_1",$page_id);
    $button_2 = get_field("button_2",$page_id);
    $banner = get_field("image",$page_id);
?>

<section id="banner" class="banner <? echo $banner_class; ?>">
    <div class="banner__text-content">
        <? if($page_greeting){ ?>
            <h6 class="greeting"><? echo $page_greeting; ?></h6>
        <? } ?>

        <div class="title"><? echo $title; ?></div>
        <h4><? echo $description; ?></h4>
        <div class="link_group">
        <? if($button_1['text']){ ?>
            <a class="btn gradient"><? echo $button_1["text"] ?></a> 
        <? } ?>
        <? if($button_2['text']){ ?>
            <a class="btn purple"><? echo $button_2["text"] ?></a>
         <? } ?>
        </div>
    </div>
    <div class="banner__image">
        <img src="<? echo $banner; ?>" />
    </div>
</section>