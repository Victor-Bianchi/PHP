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
?>