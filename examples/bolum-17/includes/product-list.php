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
                            <a href="edit-product.php?id=<?php echo $item->id?>" class="btn btn-primary btn-sm">Edit</a>
                            <form action="delete-product.php" method="post" style="display:inline;">
                                <input type="hidden" name="productId" value="<?php echo $item->id?>">
                                <button type="submit" name="deleteProduct" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>    
                <?php endforeach;?>
            </tbody>

                
        </table>