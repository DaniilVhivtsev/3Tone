<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>3Tone</title>
  </head>
  <body>

  <header class="header">
    <div class="container">
      <div class="header_inner">

        <div class="left_header">
          <div class="header_logo">
            <img src="Assets/images/logo/logo_white.PNG" class="logoIndex" alt="">
          </div>

          <div onclick="document.getElementById('01').style.display='block'" class="nav_link sign_in">
            Войти<?php echo $_SESSION["Email"] ?>
          </div>
        </div>

        <nav class="nav">
          <a class = "nav_link" href="#">Курсы</a>
          <a class = "nav_link" href="#">Форум</a>
          <a class = "nav_link" href="#">Практики</a>
        </nav>
      </div>
    </div>
  </header>

  <div id="01" class="modal">
    <form class="modal-content animate" action="Assets/php/login.php">
            <span onclick="document.getElementById('01').style.display='none'"
                  class="close" title="Закрыть">&times;</span>
      <div class="container_login">
        <!-- Username -->
        <label for="uname"><b>Имя пользователя</b></label>
        <input type="text" placeholder="Введите имя пользователя" id="uname" required>

        <!-- Password -->
        <label for="psw"><b>Пароль</b></label>
        <input type="password" placeholder="Введите пароль" id="psw" required>

        <!-- Submit Button -->
        <button type="submit">Войти</button>

        <div>
          <label>
            <input type="checkbox" checked="checked" id="remember">
            Запомни меня
          </label>
          <a href="#" class="reg_link">Зарегистрироваться</a>
        </div>
      </div>
    </form>
  </div>

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

  <footer class="footer">
    <div class="footer_block">
      <div class="footer_block_row">
        <div class="footer_block_column">
          <div class="caption">Курсы</div>
          <div class="footer_text">Курс 3-d от GHype</div>
        </div>
        <div class="footer_block_column">
          <div class="caption">О 3Tone</div>
          <div class="footer_text">Инвесторы</div>
          <div class="footer_text">Руководство</div>
          <div class="footer_text">Контактная информация</div>
          <div class="caption">Сервисы</div>
          <div class="footer_text">Онлаин практикум</div>
        </div>
        <div class="footer_block_column">
          <div class="caption">Учетная запись</div>
          <div class="footer_text">Аккаунт 3Tone</div>
          <div class="footer_text">Условия учетной записи</div>
        </div>
        <div class="footer_block_column">
          <div class="caption">Помощь</div>
          <div class="footer_text">Поддержка</div>
          <div class="footer_text">Карта сайта</div>
          <div class="footer_text">Авторы</div>
        </div>
      </div>

      <hr>

      <div class="footer_block_row" style="padding-bottom: 0;">
        <div class="footer_block_column">
          <div class="caption">Условия использования</div>
        </div>
        <div class="footer_block_column">
          <div class="caption">Политика конфиденциальности</div>
        </div>
        <div class="footer_block_column">
          <div class="caption">Юридическая информация</div>
        </div>
        <div class="footer_block_column">
          <div class="caption">Использование cookies</div>
        </div>
      </div>

      <hr>

      <div class="avtor_signature">
        <img src="Assets/images/C.svg" alt="">
        <div style="margin-left: 10px;">3Tone</div>
        <div>,   2021 г.</div>
      </div>
    </div>
  </footer>

  <script>
    // Get the modal
    let modal = document.getElementById('01');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  </body>
</html>
