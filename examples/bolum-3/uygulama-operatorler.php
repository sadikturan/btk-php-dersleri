<?php
   
     $a = 111; 
     $b = 250; 
     $c = 500;

     // 1- a, b çarpımı ile a, b, c toplamının farkı nedir?

     $sonuc = ($a * $b) - ($a + $b + $c);
     
     // 2- a, b, c toplamının mod 3'ü nedir?
     $sonuc = ($a + $b + $c) % 3;
     
     // 3- b' nin c. kuvvetini hesaplayınız.
     $sonuc = $b ** $c;
     
     // 4- a için 50-100 arasında kontrolü yapınız.          
     // (50<$a<100)

     $sonuc = ($a > 50 and $a < 100);
     
     // 5- a için pozitif çift kontrolü yapınız.
     $sonuc = ($a > 0 and $a % 2 == 0);

     // 6 - username ve password ile uygulama giriş kontrolü yapınız.

     $username = "sadikturan";
     $password = "1234";

     $sonuc = ($username == "sadikturann" and $password=="1234");
     // echo "giriş durumu: ".$sonuc;

     // 7- a,b,c için büyüklük kontrolü yapınız.
     $sonuc = ($a > $b and $a > $c);
     // echo "a en büyük".$sonuc."<br>";

     $sonuc = ($b > $a and $b > $c);
     // echo "b en büyük".$sonuc."<br>";

     $sonuc = ($c > $a and $c > $b);
     // echo "c en büyük".$sonuc."<br>";

     // 8- 2 vize(%60) ve final(%40) notuna göre ortalama hesaplayınız.
     //   a- Eğer ortalama 50 ve üstündeyse geçti değilse kaldı yazdırın.
     //   b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
     //   c- Geçmek için finalden 70 alındığında ortalamanın önemi olmasın.

     $vize1 = 10;
     $vize2 = 10;
     $final = 68;

     $ortalama = (($vize1 + $vize2) / 2) * 0.6 + ($final * 0.4);
     // $gecmeDurumu = ($ortalama >= 50);
     // $gecmeDurumu = ($ortalama >= 50 and $final >=50);
     $gecmeDurumu = ($ortalama >= 50 or $final >=70);

     echo $ortalama."<br>";
     echo "geçme durumu: ".(int)$gecmeDurumu;

?>