<?php
    $yas = 20;
    $mezuniyet = 'yuksek';

    $sonuc = (($yas>18) and ($mezuniyet=='lise'));

    echo var_dump($sonuc);

    $sonuc2 = ($yas>18) or ($mezuniyet=='lise');

    echo var_dump($sonuc2);
?>