<?php 
    include('./first.class.php');
    include('./third.class.php');
    include('./magicMethods.php');

    $pessoa_1 = new Pessoa;
    $pessoa_1->aniversario();
    $pessoa_1->resumo();

    echo Pessoa::$labor; # acessando valores estáticos, sempre ao nível de classe
    # Caso tente alterar algum valor estático, todas as outras "instâncias dele" serão alteradas também. Portanto pense bem

    echo "<hr>";

    $classe = new Third;
    $classe->printOnScreen("Hey!<br>");
    $classe->sumNumbers(10, 90);

    echo "<hr>";

    $magic = new MagicInTheAir("Usuário", "Bianchi", "Banana", "Melão");
    $magic->Magisk("Atomic Po", "Victor");
    $magic->__get("nome");
?>