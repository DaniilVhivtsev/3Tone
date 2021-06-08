<?php

function generateSlide($courseId, $slideId): string {
    $database = null;
    include('../Assets/php/database.php');
    $result = "";

    if ($courseId != 1) {
        $courseId = 1;
    }
    if ($slideId < 1 or $slideId > 41) {
        $slideId = 1;
    }

    $slide = $database->
        query("SELECT * FROM Slides where courseId='$courseId' and slideId='$slideId'")->
        fetch_array();

    $result .= '<section class="slideContainer">';
    if (is_array($slide)) {
        $result .= '<div class="slideContent">'
            . '<h1 class="title">' . $slide['slideTitle'] . "</h1>";

        if ($slide['type'] === 'exercise') {
            $result .= '<div id="placeholder"></div>';
        }
        $result .= $slide['mainBodyContent']
            . "<div class='courseDescription'>" . $slide['mainBodyDescription'] . "</div>"
            . "</div>";
    } else {
        $result .= "Wrong slide or course";
    }
    $result .= "</section>";

    return $result;
}

function generateListOfSlides($courseId){
    $result = '';
    include('../Assets/php/database.php');

    for ($i = 1; $i < 42; $i++) {
        $title = $database->query("SELECT `slideTitle` FROM `Slides` WHERE courseId='$courseId' AND slideId='$i'")
            ->fetch_array()[0];
        $result .= "<a href='/course/?courseId=" . $courseId ."&slideId=" . $i ."'>" . $title ."</a>";
    }

    return $result;
}