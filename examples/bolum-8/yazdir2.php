<?php
    $name = isset($_POST['name']) ?  $_POST['name'] : '';
    $password = isset($_POST['password']) ?  $_POST['password'] : '';

    echo $name.' '.$password;
?>