<?php

     /*    
        a = b   	a = b	
        a += b	    a = a + b		
        a -= b	    a = a - b		
        a *= b	    a = a * b		
        a /= b	    a = a / b		
        a %= b	    a = a % b	    
        a **= b	    a = a ** b	
        a .= b      a = a . b    
    */

    $a;

    $a = 20;
    $b = 20;
    $c = $a;
    $d = ($a + 10) * 3;

    // $a += $b;       // $a = $a + $b;
    // $a -= $b;       // $a = $a - $b;
    // $a *= $b;       // $a = $a * $b;
    // $a /= $b;       // $a = $a / $b;
    // $a %= $b;       // $a = $a % $b;
    // $a **= $b;      // $a = $a ** $b;
    // $a .= $b;       // $a = $a ** $b;

    $ad = "Sadık ";
    $soyad = "Turan";

    $ad .= $soyad;

    echo $a, $b, $c, $d, $ad;


?>