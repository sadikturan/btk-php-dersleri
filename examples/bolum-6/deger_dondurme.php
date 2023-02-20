<?php


    function toplama() {
        return 20 + 30;
    }

    echo toplama();

    function sene() {
        return date('Y');
    }

    function saat() {
        return date('h');
    }

    function yasHesapla() {
        return sene() - 1990;
    }

    $yas = yasHesapla();

    function selamlama() {
        if(saat() < 12) {
            return "günaydın";
        } else {
            return "iyi günler";
        }
    }

    echo selamlama();

?>