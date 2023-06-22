<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM posts");
    $sql->execute();

    $info = $sql->fetchAll(); # retorna um array com todas as informações

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";

    # podemos usar forEach ou for para formatar esses dados e fazer uma relação entre elas

    $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();
    $info = $sql->fetchAll();

    foreach ($info as $key => $value) {
        $categoria_id = $value['id'];
        echo 'Exibindo Posts de categoria: '.$value['nome'];
        echo "<br>";
        $sql = $pdo->prepare("SELECT * FROM posts WHERE id=$categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();

        foreach ($infoPosts as $key => $value) {
            echo 'Título: '.$value['titulo'];
            echo "<br>";
            echo 'Conteúdo: '.$value['conteudo'];
            echo "<hr>";
        }
    }

    # Uma outra forma de se fazer tudo isso é utilizando o Inner Join

    /**
     * O Inner Join é como se fosse um "operador de união" ele junta duas tabelas em apenas uma e retorna a junção das mesmas. Utilizar o Inner
     * Join juntamente com o ON possibilita fazermos uma relação direta entre tabelas, de forma semelhante ao que fizemos no grande código digitado acima
     * mas aqui, ao que parece, é mais "automático".
     */

     /**
      * O uso do ON é obrigatório no INNER JOIN porque é por meio dessa cláusula que você define a condição de junção entre as tabelas. 
      * Essa condição é usada para determinar quais linhas das tabelas envolvidas devem ser combinadas.
      * ~ CHAT GPT
      */

      // O uso do "." (ponto) na sequência abaixo: `posts`.`categoria_id` serve para acessar a coluna de uma respectiva tabela, sempre segue: `tabela`.`coluna`

    $sql = $pdo->prepare("SELECT * FROM posts INNER JOIN categorias ON `categorias`.`id` = `posts`.`categoria_id`"); # relação direta com as tabelas usando o ON

    /**
     * Perceba que houve um "sumiço" pois o id da ordem dos posts simplesmente sumiu, isso porque houve um conflito de nomes, para resolver isso, basta usar o código abaixo:
     * O código em resumo, vai selecionar tudo assim como já fizemos, porém agora ele irá renomear a coluna id de posts para post_id usando o AS isso para remover o nome 
     * repetido e assim conseguirmos ver o ID na tela.
     */

    $sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` AS `post_id` FROM posts INNER JOIN categorias ON `categorias`.`id` = `posts`.`categoria_id`");

    $sql->execute();
    $info = $sql->fetchAll(PDO::FETCH_ASSOC); # útil para apenas retornar o nome da coluna e não números e coisas repetidas

    echo "<pre>";
        print_r($info);
        echo "<hr>";
    echo "</pre>";

    /**
     * Perceba que a saída desta sequência de código acima é literalmente a junção entre as tabelas posts e categorias, uma vez que ao selecionar tudo
     * apenas da tabelas posts teremos como retorno apenas as colunas da tabela posts, porém, com estes trecho acima temos a junção (literalmente) das
     * tabelas posts e categorias com os seus valores e suas colunas, de forma organizada, pelo uso do ON.
     */
?>