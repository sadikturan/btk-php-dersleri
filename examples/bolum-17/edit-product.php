<?php
    include 'classes/db.class.php';
    include 'classes/product.class.php';   
?>

<?php include('includes/header.php') ?>

<?php

    $id = $_GET["id"];
    $product = new Product();
    $item = $product->getProductById($id);

    if(isset($_POST["submit"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $price = $_POST["price"];

        if($product->editProduct($id, $title, $description, $price)) {
            header('location: index.php');
        }
     }

?>

<div class="container my-3">
    <div class="row">
        <form method="post">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $item->title?>">
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"><?php echo $item->description?></textarea>
                </div>
                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control" value="<?php echo $item->price?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Kaydet</button>
            </div>
        </form>
    </div>
</div>

<?php include('includes/footer.php') ?>