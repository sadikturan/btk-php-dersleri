<?php

    /*
        and => x ve y nin true olmasıyla sonuç true olur.
        or  => x ve y den her hangi birinin true olmasıyla sonuç true olur.
        xor => x ve y den her hangi birinin true sonuç false olur.
        !   => x in tersini alır.
    */

    $yas = 20;
    $mezuniyet = "lise";

    $sonuc = ($yas >= 18) and ($mezuniyet=="lise");  //  true & false => false

    // and
    // false & false => false
    // true & false => false
    // true & true => true

    // or
    // true & false => true
    // true & true => true
    // false & false => true
    $sonuc = ($yas >= 18) and ($mezuniyet=="lise" or $mezuniyet=="üniversite" or $mezuniyet=="yükseklisans");

    // xor
    // true & false => true
    // true & true => false
    // false & false => false

    // not
    $sonuc = !(false);
    echo var_dump($sonuc);

?>