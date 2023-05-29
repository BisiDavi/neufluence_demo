<?
    $page_id = 7;
    $title = get_field('title',$page_id);
    $description = get_field('text',$page_id);
    $missionTitle = get_field('mission_title',$page_id);
    $mission = get_field('mission',$page_id);
?>

<section>
        <div class="about_us">
            <h1><? echo $title; ?></h1>
            <p><? echo $description ?></p>
        </div>
        <div class="mission">
            <h1><? echo $missionTitle; ?></h1>
            <p><? echo $mission ?></p>
        </div>
</section>