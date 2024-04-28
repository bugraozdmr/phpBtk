<?php

    $maas = 2000;

    echo 2000-(200*0.2);
    echo '<br>';
    echo 2000-(1000*0.45);
    echo '<br>';

    $maas = $maas*(1-0.4);
    echo $maas;

    echo '<br>';
?>

<?php
    $ad = "Grant";
    $soyad = "Smith";

    echo $ad.' '.$soyad;
    $sayi1 = 50;
    $sayi2 = 1000;

    /*
    $1sayi = 2000; 
    --> hatalı 
    */

    echo $sayi1.$sayi2;
?>

<?php
    echo '<br>';

    $strurun = "urun";
    echo gettype($strurun);
    echo '<br>';

    $sayi = 1231;
    echo gettype($sayi);
    echo '<br>';
    
    $doub = 123.3;
    echo gettype($doub);
    echo '<br>';

    $boolesas = false;
    echo gettype($boolesas);
    echo '<br>';

    $dizi = [];
    echo gettype($dizi);
    echo '<br>';

    $doub = (int)$doub;
    echo  gettype($doub);

    $a = (int)"20a50";
    echo gettype($a).' ';
    echo $a;
?>