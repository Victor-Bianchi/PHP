<?php

define('HOST', 'localhost');
define('DBNAME', 'projeto_1');
define('USER', 'root');
define('PASS', '');


try {
    $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'erro ao conectar';
}

?>

O bloco try vai ser o responsável por não permitir que no caso de um erro, a senha e o usuário do DB sejam mostrados na tela do usuário
Isso pode ser perigoso, visto que pode ocorrer ataques cibernéticos caso seja feito um acesso desse ao DB.