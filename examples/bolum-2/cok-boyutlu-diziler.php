<?php

    $ogrenciA = array("Ahmet Yılmaz", array(50,80,90));
    $ogrenciB = array("Ali Yılmaz", array(60,50,70));

    $ogrenciA_ortalama = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
    $ogrenciB_ortalama = ($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2]) / 3;

    echo $ogrenciA[0]."<br>";
    echo $ogrenciA[1][0]."<br>";
    echo $ogrenciA[1][1]."<br>";
    echo $ogrenciA[1][2]."<br>";
    echo $ogrenciA_ortalama."<br>";

    echo $ogrenciB[0]."<br>";
    echo $ogrenciB[1][0]."<br>";
    echo $ogrenciB[1][1]."<br>";
    echo $ogrenciB[1][2]."<br>";
    echo $ogrenciB_ortalama."<br>";

    $sinif = array(
        "100" => array(
            "ad" => "Mehmet",
            "soyad" => "Yılmaz",
            "notlar" => array(
                "matematik" => array(50,70,80),
                "fizik" => array(50,70,80),
                "kimya" => array(50,70,80)
            )
        ),
        "200" => array(
            "ad" => "Hasan",
            "soyad" => "Yılmaz",
            "notlar" => array(
                "matematik" => array(50,70,80),
                "fizik" => array(50,70,80),
                "kimya" => array(50,70,80)
            )
        ),
    );

    echo $sinif["100"]["ad"]."<br>";
    echo $sinif["100"]["soyad"]."<br>";
    echo $sinif["100"]["notlar"]["matematik"][0]."<br>";
    echo $sinif["100"]["notlar"]["matematik"][1]."<br>";
    echo $sinif["100"]["notlar"]["matematik"][2]."<br>";

    $not1 = $sinif["200"]["notlar"]["kimya"][0];
    $not2 = $sinif["200"]["notlar"]["kimya"][1];
    $not3 = $sinif["200"]["notlar"]["kimya"][2];

    $kimya_ortalama = ($not1 + $not2 + $not3)/3;

    echo $kimya_ortalama;

?>