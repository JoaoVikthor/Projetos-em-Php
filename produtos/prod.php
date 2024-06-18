<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Produtos</title>
</head>
<body>
    
<h1>Verificador de Produtos</h1>

<form action="prod.php" method="get">

<input type="number" required min="0" placeholder="digite um numero" name="codigo">
<input type="submit" value="verificar" >

</form>


<?php

$cod=$_GET["codigo"];

$mostrar;


$produtos=[1=>"Sul",2=>"Norte",3=>"Leste",4=>"Oeste",5=>"Nordeste",6=>"Nordeste",7=>"Sudeste",8=>"Sudeste",9=>"Sudeste",10=>"Centro-Oeste",11=>"Noroeste"];

for($i=1 ; $i<=11; $i++){
    if($cod==$i){
          $mostrar = $produtos[$i]; break;
    }   
    else{
        $mostrar="Produto Importado";
       }     
}

echo $mostrar;

?>

</body>
</html>