<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema Salario</title>
</head>

<body>


    <h1>Pobre Calculator</h1>

<a href="index.html" ></a>

    <?php

    // Variaveis do Formulario
    $salario = $_GET['Salario'];
    $trabalho = $_GET['Trabalho'];
    

    //Variaveis de Desconto
    
    $bruto = $salario * $trabalho;
    $liquido = $bruto - 0.24;
    $imposto_de_renda = $bruto - (100/11);
    $INSS = $bruto - (100/8);
    $sindicato = $bruto - (100/5);

    //Variavel de Salario Minimo
    $salario_minimo = 1420;

    // Calculo dos descontos 
    
    echo " Salário Bruto : R$ " .number_format($bruto ,"2",",") ." / ";
    " <br><br>";
    ob_flush();
    flush();
    sleep(2);
    echo " IR (11%) : R$ " .number_format($imposto_de_renda ,"2",",")." / ";
    " <br><br>";
    ob_flush();
    flush();
    sleep(2);
    echo " INSS (8%) : R$ " .number_format($INSS ,"2",",")." / ";
    " <br>";
    ob_flush();
    flush();
    sleep(2);
    echo " Sindicato ( 5%) : R$ " .number_format($sindicato ,"2",",")." / ";
    " <br><br>";
    ob_flush();
    flush();
    sleep(2);
    echo " Salário Liquido : " .number_format($liquido ,"2",",")." / ";
    " <br><br> ";


    //Quantidade de Salarios   
    switch ($liquido) {
        case $liquido <= 1420:
            echo " Voçê receber até 1 salario Minimo. ";
            break;
        case $liquido <= 2840:
            echo " Voçê Recebe até 2 Salarios Mininos. "; ;
            break;
        case $liquido <= 4260:
            echo " Voçê Recebe até 3 Salarios Mininos. ";;
            break;
        case $liquido > 4260:
            echo " Voçê Recebe mais que 3 Salarios mininos. ";
            break;
    }

    ?>

</body>

</html>

