<?php

    include "ayar.php";

    $query = "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES('Angular Kursu','ileri seviye angular dersleri','1.jpg','10/10/2023',10,10,1);";

    // $query .= "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES('Angular Kursu','ileri seviye angular dersleri','1.jpg','10/10/2023',10,10,1);";

    // $query .= "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES('Angular Kursu','ileri seviye angular dersleri','1.jpg','10/10/2023',10,10,1);";


    $sonuc = mysqli_query($baglanti, $query);
    $inserted_id = mysqli_insert_id($baglanti);

    // $sonuc = mysqli_multi_query($baglanti, $query);

    if($sonuc) {
        echo "kayıt eklendi: ".$inserted_id;
    } else {
        echo "kayıt eklememedi";
    }

    mysqli_close($baglanti);
    echo "mysql bağlantısı kapatıldı.";

?>