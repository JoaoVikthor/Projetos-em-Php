<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Conversor</title>
</head>
<body>
    
<h1 class="letreiro">Conversor de Temperatura <br> 
de <br>
Fahrenheit para <span style="color: red;">Celsius</span> </h1>
<br><br>

<div class="corpo">

<form action="conversor.php" method="get">

    <input type="number" name="f" placeholder="Fahrenheit">
    <br><br>
    <input class="botao" type="submit" name="b" value="Converter">

</form>

</div>

<?php

$temp=$_GET["f"];

echo  "<script>alert(($temp-32)*5/9);</script>";
?>

</body>
</html>