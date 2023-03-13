<?php

    setcookie("auth[username]", "", time() - (60 * 60 * 24));
    setcookie("auth[name]", "", time() - (60 * 60 * 24));

    header("Location: login.php");

?>