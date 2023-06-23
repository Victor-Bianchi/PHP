<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');
    $sql = $pdo->prepare("SELECT * FROM clientes_GOL WHERE nome LIKE '%i%'");   
    $sql->execute();
    $info = $sql->fetchAll();

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";
?>

O Operador LIKE irá fazer buscas no DB e irá retornar para o usuário de acordo com a busca inserida
Importante destacar que é feita sempre entre aspas simples ou duplas e nunca crases ou espaços vazios
além do mais o padrão é o seguinte:
    - %a: tudo o que termina com a
    - a%: tudo o que começa com a
    - %a%: tudo em que tem a em algum lugar