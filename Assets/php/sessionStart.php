<?php

if(isset($_SESSION["Save"]) && $_SESSION['Save']) {
    ini_set('session.gc_maxlifetime',  86400);

    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
}
if (!isset($_SESSION)) { session_start(); }