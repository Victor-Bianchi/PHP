<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');
    $sql = $pdo->prepare("LOCK TABLES `clientes_GOL` WRITE");
    $sql->execute();
    $info = $sql->fetchAll();

    sleep(10);

    /**
     * Podemos fazer o travamento das tabelas para fazer uma inserção e evitar erros pois
     * pode ser que no momento de fazer essa inserção de dados esteja havendo uma consulta no DB
     * E isso costuma dar erros
     * 
     * Importante destacar que o WRITE ao final permite operações de escrita e de leitura, mas
     * Pode ser que apenas a leitura seja util então READ deve ser colocado. Veja abaixo um código SQL
     * LOCK TABLES minha_tabela WRITE;
     * INSERT INTO minha_tabela (coluna1, coluna2, coluna3) VALUES (valor1, valor2, valor3);
     * UNLOCK TABLES;
     */
?>