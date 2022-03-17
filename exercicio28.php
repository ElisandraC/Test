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
   //Ler 3 valores (considere que não serão informados valores iguais) e escrever o maior deles.
   $v1=110;
   $v2=255;
   $v3=30;

   if ($v1> $v2 && $v1>$v3){
       echo"O maior valor é: $v1";
   }elseif($v2> $v1 && $v2> $v3){
       echo" O maior valor é $v2";
   }elseif($v3> $v1 &&$v3> $v2){
       echo"o maior valor é $v3";
   }
   ?> 
</body>
</html>