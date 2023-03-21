<?php


    class Product extends Db {
        public function getProducts() {
            $sql = "SELECT * from products";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function getProductById(int $productId) {
            $sql = "SELECT * from products WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(['id' => $productId]);
            return $stmt->fetch();
        }
    }


?>