<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>Numeros Primos</title>
</head>

<body>

    <h1> Numeros Primos </h1>

    <form action="primo.php" method="get"><br><br>
        <br><br><input type="number" min="0" required name="primo" id="" placeholder="Digite um Número Valido">
        <input type="submit" name="" value="Calcular" id="">
    </form>
    <br>
    <?php

    $primo = $_GET['primo'];
    $divisor = 0;

    for ($contador = 2; $contador < $primo; $contador++)
        if ($primo % $contador == 0) {
            $divisor++;
        }

 if($divisor){
    echo " O número digitado $primo, Não e Primo, possuí outros divisores além de 1 e ele mesmo.";
    } else{
        echo "É Primo.";
    }
    

    ?>

    


</body>

</html>