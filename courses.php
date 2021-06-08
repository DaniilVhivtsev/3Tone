<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/style_courses.css">
    <title>Courses</title>
</head>
<body>
      <!-- ------------------------------------header------------------------------------ -->

    <?php require("Assets/snippets/header.php");?>

    <!-- ------------------------------------welcome_block------------------------------------ -->
    
    <div class="introBackGroundColor">
        <div class="intro">
            <div class="welcome_block">
              <div class="welcome_angle">
                <img src="Assets/images/courses_page/Vector.svg" alt="">
              </div>

              <div class="welcome_head">
                Добро пожаловать во вкладку <span class="orange_color_text">Курсы</span>
              </div>

              <div class="welcome_text">
                Здесь ты можешь выбрать любой походходящий курс
              </div>

              <div class="welcome_cube">
                <img src="Assets/images/courses_page/cube.svg" alt="">
              </div>
            </div>
        </div>
    </div>

    <!-- ------------------------------------blok_for_teksure------------------------------------ -->

    <div class="blok_for_teksure">
<!--       
      <div class="drawing_vectors">
      </div>
     -->
      <div class="head_of_beginning">
        <div class="line_block">
          <div class="line">
            <a href="#" class="btn_line_block">Начни с простого!</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ------------------------------------container_courses------------------------------------ -->

    <div class="container_courses">
      <div class="direction_of_course_left">
        <div class="course_basics">

          <div class="text_of_course">

            <div class="tittle_of_course">

              <div class="first_tittle">
              Основы
              </div>
              
              <div class="second_tittle">
                Курс для новичков 
              </div>

            </div>

            <div class="description_of_course">
              *описание курса
            </div>

          </div>

          <div class="courese_content">
            <div class="photo_course_content">
              <img src="Assets/images/courses_page/image_5.svg" class="photo_course" alt="">
              <img src="Assets/images/courses_page/image_6.svg" class="photo_course" alt="">
            </div>
            <div >
              <a href="/course" class="button_to_start">Начать</a>
            </div>
          </div>
        </div>
      </div>

      <div class="direction_of_course_right">
        <div class="course_advanced">

          <div class="text_of_course">

            <div class="tittle_of_course">

              <div class="first_tittle">
                Продвинутый уровень
              </div>
              
              <div class="second_tittle">
                Курс для пользователей с опытом 
              </div>

            </div>

            <div class="description_of_course">
              *описание курса
            </div>

          </div>

          <div class="courese_content">
            <div class="photo_course_content">
              <!-- <img src="Assets/images/courses_page/image_5.svg" class="photo_course" alt="">
              <img src="Assets/images/courses_page/image_6.svg" class="photo_course"alt=""> -->
            </div>
            <div >
              <a href="#" class="button_to_start_advanced">Начать</a>
            </div>
          </div>
        </div>
      </div>

      <div class="direction_of_course_left">
        <div class="course_professional">

          <div class="text_of_course">

            <div class="tittle_of_course">

              <div class="first_tittle">
                Продвинутый уровень
              </div>
              
              <div class="second_tittle">
                Курс для пользователей с опытом 
              </div>

            </div>

            <div class="description_of_course">
              *описание курса
            </div>

          </div>

          <div class="courese_content">
            <div class="photo_course_content">
              <!-- <img src="Assets/images/courses_page/image_5.svg" class="photo_course" alt="">
              <img src="Assets/images/courses_page/image_6.svg" class="photo_course"alt=""> -->
            </div>
            <div >
              <a href="#" class="button_to_start_professional">Начать</a>
            </div>
          </div>
        </div>
      </div>

      <div class="offer_courses">
        <a href="#" style="text-decoration: none">
          <div class="offer_blocks">

            <div class="offer_img_cube">
              <img src="Assets/images/cube_black.svg" style="width: 30px;" alt="">
            </div>

            <div class="offer_first_text">
              Предлагай свои курсы
            </div>

            <div class="offer_second_text">
              пиши нам на почту: digitail@gmail.com
            </div>

        </div>
        </a>
      </div>
    </div>

    <!-- ------------------------------------footer------------------------------------ -->

    <?php require("Assets/snippets/footer.html"); ?>
    
</body>
</html>