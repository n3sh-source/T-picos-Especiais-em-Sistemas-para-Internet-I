<?php
    //Imports
    include_once 'Cliente_Reforma.php';

    //Instanciando classe
    $cr = new Cliente_Reforma;
    
    //Print e chamada de metodos
    echo "<br>\nSERVIÇOS DA REFORMA DO BANHEIRO";
    $cr->trocar_pisos();
    $cr->faz_pintura();
    $cr->trocar_lampadas();
    echo "<br>\nValor Toral da Reforma: R$".$cr->fazer_orcamento(2300.99,3464.88);
?>