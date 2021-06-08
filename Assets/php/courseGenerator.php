<?php

function generateSlide($courseId, $slideId): string {
    $database = null;
    include($_SERVER['DOCUMENT_ROOT'] . '/Assets/php/database.php');
    $result = "";

    if ($courseId != 1 or !isset($courseId)) {
        $courseId = 1;
    }
    if ($slideId < 1 or $slideId > 41 or !isset($slideId)) {
        $slideId = 1;
    }

    $slide = $database->
        query("SELECT * FROM Slides where courseId='$courseId' and slideId='$slideId'")->
        fetch_array();

    if (is_array($slide)) {
        $result .= '<div class="slideContent">'
            . '<h1 class="title">' . $slide['slideTitle'] . "</h1>"
            . '<div id="placeholder"></div>' . $slide['mainBodyContent']
            . "<div class='courseDescription'>" . $slide['mainBodyDescription'] . "</div>"
            . "</div>";
    } else {
        $result .= "Wrong slide or course";
    }

    return $result;
}

function generateListOfSlides($courseId){
    $result = '';
    include('../Assets/php/database.php');

    for ($i = 1; $i < 42; $i++) {
        $title = $database->query("SELECT `slideTitle` FROM `Slides` WHERE courseId='$courseId' AND slideId='$i'")
            ->fetch_array()[0];
        $result .= "<a onclick='updateCoursePage(" . $courseId .", " . $i .")'>" . $title ."</a>";
    }

    return $result;
}