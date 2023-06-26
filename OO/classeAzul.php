<?php 

    namespace TudoAzul;

    include('./classeGol.php');
    # use, as

    class classeAzul
    {
        function __construct()
        {
            echo "<h3><strong>Azul</strong></h3>";
            echo "Tudo novo, Tudo Azul<br>";
            new \classeGol; # namespace global
            new \Pass\classeLatam; # namespace específico
        }
    }

    function impress($txt) {
        echo $txt;
    }

    $dado = "Eu sou um dado!";
?>