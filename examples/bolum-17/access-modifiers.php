<?php

    # public, private, protected

   class Product {
       private float $tax = 1.18;
       private string $name;
       private float $price;

       function __construct($name, $price) {
            $this->name = $name;
            if($price<0) {
                $this->price = 0;
            } else {
                $this->price = $price;
            }
       } 

       function display_product() {
           return "{$this->name} {$this->get_price()}";
       }

        function get_name() {
            return $this->name;
        }

        private function get_price() {
            return $this->price * $this->tax;
        }
   }


    $p1 = new Product("Samsung S20", 1000);
    $p2 = new Product("Samsung S21", -7000);

    echo $p1->display_product();
    echo $p2->display_product();

    


 

   
?>