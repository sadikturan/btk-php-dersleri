<?php

    function selamlama($isim) {
        return "Merhaba ".$isim."<br>";
    }

    echo selamlama("Ahmet");
    echo selamlama("Ali");
    echo selamlama("Ayşe");

    function toplama($sayi1, $sayi2) {
        return $sayi1 + $sayi2;
    }

    echo toplama(30, 50);
    echo toplama(130, 50);

    echo "<br>";

    function yasHesapla($dogumYili) {
        return date("Y") - $dogumYili;
    }

    echo yasHesapla(1985);
    echo yasHesapla(2000);

    function emekliligeKacYilKaldi($dogumYili, $isim) {
        $yas = yasHesapla($dogumYili);

        $kalanSure = 65 - $yas;

        if($kalanSure > 0) {
            return "$isim, emekliliğe $kalanSure yıl kaldı";
        } else {
            return "$isim, zaten $kalanSure yıl önce emekli oldunuz";
        }
    }

    echo emekliligeKacYilKaldi(1950, "Ahmet");
    echo emekliligeKacYilKaldi(1980, "Ayşe");

?>