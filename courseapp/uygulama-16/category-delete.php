<?php
    require "libs/variables.php";
    require "libs/functions.php";
    
    $id = $_GET["id"];

    if(deleteCategory($id)) {
        $_SESSION["message"] = $id." numaralı kategori silindi";
        $_SESSION["type"] = "danger";

        header('Location: admin-categories.php');
    } else {
        echo "hata";
    }

?>