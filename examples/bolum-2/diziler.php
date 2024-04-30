<?php
    $renk1 = "Kırmızı";
    $renk2 = "Kırmızı";
    $renk3 = "Kırmızı";

    $dizi = array("mavi","sarı","yeşil");

    echo gettype($dizi).'<br>';
    echo $dizi[0].'<br>';


    foreach($dizi as $d){
        echo $d.' ';
    }
?>