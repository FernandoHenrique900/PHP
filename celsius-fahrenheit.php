<?php
//Programa para converter Celsius para Fahrenheit

$celsius = $argv[1] ?? 0; 
$fahrenheit = ($celsius * 1.8) + 32; //formula para converter Celsius para Fahrenheit

echo "A temperatura em Fahrenheit é: $fahrenheit";