<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');

    $id = 5;

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=$id");

    if($sql->execute()) {
        echo "A exclusão foi feita com sucesso";
    } else {
        echo "Um erro ocorreu...<br>";
    }
?>