<?php

    /**
     * CONDICIONAIS EM PHP
     * --> If
     * --> Else
     * --> Else If
    */

    $numero_1 = 10;
    $numero_2 = 10;
    $fruta = "banna";

    if($numero_1 == $numero_2) {
        echo "Os número são iguais";
    } else {
        echo "Os números não são iguais";
    }

    if($fruta == "banana") {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A condição bateu!</title>
</head>
<body>
    <h1>A condição bateu, "banana" é a fruta</h1>
</body>
</html>

<?php
    } # Este é o fechamento do If acima, tudo o que estiver "dentro" desse escopo é executado se a condição bater
    else {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A condição não bateu!</title>
</head>
<body>
    <h1>A condição não bateu, "banana" não é a fruta :(</h1>
</body>
</html>

<?php
    } # fechamento do else
?>