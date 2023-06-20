<?php 

    # Uma classe que possui diversos atributos (variáveis) assim como executar diversas ações (métodos)
    # Um arquivo PHP que apenas tem uma classe pode ter a extensão .class.php
    # A função include() inclui um arquivo ou classe PHP em outro

    class Pessoa {
        # Instância: objeto de Pessoa

        /**
         * REGRAS DE VISIBILIDADE EM PHP
         * -- PUBLIC: disponível para qualquer um que tenha a instância ou a classe (qualquer um acessa)
         * -- PROTECTED: disponível apenas em quem tem a classe ou a herança da mesma (só a dona, a herdeira)
         * -- PRIVATE: disponível apenas dentro do escopo da função de origem (só a dona)
         */

        private $nome = 'Victor';
        private $sobrenome = 'Nunes Bianchi';
        private $idade = 18;

        public static $labor = "Desenvolvedor Back-end <br>"; # atributo estático

        public function aniversario() {
            echo "Parabéns pra você! :D <br>";
            $this->idade++; # notação ponto é diferente aqui
        }

        public function resumo() {
            echo 'Seu nome é '. $this->nome." ". $this->sobrenome. " e você tem ". $this->idade." anos.<br>"; # this tem o cifrão, a variável não
        }
    }

    /**
     * RESUMO DE ORIENTAÇÃO A OBJETOS EM PHP
     * -- Class
     * -- Instance
     * -- Static
     * -- Final Class
     * -- Abstract
     * -- Self
     * -- Extends
     * -- Interface
     * -- Implements
     */

    # Instância está no arquivo introdução.php
    # Classe Final não pode ser herdada, pois é final, não vai mais para frente
    # Herança de classes é feita via extends
    # Podemos reescrever uma classe pai, na filha, a classe nova irá entrar em ação, mas, dentro da classe reescrita podemos chamar a antiga usando parent::nome
    # Classes abstratas (Abstract) só podem ser passadas por herança, não podem ser instanciadas. Métodos abstratos tem sua declaração obrigatória pela classe herdeira.
    # A chamada de classes estáticas é feita através do padrão: Classe::atributo, mas para chamar o método estático dentro da própria classe usamos self::metodo

?>