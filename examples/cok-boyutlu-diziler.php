<?php
    $ogrenciA = array("Grant smith",array(10,20,30));
    $ogrenciB = array("Will Grant",array(10,20,30));


    echo $ogrenciA[0];
    echo $ogrenciB[1][2];

    $ogrenciC = array("new" => array(
        'key' => 'hello',
        'value1' => 'hi',
        'value2' => 'hallo',
        'marks' => array(
            'matematik' => array(10,20,30),
            'fizik' => array(10,20,30)
        )
    ));

    echo '<br>'.$ogrenciC['new']['key'];
    echo '<br>'.$ogrenciC['new']['value2'];

    echo '<br>'.$ogrenciC['new']['marks']['fizik'][2];
?>