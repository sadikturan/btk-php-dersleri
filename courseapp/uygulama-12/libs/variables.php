<?php

const title = "Popüler Kurslar";

const db_user  = array(
    "username"=> "sadikturan",
    "password"=> "12345",
    "name" => "Sadık Turan"
);

$kategoriler = array(
    array("kategori_adi" => "Programlama", "aktif" => true),
    array("kategori_adi" => "Web Geliştirme", "aktif" => false),
    array("kategori_adi" => "Veri Analizi", "aktif" => false),
    array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),
    array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false)
);

$sehirler = array(
    "06" => "Ankara",
    "41" => "Kocaeli",
    "34" => "İstanbul",
    "53" => "Rize",
    "54" => "Sakarya",
);

$hobiler = array(
    "1" => "Sinema",
    "2" => "Spor",
    "3" => "Müzik",
    "4" => "Kitap"
);

$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme kursu",
        "resim" => "1.jpg",
        "yayinTarihi" => "01.01.2023",
        "yorumSayisi" => 0,
        "begeniSayisi" => 10,
        "onay" => true
    ),
    "2" => array(
        "baslik" => "Python Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python kursu",
        "resim" => "2.jpg",
        "yayinTarihi" => "01.01.2023",
        "yorumSayisi" => 10,
        "begeniSayisi" => 0,
        "onay" => true
    ),
    "3" => array(
        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Node.js programlama",
        "resim" => "3.jpg",
        "yayinTarihi" => "01.01.2023",
        "yorumSayisi" => 10,
        "begeniSayisi" => 20,
        "onay" => true
    ),
    "4" => array(
        "baslik" => "Django Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Django programlama",
        "resim" => "1.jpg",
        "yayinTarihi" => "01.01.2023",
        "yorumSayisi" => 0,
        "begeniSayisi" => 5,
        "onay" => true
    )
);


?>