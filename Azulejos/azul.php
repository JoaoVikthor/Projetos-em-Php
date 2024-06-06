<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azulejos</title>
</head>

<body>

    <?php

    $comp = $_GET['com'];
    $larg = $_GET['lar'];
    $alt = $_GET['al'];

    $area = ($larg * ($comp * $alt)) / 100 * 1.5;
    
    echo 'O numero de caixas utilizadas será o valor de: '. (round($area) ).' caixas. <br>';
    


    ?>

</body>

</html>