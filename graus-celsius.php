<?php
/*
Crie uma função em PHP que converta graus celsius para Fahrenheit.
*/

function converterCelsiusParaFahrenheit ($celsius): float {
    return $f = $celsius*(9/5)+32;
}

$celsius = 10; // Exemplo de temperatura em graus Celsius
// Chamada da função para converter Celsius para Fahrenheit
// e exibe o resultado
$f = converterCelsiusParaFahrenheit($celsius);
echo "$celsius ºC equivalem a $f º Fahrenheit\n";
?>