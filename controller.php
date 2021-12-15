<?php

    require "conexao.php";

    $requestType = $_POST['type'];

    if($requestType == "get-carros"){

        $sql = $connection->query("SELECT * FROM carros");

        echo json_encode($sql ? $sql->fetchAll(PDO::FETCH_ASSOC) : false); 

    }

    if($requestType == "create-carro"){

        $carro = $_POST["carro"];
        
        $sql = $connection->prepare("insert into carros (carro_name) values (?)");
        $sql->bindValue(1,$carro,PDO::PARAM_STR);
        $sql.execute();

        echo json_encode("foi");
    
    }

    if($requestType == "delete-carro"){

        $id = $_POST["id"];

        $sql = $connection->query("DELETE FROM carros WHERE carro_id = $id");

        echo json_encode("foi");

    }

?>