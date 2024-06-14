<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>

    <?php
                             //Não deu tempo de eliminar as arestas ...
    
//Variaveis 1500lumens

    $numero01 = $_GET["campo01"];
    $numero02 = $_GET["campo02"];
    

//Operações

$operacao=isset($_GET["oper"]) ? $_GET["oper"] :"0";
//Soma
if  ($operacao== "+"){
    echo''.($numero01). " + $numero02 = " .($numero01+$numero02), '<br>' ;
}
//Subtração
if  ($operacao== "-"){
    echo''.($numero01). " - $numero02 = " .($numero01-$numero02), '<br>' ;
}
//Multiplicação
if  ($operacao== "*"){
    echo''.($numero01). " * $numero02 = " .($numero01*$numero02), '<br>' ;
}
//Divisão
if  ($operacao== "/"){
    echo''.($numero01). " / $numero02 = " .($numero01/$numero02), '<br>' ;
}
//Valor Nulo
if ($operacao==0){
    echo 'Valor Nulo, Verifique Novamente se Digitou nos Campos Corretamente';
}



    ?>

</body>

</html>