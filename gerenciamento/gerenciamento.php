<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciamento de Clientes</title>
</head>
<body>
    
<h1>Gerenciamento de Clientes</h1>

<?php


$clientes= array(array("Nome" => "João Silva", "Idade"=> "35", "Cidade"=> "São Paulo"),array("Nome"=>"Maria Santos","Idade"=>"28","Cidade"=> "Rio de Janeiro"),array("Nome"=>"Pedro Oliveira","Idade"=>"42", "Cidade"=>"Belo Horizonte"),array("Nome"=>"Ana Souza","Idade"=>"30", "Cidade"=>"Salvador"));



foreach($clientes as $dados){
    echo "Nome: [" .$dados["Nome"]. "]<br>";
    echo "Idade: [".$dados["Idade"]. "]<br>";
    echo "Cidade: [".$dados["Cidade"]. "]<br><br>";
    
}



?>

</body>
</html>