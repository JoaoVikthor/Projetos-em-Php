<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fatoração</title>
</head>

<body>

    <h1>Calculadora de Fatoração</h1>

    <form action="fatorar.php" method="get">
        <input type="number" min="0" required name="fator" id="" placeholder="Inteiros e Não Negativos">
        <input type="submit" name="" value="Calcular" id="">
    </form>
    <br>
    <?php

    $fat = $_GET['fator'];
    $fatorado = $fat;

    echo " O fatorial de   $fat  ! = $fat  ";
    for ($i = $fat - 1; $i >= 1; $i--) {
        $fatorado = ($fatorado * ($i));
        echo " * $i "; 
    }




    echo " = $fatorado";

    ?>

    <textarea name="texto" id="" cols="5"><?php echo $fatorado; ?></textarea>


</body>

</html>