<?php
    $a = 10;
    $b = 20;
    $c = 5;

    // 1.
    echo (($a*$b) - ($a+$b+$c)).'<br>';
    // 2.
    echo (($a+$b+$c)%3).'<br>';
    // 3.
    echo ($b **= $c).'<br>';
    // 4.
    echo var_dump(($a<100) and ($a>50)).'<br>';
    // 5.
    echo var_dump(($a>0) and ($a%2==0)).'<br>';
    // 6.
    $vize = 40;
    $final_n = 60;

    // uğraşmayım if else yok şuan 
    $not = ($vize*0.4)+($final_n*0.6);
    echo ($not>50) ? 'geçti':'kaldı';   // ternary
?>