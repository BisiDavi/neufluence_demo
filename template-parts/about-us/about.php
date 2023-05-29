<?
    $page_id = 7;
    $title = get_field('about_title',$page_id);
    $description = get_field('text',$page_id);
    $missionTitle = get_field('mission_title',$page_id);
    $mission = get_field('mission',$page_id);
?>

<section class="about_us_text">
    <div class="icon">
        <svg class="tcb-icon" viewBox="0 0 512 512" data-id="icon-dot-circle-solid" ><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>
    </div>
        <div class="row who_we_are">
            <h1><? echo $title; ?></h1>
            <div><? echo $description ?></div>
        </div>
        <div class="row mission">
            <h1><? echo $missionTitle; ?></h1>
            <div><? echo $mission ?></div>
        </div>
</section>