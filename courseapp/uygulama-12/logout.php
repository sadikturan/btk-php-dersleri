<?php

    setcookie("username", "", time() - (60 * 60 * 24));
    setcookie("auth", true, time() - (60 * 60 * 24));

    header("Location: login.php");

?>