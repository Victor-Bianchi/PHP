<?php 

    /**
     * Padrão Factory
     * Em resumo, evita-se de se usar o operador new, ao invés disso, usa-se um método estático responsável
     * pela criação das classes (a instância na verdade)
     */

    class Cachorro {
        public function __construct() 
        {
            echo "Classe do Cachorro<br>";
        }
    }

    class Gato {
        public function __construct() 
        {
            echo "Classe do Gato<br>";
        }
    }

    class Animal {
        public static function build($className) {
            if(class_exists($className)) {
                return new $className;
            } else {
                die("<strong>Build Error</strong>: a classe informada não existe.");
            }
        }
    }

    Animal::build('Gato');

    /**
     * Padrão Facade
     * É um padrão onde todas as ações são focadas dentro de uma única classe de modo que as
     * ações realizadas são feitas chamando classes externas para dentro dessa única classe
     * sem fazer diversas instâncias
     */

    // São criadas classes mães que terão dentro delas funções relativas a mesma

    class Carrinho {
        public function fecharCarrinho() {
            echo "O carrinho foi fechado com sucesso<br>";
        }

        public function abrirCarrinho() {
            echo "O carrinho foi aberto com sucesso<br>";
        }

        # e outras funções relativas ao carrinho
    }

    class Frete {

        private $frete;

        public function __construct($newFrete = 10)
        {
            if($newFrete) {
                $this->frete = (int) $newFrete;
            } else {
                return 0;
            }
        }

        public function getFreteAtual() {
            echo "O frete atualmente está em $this->frete<br>";
        }

        public function calcularFreteMais() {
            $this->frete+=10;
        }

        public function calcularFreteMenos() {
            $this->frete-=10;
        }

        # e outras funções relativas ao frete
    }

    // Classe principal, de onde irá ter o retorno final

    class loja {
        public function main() { # função principal, a única que será chamada no software todo
            $this->fecharCarrinho();
            $this->calcularFrete();
        }

        // Definição de funções desejadas para a classe principal
        
        private function fecharCarrinho() {
            $carrinho = new Carrinho;
            $carrinho->fecharCarrinho();
        }

        private function calcularFrete() {
            $frete = new Frete;
            $frete->calcularFreteMais();
            $frete->getFreteAtual();
        }
    }

    $loja = new loja;
    $loja->main();
?>