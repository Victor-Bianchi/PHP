<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 - Cálculo de Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="box">
            <h1 class="title">Cálculo de Médias</h1>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label for="n1">Número 1</label>
                <input type="number" name="n1" id="n1" placeholder="Ex: 10" step="0.01">
                <label for="p1">Peso 1</label>
                <input type="number" name="p1" id="p1" placeholder="Ex: 2">
            
                <label for="n2">Número 2</label>
                <input type="number" name="n2" id="n2" placeholder="Ex: 20" step="0.01">
                <label for="p2">Peso 2</label>
                <input type="number" name="p2" id="p2" placeholder="Ex: 1">

                <input type="submit" name="sbmt" value="Calcular">
            </form>

            <?php 
            
                if(isset($_POST['sbmt'])) {
                    $n1 = $_POST['n1'] ?? 0;
                    $n2 = $_POST['n2'] ?? 0;
                    $p1 = $_POST['p1'] ?? 1;
                    $p2 = $_POST['p2'] ?? 1;

                    $ma = number_format((($n1 + $n2) / 2), 2, ",", ".");
                    $mp = number_format(((($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2)), 2, ",", ".");

                    echo "A média artimética é: $ma <br>";
                    echo "A média ponderada é: $mp";
                }
            ?>

        </div>
    </div>

</body>
</html>