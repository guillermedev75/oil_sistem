<?php

require 'conexao.php';

$sql = $connection->query("set @@auto_increment_increment=1;set @@auto_increment_offset=1");


var_dump($res->fetchAll(PDO::FETCH_ASSOC));

?>
