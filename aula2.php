<?php

//abs-valor absoluto, tranforma numero neg em pos

$a=$_GET["x"];
$b=$_GET["y"];

echo"o valor absoluto de a eh:".abs($a);

echo"<br>o valor de b eh:".($b);

//raiz quadrada - sqrt();

echo"<br>A raiz quadrada de b eh:".sqrt($b);

//number_format() - formataçao de casas decimais

echo"<br>o valor de b eh:".number_format($b,2);

//pow() - potencia 

echo"<br> o valor de b eh:".pow($b, 3);

 //round()-arredondar os valores
 
echo"<br>o valor arredondado de $a eh:".round($a);//matematicamente

echo"<br>o valor arredondado de $a eh:".ceil($a);//forçar pra cima

echo"<br>o valor arredondado de $a eh:".floor($a);//forçar pra baixo

//intval()- pegar so o valor inteiro da variavel

echo"<br>o valor inteiro de a eh:".intval($a);

//operadores de incremento:pre incremento e pos incremento
//operadores de decremento(--)

$c=20;
echo"<br>o valor de $c eh:".++$c;//pre
$c=20;
echo"<br>o valor de $c eh:".$c++;//pos
echo"<br>".$c;

$c=20;
echo"<br>o valor de $c eh:".--$c;//pre
$c=20;
echo"<br>o valor de $c eh:".$c--;//pos
echo"<br>".$c;

//op de atribuiçao

$valor=20;
$valor+=30;

echo"<br> a soma dos valores eh:".$valor;

//op ternario = condiçao?verdadeiro:false(if e else)

$n1=$_GET["a"];
$n2=$_GET["b"];
$maior=$n1>$n2?($n1+$n2):($n2-$n1);
echo"<br> o valor eh:$maior";

//op igual ==


$w=3;
$m="3";
$result=($w==$m)?"sim":"nao";

echo"<br>o valor eh igual:".$result;

//op igual e identico === dado e formato igual

$w=3;
$m="3";
$result=($w===$m)?"sim":"nao";

echo"<br>o valor eh igual:".$result;

//op logicos - &&, ||, !

