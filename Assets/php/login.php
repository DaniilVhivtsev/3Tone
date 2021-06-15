<?php
include 'sessionStart.php';

$database=mysqli::class;

if(isset($_POST['email']))
{
    include 'database.php';

    $email=$database->real_escape_string($_POST['email']);
    $psw=$database->real_escape_string($_POST['psw']);
    $save = $_POST['save'];
    $psw=md5($psw);

    $sql=$database->query("SELECT * FROM reg where Email='$email' and Password='$psw'");
    $row  = $sql->fetch_array();
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_name"]=$row['First_name'];
        $_SESSION["Last_name"]=$row['Last_name'];
        $_SESSION["Save"]=$save;
        echo "Successfully Logged in...";
    }
    else
    {
        echo "Неправильный пароль или почта";
    }
    $database->close();
}