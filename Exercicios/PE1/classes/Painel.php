<?php 

class Painel
{
    public static function isLogin() {
        return isset($_SESSION['login']) ? true : false;
    }

    public static function logout() {
        session_destroy();
        header('Location: '.INCLUDE_PATH_PAINEL);
    }

    public static function getCargo($cargo) {
        $cargos = ['Cliente', 'Gerente','Administrador'];
        return $cargos[$cargo];
    }
}


?>