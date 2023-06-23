<?php 

    /**
     * GROUP BY como já deu para ver pelo nome, é uma forma de agrupar informações do banco de dados, de modo que, ao
     * perceber uma informação repetida (com base no que foi passado para o GROUP BY) este operador SQL apenas ignora 
     * as informações que tiverem o cargo igual, retornando apenas o primeiro e os demais não serão retornados.
     * No caso, no código SQL abaixo apenas Victor e Felipe serão executados, visto que são os primeiros a ter o cargo no DB
     * "DESC" ou "ASC" são uma outra forma de se ordenar, no caso, em ordem decrescente ou crescente
     * 
     * O LIMIT é usado para limitar a quantidade de dados que são retornados, no caso, apenas 2 dados será retornado do DB
     * 
     * ORDER BY é uma forma de ordenar os dados recebidos, neste caso o GROUP BY juntamente com o ASC ou DESC funciona de maneira
     * semelhante, mas o correto é usar o ORDER BY primeiro
     */

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');
    $sql = $pdo->prepare('SELECT * FROM `clientes_GOL` GROUP BY `cargo` ORDER BY id ASC LIMIT 2');
    $sql->execute();
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";

?>