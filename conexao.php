<?php

    $connection;

    $tableClientes = "clientes";


    $user   = 'b2a1a08b3cfae5';
    $pw     = '4ddf4ad1';
    $dbname = 'heroku_eba83246de940b2';
    $host   = 'us-cdbr-east-05.cleardb.net';

    $connectionString = "mysql:host=".$host.";dbname=".$dbname.",".$user.",".$pw;

    $connection = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pw);
    
?>
