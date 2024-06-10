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
    $fatorado = 1;

    for ($fator = 1; $fator <= $fat; $fator++)
        $fatorado *= $fator;
    



    //echo 'O fatorial de ' .$fat. '! = ' .$fat. '*' .$fator .'\n , =' .$fatorado .'\n';
    
    //for ($fator = ($fat-1); $fator >= 0; $fator--) {
    
    //echo $fat . '! ' . $fat . ' * ' . $fator .'='.  "  \n " ;
    // }
    

    //for ($i = $fat;$fator <= $fat;$fator++){
    // $fatorado = $fator*($fat-1);
    // echo $fat. '! = ' .$fatorado;
//}
    
    // echo $fat . '! ' . $fat . ' * ' . $fator .'='.  "  \n " ;
    
    /* Inicializa a variável fatorial
   $fatorial = 1;

   // Loop for para calcular o fatorial
   for ($fator = 1; $fator <= $fat; $fator++) {
       $fatorial *= $i;
   }

   // Exibe o resultado
   

   */

    ?>

<textarea name="texto" id="" cols="5" ><?php echo $fatorado;  ?></textarea>


</body>

</html>