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
    //Ler um valor e escrever se é positivo ou negativo 
    //(considere o valor zero como positivo).
    $num=-5;
    if($num < 0){
        echo "O número $num é negativo ";
    }elseif ($num >=0){
        echo " O número $num é positivo";
    }
    ?>
</body>
</html>