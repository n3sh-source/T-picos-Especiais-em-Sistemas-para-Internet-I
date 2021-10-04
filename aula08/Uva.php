<?php
    class Uva extends Fruta{
        //Atributos
        protected $origem;
        
        //Metodo construtor
        public function __construct($f){
            parent::__construct($f);
        }

        //Metodos
        public function set_origem($origem){
            $this->origem = $origem;
        }

        public function get_origem(){
            return $this->origem;
        }

    }
?>