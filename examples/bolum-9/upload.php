<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload") {
       
        // Dosya seçilmiş mi?
        // dosya boyutu
        // dosya ismini kontrol - random
        // dosya uzantısı (jpg, png)

        $dest_path = "./uploadedFiles/";
        $filename = $_FILES["fileToUpload"]["name"];

        if(empty($filename)) {
            echo "dosya seçiniz";
        }


        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];
        
        $fileDestPath = $dest_path.$filename;

        if(move_uploaded_file($fileSourcePath, $fileDestPath)) {
            echo "dosya yüklendi";
        } else {
            echo "hata";
        }

    }


?>