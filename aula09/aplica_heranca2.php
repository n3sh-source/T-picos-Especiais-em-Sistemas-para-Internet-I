<?php
    //Imports
    require_once 'Conta_Bancaria.class.php';
    require_once 'Conta_Corrente.php';
    require_once 'Conta_Poupanca.php';
    require_once 'Consignado.php';

    //Criação de Objeto do tipo consignado
    $consig =  new Consignado(4400, "CC.29406.07", 3000, 8800, 10000);
        print "Conta: {$consig->getInfo()} <br>\n";
        print "      Saldo atual: {$consig->getSaldo()} <br>\n";
        $consig->depositar(330);
        print "      Depósito de: 330 <br>\n";
        print "      Saldo atual: {$consig->getSaldo()} <br>\n";

        $consig->retirar(100);
            print "      Retirada de: 100 <br>\n";
            print "      Saldo atual: {$consig->getSaldo()} <br>\n";
        
        $consig->set_emprestimo(600.87);
        $divida_total = ($consig->get_emprestimo() + $consig->get_divida());
        print "Divida Total: R$ {$divida_total} <br>\n";

?>