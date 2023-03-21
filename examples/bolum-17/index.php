<?php
    include 'classes/db.class.php';
    include 'classes/product.class.php';   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>

<div class="container my-3">

    <?php $product = new Product();?>

    <?php if($product->getProducts()): ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 50px">id</th>
                    <th>title</th>
                    <th>price</th>
                    <th>description</th>
                    <th style="width: 150px"></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($product->getProducts() as $item): ?>
                    <tr>
                        <td ><?php echo $item->id?></td>
                        <td><?php echo $item->title?></td>
                        <td><?php echo $item->price?></td>
                        <td><?php echo $item->description?></td>
                        <td >
                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>    
                <?php endforeach;?>
            </tbody>

                
        </table>

    <?php else:?>
        <div class="alert alert-warning">
            Ürün bulunamadı.
        </div>
    <?php endif;?>

    </div>

</body>
</html>