<?php
    function say_hi(){
        for($i= 0;$i< 10;$i++){
            echo "hi";
        }
    }

    // say_hi();

    function say_hi_to($name){
        return 'hi '.$name;
    }

    $text = say_hi_to('grant');
    echo '<br>'.$text;
    echo '<br>'.say_hi_to('Smith');
?>