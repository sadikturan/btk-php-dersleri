<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "mydb";

    try {
        $dsn = "mysql:host=".$host.";dbname=".$dbName;
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        echo "bağlantı yapıldı.";
    }
    catch(PDOException $e) {
        echo "bağlantı hatası: ".$e->getMessage();
    }


?>