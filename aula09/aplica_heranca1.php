<?php
    //Imports
    require_once 'Conta_Bancaria.class.php';
    require_once 'Conta_Corrente.php';
    require_once 'Conta_Poupanca.php';

    //Criação dos Objetos
    $contas = array();
    $contas[0] = new Conta_Corrente(6677, 'CC.1234.56', 300, 400);
    $contas[1] = new Conta_Poupanca(6678, 'PP.1234.57', 100);

    //Percorre as contas
    foreach($contas as $key => $conta){
        print "Conta: {$conta->getInfo()} <br>\n";
        print "      Saldo atual: {$conta->getSaldo()} <br>\n";
        $conta->depositar(200);
        print "      Depósito de: 200 <br>\n";
        print "      Saldo atual: {$conta->getSaldo()} <br>\n";

        if($conta->retirar(700)){
            print "Retirada de: 700 <br>\n";
        }else{
            print "Retirada de: 700 (NÃO permitida)<br>\n";
        }

        print "      Saldo atual: {$conta->getSaldo()} <br>\n";
    }
?>