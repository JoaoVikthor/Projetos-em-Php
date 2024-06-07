<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

<div class="stop">
      <h1>PitStop System Calculator <box-icon name='flag-checkered' type='solid' ></box-icon></h1> 

    <div class="pit">
        <form method="get" action="pitstop.php">
            <h3>Comprimento de Pista</h3>
            <input type="number" name="comprimento_pista" placeholder="comprimento de Pista" required step="0.001">
            <h3>Total de Voltas a serem Percorridas</h3>
            <input type="number" name="total_voltas" placeholder="Total de Voltas " required
                step="0.001">
            <h3>Reabastecimentos desejados</h3>
            <input type="number" name="num_reabastecimentos" placeholder="Reabastecimentos " required
                step="0.001">
            <h3>Consumo de Combustivel</h3>
            <input type="number" name="consumo_carro" placeholder="Consumo  " required step="0.001"> <br>
            <br>
            <input type="submit">
        </form>
        

    </div>
</div>

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

    ?>
  <br>  
<textarea name="" id="" cols="50" ><?php echo " Número mínimo de litros necessários para percorrer até o primeiro reabastecimento: " .( round($litros_formatados)); ?></textarea>

<script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
</body>

</html>