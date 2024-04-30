<?php
    $ad = 'Grant';
    $soyad = 'Smith';

    $mesaj = "Everyone keep thinking about who is right ...But we all know that person who is right is <br>".$ad." - ".$soyad;

    $mesaj2 = "<br>go say hi to $ad - $soyad";

    echo $mesaj;
    echo $mesaj2;
    echo $mesaj2[8];    // 8.karakter
    

    echo '<br>'.strlen($mesaj).'<br>';
    echo '<br>'.str_word_count($mesaj).'<br>';
    echo '<br>'.strtoupper($mesaj).'<br>';
    echo '<br>'.ucfirst($mesaj).'<br>';     // baş harf büyük
    echo '<br>'.str_replace('keep','loses mind',$mesaj).'<br>';
    echo '<br>'.str_replace(['keep','who'],['loses mind','ironman'],$mesaj).'<br>';

    echo '<br>'.trim($mesaj).'<br>';
?>