<?php

    include "ayar.php";

    // $query = "SELECT * from kurslar WHERE id=1";
    // $query = "SELECT * from kurslar WHERE id > 1";
    // $query = "SELECT * from kurslar WHERE onay=0";
    // $query = "SELECT * from kurslar WHERE id>4 and id<7";
    // $query = "SELECT * from kurslar WHERE baslik='Php Kursu'";
    $query = "SELECT * from kurslar WHERE baslik like '%kurs%' and onay=1";

    $sonuc = mysqli_query($baglanti, $query);

    if(mysqli_num_rows($sonuc) > 0) {
        while($satir = mysqli_fetch_assoc($sonuc)) {
            echo $satir["id"]." ".$satir["baslik"];
            echo "<br>";
        }
    }
    else {
        echo "kayıt yok.";
    }
   
    mysqli_close($baglanti);
?>