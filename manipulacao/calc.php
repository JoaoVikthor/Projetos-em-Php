<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Manipulação de Array</title>
</head>

<body>
    <h1>Manipulação de Array</h1>

   
    </form>


    <?php


    $numeros = [
        $n1 = $_GET['number1'],
        $n2 = $_GET['number2'],
        $n3 = $_GET['number3'],
        $n4 = $_GET['number4'],
        $n5 = $_GET['number5'],
        $n6 = $_GET['number6'],
        $n7 = $_GET['number7'],
        $n8 = $_GET['number8'],
        $n9 = $_GET['number9'],
        $n10 = $_GET['number10'],
    ];

    echo "Soma = " . array_sum($numeros) . "\n <br>";
    echo "Maior = " . max($numeros) . "\n <br>";
    echo "Maior =" . min($numeros) . "\n <br>";


    echo "<p>Numeros do array</p>";

    foreach ($numeros as $k) {
        echo ". $k <br>.";
    }

    sort($numeros, SORT_NUMERIC);
    $numeros = array_unique($numeros);

    echo "<p> Ordem crescente sem os numeros repetidos </p>";

    foreach ($numeros as $chave) {
        echo " $chave\n <br>";
    }


    ?>



</body>

</html>