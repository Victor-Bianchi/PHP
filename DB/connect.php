<?php 
    # o PDO é uma classe nativa do PHP para fazer a conexão com o Bando de Dados

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');

    # O objeto PDO possui alguns métodos e dentro eles está o prepare, muito útil para evitar SQL Injection

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, 'Lucas', 'Beat', '2023-06-10 18:31:00')");

    # O retorno do prepare é outro objeto com outros métodos, no caso, um deles é o execute.

    $valid = $sql->execute();

    if ($valid) {
        echo "Os dados foram inseridos com sucesso";
    } else {
        echo "Algo de errado ocorreu";
    }
?>