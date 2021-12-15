<?php

    $connection;

    $tableClientes = "clientes";


    $user   = 'root';
    $pw     = '';
    $dbname = 'oil_sistem';
    $host   = 'localhost';

    $connectionString = "mysql:host=".$host.";dbname=".$dbname.",".$user.",".$pw;

    $connection = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$pw);
    
?>
