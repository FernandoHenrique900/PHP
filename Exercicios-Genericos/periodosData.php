<?php
    $inicio = new Datetime("2022-11-21"); //data de inicio
    $intervalo = new DateInterval("P4Y"); //representa 4 anos
    $fim = new Datetime("2042-11-22");
    $periodo = new DatePeriod($inicio, $intervalo, $fim); //Qtd de recorrencias

    foreach ($periodo as $data) {   // loop
        echo $data->format('d/m/Y') .PHP_EOL;
    }