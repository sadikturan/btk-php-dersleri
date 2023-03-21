<?php
    include 'classes/db.class.php';
    include 'classes/product.class.php';   
?>

<?php include('includes/header.php') ?>

<div class="container my-3">

    <a href="create-product.php" class="btn btn-primary">Create Product</a>

    <hr>

    <?php $product = new Product();?>

    <?php if($product->getProducts()): ?>
        <?php include('includes/product-list.php') ?>
    <?php else:?>
        <?php include('includes/no-product.php') ?>
    <?php endif;?>

</div>

<?php include('includes/footer.php') ?>