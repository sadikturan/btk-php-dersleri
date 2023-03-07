<?php


    session_start();

    // unset($_SESSION["username"]);
    // session_unset();
    $_SESSION  = [];

    if(isset($_SESSION["username"])) {
        echo $_SESSION["username"];
    } else {
        echo "username yok";
    }

    echo $_SESSION["password"];

    print_r($_SESSION);


?>