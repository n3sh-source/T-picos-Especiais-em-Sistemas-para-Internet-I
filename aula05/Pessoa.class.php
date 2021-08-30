<?php
    class Pessoa{
        //Atributos da class
        private $code;
        private $nome;
        private $altura;
        private $idade;
        private $nascimento;
        private $escolaridade;
        private $salario;

        //Metodo construtor
        function __construct($code, $nome, $altura, $idade, $nascimento,           
        $escolaridade, $salario){

            $this->code = $code;
            $this->nome = $nome;
            $this->altura = $altura;
            $this->idade = $idade;
            $this->nascimento = $nascimento;
            $this->escolaridade = $escolaridade;
            $this->salario = $salario;        
        }

        //Metodos get
        public function get_code(){
            return  $this->code;
        }

        public function get_nome(){
            return $this->nome;
        }

        public function get_altura(){
            return  $this->altura;
        }

        public function get_idade(){
            return  $this->idade;
        }

        public function get_nascimento(){
            return  $this->nascimento;
        }

        public function get_escolaridade(){
            return  $this->escolaridade;
        }

        public function get_salario(){
            return  $this->salario;
        }

        //Metodo destrutor
        function __destruct(){
            echo "Objeto {$this->nome} finalizado...<br>\n";
        }
    };
?>