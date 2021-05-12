<?php
    setcookie('PHPSESSID', '', time() - 86400, '/');
    if(isset($_SESSION['Email'])) {
        $_SESSION["Email"] = "";
        session_destroy();
    }
