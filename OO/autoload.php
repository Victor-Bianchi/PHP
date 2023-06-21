<?php 

    function autoLoad($class) {
        $class = str_replace('\\', '/', $class); # essencial
        if(file_exists("classesAutoload/$class.php")) {
            include("classesAutoload/$class.php");
        } else {
            echo "A classe informada não existe";
        }
    }

    spl_autoload_register('autoLoad');
    
    new utilidades;
    new Home\inicial();
?>