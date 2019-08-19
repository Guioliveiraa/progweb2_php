<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 1 </title>
    </head>
    <body>
        <?php
        //phpiservidornfo(); testar o servidor
            echo "<center>hello world<br>";
            $n1=5;
            $n2=10;
            $nome="guilherme";
            echo"o valor de n1 é:$n1<br>";
            echo"o valor de n2 é:$n2<br>";
            echo"o nome é: $nome<br>";
            $soma=$n1+$n2;
            echo"a soma de n1 e n2 é: $soma<br>";
            $sub=$n2-$n1;
            echo"a subtração de n1 e n2 é: $sub<br>";
            $multi=$n1*$n2;
            $div=$n1/$n2;
            echo"a multiplicação entre n1 e n2 é: $multi<br>";
            echo"a divisão entre n1 e n2 é: $div<br>";
            $resto=$n1%$n2;
            echo" o resto entre n1 e n2 é: $resto<br>";
            echo"a soma de n1 e n2 é: ".($n1+$n2)."<br>";
            
            $a=$_GET["x"];
            $b=$_GET["y"];
            $c=$_GET["z"];
            echo"o valor de a é:$a<br>";
            echo"o valor de b é:$b<br>";
            echo"o valor de c é:$c<br>";
            //modulo ou valor absoluto abs()
            echo"o valor absoluto de c é: ".abs($c)."<br>";
            echo"a soma de a, b e c é: ".($a+$b+$c)."<br>";
            //raiz quadrada sqrt($var, n)
            echo"a raiz quadrada de b é: ".sqrt($b)."<br>";
            //formatar numero format_number($var, n)
            echo"a raiz quadrada de b é: ".number_format(sqrt($b),3)."<br>";
            //potencia pow()
            echo"o quadrado de b é: ".pow($b,2)."<br>";
        ?>
    </body>
</html>
