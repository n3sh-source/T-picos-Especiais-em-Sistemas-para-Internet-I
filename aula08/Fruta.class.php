<?php
    class Fruta{
        //Atributos
        protected $arvore;
        protected $nm_fruta;
        protected $preco;

        //Metodos
        public function __construct($detalhe){
            print "Detalhe da fruta: <br> {$detalhe}<br>\n";
        }

        //Arvore
        public function set_arvore($arvore){
            $this->arvore = $arvore;
        }

        public function get_arvore(){
            return $this->arvore;
        }

        //Nome
        public function set_nm_fruta($nm_fruta){
            $this->nm_fruta = $nm_fruta;
        }

        public function get_nm_fruta(){
            return $this->nm_fruta;
        }

        //Preço
        public function set_preco($preco){
            $this->preco = $preco;
        }

        public function get_preco(){
            return $this->preco;
        }
    }
?>