<?php
    class Dados_complementares{
        //Atributos
        private $endereco;
        private $estado_civil;
        private $grau_instrucao;

        //Metodo construtor
        function __construct($endereco, $estado_civil, $grau_instrucao){
            $this->endereco = $endereco;
            $this->estado_civil = $estado_civil;
            $this->grau_instrucao = $grau_instrucao;
        }

        //Metodos get
        public function get_endereco(){
            return  $this->endereco;
        }

        public function get_estado_civil(){
            return  $this->estado_civil;
        }

        public function get_grau_instrucao(){
            return  $this->grau_instrucao;
        }
        
    };
?>