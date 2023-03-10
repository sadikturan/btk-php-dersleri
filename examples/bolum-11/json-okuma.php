<?php

    $myfile = fopen("course.json","r");
    $size = filesize("course.json");

    $jsonString = fread($myfile, $size);

    echo $jsonString;
    echo "<br>";
    echo gettype($jsonString);  // string
    echo "<br>";
    // echo $jsonString["title"];

    //  string to array => decode
    $jsonArray = json_decode($jsonString, true);
    echo $jsonArray["title"];
    echo "<br>";
    echo $jsonArray["description"];
    echo "<br>";
    echo $jsonArray["image"];

?>