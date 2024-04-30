<?php
    $notlar = array(10,20,30);

    $plakalar = array("34" => "istanbul",58 => "sivas");

    echo count($notlar);
    echo ' '.count($plakalar);
    echo '<br>'.print_r($plakalar);

    //elamnı sona ekler
    array_push($notlar,100);
    //elamnı başa ekler
    array_unshift($notlar,200);
    // elemanı sondan silme
    array_pop($notlar);
    // elemanı baştan silme
    array_shift($notlar);

    echo count($notlar);
    echo '<br>'.print_r($plakalar);

    // sırala - artan
    sort($notlar);
    
    asort($plakalar); // value
    ksort($plakalar); // key -e göre sıralar
    // sırala - azalan
    rsort($plakalar);
    arsort($plakalar);


    // string to array
    $str = "ankara,06";
    $arr = explode(",",$str);

    echo print_r($arr);

    // array to string
    $arr = array("sadikturan","mail@sadaikturna");
    $str = implode(",",$arr);

    "<br>".print_r($arr);
    echo $str;

    print_r(array_count_values($notlar));

    // key value yer değiştirme
    print_r(array_flip($plakalar));

    // rastgele değer getir diziden -- index
    $index = array_rand($notlar);
    echo $notlar[$index];

    $indexes = array_rand($notlar,2);
    echo '<br>'.$notlar[$indexes[0]];
    echo ' '.$notlar[$indexes[1]];

    print_r($indexes);
?>