<?php
    $x = 10;

    function getX(){
        // global erişme
        echo $GLOBALS['x'];
    }

    getX();
?>