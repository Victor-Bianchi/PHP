<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F3 - Arrays</title>
</head>
<body>

    <?php

        // Resumo da aula
        # Podemos declarar o array usando a função array() (linha 18)
        # Podemos adicionar um valor ao final do array usando a sintaxe vista na linha 21
        # Podemos escolher qual índice colocar com a sintaxe da linha 26
        # A versão moderna de declaração é vista na linha 31 é a mesma da linha 18
        # Podemos criar um array com dados de diversos tipos
        # Podemos criar um array com chaves personalizadas

        $frutas = array("Melão", "Maçã", "Banana", "Goiaba");
        echo $frutas[3];

        echo "<br>";

        $frutas[] = "Pitaya";

        echo $frutas[4];

        echo "<br>";

        $frutas[69] = "Tomate";

        print_r($frutas);

        echo "<br>";

        $vegetais = ["Pepino", "Cenoura", "Gengibre", "Abobrinha"];
        echo $vegetais[3];

        echo "<br>";

        $info['nome'] = "Victor";
        $info['sobrenome'] = "Nunes Bianchi";
        $info['idade'] = 18;

        echo "Meu nome completo é ".$info['nome']." ".$info['sobrenome']." "." e eu tenho ".$info["idade"]." anos";
    ?>
    

    <!-- diferença no uso das aspas duplas e uso da contrabarra-->

</body>
</html>