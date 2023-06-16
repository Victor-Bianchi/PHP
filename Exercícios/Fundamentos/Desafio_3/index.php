<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 - Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1 class="title">Conversor de Moedas</h1>

            <?php
                $cotacao = 4.82;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); # internacionalização
                
                echo "Cotação do dólar hoje: <strong>". numfmt_format_currency($padrao, $cotacao, "BRL")."</strong>";
            ?>

            <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                <input type="number" name="real">
                <input type="submit" value="Converter" name="sbmt">
            </form>
            
            <?php
                if(isset($_POST['sbmt'])) {
                    $reais = $_POST['real'];
                    $dolares = $reais / $cotacao;

                    echo "Seus ". numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a ". numfmt_format_currency($padrao, $dolares, "USD");
                }

            ?>

        </div>
    </div>
</body>
</html>