<?php
    echo 10%2;

    $a = 10;

    echo '<br>'.$a++;
    echo '<br>'.$a;

    echo '<br>'.++$a;
    echo '<br>'.$a;

    $b =20;

    $a **= $b;
    echo '<br>'.$a;

    $a .= $b;
    echo '<br>'.$a;

    $ad = 'grant';
    $soyad = 'smith';

    $ad .= ' '.$soyad;
    echo $ad;

    // karşılaştırma operatoru -- bu true false değil -1 0 1 döner
    echo 20 <=> 30;
?>