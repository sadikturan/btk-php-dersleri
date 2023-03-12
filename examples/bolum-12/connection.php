<?php

    // sunucu => coursedb
    // php => mysqli
    // php => pdo

    const host = "localhost";
    const username = "root";
    const password = "";
    const database = "coursedb";

    $baglanti = mysqli_connect(host, username, password, database);

    if(mysqli_connect_errno() > 0) {
        die("hata: ".mysqli_connect_errno());
    }

    echo "mysql bağlantısı oluşturuldu.";

    // sql sorgusularını yazacağız.

    mysqli_close($baglanti);

    echo "mysql bağlantısı kapatıldı.";

?>