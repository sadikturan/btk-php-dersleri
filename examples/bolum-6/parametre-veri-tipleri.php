<?php

    declare(strict_types=1);
    function toplama(int $sayi1, int $sayi2, bool $isActive, array $sayilar): float {
        return $sayi1 + $sayi2 + 1.3;
    }

    echo toplama(10, 20, true, [10,20]);



?>