<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste com HTML & PHP</title>
</head>
<body>
    <!-- Nota: Você pode usar o HTML dentro de um arquivo PHP -->
    <?php
        //Definir o horário em SP
        date_default_timezone_set('America/Sao_Paulo');

        //Informa a Hora do seu OS e é possível alterar a exibição no 'H:i:s'
        echo "Hora: ".date('H:i:s');
        
    ?>
</body>
</html>