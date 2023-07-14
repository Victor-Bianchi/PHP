<?php 
    // Aqui é um arquivo de configuração, somente variáveis e constantes e outros itens de configuração

    session_start();

    function MyAutoload($class) {
        include('classes/'.$class.'.php');
    };

    spl_autoload_register("MyAutoload");
    
    define('INCLUDE_PATH', 'http://localhost/PHP/Exercicios/PE1/'); # O path (caminho) principal do nosso sistema
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');
    define('HOST', 'localhost');
    define('DATABASE', 'pe1');
    define('USER', 'root');
    define('PASSWORD', '');
?>