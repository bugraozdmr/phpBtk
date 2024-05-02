<?php
    function intro(){
        $paramteresayisi = func_num_args();

        if($paramteresayisi == 0){
            echo 'paramatre yok';
        }
        else{
            $parametreler = func_get_args();
            foreach($parametreler as $parametre){
                echo '<br>'.$parametre;
            }
        }
    }

    intro();
    intro('ali','mehmet','grant');
?>