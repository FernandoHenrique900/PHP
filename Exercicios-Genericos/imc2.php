<?php  
/*

Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
*/
function imc(float $peso, float $altura ) {
    $imc = $peso /($altura * $altura);
    if ($imc >=19.5 && $imc < 24.9){
        return "Peso saudável";
    }else {
        return "Peso não saudável";
    }
}

$resultadoImc = imc(100.3,1.80); 

echo "Estou com imc de $resultadoImc!\n";

?>