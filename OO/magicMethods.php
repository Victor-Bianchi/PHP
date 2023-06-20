<?php 

    class MagicInTheAir {

        private $nome = "Usuário";
        private $sobrenome = "Anônimo";
        private $dado_1 = "Informação 1";
        private $dado_2 = "Informação 2";

        # Métodos mágicos são método que começam com __ antes de seu nome

        public function __construct($nome, $sobrenome, $dado_1, $dado_2)
        { 
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->dado_1 = $dado_1;
            $this->dado_2 = $dado_2;
        }

        private function AtomicPow($str) 
        {
            $strTransform = strtoupper($str);
            return $strTransform;
        }

        public function Magisk($spell, $data) {
            if ($spell == "Atomic Pow") {
                return $this->AtomicPow($data);
            } else {
                echo "<pre>
                Puffss!... ✡
                Your spell didn't work, try another one
                </pre>";
            }
        }

        public function __get($name)
        {
            if ($name == "nome") {
                if ($this->nome != "Usuário") {
                    echo $this->nome;
                } else {
                    echo "Nome não informado";
                }
            } else {
                echo "Calma aí";
            }
        }

    }

?>