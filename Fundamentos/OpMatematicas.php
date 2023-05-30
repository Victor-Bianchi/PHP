<?php

    /**
     * +$a: conversão de $a para Int ou Float
     * -$a: NEGAÇÃO, o oposto de $a
     */

    $soma = 5 + 5;
    $subtracao = 10 - 5;
    $divisao = 10 / 2;
    $multiplicacao = 10 * 2;
    $resto = 10 % 2;
    $exponencial = 10 ** 2;

    $expressao = 10 + 50 + 90 * 2; # a multiplicação tem prioridade
    $expressao = (10 + 90) - 100; # os parênteses tem prioridade

    $subtotal = $soma + $subtracao; # 15
    echo $subtotal;
?>