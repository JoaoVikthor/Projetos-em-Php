<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Azulejos</title>
</head>
<body>
   <div class="azul">

<h1>System Dimensional <br> <span style="padding-left: 75px;">of Azulejos </span><box-icon name='edit' type='solid' ></box-icon> </h1>
<div class="centro">
    <form method="get" action="azul.php">
<h3>Entre com os dados de:</h3> 
<h3>Comprimento :</h3>
<input type="number" name="com" placeholder="Comprimento" required>
<h3>Largura :</h3>
<input type="number" name="lar" placeholder="Largura" required>
<h3>Altura :</h3>
<input type="number" name="al" placeholder="Altura" required>
<br><br>
<input type="submit" value="calcular">
<br><br>
</form>
</div>

    <?php

//variaveis
    $comp = $_GET['com'];
    $larg = $_GET['lar'];
    $alt = $_GET['al'];

    //Calculo da Metragem 
    $area = ($larg * ($comp * $alt)) / 100 * 1.5;

    

    ?>
<br><br>
<textarea cols="60" name="" id=""><?php echo ' O numero de caixas utilizadas será o valor de: ' . (round($area)) . ' caixas. ';?></textarea>

</body>

</html>