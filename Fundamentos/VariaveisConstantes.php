<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F2 - Variáveis e Constantes</title>
</head>
<body>

    <!-- Quatro (4) aulas foram unidas neste mesmo arquivo.
        Aulas unidas:
            1-> "Variáveis do PHP"
            2-> "Criando variáveis"
            3-> "Mais sobre variáveis e tipos de variáveis"
            4-> "Constantes"
    -->

    <h3>Aula 1 - Introdução as variáveis pré-definidas</h3>

    <?php

        // Resumo da aula 1
        # Não precisamos necessariamente criar toda uma estrutura de HTML para escrevermos um código PHP (apesar de recomendado)
        # Estas "variáveis" na verdade são constantes, pois são "variáveis" internas do PHP que não devem ser alteradas
        # SERVER_NAME é o "nome" do nosso servidor ou hospedagem
        # SERVER_NAME seria o nome do nosso domínio se estivéssemos dentro de uma hospedagem
        # DOCUMENT_ROOT é o caminho da raiz do documento (a origem) e da onde que saiu o arquivo PHP executado
        # print_r é uma função que permite exibirmos todas as "variáveis dentro de outras variáveis"
        # o uso do "<pre></pre>" é utilizado para deixarmos a lista de variáveis mais organizada, estamos na prática envolvendo a saída do PHP com HTML

        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';
        echo $_SERVER['SERVER_NAME'];
        echo $_SERVER['DOCUMENT_ROOT'];
    ?>

    <h3>Aula 2 - Criando nossas próprias variáveis</h3>
    
    <?php
    
        // Resumo da aula 2
        # $<nome> é a sintaxe padrão da criação de uma variável
        # A reatribuição é simples, igual a declaração.
        # Podemos criar Strings (texto), números (int), doubles (10.02) boolean (true and false)
        # A concatenação é feita usando o ponto "."
        # O PHP ao colocarmos para printar true, retorna 1 e false retorna 0

        $name = 'Victor';
        echo $name;

        echo "<br>";

        $name = "Bianchi";
        echo $name;

        echo "<br>";

        $idade = 18;
        echo $idade;

        echo "<br>";

        echo "Meu nome é ".$name." e eu tenho ".$idade." anos";
    ?>

    <h3>Aula 3 - Constantes</h3>

    <?php

        // Resumo da aula 3
        # Constantes são definidas pela função define(<nome-da-contante>, <valor>)
        # Para chamar uma constante chamamos apenas seu nome, se usarmos "$<NOME>" um Warning será retornado

        define("COR_FAVORITA", "Navy Blue");
        echo COR_FAVORITA;
    ?>


</body>
</html>