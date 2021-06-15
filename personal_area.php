<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/personal_area.css">
    <title>Personal area</title>
</head>
<body>

    <header>
        <?php require("Assets/snippets/header.php");?>
    </header>

    <div class="account_information">
        <div class="account_information_left_block">
            <img src="Assets/images/account_icon.svg" alt="" class="icon_account">
            <div class="name_of_account">
                Elephant221 <br> <span id="number_of_id"> id: 89217398</span>
            </div>
        </div>
        <div class="account_information_right_block">
            <div class="account_balance">
                <div class="account_text">Баланс</div>
                <div class="account_balance_color_block">
                    1381 руб.
                </div>
                <div class="replenish_balance_of_account_text">пополнить</div>
            </div>
        </div>
    </div>

    <div class="courses_studied">
        <div class="courses_studied_text">
            Изучаемые курсы:
        </div>
        <div class="courses_studied_block">
            <div class="basics_text">Основы</div>
            <ul>
                <li>Пройдено: 2 темы </li>
                <li>Осталось: 34 темы</li>
            </ul>
            <div class="time_in_course_text">Время на курсе: 2 часа</div>
            <img src="Assets/images/progress_bar.svg" alt="" class="progress_bar">
        </div>
    </div>

    <div class="payment">
        <div class="payment_method">
            <div class="payment_method_text">Способ оплаты:</div>
            <div class="payment_img">
                <img src="Assets/images/google_wallet.svg" alt="" width="150px">
                <img src="Assets/images/arrow_right.svg" alt="" class="arrow_right">
            </div>
        </div>
        <div class="payment_setup">
            <div class="payment_setup_text">Настройки оплаты:</div>
            <div class="payment_img">
                <img src="Assets/images/instruments.svg" alt="" width="140px">
                <img src="Assets/images/arrow_right.svg" alt="" class="arrow_right">
            </div>
        </div>
    </div>
    
    <!-- ------------------------------------footer------------------------------------ -->
    <?php require("Assets/snippets/footer.html"); ?>
</body>
</html>