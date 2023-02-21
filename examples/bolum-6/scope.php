<?php

    // global scope
    
    $x = 5;
    
    echo $x;
    
    function test() {
        // local scope
        $GLOBALS["x"] = 10;
    }
    
    test();

    echo $x;

?>