<?php
    function somatoria($a){

        static $b;
        /*
        Variáveis do tipo static 
        conservam seus valores 
        da sua última execução
        */

        $b += $a;// $b = $b + $a;
        
        echo "Valor de a = $a, Valor de b = $b <br>\n";
    }

    somatoria(2);
    somatoria(4);
    somatoria(6);
?>