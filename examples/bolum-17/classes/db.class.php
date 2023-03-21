<?php

    class Db {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $dbName = "mydb";

        protected function connect() {
            try {
                $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
                $pdo = new PDO($dsn, $this->user, $this->password);

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

                return $pdo;
            }
            catch(PDOException $e) {
                echo "bağlantı hatası: ".$e->getMessage();
            }
        }
    }


?>