<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 - Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1 class="title">Resultado</h1>
            <?php
                $number = $_POST['number'] ?? 0;
                $antecessor = (int) $number - 1;
                $sucessor = (int) $number + 1;

                echo "<p>O número digitado foi: $number</p>";
                echo "<p>O seu antecessor é: $antecessor</p>";
                echo "<p>O seu sucessor é: $sucessor</p>";

                # Problemas ao usar POST
                # Problemas ao deixar o number vazio
            ?>
        </div>
    </div>
</body>
</html>