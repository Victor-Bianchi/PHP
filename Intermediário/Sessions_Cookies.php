<?php

    # Dado disponível até o fechamento do navegador, fechamento da aba não afeta o dado.
    # Cookie expira de acordo com o tempo, é resistente a fechamento de aba e navegador.

    session_start();

    # $_SESSION['nome'] = "Victor";
    echo $_SESSION['nome'];
    # unset($_SESSION['nome'])
    # session_destroy();

    # setcookie('sobrenome', 'Bianchi', time() + 10, '/');
    echo $_COOKIE['sobrenome'];
    # Não tem uma função específica para a remoção de cookies, utilizar tempo negativo pode ajudar
?>