<?php

   class Product {
       public $name;
       public $price;

       function __construct($name, $price) {
            $this->name = $name;
            if($price<0) {
                $this->price = 0;
            } else {
                $this->price = $price;
            }
       } 

       function __destruct() {
           echo "nesne silindi.";
       }

       function display_product() {
           return $this->name." ".$this->price;
       }

        function get_name() {
            return $this->name;
        }

        function get_price() {
            return $this->price;
        }
   }


    $p1 = new Product("Samsung S20", 7000);
    $p2 = new Product("Samsung S21", -7000);

    echo $p1->display_product();
    echo $p2->display_product();
 

   
?>