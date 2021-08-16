<?php
    //Definindo indices e atribuindo valores no array carro
    $carro['marca'] = "Volkswagen";
    $carro['modelo'] = "Fusca";
    $carro['cor'] = "Verde";
    $carro['preço'] = 5500.00;

    //Diminui o preço
    $carro['preço'] -= 500.00;
    /*
        Nota: É possível manipular os valores do array 
        os acessando pelos seus indices
    */


    //Exibindo os valores do array
    echo nl2br($carro['marca']."\n");
    echo nl2br($carro['modelo']."\n");
    echo nl2br($carro['cor']."\n");
    echo nl2br($carro['preço']."\n");
?>