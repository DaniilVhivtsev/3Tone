<script type="text/javascript" src="/Assets/js/logout.js"></script>
<div id="01" class="modal">
    <form class="modal-content animate">
        <div class="container_login" id="container_login">
            <!-- Email -->
            <label for="email"><b>Электронная почта</b></label>
            <input type="email" placeholder="Введите электронную почту" name="email" id="email" required>

            <!-- Password -->
            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Введите пароль" name="psw" id="psw" required>

            <!-- Submit Button -->
            <button type="button" class="login" name="login" id="login">Войти</button>

            <div>
                <label>
                    <input type="checkbox" checked="checked" id="remember" name="remember">
                    Запомни меня
                </label>
                <a href="/register.php" class="reg_link">Зарегистрироваться</a>
            </div>
        </div>
    </form>
</div>

<header class="header">
    <div class="container">
        <div class="header_inner">

            <div class="left_header" id="left_header">
                <div class="header_logo">
                    <a href="/"><img src="/Assets/images/logo/logo_white.PNG" class="logoIndex" alt=""></a>
                </div>

                <div onclick="document.getElementById('01').style.display='block'" class="nav_link sign_in" id="sign_in">
                    Войти
                </div>
            </div>

            <nav class="nav">
                <a class = "nav_link" href="courses.php">Курсы</a>
                <a class = "nav_link" href="#">Форум</a>
                <a class = "nav_link" href="#">Практики</a>
            </nav>

        </div>
    </div>
</header>

<div id="logout" class="modal">
    <div class="modal-content" style="text-align: center">
        <a href="personal_area.php" class="nav_link">Личный кабинет</a>
        <button type="button" class="login" id="logout_button" onclick='clearSession();'>Выйти</button>
    </div>
</div>

<script type="text/javascript">let name = "<?php if(isset($_SESSION['Email'])) echo $_SESSION['Email']; ?>";</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="/Assets/js/reactiveHeader.js"></script>
<script type="text/javascript" src="/Assets/js/login.js"></script>