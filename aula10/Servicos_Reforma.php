<?php
    interface Servicos_Reforma{
        //Metodos da interface
        public function trocar_pisos();
        public function faz_pintura();
        public function trocar_lampadas();
        public function fazer_orcamento($mao_obra, $material);

        //Declaração de constante (SÓ EXISTE EM PHP)
        const desconto = 100;
    }
?>