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
    /*48) Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno, calcule e imprima a
    média (simples) desse aluno. Só devem ser aceitos valores válidos durante a leitura (0 a 10) para cada
    nota.*/
     $n1=12;
     $n2=11;

     while($n1 < 0  || $n1 > 10)
{
  // digite de novo
     $n1 = 2;
}



while($n2 < 0  || $n2 > 10)
{
  // digite de novo
    $n2 = 10;
}

     $soma=$n1+$n2;
     $media=$soma/2;

     echo"A soma é = ". $soma. "<p> A média ".$media;


      
     /*while($n1<0||$n1>10){
    
     }if(n1 < 0 || $n1 > 10) {
        
        echo "$n1";
     }else {
        
       echo"Nota inválida";
     }
     while($n2<0||$n2>10);
    
     if($n2 < 0 || $n2 > 10) {
        
       echo "$n2";
     } else {
        
       echo"Nota inválida";
     }
    
         echo "Média semestral =  $media";
    */
    ?>
</body>
</html>