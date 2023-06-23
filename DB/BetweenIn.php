<?php 

    $ids = range(1, 10);
    $idsString = implode(',', $ids);

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');
    $sql = $pdo->prepare("SELECT * FROM clientes_GOL WHERE id IN ($idsString)");

    $sql = $pdo->prepare("SELECT * FROM clientes_GOL WHERE id BETWEEN 1 AND 12");

    $sql->execute();
    $info = $sql->fetchAll();

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";
?>

Em resumo, os dois fazem "a mesma coisa" porém o IN é capaz de pegar valores individuais, como apenas o id 1 e 2 já o BETWEEN é mais útil quando queremos pegar algo entre uma coisa ou outra
No caso do código acima, temos uma adaptação do IN para que ele faça a mesma coisa que o BETWEEN e veja só quanto código desnecessário

OBS: SOBRE O HAVING, É A MESMA COISA QUE O WHERE, SÉRIO, A ÚNICA DIFERENÇA É QUE O WHERE VEM ANTES DO GROUP BY E O HAVING VEM DEPOIS