<?php
    // sadece belirtilen parametreler olabilir diyor -- eksik parametreyide kabul etmez
    declare(strict_types=1);                // sadece int döner demek float felan değil
    function toplama(int $sayi,int $sayi2) : int{
        return $sayi+$sayi2;
    }


    // echo toplama(20,"10") hata
    echo toplama(20,10);
?>