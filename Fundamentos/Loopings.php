<?php

    # Laço For

    for($i=0; $i <=10; $i++) {
        echo $i."<br>";
    }

    # Laço While

    $i = 0;

    while($i <= 10) { # necessita de declaração de variável externa
        echo $i."<br>";
        $i++;
    }

    # Laço Do While

    do {
        echo $i."<br>"; # não necessita, pega as externas sem necessidade de declaração
        $i++;
    } while($i <= 20);

    # ForEach

    $array = array("Melão", "Maçã", "Banana", "Pitaya", "Abacate", "Manga", "prime"=>"Mini Tangerina"); # chave personalizada

    foreach($array as $key => $value) {
        echo $key;
        echo " => ";
        echo $value;
        echo "<br>";
    }
    
    echo "Tamanho máximo: ".count($array); # lenght
?>