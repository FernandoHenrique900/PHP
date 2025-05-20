<?php
/*
Crie uma função em PHP que converta graus celsius para Fahrenheit.
*/

function converterCelsiusParaFahrenheit ($celsius): float {
    return $f = ($celsius*(9/5))+32;
}

$celsius = 32;
$f = converterCelsiusParaFahrenheit(32);
echo "$celsius ºC equivalem a $f º Fahrenheit\n";
?>