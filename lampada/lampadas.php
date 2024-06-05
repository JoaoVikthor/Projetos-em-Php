<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lampadas</title>
</head>
<body>
    
<?php

//variaveis

$watts=$_GET["wat"];
$largura=$_GET["lar"];
$comprimento=$_GET["comp"];


$area = $largura * $comprimento;
$total = ($area *$watts) / 18 ;


echo "Com a largura de $largura e comprimento de $comprimento são necessários ".number_format($total);



?>
    
</body>
</html>