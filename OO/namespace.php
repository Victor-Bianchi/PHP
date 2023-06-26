<?php 
    include('./classeLatam.php');
    include('./classeAzul.php');

    use function \TudoAzul\impress;
    use \TudoAzul\dado;

    $azul = new \TudoAzul\classeAzul; # Essa é a forma de se acessar namespaces
    impress("Olá<br>");
    echo $dado;
?>