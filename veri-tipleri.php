<?php

/*
    Php Veri Tipleri

    string      : metinsel bilgiler
    int         : tam sayılar
    double      : ondalıklı sayılar
    boolean     : true/false bilgi
    object      : nesne
    array       : dizi
    null        : değer içermeyen bilgi

*/

$urunAdi = "Iphone 15";
echo $urunAdi.' : '.gettype($urunAdi);

echo "<br>";

$fiyat = 40000;
echo $fiyat.' : '.gettype($fiyat);

echo "<br>";

$kdvOrani = 0.18;
echo $kdvOrani.' : '.gettype($kdvOrani);

echo "<br>";

$satistaMi = false;
echo gettype($satistaMi);

echo "<br>";

$a = (double)20;
echo gettype($a);

echo "<br>";

$a = (int)20.5;
echo gettype($a);
echo $a;

echo "<br>";

$a = (int)"20";
echo gettype($a);

echo "<br>";

$a = (int)"a20";
echo gettype($a);
echo $a;

echo "<br>";

$a = (int)"20a50";
echo gettype($a);
echo $a;

echo "<br>";

$a = (int)false;
echo gettype($a);
echo $a;

?>