<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php

   if(empty($_GET["id"])) {
        header('Location: admin-courses.php');
   }

   $id = $_GET["id"];

   $result =  getCourseById($id);
   $course = mysqli_fetch_assoc($result);

   if($_SERVER["REQUEST_METHOD"]=="POST") {
       if(deleteCourse($id)) {
           $_SESSION["message"] = $id." numaralı kurs silindi";
           $_SESSION["type"] = "danger";
           
           header('Location: admin-courses.php');
        } else {
            echo "hata";
        }
    }
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form method="POST">
                    <b><?php echo $course["baslik"]?></b> isimli kursu silmek istiyor musunuz?
                    <button type="submit" class="btn btn-danger">Sil</button>
                </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include "partials/_footer.php" ?>