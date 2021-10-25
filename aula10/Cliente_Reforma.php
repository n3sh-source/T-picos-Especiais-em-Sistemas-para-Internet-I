<?php
    //Imports
    include_once 'Servicos_Reforma.php';

    class Cliente_Reforma implements Servicos_Reforma{
        //Atributos
        private $mao_obra;
        private $material;
        private $orcamento;
        private $abatimento= Servicos_Reforma::desconto;

        //Implementando metodos da interface
        public function trocar_pisos(){
            echo "<br>\ntroca de pisos antigos por 4m² de piso de ardósia";
        }

        public function faz_pintura(){
            echo "<br>\npintura do teto com esmalte sintético e limpeza dos azulejos da parede";
        }

        public function trocar_lampadas(){
            echo "<br>\nretirar lâmpadas incandescentes e instalar lâmpadas de led 18w com revisão da fiação";
        }

        public function fazer_orcamento($mao_obra, $material){
            return $orcamento = $mao_obra + $material - $this->abatimento;
        }
    }
?>