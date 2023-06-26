<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=db', 'root', '');
    $tables = $pdo->query("SHOW TABLES");
    $tables = $tables->fetchAll();

    echo "<pre>";
        print_r($tables);
        echo "<hr>";
    echo "</pre>";

    $sql = 'CREATE TABLE Dinamic (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        city VARCHAR(30) NOT NULL,
        money int(10) NOT NULL,
        region VARCHAR(80) NOT NULL
    )';

    $pdo->exec($sql); // executa diretamente a String de SQL
?>