<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/basics_course.css">
    <title>Basics course</title>
</head>
<body>
      <!-- ------------------------------------header------------------------------------ -->

    <header>
    <?php require("Assets/snippets/header.php");?>
    </header>
    

    <!-- ------------------------------------ad_block------------------------------------ -->
    <div class="ad">
      <div class="ad_text_with_img">
        <div class="ad_img"><img src="Assets/images/cube.svg"  width="37" height="auto" alt=""></div>
        <div class="ad_text">Попробуй наш входной курс - <span class="color_word">3990</span> за 12 уроков!</div>
      </div>
      <div class="tekstura"></div>
    </div>

    <div class="block_of_content">
      <div class="left_content">
        <div class="first_block_of_left_content">
          <div class="header_text_of_main_block">
            <div class="basics_text">Основы</div>
            <div class="description_of_basics_text">Курс, с которого может начать любой!</div>
          </div>

          <div class="button_text_of_main_block">
            <a href="#" class="button_to_start">Начать</a>
          </div>
        </div>
        <div class="block_of_left_content">
          <div class="text_in_block_of_left_content">
            *фото-видеокарта
          </div>
        </div>
        <div class="block_of_left_content">
          <div class="text_in_block_of_left_content">
            *описание <br> курса
          </div>
        </div>
        <div class="block_of_left_content">
          <div class="text_in_block_of_left_content">
            *карта курса
          </div>
        </div>
      </div>

      <div class="right_content"></div>
    </div>


    <div class="additional_content">
      <div class="additional_blocks">
        <div class="reviews_block">
          <div class="reviews_text">
            Отзывы на курс
          </div>
        </div>
        <div class="other_courses_content">
          <div class="other_courses_text">
            Другие курсы
          </div>
          <div class="other_courses_blocks">
            <div class="other_courses_blocks_left">
              <div class="other_courses_blocks_left_first"></div>
              <div class="other_courses_blocks_left_second"></div>
            </div>
            <img src="Assets/images/arrow.svg" alt="" class="other_courses_blocks_right">
          </div>
        </div>
      </div>
    </div>

    <!-- ------------------------------------footer------------------------------------ -->

    <?php require("Assets/snippets/footer.html"); ?>
</body>
</html>