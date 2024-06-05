<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    $numero = $_GET["n"];
    echo "O número digitado foi $numero <br>";

    $operacao = $_GET["o"];
    echo " O tipo de Operação escolido foi: $operacao <br>";
    if (($operacao == "A") || ($operacao == "a")) {
        echo " A operação escolhida foi Adição", "<br>";
        echo "$numero + 1 = ", ($numero + 1), "<br>";
        echo "$numero + 2 = ", ($numero + 2), "<br>";
        echo "$numero + 3 = ", ($numero + 3), "<br>";
        echo "$numero + 4 = ", ($numero + 4), "<br>";
        echo "$numero + 5 = ", ($numero + 5), "<br>";
        echo "$numero + 6 = ", ($numero + 6), "<br>";
        echo "$numero + 7 = ", ($numero + 7), "<br>";
        echo "$numero + 8 = ", ($numero + 8), "<br>";
        echo "$numero + 9 = ", ($numero + 9), "<br>";
        echo "$numero + 10 = ", ($numero + 10), "<br>";

    }

    if (($operacao == "S") || ($operacao == "s")) {
        echo " A operação escolhida foi Subtração", "<br>";
        echo "$numero - 1 = ", ($numero - 1), "<br>";
        echo "$numero - 2 = ", ($numero - 2), "<br>";
        echo "$numero - 3 = ", ($numero - 3), "<br>";
        echo "$numero - 4 = ", ($numero - 4), "<br>";
        echo "$numero - 5 = ", ($numero - 5), "<br>";
        echo "$numero - 6 = ", ($numero - 6), "<br>";
        echo "$numero - 7 = ", ($numero - 7), "<br>";
        echo "$numero - 8 = ", ($numero - 8), "<br>";
        echo "$numero - 9 = ", ($numero - 9), "<br>";
        echo "$numero - 10 = ", ($numero - 10), "<br>";
    }
    if (($operacao == "M") || ($operacao == "m")) {
        echo " A operação escolhida foi Multiplicação", "<br>";
        echo "$numero * 1 = ", ($numero * 1), "<br>";
        echo "$numero * 2 = ", ($numero * 2), "<br>";
        echo "$numero * 3 = ", ($numero * 3), "<br>";
        echo "$numero * 4 = ", ($numero * 4), "<br>";
        echo "$numero * 5 = ", ($numero * 5), "<br>";
        echo "$numero * 6 = ", ($numero * 6), "<br>";
        echo "$numero * 7 = ", ($numero * 7), "<br>";
        echo "$numero * 8 = ", ($numero * 8), "<br>";
        echo "$numero * 9 = ", ($numero * 9), "<br>";
        echo "$numero * 10 = ", ($numero * 10), "<br>";
    }

    if (($operacao == "D") || ($operacao == "d")) {
        echo " A operação escolhida foi Divisão", "<br>";
        echo "", ($numero * 2), " / $numero  = ", ($numero * 2 / $numero), "<br>";
        echo "", ($numero * 3), " / $numero  = ", ($numero * 3 / $numero), "<br>";
        echo "", ($numero * 4), " / $numero  = ", ($numero * 4 / $numero), "<br>";
        echo "", ($numero * 5), " / $numero  = ", ($numero * 5 / $numero), "<br>";
        echo "", ($numero * 6), " / $numero  = ", ($numero * 6 / $numero), "<br>";
        echo "", ($numero * 7), " / $numero  = ", ($numero * 7 / $numero), "<br>";
        echo "", ($numero * 8), " / $numero  = ", ($numero * 8 / $numero), "<br>";
        echo "", ($numero * 9), " / $numero  = ", ($numero * 9 / $numero), "<br>";
        echo "", ($numero * 10), " / $numero  = ", ($numero * 10 / $numero), "<br>";




    }
    
    <!--  
            <input name="operacao" size="7px" placeholder="Operacâo">
            <datalist type="number" name="operacao">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </datalist>
            -->
        

    ?>

</body>

</html>