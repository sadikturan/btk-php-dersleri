<?php
    require "libs/variables.php";
    require "libs/functions.php";

    if(!isAdmin()) {
        header("Location: unauthorize.php");
    }
?>

<?php include "partials/_message.php" ?>
<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<div class="container my-3">

<div class="row">
    <div class="col-12">
        <div class="border p-2 mb-2">
            <a href="course-create.php" class="btn btn-primary">Kurs Ekle</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:50px;">Id</th>
                    <th style="width:120px;">Resim</th>
                    <th>Başlık</th>
                    <th style="width:200px;">Kategori</th>
                    <th style="width:50px;">Onay</th>
                    <th style="width:50px;">Anasayfa</th>
                    <th style="width:130px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php $sonuc = getCourses(false,false); while($course = mysqli_fetch_assoc($sonuc)): ?>
                    <tr>
                        <td><?php echo $course["id"]?></td>
                        <td><img class="img-fluid" src="img/<?php echo $course["resim"] ?>" alt=""></td>
                        <td><?php echo $course["baslik"]?></td>
                        <td>
                            <?php
                                echo "<ul>";
                                $result = getCategoriesByCourseId($course["id"]);

                                if(mysqli_num_rows($result) > 0) {
                                    while($category = mysqli_fetch_assoc($result)) {
                                        echo "<li>".$category["kategori_adi"]."</li>";
                                    }
                                } else {
                                    echo "<li>Kategori seçilmedi</li>";
                                }
                                echo "</ul>";
                            ?>
                        </td>
                        <td>
                            <?php if ($course["onay"]): ?>
                                <i class="fas fa-check"></i>
                            <?php else: ?>
                                <i class="fas fa-times"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($course["anasayfa"]): ?>
                                <i class="fas fa-check"></i>
                            <?php else: ?>
                                <i class="fas fa-times"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="course-edit.php?id=<?php echo $course["id"];?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="course-delete.php?id=<?php echo $course["id"];?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include "partials/_footer.php" ?>
