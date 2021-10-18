<?php
    //Imports
    require_once 'Conta_Bancaria.class.php';
    require_once 'Conta_Corrente.php';
    require_once 'Conta_Poupanca.php';

    //Criando Objetos
    $cb = new Conta_Bancaria(000001, "CC.001.01", 100);
    $cc = new Conta_Corrente(000002, "CC.002.02", 200, 200);
    $cp = new Conta_Poupanca(000003, "CC.003.03", 500);

        print "Conta Bancária: {$cb->getInfo()} <br>\n";
        print "      Saldo atual: {$cb->getSaldo()} <br>\n";
        $cb->depositar(0.90);
        print "      Depósito de: 0.90 <br>\n";
        print "      Saldo atual: {$cb->getSaldo()} <br>\n";
        $cb->contabilizar(0.66);
        print "      Saldo atual: {$cb->getSaldo()} <br>\n";

        print "<br>\n Conta Corrente: {$cc->getInfo()} <br>\n";
        print "      Saldo atual: {$cc->getSaldo()} <br>\n";
        $cc->depositar(-500.90);
        print "      Depósito de: -500.90 <br>\n";
        print "      Saldo atual: {$cc->getSaldo()} <br>\n";
        $cc->contabilizar(-1.66);
        print "      Saldo atual: {$cc->getSaldo()} <br>\n";

        print "<br>\n Conta Poupança: {$cp->getInfo()} <br>\n";
        print "      Saldo atual: {$cp->getSaldo()} <br>\n";
        $cp->depositar(70.50);
        print "      Depósito de: 70.50 <br>\n";
        print "      Saldo atual: {$cp->getSaldo()} <br>\n";
        $cp->contabilizar(3.36);
        print "      Saldo atual: {$cp->getSaldo()} <br>\n";

?>