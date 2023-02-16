<?php

    /*
        ==	    Equal	                    $x == $y		
        ===	    Identical	                $x === $y	
        !=	    Not equal	                $x != $y	
        <>	    Not equal	                $x <> $y		
        !==	    Not identical	            $x !== $y	
        >	    Greater than	            $x > $y	
        <	    Less than	                $x < $y	
        >=	    Greater than or equal to	$x >= $y		
        <=	    Less than or equal to	    $x <= $y		
        <=>	    Spaceship	                $x <=> $y	
    */

    $a = 30;
    $b = 40;
    $username = "sadikturan";

    $sonuc = ($a == $b);
    $sonuc = ($a != $b);
    $sonuc = ($username != "sadikturan");
    $sonuc = ($a === $b);
    $sonuc = ($a !== $b);
    $sonuc = ($a > $b);
    $sonuc = ($a >= $b);
    $sonuc = ($a < $b);
    $sonuc = ($a <= $b);
    $sonuc = ($a <=> $b);

    echo $sonuc;
    // echo var_dump($sonuc);

?>