<?php 
    
    $query = $_GET['q'];
    $cat_query = isset($_GET['category']) ? $_GET['category'] : '';

    echo 'Our master loves '.$query.' in '.$cat_query;
?>