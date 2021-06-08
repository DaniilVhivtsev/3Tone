<script type="text/javascript">
    function clearSession() {
        $.ajax({
            url: "/Assets/php/logout.php",    //the page containing php script
            type: "GET",    //request type,
            dataType: 'html',
            success: function () {
                user.email="";
                document.getElementById("logout").style.display="none";
                if (typeof showRegForm === "function") {
                    showRegForm();
                }
            }
        });
    }
</script>
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
    <div class="modal-content">
        <button type="button" class="login" id="logout_button" onclick='clearSession();'>Выйти</button>
    </div>
</div>

<script>
    // Get the modal
    const modal = document.getElementById('01');
    const logout = document.getElementById('logout');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        switch (event.target) {
            case modal:
                modal.style.display = "none";
                break;
            case logout:
                logout.style.display = "none";
                break;
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    const signIn = document.getElementById('sign_in');
    const header = document.getElementById('left_header');
    const userName = document.createElement("div");
    userName.classList.add("nav_link");
    userName.classList.add("sign_in")
    userName.onclick = function () {
        document.getElementById("logout").style.display='block';
    };

    let user = {
        value : '<?php if(isset($_SESSION['Email'])) {
            echo $_SESSION["Email"];
        }?>',
        get email() {
            return this.value;
        },
        set email(value) {
            this.value = value;
            this.updateUser();
        },
        updateUser: function() {
            if(user.email !== '') {
                let newContent = document.createTextNode(user.email);
                newContent.data=this.value;
                signIn.style.display='none';
                header.insertBefore(userName, signIn);
                userName.style.display='block';
                if(userName.firstChild !== null) {
                    userName.removeChild(userName.firstChild);
                }
                userName.appendChild(newContent);
            }
            else {
                signIn.style.display='block';
                userName.style.display='none';
            }

        }
    }
    if(user.email !== '')
    {
        user.updateUser();
    }
</script>
<script type="text/javascript" src="/Assets/js/login.js"></script>