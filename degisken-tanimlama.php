<?php

    $ad = "Sadık";
    $soyad = "Turan";

    echo $ad." ".$soyad;

    echo "<br>";

    $sayi1 = 50;
    $sayi2 = 100;

    /*
        $sayi 1 = 60;   => Yanlış
        Değişken isminde boşluk karakteri olamaz.
    */

    /*
        $1sayi = 50;
        Değişken sayı ile başlayamaz.
    */

    // Büyük küçük harf duyarlılığı vardır.
    $Sayi1 = 60;

    // Türkçe karakter kullanmayınız.

    echo $sayi1.' '.$sayi2;

?>