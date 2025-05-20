<?php
echo "Programa para verificar se um ano é bissexto\n";
$ano = $argv[1] ?? 2024;
//% é o operador de módulo, que retorna o resto da divisão
if ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)) {//verifica se o ano é divisível por 4 e se não é divisível por 100 ou é divisível por 400!
    echo "$ano é um ano bissexto";
} else {
    echo "$ano não é um ano bissexto";//se não for bissexto!
}
?>