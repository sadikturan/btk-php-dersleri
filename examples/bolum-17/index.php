<?php


    // MySQLi => MySQL

    // PDO => Php Data Object

    // print_r(PDO::getAvailableDrivers());

    include_once('baglanti.php');

    // $sql = "SELECT * from products";
    // $results = $pdo->query($sql);

    // while($row = $results->fetch(PDO::FETCH_ASSOC)) {
    //     echo $row["title"]."<br>";
    // }

    // while($row = $results->fetch()) {
    //     echo $row->title."<br>";
    //     echo $row->price."<br>";
    // }

    // $urunler = $results->fetchAll();

    // foreach ($urunler as $urun) {
    //     echo $urun->title."<br>";
    // }

    // prepared

    $price = 20000;

    $sql = "SELECT * from products WHERE price>?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$price]);
    $urunler = $stmt->fetchAll();

    foreach ($urunler as $urun) {
        echo $urun->title."<br>";
    }

?>