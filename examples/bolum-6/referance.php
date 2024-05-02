<?php
    // baştaki ampersan bu hafızada saklanan eleman ile işlem yap diyor
    function topla(&$x){
        $x += 20;

        echo $x;
    }

    $x = 10;
    topla($x);
    
    echo '<br>'.$x;
?>