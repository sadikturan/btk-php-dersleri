<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload") {
        $dosya_adeti = count($_FILES["fileToUpload"]["name"]);
        for($i=0; $i < $dosya_adeti; $i++) {
            $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$i];
            $fileName = $_FILES["fileToUpload"]["name"][$i];

            $dest_path = "images/".$fileName;

            if(move_uploaded_file($fileTmpPath, $dest_path)) {
                echo $fileName." dosyası yüklendi"."<br>";
            } else {
                echo $fileName."dosya yükleme hatası"."<br>";
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