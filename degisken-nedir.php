<?php

    $maasAli = 21000;
    $maasMehmet = 16000;
    $maasVolkan = 24000;

    $vergiOrani1 = 0.25;
    $vergiOrani2 = 0.35;

    echo $maasAli - ($maasAli * $vergiOrani1);    // Ali maaş
    echo "<br>";
    echo $maasMehmet - ($maasMehmet * $vergiOrani1);    // Mehmet maaş
    echo "<br>";
    echo $maasVolkan - ($maasVolkan * $vergiOrani2);    // Volkan maaş

?>