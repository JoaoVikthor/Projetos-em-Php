<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitStop</title>
</head>

<body>

    <?php

    // Receber os dados do usuário
    $comprimento_pista = $_GET['comprimento_pista']; // em metros
    $total_voltas = $_GET['total_voltas'];
    $num_reabastecimentos = $_GET['num_reabastecimentos'];
    $consumo_carro = $_GET['consumo_carro']; // em Km/L
    

    // comprimento da pista para quilômetros
    $comprimento_pista_km = $comprimento_pista / 1000;

    //  número de voltas 
    $voltas_por_reabastecimento = $total_voltas / ($num_reabastecimentos + 1);

    // Calculo a distância 
    $distancia_primeiro_reabastecimento = $comprimento_pista_km * $voltas_por_reabastecimento;

    //  número mínimo de litros 
    $litros_necessarios = $distancia_primeiro_reabastecimento / $consumo_carro;

    //  Converter para inteiro 
    $litros_formatados = $litros_necessarios*1000;

    echo "Número mínimo de litros necessários para percorrer até o primeiro reabastecimento: " .( round($litros_formatados));
    
    ?>

</body>

</html>