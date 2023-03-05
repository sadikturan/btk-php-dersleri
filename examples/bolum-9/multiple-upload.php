<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload") {

        $dosya_adeti = count($_FILES["fileToUpload"]["name"]);
        $maxFileSize = (1024 * 1024) * 1;
        $fileTypes = array("image/png","image/jpg","image/jpeg");
        $uploadOk = true;

        if($dosya_adeti > 2) {
            $uploadOk = false;
            echo "max. 2 dosya yükleyebilirsiniz.";
        }

        if($uploadOk) {
            for($i=0; $i < $dosya_adeti; $i++) {
                
                $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$i];
                $fileName = $_FILES["fileToUpload"]["name"][$i];
                $fileSize = $_FILES["fileToUpload"]["size"][$i];
                $fileType = $_FILES["fileToUpload"]["type"][$i];
                

                if(in_array($fileType, $fileTypes)) {

                    if($fileSize > $maxFileSize) {
                        echo "max dosya botuyu 1 mb olmalıdır."."<br>";
                    } else {

                        $dosyaAdi_Arr = explode(".", $fileName);
                        $dosyaAdi_uzantisiz = $dosyaAdi_Arr[0];
                        $dosyaAdi_uzantisi = $dosyaAdi_Arr[1];

                        $yeniDosyaAdi = $fileName."-".rand(0, 9999999).".".$dosyaAdi_uzantisi;
                        $dest_path = "images/".$yeniDosyaAdi;

                        if(move_uploaded_file($fileTmpPath, $dest_path)) {
                            echo $yeniDosyaAdi." dosyası yüklendi"."<br>";
                        } else {
                            echo $yeniDosyaAdi."dosya yükleme hatası"."<br>";
                        }
                    }

                } else {
                    echo "dosya uzantısı kabul edilmiyor."."<br>";
                    echo "kabul edilen dosya tipleri: ".implode(".", $fileTypes)."<br>";
                }
                
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
        <input type="file" name="fileToUpload[]" multiple="multiple">
        <input type="submit" value="Upload" name="btnFileUpload">
    </form>

</body>
</html>