<?php include 'Assets/php/sessionStart.php'; ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>3Tone</title>
</head>
<body style="background-color: #3942C3">
    <?php require("Assets/snippets/header.php");?>
    <script type="text/javascript" src="/Assets/js/auth.js"></script>

    <div id="registration" style="margin-top: 130px; position:absolute;">
        <h1 class="reg_name">Регистрация</h1>
        <h2 class="reg_state" style="display: none" id="reg_state">Вы зарегистрированы</h2>

        <form method="post" id="reg_form">
            <label for="Last_name">Фамилия</label>
            <input type="text" name="Last_name" id="Last_name" required>

            <label for="First_name">Имя</label>
            <input type="text" name="First_name" id="First_name" required>

            <label for="Email">Электронная Почта</label>
            <input type="email" name="Email" id="Email" required>

            <label for="psw">Пароль</label>
            <input type="password" name="psw" id="password" required>

            <button type="button" class="login" name="reg_user" id="reg_user">Зарегистрироваться</button>
        </form>
    </div>
    <script type="text/javascript">
        if(user.email.toString() !== "") {
            document.getElementById("reg_state").style.display="block";
            document.getElementById("reg_form").style.display="none";
        }
    </script>

</body>
</html>