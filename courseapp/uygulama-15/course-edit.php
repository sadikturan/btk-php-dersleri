<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<?php
    session_start();

    $id = $_GET["id"];
    $sonuc = getCourseById($id);
    $selectedCourse= mysqli_fetch_assoc($sonuc);

    $baslikErr = $baslik = "";
    $altBaslikErr = $altBaslik = "";
    $resimErr = $resim = "";

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

        if(empty($_POST["resim"])) {
            $resimErr = "resim gerekli alan.";
        } else {
            $resim = safe_html($_POST["resim"]);
        }

        $onay = $_POST["onay"] == "on"?1:0;

        if(empty($baslikErr) && empty($altBaslikErr) && empty($resimErr)) {
            editCourse($id,$baslik,$altBaslik,$resim,$onay);
            $_SESSION["message"] = $baslik." isimli kurs güncellendi";
            $_SESSION["type"] = "success";
            header('Location: admin-courses.php');
        }
        
    }

?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="baslik">Başlık</label>
                        <input type="text" name="baslik" class="form-control" value="<?php echo $selectedCourse["baslik"];?>">
                        <div class="text-danger"><?php echo $baslikErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="altBaslik">Alt Başlık</label>
                        <textarea name="altBaslik" class="form-control"><?php echo $selectedCourse["altBaslik"];?></textarea>
                        <div class="text-danger"><?php echo $altBaslikErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="resim">Resim</label>
                        <textarea name="resim" class="form-control"><?php echo $selectedCourse["resim"];?></textarea>
                        <div class="text-danger"><?php echo $resimErr; ?></div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="onay" name="onay" 
                            <?php echo $selectedCourse["onay"]?"checked":""?>>
                        <label class="form-check-label" for="onay">
                            Onay
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
           </div>

        </div>
    </div>

</div>
<?php include "partials/_footer.php" ?>
