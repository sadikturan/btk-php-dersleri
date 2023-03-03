<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload") {
       
        // Dosya seçilmiş mi?
        // dosya boyutu
        // dosya ismini kontrol - random
        // dosya uzantısı (jpg, png)

        $uploadOk = true;
        $dest_path = "./uploadedFiles/";
        $filename = $_FILES["fileToUpload"]["name"];
        $fileSize = $_FILES["fileToUpload"]["size"];

        if(empty($filename)) {
            $uploadOk = false;
            echo "dosya seçiniz";
            echo "<br>";
        }

        if($fileSize > 500000) {
            $uploadOk = false;
            echo "Dosya boyutu fazla";
            echo "<br>";
        }

        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];
        $fileDestPath = $dest_path.$filename;

        if(!$uploadOk) {
            echo "dosya yüklenmedi";
        } else {
            if(move_uploaded_file($fileSourcePath, $fileDestPath)) {
                echo "dosya yüklendi";
            } else {
                echo "hata";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload" name="btnFileUpload">
    </form>


</body>
</html>