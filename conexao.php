<?php

    $connection;

    $tableClientes = "clientes";


    $user   = 'bc42cec6aee079';
    $pw     = 'c7a66b5c';
    $dbname = 'heroku_7e8128184ecbd0a';
    $host   = 'us-cdbr-east-05.cleardb.net';

    $connection = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pw);

    
    $increment = $connection->query("set @@auto_increment_increment=1");
    $offset = $connection->query("set @@auto_increment_offset=1");
    
?>
