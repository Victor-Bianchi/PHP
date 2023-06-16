<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8 - Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="box">
            <h1 class="title">Raízes</h1>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num">Número</label>
                <input type="number" name="numero" id="num" placeholder="Ex: 64">
                <input type="submit" value="Analisar" name="sbmt">
            </form>

            <?php 
            
                if(isset($_GET['sbmt'])) {
                    $numero = $_GET['numero'] ?? 1;
                    $sqrt = sqrt($numero);
                    $sqrt3 = pow($numero, (1/3));

                    echo "A raiz quadrada do número $numero é $sqrt"."<br>";
                    echo "A raiz cúbica do número $numero é $sqrt3";
                }
            
            ?>

        </div>
    </div>

</body>
</html>