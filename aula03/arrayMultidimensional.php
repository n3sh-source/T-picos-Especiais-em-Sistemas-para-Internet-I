<?php
//Arrays dentro de um Array
/*
    Strings em ""

    $arrayPrincipal = array(
        'arraySecundario1' => array('indice' => 'elemento'),

        'arraySecundario2' => array('indice' => 'elemento'),

        'arraySecundario3' => array('indice' => 'elemento')
    );
*/
    $carro = array('Fusca' => array('ano' => 1977,
                                    'marca' => "Volkswagen",
                                    'acessórios' => "Rádio AM"),

                   'Kombi'=> array('ano' => 1975,
                                   'marca' => "Volkswagen",
                                   'acessórios' => "pintura saia e blusa"),

                   'Belina' => array('ano' => 1981,
                                     'marca' => "Ford",
                                     'acessórios' => "Rádio AM")
);

//Exibindo os elementos do Array
echo nl2br($carro['Kombi']['acessórios']."\n");
echo nl2br($carro['Fusca']['acessórios']."\n");

//Um pequeno texto com foreach
foreach($carro['Fusca'] as $valores)
print "$valores\t";

?>