<?php

    $yas = 19;
    $egitim = "lise";

    // if($yas >= 18) {
    //     if($egitim == "lise" or $egitim == "üniversite") {
    //         echo "ehliyet alabilir";
    //     } else {
    //         echo "eğitim durumunuz yetersiz";
    //     }

    // } else {
    //     echo "yaşınız tutmuyor";
    // }

    echo "<br>";

    $sonuc = ($yas >= 18) 
                ? (($egitim == "lise" or $egitim == "üniversite")
                    ? "ehliyet alabilir"
                    : "eğitim durumunuz yetersiz")
                : "yaşınız tutmuyor";
    echo $sonuc;

?>