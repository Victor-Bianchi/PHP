<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');

    $id = 4;

    # No SET podemos colocar vírgulas para colocar mais itens para atualizar
    $sql = $pdo->prepare("UPDATE `clientes` SET sobrenome='Alencar' WHERE id=$id"); # para colocar mais parâemtros no WHERE podemos usar o AND ou o OR

    if($sql->execute()) {
        echo "Atualização concluída com sucesso";
    }
?>