<?php

    // Diziler (Array)

    // 1- Numeric Arrays
    $renk1 = "Kırmızı";
    $renk2 = "Mavi";
    $renk3 = "Sarı";

    // $renkler = "Kırmızı,Mavi,Sarı";
    $renkler = array("Kırmızı","Mavi","Sarı");

    echo gettype($renkler)."<br>";
    echo $renkler[0]."<br>";
    echo $renkler[1]."<br>";
    echo $renkler[2]."<br>";

    $sayilar = array(18,23,32,45,59);

    echo $sayilar[0]."<br>";    // 18
    echo $sayilar[1]."<br>";    // 23

    // 2- Associative Arrays (key-value)



?>