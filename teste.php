<?php

require 'conexao.php';

$res = $connection->query("SHOW VARIABLES LIKE 'auto_inc%'");

var_dump($res->fetchAll(PDO::FETCH_ASSOC));

?>
