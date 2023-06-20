<?php 

    # Não pode ser instanciada assim como Classes Abstratas
    # Atributos e métodos aqui não serão instanciados, somente terão o corpo
    # Tudo dentro do escopo da interface será abstrato, sendo obrigatório a classe implementadora implementar os métodos idênticos aos que estão aqui

    interface Second {

        public function printOnScreen($param);
        public function sumNumbers($number1, $number2);

    }
?>