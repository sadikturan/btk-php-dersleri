<?php


    $course = array(
        "title" => "javascript kursu",
        "description" => "ileri seviye javascript dersleri",
        "image" => "2.jpg"
    );

    echo $course["title"];

    // array => json string

    $jsonString = json_encode($course, JSON_PRETTY_PRINT);

    $myfile = fopen("course2.json","w");
    fwrite($myfile, $jsonString);
    fclose($myfile);




?>