<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "mydb";

    try {
        $dsn = "mysql:host=".$host.";dbname=".$dbName;
        $baglanti = new PDO($dsn, $user, $password);
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "bağlantı yapıldı.";
    }
    catch(PDOException $e) {
        echo "bağlantı hatası: ".$e->getMessage();
    }


?>