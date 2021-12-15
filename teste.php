<?php

require 'conexao.php';

$sql = $connection->query("SET @@auto_increment_increment=1; SET @@auto_increment_offset=1");


var_dump($res->fetchAll(PDO::FETCH_ASSOC));

?>
