<?php 
/*
Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
*/

function operacao (int $a, int $b, string $operacao){
    if ($operacao == "+"){
        return $a + $b;
    }elseif ($operacao == "*") {
        return $a * $b;
    }elseif ($operacao == "/") {
        if ($b == 0){
            return "Erro: Divisão por zero!\n";
        }
        return $a / $b;
    }elseif($operacao == "-"){
        if($a<$b){
            return "$b não pode ser maior que $a!\n";
        }
        return $a - $b;
    }else {
        return "Operação Inválida\n";
    }
}

$resultado = operacao(3, 4,"-");

echo "$resultado .\n";
?>