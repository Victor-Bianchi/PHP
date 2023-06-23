<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # uma linha para ativar os erros do PDO (Debug)
    $sql = $pdo->prepare('SELECT *, `clientes_GOL`.`id` AS `clientes_GOL_id` FROM `clientes_GOL` LEFT JOIN cargos_GOL ON `clientes_GOL`.`cargo` = `cargos_GOL`.`id` UNION SELECT *, `clientes_GOL`.`id` AS `clientes_GOL_id` FROM `clientes_GOL` RIGHT JOIN cargos_GOL ON `clientes_GOL`.`cargo` = `cargos_GOL`.`id`');
    $sql->execute();
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";

    /**
     * Perceba que, pela escrita do código e lógica, ela é muito semelhante ao INNER JOIN e seu resultado também, então qual a diferença?
     * Em resumo, caso o script, ao acessar o id do cargo para retornar qual cargo cada cliente é não o encontrar o retorno vem vazio.
     * Ou seja, se o cargo indicado não existir o retorno do DB é simplesmente o nome do cliente com seu cargo em branco, diferente do 
     * INNER JOIN que se o cargo não existir nem mesmo o nome é retornado.
     * E o nome LEFT JOIN não é á toa, LEFT é esquerda do inglês e isso significa que a prioridade será a tabela da esquerda, no caso, clientes_GOL
     * Se fosse RIGHT JOIN a prioridade seria a direita, no caso, cargos_GOL
     * 
     * Veja que, ao usar LEFT JOIN todos os clientes são retornados (mesmo os que não possuem cargo), pois são prioridade, mas ao usar RIGHT JOIN
     * a coisa muda, pois ai os cargos são retornados, mesmo os que ninguém tem. Ninguém da lista é PO, mas ainda assim ele é retornado 
     * 
     * No caso do UNION seguido da mesma query somente substituindo LEFT por RIGHT temos uma forma de operar um FULL JOIN, onde podemos retornar tudo
     * das tabelas sem que haja validação efetiva
     */
?>