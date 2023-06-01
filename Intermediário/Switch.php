<?php

    $nome = "Victor";

    switch($nome) {
        case "Victor":
            echo "O melhor nome de todos!";
            break;
        case "João":
            echo "O nome mais comum do Brasil";
            break;
        case "Maria":
            echo "Outro nome mais comum do Brasil";
            break;
        case "Antônio":
            echo "Nome antigo mas na moda";
            break;
        default:
            echo "Belo nome!";
            break;
    }

    echo "<br>";

    for ($i=0; $i <= 10; $i++) {
        if($i == 5) {
            continue; // não executa mais nada abaixo do loop e passa para o próximo loop (pula o 5 e vai pro 6)
            break; // Sai do loop e lê o próximo código
            die(); // Mata o código todo, sai do loop mas não executa mais nada
        }

        echo $i."<br>";
    }

    echo "Quebra!";

?>