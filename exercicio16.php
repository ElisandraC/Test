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
    /*As maçãs custam R$ 1,30 cada se forem compradas menos 
    de uma dúzia, e R$ 1,00 se forem compradas pelo menos 12. 
    Escreva um programa que leia o número de maçãs compradas, 
    calcule e escreva o custo total da compra.
    
    }*/
    
    /*$maca=1.30;
    $macaduzia=1.00;
    $quantidade=5;
    $total;
    if ($quantidade <=12){
        echo "$quantidade *$maca=$total  o total é igual ";
    }elseif($quantidade*$macaduzia){
    echo "$quantidade *$macaduzia=$total o total é igual  ";
    }*/
    
    /*$quantidade=15;
    $total=$preco*$quantidade;
    if($quantidade<=12){
        echo $quantidade*$preco=1.00;
    }elseif ($quantidade*$preco=1.30){
            echo"o total é: $total";
        }*/

    $quantidade=7;
    $preco1=1.00;
    $preco2=1.30;
    $total1=$quantidade*$preco1;
    $total2=$quantidade*$preco2;
    if ($quantidade>=12){
        echo "O custo total da compra de maçãs é: R$ $total1";
    }elseif($quantidade<12){
       echo "O custo total da compra de maçãs é: R$ $total2";

    }

    
    ?>
</body>
</html>