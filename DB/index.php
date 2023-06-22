<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
</head>
<body>
    <h1>Banco de Dados</h1>
    <h3>Inserção de Dados</h3>

    <form action="insert.php" method="post">
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome" placeholder="Ex: Victor" required>
        <label for="sobrenome">sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Ex: Nunes" required>
        <input type="submit" value="Enviar" name="sbmt">
</form>
</body>
</html>