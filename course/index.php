<?php include '../Assets/php/sessionStart.php'; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/Assets/css/style.css">
    <link rel="stylesheet" href="/Assets/css/courses.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Курс</title>
</head>
<body>
    <script type="text/javascript">
        let placeholder;
        const img = document.createElement("img");
    </script>
    <div id="courseModal" class="modal">
        <nav id="courseNav" class="animateMoving">
            <h2 style="margin: 5px 5px">Курс по основам Blender</h2>
            <?php include('../Assets/php/courseGenerator.php');
            echo generateListOfSlides(1);?>
        </nav>
    </div>
    <?php require('../Assets/snippets/header.php'); ?>
    <section class="slideContainer">
        <script type="text/javascript" src="/Assets/js/slideSwitcher.js"></script>
        <script type="text/javascript">
        <?php
            if(!isset($_GET['courseId']) or !isset($_GET['slideId'])) {
                echo 'updateAndReplace(1, 1);';
            }
            else {
                echo 'updateAndReplace(' . $_GET['courseId']. ', ' . $_GET['slideId'] . ');';
            }
        ?>
        </script>
    </section>

    <?php require('../Assets/snippets/footer.php'); ?>
</body>
</html>