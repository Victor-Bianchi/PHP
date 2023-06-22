<?php 
    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_POST['sbmt'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $pdo = new PDO('mysql:host=localhost;dbname=DB', 'root', '');
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)"); # "?" é usado para inserir os valores dinamicamente (forms)

        $valid = $sql->execute([$nome, $sobrenome, $momento_registro]); # então é necessário passar as variáveis aqui
        if ($valid) {
            echo "✅ Inserção realizada com sucesso";
        } else {
            echo "❌ Erro, inserção não realizada";
        }
    }
?>