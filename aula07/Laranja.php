<?php
    class Laranja extends Fruta{
        //Atributos
        protected $cor;

        //Metodos
        public function __construct($f){
            parent::__construct($f);
        }

        //Cor
        public function set_cor($cor){
            $this->cor = $cor;
        }

        public function get_cor(){
            return $this->cor;
        }
    }
?>