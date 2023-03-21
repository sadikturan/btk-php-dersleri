<?php

   # class => Person, Product
    

    class Ogrenci {
        # property
        public $ogrno;
        public $ad;
        public $sube;
        # method
    }

    $ogrenci1 = new Ogrenci();
    $ogrenci1->ogrno = 100;
    $ogrenci1->ad = "Çınar";
    $ogrenci1->sube = "10A";

    $ogrenci2 = new Ogrenci();
    $ogrenci2->ogrno = 200;
    $ogrenci2->ad = "Ahmet";
    $ogrenci2->sube = "11A";

    echo $ogrenci1->ogrno." ".$ogrenci1->ad." ".$ogrenci1->sube."<br>";
    echo $ogrenci2->ogrno." ".$ogrenci2->ad." ".$ogrenci2->sube."<br>";

    $ogrenciler = [$ogrenci1,$ogrenci2];

    foreach($ogrenciler as $ogrenci) {
        echo gettype($ogrenci);
        echo "<br>";
        echo $ogrenci->ogrno." ".$ogrenci->ad." ".$ogrenci->sube."<br>";
        var_dump($ogrenci instanceof Ogrenci);
    }


   # instance, object, nesne
   
?>