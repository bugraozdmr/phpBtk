<?php
    echo "result :".(4*3);
    echo "<br>".is_int(4*2);
    echo "<br>".var_dump(is_int(4*2));
    echo "<br>".var_dump(is_int(4.2));

    echo "<br>".var_dump(is_numeric("a"));
    echo "<br>".var_dump(is_float(4.2));

    echo abs(-10).'<br>';
    echo ceil(4.3).'<br>';
    echo floor(4.3).'<br>';
    echo round(4.3).'<br>';

    echo sqrt(25).'<br>';

    echo max(3,2,5,1,56,2);
?>