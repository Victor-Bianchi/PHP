<?php

    $carros = ["HB20", "Onix", "Marea", "Argo", "Tipo", "Monza", "Gol", "Polo"];
    $modelos = ["Sense", "LTZ", "Turbo", "Active", "Cross", "SS"];
    $anos = [2004, 2023, 2022, 2010, 2012, 1980, 1990, 2007];

    # Array Merge: une dois ou mais arrays em apenas um

    $result = array_merge($carros, $modelos, $anos);
    print_r($result); // Array (21)
    echo "<hr>";

    # Array Intersect Key: verifica chaves iguais e retorna um array contendo as primeiras

    $result = array_intersect_key($carros, $modelos);
    print_r($result); // Array (5)
    echo "<hr>";

    # Array Map: aplica uma função em todos os valores de um array

    $result = array_map("strrev", $carros);
    print_r($result);

?>