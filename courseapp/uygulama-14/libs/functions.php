<?php

function getDb() {
    $myfile = fopen("db.json","r");
    $size = filesize("db.json");
    $data = json_decode(fread($myfile, $size), true);    
    fclose($myfile);
    return $data;
}

function kursEkle(&$kurslar, string $baslik,string $altBaslik,string $resim,string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0, bool $onay=true) {
    $yeni_kurs[count($kurslar) + 1] = array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    );

    $kurslar = array_merge($kurslar, $yeni_kurs);
}

function urlDuzenle($baslik) {
    return str_replace([" ","ç","@","."],["-","c","","-"],strtolower($baslik));
}

function kisaAciklama($altBaslik) {
    if (strlen($altBaslik) > 50) {
        return substr($altBaslik,0,50)."..."; 
    } else {
        return $altBaslik;
    }
}

function safe_html($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data ;
}
?>