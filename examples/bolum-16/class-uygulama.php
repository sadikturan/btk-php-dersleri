<?php

    # Comment isminde bir sınıf oluşturunuz.
    # Comment sınıfı username, text, likes, dislikes isminde özelliklere sahip olsun.
    # Comment sınıfı display_comment() isminde bir metoda sahip olsun.
    # 5 adet farklı comment nesnesi oluşturup döngü yardımıyla yorumlarını ekrana yazdırınız.
    
    require "Comment.php";

    $c1 = new Comment("sadikturan","çok güzel",10,5);
    $c2 = new Comment("cinarturan","çok iyi değil");
    $c3 = new Comment("adabilgi","idare eder",10);
    $c4 = new Comment("adabilgi","idare eder",10);
    $c5 = new Comment("adabilgi","idare eder",10);

    $comments = [$c1, $c2, $c3, $c4, $c5];

    foreach($comments as $comment) {
        echo $comment -> display_comment();
    }

    // echo $c1->display_comment();
    // echo "<br>";
    // echo $c2->display_comment();
    // echo "<br>";
    // echo $c3->display_comment();


?>