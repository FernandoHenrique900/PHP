<?php

require __DIR__ . "/funcao.php";

$lista = array('Camaro', 'Gol', 'Corolla', 'Ferrari', 'Mustang');
$arrayOrganizado = ordenaString($lista);
echo "Lista ordenada:";
//Print_r usado para um "print" de fácil leitura humana
print_r($arrayOrganizado);

?>