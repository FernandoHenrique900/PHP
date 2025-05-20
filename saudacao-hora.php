<?php
//Programa para saudar o usuário de acordo com a hora do dia

$hora = date_default_timezone_set('America/Sao_Paulo');
echo date('H');

switch ($hora ) {
    case $hora >= 6 && $hora < 12:
        echo "\n Bom dia!";
        break;
    case $hora >= 12 && $hora < 18:
        echo "\n Boa tarde!";
        break;
    case $hora > 18 && $hora <= 24:
        echo "\n Boa noite!";
        break;
    default:
        echo "\n Madrugada!";
}

?>  