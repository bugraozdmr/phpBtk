<?php
    function yazi_tura($secim){
        switch($secim){
            case 1:
                echo "yazi";
                break;
            case 2:
                echo "tura";
                break;
            default:
                echo "tanımsız";
                break;
        }
    }

    function tam_bolenler($sayi){
        $dizi = array();
        for($i = 1; $i <= $sayi/2; $i++){
            if($sayi % $i == 0){
                array_push($dizi,$i);
            }
        }

        array_push($dizi,$sayi);

        return $dizi;
    }

    echo yazi_tura(2);
    echo '<br>';
    echo var_dump(tam_bolenler(100));
    echo '<br>';
    $test = tam_bolenler(200);
    foreach($test as $key => $value){
        echo $value.' ';
    }


    function topla(...$sayilar){
        $toplam = 0;

        foreach($sayilar as $key => $value){
            $toplam += $value;
        }

        return $toplam;
    }

    echo topla(2,1,2,3);
?>