<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Media Escolar </title>
</head>

<body>

    <h1> Media Escolar </h1>

    <form action="media.php" method="get">
        <input type="number" name="nota1" required min="0" placeholder="Insira a Nota 01">
        <input type="number" name="nota2" required min="0" placeholder="Insira a Nota 02">
        <input type="number" name="nota3" required min="0" placeholder="Insira a Nota 03">
        <input type="number" name="nota4" required min="0" placeholder="Insira a Nota 04">
        <input type="submit" value="Calcular Média">
        <br><br>
    </form>


<?php

//Variavel e Captura de Input 

$media1=$_GET["nota1"];
$media2=$_GET["nota2"];
$media3=$_GET["nota3"];
$media4=$_GET["nota4"];

 $resultado = ($media1 + $media2 + $media3 + $media4) /4;
//Função de Calculo de Média

function calculo_das_Medias($resultado){
  echo "O valor de resultado é: $resultado ";
}

calculo_das_Medias($resultado);

if($resultado>=7){
    echo "Aprovado";
}elseif($resultado>=5){
    echo "Recuperção";
}else {
    echo "Exame Final";
}

ob_flush();

flush();

sleep(5);

 echo "<a href='index.html'>Voltar</a>"

?>





</body>

</html>