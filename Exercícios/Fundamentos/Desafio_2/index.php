<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 - Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1 class="title">Sorteador de Números</h1>
            <p>Sorteando números aleatórios de 0 a 100</p>
            <?php
                if (isset($_POST['sbmt'])) {
                    $rand = rand(0, 100);
                    echo "(rand) O número sorteado foi <strong>$rand</strong>"."<br>";

                    $mt_rand = mt_rand(0, 100);
                    echo "(mt_rand) O número sorteado foi <strong>$mt_rand</strong>"."<br>";

                    $random_int = random_int(0, 100);
                    echo "(random_int) O número sorteado foi <strong>$random_int</strong>";
                }
            ?>
            
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="submit" name="sbmt" value="Sortear">
            </form>
        </div>
    </div>
</body>
</html>