<?php

    $sayi1 = 5;
    $sayi2 = 3;

    echo "sonuç: ".($sayi1+$sayi2)."<br>";
    echo "sonuç: ".($sayi1-$sayi2)."<br>";
    echo "sonuç: ".($sayi1*$sayi2)."<br>";
    echo "sonuç: ".($sayi1/$sayi2)."<br>";

    $sayi3 = 8;

    echo "sonuç: ".(($sayi1+$sayi2)/$sayi3)."<br>";

    echo var_dump(is_int(5))."<br>";;
    echo var_dump(is_int(5.2))."<br>";

    echo var_dump(is_float(5))."<br>";
    echo var_dump(is_float(5.2))."<br>";

    echo var_dump(is_numeric("a5"))."<br>";

    echo abs(-10)."<br>";
    echo ceil(4.3)."<br>";
    echo ceil(4.8)."<br>";
    echo floor(4.8)."<br>";
    echo round(4.8)."<br>";
    echo round(4.4)."<br>";

    echo sqrt(25)."<br>";
    echo pow(5,2)."<br>";
    echo max(3,5,6,90)."<br>";
    echo min(3,5,6,90)."<br>";



?>