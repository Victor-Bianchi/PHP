<?php 

    include('./second.interface.php');

    class Third implements Second {

        public function printOnScreen($msg)
        {
            $msg = $msg ?? "Olá mundo!";
            echo $msg;
        }

        public function sumNumbers($number1, $number2)
        {
            $number1 = $number1 ?? 1;
            $number2 = $number2 ?? 1;

            echo $number1 + $number2."<br>";
        }
    }

    # No caso, somos obrigados a declarar todos os métodos abstratos da interface de igual modo está lá, até o nome.

?>