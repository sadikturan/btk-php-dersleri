<?php


    // Fonksiyon Tanımlama

    function selamlama() {
        for($i=0; $i < 5; $i++ ) {
            echo "Merhaba BTK"."<br>";
        }
    }

    selamlama();

    function toplama() {
        $a = 40;
        $b = 30;
        echo $a + $b;
    }

    toplama();

?>