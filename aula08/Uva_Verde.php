<?php
    class Uva_Verde extends Uva{
        //Atributos
        protected $madura;

        //Metodo construtor
        public function __construct($e){
            parent::__construct($e);
        }

        //Metodos
        public function set_madura($madura){
            $this->madura = $madura;
        }

        public function get_madura(){
            $this->madura;
            if($this->madura == True)
                return "Sim";
            else return "Não";
        }

        public function atributos(){
            echo nl2br("na hierarquia desta herança a classe Uva_Verde \naparece no mesmo nível que a classe Laranja_Bahia \ne pode acessar o atributo origem\n");
        }
    }
?>