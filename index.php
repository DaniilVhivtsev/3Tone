<?php include 'Assets/php/sessionStart.php'; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>3Tone</title>
  </head>
  <body>

  <?php require("Assets/snippets/header.php");?>

  <div class="introBackGroundColor">
    <div class="intro">
      <div class="container">
        <div class="intro_inner">
          <h1 class="intro_tittle">Курсы по 3-d моделированию для Тебя</h1>
          <h2 class="intro_post_tittle">Запишись уже сейчас !</h2>

          <a class="btn" href="#">Хочу!</a>
        </div>
      </div>
    </div>
  </div>

  <div class="ad">
      <div class="ad_text_with_img">
        <div class="ad_img"><img src="Assets/images/cube.svg" alt=""></div>
        <div class="ad_text">Попробуй наш входной курс - <span class="color_word">3990</span> за 12 уроков!</div>
      </div>
      <div class="tekstura"></div>
  </div>

  <div class="news">
    <div class="news_block">

      <div class="text_logo">3Tone</div>

      <div class="news_content">
        <div class="news_text_with_img">

          <img src="Assets/images/image1.svg" alt="" class="img_blender_particle">

          <div class="text_news">
            <ul>
              <li>Изучай много нового с помощью простых и понятных видеоуроков</li>
              <li class="news_li">Задавай вопросы в чате</li>
              <li>Обсуждай актуальные темы с пользователями</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="logo_cube">
        <img src="Assets/images/cube_black.svg" alt="" class="logo_cube12">
      </div>
    </div>

    <div class="news_block">

      <div class="new_text_logo">
        <div class="text_logo" >3Tone</div>
      </div>

      <div class="news_content">
        <div class="news_text_with_img">

          <div class="text_news_2">
            <ul>
              <li>Участвуйте в ежемесячных ивентах</li>
              <li class="news_li">Делитесь своими успехами</li>
              <li>Развивайтесь вместе с нами</li>
            </ul>
          </div>

          <img src="Assets/images/image2.svg" alt="" class="img_blender_particle_2">
        </div>
      </div>

      <div class="logo_cube">
        <img src="Assets/images/cube_black.svg" alt="" class="logo_cube12">
      </div>
    </div>
  </div>

  <div class="why_3Tone">
    <div class="why_3Tone_text">
      Почему 3Tone ?
    </div>

    <div class="why_3Tone_block_content">
      <div class="row_content_why_3Tone">

        <div class="column_content_why_3Tone">
          <img src="Assets/images/book_with_brain.svg" class = "why_3Tone_block_content_img" alt="">
          <div class="why_3Tone_block_content_text">Только нужное</div>
        </div>

        <div class="column_content_why_3Tone">
          <img src="Assets/images/hand.svg" class = "why_3Tone_block_content_img" alt="">
          <div class="why_3Tone_block_content_text">Много практики</div>
        </div>

        <div class="column_content_why_3Tone">
          <img src="Assets/images/hand_with_tablets.svg" class = "why_3Tone_block_content_img" alt="">
          <div class="why_3Tone_block_content_text">Доступные цены</div>
        </div>

      </div>
    </div>
  </div>

  <div class="block_sign_up">
    <div class="first_step_text">
      Сначала нужно зарегестрировать твой аккаунт
    </div>
    <div class="sign_up_logo">
      <img src="Assets/images/sign_in_logo.svg" class="sign_up_logo_img" alt="">
    </div>
    <div class="line_block">
      <div class="line">
        <a href="#" class="btn_line_block">Начать Обучение</a>
      </div>
    </div>
  </div>

  <?php require("Assets/snippets/footer.html"); ?>

  </body>
</html>
