<?php

    // Array Functions

    $notlar = array(60,70,40,80,80);
    $plakalar = array("41"=>"kocaeli","34"=>"istanbul","53"=>"rize");

    // print_r(array_flip($plakalar));
    // print_r(array_count_values($notlar));

    $indexes = array_rand($notlar,2);
    print_r($indexes);
    
    echo $notlar[$indexes[0]];
    echo $notlar[$indexes[1]];

    // elemanı sona ekleme
    // array_push($notlar, 100);

    // elemanı başa ekleme
    // array_unshift($notlar, 20);

    // eleman silme - sondan
    // array_pop($plakalar);

    // eleman silme - baştan
    // array_shift($plakalar);
    

    // sıralama - artan
    // sort($notlar);
    // asort($plakalar); // value
    // ksort($plakalar); // key

    // sıralama - azalan
    // rsort($notlar);
    // arsort($plakalar);  // value
    // krsort($plakalar);  // key

    // string to array
    // $str = "kocaeli,41";
    // $arr = explode(",", $str);

    // array to string
    // $arr = array("sadikturan","mail@gmail.com");
    // $str = implode(",", $arr);

    print_r($arr);
    echo $str;

    // echo count($notlar)."<br>";
    // echo count($plakalar)."<br>";

    // print_r($notlar)."<br>";
    // print_r($plakalar)."<br>";





?>