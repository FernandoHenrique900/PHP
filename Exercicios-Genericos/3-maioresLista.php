
#Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.


<?php

$lista = [10, 20, 30, 40, 50, 60, 70, 80, 90];
rsort($lista); //ordena decrescente
echo "Os três maiores valores são:$lista[0], $lista[1], $lista[2] \n";
?>