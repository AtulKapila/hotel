<?php 

    define('DB_USER','root');
    define('DB_PASSWORD', '');
    define('DB_HOST','localhost');
    define('DB_NAME','hotel');
    $dbc = @mysqli_connect('localhost','root','','hotel') OR die('Could not connecct to SQlData'.mysqli_connect_error());
    
    //st the encoding..
    mysqli_set_charset($dbc,'utf8');
?>