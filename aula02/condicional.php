<?php
    //Info funcionário
    $salario = 300.98;
    $tempo_servico = 30;
    $folga_fim_semana = false; //booleana

    //If composto
    if(($tempo_servico == 30) and ($salario > 500.98) and ($folga_fim_semana != true)){
        print_r('Dados errados do funcionário: ');// and = todos verdadeiros

    }elseif(($tempo_servico == 30) and ($salario == 300.98) and ($folga_fim_semana != true)){
        print_r('Dados corretos do funcionário: ');
    };

    //Formatação da saída
    print nl2br("\nTempo de Serviço: ".$tempo_servico."\nSalário: ".$salario."\nFolga: NÃO".$folga_fim_semana);
?>