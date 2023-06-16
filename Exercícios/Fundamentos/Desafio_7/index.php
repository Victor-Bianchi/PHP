<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 - Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="box">
            <h1 class="title">Anatomia de uma divisão</h1>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="salario">Salário</label>
                <input type="number" name="salario" id="Salario" placeholder="Ex: 1200" step="0.01">
                <input type="submit" name="sbmt" value="Calcular">
            </form>

            <small>* Considerando 1 salário mínimo como R$ 1.380,60</small>

            <?php 

                if(isset($_POST['sbmt'])) {
                    $salario = $_POST['salario'] ?? 0;
                    $sm = 1_380.60;

                    $qtSms = intdiv($salario, $sm);
                    $sobras = number_format(($salario % $sm), 2, ",", ".");

                    echo "<br>"."<br>"."Você ganha $qtSms salários mínimos e mais R\$ $sobras";
                }
            ?>

        </div>
    </div>

</body>
</html>