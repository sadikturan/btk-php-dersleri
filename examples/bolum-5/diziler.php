<?php

    $ogrenciler = array("ali","ayşe","ahmet","deniz","mehmet");

    // for($i = 0; $i < count($ogrenciler); $i+=1) {
    //     echo $ogrenciler[$i]."<br>";
    // }

    // $i = 0;
    // while($i < count($ogrenciler)) {
    //     echo $ogrenciler[$i]."<br>";
    //     $i += 1;
    // }

    $urunler = array(
        "100" => array(
            "urun_adi" => "iphone 14", 
            "fiyat" => 30000
        ),
        "101" => array(
            "urun_adi" => "iphone 15", 
            "fiyat" => 40000
        ),
        "102" => array(
            "urun_adi" => "iphone 16", 
            "fiyat" => 50000
        ),
    );

    $keys = array_keys($urunler);

    for($i=0; $i<count($urunler); $i++) {

        echo $urunler[$keys[$i]]["urun_adi"];
        echo $urunler[$keys[$i]]["fiyat"];

        echo "<br>";

    }

?>