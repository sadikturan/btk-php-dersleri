<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<?php
    $usernameErr = $emailErr = $passwordErr = $repasswordErr = $cityErr = $hobilerErr = "";
    $username = $email = $password = $repassword = $city = "";

    if($_SERVER["REQUEST_METHOD"]=="POST") {

        if(empty($_POST["username"])) {
            $usernameErr = "username gerekli alan.";
        } else {
            $username = $_POST["username"];
        }

        if(empty($_POST["email"])) {
            $emailErr = "email gerekli alan.";
        } else {
            $email = $_POST["email"];
        }

        if(empty($_POST["password"])) {
            $passwordErr = "password gerekli alan.";
        } else {
            $password = $_POST["password"];
        }

        if($_POST["password"] != $_POST["repassword"]) {
            $repasswordErr = "parola tekrar alanı eşleşmiyor.";
        } else {
            $repassword = $_POST["repassword"];
        }

        if($_POST["city"] == -1 ) {
            $cityErr = "sehir seçmelisiniz.";
        } else {
            $city = $_POST["city"];
        }

        if(!isset($_POST["hobiler"])) {
            $hobilerErr = "hobi seçmelisiniz.";
        } else {
            $hobiler = $_POST["hobiler"];
        }
        
    }

?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
           <form action="register.php" method="post">
            <div class="mb-3">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username;?>">
                <div class="text-danger"><?php echo $usernameErr; ?></div>
            </div>
            <div class="mb-3">
                <label for="email">Eposta</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email;?>">
                <div class="text-danger"><?php echo $emailErr; ?></div>
            </div>
            <div class="mb-3">
                <label for="password">Parola</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password;?>">
                <div class="text-danger"><?php echo $passwordErr; ?></div>
            </div>
            <div class="mb-3">
                <label for="repassword">Parola Tekrar</label>
                <input type="password" name="repassword" class="form-control">
                <div class="text-danger"><?php echo $repasswordErr; ?></div>
            </div>
            <div class="mb-3">
                <label for="city">Şehir</label>
                <select name="city" class="form-select">
                    <option value="-1" selected>Şehir Seçiniz</option>

                    <?php foreach($sehirler as $plaka => $sehir): ?>
                        <option 
                            value="<?php echo $plaka; ?>" <?php echo $city == $plaka ? ' selected':'' ?>> <?php echo $sehir; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="text-danger"><?php echo $cityErr; ?></div>
            </div>
            <div class="mb-3">
                <label for="hobiler">Hobiler</label>
                <div class="form-check">
                    <input type="checkbox" name="hobiler[]" value="sinema" id="hobiler_0">
                    <label for="hobiler_0" class="form-check-label">Sinema</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="hobiler[]" value="spor" id="hobiler_1">
                    <label for="hobiler_1" class="form-check-label">Spor</label>
                </div>
                <div class="text-danger"><?php echo $hobilerErr; ?></div>
            </div>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
           </form>
        </div>
    </div>

</div>
<?php include "partials/_footer.php" ?>
