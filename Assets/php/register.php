<?php
include 'sessionStart.php';

// initializing variables
unset($_SESSION['errors']);
$errors = array();
$database = null;

include "database.php";

// REGISTER USER
if (isset($_POST['psw'])) {
    // receive all input values from the form
    $firstName = $database->real_escape_string($_POST["First_name"]);
    $lastName = $database->real_escape_string($_POST["Last_name"]);
    $email = $database->real_escape_string($_POST["Email"]);
    $password = $database->real_escape_string($_POST["psw"]);
    $id = uniqid(rand());

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM reg WHERE ID='$id' OR Email='$email' LIMIT 1";
    $result = $database->query($user_check_query);
    $user = $result->fetch_assoc();

    if ($user) { // if user exists
        if ($user['ID'] === $id) {
            $id = uniqid(rand());
        }

        if ($user['Email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database

        $query = "INSERT INTO `reg`(`ID`, `First_name`, `Last_name`, `Email`, `Password`) VALUES ('$id', '$firstName', '$lastName', '$email', '$password')";
        $database->query($query);
        $_SESSION['Email'] = $email;
        $_SESSION["ID"] = $id;
        $_SESSION["First_name"]=$firstName;
        $_SESSION["Last_name"]=$lastName;
        echo "Success";
    }
    else {
        foreach ($errors as $error){
            echo $error;
        }
    }
}