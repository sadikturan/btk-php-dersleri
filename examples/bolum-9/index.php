<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload") {
       
        if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
            $uploadOk = true;
            $dest_path = "./uploadedFiles/";
            $filename = $_FILES["fileToUpload"]["name"];
            $fileSize = $_FILES["fileToUpload"]["size"];
            $dosya_uzantilari = array('jpg','png');

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

            $dosyaAdi = explode(".", $filename); 
            $dosyaAdi_uzantisiz = $dosyaAdi[0];
            $dosyaAdi_uzantisi = $dosyaAdi[1];

            if(!in_array($dosyaAdi_uzantisi, $dosya_uzantilari)) {
                $uploadOk = false;
                echo "dosya uzantısı kabul edilmiyor";
                echo "kabul edilen dosyalar: ".implode(",", $dosya_uzantilari);
                echo "<br>";
            } 

            $yeni_dosyaAdi = md5(time().$dosyaAdi_uzantisiz).'.'.$dosyaAdi_uzantisi;

            $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];
            $fileDestPath = $dest_path.$yeni_dosyaAdi;

            if(!$uploadOk) {
                echo "dosya yüklenmedi";
            } else {
                if(move_uploaded_file($fileSourcePath, $fileDestPath)) {
                    echo "dosya yüklendi";
                } else {
                    echo "hata";
                }
            }
        } else {
            echo "bir hata oluştu";
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