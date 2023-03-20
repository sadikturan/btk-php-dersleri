<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<?php

    $id = $_GET["id"];
    $sonuc = getCourseById($id);
    $selectedCourse= mysqli_fetch_assoc($sonuc);

    $baslikErr = $baslik = "";
    $altBaslikErr = $altBaslik = "";
    $resimErr = $resim = "";
    $aciklamaErr = $aciklama = "";

    if($_SERVER["REQUEST_METHOD"]=="POST") {

        if(empty($_POST["baslik"])) {
            $baslikErr = "baslik gerekli alan.";
        } else {
            $baslik = safe_html($_POST["baslik"]);
        }

        if(empty($_POST["altBaslik"])) {
            $altBaslikErr = "altBaslik gerekli alan.";
        } else {
            $altBaslik = safe_html($_POST["altBaslik"]);
        }

        if(empty($_POST["aciklama"])) {
            $aciklamaErr = "aciklama gerekli alan.";
        } else {
            $aciklama = safe_html($_POST["aciklama"]);
        }

        if(empty($_FILES["imageFile"]["name"])) {
            $resim = $selectedCourse["resim"];
        } else {
            uploadImage($_FILES["imageFile"]);
            $resim = $_FILES["imageFile"]["name"];
        }
        $onay = $_POST["onay"] == "on"?1:0;
        $anasayfa = $_POST["anasayfa"] == "on"?1:0;

        $categories = [];

        if(isset($_POST["categories"])) {
            $categories = $_POST["categories"];
        }

        if(empty($baslikErr) && empty($altBaslikErr) && empty($resimErr)) {

            if(editCourse($id,$baslik,$altBaslik,$aciklama,$resim,$onay,$anasayfa)) {
                clearCourseCategories($id);
                if(count($categories) > 0) {
                    addCourseCategories($id, $categories);
                }
                $_SESSION["message"] = $baslik." isimli kurs güncellendi";
                $_SESSION["type"] = "success";
                header('Location: admin-courses.php');
            }
        }
        
    }

?>

<div class="container my-3">

    <div class="card card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-9">
                    
                        <div class="mb-3">
                            <label for="baslik">Başlık</label>
                            <input type="text" name="baslik" class="form-control" value="<?php echo $selectedCourse["baslik"];?>">
                            <div class="text-danger"><?php echo $baslikErr; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="altBaslik">Alt Başlık</label>
                            <input type="text" name="altBaslik" class="form-control" value="<?php echo $selectedCourse["altBaslik"];?>">
                            <div class="text-danger"><?php echo $altBaslikErr; ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="aciklama">Açıklama</label>
                            <textarea name="aciklama" class="form-control"><?php echo $selectedCourse["aciklama"];?></textarea>
                            <div class="text-danger"><?php echo $aciklamaErr; ?></div>
                        </div>                        
                        <div>
                            <div class="input-group mb-3">
                                <input type="file" name="imageFile" id="imageFile" class="form-control">
                                <label for="imageFile" class="input-group-text">Yükle</label>
                            </div>
                            <div class="text-danger"><?php echo $resimErr; ?></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    
                </div>
                <div class="col-3">
                    <img src="img/<?php echo $selectedCourse["resim"];?>" class="img-fluid" alt="">
                    <hr>
                    <?php foreach(getCategories() as $c): ?>
                        <div class="form-check">
                            <label for="category_<?php echo $c["id"]?>"><?php echo $c["kategori_adi"]?></label>
                            <input type="checkbox" name="categories[]" value="<?php echo $c["id"]?>" id="category_<?php echo $c["id"]?>" class="form-check-input" 
                            
                                <?php
                                    $isChecked = false;
                                    $selectedCategories = getCategoriesByCourseId($selectedCourse["id"]);

                                    foreach ($selectedCategories as $selectedCat) {
                                        if($selectedCat["id"] == $c["id"]) {
                                            $isChecked = true;
                                        }
                                    }

                                    if($isChecked) {
                                        echo "checked";
                                    }                           
                                ?>
                            >
                        </div>
                    <?php endforeach; ?>

                    <hr>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="onay" name="onay" 
                            <?php echo $selectedCourse["onay"]?"checked":""?>>
                        <label class="form-check-label" for="onay">
                            Onay
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="anasayfa" name="anasayfa" 
                            <?php echo $selectedCourse["anasayfa"]?"checked":""?>>
                        <label class="form-check-label" for="anasayfa">
                            Anasayfa
                        </label>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<?php include "partials/_editor.php" ?>
<?php include "partials/_footer.php" ?>
