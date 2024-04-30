<?php
    for($i = 0;$i < 10;$i++){
        if($i %2 == 0){
            echo $i.' ';
        }else{
            continue;
        }
    }


    $a = 0;

    echo '<br>';
    while($a < 10){
        echo $a.' ';
        $a++;
    }

    // dizilerde döngüler

    echo '<br>';
    $array = array(10,20,30,40);

    for($i = 0;$i < count($array);$i++){
        echo $array[$i].' ';
    }

    $array2 = array(
        array(10,20,30,20),
        array(3,21,31,40),
        array(40,20,35,02)
    );

    echo '<br>'.'<br>';

    $k = 0;
    while($k<count($array2)){
        echo ($k+1).'. array :';
        for($i = 0;$i<count($array2[$k]);$i++){
            echo $array2[$k][$i].' ';
        }
        $k++;

        echo '<br>';
    }

    $array3 = array(
        'arr1' => array(10,20,30,20),
        'arr2' => array(3,21,31,40)
    );

    $keys = array_keys($array3);

    for($i = 0;$i<count($array3);$i++){
        print_r($array3[$keys[$i]]);
        echo '<br>';
    }


    // foreach
    foreach($array as $element){
        echo $element.'<br>';
    }


    foreach($array3 as $element){
        foreach($element as $el){
            echo $el.' ';
        }
        echo '<br>';
    }

    foreach($array3 as $key => $value){
        echo $key.'<br>';
        echo $value[0]; // varsa direkt seslenir
    };
?>