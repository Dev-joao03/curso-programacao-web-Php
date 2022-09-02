<?php
                               /* Funções Matemáticas */
    
    $a = 10;
    $b = 5;
    $resultado = $a + $b;
    $resultado = $a - $b;
    $resultado = $a * $b;
    $resultado = $a / $b;
//----------------------------------------------------------------
    echo pi(); // mostra o valor de pi
    echo sqrt(81); // gera o resultado da raiz quadrada do numero dentro do ()
    echo rand(); // gera um número aleatório
//----------------------------------------------------------------
    $numeros = [1,10,40,5000,-20,15];
    echo min($numeros); // mostra o menor numero da variavel
    echo max($numeros); // mostra o maior numero da variavel
//----------------------------------------------------------------
    $numero = 10.50;
    echo round($numero); // serve para arredondar o numero (10.50 pra cima ele arredonda para 11, 10.50 pra baixo ele arredonda para 10)
?>