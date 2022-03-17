<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Ler dois valores (considere que não serão lidos 
    //valores iguais) e escrevê-los em ordem crescente

    $valor1=3;
    $valor2=23;
    if($valor1>$valor2){
        echo"A ordem crescente é : $valor1 e $valor2";
    }elseif($valor2>$valor1){
        echo"A ordem crescente é : $valor2 e $valor1";

    }
    
    ?>
</body>
</html>