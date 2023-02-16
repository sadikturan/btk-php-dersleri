<?php

    // Diziler (Array)

    // 1- Numeric Arrays
    // 2- Associative Arrays (key-value)

    // key-value => 34: istanbul, 53: Rize

    $plakalar = array("41","53","34");
    $sehirler = array("kocaeli","rize","istanbul");

    echo "$plakalar[0] : $sehirler[0]"."<br>";
    echo "$plakalar[1] : $sehirler[1]"."<br>";
    echo "$plakalar[2] : $sehirler[2]"."<br>";

    $plaka_bilgileri = array(
        "41" => "kocaeli", 
        "53" => "rize", 
        "34" => "istanbul"
    );

    echo $plaka_bilgileri["41"]."<br>";
    echo $plaka_bilgileri["53"]."<br>";
    echo $plaka_bilgileri["34"]."<br>";

    $telefon_rehberi = array(
        "ali" => "53244444",
        "ahmet" => "444444",
        "ayşe" => "333333"
    );

    echo $telefon_rehberi["ali"];

?>