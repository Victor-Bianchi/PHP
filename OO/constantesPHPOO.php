<?php 

    class constantes {

        const VALOR = 165;

        function __construct()
        {   
            echo self::VALOR; # também usa para referenciador métodos estáticos
        }
    }


    new constantes;

    echo constantes::VALOR; # como se fosse um atributo estático
?>