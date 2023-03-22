<?php
    include 'classes/db.class.php';
    include 'classes/product.class.php';   
?>

<?php

    $product = new Product();

    if(isset($_POST["deleteProduct"])) {
        $id = $_POST["productId"];

        if($product->deleteProduct($id)) {
            header('location: index.php');
        }
     }

?>
