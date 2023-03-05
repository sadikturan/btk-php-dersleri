<?php

setcookie("username", "sadikturan", time() + (60  * 60 * 24));
setcookie("auth", "true", time() + (60  * 60 * 24));

if(isset($_COOKIE["username"])) {
    echo $_COOKIE["username"];
} else {
    echo "cookie yok";
}

echo $_COOKIE["auth"];

// güncelleme
setcookie("username", "admin", time() + (60  * 60 * 24));

// silme
setcookie("username", "sadikturan", time() - (3600));


?>