<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=db', 'root', '');
    $sql = $pdo->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT * FROM categorias WHERE nome = 'Terror')"); // nexting
    $sql->execute();

    $info = $sql->fetchAll();

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";
?>

A lógica é a seguinte, a coluna categoria_id deveria receber um número, já que no Banco de Dados está configrado para tal. Porém ao invés de passar isso, passamos diretamente o nome "terror".
Entretanto para que o banco de dados consiga ler e entender que terror = 1 é preciso fazer uma outra seleção que agora retorna apenas as categorias cujo nome é terror e isso é passado diretamente para
a primeira seleção.