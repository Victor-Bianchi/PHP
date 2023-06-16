<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6 - Anatomia da Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="box">
            <h1 class="title">Anatomia de uma divisão</h1>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="dividendo" placeholder="Ex: 120" step="0.01">

                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="divisor" placeholder="Ex: 2" step="0.01">

                <input type="submit" value="Calcular" name="sbmt">
            </form>

            <?php 
                if(isset($_POST['sbmt'])) {
                    $dividendo = (int) $_POST['dividendo'] ?? 0;
                    $divisor = (int) $_POST['divisor'] ?? 1;

                    $quociente = intdiv($dividendo, $divisor);
                    $resto = $dividendo % $divisor;

                    echo "Resultado: <strong>". number_format(($dividendo / $divisor), 2 ,",", ".")."</strong><br>"."<br>";

                    echo "Dividendo: $dividendo"."<br>";
                    echo "Divisor: $divisor"."<br>";
                    echo "Quociente: $quociente"."<br>";
                    echo "Resto: $resto"."<br>"."<br>";

                    if ($resto == 0) {
                        echo "<strong>Portanto, essa divisão é exata!</strong>";
                    } else {
                        echo "<strong>Portanto, essa divisão não é exata (real)</strong>";
                    }
                }
            
            ?>
        </div>
    </div>

</body>
</html>