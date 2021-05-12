<?php
    $url='172.18.0.2';
    $username='3ToneAdmin';
    $password='1111';

    $database=new mysqli($url,$username,$password,"regTest");

    if($database->connect_error) {
        die('Could not Connect My Sql: '. $database->connect_error);
    }
