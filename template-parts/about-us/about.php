<?
    $page_id = 7;
    $title = get_field('about_title',$page_id);
    $description = get_field('text',$page_id);
    $missionTitle = get_field('mission_title',$page_id);
    $mission = get_field('mission',$page_id);
?>

<section class="about_us_text">
        <div class="row who_we_are">
            <h1><? echo $title; ?></h1>
            <div><? echo $description ?></div>
        </div>
        <div class="row mission">
            <h1><? echo $missionTitle; ?></h1>
            <div><? echo $mission ?></div>
        </div>
</section>