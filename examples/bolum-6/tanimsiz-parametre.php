<?php

    function intro() {
        $parametreSayisi = func_num_args();
        if($parametreSayisi == 0) {
            echo "parametre yok";
        } else {
            $parametreler = func_get_args();

            foreach($parametreler as $parametre) {
                echo $parametre."<br>";
            }
        }
    }
    // intro();
    intro("ali","yılmaz","kocaeli",30);



?>