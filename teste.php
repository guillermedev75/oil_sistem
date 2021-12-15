<?php

require 'conexao.php';

$res = $connection->query("SET @@auto_increment_increment=1");
$res = $connection->query("SET @@auto_increment_offset=1");

var_dump($res->fetchAll(PDO::FETCH_ASSOC));

?>
