<?php

    $string = "Operadores podem ser agrupados segundo o número de valores que aceitam. Operadores unários recebem um único valor, por exemplo ! (o operador lógico de negação) ou ++ (o operador de incremento). Operadores binários aceitam dois valores, como os operadores aritméticos + (soma) e - (subtração), além da maioria dos operadores PHP dessa categoria. Finalmente há um único operador ternário, ? :, que aceita três valores; normalmente conhecido simplesmente como o operador ternário (embora um nome melhor fosse operador condicional).";

    # Recorta uma parte da String com início e fim
    echo substr($string, 0, 10); // Operadores

    echo "<hr>";

    # Recorta uma frase ou texto com base em um delimitador e armazena os "cortes" dentro de um array
    $palavras = explode(" ", $string); // Array de 78 itens
    print_r($palavras);

    echo "<hr>";

    # Une um array com diversas palavras, o inverso do explode.
    $frase = implode(" ", $palavras); // $string
    echo $frase;

    echo "<hr>";

    # Remove as tags HTML ou PHP e retorna o conteúdo que está dentro
    $content = "<h1>Meu nome é Victor!</h1>";
    echo strip_tags($content); # Meu nome é Victor!

    echo "<hr>";

    # Não permite interpretação de códigos HTML ou PHP (tag <pre>)
    echo htmlentities("<h2>Olá?</h2>"); # <h2>Olá?</h2>


?>