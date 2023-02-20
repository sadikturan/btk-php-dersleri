<?php

    # 1- Kendisine gönderilen bir kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız. 

    function yazdir($kelime, $adet) {
        for($i = 0; $i < $adet; $i++) {
            echo $kelime."<br>";
        }
    }

    // yazdir("merhaba BTK", 10);

    # 2- Dikdörgenin alan ve çevresini hesaplayan fonksiyonu yazınız.

    function hesapla($kisa, $uzun) {
        $alan = $kisa * $uzun;
        $cevre = ($kisa + $uzun) * 2;
        return "çevre: $cevre, alan: $alan";
    }

    // echo hesapla(10,15);

    # 3- Yazı tura uygulamasını fonksiyon kullanarak yapınız. 

    function yaziTuraAt() {
        $sayi = rand(1, 100);
        if($sayi < 50) {
            echo "Tura";
        } else {
            echo "Yazı";
        }
    }

    // yaziTuraAt();

    # 4- Kendisine gönderilen bir sayının tam bölenlerini bir diziyle döndüren fonksiyonu yazınız.

    function tamBolenleriBul($sayi) {
        $tamBolenler = array();

        for($i = 2; $i < $sayi; $i++) {
            if($sayi % $i == 0) {
                array_push($tamBolenler, $i);
            }
        }

        return $tamBolenler;
    }    

    print_r(tamBolenleriBul(50));
    print_r(tamBolenleriBul(20));

?>