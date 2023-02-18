<?php


    // $sayi = 60;

    // if($sayi == 5) {
    //     echo "beş";
    // } elseif ($sayi == 6) {
    //     echo "altı";
    // } else {
    //     echo "yanlış veri";
    // }

    // switch($sayi) {
    //     case 5:
    //         echo "beş";
    //         break;
    //     case 6:
    //         echo "altı";
    //         break;
    //     default:
    //         echo "yanlış veri";
    // }

use Random\BrokenRandomEngineError;

    $not = 70;

    // if($not>=0 and $not<25){
    //     echo "notunuz: 0";
    // } elseif ($not>=25 and $not<45) {
    //     echo "notunuz: 1";
    // } elseif ($not>=45 and $not<55) {
    //     echo "notunuz: 2";
    // } elseif ($not>=55 and $not<70) {
    //     echo "notunuz: 3";
    // } elseif ($not>=70 and $not<85) {
    //     echo "notunuz: 4";
    // } elseif ($not>=85 and $not<100) {
    //     echo "notunuz: 5";
    // } else {
    //     echo "yanlış";
    // }

    // switch(true) {
    //     case ($not>=0 and $not<25):
    //         echo "notunuz: 0";
    //         break;
    //     case ($not>=25 and $not<45):
    //         echo "notunuz: 1";
    //         break;
    //     case ($not>=45 and $not<55):
    //         echo "notunuz: 2";
    //         break;
    //     case ($not>=55 and $not<70):
    //         echo "notunuz: 3";
    //         break;
    //     case ($not>=70 and $not<85):
    //         echo "notunuz: 4";
    //         break;
    //     case ($not>=85 and $not<100):
    //         echo "notunuz: 5";
    //         break;
    //     default:
    //         echo "yanlış";
    // }


    $ay = "temmuz";

    switch($ay) {
        case "aralık":
        case "ocak":
        case "şubat":
            echo "kış";
            break;
        case "mart":
        case "nisan":
        case "mayıs":
            echo "ilkbahar";
            break;
        case "haziran":
        case "temmuz":
        case "ağustos":
            echo "yaz";
            break;
        case "eylül":
        case "ekim":
        case "kasım":
            echo "sonbahar";
            break;
        default:
            echo "yanlış";
    }



?>