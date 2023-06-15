<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <?php
        if(isset($_GET['sbmt'])) {
            $nome = $_GET['nome'];
            $email = $_GET['email'];
        }
    ?>

    <form action="">
        <input type="text" name="nome" placeholder="Seu nome">
        <input type="email" name="email" placeholder="Seu e-mail">
        <input type="submit" name="sbmt" value="Enviar">
    </form>

    <?php
        if(isset($_GET['sbmt'])) {
            echo "<h1>Seus dados</h1>"."<br>";
            echo $nome."<br>";
            echo $email."<br>";
        }
    ?>

    <!--
        Em casos onde temos select com o mesmo nome de name o último valor selecionado (se houverem múltiplos) será retornado
        Para retornar todos os elementos selecionados, devemos usar a nomenclatura "valor[]" para dentro do name do select. Neste
        caso usamos um forEach para percorrer o array e recuperar os valores.
    -->

</body>
</html>