<?php
    if(isset($_SESSION["message"])) {
        echo "<div class='alert alert-".$_SESSION["type"]." mb-0 text-center'>".$_SESSION["message"]."</div>";
        unset($_SESSION["message"]);
    }
?>