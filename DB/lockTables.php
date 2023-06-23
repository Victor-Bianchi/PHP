<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');
    $sql = $pdo->prepare("SELECT * FROM `clientes_GOL`");
    $sql->execute();
    $info = $sql->fetchAll();

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";
?>