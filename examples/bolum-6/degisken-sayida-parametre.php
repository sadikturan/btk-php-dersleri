<?php

function toplam(...$sayilar) {
    $toplam = 0;
    foreach($sayilar as $sayi) {
        $toplam += $sayi;
    }
    return $toplam;
}


echo toplam(10, 20, 30);
echo toplam(10, 20, 30, 40);



?>